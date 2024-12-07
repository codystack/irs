<?php
include "./components/header.php";
include "./components/navbar.php";
?>

<main>


    <section class="position-relative pt-sm-8 pt-lg-9 pb-0 overflow-hidden">
        
        <div class="position-absolute top-0 end-0 z-index-2 mt-7 me-n9 d-none d-md-block">
            <img src="assets/images/elements/grad-shape/05.png" class="rotate-180" alt="">
        </div>

        <div class="position-absolute top-0 start-0 ms-n4 mt-7">
            <img src="assets/images/elements/grad-shape/blur-decoration.svg" class="blur-7 opacity-1" alt="Grad shape">
        </div>

        <div class="container position-relative z-index-2 pt-4 pb-5 pb-lg-8">
            <nav class="mb-2" aria-label="breadcrumb">
                <ol class="breadcrumb pt-0">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About us</li>
                </ol>
            </nav>

            <h1>Building a Better</h1>
            <h6 class="display-1"><span class="text-primary">Secured</span> Future</h6>

            <div class="align-items-start gap-3 mt-4 mt-sm-5">
                <p class="border-purple border-2 border-start ps-2">Many organizations today lack an incident response plan and those that do often fail to regularly test their plans. This leaves them vulnerable to operational disruption, financial loss, or reputational damage. This lack of preparedness poses a significant risk to the organization. Without proper planning, incident response teams may experience delays, miscommunication, and ineffective IR strategies, resulting in greater damage and extended recovery times.</p>
                <p class="border-purple border-2 border-start ps-2">The IR Simulator platform aims to solve this problem by offering an interactive, risk-free environment for users to practice their skills. Through simulation, participants will gain invaluable experience in identifying threats, coordinating responses, and communicating with stakeholders, ultimately improving their readiness and effectiveness in handling real-world cybersecurity incidents.</p>
                <a class="btn btn-primary icon-link icon-link-hover mt-2" href="team">Meet our team<i class="bi bi-arrow-right"></i> </a>
            </div>
        </div>

        <!-- Image -->
        <div class="bg-secondary-grad position-relative pb-5 pb-lg-8 px-2 px-md-5">
            <!-- Blur divider -->
            <div class="bg-body blur-5 h-300px w-100 position-absolute top-0 start-0 mt-n5"></div>
            <!-- Main image -->
            <div class="h-300px h-md-500px h-xl-700px z-index-2 position-relative rounded-4" style="background:url(assets/images/bg/03.jpg) no-repeat; background-size:cover; background-position:top;"> </div>
        </div>
    </section>

</main>

<?php include "./components/footer.php"; ?>