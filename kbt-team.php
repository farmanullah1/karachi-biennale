<?php 
  $pageTitle = 'KBT Team - Karachi Biennale Trust Team Members';
  $metaDesc = 'Meet the dedicated team behind the Karachi Biennale Trust (KBT), including the Artistic Director, Deputy General Manager, and communications professionals.';
  $bodyClass = 'page-kbt-team'; // For unique CSS scoping
  include 'components/header.php'; 
?>

        <!-- A. Page Header Section (Hero Area) -->
        <section class="kbtm-hero-section text-center">
            <div class="container">
                <h1 class="kbtm-hero-title">KBT Team</h1>
                <p class="kbtm-hero-intro">The Karachi Biennale Trust is powered by a passionate and dedicated team of professionals who work tirelessly to bring the vision of the Biennale to life. From artistic direction and financial management to communications and social media, each team member brings unique expertise and unwavering commitment to the Trust's mission of promoting creativity, innovation, and criticality in the visual arts.</p>
                <!-- Breadcrumbs -->
                <nav class="kbtm-breadcrumbs" aria-label="breadcrumb">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li class="active" aria-current="page">KBT Team</li>
                    </ul>
                </nav>
            </div>
        </section>

        <!-- B. Team Grid / Profiles Section -->
        <section class="kbtm-grid-section space">
            <div class="container">
                <div class="kbtm-grid" role="region" aria-label="Team Members Grid">
                    
                    <!-- 1. Bushra Hussain -->
                    <article class="kbtm-card text-center" aria-label="Team Card: Bushra Hussain">
                        <div class="kbtm-avatar-wrap">
                            <img src="assets/img/team/bushra.jpg" alt="Portrait of Bushra Hussain – Artistic Director, Karachi Biennale Trust" class="kbtm-avatar">
                        </div>
                        <h3 class="kbtm-name">Bushra Hussain</h3>
                        <span class="kbtm-role">Artistic Director, KBT</span>
                        <div class="kbtm-bio-wrap">
                            <p class="kbtm-bio">
                                <span class="kbtm-bio-intro">Bushra Hussain is a Karachi-based art professional with close to two decades of experience working with art galleries and institutions, combining curatorial and art management skills. She holds a Bachelor of Fine Arts from the National College of Arts, Lahore, having graduated in 1992.</span><span class="kbtm-bio-ellipsis">...</span><span class="kbtm-bio-more d-none"> She has worked as an independent visual arts consultant, offering expertise in curation, gallery management, archiving, research, and art collection management to leading collectors in the country and prestigious art galleries. She has also been an integral part of the Karachi Biennale Trust since its inception as a founding Trustee, where she supported three iterations of the Karachi Biennale—KB17, KB19, and KB22—in a voluntary capacity. Her major contribution has been as Chair of the Prizes Committee, where she established five art prizes.</span>
                            </p>
                            <button class="kbtm-more-btn" onclick="toggleBio(this)">Read More</button>
                        </div>
                    </article>

                    <!-- 2. Syeda Yumna Fatima -->
                    <article class="kbtm-card text-center" aria-label="Team Card: Syeda Yumna Fatima">
                        <div class="kbtm-avatar-wrap">
                            <img src="assets/img/team/Syeda-Yumna-Fatima.png" alt="Portrait of Syeda Yumna Fatima – Assistant to CEO, Karachi Biennale Trust" class="kbtm-avatar">
                        </div>
                        <h3 class="kbtm-name">Syeda Yumna Fatima</h3>
                        <span class="kbtm-role">Assistant to CEO</span>
                        <div class="kbtm-bio-wrap">
                            <p class="kbtm-bio">
                                <span class="kbtm-bio-intro">Syeda Yumna Fatima graduated from the Indus Valley School of Art and Architecture in 2023, holding a Bachelor's Degree in Fine Arts. Specializing in 3D work, Fatima finds this form of art to be particularly self-explanatory and an effective medium for self-expression.</span><span class="kbtm-bio-ellipsis">...</span><span class="kbtm-bio-more d-none"> Her creations are deeply personal, reflecting her experiences and the various chapters of her life. Her diverse interests include travel, current affairs, art, and politics, each of which informs and enriches her artistic practice. Beyond her formal education, she has undertaken courses in Mind Mapping, Speed Reading, and Memory Skills to enhance her skills and knowledge.</span>
                            </p>
                            <button class="kbtm-more-btn" onclick="toggleBio(this)">Read More</button>
                        </div>
                    </article>

                    <!-- 3. Muhammad Qasim -->
                    <article class="kbtm-card text-center" aria-label="Team Card: Muhammad Qasim">
                        <div class="kbtm-avatar-wrap">
                            <img src="assets/img/team/Qasim-Image-500x500.jpg" alt="Portrait of Muhammad Qasim – Accountant, Karachi Biennale Trust" class="kbtm-avatar">
                        </div>
                        <h3 class="kbtm-name">Muhammad Qasim</h3>
                        <span class="kbtm-role">Accountant</span>
                        <div class="kbtm-bio-wrap">
                            <p class="kbtm-bio">
                                <span class="kbtm-bio-intro">Muhammad Qasim is a qualified Cost and Management Accountant with a decade of finance experience. He is currently serving as Deputy Chief Finance Officer at a non-profit organization while also working as an Accountant for the Karachi Biennale Trust.</span><span class="kbtm-bio-ellipsis">...</span><span class="kbtm-bio-more d-none"> Qasim's responsibilities in his role at the Karachi Biennale Trust include managing day-to-day accounting processes, preparing financial and management accounts, and ensuring the timely filing of withholding taxes and annual returns with the Federal Board of Revenue. Additionally, he oversees external auditors and tax consultants.</span>
                            </p>
                            <button class="kbtm-more-btn" onclick="toggleBio(this)">Read More</button>
                        </div>
                    </article>

                    <!-- 4. Adil Tanveer -->
                    <article class="kbtm-card text-center" aria-label="Team Card: Adil Tanveer">
                        <div class="kbtm-avatar-wrap">
                            <img src="assets/img/team/adil.png" alt="Portrait of Adil Tanveer – Deputy General Manager, Karachi Biennale Trust" class="kbtm-avatar">
                        </div>
                        <h3 class="kbtm-name">Adil Tanveer</h3>
                        <span class="kbtm-role">Deputy General Manager</span>
                        <div class="kbtm-bio-wrap">
                            <p class="kbtm-bio">
                                <span class="kbtm-bio-intro">Adil Tanveer has recently joined the Karachi Biennale Trust as Deputy General Manager. He has worked primarily in the non-profit sector and has led outreach initiatives, developed educational programs, and fostered strategic partnerships.</span><span class="kbtm-bio-ellipsis">...</span><span class="kbtm-bio-more d-none"> He works to address critical social issues, including gender-based violence, climate change, and minority rights. Furthermore, as a Master Trainer with the British Council, he specializes in climate change.</span>
                            </p>
                            <button class="kbtm-more-btn" onclick="toggleBio(this)">Read More</button>
                        </div>
                    </article>

                    <!-- 5. Seema Usman -->
                    <article class="kbtm-card text-center" aria-label="Team Card: Seema Usman">
                        <div class="kbtm-avatar-wrap">
                            <img src="assets/img/team/seema.png" alt="Portrait of Seema Usman – External Communication Coordinator, Karachi Biennale Trust" class="kbtm-avatar">
                        </div>
                        <h3 class="kbtm-name">Seema Usman</h3>
                        <span class="kbtm-role">External Communication Coordinator</span>
                        <div class="kbtm-bio-wrap">
                            <p class="kbtm-bio">
                                <span class="kbtm-bio-intro">Seema Usman joined KB as an External Communication Coordinator. She holds a degree in French from Paris, a diploma in bookkeeping from the UK, and is a certified Montessori teacher.</span><span class="kbtm-bio-ellipsis">...</span><span class="kbtm-bio-more d-none"> Seema was a senior school administrator for six years at Froebel Education Centre. She also worked as a coordinator for the Takhti, Asna, and Uraan projects. Additionally, Seema worked at NuktaArt magazine as a Business and Admin Coordinator.</span>
                            </p>
                            <button class="kbtm-more-btn" onclick="toggleBio(this)">Read More</button>
                        </div>
                    </article>

                    <!-- 6. Hamda Imran -->
                    <article class="kbtm-card text-center" aria-label="Team Card: Hamda Imran">
                        <div class="kbtm-avatar-wrap">
                            <img src="assets/img/team/hamda.png" alt="Portrait of Hamda Imran – Social Media Coordinator, Karachi Biennale Trust" class="kbtm-avatar">
                        </div>
                        <h3 class="kbtm-name">Hamda Imran</h3>
                        <span class="kbtm-role">Social Media Coordinator</span>
                        <div class="kbtm-bio-wrap">
                            <p class="kbtm-bio">
                                <span class="kbtm-bio-intro">Hamda Imran is a Karachi-based artist whose practice focuses on prevalent issues, particularly those related to mobility in Karachi. She is a recent graduate of Indus Valley School of Art and Architecture.</span><span class="kbtm-bio-ellipsis">...</span><span class="kbtm-bio-more d-none"> At KB, her responsibilities include managing social media platforms and coordinating with media and documentation teams.</span>
                            </p>
                            <button class="kbtm-more-btn" onclick="toggleBio(this)">Read More</button>
                        </div>
                    </article>

                    <!-- 7. Atif Khan -->
                    <article class="kbtm-card text-center" aria-label="Team Card: Atif Khan">
                        <div class="kbtm-avatar-wrap">
                            <img src="assets/img/team/atif.png" alt="Portrait of Atif Khan – Office Manager, Karachi Biennale Trust" class="kbtm-avatar">
                        </div>
                        <h3 class="kbtm-name">Atif Khan</h3>
                        <span class="kbtm-role">Office Manager</span>
                        <div class="kbtm-bio-wrap">
                            <p class="kbtm-bio">
                                <span class="kbtm-bio-intro">Atif Khan has completed a Bachelor's degree in Commerce from the University of Karachi. He currently serves as the Office Manager of KBT and manages financial operations, ensuring the sustainability of KBT initiatives.</span><span class="kbtm-bio-ellipsis">...</span><span class="kbtm-bio-more d-none"> During his time at KB, he is committed to supporting initiatives that inspire and connect people through art.</span>
                            </p>
                            <button class="kbtm-more-btn" onclick="toggleBio(this)">Read More</button>
                        </div>
                    </article>

                </div>
            </div>
        </section>

        <!-- C. Additional Content Enhancements (Legacy & CTA) -->
        <section class="kbtm-legacy-section space-bottom">
            <div class="container text-center">
                <div class="kbtm-legacy-card">
                    <!-- Legacy Statement -->
                    <p class="kbtm-legacy-statement">The Karachi Biennale Trust is immensely grateful to its dedicated team members, whose passion, expertise, and tireless efforts make the Biennale possible. Their collective commitment to the arts and to the city of Karachi ensures that the Trust continues to inspire, connect, and transform communities through the power of art.</p>
                    
                    <!-- Call to Action -->
                    <div class="kbtm-cta-wrap">
                        <p class="kbtm-cta-text">Interested in joining the KBT team? <a href="contact.html" class="kbtm-cta-link">Explore career and volunteer opportunities with us</a>.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Inline JavaScript for Biography toggles -->
        <script>
        function toggleBio(btn) {
            const wrap = btn.closest('.kbtm-bio-wrap');
            const ellipsis = wrap.querySelector('.kbtm-bio-ellipsis');
            const moreText = wrap.querySelector('.kbtm-bio-more');
            
            if (moreText.classList.contains('d-none')) {
                moreText.classList.remove('d-none');
                ellipsis.classList.add('d-none');
                btn.textContent = 'Read Less';
            } else {
                moreText.classList.add('d-none');
                ellipsis.classList.remove('d-none');
                btn.textContent = 'Read More';
            }
        }
        </script>

<?php include 'components/footer.php'; ?>
