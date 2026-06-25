<?php 
  $pageTitle = 'KB22 Programming Calendar - Third Karachi Biennale';
  $metaDesc = 'View the daily programming schedule of the Third Karachi Biennale (KB22) from October 31 to November 13, featuring talks, tours, performances, and seminars.';
  $bodyClass = 'page-kb22-programming'; 
  include 'components/header.php'; 
?>

<!-- 1. Page Header (Hero Area) -->
<section class="kb22r-hero-section text-center">
    <div class="container">
        <h1 class="kb22r-hero-title">Programming Calendar</h1>
        <p class="kb22r-hero-subtitle">Third Karachi Biennale KB22</p>
        <p class="kb22r-hero-intro">From October 31 to November 13, the Third Karachi Biennale (KB22) activated public spaces with dynamic programming. Explore our daily schedule of artist talks, interactive tours, digital performances, and academic seminars bridging art and technology.</p>
        
        <!-- Breadcrumbs -->
        <nav class="kb22r-breadcrumbs" aria-label="breadcrumb">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>Past Biennale</li>
                <li>KB22</li>
                <li class="active" aria-current="page">Programming</li>
            </ul>
        </nav>
    </div>
</section>

<!-- 2. Interactive Filter Buttons -->
<div class="kb22r-filter-wrap">
    <div class="container text-center">
        <div class="kb22r-filters" role="group" aria-label="Schedule Filters">
            <button class="kb22r-filter-btn active" data-filter="all">All Events</button>
            <button class="kb22r-filter-btn" data-filter="performances"><i class="fas fa-theater-masks me-2"></i>Performances</button>
            <button class="kb22r-filter-btn" data-filter="talks"><i class="fas fa-comments me-2"></i>Talks &amp; Panels</button>
            <button class="kb22r-filter-btn" data-filter="seminars"><i class="fas fa-graduation-cap me-2"></i>Seminars</button>
            <button class="kb22r-filter-btn" data-filter="tours"><i class="fas fa-walking me-2"></i>Guided Tours</button>
        </div>
    </div>
</div>

<!-- 3. Accordion Schedule List -->
<div class="kb22r-schedule-wrap">
    <div class="container">
        <div class="kb22r-accordion-list" id="programmingAccordion">
            
            <!-- Day 1 -->
            <div class="kb22r-day-card" data-category="tours talks">
                <div class="kb22r-card-header" id="day-01-hdr">
                    <button class="kb22r-trigger collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#day-01" aria-expanded="false" aria-controls="day-01">
                        <span class="kb22r-date">Oct 31</span>
                        <span class="kb22r-day-title">Day 01: Opening Day &amp; Curator's Guided Walk</span>
                        <span class="kb22r-chevron"><i class="fas fa-chevron-down"></i></span>
                    </button>
                </div>
                <div id="day-01" class="collapse" aria-labelledby="day-01-hdr" data-bs-parent="#programmingAccordion">
                    <div class="kb22r-card-body">
                        <div class="kb22r-event-detail">
                            <span class="kb22r-event-badge badge-tours">Guided Tour</span>
                            <span class="kb22r-event-badge badge-talks">Talks &amp; Panels</span>
                            <p class="kb22r-time"><i class="far fa-clock me-2"></i>11:00 AM - 04:00 PM</p>
                            <p class="kb22r-venue"><i class="fas fa-map-marker-alt me-2"></i>NJV Government Higher Secondary School</p>
                            <p class="kb22r-desc">The grand launch of KB22. Following the formal opening ceremony, Chief Curator Faisal Anwar leads a guided walk of the primary venue, demonstrating how augmented reality overlays activate historical stone facades.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Day 2 -->
            <div class="kb22r-day-card" data-category="performances">
                <div class="kb22r-card-header" id="day-02-hdr">
                    <button class="kb22r-trigger collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#day-02" aria-expanded="false" aria-controls="day-02">
                        <span class="kb22r-date">Nov 01</span>
                        <span class="kb22r-day-title">Day 02: Launch of Sound Sculptures</span>
                        <span class="kb22r-chevron"><i class="fas fa-chevron-down"></i></span>
                    </button>
                </div>
                <div id="day-02" class="collapse" aria-labelledby="day-02-hdr" data-bs-parent="#programmingAccordion">
                    <div class="kb22r-card-body">
                        <div class="kb22r-event-detail">
                            <span class="kb22r-event-badge badge-performances">Performance</span>
                            <p class="kb22r-time"><i class="far fa-clock me-2"></i>05:00 PM - 07:30 PM</p>
                            <p class="kb22r-venue"><i class="fas fa-map-marker-alt me-2"></i>Jamshed Memorial Hall</p>
                            <p class="kb22r-desc">Live musical activations and spatial audio showcase. Artists demonstrate custom sensory hardware that translates atmospheric pressure and human presence into sound waves, exploring regional memories.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Day 3 -->
            <div class="kb22r-day-card" data-category="seminars">
                <div class="kb22r-card-header" id="day-03-hdr">
                    <button class="kb22r-trigger collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#day-03" aria-expanded="false" aria-controls="day-03">
                        <span class="kb22r-date">Nov 02</span>
                        <span class="kb22r-day-title">Day 03: Big Data and Digital Landscapes</span>
                        <span class="kb22r-chevron"><i class="fas fa-chevron-down"></i></span>
                    </button>
                </div>
                <div id="day-03" class="collapse" aria-labelledby="day-03-hdr" data-bs-parent="#programmingAccordion">
                    <div class="kb22r-card-body">
                        <div class="kb22r-event-detail">
                            <span class="kb22r-event-badge badge-seminars">Seminar</span>
                            <p class="kb22r-time"><i class="far fa-clock me-2"></i>02:00 PM - 05:00 PM</p>
                            <p class="kb22r-venue"><i class="fas fa-map-marker-alt me-2"></i>IBA City Campus</p>
                            <p class="kb22r-desc">An academic symposium featuring scholars and technologists discussing surveillance capitalism, the digital divide in South Asia, and the ethics of creative algorithms.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Day 4 -->
            <div class="kb22r-day-card" data-category="tours">
                <div class="kb22r-card-header" id="day-04-hdr">
                    <button class="kb22r-trigger collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#day-04" aria-expanded="false" aria-controls="day-04">
                        <span class="kb22r-date">Nov 03</span>
                        <span class="kb22r-day-title">Day 04: Guided Heritage Walk</span>
                        <span class="kb22r-chevron"><i class="fas fa-chevron-down"></i></span>
                    </button>
                </div>
                <div id="day-04" class="collapse" aria-labelledby="day-04-hdr" data-bs-parent="#programmingAccordion">
                    <div class="kb22r-card-body">
                        <div class="kb22r-event-detail">
                            <span class="kb22r-event-badge badge-tours">Guided Tour</span>
                            <p class="kb22r-time"><i class="far fa-clock me-2"></i>09:00 AM - 01:00 PM</p>
                            <p class="kb22r-venue"><i class="fas fa-map-marker-alt me-2"></i>Starting from NJV School to Hamid Market</p>
                            <p class="kb22r-desc">A guided architectural tour mapping pre-partition history. Participants learn how contemporary video art activates the spaces of old Karachi bazaars.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Day 5 -->
            <div class="kb22r-day-card" data-category="seminars">
                <div class="kb22r-card-header" id="day-05-hdr">
                    <button class="kb22r-trigger collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#day-05" aria-expanded="false" aria-controls="day-05">
                        <span class="kb22r-date">Nov 04</span>
                        <span class="kb22r-day-title">Day 05: Masterclass in Interactive Coding</span>
                        <span class="kb22r-chevron"><i class="fas fa-chevron-down"></i></span>
                    </button>
                </div>
                <div id="day-05" class="collapse" aria-labelledby="day-05-hdr" data-bs-parent="#programmingAccordion">
                    <div class="kb22r-card-body">
                        <div class="kb22r-event-detail">
                            <span class="kb22r-event-badge badge-seminars">Seminar</span>
                            <p class="kb22r-time"><i class="far fa-clock me-2"></i>10:00 AM - 01:00 PM</p>
                            <p class="kb22r-venue"><i class="fas fa-map-marker-alt me-2"></i>NED University City Campus</p>
                            <p class="kb22r-desc">A workshop for art students and developers on visual coding, introducing tools to translate sensory inputs into real-time animations.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Day 6 -->
            <div class="kb22r-day-card" data-category="talks">
                <div class="kb22r-card-header" id="day-06-hdr">
                    <button class="kb22r-trigger collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#day-06" aria-expanded="false" aria-controls="day-06">
                        <span class="kb22r-date">Nov 05</span>
                        <span class="kb22r-day-title">Day 06: Curator Panel: Collective Imagination</span>
                        <span class="kb22r-chevron"><i class="fas fa-chevron-down"></i></span>
                    </button>
                </div>
                <div id="day-06" class="collapse" aria-labelledby="day-06-hdr" data-bs-parent="#programmingAccordion">
                    <div class="kb22r-card-body">
                        <div class="kb22r-event-detail">
                            <span class="kb22r-event-badge badge-talks">Talks &amp; Panels</span>
                            <p class="kb22r-time"><i class="far fa-clock me-2"></i>04:30 PM - 06:30 PM</p>
                            <p class="kb22r-venue"><i class="fas fa-map-marker-alt me-2"></i>Alliance Française</p>
                            <p class="kb22r-desc">Chief Curator Faisal Anwar sits down with local and international curators to talk about how digital exhibitions challenge conventional art spaces.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Day 7 -->
            <div class="kb22r-day-card" data-category="performances">
                <div class="kb22r-card-header" id="day-07-hdr">
                    <button class="kb22r-trigger collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#day-07" aria-expanded="false" aria-controls="day-07">
                        <span class="kb22r-date">Nov 06</span>
                        <span class="kb22r-day-title">Day 07: Hamid Market Screen Show</span>
                        <span class="kb22r-chevron"><i class="fas fa-chevron-down"></i></span>
                    </button>
                </div>
                <div id="day-07" class="collapse" aria-labelledby="day-07-hdr" data-bs-parent="#programmingAccordion">
                    <div class="kb22r-card-body">
                        <div class="kb22r-event-detail">
                            <span class="kb22r-event-badge badge-performances">Performance</span>
                            <p class="kb22r-time"><i class="far fa-clock me-2"></i>07:00 PM - 09:30 PM</p>
                            <p class="kb22r-venue"><i class="fas fa-map-marker-alt me-2"></i>Hamid Market</p>
                            <p class="kb22r-desc">An evening of street projection art, lighting up commercial buildings in old town Karachi with real-time text mappings submitted by local citizens.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Day 8 -->
            <div class="kb22r-day-card" data-category="tours">
                <div class="kb22r-card-header" id="day-08-hdr">
                    <button class="kb22r-trigger collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#day-08" aria-expanded="false" aria-controls="day-08">
                        <span class="kb22r-date">Nov 07</span>
                        <span class="kb22r-day-title">Day 08: Botanical and Ecology Walk</span>
                        <span class="kb22r-chevron"><i class="fas fa-chevron-down"></i></span>
                    </button>
                </div>
                <div id="day-08" class="collapse" aria-labelledby="day-08-hdr" data-bs-parent="#programmingAccordion">
                    <div class="kb22r-card-body">
                        <div class="kb22r-event-detail">
                            <span class="kb22r-event-badge badge-tours">Guided Tour</span>
                            <p class="kb22r-time"><i class="far fa-clock me-2"></i>08:30 AM - 11:30 AM</p>
                            <p class="kb22r-venue"><i class="fas fa-map-marker-alt me-2"></i>Botanical Gardens and Heritage trees</p>
                            <p class="kb22r-desc">A guided ecological tour highlighting oldest green patches of the city. Mentors show how biological mapping connects with digital preservation.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Day 9 -->
            <div class="kb22r-day-card" data-category="talks">
                <div class="kb22r-card-header" id="day-09-hdr">
                    <button class="kb22r-trigger collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#day-09" aria-expanded="false" aria-controls="day-09">
                        <span class="kb22r-date">Nov 08</span>
                        <span class="kb22r-day-title">Day 09: Augmented Reality in Public Art</span>
                        <span class="kb22r-chevron"><i class="fas fa-chevron-down"></i></span>
                    </button>
                </div>
                <div id="day-09" class="collapse" aria-labelledby="day-09-hdr" data-bs-parent="#programmingAccordion">
                    <div class="kb22r-card-body">
                        <div class="kb22r-event-detail">
                            <span class="kb22r-event-badge badge-talks">Talks &amp; Panels</span>
                            <p class="kb22r-time"><i class="far fa-clock me-2"></i>03:00 PM - 05:00 PM</p>
                            <p class="kb22r-venue"><i class="fas fa-map-marker-alt me-2"></i>VM Art Gallery</p>
                            <p class="kb22r-desc">Artists discuss the future of public monuments using AR overlays, showing how virtual memory spaces protect history from real-world changes.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Day 10 -->
            <div class="kb22r-day-card" data-category="performances">
                <div class="kb22r-card-header" id="day-10-hdr">
                    <button class="kb22r-trigger collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#day-10" aria-expanded="false" aria-controls="day-10">
                        <span class="kb22r-date">Nov 09</span>
                        <span class="kb22r-day-title">Day 10: Ambient Soundscape Concert</span>
                        <span class="kb22r-chevron"><i class="fas fa-chevron-down"></i></span>
                    </button>
                </div>
                <div id="day-10" class="collapse" aria-labelledby="day-10-hdr" data-bs-parent="#programmingAccordion">
                    <div class="kb22r-card-body">
                        <div class="kb22r-event-detail">
                            <span class="kb22r-event-badge badge-performances">Performance</span>
                            <p class="kb22r-time"><i class="far fa-clock me-2"></i>08:00 PM - 11:00 PM</p>
                            <p class="kb22r-venue"><i class="fas fa-map-marker-alt me-2"></i>Jamshed Memorial Hall</p>
                            <p class="kb22r-desc">Karachi Community Radio (KCR) hosts an immersive ambient electronic music session, accompanied by live procedural generative graphics matching audio rhythms.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Day 11 -->
            <div class="kb22r-day-card" data-category="seminars">
                <div class="kb22r-card-header" id="day-11-hdr">
                    <button class="kb22r-trigger collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#day-11" aria-expanded="false" aria-controls="day-11">
                        <span class="kb22r-date">Nov 10</span>
                        <span class="kb22r-day-title">Day 11: Digital Education Panel</span>
                        <span class="kb22r-chevron"><i class="fas fa-chevron-down"></i></span>
                    </button>
                </div>
                <div id="day-11" class="collapse" aria-labelledby="day-11-hdr" data-bs-parent="#programmingAccordion">
                    <div class="kb22r-card-body">
                        <div class="kb22r-event-detail">
                            <span class="kb22r-event-badge badge-seminars">Seminar</span>
                            <p class="kb22r-time"><i class="far fa-clock me-2"></i>11:00 AM - 02:00 PM</p>
                            <p class="kb22r-venue"><i class="fas fa-map-marker-alt me-2"></i>NJV Government Higher Secondary School</p>
                            <p class="kb22r-desc">A session presenting the results of the student outreach workshops. Education mentors discuss incorporating digital arts into local public school curriculums.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Day 12 -->
            <div class="kb22r-day-card" data-category="talks">
                <div class="kb22r-card-header" id="day-12-hdr">
                    <button class="kb22r-trigger collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#day-12" aria-expanded="false" aria-controls="day-12">
                        <span class="kb22r-date">Nov 11</span>
                        <span class="kb22r-day-title">Day 12: Creative Collaborations Talk</span>
                        <span class="kb22r-chevron"><i class="fas fa-chevron-down"></i></span>
                    </button>
                </div>
                <div id="day-12" class="collapse" aria-labelledby="day-12-hdr" data-bs-parent="#programmingAccordion">
                    <div class="kb22r-card-body">
                        <div class="kb22r-event-detail">
                            <span class="kb22r-event-badge badge-talks">Talks &amp; Panels</span>
                            <p class="kb22r-time"><i class="far fa-clock me-2"></i>05:00 PM - 07:00 PM</p>
                            <p class="kb22r-venue"><i class="fas fa-map-marker-alt me-2"></i>Alliance Française</p>
                            <p class="kb22r-desc">International artists share their experiences collaborating with Pakistani craftsmen, discussing mutual learning, technical barriers, and shared growth.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Day 13 -->
            <div class="kb22r-day-card" data-category="tours">
                <div class="kb22r-card-header" id="day-13-hdr">
                    <button class="kb22r-trigger collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#day-13" aria-expanded="false" aria-controls="day-13">
                        <span class="kb22r-date">Nov 12</span>
                        <span class="kb22r-day-title">Day 13: Patron Walkthrough &amp; Assembly</span>
                        <span class="kb22r-chevron"><i class="fas fa-chevron-down"></i></span>
                    </button>
                </div>
                <div id="day-13" class="collapse" aria-labelledby="day-13-hdr" data-bs-parent="#programmingAccordion">
                    <div class="kb22r-card-body">
                        <div class="kb22r-event-detail">
                            <span class="kb22r-event-badge badge-tours">Guided Tour</span>
                            <p class="kb22r-time"><i class="far fa-clock me-2"></i>04:00 PM - 08:30 PM</p>
                            <p class="kb22r-venue"><i class="fas fa-map-marker-alt me-2"></i>Clifton &amp; Art Gallery sites</p>
                            <p class="kb22r-desc">A guided final walkthrough for partners and friends of KBT, reflecting on the success and communal impact of the KB22 projects.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Day 14 -->
            <div class="kb22r-day-card" data-category="talks performances">
                <div class="kb22r-card-header" id="day-14-hdr">
                    <button class="kb22r-trigger collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#day-14" aria-expanded="false" aria-controls="day-14">
                        <span class="kb22r-date">Nov 13</span>
                        <span class="kb22r-day-title">Day 14: Prize Distribution &amp; Closing Ceremony</span>
                        <span class="kb22r-chevron"><i class="fas fa-chevron-down"></i></span>
                    </button>
                </div>
                <div id="day-14" class="collapse" aria-labelledby="day-14-hdr" data-bs-parent="#programmingAccordion">
                    <div class="kb22r-card-body">
                        <div class="kb22r-event-detail">
                            <span class="kb22r-event-badge badge-talks">Talks &amp; Panels</span>
                            <span class="kb22r-event-badge badge-performances">Performance</span>
                            <p class="kb22r-time"><i class="far fa-clock me-2"></i>05:00 PM - 09:00 PM</p>
                            <p class="kb22r-venue"><i class="fas fa-map-marker-alt me-2"></i>NJV Government Higher Secondary School</p>
                            <p class="kb22r-desc">The official closing of KB22. Featuring key speeches, the distribution of the five KB22 Art Prizes, and a celebratory concluding performance by digital sound collectives.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- 4. Client-Side Programming Filter Script -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    const filterButtons = document.querySelectorAll(".kb22r-filter-btn");
    const dayCards = document.querySelectorAll(".kb22r-day-card");

    filterButtons.forEach(button => {
        button.addEventListener("click", function() {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove("active"));
            // Add active class to current button
            this.classList.add("active");

            const filterValue = this.getAttribute("data-filter");

            dayCards.forEach(card => {
                const categories = card.getAttribute("data-category").split(" ");
                if (filterValue === "all" || categories.includes(filterValue)) {
                    card.style.display = "block";
                } else {
                    card.style.display = "none";
                }
            });
        });
    });
});
</script>

<?php include 'components/footer.php'; ?>
