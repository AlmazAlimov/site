<?php 
if (isset($_FILES) && $_FILES['userfile']['error'] == 0) {
    $musqli = new mysqli ('127.0.0.1-3306' , 'root','my_own_database');
                if ($mysqli->connect_errno) {
                    echo $mysqli->connect_error;
                    exit;
                }
                define('SITE_DOOT', realpath(dirname('_FILE_')));
                $uploadDir = '/filesGallery/';
                $uploadFile = $uploadDir . basename($_FILES['userfile']['name']);
                if (move_uploaded_file($_FILES['userfile']['tmp_name'], __DIR__ . $uploadFile)) {
                    $query = "INSERT INTO `gallery` (`path`) VALUES ('$uploadFile')";
                    if (!$mysqli->query($query)) {
                        die(': '. $mysqli->error);
                    }
                    if($mysql->connect_errno) {
                        echo 'Error!' . $mysql->connect_error;
                        exit();
                    }
                    header("Location: http://vizitka.local/galery.php");  
                }
                else {
                    echo "Файл NE успешно загружен!<br>";
                }
            }
?>