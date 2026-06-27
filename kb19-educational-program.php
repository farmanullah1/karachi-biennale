<?php 
  $pageTitle = 'KB19 Educational Program - Second Karachi Biennale';
  $metaDesc = 'Learn about the KB19 Educational Program supported by TPL, engaging school children and educators in ecology and contemporary art.';
  $bodyClass = 'page-kb19-educational-program'; 
  include 'components/header.php'; 
?>

<!-- Skip Link for Accessibility -->
<a href="#kb19e-main-content" class="skip-link visually-hidden-focusable">Skip to content</a>

<!-- 1. Hero Banner Area -->
<section class="kb19e-hero-section">
    <div class="kb19e-hero-banner">
        <div class="kb19e-hero-overlay"></div>
        <div class="container text-center">
            <h1 class="kb19e-hero-title">Educational Program</h1>
            <p class="kb19e-hero-subtitle">Karachi Biennale 19</p>
            
            <!-- Breadcrumbs -->
            <nav class="kb19e-breadcrumbs" aria-label="breadcrumb">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li>Past Biennale</li>
                    <li>KB19</li>
                    <li class="active" aria-current="page">Educational Program</li>
                </ul>
            </nav>
        </div>
    </div>
</section>

<!-- 2. Main Content Area -->
<main id="kb19e-main-content" class="kb19e-main-wrapper">
    <div class="container">
        
        <!-- Intro & Partnership -->
        <section class="kb19e-intro-section mb-5">
            <div class="kb19e-intro-card">
                <div class="row align-items-center gy-4">
                    <div class="col-md-9">
                        <span class="kb19e-partner-tag">Supported by TPL</span>
                        <h2 class="kb19e-intro-title">Nurturing Critical Minds & Eco-Awareness</h2>
                        <p class="kb19e-intro-text">
                            The Second Karachi Biennale (KB19) Educational Program engaged students, teachers, and young learners through creative workshops, school tours, and interactive sessions. These initiatives fostered critical thinking, environmental awareness, and an appreciation for contemporary art in relation to ecology.
                        </p>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="kb19e-partner-logo-box">
                            <img src="assets/img/KB19App/TPL.png" alt="TPL Logo - Educational Program Partner" class="kb19e-partner-logo img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Program 1: The Jungle Book -->
        <section id="prog-jungle-book" class="kb19e-program-block">
            <div class="row gy-4">
                <div class="col-lg-5">
                    <div class="kb19e-program-info">
                        <span class="kb19e-prog-num">01</span>
                        <h3 class="kb19e-prog-title">The Jungle Book</h3>
                        <p class="kb19e-prog-desc">
                            The idea behind the workshop is to explore the multiple ways in which the word "Jungle" is used in our day-to-day vocabulary, with particular reference to our surrounding and environment. It looks into the evolution of how the urban jungle—our cities, towns, environments, neighbourhoods—has changed over time.
                        </p>
                        
                        <div class="kb19e-details-list">
                            <div class="kb19e-detail-item">
                                <span class="kb19e-detail-label">Type</span>
                                <strong class="kb19e-detail-val">School Workshops</strong>
                            </div>
                            <div class="kb19e-detail-item">
                                <span class="kb19e-detail-label">Age Group</span>
                                <strong class="kb19e-detail-val">13 – 15 years</strong>
                            </div>
                            <div class="kb19e-detail-item">
                                <span class="kb19e-detail-label">Timing</span>
                                <strong class="kb19e-detail-val">July – September 2019</strong>
                            </div>
                            <div class="kb19e-detail-item">
                                <span class="kb19e-detail-label">Subjects</span>
                                <strong class="kb19e-detail-val">Geography, History, Language, Communication, Research</strong>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-7">
                    <div class="kb19e-gallery-wrap">
                        <h4 class="kb19e-gallery-title"><i class="far fa-images me-2"></i>Jungle Book Workshop Gallery – 24th July</h4>
                        <div class="row g-2 popup-gallery">
                            <?php 
                            $jungleImages = [
                                'IMG_1679.jpg', 'IMG_1691.jpg', 'IMG_1712.jpg', 'IMG_1715.jpg',
                                'IMG_1720.jpg', 'IMG_1734.jpg', 'IMG_1735.jpg', 'IMG_1740.jpg',
                                'IMG_1747.jpg', 'IMG_1764.jpg', 'IMG_1595.jpg', 'IMG_1630.jpg'
                            ];
                            foreach($jungleImages as $img):
                            ?>
                            <div class="col-4 col-sm-3">
                                <a href="assets/img/KB19App/<?php echo $img; ?>" class="kb19e-gallery-link popup-image" title="Jungle Book Educational Workshop Session">
                                    <div class="kb19e-gallery-card">
                                        <img src="assets/img/KB19App/<?php echo $img; ?>" alt="Jungle Book Educational Workshop" class="kb19e-gallery-img">
                                        <div class="kb19e-gallery-overlay"><i class="fas fa-search-plus"></i></div>
                                    </div>
                                </a>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Program 2: School Workshops -->
        <section id="prog-school-workshops" class="kb19e-program-block">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-6">
                    <div class="kb19e-illustration-card">
                        <div class="kb19e-details-list style-card">
                            <div class="kb19e-detail-item">
                                <span class="kb19e-detail-label">Age Group</span>
                                <strong class="kb19e-detail-val">10+ years</strong>
                            </div>
                            <div class="kb19e-detail-item">
                                <span class="kb19e-detail-label">Timing</span>
                                <strong class="kb19e-detail-val">July – September 2019</strong>
                            </div>
                            <div class="kb19e-detail-item">
                                <span class="kb19e-detail-label">Venue</span>
                                <strong class="kb19e-detail-val">Premise of the Schools</strong>
                            </div>
                            <div class="kb19e-detail-item">
                                <span class="kb19e-detail-label">Requirement</span>
                                <strong class="kb19e-detail-val">Multimedia Setup</strong>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="kb19e-program-info">
                        <span class="kb19e-prog-num">02</span>
                        <h3 class="kb19e-prog-title">School Workshops</h3>
                        <p class="kb19e-prog-desc">
                            With a focus on contemporary art, and getting students to understand the work and purpose of artists, these workshops take place within the schools. The workshops focus on questions like: What is Art? Why do we do it? Taking forward the workshops that we did last year, we will expand the conversation around art to focus on the environment and how artists have been instrumental in bringing focus to the world around them.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Program 3: School Tours -->
        <section id="prog-school-tours" class="kb19e-program-block">
            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="kb19e-program-info">
                        <span class="kb19e-prog-num">03</span>
                        <h3 class="kb19e-prog-title">School Tours</h3>
                        <p class="kb19e-prog-desc">
                            The tours revolve around the artworks at the venue, where as a group we critically analyse them. The tour ensures that the visit stresses the Curatorial focus and how artists have responded to the call. Through interactive discussion and exploration, we question the works and develop knowledge collectively.
                        </p>
                        
                        <div class="kb19e-details-list">
                            <div class="kb19e-detail-item">
                                <span class="kb19e-detail-label">Age Group</span>
                                <strong class="kb19e-detail-val">8 – 15 years</strong>
                            </div>
                            <div class="kb19e-detail-item">
                                <span class="kb19e-detail-label">Timing</span>
                                <strong class="kb19e-detail-val">26 October – 8 November 2019 (Mon – Thu)</strong>
                            </div>
                            <div class="kb19e-detail-item">
                                <span class="kb19e-detail-label">Venues</span>
                                <strong class="kb19e-detail-val">Multiple Exhibition Venues</strong>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="kb19e-tours-schedule-card">
                        <h4 class="kb19e-schedule-card-title"><i class="far fa-calendar-alt me-2"></i>Tour & Guided Walk Schedule</h4>
                        <div class="kb19e-schedule-timeline">
                            <div class="kb19e-timeline-item">
                                <span class="kb19e-time-tag">28 – 31 Oct</span>
                                <div class="kb19e-timeline-details">
                                    <strong>Tours for School Children</strong>
                                    <p>10:00 am – 12:00 pm at Bagh-e-Ibn-Qasim</p>
                                </div>
                            </div>
                            <div class="kb19e-timeline-item">
                                <span class="kb19e-time-tag">27 Oct – 11 Nov</span>
                                <div class="kb19e-timeline-details">
                                    <strong>Sensory Installations Session</strong>
                                    <p>10:00 am – 5:00 pm at Bagh-e-Ibn-Qasim (Free/Open to Public)</p>
                                </div>
                            </div>
                            <div class="kb19e-timeline-item">
                                <span class="kb19e-time-tag">2 – 7 Nov</span>
                                <div class="kb19e-timeline-details">
                                    <strong>Art Teachers Workshop & Tour</strong>
                                    <p>10:00 am – 12:00 pm at Bagh-e-Ibn-Qasim</p>
                                </div>
                            </div>
                            <div class="kb19e-timeline-item">
                                <span class="kb19e-time-tag">2 Nov & 9 Nov</span>
                                <div class="kb19e-timeline-details">
                                    <strong>Art Teachers Guided Tour</strong>
                                    <p>10:00 am – 12:00 pm at Bagh-e-Ibn-Qasim</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</main>

<?php include 'components/footer.php'; ?>
