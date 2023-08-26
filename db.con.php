<!-- Connection to xamp server and mysqli database -->
<?php $con = mysqli_connect("localhost", "root", "", "payment") OR die("Could not connect to the DB");?>
<!-- end of our connnection -->


<?php
$AnneesScolaires = '';

$SqlAnnee = mysqli_query($con, "SELECT * FROM AnneesScolaire ORDER BY id LIMIT 7");

// if(@mysqli_num_rows($SqlAnnee) > 0){
//     $AnneesScolaires .= '
//     <select name="annee" id="annee" class="form-control">
//             <option>-- selectiionner --</option>
//     ';
//     while($row = mysqli_fetch_array($SqlAnnee)){
//         $AnneesScolaires .= '
//             <option value="'.$row['annee'].'">'.$row['annee'].'</option>
//         ';
//     }
//     $AnneesScolaires .= '</select>';
// }else{
//     $AnneesScolaires = '<p class="alert alert-danger">Il n\'y a pas des annees enregistre</p>';
// }




?>