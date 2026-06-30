        <!--==============================
            Footer Area
        ==============================-->
        <footer class="footer-wrapper footer-layout1 overflow-hidden">    
            <div class="shape-mockup footer1-shape1 jump" data-top="20%" data-left="-2%">
                <img src="assets/img/normal/footer-1-shape1.png" alt="img">
            </div>
            <div class="container">
                <div class="footer-top">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-sm-auto">
                            <div class="footer-logo mb-40 mb-sm-0">
                                <a href="index.php"><img src="assets/img/biennale-images/KBT_logo.png" alt="Karachi Biennale Trust"></a>
                            </div>
                        </div>
                        <div class="col-sm-auto">
                            <div class="social-btn style2">
                                <a href="https://www.facebook.com/KarachiBiennaleTrust/" target="_blank" rel="noopener" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://x.com/khi_Biennale" target="_blank" rel="noopener" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.instagram.com/karachi_biennale/" target="_blank" rel="noopener" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget-area">
                    <div class="row justify-content-between">
                        <!-- Column 1: KBT Info -->
                        <div class="col-md-6 col-xl-4 col-lg-4">
                            <div class="widget footer-widget">
                                <div class="widget-contact">
                                    <h3 class="widget_title">Karachi Biennale Trust</h3>
                                    <p class="footer-info-text text-white">Karachi Biennale Trust is a global platform that brings together innovation, excellence, and criticality through a multiplicity of curatorial strategies to connect art, the city, and its people.</p>
                                    <ul class="contact-info-list">
                                        <li>
                                            <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                                            <span>Karachi Biennale Trust, Karachi, Pakistan</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-phone-alt" aria-hidden="true"></i>
                                            <a href="tel:+922135157566">+92 21 35157566</a>
                                        </li>
                                        <li>
                                            <i class="fas fa-envelope" aria-hidden="true"></i>
                                            <a href="mailto:info@karachibiennale.org.pk">info@karachibiennale.org.pk</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Column 2: Biennales -->
                        <div class="col-md-6 col-xl-auto col-lg-4">
                            <div class="widget widget_nav_menu footer-widget">
                                <h3 class="widget_title">Karachi Biennales</h3>
                                <div class="menu-all-pages-container">
                                    <ul class="menu">
                                        <li><a href="kb27.php">KB27 (Fifth Edition)</a></li>
                                        <li><a href="kb24-at-a-glance.php">KB24 (Fourth Edition)</a></li>
                                        <li><a href="kb22-at-a-glance.php">KB22 (Third Edition)</a></li>
                                        <li><a href="kb19-about.php">KB19 (Second Edition)</a></li>
                                        <li><a href="kb17-about.php">KB17 (First Edition)</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Column 3: KBT Organization -->
                        <div class="col-md-6 col-xl-auto col-lg-4">
                            <div class="widget widget_nav_menu footer-widget">
                                <h3 class="widget_title">Our Organization</h3>
                                <div class="menu-all-pages-container">
                                    <ul class="menu">
                                        <li><a href="welcome-note.php">Welcome Note</a></li>
                                        <li><a href="about-kbt.php">About KBT</a></li>
                                        <li><a href="kbt-trustees.php">KBT Trustees</a></li>
                                        <li><a href="kbt-founders.php">KBT Founders</a></li>
                                        <li><a href="kbt-team.php">KBT Team</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Column 4: Newsletter -->
                        <div class="col-md-6 col-lg-4">
                            <div class="widget footer-widget">
                                <h3 class="widget_title">Subscribe Now</h3>
                                <p class="footer-text">Stay updated with our latest news and event programming directly in your inbox.</p>
                                <form class="newsletter-form" action="#" method="POST" onsubmit="event.preventDefault(); alert('Thank you for subscribing!');">
                                    <div class="form-group">
                                        <input class="form-control" type="email" placeholder="Email Address" required>
                                    </div>
                                    <button type="submit" class="btn">SUBSCRIBE</button>
                                </form>
                            </div>
                        </div>                    
                    </div>
                </div>
                <!-- Bottom navigation list -->
                <div class="footer-menu-area">
                    <ul class="footer-menu-list">
                        <li>
                            <a href="index.php">HOME</a>
                        </li>
                        <li>
                            <a href="kb27.php">KB27 BIENNALE</a>
                        </li>
                        <li>
                            <a href="kb24-outreach.php">OUTREACH</a>
                        </li>
                        <li>
                            <a href="kb24-partners.php">PARTNERS</a>
                        </li>
                        <li>
                            <a href="contact-us.php">CONTACT US</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="copyright-wrap text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-auto align-self-center">
                            <p class="copyright-text text-white">© <?php echo date('Y'); ?> <a href="index.php">Karachi Biennale Trust</a>. All Rights Reserved.</p>
                        </div>
                    </div>                
                </div>
            </div>
        </footer>

        </div>
    </div>

<?php if (isset($bodyClass) && in_array($bodyClass, ['page-kb24-artists-list', 'page-kb22-artists-list'])): ?>
    <!-- Bio Modal Wrapper with Left and Right Navigation Arrows and copied link indicator -->
    <div class="kb24a-modal-backdrop" id="artistModalBackdrop" onclick="closeArtistModal()">
        <!-- Navigation Left (Desktop Only) -->
        <button class="kb24a-carousel-arrow left" onclick="navigateArtist(-1); event.stopPropagation()" aria-label="Previous Artist">
            <i class="fas fa-chevron-left"></i>
        </button>
        
        <div class="kb24a-modal" id="artistModal" onclick="event.stopPropagation()">
            <!-- Close Button -->
            <button class="kb24a-modal-close" onclick="closeArtistModal()">&times;</button>
            
            <div class="kb24a-modal-content" id="artistModalContent">
                <!-- Dynamically populated -->
            </div>

            <!-- Mobile Carousel Navigation (Inside Modal for spacing) -->
            <div class="kb24a-mobile-nav">
                <button class="kb24a-mobile-nav-btn" onclick="navigateArtist(-1)">
                    <i class="fas fa-chevron-left me-2"></i> Previous
                </button>
                <button class="kb24a-mobile-nav-btn" onclick="navigateArtist(1)">
                    Next <i class="fas fa-chevron-right ms-2"></i>
                </button>
            </div>
        </div>

        <!-- Navigation Right (Desktop Only) -->
        <button class="kb24a-carousel-arrow right" onclick="navigateArtist(1); event.stopPropagation()" aria-label="Next Artist">
            <i class="fas fa-chevron-right"></i>
        </button>

        <!-- Share Notification Toast -->
        <div class="kb24a-toast" id="kb24aShareToast">
            <i class="fas fa-check-circle me-2 text-success"></i> Direct artist link copied to clipboard!
        </div>
    </div>
<?php endif; ?>


    <!--********************************
			Code End  Here 
	******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>

    <!--==============================
    All Js File
    ============================== -->
    <!-- Jquery -->
    <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
    <!-- Slick Slider -->
    <script src="assets/js/slick.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Magnific Popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Counter Up -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- Range Slider -->
    <script src="assets/js/jquery-ui.min.js"></script>
    
    <!-- Isotope Filter -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    
    <!-- ScrollTrigger -->
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <!-- ScrollSmoother -->
    <script src="assets/js/ScrollSmoother.min.js"></script>
    <!-- ScrollToPlugin -->
    <script src="assets/js/ScrollToPlugin.min.js"></script>
    <!-- SplitText -->
    <script src="assets/js/SplitText.min.js"></script>
    <!-- Gsap -->
    <script src="assets/js/gsap.min.js"></script>

    <!-- WOW JS -->
    <script src="assets/js/waypoints.js"></script>
    <script src="assets/js/wow.js"></script>

    <!-- ================================================================
         KBT Global Auto-Animation Script
         Runs BEFORE main.js initialises WOW.js.
         Injects wow + directional animation classes onto structural
         elements on every page. Skips elements already marked with
         data-wow-duration (manually animated) and skips the home page
         (index.php / root) which is annotated by hand.
    ================================================================ -->
    <script>
    (function () {
        'use strict';

        /* ---- helpers ---- */
        var path = window.location.pathname;
        var isHome = (path === '/' || path.endsWith('index.php') || path.endsWith('/'));

        /* Add wow class + data attributes to a single element.
           Skips if already annotated or if it is inside the hero slider. */
        function annotate(el, animClass, duration, delay) {
            if (!el) return;
            if (el.hasAttribute('data-wow-duration')) return;   // already done
            if (el.closest('.hero-wrapper, .hero-slider, .hero-slider1')) return; // never touch sliders
            el.classList.add('wow', animClass);
            el.setAttribute('data-wow-duration', duration || '1.5s');
            el.setAttribute('data-wow-delay',    delay    || '0.1s');
        }

        /* Format a delay value neatly */
        function delay(base, step, i) {
            return (base + step * (i % 6)).toFixed(2) + 's';
        }

        /* ---- home page: hero slider col-lg-8 already inside slider,
               but outer content sections still benefit from annotation ---- */

        /* ====================================================
           1. HERO SECTIONS  →  slide in from top
        ==================================================== */
        document.querySelectorAll(
            'section[class*="hero"], section[class*="-hero"]'
        ).forEach(function (el, i) {
            annotate(el, 'custom-anim-top', '1.5s', delay(0.1, 0.05, i));
        });

        /* ====================================================
           2. HERO TITLES h1  →  slide in from left
        ==================================================== */
        document.querySelectorAll(
            'h1[class*="hero-title"], h1[class*="page-title"], h1[class*="-title"]'
        ).forEach(function (el, i) {
            annotate(el, 'custom-anim-left', '1.5s', delay(0.2, 0.05, i));
        });

        /* ====================================================
           3. HERO SUBTITLE / INTRO paragraphs  →  from right
        ==================================================== */
        document.querySelectorAll(
            'p[class*="hero-subtitle"], p[class*="hero-intro"], p[class*="-intro"]'
        ).forEach(function (el, i) {
            annotate(el, 'custom-anim-right', '1.5s', delay(0.25, 0.05, i));
        });

        /* ====================================================
           4. NON-HERO CONTENT SECTIONS  →  fade up from top
        ==================================================== */
        document.querySelectorAll(
            'section:not([class*="hero"]):not([class*="-hero"])'
        ).forEach(function (el, i) {
            annotate(el, 'custom-anim-top', '1.5s', delay(0.15, 0.08, i));
        });

        /* ====================================================
           5. MAIN CONTENT WRAPPER  →  fade up
        ==================================================== */
        document.querySelectorAll('main').forEach(function (el, i) {
            annotate(el, 'custom-anim-top', '1.5s', delay(0.3, 0.1, i));
        });

        /* ====================================================
           6. WIDE COLUMNS  col-lg-6/7/8/9/10/11  →  from left
        ==================================================== */
        document.querySelectorAll(
            '.col-lg-6:not([data-wow-duration]), ' +
            '.col-lg-7:not([data-wow-duration]), ' +
            '.col-lg-8:not([data-wow-duration]), ' +
            '.col-lg-9:not([data-wow-duration]), ' +
            '.col-lg-10:not([data-wow-duration]), ' +
            '.col-lg-11:not([data-wow-duration])'
        ).forEach(function (el, i) {
            /* Skip columns inside hero sliders */
            if (el.closest('.hero-wrapper, .hero-slider1, [class*="hero-section"]')) return;
            annotate(el, 'custom-anim-left', '1.5s', delay(0.2, 0.1, i));
        });

        /* ====================================================
           7. NARROW / SIDEBAR COLUMNS  col-lg-3/4/5  →  from right
        ==================================================== */
        document.querySelectorAll(
            '.col-lg-3:not([data-wow-duration]), ' +
            '.col-lg-4:not([data-wow-duration]), ' +
            '.col-lg-5:not([data-wow-duration])'
        ).forEach(function (el, i) {
            if (el.closest('.hero-wrapper, .hero-slider1, [class*="hero-section"]')) return;
            annotate(el, 'custom-anim-right', '1.5s', delay(0.3, 0.12, i));
        });

        /* ====================================================
           8. CARD ELEMENTS  article, div[class*="-card"]  →  from top
        ==================================================== */
        document.querySelectorAll(
            'article[class*="card"], ' +
            'div[class*="-card"]:not([data-wow-duration])'
        ).forEach(function (el, i) {
            if (el.closest('[data-wow-duration]')) return; // parent already animated
            annotate(el, 'custom-anim-top', '1.5s', delay(0.1, 0.15, i));
        });

        /* ====================================================
           9. BLOCKQUOTES / PULL-QUOTES  →  from top
        ==================================================== */
        document.querySelectorAll(
            'blockquote:not([data-wow-duration])'
        ).forEach(function (el, i) {
            annotate(el, 'custom-anim-top', '1.5s', delay(0.25, 0.1, i));
        });

        /* ====================================================
           10. FACTS CARD / INFO CARD / SIDEBAR  →  from right
        ==================================================== */
        document.querySelectorAll(
            'div[class*="facts-card"]:not([data-wow-duration]), ' +
            'aside[class*="sidebar"]:not([data-wow-duration]), ' +
            'div[class*="-sidebar"]:not([data-wow-duration])'
        ).forEach(function (el, i) {
            annotate(el, 'custom-anim-right', '1.5s', delay(0.35, 0.1, i));
        });

        /* ====================================================
           11. SECTION HEADINGS h2  →  from left
        ==================================================== */
        document.querySelectorAll(
            'h2[class*="sec-title"]:not([data-wow-duration]), ' +
            'h2[class*="-heading"]:not([data-wow-duration]), ' +
            'h2[class*="-title"]:not([data-wow-duration])'
        ).forEach(function (el, i) {
            if (el.closest('[data-wow-duration]')) return;
            annotate(el, 'custom-anim-left', '1.5s', delay(0.1, 0.05, i));
        });

        /* ====================================================
           12. GRID / LIST WRAPPERS  →  from top
        ==================================================== */
        document.querySelectorAll(
            'div[class*="-grid"]:not([data-wow-duration]), ' +
            'div[class*="-list"]:not([data-wow-duration]), ' +
            'div[class*="-gallery"]:not([data-wow-duration])'
        ).forEach(function (el, i) {
            annotate(el, 'custom-anim-top', '1.5s', delay(0.2, 0.1, i));
        });

        /* ====================================================
           13. CTA / ACTION SECTIONS  →  from top
        ==================================================== */
        document.querySelectorAll(
            'div[class*="cta-"]:not([data-wow-duration]), ' +
            'section[class*="cta-"]:not([data-wow-duration])'
        ).forEach(function (el, i) {
            annotate(el, 'custom-anim-top', '1.5s', delay(0.4, 0.1, i));
        });

        /* ====================================================
           14. PARTNER / SPONSOR LOGO ROWS  →  from top (staggered)
        ==================================================== */
        document.querySelectorAll(
            'div[class*="-partner"]:not([data-wow-duration]), ' +
            'div[class*="-sponsor"]:not([data-wow-duration]), ' +
            'div[class*="partner-"]:not([data-wow-duration])'
        ).forEach(function (el, i) {
            annotate(el, 'custom-anim-top', '1.5s', delay(0.1, 0.15, i));
        });

        /* ====================================================
           15. IMAGE WRAPPERS (vision, venue photos)  →  zoom-scale via top
        ==================================================== */
        document.querySelectorAll(
            'div[class*="-img-wrap"]:not([data-wow-duration]), ' +
            'div[class*="-photo"]:not([data-wow-duration]), ' +
            'div[class*="-thumb"]:not([data-wow-duration]):not(.hero-thumb1):not(.hero-thumb2)'
        ).forEach(function (el, i) {
            annotate(el, 'custom-anim-top', '1.2s', delay(0.2, 0.1, i));
        });

    }());
    </script>

    <!-- Main Js File -->
    <script src="assets/js/main.js"></script>
</body>

</html>
