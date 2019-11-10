<?php
	function getData($cat)
	{
		include "config.php";
		$DBhost = $sever;
		$DBuser = $username;
		$DBpass = $dbpass;
		$DBname = $database;
		
		$DBconn = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);
		if ($DBconn->connect_errno) {
			die("ERROR : -> ".$DBconn->connect_error);
		}
		$nowd = date('d') ;
		$nowm = date('m') ;
		$nowy = date('Y') ;
		$name = "";
		$comm = "";
		$tag =  "";
		$postcom = "";
		$datetoday = ($nowy.$nowm.$nowd) * 1;
		$query = "SELECT * FROM news WHERE category = '$cat' \n" . " ORDER BY `id` DESC";
		$stmt = $DBcon->prepare( $query);
		$stmt->execute();
		$len = 0;
		$showupdate = "<dl class='faqs nopadding noborder'  id='news'>" ;
		while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
			$len += 1;
			if($len == 9){
				break;
			}
			$showupdate .= "<dt>$row[headline]<span id='more' class='icon-angle-down right'" .
							"style='font-size: 24px; background: gray; color: black'>".
							"</span></dt><dd style='display: none;'><h1 class='maintitle text-center' >".
							"<span style='text-transform:uppercase;'>$row[headline]:</span>".
							"</h1><br><div class='row'><div class='c12 grid' style='background:#fbfbfb; border:1px solid grey;border-radius:2px;padding:15px; margin-bottom:15px'><div class='c6'><div class='flexslider'>".
							"<ul class='slides'><li><img src='admin/homepages/$row[uploads]' alt='hello'>".
							"</li></ul></div></div><!-- begin description area -->".
							"<p>$row[body]</p>".
							"<br><div style='color: #000; border-top: 1px solid'>".
							"<i>DATE POSTED</i> : ".
							substr("$row[Dateofpost]", 0,4).'-'.
							substr("$row[Dateofpost]", 4,-2).'-'.
							substr("$row[Dateofpost]", 6,8).
							"<br><i>Writer</i> : <b style='cursor:pointer; text-transform:uppercase'><a href='team.php' target='_blank'>$row[Writer]</a></b><br></div></div><!-- end description area -->";
			$querycomment = "SELECT * FROM comment WHERE tag = '$row[tag]' \n" . " ORDER BY `id` DESC";
			$st = $DBcon->prepare($querycomment);
			$st->execute();
			$showupdate .= "";
			$showupdate .= "<div id='commentts' class='c8'>
								<h1 class='maintitle'><span><i class='icon-envelope-alt'></i>COMMENTS</span></h1>
								<ul>";
			while($corow=$st->fetch(PDO::FETCH_ASSOC)){
				$showupdate .="<li>
									<article>
									<header>
										<figure class='avatar'><img src='images/avatar.png' alt=''></figure>
										<address>
										By <a href='#'>$corow[names]</a>
										</address>
										<time>$corow[Timeat] </time>
									</header>
									<div class='comcont'>
										<p>$corow[comments]</p>
									</div>
									</article>
								</li>";
			}
			$showupdate .= "	</ul>
							</div>";
			if (isset($_GET[substr("$row[body]", 1, 4)])) {
					
					$name .= htmlspecialchars($_GET[substr("$row[body]", 1, 2)]);
					$comm .= htmlspecialchars($_GET[substr("$row[body]", 1, 3)]);
					$tag .= "$row[tag]";
					$postcom .= "INSERT INTO `comment` (`tag`, `names`, `comments`, `Timeat`) VALUES ('$tag', '$name', '$comm', CURRENT_TIMESTAMP)";
					if ($DBconn->query($postcom) === true) {
						echo "<script>
						function redict(){
							window.location='/www/unnkonet'
						}
						setTimeout(redict(), 10000)
						</script>";
						}
						else {
							echo "<div class'alert alert-danger'><span class='pe-7s-info'></span> &nbsp;Oops!! Error while Commenting </div>";
						}
			header("location: index.php");
			}
			$showupdate .= "<div class='wrapcontact'><form action='' method='GET'><div class='form'><div class='c4 right'><h1 class='maintitle'><span><i class='icon-envelope-alt'></i>DROP YOUR COMMENT</span></h1><label>Name</label><input value='' type='text' name='".substr("$row[body]", 1, 2)."' id='names'><label>Message</label><textarea name='".substr("$row[body]", 1, 3)."' class='ctextarea' rows='9' id='comments'></textarea><input type='hidden' value='$row[tag]' name='".substr("$row[body]", 1, 7)."'><input type='submit' class='button' style='font-size:12px;' name='".substr("$row[body]", 1, 4)."' value='SUBMIT'></div></form></div></div></div><br><br><hr style='color:#000;font-size:30px' size='10'><br><br><br>";
			$showupdate .= "</dd>";
		}
		$showupdate .= "<div class='newscale link'><i class='icon-external-link'></i>&nbsp;<a href='timeline.php'>view more news</a></div>";
		$showupdate .= "</dl>";
		return $showupdate;
	}
	// echo(getData("NEWS"));
	// echo(getData("SPORTS"));
	// echo(getData("CAMPUS"));
?>