<?php 
  $pageTitle = 'Educational Programming - Third Karachi Biennale KB22';
  $metaDesc = 'Explore the KB22 educational programs, including interactive school tours, conversation circles, and art teachers training workshops.';
  $bodyClass = 'page-kb22-educational'; 
  include 'components/header.php'; 
?>

<!-- 1. Page Header (Hero Area) -->
<section class="kb22-programs-hero text-center position-relative">
    <div class="kb22-programs-hero-overlay"></div>
    <div class="container position-relative z-index-2">
        <h1 class="kb22-programs-hero-title wow custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.1s">Educational Programming</h1>
        <p class="kb22-programs-hero-subtitle wow custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.25s">Third Karachi Biennale KB22</p>
        
        <!-- Breadcrumbs -->
        <nav class="kb22-programs-breadcrumbs" aria-label="breadcrumb">
            <ul class="wow custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.4s">
                <li><a href="index.php">Home</a></li>
                <li><a href="kb22-highlights.php">Highlights &amp; Projects</a></li>
                <li class="active" aria-current="page">Educational Programming</li>
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
                    <h2 class="kb22-programs-section-heading"><i class="fas fa-graduation-cap me-3 text-primary"></i>Nurturing Analytical Minds</h2>
                    
                    <p class="kb22-programs-lead-text">
                        Art provides us a unique opportunity to hone children's analytical and critical thinking skills, and the KB22 educational program had multiple activities that enabled children to explore art.
                    </p>
                    
                    <p class="kb22-programs-body-text">
                        During the Biennale, School Tours took place at four venues of the Biennale, for four days a week, allowing school children to review the artwork critically under the guidance of an art specialist/educator. The programming also included a conversation circle for A'level and mature students.
                    </p>
                    
                    <p class="kb22-programs-body-text">
                        Additionally, an Art Teachers Workshop was organized to empower teachers by enabling them to share their experiences and come up with strategies that would allow Art to become an integral part of the curriculum.
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
                            <a href="assets/img/KB22HighlightsandProjects/educational_programming_5.webp" class="kb22-programs-lightbox" title="Guided School Tour Session">
                                <img src="assets/img/KB22HighlightsandProjects/educational_programming_5-576x1024.webp" alt="educational_programming_5" class="img-fluid rounded" loading="lazy">
                                <div class="kb22-programs-gallery-overlay"><i class="fas fa-expand"></i></div>
                            </a>
                        </div>
                        <!-- Image 2 -->
                        <div class="kb22-programs-masonry-item">
                            <a href="assets/img/KB22HighlightsandProjects/educational_programming_4.webp" class="kb22-programs-lightbox" title="Interactive Art Exploration">
                                <img src="assets/img/KB22HighlightsandProjects/educational_programming_4-1024x768.webp" alt="educational_programming_4" class="img-fluid rounded" loading="lazy">
                                <div class="kb22-programs-gallery-overlay"><i class="fas fa-expand"></i></div>
                            </a>
                        </div>
                        <!-- Image 3 -->
                        <div class="kb22-programs-masonry-item">
                            <a href="assets/img/KB22HighlightsandProjects/educational_programming_2.webp" class="kb22-programs-lightbox" title="Children Engagement with Kinetic Exhibits">
                                <img src="assets/img/KB22HighlightsandProjects/educational_programming_2-1024x766.webp" alt="educational_programming_2" class="img-fluid rounded" loading="lazy">
                                <div class="kb22-programs-gallery-overlay"><i class="fas fa-expand"></i></div>
                            </a>
                        </div>
                        <!-- Image 4 -->
                        <div class="kb22-programs-masonry-item">
                            <a href="assets/img/KB22HighlightsandProjects/educational_programming_1-1024x576.webp" class="kb22-programs-lightbox" title="Guided Walkthrough for Young Learners">
                                <img src="assets/img/KB22HighlightsandProjects/educational_programming_1-1024x576.webp" alt="educational_programming_1" class="img-fluid rounded" loading="lazy">
                                <div class="kb22-programs-gallery-overlay"><i class="fas fa-expand"></i></div>
                            </a>
                        </div>
                        <!-- Image 5 -->
                        <div class="kb22-programs-masonry-item">
                            <a href="assets/img/KB22HighlightsandProjects/educational_programming_3-1024x766.webp" class="kb22-programs-lightbox" title="Collaborative Classroom Activities">
                                <img src="assets/img/KB22HighlightsandProjects/educational_programming_3-1024x766.webp" alt="educational_programming_3" class="img-fluid rounded" loading="lazy">
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
