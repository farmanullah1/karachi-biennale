<?php 
  $pageTitle = 'KB24 Participating Artists - Fourth Karachi Biennale';
  $metaDesc = 'View the participating artists of the Fourth Karachi Biennale (KB24) exploring the theme Rizq | Risk, featuring interactive search, filter categories, and bios.';
  $bodyClass = 'page-kb24-artists-list'; 
  include 'components/header.php'; 
?>

<!-- 1. Page Banner (Full Image Hero) -->
<section class="kb24a-hero-banner-section">
    <div class="kb24a-banner-img-wrap">
        <img src="assets/img/KB24ArtistsList/kb24-banner.jpg" alt="Fourth Karachi Biennale KB24 Artists Banner" class="kb24a-banner-img">
        <div class="kb24a-banner-overlay"></div>
        <div class="kb24a-banner-text-wrap text-center">
            <h1 class="kb24a-hero-title">Artist List</h1>
            <p class="kb24a-hero-subtitle">Fourth Karachi Biennale KB24</p>
            
            <!-- Breadcrumbs -->
            <nav class="kb24a-breadcrumbs" aria-label="breadcrumb">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li>Past Biennale</li>
                    <li>KB24</li>
                    <li class="active" aria-current="page">Artist List</li>
                </ul>
            </nav>
        </div>
    </div>
</section>

<div class="kb24a-main-wrapper">
    <div class="container">
        
        <!-- Search and Filter Bar -->
        <div class="kb24a-control-bar">
            <div class="row g-3 align-items-center justify-content-between">
                <div class="col-md-5">
                    <div class="kb24a-search-wrap">
                        <i class="fas fa-search search-icon"></i>
                        <input type="text" id="artistSearchInput" placeholder="Search by artist name, country, or artwork..." onkeyup="filterArtists()">
                    </div>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="kb24a-filter-btn-group">
                        <button class="kb24a-filter-btn active" data-filter="all" onclick="setArtistFilter('all', this)">All Artists</button>
                        <button class="kb24a-filter-btn" data-filter="pakistan" onclick="setArtistFilter('pakistan', this)">Pakistan</button>
                        <button class="kb24a-filter-btn" data-filter="international" onclick="setArtistFilter('international', this)">International</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- 3. Artists Grid -->
        <section class="kb24a-grid-section">
            <div class="kb24a-grid" id="artistsGrid">
                
                <!-- Artist Cards -->
                <!-- 1. Anna Konik -->
                <div class="kb24a-card" data-country-type="international" data-id="anna-konik" id="card-anna-konik">
                    <div class="kb24a-avatar-wrap">
                        <img src="assets/img/KB24ArtistsList/Anna_Konik-300x300.webp" alt="Anna Konik" class="kb24a-avatar" loading="lazy">
                        <div class="kb24a-card-overlay">
                            <span class="kb24a-view-details"><i class="fas fa-eye me-2"></i>View Artist</span>
                        </div>
                    </div>
                    <div class="kb24a-card-body">
                        <span class="kb24a-card-country">Poland</span>
                        <h4 class="kb24a-artist-name">Anna Konik</h4>
                        <p class="kb24a-card-artwork">A Song of Humble Beauty</p>
                    </div>
                </div>

                <!-- 2. Anusha Khawajah Shahid -->
                <div class="kb24a-card" data-country-type="pakistan" data-id="anusha-shahid" id="card-anusha-shahid">
                    <div class="kb24a-avatar-wrap">
                        <img src="assets/img/KB24ArtistsList/Anusha_Khwaja-300x300.webp" alt="Anusha Khawajah Shahid" class="kb24a-avatar" loading="lazy">
                        <div class="kb24a-card-overlay">
                            <span class="kb24a-view-details"><i class="fas fa-eye me-2"></i>View Artist</span>
                        </div>
                    </div>
                    <div class="kb24a-card-body">
                        <span class="kb24a-card-country">Pakistan <span class="kb24a-badge-prize">Prize Winner</span></span>
                        <h4 class="kb24a-artist-name">Anusha Khawajah Shahid</h4>
                        <p class="kb24a-card-artwork">Hawah's Garden: Threads of Nature</p>
                    </div>
                </div>

                <!-- 3. Asif Khan -->
                <div class="kb24a-card" data-country-type="pakistan" data-id="asif-khan" id="card-asif-khan">
                    <div class="kb24a-avatar-wrap">
                        <img src="assets/img/KB24ArtistsList/Asif_Khan-300x300.webp" alt="Asif Khan" class="kb24a-avatar" loading="lazy">
                        <div class="kb24a-card-overlay">
                            <span class="kb24a-view-details"><i class="fas fa-eye me-2"></i>View Artist</span>
                        </div>
                    </div>
                    <div class="kb24a-card-body">
                        <span class="kb24a-card-country">Pakistan</span>
                        <h4 class="kb24a-artist-name">Asif Khan</h4>
                        <p class="kb24a-card-artwork">Once Upon a Landscape 1 & 2</p>
                    </div>
                </div>

                <!-- 4. Ayesha Jatoi -->
                <div class="kb24a-card" data-country-type="pakistan" data-id="ayesha-jatoi" id="card-ayesha-jatoi">
                    <div class="kb24a-avatar-wrap">
                        <img src="assets/img/KB24ArtistsList/Ayesha_Jatoi-300x300.webp" alt="Ayesha Jatoi" class="kb24a-avatar" loading="lazy">
                        <div class="kb24a-card-overlay">
                            <span class="kb24a-view-details"><i class="fas fa-eye me-2"></i>View Artist</span>
                        </div>
                    </div>
                    <div class="kb24a-card-body">
                        <span class="kb24a-card-country">Pakistan (Lahore)</span>
                        <h4 class="kb24a-artist-name">Ayesha Jatoi</h4>
                        <p class="kb24a-card-artwork">Flesh & Blood</p>
                    </div>
                </div>

                <!-- 5. Becca Voelcker -->
                <div class="kb24a-card" data-country-type="international" data-id="becca-voelcker" id="card-becca-voelcker">
                    <div class="kb24a-avatar-wrap">
                        <img src="assets/img/KB24ArtistsList/Becca_Voelcker-300x300.webp" alt="Becca Voelcker" class="kb24a-avatar" loading="lazy">
                        <div class="kb24a-card-overlay">
                            <span class="kb24a-view-details"><i class="fas fa-eye me-2"></i>View Artist</span>
                        </div>
                    </div>
                    <div class="kb24a-card-body">
                        <span class="kb24a-card-country">United Kingdom</span>
                        <h4 class="kb24a-artist-name">Becca Voelcker</h4>
                        <p class="kb24a-card-artwork">Growing Food & Film</p>
                    </div>
                </div>

                <!-- 6. Bita Razavi -->
                <div class="kb24a-card" data-country-type="international" data-id="bita-razavi" id="card-bita-razavi">
                    <div class="kb24a-avatar-wrap">
                        <img src="assets/img/KB24ArtistsList/Bita_Razavi-300x300.webp" alt="Bita Razavi" class="kb24a-avatar" loading="lazy">
                        <div class="kb24a-card-overlay">
                            <span class="kb24a-view-details"><i class="fas fa-eye me-2"></i>View Artist</span>
                        </div>
                    </div>
                    <div class="kb24a-card-body">
                        <span class="kb24a-card-country">Iran / Finland</span>
                        <h4 class="kb24a-artist-name">Bita Razavi</h4>
                        <p class="kb24a-card-artwork">Bita's Dowry, 2015</p>
                    </div>
                </div>

                <!-- 7. Christer Lundahl & Martina Seitl -->
                <div class="kb24a-card" data-country-type="international" data-id="lundahl-seitl" id="card-lundahl-seitl">
                    <div class="kb24a-avatar-wrap">
                        <img src="assets/img/KB24ArtistsList/Christer-Lundahl-Martina-Seitl-300x300.webp" alt="Christer Lundahl & Martina Seitl" class="kb24a-avatar" loading="lazy">
                        <div class="kb24a-card-overlay">
                            <span class="kb24a-view-details"><i class="fas fa-eye me-2"></i>View Artist</span>
                        </div>
                    </div>
                    <div class="kb24a-card-body">
                        <span class="kb24a-card-country">Sweden</span>
                        <h4 class="kb24a-artist-name">Christer Lundahl & Martina Seitl</h4>
                        <p class="kb24a-card-artwork">River Biographies</p>
                    </div>
                </div>

                <!-- 8. Daniela Zambrano Almidón -->
                <div class="kb24a-card" data-country-type="international" data-id="daniela-zambrano" id="card-daniela-zambrano">
                    <div class="kb24a-avatar-wrap">
                        <img src="assets/img/KB24ArtistsList/Danielle-300x300.webp" alt="Daniela Zambrano Almidón" class="kb24a-avatar" loading="lazy">
                        <div class="kb24a-card-overlay">
                            <span class="kb24a-view-details"><i class="fas fa-eye me-2"></i>View Artist</span>
                        </div>
                    </div>
                    <div class="kb24a-card-body">
                        <span class="kb24a-card-country">Peru / Germany</span>
                        <h4 class="kb24a-artist-name">Daniela Zambrano Almidón</h4>
                        <p class="kb24a-card-artwork">Colonial History of Potatoes</p>
                    </div>
                </div>

                <!-- 9. Eliana Otta -->
                <div class="kb24a-card" data-country-type="international" data-id="eliana-otta" id="card-eliana-otta">
                    <div class="kb24a-avatar-wrap">
                        <img src="assets/img/KB24ArtistsList/Eilana_Otta-300x300.webp" alt="Eliana Otta" class="kb24a-avatar" loading="lazy">
                        <div class="kb24a-card-overlay">
                            <span class="kb24a-view-details"><i class="fas fa-eye me-2"></i>View Artist</span>
                        </div>
                    </div>
                    <div class="kb24a-card-body">
                        <span class="kb24a-card-country">Peru / Austria</span>
                        <h4 class="kb24a-artist-name">Eliana Otta</h4>
                        <p class="kb24a-card-artwork">Payment to Land</p>
                    </div>
                </div>

                <!-- 10. Enora Lalet -->
                <div class="kb24a-card" data-country-type="international" data-id="enora-lalet" id="card-enora-lalet">
                    <div class="kb24a-avatar-wrap">
                        <img src="assets/img/KB24ArtistsList/Enora_Lalet-300x300.webp" alt="Enora Lalet" class="kb24a-avatar" loading="lazy">
                        <div class="kb24a-card-overlay">
                            <span class="kb24a-view-details"><i class="fas fa-eye me-2"></i>View Artist</span>
                        </div>
                    </div>
                    <div class="kb24a-card-body">
                        <span class="kb24a-card-country">France</span>
                        <h4 class="kb24a-artist-name">Enora Lalet</h4>
                        <p class="kb24a-card-artwork">Vanishing Creature</p>
                    </div>
                </div>

                <!-- 11. Farida Batool -->
                <div class="kb24a-card" data-country-type="pakistan" data-id="farida-batool" id="card-farida-batool">
                    <div class="kb24a-avatar-wrap">
                        <img src="assets/img/KB24ArtistsList/farida-300x300.webp" alt="Farida Batool" class="kb24a-avatar" loading="lazy">
                        <div class="kb24a-card-overlay">
                            <span class="kb24a-view-details"><i class="fas fa-eye me-2"></i>View Artist</span>
                        </div>
                    </div>
                    <div class="kb24a-card-body">
                        <span class="kb24a-card-country">Pakistan</span>
                        <h4 class="kb24a-artist-name">Farida Batool</h4>
                        <p class="kb24a-card-artwork">Daney Pe Likha Hai</p>
                    </div>
                </div>

                <!-- 12. Fazal Rizvi et al. -->
                <div class="kb24a-card" data-country-type="pakistan" data-id="fazal-rizvi" id="card-fazal-rizvi">
                    <div class="kb24a-avatar-wrap">
                        <img src="assets/img/KB24ArtistsList/fazal-rizvi-300x300.webp" alt="Fazal Rizvi & Team" class="kb24a-avatar" loading="lazy">
                        <div class="kb24a-card-overlay">
                            <span class="kb24a-view-details"><i class="fas fa-eye me-2"></i>View Artist</span>
                        </div>
                    </div>
                    <div class="kb24a-card-body">
                        <span class="kb24a-card-country">Pakistan</span>
                        <h4 class="kb24a-artist-name">Fazal Rizvi & Collective</h4>
                        <p class="kb24a-card-artwork">The Table – Mahigeer aur Hum</p>
                    </div>
                </div>

                <!-- 13. Ghita Skali & Salim Byari -->
                <div class="kb24a-card" data-country-type="international" data-id="skali-byari" id="card-skali-byari">
                    <div class="kb24a-avatar-wrap">
                        <img src="assets/img/KB24ArtistsList/ghita-Skali-Salim-Byari-300x300.webp" alt="Ghita Skali & Salim Byari" class="kb24a-avatar" loading="lazy">
                        <div class="kb24a-card-overlay">
                            <span class="kb24a-view-details"><i class="fas fa-eye me-2"></i>View Artist</span>
                        </div>
                    </div>
                    <div class="kb24a-card-body">
                        <span class="kb24a-card-country">Morocco / Netherlands</span>
                        <h4 class="kb24a-artist-name">Ghita Skali & Salim Byari</h4>
                        <p class="kb24a-card-artwork">Sunflower Seed Project</p>
                    </div>
                </div>

                <!-- 14. Imran Ahmad Khan -->
                <div class="kb24a-card" data-country-type="pakistan" data-id="imran-ahmad-khan" id="card-imran-ahmad-khan">
                    <div class="kb24a-avatar-wrap">
                        <img src="assets/img/KB24ArtistsList/Imran_Ahmed_Khan-300x300.webp" alt="Imran Ahmad Khan" class="kb24a-avatar" loading="lazy">
                        <div class="kb24a-card-overlay">
                            <span class="kb24a-view-details"><i class="fas fa-eye me-2"></i>View Artist</span>
                        </div>
                    </div>
                    <div class="kb24a-card-body">
                        <span class="kb24a-card-country">Pakistan</span>
                        <h4 class="kb24a-artist-name">Imran Ahmad Khan</h4>
                        <p class="kb24a-card-artwork">Mṛttikā</p>
                    </div>
                </div>

                <!-- 15. Karolina Brzuzan -->
                <div class="kb24a-card" data-country-type="international" data-id="karolina-brzuzan" id="card-karolina-brzuzan">
                    <div class="kb24a-avatar-wrap">
                        <img src="assets/img/KB24ArtistsList/Karolina_Brzuzan-300x300.webp" alt="Karolina Brzuzan" class="kb24a-avatar" loading="lazy">
                        <div class="kb24a-card-overlay">
                            <span class="kb24a-view-details"><i class="fas fa-eye me-2"></i>View Artist</span>
                        </div>
                    </div>
                    <div class="kb24a-card-body">
                        <span class="kb24a-card-country">Poland</span>
                        <h4 class="kb24a-artist-name">Karolina Brzuzan</h4>
                        <p class="kb24a-card-artwork">Nofood – Starvation Cookbook</p>
                    </div>
                </div>

                <!-- 16. Khushboo -->
                <div class="kb24a-card" data-country-type="pakistan" data-id="khushboo" id="card-khushboo">
                    <div class="kb24a-avatar-wrap">
                        <img src="assets/img/KB24ArtistsList/khushbo-300x300.webp" alt="Khushboo" class="kb24a-avatar" loading="lazy">
                        <div class="kb24a-card-overlay">
                            <span class="kb24a-view-details"><i class="fas fa-eye me-2"></i>View Artist</span>
                        </div>
                    </div>
                    <div class="kb24a-card-body">
                        <span class="kb24a-card-country">Pakistan</span>
                        <h4 class="kb24a-artist-name">Khushboo</h4>
                        <p class="kb24a-card-artwork">Fading Heave</p>
                    </div>
                </div>

                <!-- 17. Lina Persson -->
                <div class="kb24a-card" data-country-type="international" data-id="lina-persson" id="card-lina-persson">
                    <div class="kb24a-avatar-wrap">
                        <img src="assets/img/KB24ArtistsList/lina_perrson-300x300.webp" alt="Lina Persson" class="kb24a-avatar" loading="lazy">
                        <div class="kb24a-card-overlay">
                            <span class="kb24a-view-details"><i class="fas fa-eye me-2"></i>View Artist</span>
                        </div>
                    </div>
                    <div class="kb24a-card-body">
                        <span class="kb24a-card-country">Sweden</span>
                        <h4 class="kb24a-artist-name">Lina Persson</h4>
                        <p class="kb24a-card-artwork">Marigold Resonance</p>
                    </div>
                </div>

                <!-- 18. Luis Carlos Tovar -->
                <div class="kb24a-card" data-country-type="international" data-id="luis-carlos-tovar" id="card-luis-carlos-tovar">
                    <div class="kb24a-avatar-wrap">
                        <img src="assets/img/KB24ArtistsList/Luis_Carlos-300x300.webp" alt="Luis Carlos Tovar" class="kb24a-avatar" loading="lazy">
                        <div class="kb24a-card-overlay">
                            <span class="kb24a-view-details"><i class="fas fa-eye me-2"></i>View Artist</span>
                        </div>
                    </div>
                    <div class="kb24a-card-body">
                        <span class="kb24a-card-country">Colombia</span>
                        <h4 class="kb24a-artist-name">Luis Carlos Tovar</h4>
                        <p class="kb24a-card-artwork">Coal Portraits</p>
                    </div>
                </div>

                <!-- 19. Mahreen Zuberi -->
                <div class="kb24a-card" data-country-type="pakistan" data-id="mahreen-zuberi" id="card-mahreen-zuberi">
                    <div class="kb24a-avatar-wrap">
                        <img src="assets/img/KB24ArtistsList/Mehreen_Zuberi-300x300.webp" alt="Mahreen Zuberi" class="kb24a-avatar" loading="lazy">
                        <div class="kb24a-card-overlay">
                            <span class="kb24a-view-details"><i class="fas fa-eye me-2"></i>View Artist</span>
                        </div>
                    </div>
                    <div class="kb24a-card-body">
                        <span class="kb24a-card-country">Pakistan</span>
                        <h4 class="kb24a-artist-name">Mahreen Zuberi</h4>
                        <p class="kb24a-card-artwork">In Proportions</p>
                    </div>
                </div>

                <!-- 20. Marlene Hausegger & Hannes Zebedin -->
                <div class="kb24a-card" data-country-type="international" data-id="hausegger-zebedin" id="card-hausegger-zebedin">
                    <div class="kb24a-avatar-wrap">
                        <img src="assets/img/KB24ArtistsList/marlene-300x300.webp" alt="Marlene Hausegger & Hannes Zebedin" class="kb24a-avatar" loading="lazy">
                        <div class="kb24a-card-overlay">
                            <span class="kb24a-view-details"><i class="fas fa-eye me-2"></i>View Artist</span>
                        </div>
                    </div>
                    <div class="kb24a-card-body">
                        <span class="kb24a-card-country">Austria</span>
                        <h4 class="kb24a-artist-name">Marlene Hausegger & Hannes Zebedin</h4>
                        <p class="kb24a-card-artwork">Cooking Oil Project</p>
                    </div>
                </div>

                <!-- 21. Monika Emmanuelle Kazi -->
                <div class="kb24a-card" data-country-type="international" data-id="monika-kazi" id="card-monika-kazi">
                    <div class="kb24a-avatar-wrap">
                        <img src="assets/img/KB24ArtistsList/Monika-Emmanuelle-Kazi-300x300.webp" alt="Monika Emmanuelle Kazi" class="kb24a-avatar" loading="lazy">
                        <div class="kb24a-card-overlay">
                            <span class="kb24a-view-details"><i class="fas fa-eye me-2"></i>View Artist</span>
                        </div>
                    </div>
                    <div class="kb24a-card-body">
                        <span class="kb24a-card-country">France / Switzerland</span>
                        <h4 class="kb24a-artist-name">Monika Emmanuelle Kazi</h4>
                        <p class="kb24a-card-artwork">A Home Care – machine learning</p>
                    </div>
                </div>

                <!-- 22. Müge Yilmaz -->
                <div class="kb24a-card" data-country-type="international" data-id="muge-yilmaz" id="card-muge-yilmaz">
                    <div class="kb24a-avatar-wrap">
                        <img src="assets/img/KB24ArtistsList/Muge_Yilmaz-300x300.webp" alt="Müge Yilmaz" class="kb24a-avatar" loading="lazy">
                        <div class="kb24a-card-overlay">
                            <span class="kb24a-view-details"><i class="fas fa-eye me-2"></i>View Artist</span>
                        </div>
                    </div>
                    <div class="kb24a-card-body">
                        <span class="kb24a-card-country">Turkey / Netherlands</span>
                        <h4 class="kb24a-artist-name">Müge Yilmaz</h4>
                        <p class="kb24a-card-artwork">Three Hundred Sisters</p>
                    </div>
                </div>

                <!-- 23. Nabiha Khan -->
                <div class="kb24a-card" data-country-type="pakistan" data-id="nabiha-khan" id="card-nabiha-khan">
                    <div class="kb24a-avatar-wrap">
                        <img src="assets/img/KB24ArtistsList/Nabiha_Khan-300x300.webp" alt="Nabiha Khan" class="kb24a-avatar" loading="lazy">
                        <div class="kb24a-card-overlay">
                            <span class="kb24a-view-details"><i class="fas fa-eye me-2"></i>View Artist</span>
                        </div>
                    </div>
                    <div class="kb24a-card-body">
                        <span class="kb24a-card-country">Pakistan</span>
                        <h4 class="kb24a-artist-name">Nabiha Khan</h4>
                        <p class="kb24a-card-artwork">Spice-Unscape</p>
                    </div>
                </div>

                <!-- 24. Nadeem Alkarimi -->
                <div class="kb24a-card" data-country-type="pakistan" data-id="nadeem-alkarimi" id="card-nadeem-alkarimi">
                    <div class="kb24a-avatar-wrap">
                        <img src="assets/img/KB24ArtistsList/Nadeem-Al-Karimi-300x300.webp" alt="Nadeem Alkarimi" class="kb24a-avatar" loading="lazy">
                        <div class="kb24a-card-overlay">
                            <span class="kb24a-view-details"><i class="fas fa-eye me-2"></i>View Artist</span>
                        </div>
                    </div>
                    <div class="kb24a-card-body">
                        <span class="kb24a-card-country">Pakistan</span>
                        <h4 class="kb24a-artist-name">Nadeem Alkarimi</h4>
                        <p class="kb24a-card-artwork">The Last Act / Dismantling Life</p>
                    </div>
                </div>

                <!-- 25. Naiza Khan -->
                <div class="kb24a-card" data-country-type="pakistan" data-id="naiza-khan" id="card-naiza-khan">
                    <div class="kb24a-avatar-wrap">
                        <img src="assets/img/KB24ArtistsList/Naiza_Khan-300x300.webp" alt="Naiza Khan" class="kb24a-avatar" loading="lazy">
                        <div class="kb24a-card-overlay">
                            <span class="kb24a-view-details"><i class="fas fa-eye me-2"></i>View Artist</span>
                        </div>
                    </div>
                    <div class="kb24a-card-body">
                        <span class="kb24a-card-country">UK / Pakistan</span>
                        <h4 class="kb24a-artist-name">Naiza Khan</h4>
                        <p class="kb24a-card-artwork">The Streets are Rising</p>
                    </div>
                </div>

                <!-- 26. Paloma Ayala -->
                <div class="kb24a-card" data-country-type="international" data-id="paloma-ayala" id="card-paloma-ayala">
                    <div class="kb24a-avatar-wrap">
                        <img src="assets/img/KB24ArtistsList/Paloma-Ayala-300x300.webp" alt="Paloma Ayala" class="kb24a-avatar" loading="lazy">
                        <div class="kb24a-card-overlay">
                            <span class="kb24a-view-details"><i class="fas fa-eye me-2"></i>View Artist</span>
                        </div>
                    </div>
                    <div class="kb24a-card-body">
                        <span class="kb24a-card-country">Switzerland</span>
                        <h4 class="kb24a-artist-name">Paloma Ayala</h4>
                        <p class="kb24a-card-artwork">Que no me quiten ni la tongue ni las patas</p>
                    </div>
                </div>

                <!-- 27. Qadir Jhatial -->
                <div class="kb24a-card" data-country-type="pakistan" data-id="qadir-jhatial" id="card-qadir-jhatial">
                    <div class="kb24a-avatar-wrap">
                        <img src="assets/img/KB24ArtistsList/Qadir_Jhatial-300x300.webp" alt="Qadir Jhatial" class="kb24a-avatar" loading="lazy">
                        <div class="kb24a-card-overlay">
                            <span class="kb24a-view-details"><i class="fas fa-eye me-2"></i>View Artist</span>
                        </div>
                    </div>
                    <div class="kb24a-card-body">
                        <span class="kb24a-card-country">Pakistan</span>
                        <h4 class="kb24a-artist-name">Qadir Jhatial</h4>
                        <p class="kb24a-card-artwork">Boat</p>
                    </div>
                </div>

                <!-- 28. Sadqain Raza (Sadqain) -->
                <div class="kb24a-card" data-country-type="pakistan" data-id="sadqain-raza" id="card-sadqain-raza">
                    <div class="kb24a-avatar-wrap">
                        <img src="assets/img/KB24ArtistsList/Sadeqain-300x300.webp" alt="Sadqain Raza" class="kb24a-avatar" loading="lazy">
                        <div class="kb24a-card-overlay">
                            <span class="kb24a-view-details"><i class="fas fa-eye me-2"></i>View Artist</span>
                        </div>
                    </div>
                    <div class="kb24a-card-body">
                        <span class="kb24a-card-country">Pakistan</span>
                        <h4 class="kb24a-artist-name">Sadqain Raza (Sadqain)</h4>
                        <p class="kb24a-card-artwork">Water Spill and Nala</p>
                    </div>
                </div>

                <!-- 29. Sepideh Rahaa -->
                <div class="kb24a-card" data-country-type="international" data-id="sepideh-rahaa" id="card-sepideh-rahaa">
                    <div class="kb24a-avatar-wrap">
                        <img src="assets/img/KB24ArtistsList/Sepideh-Rahaa-300x300.webp" alt="Sepideh Rahaa" class="kb24a-avatar" loading="lazy">
                        <div class="kb24a-card-overlay">
                            <span class="kb24a-view-details"><i class="fas fa-eye me-2"></i>View Artist</span>
                        </div>
                    </div>
                    <div class="kb24a-card-body">
                        <span class="kb24a-card-country">Finland / Iran</span>
                        <h4 class="kb24a-artist-name">Sepideh Rahaa</h4>
                        <p class="kb24a-card-artwork">Songs to Earth, Songs to Seeds</p>
                    </div>
                </div>

                <!-- 30. Tamasha Collective -->
                <div class="kb24a-card" data-country-type="international" data-id="tamasha-collective" id="card-tamasha-collective">
                    <div class="kb24a-avatar-wrap">
                        <img src="assets/img/KB24ArtistsList/tamasha-collective-300x300.webp" alt="Tamasha Collective" class="kb24a-avatar" loading="lazy">
                        <div class="kb24a-card-overlay">
                            <span class="kb24a-view-details"><i class="fas fa-eye me-2"></i>View Artist</span>
                        </div>
                    </div>
                    <div class="kb24a-card-body">
                        <span class="kb24a-card-country">Pakistan / India / USA</span>
                        <h4 class="kb24a-artist-name">Tamasha Collective</h4>
                        <p class="kb24a-card-artwork">Glorious Hotel</p>
                    </div>
                </div>

                <!-- 31. Tino Sehgal -->
                <div class="kb24a-card" data-country-type="international" data-id="tino-sehgal" id="card-tino-sehgal">
                    <div class="kb24a-avatar-wrap">
                        <img src="assets/img/KB24ArtistsList/tino_sehgal-300x300.webp" alt="Tino Sehgal" class="kb24a-avatar" loading="lazy">
                        <div class="kb24a-card-overlay">
                            <span class="kb24a-view-details"><i class="fas fa-eye me-2"></i>View Artist</span>
                        </div>
                    </div>
                    <div class="kb24a-card-body">
                        <span class="kb24a-card-country">Germany / UK</span>
                        <h4 class="kb24a-artist-name">Tino Sehgal</h4>
                        <p class="kb24a-card-artwork">Yet Untitled</p>
                    </div>
                </div>

            </div>
        </section>

    </div>
</div>


<!-- Phone/Email Bottom Widget (Consistent across subpages) -->
<footer class="kb24a-footer-contact">
    <div class="container text-center">
        <p class="mb-2"><i class="fas fa-phone-alt me-2 text-gold"></i> Phone: <strong>+92 21 35157566</strong></p>
        <p class="mb-0"><i class="fas fa-envelope me-2 text-gold"></i> Email: <strong>info@karachibiennale.org.pk</strong></p>
    </div>
</footer>

<script>
// JSON Data store for all artists
const ARTISTS_DATA = {
    "anna-konik": {
        name: "Anna Konik",
        country: "Poland",
        bio: "Anna Konik is an interdisciplinary audio-visual artist whose work centers on human experience and relationships. Her artistic practice explores memory, retrospection, emotions, and intuition through encounters with contemporary migrants and marginalized individuals.",
        artwork: "A Song of Humble Beauty",
        medium: "Site-specific installation with film essay",
        desc: "For generations, communities in Sindh have lived their lives to the rhythm of the Indus, cultivating the land or manufacturing handicrafts. Their work is a story of a complex coexistence of people, animals and culture—a coexistence subjected to difficult tests by climate change, as well as by neo-colonial and neo-imperial policies with a huge impact on the production and transportation of food. In her work, Konik observes artisans of Karachi, Hala, Bhit Shah, District Tando Allahyar, and Mirpurkhas as a tribute to the unique local applied arts, the 'disappearing' crafts, and the value of work as a fundamental right of every human being.",
        website: "http://www.annakonik.art.pl",
        img: "assets/img/KB24ArtistsList/Anna_Konik-300x300.webp"
    },
    "anusha-shahid": {
        name: "Anusha Khawajah Shahid",
        country: "Pakistan",
        prize: "Recipient of the KB24 EBM Emerging Artist Prize",
        bio: "Lahore-based visual artist, Anusha Khawajah Shahid is a recent graduate of NCA.",
        artwork: "Hawah's Garden: Threads of Nature",
        medium: "Charpai (traditional bed), pottery, wood, mixed grains and water",
        desc: "The work integrates symbolism and communal themes, using the idea of a Charpai, a traditional bed woven by hand by women of South Asian communities. Beyond being an item of everyday usage, the Charpai is a symbol of cultural traditions of collectivity. A group of Charpais forms a Baithak—a shared space where people come together—signifying a powerful metaphor for unity and strength, both within families and the broader community. Inviting the public to interact with the weaving process reinforces the aspect of 'togetherness,' which is something women do to bring family members together. This blend of physical structure, visual symbolism, and interactive engagement offers a compelling exploration of community, tradition, and the essential role of women in sustaining these practices. The installation also brings color into Bagh Ibne Qasim, highlighting Iqbal's famous verse: \"vajūd-e-zan se hai tasvīr-e-kā.enāt meñ rang. Isī ke saaz se hai zindagī kā soz-e-darūñ,\" which celebrates how the existence and efforts of women bring color to the world.",
        img: "assets/img/KB24ArtistsList/Anusha_Khwaja-300x300.webp"
    },
    "asif-khan": {
        name: "Asif Khan",
        country: "Pakistan",
        bio: "Asif Khan is a multimedia artist and art educator with interests in the merger of digital and analogue imagery. His work is inspired by the cultural landscape of Lahore.",
        artwork: "Once Upon a Landscape 1; Once Upon a Landscape 2; Cloud",
        medium: "Single channel video, 4:25 min; Single channel video, 5:25 min; Digital copy of cyanotype prints",
        desc: "This video presents an aerial view of the effects of climate change and urbanization on the agricultural landscape of Punjab. Documented by a drone camera, the work considers the impact of social consequences on food security and its broader implications for human rights in Pakistan.",
        website: "http://www.asifkhan.com",
        img: "assets/img/KB24ArtistsList/Asif_Khan-300x300.webp"
    },
    "ayesha-jatoi": {
        name: "Ayesha Jatoi",
        country: "Pakistan, Lahore",
        bio: "Ayesha Jatoi (b. 1979) is a trained miniature painter and photographer. Her practice explores the relationship between image, text, and space in traditional manuscripts.",
        artwork: "Flesh & Blood",
        medium: "Installation with steel bowls and plates filled with red liquid and found rubble",
        desc: "This installation of 62 steel plates and bowls is filled with a blood-like liquid and rubble and placed in an unsuspecting location with people passing by. Interspersed with images of influencers scrolled through our social media, the work serves as an eerie reminder of the realities of the Gaza genocide.",
        website: "https://www.ayesha-jatoi.com/",
        img: "assets/img/KB24ArtistsList/Ayesha_Jatoi-300x300.webp"
    },
    "becca-voelcker": {
        name: "Becca Voelcker",
        country: "United Kingdom",
        bio: "Becca Voelcker is a film historian and cultural critic who writes on film, art, and visual culture through political and ecological themes.",
        artwork: "Growing Food & Film",
        medium: "Sound installation, 10 minutes",
        desc: "This experimental essay journeys into little-known archives of farming collectives in 1970s Japan and Mali. The narration and photographs document unusual experiments in sustainable food production and testify to their makers' understanding of land and social justice.",
        website: "https://www.beccavoelcker.com",
        img: "assets/img/KB24ArtistsList/Becca_Voelcker-300x300.webp"
    },
    "bita-razavi": {
        name: "Bita Razavi",
        country: "Iran / Finland",
        bio: "Bita Razavi (b. 1983) lives between Helsinki and Mahu, Estonia. Her practice centers on observations and reflections on everyday situations and is highly influenced by her location. She examines the inner workings of social systems in relation to socio-political structures and national events of historic proportions in various countries.",
        artwork: "Bita's Dowry, 2015",
        medium: "Photographs and sound",
        desc: "The series features objects that Bita's Iranian grandmother collected for her dowry. Most were bought during her childhood, which coincided with the Iran-Iraq war. The project reflects on the common attitude of gathering and saving for the future in the generation that experienced the war, alongside the past generation's ideas of marriage and the significance of a dowry. The accompanying audio recording features her grandmother's descriptions of the items and reasons for including them in her collection.",
        img: "assets/img/KB24ArtistsList/Bita_Razavi-300x300.webp"
    },
    "lundahl-seitl": {
        name: "Christer Lundahl & Martina Seitl",
        country: "Sweden",
        bio: "The duo of Christer Lundahl and Martina Seitl have developed a research-based method comprising staging, choreographed movement, instructions, and immersive technologies, juxtaposed with material objects and the human ability to organize perception.",
        artwork: "River Biographies / That Which Is Not You but of Which You are a Part",
        medium: "Installation: river, stone; Performance",
        desc: "The installation allows visitors to explore the relationships between natural elements that form a river. Half the visitors wear sightless goggles and are led by the other half, who are guided by a voice in their headphones. By embodying qualities of water and stone, and extending their sensory experience into another body, visitors engage in building relations of trust with each other.",
        website: "http://www.lundahl-seitl.com/",
        img: "assets/img/KB24ArtistsList/Christer-Lundahl-Martina-Seitl-300x300.webp"
    },
    "daniela-zambrano": {
        name: "Daniela Zambrano Almidón",
        country: "Peru / Germany",
        bio: "Daniela is a Peruvian researcher and Quechua artist based in Berlin. She conducts art workshops, decolonial literature, and artistic mediation, and co-organizes cultural events in Berlin through the Peruvian intercultural center 'Todas las Sangres,' in cooperation with the Forum of Colonialism and Resistance – BARAZANI Berlin.",
        artwork: "Colonial History of Potatoes",
        medium: "Monumental 20-meter-long painting, sculptural installation, sound and performance",
        desc: "Colonial History of the Potato(es) is an interdisciplinary artwork exploring the profound transformations in food production and consumption that emerged with the 'discovery of the Americas.' The work delves into the intersections of history, culture, and food. The potato, now ubiquitous in Europe, was not always part of its cuisine. Native to the Andes, it arrived in Europe via colonial trade routes. Today, it travels in the opposite direction, becoming a symbol of a (post)colonial and extractivist food system. Through the story of the potato, the artwork highlights the complex relationship between colonization and food, inviting us to question our own consumption habits.",
        website: "https://danielazambranoalmidon.wordpress.com/",
        img: "assets/img/KB24ArtistsList/Danielle-300x300.webp"
    },
    "eliana-otta": {
        name: "Eliana Otta",
        country: "Peru / Austria",
        bio: "Eliana Otta Vildoso (b. 1981) is a Peruvian artist and curator working with themes in ecology, labor, and gender inequality through a feminist, poetic, and political lens.",
        artwork: "Payment to Land",
        medium: "Mixed technique sculptures with household materials – thread, cloth, shoes, seeds",
        desc: "This work addresses the challenges of food insecurity brought on by climate change and economic crises. Protest banners linked with images of agricultural products common to Pakistan and Peru are mounted in workers' shoes. Grains and herbs are laid on the ground as a reference to a traditional Peruvian practice of making offerings to the soil.",
        website: "https://eliana-otta.com/",
        img: "assets/img/KB24ArtistsList/Eilana_Otta-300x300.webp"
    },
    "enora-lalet": {
        name: "Enora Lalet",
        country: "France",
        bio: "Enora Lalet (b. 1986) is a French food artist whose creations are inspired by her travels and diverse cultures.",
        artwork: "Vanishing Creature (Performance) | Food Portraits (Food Art)",
        medium: "Performance, Food Portraits",
        desc: "Enora Lalet creates 'Food Portraits,' blending traditional knowledge, identity, and gastronomy. Her work uses organic matter to challenge food beliefs and societal conditioning, exploring contradictions, fears, values, and vices. Her performance The Vanish Creature straddles the line between the imaginary and material world, confronting deep human themes. Drawing from her training in Arts and Anthropology and global travels, Lalet's art connects diverse cultures.",
        website: "https://www.enoralalet.com/",
        img: "assets/img/KB24ArtistsList/Enora_Lalet-300x300.webp"
    },
    "farida-batool": {
        name: "Farida Batool",
        country: "Pakistan",
        bio: "Farida Batool (b. 1970) is a visual artist interested in politics and history. She is an active member of the Awami Art Collective.",
        artwork: "Daney Pe Likha Hai",
        medium: "Sculpture, iron barbed wire, sound and projection",
        desc: "This installation addresses the ethics and politics of modern wheat cultivation and its impacts on consumption methods. The sculpture of a wheat field accompanies a video and sound installation exploring the role of women in preserving culinary traditions amid threats to food security in Pakistan and Gaza.",
        website: "https://faridabatool.com/",
        img: "assets/img/KB24ArtistsList/farida-300x300.webp"
    },
    "fazal-rizvi": {
        name: "Fazal Rizvi & Collective",
        country: "Pakistan",
        bio: "Fazal Rizvi (b. 1987) is an interdisciplinary artist based in Karachi and Hunza. Shabbir Mohammed is a writer, designer, and visual artist. Ahmer Naqvi is a pop culture writer. Fatima Majeed is an activist fighting for Karachi's indigenous fisherfolk. Luluwa Lokhandwala is a research artist, designer, and illustrator.",
        artwork: "The Table – Mahigeer aur Hum",
        medium: "Table, reclaimed wood from fishing boats; recipes; music, interactive workshop",
        desc: "Together with Fatima Majeed, an activist from the Ibrahim Hyderi Mahigeer community, the artists invite visitors to gather at The Table to witness recipes that are a repository of indigenous coastal culture.",
        img: "assets/img/KB24ArtistsList/fazal-rizvi-300x300.webp"
    },
    "skali-byari": {
        name: "Ghita Skali & Salim Byari",
        country: "Morocco / Netherlands",
        bio: "Salim Bayri is a Morocco-born multimedia visual artist working with sculpture, performance, drawing, coding, tech, and VR. Ghita Skali is a Morocco-born multidisciplinary artist working with installations and interventions.",
        artwork: "Sunflower Seed Project",
        medium: "Sunflower seeds and cooling set-up",
        desc: "This project serves as a new layer to the duo's previous installation Sunflower Seeds are for Birds (2018) and is closely related to the economic replacement of food crops in Pakistan with cash crops. The work contains a soundscape, sculptural roasters, and sunflower seeds available for visitors to assess if seeds can replace food.",
        website: "http://www.salimbayri.com",
        img: "assets/img/KB24ArtistsList/ghita-Skali-Salim-Byari-300x300.webp"
    },
    "imran-ahmad-khan": {
        name: "Imran Ahmad Khan",
        country: "Pakistan",
        bio: "Imran Ahmed Khan (b. 1974) is a Lahore-based visual artist. His practice is inspired by the city's colonial past and tense present, mechanics, crafts, and recycling industries.",
        artwork: "Mṛttikā",
        medium: "Installation with five tandoors (clay ovens); audio installation within tandoors in Punjabi, Urdu, English and Sindhi",
        desc: "Khan's installation invites audiences to consider the connection between food, culture, politics, and humanity. Drawing on Sufi beliefs of having faith in God's provision, the work recreates the local tradition of serving and eating food communally as audiences gather for storytelling and poetry recitals.",
        img: "assets/img/KB24ArtistsList/Imran_Ahmed_Khan-300x300.webp"
    },
    "karolina-brzuzan": {
        name: "Karolina Brzuzan",
        country: "Poland",
        bio: "Karolina Brzuzan (b. 1983) explores the mechanisms governing social life, from the basis of individual and personal experience of history.",
        artwork: "Nofood – Starvation Cookbook",
        medium: "Interactive website and performance",
        desc: "In this project, the artist has reconstructed dishes created for and used in cases of extreme starvation and hunger. Starting from the assumption that the condition of the world is accurately reflected in an empty plate, the work engages with the themes of war, corruption, land grabbing, famine, and genocide through the lived experience of those directly affected. The proposal of nofood – starvation cookbook invites sympathy with what is on the daily menu of millions of people.",
        website: "http://nofood.menu/",
        img: "assets/img/KB24ArtistsList/Karolina_Brzuzan-300x300.webp"
    },
    "khushboo": {
        name: "Khushboo",
        country: "Pakistan",
        bio: "Khushboo is a documentary filmmaker from Gilgit-Baltistan who highlights issues of environment, mental health, and disability faced by inhabitants of her local region.",
        artwork: "Fading Heave",
        medium: "Documentary, 45 min",
        desc: "Khushboo's documentary follows Muhammad Ali, a resident of Morko Valley in Gilgit Baltistan, where the community is facing a food and employment crisis amidst rising temperatures, glacial melt, and disruptions in irrigation channels.",
        img: "assets/img/KB24ArtistsList/khushbo-300x300.webp"
    },
    "lina-persson": {
        name: "Lina Persson",
        country: "Sweden",
        bio: "Lina Persson (b. 1978) is an artistic researcher with an interest in narrative storyworlds and animated worldbuilding. She develops collaborative and transdisciplinary projects exploring sustainable systems.",
        artwork: "Marigold Resonance",
        medium: "Interactive installation; signed contracts, beehive with bees, bee drinking fountains, marigold flowers, sound",
        desc: "This installation is a system where all parts contribute to the vital process of pollination. The visitor is invited to enact the legal agreement that encloses the installation by watering plants, tuning to its relationships, and acknowledging the resonances between us.",
        website: "https://linapersson.se/",
        img: "assets/img/KB24ArtistsList/lina_perrson-300x300.webp"
    },
    "luis-carlos-tovar": {
        name: "Luis Carlos Tovar",
        country: "Colombia",
        bio: "Luis Carlos Tovar (b. 1979) is a Colombian visual artist who circulates between France and Colombia. Through photography, engraving, collage, and video installation, his research interests lie in discontinuous geographies and the notion of post-memory in contemporary art.",
        artwork: "Coal Portraits",
        medium: "Piezo inkjet print on cotton; 4ft x 4ft and video installations; 2:33 min, Color HD Film",
        desc: "This photo essay contains testimonies of residents of four Colombian artisanal fishing communities affected by the local mining conflict. However, the issue of the violation of their rights has been overshadowed by the ecological disaster caused by the miners' activities.",
        img: "assets/img/KB24ArtistsList/Luis_Carlos-300x300.webp"
    },
    "mahreen-zuberi": {
        name: "Mahreen Zuberi",
        country: "Pakistan",
        bio: "Mahreen Zuberi (b. 1981) was trained in miniature painting at the National College of Arts, Lahore. Her work explores issues of gender and identity through a feminist lens.",
        artwork: "In Proportions",
        medium: "Mixed media installation",
        desc: "The artist examines local systems of belief and knowledge through the positioning of the divine rizq against material ideas of food security. The installation encourages audiences to understand the entanglement of the sacred and secular in South Asian culture.",
        img: "assets/img/KB24ArtistsList/Mehreen_Zuberi-300x300.webp"
    },
    "hausegger-zebedin": {
        name: "Marlene Hausegger & Hannes Zebedin",
        country: "Austria",
        bio: "Marlene Hausegger (b. 1984) is a multidisciplinary artist with an interest in social rules and dynamics within public spaces. Hannes Zebedin (b. 1976) is an artist and writer with training in performative sculpture and installation.",
        artwork: "Cooking Oil Project",
        medium: "Installation; Recycled oil cans, bricks, mud, and plants",
        desc: "In this work, a 'pipeline' made from recycled oil cans relates to the dependency on sunflower cooking oil originally imported from Europe. Feed 'islands' are filled with mud from the Indus River and plants from the Indus Valley Civilization. The installation highlights the economic mechanisms regarding global food demand and their impact on indigenous agricultural systems.",
        website: "http://mmhhh.com/",
        img: "assets/img/KB24ArtistsList/marlene-300x300.webp"
    },
    "monika-kazi": {
        name: "Monika Emmanuelle Kazi",
        country: "France / Switzerland",
        bio: "Monika Emmannuelle Kazi (b. 1991) is a multi-disciplinary artist based in Congo and France. Her practice examines connections of body memory with domestic spaces, objects, and architecture.",
        artwork: "A Home Care – machine learning",
        medium: "Installation, performance art. Soil, water, milk powder",
        desc: "Five performers in a 'kitchen' transform water into milk using a Swiss-made milk powder. The producer of the powder has been criticized for low-quality dairy products for children, which are exported specifically to developing countries in West Africa. The work focuses on the kitchen as a place where culture is transmitted through repetition of physical acts.",
        website: "https://philippzollinger.com/artists/32-monika-emmanuelle-kazi",
        img: "assets/img/KB24ArtistsList/Monika-Emmanuelle-Kazi-300x300.webp"
    },
    "muge-yilmaz": {
        name: "Müge Yilmaz",
        country: "Turkey / Netherlands",
        bio: "Muge Yilmaz (b. 1985) is a Turkish & Dutch artist. She envisions speculative narratives inspired by feminist sci-fi which explores contradictions around protection, preservation, and scarcity.",
        artwork: "Three Hundred Sisters",
        medium: "Maize, oak wood sculptures",
        desc: "The artist grows 300 varieties of maize amid oak wood sculptures shaped like corn. The work illustrates the biodiversity of this important food staple and serves as a protest against monoculture cultivation for commercial purposes.",
        website: "http://www.mugeyilmaz.com",
        img: "assets/img/KB24ArtistsList/Muge_Yilmaz-300x300.webp"
    },
    "nabiha-khan": {
        name: "Nabiha Khan",
        country: "Pakistan",
        bio: "Nabiha Khan is a multidisciplinary artist, researcher, and academic based in Lahore.",
        artwork: "Spice-Unscape",
        medium: "Tapestry and spices installation",
        desc: "The artist creates an aromatic narrative that is nostalgic and political through an interplay of top, base, and middle (scent) notes. The material qualities of the tapestry encourage audiences to consider cultural identity, disparities, and hierarchies in society and global trade.",
        img: "assets/img/KB24ArtistsList/Nabiha_Khan-300x300.webp"
    },
    "nadeem-alkarimi": {
        name: "Nadeem Alkarimi",
        country: "Pakistan",
        bio: "Nadeem Alkarimi is an Indigenous filmmaker from the Hunza Valley. He explores disruptions caused by local infrastructural development in the Valley's ecology and culture.",
        artwork: "The Last Act (Film) / Dismantling Life (Installation)",
        medium: "Film, 20 minutes; Dome made from discarded commercial food packaging",
        desc: "Processed staple foods introduced after the construction of the Karakoram Highway have damaged nutrition and cultivation habits of the Hunza people. Alkarimi's film reflects on the detrimental impact of urbanization on the region.",
        website: "https://www.imdb.com/name/nm13864946/",
        img: "assets/img/KB24ArtistsList/Nadeem-Al-Karimi-300x300.webp"
    },
    "naiza-khan": {
        name: "Naiza Khan",
        country: "United Kingdom / Pakistan",
        bio: "Naiza Khan (b. 1968) is a Pakistani artist whose practice centers on research, documentation, and mapping-based exploration. She investigates geography within the context of power, colonial history, and collective memory.",
        artwork: "The Streets are Rising 2013; Kurrachee, Past, Present and Future, 2012-13; Spill, 2016",
        medium: "Painting; Sound installation",
        desc: "The paintings explore the entanglement of bodies of water, landscapes, and infrastructure—both historical and contemporary—weaving issues of land contestation, borders, and the extraction of natural resources. Each work manifests as a multi-layered map, emerging from a practice of walking the city and its environs, and an extensive research process.",
        website: "https://www.naizakhan.com/",
        img: "assets/img/KB24ArtistsList/Naiza_Khan-300x300.webp"
    },
    "paloma-ayala": {
        name: "Paloma Ayala",
        country: "Switzerland",
        bio: "Paloma Ayala (b. 1980) is a Mexican visual artist focused on the connections between human and non-human species, and community care at the US-Mexico border.",
        artwork: "Que no me quiten ni la tongue ni las patas",
        medium: "Film, 28 minutes",
        desc: "The film depicts community norms which the artist's family of agriculturalists will lose when their farmland is developed into a residential area after extensive irrigation and plantation. The work reimagines 'cracks as resistance' to reclaim the family's cultural traditions.",
        website: "http://www.palomaayala.com",
        img: "assets/img/KB24ArtistsList/Paloma-Ayala-300x300.webp"
    },
    "qadir-jhatial": {
        name: "Qadir Jhatial",
        country: "Pakistan",
        bio: "Qadir Jhatial (b. 1986) is a multidisciplinary visual artist based in Lahore.",
        artwork: "Boat",
        medium: "Installation, wooden boat, sand",
        desc: "This installation explores the roles played by boats in the ecosystem of the Sindhu River. As symbols of survival, the boats are vessels that undertake risky journeys in search of sustenance.",
        img: "assets/img/KB24ArtistsList/Qadir_Jhatial-300x300.webp"
    },
    "sadqain-raza": {
        name: "Sadqain Raza (Sadqain)",
        country: "Pakistan",
        bio: "Sadqain (b. 1988) is an art practitioner, educator, and designer based in Lahore. His practice explores complexities of shame, impurity, and memory in relationship to the body under a social and religious context.",
        artwork: "Water Spill and Nala",
        medium: "Installation 1: concrete, water, water pumps; Installation 2: plaster, pigment",
        desc: "The work invites the audience to examine the various meanings of filth and purity using contaminated water spills and water bodies. It also exposes the role played by time, speed, and sensory perception in the making of meaning in various acts.",
        img: "assets/img/KB24ArtistsList/Sadeqain-300x300.webp"
    },
    "sepideh-rahaa": {
        name: "Sepideh Rahaa",
        country: "Finland / Iran",
        bio: "Sepideh Rahaa (b. 1981) is a multidisciplinary artist, researcher, and educator based in Helsinki. Through her practice, she investigates and questions prevailing power structures, social norms, and conventions while focusing on womanhood, storytelling, everyday life, and resistance.",
        artwork: "Songs to Earth, Songs to Seeds",
        medium: "Video Installation, 20 minutes",
        desc: "The artist portrays the poetic but often invisible and inaccessible process of rice cultivation in Mazandaran, Northern Iran. The process, which takes almost a year, is an intergenerational tradition, with knowledge being passed down for over a century through the artist's family. Her visual narrative is intertwined with local songs of daily struggles sung by women during cultivation and harvest, passed down through the female members of the family. The work also highlights neo-colonial food politics and how Iranian farmers are forced by sanctions to use toxic chemical fertilizers, as well as the ongoing environmental crisis—in particular water shortages and soil contamination.",
        website: "https://www.sepidehrahaa.com/",
        img: "assets/img/KB24ArtistsList/Sepideh-Rahaa-300x300.webp"
    },
    "tamasha-collective": {
        name: "Tamasha Collective",
        country: "Pakistan / India / USA",
        bio: "Tamasha Collective comprises diaspora South Asians skilled in miniature painting, photography, film, textile design, printmaking, block printing, singing, music, linguistics, botany, nutrition, and art education. The collective seeks to elevate the diversity and cultural richness of the regions they embody, from ancient times to the present.",
        artwork: "Glorious Hotel",
        medium: "Triptych of videos; Installation with fairy lights, wood, metal, fabric",
        desc: "The Collective artists invite onlookers to a mela-like atmosphere filled with visuals, sounds, and smells leading up to a multi-video installation at the pavilion. The triptych of videos is a meditation on the multitudes of cultures embodied by the collective with a focus on South Asia's foodways.",
        img: "assets/img/KB24ArtistsList/tamasha-collective-300x300.webp"
    },
    "tino-sehgal": {
        name: "Tino Sehgal",
        country: "Germany / UK",
        bio: "Tino Sehgal (b. 1976) is a German Indian artist based in Berlin. He is acclaimed for his undocumented performances involving 'constructed situations'—live encounters between visitors and performers. The fleeting specificity of these encounters is generated through active participation of visitors and lives on in the form of stories owned by those who witness the performances.",
        artwork: "Yet Untitled",
        medium: "Acts of singing, beat boxing, dancing, and meditation",
        desc: "In Yet Untitled, Tino Sehgal selected nine dancers and singers from Karachi, Pakistan, to perform his choreography at the Biennale. The work, set at Frere Hall's main gallery, emphasizes real-time experiences with no documentation, preserving oral tradition and human connection. It explores global insecurity, human pleasure, and Sufi teachings through dance and bodily movement.",
        img: "assets/img/KB24ArtistsList/tino_sehgal-300x300.webp"
    }
};

// Maintain index arrays for carousel navigation
const ARTIST_KEYS = Object.keys(ARTISTS_DATA);
let currentArtistId = "";

let currentFilter = 'all';

function setArtistFilter(filter, button) {
    currentFilter = filter;
    
    // Toggle active state of buttons
    document.querySelectorAll('.kb24a-filter-btn').forEach(btn => {
        btn.classList.remove('active');
    });
    button.classList.add('active');
    
    filterArtists();
}

function filterArtists() {
    const searchVal = document.getElementById('artistSearchInput').value.toLowerCase();
    const cards = document.querySelectorAll('.kb24a-card');
    
    cards.forEach(card => {
        const id = card.getAttribute('data-id');
        const data = ARTISTS_DATA[id];
        const countryType = card.getAttribute('data-country-type');
        
        const matchesSearch = data && (
            data.name.toLowerCase().includes(searchVal) ||
            data.country.toLowerCase().includes(searchVal) ||
            data.artwork.toLowerCase().includes(searchVal)
        );
        
        const matchesFilter = (currentFilter === 'all') || (countryType === currentFilter);
        
        if (matchesSearch && matchesFilter) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
}

// Modal handling
function openArtistModal(id) {
    const data = ARTISTS_DATA[id];
    if (!data) return;
    
    currentArtistId = id;
    window.location.hash = "artist-" + id; // Update routing hash
    
    const content = document.getElementById('artistModalContent');
    let prizeBadge = '';
    if (data.prize) {
        prizeBadge = `<div class="kb24a-modal-prize"><i class="fas fa-trophy me-2"></i> ${data.prize}</div>`;
    }
    
    let websiteButton = '';
    if (data.website) {
        websiteButton = `<a href="${data.website}" target="_blank" class="kb24a-modal-web-btn"><i class="fas fa-external-link-alt me-2"></i> Visit Artist Website</a>`;
    }
    
    content.innerHTML = `
        <div class="row g-4 align-items-start kb24a-modal-inner">
            <div class="col-lg-5 text-center">
                <div class="kb24a-modal-img-wrap">
                    <img src="${data.img}" alt="${data.name}" class="img-fluid kb24a-modal-img">
                </div>
                <div class="mt-3">
                    <button class="btn btn-sm btn-outline-secondary" onclick="copyShareLink('${id}')">
                        <i class="fas fa-share-alt me-2"></i> Share Link
                    </button>
                </div>
            </div>
            <div class="col-lg-7">
                <span class="kb24a-modal-country">${data.country}</span>
                <h2 class="kb24a-modal-artist-name">${data.name}</h2>
                ${prizeBadge}
                
                <h4 class="kb24a-modal-section-title">Biography</h4>
                <p class="kb24a-modal-text">${data.bio}</p>
                
                <div class="kb24a-modal-artwork-box">
                    <h3 class="kb24a-modal-artwork-title">Artwork: <strong>${data.artwork}</strong></h3>
                    <p class="kb24a-modal-medium"><strong>Medium:</strong> ${data.medium}</p>
                    <h4 class="kb24a-modal-section-title mt-3">Concept & Description</h4>
                    <p class="kb24a-modal-text">${data.desc}</p>
                </div>
                
                ${websiteButton}
            </div>
        </div>
    `;
    
    // Bind Keyboard triggers
    document.addEventListener('keydown', handleKeyboardNav);
    
    const backdrop = document.getElementById('artistModalBackdrop');
    const modal = document.getElementById('artistModal');
    
    backdrop.classList.add('active');
    modal.classList.add('active');
    document.body.style.overflow = 'hidden'; // Lock scrolling
    
    // Auto-scroll modal container to top
    modal.scrollTop = 0;
}

function handleKeyboardNav(e) {
    if (e.key === 'Escape') {
        closeArtistModal();
    } else if (e.key === 'ArrowRight') {
        navigateArtist(1);
    } else if (e.key === 'ArrowLeft') {
        navigateArtist(-1);
    }
}

function navigateArtist(direction) {
    if (!currentArtistId) return;
    
    // Find matching keys considering current list filters
    const visibleCards = Array.from(document.querySelectorAll('.kb24a-card'))
                              .filter(card => card.style.display !== 'none');
    
    if (visibleCards.length <= 1) return;
    
    const visibleIds = visibleCards.map(card => card.getAttribute('data-id'));
    let currentIndex = visibleIds.indexOf(currentArtistId);
    
    if (currentIndex === -1) {
        currentIndex = 0;
    }
    
    let nextIndex = currentIndex + direction;
    if (nextIndex >= visibleIds.length) {
        nextIndex = 0;
    } else if (nextIndex < 0) {
        nextIndex = visibleIds.length - 1;
    }
    
    // Apply slide animation effect
    const modal = document.getElementById('artistModal');
    modal.style.opacity = '0.3';
    modal.style.transform = direction > 0 ? 'translateX(20px) scale(0.98)' : 'translateX(-20px) scale(0.98)';
    
    setTimeout(() => {
        openArtistModal(visibleIds[nextIndex]);
        modal.style.opacity = '1';
        modal.style.transform = 'translateX(0) scale(1)';
    }, 150);
}

function closeArtistModal() {
    document.removeEventListener('keydown', handleKeyboardNav);
    const backdrop = document.getElementById('artistModalBackdrop');
    const modal = document.getElementById('artistModal');
    
    backdrop.classList.remove('active');
    modal.classList.remove('active');
    document.body.style.overflow = ''; // Unlock scrolling
    
    // Remove hash routing safely without reloading page
    history.pushState("", document.title, window.location.pathname + window.location.search);
    currentArtistId = "";
}

function copyShareLink(id) {
    const shareUrl = window.location.origin + window.location.pathname + "#artist-" + id;
    navigator.clipboard.writeText(shareUrl).then(() => {
        const toast = document.getElementById('kb24aShareToast');
        toast.classList.add('active');
        setTimeout(() => {
            toast.classList.remove('active');
        }, 2000);
    });
}

// Router hash validation on load
function checkUrlHash() {
    const hash = window.location.hash;
    if (hash && hash.startsWith("#artist-")) {
        const id = hash.replace("#artist-", "");
        if (ARTISTS_DATA[id]) {
            setTimeout(() => {
                openArtistModal(id);
            }, 300);
        }
    }
}

// Attach click event to all cards
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.kb24a-card').forEach(card => {
        card.addEventListener('click', () => {
            const id = card.getAttribute('data-id');
            openArtistModal(id);
        });
    });
    
    checkUrlHash();
});
</script>

<?php include 'components/footer.php'; ?>
