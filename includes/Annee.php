<?php
    $AnneeDatas = '';
    $debut = '';
    $fin = '';

    $ThisYear = date('Y');
    $maxAnnee = $ThisYear + 3;
    $minAnnee = $ThisYear - 5;

    $sql = mysqli_query($con, "SELECT * FROM anneesscolaire ORDER BY id");
    if(@mysqli_num_rows($sql) > 0){

        $AnneeDatas .= '
        <form method="post" action="" autocomplet="off" class="mb-2">
            <input type="search" name="search" class="form-control" placeholder="search...">
        </form>
        <div class="list-group">';
        while($row = mysqli_fetch_array($sql)){
            $AnneeDatas .= '
            <a href="adminOption.php?action=Annee&year='.$row['id'].'" class="d-flex justify-content-between align-items-center list-group-item">
                <span>Annee scolaire</span>
                <span>'.$row['annee'].'</span>
            </a>';
        }
        $AnneeDatas .= '</div>';
    }else{
        $AnneeDatas = '<p class="alert alert-danger">Il n\'y a pas les annees scolaires enregistre</p>';
    }
?>

<div class="row">
    <div class="col-md-5">
        <div class="card card-body shadow-sm">
            <?= $AnneeDatas;?>
        </div>
    </div>
    <div class="col-md-7">
        <div class="card card-body shadow-sm">
            <?php
            $out = '';
            if(isset($_POST['ajouterAnnee'])){
                $debut = mysqli_real_escape_string($con, htmlentities(trim($_POST['debut'])));
                $fin = mysqli_real_escape_string($con, htmlentities(trim($_POST['fin'])));

                if(empty($debut) || empty($fin)){
                    $out = '<p class="alert alert-danger">Les annees ne sont pas bien completes*</p>';
                }else{
                    $annee = $debut .'-'. $fin;
                    $checkIfAnnee = mysqli_query($con, "SELECT annee FROM anneesscolaire WHERE annee = '${annee}'");
                    if(@mysqli_num_rows($checkIfAnnee) > 0){
                        $out = '<p class="alert alert-danger">Cette annee a deja ete* ajouter</p>';
                    }else{
                        if($debut === $fin){
                            $out = '<p class="alert alert-danger">Les annees* doivent pas etre les memes*</p>';
                        }else{
                            if($debut > $fin){
                                $out = '<p class="alert alert-danger">L\' annee qui commence doit etre inferieur a la fin :( </p>';
                            }
                            $sql = mysqli_query($con, "INSERT INTO anneesscolaire(annee) VALUE('${annee}')");
                            if($sql){
                                $debut ='';
                                $fin = '';
                            }
                        }
                    }
                }
                print $out;
            }
            ?>
            <form action="" method="post" autocomplete="off">
                <div class="form-group">
                    <label for="dannee">Debut de l'annee</label>
                    <input type="number" max="<?= $maxAnnee;?>" min="<?= $minAnnee;?>" class="form-control" name="debut"
                        placeholder="Debut de l'annee" value="<?= $debut;?>" required>
                </div>
                <div class="form-group">
                    <label for="fannee">Fin de l'annee</label>
                    <input type="number" class="form-control" max="<?= $maxAnnee;?>" min="<?= $minAnnee;?>" id="fannee"
                        name="fin" placeholder="Fin de l'annee" value="<?= $fin;?>" required>
                </div>
                <div class="form-group">
                    <button class="btn btn-sm btn-success" name="ajouterAnnee" type="submit">Ajouter l'annee</button>
                </div>
            </form>
        </div>
    </div>
</div>