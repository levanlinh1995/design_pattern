<?php

include 'Folder.php';
include 'File.php';

$sudoFolder = new Folder('sudo');
$sudoFolder->addFile(new File('sudo.D', 2));
$sudoFolder->addFile(new File('sudo.E', 1));
$sudoFolder->addFile(new File('sudo.F', 6));

$userFolder = new Folder('usr');
$userFolder->addFile(new File('user.sa', 5));
$userFolder->addFile(new File('user.nga', 12));
$userFolder->addFile($sudoFolder);

$rootFolder = new Folder('root');
$rootFolder->addFile(new File('boot.img', 3));
$rootFolder->addFile($userFolder);

echo 'Size of root folder: ' . $rootFolder->getSize();