<?php 
  $pageTitle = 'KB22 Highlights & Projects - Third Karachi Biennale';
  $metaDesc = 'Explore the core highlights, digital projects, live sound performances, and interactive flipbook catalogue of the Third Karachi Biennale (KB22).';
  $bodyClass = 'page-kb22-highlights'; 
  include 'components/header.php'; 
?>

<!-- 1. Page Header (Hero Area) -->
<section class="kb22h-hero-section text-center">
    <div class="container">
        <h1 class="kb22h-hero-title">Highlights &amp; Projects</h1>
        <p class="kb22h-hero-subtitle">Third Karachi Biennale KB22</p>
        <p class="kb22h-hero-intro">The Third Karachi Biennale (KB22) was an immersive exploration of the intersection between art and technology. Beyond static displays, the biennale activated the city with interactive projections, electronic soundscapes, and discursive panel assemblies that engaged Karachi citizens under the theme "Collective Imagination: Now and the Next".</p>
        
        <!-- Breadcrumbs -->
        <nav class="kb22h-breadcrumbs" aria-label="breadcrumb">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>Past Biennale</li>
                <li>KB22</li>
                <li class="active" aria-current="page">Highlights &amp; Projects</li>
            </ul>
        </nav>
    </div>
</section>

<div class="kb22h-main-wrapper">
    <div class="container">
        
        <!-- 2. Highlights Grid -->
        <div class="kb22h-grid mb-60">
            
            <!-- Highlight 1: Thematic Exhibitions -->
            <div class="kb22h-card">
                <div class="kb22h-card-icon"><i class="fas fa-landmark"></i></div>
                <div class="kb22h-card-body">
                    <h3 class="kb22h-card-title">Curatorial Exhibitions</h3>
                    <p class="kb22h-card-desc">Showcasing the convergence of art and digital media across 9 transformed heritage, academic, and gallery sites in Karachi.</p>
                    <a href="kb22-exhibition-venues.php" class="kb22h-card-link">View Venues <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
            
            <!-- Highlight 2: Discursive Forums -->
            <div class="kb22h-card">
                <div class="kb22h-card-icon"><i class="fas fa-comments"></i></div>
                <div class="kb22h-card-body">
                    <h3 class="kb22h-card-title">Discursive Assemblies</h3>
                    <p class="kb22h-card-desc">Intensive panel talks hosted at IBA and Alliance Française, examining surveillance capitalism, virtual memory, and algorithmic art ethics.</p>
                    <a href="kb22-programming.php" class="kb22h-card-link">View Calendar <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>

            <!-- Highlight 3: Live sound art installations -->
            <div class="kb22h-card">
                <div class="kb22h-card-icon"><i class="fas fa-volume-up"></i></div>
                <div class="kb22h-card-body">
                    <h3 class="kb22h-card-title">Live Sound Installations</h3>
                    <p class="kb22h-card-desc">Spatial audio structures and concerts at Jamshed Memorial Hall translating atmospheric readings and data streams into sound.</p>
                    <a href="kb22-artists-list.php" class="kb22h-card-link">Explore Artists <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>

            <!-- Highlight 4: Public projections -->
            <div class="kb22h-card">
                <div class="kb22h-card-icon"><i class="fas fa-video"></i></div>
                <div class="kb22h-card-body">
                    <h3 class="kb22h-card-title">Public Projection Mapping</h3>
                    <p class="kb22h-card-desc">Activating Old Karachi public space with live visual projections on the stone facades of NJV School and Hamid Market.</p>
                    <a href="kb22-outreach.php" class="kb22h-card-link">View Outreach <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>

            <!-- Highlight 5: Eco Art mapping -->
            <div class="kb22h-card">
                <div class="kb22h-card-icon"><i class="fas fa-leaf"></i></div>
                <div class="kb22h-card-body">
                    <h3 class="kb22h-card-title">Eco-Arts &amp; Ecology</h3>
                    <p class="kb22h-card-desc">Hands-on botanical mapping projects linking ecological datasets of Karachi heritage trees with interactive digital art loops.</p>
                    <a href="kb22-outreach.php#environmental" class="kb22h-card-link">View Project <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>

            <!-- Highlight 6: Interactive Educational labs -->
            <div class="kb22h-card">
                <div class="kb22h-card-icon"><i class="fas fa-graduation-cap"></i></div>
                <div class="kb22h-card-body">
                    <h3 class="kb22h-card-title">Educational Labs</h3>
                    <p class="kb22h-card-desc">Collaborative computational and design workshops conducted for school kids, culminating in public gallery displays.</p>
                    <a href="kb22-outreach.php#educational" class="kb22h-card-link">Explore Labs <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
            
        </div>

        <hr class="kb22h-divider mb-60">

        <!-- 3. Flipbook Catalogue Embed Section -->
        <section class="kb22h-flipbook-section">
            <div class="kb22h-section-header text-center mb-40">
                <span class="kb22h-flipbook-badge"><i class="fas fa-book-open me-2"></i>Digital Archive</span>
                <h2 class="kb22h-flipbook-title">KB22 Interactive Print Catalogue</h2>
                <p class="kb22h-flipbook-desc">Browse the official print catalogue of the Third Karachi Biennale (KB22) through our interactive Heyzine flipbook reader. Explore complete curatorial statements, artist catalogs, and venue maps.</p>
            </div>

            <div class="kb22h-flipbook-wrapper">
                <div class="kb22h-iframe-container">
                    <iframe src="https://heyzine.com/flip-book/9a48bd7959.html" allowfullscreen class="kb22h-flipbook-iframe"></iframe>
                </div>
                <div class="text-center mt-30">
                    <a href="https://heyzine.com/flip-book/9a48bd7959.html" target="_blank" class="kb22h-external-btn">Open in New Tab <i class="fas fa-external-link-alt ms-2"></i></a>
                </div>
            </div>
        </section>

    </div>
</div>

<?php include 'components/footer.php'; ?>
