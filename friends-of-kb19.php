<?php 
  $pageTitle = 'Friends of KB19 - Second Karachi Biennale';
  $metaDesc = 'Join the Friends of KB19 circle. Discover membership benefits, exclusive tours, exhibition previews, and support the Karachi Biennale.';
  $bodyClass = 'page-friends-of-kb19'; 
  include 'components/header.php'; 
?>

<!-- Skip Link for Accessibility -->
<a href="#kb19f-main-content" class="skip-link visually-hidden-focusable">Skip to content</a>

<!-- 1. Hero Banner Area -->
<section class="kb19f-hero-section">
    <div class="kb19f-hero-banner" style="background-image: url('assets/img/bg/kb19-page-banner-2.jpg');">
        <div class="kb19f-hero-overlay"></div>
        <div class="container text-center">
            <h1 class="kb19f-hero-title">Friends of KB19</h1>
            <p class="kb19f-hero-subtitle">Support Visual Arts in Karachi</p>
            
            <!-- Breadcrumbs -->
            <nav class="kb19f-breadcrumbs" aria-label="breadcrumb">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li>Past Biennale</li>
                    <li>KB19</li>
                    <li class="active" aria-current="page">Friends of KB19</li>
                </ul>
            </nav>
        </div>
    </div>
</section>

<!-- 2. Main Content Area -->
<main id="kb19f-main-content" class="kb19f-main-wrapper">
    <div class="container">
        
        <!-- Grid Split: Intro & Benefits -->
        <div class="row gy-5 align-items-center mb-5">
            <!-- Intro Left -->
            <div class="col-lg-6">
                <div class="kb19f-intro-content">
                    <span class="kb19f-tag">Patron Circle</span>
                    <h2 class="kb19f-section-heading">Join the Friends of Karachi Biennale</h2>
                    <p class="kb19f-section-lead">The "Friends of KB19" is a collective circle of art enthusiasts, collectors, and citizens committed to fostering the development of visual arts and restoring public cultural spaces in Karachi.</p>
                    <p class="kb19f-text">By joining our patrons circle, you directly fund educational workshops, sponsor emerging artists, and help keep all Karachi Biennale exhibitions free and accessible to the public.</p>
                    
                    <div class="kb19f-quote-card">
                        <p class="kb19f-quote">"Art has the power to transform a city's landscape and bring communities together. The Friends circle is the structural backbone of this public movement."</p>
                    </div>
                </div>
            </div>

            <!-- Benefits Card Right -->
            <div class="col-lg-6">
                <div class="kb19f-benefits-card">
                    <h3 class="kb19f-benefits-title"><i class="fas fa-gem me-2"></i>Exclusive Membership Benefits</h3>
                    <ul class="kb19f-benefits-list">
                        <!-- Benefit 1 -->
                        <li>
                            <div class="kb19f-benefit-icon"><i class="fas fa-certificate"></i></div>
                            <div class="kb19f-benefit-text">
                                <strong>Official Membership Pin</strong>
                                <span>A unique, limited-edition KB19 custom silver lapel pin designed by local artisans.</span>
                            </div>
                        </li>
                        <!-- Benefit 2 -->
                        <li>
                            <div class="kb19f-benefit-icon"><i class="fas fa-list-ol"></i></div>
                            <div class="kb19f-benefit-text">
                                <strong>Name Registry Recognition</strong>
                                <span>Your name permanently recorded in the official KB19 Catalogue and the KBT Patrons registry.</span>
                            </div>
                        </li>
                        <!-- Benefit 3 -->
                        <li>
                            <div class="kb19f-benefit-icon"><i class="fas fa-utensils"></i></div>
                            <div class="kb19f-benefit-text">
                                <strong>Exclusive Dinners & Gala Invites</strong>
                                <span>Invitation to the opening gala dinners, private curators receptions, and award ceremonies.</span>
                            </div>
                        </li>
                        <!-- Benefit 4 -->
                        <li>
                            <div class="kb19f-benefit-icon"><i class="fas fa-map-marked-alt"></i></div>
                            <div class="kb19f-benefit-text">
                                <strong>Guided Curatorial Tours</strong>
                                <span>Private, guided tours led by Chief Curator Muhammad Zeeshan across the 9 historic venues.</span>
                            </div>
                        </li>
                        <!-- Benefit 5 -->
                        <li>
                            <div class="kb19f-benefit-icon"><i class="fas fa-book"></i></div>
                            <div class="kb19f-benefit-text">
                                <strong>Complimentary Catalogues</strong>
                                <span>A special hardbound copy of the official KB19 Exhibition Catalogue, signed by the Curator.</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Join CTA Block -->
        <section class="kb19f-cta-section text-center">
            <div class="kb19f-cta-card">
                <h3 class="kb19f-cta-title">Become a Friend of KB19 Today</h3>
                <p class="kb19f-cta-desc">Support our public mission to bring contemporary visual art to the streets of Karachi. Registration queries and donations can be submitted online.</p>
                <div class="kb19f-cta-actions">
                    <a href="contact.html" class="kb19f-btn-primary">Inquire Online <i class="fas fa-paper-plane ms-2"></i></a>
                </div>
            </div>
        </section>
        
    </div>
</main>

<?php include 'components/footer.php'; ?>
