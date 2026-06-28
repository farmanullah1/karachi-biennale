<?php 
  $pageTitle = 'KB24 At A Glance - Fourth Karachi Biennale';
  $metaDesc = 'Overview of the Fourth Karachi Biennale (KB24) theme Rizq | Risk - Foodscape of Our Time, featuring quick links, primary exhibition venues, and contact information.';
  $bodyClass = 'page-kb24-at-a-glance'; 
  include 'components/header.php'; 
?>

<!-- 1. Page Header (Hero Banner) -->
<section class="kb24g-hero-section">
    <div class="kb24g-hero-banner">
        <div class="kb24g-hero-overlay"></div>
        <div class="container text-center">
            <h1 class="kb24g-hero-title">Fourth Karachi Biennale KB24</h1>
            <p class="kb24g-hero-subtitle">At A Glance</p>
            
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
            <div class="row align-items-center g-5">
                <div class="col-lg-7">
                    <div class="kb24g-theme-badge-wrap">
                        <span class="kb24g-tag">KB24 Biennale Theme</span>
                    </div>
                    <h2 class="kb24g-theme-main-title">Rizq | Risk</h2>
                    <h4 class="kb24g-theme-sub-title">Foodscape of our time</h4>
                    
                    <div class="kb24g-theme-dates">
                        <i class="far fa-calendar-alt me-2"></i> <strong>Dates:</strong> 26th October – 10th November 2024
                    </div>

                    <div class="kb24g-about-text mt-4">
                        <p class="kb24g-paragraph lead">The Fourth Karachi Biennale (KB24) explored the complex relationship between food, culture, and sustainability through the theme "Rizq | Risk – Foodscape of Our Time." Taking place from October 26 to November 10, 2024, the Biennale transformed Karachi's public spaces and heritage sites into vibrant venues for contemporary art, fostering dialogue around food security, climate change, and cultural identity.</p>
                        <p class="kb24g-paragraph">The Biennale featured works by over 30 international and Pakistani artists, with exhibitions across multiple venues including Bagh Ibne Qasim, Frere Hall, and Sambara Art Gallery. Through diverse mediums including installation, performance, video, and interactive works, KB24 examined how food systems shape our societies and futures.</p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="kb24g-image-frame-wrap">
                        <img src="assets/img/KB24ArtistsList/kb24-banner.jpg" alt="Rizq Risk Banner" class="img-fluid kb24g-frame-img">
                        <div class="kb24g-frame-backdrop"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Quick Links Section -->
    <section class="kb24g-section kb24g-links-section">
        <div class="container">
            <div class="kb24g-section-header text-center mb-5">
                <span class="kb24g-tag">Navigation Portal</span>
                <h2 class="kb24g-section-title">Quick Links</h2>
                <p class="kb24g-section-desc">Access different areas of the KB24 archives, programs, and catalogues.</p>
            </div>

            <div class="row g-4">
                <!-- Card 1: Exhibition -->
                <div class="col-md-6 col-lg-3">
                    <div class="kb24g-portal-card">
                        <div class="kb24g-portal-header bg-gradient-forest">
                            <i class="fas fa-palette"></i>
                            <h3>Exhibition</h3>
                        </div>
                        <ul class="kb24g-portal-list">
                            <li><a href="kb24-artists-list.php"><i class="fas fa-angle-right"></i> Artist List</a></li>
                            <li><a href="kb24-partners.php"><i class="fas fa-angle-right"></i> Collateral Exhibition</a></li>
                            <li><a href="#"><i class="fas fa-angle-right"></i> Performative Arts</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Card 2: Programs -->
                <div class="col-md-6 col-lg-3">
                    <div class="kb24g-portal-card">
                        <div class="kb24g-portal-header bg-gradient-ochre">
                            <i class="fas fa-graduation-cap"></i>
                            <h3>Programs</h3>
                        </div>
                        <ul class="kb24g-portal-list">
                            <li><a href="kb24-educational-programming.php"><i class="fas fa-angle-right"></i> Educational Programming</a></li>
                            <li><a href="kb24-discursive-sessions.php"><i class="fas fa-angle-right"></i> Discursive Sessions</a></li>
                            <li><a href="#"><i class="fas fa-angle-right"></i> Wisdom Conversations</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Card 3: Events -->
                <div class="col-md-6 col-lg-3">
                    <div class="kb24g-portal-card">
                        <div class="kb24g-portal-header bg-gradient-rust">
                            <i class="fas fa-calendar-check"></i>
                            <h3>Events</h3>
                        </div>
                        <ul class="kb24g-portal-list">
                            <li><a href="kb24-inaugural-and-closing-ceremonies.php"><i class="fas fa-angle-right"></i> Inaugural & Closing</a></li>
                            <li><a href="#"><i class="fas fa-angle-right"></i> Reading Room</a></li>
                            <li><a href="kb24-art-and-well-being-sessions.php"><i class="fas fa-angle-right"></i> Art & Wellness</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Card 4: Archive -->
                <div class="col-md-6 col-lg-3">
                    <div class="kb24g-portal-card">
                        <div class="kb24g-portal-header bg-gradient-slate">
                            <i class="fas fa-archive"></i>
                            <h3>Archive</h3>
                        </div>
                        <ul class="kb24g-portal-list">
                            <li><a href="kb22-report.php"><i class="fas fa-angle-right"></i> KB22 Report</a></li>
                            <li><a href="kb17-catalogue.php"><i class="fas fa-angle-right"></i> KB17 Catalogue</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Venues & Accessibility Section -->
    <section class="kb24g-section kb24g-venues-section">
        <div class="container">
            <div class="row align-items-stretch g-4">
                <!-- Venues list -->
                <div class="col-lg-6">
                    <div class="kb24g-venues-card">
                        <h3 class="kb24g-venues-title"><i class="fas fa-map-marker-alt me-2 text-forest"></i> Primary Venues</h3>
                        
                        <div class="kb24g-venue-item">
                            <div class="kb24g-venue-icon"><i class="fas fa-tree"></i></div>
                            <div class="kb24g-venue-info">
                                <h4>Bagh Ibne Qasim</h4>
                                <p>Main exhibition space, installations, and live performances.</p>
                            </div>
                        </div>

                        <div class="kb24g-venue-item">
                            <div class="kb24g-venue-icon"><i class="fas fa-landmark"></i></div>
                            <div class="kb24g-venue-info">
                                <h4>Frere Hall</h4>
                                <p>Performance art and monumental installations.</p>
                            </div>
                        </div>

                        <div class="kb24g-venue-item">
                            <div class="kb24g-venue-icon"><i class="fas fa-university"></i></div>
                            <div class="kb24g-venue-info">
                                <h4>Sambara Art Gallery</h4>
                                <p>Discursive sessions and select curated exhibitions.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Accessibility card -->
                <div class="col-lg-6">
                    <div class="kb24g-access-card h-100 bg-gradient-dark text-white">
                        <div class="kb24g-access-icon"><i class="fas fa-wheelchair"></i></div>
                        <h3 class="kb24g-access-title">Accessibility & Support</h3>
                        <p class="kb24g-access-text">All KB24 venues are wheelchair accessible. We are committed to making contemporary art open and accessible to all citizens and visitors.</p>
                        <p class="kb24g-access-text">For specific accessibility requirements, guided assistance, or group requests, please get in touch with our team:</p>
                        
                        <div class="kb24g-access-contacts">
                            <a href="mailto:info@karachibiennale.org.pk"><i class="fas fa-envelope me-2"></i> info@karachibiennale.org.pk</a>
                            <a href="tel:+922135157566"><i class="fas fa-phone-alt me-2"></i> +92 21 35157566</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Social Media & Contact Section -->
    <section class="kb24g-section kb24g-contact-section">
        <div class="container text-center">
            <div class="kb24g-social-box">
                <h3 class="kb24g-social-title">Follow the Karachi Biennale</h3>
                <p class="kb24g-social-subtitle">Stay connected with our global creative community</p>
                
                <div class="kb24g-social-grid mt-4">
                    <a href="https://twitter.com/khi_Biennale" target="_blank" class="kb24g-social-link twitter">
                        <i class="fab fa-twitter"></i>
                        <span>Twitter</span>
                    </a>
                    <a href="https://www.facebook.com/KarachiBiennaleTrust/" target="_blank" class="kb24g-social-link facebook">
                        <i class="fab fa-facebook-f"></i>
                        <span>Facebook</span>
                    </a>
                    <a href="https://www.instagram.com/karachi_biennale/" target="_blank" class="kb24g-social-link instagram">
                        <i class="fab fa-instagram"></i>
                        <span>Instagram</span>
                    </a>
                    <a href="https://karachiartdirectory.com/" target="_blank" class="kb24g-social-link directory">
                        <i class="fas fa-globe"></i>
                        <span>Art Directory</span>
                    </a>
                </div>

                <div class="kb24g-contact-details mt-5">
                    <h4 class="kb24g-contact-title">Contact Information</h4>
                    <p class="kb24g-contact-text"><i class="fas fa-phone-alt me-2"></i> Phone: <strong>+92 21 35157566</strong></p>
                    <p class="kb24g-contact-text"><i class="fas fa-envelope me-2"></i> Email: <strong>info@karachibiennale.org.pk</strong></p>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include 'components/footer.php'; ?>
