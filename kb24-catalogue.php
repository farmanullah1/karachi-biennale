<?php 
  $pageTitle = 'KB24 Exhibition Catalogue - Fourth Karachi Biennale';
  $metaDesc = 'View the digital publication and interactive flipbook catalogue of the Fourth Karachi Biennale (KB24), showcasing theme essays, artist statements, and installation photos.';
  $bodyClass = 'page-kb24-catalogue'; 
  include 'components/header.php'; 
?>

<!-- 1. Page Header (Hero Area) -->
<section class="kb24c-hero-section text-center">
    <div class="container">
        <h1 class="kb24c-hero-title">Exhibition Catalogue</h1>
        <p class="kb24c-hero-subtitle">Fourth Karachi Biennale KB24 Digital Archive</p>
        <p class="kb24c-hero-intro">The official catalogue of the Fourth Karachi Biennale (KB24) features comprehensive essays by art critics and curators, detailed profiles of all 31 participating artists, statements on their installations, and photographic documentation of the exhibition venues. Browse the interactive digital publication below.</p>
        
        <!-- Breadcrumbs -->
        <nav class="kb24c-breadcrumbs" aria-label="breadcrumb">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>Past Biennale</li>
                <li>KB24</li>
                <li class="active" aria-current="page">Catalogue</li>
            </ul>
        </nav>
    </div>
</section>

<div class="kb24c-main-wrapper">
    <div class="container">
        
        <!-- 2. Flipbook Embed Section -->
        <section class="kb24c-flipbook-section">
            <div class="kb24c-section-header text-center">
                <span class="kb24c-tag"><i class="fas fa-book-reader me-2"></i>Interactive Flipbook</span>
                <h2 class="kb24c-section-title">KB24 E-Catalogue</h2>
            </div>
            
            <div class="kb24c-flipbook-container-wrap">
                <div class="kb24c-flipbook-container">
                    <!-- Heyzine Flipbook Embed Iframe. (Replace specific id in src if a new version is uploaded) -->
                    <iframe src="https://heyzine.com/flip-book/b8398b5843.html" class="kb24c-iframe" title="Karachi Biennale KB24 Digital Flipbook Catalogue" allowfullscreen></iframe>
                </div>
            </div>
            
            <div class="kb24c-download-wrap text-center">
                <p class="kb24c-download-text">Prefer an offline copy? You can download the complete catalogue in PDF format.</p>
                <a href="https://karachibiennale.org.pk" target="_blank" class="kb24c-download-btn"><i class="fas fa-file-pdf me-2"></i> Download Catalogue PDF</a>
            </div>
        </section>

    </div>
</div>

<?php include 'components/footer.php'; ?>
