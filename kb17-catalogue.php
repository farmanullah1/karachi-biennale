<?php 
  $pageTitle = 'KB17 Exhibition Catalogue - First Karachi Biennale';
  $metaDesc = 'View and download the official publication of the First Karachi Biennale (KB17). Discover essays, artist biographies, and installation records under the theme WITNESS.';
  $bodyClass = 'page-kb17-catalogue'; 
  include 'components/header.php'; 
?>

<!-- Skip Link for Accessibility -->
<a href="#kb17cat-main-content" class="skip-link visually-hidden-focusable">Skip to content</a>

<!-- 1. Hero Banner Area -->
<section class="kb17cat-hero-section">
    <div class="kb17cat-hero-banner">
        <div class="kb17cat-hero-overlay"></div>
        <div class="container text-center">
            <h1 class="kb17cat-hero-title">Exhibition Catalogue</h1>
            <p class="kb17cat-hero-subtitle">First Karachi Biennale KB17 Archive</p>
            
            <!-- Breadcrumbs -->
            <nav class="kb17cat-breadcrumbs" aria-label="breadcrumb">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li>Past Biennale</li>
                    <li>KB17</li>
                    <li class="active" aria-current="page">Catalogue</li>
                </ul>
            </nav>
        </div>
    </div>
</section>

<!-- 2. Main Content Area -->
<main id="kb17cat-main-content" class="kb17cat-main-wrapper">
    <div class="container">
        
        <div class="row gy-5 align-items-center">
            <!-- Left: Promotional Cover Mockup -->
            <div class="col-lg-5 text-center">
                <div class="kb17cat-cover-wrap">
                    <div class="kb17cat-cover-mockup">
                        <div class="kb17cat-cover-inner">
                            <span class="kb17cat-cover-edition">First Edition</span>
                            <h2 class="kb17cat-cover-title">KB17</h2>
                            <p class="kb17cat-cover-theme">WITNESS</p>
                            <span class="kb17cat-cover-year">2017</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Details & Call to Actions -->
            <div class="col-lg-7">
                <div class="kb17cat-details-card">
                    <span class="kb17cat-tag"><i class="fas fa-book-open me-2"></i>Official Archive Publication</span>
                    <h2 class="kb17cat-details-title">KB17 Exhibition Catalogue</h2>
                    <p class="kb17cat-details-desc">The KB17 Catalogue captures the full breadth of the First Karachi Biennale, featuring critical curatorial essays, artist profiles, and documentation of the exhibitions, outreach programmes, and public engagements. This comprehensive publication serves as a lasting record of the Biennale's exploration of <em>WITNESS</em>.</p>
                    <p class="kb17cat-details-desc text-muted">Inside the catalogue, you will find curatorial journals by Chief Curator Amin Gulgee, in-depth thematic essays by local and international art critics, and full-color photographs of installations across all historical exhibition clusters in Karachi.</p>
                    
                    <div class="kb17cat-redirect-actions">
                        <a href="assets/KB-catalogue-proofread-edit.pdf" target="_blank" class="kb17cat-btn-primary">
                            <i class="fas fa-file-pdf me-2"></i> View Catalogue PDF <i class="fas fa-external-link-alt ms-2"></i>
                        </a>
                        <a href="assets/KB-catalogue-proofread-edit.pdf" download class="kb17cat-btn-secondary">
                            <i class="fas fa-file-download me-2"></i> Download Catalogue PDF
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

<?php include 'components/footer.php'; ?>
