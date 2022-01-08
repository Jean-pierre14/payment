<?php
    include_once "./db.con.php";

    $unique_id = mysqli_real_escape_string($con, htmlentities(trim($_POST['unique_id'])));
    $bank = mysqli_real_escape_string($con, htmlentities(trim($_POST['bank'])));
    $mount = mysqli_real_escape_string($con, htmlentities(trim($_POST['mount'])));

    if(empty($unique_id) || empty($bank) || empty($mount)){
        print 'error';
    }else{
        $sql = mysqli_query($con, "SELECT id_student, unique_id FROM student WHERE unique_id = $unique_id");
        if($sql){
            if(@mysqli_num_rows($sql) == 1){
                $row = mysqli_fetch_array($sql);
                $IdStudent = $row['id_student'];
                $sql1 = mysqli_query($con, "INSERT INTO py(mount, bank, unique_id, id_pay) VALUES($mount, '$bank', $unique_id, $IdStudent)");
                if($sql1){
                    print 'success';
                }else{
                    print 'error';
                }
            }else{
                print 'error';
            }
        }else{
            print 'error';
        }
    }

?>