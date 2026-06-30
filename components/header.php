<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : "Karachi Biennale Trust &#8211; A global platform for excellence, criticality and innovation in the visual arts."; ?></title>
    <?php if (isset($metaDesc)): ?>
    <meta name="description" content="<?php echo htmlspecialchars($metaDesc); ?>">
    <?php else: ?>
    <meta name="description" content="Karachi Biennale Trust - A global platform for excellence, criticality and innovation in the visual arts.">
    <?php endif; ?>
    <meta name="keywords" content="Karachi Biennale Trust, Karachi Biennale, KB27, Fifth Karachi Biennale, Biennale, Visual Arts, Art, Culture, Pakistan, Karachi">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Open Graph Tags -->
    <meta property="og:title" content="<?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : "Karachi Biennale Trust"; ?>">
    <meta property="og:description" content="<?php echo isset($metaDesc) ? htmlspecialchars($metaDesc) : "Karachi Biennale Trust - A global platform for excellence, criticality and innovation in the visual arts."; ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo isset($ogImage) ? htmlspecialchars($ogImage) : "assets/img/biennale-images/KBT_logo.png"; ?>">
    <meta property="og:url" content="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/biennale-images/KBT_logo.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/biennale-images/KBT_logo.png">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <!-- Odometer -->
    <link rel="stylesheet" href="assets/css/odometer.css">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Global Footer CSS -->
    <link rel="stylesheet" href="assets/css/pages/footer.css">
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb27'): ?>
        <!-- Page-specific CSS for KB27 -->
        <link rel="stylesheet" href="assets/css/pages/kb27.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-about-kbt'): ?>
        <!-- Page-specific CSS for About KBT -->
        <link rel="stylesheet" href="assets/css/pages/about-kbt.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kbt-founders'): ?>
        <!-- Page-specific CSS for KBT Founders -->
        <link rel="stylesheet" href="assets/css/pages/kbt-founders.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kbt-patrons'): ?>
        <!-- Page-specific CSS for KBT Patrons -->
        <link rel="stylesheet" href="assets/css/pages/kbt-patrons.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kbt-trustees'): ?>
        <!-- Page-specific CSS for KBT Trustees -->
        <link rel="stylesheet" href="assets/css/pages/kbt-trustees.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kbt-team'): ?>
        <!-- Page-specific CSS for KBT Team -->
        <link rel="stylesheet" href="assets/css/pages/kbt-team.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kbt-support-team'): ?>
        <!-- Page-specific CSS for KBT Support Team -->
        <link rel="stylesheet" href="assets/css/pages/kbt-support-team.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-welcome-note'): ?>
        <!-- Page-specific CSS for Welcome Note -->
        <link rel="stylesheet" href="assets/css/pages/welcome-note.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb24-partners'): ?>
        <!-- Page-specific CSS for KB24 Partners -->
        <link rel="stylesheet" href="assets/css/pages/kb24-partners.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb24-at-a-glance'): ?>
        <!-- Page-specific CSS for KB24 At A Glance -->
        <link rel="stylesheet" href="assets/css/pages/kb24-at-a-glance.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb24-outreach'): ?>
        <!-- Page-specific CSS for KB24 Outreach -->
        <link rel="stylesheet" href="assets/css/pages/kb24-outreach.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb24-exhibition-venues'): ?>
        <!-- Page-specific CSS for KB24 Exhibition Venues -->
        <link rel="stylesheet" href="assets/css/pages/kb24-exhibition-venues.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb24-artists-list'): ?>
        <!-- Page-specific CSS for KB24 Artists List -->
        <link rel="stylesheet" href="assets/css/pages/kb24-artists-list.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb24-highlights'): ?>
        <!-- Page-specific CSS for KB24 Highlights -->
        <link rel="stylesheet" href="assets/css/pages/kb24-highlights.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb24-media'): ?>
        <!-- Page-specific CSS for KB24 Media -->
        <link rel="stylesheet" href="assets/css/pages/kb24-media.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb24-art-prize-winners'): ?>
        <!-- Page-specific CSS for KB24 Art Prize Winners -->
        <link rel="stylesheet" href="assets/css/pages/kb24-art-prize-winners.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb24-catalogue'): ?>
        <!-- Page-specific CSS for KB24 Catalogue -->
        <link rel="stylesheet" href="assets/css/pages/kb24-catalogue.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb22-at-a-glance'): ?>
        <!-- Page-specific CSS for KB22 At A Glance -->
        <link rel="stylesheet" href="assets/css/pages/kb22-at-a-glance.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb22-partners'): ?>
        <!-- Page-specific CSS for KB22 Partners -->
        <link rel="stylesheet" href="assets/css/pages/kb22-partners.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb22-outreach'): ?>
        <!-- Page-specific CSS for KB22 Outreach -->
        <link rel="stylesheet" href="assets/css/pages/kb22-outreach.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb22-curator'): ?>
        <!-- Page-specific CSS for KB22 Curator -->
        <link rel="stylesheet" href="assets/css/pages/kb22-curator.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb22-exhibition-venues'): ?>
        <!-- Page-specific CSS for KB22 Exhibition Venues -->
        <link rel="stylesheet" href="assets/css/pages/kb22-exhibition-venues.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb22-artists-list'): ?>
        <!-- Page-specific CSS for KB22 Artists List -->
        <link rel="stylesheet" href="assets/css/pages/kb22-artists-list.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb22-programming'): ?>
        <!-- Page-specific CSS for KB22 Programming -->
        <link rel="stylesheet" href="assets/css/pages/kb22-programming.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb22-curatorial-team'): ?>
        <!-- Page-specific CSS for KB22 Curatorial Team -->
        <link rel="stylesheet" href="assets/css/pages/kb22-curatorial-team.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb22-highlights'): ?>
        <!-- Page-specific CSS for KB22 Highlights -->
        <link rel="stylesheet" href="assets/css/pages/kb22-highlights.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && in_array($bodyClass, ['page-kb22-discursive','page-kb22-educational','page-kb22-wellness','page-kb22-storytelling','page-kb22-khaadi','page-kb22-ceremonies'])): ?>
        <!-- Shared CSS for KB22 Program Subpages -->
        <link rel="stylesheet" href="assets/css/pages/kb22-programs.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb22-art-prize-winners'): ?>
        <!-- Page-specific CSS for KB22 Art Prize Winners -->
        <link rel="stylesheet" href="assets/css/pages/kb22-art-prize-winners.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb22-media'): ?>
        <!-- Page-specific CSS for KB22 Media -->
        <link rel="stylesheet" href="assets/css/pages/kb22-media.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb22-report'): ?>
        <!-- Page-specific CSS for KB22 Report -->
        <link rel="stylesheet" href="assets/css/pages/kb22-report.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb19-about'): ?>
        <!-- Page-specific CSS for KB19 About -->
        <link rel="stylesheet" href="assets/css/pages/kb19-about.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb19-message-from-ceo'): ?>
        <!-- Page-specific CSS for KB19 Message from CEO -->
        <link rel="stylesheet" href="assets/css/pages/kb19-message-from-ceo.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb19-visitors-guide-app'): ?>
        <!-- Page-specific CSS for KB19 Visitors Guide App -->
        <link rel="stylesheet" href="assets/css/pages/kb19-visitors-guide-app.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb19-artists-and-venues'): ?>
        <!-- Page-specific CSS for KB19 Artists and Venues -->
        <link rel="stylesheet" href="assets/css/pages/kb19-artists-and-venues.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb19-programming'): ?>
        <!-- Page-specific CSS for KB19 Programming -->
        <link rel="stylesheet" href="assets/css/pages/kb19-programming.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb19-educational-program'): ?>
        <!-- Page-specific CSS for KB19 Educational Program -->
        <link rel="stylesheet" href="assets/css/pages/kb19-educational-program.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb19-curator'): ?>
        <!-- Page-specific CSS for KB19 Curator -->
        <link rel="stylesheet" href="assets/css/pages/kb19-curator.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb19-projects'): ?>
        <!-- Page-specific CSS for KB19 Projects Overview -->
        <link rel="stylesheet" href="assets/css/pages/kb19-projects.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb17-catalog-launch'): ?>
        <!-- Page-specific CSS for KB17 Catalog Launch -->
        <link rel="stylesheet" href="assets/css/pages/kb17-catalog-launch.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-performance-art-workshop-with-isabel-lewis'): ?>
        <!-- Page-specific CSS for Isabel Lewis Workshop -->
        <link rel="stylesheet" href="assets/css/pages/performance-art-workshop-with-isabel-lewis.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-alice-kettle-workshop-at-british-council'): ?>
        <!-- Page-specific CSS for Alice Kettle Workshop -->
        <link rel="stylesheet" href="assets/css/pages/alice-kettle-workshop-at-british-council.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb19-peek-freans-emerging-artist'): ?>
        <!-- Page-specific CSS for KB19 Peek Freans Emerging Artist -->
        <link rel="stylesheet" href="assets/css/pages/kb19-peek-freans-emerging-artist.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb19-discursive-roundtable'): ?>
        <!-- Page-specific CSS for KB19 Discursive Roundtable -->
        <link rel="stylesheet" href="assets/css/pages/kb19-discursive-roundtable.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kbt-steam'): ?>
        <!-- Page-specific CSS for KBT STEAM -->
        <link rel="stylesheet" href="assets/css/pages/kbt-steam.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-library-project'): ?>
        <!-- Page-specific CSS for Library Project -->
        <link rel="stylesheet" href="assets/css/pages/library-project.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-public-art-research'): ?>
        <!-- Page-specific CSS for Public Art Research -->
        <link rel="stylesheet" href="assets/css/pages/public-art-research.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-art-literacy'): ?>
        <!-- Page-specific CSS for Art Literacy -->
        <link rel="stylesheet" href="assets/css/pages/art-literacy.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-first-kbt-opp-artists-residency'): ?>
        <!-- Page-specific CSS for First KBT-OPP Artists Residency -->
        <link rel="stylesheet" href="assets/css/pages/first-kbt-opp-artists-residency.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-the-first-kb19-discursive-roundtable'): ?>
        <!-- Page-specific CSS for First KB19 Discursive Roundtable -->
        <link rel="stylesheet" href="assets/css/pages/the-first-kb19-discursive-roundtable.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb19-launch'): ?>
        <!-- Page-specific CSS for KB19 Launch -->
        <link rel="stylesheet" href="assets/css/pages/kb19-launch.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb19-partners'): ?>
        <!-- Page-specific CSS for KB19 Partners -->
        <link rel="stylesheet" href="assets/css/pages/kb19-partners.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb19-media'): ?>
        <!-- Page-specific CSS for KB19 Media -->
        <link rel="stylesheet" href="assets/css/pages/kb19-media.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb19-teams'): ?>
        <!-- Page-specific CSS for KB19 Teams -->
        <link rel="stylesheet" href="assets/css/pages/kb19-teams.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb17-about'): ?>
        <!-- Page-specific CSS for KB17 About -->
        <link rel="stylesheet" href="assets/css/pages/kb17-about.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb17-projects'): ?>
        <!-- Page-specific CSS for KB17 Projects Overview -->
        <link rel="stylesheet" href="assets/css/pages/kb17-projects.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb17-prizes'): ?>
        <!-- Page-specific CSS for KB17 Prizes -->
        <link rel="stylesheet" href="assets/css/pages/kb17-prizes.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb17-pechakucha'): ?>
        <!-- Page-specific CSS for KB17 PechaKucha -->
        <link rel="stylesheet" href="assets/css/pages/kb17-pechakucha.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb17-discursive'): ?>
        <!-- Page-specific CSS for KB17 Discursive -->
        <link rel="stylesheet" href="assets/css/pages/kb17-discursive.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb17-art-educational-program'): ?>
        <!-- Page-specific CSS for KB17 Art Educational Program -->
        <link rel="stylesheet" href="assets/css/pages/kb17-art-educational-program.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb17-activities'): ?>
        <!-- Page-specific CSS for KB17 Activities -->
        <link rel="stylesheet" href="assets/css/pages/kb17-activities.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb17-karachi-art-directory'): ?>
        <!-- Page-specific CSS for KB17 Karachi Art Directory -->
        <link rel="stylesheet" href="assets/css/pages/kb17-karachi-art-directory.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-friends-of-kb19'): ?>
        <!-- Page-specific CSS for Friends of KB19 -->
        <link rel="stylesheet" href="assets/css/pages/friends-of-kb19.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb19-catalogue'): ?>
        <!-- Page-specific CSS for KB19 Catalogue -->
        <link rel="stylesheet" href="assets/css/pages/kb19-catalogue.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb17-about'): ?>
        <!-- Page-specific CSS for KB17 About -->
        <link rel="stylesheet" href="assets/css/pages/kb17-about.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb17-message-from-ceo'): ?>
        <!-- Page-specific CSS for KB17 Message from CEO -->
        <link rel="stylesheet" href="assets/css/pages/kb17-message-from-ceo.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb17-curator'): ?>
        <!-- Page-specific CSS for KB17 Curator -->
        <link rel="stylesheet" href="assets/css/pages/kb17-curator.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb17-projects'): ?>
        <!-- Page-specific CSS for KB17 Projects -->
        <link rel="stylesheet" href="assets/css/pages/kb17-projects.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb17-teams'): ?>
        <!-- Page-specific CSS for KB17 Teams -->
        <link rel="stylesheet" href="assets/css/pages/kb17-teams.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb17-partners'): ?>
        <!-- Page-specific CSS for KB17 Partners -->
        <link rel="stylesheet" href="assets/css/pages/kb17-partners.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb17-curatorial-website'): ?>
        <!-- Page-specific CSS for KB17 Curatorial Website -->
        <link rel="stylesheet" href="assets/css/pages/kb17-curatorial-website.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb17-catalogue'): ?>
        <!-- Page-specific CSS for KB17 Catalogue -->
        <link rel="stylesheet" href="assets/css/pages/kb17-catalogue.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-contact-us'): ?>
        <!-- Page-specific CSS for Contact Us -->
        <link rel="stylesheet" href="assets/css/pages/contact-us.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-home'): ?>
        <!-- Page-specific CSS for Home -->
        <link rel="stylesheet" href="assets/css/pages/home.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb24-wellness'): ?>
        <!-- Page-specific CSS for KB24 Wellness -->
        <link rel="stylesheet" href="assets/css/pages/kb24-art-and-well-being-sessions.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb24-discursive'): ?>
        <!-- Page-specific CSS for KB24 Discursive -->
        <link rel="stylesheet" href="assets/css/pages/kb24-discursive-sessions.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb24-educational'): ?>
        <!-- Page-specific CSS for KB24 Educational -->
        <link rel="stylesheet" href="assets/css/pages/kb24-educational-programming.css">
    <?php endif; ?>
    <?php if (isset($bodyClass) && $bodyClass === 'page-kb24-ceremonies'): ?>
        <!-- Page-specific CSS for KB24 Ceremonies -->
        <link rel="stylesheet" href="assets/css/pages/kb24-inaugural-and-closing-ceremonies.css">
    <?php endif; ?>



</head>

<body<?php echo isset($bodyClass) ? ' class="' . htmlspecialchars($bodyClass) . '"' : ''; ?>>
    <!--********************************
   		Code Start From Here 
	******************************** -->


    <!-- Cursor -->
    <div class="cursor"></div>
    <div class="cursor-follower"></div>
    <!-- Cursor End -->

    <!--==============================
     Preloader
    ==============================-->
    <div class="preloader ">
        <div class="preloader-inner">
            <img src="assets/img/biennale-images/KBT_logo.png" alt="Karachi Biennale Trust">
            <span class="loader"></span>
        </div>
    </div>

    <!--==============================
    Product Lightbox
    ==============================-->
    <div id="QuickView" class="white-popup mfp-hide">
        <div class="container bg-white">
            <div class="row gx-50">
                <div class="col-lg-6">
                    <div class="product-big-img">
                        <div class="img"><img src="assets/img/product/product-details1.png" alt="Product Image"></div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="product-about">
                        <p class="price">$150.00</p>
                        <h2 class="product-title">Premium Museum Masterpieces</h2>
                        <div class="product-rating">
                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span></div>
                            <a href="shop-details.html" class="woocommerce-review-link">(<span class="count">2</span> customer reviews)</a>
                        </div>
                        <p class="text">Syndicate customized growth strategies prospective human capital leverage other's optimal e-markets without transparent catalysts for change. Credibly coordinate highly efficient methods of empowerment cross unit solutions.</p>
                        <div class="checklist">
                            <ul>
                                <li><i class="far fa-check-circle"></i> Lifetime structural, one year finish warranty</li>
                                <li><i class="far fa-check-circle"></i> Mapped from “Center Caps” under ” tment” tab</li>
                                <li><i class="far fa-check-circle"></i> Fully copatible with OEM equimpent</li>
                            </ul>
                        </div>
                        <div class="actions">
                            <div class="quantity">
                                <input type="number" class="qty-input" step="1" min="1" max="100" name="quantity" value="1" title="Qty">
                                <button class="quantity-plus qty-btn"><i class="fas fa-chevron-up"></i></button>
                                <button class="quantity-minus qty-btn"><i class="fas fa-chevron-down"></i></button>
                            </div>
                            <button class="btn">ADD TO CART <i class="fas fa-shopping-bag ms-2"></i></button>
                        </div>
                        <div class="product_meta">
                            <span class="sku_wrapper">SKU: <span class="sku">Artist</span></span>
                            <span class="posted_in">Category: <a href="shop.html" rel="tag">Art & Exhibition</a></span>
                            <span>Tags: <a href="shop.html">Museum</a><a href="shop.html">Exhibition</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <button title="Close (Esc)" type="button" class="mfp-close">×</button>
        </div>
    </div>

    <div class="sidemenu-wrapper">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><i class="fas fa-times"></i></button>
            <div class="widget footer-widget">
                <div class="widget widget-about footer-widget">
                    <div class="footer-logo">
                        <a href="index.php"><img src="assets/img/biennale-images/KBT_logo.png" alt="logo"></a>
                    </div>
                    <p class="about-text mb-4 text-white">A small business can be better than a big business because of agility and adaptability due to their size and scale.</p>
                    
                    <p class="footer-text text-white">
                        <a href="tel:+92 21 35157566"><i class="fas fa-phone-alt me-2"></i>+92 21 35157566</a>
                    </p>
                    <!-- <p class="contact-text text-white"><i class="fa fa-map-marker-alt me-2"></i> 401, 4th Floor, Olympia Tower, Hasan Square, Karachi</p> -->
                    <p class="footer-text text-white"><a href="mailto:info@karachibiennale.org.pk"><i class="fas fa-envelope me-2"></i>info@karachibiennale.org.pk</a></p>
                    <div class="social-btn style2 mt-30">
                        <a href="https://www.facebook.com/KarachiBiennaleTrust/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://x.com/khi_Biennale" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/karachi_biennale/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
    Mobile Menu
    ============================== -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-area text-center">
            <button class="menu-toggle"><i class="fas fa-times"></i></button>
            <div class="mobile-logo">
                <a href="index.php"><img src="assets/img/biennale-images/KBT_logo.png" alt="Karachi Biennale Trust"></a>
            </div>
            <div class="mobile-menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li class="menu-item-has-children">
                        <a href="https://karachibiennale.org.pk/about/">About</a>
                        <ul class="sub-menu">
                            <li><a href="welcome-note.php">Welcome Note</a></li>
                            <li><a href="about-kbt.php">About KBT</a></li>
                            <li><a href="kbt-founders.php">KBT Founders</a></li>
                            <li><a href="kbt-patrons.php">KBT Patrons</a></li>
                            <li><a href="kbt-trustees.php">KBT Trustees</a></li>
                            <li><a href="kbt-team.php">KBT Team</a></li>
                            <li><a href="kbt-support-team.php">KBT Support Team</a></li>
                        </ul>
                    </li>
                    <li><a href="kb27.php">KB27</a></li>
                    <li><a href="kb24-partners.php">KB24 Partners</a></li>
                    <li class="menu-item-has-children">
                        <a href="#">Past Biennale</a>
                        <ul class="sub-menu">
                            <li class="menu-item-has-children">
                                <a href="#">KB24</a>
                                <ul class="sub-menu">
                                    <li><a href="kb24-at-a-glance.php">KB24 – At A Glance</a></li>
                                    <li><a href="kb24-outreach.php">KB24 Outreach</a></li>
                                    <li><a href="kb24-exhibition-venues.php">KB24 Exhibition Venues</a></li>
                                    <li><a href="kb24-artists-list.php">KB24 Artists List</a></li>
                                    <li><a href="kb24-highlights.php">KB24 – Highlights and Projects</a></li>
                                    <li><a href="kb24-media.php">KB24 – Media</a></li>
                                    <li><a href="kb24-art-prize-winners.php">KB24 – Art Prize Winners</a></li>
                                    <li><a href="kb24-catalogue.php">KB24 – Catalogue</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">KB22</a>
                                <ul class="sub-menu">
                                    <li><a href="kb22-at-a-glance.php">KB22 – At A Glance</a></li>
                                    <li><a href="kb22-partners.php">KB22 – Partners</a></li>
                                    <li><a href="kb22-outreach.php">KB22 – Outreach</a></li>
                                    <li><a href="kb22-curator.php">KB22 – Curator</a></li>
                                    <li><a href="kb22-exhibition-venues.php">KB22 – Exhibition Venues</a></li>
                                    <li><a href="kb22-artists-list.php">KB22 – Artists List</a></li>
                                    <li><a href="kb22-programming.php">KB22 – Programming</a></li>
                                    <li><a href="kb22-curatorial-team.php">KB22 – Curatorial Team</a></li>
                                    <li><a href="kb22-highlights.php">KB22 – Highlights and Projects</a></li>
                                    <li><a href="kb22-art-prize-winners.php">KB22 – Art Prize Winners</a></li>
                                    <li><a href="kb22-media.php">KB22 – Media</a></li>
                                    <li><a href="kb22-report.php">KB22 Report</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">KB19</a>
                                <ul class="sub-menu">
                                    <li><a href="kb19-about.php">KB19 – About</a></li>
                                    <li><a href="kb19-message-from-ceo.php">KB19 – Message from the CEO</a></li>
                                    <li><a href="kb19-visitors-guide-app.php">KB19 – Visitors Guide App</a></li>
                                    <li><a href="kb19-artists-and-venues.php">KB19 – Artists and Venues</a></li>
                                    <li><a href="kb19-programming.php">KB19 – Programming</a></li>
                                    <li><a href="kb19-educational-program.php">KB19 – Educational Program</a></li>
                                    <li><a href="kb19-curator.php">KB19 – Curator</a></li>
                                    <li><a href="kb19-projects.php">KB19 – Projects</a></li>
                                    <li><a href="kb19-partners.php">KB19 – Partners</a></li>
                                    <li><a href="kb19-media.php">KB19 – Media</a></li>
                                    <li><a href="kb19-teams.php">KB19 – Teams</a></li>
                                    <li><a href="friends-of-kb19.php">Friends of KB19</a></li>
                                    <li><a href="kb19-catalogue.php">KB19 – Catalogue</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">KB17</a>
                                <ul class="sub-menu">
                                    <li><a href="kb17-about.php">KB17 – About</a></li>
                                    <li><a href="kb17-message-from-ceo.php">KB17 – Message from the CEO</a></li>
                                    <li><a href="kb17-curator.php">KB17 – Curator</a></li>
                                    <li><a href="kb17-projects.php">KB17 – Projects</a></li>
                                    <li><a href="kb17-teams.php">KB17 – Teams</a></li>
                                    <li><a href="kb17-partners.php">KB17 – Partners</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="kb17-curatorial-website.php">KB17 – Curatorial (Website)</a>
                                        <ul class="sub-menu">
                                            <li><a href="kb22-curator.php">Karachi Biennale 2022</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="kb17-catalogue.php">KB17 – Karachi Biennale Catalogue</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="contact-us.php">Contact Us</a></li>
                    <li><a href="https://karachiartdirectory.com/">Karachi Art Directory</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
	Header Area
    ==============================-->
    <header class="nav-header header-layout1">
        <div class="header-top d-md-block d-none">
            <div class="container">
                <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                    <div class="col-auto">
                        <div class="header-links">
                            <ul>
                                <li><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 11.0312L11.9375 9.71875C11.25 9.40625 10.4688 9.625 10 10.1875L9.15625 11.2188C7.75 10.4062 6.59375 9.25 5.78125 7.875L6.84375 7.03125C7.375 6.5625 7.59375 5.78125 7.3125 5.125L5.96875 2C5.65625 1.28125 4.875 0.875 4.09375 1.0625L1.25 1.71875C0.5 1.875 0 2.53125 0 3.3125C0 10.875 6.125 17 13.6875 17C14.4688 17 15.125 16.5 15.25 15.75L15.9062 12.9062C16.125 12.125 15.7188 11.3438 15 11.0312ZM14.4688 12.5625L13.8125 15.4062C13.8125 15.4375 13.75 15.5 13.6875 15.5C6.96875 15.5 1.46875 10.0312 1.46875 3.3125C1.46875 3.25 1.53125 3.1875 1.59375 3.1875L4.4375 2.53125L4.46875 2.5C4.53125 2.5 4.5625 2.5625 4.59375 2.59375L5.90625 5.65625C5.9375 5.71875 5.9375 5.78125 5.875 5.8125L4.34375 7.0625C4.09375 7.28125 4 7.65625 4.15625 7.96875C5.1875 10.0625 6.90625 11.7812 9 12.8125C9.3125 12.9688 9.71875 12.9062 9.9375 12.625L11.1875 11.0938C11.2188 11.0625 11.2812 11.0312 11.3438 11.0625L14.4062 12.375C14.4688 12.4375 14.5 12.5 14.4688 12.5625Z" fill="inherit"/>
                                    </svg>
                                        <a href="tel:+92 21 35157566">+92 21 35157566</a></li>
                                <li><a href="mailto:info@karachibiennale.org.pk"><i class="fas fa-envelope me-2"></i>info@karachibiennale.org.pk</a></li>
                                <!-- <li><i class="far fa-clock"></i>Mon - Fri: 8:00AM - 6:00PM</li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <div class="header-links header-links-right">
                            <ul>
                                <!-- <li>
                                    <i class="fas fa-globe"></i><a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink6" data-bs-toggle="dropdown" aria-expanded="false">English</a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink6">
                                        <li>
                                            <a href="#">German</a>
                                            <a href="#">French</a>
                                            <a href="#">Italian</a>
                                            <a href="#">Latvian</a>
                                            <a href="#">Spanish</a>
                                            <a href="#">Greek</a>
                                        </li>
                                    </ul>
                                </li> -->
                                <li>
                                    <button type="button" class="sidebar-btn sideMenuToggler">
                                        <span class="line"></span>                                        
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="menu-area">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="index.php"><img src="assets/img/biennale-images/KBT_logo.png" alt="Karachi Biennale Trust"></a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <nav class="main-menu d-none d-lg-inline-block" aria-label="Main Menu">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="https://karachibiennale.org.pk/about/">About</a>
                                        <ul class="sub-menu">
                                            <li><a href="welcome-note.php">Welcome Note</a></li>
                                            <li><a href="about-kbt.php">About KBT</a></li>
                                            <li><a href="kbt-founders.php">KBT Founders</a></li>
                                            <li><a href="kbt-patrons.php">KBT Patrons</a></li>
                                            <li><a href="kbt-trustees.php">KBT Trustees</a></li>
                                            <li><a href="kbt-team.php">KBT Team</a></li>
                                            <li><a href="kbt-support-team.php">KBT Support Team</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="kb27.php">KB27</a></li>
                                    <li><a href="kb24-partners.php">KB24 Partners</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Past Biennale</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item-has-children">
                                                <a href="#">KB24</a>
                                                <ul class="sub-menu">
                                                    <li><a href="kb24-at-a-glance.php">KB24 – At A Glance</a></li>
                                                    <li><a href="kb24-outreach.php">KB24 Outreach</a></li>
                                                    <li><a href="kb24-exhibition-venues.php">KB24 Exhibition Venues</a></li>
                                                    <li><a href="kb24-artists-list.php">KB24 Artists List</a></li>
                                                    <li><a href="kb24-highlights.php">KB24 – Highlights and Projects</a></li>
                                                    <li><a href="kb24-media.php">KB24 – Media</a></li>
                                                    <li><a href="kb24-art-prize-winners.php">KB24 – Art Prize Winners</a></li>
                                                    <li><a href="kb24-catalogue.php">KB24 – Catalogue</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">KB22</a>
                                                <ul class="sub-menu">
                                                    <li><a href="kb22-at-a-glance.php">KB22 – At A Glance</a></li>
                                                    <li><a href="kb22-partners.php">KB22 – Partners</a></li>
                                                    <li><a href="kb22-outreach.php">KB22 – Outreach</a></li>
                                                    <li><a href="kb22-curator.php">KB22 – Curator</a></li>
                                                    <li><a href="kb22-exhibition-venues.php">KB22 – Exhibition Venues</a></li>
                                                    <li><a href="kb22-artists-list.php">KB22 – Artists List</a></li>
                                                    <li><a href="kb22-programming.php">KB22 – Programming</a></li>
                                                    <li><a href="kb22-curatorial-team.php">KB22 – Curatorial Team</a></li>
                                                    <li><a href="kb22-highlights.php">KB22 – Highlights and Projects</a></li>
                                                    <li><a href="kb22-art-prize-winners.php">KB22 – Art Prize Winners</a></li>
                                                    <li><a href="kb22-media.php">KB22 – Media</a></li>
                                                    <li><a href="kb22-report.php">KB22 Report</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">KB19</a>
                                                <ul class="sub-menu">
                                                    <li><a href="kb19-about.php">KB19 – About</a></li>
                                                    <li><a href="kb19-message-from-ceo.php">KB19 – Message from the CEO</a></li>
                                                    <li><a href="kb19-visitors-guide-app.php">KB19 – Visitors Guide App</a></li>
                                                    <li><a href="kb19-artists-and-venues.php">KB19 – Artists and Venues</a></li>
                                                    <li><a href="kb19-programming.php">KB19 – Programming</a></li>
                                                    <li><a href="kb19-educational-program.php">KB19 – Educational Program</a></li>
                                                    <li><a href="kb19-curator.php">KB19 – Curator</a></li>
                                                    <li><a href="kb19-projects.php">KB19 – Projects</a></li>
                                                    <li><a href="kb19-partners.php">KB19 – Partners</a></li>
                                                    <li><a href="kb19-media.php">KB19 – Media</a></li>
                                                    <li><a href="kb19-teams.php">KB19 – Teams</a></li>
                                                    <li><a href="friends-of-kb19.php">Friends of KB19</a></li>
                                                    <li><a href="kb19-catalogue.php">KB19 – Catalogue</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">KB17</a>
                                                <ul class="sub-menu">
                                                    <li><a href="kb17-about.php">KB17 – About</a></li>
                                                    <li><a href="kb17-message-from-ceo.php">KB17 – Message from the CEO</a></li>
                                                    <li><a href="kb17-curator.php">KB17 – Curator</a></li>
                                                    <li><a href="kb17-projects.php">KB17 – Projects</a></li>
                                                    <li><a href="kb17-teams.php">KB17 – Teams</a></li>
                                                    <li><a href="kb17-partners.php">KB17 – Partners</a></li>
                                                    <li class="menu-item-has-children">
                                                        <a href="kb17-curatorial-website.php">KB17 – Curatorial (Website)</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="kb22-curator.php">Karachi Biennale 2022</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="kb17-catalogue.php">KB17 – Karachi Biennale Catalogue</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="contact-us.php">Contact Us</a></li>
                                    <li><a href="https://karachiartdirectory.com/">Karachi Art Directory</a></li>
                                </ul>
                            </nav>
                            <div class="navbar-right d-inline-flex d-lg-none">
                                <button type="button" class="menu-toggle icon-btn"><i class="fas fa-bars"></i></button>
                            </div>
                        </div>
                        <div class="col-auto d-none d-xl-block">
                            <div class="header-button">
                                <a href="contact.html" class="btn d-none d-xl-block">
                                    TICKET & ADMISSION 
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="smooth-wrapper">
        <div id="smooth-content">
