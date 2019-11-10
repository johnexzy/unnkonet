<?php
    require 'config.php';
    $sql = "CREATE TABLE IF NOT EXISTS `advert` (
      `id` int(11) NOT NULL AUTO_INCREMENT , PRIMARY KEY (`id`),
      `image` varchar(255) NOT NULL,
      `header` text NOT NULL,
      `body` text NOT NULL,
      `Dateofpost` int(255) NOT NULL,
      `current` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
    ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
    
    CREATE TABLE IF NOT EXISTS `audioupload` (
      `id` int(11) NOT NULL AUTO_INCREMENT , PRIMARY KEY (`id`),
      `audiofile` varchar(255) NOT NULL,
      `nameofaudio` text NOT NULL,
      `dateofpost` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
    ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
    CREATE TABLE IF NOT EXISTS `pricing` (
      `id` int(11) NOT NULL AUTO_INCREMENT , PRIMARY KEY (`id`),
      `packagename` varchar(255) NOT NULL,
      `value` text NOT NULL,
      `duration` text NOT NULL,
      `signature` text NOT NULL,
      `dateofpost` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
    ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
    
    CREATE TABLE IF NOT EXISTS `birthday` (
      `id` int(255) NOT NULL AUTO_INCREMENT , PRIMARY KEY (`id`),
      `FULLNAME` text NOT NULL,
      `date` int(2) NOT NULL,
      `month` int(2) NOT NULL,
      `bday` text,
      `phone` varchar(14) NOT NULL,
      `avatar` varchar(255) NOT NULL
    ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
    
    CREATE TABLE IF NOT EXISTS `comment` (
      `id` int(11) NOT NULL AUTO_INCREMENT , PRIMARY KEY (`id`),
      `tag` varchar(19) DEFAULT NULL,
      `names` text NOT NULL,
      `comments` varchar(255) NOT NULL,
      `Timeat` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
    
    CREATE TABLE IF NOT EXISTS `entertainment` (
      `id` int(11) NOT NULL AUTO_INCREMENT , PRIMARY KEY (`id`),
      `image` varchar(255) NOT NULL,
      `header` text NOT NULL,
      `body` text NOT NULL,
      `Dateofpost` int(255) NOT NULL,
      `current` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
    ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
    
    CREATE TABLE IF NOT EXISTS `news` (
      `id` int(255) NOT NULL AUTO_INCREMENT , PRIMARY KEY (`id`),
      `headline` text NOT NULL,
      `uploads` varchar(255) DEFAULT NULL,
      `body` text NOT NULL,
      `tag` text,
      `Dateofpost` int(11) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
    
    CREATE TABLE IF NOT EXISTS `showcase` (
      `id` int(255) NOT NULL AUTO_INCREMENT , PRIMARY KEY (`id`),
      `header` varchar(255) NOT NULL,
      `msg` varchar(4000) NOT NULL,
      `image` varchar(255) NOT NULL,
      `tag` text,
      `Dateofpost` int(11) NOT NULL
    ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
    
    CREATE TABLE IF NOT EXISTS `youtube` (
      `id` int(255) NOT NULL AUTO_INCREMENT , PRIMARY KEY (`id`),
      `embed` varchar(4000) NOT NULL,
      `Dateofpost` int(255) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
    
    /*Admin Table */
    CREATE TABLE IF NOT EXISTS `admin` (
      `id` int(11) NOT NULL AUTO_INCREMENT , PRIMARY KEY (`id`),
      `name` varchar(4000) NOT NULL,
      `password` varchar(255) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
    /* Creates a username and passwords for a User. */
    INSERT INTO `admin` (`name`, `password`) VALUES ('unnkonet', 'unnkonet')

    ";
    $stmt = $DBcon->prepare($sql);
    $stmt->execute();
    echo("succesfull");
?>