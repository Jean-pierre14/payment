<?php
    include_once "./db.con.php";

    $output = '';
    $errors = [];
    
    if(isset($_POST['editBtn'])){

        $username = mysqli_real_escape_string($con, htmlentities(trim($_POST['username'])));
        $id = mysqli_real_escape_string($con, htmlentities(trim($_POST['id'])));
        $sname = mysqli_real_escape_string($con, htmlentities(trim($_POST['sname'])));
        $email = mysqli_real_escape_string($con, htmlentities(trim($_POST['email'])));
        $class = mysqli_real_escape_string($con, htmlentities(trim($_POST['class'])));
        $sex = mysqli_real_escape_string($con, htmlentities(trim($_POST['sex'])));
        $annee = mysqli_real_escape_string($con, htmlentities(trim($_POST['annee'])));

        if(!$username || !$sname || !$email || !$class || !$sex || !$annee){

            array_push($errors, "Les champs de saisis sont vides");

        }else{

            $sql = mysqli_query($con, "UPDATE student SET username = '$username', sname= '$sname' email = '$email', class= '$class' sex = '$sex', AnneeScolaire = '$annee' WHERE id_student = $id");
            if($sql){

                print 'success';
            }else{
                
                print 'Sql error';
            }
        }
    }

?>