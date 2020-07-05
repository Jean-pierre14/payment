<?php
    $mount = '';
    if(isset($_POST['py'])){
    // $py = $std_name .'_'. $std_sname;
    $id = $_GET['student'];
    $mount = $_POST['mount'];
    $bank = $_POST['bank'];
    // $date = $_POST['date'];
    if(empty($mount)){array_push($error, "The mount field is empty :(");}
    if(empty($bank)){array_push($error, "The bank selection is empty :(");}
    // if(empty($date)){array_push($error, "The date field is empty :(");}

    if(count($error) == 0){
    $py = "INSERT INTO py(mount, create_at,id_pay, bank) VALUES('$mount',now(),'$id', '$bank')";
    $run = mysqli_query($con, $py);

    $mount = '';
    $bank = '';
    ?>
    <script>alert("Payment successful !!!");</script>
    <?php

    header("location: ../payment.php?student=<?= print $id?>");

    }
}
?>

<h3>Pay</h3>