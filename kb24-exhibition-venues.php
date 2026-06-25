<?php 
  $pageTitle = 'KB24 Exhibition Venues - Fourth Karachi Biennale';
  $metaDesc = 'Explore the exhibition venues of the Fourth Karachi Biennale (KB24), grouped in Clusters A, B, and C, featuring public parks, historic sites, and art galleries.';
  $bodyClass = 'page-kb24-exhibition-venues'; 
  include 'components/header.php'; 
?>

<!-- 1. Page Header (Hero Area) -->
<section class="kb24v-hero-section text-center">
    <div class="container">
        <h1 class="kb24v-hero-title">Exhibition Venues</h1>
        <p class="kb24v-hero-subtitle">Fourth Karachi Biennale KB24</p>
        <p class="kb24v-hero-intro">To make art accessible to all citizens of Karachi, the Fourth Karachi Biennale (KB24) presented exhibitions across five key public, heritage, and gallery sites. These spaces were organized into three distinct geographical and thematic clusters, turning Karachi into an interactive public gallery.</p>
        
        <!-- Breadcrumbs -->
        <nav class="kb24v-breadcrumbs" aria-label="breadcrumb">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>Past Biennale</li>
                <li>KB24</li>
                <li class="active" aria-current="page">Venues</li>
            </ul>
        </nav>
    </div>
</section>

<!-- Jump Bar -->
<div class="kb24v-jump-bar-wrap">
    <div class="container text-center">
        <nav class="kb24v-jump-bar" aria-label="Quick Jump Menu">
            <span class="kb24v-jump-title">Jump to:</span>
            <a href="#cluster-a" class="kb24v-jump-link">Cluster A: Clifton & Seafront</a>
            <a href="#cluster-b" class="kb24v-jump-link">Cluster B: Heritage & City Centre</a>
            <a href="#cluster-c" class="kb24v-jump-link">Cluster C: Modern Galleries</a>
        </nav>
    </div>
</div>

<div class="kb24v-sections-wrap">
    <div class="container">
        
        <!-- Cluster A -->
        <section id="cluster-a" class="kb24v-section">
            <div class="kb24v-section-header">
                <span class="kb24v-cluster-badge">Cluster A</span>
                <h2 class="kb24v-section-title"><i class="fas fa-map-marker-alt me-3"></i>Clifton & Seafront</h2>
            </div>
            
            <div class="row g-4 justify-content-center">
                <!-- Venue 1 -->
                <div class="col-lg-6">
                    <div class="kb24v-card">
                        <div class="kb24v-img-wrap">
                            <img src="assets/img/blog/KB24ExhibitionVenues/bagh-ibne-qasim-venue.png" alt="Bagh Ibne Qasim Exhibition Venue at KB24" class="kb24v-img">
                            <div class="kb24v-card-tag">Public Space</div>
                        </div>
                        <div class="kb24v-card-content">
                            <h3 class="kb24v-venue-name">Bagh Ibne Qasim</h3>
                            <p class="kb24v-venue-desc">Located in Clifton by the sea, Bagh Ibne Qasim is Karachi's largest public park. During KB24, this sprawling green space served as an outdoor canvas for monumental public art installations, interactive sculptures, and site-specific projects addressing food politics, ecological decay, and maritime sustainability.</p>
                            <div class="kb24v-venue-meta">
                                <span class="kb24v-meta-item"><i class="fas fa-map-pin"></i> Clifton, Seafront</span>
                                <span class="kb24v-meta-item"><i class="fas fa-eye"></i> Outdoor Installations</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Venue 2 -->
                <div class="col-lg-6">
                    <div class="kb24v-card">
                        <div class="kb24v-img-wrap">
                            <img src="assets/img/blog/KB24ExhibitionVenues/mahvash-scaled.jpg" alt="Mahvash & Jahangir Siddiqui Art Gallery at Alliance Française" class="kb24v-img">
                            <div class="kb24v-card-tag">Cultural Centre</div>
                        </div>
                        <div class="kb24v-card-content">
                            <h3 class="kb24v-venue-name">Mahvash & Jahangir Siddiqui Art Gallery</h3>
                            <p class="kb24v-venue-desc">Housed inside the Alliance Française de Karachi, this gallery is a premier cultural and educational hub. It hosted several indoor projects for KB24, where international and local artists displayed delicate visual arts, projections, and installations examining regional sustainability.</p>
                            <div class="kb24v-venue-meta">
                                <span class="kb24v-meta-item"><i class="fas fa-map-pin"></i> Alliance Française, Clifton</span>
                                <span class="kb24v-meta-item"><i class="fas fa-eye"></i> Indoor Projects</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cluster B -->
        <section id="cluster-b" class="kb24v-section">
            <div class="kb24v-section-header">
                <span class="kb24v-cluster-badge">Cluster B</span>
                <h2 class="kb24v-section-title"><i class="fas fa-landmark me-3"></i>Heritage & City Centre</h2>
            </div>
            
            <div class="row g-4 justify-content-center">
                <!-- Venue 3 -->
                <div class="col-lg-6">
                    <div class="kb24v-card">
                        <div class="kb24v-img-wrap">
                            <img src="assets/img/blog/KB24ExhibitionVenues/frere-hall-venue.png" alt="Frere Hall Exhibition Venue at KB24" class="kb24v-img">
                            <div class="kb24v-card-tag">Heritage Icon</div>
                        </div>
                        <div class="kb24v-card-content">
                            <h3 class="kb24v-venue-name">Frere Hall</h3>
                            <p class="kb24v-venue-desc">Frere Hall is one of Karachi's most celebrated Venetian Gothic heritage buildings, surrounded by lush gardens. Serving as the central exhibition venue for KB24, its grand galleries, library hall, and surrounding lawns housed critical installations exploring the intersections of colonial history, agriculture, and urban food landscapes.</p>
                            <div class="kb24v-venue-meta">
                                <span class="kb24v-meta-item"><i class="fas fa-map-pin"></i> Fatima Jinnah Road, Civil Lines</span>
                                <span class="kb24v-meta-item"><i class="fas fa-eye"></i> Central Exhibitions & Performances</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Venue 4 -->
                <div class="col-lg-6">
                    <div class="kb24v-card">
                        <div class="kb24v-img-wrap">
                            <img src="assets/img/blog/KB24ExhibitionVenues/ned-scaled.jpg" alt="NED University City Campus Venue at KB24" class="kb24v-img">
                            <div class="kb24v-card-tag">Heritage Campus</div>
                        </div>
                        <div class="kb24v-card-content">
                            <h3 class="kb24v-venue-name">NED University (City Campus)</h3>
                            <p class="kb24v-venue-desc">A gorgeous legacy of pre-partition architecture, the City Campus of NED University provides a rich historic backdrop. For KB24, the old corridors, classrooms, and courtyard spaces were transformed with site-specific projects, aligning heritage architecture with futuristic technological installations.</p>
                            <div class="kb24v-venue-meta">
                                <span class="kb24v-meta-item"><i class="fas fa-map-pin"></i> Maulana Din Mohammad Wafai Road</span>
                                <span class="kb24v-meta-item"><i class="fas fa-eye"></i> Conceptual & Technical Artworks</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cluster C -->
        <section id="cluster-c" class="kb24v-section">
            <div class="kb24v-section-header">
                <span class="kb24v-cluster-badge">Cluster C</span>
                <h2 class="kb24v-section-title"><i class="fas fa-palette me-3"></i>Modern Galleries</h2>
            </div>
            
            <div class="row g-4 justify-content-center">
                <!-- Venue 5 -->
                <div class="col-lg-6">
                    <div class="kb24v-card">
                        <div class="kb24v-img-wrap">
                            <img src="assets/img/blog/KB24ExhibitionVenues/sambara-scaled.jpg" alt="Sambara Art Gallery Exhibition Venue at KB24" class="kb24v-img">
                            <div class="kb24v-card-tag">Art Gallery</div>
                        </div>
                        <div class="kb24v-card-content">
                            <h3 class="kb24v-venue-name">Sambara Art Gallery</h3>
                            <p class="kb24v-venue-desc">Sambara Art Gallery is a specialized contemporary art space that hosted curated visual projects for the fourth Karachi Biennale. It served as a venue highlighting specific, intimate artwork commissions, linking curator Waheeda Baloch's vision of public-regional connection with academic and commercial art worlds.</p>
                            <div class="kb24v-venue-meta">
                                <span class="kb24v-meta-item"><i class="fas fa-map-pin"></i> Karachi Central</span>
                                <span class="kb24v-meta-item"><i class="fas fa-eye"></i> Curated Fine Art & Commissions</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</div>

<?php include 'components/footer.php'; ?>
