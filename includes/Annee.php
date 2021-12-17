<?php
    $sql = mysqli_query($con, "SELECT * FROM anneesscolaire ORDER BY id");
    if(@mysqli_num_rows($sql) > 0){
        $AnneeDatas .= '<div class="list-group">';
        while($row = mysqli_fetch_array($sql)){
            $AnneeDatas .= '<a href="adminOption.php?action=Annee='.$row['id'].'" class="list-group-items">'.$row['annee'].'</a>';
        }
        $AnneeDatas .= '</div>';
    }else{
        $AnneeDatas = '<p class="alert alert-danger">Il n\'y a pas les annees scolaires enregistre</p>';
    }
?>

<div class="row">
    <div class="col-md-5">
        <div class="card card-body">
            <?= $AnneeDatas;?>
        </div>
    </div>
    <div class="col-md-7">
        <form action="" method="post">
            <div class="form-group"></div>
        </form>
    </div>
</div>