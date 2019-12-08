<?php
	 
    class checkDate
	{
		public function getDay($str){
			return substr($str, 6,8);
		}
		public function getMonth($str){
			return intval(substr($str, 4,-2));
		}
		public function getYear($str){
			return intval(substr($str, 0,4));
		}
		public function checkDay($int){
			$nowd = intval(date('d'));
			$nowm = intval(date('m'));
			$nowy = intval(date('Y')) ;

			if ($nowy > $this->getYear($int)) {
				$yearsAgo = ($nowy - $this->getYear($int) == 1) ? "A Year Ago" : ($nowy - $this->getYear($int))." Years Ago" ;
				return $yearsAgo;
			}
			else{
				if ($nowm > $this->getMonth($int)) {
					$monthsAgo = ($nowm - $this->getMonth($int) == 1) ? "A month Ago" : ($nowm - $this->getMonth($int))." months Ago" ;
					return $monthsAgo;
				}
				else{
					if ($nowd > $this->getDay($int)) {
						$daysAgo = ($nowd - $this->getDay($int) == 1) ? "Yesterday" : ($nowd - $this->getDay($int))." Days Ago" ;
						return $daysAgo;
					}
					else{
						return "Today";
					}
				}
			}

                    
		}

	}
	
	function getData($cat, $Currentid=0)
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
		// $nowd = date('d') ;
		// $nowm = date('m') ;
		// $nowy = date('Y') ;
		// $datetoday = ($nowy.$nowm.$nowd) * 1;
		$query = "SELECT * FROM news WHERE category = '$cat' ORDER BY `id` DESC";
		$stmt = $DBcon->prepare( $query);
		$stmt->execute();
		$len = 0;
		$showupdate = "<div class='nopadding noborder' style='font-size:20px; padding:20px'>" ;
		while($row=$stmt->fetch(PDO::FETCH_BOTH)){ //FETCH_BOTH indexes both the Colunmn name and Column Number
			$len += 1;
			
			// if($len == 4) {
			// 	$showupdate .= "<a href='views/news/view.php?id=$row[id]' style='width:100%; background:#3b5598; color:#fbfbfb;font-family:cursive' id='news'>".'<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

			// 	<ins class="adsbygoogle"
				
			// 		 style="display:block"
				
			// 		 data-ad-format="fluid"
				
			// 		 data-ad-layout-key="-7u+eo+1+3-3"
				
			// 		 data-ad-client="ca-pub-4292927418184836"
				
			// 		 data-ad-slot="5625769534"></ins>
				
			// 	<script>
				
			// 		 (adsbygoogle = window.adsbygoogle || []).push({});
				
			// 	</script></a>';
			// }
			$newsinfo = new checkDate;
			if ($row[0] == $Currentid) {
				continue;
			}
			$showupdate .= "<i class='icon-calendar'></i><b style='font-size:14px'> : ".$newsinfo->checkDay($row['Dateofpost'])."</b><p><i class='icon-external-link' style='font-size:13px'></i>
								&nbsp;<a href='views/news/view.php?id=$row[id]' style='width:100%; background:#3b5598; color:#fbfbfb;font-family:Arial' id='news'>
								$row[headline]</a></p>
								
								";
							

		}
		//$showupdate .= "<div class='newscale link' style='font-size:14px'><i class='icon-external-link'></i>&nbsp;<a href='timeline.php'>view more news</a></div>";
		$showupdate .= "</div>";
		return $showupdate;
	}
	 //echo(getData("NEWS"));
	// echo(getData("SPORTS"));
	// echo(getData("CAMPUS"));
?>
