<?php 
  $pageTitle = 'Inaugural & Closing Ceremonies - Fourth Karachi Biennale';
  $metaDesc = 'Details and visual galleries from the KB24 Inaugural Ceremony at Bagh Ibne Qasim Bandstand and the Closing Ceremony at Jamshed Nusserwanjee Building.';
  $bodyClass = 'page-kb24-ceremonies'; 
  include 'components/header.php'; 
?>

<!-- 1. Page Header (Hero Area) -->
<section class="kb24c-hero-section">
    <div class="kb24c-hero-banner">
        <div class="kb24c-hero-overlay"></div>
        <div class="container text-center">
            <h1 class="kb24c-hero-title">Inaugural and Closing Ceremonies</h1>
            <p class="kb24c-hero-subtitle">Fourth Karachi Biennale KB24</p>
            
            <!-- Breadcrumbs -->
            <nav class="kb24c-breadcrumbs" aria-label="breadcrumb">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li>Past Biennale</li>
                    <li>KB24</li>
                    <li><a href="kb24-highlights.php">Programs & Projects</a></li>
                    <li class="active" aria-current="page">Ceremonies</li>
                </ul>
            </nav>
        </div>
    </div>
</section>

<div class="kb24c-main-wrapper">
    <div class="container">
        
        <!-- Tab Navigation for Ceremonies -->
        <div class="kb24c-tabs-nav text-center mb-5">
            <button class="kb24c-tab-btn active" onclick="switchCeremonyTab('inaugural', this)">Inaugural Ceremony</button>
            <button class="kb24c-tab-btn" onclick="switchCeremonyTab('closing', this)">Closing Ceremony</button>
        </div>

        <!-- Tab 1: Inaugural Ceremony -->
        <div class="kb24c-tab-content active" id="ceremony-inaugural">
            <div class="row g-5">
                <!-- Left Column: Editorial -->
                <div class="col-lg-8">
                    <article class="kb24c-article">
                        <p class="kb24c-lead">The Fourth Karachi Biennale KB24 was inaugurated on October 26, 2024, with a memorable ceremony at the historic Bandstand, Bagh Ibne Qasim. The Bandstand, built in 1920, was illuminated for the event and came alive with live music, evoking memories of its glorious heyday. Guests were introduced to its rich history through a visual presentation projected onto the walls of the Bandstand.</p>
                        
                        <p class="kb24c-paragraph"><strong>Chief Guest Mayor Murtaza Wahab</strong> emphasized the importance of preserving Karachi's heritage and shared his vision for transforming heritage venues like Frere Hall and the Bandstand with music for visitors. The guests included the Sindh Minister of Culture, diplomats, artists, and prominent citizens.</p>
                        
                        <p class="kb24c-paragraph"><strong>Niilofur Farrukh</strong>, Managing Trustee and CEO of Karachi Biennale Trust, welcomed guests to the fourth iteration of the Biennale. She reiterated their commitment to exhibiting museum-quality contemporary art in public spaces and heritage sites, fostering collective memories through the arts.</p>

                        <!-- Prize Awards Panels -->
                        <h3 class="kb24c-section-title">Inaugural Prize Awards</h3>
                        <div class="row g-4 mt-1">
                            <div class="col-md-6">
                                <div class="kb24c-prize-panel">
                                    <div class="kb24c-prize-icon"><i class="fas fa-trophy"></i></div>
                                    <h4>KB24 Juried Art Prize</h4>
                                    <p>Presented by the jurors to the Hunza-based duo <strong>Nadeem Al Karimi</strong> and <strong>Maham Nadeem</strong> for their video installation titled <em>The Last Act</em> and <em>Dismantling Life</em>.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="kb24c-prize-panel">
                                    <div class="kb24c-prize-icon"><i class="fas fa-medal"></i></div>
                                    <h4>KB24 EBM Emerging Artist Prize</h4>
                                    <p>Presented to <strong>Anusha Khwaja</strong> for her proposal <em>Hawah's Garden: Threads of Nature</em>. She was presented with the trophy by <strong>Dr. Zeelaf Muneer</strong>, CEO of English Biscuits Limited (Pvt), enabling her to develop her project.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Performances List -->
                        <h3 class="kb24c-section-title mt-5">Featured Performances</h3>
                        <div class="kb24c-timeline">
                            <div class="kb24c-timeline-item">
                                <span class="kb24c-timeline-number">1</span>
                                <h5>Sheema Kirmani</h5>
                                <p>Pakistani dance maestro presented a special piece exploring the role of women regarding the theme of <strong>Rizq | Risk</strong>.</p>
                            </div>
                            <div class="kb24c-timeline-item">
                                <span class="kb24c-timeline-number">2</span>
                                <h5>Enora Lalet</h5>
                                <p>French artist's performative work <em>Vanishing Creatures</em> featured elaborate costume-crafted items of confectionery, which she handed out to the audience.</p>
                            </div>
                            <div class="kb24c-timeline-item">
                                <span class="kb24c-timeline-number">3</span>
                                <h5>Lundahl and Seitl</h5>
                                <p>Sweden-based artists created <em>River Biographies</em>, providing guests with an immersive and blindfolded sensory movement experience.</p>
                            </div>
                        </div>

                        <p class="kb24c-paragraph mt-4">The vibrant, <em>mela</em>-like atmosphere, illuminated by fairy lights, attracted guests to the video installation of the <strong>Tamasha Collective</strong> on top of the pier, where they could enjoy kulfi on a stick and paan as part of the festive, sensory experience. During the Inaugural Ceremony, guests also received a special preview of the works installed at Bagh Ibne Qasim.</p>
                    </article>
                </div>

                <!-- Right Column: Gallery -->
                <div class="col-lg-4">
                    <aside class="kb24c-sidebar">
                        <h4 class="kb24c-sidebar-title"><i class="fas fa-camera-retro me-2 text-gold"></i> Inaugural Gallery</h4>
                        <p class="kb24c-sidebar-desc">Historical bandstand and launch previews at Bagh Ibne Qasim lawns.</p>
                        
                        <div class="row g-3 kb24c-gallery-grid-inaugural">
                            <div class="col-6">
                                <a href="assets/img/KB24/Inaugural-1.webp" class="kb24c-gallery-link" title="Mayor Murtaza Wahab Address">
                                    <img src="assets/img/KB24/Inaugural-1-1024x576.webp" alt="Inaugural 1" class="img-fluid rounded" loading="lazy">
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="assets/img/KB24/Inaugural-2-scaled.webp" class="kb24c-gallery-link" title="Niilofur Farrukh Opening Remarks">
                                    <img src="assets/img/KB24/Inaugural-2-1024x683.webp" alt="Inaugural 2" class="img-fluid rounded" loading="lazy">
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="assets/img/KB24/Inaugural-3-scaled.webp" class="kb24c-gallery-link" title="Juried Art Prize Winners Nadeem & Maham">
                                    <img src="assets/img/KB24/Inaugural-3-1024x683.webp" alt="Inaugural 3" class="img-fluid rounded" loading="lazy">
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="assets/img/KB24/Inaugural-4-scaled.webp" class="kb24c-gallery-link" title="EBM Emerging Artist Prize - Anusha Khwaja">
                                    <img src="assets/img/KB24/Inaugural-4-1024x683.webp" alt="Inaugural 4" class="img-fluid rounded" loading="lazy">
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="assets/img/KB24/Inaugural.webp" class="kb24c-gallery-link" title="Bagh Ibne Qasim Bandstand Projection">
                                    <img src="assets/img/KB24/Inaugural-1024x604.webp" alt="Inaugural" class="img-fluid rounded" loading="lazy">
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="assets/img/KB24/Inaugural-5.webp" class="kb24c-gallery-link" title="Enora Lalet Performative Art - Vanishing Creatures">
                                    <img src="assets/img/KB24/Inaugural-5.webp" alt="Inaugural 5" class="img-fluid rounded" loading="lazy">
                                </a>
                            </div>
                            <div class="col-12">
                                <a href="assets/img/KB24/Inaugural-6.webp" class="kb24c-gallery-link" title="Lundahl & Seitl River Biographies Performance">
                                    <img src="assets/img/KB24/Inaugural-6.webp" alt="Inaugural 6" class="img-fluid rounded" loading="lazy">
                                </a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>

        <!-- Tab 2: Closing Ceremony -->
        <div class="kb24c-tab-content" id="ceremony-closing">
            <div class="row g-5">
                <!-- Left Column: Editorial -->
                <div class="col-lg-8">
                    <article class="kb24c-article">
                        <p class="kb24c-lead">Jamshed Nusserwanjee Building, previously known as the KMC building located on M. A. Jinnah Road, was the venue of the KB24 Closing Ceremony. Held within the City Council Hall—where the representatives of Karachi have been meeting since the 1930s—the event was well attended by artists and prominent citizens.</p>
                        
                        <p class="kb24c-paragraph"><strong>Niilofur Farrukh</strong>, Managing Trustee of Karachi Biennale Trust, thanked Karachi's citizens and international artists for their support and engagement. She emphasized the urgent need to <em>"set up a contemporary art museum in Karachi"</em> so citizens can experience exciting art throughout the year.</p>

                        <!-- Final Prize Awards Panels -->
                        <h3 class="kb24c-section-title">Final Prize Awards</h3>
                        <div class="row g-4 mt-1">
                            <div class="col-md-6">
                                <div class="kb24c-prize-panel">
                                    <div class="kb24c-prize-icon"><i class="fas fa-trophy text-gold"></i></div>
                                    <h4>KB24 Performance Art Prize</h4>
                                    <p>Presented to the Sweden-based artistic duo <strong>Lundahl and Seitl</strong> for their immersive participatory work connecting audiences with elements of nature.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="kb24c-prize-panel">
                                    <div class="kb24c-prize-icon"><i class="fas fa-medal text-gold"></i></div>
                                    <h4>KB24 Collateral Exhibition Prize</h4>
                                    <p>The jury selected the work of the students of the <strong>Textile Institute of Pakistan</strong> as the most outstanding at the collateral exhibition, <em>Artists of Gaza Live in Our Hearts</em>. The students of the Department of Visual Studies received <strong>Special Mention</strong>.</p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Right Column: Gallery -->
                <div class="col-lg-4">
                    <aside class="kb24c-sidebar">
                        <h4 class="kb24c-sidebar-title"><i class="fas fa-camera-retro me-2 text-gold"></i> Closing Gallery</h4>
                        <p class="kb24c-sidebar-desc">KMC Council Hall awards and closing ceremonies archives.</p>
                        
                        <div class="row g-3 kb24c-gallery-grid-closing">
                            <div class="col-6">
                                <a href="assets/img/KB24/Closing-6.webp" class="kb24c-gallery-link" title="Performance Art Prize Presentation - Lundahl & Seitl">
                                    <img src="assets/img/KB24/Closing-6-1024x576.webp" alt="Closing 6" class="img-fluid rounded" loading="lazy">
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="assets/img/KB24/Closing-scaled.webp" class="kb24c-gallery-link" title="Closing Address - Niilofur Farrukh">
                                    <img src="assets/img/KB24/Closing-1024x681.webp" alt="Closing" class="img-fluid rounded" loading="lazy">
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="assets/img/KB24/Closing1-scaled.webp" class="kb24c-gallery-link" title="Collateral Exhibition Prize - TIP Students">
                                    <img src="assets/img/KB24/Closing1-1024x681.webp" alt="Closing 1" class="img-fluid rounded" loading="lazy">
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="assets/img/KB24/Closing2-scaled.webp" class="kb24c-gallery-link" title="Visual Studies Department - Special Mention">
                                    <img src="assets/img/KB24/Closing2-1024x681.webp" alt="Closing 2" class="img-fluid rounded" loading="lazy">
                                </a>
                            </div>
                            <div class="col-12">
                                <a href="assets/img/KB24/Closing3-scaled.webp" class="kb24c-gallery-link" title="Closing Audience & Prominent Citizens">
                                    <img src="assets/img/KB24/Closing3-1024x681.webp" alt="Closing 3" class="img-fluid rounded" loading="lazy">
                                </a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Phone/Email Bottom Widget -->
<footer class="kb24c-footer-contact">
    <div class="container text-center">
        <p class="mb-2"><i class="fas fa-phone-alt me-2 text-gold"></i> Phone: <strong>+92 21 35157566</strong></p>
        <p class="mb-0"><i class="fas fa-envelope me-2 text-gold"></i> Email: <strong>info@karachibiennale.org.pk</strong></p>
    </div>
</footer>

<script>
function switchCeremonyTab(tabName, button) {
    // Switch active buttons
    document.querySelectorAll('.kb24c-tab-btn').forEach(btn => {
        btn.classList.remove('active');
    });
    button.classList.add('active');
    
    // Switch active content
    document.querySelectorAll('.kb24c-tab-content').forEach(content => {
        content.classList.remove('active');
    });
    document.getElementById('ceremony-' + tabName).classList.add('active');
}

document.addEventListener('DOMContentLoaded', () => {
    // Lightbox triggers for Inaugural
    if (typeof jQuery !== 'undefined' && jQuery.fn.magnificPopup) {
        jQuery('.kb24c-gallery-grid-inaugural, .kb24c-gallery-grid-closing').magnificPopup({
            delegate: 'a',
            type: 'image',
            gallery: {
                enabled: true
            }
        });
    } else {
        const links = document.querySelectorAll('.kb24c-gallery-link');
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
