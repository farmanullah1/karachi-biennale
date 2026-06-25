<?php 
  $pageTitle = 'KBT Trustees - Karachi Biennale Trust Board of Trustees';
  $metaDesc = 'Meet the Board of Trustees of the Karachi Biennale Trust (KBT), including the Chairperson, Managing Trustee, and distinguished board members.';
  $bodyClass = 'page-kbt-trustees'; // For unique CSS scoping
  include 'components/header.php'; 
?>

        <!-- A. Page Header Section (Hero Area) -->
        <section class="kbtt-hero-section text-center">
            <div class="container">
                <h1 class="kbtt-hero-title">KBT Trustees</h1>
                <p class="kbtt-hero-intro">Art, the city and its people will always be at the core of our initiatives. The Karachi Biennale Trust is governed by a distinguished board of trustees who bring diverse expertise from the fields of art, education, law, finance, media, and corporate leadership. Their collective vision and dedication ensure that the Trust remains steadfast in its mission to promote creativity, innovation, and criticality in the visual arts.</p>
                <!-- Breadcrumbs -->
                <nav class="kbtt-breadcrumbs" aria-label="breadcrumb">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li class="active" aria-current="page">KBT Trustees</li>
                    </ul>
                </nav>
            </div>
        </section>

        <!-- B. Trustees Grid / Profiles Section -->
        <section class="kbtt-grid-section space">
            <div class="container">
                <div class="kbtt-grid" role="region" aria-label="Trustees Grid">
                    
                    <!-- 1. Shanaz Ramzi -->
                    <article class="kbtt-card text-center" aria-label="Trustee Card: Shanaz Ramzi">
                        <div class="kbtt-avatar-wrap">
                            <img src="assets/img/trustees/Shahnaz-Rizvi.png" alt="Portrait of Shanaz Ramzi – Managing Trustee, Karachi Biennale Trust" class="kbtt-avatar">
                        </div>
                        <h3 class="kbtt-name">Shanaz Ramzi</h3>
                        <span class="kbtt-role">Managing Trustee</span>
                        <div class="kbtt-bio-wrap">
                            <p class="kbtt-bio">
                                <span class="kbtt-bio-intro">Shanaz Ramzi has been a freelance journalist since 1994, writing on a variety of subjects for various publications, both local and international. She has authored a best-selling book, Food Prints, a recipe book Food Tales, and edited the Oxford Companion to Pakistani Cuisine.</span><span class="kbtt-bio-ellipsis">...</span><span class="kbtt-bio-more d-none"> Ramzi served as GM PR and Publications at HUM Network Ltd for 11 years and was also the editor of all their publications. She founded her own award-winning PR and event management company, StarLinks PR and Events, in 2015, of which she is currently the CEO. She is also the President of TravelinPK, a travel consultancy. She is the recipient of several awards, including the Icon of the Nation Award by Icon Foundation and the Bronze Stevie Award for Women in Business.</span>
                            </p>
                            <button class="kbtt-more-btn" onclick="toggleBio(this)">Read More</button>
                        </div>
                    </article>

                    <!-- 2. Atteqa Malik -->
                    <article class="kbtt-card text-center" aria-label="Trustee Card: Atteqa Malik">
                        <div class="kbtt-avatar-wrap">
                            <img src="assets/img/trustees/atteqa.jpg" alt="Portrait of Atteqa Malik – Chairperson, Karachi Biennale Trust" class="kbtt-avatar">
                        </div>
                        <h3 class="kbtt-name">Atteqa Malik</h3>
                        <span class="kbtt-role">Chairperson</span>
                        <div class="kbtt-bio-wrap">
                            <p class="kbtt-bio">
                                <span class="kbtt-bio-intro">Atteqa Malik is an accomplished entrepreneur, artist, scholar, and cultural operator with a strong background in international collaboration, creative diplomacy, and civic engagement.</span><span class="kbtt-bio-ellipsis">...</span><span class="kbtt-bio-more d-none"> She currently serves as Chairperson of the Karachi Biennale Trust, Director at GIA International Exports Pvt. Ltd., a member of the Executive Committee at Indus Valley School of Arts & Architecture, and Board Director at the Pakistan UK and Ireland Business Council. She leads cross-cultural initiatives and fosters global partnerships.</span>
                            </p>
                            <button class="kbtt-more-btn" onclick="toggleBio(this)">Read More</button>
                        </div>
                    </article>

                    <!-- 3. Ainee Shehzad Salim -->
                    <article class="kbtt-card text-center" aria-label="Trustee Card: Ainee Shehzad Salim">
                        <div class="kbtt-avatar-wrap">
                            <img src="assets/img/trustees/ainee.jpg" alt="Portrait of Ainee Shehzad Salim – Vice Chairperson, Karachi Biennale Trust" class="kbtt-avatar">
                        </div>
                        <h3 class="kbtt-name">Ainee Shehzad Salim</h3>
                        <span class="kbtt-role">Vice Chairperson</span>
                        <div class="kbtt-bio-wrap">
                            <p class="kbtt-bio">
                                <span class="kbtt-bio-intro">Ainee Shehzad Salim is a Valedictorian Commonwealth Scholar. She holds a Civil Engineering degree along with a Bachelor in Education and a Master in Education and International Development from the Institute of Education, UCL.</span><span class="kbtt-bio-ellipsis">...</span><span class="kbtt-bio-more d-none"> She is the Head of Department of Continuing Professional Development at the Karachi Grammar School, College Section. She is a CIE PDQ Programme Leader, has authored scholarly articles on education and development, and also teaches A and O Level Mathematics. She runs a successful furniture, interior designing, and event management company.</span>
                            </p>
                            <button class="kbtt-more-btn" onclick="toggleBio(this)">Read More</button>
                        </div>
                    </article>

                    <!-- 4. Farzana Tunio -->
                    <article class="kbtt-card text-center" aria-label="Trustee Card: Farzana Tunio">
                        <div class="kbtt-avatar-wrap">
                            <img src="assets/img/trustees/farzana.jpg" alt="Portrait of Farzana Tunio – General Secretary, Karachi Biennale Trust" class="kbtt-avatar">
                        </div>
                        <h3 class="kbtt-name">Farzana Tunio</h3>
                        <span class="kbtt-role">General Secretary</span>
                        <div class="kbtt-bio-wrap">
                            <p class="kbtt-bio">
                                <span class="kbtt-bio-intro">Farzana Tunio has worked in the challenging field of design and advertising both in Pakistan and in the USA and received an award at the Art Direction magazine's "Creativity Show" in New York for her calendar design.</span><span class="kbtt-bio-ellipsis">...</span><span class="kbtt-bio-more d-none"> Her logo design for Interwood Pvt. Ltd., a furniture company, has withstood the test of time. She is also a visiting faculty member at Indus Valley School of Art & Architecture and is working on her dream project: setting up a "Visual Arts College" at the newly adopted campus, the 180-year-old heritage site NJV School.</span>
                            </p>
                            <button class="kbtt-more-btn" onclick="toggleBio(this)">Read More</button>
                        </div>
                    </article>

                    <!-- 5. Asad Hasan -->
                    <article class="kbtt-card text-center" aria-label="Trustee Card: Asad Hasan">
                        <div class="kbtt-avatar-wrap">
                            <img src="assets/img/trustees/AsadHasan79A-e1686650424659.jpg" alt="Portrait of Asad Hasan – Treasurer, Karachi Biennale Trust" class="kbtt-avatar">
                        </div>
                        <h3 class="kbtt-name">Asad Hasan</h3>
                        <span class="kbtt-role">Treasurer</span>
                        <div class="kbtt-bio-wrap">
                            <p class="kbtt-bio">
                                <span class="kbtt-bio-intro">Asad Hasan is an MBA (IBA) and a Chartered Management Accountant (CIMA, UK) by profession. In consulting, he specializes in business strategy formulation, port planning, executive search, education, healthcare, TVET, compensation management, HR, market feasibility studies, company valuation, and due diligence procedures.</span><span class="kbtt-bio-ellipsis">...</span><span class="kbtt-bio-more d-none"> His industry experience includes HRM, DFI, construction management, supply chain, financial and management accounting, and corporate finance areas. He is an experienced trainer who has conducted many workshops and training sessions.</span>
                            </p>
                            <button class="kbtt-more-btn" onclick="toggleBio(this)">Read More</button>
                        </div>
                    </article>

                    <!-- 6. Nilofur Farrukh -->
                    <article class="kbtt-card text-center" aria-label="Trustee Card: Nilofur Farrukh">
                        <div class="kbtt-avatar-wrap">
                            <img src="assets/img/trustees/nilofer.jpg" alt="Portrait of Niilofur Farrukh – Trustee, Karachi Biennale Trust" class="kbtt-avatar">
                        </div>
                        <h3 class="kbtt-name">Nilofur Farrukh</h3>
                        <span class="kbtt-role">Trustee</span>
                        <div class="kbtt-bio-wrap">
                            <p class="kbtt-bio">
                                <span class="kbtt-bio-intro">Niilofur Farrukh is a cultural interventionist based in Karachi. Her prolific five-decade career centres on decolonizing ways of viewing, reading, practicing, and writing about art and culture in Pakistan.</span><span class="kbtt-bio-ellipsis">...</span><span class="kbtt-bio-more d-none"> In 2016, she co-founded the Karachi Biennale Trust and, as its CEO, led four acclaimed editions of the Karachi Biennale through 2025. She is also the co-founder of ASNA, which hosted four International Clay Triennials. She has three books to her credit: A Beautiful Despair – The Art and Life of Meher Afroz (2020), Pioneering Perspectives (1998), and Pakistan's Radioactive Decade (2019).</span>
                            </p>
                            <button class="kbtt-more-btn" onclick="toggleBio(this)">Read More</button>
                        </div>
                    </article>

                    <!-- 7. Almas Bana -->
                    <article class="kbtt-card text-center" aria-label="Trustee Card: Almas Bana">
                        <div class="kbtt-avatar-wrap">
                            <img src="assets/img/trustees/almas.jpg" alt="Portrait of Almas Bana – Trustee, Karachi Biennale Trust" class="kbtt-avatar">
                        </div>
                        <h3 class="kbtt-name">Almas Bana</h3>
                        <span class="kbtt-role">Trustee</span>
                        <div class="kbtt-bio-wrap">
                            <p class="kbtt-bio">
                                <span class="kbtt-bio-intro">Almas Bana has primarily worked with not-for-profit organizations, including 14 years with Aga Khan University, where his last held position was Associate Dean, followed by stints in Kenya and Pakistan as CEO of school trusts managing their school networks.</span><span class="kbtt-bio-ellipsis">...</span><span class="kbtt-bio-more d-none"> His strengths lie in developing strategic programs and managing their implementation. He enjoys working in multicultural environments. Almas holds a B.Sc and M.B.A. from Pakistan and a Certificate in International Management from Boston University, USA.</span>
                            </p>
                            <button class="kbtt-more-btn" onclick="toggleBio(this)">Read More</button>
                        </div>
                    </article>

                    <!-- 8. Nadeem Ahmad -->
                    <article class="kbtt-card text-center" aria-label="Trustee Card: Nadeem Ahmad">
                        <div class="kbtt-avatar-wrap">
                            <img src="assets/img/trustees/Nadeem-Ahmad.png" alt="Portrait of Nadeem Ahmad – Trustee, Karachi Biennale Trust" class="kbtt-avatar">
                        </div>
                        <h3 class="kbtt-name">Nadeem Ahmad</h3>
                        <span class="kbtt-role">Trustee</span>
                        <div class="kbtt-bio-wrap">
                            <p class="kbtt-bio">
                                <span class="kbtt-bio-intro">Nadeem Ahmad is the Senior Corporate Counsel at Orr, Dignam & Co., Advocates – one of Pakistan's leading law firms. He completed his Masters in Political Science and his degree in Law from the University of Karachi in 1974.</span><span class="kbtt-bio-ellipsis">...</span><span class="kbtt-bio-more d-none"> He has vast experience in corporate law, having specialized in advisory work and drafting of legal instruments. He has written research articles on various subjects published in prominent newspapers and legal journals, including the daily Dawn and PLD. He authored the chapter on Pakistan in the publication of the Center for International Legal Studies of Austria titled International Franchising Law.</span>
                            </p>
                            <button class="kbtt-more-btn" onclick="toggleBio(this)">Read More</button>
                        </div>
                    </article>

                    <!-- 9. Seema Jaffer -->
                    <article class="kbtt-card text-center" aria-label="Trustee Card: Seema Jaffer">
                        <div class="kbtt-avatar-wrap">
                            <img src="assets/img/trustees/seema-e1597132043809.jpg" alt="Portrait of Seema Jaffer – Trustee, Karachi Biennale Trust" class="kbtt-avatar">
                        </div>
                        <h3 class="kbtt-name">Seema Jaffer</h3>
                        <span class="kbtt-role">Trustee</span>
                        <div class="kbtt-bio-wrap">
                            <p class="kbtt-bio">
                                <span class="kbtt-bio-intro">Seema Jaffer is a Strategic Communication and Media Expert and CEO of Bond Advertising, with experience spanning over 30 years. She has served as the Executive Director and Key Expert for Huqooq e Pakistan, a joint initiative between the European Union and the Ministry of Human Rights.</span><span class="kbtt-bio-ellipsis">...</span><span class="kbtt-bio-more d-none"> Seema works with the UNDP, National Commission for Human Rights, the European Union, and EY as a Strategic Communication Expert. She has served as a jury member for global advertising events, including the Cannes Lions Festival of Advertising Awards.</span>
                            </p>
                            <button class="kbtt-more-btn" onclick="toggleBio(this)">Read More</button>
                        </div>
                    </article>

                    <!-- 10. Amin Gulgee -->
                    <article class="kbtt-card text-center" aria-label="Trustee Card: Amin Gulgee">
                        <div class="kbtt-avatar-wrap">
                            <img src="assets/img/trustees/amin.jpg" alt="Portrait of Amin Gulgee – Trustee and Curator KB17, Karachi Biennale Trust" class="kbtt-avatar">
                        </div>
                        <h3 class="kbtt-name">Amin Gulgee</h3>
                        <span class="kbtt-role">Trustee, Curator KB17</span>
                        <div class="kbtt-bio-wrap">
                            <p class="kbtt-bio">
                                <span class="kbtt-bio-intro">Amin Gulgee (b. 1965, Karachi, Pakistan) is a visual artist and independent curator living and working in Karachi. He received a BA in Art History and Economics from Yale University in 1987 and won the Conger B. Goodyear Fine Arts Award for his senior thesis on Moghul gardens.</span><span class="kbtt-bio-ellipsis">...</span><span class="kbtt-bio-more d-none"> He works primarily in sculpture, installations, and performance. Amin has worked extensively with performance, both as a practitioner and a curator. Over the past two decades, he has presented over 35 performance works of his own both at home and abroad.</span>
                            </p>
                            <button class="kbtt-more-btn" onclick="toggleBio(this)">Read More</button>
                        </div>
                    </article>

                </div>
            </div>
        </section>

        <!-- C. Additional Content Enhancements (Legacy & CTA) -->
        <section class="kbtt-legacy-section space-bottom">
            <div class="container text-center">
                <div class="kbtt-legacy-card">
                    <!-- Trustee Structure Section -->
                    <div class="kbtt-structure-wrap mb-40">
                        <h4 class="kbtt-structure-title">Governance & Structure</h4>
                        <p class="kbtt-structure-text">The Board of Trustees provides strategic direction and oversight for all KBT initiatives. Each trustee brings unique expertise from their respective fields, ensuring a holistic approach to governance and programming.</p>
                    </div>

                    <!-- Legacy Statement -->
                    <p class="kbtt-legacy-statement">The Karachi Biennale Trust is honored to have such a distinguished and dedicated board of trustees. Their collective expertise, passion for the arts, and commitment to the city of Karachi ensure that the Trust remains a vibrant and impactful force in Pakistan's cultural landscape.</p>
                    
                    <!-- Call to Action -->
                    <div class="kbtt-cta-wrap">
                        <p class="kbtt-cta-text">Learn more about our <a href="kbt-founders.php" class="kbtt-cta-link">Founders</a>, <a href="kbt-patrons.php" class="kbtt-cta-link">Patrons</a>, and the history of the <a href="about-kbt.php" class="kbtt-cta-link">Karachi Biennale Trust</a>.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Inline JavaScript for Biography toggles -->
        <script>
        function toggleBio(btn) {
            const wrap = btn.closest('.kbtt-bio-wrap');
            const ellipsis = wrap.querySelector('.kbtt-bio-ellipsis');
            const moreText = wrap.querySelector('.kbtt-bio-more');
            
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
