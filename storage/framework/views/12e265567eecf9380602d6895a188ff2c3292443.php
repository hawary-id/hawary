<!-- header -->
 
<!-- Konten -->
<?php $__env->startSection('konten'); ?>
<main>

    <div class="p-5 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Dapatkan Projectmu</h1>
            <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
            <button class="btn btn-primary btn-lg" type="button">Gabung Sekarang</button>
            <button class="btn btn-outline-info btn-lg" type="button">Login</button>
        </div>
    </div>

    <div class="container-fluid">   
        <div class="row">               
            <div class="col-md-9 col-12 mb-3">    
                <div class="card mb-3">    
                    <div class="card-body">
                        <h5 class="card-title">Project Terbaru</h5>
                        <div class="row">
                            <div class="col-md-4 col-6">
                                <div class="card">
                                    <img src="<?php echo e(url('/images/logo.png')); ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Judul Aplikasi</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="">Selengkapnya <i class="bi bi-arrow-right-circle"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="card">
                                    <img src="<?php echo e(url('/images/logo.png')); ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Judul Aplikasi</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="">Selengkapnya <i class="bi bi-arrow-right-circle"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="card">
                                    <img src="<?php echo e(url('/images/logo.png')); ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Judul Aplikasi</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="">Selengkapnya <i class="bi bi-arrow-right-circle"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="float-end" href="">Lihat Semua</a>
                    </div>
                </div>
                
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Source Kode Terbaru</h5>
                        <div class="row">
                            <div class="col-md-4 col-6">
                                <div class="card">
                                    <img src="<?php echo e(url('/images/logo.png')); ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Judul Aplikasi</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="">Selengkapnya <i class="bi bi-arrow-right-circle"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="float-end" href="">Lihat Semua</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Artikel Terbaru</h5>
                        <div class="row">
                            <div class="col-md-4 col-6">
                                <div class="card">
                                    <img src="<?php echo e(url('/images/logo.png')); ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Judul Aplikasi</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="">Selengkapnya <i class="bi bi-arrow-right-circle"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="float-end" href="">Lihat Semua</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <nav>
                            <div class="nav nav-tabs text-center" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#freelance" type="button" role="tab" aria-controls="project" aria-selected="true">Freelance</button>
                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#source_kode" type="button" role="tab" aria-controls="source_kode" aria-selected="false">Source Kode</button>
                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#artikel" type="button" role="tab" aria-controls="artikel" aria-selected="false">Artikel</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="freelance" role="tabpanel" aria-labelledby="freelance-tab">
                                <div class="card-body">
                                    <h5 class="card-title">Freelance Populer</h5>
                                    <hr>
                                    <nav class="nav flex-column">
                                        <a class="nav-link" href="#">
                                            <div class="row mb-2">
                                                <div class="col-2 col-md-3">
                                                    <img src="<?php echo e(url('/images/syamsul.jpg')); ?>" class="img-fluid img-rounded" alt="...">
                                                </div>
                                                <div class="col-10 col-md-9">
                                                    <h5>Syamsul Hadi</h5>
                                                    <span class="badge rounded-pill bg-info">Programmer</span>
                                                    <span class="badge rounded-pill bg-danger">100 Project</span>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="nav-link" href="#">
                                            <div class="row mb-2">
                                                <div class="col-2 col-md-3">
                                                    <img src="<?php echo e(url('/images/syamsul.jpg')); ?>" class="img-fluid img-rounded" alt="...">
                                                </div>
                                                <div class="col-10 col-md-9">
                                                    <h5>Syamsul Hadi</h5>
                                                    <span class="badge rounded-pill bg-info">Programmer</span>
                                                    <span class="badge rounded-pill bg-danger">100 Project</span>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="nav-link" href="#">
                                            <div class="row mb-2">
                                                <div class="col-2 col-md-3">
                                                    <img src="<?php echo e(url('/images/syamsul.jpg')); ?>" class="img-fluid img-rounded" alt="...">
                                                </div>
                                                <div class="col-10 col-md-9">
                                                    <h5>Syamsul Hadi</h5>
                                                    <span class="badge rounded-pill bg-info">Programmer</span>
                                                    <span class="badge rounded-pill bg-danger">100 Project</span>
                                                </div>
                                            </div>
                                        </a>
                                    </nav>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="source_kode" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="card-body">
                                    <h5 class="card-title">Special title </h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="artikel" role="tabpanel" aria-labelledby="artikel-tab">
                                <div class="card-body">
                                    <h5 class="card-title">Special</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
                <div class="card">    
                    <div class="card-body">             
                    </div>
                </div>
            </div> 
        </div>
    </div>
</main> 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hawary2\resources\views/home.blade.php ENDPATH**/ ?>