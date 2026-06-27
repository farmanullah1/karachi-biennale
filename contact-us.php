<?php 
  $pageTitle = 'Contact Us - Karachi Biennale Trust';
  $metaDesc = 'Get in touch with the Karachi Biennale Trust. Reach out for general enquiries, international participation, partnerships, or program details.';
  $bodyClass = 'page-contact-us'; 
  include 'components/header.php'; 
?>

<!-- Skip Link for Accessibility -->
<a href="#contact-us-main-content" class="skip-link visually-hidden-focusable">Skip to content</a>

<!-- 1. Hero Banner Area -->
<section class="contact-us-hero-section">
    <div class="contact-us-hero-banner">
        <div class="contact-us-hero-overlay"></div>
        <div class="container text-center">
            <h1 class="contact-us-hero-title">Contact Us</h1>
            <p class="contact-us-hero-subtitle">Karachi Biennale Trust</p>
            
            <!-- Breadcrumbs -->
            <nav class="contact-us-breadcrumbs" aria-label="breadcrumb">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li class="active" aria-current="page">Contact Us</li>
                </ul>
            </nav>
        </div>
    </div>
</section>

<!-- 2. Main Contact Area -->
<main id="contact-us-main-content" class="contact-us-main-wrapper">
    <div class="container">
        
        <!-- Intro -->
        <div class="contact-us-intro text-center mb-5">
            <h2 class="contact-us-section-heading">Get In Touch</h2>
            <p class="contact-us-section-lead">We would love to hear from you. Whether you have questions about the Karachi Biennale, wish to explore partnership opportunities, or want to learn more about our programmes, please reach out to us.</p>
        </div>

        <div class="row g-5">
            <!-- Left Column: Contact info & Map -->
            <div class="col-lg-5">
                <div class="contact-us-info-card mb-4">
                    <h3 class="contact-us-info-title"><i class="fas fa-info-circle me-2"></i>Contact Information</h3>
                    
                    <div class="contact-us-method">
                        <div class="contact-us-icon bg-gradient-yellow">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-us-details">
                            <span class="contact-us-label">General Enquiries</span>
                            <a href="mailto:info@karachibiennale.org.pk" class="contact-us-link">info@karachibiennale.org.pk</a>
                        </div>
                    </div>

                    <div class="contact-us-method">
                        <div class="contact-us-icon bg-gradient-teal">
                            <i class="fas fa-globe-americas"></i>
                        </div>
                        <div class="contact-us-details">
                            <span class="contact-us-label">International Participation</span>
                            <a href="mailto:globaloutreach@karachibiennale.org.pk" class="contact-us-link">globaloutreach@karachibiennale.org.pk</a>
                        </div>
                    </div>

                    <div class="contact-us-method">
                        <div class="contact-us-icon bg-gradient-blue">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="contact-us-details">
                            <span class="contact-us-label">Call Us</span>
                            <a href="tel:+922135157566" class="contact-us-link">+92 21 35157566</a>
                        </div>
                    </div>

                    <div class="contact-us-method">
                        <div class="contact-us-icon bg-gradient-purple">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-us-details">
                            <span class="contact-us-label">Office Address</span>
                            <span class="contact-us-text">Karachi Biennale Trust, Karachi, Pakistan</span>
                        </div>
                    </div>

                    <!-- Social Media Links -->
                    <div class="contact-us-social-wrap mt-4">
                        <h4 class="contact-us-social-title">Connect With Us</h4>
                        <div class="contact-us-social-links">
                            <a href="https://www.facebook.com/KarachiBiennaleTrust/" target="_blank" rel="noopener" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://x.com/khi_Biennale" target="_blank" rel="noopener" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.instagram.com/karachi_biennale/" target="_blank" rel="noopener" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Interactive Form -->
            <div class="col-lg-7">
                <div class="contact-us-form-wrap">
                    <h3 class="contact-us-form-title"><i class="fas fa-paper-plane me-2"></i>Send Us a Message</h3>
                    
                    <form action="mail.php" method="POST" class="contact-us-form-element">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contact-us-name" class="form-label">Full Name</label>
                                    <div class="input-icon-wrap">
                                        <i class="far fa-user input-icon"></i>
                                        <input type="text" class="form-control" name="name" id="contact-us-name" placeholder="Enter Full Name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contact-us-email" class="form-label">Email Address</label>
                                    <div class="input-icon-wrap">
                                        <i class="far fa-envelope input-icon"></i>
                                        <input type="email" class="form-control" name="email" id="contact-us-email" placeholder="Email Address" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="contact-us-message" class="form-label">Type Your Message</label>
                                    <div class="input-icon-wrap text-area-wrap">
                                        <i class="far fa-comment input-icon"></i>
                                        <textarea class="form-control" name="message" id="contact-us-message" placeholder="Type Your Message" rows="5" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="contact-us-submit-btn">
                                    Send Message Now <i class="fas fa-arrow-right ms-2"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Google Map Section -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="contact-us-map-wrap">
                    <iframe src="https://maps.google.com/maps?q=Karachi%20Biennale%20Trust%2C%20Karachi%2C%20Pakistan&t=m&z=15&output=embed&iwloc=near" allowfullscreen="" loading="lazy" aria-label="Karachi Biennale Trust Location Map"></iframe>
                </div>
            </div>
        </div>

    </div>
</main>

<?php include 'components/footer.php'; ?>
