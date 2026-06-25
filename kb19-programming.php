<?php 
  $pageTitle = 'KB19 Programming Schedule - Second Karachi Biennale';
  $metaDesc = 'View the daily public programming calendar for KB19, featuring keynote lectures, guided walking tours, and educational workshops.';
  $bodyClass = 'page-kb19-programming'; 
  include 'components/header.php'; 
?>

<!-- Skip Link for Accessibility -->
<a href="#kb19p-main-content" class="skip-link visually-hidden-focusable">Skip to content</a>

<!-- 1. Hero Banner Area -->
<section class="kb19p-hero-section">
    <div class="kb19p-hero-banner" style="background-image: url('assets/img/bg/kb19-page-banner-2.jpg');">
        <div class="kb19p-hero-overlay"></div>
        <div class="container text-center">
            <h1 class="kb19p-hero-title">Programming Calendar</h1>
            <p class="kb19p-hero-subtitle">Karachi Biennale 19</p>
            
            <!-- Breadcrumbs -->
            <nav class="kb19p-breadcrumbs" aria-label="breadcrumb">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li>Past Biennale</li>
                    <li>KB19</li>
                    <li class="active" aria-current="page">Programming</li>
                </ul>
            </nav>
        </div>
    </div>
</section>

<!-- 2. Main Content Area -->
<main id="kb19p-main-content" class="kb19p-main-wrapper">
    <div class="container">
        
        <!-- Intro & General Info -->
        <section class="kb19p-info-section">
            <div class="kb19p-info-card">
                <div class="row align-items-center gy-4">
                    <div class="col-lg-7">
                        <h2 class="kb19p-info-title">Public Programming Overview</h2>
                        <p class="kb19p-info-text">
                            The KB19 Public Programming brought the Biennale to life through a dynamic schedule of keynote talks, guided tours, workshops, and special events. From 27 October to 11 November 2019, audiences engaged with artists, thinkers, and cultural practitioners from around the world.
                        </p>
                    </div>
                    <div class="col-lg-5">
                        <div class="kb19p-hours-box">
                            <h3 class="kb19p-hours-title"><i class="far fa-clock me-2"></i>Opening Hours</h3>
                            <ul class="kb19p-hours-list">
                                <li>
                                    <span>27 Oct – 9 Nov:</span>
                                    <strong>10:00 am – 5:00 pm</strong>
                                </li>
                                <li>
                                    <span>10 Nov – 11 Nov:</span>
                                    <strong>10:00 am – 5:00 pm</strong>
                                </li>
                            </ul>
                            <small class="kb19p-hours-note">*All exhibition venues are open to the public during these hours. Closed on public holidays.</small>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Dynamic Category Filter Tabs -->
        <section class="kb19p-schedule-section">
            <div class="kb19p-filter-tabs" role="tablist" aria-label="Program Categories">
                <button class="kb19p-filter-btn active" onclick="filterCategory('all')" role="tab" aria-selected="true" aria-controls="schedule-list">All Programs</button>
                <button class="kb19p-filter-btn" onclick="filterCategory('discursive')" role="tab" aria-selected="false" aria-controls="schedule-list">Discursive Talks</button>
                <button class="kb19p-filter-btn" onclick="filterCategory('special')" role="tab" aria-selected="false" aria-controls="schedule-list">Special Programs</button>
                <button class="kb19p-filter-btn" onclick="filterCategory('educational')" role="tab" aria-selected="false" aria-controls="schedule-list">Educational Events</button>
            </div>

            <!-- Schedule List Table/Grid -->
            <div id="schedule-list" class="kb19p-schedule-grid">
                
                <!-- ROW 1: Discursive -->
                <div class="kb19p-row-card" data-category="discursive">
                    <div class="kb19p-date-badge">
                        <span class="kb19p-date-day">27</span>
                        <span class="kb19p-date-month">Oct</span>
                    </div>
                    <div class="kb19p-row-details">
                        <div class="kb19p-row-meta">
                            <span class="kb19p-meta-tag tag-discursive"><i class="fas fa-comments"></i> Discursive</span>
                            <span class="kb19p-meta-time"><i class="far fa-clock"></i> 4:30 – 6:30 pm</span>
                            <span class="kb19p-meta-loc"><i class="fas fa-map-marker-alt"></i> IBA Auditorium (City Campus)</span>
                        </div>
                        <h3 class="kb19p-event-title">Keynote Talks – Curatorial Dialogues</h3>
                        <p class="kb19p-event-desc">Opening addresses and curator notes exploring the environmental framework of KB19.</p>
                    </div>
                </div>

                <!-- ROW 2: Discursive -->
                <div class="kb19p-row-card" data-category="discursive">
                    <div class="kb19p-date-badge">
                        <span class="kb19p-date-day">28</span>
                        <span class="kb19p-date-month">Oct</span>
                    </div>
                    <div class="kb19p-row-details">
                        <div class="kb19p-row-meta">
                            <span class="kb19p-meta-tag tag-discursive"><i class="fas fa-comments"></i> Discursive</span>
                            <span class="kb19p-meta-time"><i class="far fa-clock"></i> 4:30 – 6:30 pm</span>
                            <span class="kb19p-meta-loc"><i class="fas fa-map-marker-alt"></i> IBA Auditorium (City Campus)</span>
                        </div>
                        <h3 class="kb19p-event-title">Keynote Talks – Eco-Aesthetics Debate</h3>
                        <p class="kb19p-event-desc">Focus panel exploring man's interaction and battle with ecological devastation.</p>
                    </div>
                </div>

                <!-- ROW 3: Educational -->
                <div class="kb19p-row-card" data-category="educational">
                    <div class="kb19p-date-badge">
                        <span class="kb19p-date-day">28</span>
                        <span class="kb19p-date-month">Oct</span>
                    </div>
                    <div class="kb19p-row-details">
                        <div class="kb19p-row-meta">
                            <span class="kb19p-meta-tag tag-educational"><i class="fas fa-graduation-cap"></i> Educational</span>
                            <span class="kb19p-meta-time"><i class="far fa-clock"></i> 10:00 am – 12:00 pm</span>
                            <span class="kb19p-meta-loc"><i class="fas fa-map-marker-alt"></i> Bagh-e-Ibn-Qasim</span>
                        </div>
                        <h3 class="kb19p-event-title">Tours for School Children (Daily till Oct 31)</h3>
                        <p class="kb19p-event-desc">Interactive curatorial tours exploring Bagh-e-Ibn-Qasim installations with children.</p>
                    </div>
                </div>

                <!-- ROW 4: Special -->
                <div class="kb19p-row-card" data-category="special">
                    <div class="kb19p-date-badge">
                        <span class="kb19p-date-day">30</span>
                        <span class="kb19p-date-month">Oct</span>
                    </div>
                    <div class="kb19p-row-details">
                        <div class="kb19p-row-meta">
                            <span class="kb19p-meta-tag tag-special"><i class="fas fa-star"></i> Special Program</span>
                            <span class="kb19p-meta-time"><i class="far fa-clock"></i> 11:00 am – 12:00 pm</span>
                            <span class="kb19p-meta-loc"><i class="fas fa-map-marker-alt"></i> Alliance Française</span>
                        </div>
                        <h3 class="kb19p-event-title">Guided tour for visitors</h3>
                        <p class="kb19p-event-desc">Curator-led walk-through of the Mahvash & Jahangir Siddiqui gallery exhibitions.</p>
                    </div>
                </div>

                <!-- ROW 5: Special -->
                <div class="kb19p-row-card" data-category="special">
                    <div class="kb19p-date-badge">
                        <span class="kb19p-date-day">30</span>
                        <span class="kb19p-date-month">Oct</span>
                    </div>
                    <div class="kb19p-row-details">
                        <div class="kb19p-row-meta">
                            <span class="kb19p-meta-tag tag-special"><i class="fas fa-star"></i> Special Program</span>
                            <span class="kb19p-meta-time"><i class="far fa-clock"></i> 3:00 pm – 4:00 pm</span>
                            <span class="kb19p-meta-loc"><i class="fas fa-map-marker-alt"></i> Karachi Zoo</span>
                        </div>
                        <h3 class="kb19p-event-title">Ladies Day Guided Walk</h3>
                        <p class="kb19p-event-desc">Exclusive guided walking tours for female visitors at the historic Zoological gardens.</p>
                    </div>
                </div>

                <!-- ROW 6: Special -->
                <div class="kb19p-row-card" data-category="special">
                    <div class="kb19p-date-badge">
                        <span class="kb19p-date-day">30</span>
                        <span class="kb19p-date-month">Oct</span>
                    </div>
                    <div class="kb19p-row-details">
                        <div class="kb19p-row-meta">
                            <span class="kb19p-meta-tag tag-special"><i class="fas fa-star"></i> Special Program</span>
                            <span class="kb19p-meta-time"><i class="far fa-clock"></i> 4:00 pm – 6:00 pm</span>
                            <span class="kb19p-meta-loc"><i class="fas fa-map-marker-alt"></i> Bagh Ibne Qasim</span>
                        </div>
                        <h3 class="kb19p-event-title">Guided Walk-through & Sunset Tour</h3>
                        <p class="kb19p-event-desc">Guided tour highlighting the outdoor and environmental installations at Clifton seaside park.</p>
                    </div>
                </div>

                <!-- ROW 7: Special -->
                <div class="kb19p-row-card" data-category="special">
                    <div class="kb19p-date-badge">
                        <span class="kb19p-date-day">30</span>
                        <span class="kb19p-date-month">Oct</span>
                    </div>
                    <div class="kb19p-row-details">
                        <div class="kb19p-row-meta">
                            <span class="kb19p-meta-tag tag-special"><i class="fas fa-star"></i> Special Program</span>
                            <span class="kb19p-meta-time"><i class="far fa-clock"></i> 6:00 pm – 7:30 pm</span>
                            <span class="kb19p-meta-loc"><i class="fas fa-map-marker-alt"></i> Karachi Gymkhana</span>
                        </div>
                        <h3 class="kb19p-event-title">Public Talk on Art and Emotional Wellbeing</h3>
                        <p class="kb19p-event-desc">A discussion on how eco-centric visual arts stimulate mental health and emotional restoration.</p>
                    </div>
                </div>

                <!-- ROW 8: Special -->
                <div class="kb19p-row-card" data-category="special">
                    <div class="kb19p-date-badge">
                        <span class="kb19p-date-day">01</span>
                        <span class="kb19p-date-month">Nov</span>
                    </div>
                    <div class="kb19p-row-details">
                        <div class="kb19p-row-meta">
                            <span class="kb19p-meta-tag tag-special"><i class="fas fa-star"></i> Special Program</span>
                            <span class="kb19p-meta-time"><i class="far fa-clock"></i> All Day (Nov 1 – 2)</span>
                            <span class="kb19p-meta-loc"><i class="fas fa-map-marker-alt"></i> NJV School</span>
                        </div>
                        <h3 class="kb19p-event-title">GEMAH Workshop on Art & Emotional Wellbeing</h3>
                        <p class="kb19p-event-desc">Hands-on creative therapies. Pre-registration and booking required.</p>
                    </div>
                </div>

                <!-- ROW 9: Educational -->
                <div class="kb19p-row-card" data-category="educational">
                    <div class="kb19p-date-badge">
                        <span class="kb19p-date-day">02</span>
                        <span class="kb19p-date-month">Nov</span>
                    </div>
                    <div class="kb19p-row-details">
                        <div class="kb19p-row-meta">
                            <span class="kb19p-meta-tag tag-educational"><i class="fas fa-graduation-cap"></i> Educational</span>
                            <span class="kb19p-meta-time"><i class="far fa-clock"></i> 10:00 am – 12:00 pm (Daily till Nov 7)</span>
                            <span class="kb19p-meta-loc"><i class="fas fa-map-marker-alt"></i> Bagh-e-Ibn-Qasim</span>
                        </div>
                        <h3 class="kb19p-event-title">Art Teachers Workshop and Guided Tour</h3>
                        <p class="kb19p-event-desc">Training educators to incorporate climate change and ecology topics into school curriculums.</p>
                    </div>
                </div>

                <!-- ROW 10: Educational -->
                <div class="kb19p-row-card" data-category="educational">
                    <div class="kb19p-date-badge">
                        <span class="kb19p-date-day">02</span>
                        <span class="kb19p-date-month">Nov</span>
                    </div>
                    <div class="kb19p-row-details">
                        <div class="kb19p-row-meta">
                            <span class="kb19p-meta-tag tag-educational"><i class="fas fa-graduation-cap"></i> Educational</span>
                            <span class="kb19p-meta-time"><i class="far fa-clock"></i> 10:00 am – 12:00 pm</span>
                            <span class="kb19p-meta-loc"><i class="fas fa-map-marker-alt"></i> Bagh-e-Ibn-Qasim</span>
                        </div>
                        <h3 class="kb19p-event-title">Art Teachers Guided Tour</h3>
                        <p class="kb19p-event-desc">Exposition analysis walk-through exclusively for school art teachers.</p>
                    </div>
                </div>

                <!-- ROW 11: Special -->
                <div class="kb19p-row-card" data-category="special">
                    <div class="kb19p-date-badge">
                        <span class="kb19p-date-day">03</span>
                        <span class="kb19p-date-month">Nov</span>
                    </div>
                    <div class="kb19p-row-details">
                        <div class="kb19p-row-meta">
                            <span class="kb19p-meta-tag tag-special"><i class="fas fa-star"></i> Special Program</span>
                            <span class="kb19p-meta-time"><i class="far fa-clock"></i> 11:00 am – 12:00 pm</span>
                            <span class="kb19p-meta-loc"><i class="fas fa-map-marker-alt"></i> Frere Hall</span>
                        </div>
                        <h3 class="kb19p-event-title">Guided tour for visitors</h3>
                        <p class="kb19p-event-desc">Guided tour of the Frere Hall lawns and Sadequain Gallery murals.</p>
                    </div>
                </div>

                <!-- ROW 12: Special -->
                <div class="kb19p-row-card" data-category="special">
                    <div class="kb19p-date-badge">
                        <span class="kb19p-date-day">03</span>
                        <span class="kb19p-date-month">Nov</span>
                    </div>
                    <div class="kb19p-row-details">
                        <div class="kb19p-row-meta">
                            <span class="kb19p-meta-tag tag-special"><i class="fas fa-star"></i> Special Program</span>
                            <span class="kb19p-meta-time"><i class="far fa-clock"></i> 2:30 pm – 5:00 pm</span>
                            <span class="kb19p-meta-loc"><i class="fas fa-map-marker-alt"></i> Bagh-e-Ibn-Qasim</span>
                        </div>
                        <h3 class="kb19p-event-title">KB19 Climate Action Meet</h3>
                        <p class="kb19p-event-desc">Public gathering of activists, artists, and citizens advocating environmental action.</p>
                    </div>
                </div>

                <!-- ROW 13: Special -->
                <div class="kb19p-row-card" data-category="special">
                    <div class="kb19p-date-badge">
                        <span class="kb19p-date-day">03</span>
                        <span class="kb19p-date-month">Nov</span>
                    </div>
                    <div class="kb19p-row-details">
                        <div class="kb19p-row-meta">
                            <span class="kb19p-meta-tag tag-special"><i class="fas fa-star"></i> Special Program</span>
                            <span class="kb19p-meta-time"><i class="far fa-clock"></i> 11:00 am – 12:00 pm</span>
                            <span class="kb19p-meta-loc"><i class="fas fa-map-marker-alt"></i> VM Art Gallery</span>
                        </div>
                        <h3 class="kb19p-event-title">Guided tour for visitors</h3>
                        <p class="kb19p-event-desc">Weekly curated walk-through of the VM Art Gallery projects.</p>
                    </div>
                </div>

                <!-- ROW 14: Special -->
                <div class="kb19p-row-card" data-category="special">
                    <div class="kb19p-date-badge">
                        <span class="kb19p-date-day">06</span>
                        <span class="kb19p-date-month">Nov</span>
                    </div>
                    <div class="kb19p-row-details">
                        <div class="kb19p-row-meta">
                            <span class="kb19p-meta-tag tag-special"><i class="fas fa-star"></i> Special Program</span>
                            <span class="kb19p-meta-time"><i class="far fa-clock"></i> 3:00 pm – 4:00 pm</span>
                            <span class="kb19p-meta-loc"><i class="fas fa-map-marker-alt"></i> Pioneer Book House, MA Jinnah Road</span>
                        </div>
                        <h3 class="kb19p-event-title">Interactive Poetry Reading Session</h3>
                        <p class="kb19p-event-desc">Theme: Environmental Issues and Habitat Loss. Open mic and readings by leading poets.</p>
                    </div>
                </div>

                <!-- ROW 15: Special -->
                <div class="kb19p-row-card" data-category="special">
                    <div class="kb19p-date-badge">
                        <span class="kb19p-date-day">06</span>
                        <span class="kb19p-date-month">Nov</span>
                    </div>
                    <div class="kb19p-row-details">
                        <div class="kb19p-row-meta">
                            <span class="kb19p-meta-tag tag-special"><i class="fas fa-star"></i> Special Program</span>
                            <span class="kb19p-meta-time"><i class="far fa-clock"></i> 2:00 pm – 4:00 pm</span>
                            <span class="kb19p-meta-loc"><i class="fas fa-map-marker-alt"></i> Karachi Zoo</span>
                        </div>
                        <h3 class="kb19p-event-title">Ladies Day Guided Walk</h3>
                        <p class="kb19p-event-desc">Mid-week guided walkthrough of Zoological Garden exhibits for female audiences.</p>
                    </div>
                </div>

                <!-- ROW 16: Special -->
                <div class="kb19p-row-card" data-category="special">
                    <div class="kb19p-date-badge">
                        <span class="kb19p-date-day">09</span>
                        <span class="kb19p-date-month">Nov</span>
                    </div>
                    <div class="kb19p-row-details">
                        <div class="kb19p-row-meta">
                            <span class="kb19p-meta-tag tag-special"><i class="fas fa-star"></i> Special Program</span>
                            <span class="kb19p-meta-time"><i class="far fa-clock"></i> 11:00 am – 12:00 pm</span>
                            <span class="kb19p-meta-loc"><i class="fas fa-map-marker-alt"></i> IVS Gallery</span>
                        </div>
                        <h3 class="kb19p-event-title">Presentation on Endangered Mangroves</h3>
                        <p class="kb19p-event-desc">Scientific and artistic collaborative panel reviewing mangrove deforestation along the Sindh coast.</p>
                    </div>
                </div>

                <!-- ROW 17: Educational -->
                <div class="kb19p-row-card" data-category="educational">
                    <div class="kb19p-date-badge">
                        <span class="kb19p-date-day">09</span>
                        <span class="kb19p-date-month">Nov</span>
                    </div>
                    <div class="kb19p-row-details">
                        <div class="kb19p-row-meta">
                            <span class="kb19p-meta-tag tag-educational"><i class="fas fa-graduation-cap"></i> Educational</span>
                            <span class="kb19p-meta-time"><i class="far fa-clock"></i> 10:00 am – 12:00 pm</span>
                            <span class="kb19p-meta-loc"><i class="fas fa-map-marker-alt"></i> Bagh-e-Ibn-Qasim</span>
                        </div>
                        <h3 class="kb19p-event-title">Art Teachers Guided Tour</h3>
                        <p class="kb19p-event-desc">Final weekend guided tour analyzing installation summaries with art instructors.</p>
                    </div>
                </div>

                <!-- ROW 18: Educational -->
                <div class="kb19p-row-card" data-category="educational">
                    <div class="kb19p-date-badge">
                        <span class="kb19p-date-day">27</span>
                        <span class="kb19p-date-month">Oct</span>
                    </div>
                    <div class="kb19p-row-details">
                        <div class="kb19p-row-meta">
                            <span class="kb19p-meta-tag tag-educational"><i class="fas fa-graduation-cap"></i> Educational</span>
                            <span class="kb19p-meta-time"><i class="far fa-clock"></i> 10:00 am – 5:00 pm (Daily)</span>
                            <span class="kb19p-meta-loc"><i class="fas fa-map-marker-alt"></i> Bagh-e-Ibn-Qasim</span>
                        </div>
                        <h3 class="kb19p-event-title">Sensory Installations Interactive Session</h3>
                        <p class="kb19p-event-desc">Free and open to the public. Hands-on discovery displays designed for children's learning.</p>
                    </div>
                </div>

            </div>
        </section>

        <!-- App promotion -->
        <section class="kb19p-promo-section text-center">
            <div class="kb19p-promo-card">
                <h3 class="kb19p-promo-title">Take the Schedule on the Go!</h3>
                <p class="kb19p-promo-text">Download our Visitors Guide App for real-time notifications, event updates, and map directions to all venues.</p>
                <div class="row justify-content-center align-items-center g-3 mt-3">
                    <div class="col-auto">
                        <img src="assets/img/KB19App/kbapp2.png" alt="KB19 App Schedule Screen" class="kb19p-app-preview img-fluid">
                    </div>
                    <div class="col-auto">
                        <img src="assets/img/KB19App/kbapp.png" alt="KB19 App Events Screen" class="kb19p-app-preview img-fluid">
                    </div>
                </div>
                <div class="mt-4">
                    <a href="kb19-visitors-guide-app.php" class="kb19p-btn-primary">Download App <i class="fas fa-download ms-2"></i></a>
                </div>
            </div>
        </section>

    </div>
</main>

<!-- Category Filtering JS Script -->
<script>
function filterCategory(category) {
    // 1. Update Active class on button
    const buttons = document.querySelectorAll('.kb19p-filter-btn');
    buttons.forEach(btn => {
        if (btn.getAttribute('onclick').includes(category)) {
            btn.classList.add('active');
            btn.setAttribute('aria-selected', 'true');
        } else {
            btn.classList.remove('active');
            btn.setAttribute('aria-selected', 'false');
        }
    });

    // 2. Hide/Show items
    const rows = document.querySelectorAll('.kb19p-row-card');
    rows.forEach(row => {
        if (category === 'all' || row.dataset.category === category) {
            row.style.display = 'flex';
        } else {
            row.style.display = 'none';
        }
    });
}
</script>

<?php include 'components/footer.php'; ?>
