<?php
if(!empty($_FILES)){
    if(is_uploaded_file($_FILES['uploadfile']['tmp_name'])){
        $srcPath = $_FILES['uploadfile']['tmp_name'];
        $trgPath = "images/".$_FILES['uploadfile']['name'];
        if(move_uploaded_file($srcPath,$trgPath)){
            ?>
<img src="<?php echo $trgPath; ?>" width="300" height="250"/>
<?php
        }
    }
}