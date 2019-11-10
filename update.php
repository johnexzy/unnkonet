<?php
    $DBcon = new PDO("mysql:host=localhost;dbname=mysqli_login", "root", "");
    $query = "SELECT * FROM comment";
    $stmt = $DBcon->prepare( $query );
    $stmt->execute();
    $showupdate = "<h1 class='maintitle'><span><i class='icon-envelope-alt'></i>COMMENTS</span></h1>
                   <ul>";
    while($corow=$st->fetch(PDO::FETCH_ASSOC)){
        $showupdate .="<li>
                            <article>
                            <header>
                                <figure class='avatar'><img src='../../images/avatar.png' alt=''></figure>
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
    $showupdate .= "	</ul>";
    echo $showupdate;
?>