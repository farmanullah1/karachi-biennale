<?php 
  $pageTitle = 'KB22 Art Prize Winners - Third Karachi Biennale';
  $metaDesc = 'Discover the five winners of the Third Karachi Biennale (KB22) Art Prizes, celebrating excellence in contemporary visual media, code, and performative arts.';
  $bodyClass = 'page-kb22-art-prize-winners'; 
  include 'components/header.php'; 
?>

<!-- 1. Page Header (Hero Area) -->
<section class="kb22w-hero-section text-center">
    <div class="container">
        <h1 class="kb22w-hero-title">Art Prize Winners</h1>
        <p class="kb22w-hero-subtitle">Third Karachi Biennale KB22 Awards</p>
        <p class="kb22w-hero-intro">To promote excellence, technological innovation, and civic dialogue, the Karachi Biennale Trust presented five awards for KB22. Judged by an international jury of curators and artists, these prizes recognize outstanding works that pushed the boundaries between physical art and digital space.</p>
        
        <!-- Breadcrumbs -->
        <nav class="kb22w-breadcrumbs" aria-label="breadcrumb">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>Past Biennale</li>
                <li>KB22</li>
                <li class="active" aria-current="page">Art Prize Winners</li>
            </ul>
        </nav>
    </div>
</section>

<div class="kb22w-sections-wrap">
    <div class="container">
        
        <!-- Prizes Grid -->
        <div class="kb22w-prize-grid">
            
            <!-- Prize 1: Lifetime Achievement Award -->
            <div class="kb22w-prize-card">
                <div class="kb22w-prize-img-wrap">
                    <img src="assets/img/KB22ArtPrizeWinners/lifetime_award-scaled.webp" alt="Musarrat Mirza receiving Lifetime Achievement Award at KB22" class="kb22w-prize-img">
                    <div class="kb22w-prize-badge"><i class="fas fa-medal"></i> Lifetime Achievement Award</div>
                </div>
                <div class="kb22w-prize-body">
                    <span class="kb22w-winner-title">Awardee</span>
                    <h3 class="kb22w-winner-name">Musarrat Mirza</h3>
                    <p class="kb22w-prize-desc">Presented to renowned painter and educator Musarrat Mirza for her decade-long dedication to fine arts in Pakistan. Through her profound oil paintings and decades of teaching at the University of Sindh, Jamshoro, she has inspired generations of visual artists, bridging local heritage with contemporary discourse.</p>
                </div>
            </div>

            <!-- Prize 2: KB22 Engro Juried Art Prize -->
            <div class="kb22w-prize-card">
                <div class="kb22w-prize-img-wrap">
                    <img src="assets/img/KB22ArtPrizeWinners/Invisible-Flock-and-Fakir-Zulfiqar-recieving-KB22-Juried-Art.png" alt="Invisible Flock & Faqir Zulfiqar receiving KB22 Juried Art Prize" class="kb22w-prize-img">
                    <div class="kb22w-prize-badge"><i class="fas fa-trophy"></i> KB22 Engro Juried Art Prize</div>
                </div>
                <div class="kb22w-prize-body">
                    <span class="kb22w-winner-title">Winners</span>
                    <h3 class="kb22w-winner-name">Invisible Flock, Faqir Zulfiqar &amp; Allah Jurio</h3>
                    <p class="kb22w-prize-desc">Awarded to the collaborative project by UK sound studio Invisible Flock and traditional Sindhi musicians Faqir Zulfiqar and Allah Jurio. Their multi-sensory audio installation mapped environmental sounds and classical wind instrumentation, bridging natural acoustic heritage with digital archival technology.</p>
                </div>
            </div>

            <!-- Prize 3: Popular Choice Award -->
            <div class="kb22w-prize-card">
                <div class="kb22w-prize-img-wrap">
                    <img src="assets/img/KB22ArtPrizeWinners/Popular-Choice-Award-Sheeza-Ali.png" alt="Syeda Sheeza Ali receiving Popular Choice Award at KB22" class="kb22w-prize-img">
                    <div class="kb22w-prize-badge"><i class="fas fa-users"></i> Popular Choice Prize</div>
                </div>
                <div class="kb22w-prize-body">
                    <span class="kb22w-winner-title">Winner</span>
                    <h3 class="kb22w-winner-name">Syeda Sheeza Ali</h3>
                    <p class="kb22w-prize-desc">Awarded to Syeda Sheeza Ali for her interactive installation that captured visitors' visual interest throughout the biennale. Her work allowed guests to shape digital graphics on a central screen using their hand movements, becoming one of the most engaging and highly voted public projects at KB22.</p>
                </div>
            </div>

            <!-- Prize 4: Performance Art Prize -->
            <div class="kb22w-prize-card">
                <div class="kb22w-prize-img-wrap">
                    <img src="assets/img/KB22ArtPrizeWinners/Popular-Choice-Award-Cosmic-Tribe.png" alt="Cosmic Tribe receiving Performance Art Prize at KB22" class="kb22w-prize-img">
                    <div class="kb22w-prize-badge"><i class="fas fa-running"></i> Performance Art Prize</div>
                </div>
                <div class="kb22w-prize-body">
                    <span class="kb22w-winner-title">Winners</span>
                    <h3 class="kb22w-winner-name">Cosmic Tribe</h3>
                    <p class="kb22w-prize-desc">Awarded to the local performative collective Cosmic Tribe for their live movement and electronic synthesizers performance. The group activated heritage spaces with sound waves and dance movements, translating human heartbeats and community rhythm into live audiovisual projections.</p>
                </div>
            </div>

            <!-- Prize 5: Emerging Artist Prize -->
            <div class="kb22w-prize-card">
                <div class="kb22w-prize-img-wrap">
                    <img src="assets/img/KB22ArtPrizeWinners/Giving-the-KB22-Engro-Emerging-Aritst-Prize.png" alt="Bilal Jabbar receiving Emerging Artist Prize at KB22" class="kb22w-prize-img">
                    <div class="kb22w-prize-badge"><i class="fas fa-star"></i> Engro Emerging Artist Prize</div>
                </div>
                <div class="kb22w-prize-body">
                    <span class="kb22w-winner-title">Winner</span>
                    <h3 class="kb22w-winner-name">Bilal Jabbar</h3>
                    <p class="kb22w-prize-desc">Awarded to early-career visual artist Bilal Jabbar for his mixed-media digital installations exploring Karachi's architectural transformation. Bilal utilized micro-cameras, concrete blocks, and screen loops to comment on the visual barriers, class divides, and commercial gentrification of the city.</p>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include 'components/footer.php'; ?>
