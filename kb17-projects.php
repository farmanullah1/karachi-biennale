<?php 
  $pageTitle = 'KB17 Projects - First Karachi Biennale';
  $metaDesc = 'Explore the collateral and educational projects of the First Karachi Biennale KB17, showcasing public art and dialogue under the theme WITNESS.';
  $bodyClass = 'page-kb17-projects'; 
  include 'components/header.php'; 
?>

<!-- Skip Link for Accessibility -->
<a href="#kb17-projects-main-content" class="skip-link visually-hidden-focusable">Skip to content</a>

<!-- Page Header (Hero Area) -->
<section class="kb17-projects-hero text-center position-relative">
    <div class="kb17-projects-hero-overlay"></div>
    <div class="container position-relative z-index-2">
        <h1 class="kb17-projects-hero-title wow custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.1s">KB17 Projects</h1>
        <p class="kb17-projects-hero-subtitle wow custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.25s">Collateral Programs &amp; Public Art</p>
        
        <!-- Breadcrumbs -->
        <nav class="kb17-projects-breadcrumbs" aria-label="breadcrumb">
            <ul class="wow custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.4s">
                <li><a href="index.php">Home</a></li>
                <li>Past Biennale</li>
                <li>KB17</li>
                <li class="active" aria-current="page">Projects</li>
            </ul>
        </nav>
    </div>
</section>

<!-- Main Wrapper -->
<main id="kb17-projects-main-content" class="kb17-projects-main-wrapper">
    <div class="container">
        
        <!-- Intro Header -->
        <div class="kb17-projects-intro text-center mb-5 wow custom-anim-top">
            <span class="badge bg-primary mb-3">WITNESS</span>
            <h2 class="kb17-projects-section-title">Collateral Activities &amp; Initiatives</h2>
            <p class="kb17-projects-lead">The First Karachi Biennale (KB17) activated public spaces throughout Karachi under the thematic framework of <strong>WITNESS</strong>, bringing contemporary art directly to the people through specialized projects.</p>
        </div>

        <!-- 7 Projects Grid -->
        <div class="kb17-projects-grid">
            
            <!-- Card 1: Prizes -->
            <div class="kb17-project-card wow custom-anim-top" style="background-image: url('assets/img/KB17/prize-receive.png');" data-wow-delay="0.1s">
                <div class="card-content">
                    <h3>Prizes</h3>
                    <p class="small opacity-80 mb-3">Recognizing the most evocative exhibits with juried and popular choice awards.</p>
                    <a href="kb17-prizes.php" class="btn-view">View Project →</a>
                </div>
            </div>

            <!-- Card 2: Art Educational Program -->
            <div class="kb17-project-card wow custom-anim-top" style="background-image: url('assets/img/KB17/banner-educational-min.png');" data-wow-delay="0.2s">
                <div class="card-content">
                    <h3>Art Educational Program</h3>
                    <p class="small opacity-80 mb-3">Empowering schools, art teachers, and family groups through creative outreach workshops.</p>
                    <a href="kb17-art-educational-program.php" class="btn-view">View Project →</a>
                </div>
            </div>

            <!-- Card 3: Karachi Art Directory -->
            <div class="kb17-project-card wow custom-anim-top" style="background-image: url('assets/img/KB17/tazeen.jpg');" data-wow-delay="0.3s">
                <div class="card-content">
                    <h3>Karachi Art Directory</h3>
                    <p class="small opacity-80 mb-3">A database mapping contemporary and traditional art practices across the city periphery.</p>
                    <a href="kb17-karachi-art-directory.php" class="btn-view">View Project →</a>
                </div>
            </div>

            <!-- Card 4: PechaKucha -->
            <div class="kb17-project-card wow custom-anim-top" style="background-image: url('assets/img/KB17/peecha-main-box.png');" data-wow-delay="0.1s">
                <div class="card-content">
                    <h3>PechaKucha</h3>
                    <p class="small opacity-80 mb-3">Short-format intensive presentations empowering emerging artists from all over Pakistan.</p>
                    <a href="kb17-pechakucha.php" class="btn-view">View Project →</a>
                </div>
            </div>

            <!-- Card 5: Reel On Hai (Catalogue) -->
            <div class="kb17-project-card wow custom-anim-top" style="background-image: url('assets/img/KB17/reel-main-box.png');" data-wow-delay="0.2s">
                <div class="card-content">
                    <h3>Reel On Hai (Catalogue)</h3>
                    <p class="small opacity-80 mb-3">An ambitious public art initiative transforming cable reels into community canvases.</p>
                    <a href="kb17-catalogue.php" class="btn-view">View Project →</a>
                </div>
            </div>

            <!-- Card 6: Discursive -->
            <div class="kb17-project-card wow custom-anim-top" style="background-image: url('assets/img/KB17/random.jpg');" data-wow-delay="0.3s">
                <div class="card-content">
                    <h3>Discursive</h3>
                    <p class="small opacity-80 mb-3">Critical dialogue roundtables addressing epistemic erasure and South-South study circles.</p>
                    <a href="kb17-discursive.php" class="btn-view">View Case Study →</a>
                </div>
            </div>

            <!-- Card 7: Activities -->
            <div class="kb17-project-card wow custom-anim-top" style="background-image: url('assets/img/KB17/activities-bg.jpg');" data-wow-delay="0.1s">
                <div class="card-content">
                    <h3>Activities</h3>
                    <p class="small opacity-80 mb-3">A chronological retrospective documenting two years of public outreach from 2015 to 2017.</p>
                    <a href="kb17-activities.php" class="btn-view">View Project →</a>
                </div>
            </div>

        </div>

    </div>
</main>

<?php include 'components/footer.php'; ?>
