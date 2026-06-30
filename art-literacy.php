<?php 
  $pageTitle = 'Art Literacy Project - Second Karachi Biennale';
  $metaDesc = 'Learn about KBT\'s Art Literacy projects featuring digital history logs and educational placemats detailing Pakistan\'s legendary art heroes.';
  $bodyClass = 'page-art-literacy'; 
  include 'components/header.php'; 
?>

<!-- Page Header (Hero Area) -->
<section class="kb19-artliteracy-hero text-center position-relative">
    <div class="kb19-artliteracy-hero-overlay"></div>
    <div class="container position-relative z-index-2">
        <h1 class="kb19-artliteracy-hero-title wow custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.1s">Art Literacy Project</h1>
        <p class="kb19-artliteracy-hero-subtitle wow custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.25s">KB19 Educational Outreach</p>
        
        <!-- Breadcrumbs -->
        <nav class="kb19-artliteracy-breadcrumbs" aria-label="breadcrumb">
            <ul class="wow custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.4s">
                <li><a href="index.php">Home</a></li>
                <li><a href="kb19-projects.php">KB19 Projects</a></li>
                <li class="active" aria-current="page">Art Literacy</li>
            </ul>
        </nav>
    </div>
</section>

<!-- Main Wrapper -->
<div class="kb19-artliteracy-main-wrapper">
    <div class="container">
        
        <!-- Intro Header -->
        <div class="kb19-artliteracy-intro text-center mb-5 wow custom-anim-top">
            <span class="kb19-artliteracy-tag"><i class="fas fa-graduation-cap me-2"></i>Art Advocacy</span>
            <h2 class="kb19-artliteracy-section-title">Promoting Karachi's Art Legacy</h2>
            <p class="kb19-artliteracy-lead">Giving visibility to cultural heritage and Pakistan's rich artistic history, making it accessible to future generations through public media and collaborative placements.</p>
        </div>

        <div class="row g-5">
            <!-- Left Side: Copy -->
            <div class="col-lg-6">
                <div class="kb19-artliteracy-copy-card wow custom-anim-left" data-wow-duration="1.2s">
                    <h3 class="kb19-artliteracy-heading"><i class="fas fa-video me-2 text-primary"></i>Digital Documentation</h3>
                    <p class="kb19-artliteracy-body-text">
                        Two Art Literacy projects were conceptualized and carried out by interns from the <strong>Indus Valley School of Art and Architecture</strong> and the <strong>Department of Visual Studies, University of Karachi</strong>, during the KBT Summer Internship Program 2018.
                    </p>
                    <p class="kb19-artliteracy-body-text">
                        Interns worked on designs and short videos to showcase and celebrate art heroes and historical locations of Karachi. The sites of historical importance were researched and documented in short videos for dissemination on social media platforms, presenting the city's history from the lens of a new generation of Karachiites.
                    </p>
                </div>
            </div>

            <!-- Right Side: McDonald's Project -->
            <div class="col-lg-6">
                <div class="kb19-artliteracy-mcd-card wow custom-anim-right" data-wow-duration="1.2s">
                    <h3 class="kb19-artliteracy-heading"><i class="fas fa-hamburger me-2 text-primary"></i>McDonald's Collaborative Placement</h3>
                    <p class="kb19-artliteracy-body-text">
                        For the collaborative project with McDonald's, disposable placemats for youth were designed to provide valuable information on the life and work of four legendary artists: <strong>Sadequain, Laila Shahzada, Ismail Gulgee, and Rabia Zuberi</strong>.
                    </p>
                    <p class="kb19-artliteracy-body-text">
                        These bilingual educational placemats were made available to the public, free of cost, at all branches of McDonald's in Karachi, connecting hundreds of thousands of families with Pakistani art history.
                    </p>
                </div>
            </div>
        </div>

        <!-- 4 Artist Cards Grid -->
        <div class="mt-5 pt-3">
            <h3 class="kb19-artliteracy-subheading text-center mb-4"><i class="fas fa-palette me-2"></i>Four Legendary Artists Profiled</h3>
            <div class="kb19-artliteracy-grid">
                
                <!-- Artist 1: Sadequain -->
                <div class="kb19-artliteracy-artist wow custom-anim-top" data-wow-delay="0.1s">
                    <div class="artist-img-wrap">
                        <img src="assets/img/KB17/Sadequain-1.png" alt="Sadequain Artwork" class="img-fluid" loading="lazy">
                    </div>
                    <h4>Sadequain</h4>
                    <p class="small text-muted mb-0">Renowned painter and calligrapher who brought Pakistan's calligraphy art to global fame.</p>
                </div>

                <!-- Artist 2: Gulgee -->
                <div class="kb19-artliteracy-artist wow custom-anim-top" data-wow-delay="0.2s">
                    <div class="artist-img-wrap">
                        <img src="assets/img/KB17/Gulgee.png" alt="Ismail Gulgee Artwork" class="img-fluid" loading="lazy">
                    </div>
                    <h4>Ismail Gulgee</h4>
                    <p class="small text-muted mb-0">Master of abstract calligraphic painting, known for his energetic brushstrokes and portraits.</p>
                </div>

                <!-- Artist 3: Laila Shahzada -->
                <div class="kb19-artliteracy-artist wow custom-anim-top" data-wow-delay="0.3s">
                    <div class="artist-img-wrap">
                        <img src="assets/img/KB17/Laila-Shahzada.png" alt="Laila Shahzada Artwork" class="img-fluid" loading="lazy">
                    </div>
                    <h4>Laila Shahzada</h4>
                    <p class="small text-muted mb-0">Pioneer of modern art in Pakistan, known for her organic shapes and expressionist colors.</p>
                </div>

                <!-- Artist 4: Rabia Zuberi -->
                <div class="kb19-artliteracy-artist wow custom-anim-top" data-wow-delay="0.4s">
                    <div class="artist-img-wrap">
                        <img src="assets/img/KB17/Rabia-Zuberi.png" alt="Rabia Zuberi Artwork" class="img-fluid" loading="lazy">
                    </div>
                    <h4>Rabia Zuberi</h4>
                    <p class="small text-muted mb-0">Distinguished sculptor, painter, and educator who founded the Karachi School of Art.</p>
                </div>

            </div>
        </div>

        <!-- Slider Section for Placemats -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="kb19-artliteracy-carousel-wrap wow custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <h3 class="kb19-artliteracy-carousel-heading text-center mb-4"><i class="fas fa-images me-2"></i>Bilingual Placemats Gallery</h3>
                    
                    <!-- Slick Slider via global-carousel -->
                    <div class="global-carousel" data-slide-show="2" data-md-slide-show="1" data-sm-slide-show="1" data-xs-slide-show="1" data-dots="true" data-arrows="true">
                        
                        <!-- Slide 1 -->
                        <div class="kb19-artliteracy-slide">
                            <a href="assets/img/KB17/Sadequain-1.png" class="popup-image" title="Sadequain placement design showing calligraphic details">
                                <img src="assets/img/KB17/Sadequain-1.png" alt="Placemat Sadequain" class="img-fluid rounded" loading="lazy">
                                <div class="slide-overlay"><i class="fas fa-expand"></i></div>
                            </a>
                        </div>
                        <!-- Slide 2 -->
                        <div class="kb19-artliteracy-slide">
                            <a href="assets/img/KB17/Gulgee.png" class="popup-image" title="Gulgee placement design detailing calligraphic abstracts">
                                <img src="assets/img/KB17/Gulgee.png" alt="Placemat Gulgee" class="img-fluid rounded" loading="lazy">
                                <div class="slide-overlay"><i class="fas fa-expand"></i></div>
                            </a>
                        </div>
                        <!-- Slide 3 -->
                        <div class="kb19-artliteracy-slide">
                            <a href="assets/img/KB17/Laila-Shahzada.png" class="popup-image" title="Laila Shahzada placement design covering organic modern forms">
                                <img src="assets/img/KB17/Laila-Shahzada.png" alt="Placemat Laila Shahzada" class="img-fluid rounded" loading="lazy">
                                <div class="slide-overlay"><i class="fas fa-expand"></i></div>
                            </a>
                        </div>
                        <!-- Slide 4 -->
                        <div class="kb19-artliteracy-slide">
                            <a href="assets/img/KB17/Rabia-Zuberi.png" class="popup-image" title="Rabia Zuberi placement design honoring sculptor and education achievements">
                                <img src="assets/img/KB17/Rabia-Zuberi.png" alt="Placemat Rabia Zuberi" class="img-fluid rounded" loading="lazy">
                                <div class="slide-overlay"><i class="fas fa-expand"></i></div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include 'components/footer.php'; ?>
