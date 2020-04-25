<?php

class checkDate
{   
    public function getDay($timestamp)
    {
        return intval(date('d', $timestamp));
    }
    public function getMonth($timestamp)
    {
        return intval(date('m', $timestamp));
    }
    public function getYear($timestamp)
    {
        return intval(date('Y', $timestamp));
    }
    public function getHour($timestamp)
    {
        return intval(date('G', $timestamp));
    }
    public function getMin($timestamp)
    {
        return intval(date('i', $timestamp));
    }
    public function getSecs($timestamp)
    {
        return intval(date('s', $timestamp));
    }
    public function checkDay($int)
    {
        $nowd = intval(date('d')); //Day
        $nowm = intval(date('m')); //Month
        $nowy = intval(date('Y')); //Year
        $nowg = intval(date('G')); //Hour
        $nowi = intval(date('i')); //Minutes
        $nows = intval(date('s')); //Seconds

        if ($nowy == $this->getYear($int)) {
            if ($nowm > $this->getMonth($int)) {
                $monthsAgo = ($nowm - $this->getMonth($int) == 1) ? "A month Ago" : ($nowm - $this->getMonth($int)) . " months Ago";
                return $monthsAgo;
            } else {
                if ($nowd > $this->getDay($int)) {
                    $daysAgo = ($nowd - $this->getDay($int) == 1) ? "Yesterday" : ($nowd - $this->getDay($int)) . " Days Ago";
                    return $daysAgo;
                } else {
                    if ($nowg > $this->getHour($int)) {
                        $hourAgo = ($nowg - $this->getHour($int) == 1) ? "An hour Ago" : ($nowg - $this->getHour($int)) . " Hours Ago";
                        return $hourAgo;
                    }
                    else {
                        if ($nowi > $this->getMin($int)) {
                            $minAgo = ($nowi - $this->getMin($int) == 1) ? "Min Ago" : ($nowi - $this->getMin($int)) . " mins Ago";
                            return $minAgo;
                        }else {
                            return "<b>Just Now</b>";
                        }
                    }
                }
            }
        }
        else {
            if ($nowy - $this->getYear($int) > 1) {
                $yearsAgo = ($nowy - $this->getYear($int) == 1) ? "Last Year" : ($nowy - $this->getYear($int)) . " Years Ago";
                return $yearsAgo;
            }else{
                $diff = $nowm+12 -  $this->getMonth($int);
                $monthAgo = ($diff == 1) ? "Last month" : $diff. " Months Ago";
                return $monthAgo;
            }
        }

    }

}
function getComments(String $tag)
{
    include "dbconnect.php";
    $query = "SELECT * FROM comment WHERE tag = '$tag'";
    $query = $DBcon->query($query);
    $comments = $query->num_rows;
    return $comments;
}
function getData($cat, $Currentid = 0)
{
    include "config.php";
    $DBhost = $sever;
    $DBuser = $username;
    $DBpass = $dbpass;
    $DBname = $database;

    $DBconn = new MySQLi($DBhost, $DBuser, $DBpass, $DBname);
    if ($DBconn->connect_errno) {
        die("ERROR : -> " . $DBconn->connect_error);
    }
    // $nowd = date('d') ;
    // $nowm = date('m') ;
    // $nowy = date('Y') ;
    // $datetoday = ($nowy.$nowm.$nowd) * 1;
    $query = "SELECT * FROM news WHERE category = '$cat' ORDER BY `id` DESC LIMIT 9";
    $stmt = $DBcon->prepare($query);
    $stmt->execute();
    $len = 0;
    $showupdate = "<div class='row'>";
    while ($row = $stmt->fetch(PDO::FETCH_BOTH)) { //FETCH_BOTH indexes both the Colunmn name and Column Number
        $len += 1;
        
            $timestamp = strtotime($row["timestamps"]);
        
        
        $newsinfo = new checkDate;
        if ($row[0] == $Currentid) {
            continue;
        }
        $showupdate .= "<div class='c4' style='max-height:400px'><a href='views/news/view.php?id=$row[id]' style='color:inherit'  >
                                <div class='feed' >
                                    <img src='http://localhost/www/version/admin/homepages/$row[uploads]' style='width:100%; height:200px;border-radius:10px 10px 0 0'>
									<i class='icon-time'></i><p style='font-size:14px;display:inline'>
									<b>'</b> " . $newsinfo->checkDay($timestamp) . "</p>
									<p style='color:#000; font-size:18px; display:block;font-family: initial;'>
									&nbsp;
									".substr($row['headline'], 0, 80)."...</p>
									<div>
										<i class='icon-pencil'></i><i style='font-size:13px;'>: $row[Writer]</i>
                                        <p style='float:right;'>
                                            <div style='float:right; margin:0.5em; border:0.1em solid; border-radius:0.3em; padding:0.2em; background:#a5aaab; color: #000'><i class='icon-comments'></i><font style='font-size:13px'>("
										.getComments("$row[tag]").
                                        ")</font></div>
                                        <div style='float:right; margin:0.5em; border:0.1em solid; border-radius:0.3em; padding:0.2em; background:#a5aaab; color: #000'><i class=icon-thumbs-up></i><font style='font-size:13px'>(3)</font></div>
                                        <div style='float:right; margin:0.5em; border:0.1em solid; border-radius:0.3em; padding:0.2em; background:#a5aaab; color: #000'><i class=icon-eye-open></i><font style='font-size:13px'>(3)</font></div>
                                        </p>
									</div>
								</div>
							</a></div>
								";

    }
    $showupdate .= "<hr><div class='newscale link' style='font-size:14px; margin-top:20px'><i class='icon-external-link'></i>&nbsp;<a href='timeline.php'>view older news</a></div>";
    $showupdate .= "</div>";
    return $showupdate;
}
// echo(getData("NEWS"));
// echo(getData("SPORTS"));
// echo(getData("CAMPUS"));
