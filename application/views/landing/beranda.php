
    <!-- Store Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-primary">Katalog Paket Pernikahan</p>
                <h1 class="display-6">Silahkan pilih paket pernikahan Anda</h1>
            </div>
            <div class="row g-4">
                <?php 
                foreach ($getAllKatalog as $row) :
                ?>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="store-item position-relative text-center">
                            <img class="img-fluid" src="<?= base_url('assets/files/katalog/') . $row->image ?>" alt="">
                        <div class="p-4">
                            <h4 class="mb-3"><?= $row->package_name; ?></h4>
                            <?= word_limiter(strip_tags($row->description), 10); ?>
                            <h4 class="text-primary">Rp. <?= number_format($row->price, 2, ",", "."); ?></h4>
                        </div>
                        <div class="store-overlay">
                            <a href="<?= base_url('Beranda/detail?id=') . $row->catalogue_id; ?>" class="btn btn-primary rounded-pill py-2 px-4 m-2">More Detail <i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                    <?php endforeach ?>
            </div>

                
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                    <a href="" class="btn btn-primary rounded-pill py-3 px-5">View More Products</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Store End -->



   