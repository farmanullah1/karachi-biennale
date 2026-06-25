<?php 
  $pageTitle = 'KB24 At A Glance - Fourth Karachi Biennale';
  $metaDesc = 'Explore the curatorial vision, statistics, and highlights of the Fourth Karachi Biennale (KB24), curated by Waheeda Baloch under the theme Rizq | Risk.';
  $bodyClass = 'page-kb24-at-a-glance'; 
  include 'components/header.php'; 
?>

<!-- 1. Page Header (Hero Banner) -->
<section class="kb24g-hero-section">
    <div class="kb24g-hero-banner" style="background-image: url('assets/img/KB24ArtPrizeWinner/KB-Cover-Web.png');">
        <div class="kb24g-hero-overlay"></div>
        <div class="container text-center">
            <h1 class="kb24g-hero-title">KB24 At A Glance</h1>
            <p class="kb24g-hero-subtitle">Fourth Karachi Biennale</p>
            
            <!-- Breadcrumbs -->
            <nav class="kb24g-breadcrumbs" aria-label="breadcrumb">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li>Past Biennale</li>
                    <li>KB24</li>
                    <li class="active" aria-current="page">At A Glance</li>
                </ul>
            </nav>
        </div>
    </div>
</section>

<div class="kb24g-main-wrapper">
    <!-- 2. Theme & Overview -->
    <section class="kb24g-section kb24g-theme-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="kb24g-section-header">
                        <span class="kb24g-tag">Biennale Theme</span>
                        <h2 class="kb24g-section-title">Rizq | Risk: Foodscape of our time</h2>
                    </div>
                    <div class="kb24g-theme-content">
                        <p class="kb24g-paragraph lead">The Fourth Karachi Biennale (KB24) focused on food politics, environmental ecology, and social sustainability through the lens of visual art.</p>
                        <p class="kb24g-paragraph">In Urdu, the word <strong>"Rizq"</strong> signifies sustenance, blessing, and spiritual nourishment, while <strong>"Risk"</strong> represents vulnerability, danger, and crisis. By bringing these two concepts together, KB24 explored the complex relationship humanity shares with food, ecology, and climate crisis in the modern age.</p>
                        <p class="kb24g-paragraph">Pakistan, despite its rich agrarian tradition, faces serious climate vulnerability and food distribution imbalances. KB24 became a platform for local and international artists to examine these themes, prompting conversations about food security, sustainability, and artistic responsibility.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="kb24g-stats-highlight-card">
                        <h3 class="kb24g-stats-card-title">Quick Facts & Impact</h3>
                        <div class="kb24g-stats-grid">
                            <div class="kb24g-stat-item">
                                <span class="kb24g-stat-number">50+</span>
                                <span class="kb24g-stat-label">Artists</span>
                            </div>
                            <div class="kb24g-stat-item">
                                <span class="kb24g-stat-number">6</span>
                                <span class="kb24g-stat-label">Venues</span>
                            </div>
                            <div class="kb24g-stat-item">
                                <span class="kb24g-stat-number">4</span>
                                <span class="kb24g-stat-label">Outreach Programs</span>
                            </div>
                            <div class="kb24g-stat-item">
                                <span class="kb24g-stat-number">4</span>
                                <span class="kb24g-stat-label">Art Prizes</span>
                            </div>
                        </div>
                        <div class="kb24g-dates-bar">
                            <i class="far fa-calendar-alt me-2"></i><strong>Dates:</strong> October 27 – November 10, 2024
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Curatorial Statement Section -->
    <section class="kb24g-section kb24g-curator-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="kb24g-curator-card">
                        <div class="row align-items-center">
                            <div class="col-md-4 text-center">
                                <div class="kb24g-curator-avatar-wrap">
                                    <img src="assets/img/KB24ArtistsList/KBT_logo.png" alt="Karachi Biennale Trust Logo" class="kb24g-curator-logo">
                                    <div class="kb24g-avatar-decor"></div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="kb24g-curator-info">
                                    <span class="kb24g-curator-role">Chief Curator</span>
                                    <h3 class="kb24g-curator-name">Waheeda Baloch</h3>
                                    <p class="kb24g-curator-bio">Waheeda Baloch is a professor at the University of Sindh, Jamshoro, and an accomplished art educator, researcher, and curator. She became the first woman to helm the Karachi Biennale as its chief curator, bringing a unique perspective on gender, public art, and regional ecologies to KB24.</p>
                                    
                                    <div class="kb24g-curator-team-list">
                                        <strong>Assistant Curators:</strong> Adan Shaikh & Aisar Abbas
                                    </div>
                                </div>
                            </div>
                        </div>
                        <blockquote class="kb24g-quote">
                            <p>"Art has the potential to transform raw crisis into visual and sensory experience. Rizq | Risk is not just an exhibition; it is an appeal to our collective conscience regarding how we treat our land, our resources, and our fellow beings in an age of ecological uncertainty."</p>
                            <cite>— Waheeda Baloch, KB24 Chief Curator</cite>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Quick Page Navigation (Bottom CTA Links) -->
    <section class="kb24g-section kb24g-nav-links-section">
        <div class="container text-center">
            <h3 class="kb24g-nav-section-title">Explore KB24 Archival Archive</h3>
            <div class="kb24g-links-grid">
                <a href="kb24-outreach.php" class="kb24g-nav-card">
                    <div class="kb24g-nav-card-icon"><i class="fas fa-bullhorn"></i></div>
                    <span class="kb24g-nav-card-title">Outreach Programs</span>
                </a>
                <a href="kb24-exhibition-venues.php" class="kb24g-nav-card">
                    <div class="kb24g-nav-card-icon"><i class="fas fa-map-marked-alt"></i></div>
                    <span class="kb24g-nav-card-title">Exhibition Venues</span>
                </a>
                <a href="kb24-artists-list.php" class="kb24g-nav-card">
                    <div class="kb24g-nav-card-icon"><i class="fas fa-paint-brush"></i></div>
                    <span class="kb24g-nav-card-title">Participating Artists</span>
                </a>
                <a href="kb24-highlights.php" class="kb24g-nav-card">
                    <div class="kb24g-nav-card-icon"><i class="fas fa-star"></i></div>
                    <span class="kb24g-nav-card-title">Highlights & Projects</span>
                </a>
                <a href="kb24-media.php" class="kb24g-nav-card">
                    <div class="kb24g-nav-card-icon"><i class="fas fa-newspaper"></i></div>
                    <span class="kb24g-nav-card-title">Media & Coverage</span>
                </a>
                <a href="kb24-art-prize-winners.php" class="kb24g-nav-card">
                    <div class="kb24g-nav-card-icon"><i class="fas fa-trophy"></i></div>
                    <span class="kb24g-nav-card-title">Art Prize Winners</span>
                </a>
                <a href="kb24-catalogue.php" class="kb24g-nav-card">
                    <div class="kb24g-nav-card-icon"><i class="fas fa-book-open"></i></div>
                    <span class="kb24g-nav-card-title">Digital Catalogue</span>
                </a>
            </div>
        </div>
    </section>
</div>

<?php include 'components/footer.php'; ?>
