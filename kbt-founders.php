<?php 
  $pageTitle = 'KBT Founders - Karachi Biennale Trust Leadership';
  $metaDesc = 'Meet the founders and leadership of the Karachi Biennale Trust (KBT), including trustees, chairperson, and artistic director.';
  $bodyClass = 'page-kbt-founders'; // For unique CSS scoping
  include 'components/header.php'; 
?>

        <!-- A. Page Header Section (Hero Area) -->
        <section class="kbtf-hero-section text-center">
            <div class="container">
                <h1 class="kbtf-hero-title">KBT Founders</h1>
                <p class="kbtf-hero-intro">The Karachi Biennale Trust (KBT) was founded in 2016 by a group of visual art professionals and educators as a dynamic platform to promote creativity, innovation and criticality in the visual arts.</p>
                <!-- Breadcrumbs -->
                <nav class="kbtf-breadcrumbs" aria-label="breadcrumb">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li class="active" aria-current="page">KBT Founders</li>
                    </ul>
                </nav>
            </div>
        </section>

        <!-- B. Founders Grid / Profiles Section -->
        <section class="kbtf-grid-section space">
            <div class="container">
                <div class="kbtf-grid">
                    
                    <!-- 1. Almas Bana -->
                    <article class="kbtf-card text-center">
                        <div class="kbtf-avatar-wrap">
                            <img src="assets/img/founders/almas.png" alt="Portrait of Almas Bana – Trustee, Karachi Biennale Trust" class="kbtf-avatar">
                        </div>
                        <h3 class="kbtf-name">Almas Bana</h3>
                        <span class="kbtf-role">Trustee</span>
                        <div class="kbtf-bio-wrap">
                            <p class="kbtf-bio">
                                <span class="kbtf-bio-intro">Almas Bana has primarily worked with not-for-profit organizations, including 14 years with Aga Khan University, where his last held position was Associate Dean, followed by stints in Kenya and Pakistan as CEO of school trusts managing their school networks.</span><span class="kbtf-bio-ellipsis">...</span><span class="kbtf-bio-more d-none"> His strengths lie in developing strategic programs and managing their implementation. He enjoys working in multicultural environments. Almas believes that art in all its manifestations not only reflects society but can provide a vision for its positive development. It should be a harbinger of change in an open society. Involvement in the Karachi Biennale provides him with such an experimental opportunity. Almas holds a B.Sc and M.B.A. from Pakistan and a Certificate in International Management from Boston University, USA.</span>
                            </p>
                            <button class="kbtf-more-btn" onclick="toggleBio(this)">Read More</button>
                        </div>
                    </article>

                    <!-- 2. Niilofur Farrukh -->
                    <article class="kbtf-card text-center">
                        <div class="kbtf-avatar-wrap">
                            <img src="assets/img/founders/nilofer.png" alt="Portrait of Niilofur Farrukh – Trustee and CEO, Karachi Biennale Trust" class="kbtf-avatar">
                        </div>
                        <h3 class="kbtf-name">Niilofur Farrukh</h3>
                        <span class="kbtf-role">Trustee</span>
                        <div class="kbtf-bio-wrap">
                            <p class="kbtf-bio">
                                <span class="kbtf-bio-intro">Niilofur Farrukh is a cultural interventionist based in Karachi. Her prolific five-decade career centres on decolonizing ways of viewing, reading, practicing, and writing about art and culture in Pakistan.</span><span class="kbtf-bio-ellipsis">...</span><span class="kbtf-bio-more d-none"> In 2016, she co-founded the Karachi Biennale Trust and, as its CEO, led four acclaimed editions of the Karachi Biennale through 2025. This city-wide international project created opportunities for public audiences to experience the transformative power of art with hundreds of works on themes that were relevant to their lives. She is also the co-founder of ASNA, which hosted four International Clay Triennials. She has three books to her credit: A Beautiful Despair – The Art and Life of Meher Afroz, Pioneering Perspectives, and Pakistan's Radioactive Decade.</span>
                            </p>
                            <button class="kbtf-more-btn" onclick="toggleBio(this)">Read More</button>
                        </div>
                    </article>

                    <!-- 3. Atteqa Malik -->
                    <article class="kbtf-card text-center">
                        <div class="kbtf-avatar-wrap">
                            <img src="assets/img/founders/atteqa.png" alt="Portrait of Atteqa Malik – Chairperson, Karachi Biennale Trust" class="kbtf-avatar">
                        </div>
                        <h3 class="kbtf-name">Atteqa Malik</h3>
                        <span class="kbtf-role">Chairperson</span>
                        <div class="kbtf-bio-wrap">
                            <p class="kbtf-bio">
                                <span class="kbtf-bio-intro">Atteqa Malik is an accomplished entrepreneur, artist, scholar, and cultural operator with a strong background in international collaboration, creative diplomacy, and civic engagement.</span><span class="kbtf-bio-ellipsis">...</span><span class="kbtf-bio-more d-none"> She currently serves as Chairperson of the Karachi Biennale Trust, Director at GIA International Exports Pvt. Ltd., a member of the Executive Committee at Indus Valley School of Arts & Architecture, and Board Director at the Pakistan UK and Ireland Business Council. She leads cross-cultural initiatives and fosters global partnerships.</span>
                            </p>
                            <button class="kbtf-more-btn" onclick="toggleBio(this)">Read More</button>
                        </div>
                    </article>

                    <!-- 4. Bushra Hussain -->
                    <article class="kbtf-card text-center">
                        <div class="kbtf-avatar-wrap">
                            <img src="assets/img/founders/bushra.png" alt="Portrait of Bushra Hussain – Artistic Director, Karachi Biennale Trust" class="kbtf-avatar">
                        </div>
                        <h3 class="kbtf-name">Bushra Hussain</h3>
                        <span class="kbtf-role">Artistic Director</span>
                        <div class="kbtf-bio-wrap">
                            <p class="kbtf-bio">
                                <span class="kbtf-bio-intro">Bushra Hussain is a Karachi-based freelance fine art consultant, curator, and researcher. She holds a Bachelor of Fine Arts from the National College of Arts, Lahore.</span><span class="kbtf-bio-ellipsis">...</span><span class="kbtf-bio-more d-none"> During her studio practice, she has worked on commissions for the Pakistan Navy and private collectors. Since 2006, Bushra's expertise has been in Fine Art Administration and Gallery Management, having worked with some of the leading non-profit and commercial art galleries in Karachi, including VM Art Gallery, ArtChowk the Gallery, and Canvas Gallery. She works independently through her consulting practice, Art Advisory.</span>
                            </p>
                            <button class="kbtf-more-btn" onclick="toggleBio(this)">Read More</button>
                        </div>
                    </article>

                    <!-- 5. Amin Gulgee -->
                    <article class="kbtf-card text-center">
                        <div class="kbtf-avatar-wrap">
                            <img src="assets/img/founders/amin.png" alt="Portrait of Amin Gulgee – Curator KB17 and Trustee KBT" class="kbtf-avatar">
                        </div>
                        <h3 class="kbtf-name">Amin Gulgee</h3>
                        <span class="kbtf-role">Curator KB17 & Trustee</span>
                        <div class="kbtf-bio-wrap">
                            <p class="kbtf-bio">
                                <span class="kbtf-bio-intro">Amin Gulgee has worked as a sculptor from his studio in Karachi for more than two decades. A graduate of Yale University, he received a BA in Art History and Economics in 1986 and won the Conger B. Goodyear Fine Arts Award for his senior thesis.</span><span class="kbtf-bio-ellipsis">...</span><span class="kbtf-bio-more d-none"> He has exhibited extensively both at home and abroad, with more than 30 solo exhibitions and several international group shows. The artist is also known for his performance works and has been active as a curator since the late 1990s. Amin has received numerous awards, including the President's Pride of Performance in 2005.</span>
                            </p>
                            <button class="kbtf-more-btn" onclick="toggleBio(this)">Read More</button>
                        </div>
                    </article>

                    <!-- 6. Dr. Asma Ibrahim -->
                    <article class="kbtf-card text-center">
                        <div class="kbtf-avatar-wrap">
                            <img src="assets/img/founders/asma.png" alt="Portrait of Dr. Asma Ibrahim – Trustee, Karachi Biennale Trust" class="kbtf-avatar">
                        </div>
                        <h3 class="kbtf-name">Dr. Asma Ibrahim</h3>
                        <span class="kbtf-role">Trustee</span>
                        <div class="kbtf-bio-wrap">
                            <p class="kbtf-bio">
                                <span class="kbtf-bio-intro">Dr. Asma Ibrahim holds a Doctorate in Numismatics and a post-doctorate fellowship at the University of Wisconsin, Madison.</span><span class="kbtf-bio-ellipsis">...</span><span class="kbtf-bio-more d-none"> She served in the Department of Archaeology and Museums from 1990 to 2006 in various positions and as Editor at the Tribune Daily and Travelogue Magazine. From 2006 to date, she has been working as Director of the State Bank of Pakistan Museum and Art Gallery, the first monetary museum in Pakistan. She has established a Centre for Archaeology and Environmental Research as a Founding Member.</span>
                            </p>
                            <button class="kbtf-more-btn" onclick="toggleBio(this)">Read More</button>
                        </div>
                    </article>

                    <!-- 7. Farzana Tunio -->
                    <article class="kbtf-card text-center">
                        <div class="kbtf-avatar-wrap">
                            <img src="assets/img/founders/farzana.png" alt="Portrait of Farzana Tunio – General Secretary, Karachi Biennale Trust" class="kbtf-avatar">
                        </div>
                        <h3 class="kbtf-name">Farzana Tunio</h3>
                        <span class="kbtf-role">General Secretary</span>
                        <div class="kbtf-bio-wrap">
                            <p class="kbtf-bio">
                                <span class="kbtf-bio-intro">Farzana Tunio has worked in the challenging field of design and advertising both in Pakistan and in the USA and received an award at the Art Direction magazine's "Creativity Show" in New York for her calendar design.</span><span class="kbtf-bio-ellipsis">...</span><span class="kbtf-bio-more d-none"> Her logo design for Interwood Pvt. Ltd., a furniture company, has withstood the test of time. She is also a visiting faculty member at Indus Valley School of Art & Architecture and is working on her dream project: setting up a "Visual Arts College" at the newly adopted campus, the 180-year-old heritage site NJV School.</span>
                            </p>
                            <button class="kbtf-more-btn" onclick="toggleBio(this)">Read More</button>
                        </div>
                    </article>

                    <!-- 8. Masuma Halai Khwaja -->
                    <article class="kbtf-card text-center">
                        <div class="kbtf-avatar-wrap">
                            <img src="assets/img/founders/masuma.png" alt="Portrait of Masuma Halai Khwaja – Trustee, Karachi Biennale Trust" class="kbtf-avatar">
                        </div>
                        <h3 class="kbtf-name">Masuma Halai Khwaja</h3>
                        <span class="kbtf-role">Trustee</span>
                        <div class="kbtf-bio-wrap">
                            <p class="kbtf-bio">
                                <span class="kbtf-bio-intro">Masuma Halai Khwaja is a freelance artist who graduated with a distinction in fine arts from the prestigious National College of Arts in Lahore. She has been an art educator for over two decades and has taught at some of the country's most prominent art institutions.</span><span class="kbtf-bio-ellipsis">...</span><span class="kbtf-bio-more d-none"> Masuma has exhibited her work widely in group shows within Pakistan and abroad and has four solo shows to her credit. She has won many awards, including the Sadequain Award and the medal for Star Girl by South Asia Publications.</span>
                            </p>
                            <button class="kbtf-more-btn" onclick="toggleBio(this)">Read More</button>
                        </div>
                    </article>

                    <!-- 9. Ainee Shehzad Salim -->
                    <article class="kbtf-card text-center">
                        <div class="kbtf-avatar-wrap">
                            <img src="assets/img/founders/ainee.png" alt="Portrait of Ainee Shehzad Salim – Vice Chairperson, Karachi Biennale Trust" class="kbtf-avatar">
                        </div>
                        <h3 class="kbtf-name">Ainee Shehzad Salim</h3>
                        <span class="kbtf-role">Vice Chairperson</span>
                        <div class="kbtf-bio-wrap">
                            <p class="kbtf-bio">
                                <span class="kbtf-bio-intro">Ainee Shehzad Salim is a Valedictorian Commonwealth Scholar. She holds a Civil Engineering degree along with a Bachelor in Education and a Master in Education and International Development from the Institute of Education, UCL.</span><span class="kbtf-bio-ellipsis">...</span><span class="kbtf-bio-more d-none"> She is the Head of Department of Continuing Professional Development at the Karachi Grammar School, College Section. She is a CIE PDQ Programme Leader, has authored scholarly articles on education and development, and also teaches A and O Level Mathematics. She runs a successful furniture, interior designing, and event management company.</span>
                            </p>
                            <button class="kbtf-more-btn" onclick="toggleBio(this)">Read More</button>
                        </div>
                    </article>

                    <!-- 10. Riffat Alvi -->
                    <article class="kbtf-card text-center">
                        <div class="kbtf-avatar-wrap">
                            <img src="assets/img/founders/riffat.png" alt="Portrait of Riffat Alvi – Trustee, Karachi Biennale Trust" class="kbtf-avatar">
                        </div>
                        <h3 class="kbtf-name">Riffat Alvi</h3>
                        <span class="kbtf-role">Trustee</span>
                        <div class="kbtf-bio-wrap">
                            <p class="kbtf-bio">
                                <span class="kbtf-bio-intro">Riffat Alvi is the Director and Curator of VM Art Gallery, Karachi, a leading art space in the country and a concern of the ZVMG Rangoonwala Trust.</span><span class="kbtf-bio-ellipsis">...</span><span class="kbtf-bio-more d-none"> Riffat has been practicing as an artist for the last forty years, having graduated from Karachi School of Art. She has worked on projects for UNCTAD GATT, Geneva, for craft development and is the only artist in the country known to work with natural earth and earth pigments as a medium.</span>
                            </p>
                            <button class="kbtf-more-btn" onclick="toggleBio(this)">Read More</button>
                        </div>
                    </article>

                </div>
            </div>
        </section>

        <!-- Inline JavaScript for Biography toggles -->
        <script>
        function toggleBio(btn) {
            const wrap = btn.closest('.kbtf-bio-wrap');
            const ellipsis = wrap.querySelector('.kbtf-bio-ellipsis');
            const moreText = wrap.querySelector('.kbtf-bio-more');
            
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
