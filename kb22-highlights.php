<?php 
  $pageTitle = 'KB22 Highlights & Projects - Third Karachi Biennale';
  $metaDesc = 'Explore the core highlights, digital projects, live sound performances, and interactive flipbook catalogue of the Third Karachi Biennale (KB22).';
  $bodyClass = 'page-kb22-highlights'; 
  include 'components/header.php'; 
?>

<!-- 1. Page Header (Hero Area) -->
<section class="kb22-highlights-hero text-center position-relative">
    <div class="kb22-highlights-hero-overlay"></div>
    <div class="container position-relative z-index-2">
        <h1 class="kb22-highlights-hero-title wow custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.1s">Highlights and Projects</h1>
        <p class="kb22-highlights-hero-subtitle wow custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.25s">Third Karachi Biennale KB22</p>
        
        <!-- Breadcrumbs -->
        <nav class="kb22-highlights-breadcrumbs" aria-label="breadcrumb">
            <ul class="wow custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.4s">
                <li><a href="index.php">Home</a></li>
                <li>Past Biennale</li>
                <li>KB22</li>
                <li class="active" aria-current="page">Highlights &amp; Projects</li>
            </ul>
        </nav>
    </div>
</section>

<!-- 2. Main Wrapper with Projects Grid -->
<div class="kb22-highlights-main-wrapper">
    <div class="container">
        
        <div class="kb22-highlights-grid row g-4 justify-content-center mb-60">
            
            <!-- Card 1: Ceremonies -->
            <div class="">
                <div class="kb22-highlight-card wow custom-anim-top" data-wow-delay="0.1s">
                    <div class="card-icon"><i class="fas fa-award"></i></div>
                    <h3>Inaugural and Closing Ceremonies</h3>
                    <p class="card-desc">Relive the official assemblies, dignitary addresses, and art prize announcements hosted at the historical venues.</p>
                    <a href="kb22-inaugural-and-closing-ceremonies.php" class="btn-learn-more">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>

            <!-- Card 2: Discursive -->
            <div class="">
                <div class="kb22-highlight-card wow custom-anim-top" data-wow-delay="0.2s">
                    <div class="card-icon"><i class="fas fa-comments"></i></div>
                    <h3>Discursive Sessions</h3>
                    <p class="card-desc">Review keynote discussions, panel talks on decolonisation, and tributes paid to legendary artists.</p>
                    <a href="kb22-discursive-sessions.php" class="btn-learn-more">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>

            <!-- Card 3: Educational -->
            <div class="">
                <div class="kb22-highlight-card wow custom-anim-top" data-wow-delay="0.3s">
                    <div class="card-icon"><i class="fas fa-graduation-cap"></i></div>
                    <h3>Educational Programming</h3>
                    <p class="card-desc">Empowering the youth through school tours, conversation circles, and creative art workshops.</p>
                    <a href="kb22-educational-programming.php" class="btn-learn-more">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>

            <!-- Card 4: Wellness -->
            <div class="">
                <div class="kb22-highlight-card wow custom-anim-top" data-wow-delay="0.4s">
                    <div class="card-icon"><i class="fas fa-heartbeat"></i></div>
                    <h3>Art and Wellness Workshop</h3>
                    <p class="card-desc">Integrating visual expressions with clinical therapies to address stress and build emotional resilience.</p>
                    <a href="kb22-art-and-well-being-sessions.php" class="btn-learn-more">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>

            <!-- Card 5: Storytelling -->
            <div class="">
                <div class="kb22-highlight-card wow custom-anim-top" data-wow-delay="0.5s">
                    <div class="card-icon"><i class="fas fa-book-open"></i></div>
                    <h3>Storytelling by Artists</h3>
                    <p class="card-desc">Communal gathering and poetry recitals where artists shared inspirations and cultural legacies.</p>
                    <a href="kb22-storytelling.php" class="btn-learn-more">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>

            <!-- Card 6: Khaadi -->
            <div class="">
                <div class="kb22-highlight-card wow custom-anim-top" data-wow-delay="0.6s">
                    <div class="card-icon"><i class="fas fa-handshake"></i></div>
                    <h3>Khaadi Meet and Greet</h3>
                    <p class="card-desc">A networking reception hosted with Khaadi to connect artists, curators, and KBT organizers.</p>
                    <a href="kb22-khaadi-meet-and-greet.php" class="btn-learn-more">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>

        </div>

        <hr class="kb22-highlights-divider mb-60">

        <!-- 3. Flipbook Catalogue Embed Section -->
        <section class="kb22-highlights-flipbook-section wow custom-anim-top" data-wow-duration="1.5s">
            <div class="text-center mb-40">
                <span class="kb22-highlights-badge"><i class="fas fa-book-reader me-2"></i>Digital Archive</span>
                <h2 class="kb22-highlights-flipbook-title">KB22 Interactive Print Catalogue</h2>
                <p class="kb22-highlights-flipbook-desc">Browse the official print catalogue of the Third Karachi Biennale (KB22) through our interactive Heyzine flipbook reader. Explore complete curatorial statements, artist catalogs, and venue maps.</p>
            </div>

            <div class="kb22-highlights-flipbook-wrapper">
                <div class="kb22-highlights-iframe-container">
                    <iframe src="https://heyzine.com/flip-book/9a48bd7959.html" allowfullscreen class="kb22-highlights-flipbook-iframe"></iframe>
                </div>
                <div class="text-center mt-30">
                    <a href="https://heyzine.com/flip-book/9a48bd7959.html" target="_blank" class="kb22-highlights-external-btn">Open in New Tab <i class="fas fa-external-link-alt ms-2"></i></a>
                </div>
            </div>
        </section>

    </div>
</div>

<?php include 'components/footer.php'; ?>
