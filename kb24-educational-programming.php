<?php 
  $pageTitle = 'Educational Programming - Fourth Karachi Biennale';
  $metaDesc = 'Learn about the KB24 Educational Program, bringing guided tours for students from diverse schools across Karachi to experience visual arts.';
  $bodyClass = 'page-kb24-educational'; 
  include 'components/header.php'; 
?>

<!-- 1. Page Header (Hero Area) -->
<section class="kb24e-hero-section">
    <div class="kb24e-hero-banner">
        <div class="kb24e-hero-overlay"></div>
        <div class="container text-center">
            <h1 class="kb24e-hero-title">Educational Programming</h1>
            <p class="kb24e-hero-subtitle">Fourth Karachi Biennale KB24</p>
            
            <!-- Breadcrumbs -->
            <nav class="kb24e-breadcrumbs" aria-label="breadcrumb">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li>Past Biennale</li>
                    <li>KB24</li>
                    <li><a href="kb24-highlights.php">Programs & Projects</a></li>
                    <li class="active" aria-current="page">Educational Programming</li>
                </ul>
            </nav>
        </div>
    </div>
</section>

<div class="kb24e-main-wrapper">
    <div class="container">
        <div class="row g-5">
            <!-- Left Side: Editorial Content -->
            <div class="col-lg-8">
                <article class="kb24e-article">
                    <p class="kb24e-lead">To introduce KB24 and the transformative energy of contemporary art, students from across Karachi were invited to visit the Biennale. Over the course of two weeks, thirteen guided tours were conducted at Sambara Gallery, Frere Hall, and Bagh Ibne Qasim, engaging hundreds of young minds with cutting-edge artistic practice.</p>

                    <div class="row g-4 mt-2">
                        <div class="col-md-6">
                            <div class="kb24e-info-card">
                                <div class="kb24e-info-icon"><i class="fas fa-brain"></i></div>
                                <h4>Interactive Learning</h4>
                                <p>The interactive tours encouraged students to share their initial impressions of the art, sparking insightful conversations on the theme <strong>Rizq | Risk</strong>. These discussions explored how artists address food security, environmental challenges, and social justice through their work.</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="kb24e-info-card">
                                <div class="kb24e-info-icon"><i class="fas fa-users-cog"></i></div>
                                <h4>Tailored Approach</h4>
                                <p>Diverse schools participated, with students ranging from middle school to A-levels. Each tour was customized to be accessible to the age group and academic level of the students. Younger students focused more on the visual aspects of the artwork—color, form, and material—while older students explored the socio-political themes.</p>
                            </div>
                        </div>
                    </div>

                    <h3 class="kb24e-section-title mt-5">Impact and Educational Goals</h3>
                    <p class="kb24e-paragraph">The educational program aims to make contemporary art accessible to students, offering them the chance to connect with a wide range of genres and innovative processes used by the artists. The tours were well-received, and students left with a deeper understanding of contemporary art and its power to contribute to social change.</p>
                    <p class="kb24e-paragraph">Many teachers reported that the experience inspired classroom discussions and art-making activities that extended far beyond the Biennale visit, planting seeds of creativity and inquiry in the next generation.</p>
                </article>
            </div>

            <!-- Right Side: Gallery Sidebar -->
            <div class="col-lg-4">
                <aside class="kb24e-sidebar">
                    <h4 class="kb24e-sidebar-title"><i class="fas fa-school me-2 text-gold"></i> School Tour Gallery</h4>
                    <p class="kb24e-sidebar-desc">Guided activities and interactive gallery classes at Bagh Ibne Qasim & Sambara Art Gallery.</p>
                    
                    <div class="row g-3 kb24e-gallery-grid">
                        <div class="col-6">
                            <a href="assets/img/KB24/Edu-prog1-scaled-e1735375545840.webp" class="kb24e-gallery-link" title="Student Guided Tour - Outdoor Installations">
                                <img src="assets/img/KB24/Edu-prog1-scaled-e1735375545840-768x1024.webp" alt="Edu prog 1" class="img-fluid rounded" loading="lazy">
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="assets/img/KB24/Edu-prog2-scaled-e1735375567769.webp" class="kb24e-gallery-link" title="Student Interaction with Art Forms">
                                <img src="assets/img/KB24/Edu-prog2-scaled-e1735375567769-768x1024.webp" alt="Edu prog 2" class="img-fluid rounded" loading="lazy">
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="assets/img/KB24/Edu-prog3.webp" class="kb24e-gallery-link" title="Middle School Outdoor Interactive Class">
                                <img src="assets/img/KB24/Edu-prog3-1024x768.webp" alt="Edu prog 3" class="img-fluid rounded" loading="lazy">
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="assets/img/KB24/Edu-prog4.webp" class="kb24e-gallery-link" title="High School Interactive Briefing Sessions">
                                <img src="assets/img/KB24/Edu-prog4-1024x768.webp" alt="Edu prog 4" class="img-fluid rounded" loading="lazy">
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="assets/img/KB24/Edu-prog5.webp" class="kb24e-gallery-link" title="Classroom Dialogue on Rizq Risk theme">
                                <img src="assets/img/KB24/Edu-prog5-1024x979.webp" alt="Edu prog 5" class="img-fluid rounded" loading="lazy">
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="assets/img/KB24/Edu-prog6-scaled.webp" class="kb24e-gallery-link" title="NJV School Student Tour Retrospective">
                                <img src="assets/img/KB24/Edu-prog6-1024x768.webp" alt="Edu prog 6" class="img-fluid rounded" loading="lazy">
                            </a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>

<!-- Phone/Email Bottom Widget -->
<footer class="kb24e-footer-contact">
    <div class="container text-center">
        <p class="mb-2"><i class="fas fa-phone-alt me-2 text-gold"></i> Phone: <strong>+92 21 35157566</strong></p>
        <p class="mb-0"><i class="fas fa-envelope me-2 text-gold"></i> Email: <strong>info@karachibiennale.org.pk</strong></p>
    </div>
</footer>

<script>
document.addEventListener('DOMContentLoaded', () => {
    if (typeof jQuery !== 'undefined' && jQuery.fn.magnificPopup) {
        jQuery('.kb24e-gallery-grid').magnificPopup({
            delegate: 'a',
            type: 'image',
            gallery: {
                enabled: true
            }
        });
    } else {
        const links = document.querySelectorAll('.kb24e-gallery-link');
        links.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const src = link.getAttribute('href');
                const title = link.getAttribute('title') || '';
                
                const box = document.createElement('div');
                box.style.position = 'fixed';
                box.style.inset = '0';
                box.style.backgroundColor = 'rgba(0,0,0,0.9)';
                box.style.zIndex = '100000';
                box.style.display = 'flex';
                box.style.flexDirection = 'column';
                box.style.alignItems = 'center';
                box.style.justifyContent = 'center';
                box.style.cursor = 'pointer';
                
                const img = document.createElement('img');
                img.src = src;
                img.style.maxWidth = '90%';
                img.style.maxHeight = '80vh';
                img.style.borderRadius = '8px';
                
                const caption = document.createElement('p');
                caption.textContent = title;
                caption.style.color = '#fff';
                caption.style.marginTop = '15px';
                
                box.appendChild(img);
                box.appendChild(caption);
                box.addEventListener('click', () => {
                    document.body.removeChild(box);
                });
                document.body.appendChild(box);
            });
        });
    }
});
</script>

<?php include 'components/footer.php'; ?>
