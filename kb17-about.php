<?php 
  $pageTitle = 'KB17 Who We Are - First Karachi Biennale';
  $metaDesc = 'Learn about the First Karachi Biennale KB17 and the theme WITNESS, showcasing contemporary art across heritage clusters in Karachi.';
  $bodyClass = 'page-kb17-about'; 
  include 'components/header.php'; 
?>

<!-- Skip Link for Accessibility -->
<a href="#kb17-about-main-content" class="skip-link visually-hidden-focusable">Skip to content</a>

<!-- Page Header (Hero Area) -->
<section class="kb17-about-hero text-center position-relative">
    <div class="kb17-about-hero-overlay"></div>
    <div class="container position-relative z-index-2">
        <!-- Main Logo -->
        <img src="assets/img/KB17/kb17-logo.png" alt="Karachi Biennale 2017 Logo" class="kb17-about-logo wow custom-anim-top" data-wow-duration="1.2s">
        <h1 class="kb17-about-hero-title wow custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.1s">KB17</h1>
        <p class="kb17-about-hero-subtitle wow custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.25s">Who We Are</p>
        
        <!-- Breadcrumbs -->
        <nav class="kb17-about-breadcrumbs" aria-label="breadcrumb">
            <ul class="wow custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.4s">
                <li><a href="index.php">Home</a></li>
                <li>Past Biennale</li>
                <li>KB17</li>
                <li class="active" aria-current="page">Who We Are</li>
            </ul>
        </nav>
    </div>
</section>

<!-- Main Wrapper -->
<main id="kb17-about-main-content" class="kb17-about-main-wrapper">
    <div class="container">
        
        <div class="row g-5">
            <!-- Left Side: Copy and Thematic Essay -->
            <div class="col-lg-7">
                <div class="kb17-about-copy-card wow custom-anim-left" data-wow-duration="1.2s">
                    <h2 class="kb17-about-section-title"><i class="fas fa-landmark me-3 text-primary"></i>First Karachi Biennale – KB17</h2>
                    <p class="kb17-about-dates-badge"><i class="fas fa-calendar-alt me-2"></i>October 22 – November 5, 2017</p>
                    
                    <p class="kb17-about-lead-text">
                        The Biennale in Karachi, KB17, is a visionary platform that focuses on innovation, excellence, and criticality through curatorial strategies that bring art from Pakistan and the rest of the world together for a large public audience.
                    </p>
                    
                    <p class="kb17-about-body-text">
                        Its discursive interventions aim to cross-pollinate ideas and explore meaning and truth across disciplines and contexts. Since the 1950s, as Karachi grew from a small harbour town to a mega-urban centre, it has attracted independent thinkers unburdened by an established canon, embracing artists who wanted to respond to the personal and political with greater freedom.
                    </p>

                    <!-- Theme Witness Section -->
                    <div class="kb17-about-theme-box mt-4">
                        <h3 class="kb17-about-theme-heading"><i class="fas fa-eye me-2"></i>Theme: WITNESS</h3>
                        <p class="kb17-about-body-text">
                            Artists were invited to respond to the theme <strong>WITNESS</strong>. Art as a testament of its time has always held significance, particularly in times when memory is heavily contested.
                        </p>
                        
                        <blockquote class="kb17-about-quote my-4">
                            "The struggle of man against power is the struggle of memories against forgetting."
                            <span class="quote-author">— Milan Kundera</span>
                        </blockquote>

                        <p class="kb17-about-body-text">
                            The theme Witness was chosen for its strong relevance to the politics of representation, erasure, and selective documentation. In a city like Karachi, where histories are often contested and narratives fragmented, the act of witnessing becomes both a personal and collective responsibility.
                        </p>
                    </div>

                    <!-- Venue and Context -->
                    <div class="kb17-about-venue-context mt-4">
                        <h3 class="kb17-about-theme-heading"><i class="fas fa-map-marker-alt me-2"></i>Venue and Context</h3>
                        <p class="kb17-about-body-text">
                            The main venue of KB17 was the 160-year-old <strong>NJV Government Higher Secondary School</strong> building, located within the historical precincts of one of the most populous cities in the world. This location provided easy access to new audiences and also brought into discussion Karachi's history, which has often been overshadowed by the tensions of rapid growth.
                        </p>
                        <p class="kb17-about-body-text">
                            Karachi has been home to many influential modernists and contemporary artists; its gallery circuit is unrivalled in the country and is one of the most vibrant in South Asia. With an architecture of exhibitions, discursive interventions, and extensive visitor programs during KB17, art in Karachi combined creative energies and sparked new ones.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Right Side: Venue Map & Geographic Clusters -->
            <div class="col-lg-5">
                <div class="kb17-about-sidebar wow custom-anim-right" data-wow-duration="1.2s">
                    <h3 class="kb17-about-sidebar-heading"><i class="fas fa-map-marked-alt me-2"></i>Karachi Venue Map</h3>
                    <p class="text-muted small">Visual layout of KB17 exhibition points across the city:</p>
                    
                    <!-- Venue Map Zoom Link -->
                    <div class="kb17-about-map-wrap mb-4 text-center">
                        <a href="assets/img/KB17/venue-khi-01.png" class="popup-image" title="KB17 Karachi Venue Map">
                            <img src="assets/img/KB17/venue-khi-01.png" alt="KB17 Venue Map" class="img-fluid rounded border" loading="lazy">
                            <div class="map-zoom-overlay"><i class="fas fa-search-plus"></i> View Full Map</div>
                        </a>
                    </div>

                    <!-- Venue Cluster Listing Table -->
                    <h3 class="kb17-about-sidebar-heading mt-4"><i class="fas fa-list-ul me-2"></i>Exhibition Clusters</h3>
                    <div class="table-responsive">
                        <table class="table kb17-about-table">
                            <thead>
                                <tr>
                                    <th>Cluster</th>
                                    <th>Exhibition Venues</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Cluster A</strong></td>
                                    <td>Karachi School of Art, VM Art Gallery, ZVMG Rangoonwala Trust</td>
                                </tr>
                                <tr>
                                    <td><strong>Cluster B</strong></td>
                                    <td>Capri Cinema, 63 Commissariat Lines, NJV Government School, Jamshed Memorial Hall, Pioneer Book House</td>
                                </tr>
                                <tr>
                                    <td><strong>Cluster C</strong></td>
                                    <td>Sadequain Gallery (Frere Hall), Claremont House, Mahvash &amp; Jahangir Siddiqui Gallery (Alliance Française)</td>
                                </tr>
                                <tr>
                                    <td><strong>Cluster D</strong></td>
                                    <td>FOMMA DHA Art Center, IVS Gallery (Indus Valley School of Art &amp; Architecture)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cluster Maps Hotspot Grid -->
        <section class="kb17-about-clusters-hotspots mt-5 pt-4">
            <div class="kb17-about-section-tag text-center">
                <span class="badge bg-primary">Interactive Mapping</span>
            </div>
            <h2 class="kb17-about-subheading text-center mb-4"><i class="fas fa-images me-2"></i>Cluster Maps</h2>
            
            <div class="kb17-about-cluster-grid">
                
                <!-- Cluster A card -->
                <div class="kb17-about-cluster-item wow custom-anim-top" data-wow-delay="0.1s">
                    <div class="cluster-img-wrap">
                        <a href="assets/img/KB17/a.png" class="popup-image" title="Cluster A Hotspots Map">
                            <img src="assets/img/KB17/a.png" alt="Cluster A Map" class="img-fluid" loading="lazy">
                            <div class="hotspot-overlay"><i class="fas fa-search-plus"></i></div>
                        </a>
                    </div>
                    <h4>Cluster A Venues</h4>
                    <p class="small text-muted mb-0">Rangoonwala, VM Gallery &amp; KSA</p>
                </div>

                <!-- Cluster B card -->
                <div class="kb17-about-cluster-item wow custom-anim-top" data-wow-delay="0.2s">
                    <div class="cluster-img-wrap">
                        <a href="assets/img/KB17/b.png" class="popup-image" title="Cluster B Hotspots Map">
                            <img src="assets/img/KB17/b.png" alt="Cluster B Map" class="img-fluid" loading="lazy">
                            <div class="hotspot-overlay"><i class="fas fa-search-plus"></i></div>
                        </a>
                    </div>
                    <h4>Cluster B Venues</h4>
                    <p class="small text-muted mb-0">NJV School, Capri, Pioneer Books &amp; Jamshed Hall</p>
                </div>

                <!-- Cluster C card -->
                <div class="kb17-about-cluster-item wow custom-anim-top" data-wow-delay="0.3s">
                    <div class="cluster-img-wrap">
                        <a href="assets/img/KB17/c.png" class="popup-image" title="Cluster C Hotspots Map">
                            <img src="assets/img/KB17/c.png" alt="Cluster C Map" class="img-fluid" loading="lazy">
                            <div class="hotspot-overlay"><i class="fas fa-search-plus"></i></div>
                        </a>
                    </div>
                    <h4>Cluster C Venues</h4>
                    <p class="small text-muted mb-0">Sadequain Gallery (Frere Hall) &amp; Alliance Française</p>
                </div>

                <!-- Cluster D card -->
                <div class="kb17-about-cluster-item wow custom-anim-top" data-wow-delay="0.4s">
                    <div class="cluster-img-wrap">
                        <a href="assets/img/KB17/d.png" class="popup-image" title="Cluster D Hotspots Map">
                            <img src="assets/img/KB17/d.png" alt="Cluster D Map" class="img-fluid" loading="lazy">
                            <div class="hotspot-overlay"><i class="fas fa-search-plus"></i></div>
                        </a>
                    </div>
                    <h4>Cluster D Venues</h4>
                    <p class="small text-muted mb-0">FOMMA &amp; IVS Gallery (Clifton/DHA)</p>
                </div>

            </div>
        </section>

    </div>
</main>

<?php include 'components/footer.php'; ?>
