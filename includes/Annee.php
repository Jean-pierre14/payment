<?php
    $debut = '';
    $fin = '';
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
        <div class="card card-body shadow-sm">
            <form action="" method="post">
                <div class="form-group">
                    <label for="dannee">Debut de l'annee</label>
                    <input type="number" max="<?= $maxAnnee;?>" class="form-control" name="fin"
                        placeholder="Debut de l'annee" value="<?= $debut;?>">
                </div>
                <div class="form-group">
                    <label for="fannee">Fin de l'annee</label>
                    <input type="number" class="form-control" id="fannee" name="fin" placeholder="Fin de l'annee"
                        value="<?= $fin;?>">
                </div>
                <div class="form-group">
                    <button class="btn btn-sm btn-success" name="ajouterAnnee" type="submit">Ajouter l'annee</button>
                </div>
            </form>
        </div>
    </div>
</div>