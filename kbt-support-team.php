<?php 
  $pageTitle = 'KBT Support Team - Supporting Agencies of the Karachi Biennale Trust';
  $metaDesc = 'Meet the external support agencies and professionals who work with the Karachi Biennale Trust (KBT), including social media, digital marketing, PR, and web development partners.';
  $bodyClass = 'page-kbt-support-team'; // For unique CSS scoping
  include 'components/header.php'; 
?>

        <!-- A. Page Header Section (Hero Area) -->
        <section class="kbst-hero-section text-center">
            <div class="container">
                <h1 class="kbst-hero-title">KBT Support Team</h1>
                <p class="kbst-hero-intro">The Karachi Biennale Trust is supported by a dedicated network of external professionals and agencies who bring specialized expertise to ensure the seamless execution of the Biennale. From social media and digital marketing to public relations, web development, and application design, these valued partners play a vital role in amplifying the Trust's mission and connecting art with audiences across the globe.</p>
                <!-- Breadcrumbs -->
                <nav class="kbst-breadcrumbs" aria-label="breadcrumb">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li class="active" aria-current="page">KBT Support Team</li>
                    </ul>
                </nav>
            </div>
        </section>

        <!-- B. Support Team Grid / Profiles Section -->
        <section class="kbst-grid-section space">
            <div class="container">
                <div class="kbst-grid" role="region" aria-label="Support Team Members Grid">
                    
                    <!-- 1. Karokonnect -->
                    <article class="kbst-card text-center" aria-label="Support Partner Card: Karokonnect">
                        <div class="kbst-badge kbst-badge-social">Social Media</div>
                        <div class="kbst-avatar-placeholder">
                            <span class="kbst-initials">KK</span>
                        </div>
                        <h3 class="kbst-agency-name">Karokonnect</h3>
                        <p class="kbst-role">Social Media Agency</p>
                        <p class="kbst-individual">Ammar Hamdani and Zehra Hamdani</p>
                        <div class="kbst-link-wrap">
                            <span class="kbst-link-placeholder">Website Coming Soon</span>
                        </div>
                    </article>

                    <!-- 2. Alphabyte Digital -->
                    <article class="kbst-card text-center" aria-label="Support Partner Card: Alphabyte Digital">
                        <div class="kbst-badge kbst-badge-marketing">Digital Marketing</div>
                        <div class="kbst-avatar-placeholder">
                            <span class="kbst-initials">AD</span>
                        </div>
                        <h3 class="kbst-agency-name">Alphabyte Digital</h3>
                        <p class="kbst-role">Digital Marketing</p>
                        <p class="kbst-individual">Farhat Kapadia Mehboob</p>
                        <div class="kbst-link-wrap">
                            <span class="kbst-link-placeholder">Website Coming Soon</span>
                        </div>
                    </article>

                    <!-- 3. Starlinks PR -->
                    <article class="kbst-card text-center" aria-label="Support Partner Card: Starlinks PR and Event Management Company">
                        <div class="kbst-badge kbst-badge-pr">Public Relations</div>
                        <div class="kbst-avatar-placeholder">
                            <span class="kbst-initials">SL</span>
                        </div>
                        <h3 class="kbst-agency-name">Starlinks PR</h3>
                        <p class="kbst-role">Public Relations</p>
                        <p class="kbst-individual">Shanaz Ramzi</p>
                        <p class="kbst-note">Shanaz Ramzi also serves as a Trustee on the KBT Board.</p>
                        <div class="kbst-link-wrap">
                            <span class="kbst-link-placeholder">Website Coming Soon</span>
                        </div>
                    </article>

                    <!-- 4. Streamguys -->
                    <article class="kbst-card text-center" aria-label="Support Partner Card: Streamguys">
                        <div class="kbst-badge kbst-badge-dev">Web & App Development</div>
                        <div class="kbst-avatar-placeholder">
                            <span class="kbst-initials">SG</span>
                        </div>
                        <h3 class="kbst-agency-name">Streamguys</h3>
                        <p class="kbst-role">Website and App Development</p>
                        <p class="kbst-individual">Muhammad Mubashir</p>
                        <div class="kbst-link-wrap">
                            <span class="kbst-link-placeholder">Website Coming Soon</span>
                        </div>
                    </article>

                </div>
            </div>
        </section>

        <!-- C. Additional Content Enhancements (Gratitude Statement) -->
        <section class="kbst-legacy-section space-bottom">
            <div class="container text-center">
                <div class="kbst-legacy-card">
                    <p class="kbst-legacy-statement">The Karachi Biennale Trust extends its sincere gratitude to all its support team members and partner agencies. Their expertise, creativity, and dedication play an invaluable role in bringing the Biennale to life and connecting the Trust with audiences near and far. We are proud to collaborate with such exceptional professionals.</p>
                </div>
            </div>
        </section>

<?php include 'components/footer.php'; ?>
