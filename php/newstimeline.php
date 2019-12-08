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
        $in = $nowm;
            
            
            while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                // if ($in == 0) {
                //     break;
                // }
                $showupdate .= '<div class="timelineMajor">'. 
                            '<h2 class="timelineMajorMarker">'.
                                '<span>'.FormMonth($in).', '.$nowy.'</span>'.
                            '</h2>' ;
                if (substr("$row[Dateofpost]", 4,-2) * 1 == $in) {
                    $myid = rand(1, 123456678);
                    $showupdate .='<dl class="timelineMinor">';
                    $showupdate .= "<dt id='".substr("$row[headline]", 0,2)."'><a>$row[headline]</a></dt>";
                                    
                }
            $in--;}
            
         
		$showupdate .= "</dl>";
		$showupdate .= "</div>";
		return $showupdate;
    }
?>
