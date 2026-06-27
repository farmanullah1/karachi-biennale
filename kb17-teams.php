<?php 
  $pageTitle = 'KB17 Teams - First Karachi Biennale';
  $metaDesc = 'Meet the board of trustees, curatorial committees, and operations teams who organized the First Karachi Biennale KB17.';
  $bodyClass = 'page-kb17-teams'; 
  include 'components/header.php'; 
?>

<!-- Skip Link for Accessibility -->
<a href="#kb17t-main-content" class="skip-link visually-hidden-focusable">Skip to content</a>

<!-- 1. Hero Banner Area -->
<section class="kb17t-hero-section">
    <div class="kb17t-hero-banner">
        <div class="kb17t-hero-overlay"></div>
        <div class="container text-center">
            <h1 class="kb17t-hero-title">KB17 Teams</h1>
            <p class="kb17t-hero-subtitle">Organizing Committees & Trustees</p>
            
            <!-- Breadcrumbs -->
            <nav class="kb17t-breadcrumbs" aria-label="breadcrumb">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li>Past Biennale</li>
                    <li>KB17</li>
                    <li class="active" aria-current="page">Teams</li>
                </ul>
            </nav>
        </div>
    </div>
</section>

<!-- 2. Main Content Area -->
<main id="kb17t-main-content" class="kb17t-main-wrapper">
    <div class="container">
        
        <!-- Intro Header -->
        <div class="kb17t-intro text-center mb-5">
            <h2 class="kb17t-section-heading">Board of Trustees</h2>
            <p class="kb17t-section-lead">The governing board of the Karachi Biennale Trust whose leadership guided the inaugural curation of KB17.</p>
        </div>

        <!-- Trustees Grid -->
        <section class="kb17t-trustees-section mb-5">
            <div class="row g-4 justify-content-center">
                <?php 
                $trustees = [
                    ['Almas Bana', 'Chairperson', 'almas-462x403.png'],
                    ['Niilofur Farrukh', 'Managing Trustee', 'nilofer-462x403.png'],
                    ['Atteqa Malik', 'Treasurer', 'atteqa-462x403.png'],
                    ['Bushra Hussain', 'General Secretary', 'bushra-462x403.png'],
                    ['Amin Gulgee', 'Chief Curator & Trustee', 'amin-462x403.png'],
                    ['Dr. Asma Ibrahim', 'Trustee', 'asma-462x403.png'],
                    ['Farzana Tunio', 'Trustee', 'farzana-462x403.png'],
                    ['Masuma Halai Khwaja', 'Trustee', 'masuma-462x403.png'],
                    ['Ainee Shehzad', 'Trustee', 'ainee-462x403.png'],
                    ['Riffat Alvi', 'Trustee', 'riffat-462x403.png']
                ];
                foreach($trustees as $t):
                ?>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="kb17t-trustee-card text-center">
                        <div class="kb17t-avatar-wrap">
                            <img src="assets/img/KB17/<?php echo $t[2]; ?>" alt="Portrait of <?php echo $t[0]; ?> - <?php echo $t[1]; ?>" class="kb17t-avatar img-fluid">
                        </div>
                        <h4 class="kb17t-trustee-name"><?php echo $t[0]; ?></h4>
                        <span class="kb17t-trustee-role"><?php echo $t[1]; ?></span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Section 3: Committees & Teams -->
        <section class="kb17t-committees-section mt-5">
            <div class="kb17t-intro text-center mb-5">
                <h2 class="kb17t-section-heading">Committees & Operations Teams</h2>
                <p class="kb17t-section-lead">The operational core of the Biennale, driven by dedicated creative coordinators, volunteers, and administrative professionals.</p>
            </div>

            <div class="row g-4 kb17t-grid">
                <!-- 1. Curatorial Committee -->
                <div class="col-md-6 col-lg-4">
                    <div class="kb17t-team-card">
                        <div class="kb17t-card-header bg-gradient-yellow">
                            <i class="fas fa-palette me-2"></i>Curatorial Committee
                        </div>
                        <div class="kb17t-card-body">
                            <ul class="kb17t-member-list">
                                <li><strong>Amin Gulgee</strong> <span class="kb17t-member-role">Chief Curator</span></li>
                                <li><strong>Zarmeene Shah</strong> <span class="kb17t-member-role">Curator at Large</span></li>
                                <li><strong>Zeerak Ahmed</strong> <span class="kb17t-member-role">Assistant Curator</span></li>
                                <li><strong>Humayun Memon</strong> <span class="kb17t-member-role">Assistant Curator</span></li>
                                <li><strong>Sara Pagganwala</strong> <span class="kb17t-member-role">Assistant Curator</span></li>
                                <li><strong>Adam Fahy-Majeed</strong> <span class="kb17t-member-role">Curatorial Member</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- 2. Global Outreach Committee -->
                <div class="col-md-6 col-lg-4">
                    <div class="kb17t-team-card">
                        <div class="kb17t-card-header bg-gradient-teal">
                            <i class="fas fa-globe-americas me-2"></i>Global Outreach
                        </div>
                        <div class="kb17t-card-body">
                            <ul class="kb17t-member-list">
                                <li><strong>Atteqa Malik</strong> <span class="kb17t-member-role">Committee Chair</span></li>
                                <li><strong>Sahar Ismail</strong> <span class="kb17t-member-role">Committee Member</span></li>
                                <li><strong>Fariha Amjad Obaid</strong> <span class="kb17t-member-role">Committee Member</span></li>
                                <li><strong>Farzana Tunio</strong> <span class="kb17t-member-role">Committee Member</span></li>
                                <li><strong>Amin Gulgee / Bushra Hussain</strong> <span class="kb17t-member-role">Committee Members</span></li>
                                <li><strong>Riffat Alvi / Aquila Ismail</strong> <span class="kb17t-member-role">Committee Members</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- 3. Prize Committee -->
                <div class="col-md-6 col-lg-4">
                    <div class="kb17t-team-card">
                        <div class="kb17t-card-header bg-gradient-blue">
                            <i class="fas fa-award me-2"></i>Prize Committee
                        </div>
                        <div class="kb17t-card-body">
                            <ul class="kb17t-member-list">
                                <li><strong>Bushra Hussain</strong> <span class="kb17t-member-role">Committee Chair</span></li>
                                <li><strong>Almas Bana / Niilofur Farrukh</strong> <span class="kb17t-member-role">Committee Members</span></li>
                                <li><strong>Atteqa Malik / Amin Gulgee</strong> <span class="kb17t-member-role">Committee Members</span></li>
                                <li><strong>Dr. Asma Ibrahim / Farzana Tunio</strong> <span class="kb17t-member-role">Committee Members</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- 4. Discursive Committee -->
                <div class="col-md-6 col-lg-4">
                    <div class="kb17t-team-card">
                        <div class="kb17t-card-header bg-gradient-purple">
                            <i class="fas fa-comments me-2"></i>Discursive Committee
                        </div>
                        <div class="kb17t-card-body">
                            <ul class="kb17t-member-list">
                                <li><strong>Niilofur Farrukh</strong> <span class="kb17t-member-role">Committee Chair</span></li>
                                <li><strong>Aquila Ismail / Waheeda Baloch</strong> <span class="kb17t-member-role">Committee Members</span></li>
                                <li><strong>Tazeen Hussain / Bushra Hussain</strong> <span class="kb17t-member-role">Committee Members</span></li>
                                <li><strong>Rahat Saeed</strong> <span class="kb17t-member-role">Committee Member</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- 5. Resource Mobilisation -->
                <div class="col-md-6 col-lg-4">
                    <div class="kb17t-team-card">
                        <div class="kb17t-card-header bg-gradient-orange">
                            <i class="fas fa-handshake me-2"></i>Resource Mobilisation
                        </div>
                        <div class="kb17t-card-body">
                            <ul class="kb17t-member-list">
                                <li><strong>Khusro Mumtaz</strong> <span class="kb17t-member-role">Committee Chair</span></li>
                                <li><strong>Ainee Shehzad / Almas Bana</strong> <span class="kb17t-member-role">Committee Members</span></li>
                                <li><strong>Anushae Alam / Atteqa Malik</strong> <span class="kb17t-member-role">Committee Members</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- 6. Hospitality Committee -->
                <div class="col-md-6 col-lg-4">
                    <div class="kb17t-team-card">
                        <div class="kb17t-card-header bg-gradient-yellow">
                            <i class="fas fa-concierge-bell me-2"></i>Hospitality Committee
                        </div>
                        <div class="kb17t-card-body">
                            <ul class="kb17t-member-list">
                                <li><strong>Atteqa Malik</strong> <span class="kb17t-member-role">Committee Chair</span></li>
                                <li><strong>Kulsum Ebrahim</strong> <span class="kb17t-member-role">Committee Member</span></li>
                                <li><strong>Umme Hani Imani</strong> <span class="kb17t-member-role">Committee Member</span></li>
                                <li><strong>Anil Shankar / Maria Ali Asghar</strong> <span class="kb17t-member-role">Committee Members</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- 7. Art Directory Website -->
                <div class="col-md-6 col-lg-4">
                    <div class="kb17t-team-card">
                        <div class="kb17t-card-header bg-gradient-teal">
                            <i class="fas fa-book-open me-2"></i>Art Directory Website
                        </div>
                        <div class="kb17t-card-body">
                            <ul class="kb17t-member-list">
                                <li><strong>Bushra Hussain / Tazeen Hussain</strong> <span class="kb17t-member-role">Co-Chairs</span></li>
                                <li><strong>Shanza Khan / Hassan Munnawar</strong> <span class="kb17t-member-role">Coordination Team</span></li>
                                <li><strong>Research Interns</strong> <span class="kb17t-member-role">DHA Degree College, KSA, IVS, TIP, Dept of Visual Studies UoK</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- 8. Public Outreach Committee -->
                <div class="col-md-6 col-lg-4">
                    <div class="kb17t-team-card">
                        <div class="kb17t-card-header bg-gradient-blue">
                            <i class="fas fa-bullhorn me-2"></i>Public Outreach
                        </div>
                        <div class="kb17t-card-body">
                            <ul class="kb17t-member-list">
                                <li><strong>Masuma Halai Khwaja</strong> <span class="kb17t-member-role">Committee Chair</span></li>
                                <li><strong>Mohsin Sayeed / Bina Ali / Khushbu Shaukat</strong> <span class="kb17t-member-role">Committee Members</span></li>
                                <li><strong>Ambareen K. Thompson / Ainee Shehzad</strong> <span class="kb17t-member-role">Committee Members</span></li>
                                <li><strong>Shehzar Abro / Fatema Mandviwala / Safa Fareed</strong> <span class="kb17t-member-role">Committee Members</span></li>
                                <li><strong>Zoya Nasir / Nasheed Imran / Ali Imani</strong> <span class="kb17t-member-role">Committee Members</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- 9. Design, Marketing & Catalogue -->
                <div class="col-md-6 col-lg-4">
                    <div class="kb17t-team-card">
                        <div class="kb17t-card-header bg-gradient-purple">
                            <i class="fas fa-edit me-2"></i>Design, Marketing & Catalogue
                        </div>
                        <div class="kb17t-card-body">
                            <ul class="kb17t-member-list">
                                <li><strong>Zehra Hamdani Mirza</strong> <span class="kb17t-member-role">Marketing & Design Chair</span></li>
                                <li><strong>Niilofur Farrukh</strong> <span class="kb17t-member-role">Catalogue Committee Chair</span></li>
                                <li><strong>John McCarry / Aquila Ismail / Amin Gulgee</strong> <span class="kb17t-member-role">Catalogue Members</span></li>
                                <li><strong>Atteqa Malik / Halima Saadia / Ali Imani</strong> <span class="kb17t-member-role">Marketing Members</span></li>
                                <li><strong>Shamain Nisar / Saniya Jouzy / Hira Zuberi</strong> <span class="kb17t-member-role">Media & Design Team</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- 10. Educational Program Team -->
                <div class="col-md-6 col-lg-4">
                    <div class="kb17t-team-card">
                        <div class="kb17t-card-header bg-gradient-orange">
                            <i class="fas fa-graduation-cap me-2"></i>Educational Program
                        </div>
                        <div class="kb17t-card-body">
                            <ul class="kb17t-member-list">
                                <li><strong>Varda Nisar</strong> <span class="kb17t-member-role">Program Coordinator</span></li>
                                <li><strong>Sadia Sohail</strong> <span class="kb17t-member-role">Committee Member</span></li>
                                <li><strong>Samra Zamir</strong> <span class="kb17t-member-role">Committee Member</span></li>
                                <li><strong>Tayyaba Sajjad</strong> <span class="kb17t-member-role">Committee Member</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- 11. Production & Event Management -->
                <div class="col-md-6 col-lg-4">
                    <div class="kb17t-team-card">
                        <div class="kb17t-card-header bg-gradient-yellow">
                            <i class="fas fa-calendar-check me-2"></i>Event Production
                        </div>
                        <div class="kb17t-card-body">
                            <ul class="kb17t-member-list">
                                <li><strong>Pomme Amina Gohar</strong> <span class="kb17t-member-role">Production Chair / Lighting Director</span></li>
                                <li><strong>Mishaal A. Khan / Hasan Ali / Rijah Chhapra</strong> <span class="kb17t-member-role">Production Members</span></li>
                                <li><strong>Eman Ahmed / Darbar Shah</strong> <span class="kb17t-member-role">Production Members</span></li>
                                <li><strong>Hira Zuberi / MA Design</strong> <span class="kb17t-member-role">Exhibition Circulation</span></li>
                                <li><strong>Humayun Memon</strong> <span class="kb17t-member-role">Venue Photography</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- 12. Administration & Finance -->
                <div class="col-md-6 col-lg-4">
                    <div class="kb17t-team-card">
                        <div class="kb17t-card-header bg-gradient-teal">
                            <i class="fas fa-users-cog me-2"></i>Administration & Staff
                        </div>
                        <div class="kb17t-card-body">
                            <ul class="kb17t-member-list">
                                <li><strong>Anil Shankar</strong> <span class="kb17t-member-role">Administration Manager</span></li>
                                <li><strong>Muhammad Qasim</strong> <span class="kb17t-member-role">Accounts Manager</span></li>
                                <li><strong>Raza Ahmed</strong> <span class="kb17t-member-role">Office Assistant</span></li>
                                <li><strong>Umme Hani Imani</strong> <span class="kb17t-member-role">Discursive Events Coordinator</span></li>
                                <li><strong>Kulsum Ebrahim</strong> <span class="kb17t-member-role">Executive Assistant to CEO</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</main>

<?php include 'components/footer.php'; ?>
