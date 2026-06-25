<?php 
  $pageTitle = 'KB22 Report - Third Karachi Biennale Archive';
  $metaDesc = 'Read and download the official Third Karachi Biennale (KB22) Report, featuring curatorial summaries, artist interviews, and full exhibition archives.';
  $bodyClass = 'page-kb22-report'; 
  include 'components/header.php'; 
?>

<!-- 1. Page Header (Hero Area) -->
<section class="kb22e-hero-section text-center">
    <div class="container">
        <h1 class="kb22e-hero-title">Official Report</h1>
        <p class="kb22e-hero-subtitle">Third Karachi Biennale KB22 Archive</p>
        <p class="kb22e-hero-intro">Access the complete documentation of the Third Karachi Biennale (KB22). The official report details our curatorial vision, artists profiles, outreach workshops, venue guides, media reviews, and the communal impact of exploring art and technology in public spaces.</p>
        
        <!-- Breadcrumbs -->
        <nav class="kb22e-breadcrumbs" aria-label="breadcrumb">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>Past Biennale</li>
                <li>KB22</li>
                <li class="active" aria-current="page">Official Report</li>
            </ul>
        </nav>
    </div>
</section>

<!-- 2. Main Content Section -->
<div class="kb22e-content-wrap">
    <div class="container">
        <div class="kb22e-report-card">
            <div class="row align-items-center g-5">
                <!-- Left Side: Interactive Report Cover & Download Actions -->
                <div class="col-lg-5 text-center">
                    <div class="kb22e-cover-box">
                        <div class="kb22e-icon-wrap">
                            <i class="far fa-file-pdf"></i>
                        </div>
                        <h3 class="kb22e-cover-title">Third Karachi Biennale KB22</h3>
                        <p class="kb22e-cover-subtitle">Collective Imagination: Now and the Next</p>
                        <span class="kb22e-file-size">Format: PDF | Size: 16.3 MB</span>
                        
                        <div class="kb22e-actions">
                            <a href="assets/Third-Karachi-Biennale-Report.pdf" download class="kb22e-btn kb22e-btn-primary mb-3">
                                <i class="fas fa-download me-2"></i> Download Report
                            </a>
                            <a href="assets/Third-Karachi-Biennale-Report.pdf" target="_blank" class="kb22e-btn kb22e-btn-secondary">
                                <i class="fas fa-eye me-2"></i> View in Browser
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Right Side: Report Summary & Chapter Guide -->
                <div class="col-lg-7">
                    <div class="kb22e-details">
                        <h2 class="kb22e-section-title">Report Overview</h2>
                        <p class="kb22e-summary-text">The official report stands as a comprehensive record of the Karachi Biennale Trust's execution of KB22. It outlines how contemporary digital art, augmented reality mapping, and interactive installations were successfully integrated into the public architecture and schools of Karachi, bridging the local digital divide.</p>
                        
                        <h4 class="kb22e-subtitle">Key Chapters &amp; Contents</h4>
                        <ul class="kb22e-chapter-list">
                            <li>
                                <strong>Chapter 01: Curatorial Vision</strong>
                                <span>Chief Curator Faisal Anwar explains the rubric "Collective Imagination: Now and the Next", outlining his conceptual framework and methodology.</span>
                            </li>
                            <li>
                                <strong>Chapter 02: Artist Profiles &amp; Portfolios</strong>
                                <span>Complete portfolios of the 45 local and international artists, including interviews, technical drafts, and installation photos.</span>
                            </li>
                            <li>
                                <strong>Chapter 03: Exhibition Venues Guide</strong>
                                <span>Maps and architectural reports detailing the activation of the 9 heritage, academic, and gallery sites.</span>
                            </li>
                            <li>
                                <strong>Chapter 04: Community Outreach &amp; Labs</strong>
                                <span>Reports on the 7 distinct outreach workshops, children art programs, and public mapping seminars.</span>
                            </li>
                            <li>
                                <strong>Chapter 05: Art Prizes &amp; Awards</strong>
                                <span>Profiles of the five KB22 art prize winners, detailing their artwork submissions and judges' statements.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'components/footer.php'; ?>
