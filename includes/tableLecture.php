<div class="col-md-12">
    <?php include("./db.con.php");include("sql.php"); ?>
    <div class="card card-body mb-1">
        <form action="#" method="post" autocomplete="off">
            <input type="search" placeholder="Search" id="search_lecturer" class="form-control">
        </form>
    </div>
    <div class="card card-body shadow-sm">
    <div id="Resutls">
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
    </div>
</div>

<script>
const results = document.getElementById('results');
var search = document.querySelector('#search_lecturer');

search.onkeyup = () =>{
    let text = search.value,
        txt = text.trim()
    alert("Hello " + txt)
}
 
</script>