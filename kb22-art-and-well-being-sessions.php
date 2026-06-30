<?php 
  $pageTitle = 'Art & Wellness Workshop - Third Karachi Biennale KB22';
  $metaDesc = 'Read about the KB22 Art and Well-being sessions, focusing on community care, healing, and emotional resilience through artistic expression.';
  $bodyClass = 'page-kb22-wellness'; 
  include 'components/header.php'; 
?>

<!-- 1. Page Header (Hero Area) -->
<section class="kb22-programs-hero text-center position-relative">
    <div class="kb22-programs-hero-overlay"></div>
    <div class="container position-relative z-index-2">
        <h1 class="kb22-programs-hero-title wow custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.1s">Art &amp; Wellness Workshop</h1>
        <p class="kb22-programs-hero-subtitle wow custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.25s">Third Karachi Biennale KB22</p>
        
        <!-- Breadcrumbs -->
        <nav class="kb22-programs-breadcrumbs" aria-label="breadcrumb">
            <ul class="wow custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.4s">
                <li><a href="index.php">Home</a></li>
                <li><a href="kb22-highlights.php">Highlights &amp; Projects</a></li>
                <li class="active" aria-current="page">Art &amp; Wellness</li>
            </ul>
        </nav>
    </div>
</section>

<!-- 2. Main Body Content -->
<div class="kb22-programs-main-wrapper">
    <div class="container">
        <div class="row g-5">
            <!-- Left Side: Content Copy -->
            <div class="col-lg-7">
                <div class="kb22-programs-copy-card wow custom-anim-left" data-wow-duration="1.2s">
                    <h2 class="kb22-programs-section-heading"><i class="fas fa-heartbeat me-3 text-primary"></i>Art as a Pathway to Well-being</h2>
                    
                    <p class="kb22-programs-lead-text">
                        Art provides us a unique pathway for healing, emotional reflection, and building personal resilience in complex urban spaces.
                    </p>
                    
                    <p class="kb22-programs-body-text">
                        During KB22, the Art and Well-being Sessions focused on addressing stress, trauma, and psychological support through creative arts. Organized in collaboration with local clinical psychologists and leading artists, these workshops engaged participants in sensory activities, painting, and visual journaling.
                    </p>
                    
                    <p class="kb22-programs-body-text">
                        By integrating physical movements and digital projections, these sessions created a safe space for dialogue, self-expression, and community care. They explored how collective creation and sharing can empower individuals on the edge of the digital divide.
                    </p>
                </div>
            </div>

            <!-- Right Side: Gallery Grid -->
            <div class="col-lg-5">
                <div class="kb22-programs-gallery-wrap wow custom-anim-right" data-wow-duration="1.2s">
                    <h3 class="kb22-programs-gallery-heading"><i class="fas fa-images me-2"></i>Event Gallery</h3>
                    
                    <div class="kb22-programs-masonry">
                        <!-- Image 1 -->
                        <div class="kb22-programs-masonry-item">
                            <a href="assets/img/KB22HighlightsandProjects/art_and_well_being_1-scaled.webp" class="kb22-programs-lightbox" title="Hands-on painting activity">
                                <img src="assets/img/KB22HighlightsandProjects/art_and_well_being_1-scaled-600x400.webp" alt="art_and_well_being_1" class="img-fluid rounded" loading="lazy">
                                <div class="kb22-programs-gallery-overlay"><i class="fas fa-expand"></i></div>
                            </a>
                        </div>
                        <!-- Image 2 -->
                        <div class="kb22-programs-masonry-item">
                            <a href="assets/img/KB22HighlightsandProjects/art_and_well_being_2-scaled.webp" class="kb22-programs-lightbox" title="Collaborative wellness circles">
                                <img src="assets/img/KB22HighlightsandProjects/art_and_well_being_2-scaled-600x400.webp" alt="art_and_well_being_2" class="img-fluid rounded" loading="lazy">
                                <div class="kb22-programs-gallery-overlay"><i class="fas fa-expand"></i></div>
                            </a>
                        </div>
                        <!-- Image 3 -->
                        <div class="kb22-programs-masonry-item">
                            <a href="assets/img/KB22HighlightsandProjects/art_and_well_being_3-scaled-600x400.webp" class="kb22-programs-lightbox" title="Creative expression therapy">
                                <img src="assets/img/KB22HighlightsandProjects/art_and_well_being_3-scaled-600x400.webp" alt="art_and_well_being_3" class="img-fluid rounded" loading="lazy">
                                <div class="kb22-programs-gallery-overlay"><i class="fas fa-expand"></i></div>
                            </a>
                        </div>
                        <!-- Image 4 -->
                        <div class="kb22-programs-masonry-item">
                            <a href="assets/img/KB22HighlightsandProjects/art_and_well_being_5-scaled.webp" class="kb22-programs-lightbox" title="Group dynamic reflection sessions">
                                <img src="assets/img/KB22HighlightsandProjects/art_and_well_being_5-scaled-600x400.webp" alt="art_and_well_being_5" class="img-fluid rounded" loading="lazy">
                                <div class="kb22-programs-gallery-overlay"><i class="fas fa-expand"></i></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'components/footer.php'; ?>
