<?php 
  $pageTitle = 'KB17 Partners & Sponsors - First Karachi Biennale';
  $metaDesc = 'Explore the corporate sponsors, institutional partners, and media supporters of the First Karachi Biennale (KB17), whose contributions enabled our inaugural exhibition.';
  $bodyClass = 'page-kb17-partners'; 
  include 'components/header.php'; 
?>

<!-- Skip Link for Accessibility -->
<a href="#kb17pt-main-content" class="skip-link visually-hidden-focusable">Skip to content</a>

<!-- 1. Hero Banner Area -->
<section class="kb17pt-hero-section">
    <div class="kb17pt-hero-banner">
        <div class="kb17pt-hero-overlay"></div>
        <div class="container text-center">
            <h1 class="kb17pt-hero-title">KB17 Sponsors & Partners</h1>
            <p class="kb17pt-hero-subtitle">First Karachi Biennale</p>
            
            <!-- Breadcrumbs -->
            <nav class="kb17pt-breadcrumbs" aria-label="breadcrumb">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li>Past Biennale</li>
                    <li>KB17</li>
                    <li class="active" aria-current="page">Sponsors & Partners</li>
                </ul>
            </nav>
        </div>
    </div>
</section>

<!-- 2. Main Content Area -->
<main id="kb17pt-main-content" class="kb17pt-main-wrapper">
    <div class="container">
        
        <!-- Intro Header -->
        <div class="kb17pt-intro text-center mb-5">
            <h2 class="kb17pt-section-heading">Supporting the Arts in Karachi</h2>
            <p class="kb17pt-section-lead">The Karachi Biennale Trust gratefully acknowledges the corporate partners, foreign cultural institutions, media platforms, and local organisations that made the First Karachi Biennale (KB17) possible.</p>
        </div>

        <?php
        // Define all groups of sponsors & partners
        $sponsorsData = [
            'Lead Partner' => [
                ['name' => 'JS Bank', 'logo' => 'js.png', 'fallback' => 'JS']
            ],
            'Major Sponsors' => [
                ['name' => 'PC Hotel', 'logo' => 'PC.png', 'fallback' => 'PC'],
                ['name' => 'Hubco', 'logo' => 'hub-1.png', 'fallback' => 'Hub'],
                ['name' => 'National Foods', 'logo' => 'national-foods.png', 'fallback' => 'NF']
            ],
            'Sponsors' => [
                ['name' => 'Getz Pharma', 'logo' => 'getz.png', 'fallback' => 'Getz'],
                ['name' => 'TPL Trakker', 'logo' => 'tpl.png', 'fallback' => 'TPL'],
                ['name' => 'Rafhan', 'logo' => 'rafhan.png', 'fallback' => 'Rafhan']
            ],
            'Logistics Partner' => [
                ['name' => 'TCS', 'logo' => 'Untitled-tcs.png', 'fallback' => 'TCS']
            ],
            'Hotel Partner' => [
                ['name' => 'Beach Luxury Hotel', 'logo' => 'beach.png', 'fallback' => 'Beach']
            ],
            'Publications Partner' => [
                ['name' => 'Markings Publishing', 'logo' => 'markings.png', 'fallback' => 'Markings']
            ],
            'Media Partner' => [
                ['name' => 'Express News', 'logo' => 'express.png', 'fallback' => 'Express']
            ],
            'Digital Media Partner' => [
                ['name' => 'Art TV Pakistan', 'logo' => 'arttv.png', 'fallback' => 'Art TV']
            ],
            'Digital Partner' => [
                ['name' => 'Olive Digital', 'logo' => 'olive.png', 'fallback' => 'Olive']
            ],
            'Event Partner' => [
                ['name' => 'Pomme', 'logo' => 'pome.png', 'fallback' => 'Pomme']
            ],
            'AV Partner' => [
                ['name' => 'Projectors & AV', 'logo' => 'proj.png', 'fallback' => 'AV Proj']
            ],
            'Transportation Partner' => [
                ['name' => 'Super Sawari Express', 'logo' => 'super-sawari-1.png', 'fallback' => 'Super Sawari']
            ],
            'Institutional Partners' => [
                ['name' => 'New North', 'logo' => 'new-north.png', 'fallback' => 'New North'],
                ['name' => 'Lutfi Foundation', 'logo' => 'lb.png', 'fallback' => 'LB'],
                ['name' => 'Rangoonwala Trust', 'logo' => 'rangoonwala.png', 'fallback' => 'ZVMG'],
                ['name' => 'Akhuwat Foundation', 'logo' => 'akhuwat.png', 'fallback' => 'Akhuwat'],
                ['name' => 'CCK', 'logo' => 'cck.png', 'fallback' => 'CCK'],
                ['name' => 'Alliance Française', 'logo' => 'af.png', 'fallback' => 'AF'],
                ['name' => 'British Council', 'logo' => 'bc.png', 'fallback' => 'BC'],
                ['name' => 'Pakistan Film Festival', 'logo' => 'p-film-fest.png', 'fallback' => 'PFF'],
                ['name' => 'Sanat Initiative', 'logo' => 'sanat-2.png', 'fallback' => 'Sanat'],
                ['name' => 'Ontario College', 'logo' => 'ontario.png', 'fallback' => 'Ontario'],
                ['name' => 'Consulate General of Italy', 'logo' => 'italia.png', 'fallback' => 'CG Italy'],
                ['name' => 'OPP RTI', 'logo' => 'opp-rti.png', 'fallback' => 'OPP-RTI'],
                ['name' => 'Logo Partner 17', 'logo' => 'logos-17.png', 'fallback' => 'LP 17'],
                ['name' => 'Logo Partner 18', 'logo' => 'logos-18.png', 'fallback' => 'LP 18'],
                ['name' => 'Logo Partner 19', 'logo' => 'logos-19.png', 'fallback' => 'LP 19'],
                ['name' => 'Logo Partner 20', 'logo' => 'logos-20.png', 'fallback' => 'LP 20'],
                ['name' => 'Logo Partner 21', 'logo' => 'logos-21.png', 'fallback' => 'LP 21'],
                ['name' => 'Logo Partner 22', 'logo' => 'logos-22.png', 'fallback' => 'LP 22'],
                ['name' => 'Logo Partner 23', 'logo' => 'logos-23.png', 'fallback' => 'LP 23'],
                ['name' => 'Logo Partner 24', 'logo' => 'logos-24.png', 'fallback' => 'LP 24'],
                ['name' => 'Logo Partner 25', 'logo' => 'logos-25.png', 'fallback' => 'LP 25'],
                ['name' => 'Logo Partner 26', 'logo' => 'logos-26.png', 'fallback' => 'LP 26'],
                ['name' => 'Logo Partner 27', 'logo' => 'logos-27.png', 'fallback' => 'LP 27'],
                ['name' => 'Logo Partner 28', 'logo' => 'logos-28.png', 'fallback' => 'LP 28'],
                ['name' => 'Logo Partner 29', 'logo' => 'logos-29.png', 'fallback' => 'LP 29'],
                ['name' => 'Logo Partner 30', 'logo' => 'logos-30.png', 'fallback' => 'LP 30']
            ],
            'Art Media Partners' => [
                ['name' => 'ADA Magazine', 'logo' => 'ada.png', 'fallback' => 'ADA'],
                ['name' => 'Gallerie', 'logo' => 'gallerie.png', 'fallback' => 'Gallerie'],
                ['name' => 'Universe in Universe', 'logo' => 'u-in-u.png', 'fallback' => 'UiU'],
                ['name' => 'Canvas Magazine', 'logo' => 'canvas.png', 'fallback' => 'Canvas'],
                ['name' => 'Artra', 'logo' => 'artra.png', 'fallback' => 'Artra'],
                ['name' => 'Art Now Pakistan', 'logo' => 'artnow.png', 'fallback' => 'Art Now']
            ],
            'Programming Partners' => [
                ['name' => 'Azad Film', 'logo' => 'azad.png', 'fallback' => 'Azad'],
                ['name' => 'The Second Floor (T2F)', 'logo' => 't2f.png', 'fallback' => 'T2F']
            ]
        ];

        // Gradient palettes for placeholders
        $gradients = [
            'bg-gradient-yellow',
            'bg-gradient-teal',
            'bg-gradient-blue',
            'bg-gradient-purple',
            'bg-gradient-orange'
        ];
        $gradIndex = 0;

        foreach($sponsorsData as $tierName => $partners):
        ?>
        <section class="kb17pt-tier-section mb-5">
            <h3 class="kb17pt-tier-title"><?php echo $tierName; ?></h3>
            <div class="row g-4 justify-content-center">
                <?php foreach($partners as $p): 
                    $logoPath = 'assets/img/KB17/' . $p['logo'];
                    $hasLogo = file_exists($logoPath);
                    $gradClass = $gradients[$gradIndex % count($gradients)];
                    $gradIndex++;
                ?>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="kb17pt-partner-card <?php echo !$hasLogo ? 'text-only' : ''; ?>">
                        <?php if ($hasLogo): ?>
                            <div class="kb17pt-logo-wrap">
                                <img src="<?php echo $logoPath; ?>" alt="<?php echo htmlspecialchars($p['name']); ?> Logo" class="img-fluid kb17pt-logo">
                            </div>
                        <?php else: ?>
                            <div class="kb17pt-logo-placeholder <?php echo $gradClass; ?>">
                                <?php echo htmlspecialchars($p['fallback']); ?>
                            </div>
                        <?php endif; ?>
                        <h4 class="kb17pt-partner-name"><?php echo htmlspecialchars($p['name']); ?></h4>
                        <span class="kb17pt-partner-detail"><?php echo htmlspecialchars($tierName); ?></span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
        <?php endforeach; ?>

    </div>
</main>

<?php include 'components/footer.php'; ?>
