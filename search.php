<?php
    $con = mysqli_connect('localhost', 'root', '', 'payment');
    $out = '';

    $sql = "SELECT * FROM student WHERE username LIKE '%".$_POST['search']."%'";
    $run_sql = mysqli_query($con, $sql);

    if(mysqli_num_rows($run_sql) > 0){
        ?>
        <ul>
            <img src="./images/loading.gif" alt="loading animation" align='center' style='width: 50px;height: 50px;margin: 0 auto'>
        <?php
        while($row = mysqli_fetch_array($run_sql)){
            $id = $row['id'];
            $user_name = $row['username'];
            ?>
            <li class="" id="element"><a href="py.php?student=<?php print $id ?>"><?php print $user_name ?></a></li>
            <?php
        }
        ?>
        </ul>
        <?php
    }else{
        echo "<p class='alert alert-success red m-3'><b>".$_POST['search']."</b> element is not recognized into our system </p>";
    }