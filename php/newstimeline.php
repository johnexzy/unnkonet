<?php
    function FormMonth($var)
    {
        
        switch ($var) {
            case '1':
                $month = "January";
                break;
            case '2':
                $month = "February";
                break;
            case '3':
                $month = "March";
                break;
            case '4':
                $month = "April";
                break;
            case '5':
                $month = "May";
                break;
            case '6':
                $month = "June";
                break;
            case '7':
                $month = "July";
                break;
            case '8':
                $month = "August";
                break;
            case '9':
                $month = "September";
                break;
            case '10':
                $month = "October";
                break;
            case '11':
                $month = "November";
                break;  
            case '12':
                $month = "December";
                break;   
            default:
                $month = date('m');
                break;
        }
        return $month;
    }
    function getData()
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
        $nowm = date('m') * 1;
        $nowy = date('Y') ;
        $name = "";
        $comm = "";
        $tag =  "";
        $postcom = "";
        $datetoday = ($nowy.$nowm.$nowd) * 1;
        $query = "SELECT * FROM news \n" . " ORDER BY `id` DESC";
        $stmt = $DBcon->prepare( $query);
        $stmt->execute();
        $showupdate = "";
        //$in = $nowm;
        for ($in= $nowm; $in > 0; $in--) {
            
        //while($in > 0){
            $showupdate .= '<div class="timelineMajor">'. 
                            '<h2 class="timelineMajorMarker">'.
                                '<span>'.FormMonth($in).', '.$nowy.'</span>'.
                            '</h2>' ;
            
            while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                if (substr("$row[Dateofpost]", 4,-2) * 1 == $in) {
                    $myid = rand(1, 123456678);
                    $showupdate .='<dl class="timelineMinor">';
                    $showupdate .= "<dt id='".substr("$row[headline]", 0,2)."'><a>$row[headline]</a></dt>".
                                    "<dd style='display: none;' class='timelineEvent' id='".substr("$row[headline]", 0,2)."EX'><h3>".FormMonth($in)." ".
                                    substr("$row[Dateofpost]", 6,8).", ".substr("$row[Dateofpost]", 0,4).
                                    "</h3><h1 class='maintitle text-center' >".
                                    "<span style='text-transform:uppercase;'>$row[headline]:</span>".
                                    "</h1><br><div class='row'><div class='c6'><div class='flexslider'>".
                                    "<ul class='slides'><li><img src='admin/homepages/$row[uploads]' alt='hello'>".
                                    "</li></ul></div></div><!-- begin description area -->".
                                    "<div class='c6' style='background:#fffffe; border:1px ".
                                    "solid gold;border-radius:2px;padding-bottom:5px'><p>$row[body]</p>".
                                    "<br><div style='color: #000; border-top: 1px solid'>".
                                    "<i>DATE POSTED</i> : ".
                                    substr("$row[Dateofpost]", 0,4).'-'.
                                    substr("$row[Dateofpost]", 4,-2).'-'.
                                    substr("$row[Dateofpost]", 6,8).
                                    "<br><i>Client</i> : UNNKONET<br></div></div><!-- end description area -->";
                    $querycomment = "SELECT * FROM comment WHERE tag = '$row[tag]' \n" . " ORDER BY `id` DESC";
                    $st = $DBcon->prepare($querycomment);
                    $st->execute();
                    $showupdate .= "";
                    $showupdate .= "<div class='c12 space-top'><h1 class='maintitle'><span><i class='icon-envelope-alt'></i>COMMENTS</span></h1>";
                    $showupdate .= "<div class='c8' id='disp'>";
                    $showupdate .= "<table>";
                    $showupdate .= "<tr>";
                    $showupdate .= "<th>Name</th>";
                    $showupdate .= "<th>Comments</th>";
                    $showupdate .= "</tr>";
                    
                    while($corow=$st->fetch(PDO::FETCH_ASSOC)){
                        $showupdate .= "<tr>";
                        $showupdate .= "<td>$corow[names]</td>";
                        $showupdate .= "<td>$corow[comments]</td>";
                        $showupdate .= "</tr>";
                    }
                    $showupdate .= "</table>";
                    $showupdate .= "</div>";
                    if (isset($_GET[substr("$row[body]", 1, 4)])) {
                            
                            $name .= htmlspecialchars($_GET[substr("$row[body]", 1, 2)]);
                            $comm .= htmlspecialchars($_GET[substr("$row[body]", 1, 3)]);
                            $tag .= "$row[tag]";
                            $postcom .= "INSERT INTO `comment` (`tag`, `names`, `comments`, `Timeat`) VALUES ('$tag', '$name', '$comm', CURRENT_TIMESTAMP)";
                            if ($DBconn->query($postcom) === true) {
                                echo "<script>
                                function redict(){
                                    window.location='/'
                                }
                                setTimeout(redict(), 10000)
                                </script>";
                                }
                                else {
                                    echo "<div class'alert alert-danger'><span class='pe-7s-info'></span> &nbsp;Oops!! Error while Commenting </div>";
                                }
                    header("location: timeline.php");
                    }
                    $showupdate .= "<div class='wrapcontact'><form action='' method='GET'><div class='form'><div class='c4 right'><h1 class='maintitle'><span><i class='icon-envelope-alt'></i>DROP YOUR COMMENT</span></h1><label>Name</label><input value='' type='text' name='".substr("$row[body]", 1, 2)."' id='names'><label>Message</label><textarea name='".substr("$row[body]", 1, 3)."' class='ctextarea' rows='9' id='comments'></textarea><input type='hidden' value='$row[tag]' name='".substr("$row[body]", 1, 7)."'><input type='submit' class='button' style='font-size:12px;' name='".substr("$row[body]", 1, 4)."' value='SUBMIT'></div></form></div></div></div><br><br><hr style='color:#000;font-size:30px' size='10'><br><br><br>";
                    $showupdate .= "<br class='clear'></dd>";
                }
            }
            //$in--;
        }    
		$showupdate .= "</dl>";
		$showupdate .= "</div>";
		return $showupdate;
    }
?>
