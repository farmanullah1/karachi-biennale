<?php 
  $pageTitle = 'Storytelling by Artists - Third Karachi Biennale KB22';
  $metaDesc = 'Read about the KB22 Storytelling by Artists program, where artists shared their personal histories, inspirations, and cultural lineages.';
  $bodyClass = 'page-kb22-storytelling'; 
  include 'components/header.php'; 
?>

<!-- 1. Page Header (Hero Area) -->
<section class="kb22-programs-hero text-center position-relative">
    <div class="kb22-programs-hero-overlay"></div>
    <div class="container position-relative z-index-2">
        <h1 class="kb22-programs-hero-title wow custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.1s">Storytelling by Artists</h1>
        <p class="kb22-programs-hero-subtitle wow custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.25s">Third Karachi Biennale KB22</p>
        
        <!-- Breadcrumbs -->
        <nav class="kb22-programs-breadcrumbs" aria-label="breadcrumb">
            <ul class="wow custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.4s">
                <li><a href="index.php">Home</a></li>
                <li><a href="kb22-highlights.php">Highlights &amp; Projects</a></li>
                <li class="active" aria-current="page">Storytelling</li>
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
                    <h2 class="kb22-programs-section-heading"><i class="fas fa-book-open me-3 text-primary"></i>Artistic Legacies &amp; Oral Histories</h2>
                    
                    <p class="kb22-programs-lead-text">
                        Storytelling serves as a bridge connecting modern digital art media with the ancient oral traditions of South Asia.
                    </p>
                    
                    <p class="kb22-programs-body-text">
                        The Storytelling by Artists program at KB22 brought together participating international and local practitioners to share their curatorial ideas, research journeys, and personal connections to the themes on display. These gatherings were open to the public, fostering dialogues on art, ecology, and data.
                    </p>
                    
                    <p class="kb22-programs-body-text">
                        Through these intimate sessions, artists spoke about the histories embedded in their work—such as the 5,000-year-old Borindo instrument or the colonial narratives of plant naming—providing audiences with a deeper understanding of the socio-political contexts of new media art.
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
                            <a href="assets/img/KB22HighlightsandProjects/storytelling_1.webp" class="kb22-programs-lightbox" title="Artists sharing narratives">
                                <img src="assets/img/KB22HighlightsandProjects/storytelling_1-768x512.webp" alt="storytelling_1" class="img-fluid rounded" loading="lazy">
                                <div class="kb22-programs-gallery-overlay"><i class="fas fa-expand"></i></div>
                            </a>
                        </div>
                        <!-- Image 2 -->
                        <div class="kb22-programs-masonry-item">
                            <a href="assets/img/KB22HighlightsandProjects/storytelling_2.webp" class="kb22-programs-lightbox" title="Public oral history recital">
                                <img src="assets/img/KB22HighlightsandProjects/storytelling_2-768x960.webp" alt="storytelling_2" class="img-fluid rounded" loading="lazy">
                                <div class="kb22-programs-gallery-overlay"><i class="fas fa-expand"></i></div>
                            </a>
                        </div>
                        <!-- Image 3 -->
                        <div class="kb22-programs-masonry-item">
                            <a href="assets/img/KB22HighlightsandProjects/storytelling-3.webp" class="kb22-programs-lightbox" title="Group discussion on heritage preservation">
                                <img src="assets/img/KB22HighlightsandProjects/storytelling-3.webp" alt="storytelling-3" class="img-fluid rounded" loading="lazy">
                                <div class="kb22-programs-gallery-overlay"><i class="fas fa-expand"></i></div>
                            </a>
                        </div>
                        <!-- Image 4 -->
                        <div class="kb22-programs-masonry-item">
                            <a href="assets/img/KB22HighlightsandProjects/storytelling-4.webp" class="kb22-programs-lightbox" title="Interactive workshop assembly">
                                <img src="assets/img/KB22HighlightsandProjects/storytelling-4.webp" alt="storytelling-4" class="img-fluid rounded" loading="lazy">
                                <div class="kb22-programs-gallery-overlay"><i class="fas fa-expand"></i></div>
                            </a>
                        </div>
                        <!-- Image 5 -->
                        <div class="kb22-programs-masonry-item">
                            <a href="assets/img/KB22HighlightsandProjects/storytelling-5.webp" class="kb22-programs-lightbox" title="Artist reflections in gallery spaces">
                                <img src="assets/img/KB22HighlightsandProjects/storytelling-5.webp" alt="storytelling-5" class="img-fluid rounded" loading="lazy">
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
