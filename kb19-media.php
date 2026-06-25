<?php 
  $pageTitle = 'KB19 Media - Second Karachi Biennale';
  $metaDesc = 'Read press releases, media coverage, and download the official press kit gallery for the Second Karachi Biennale KB19.';
  $bodyClass = 'page-kb19-media'; 
  include 'components/header.php'; 
?>

<!-- Skip Link for Accessibility -->
<a href="#kb19m-main-content" class="skip-link visually-hidden-focusable">Skip to content</a>

<!-- 1. Hero Banner Area -->
<section class="kb19m-hero-section">
    <div class="kb19m-hero-banner" style="background-image: url('assets/img/bg/kb19-page-banner-2.jpg');">
        <div class="kb19m-hero-overlay"></div>
        <div class="container text-center">
            <h1 class="kb19m-hero-title">KB19 Media</h1>
            <p class="kb19m-hero-subtitle">Press Kit & Coverage</p>
            
            <!-- Breadcrumbs -->
            <nav class="kb19m-breadcrumbs" aria-label="breadcrumb">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li>Past Biennale</li>
                    <li>KB19</li>
                    <li class="active" aria-current="page">Media</li>
                </ul>
            </nav>
        </div>
    </div>
</section>

<!-- 2. Main Content Area -->
<main id="kb19m-main-content" class="kb19m-main-wrapper">
    <div class="container">
        
        <!-- Intro Section -->
        <div class="kb19m-intro text-center mb-5">
            <h2 class="kb19m-section-heading">Press & Media Resources</h2>
            <p class="kb19m-section-lead">Access official press releases, news archives, and download promotional high-resolution media highlights from the Second Karachi Biennale.</p>
        </div>

        <!-- Downloads Grid -->
        <section class="kb19m-downloads-section mb-5">
            <h3 class="kb19m-section-title"><i class="fas fa-file-download me-2"></i>Official Press Releases</h3>
            <div class="row g-4">
                <!-- English Release -->
                <div class="col-md-4">
                    <div class="kb19m-download-card">
                        <div class="kb19m-download-icon bg-gradient-yellow">
                            <i class="far fa-file-pdf"></i>
                        </div>
                        <h4 class="kb19m-download-title">English Press Release</h4>
                        <p class="kb19m-download-desc">Official curatorial summary, exhibition statistics, and announcements released to international and domestic media.</p>
                        <a href="assets/img/KB19App/English-press-release.pdf" target="_blank" class="kb19m-btn-download">Download PDF <i class="fas fa-arrow-down ms-1"></i></a>
                    </div>
                </div>
                <!-- Urdu Release -->
                <div class="col-md-4">
                    <div class="kb19m-download-card">
                        <div class="kb19m-download-icon bg-gradient-teal">
                            <i class="far fa-file-pdf"></i>
                        </div>
                        <h4 class="kb19m-download-title">Urdu Press Release</h4>
                        <p class="kb19m-download-desc">Official news summary and information sheet translated for national language publications and Urdu media outlets.</p>
                        <a href="assets/img/KB19App/Urdu-Press-Release-2.pdf" target="_blank" class="kb19m-btn-download">Download PDF <i class="fas fa-arrow-down ms-1"></i></a>
                    </div>
                </div>
                <!-- Prizes Release -->
                <div class="col-md-4">
                    <div class="kb19m-download-card">
                        <div class="kb19m-download-icon bg-gradient-blue">
                            <i class="far fa-file-pdf"></i>
                        </div>
                        <h4 class="kb19m-download-title">Prizes Press Release</h4>
                        <p class="kb19m-download-desc">Official announcements declaring winners of the KB19 Emerging Artist and Lifetime Achievement Awards.</p>
                        <a href="assets/img/KB19App/KB-Prizes-Press-Release.pdf" target="_blank" class="kb19m-btn-download">Download PDF <i class="fas fa-arrow-down ms-1"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Press Kit Gallery -->
        <section class="kb19m-gallery-section">
            <div class="kb19m-gallery-header mb-4">
                <h3 class="kb19m-section-title"><i class="fas fa-images me-2"></i>Press Kit Image Gallery</h3>
                <p class="text-muted">Click on any image to open the high-resolution lightbox view. All images are available for publication rights.</p>
            </div>
            
            <div class="row g-3 popup-gallery">
                <?php 
                $pressImages = [
                    ['Yassine Balbzioui Art Installation', 'Yassine-Balbzioui1-600x400.jpg'],
                    ['Sinta Tantra Installation at KB19', 'Sinta-Tantra1-600x400.jpg'],
                    ['Imran Qureshi Installation', 'Imran-Qureshi-31-600x400.jpg'],
                    ['Irfan Gul Dahri Art Installation', 'Irfan-Gul-Dahri1-600x400.jpg'],
                    ['Juan Pablo Art Installation', 'Juan-Pablo-11-600x400.jpg'],
                    ['Khalil Chishtee Sculpture Installation', 'Khalil-Chishtee1-600x400.jpg'],
                    ['Mohsen Keiany Painting Highlight', 'Mohsen-Keiany1-600x400.jpg'],
                    ['Qinza Najm Art Performance', 'Qinza-Najm1-600x400.jpg'],
                    ['R.M. Naeem Exhibition Artwork', 'RM-Naeem1-600x400.jpg'],
                    ['Seher Naveed Spatial Intervention', 'Seher-Naveed1-600x400.jpg'],
                    ['Victorine Muller Inflatable Installation', 'Victorine-Muller1-600x400.jpg'],
                    ['Public Mangrove Plantation Project', 'Manggrove-Project1-600x400.jpg'],
                    ['Eco Art Collective Work in Mangroves', 'Mangrove-Project-11-600x400.jpg'],
                    ['School Students Tours at KB19', 'Tours1-600x400.jpg'],
                    ['Exhibition Installation View 1', '71275758_395295247829201_8894195727425601536_n-600x400.jpg'],
                    ['Exhibition Installation View 2', '71466678_393232041368855_2239993700207820800_n-600x400.jpg'],
                    ['Exhibition Installation View 3', '71569393_396616444363748_5919384241572937728_n-600x400.jpg'],
                    ['Exhibition Installation View 4', '71637869_394393641252695_7367462697694134272_n-600x400.jpg'],
                    ['Exhibition Installation View 5', '72193102_392142844811108_4422113441951514624_n-600x400.jpg'],
                    ['Exhibition Installation View 6', '74351456_1175609075983684_4580400527455551488_n-600x400.jpg']
                ];
                foreach($pressImages as $img):
                ?>
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="assets/img/KB19App/<?php echo $img[1]; ?>" class="kb19m-gallery-link popup-image" title="<?php echo $img[0]; ?>">
                        <div class="kb19m-gallery-card">
                            <div class="kb19m-gallery-img-wrap">
                                <img src="assets/img/KB19App/<?php echo $img[1]; ?>" alt="<?php echo $img[0]; ?>" class="kb19m-gallery-img">
                                <div class="kb19m-gallery-hover-overlay">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                            <div class="kb19m-gallery-caption">
                                <span><?php echo $img[0]; ?></span>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

    </div>
</main>

<?php include 'components/footer.php'; ?>
