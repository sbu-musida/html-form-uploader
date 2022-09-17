<?php
if(isset($_POST['upload']))
{
    $uploaddir = 'uploads/';
    foreach ($_FILES['userfile']['error'] as $key => $error)
    {
        if ($error == UPLOAD_ERR_OK)
        {
            $tmp_name = $_FILES['userfile']['tmp_name'][$key];
            $name = $_FILES['userfile']['name'][$key];
            $uploadfile = $uploaddir . basename($name);
 
            if (move_uploaded_file($tmp_name, $uploadfile))
            {
                echo "Success: File ".$name." uploaded.<br/>";
            }
            else
            {
                echo "Error: File ".$name." cannot be uploaded.<br/>";
            }
        }
    }
}
?>
