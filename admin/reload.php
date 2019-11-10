<?php
    //$DBcon = new PDO("mysql:host=sql207.ultimatefreehost.in;dbname=ltm_23130795_unnkonet", "ltm_23130795", "1234567890");
    $query = "SELECT * FROM showcase";
    $stmt = $DBcon->prepare( $query );
    $stmt->execute();
    $display_string =  "<div class='flexslider Main' style='margin: 0px 0 0 0; border: 0;border-radius: 0; background: transparent; height: 420px; width: 100%'>";
    $display_string .= "<ul class='slides' style='position: relative; margin: 0px 0 0 0;'>";
    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
        $display_string .= "<li class='face'>";
        $display_string .= "<div class='c5 face-head'>";
        $display_string .= "<h2>$row[header]</h2><br><br>";
        $display_string .= "<p>$row[msg]</p><br> <br>";
        $display_string .= "<a href='$row[link]' class='face-link' style='width:192px;'>read more</a>";
        $display_string .= "</div>";
        $display_string .= "<div class='face-img'>";
        $display_string .= "<img  src='$row[image]' style='' alt='' >";
        $display_string .= "</div>";
        $display_string .= "</li>";

    }
    $display_string .= "</ul>";
    $display_string .= "</div>";
    echo $display_string;
?>