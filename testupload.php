<?php

include_once("config.php");
session_start();
if (!isset($_SESSION['matricno'])) {
   header("Location: login.php");
} else {
    $matricno=$_SESSION['matricno'];

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
</head>
<body>
      <div class="panel-body">
                            <form action="uploadimage_code.php" enctype="multipart/form-data" method="post">
                                <div class="form-group">
                                                <label for="pic" class="col-sm-2 control-label">Profile picture</label>
                                                <div class="col-sm-10">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail"
                                                             style="width: 200px; height: 200px;">
                                                            <img src="#" alt="profile pic" id="blah"
                                                                 class="profile_pic">
                                                        </div>
                                                        <!-- <div class="fileinput-preview fileinput-exists thumbnail" 
                                                             style="max-width: 200px; max-height: 200px;"></div>
                                                        <div> -->
                                                                <span class="btn btn-default btn-file">
                                                            <span class="fileinput-new">Select image</span>
                                                                
                                                                <input onchange="readURL(this);"  type="file" name="upload"
                                                                       />
                                                                </span>
                                                            <div class="m-t-10">
                                                                <input type="button" value="submit" name="submit" class="btn btn-success ">
                                                            <a href="#" class="btn btn-danger fileinput-exists"
                                                               data-dismiss="fileinput">Remove</a>
                                                        </div></div>
                                                    </div>
                                                </div>
                                            </div>


                                </form>
                      
</body>

<script>
function readURL(input){
    if (input.files && input.files[0]) {
        var reader=new FileReader();
        reader.onload=function(e){
            $('#blah').attr('src',e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
        }
     
    }

</script>
</html>