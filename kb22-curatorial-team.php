<?php 
  $pageTitle = 'KB22 Curatorial Team - Third Karachi Biennale';
  $metaDesc = 'Meet the curatorial team of the Third Karachi Biennale (KB22), including Chief Curator Faisal Anwar, Isaac Caballero, Maha Minhaj, and Maham Chiragh.';
  $bodyClass = 'page-kb22-curatorial-team'; 
  include 'components/header.php'; 
?>

<!-- 1. Page Header (Hero Area) -->
<section class="kb22-curatorial-hero text-center position-relative">
    <div class="kb22-curatorial-hero-overlay"></div>
    <div class="container position-relative z-index-2">
        <h1 class="kb22-curatorial-hero-title wow custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.1s">KB22 Curatorial Team</h1>
        <p class="kb22-curatorial-hero-subtitle wow custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.25s">Third Karachi Biennale KB22</p>
        
        <!-- Breadcrumbs -->
        <nav class="kb22-curatorial-breadcrumbs" aria-label="breadcrumb">
            <ul class="wow custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.4s">
                <li><a href="index.php">Home</a></li>
                <li>Past Biennale</li>
                <li>KB22</li>
                <li class="active" aria-current="page">Curatorial Team</li>
            </ul>
        </nav>
    </div>
</section>

<!-- 2. Team Grid Section -->
<div class="kb22-curatorial-team-wrap">
    <div class="container">
        
        <div class="kb22-curatorial-carousel row g-4 justify-content-center">
            
            <!-- Faisal Anwar -->
            <div class="col-lg-6 col-md-12">
                <div class="team-member wow custom-anim-top" data-wow-delay="0.1s">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-5 text-center p-4">
                            <img src="assets/img/team/Faisal_Anwar_Team-500x500.jpg" alt="Faisal Anwar" class="img-fluid" loading="lazy">
                        </div>
                        <div class="col-md-7 p-4">
                            <h4 class="team-name">Faisal Anwar</h4>
                            <span class="team-role">Curator, KB22</span>
                            <p class="team-bio">Faisal Anwar (b. 1970) is a hybrid artist and an interactive producer working between Canada and Pakistan. Anwar is a graduate of the Canadian Film Centre's Habitat-LAB, Interactive Arts Program 2004, and completed his bachelor's in graphic design from the National College of Arts Lahore, Pakistan in 1996. He is the co-founder of Art Address, an artist-led collective in Oakville, Canada, and Chief Curator of Karachi Biennale 2022.</p>
                            <p class="team-bio mb-0">Anwar explores the history and diversity of urban spaces and cultural identities. He is inspired by hybrid art, algorithms, data visualization, ecology, and cognitive sciences to create thought-provoking works.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Maha Minhaj -->
            <div class="col-lg-6 col-md-12">
                <div class="team-member wow custom-anim-top" data-wow-delay="0.2s">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-5 text-center p-4">
                            <img src="assets/img/team/Maha_Minhaaj_Team-500x500.jpg" alt="Maha Minhaj" class="img-fluid" loading="lazy">
                        </div>
                        <div class="col-md-7 p-4">
                            <h4 class="team-name">Maha Minhaj</h4>
                            <span class="team-role">Assistant Curator, KB22</span>
                            <p class="team-bio">Maha is a practicing visual & performance artist based in Karachi. Minhaj completed her Bachelors in Fine Art from the Indus Valley School of Art and Architecture in 2017 and has since worked as curator and manager, and exhibited and performed in local and international group shows.</p>
                            <p class="team-bio mb-0">Her collaborative spirit and desire to use art as a means to create tangible difference drove her to co-found Poiesis.SocialArt—a digital platform that curates and archives socially engaged art practices of practitioners throughout the world.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Maham Chiragh -->
            <div class="col-lg-6 col-md-12">
                <div class="team-member wow custom-anim-top" data-wow-delay="0.3s">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-5 text-center p-4">
                            <img src="assets/img/team/Maham_Chiraag_Team-500x500.jpg" alt="Maham Chiragh" class="img-fluid" loading="lazy">
                        </div>
                        <div class="col-md-7 p-4">
                            <h4 class="team-name">Maham Chiragh</h4>
                            <span class="team-role">Assistant Curator, KB22</span>
                            <p class="team-bio">Maham Chiragh is a practicing artist, facilitator, and researcher working at the intersection of different fields, currently based in Karachi. Her academic background in Anthropology and Sociology blends into the community engagement aspect of her artistic practice as she explores the ways in which our identities interact with space, producing it and being produced by it.</p>
                            <p class="team-bio mb-0">Maham has exhibited in shows locally and internationally, co-founded The Dabke Collective in Toronto in 2016, and serves as a board member of Charles Street Video.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Isaac Caballero -->
            <div class="col-lg-6 col-md-12">
                <div class="team-member wow custom-anim-top" data-wow-delay="0.4s">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-5 text-center p-4">
                            <img src="assets/img/team/Issac_Caballero_Team-500x500.jpg" alt="Isaac Caballero" class="img-fluid" loading="lazy">
                        </div>
                        <div class="col-md-7 p-4">
                            <h4 class="team-name">Isaac Caballero</h4>
                            <span class="team-role">Assistant Curator, KB22</span>
                            <p class="team-bio">Isaac is a Montreal-based technology consultant with over twenty years of experience working mainly in the artistic field, specializing in working with artists to create a link with technology and helping bring their creations to life. Isaac Caballero is Assistant Curator and technical producer for KB22.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<?php include 'components/footer.php'; ?>
