<?php
    include_once "./db.con.php";

    $username = mysqli_real_escape_string($con, htmlentities(trim($_POST['username'])));
    $name = mysqli_real_escape_string($con, htmlentities(trim($_POST['sname'])));
    $email = mysqli_real_escape_string($con, htmlentities(trim($_POST['email'])));
    $class = mysqli_real_escape_string($con, htmlentities(trim($_POST['class'])));
    $sex = mysqli_real_escape_string($con, htmlentities(trim($_POST['sex'])));
    $annee = mysqli_real_escape_string($con, htmlentities(trim($_POST['annee'])));

    if(empty($username) || empty($name) || empty($email) || empty($class) || empty($sex) || empty($annee)){
        $output = '<p class="alert alert-danger">Veillez remplir tout les champs</p>';
    }else{
        if(isset($_FILES['file'])){
            $img_name = $_FILES['file']['name']; // To get the name of the field
            $img_type = $_FILES['file']['type']; // To get the type
            $tmp_name = $_FILES['file']['tmp_name']; // To get the temporaly name

            // Let explode image and get the last extension like jpg or png...
            $img_explode = explode('.', $img_name);
            $img_ext = end($img_explode);
            $extensions = ['jpeg', 'png', 'jpg', 'JPG'];

            if(in_array($img_ext, $extensions) === true){

                $time = time();
                $new_img_name = $time.$img_name;
                
                if(move_uploaded_file($tmp_name, "../images/Students/".$new_img_name)){
                    $random_id = rand(time(), 1000000);
                    $sql = mysqli_query($con, "INSERT INTO student(unique_id, username, `sname`, email, class, sex, AnneeScolaire, profil) VALUES('{$random_id}','$username', '$name', '$email', '$class','$sex', '$annee', '{$new_img_name}')");
                    if($sql){
                        $output = 'success';
                    }else{
                        $output = '<p class="alert alert-danger">Sql error :(</p>';
                    }
                }else{
                    $output = '<p class="alert alert-danger">Veiller contacter un informaticien :)</p>';
                }
            }
            
        }else{
            $output = '<p class="alert alert-danger">Selectionner une image :)</p>';
        }
        
    }
    print $output;