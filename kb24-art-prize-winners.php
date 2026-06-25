<?php 
  $pageTitle = 'KB24 Art Prize Winners - Fourth Karachi Biennale';
  $metaDesc = 'Discover the winners of the Fourth Karachi Biennale (KB24) Art Prizes, celebrating outstanding contributions in contemporary art and performance.';
  $bodyClass = 'page-kb24-art-prize-winners'; 
  include 'components/header.php'; 
?>

<!-- 1. Page Header (Hero Area) -->
<section class="kb24p-hero-section text-center">
    <div class="container">
        <h1 class="kb24p-hero-title">Art Prize Winners</h1>
        <p class="kb24p-hero-subtitle">Fourth Karachi Biennale KB24 Awards</p>
        <p class="kb24p-hero-intro">To encourage and celebrate artistic excellence, innovation, and social criticality, Karachi Biennale Trust presented four prestigious awards for KB24. Judged by an international jury of esteemed artists, curators, and scholars, these prizes recognise works that demonstrate outstanding execution and conceptual relevance to the theme "Rizq | Risk".</p>
        
        <!-- Breadcrumbs -->
        <nav class="kb24p-breadcrumbs" aria-label="breadcrumb">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>Past Biennale</li>
                <li>KB24</li>
                <li class="active" aria-current="page">Art Prize Winners</li>
            </ul>
        </nav>
    </div>
</section>

<div class="kb24p-sections-wrap">
    <div class="container">
        
        <!-- Prizes Grid -->
        <div class="kb24p-prize-grid">
            
            <!-- Prize 1: KB24 EBM Emerging Artist Prize -->
            <div class="kb24p-prize-card">
                <div class="kb24p-prize-img-wrap">
                    <img src="assets/img/KB24ArtPrizeWinner/KB24-EBM-Emerging-Artist-Prize-Anusha-Shahid-Khawajah-min.webp" alt="Anusha Shahid Khawajah - Winner of KB24 EBM Emerging Artist Prize" class="kb24p-prize-img">
                    <div class="kb24p-prize-badge"><i class="fas fa-award"></i> EBM Emerging Artist</div>
                </div>
                <div class="kb24p-prize-body">
                    <span class="kb24p-winner-title">Winner</span>
                    <h3 class="kb24p-winner-name">Anusha Shahid Khawajah</h3>
                    <p class="kb24p-prize-desc">Awarded to Anusha Shahid Khawajah for her outstanding visual installation that merged traditional food culture narrative patterns with experimental visual techniques, offering fresh contemporary perspectives on sustenance and community memory in Pakistan.</p>
                </div>
            </div>

            <!-- Prize 2: Performance Art Prize -->
            <div class="kb24p-prize-card">
                <div class="kb24p-prize-img-wrap">
                    <img src="assets/img/KB24ArtPrizeWinner/KB24-Performance-Art-Prize-Lundahl-and-Seitl-min-1-scaled.webp" alt="Lundahl & Seitl - Winners of Performance Art Prize" class="kb24p-prize-img">
                    <div class="kb24p-prize-badge"><i class="fas fa-mask"></i> Performance Art Prize</div>
                </div>
                <div class="kb24p-prize-body">
                    <span class="kb24p-winner-title">Winners</span>
                    <h3 class="kb24p-winner-name">Lundahl and Seitl</h3>
                    <p class="kb24p-prize-desc">Awarded to the Stockholm-based artist duo Lundahl & Seitl for their immersive and participatory performance situations at Frere Hall. Their work disrupted traditional viewer relationships, using physical navigation to evoke shared ecological consciousness.</p>
                </div>
            </div>

            <!-- Prize 3: Juried Art Prize -->
            <div class="kb24p-prize-card">
                <div class="kb24p-prize-img-wrap">
                    <img src="assets/img/KB24ArtPrizeWinner/KB24-Juried-Art-Prize-Nadeem-Al-Karimi-min.webp" alt="Nadeem Al Karimi - Winner of Juried Art Prize" class="kb24p-prize-img">
                    <div class="kb24p-prize-badge"><i class="fas fa-trophy"></i> Juried Art Prize</div>
                </div>
                <div class="kb24p-prize-body">
                    <span class="kb24p-winner-title">Winner</span>
                    <h3 class="kb24p-winner-name">Nadeem Al Karimi</h3>
                    <p class="kb24p-prize-desc">Awarded to Nadeem Al Karimi (collaborating with Maham Nadeem) for their poignant documentary and site-specific film installation *The Last Act/Dismantling Life*. The jury recognized its critical, direct inquiry into agricultural decay and local riverine resilience.</p>
                </div>
            </div>

            <!-- Prize 4: Collateral Show Project -->
            <div class="kb24p-prize-card">
                <div class="kb24p-prize-img-wrap">
                    <img src="assets/img/KB24ArtPrizeWinner/KB24-Collateral-show-min-scaled.webp" alt="Textile Institute of Pakistan - Winners of Collateral Project Award" class="kb24p-prize-img">
                    <div class="kb24p-prize-badge"><i class="fas fa-users"></i> Collateral Project Award</div>
                </div>
                <div class="kb24p-prize-body">
                    <span class="kb24p-winner-title">Winners</span>
                    <h3 class="kb24p-winner-name">Textile Institute of Pakistan Students</h3>
                    <p class="kb24p-prize-desc">Awarded to the collaborative student project entitled "Artists of Gaza Live in our Heart." Housed at the Textile Institute of Pakistan, the collective installation stood out for its powerful emotional execution and solidarity statement, weaving text, fabrics, and grief.</p>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include 'components/footer.php'; ?>
