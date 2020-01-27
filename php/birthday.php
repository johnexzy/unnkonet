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
    $nowd = date('d') ;
    $nowm = date('m') ;
    $datetoday = ($nowd."/".$nowm);
    include_once 'config.php';
    $query = "SELECT * FROM `birthday` WHERE bday = '$datetoday'";
    $stmt = $DBcon->prepare( $query );
    $stmt->execute();
    $num = 0;
    $string = "DATE: <b style='color:#000;text-transform:uppercase'>".FormMonth($nowm)." ".$nowd."</b><hr>";
    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                $string .= "<li><div class='c5' id='my-node' style='margin:0 20px 10px 0;".
                            "background: url(images/birthday/bgbd.jpg);".
                            "background-size:100% 400px; min-height:400px;".
                            " background-repeat:no-repeat'><img src='$row[avatar]'".
                            " class='' style='width:44%; height:148px; position:relative;".
                            " left:25%; top:75px; border-bottom-right-radius:0px; border-bottom-left-radius:0px' alt=''><div style='text-align:center'><i style=' position: relative;".
                            " color:#ffffff82;left:0%; z-index:1000; top:82px;".
                            " font-family: Arial;font-size:20px;'>".
                            strtoupper($row["FULLNAME"])."</i></div></div></li>";
            
    }
    
    echo $string;
?>