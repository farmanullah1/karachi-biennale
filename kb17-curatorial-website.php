<?php 
  $pageTitle = 'KB17 Curatorial Website & KB22 - Karachi Biennale';
  $metaDesc = 'Access the First Karachi Biennale curatorial platform and explore curatorial statements, visions, and archives from both KB17 and KB22.';
  $bodyClass = 'page-kb17-curatorial-website'; 
  include 'components/header.php'; 
?>

<!-- Skip Link for Accessibility -->
<a href="#kb17cw-main-content" class="skip-link visually-hidden-focusable">Skip to content</a>

<!-- 1. Hero Banner Area -->
<section class="kb17cw-hero-section">
    <div class="kb17cw-hero-banner">
        <div class="kb17cw-hero-overlay"></div>
        <div class="container text-center">
            <h1 class="kb17cw-hero-title">Curatorial Platforms</h1>
            <p class="kb17cw-hero-subtitle">Karachi Biennale Trust Archives</p>
            
            <!-- Breadcrumbs -->
            <nav class="kb17cw-breadcrumbs" aria-label="breadcrumb">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li>Past Biennale</li>
                    <li>KB17</li>
                    <li class="active" aria-current="page">Curatorial Website</li>
                </ul>
            </nav>
        </div>
    </div>
</section>

<!-- 2. Main Content Area -->
<main id="kb17cw-main-content" class="kb17cw-main-wrapper">
    <div class="container">
        
        <!-- Intro Header -->
        <div class="kb17cw-intro text-center mb-5">
            <h2 class="kb17cw-section-heading">Curatorial Archives & Vision</h2>
            <p class="kb17cw-section-lead">The curatorial framework is the intellectual foundation of the Karachi Biennale. Discover our digital portals and cross-referenced resources spanning multiple biennale editions.</p>
        </div>

        <!-- Portals Grid -->
        <div class="row g-5 justify-content-center">
            <!-- Portal 1: KB17 Curatorial Website -->
            <div class="col-md-6 col-lg-5">
                <div class="kb17cw-portal-card">
                    <div class="kb17cw-card-icon bg-gradient-yellow">
                        <i class="fas fa-globe"></i>
                    </div>
                    <div class="kb17cw-card-body">
                        <h3 class="kb17cw-portal-title">KB17 Curatorial Site</h3>
                        <p class="kb17cw-portal-desc">The official stand-alone archive for the First Karachi Biennale. Access detailed artists directories, critical essays, installation documentations, and interactive documentation from the inaugural 2017 curation.</p>
                        <a href="http://www.kbcuratorial.com/" target="_blank" rel="noopener" class="kb17cw-portal-btn btn-primary-gradient">
                            Visit KB17 Website <i class="fas fa-external-link-alt ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Portal 2: KB22 Curatorial Transition -->
            <div class="col-md-6 col-lg-5">
                <div class="kb17cw-portal-card">
                    <div class="kb17cw-card-icon bg-gradient-teal">
                        <i class="fas fa-compass"></i>
                    </div>
                    <div class="kb17cw-card-body">
                        <h3 class="kb17cw-portal-title">Karachi Biennale 2022</h3>
                        <p class="kb17cw-portal-desc">Explore the curatorial framework of the Third Karachi Biennale (KB22), themed around "Collective Imagination" and curated by Faisal Anwar. Dive into the intersection of visual arts and modern technologies.</p>
                        <a href="kb22-curator.php" class="kb17cw-portal-btn btn-secondary-gradient">
                            Explore KB22 Curator <i class="fas fa-chevron-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

<?php include 'components/footer.php'; ?>
