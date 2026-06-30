<?php 
  $pageTitle = 'KB22 At A Glance - Third Karachi Biennale';
  $metaDesc = 'Explore the highlights of the Third Karachi Biennale (KB22) under the theme Collective Imagination, Now and the Next: An Intersection of Art and Technology.';
  $bodyClass = 'page-kb22-at-a-glance'; 
  include 'components/header.php'; 
?>

<!-- 1. Page Header (Hero Area) -->
<section class="kb22-ataglance-hero text-center">
    <div class="kb22-ataglance-hero-overlay"></div>
    <div class="container position-relative z-index-2">
        <h1 class="kb22-ataglance-hero-title wow custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.1s">Collective Imagination, Now and the Next</h1>
        <p class="kb22-ataglance-hero-subtitle wow custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.25s">An Intersection of Art and Technology</p>
        
        <!-- Breadcrumbs -->
        <nav class="kb22-ataglance-breadcrumbs" aria-label="breadcrumb">
            <ul class="wow custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.4s">
                <li><a href="index.php">Home</a></li>
                <li>Past Biennale</li>
                <li>KB22</li>
                <li class="active" aria-current="page">At A Glance</li>
            </ul>
        </nav>
    </div>
</section>

<!-- Quick Navigation Jump Bar -->
<div class="kb22-ataglance-jump-bar-wrap">
    <div class="container text-center">
        <nav class="kb22-ataglance-jump-bar" aria-label="Quick Jump Menu">
            <span class="kb22-ataglance-jump-title">Jump to:</span>
            <a href="#milestones" class="kb22-ataglance-jump-link">Milestones</a>
            <a href="#testimonials" class="kb22-ataglance-jump-link">Testimonials</a>
            <a href="#performance" class="kb22-ataglance-jump-link">Performance Highlights</a>
            <a href="#downloads" class="kb22-ataglance-jump-link">Downloads</a>
        </nav>
    </div>
</div>

<div class="kb22-ataglance-main-wrapper">
    <!-- 2. Statistics / Milestones Section -->
    <section id="milestones" class="kb22-ataglance-section kb22-ataglance-stats-section">
        <div class="container">
            <div class="kb22-ataglance-section-header text-center mb-5">
                <span class="kb22-ataglance-tag"><i class="fas fa-chart-bar me-2"></i>Biennale Metrics</span>
                <h2 class="kb22-ataglance-section-title">KB22 Statistics & Milestones</h2>
            </div>
            
            <div class="row g-4 justify-content-center">
                <!-- Stat 1: Artists -->
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="kb22-ataglance-stat-card wow custom-anim-top" data-wow-delay="0.1s">
                        <span class="kb22-ataglance-stat-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="54" height="54" fill="none">
                                <defs>
                                    <linearGradient id="g1a" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" stop-color="#00b8ff"/>
                                        <stop offset="100%" stop-color="#0055a5"/>
                                    </linearGradient>
                                    <linearGradient id="g1b" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" stop-color="#e0f4ff"/>
                                        <stop offset="100%" stop-color="#b3e0ff"/>
                                    </linearGradient>
                                </defs>
                                <!-- Palette board -->
                                <ellipse cx="32" cy="36" rx="24" ry="18" fill="url(#g1b)" opacity="0.9"/>
                                <ellipse cx="32" cy="36" rx="24" ry="18" fill="none" stroke="url(#g1a)" stroke-width="2"/>
                                <!-- Paint blobs -->
                                <circle cx="22" cy="34" r="4.5" fill="#ff6b6b"/>
                                <circle cx="32" cy="30" r="4.5" fill="#ffd93d"/>
                                <circle cx="42" cy="34" r="4.5" fill="#6bcb77"/>
                                <circle cx="27" cy="42" r="4.5" fill="url(#g1a)"/>
                                <circle cx="37" cy="42" r="4.5" fill="#b983ff"/>
                                <!-- Brush -->
                                <rect x="42" y="10" width="5" height="20" rx="2.5" fill="url(#g1a)"/>
                                <ellipse cx="44.5" cy="30" rx="3" ry="4" fill="#fff" opacity="0.8"/>
                                <ellipse cx="44.5" cy="11" rx="2" ry="2.5" fill="#c8efff"/>
                            </svg>
                        </span>
                        <span class="kb22-ataglance-stat-num">45</span>
                        <span class="kb22-ataglance-stat-lbl">Artists</span>
                    </div>
                </div>

                <!-- Stat 2: Countries -->
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="kb22-ataglance-stat-card wow custom-anim-top" data-wow-delay="0.2s">
                        <span class="kb22-ataglance-stat-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="54" height="54" fill="none">
                                <defs>
                                    <linearGradient id="g2a" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" stop-color="#00c6ff"/>
                                        <stop offset="100%" stop-color="#0072ff"/>
                                    </linearGradient>
                                    <linearGradient id="g2b" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" stop-color="#4fc3f7"/>
                                        <stop offset="100%" stop-color="#0288d1"/>
                                    </linearGradient>
                                </defs>
                                <!-- Globe sphere -->
                                <circle cx="32" cy="32" r="22" fill="url(#g2a)" opacity="0.15"/>
                                <circle cx="32" cy="32" r="22" fill="none" stroke="url(#g2a)" stroke-width="2"/>
                                <!-- Latitude lines -->
                                <ellipse cx="32" cy="32" rx="22" ry="9" fill="none" stroke="url(#g2b)" stroke-width="1" opacity="0.5"/>
                                <line x1="10" y1="32" x2="54" y2="32" stroke="url(#g2b)" stroke-width="1" opacity="0.5"/>
                                <!-- Meridian -->
                                <ellipse cx="32" cy="32" rx="10" ry="22" fill="none" stroke="url(#g2b)" stroke-width="1" opacity="0.5"/>
                                <!-- Land mass shapes -->
                                <path d="M24 22 Q28 19 32 22 Q36 26 33 30 Q29 34 25 30 Z" fill="url(#g2a)" opacity="0.7"/>
                                <path d="M38 32 Q42 29 44 33 Q43 37 40 36 Z" fill="url(#g2a)" opacity="0.5"/>
                                <path d="M20 35 Q23 32 26 35 Q25 39 21 38 Z" fill="url(#g2a)" opacity="0.5"/>
                                <!-- Pin -->
                                <circle cx="32" cy="16" r="4" fill="#ff5252"/>
                                <path d="M32 20 L32 26" stroke="#ff5252" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </span>
                        <span class="kb22-ataglance-stat-num">13</span>
                        <span class="kb22-ataglance-stat-lbl">Countries</span>
                    </div>
                </div>

                <!-- Stat 3: Projects -->
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="kb22-ataglance-stat-card wow custom-anim-top" data-wow-delay="0.3s">
                        <span class="kb22-ataglance-stat-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="54" height="54" fill="none">
                                <defs>
                                    <linearGradient id="g3a" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" stop-color="#a18cd1"/>
                                        <stop offset="100%" stop-color="#0088cb"/>
                                    </linearGradient>
                                </defs>
                                <!-- Canvas frame -->
                                <rect x="10" y="8" width="44" height="38" rx="3" fill="url(#g3a)" opacity="0.12"/>
                                <rect x="10" y="8" width="44" height="38" rx="3" fill="none" stroke="url(#g3a)" stroke-width="2.5"/>
                                <!-- Easel legs -->
                                <line x1="22" y1="46" x2="18" y2="58" stroke="url(#g3a)" stroke-width="2.5" stroke-linecap="round"/>
                                <line x1="42" y1="46" x2="46" y2="58" stroke="url(#g3a)" stroke-width="2.5" stroke-linecap="round"/>
                                <line x1="32" y1="46" x2="32" y2="56" stroke="url(#g3a)" stroke-width="2" stroke-linecap="round"/>
                                <!-- Painting content: sunrise landscape -->
                                <rect x="14" y="12" width="36" height="30" rx="2" fill="#e8f4ff"/>
                                <!-- Sky gradient band -->
                                <rect x="14" y="12" width="36" height="15" rx="2" fill="#b3d9f5"/>
                                <!-- Sun -->
                                <circle cx="32" cy="22" r="5" fill="#ffd93d"/>
                                <!-- Ground hills -->
                                <ellipse cx="20" cy="42" rx="12" ry="7" fill="#6bcb77" opacity="0.7"/>
                                <ellipse cx="44" cy="42" rx="12" ry="7" fill="#4db870" opacity="0.7"/>
                                <!-- Top bar -->
                                <rect x="10" y="8" width="44" height="5" rx="3" fill="url(#g3a)"/>
                            </svg>
                        </span>
                        <span class="kb22-ataglance-stat-num">26</span>
                        <span class="kb22-ataglance-stat-lbl">Projects</span>
                    </div>
                </div>

                <!-- Stat 4: Venues -->
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="kb22-ataglance-stat-card wow custom-anim-top" data-wow-delay="0.4s">
                        <span class="kb22-ataglance-stat-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="54" height="54" fill="none">
                                <defs>
                                    <linearGradient id="g4a" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" stop-color="#74b9ff"/>
                                        <stop offset="100%" stop-color="#0055a5"/>
                                    </linearGradient>
                                </defs>
                                <!-- Base -->
                                <rect x="8" y="42" width="48" height="6" rx="2" fill="url(#g4a)" opacity="0.4"/>
                                <!-- Main building body -->
                                <rect x="14" y="22" width="36" height="26" rx="1" fill="url(#g4a)" opacity="0.15"/>
                                <rect x="14" y="22" width="36" height="26" rx="1" fill="none" stroke="url(#g4a)" stroke-width="2"/>
                                <!-- Roof / pediment -->
                                <path d="M10 24 L32 8 L54 24 Z" fill="url(#g4a)" opacity="0.8"/>
                                <path d="M14 24 L32 11 L50 24 Z" fill="#e8f6ff"/>
                                <!-- Columns -->
                                <rect x="18" y="24" width="5" height="24" rx="2" fill="url(#g4a)" opacity="0.6"/>
                                <rect x="29.5" y="24" width="5" height="24" rx="2" fill="url(#g4a)" opacity="0.6"/>
                                <rect x="41" y="24" width="5" height="24" rx="2" fill="url(#g4a)" opacity="0.6"/>
                                <!-- Door -->
                                <rect x="27" y="34" width="10" height="14" rx="2" fill="url(#g4a)"/>
                                <!-- Pediment detail triangle -->
                                <path d="M22 24 L32 14 L42 24 Z" fill="none" stroke="url(#g4a)" stroke-width="1.5" opacity="0.5"/>
                            </svg>
                        </span>
                        <span class="kb22-ataglance-stat-num">9</span>
                        <span class="kb22-ataglance-stat-lbl">Venues</span>
                    </div>
                </div>

                <!-- Stat 5: Visitors -->
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="kb22-ataglance-stat-card wow custom-anim-top" data-wow-delay="0.5s">
                        <span class="kb22-ataglance-stat-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="54" height="54" fill="none">
                                <defs>
                                    <linearGradient id="g5a" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" stop-color="#00c9ff"/>
                                        <stop offset="100%" stop-color="#0055a5"/>
                                    </linearGradient>
                                    <linearGradient id="g5b" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" stop-color="#e0f8ff"/>
                                        <stop offset="100%" stop-color="#c0ecff"/>
                                    </linearGradient>
                                </defs>
                                <!-- Person 1 (center, front) -->
                                <circle cx="32" cy="18" r="7" fill="url(#g5a)"/>
                                <path d="M18 46 Q18 32 32 32 Q46 32 46 46" fill="url(#g5b)" stroke="url(#g5a)" stroke-width="1.5"/>
                                <!-- Person 2 (left, back) -->
                                <circle cx="17" cy="20" r="5.5" fill="#74b9ff" opacity="0.85"/>
                                <path d="M6 46 Q6 34 17 34 Q24 34 26 40" fill="#d6eeff" opacity="0.7"/>
                                <!-- Person 3 (right, back) -->
                                <circle cx="47" cy="20" r="5.5" fill="#74b9ff" opacity="0.85"/>
                                <path d="M38 40 Q40 34 47 34 Q58 34 58 46" fill="#d6eeff" opacity="0.7"/>
                                <!-- Crowd dots hint -->
                                <circle cx="12" cy="52" r="2" fill="url(#g5a)" opacity="0.4"/>
                                <circle cx="32" cy="54" r="2.5" fill="url(#g5a)" opacity="0.5"/>
                                <circle cx="52" cy="52" r="2" fill="url(#g5a)" opacity="0.4"/>
                            </svg>
                        </span>
                        <span class="kb22-ataglance-stat-num">29,000+</span>
                        <span class="kb22-ataglance-stat-lbl">Visitors</span>
                    </div>
                </div>

                <!-- Stat 6: Media Reach (highlight card) -->
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="kb22-ataglance-stat-card highlight wow custom-anim-top" data-wow-delay="0.6s">
                        <span class="kb22-ataglance-stat-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="54" height="54" fill="none">
                                <defs>
                                    <linearGradient id="g6a" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" stop-color="#00d2ff"/>
                                        <stop offset="100%" stop-color="#0055a5"/>
                                    </linearGradient>
                                    <linearGradient id="g6b" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" stop-color="#a8edea"/>
                                        <stop offset="100%" stop-color="#fed6e3"/>
                                    </linearGradient>
                                </defs>
                                <!-- Phone body -->
                                <rect x="18" y="6" width="28" height="48" rx="6" fill="url(#g6a)" opacity="0.15"/>
                                <rect x="18" y="6" width="28" height="48" rx="6" fill="none" stroke="url(#g6a)" stroke-width="2.5"/>
                                <!-- Screen -->
                                <rect x="22" y="14" width="20" height="28" rx="2" fill="url(#g6b)" opacity="0.7"/>
                                <!-- Signal waves / wifi bars on screen -->
                                <path d="M32 30 Q36 26 40 30" fill="none" stroke="#0088cb" stroke-width="1.5" stroke-linecap="round" opacity="0.8"/>
                                <path d="M32 30 Q38 22 44 30" fill="none" stroke="#0088cb" stroke-width="1.5" stroke-linecap="round" opacity="0.5"/>
                                <circle cx="32" cy="32" r="2" fill="#0088cb"/>
                                <!-- Star/shine burst top right -->
                                <path d="M48 10 L50 14 L54 10 L50 6 Z" fill="#ffd93d" opacity="0.9"/>
                                <!-- Home button -->
                                <circle cx="32" cy="48" r="3" fill="none" stroke="url(#g6a)" stroke-width="1.5"/>
                                <!-- Notch -->
                                <rect x="28" y="8" width="8" height="2.5" rx="1.25" fill="url(#g6a)" opacity="0.6"/>
                            </svg>
                        </span>
                        <span class="kb22-ataglance-stat-num">10M+</span>
                        <span class="kb22-ataglance-stat-lbl">Media Reach</span>
                    </div>
                </div>
            </div>


            <div class="row justify-content-center mt-5">
                <div class="col-lg-8 text-center wow custom-anim-top" data-wow-delay="0.3s">
                    <p class="kb22-ataglance-stats-info-text">The Third Karachi Biennale achieved an impressive media reach of 10M+ viewers via social media, print, TV, radio, and digital marketing, positioning Karachi as a prominent hub for the global dialogue on art and tech.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Video Testimonials Section -->
    <section id="testimonials" class="kb22-ataglance-section kb22-ataglance-video-section">
        <div class="container">
            <div class="kb22-ataglance-section-header text-center mb-5">
                <span class="kb22-ataglance-tag"><i class="fas fa-comment-dots me-2"></i>Audience Voices</span>
                <h2 class="kb22-ataglance-section-title">Visitor Testimonials</h2>
            </div>

            <div class="row g-4">
                <!-- Testimonial 1 -->
                <div class="col-md-6">
                    <div class="kb22-ataglance-video-card wow custom-anim-left" data-wow-duration="1.2s">
                        <div class="kb22-ataglance-video-thumb-wrap">
                            <img src="assets/img/KB22AtAGlance/Visitor-Testimonial-at-Sambara-Gallery.png" alt="Visitor Testimonial at Sambara Gallery" class="kb22-ataglance-video-thumb" loading="lazy">
                            <div class="kb22-ataglance-overlay-glow"></div>
                            <a href="https://www.youtube.com/watch?v=RD6mjuVsB2M" target="_blank" class="kb22-ataglance-play-btn" aria-label="Play testimonial video">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                        <div class="kb22-ataglance-video-info">
                            <h4 class="kb22-ataglance-video-caption">Visitor Testimonial at Sambara Gallery</h4>
                            <p class="kb22-ataglance-video-desc">Step into the visitor dialogue at Sambara Art Gallery, capturing initial public responses to digital interventions.</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="col-md-6">
                    <div class="kb22-ataglance-video-card wow custom-anim-right" data-wow-duration="1.2s">
                        <div class="kb22-ataglance-video-thumb-wrap">
                            <img src="assets/img/KB22AtAGlance/Screenshot-2023-05-29-at-2-36-26-PM-2048x1281.png" alt="Visitor Testimonial at Alliance Francaise" class="kb22-ataglance-video-thumb" loading="lazy">
                            <div class="kb22-ataglance-overlay-glow"></div>
                            <a href="https://www.youtube.com/watch?v=faangcixZg4" target="_blank" class="kb22-ataglance-play-btn" aria-label="Play testimonial video">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                        <div class="kb22-ataglance-video-info">
                            <h4 class="kb22-ataglance-video-caption">Visitor Testimonial at Alliance Française</h4>
                            <p class="kb22-ataglance-video-desc">Interviews and public insights regarding performative installations hosted at Alliance Française.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Performance Highlights Section -->
    <section id="performance" class="kb22-ataglance-section kb22-ataglance-highlights-section">
        <div class="container">
            <div class="kb22-ataglance-section-header text-center mb-5">
                <span class="kb22-ataglance-tag"><i class="fas fa-tv me-2"></i>Curated Activities</span>
                <h2 class="kb22-ataglance-section-title">Performance Highlights & Round Up</h2>
            </div>

            <!-- Major Retrospective Video -->
            <div class="kb22-ataglance-major-video mb-5 wow custom-anim-top" data-wow-duration="1.5s">
                <div class="kb22-ataglance-major-video-banner">
                    <img src="assets/img/KB22AtAGlance/kb22-roundup.jpg" alt="KB22 Round Up" class="kb22-ataglance-major-video-bg" loading="lazy">
                    <div class="kb22-ataglance-major-overlay"></div>
                    <div class="kb22-ataglance-major-content">
                        <a href="https://youtu.be/arnpRIxqB9k" target="_blank" class="kb22-ataglance-major-play" aria-label="Play KB22 Round up video">
                            <i class="far fa-play-circle"></i>
                        </a>
                        <h3>KB22 Round Up</h3>
                        <p>The definitive retrospective summarizing the 14 days of tech-art visual programming and curatorial processes.</p>
                    </div>
                </div>
            </div>

            <!-- Grid of specific performances -->
            <div class="row g-4">
                <!-- Perf 1 -->
                <div class="col-md-6 col-lg-3">
                    <div class="kb22-ataglance-perf-card wow custom-anim-top" data-wow-delay="0.1s">
                        <div class="kb22-ataglance-perf-thumb-wrap">
                            <img src="assets/img/KB22AtAGlance/Amin-Gulgee-Thumbnail.webp" alt="Amin Gulgee" class="kb22-ataglance-perf-thumb" loading="lazy">
                            <a href="https://youtu.be/Vzg9NyTPSbM" target="_blank" class="kb22-ataglance-perf-play-btn"><i class="fas fa-play"></i></a>
                        </div>
                        <div class="kb22-ataglance-perf-body">
                            <h4>Amin Gulgee with Students of NJV School</h4>
                            <p>Collaborative performance mapping sculptural forms with physical movements.</p>
                        </div>
                    </div>
                </div>

                <!-- Perf 2 -->
                <div class="col-md-6 col-lg-3">
                    <div class="kb22-ataglance-perf-card wow custom-anim-top" data-wow-delay="0.2s">
                        <div class="kb22-ataglance-perf-thumb-wrap">
                            <img src="assets/img/KB22AtAGlance/Cosmic-Tribe-Thumbnail.webp" alt="Cosmic Tribe" class="kb22-ataglance-perf-thumb" loading="lazy">
                            <a href="https://youtu.be/vseGh7dIE6o" target="_blank" class="kb22-ataglance-perf-play-btn"><i class="fas fa-play"></i></a>
                        </div>
                        <div class="kb22-ataglance-perf-body">
                            <h4>Cosmic Tribe</h4>
                            <p>Constructed live situations blending neon rituals, dance, and technology.</p>
                        </div>
                    </div>
                </div>

                <!-- Perf 3 -->
                <div class="col-md-6 col-lg-3">
                    <div class="kb22-ataglance-perf-card wow custom-anim-top" data-wow-delay="0.3s">
                        <div class="kb22-ataglance-perf-thumb-wrap">
                            <img src="assets/img/KB22AtAGlance/Kcr-thumbnail.webp" alt="Karachi Community Radio" class="kb22-ataglance-perf-thumb" loading="lazy">
                            <a href="https://youtu.be/WwrSeKVMATE" target="_blank" class="kb22-ataglance-perf-play-btn"><i class="fas fa-play"></i></a>
                        </div>
                        <div class="kb22-ataglance-perf-body">
                            <h4>Karachi Community Radio (KCR)</h4>
                            <p>Live cyber broadcasts and experimental soundscapes linking artists.</p>
                        </div>
                    </div>
                </div>

                <!-- Perf 4 -->
                <div class="col-md-6 col-lg-3">
                    <div class="kb22-ataglance-perf-card wow custom-anim-top" data-wow-delay="0.4s">
                        <div class="kb22-ataglance-perf-thumb-wrap">
                            <img src="assets/img/KB22AtAGlance/microtonal_thumbnail.webp" alt="Faqir Zulfiqar and Invisible Flock" class="kb22-ataglance-perf-thumb" loading="lazy">
                            <a href="https://youtu.be/z1_VL_rPIFY" target="_blank" class="kb22-ataglance-perf-play-btn"><i class="fas fa-play"></i></a>
                        </div>
                        <div class="kb22-ataglance-perf-body">
                            <h4>Faqir Zulfiqar & Invisible Flock</h4>
                            <p>An interactive audio design merging traditional instruments with virtual space.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Photography Credits Section -->
    <section class="kb22-ataglance-section kb22-ataglance-credits-section">
        <div class="container text-center">
            <div class="kb22-ataglance-credits-card wow custom-anim-top" data-wow-duration="1.2s">
                <h4><i class="fas fa-camera me-2 text-cyan"></i> Photography Credits</h4>
                <p>Danish Khan, Humayun Memon, Qamar Bana, Haya Faruqui, Karokonnect</p>
            </div>
        </div>
    </section>

    <!-- 6. Downloads & Contact Section -->
    <section id="downloads" class="kb22-ataglance-section kb22-ataglance-downloads-section">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <div class="kb22-ataglance-downloads-box h-100 wow custom-anim-left">
                        <h3 class="kb22-ataglance-box-title"><i class="fas fa-file-download me-2"></i> Documents & Archive</h3>
                        <p class="kb22-ataglance-box-text">Download the official documentation and reports of our past biennale iterations:</p>
                        
                        <div class="kb22-ataglance-download-links">
                            <a href="assets/Third-Karachi-Biennale-Report.pdf" download class="kb22-ataglance-btn-download">
                                <i class="fas fa-file-pdf me-2 text-gold"></i> Download KB22 Report (PDF)
                            </a>
                            <a href="assets/KB-catalogue-proofread-edit.pdf" download class="kb22-ataglance-btn-download">
                                <i class="fas fa-file-pdf me-2 text-gold"></i> Download KB17 Karachi Biennale Catalogue (PDF)
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="kb22-ataglance-contact-box h-100 wow custom-anim-right">
                        <h3 class="kb22-ataglance-box-title"><i class="fas fa-info-circle me-2"></i> Contact Information</h3>
                        <p class="kb22-ataglance-box-text">For inquiries regarding KB22 research, artist submissions, or media archives, reach out directly:</p>
                        <div class="kb22-ataglance-contact-links">
                            <a href="tel:+922135157566"><i class="fas fa-phone-alt me-2 text-gold"></i> +92 21 35157566</a>
                            <a href="mailto:info@karachibiennale.org.pk"><i class="fas fa-envelope me-2 text-gold"></i> info@karachibiennale.org.pk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include 'components/footer.php'; ?>
