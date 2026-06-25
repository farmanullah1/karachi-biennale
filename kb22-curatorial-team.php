<?php 
  $pageTitle = 'KB22 Curatorial Team - Third Karachi Biennale';
  $metaDesc = 'Meet the curatorial team of the Third Karachi Biennale (KB22), including Chief Curator Faisal Anwar, Isaac Caballero, Maha Minhaj, and Maham Chiragh.';
  $bodyClass = 'page-kb22-curatorial-team'; 
  include 'components/header.php'; 
?>

<!-- 1. Page Header (Hero Area) -->
<section class="kb22t-hero-section text-center">
    <div class="container">
        <h1 class="kb22t-hero-title">Curatorial Team</h1>
        <p class="kb22t-hero-subtitle">Third Karachi Biennale KB22</p>
        <p class="kb22t-hero-intro">The success of the Third Karachi Biennale (KB22) was driven by a dedicated curatorial team. Led by Chief Curator Faisal Anwar, this collaborative board coordinated international artists, integrated complex technology platforms, and managed public spaces across Karachi to bring visual arts to life.</p>
        
        <!-- Breadcrumbs -->
        <nav class="kb22t-breadcrumbs" aria-label="breadcrumb">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>Past Biennale</li>
                <li>KB22</li>
                <li class="active" aria-current="page">Curatorial Team</li>
            </ul>
        </nav>
    </div>
</section>

<!-- 2. Team Grid Section -->
<div class="kb22t-team-wrap">
    <div class="container">
        
        <!-- Chief Curator - Large Feature Layout -->
        <div class="kb22t-chief-feature mb-60">
            <div class="row align-items-center g-5">
                <div class="col-lg-5 text-center">
                    <div class="kb22t-img-wrap kb22t-chief-img-wrap">
                        <img src="assets/img/team/Faisal_Anwar_Team.jpg" alt="Faisal Anwar" class="kb22t-img">
                        <span class="kb22t-role-badge badge-chief">Chief Curator</span>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="kb22t-details">
                        <h2 class="kb22t-member-name text-start">Faisal Anwar</h2>
                        <h3 class="kb22t-member-role">Chief Curator, KB22</h3>
                        <p class="kb22t-bio-text">Faisal Anwar curated KB22 under the theme "Collective Imagination: Now and the Next". His vision connected international technology-driven artists with Karachi's historic venues, creating an experiential network of public art. With over two decades of international experience as a creative technologist, Faisal guided the team in executing code-based installations, community programs, and digital projections.</p>
                        <div class="kb22t-cta-wrap">
                            <a href="kb22-curator.php" class="kb22t-essay-link">Read Curatorial Essay <i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="kb22t-divider mb-60">

        <!-- Other Curatorial Board Members - Grid Layout -->
        <div class="kb22t-grid">
            
            <!-- Isaac Caballero -->
            <div class="kb22t-card">
                <div class="kb22t-img-wrap">
                    <img src="assets/img/team/Issac_Caballero_Team.jpg" alt="Isaac Caballero" class="kb22t-img">
                    <span class="kb22t-role-badge">Curatorial Associate</span>
                </div>
                <div class="kb22t-card-content">
                    <h4 class="kb22t-card-name">Isaac Caballero</h4>
                    <p class="kb22t-card-role">Curatorial Associate</p>
                    <p class="kb22t-card-bio">Isaac Caballero worked closely with the Chief Curator to coordinate digital asset collection and project alignment. His background in international art logistics enabled smooth integrations with foreign missions and digital collectives, ensuring that complex software installations matched physical venue capacities.</p>
                </div>
            </div>

            <!-- Maha Minhaj -->
            <div class="kb22t-card">
                <div class="kb22t-img-wrap">
                    <img src="assets/img/team/Maha_Minhaaj_Team.jpg" alt="Maha Minhaj" class="kb22t-img">
                    <span class="kb22t-role-badge">Curatorial Coordinator</span>
                </div>
                <div class="kb22t-card-content">
                    <h4 class="kb22t-card-name">Maha Minhaj</h4>
                    <p class="kb22t-card-role">Curatorial Assistant &amp; Coordinator</p>
                    <p class="kb22t-card-bio">Maha Minhaj managed local operations, coordinating directly with historical venues, academic hosts, and corporate partners. Her dedicated scheduling and operations management connected artists, volunteers, and production teams, enabling smooth programming daily.</p>
                </div>
            </div>

            <!-- Maham Chiragh -->
            <div class="kb22t-card">
                <div class="kb22t-img-wrap">
                    <img src="assets/img/team/Maham_Chiraag_Team.jpg" alt="Maham Chiragh" class="kb22t-img">
                    <span class="kb22t-role-badge">Curatorial Coordinator</span>
                </div>
                <div class="kb22t-card-content">
                    <h4 class="kb22t-card-name">Maham Chiragh</h4>
                    <p class="kb22t-card-role">Curatorial Assistant &amp; Coordinator</p>
                    <p class="kb22t-card-bio">Maham Chiragh managed the extensive school and civic outreach workshops. She collaborated directly with educational institutions, mentors, and local communities, bringing contemporary arts and basic technical training directly to youth throughout Karachi.</p>
                </div>
            </div>

        </div>

    </div>
</div>

<?php include 'components/footer.php'; ?>
