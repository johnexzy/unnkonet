<?php
	$_string = "";
	include_once 'config.php';
	$query = "SELECT * FROM `pricing`  \n" . " ORDER BY `id` ASC";
	$stmt = $DBcon->prepare( $query );
	$stmt->execute();
	
	while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
        if ("$row[packagename]" == "Giga Package" || "$row[packagename]" == "Mini Package") {
            $_string .= "<div class='plan' id='most-popular'>
                            <h3>$row[packagename]<span>N$row[value]</span></h3>
                            <a class='signup' href='https://api.whatsapp.com/send?phone=2348165013911&text=Hello%20Advertiser%20I%20would%20like%20to%20subscribe%20for%20your%20package%20for%20a%20period%20of%20$row[duration]%20days%20'>Sign up</a>
                            <ul>
                                <li><b>FOR </b>$row[duration]days</li>
                            </ul>
                        </div>";
        }else{
            if ("$row[packagename]" == "Birthday Shout Out") {
                $_string .= "<div class='plan' id='most-popular'>
                            <h3>$row[packagename]<span>FREE</span></h3>
                            <a class='signup' href='https://api.whatsapp.com/send?phone=2348165013911&text=Hello%20Advertiser%20I%20would%20like%20to%20subscribe%20for%20my%20BIRTHDAY%20shout%20a%20out%20below%20are%20my%20details'>Sign up</a>
                            <ul>
                                <li><b>FOR </b>$row[duration]day</li>
                            </ul>
                        </div>";
            }else{
                $_string .= "<div class='plan' style='margin-top:25px'>
                                <h3>$row[packagename]<span>N$row[value]</span></h3>
                                <a class='signup' href='https://api.whatsapp.com/send?phone=2348165013911&text=Hello%20Advertiser%20I%20would%20like%20to%20subscribe%20for%20your%20package%20for%20a%20period%20of%20$row[duration]%20days%20'>Sign up</a>
                                <ul>
                                    <li><b>FOR: </b>$row[duration]days</li>
                                </ul>
                            </div>";
            }
        }
    }
	$_string .= "";
	echo $_string;
?>
