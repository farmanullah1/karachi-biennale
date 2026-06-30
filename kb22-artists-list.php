<?php 
  $pageTitle = 'KB22 Participating Artists - Third Karachi Biennale';
  $metaDesc = 'View the participating artists of the Third Karachi Biennale (KB22), exploring the intersection of art and technology under the theme of Collective Imagination.';
  $bodyClass = 'page-kb22-artists-list'; 
  include 'components/header.php'; 
?>

<!-- 1. Page Header (Hero Area) -->
<section class="kb22-artists-hero text-center position-relative">
    <div class="kb22-artists-hero-overlay"></div>
    <div class="container position-relative z-index-2">
        <h1 class="kb22-artists-hero-title wow custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.1s">Artist List</h1>
        <p class="kb22-artists-hero-subtitle wow custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.25s">Third Karachi Biennale KB22</p>
        
        <!-- Breadcrumbs -->
        <nav class="kb22-artists-breadcrumbs" aria-label="breadcrumb">
            <ul class="wow custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.4s">
                <li><a href="index.php">Home</a></li>
                <li>Past Biennale</li>
                <li>KB22</li>
                <li class="active" aria-current="page">Artists</li>
            </ul>
        </nav>
    </div>
</section>

<!-- 2. Main Wrapper with Search & Filters -->
<div class="kb22-artists-main-wrapper">
    <div class="container">
        
        <!-- Controls Bar -->
        <div class="kb22-artists-control-bar wow custom-anim-top" data-wow-duration="1.2s">
            <div class="row g-4 align-items-center">
                <!-- Search Box -->
                <div class="col-lg-5 col-md-6">
                    <div class="kb22-artists-search-wrap">
                        <span class="search-icon"><i class="fas fa-search"></i></span>
                        <input type="text" id="artistSearchInput" class="form-control" placeholder="Search artist by name or artwork...">
                    </div>
                </div>
                
                <!-- Filter Buttons -->
                <div class="col-lg-7 col-md-6">
                    <div class="kb22-artists-filter-btn-group">
                        <button class="kb22-artists-filter-btn active" data-filter="all">All Artists</button>
                        <button class="kb22-artists-filter-btn" data-filter="pakistan">Pakistan</button>
                        <button class="kb22-artists-filter-btn" data-filter="international">International</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Artists Grid -->
        <div class="kb22-artists-grid wow custom-anim-top" id="artistsGrid" data-wow-duration="1.5s" data-wow-delay="0.2s">
            
            <!-- 1. Alecia Neo -->
            <div class="kb22-artist-card" data-country-type="international" data-id="alecia-neo" id="card-alecia-neo" onclick="openArtistModal('alecia-neo')">
                <div class="kb22-artists-avatar-wrap">
                    <img src="assets/img/KB22ArtistsList/alecianeo-500x500.jpg" alt="Alecia Neo" class="img-fluid" loading="lazy">
                    <div class="kb22-artists-card-overlay">
                        <span class="kb22-artists-view-details"><i class="fas fa-eye me-2"></i>View Profile</span>
                    </div>
                </div>
                <div class="kb22-artists-card-body">
                    <span class="kb22-artists-card-country">Singapore</span>
                    <h4 class="kb22-artist-name">Alecia Neo</h4>
                </div>
            </div>

            <!-- 2. Amin Gulgee -->
            <div class="kb22-artist-card" data-country-type="pakistan" data-id="amin-gulgee" id="card-amin-gulgee" onclick="openArtistModal('amin-gulgee')">
                <div class="kb22-artists-avatar-wrap">
                    <img src="assets/img/KB22ArtistsList/amingulgee-500x500.jpg" alt="Amin Gulgee" class="img-fluid" loading="lazy">
                    <div class="kb22-artists-card-overlay">
                        <span class="kb22-artists-view-details"><i class="fas fa-eye me-2"></i>View Profile</span>
                    </div>
                </div>
                <div class="kb22-artists-card-body">
                    <span class="kb22-artists-card-country">Pakistan</span>
                    <h4 class="kb22-artist-name">Amin Gulgee</h4>
                </div>
            </div>

            <!-- 3. Amin Rehman -->
            <div class="kb22-artist-card" data-country-type="pakistan" data-id="amin-rehman" id="card-amin-rehman" onclick="openArtistModal('amin-rehman')">
                <div class="kb22-artists-avatar-wrap">
                    <img src="assets/img/KB22ArtistsList/aminkaren-500x500.jpg" alt="Amin Rehman" class="img-fluid" loading="lazy">
                    <div class="kb22-artists-card-overlay">
                        <span class="kb22-artists-view-details"><i class="fas fa-eye me-2"></i>View Profile</span>
                    </div>
                </div>
                <div class="kb22-artists-card-body">
                    <span class="kb22-artists-card-country">Canada / Pakistan</span>
                    <h4 class="kb22-artist-name">Amin Rehman</h4>
                </div>
            </div>

            <!-- 4. Andreas Lutz -->
            <div class="kb22-artist-card" data-country-type="international" data-id="andreas-lutz" id="card-andreas-lutz" onclick="openArtistModal('andreas-lutz')">
                <div class="kb22-artists-avatar-wrap">
                    <img src="assets/img/KB22ArtistsList/andreaslutz-500x500.jpg" alt="Andreas Lutz" class="img-fluid" loading="lazy">
                    <div class="kb22-artists-card-overlay">
                        <span class="kb22-artists-view-details"><i class="fas fa-eye me-2"></i>View Profile</span>
                    </div>
                </div>
                <div class="kb22-artists-card-body">
                    <span class="kb22-artists-card-country">Germany</span>
                    <h4 class="kb22-artist-name">Andreas Lutz</h4>
                </div>
            </div>

            <!-- 5. Audio Placebo Plaza -->
            <div class="kb22-artist-card" data-country-type="international" data-id="audio-placebo-plaza" id="card-audio-placebo-plaza" onclick="openArtistModal('audio-placebo-plaza')">
                <div class="kb22-artists-avatar-wrap">
                    <img src="assets/img/KB22ArtistsList/placebo-500x500.png" alt="Audio Placebo Plaza" class="img-fluid" loading="lazy">
                    <div class="kb22-artists-card-overlay">
                        <span class="kb22-artists-view-details"><i class="fas fa-eye me-2"></i>View Profile</span>
                    </div>
                </div>
                <div class="kb22-artists-card-body">
                    <span class="kb22-artists-card-country">Canada</span>
                    <h4 class="kb22-artist-name">Audio Placebo Plaza</h4>
                </div>
            </div>

            <!-- 6. Bilal Jabbar -->
            <div class="kb22-artist-card" data-country-type="pakistan" data-id="bilal-jabbar" id="card-bilal-jabbar" onclick="openArtistModal('bilal-jabbar')">
                <div class="kb22-artists-avatar-wrap">
                    <img src="assets/img/KB22ArtistsList/bilaljabbar-500x500.jpg" alt="Bilal Jabbar" class="img-fluid" loading="lazy">
                    <div class="kb22-artists-card-overlay">
                        <span class="kb22-artists-view-details"><i class="fas fa-eye me-2"></i>View Profile</span>
                    </div>
                </div>
                <div class="kb22-artists-card-body">
                    <span class="kb22-artists-card-country">Pakistan</span>
                    <h4 class="kb22-artist-name">Bilal Jabbar</h4>
                </div>
            </div>

            <!-- 7. Cosmic Tribe -->
            <div class="kb22-artist-card" data-country-type="pakistan" data-id="cosmic-tribe" id="card-cosmic-tribe" onclick="openArtistModal('cosmic-tribe')">
                <div class="kb22-artists-avatar-wrap">
                    <img src="assets/img/KB22ArtistsList/Cosmic_tribe-500x500.jpg" alt="Cosmic Tribe" class="img-fluid" loading="lazy">
                    <div class="kb22-artists-card-overlay">
                        <span class="kb22-artists-view-details"><i class="fas fa-eye me-2"></i>View Profile</span>
                    </div>
                </div>
                <div class="kb22-artists-card-body">
                    <span class="kb22-artists-card-country">Pakistan</span>
                    <h4 class="kb22-artist-name">Cosmic Tribe</h4>
                </div>
            </div>

            <!-- 8. Dennis Rudolph -->
            <div class="kb22-artist-card" data-country-type="international" data-id="dennis-rudolph" id="card-dennis-rudolph" onclick="openArtistModal('dennis-rudolph')">
                <div class="kb22-artists-avatar-wrap">
                    <img src="assets/img/KB22ArtistsList/dennisrudolph-500x500.jpg" alt="Dennis Rudolph" class="img-fluid" loading="lazy">
                    <div class="kb22-artists-card-overlay">
                        <span class="kb22-artists-view-details"><i class="fas fa-eye me-2"></i>View Profile</span>
                    </div>
                </div>
                <div class="kb22-artists-card-body">
                    <span class="kb22-artists-card-country">Germany</span>
                    <h4 class="kb22-artist-name">Dennis Rudolph</h4>
                </div>
            </div>

            <!-- 9. Giselle Beiguelman -->
            <div class="kb22-artist-card" data-country-type="international" data-id="giselle-beiguelman" id="card-giselle-beiguelman" onclick="openArtistModal('giselle-beiguelman')">
                <div class="kb22-artists-avatar-wrap">
                    <img src="assets/img/KB22ArtistsList/giselle-500x500.jpg" alt="Giselle Beiguelman" class="img-fluid" loading="lazy">
                    <div class="kb22-artists-card-overlay">
                        <span class="kb22-artists-view-details"><i class="fas fa-eye me-2"></i>View Profile</span>
                    </div>
                </div>
                <div class="kb22-artists-card-body">
                    <span class="kb22-artists-card-country">Brazil</span>
                    <h4 class="kb22-artist-name">Giselle Beiguelman</h4>
                </div>
            </div>

            <!-- 10. Herwig Scherabon -->
            <div class="kb22-artist-card" data-country-type="international" data-id="herwig-scherabon" id="card-herwig-scherabon" onclick="openArtistModal('herwig-scherabon')">
                <div class="kb22-artists-avatar-wrap">
                    <img src="assets/img/KB22ArtistsList/herwig-500x500.jpg" alt="Herwig Scherabon" class="img-fluid" loading="lazy">
                    <div class="kb22-artists-card-overlay">
                        <span class="kb22-artists-view-details"><i class="fas fa-eye me-2"></i>View Profile</span>
                    </div>
                </div>
                <div class="kb22-artists-card-body">
                    <span class="kb22-artists-card-country">Austria</span>
                    <h4 class="kb22-artist-name">Herwig Scherabon</h4>
                </div>
            </div>

            <!-- 11. Imran Qureshi -->
            <div class="kb22-artist-card" data-country-type="pakistan" data-id="imran-qureshi" id="card-imran-qureshi" onclick="openArtistModal('imran-qureshi')">
                <div class="kb22-artists-avatar-wrap">
                    <img src="assets/img/KB22ArtistsList/imranqureshi-500x500.jpg" alt="Imran Qureshi" class="img-fluid" loading="lazy">
                    <div class="kb22-artists-card-overlay">
                        <span class="kb22-artists-view-details"><i class="fas fa-eye me-2"></i>View Profile</span>
                    </div>
                </div>
                <div class="kb22-artists-card-body">
                    <span class="kb22-artists-card-country">Pakistan</span>
                    <h4 class="kb22-artist-name">Imran Qureshi</h4>
                </div>
            </div>

            <!-- 12. Invisible Flock -->
            <div class="kb22-artist-card" data-country-type="international" data-id="invisible-flock" id="card-invisible-flock" onclick="openArtistModal('invisible-flock')">
                <div class="kb22-artists-avatar-wrap">
                    <img src="assets/img/KB22ArtistsList/InvisibleFlock.png" alt="Invisible Flock" class="img-fluid" loading="lazy">
                    <div class="kb22-artists-card-overlay">
                        <span class="kb22-artists-view-details"><i class="fas fa-eye me-2"></i>View Profile</span>
                    </div>
                </div>
                <div class="kb22-artists-card-body">
                    <span class="kb22-artists-card-country">UK / Pakistan</span>
                    <h4 class="kb22-artist-name">Invisible Flock</h4>
                </div>
            </div>

            <!-- 13. Justine Emard -->
            <div class="kb22-artist-card" data-country-type="international" data-id="justine-emard" id="card-justine-emard" onclick="openArtistModal('justine-emard')">
                <div class="kb22-artists-avatar-wrap">
                    <img src="assets/img/KB22ArtistsList/justine-500x500.jpg" alt="Justine Emard" class="img-fluid" loading="lazy">
                    <div class="kb22-artists-card-overlay">
                        <span class="kb22-artists-view-details"><i class="fas fa-eye me-2"></i>View Profile</span>
                    </div>
                </div>
                <div class="kb22-artists-card-body">
                    <span class="kb22-artists-card-country">France</span>
                    <h4 class="kb22-artist-name">Justine Emard</h4>
                </div>
            </div>

            <!-- 14. KCR Studio -->
            <div class="kb22-artist-card" data-country-type="pakistan" data-id="kcr-studio" id="card-kcr-studio" onclick="openArtistModal('kcr-studio')">
                <div class="kb22-artists-avatar-wrap">
                    <img src="assets/img/KB22ArtistsList/kcr-500x500.png" alt="KCR Studio" class="img-fluid" loading="lazy">
                    <div class="kb22-artists-card-overlay">
                        <span class="kb22-artists-view-details"><i class="fas fa-eye me-2"></i>View Profile</span>
                    </div>
                </div>
                <div class="kb22-artists-card-body">
                    <span class="kb22-artists-card-country">Pakistan</span>
                    <h4 class="kb22-artist-name">KCR Studio</h4>
                </div>
            </div>

            <!-- 15. Madyha Leghari -->
            <div class="kb22-artist-card" data-country-type="pakistan" data-id="madyha-leghari" id="card-madyha-leghari" onclick="openArtistModal('madyha-leghari')">
                <div class="kb22-artists-avatar-wrap">
                    <img src="assets/img/KB22ArtistsList/madyha-500x500.jpg" alt="Madyha Leghari" class="img-fluid" loading="lazy">
                    <div class="kb22-artists-card-overlay">
                        <span class="kb22-artists-view-details"><i class="fas fa-eye me-2"></i>View Profile</span>
                    </div>
                </div>
                <div class="kb22-artists-card-body">
                    <span class="kb22-artists-card-country">Pakistan</span>
                    <h4 class="kb22-artist-name">Madyha Leghari</h4>
                </div>
            </div>

            <!-- 16. Marc Lee -->
            <div class="kb22-artist-card" data-country-type="international" data-id="marc-lee" id="card-marc-lee" onclick="openArtistModal('marc-lee')">
                <div class="kb22-artists-avatar-wrap">
                    <img src="assets/img/KB22ArtistsList/marc-500x500.jpg" alt="Marc Lee" class="img-fluid" loading="lazy">
                    <div class="kb22-artists-card-overlay">
                        <span class="kb22-artists-view-details"><i class="fas fa-eye me-2"></i>View Profile</span>
                    </div>
                </div>
                <div class="kb22-artists-card-body">
                    <span class="kb22-artists-card-country">Switzerland</span>
                    <h4 class="kb22-artist-name">Marc Lee</h4>
                </div>
            </div>

            <!-- 17. Nobumichi Asai -->
            <div class="kb22-artist-card" data-country-type="international" data-id="nobumichi-asai" id="card-nobumichi-asai" onclick="openArtistModal('nobumichi-asai')">
                <div class="kb22-artists-avatar-wrap">
                    <img src="assets/img/KB22ArtistsList/nobumichi-500x500.jpg" alt="Nobumichi Asai" class="img-fluid" loading="lazy">
                    <div class="kb22-artists-card-overlay">
                        <span class="kb22-artists-view-details"><i class="fas fa-eye me-2"></i>View Profile</span>
                    </div>
                </div>
                <div class="kb22-artists-card-body">
                    <span class="kb22-artists-card-country">Japan</span>
                    <h4 class="kb22-artist-name">Nobumichi Asai</h4>
                </div>
            </div>

            <!-- 18. PluginHUMAN -->
            <div class="kb22-artist-card" data-country-type="international" data-id="plugin-human" id="card-plugin-human" onclick="openArtistModal('plugin-human')">
                <div class="kb22-artists-avatar-wrap">
                    <img src="assets/img/KB22ArtistsList/pluginhuman-500x500.jpg" alt="PluginHUMAN" class="img-fluid" loading="lazy">
                    <div class="kb22-artists-card-overlay">
                        <span class="kb22-artists-view-details"><i class="fas fa-eye me-2"></i>View Profile</span>
                    </div>
                </div>
                <div class="kb22-artists-card-body">
                    <span class="kb22-artists-card-country">Australia</span>
                    <h4 class="kb22-artist-name">PluginHUMAN</h4>
                </div>
            </div>

            <!-- 19. Rabeeha Adnan -->
            <div class="kb22-artist-card" data-country-type="pakistan" data-id="rabeeha-adnan" id="card-rabeeha-adnan" onclick="openArtistModal('rabeeha-adnan')">
                <div class="kb22-artists-avatar-wrap">
                    <img src="assets/img/KB22ArtistsList/rabeeha-500x500.jpg" alt="Rabeeha Adnan" class="img-fluid" loading="lazy">
                    <div class="kb22-artists-card-overlay">
                        <span class="kb22-artists-view-details"><i class="fas fa-eye me-2"></i>View Profile</span>
                    </div>
                </div>
                <div class="kb22-artists-card-body">
                    <span class="kb22-artists-card-country">Pakistan</span>
                    <h4 class="kb22-artist-name">Rabeeha Adnan</h4>
                </div>
            </div>

            <!-- 20. Rashid Rana -->
            <div class="kb22-artist-card" data-country-type="pakistan" data-id="rashid-rana" id="card-rashid-rana" onclick="openArtistModal('rashid-rana')">
                <div class="kb22-artists-avatar-wrap">
                    <img src="assets/img/KB22ArtistsList/rashid-500x500.jpg" alt="Rashid Rana" class="img-fluid" loading="lazy">
                    <div class="kb22-artists-card-overlay">
                        <span class="kb22-artists-view-details"><i class="fas fa-eye me-2"></i>View Profile</span>
                    </div>
                </div>
                <div class="kb22-artists-card-body">
                    <span class="kb22-artists-card-country">Pakistan</span>
                    <h4 class="kb22-artist-name">Rashid Rana</h4>
                </div>
            </div>

            <!-- 21. second practice -->
            <div class="kb22-artist-card" data-country-type="pakistan" data-id="second-practice" id="card-second-practice" onclick="openArtistModal('second-practice')">
                <div class="kb22-artists-avatar-wrap">
                    <img src="assets/img/KB22ArtistsList/secondpractice-500x500.jpg" alt="second practice" class="img-fluid" loading="lazy">
                    <div class="kb22-artists-card-overlay">
                        <span class="kb22-artists-view-details"><i class="fas fa-eye me-2"></i>View Profile</span>
                    </div>
                </div>
                <div class="kb22-artists-card-body">
                    <span class="kb22-artists-card-country">Pakistan</span>
                    <h4 class="kb22-artist-name">second practice</h4>
                </div>
            </div>

            <!-- 22. Shezad Dawood -->
            <div class="kb22-artist-card" data-country-type="international" data-id="shezad-dawood" id="card-shezad-dawood" onclick="openArtistModal('shezad-dawood')">
                <div class="kb22-artists-avatar-wrap">
                    <img src="assets/img/KB22ArtistsList/shezad-500x500.jpg" alt="Shezad Dawood" class="img-fluid" loading="lazy">
                    <div class="kb22-artists-card-overlay">
                        <span class="kb22-artists-view-details"><i class="fas fa-eye me-2"></i>View Profile</span>
                    </div>
                </div>
                <div class="kb22-artists-card-body">
                    <span class="kb22-artists-card-country">United Kingdom</span>
                    <h4 class="kb22-artist-name">Shezad Dawood</h4>
                </div>
            </div>

            <!-- 23. Syeda Sheeza Ali -->
            <div class="kb22-artist-card" data-country-type="pakistan" data-id="syeda-sheeza-ali" id="card-syeda-sheeza-ali" onclick="openArtistModal('syeda-sheeza-ali')">
                <div class="kb22-artists-avatar-wrap">
                    <img src="assets/img/KB22ArtistsList/sheezaali-500x500.jpg" alt="Syeda Sheeza Ali" class="img-fluid" loading="lazy">
                    <div class="kb22-artists-card-overlay">
                        <span class="kb22-artists-view-details"><i class="fas fa-eye me-2"></i>View Profile</span>
                    </div>
                </div>
                <div class="kb22-artists-card-body">
                    <span class="kb22-artists-card-country">Pakistan</span>
                    <h4 class="kb22-artist-name">Syeda Sheeza Ali</h4>
                </div>
            </div>

            <!-- 24. Solimán López -->
            <div class="kb22-artist-card" data-country-type="international" data-id="soliman-lopez" id="card-soliman-lopez" onclick="openArtistModal('soliman-lopez')">
                <div class="kb22-artists-avatar-wrap">
                    <img src="assets/img/KB22ArtistsList/soliman-500x500.jpg" alt="Solimán López" class="img-fluid" loading="lazy">
                    <div class="kb22-artists-card-overlay">
                        <span class="kb22-artists-view-details"><i class="fas fa-eye me-2"></i>View Profile</span>
                    </div>
                </div>
                <div class="kb22-artists-card-body">
                    <span class="kb22-artists-card-country">Spain</span>
                    <h4 class="kb22-artist-name">Solimán López</h4>
                </div>
            </div>

            <!-- 25. Yasir Darya -->
            <div class="kb22-artist-card" data-country-type="pakistan" data-id="yasir-darya" id="card-yasir-darya" onclick="openArtistModal('yasir-darya')">
                <div class="kb22-artists-avatar-wrap">
                    <img src="assets/img/KB22ArtistsList/yasirdarya-500x500.jpg" alt="Yasir Darya" class="img-fluid" loading="lazy">
                    <div class="kb22-artists-card-overlay">
                        <span class="kb22-artists-view-details"><i class="fas fa-eye me-2"></i>View Profile</span>
                    </div>
                </div>
                <div class="kb22-artists-card-body">
                    <span class="kb22-artists-card-country">Pakistan</span>
                    <h4 class="kb22-artist-name">Yasir Darya</h4>
                </div>
            </div>

        </div>

        <!-- No Results -->
        <div id="noResultsMessage" class="kb22-artists-no-results text-center d-none">
            <i class="fas fa-search mb-3"></i>
            <p>No artists found matching your criteria.</p>
        </div>

    </div>
</div>

<!-- Phone/Email Bottom Widget (Consistent across subpages) -->
<footer class="kb22-artists-footer-contact">
    <div class="container text-center">
        <p class="mb-2"><i class="fas fa-phone-alt me-2 text-gold"></i> Phone: <strong>+92 21 35157566</strong></p>
        <p class="mb-0"><i class="fas fa-envelope me-2 text-gold"></i> Email: <strong>info@karachibiennale.org.pk</strong></p>
    </div>
</footer>

<script>
// JSON Data store for all KB22 artists
const ARTISTS_DATA = {
    "alecia-neo": {
        name: "Alecia Neo",
        country: "Singapore",
        img: "assets/img/KB22ArtistsList/alecianeo-scaled.jpg",
        bio: "Alecia Neo, an artist and cultural worker, practices through photography, video installations, and participatory workshops, reframing art as an expression of radical care.",
        artwork: "Power to the People",
        medium: "Light & Sound Score, Wires, light bulbs, motion sensors with double-sided mirrors and video projection mapping",
        desc: "Inspired by Saddar's rich historical significance, Power to the People is an ode to people whose labor builds and sustains a city. Moving hands and symbolic objects honor the different lives and labor of the people who have resided and contributed to the history, legacy, and vibrancy of Saddar. A network of interconnected wires, light bulbs, and mirrors layers the room within Hamid Market. The work performs along with the building through shadow and light.",
        credits: "National Arts Council, Binjai Tree",
        collaborators: "Chong Li-Chuan (Composer-Sound Designer), Andy Lim | ARTFACTORY (Technical Support)"
    },
    "amin-gulgee": {
        name: "Amin Gulgee",
        country: "Pakistan",
        img: "assets/img/KB22ArtistsList/amingulgee.jpg",
        bio: "Amin Gulgee is an artist-curator living and working in Karachi. Gulgee works with sculpture, installation, and performance. His practice looks at unlikely connections to uncover different narratives in relation to South Asian spirituality and gender.",
        artwork: "Memory Room",
        medium: "Installation, controlled triggered lights, Arduinos, mirror, copper, turmeric, steel, copper with nickel plate, zircon, iron and fishing wire",
        desc: "Memory Room is the artist's attempt to maintain a \"wholeness of the self.\" Amin Gulgee's \"witnesses of the past,\" his \"friends,\" are the objects that surround him in his home. In this room, each one becomes a mark of an emotion and experience that the artist has had. Research has shown that memories of smell can last as long as a year. Eye movements will be manipulated in this darkened room using changing colored lights. This installation overlaps with two performances: The Un-Remembering and The Forgotten March, where Gulgee co-creates an imagined pre-history with a fashion designer.",
        credits: "N/A",
        collaborators: "Laeeq Akbar (Fashion designer); Pomme Amina Gohar (Fashion Mentor/Lighting advisor); Talhakaar (Technical advisor); NJV School Students"
    },
    "amin-rehman": {
        name: "Amin Rehman",
        country: "Canada",
        img: "assets/img/KB22ArtistsList/aminkaren.jpg",
        bio: "Amin Rehman is a multidisciplinary visual artist who has been exhibiting since the 1980s. His work comments on the current effects of systems of domination by nation-states in power over others.",
        artwork: "Water Wars",
        medium: "Encaustic Painting with melted bee wax, color pigment, resin and damar varnish mixture, Augmented Reality (AR), Video, Photography, Animation",
        desc: "Water Wars highlights that water is absolutely political and becoming more so through scarcity, national ownership, and boundaries. The Indus River Delta increases, and the Arabian Sea encroaches on the sweet water of the Indus River, which is in turn polluted by our sewerage. In the Indus Basin, on the extremely fertile agricultural lands, real estate mafias are building housing societies for great profits. The Karez water system in Balochistan is drying up. River Ravi in Lahore is choked with waste. Water Wars addresses the changing climate in the Indus River basin regions by 2040. Like water defies the boundaries of land, video and photo meet to defy location through augmented reality.",
        credits: "Canada Council for the Arts, Shehla and Ali Adil, SAGA Foundation",
        collaborators: "Karen Darricades (AR Tech - a multidisciplinary new media artist and educator who uses AR to make communal artworks)"
    },
    "andreas-lutz": {
        name: "Andreas Lutz",
        country: "Germany",
        img: "assets/img/KB22ArtistsList/andreaslutz.jpg",
        bio: "Andreas Lutz's practice explores communication between machine systems and people. Lutz looks at the relationship between perception and reality through sound, sign, and sculpture.",
        artwork: "Monolith YW",
        medium: "Artificial Intelligence (AI) and Kinetic Sculpture (Audio + Visual); Actuators, LED lights, stretchable fabric, custom software",
        desc: "What if there is an inner dialogue by a machine before it communicates to the outside world? Does a self-aware machine have a certain image of itself? How does that change the interaction between a machine and a human being? In this kinetic encounter, people will meet the Monolith's primal thoughts that arise from the language of the machine: its 25 binary states.",
        credits: "Goethe Institut",
        collaborators: "N/A"
    },
    "audio-placebo-plaza": {
        name: "Audio Placebo Plaza",
        country: "Canada",
        img: "assets/img/KB22ArtistsList/placebo.png",
        bio: "Audio Placebo Plaza (APP) with Erin Gee, Julia E. Dyck, and Vivian Li is a trio of woman-identified and non-gender conforming artists based in Montreal/Tiohtià:ke. They center intersectional feminism by expressing ways of caring, emotional labour, and making community through collaborative performance and sound art.",
        artwork: "Audio Placebo Plaza",
        medium: "Collaborative and Community-driven Sound Art",
        desc: "Audio Placebo Plaza is a participatory work that invites everyone to take appointments to discuss how an audio placebo could help improve their lives. Daily issues that people may struggle with can be brought to the table. Through this, a variety of audio techniques are developed to provide care. Music is made to create repair.",
        credits: "CALQ – Conseil des arts et des lettres du Québec",
        collaborators: "Erin Gee, Julia E. Dyck, Vivian Li"
    },
    "bilal-jabbar": {
        name: "Bilal Jabbar",
        country: "Pakistan",
        img: "assets/img/KB22ArtistsList/bilaljabbar.jpg",
        bio: "Bilal Jabbar is the winner of KB22 Engro Emerging Artist prize. He is a visual artist in Karachi, graduated from Indus Valley School of Art and Architecture. His works explore various forms of kinetics, understanding mechanisms with different materials and systems.",
        artwork: "Wall of Thoughts",
        medium: "Found Objects (Kitchen Bowl), Auto-electronic Motors, Sensors, and Light",
        desc: "The subconscious mind is a Wall of Thoughts with a number of fascinating stories residing within it. It could be a place of zen or a battle of chaos. Bilal uses his amalgamation of domestic cutlery and auto-electronic machines to engage the viewer in a new atmospheric experience that could be a reflection of their own subconscious. The work is interactive and only works while it is in motion within the space.",
        credits: "N/A",
        collaborators: "N/A"
    },
    "cosmic-tribe": {
        name: "Cosmic Tribe",
        country: "Pakistan",
        img: "assets/img/KB22ArtistsList/Cosmic_tribe.jpg",
        bio: "Cosmic Tribe explores a range of upcoming technologies through visual expression, campaign designs, and performances that address social issues in a unique way.",
        artwork: "Sentient of Lights",
        medium: "Hybrid Media Wearable Art, Live Interactive Performance",
        desc: "Sentient of Lights uses an experimental approach to scientific data. A character named Sentient educates the viewer on how light pollution harms living beings. Non-physical material like light is made tangible to bring attention to how this aspect of pollution is neglected. This digitally created new media performance includes AI-generated visuals and art that can be worn.",
        credits: "3D Wearable Phygital Designs by Oshii Brownie",
        collaborators: "Oshii Brownie, Sikander Ali Khan, Hamza Mubarak, Yusra Taqi (Technical Support), Wahab Shah (Choreography), Emad Rehman (Sound Design), Salman Sabir (Coordination)"
    },
    "dennis-rudolph": {
        name: "Dennis Rudolph",
        country: "Germany",
        img: "assets/img/KB22ArtistsList/dennisrudolph.jpg",
        bio: "Dennis Rudolph is a conceptual artist working in augmented reality, virtual reality, and painting. His artistic practice looks at history, culture, and 3D visuals.",
        artwork: "Simurgh App",
        medium: "Augmented Reality (AR)",
        desc: "The supernatural has always been a source of interest amongst artists. What if a mythical figure was to appear and guide the visitor to experience a 200-year-old book? The 200-year-old illustrated copy of Firdousi's Shahnama in the NJV School library is brought to life through Augmented Reality. Rudolph uses his '3D' paintings through the Simurgh App to create a new 'virtual' way of connecting to one of the longest epic Persian poems, the Shahnamah (977–1010 CE). AR drawings meet the mythical history of Persia's golden days.",
        credits: "Goethe Institut",
        collaborators: "N/A"
    },
    "giselle-beiguelman": {
        name: "Giselle Beiguelman",
        country: "Brazil",
        img: "assets/img/KB22ArtistsList/giselle.jpg",
        bio: "Giselle Beiguelman is an award-winning artist, professor at the University of Sao Paulo, and the author of several writings on digital culture. Beiguelman's recent work investigates the colonialist imagination using AI technologies.",
        artwork: "Botannica Triannica",
        medium: "Generative Imaging, Artificial Intelligence (AI), Video, Photographs",
        desc: "\"The world is a garden, whose weeds must be eliminated\"—a saying that defends 'scientific' racism (eugenics). Botannica Triannica is an investigation of the naming process of nature and how it is affected by colonialism and other systems of oppression. These scientific and popular names of plants and vegetation reflect the prejudice that exists against marginalized people. Giselle Beiguelman creates a post-natural garden from images and videos of plants manipulated by Artificial Intelligence (AI), with a decolonial narrative. She highlights \"weeds\" as resistant and resilient life forms infiltrating real and digital gardens.",
        credits: "Embassy of Brazil",
        collaborators: "N/A"
    },
    "herwig-scherabon": {
        name: "Herwig Scherabon",
        country: "Austria",
        img: "assets/img/KB22ArtistsList/herwig.jpg",
        bio: "Herwig Scherabon (Berlin-based) works with CGI, virtual reality (VR), and audiovisual installations. Scherabon has a long-lasting relationship with landscapes/nature and is interested in the qualities of large-scale phenomena.",
        artwork: "Remembering You The City of Lights",
        medium: "2-channel audiovisual installation, Full HD projectors, 3D printing sculpture",
        desc: "The context of a place is the most fascinating and diverse palette of raw materials available to an artist. Driven by the geography, history, and data of Karachi, the narrative of the city and its expansion are explored. Through the old ruins of Bhambhore (1st Century BCE) and the Landfill Jam Chakro at the edge of Karachi, the work allows the viewer to go beyond human time to understand the issue of land, ecology, and global warming. The work takes the form of a diptych video installation with visual projections and a sculpture representing an imagined archeological artifact from a future past.",
        credits: "The Federal Ministry Republic of Austria Arts Culture Civil Service and Sport, Austrian Embassy Pakistan",
        collaborators: "Joshua Alena Mallek (Digital art assistance), Students at Visual Studies, Karachi University (assistance)"
    },
    "imran-qureshi": {
        name: "Imran Qureshi",
        country: "Pakistan",
        img: "assets/img/KB22ArtistsList/imranqureshi.jpg",
        bio: "Imran Qureshi expands the language of miniature painting in the form of site-specific installations, three-dimensional works, videos, and paintings. His work continues to be firmly rooted in the tradition of miniature painting.",
        artwork: "Deen O Dunya (The Sacred and the Earthly)",
        medium: "Sound, Neon lights, Video Projection installation",
        desc: "In Deen O Dunya, the residents of a local neighborhood go through profound physical and emotional experiences when their homes, streets, and entire neighborhoods undergo an intense transformation. Qureshi focuses on the layers that are added to the facades of homes and cover entire neighborhoods. Through video projection and sound-based work, the boundaries of religious rituals, culture, and modern technology merge in a carnivalesque form.",
        credits: "Partial Funding by Mr. Tommaso Corvi Mora, Mr. Shahzad Ahmed",
        collaborators: "N/A"
    },
    "invisible-flock": {
        name: "Invisible Flock",
        country: "United Kingdom",
        img: "assets/img/KB22ArtistsList/InvisibleFlock.png",
        bio: "Invisible Flock is a multi award-winning interactive arts studio based in the UK that places itself at the intersection of art, technology, and the environment. Allah Jurrio is a 90-year-old potter based in Badin, one of the few craftsmen who create the Borindo. Faqir Zulfiqar is a Sindhi folk musician and Borindo maker largely responsible for preserving the instrument.",
        artwork: "Microtonal",
        medium: "Microtonal, clay and circuitry, generative sound and performance",
        desc: "Microtonal takes the form of an interactive, data-driven sound sculpture created from 200 Borindos made by Allahjurrio and Faqir Zulfiqar in Badin. The Borindo is an instrument that can be dated back 5,000 years and was resurrected by the Faqir's father and Allahjurrio. Through sound, the work uses this deep cultural and personal history with the objects to explore the encoded symbolism held within this instrument.",
        credits: "British Council",
        collaborators: "Faqir Zulfiqar and Allah Jurrio"
    },
    "justine-emard": {
        name: "Justine Emard",
        country: "France",
        img: "assets/img/KB22ArtistsList/justine-500x500.jpg",
        bio: "Justine Emard is a visual artist living and working in Paris. Her artworks explore the new relationships that are being established between our existences and technologies.",
        artwork: "Co(AI)xistence",
        medium: "Artificial Intelligence (AI), Robotics, Video Documentation",
        desc: "Using a deep learning AI system, Co(AI)xistence creates an artistic medium between data and human motion. A primitive intelligence interacts with a human through signals, body, and spoken language with their different intelligences. Mirai Moriyama, Japanese actor and dancer, interacts face to face with a robot based on a neuronal system. The AI robot learns from their experience but embodies a different non-human way of understanding things. The human and the robot try to define new perspectives of coexistence in the world.",
        credits: "N/A",
        collaborators: "Ikegami and Ishiguro lab"
    },
    "kcr-studio": {
        name: "KCR Studio",
        country: "Pakistan",
        img: "assets/img/KB22ArtistsList/kcr-500x500.png",
        bio: "Karachi Community Radio (KCR) is an independent online radio archiving and promoting the contemporary music culture of Pakistan. Their extensive work has seen them design audio-visual shows, broadcast livestreams, and generate virtual productions.",
        artwork: "Saaz | ساز",
        medium: "Sensory tech, Electronics/Arduinos, artificial intelligence (AI), generative visuals, sound, and performance",
        desc: "Saaz invites the audience to think about technology and classical tradition in music. As the digital encroaches further and further into the domain of the physical and the human, can the domain of performance, virtuosity, and the expression of the soul through an instrument remain sacred? What happens if we build a portal between these two domains?",
        credits: "N/A",
        collaborators: "Jahanzeb Safder (A/V Programming, Curation), Murtaza Tunio (Hardware Tech), Irfan Ali Taj (Musician), Daniel A. Panjwaney (Music Producer), Khurram Halari (Laser Cutting), Hamza Ahmad (Augmented Sitar Design), Ashir Bhatti & Changez Basir (Lambda Sculpture)"
    },
    "madyha-leghari": {
        name: "Madyha Leghari",
        country: "Pakistan",
        img: "assets/img/KB22ArtistsList/madyha.jpg",
        bio: "Madyha J. Leghari is an artist, writer, and educator. Her practice often revolves around the possibilities and limitations of language.",
        artwork: "Speaking in Tongues",
        medium: "Interactive Video, proximity sensor",
        desc: "Speaking in Tongues is an interactive video from the perspective of a woman who awakens one day to find herself trapped in a peaceful summer escape. A reference to the classic Sanskrit poetic form, Sandesha Kavya, she attempts to speak with non-human beings around her: a cloud as an environmental agent, a camera as a machine, and a plant as bio-matter. Viewers step into her character and create their own narrative pathways. The work prompts questions of eco-anxiety, individual agency, an author's intent, and the ever-presence of the narrator.",
        credits: "N/A",
        collaborators: "Sophia Hasnain (Linked things)"
    },
    "marc-lee": {
        name: "Marc Lee",
        country: "Switzerland",
        img: "assets/img/KB22ArtistsList/marc-500x500.jpg",
        bio: "Marc Lee, a Swiss artist, focuses on real-time processed, computer-programmed audiovisual installations, AR, VR, and mobile apps. Lee critically highlights creative, cultural, social, ecological, and political themes in his work.",
        artwork: "Echolocation",
        medium: "Real-Time, Geolocation, Web Art, 3 channel Installation",
        desc: "In Echolocation, users can choose any location on a map and move through stories posted on social networks like YouTube, Flickr, and Twitter. Here, these personal impressions are streamed in real time like windows to our changing world. The viewer participates in the social movements of our time and makes a journey into new image and sound collages. Does the flattening of forms and images in the digital world lead to uniformity, or can this space be used to expand cultural diversity?",
        credits: "Pro Helvetia",
        collaborators: "N/A"
    },
    "nobumichi-asai": {
        name: "Nobumichi Asai",
        country: "Japan",
        img: "assets/img/KB22ArtistsList/nobumichi-500x500.jpg",
        bio: "Nobumichi Asai pushes for innovation through the fusion of art/design thinking and technology. A media artist, he is internationally known for his face-mapping of Lady Gaga at the Grammy Awards.",
        artwork: "my heartbeats",
        medium: "Augmented Reality (AR)",
        desc: "my heartbeats visualizes invisible violence through the heart, and makes visible the invisible life force of people. At first, the suppressed and crushed heart quivers weakly. But with time, the heart recovers and regains a regular beat. The heart beats, even when oppressed, even when violated. It continues to beat without fear. It does not attack or fight back, but it does not give in to it either.",
        credits: "N/A",
        collaborators: "Minami Otake, Daisuke Tanabe, Tongullman"
    },
    "plugin-human": {
        name: "PluginHUMAN",
        country: "Australia",
        img: "assets/img/KB22ArtistsList/pluginhuman-500x500.jpg",
        bio: "PluginHUMAN uses traditional cultural practices and the medium of light to translate complicated data into meaningful audience experiences. This can include projection mapping, video artworks, and sense-based environments.",
        artwork: "Disco Apocalypse",
        medium: "3D, web-based, Printed fabric, DMX lighting, Audio, Electronics",
        desc: "Disco Apocalypse is an almost unbearable reality. Audiences are invited to question excesses of self-indulgence on the edge of the abyss. This immersive installation highlights how humans draw on rich environmental and cultural resources for hedonistic pleasure and our unwillingness to fully address climate realities. The disco combines visuals, video art, music, and lighting. The visuals feature First Nations Australian Aboriginal war shields, re-imagined by an indigenous artist as a tool for the protection of the environment and traditional cultures.",
        credits: "N/A",
        collaborators: "Lorraine Brigdale (Yorta Yorta First Nations), Dr. Betty Sargeant, Justin Dwyer"
    },
    "rabeeha-adnan": {
        name: "Rabeeha Adnan",
        country: "Pakistan",
        img: "assets/img/KB22ArtistsList/rabeeha-500x500.jpg",
        bio: "Rabeeha Adnan, an interdisciplinary artist, addresses power dynamics within state structures through storytelling. Adnan's practice involves new media techniques including projection, animation, light installation, and text.",
        artwork: "Mukaalmah: We Can't Both Be Right!",
        medium: "Video Projection mapping on mixed-media installation; sound design, light, objects",
        desc: "Mukaalmah: We Can't Both Be Right is a musical play performed by instrumental objects sourced from Jamshed Memorial Library. Groups of seemingly identical objects find it hard to communicate with one another, much like the norms of human social groups. Similarly, all Abrahamic religions essentially echo the same ideas but find it hard to coexist. Whilst drawing parallels between these, characters in the two subgroups perform through the help of projection mapping, in sync, facilitated by light and sound. Filled with literature from the Theosophical Society, Jamshed Memorial Library serves as an ideal space to investigate institutional beliefs and the way they limit and affect human relationships.",
        credits: "N/A",
        collaborators: "N/A"
    },
    "rashid-rana": {
        name: "Rashid Rana",
        country: "Pakistan",
        img: "assets/img/KB22ArtistsList/rashid-500x500.jpg",
        bio: "Rashid Rana is known for his pioneering works in new media art from Pakistan. Notable for conceptual innovation and dramatic visual strategies, Rana depicts the familiar and everyday; encompassing themes such as identity, space-time, and duality. He is the recipient of the 2017 Asia Art Award by the Asia Society (NYC).",
        artwork: "IT LIES BEYOND, 2022",
        medium: "Inject Print on Vinyl, Augmented Reality (AR)",
        desc: "It Lies Beyond challenges viewer's perception of what is inside and outside, close and distant, within and without, real and fictional while bridging and dismantling these binaries simultaneously, opening questions of the \"nature versus man-made.\" An ominous, serene seascape that, on a closer inspection, reveals the heaps of garbage that it is composed of. This matrix of garbage also contains within it the illustrations and paintings of sailing ships. Through these metaphors, this installation refers to the post-renaissance materialist inquiry, sea-trade, colonization, and consumerism followed by global climate change.",
        credits: "N/A",
        collaborators: "Photo Credits: Amna Yaseen"
    },
    "second-practice": {
        name: "second practice",
        country: "Pakistan",
        img: "assets/img/KB22ArtistsList/secondpractice-500x500.jpg",
        bio: "second practice is a collaborative research & publishing practice that looks at postcolonial geographies. Participatory ways of sharing knowledge inform their method, subject, and art.",
        artwork: "Artist as Translator",
        medium: "Web-based, Interactive Map, Video, Sound, drawing",
        desc: "Artists, like translators, struggle with the impossibility of translating thoughts, moments, and observations. The process of translation shows the tension between languages and forms. second practice invites artists from 15 locations in the global south to form a chain of translation. A material tied to its location and difficult to translate is translated and passed on from artist to artist. Uncovering the gaps and limits in the process of translation can change the way a material is read by someone.",
        credits: "Living Arts International",
        collaborators: "Fatima Hussain, Abeerah Zahid and Ayesha Kamal Khan"
    },
    "shezad-dawood": {
        name: "Shezad Dawood",
        country: "United Kingdom",
        img: "assets/img/KB22ArtistsList/shezad-500x500.jpg",
        bio: "Shezad Dawood is a multidisciplinary artist who interweaves stories, realities, symbolism, architectures, and ecologies to create richly layered artworks, spanning painting, textiles, sculpture, film, and digital media. Fascinated by ecologies and architecture, his work takes a philosophical approach, asking questions and exploring alternative futures through a collaborative, research-driven process.",
        artwork: "The Terrarium",
        medium: "Virtual Reality (VR)",
        desc: "It is 300 years from now, and you are released into an underwater world from The Terrarium, an experimental lab facility. You travel onward by moving your new tentacles and pincers, journeying past a submerged Paljassaare peninsula and meeting other human-marine hybrids along the connected Baltic/English coastlines. You are suddenly and unexpectedly captured by future human pirates, who have had their genes spliced with animal DNA and are pillaging their former planet. Held captive, you are given one chance to decide your fate.",
        credits: "British Council, featuring parts of Anthropocene Island TAB17 by ecoLogicStudio and excerpts of The Terrarium Inventory by Graham Fitkin. Commissioned by UP Projects for Creative Folkestone Triennial 2021 and Kai Art Center, supported by CUPIDO, co-funded by the EU, Arts Council England and Tallinn Culture Department.",
        collaborators: "N/A"
    },
    "syeda-sheeza-ali": {
        name: "Syeda Sheeza Ali",
        country: "Pakistan",
        img: "assets/img/KB22ArtistsList/sheezaali-500x500.jpg",
        bio: "Syeda Sheeza Ali, a visual artist, works on the amalgamation of Art and Science. Her artworks have an exciting kinetic experience. She uses Iron and Magnets as her working medium.",
        artwork: "Lines of Force",
        medium: "Iron, Magnet, Sensors",
        desc: "Lines of Force plays with natural forces and the scientific phenomena that evolve around them. Unseen forces spontaneously interact through mechanisms and structures such as gravitational force, magnetic force, and electromagnetic force. The artwork becomes a manipulation and expression of these dynamics. Through the participation of the viewer, many of the works can be disturbed and reformed.",
        credits: "N/A",
        collaborators: "N/A"
    },
    "soliman-lopez": {
        name: "Solimán López",
        country: "Spain",
        img: "assets/img/KB22ArtistsList/soliman-500x500.jpg",
        bio: "Soliman Lopez, a technology artist, is the founder of the Harddiskmuseum, OLEA bio-cryptocurrency, and the DNA-based digital entities INTRONS. Lopez researches digital material, preserving data, biology, and blockchain technologies to shape his art.",
        artwork: "Airdrop Olea",
        medium: "Kinetic Sculpture, Cryptocurrency, blockchain, LED Screens, Olive Oil, Air compressor",
        desc: "Airdrop Olea connects the oldest economy of humanity—agriculture—with the newest—digital currency. Oil, once used as a bargaining chip, as liquid gold, as a gift, and as an engine of friction, is now updated and becomes its own cryptocurrency, connecting disadvantaged farming communities with an ecosystem that without The OLEA project would have been far away. In OLEA, laboratory-created DNA molecules include in their sequence the correspondence of the digital file (smart contract) and function as a biological \"hard disk\" which in turn has been inserted into olive oil. OLEA pushes the viewer to consider alternative, advanced, and equal ways of organizing the economic system.",
        credits: "Embassy of Spain, Instituto Espronceda from Barcelona, ESAT Valencia, CSIC and Instituto de la Grasa de Sevilla/Spain",
        collaborators: "N/A"
    },
    "yasir-darya": {
        name: "Yasir Darya",
        country: "Pakistan",
        img: "assets/img/KB22ArtistsList/yasirdarya-500x500.jpg",
        bio: "Yasir Darya (Karachi-based), founder of Darya Lab and Green Pakistan Coalition, a nature advocacy network, is a multi-disciplinary artist, activist, and futurist. Many of his artworks are based on Karachi's ecology. His favorite occupation is to redefine a tech or device for another purpose.",
        artwork: "Air Rider",
        medium: "Air Bike, installation e-bike and IoT, Live Video, Geolocation",
        desc: "Air Rider allows users to experience data on air pollution through a live performance. Here, tech meets society, culture, and livability. In real-time, the user connects with streaming live-data and interacts with the Air Rider, making their way on distinct geographic routes throughout the city.",
        credits: "V-Lektra/Bike",
        collaborators: "Sophia Hasnain (Linked things)"
    }
};

let currentArtistIndex = 0;
const artistKeys = Object.keys(ARTISTS_DATA);

// Open Modal and display artist profile
function openArtistModal(id) {
    const artist = ARTISTS_DATA[id];
    if (!artist) return;

    currentArtistIndex = artistKeys.indexOf(id);
    
    // Update hash router
    window.location.hash = "artist-" + id;

    // Populate modal contents
    const modalContent = document.getElementById("artistModalContent");
    modalContent.innerHTML = `
        <div class="row g-4">
            <div class="col-lg-5 text-center">
                <div class="kb24a-modal-img-wrap mb-4">
                    <img src="${artist.img}" alt="${artist.name}" class="kb24a-modal-img img-fluid" onerror="this.src='assets/img/KB22ArtistsList/KBT_logo.png'">
                </div>
                <div class="d-grid gap-2">
                    <button class="kb24a-modal-web-btn btn btn-primary" onclick="shareArtistLink('${id}')">
                        <i class="fas fa-share-alt me-2"></i> Share Artist Link
                    </button>
                </div>
            </div>
            
            <div class="col-lg-7">
                <span class="kb24a-modal-country"><i class="fas fa-globe-asia me-2"></i>${artist.country}</span>
                <h2 class="kb24a-modal-artist-name">${artist.name}</h2>
                
                <h4 class="kb24a-modal-section-title">Biography</h4>
                <p class="kb24a-modal-text">${artist.bio}</p>
                
                <div class="kb24a-modal-artwork-box">
                    <h4 class="kb24a-modal-artwork-title">Artwork: <strong>${artist.artwork}</strong></h4>
                    <p class="kb24a-modal-medium"><strong>Medium:</strong> ${artist.medium}</p>
                    <p class="kb24a-modal-text mb-0">${artist.desc}</p>
                    
                    ${artist.collaborators !== 'N/A' && artist.collaborators ? `<p class="kb24a-modal-medium mt-3"><strong>Collaborators:</strong> ${artist.collaborators}</p>` : ''}
                    ${artist.credits !== 'N/A' && artist.credits ? `<p class="kb24a-modal-medium mt-1"><strong>Credits / Supporters:</strong> ${artist.credits}</p>` : ''}
                </div>
            </div>
        </div>
    `;

    // Display Backdrop & modal
    const backdrop = document.getElementById("artistModalBackdrop");
    const modal = document.getElementById("artistModal");
    
    backdrop.classList.add("active");
    modal.classList.add("active");
    document.body.style.overflow = "hidden"; // Freeze scroll background
}

// Close Modal
function closeArtistModal() {
    const backdrop = document.getElementById("artistModalBackdrop");
    const modal = document.getElementById("artistModal");
    
    backdrop.classList.remove("active");
    modal.classList.remove("active");
    document.body.style.overflow = ""; // restore scroll

    // Clear hash router without jumping page
    history.pushState("", document.title, window.location.pathname + window.location.search);
}

// Carousel navigation between artists inside modal
function navigateArtist(direction) {
    let nextIndex = currentArtistIndex + direction;
    if (nextIndex >= artistKeys.length) {
        nextIndex = 0;
    } else if (nextIndex < 0) {
        nextIndex = artistKeys.length - 1;
    }
    const nextArtistId = artistKeys[nextIndex];
    openArtistModal(nextArtistId);
}

// Direct URL Copy Share
function shareArtistLink(id) {
    const artist = ARTISTS_DATA[id];
    if (!artist) return;
    
    const shareUrl = window.location.origin + window.location.pathname + "#artist-" + id;
    
    navigator.clipboard.writeText(shareUrl).then(() => {
        const toast = document.getElementById("kb24aShareToast");
        toast.classList.add("active");
        
        setTimeout(() => {
            toast.classList.remove("active");
        }, 2000);
    }).catch(err => {
        console.error("Could not copy direct link: ", err);
    });
}

// Key listeners for modal shortcuts
document.addEventListener("keydown", function(e) {
    const backdrop = document.getElementById("artistModalBackdrop");
    if (backdrop && backdrop.classList.contains("active")) {
        if (e.key === "Escape") {
            closeArtistModal();
        } else if (e.key === "ArrowLeft") {
            navigateArtist(-1);
        } else if (e.key === "ArrowRight") {
            navigateArtist(1);
        }
    }
});

// Directory searching and filter rendering
document.addEventListener("DOMContentLoaded", function() {
    const searchInput = document.getElementById("artistSearchInput");
    const filterButtons = document.querySelectorAll(".kb22-artists-filter-btn");
    const cards = document.querySelectorAll(".kb22-artist-card");
    const noResults = document.getElementById("noResultsMessage");

    let currentFilter = "all";

    function filterDirectory() {
        const query = searchInput.value.toLowerCase().trim();
        let visibleCount = 0;

        cards.forEach(card => {
            const cardId = card.getAttribute("data-id");
            const artist = ARTISTS_DATA[cardId];
            if (!artist) return;

            const name = artist.name.toLowerCase();
            const artwork = artist.artwork.toLowerCase();
            const country = artist.country.toLowerCase();
            const type = card.getAttribute("data-country-type"); // pakistan or international

            const matchesSearch = name.includes(query) || artwork.includes(query) || country.includes(query);
            const matchesFilter = currentFilter === "all" || type === currentFilter;

            if (matchesSearch && matchesFilter) {
                card.style.display = "block";
                visibleCount++;
            } else {
                card.style.display = "none";
            }
        });

        if (visibleCount === 0) {
            noResults.classList.remove("d-none");
        } else {
            noResults.classList.add("d-none");
        }
    }

    searchInput.addEventListener("input", filterDirectory);

    filterButtons.forEach(btn => {
        btn.addEventListener("click", function() {
            filterButtons.forEach(b => b.classList.remove("active"));
            this.classList.add("active");
            currentFilter = this.getAttribute("data-filter");
            filterDirectory();
        });
    });

    // Hash Router triggers on page load
    if (window.location.hash) {
        const hash = window.location.hash;
        if (hash.startsWith("#artist-")) {
            const artistId = hash.replace("#artist-", "");
            if (ARTISTS_DATA[artistId]) {
                // Wait for potential rendering lag
                setTimeout(() => {
                    openArtistModal(artistId);
                }, 200);
            }
        }
    }
});
</script>

<?php include 'components/footer.php'; ?>
