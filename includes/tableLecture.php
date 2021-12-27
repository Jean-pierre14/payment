<div class="col-md-12">
    <?php include("./db.con.php");include("sql.php"); ?>

    <div class="bg-success p-2">
        <a href="" class="item white text-center" align='center'>List of Lecturers</a>
    </div>
    <table class="table m-0">
        <thead>
            <tr>
                <th> Name </th>
                <th> Second Name </th>
                <th> Last name </th>
                <th> Specialiste </th>
                <th> Location </th>
                <th> Nationalite </th>
            </tr>
        </thead>
    </table>
    <table class="table table-striped">
        <tbody>
            <!-- sql line:  -->
            <?php while($r = mysqli_fetch_array($run_lecturer)): ?>
            <tr title="He was added the <?php print $r['adm_at'];?>">
                <td><?php print $r['name'] ;?></td>
                <td><?php print $r['sname'] ;?></td>
                <td><?php print $r['lname'] ;?></td>
                <td><?php print $r['cours'] ;?></td>
                <td><?php print $r['location'] ;?></td>
                <td><?php print $r['nationalite'] ;?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

</div>