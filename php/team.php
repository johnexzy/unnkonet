<?php
function _getTeam(){
    $_string = "";
    include 'config.php';
    $query = "SELECT * FROM `admin`";
    $stmt = $DBcon->prepare( $query );
    $stmt->execute();

    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
    if ("$row[email]" == NULL || "$row[office]" == NULL) {
        continue;
    }
    $_string .= "<div class='c3' style='text-align:center;'>".
                    "<div class='shadowundertop'>".
                    "</div>".
                    "<div style='text-align:center'><img src=' admin/$row[avatar]' class='imgOpa teamimage' alt='' id='img-handle'>".
                    "</div>".
                    "<div class='teamdescription'>".
                        "<h1><b>$row[firstname] $row[lastname]</b></h1>".

                        "<p class='teamdescription'><label for=''></label>POST: <b>$row[office]</b></p>".
                        "<span class='hirefor'><label for=''>Email: <b>$row[email]</b></label>Mobile: <b>$row[mobile]</b></span><hr>".
                    "</div>".
                "</div>";
    }
        
	$_string .= "";
    return $_string;
}
//echo _getTeam();
