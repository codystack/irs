<?php
include "./components/header.php";
include "./components/navbar.php";
?>

<main>

    <section class="position-relative pt-8 pt-xl-9 overflow-hidden">
        
        <div class="position-absolute end-0 top-0">
            <img src="assets/images/elements/grad-shape/blur-decoration-2.svg" class="opacity-1 blur-8 h-300px rotate-335" alt="Grad shape">
        </div>
        
        <div class="position-absolute start-0 top-0">
            <img src="assets/images/elements/grad-shape/blur-decoration-2.svg" class="opacity-2 blur-9 h-300px rotate-335" alt="Grad shape">
        </div>

        <div class="position-absolute top-0 start-0">
            <img src="assets/images/elements/bg-pattern.svg" style="opacity: 0.05;" alt="bg pattern">
        </div>

        <div class="container position-relative">
            <div class="row">
                <div class="col-md-7 mx-auto text-center">
                    <h1 class="mb-4">Meet our experts</h1>
                    <p class="mb-0">Our dedicated team is passionate about delivering exceptional results that exceed your expectations.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-0">
        <div class="container">
            <div class="row g-4 g-sm-5">
                
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="card card-img-scale card-content-hover shadow rounded-top-pill  overflow-hidden">
                        <div class="card-img-scale-wrapper">         
                            <img src="assets/images/oscar.jpg" class="card-img-top img-scale" alt="card image">
                        </div>
                        
                        <div class="card-body text-center px-0">
                            <h6 class="mb-0">Oscar Livinus</h6>
                        </div>
                    </div>
                </div>

                
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="card card-img-scale card-content-hover shadow rounded-top-pill  overflow-hidden">
                        <div class="card-img-scale-wrapper">    
                            <img src="assets/images/femi.jpg" class="card-img-top img-scale" alt="card image">
                        </div>
                        
                        <div class="card-body text-center px-0">
                            <h6 class="mb-0">Gbenga Alade</h6>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="card card-img-scale card-content-hover shadow rounded-top-pill  overflow-hidden">
                        <div class="card-img-scale-wrapper">           
                            <img src="assets/images/david.jpg" class="card-img-top img-scale" alt="card image">
                        </div>
                        
                        <div class="card-body text-center px-0">
                            <h6 class="mb-0">David Stennett</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>


<?php include "./components/footer.php"; ?>