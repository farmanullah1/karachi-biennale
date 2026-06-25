<?php 
  $pageTitle = 'About KBT - Karachi Biennale Trust';
  $bodyClass = 'page-about-kbt'; // For unique CSS scoping
  $metaDesc = 'Learn about the Karachi Biennale Trust (KBT), its mission, history, and flagship art projects including the acclaimed Microtonal installation.';
  include 'components/header.php'; 
?>

        <!-- A. Page Header Section (Hero Area) -->
        <section class="akbt-hero-section text-center">
            <div class="container">
                <h1 class="akbt-hero-title">About</h1>
                <h3 class="akbt-hero-subtitle">Karachi Biennale Trust</h3>
                <!-- Breadcrumbs -->
                <nav class="akbt-breadcrumbs" aria-label="breadcrumb">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li class="active" aria-current="page">About KBT</li>
                    </ul>
                </nav>
            </div>
        </section>

        <!-- B. About Section – Main Content -->
        <section class="akbt-content-section space">
            <div class="container">
                <div class="akbt-content-grid">
                    
                    <!-- Image Gallery / Grid -->
                    <div class="akbt-image-gallery">
                        <div class="akbt-image-card">
                            <img src="assets/img/bg/bg-1.png" alt="Karachi Biennale Trust – Community engagement and art initiatives" class="akbt-img">
                        </div>
                        <div class="akbt-image-card">
                            <img src="assets/img/bg/Landing_Page_KB19_1.jpg" alt="Karachi Biennale 2019 – Exhibition view with visitors" class="akbt-img">
                        </div>
                    </div>

                    <!-- Text Block -->
                    <div class="akbt-text-block">
                        <div class="akbt-pullquote">
                            <p>"Karachi Biennale (KB) is the flagship project of the KBT that has been designed to use art as a vehicle to discover, discuss and respond to Karachi."</p>
                        </div>
                        
                        <div class="akbt-paragraphs">
                            <p class="akbt-paragraph">The Karachi Biennale Trust (KBT) was founded in 2016 by a group of art professionals and educators as a platform to promote creativity, innovation and criticality in the visual arts.</p>
                            
                            <p class="akbt-paragraph">KBT is a registered Trust and operates as a non-profit organization. KBT works closely with a network of philanthropists and local and international cultural and educational organizations. It is generously supported by the corporate sector.</p>
                            
                            <p class="akbt-paragraph">The Karachi Biennale is KBT's core project that connects art, the city and its people, and acts like a temporary museum showcasing leading artists in Karachi.</p>
                            
                            <p class="akbt-paragraph">The activities usually start 12 months ahead, with workshops and talks to introduce the theme of the coming Biennale in educational institutions, schools and at public forums.</p>
                            
                            <p class="akbt-paragraph">During the two-week long Biennale, exhibitions are held in multiple locations across the city, including heritage sites and public parks. It attracts visitors from all over Pakistan and abroad, who are keen to experience museum quality art through exhibitions, artist talks, seminars and guided tours that are free for all.</p>
                            
                            <p class="akbt-paragraph">Each Biennale revolves around a theme that is anchored in the host city and also has an international relevance.</p>
                            
                            <p class="akbt-paragraph">In 2017, the theme of the Biennale was "Witness", which invited artists to introspect on their times through experiences that were personal, political and social.</p>
                            
                            <p class="akbt-paragraph">The second Biennale in KB19 focused on the devastating "development footprint" on ecology that is crucial to Karachi and other cities faced with Climate Change.</p>
                            
                            <p class="akbt-paragraph">In October 2022, artists exhibited works under the rubric: "Collective Imagination: Now and the Next" that captured the expanding integration of technology with art.</p>
                            
                            <p class="akbt-paragraph">The fourth Biennale, KB24, is scheduled to take place in October 2024.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- C. Microtonal Section – Featured Art Installation -->
        <section class="akbt-video-section space-top space-bottom">
            <div class="container">
                <div class="akbt-video-card">
                    <div class="akbt-video-header text-center">
                        <span class="akbt-badge">Featured Installation</span>
                        <h2 class="akbt-video-title">Featured Installation: Microtonal</h2>
                        <div class="akbt-title-divider"></div>
                    </div>
                    
                    <!-- Responsive Video Wrapper -->
                    <div class="akbt-video-wrapper">
                        <iframe src="https://www.youtube.com/embed/z1_VL_rPIFY" title="Microtonal Art Installation Video" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>

                    <!-- Video Context Details -->
                    <div class="akbt-video-desc text-center">
                        <p class="akbt-video-p">The award-winning art installation titled <strong>Microtonal</strong> was conceptualized by <em>Invisible Flock</em>, a UK-based art collective, and created in collaboration with Badin-based duo Allah Jurio (Borindo maker) and Faqir Zulfiqar (Borindo player).</p>
                        <p class="akbt-video-p">This short video highlights the magic of the 6000-year-old clay instrument that was exhibited at NED University (City Campus) during KB22.</p>
                        <p class="akbt-video-caption">Film on Microtonal by The Invisible Flock, UK.</p>
                    </div>
                </div>
            </div>
        </section>

<?php include 'components/footer.php'; ?>
