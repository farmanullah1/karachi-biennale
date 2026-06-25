<?php 
  $pageTitle = 'KB22 Exhibition Venues - Third Karachi Biennale';
  $metaDesc = 'Discover the 9 exhibition venues of the Third Karachi Biennale (KB22), grouped in Clusters A, B, and C, featuring public spaces, historic sites, and contemporary art galleries.';
  $bodyClass = 'page-kb22-exhibition-venues'; 
  include 'components/header.php'; 
?>

<!-- 1. Page Header (Hero Area) -->
<section class="kb22v-hero-section text-center">
    <div class="container">
        <h1 class="kb22v-hero-title">Exhibition Venues</h1>
        <p class="kb22v-hero-subtitle">Third Karachi Biennale KB22</p>
        <p class="kb22v-hero-intro">To bring contemporary art and technology into the public life of Karachi, the Third Karachi Biennale (KB22) showcased installations across 9 exhibition sites. These spaces were organized into three thematic clusters, connecting heritage architecture, educational centers, and modern galleries into a unified city-wide canvas.</p>
        
        <!-- Breadcrumbs -->
        <nav class="kb22v-breadcrumbs" aria-label="breadcrumb">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>Past Biennale</li>
                <li>KB22</li>
                <li class="active" aria-current="page">Venues</li>
            </ul>
        </nav>
    </div>
</section>

<!-- Jump Bar -->
<div class="kb22v-jump-bar-wrap">
    <div class="container text-center">
        <nav class="kb22v-jump-bar" aria-label="Quick Jump Menu">
            <span class="kb22v-jump-title">Jump to:</span>
            <a href="#cluster-a" class="kb22v-jump-link">Cluster A: Heritage &amp; Civic</a>
            <a href="#cluster-b" class="kb22v-jump-link">Cluster B: Academic Hubs</a>
            <a href="#cluster-c" class="kb22v-jump-link">Cluster C: Fine Art Galleries</a>
        </nav>
    </div>
</div>

<div class="kb22v-sections-wrap">
    <div class="container">
        
        <!-- Cluster A -->
        <section id="cluster-a" class="kb22v-section">
            <div class="kb22v-section-header">
                <span class="kb22v-cluster-badge">Cluster A</span>
                <h2 class="kb22v-section-title"><i class="fas fa-landmark me-3"></i>Heritage &amp; Civic Spaces</h2>
            </div>
            
            <div class="row g-4 justify-content-center">
                <!-- Venue 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="kb22v-card">
                        <div class="kb22v-img-wrap">
                            <img src="assets/img/KB22ExhibitionVenues/njv-scaled.jpg" alt="NJV School at KB22" class="kb22v-img">
                            <div class="kb22v-card-tag">Heritage Icon</div>
                        </div>
                        <div class="kb22v-card-content">
                            <h3 class="kb22v-venue-name">NJV School</h3>
                            <p class="kb22v-venue-desc">One of Karachi's oldest and grandest public heritage buildings, NJV Government Higher Secondary School served as a key hub for interactive projects, projecting high-tech animations onto century-old stone facades.</p>
                            <div class="kb22v-venue-meta">
                                <span class="kb22v-meta-item"><i class="fas fa-map-pin"></i> MA Jinnah Road</span>
                                <span class="kb22v-meta-item"><i class="fas fa-eye"></i> Projection Mapping</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Venue 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="kb22v-card">
                        <div class="kb22v-img-wrap">
                            <img src="assets/img/KB22ExhibitionVenues/jamshed.jpg" alt="Jamshed Memorial Hall at KB22" class="kb22v-img">
                            <div class="kb22v-card-tag">Historic Hall</div>
                        </div>
                        <div class="kb22v-card-content">
                            <h3 class="kb22v-venue-name">Jamshed Memorial Hall</h3>
                            <p class="kb22v-venue-desc">Constructed in memory of Jamshed Nusserwanjee, Karachi's first mayor, this civic building hosted digital sound sculptures and experimental media, exploring communal memories and city soundscapes.</p>
                            <div class="kb22v-venue-meta">
                                <span class="kb22v-meta-item"><i class="fas fa-map-pin"></i> MA Jinnah Road</span>
                                <span class="kb22v-meta-item"><i class="fas fa-eye"></i> Audio Installations</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Venue 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="kb22v-card">
                        <div class="kb22v-img-wrap">
                            <img src="assets/img/KB22ExhibitionVenues/hamidmarket.jpg" alt="Hamid Market at KB22" class="kb22v-img">
                            <div class="kb22v-card-tag">Civic Commerce</div>
                        </div>
                        <div class="kb22v-card-content">
                            <h3 class="kb22v-venue-name">Hamid Market</h3>
                            <p class="kb22v-venue-desc">Located in the vibrant streets of old Karachi, Hamid Market was activated as a public screen space, showing real-time digital projections directly in the midst of daily trade and bazaar buzz.</p>
                            <div class="kb22v-venue-meta">
                                <span class="kb22v-meta-item"><i class="fas fa-map-pin"></i> Old Town District</span>
                                <span class="kb22v-meta-item"><i class="fas fa-eye"></i> Public Street Screens</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cluster B -->
        <section id="cluster-b" class="kb22v-section">
            <div class="kb22v-section-header">
                <span class="kb22v-cluster-badge">Cluster B</span>
                <h2 class="kb22v-section-title"><i class="fas fa-university me-3"></i>Academic Hubs</h2>
            </div>
            
            <div class="row g-4 justify-content-center">
                <!-- Venue 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="kb22v-card">
                        <div class="kb22v-img-wrap">
                            <img src="assets/img/KB22ExhibitionVenues/ned-scaled.jpg" alt="NED University at KB22" class="kb22v-img">
                            <div class="kb22v-card-tag">Heritage Campus</div>
                        </div>
                        <div class="kb22v-card-content">
                            <h3 class="kb22v-venue-name">NED University (City Campus)</h3>
                            <p class="kb22v-venue-desc">The historic city campus of NED University hosted multiple technology integrations, allowing students and visitors to see structural coding and electronic hardware transformed into aesthetic elements.</p>
                            <div class="kb22v-venue-meta">
                                <span class="kb22v-meta-item"><i class="fas fa-map-pin"></i> Maulana Din Mohammad Wafai Road</span>
                                <span class="kb22v-meta-item"><i class="fas fa-eye"></i> Hardware &amp; Code Installations</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Venue 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="kb22v-card">
                        <div class="kb22v-img-wrap">
                            <img src="assets/img/KB22ExhibitionVenues/ivs-scaled.jpg" alt="IVS Gallery at KB22" class="kb22v-img">
                            <div class="kb22v-card-tag">Art Institute</div>
                        </div>
                        <div class="kb22v-card-content">
                            <h3 class="kb22v-venue-name">IVS Gallery</h3>
                            <p class="kb22v-venue-desc">Based at the Indus Valley School of Art and Architecture, this gallery hosted conceptual works examining data politics, VR layouts, and the ecological consequences of technological waste.</p>
                            <div class="kb22v-venue-meta">
                                <span class="kb22v-meta-item"><i class="fas fa-map-pin"></i> IVS Campus, Clifton</span>
                                <span class="kb22v-meta-item"><i class="fas fa-eye"></i> Conceptual Interactive Work</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Venue 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="kb22v-card">
                        <div class="kb22v-img-wrap">
                            <img src="assets/img/KB22ExhibitionVenues/iba_main.jpg" alt="IBA City Campus at KB22" class="kb22v-img">
                            <div class="kb22v-card-tag">Business Campus</div>
                        </div>
                        <div class="kb22v-card-content">
                            <h3 class="kb22v-venue-name">IBA City Campus</h3>
                            <p class="kb22v-venue-desc">The Institute of Business Administration's city campus was activated with media lectures, panel discussions, and digital projects connecting the fields of economics, tech, and creative art.</p>
                            <div class="kb22v-venue-meta">
                                <span class="kb22v-meta-item"><i class="fas fa-map-pin"></i> Kayani Road, Garden Area</span>
                                <span class="kb22v-meta-item"><i class="fas fa-eye"></i> Interactive Discursive Forums</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cluster C -->
        <section id="cluster-c" class="kb22v-section">
            <div class="kb22v-section-header">
                <span class="kb22v-cluster-badge">Cluster C</span>
                <h2 class="kb22v-section-title"><i class="fas fa-palette me-3"></i>Fine Art Galleries</h2>
            </div>
            
            <div class="row g-4 justify-content-center">
                <!-- Venue 7 -->
                <div class="col-lg-4 col-md-6">
                    <div class="kb22v-card">
                        <div class="kb22v-img-wrap">
                            <img src="assets/img/KB22ExhibitionVenues/mahvash-scaled.jpg" alt="Alliance Française at KB22" class="kb22v-img">
                            <div class="kb22v-card-tag">Cultural Center</div>
                        </div>
                        <div class="kb22v-card-content">
                            <h3 class="kb22v-venue-name">Alliance Française</h3>
                            <p class="kb22v-venue-desc">The French cultural institute hosted curatorial projects inside the Mahvash and Jahangir Siddiqui Art Gallery, displaying foreign art collaborations and video essays.</p>
                            <div class="kb22v-venue-meta">
                                <span class="kb22v-meta-item"><i class="fas fa-map-pin"></i> AFK Campus, Clifton</span>
                                <span class="kb22v-meta-item"><i class="fas fa-eye"></i> Video &amp; Digital Fine Art</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Venue 8 -->
                <div class="col-lg-4 col-md-6">
                    <div class="kb22v-card">
                        <div class="kb22v-img-wrap">
                            <img src="assets/img/KB22ExhibitionVenues/vmartgallery.jpg" alt="VM Art Gallery at KB22" class="kb22v-img">
                            <div class="kb22v-card-tag">Fine Arts Space</div>
                        </div>
                        <div class="kb22v-card-content">
                            <h3 class="kb22v-venue-name">VM Art Gallery</h3>
                            <p class="kb22v-venue-desc">A respected art space in Karachi, VM Art Gallery showcased delicate prints, algorithmic paintings, and digital-physical mixed media structures from participating artists.</p>
                            <div class="kb22v-venue-meta">
                                <span class="kb22v-meta-item"><i class="fas fa-map-pin"></i> Rangoonwala Trust, Dhoraji</span>
                                <span class="kb22v-meta-item"><i class="fas fa-eye"></i> Curated Gallery Projects</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Venue 9 -->
                <div class="col-lg-4 col-md-6">
                    <div class="kb22v-card">
                        <div class="kb22v-img-wrap">
                            <img src="assets/img/KB22ExhibitionVenues/sambara-scaled.jpg" alt="Sambara Art Gallery at KB22" class="kb22v-img">
                            <div class="kb22v-card-tag">Art Gallery</div>
                        </div>
                        <div class="kb22v-card-content">
                            <h3 class="kb22v-venue-name">Sambara Art Gallery</h3>
                            <p class="kb22v-venue-desc">Sambara Art Gallery showcased small-scale digital installations, creative code screen loops, and photo-documentary works mapping local environmental histories.</p>
                            <div class="kb22v-venue-meta">
                                <span class="kb22v-meta-item"><i class="fas fa-map-pin"></i> central Clifton District</span>
                                <span class="kb22v-meta-item"><i class="fas fa-eye"></i> Creative Code Screens</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</div>

<?php include 'components/footer.php'; ?>
