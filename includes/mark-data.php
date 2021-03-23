<div class="container-fluid">
    <h2 class="bg-success p-2 text-center text-white border-2">Marksheet</h2>
    <div class="row">
        <div class="col-md-3 skicky-top">
            <form action="">
                <input type="search" name="search" id="search_mark" placeholder="Searching..." class="form-control">
            </form>
            <div class="result mt-2" id="allStudents">
                <div class="ph-item p-1">
                    <div class="ph-picture"></div>
                        <div class="ph-row">
                        <div class="ph-col-12 empty"></div>
                    </div>
                </div>
                <!-- Ajax datas -->
            </div>
            <div class="details">
                <h2 class="bg-success text-center text-white p-2">Class</h2>
                <button class="btn btn-sm btn-success shadow-sm">Add class</button>
            </div>
        </div>
        <div class="col-md-9">
            
            <?php if(isset($_GET['student'])):?>
                <button onclick="window.history.back()" class="btn btn-sm btn-success my-2">Back</button>
                <input type="hidden" id="getStudent" value="<?= $_GET['student'];?>" class="form-control">
                <div id="resultGetstudent">
                    <div class="ph-item">
                        <div class="ph-col-12">
                            <div class="ph-picture"></div>
                            <div class="ph-row">
                                <div class="ph-col-6 big"></div>
                                <div class="ph-col-4 empty big"></div>
                                <div class="ph-col-2 big"></div>
                                <div class="ph-col-4"></div>
                                <div class="ph-col-8 empty"></div>
                                <div class="ph-col-6"></div>
                                <div class="ph-col-6 empty"></div>
                                <div class="ph-col-12"></div>
                            </div>
                        </div>
                    </div>
                    <!--Ajax data  -->
                </div>
            <?php else:?>
                <h3 class="bg-success p-2 text-center text-white">INSTRUCTIONS</h3>
                <div id="demo" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./images/undraw_Domain_names_re_0uun.png" alt="Instructions" class="img-fluid">
                        </div>
                        <div class="carousel-item">
                            <img src="./images/undraw_Web_search_re_efla.png" alt="Instructions" class="img-fluid">
                        </div>
                        <div class="carousel-item">
                            <img src="./images/undraw_house_searching_n8mp.png" alt="Instructions" class="img-fluid">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>

                </div>
            <?php endif;?>
        </div>
    </div>
</div>