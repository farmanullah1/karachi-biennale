<?php 
  $pageTitle = 'KB22 Participating Artists - Third Karachi Biennale';
  $metaDesc = 'View the 45 participating artists of the Third Karachi Biennale (KB22), exploring the intersection of art and technology under the theme of Collective Imagination.';
  $bodyClass = 'page-kb22-artists-list'; 
  include 'components/header.php'; 
?>

<!-- 1. Page Banner (Full Image Hero) -->
<section class="kb22a-hero-banner-section">
    <div class="kb22a-banner-img-wrap">
        <img src="assets/img/bg/KB-Cover-Web.png" alt="Third Karachi Biennale KB22 Artists Banner" class="kb22a-banner-img">
        <div class="kb22a-banner-overlay"></div>
        <div class="kb22a-banner-text-wrap text-center">
            <h1 class="kb22a-hero-title">Participating Artists</h1>
            <p class="kb22a-hero-subtitle">Third Karachi Biennale KB22</p>
            
            <!-- Breadcrumbs -->
            <nav class="kb22a-breadcrumbs" aria-label="breadcrumb">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li>Past Biennale</li>
                    <li>KB22</li>
                    <li class="active" aria-current="page">Artists</li>
                </ul>
            </nav>
        </div>
    </div>
</section>

<div class="kb22a-main-wrapper">
    <div class="container">
        
        <!-- 2. Featured Artist Profile: Alecia Neo -->
        <section class="kb22a-featured-section">
            <div class="kb22a-section-header">
                <span class="kb22a-featured-label"><i class="fas fa-star me-2"></i>Featured Artist Profile</span>
                <h2 class="kb22a-section-title">Alecia Neo</h2>
            </div>
            
            <div class="kb22a-featured-card">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-center">
                        <div class="kb22a-featured-img-wrap">
                            <img src="assets/img/KB24ArtistsList/alecianeo-scaled.jpg" alt="Alecia Neo - Featured Artist at KB22" class="kb22a-featured-img">
                            <span class="kb22a-country-badge">Singapore</span>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="kb22a-featured-details">
                            <h3 class="kb22a-artwork-title">"Power to the People" (2022)</h3>
                            <p class="kb22a-artwork-meta"><strong>Medium:</strong> Interactive site-specific installation, video essays, and participatory workshops<br><strong>Exhibition Venue:</strong> Jamshed Memorial Hall</p>
                            
                            <p class="kb22a-bio-text">Alecia Neo is an acclaimed Singaporean artist whose practice resides in the realms of photography, video, installation, and participatory projects. Her projects typically explore the politics of visibility, issues of care, identity, and memory. She develops long-term collaborations with diverse communities, exploring collective care and shared heritage through the lens of performance and technology.</p>
                            
                            <p class="kb22a-bio-text">In <strong>"Power to the People,"</strong> Neo created a site-specific installation at the historic Jamshed Memorial Hall. Developed through collaborative workshops with Karachi residents, the installation featured interactive projection mappings and soundscapes activated by movement. By combining historic architectural elements with sensors and digital data, the artwork transformed the venue into a live civic engine, exploring how physical closeness and shared technology can build collective energy and cross-cultural care.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3. Directory Search & Filters -->
        <section class="kb22a-directory-controls">
            <div class="row g-3 justify-content-between align-items-center mb-40">
                <div class="col-md-6 col-lg-5">
                    <div class="kb22a-search-wrap">
                        <i class="fas fa-search search-icon"></i>
                        <input type="text" id="artistSearch" class="kb22a-search-input" placeholder="Search artist by name...">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="kb22a-select-wrap">
                        <i class="fas fa-filter filter-icon"></i>
                        <select id="countryFilter" class="kb22a-select-input">
                            <option value="">All Countries</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Germany">Germany</option>
                            <option value="United States">United States</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="Brazil">Brazil</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="India">India</option>
                            <option value="Egypt">Egypt</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Australia">Australia</option>
                            <option value="Thailand">Thailand</option>
                        </select>
                    </div>
                </div>
            </div>
        </section>

        <!-- 4. Artists Grid -->
        <section class="kb22a-grid-section">
            <div class="kb22a-section-header">
                <h2 class="kb22a-section-title"><i class="fas fa-users me-3"></i>KB22 Artist Directory</h2>
                <p class="kb22a-section-intro">Explore the 45 artists and collectives from Pakistan and around the world who participated in the Third Karachi Biennale (KB22).</p>
            </div>
            
            <div class="kb22a-grid" id="artistsGrid">
                <!-- Artist 1: Featured Artist -->
                <div class="kb22a-card" data-name="Alecia Neo" data-country="Singapore">
                    <div class="kb22a-avatar-wrap">
                        <img src="assets/img/KB24ArtistsList/alecianeo-500x500.jpg" alt="Alecia Neo" class="kb22a-avatar">
                    </div>
                    <h4 class="kb22a-artist-name">Alecia Neo</h4>
                    <span class="kb22a-card-country">Singapore</span>
                </div>

                <!-- Artist 2 -->
                <div class="kb22a-card" data-name="Amin Gulgee" data-country="Pakistan">
                    <div class="kb22a-avatar-wrap kb22a-avatar-placeholder">AG</div>
                    <h4 class="kb22a-artist-name">Amin Gulgee</h4>
                    <span class="kb22a-card-country">Pakistan</span>
                </div>

                <!-- Artist 3 -->
                <div class="kb22a-card" data-name="Amin Rehman" data-country="Pakistan">
                    <div class="kb22a-avatar-wrap kb22a-avatar-placeholder">AR</div>
                    <h4 class="kb22a-artist-name">Amin Rehman</h4>
                    <span class="kb22a-card-country">Pakistan / Canada</span>
                </div>

                <!-- Artist 4 -->
                <div class="kb22a-card" data-name="Andreas Lutz" data-country="Germany">
                    <div class="kb22a-avatar-wrap kb22a-avatar-placeholder">AL</div>
                    <h4 class="kb22a-artist-name">Andreas Lutz</h4>
                    <span class="kb22a-card-country">Germany</span>
                </div>

                <!-- Artist 5 -->
                <div class="kb22a-card" data-name="Anthony McCall" data-country="United States">
                    <div class="kb22a-avatar-wrap kb22a-avatar-placeholder">AM</div>
                    <h4 class="kb22a-artist-name">Anthony McCall</h4>
                    <span class="kb22a-card-country">United States</span>
                </div>

                <!-- Artist 6 -->
                <div class="kb22a-card" data-name="Giselle Beiguelman" data-country="Brazil">
                    <div class="kb22a-avatar-wrap kb22a-avatar-placeholder">GB</div>
                    <h4 class="kb22a-artist-name">Giselle Beiguelman</h4>
                    <span class="kb22a-card-country">Brazil</span>
                </div>

                <!-- Artist 7 -->
                <div class="kb22a-card" data-name="Karachi Community Radio (KCR)" data-country="Pakistan">
                    <div class="kb22a-avatar-wrap kb22a-avatar-placeholder">KC</div>
                    <h4 class="kb22a-artist-name">Karachi Community Radio</h4>
                    <span class="kb22a-card-country">Pakistan</span>
                </div>

                <!-- Artist 8 -->
                <div class="kb22a-card" data-name="Bilal Jabbar" data-country="Pakistan">
                    <div class="kb22a-avatar-wrap kb22a-avatar-placeholder">BJ</div>
                    <h4 class="kb22a-artist-name">Bilal Jabbar</h4>
                    <span class="kb22a-card-country">Pakistan</span>
                </div>

                <!-- Artist 9 -->
                <div class="kb22a-card" data-name="Invisible Flock" data-country="United Kingdom">
                    <div class="kb22a-avatar-wrap kb22a-avatar-placeholder">IF</div>
                    <h4 class="kb22a-artist-name">Invisible Flock</h4>
                    <span class="kb22a-card-country">United Kingdom</span>
                </div>

                <!-- Artist 10 -->
                <div class="kb22a-card" data-name="Syeda Sheeza Ali" data-country="Pakistan">
                    <div class="kb22a-avatar-wrap kb22a-avatar-placeholder">SS</div>
                    <h4 class="kb22a-artist-name">Syeda Sheeza Ali</h4>
                    <span class="kb22a-card-country">Pakistan</span>
                </div>

                <!-- Artist 11 -->
                <div class="kb22a-card" data-name="Cosmic Tribe" data-country="Pakistan">
                    <div class="kb22a-avatar-wrap kb22a-avatar-placeholder">CT</div>
                    <h4 class="kb22a-artist-name">Cosmic Tribe</h4>
                    <span class="kb22a-card-country">Pakistan</span>
                </div>

                <!-- Artist 12 -->
                <div class="kb22a-card" data-name="Audio Placebo Plaza" data-country="Germany">
                    <div class="kb22a-avatar-wrap kb22a-avatar-placeholder">AP</div>
                    <h4 class="kb22a-artist-name">Audio Placebo Plaza</h4>
                    <span class="kb22a-card-country">International Collective</span>
                </div>

                <!-- Artist 13 -->
                <div class="kb22a-card" data-name="Zulfikar Ali Bhutto" data-country="Pakistan">
                    <div class="kb22a-avatar-wrap kb22a-avatar-placeholder">ZB</div>
                    <h4 class="kb22a-artist-name">Zulfikar Ali Bhutto</h4>
                    <span class="kb22a-card-country">Pakistan / USA</span>
                </div>

                <!-- Artist 14 -->
                <div class="kb22a-card" data-name="Yara Mekawei" data-country="Egypt">
                    <div class="kb22a-avatar-wrap kb22a-avatar-placeholder">YM</div>
                    <h4 class="kb22a-artist-name">Yara Mekawei</h4>
                    <span class="kb22a-card-country">Egypt</span>
                </div>

                <!-- Artist 15 -->
                <div class="kb22a-card" data-name="Waqas Khan" data-country="Pakistan">
                    <div class="kb22a-avatar-wrap kb22a-avatar-placeholder">WK</div>
                    <h4 class="kb22a-artist-name">Waqas Khan</h4>
                    <span class="kb22a-card-country">Pakistan</span>
                </div>

                <!-- Artist 16 -->
                <div class="kb22a-card" data-name="Yasmin Jahan Nupur" data-country="Bangladesh">
                    <div class="kb22a-avatar-wrap kb22a-avatar-placeholder">YN</div>
                    <h4 class="kb22a-artist-name">Yasmin Jahan Nupur</h4>
                    <span class="kb22a-card-country">Bangladesh</span>
                </div>

                <!-- Artist 17 -->
                <div class="kb22a-card" data-name="Rashid Rana" data-country="Pakistan">
                    <div class="kb22a-avatar-wrap kb22a-avatar-placeholder">RR</div>
                    <h4 class="kb22a-artist-name">Rashid Rana</h4>
                    <span class="kb22a-card-country">Pakistan</span>
                </div>

                <!-- Artist 18 -->
                <div class="kb22a-card" data-name="Shezad Dawood" data-country="United Kingdom">
                    <div class="kb22a-avatar-wrap kb22a-avatar-placeholder">SD</div>
                    <h4 class="kb22a-artist-name">Shezad Dawood</h4>
                    <span class="kb22a-card-country">United Kingdom</span>
                </div>

                <!-- Artist 19 -->
                <div class="kb22a-card" data-name="Bani Abidi" data-country="Pakistan">
                    <div class="kb22a-avatar-wrap kb22a-avatar-placeholder">BA</div>
                    <h4 class="kb22a-artist-name">Bani Abidi</h4>
                    <span class="kb22a-card-country">Pakistan / Germany</span>
                </div>

                <!-- Artist 20 -->
                <div class="kb22a-card" data-name="Asim Waqif" data-country="India">
                    <div class="kb22a-avatar-wrap kb22a-avatar-placeholder">AW</div>
                    <h4 class="kb22a-artist-name">Asim Waqif</h4>
                    <span class="kb22a-card-country">India</span>
                </div>

                <!-- Artist 21 -->
                <div class="kb22a-card" data-name="Shahzia Sikander" data-country="United States">
                    <div class="kb22a-avatar-wrap kb22a-avatar-placeholder">SS</div>
                    <h4 class="kb22a-artist-name">Shahzia Sikander</h4>
                    <span class="kb22a-card-country">Pakistan / USA</span>
                </div>

                <!-- Artist 22 -->
                <div class="kb22a-card" data-name="Huma Mulji" data-country="United Kingdom">
                    <div class="kb22a-avatar-wrap kb22a-avatar-placeholder">HM</div>
                    <h4 class="kb22a-artist-name">Huma Mulji</h4>
                    <span class="kb22a-card-country">Pakistan / UK</span>
                </div>

                <!-- Artist 23 -->
                <div class="kb22a-card" data-name="Naiza Khan" data-country="United Kingdom">
                    <div class="kb22a-avatar-wrap kb22a-avatar-placeholder">NK</div>
                    <h4 class="kb22a-artist-name">Naiza Khan</h4>
                    <span class="kb22a-card-country">Pakistan / UK</span>
                </div>

                <!-- Artist 24 -->
                <div class="kb22a-card" data-name="Sadequain" data-country="Pakistan">
                    <div class="kb22a-avatar-wrap kb22a-avatar-placeholder">SQ</div>
                    <h4 class="kb22a-artist-name">Sadequain</h4>
                    <span class="kb22a-card-country">Pakistan</span>
                </div>

                <!-- Artist 25 -->
                <div class="kb22a-card" data-name="Shilpa Gupta" data-country="India">
                    <div class="kb22a-avatar-wrap kb22a-avatar-placeholder">SG</div>
                    <h4 class="kb22a-artist-name">Shilpa Gupta</h4>
                    <span class="kb22a-card-country">India</span>
                </div>

                <!-- Artist 26 -->
                <div class="kb22a-card" data-name="Baseera Khan" data-country="United States">
                    <div class="kb22a-avatar-wrap kb22a-avatar-placeholder">BK</div>
                    <h4 class="kb22a-artist-name">Baseera Khan</h4>
                    <span class="kb22a-card-country">United States</span>
                </div>

                <!-- Artist 27 -->
                <div class="kb22a-card" data-name="CAMP" data-country="India">
                    <div class="kb22a-avatar-wrap kb22a-avatar-placeholder">CM</div>
                    <h4 class="kb22a-artist-name">CAMP</h4>
                    <span class="kb22a-card-country">India</span>
                </div>

                <!-- Artist 28 -->
                <div class="kb22a-card" data-name="Rehana Zaman" data-country="United Kingdom">
                    <div class="kb22a-avatar-wrap kb22a-avatar-placeholder">RZ</div>
                    <h4 class="kb22a-artist-name">Rehana Zaman</h4>
                    <span class="kb22a-card-country">United Kingdom</span>
                </div>

                <!-- Artist 29 -->
                <div class="kb22a-card" data-name="Tarek Atoui" data-country="Lebanon">
                    <div class="kb22a-avatar-wrap kb22a-avatar-placeholder">TA</div>
                    <h4 class="kb22a-artist-name">Tarek Atoui</h4>
                    <span class="kb22a-card-country">Lebanon</span>
                </div>

                <!-- Artist 30 -->
                <div class="kb22a-card" data-name="Saba Qizilbash" data-country="United Arab Emirates">
                    <div class="kb22a-avatar-wrap kb22a-avatar-placeholder">SQ</div>
                    <h4 class="kb22a-artist-name">Saba Qizilbash</h4>
                    <span class="kb22a-card-country">Pakistan / UAE</span>
                </div>

                <!-- Artist 31 -->
                <div class="kb22a-card" data-name="Ali Kazim" data-country="Pakistan">
                    <div class="kb22a-avatar-wrap kb22a-avatar-placeholder">AK</div>
                    <h4 class="kb22a-artist-name">Ali Kazim</h4>
                    <span class="kb22a-card-country">Pakistan</span>
                </div>

                <!-- Artist 32 -->
                <div class="kb22a-card" data-name="Ayesha Jatoi" data-country="Pakistan">
                    <div class="kb22a-avatar-wrap kb22a-avatar-placeholder">AJ</div>
                    <h4 class="kb22a-artist-name">Ayesha Jatoi</h4>
                    <span class="kb22a-card-country">Pakistan</span>
                </div>

                <!-- Artist 33 -->
                <div class="kb22a-card" data-name="Seema Nusrat" data-country="Pakistan">
                    <div class="kb22a-avatar-wrap kb22a-avatar-placeholder">SN</div>
                    <h4 class="kb22a-artist-name">Seema Nusrat</h4>
                    <span class="kb22a-card-country">Pakistan</span>
                </div>

                <!-- Artist 34 -->
                <div class="kb22a-card" data-name="Hamra Abbas" data-country="Pakistan">
                    <div class="kb22a-avatar-wrap kb22a-avatar-placeholder">HA</div>
                    <h4 class="kb22a-artist-name">Hamra Abbas</h4>
                    <span class="kb22a-card-country">Pakistan</span>
                </div>

                <!-- Artist 35 -->
                <div class="kb22a-card" data-name="Adeela Suleman" data-country="Pakistan">
                    <div class="kb22a-avatar-wrap kb22a-avatar-placeholder">AS</div>
                    <h4 class="kb22a-artist-name">Adeela Suleman</h4>
                    <span class="kb22a-card-country">Pakistan</span>
                </div>

                <!-- Artist 36 -->
                <div class="kb22a-card" data-name="Noor Ali Chagani" data-country="Pakistan">
                    <div class="kb22a-avatar-wrap kb22a-avatar-placeholder">NC</div>
                    <h4 class="kb22a-artist-name">Noor Ali Chagani</h4>
                    <span class="kb22a-card-country">Pakistan</span>
                </div>

                <!-- Artist 37 -->
                <div class="kb22a-card" data-name="Sameera Raja" data-country="Pakistan">
                    <div class="kb22a-avatar-wrap kb22a-avatar-placeholder">SR</div>
                    <h4 class="kb22a-artist-name">Sameera Raja</h4>
                    <span class="kb22a-card-country">Pakistan</span>
                </div>

                <!-- Artist 38 -->
                <div class="kb22a-card" data-name="Faiza Butt" data-country="United Kingdom">
                    <div class="kb22a-avatar-wrap kb22a-avatar-placeholder">FB</div>
                    <h4 class="kb22a-artist-name">Faiza Butt</h4>
                    <span class="kb22a-card-country">Pakistan / UK</span>
                </div>

                <!-- Artist 39 -->
                <div class="kb22a-card" data-name="Imran Qureshi" data-country="Pakistan">
                    <div class="kb22a-avatar-wrap kb22a-avatar-placeholder">IQ</div>
                    <h4 class="kb22a-artist-name">Imran Qureshi</h4>
                    <span class="kb22a-card-country">Pakistan</span>
                </div>

                <!-- Artist 40 -->
                <div class="kb22a-card" data-name="Aisha Khalid" data-country="Pakistan">
                    <div class="kb22a-avatar-wrap kb22a-avatar-placeholder">AK</div>
                    <h4 class="kb22a-artist-name">Aisha Khalid</h4>
                    <span class="kb22a-card-country">Pakistan</span>
                </div>

                <!-- Artist 41 -->
                <div class="kb22a-card" data-name="Khaled Sabsabi" data-country="Australia">
                    <div class="kb22a-avatar-wrap kb22a-avatar-placeholder">KS</div>
                    <h4 class="kb22a-artist-name">Khaled Sabsabi</h4>
                    <span class="kb22a-card-country">Australia</span>
                </div>

                <!-- Artist 42 -->
                <div class="kb22a-card" data-name="Mehreen Zuberi" data-country="Pakistan">
                    <div class="kb22a-avatar-wrap kb22a-avatar-placeholder">MZ</div>
                    <h4 class="kb22a-artist-name">Mehreen Zuberi</h4>
                    <span class="kb22a-card-country">Pakistan</span>
                </div>

                <!-- Artist 43 -->
                <div class="kb22a-card" data-name="Vasan Sitthiket" data-country="Thailand">
                    <div class="kb22a-avatar-wrap kb22a-avatar-placeholder">VS</div>
                    <h4 class="kb22a-artist-name">Vasan Sitthiket</h4>
                    <span class="kb22a-card-country">Thailand</span>
                </div>

                <!-- Artist 44 -->
                <div class="kb22a-card" data-name="Subodh Gupta" data-country="India">
                    <div class="kb22a-avatar-wrap kb22a-avatar-placeholder">SG</div>
                    <h4 class="kb22a-artist-name">Subodh Gupta</h4>
                    <span class="kb22a-card-country">India</span>
                </div>

                <!-- Artist 45 -->
                <div class="kb22a-card" data-name="Camp Collective" data-country="Singapore">
                    <div class="kb22a-avatar-wrap kb22a-avatar-placeholder">CC</div>
                    <h4 class="kb22a-artist-name">Camp Collective</h4>
                    <span class="kb22a-card-country">Singapore</span>
                </div>

            </div>
            
            <!-- No Results Message -->
            <div id="noResults" class="kb22a-no-results text-center d-none">
                <i class="fas fa-search mb-3"></i>
                <p>No artists found matching your filters.</p>
            </div>
        </section>

    </div>
</div>

<!-- 5. Client-Side Search and Filter Script -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    const searchInput = document.getElementById("artistSearch");
    const countryFilter = document.getElementById("countryFilter");
    const artistsGrid = document.getElementById("artistsGrid");
    const cards = artistsGrid.getElementsByClassName("kb22a-card");
    const noResults = document.getElementById("noResults");

    function filterArtists() {
        const searchText = searchInput.value.toLowerCase().trim();
        const selectedCountry = countryFilter.value.toLowerCase();
        let visibleCount = 0;

        for (let i = 0; i < cards.length; i++) {
            const card = cards[i];
            const name = card.getAttribute("data-name").toLowerCase();
            const country = card.getAttribute("data-country").toLowerCase();

            const matchesSearch = name.includes(searchText);
            const matchesCountry = selectedCountry === "" || country.includes(selectedCountry);

            if (matchesSearch && matchesCountry) {
                card.style.display = "flex";
                visibleCount++;
            } else {
                card.style.display = "none";
            }
        }

        if (visibleCount === 0) {
            noResults.classList.remove("d-none");
        } else {
            noResults.classList.add("d-none");
        }
    }

    searchInput.addEventListener("input", filterArtists);
    countryFilter.addEventListener("change", filterArtists);
});
</script>

<?php include 'components/footer.php'; ?>
