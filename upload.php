<?php
if (!file_exists('images/')) {
    mkdir('images/', 0777, true);
}
if (!empty($_FILES)) {
    if (is_uploaded_file($_FILES['uploadfile']['tmp_name'])) {
        $srcPath = $_FILES['uploadfile']['tmp_name'];
        $trgPath = "images/" . date('h-i-s j-m-y ') . $_FILES['uploadfile']['name'];
        if (move_uploaded_file($srcPath, $trgPath)) {
            ?>
            <img src="<?php echo $trgPath; ?>" width="300" height="250"/>
            <?php
        }
    }
} else {
    echo "please, select file";
}