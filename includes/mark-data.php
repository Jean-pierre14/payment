<div class="container-fluid">
    <h2 class="bg-success p-2 text-center text-white border-2">Marksheet</h2>
    <div class="row">
        <div class="col-md-3 skicky-top">
            <form action="">
                <input type="search" name="search" id="search_mark" placeholder="Searching..." class="form-control">
            </form>
            <div class="result mt-2" id="allStudents">
                <!-- Ajax datas -->
            </div>
        </div>
        <div class="col-md-9">
            <?php if(isset($_GET['student'])):?>
                <button onclick="window.history.back()" class="btn btn-sm btn-success">Back</button>
                <input type="text" id="getStudent" value="<?= $_GET['student'];?>" class="form-control">
                <div id="resultGetstudent">
                    <!--Ajax data  -->
                </div>
            <?php else:?>
                <h3 class="bg-success p-2 text-center text-white">INSTRUCTIONS</h3>
                <img src="./images/undraw_Web_search_re_efla.png" alt="Instructions" class="img-fluid">
            <?php endif;?>
        </div>
    </div>
</div>