
<?php
include_once("config.php");
session_start();

if (isset($_SESSION['matricno'])) {
    # code...
    $matricno=$_SESSION['matricno'];
if($_POST['submit']){

$image=checkupload();

}
   
} else {
    # code...
}
function checkupload(){
        
    if(isset($_FILES['upload'])){
    $allowed = array('image/pjpeg','image/jpeg','image/png','image/JPG','image/x-png','image/jp');

    if(in_array['upload']['type'],$allowed){
        print "uploading file";
        if(move_uploaded_file($_FILES['upload']['tmp_name'],"images/{$_FILES['upload']['name']}"))
        
        $image="{$_FILES['upload']['name']}";
        }



    }
    else{
        echo '<p> Please upload either a jpeg, png image</p>';
    }

    if ($_FILES['upload']['error']) {
        # code...
        echo "The file could not be uploaded because";

        switch ($FILES['upload']['error']) {
            case 1:
                # code...
                print 'the file exceeds the Upload__max_filesize settings';
            break;
            case 2:
            # code...
                print 'the file exceeds the max_filesize settings by html';
             break;
            case 3:
                # code...
                print 'the file was only partially uploaded';
            break;
            case 4:
                # code...
                print 'no file was uploaded';
            break;
            case 6:
                # code...
                print 'no temporary folder was available ';
            break;
            case 7:
                # code...
                print 'unable to write to the disk';
            break;
            case 8:
                # code...
                print 'file upload stopped';
            break;
     
            default:
                # code...
                print 'a system error occured';
            break;
        }
    } 

    if($file_exists($FILES['upload']['tmp_name']) &&is_file($FILES['upload']['tmp_name'])){
        print 'file exists';
        unlink($FILES['upload']['tmp_name']);
    }
    return $image;
}

?>