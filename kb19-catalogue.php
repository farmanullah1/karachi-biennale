<?php 
  $pageTitle = 'KB19 Exhibition Catalogue - Second Karachi Biennale';
  $metaDesc = 'View the digital publication, essays, and artist statements in the official catalogue of the Second Karachi Biennale KB19.';
  $bodyClass = 'page-kb19-catalogue'; 
  include 'components/header.php'; 
?>

<!-- Skip Link for Accessibility -->
<a href="#kb19c-main-content" class="skip-link visually-hidden-focusable">Skip to content</a>

<!-- 1. Hero Banner Area -->
<section class="kb19c-hero-section">
    <div class="kb19c-hero-banner">
        <div class="kb19c-hero-overlay"></div>
        <div class="container text-center">
            <h1 class="kb19c-hero-title">Exhibition Catalogue</h1>
            <p class="kb19c-hero-subtitle">Second Karachi Biennale KB19 Archive</p>
            
            <!-- Breadcrumbs -->
            <nav class="kb19c-breadcrumbs" aria-label="breadcrumb">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li>Past Biennale</li>
                    <li>KB19</li>
                    <li class="active" aria-current="page">Catalogue</li>
                </ul>
            </nav>
        </div>
    </div>
</section>

<!-- 2. Main Content Area -->
<main id="kb19c-main-content" class="kb19c-main-wrapper">
    <div class="container">
        
        <div class="row gy-5 align-items-center">
            <!-- Left: Promotional Cover Mockup -->
            <div class="col-lg-5 text-center">
                <div class="kb19c-cover-wrap">
                    <div class="kb19c-cover-mockup">
                        <div class="kb19c-cover-inner">
                            <span class="kb19c-cover-edition">Second Edition</span>
                            <h2 class="kb19c-cover-title">KB19</h2>
                            <p class="kb19c-cover-theme">Flight Interrupted</p>
                            <span class="kb19c-cover-year">2019</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Details & Call to Actions -->
            <div class="col-lg-7">
                <div class="kb19c-details-card">
                    <span class="kb19c-tag"><i class="fas fa-book-open me-2"></i>Official Archive Publication</span>
                    <h2 class="kb19c-details-title">KB19 Exhibition Catalogue</h2>
                    <p class="kb19c-details-desc">The official catalogue for the Second Karachi Biennale documents the extensive site-specific installations, public interventions, and discursive panels curated under the theme <em>"Flight Interrupted: Eco-leaks from the Invasion Desk"</em>.</p>
                    <p class="kb19c-details-desc text-muted">Inside the catalogue, you will find curatorial journals by Chief Curator Muhammad Zeeshan, in-depth thematic essays by local and international art historians, and full-color photographs of installations across all nine heritage sites in Karachi.</p>
                    
                    <div class="kb19c-redirect-actions">
                        <a href="https://catalogue.karachibiennale.org.pk/" target="_blank" class="kb19c-btn-primary"><i class="fas fa-book-reader me-2"></i> Interactive Flipbook <i class="fas fa-external-link-alt ms-2"></i></a>
                        <a href="https://catalogue.karachibiennale.org.pk/" target="_blank" class="kb19c-btn-secondary"><i class="fas fa-file-download me-2"></i> Download Catalogue PDF</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

<?php include 'components/footer.php'; ?>
