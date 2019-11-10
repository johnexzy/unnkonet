<?php
    require 'config.php';
    $sql = "CREATE TABLE IF NOT EXISTS `admin` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `name` varchar(4000) NOT NULL,
      `password` varchar(255) NOT NULL,
      `email` varchar(255) DEFAULT NULL,
      `firstname` text,
      `lastname` text,
      `mobile` varchar(255) DEFAULT NULL,
      `office` text,
      `avatar` varchar(255) DEFAULT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=latin1;
    
    CREATE TABLE IF NOT EXISTS `advert` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `image` varchar(255) NOT NULL,
      `header` text NOT NULL,
      `body` text NOT NULL,
      `Dateofpost` int(255) NOT NULL,
      `current` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
      `Writer` varchar(200) DEFAULT 'NULL',
      PRIMARY KEY (`id`)
    ) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=latin1;

    CREATE TABLE IF NOT EXISTS `audioupload` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `audiofile` varchar(255) NOT NULL,
      `nameofaudio` text NOT NULL,
      `Writer` varchar(255) DEFAULT 'UNNKONET',
      PRIMARY KEY (`id`)
    ) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=latin1;
    
    CREATE TABLE IF NOT EXISTS `birthday` (
      `id` int(255) NOT NULL AUTO_INCREMENT,
      `FULLNAME` text NOT NULL,
      `date` int(2) NOT NULL,
      `month` int(2) NOT NULL,
      `bday` varchar(255) NOT NULL,
      `phone` varchar(14) NOT NULL,
      `avatar` varchar(255) NOT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=latin1;
    
    CREATE TABLE IF NOT EXISTS `comment` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `tag` varchar(19) DEFAULT NULL,
      `names` text NOT NULL,
      `comments` varchar(255) NOT NULL,
      `Timeat` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=latin1;
    
    CREATE TABLE IF NOT EXISTS `entertainment` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `image` varchar(255) NOT NULL,
      `header` text NOT NULL,
      `body` text NOT NULL,
      `Dateofpost` int(255) NOT NULL,
      `current` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
      `Writer` varchar(255) DEFAULT 'NULL',
      PRIMARY KEY (`id`)
    ) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=latin1;
    
    CREATE TABLE IF NOT EXISTS `news` (
      `id` int(255) NOT NULL AUTO_INCREMENT,
      `headline` text NOT NULL,
      `uploads` varchar(255) DEFAULT NULL,
      `body` text NOT NULL,
      `tag` text,
      `category` text NOT NULL,
      `Dateofpost` int(11) NOT NULL,
      `Writer` varchar(255) DEFAULT 'NULL',
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=latin1;
    
    CREATE TABLE IF NOT EXISTS `pricing` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `packagename` varchar(255) NOT NULL,
      `value` text NOT NULL,
      `duration` text NOT NULL,
      `signature` text NOT NULL,
      `dateofpost` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
      PRIMARY KEY (`id`)
    ) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=latin1;
    
    CREATE TABLE IF NOT EXISTS `showcase` (
      `id` int(255) NOT NULL AUTO_INCREMENT,
      `header` varchar(255) NOT NULL,
      `msg` varchar(4000) NOT NULL,
      `image` varchar(255) NOT NULL,
      `tag` text NOT NULL,
      `Dateofpost` int(11) NOT NULL,
      `Writer` varchar(255) DEFAULT 'NULL',
      PRIMARY KEY (`id`)
    ) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=latin1;
    
    ";
    $stmt = $DBcon->prepare($sql);
    if($stmt->execute()){
      echo "succesfull";
      
    }else{
      echo "Operation failed!";
    }
    include 'dbconnect.php';
    $query = $DBcon->query("SELECT * FROM audioupload");
    $filenum = $query->num_rows;
    if ($filenum == 0) {
      $sql  = 'INSERT INTO `audioupload` (`id`, `audiofile`, `nameofaudio`, `Writer`) VALUES (\'1\', \'Welcome\', \'unnkonet\', \'UNNKONET\')';
      if($DBcon->query($sql)) echo "Sucess";
    }
    


?>