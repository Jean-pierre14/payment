<?php
    include_once "./db.con.php";
    
    $name = mysqli_real_escape_string($con, htmlentities(trim($_POST['name'])));
    $sname = mysqli_real_escape_string($con, htmlentities(trim($_POST['sname'])));
    $lname = mysqli_real_escape_string($con, htmlentities(trim($_POST['lname'])));
    $email = mysqli_real_escape_string($con, htmlentities(trim($_POST['email'])));
    $cours = mysqli_real_escape_string($con, htmlentities(trim($_POST['cours'])));
    $location = mysqli_real_escape_string($con, htmlentities(trim($_POST['location'])));
    $nationalite = mysqli_real_escape_string($con, htmlentities(trim($_POST['nationalite'])));

    if(!empty($name) && !empty($sname) && !empty($lname) && !empty($cours) && !empty($location) &&!empty($nationalite)){
        // Let check the email
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            // Let check if the email is already exist!!!
            $sql = mysqli_query($con, "SELECT email FROM lecturer WHERE email = '{$email}'");
            if(mysqli_num_rows($sql) > 0){
                print "$email - Il est deja* utiliser :(";
            }else{
                // Let check the profil image
                if(isset($_FILES['file'])){ // to check if the file is uploaded
                    $img_name = $_FILES['file']['name']; // To get the name of the field
                    $img_type = $_FILES['file']['type']; // To get the type
                    $tmp_name = $_FILES['file']['tmp_name']; // To get the temporaly name

                    // Let explode image and get the last extension like jpg or png...
                    $img_explode = explode('.', $img_name);
                    $img_ext = end($img_explode);
                    $extensions = ['jpeg', 'png', 'jpg'];
                    if(in_array($img_ext, $extensions) === true){
                        $time = time();
                        $new_name = $time.$img_name;
                        
                        if(move_uploaded_file($tmp_name, "../images/Lecturer/".$new_name)){
                            $status = "Active now"; // Change the status to online 
                            $random_id = rand(time(), 1000000);
                            $sql2 = mysqli_query($con, "INSERT INTO lecturer (unique_id, `name`, sname, lname, email, cours, nationalite, profil, `location`, `status`) 
                                                                    VALUES('{$random_id}', '{$name}', '{$sname}', '{$lname}', '{$email}', '{$cours}', '{$nationalite}', '{$new_name}', '{$location}', '{$status}')");
                            if($sql2){
                                print "success";
                            }else{
                                print "Desole il y a un souci* peut-etre* la connection";
                            }
                        }
                    }else{
                        print "Veillez ajouter les images du type PNG, JPG, JPEG seulement";
                    }

                }else{
                    print "Veillez ajouter une photo";
                }
            }
        }else{
            print "$email - Email n'est pas valide";
        }
    }else{
        print "Veillez remplire tous les champs";
    }
?>