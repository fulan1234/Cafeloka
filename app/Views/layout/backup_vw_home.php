<!-- Newsletter -->
<section class="bg-primary bg-dark text-light p-5">
    <div class="container">
        <div class="d-md-flex justify-content-between align-items-center">
            <h3 class="mb-3 mb-md-0">Search Your Cafe</h3>

            <div class="input-group news-input">
                <input type="text" class="form-control" placeholder="Search Name Cafe" />
                <button class="btn btn-success btn-lg" type="button">Search</button>
            </div>
        </div>
    </div>
</section>

<!-- Showcase -->
<section class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
    <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between mt-1">
            <div>
                <h1>Welcome to
                    <span class="text-warning">
                        CAFELOKA
                    </span>
                </h1>
                <p class="lead my-4">
                    Cafeloka adalah layanan untuk mempermudah membooking cafe dengan layanan yang
                    sudah disediakan. Yuk tunggu apalagi, dengan layanan dan akses termudah itu
                    semua ada di CAFELOKA
            </div>
            <img class="img-fluid w-50 d-none d-sm-block" src="img/showcase.svg" alt="" />
        </div>
    </div>
</section>

<!-- Boxes -->
<section class="p-5 bg-dark">
    <div class="container">
        <div class="row text-center g-4">
            <?php foreach ($data as $key => $value) : ?>
                <div class="col-4">
                    <div class="d-flex mr-3">
                        <div class="card bg-warning text-dark me-3" style="width:30vw ;">
                            <div class="card-body text-center mb-3">
                                <div class="h1 mb-3">
                                    <i class="bi bi-laptop"></i>
                                </div>
                                <h3 class="card-title mb-3 fw-bold"><?= $value->nama_cafe ?></h3>
                                <p class="card-text"><?= $value->alamat ?></p>
                                <a href="#" class="btn btn-primary">Cek Cafe</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Learn Sections <section id="learn" class="p-5"> <div class="container">
    <div class="row align-items-center justify-content-between"> <div
    class="col-md"> <img src="img/fundamentals.svg" class="img-fluid" alt=""/>
    </div> <div class="col-md p-5"> <h2>Learn The Fundamentals</h2> <p class="lead">
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique deleniti
    possimus magnam corporis ratione facere! </p> <p> Lorem ipsum dolor sit, amet
    consectetur adipisicing elit. Cumque reiciendis eius autem eveniet mollitia, at
    asperiores suscipit quae similique laboriosam iste minus placeat odit velit
    quos, nulla architecto amet voluptates? </p> <a href="#" class="btn btn-light
    mt-3"> <i class="bi bi-chevron-right"></i> Read More </a> </div> </div> </div>
    </section> -->