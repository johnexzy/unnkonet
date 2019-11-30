<?php
    include_once "../../php/config.php";
    if ($_GET) {
        $tag = $_GET['tag'];
        $query = "SELECT * FROM comment WHERE tag = '$tag'";
        $stmt = $DBcon->prepare( $query );
        $stmt->execute();
        $showupdate = "<h1 class='maintitle'><span><i class='icon-envelope-alt'></i>COMMENTS</span></h1>
                    <ul>";
        while($corow=$stmt->fetch(PDO::FETCH_ASSOC)){
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
    }

?>
