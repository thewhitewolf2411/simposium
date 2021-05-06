<?php 

//$targetFolder = $_SERVER['DOCUMENT_ROOT'].'/../storage/app/public';
//$linkFolder = $_SERVER['DOCUMENT_ROOT'].'/storage';

$targetFolder = __DIR__.'/../storage/app/public';
$linkFolder = __DIR__.'/../storage';

echo $targetFolder;
echo $linkFolder;

if(symlink('../storage/app/public', './storage')){
    echo 'Symlink process successfully completed';
}

?>