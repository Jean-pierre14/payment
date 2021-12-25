<?php


$con = mysqli_connect("localhost", "root", "", "payment") OR die("Could not connect to the DB");

if(!$con){
    $sql = "CREATE DATABASE IF NOT EXISTS payment USE";
    $run = mysqli_query($conEmpty, $sql);
}


$SqlAnnee = mysqli_query($con, "SELECT * FROM AnneesScolaire ORDER BY id DESC LIMIT 4");
$AnneesScolaires = '';
if(@mysqli_num_rows($SqlAnnee) > 0){
    $AnneesScolaires .= '
    <select name="annee" id="annee" class="form-control">
            <option>-- selectiionner --</option>
    ';
    while($row = mysqli_fetch_array($SqlAnnee)){
        $AnneesScolaires .= '
            <option value="'.$row['annee'].'">'.$row['annee'].'</option>
        ';
    }
    $AnneesScolaires .= '</select>';
}else{
    $AnneesScolaires = '<p class="alert alert-danger">Il n\'y a pas des annees enregistre</p>';
}
?>