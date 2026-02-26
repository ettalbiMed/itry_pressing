<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<header class="site-header" id="top">
    <nav class="navbar" aria-label="Navigation principale">
        <div class="container nav-inner">
            <button class="menu-toggle" aria-expanded="false" aria-controls="navMenu">☰</button>
            <ul id="navMenu" class="nav-links">
                <li><a href="#home">Accueil</a></li>
                <li><a href="#about">À propos</a></li>
                <li><a href="#services">Services</a></li>
                <li class="logo-slot">
                    <div class="logo-bg">
                        <a href="#home" class="logo logo--enter" aria-label="Accueil">
                            <img src="/assets/img/Logo-Horizontal-Green.svg" alt="Logo Atelier Émeraude" width="150" height="60">
                        </a>
                    </div>
                </li>
                <li><a href="#delivery">Delivery</a></li>
                <li><a href="#gallery">Galerie</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <span class="city-badge">Témara</span>
        </div>
    </nav>
</header>
<main>
    <section id="home" class="hero section-target">
        <div class="hero-carousel" data-carousel>
            <div class="hero-slide is-active"><img src="/assets/img/hero/slide_home_1.png" alt="Atelier pressing éco-responsable à Témara" width="1600" height="900" fetchpriority="high"></div>
            <div class="hero-slide"><img src="/assets/img/hero/hero-2.svg" alt="Collecte et livraison Témara" width="1600" height="900" loading="lazy"></div>
            <div class="hero-slide"><img src="/assets/img/hero/hero-3.svg" alt="Box 24/7 Témara sécurisée" width="1600" height="900" loading="lazy"></div>
            <button class="carousel-arrow prev" aria-label="Slide précédente">‹</button>
            <button class="carousel-arrow next" aria-label="Slide suivante">›</button>
            <div class="carousel-dots" aria-label="Navigation slides"></div>
        </div>
        <div class="hero-overlay">
            <div class="container reveal">
                <h1>Pressing à Témara</h1>
                <p>Un atelier premium, des procédés doux et un service fluide pour votre quotidien: Pressing à domicile Témara, collecte et livraison, et Box 24/7.</p>
                <div class="cta-group">
                    <a href="#delivery" class="btn">Réserver une collecte</a>
                    <a href="#contact" class="btn btn-secondary">Nous contacter</a>
                </div>
                <div class="chips">
                    <span>Delivery à Témara</span><span>Qualité premium</span><span>Box 24/7</span>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about-section section section-target reveal">
        <div class="container">
            <h2>À propos</h2>
            <p>ITRI Clean réinvente le pressing éco-responsable pour le linge du quotidien, les vêtements délicats et le textile d’ameublement. Notre promesse : le luxe au prix juste, avec un soin précis qui prolonge la vie de vos pièces tout en limitant fortement l’impact sur l’environnement.</p>
            <p>Forts de plus de 15 ans d’expérience, nous combinons savoir-faire métier, innovation et technologie au service du client pour garantir un résultat impeccable, constant et maîtrisé.</p>
            <p>Grâce à des procédés non toxiques et une approche moderne du soin textile — sans perlo (sans perchloroéthylène) — nous préservons vos articles, votre santé et celle de nos équipes, tout en valorisant une durabilité réelle, article après article.</p>
        </div>
    </section>

    <section id="services" class="container section services-section section-target reveal">
        <h2>Services</h2>
        <div class="services-infographic">
            <div class="spin-layer">
                <div class="services-ring" aria-hidden="true"></div>

                <article class="service-node card node-1">
                <div class="node-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24"><rect x="4" y="5" width="16" height="14" rx="2"/><circle cx="9" cy="10" r="1.5"/><path d="M12 10h5M12 14h5M7 14h2"/></svg>
                </div>
                <h3>Pressing naturel</h3>
                <p class="node-subtitle">Aqua nettoyage</p>
                <ul class="node-list">
                    <li>✓ Écologique</li><li>✓ Sans produits toxiques</li><li>✓ Hypoallergénique</li><li>✓ Délicat pour les tissus</li><li>✓ Respecte les couleurs</li>
                </ul>
            </article>

            <article class="service-node card node-2">
                <div class="node-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24"><path d="M4 15h16v4H4z"/><path d="M6 15v-4h12v4"/><path d="M8 11V8h8v3"/></svg>
                </div>
                <h3>Ameublement</h3>
                <p>Housses de canapé, rideaux, voilages, matelas… et entretien tapis</p>
            </article>

            <article class="service-node card node-3">
                <div class="node-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24"><rect x="5" y="4" width="10" height="14" rx="2"/><path d="M8 8h4M8 11h4M8 14h3"/><path d="M16 13h4v5h-4z"/></svg>
                </div>
                <h3>Suivi de vos linges</h3>
                <p>En temps réel &amp;</p>
                <p>Pickup &amp; Delivery 24h <span class="node-light">via notre box</span></p>
            </article>

            <article class="service-node card node-4">
                <div class="node-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24"><rect x="4" y="5" width="16" height="14" rx="2"/><circle cx="12" cy="12" r="3.5"/><path d="M8 8h1"/></svg>
                </div>
                <h3>Blanchisserie</h3>
                <p>Draps, nappes, couettes, serviettes…</p>
            </article>

            <article class="service-node card node-5">
                <div class="node-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24"><path d="M8 12l-2-2a2 2 0 0 1 3-3l2 2"/><path d="M16 12l2-2a2 2 0 0 0-3-3l-2 2"/><path d="M9 13l3 3l3-3"/></svg>
                </div>
                <h3>Service Entreprises</h3>
                <p>Collaborations B2B</p>
            </article>

            <article class="service-node card node-6">
                <div class="node-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24"><path d="M4 8h11l3 3h2v5h-2a2 2 0 0 1-4 0H10a2 2 0 0 1-4 0H4z"/><circle cx="8" cy="16" r="1.5"/><circle cx="16" cy="16" r="1.5"/></svg>
                </div>
                <h3>ITRI Clean</h3>
                <p>Collecte et Livraison express</p>
            </article>
        </div>

        <div class="services-center card">
            <div class="itri-mark" aria-hidden="true">
                <img src="/assets/img/Logo-symbole-Green.svg" alt="Logo Atelier Émeraude" width="260" height="260" class="itri-img">
            </div>
            <span class="itri-line" aria-hidden="true"></span>
            <p class="itri-subtitle momo-signature-regular">ITRI CLEAN</p>
        </div>
    </section>


    <section id="delivery" class="service-steps-maquette section-target reveal" aria-label="La propreté chez vous en 3 étapes">
        <div class="service-steps-maquette__inner">
            <header class="service-steps-maquette__hero">
                <h1>ITRI CLEAN</h1>
                <p class="service-steps-maquette__strapline">VOTRE PRESSING ÉCO-RESPONSABLE À DOMICILE</p>
                <p class="service-steps-maquette__note">* à partir de 79Dh de commande</p>
            </header>

            <div class="service-steps-maquette__content">
                <h2>La propreté chez vous en 3 étapes...</h2>
                <p class="service-steps-maquette__subtitle">3 étapes simples pour nettoyer vos articles</p>

                <div class="service-steps-maquette__row">
                    <article class="service-steps-maquette__card">
                        <div class="service-steps-maquette__icon-circle" aria-hidden="true">
                            <svg viewBox="0 0 64 64" role="img" aria-label="Téléphone">
                                <path d="M22 11c8 0 15 7 15 15" />
                                <path d="M22 5c11 0 20 9 20 20" />
                                <path d="M24 22c1 8 10 17 18 18l5-5c1-1 3-1 4 0l7 4c1 1 2 3 1 5l-2 6c-1 3-4 5-8 5-24 0-43-19-43-43 0-4 2-7 5-8l6-2c2-1 4 0 5 1l4 7c1 1 1 3 0 4l-5 5Z" />
                            </svg>
                        </div>
                        <h3>1-Commande</h3>
                        <p>
                            Réservez votre collecte par<br>
                            téléphone au <span class="service-steps-maquette__accent">0522993922</span> ou<br>
                            sur WhatsApp au <span class="service-steps-maquette__accent">0667638300</span><br>
                            en suivant les instructions indiquées
                        </p>
                    </article>

                    <div class="service-steps-maquette__arrow" aria-hidden="true">
                        <svg viewBox="0 0 190 20" preserveAspectRatio="none">
                            <line x1="0" y1="10" x2="174" y2="10" />
                            <polyline points="166,3 188,10 166,17" />
                        </svg>
                    </div>

                    <article class="service-steps-maquette__card">
                        <div class="service-steps-maquette__icon-circle" aria-hidden="true">
                            <svg viewBox="0 0 64 64" role="img" aria-label="Camionnette éco">
                                <rect x="6" y="27" width="30" height="16" rx="2" />
                                <path d="M36 31h10l8 7v5H36z" />
                                <circle cx="18" cy="48" r="5" />
                                <circle cx="46" cy="48" r="5" />
                                <path d="M26 20c3-5 8-7 12-7-1 5-4 9-10 10" />
                                <path d="M28 17c4 1 7 4 8 8" />
                            </svg>
                        </div>
                        <h3>2-Collecte</h3>
                        <p>
                            Notre livreur vient chez vous<br>
                            à la date et horaire convenus<br>
                            pour récupérer vos articles
                        </p>
                    </article>

                    <div class="service-steps-maquette__arrow" aria-hidden="true">
                        <svg viewBox="0 0 190 20" preserveAspectRatio="none">
                            <line x1="0" y1="10" x2="174" y2="10" />
                            <polyline points="166,3 188,10 166,17" />
                        </svg>
                    </div>

                    <article class="service-steps-maquette__card">
                        <div class="service-steps-maquette__icon-circle" aria-hidden="true">
                            <svg viewBox="0 0 64 64" role="img" aria-label="Cintre et chemise">
                                <path d="M24 20c0-4 3-7 8-7s8 3 8 7c0 4-4 4-4 8" />
                                <path d="M6 34h52" />
                                <path d="M6 34 26 25h12l20 9" />
                                <path d="M14 34v15h36V34" />
                                <path d="M26 25v24" />
                                <path d="M38 25v24" />
                            </svg>
                        </div>
                        <h3>3-Livraison</h3>
                        <p>
                            Nous prenons soin de vos articles<br>
                            puis nous vous les livrons à<br>
                            domicile selon vos préférences
                        </p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section id="ondelivery" class="hide container section section-target reveal">
        <h2>Votre pressing à domicile à Témara <span class="price-badge">à partir de 100 Dh</span></h2>
        <div class="steps grid-3">
            <article class="card"><h3>1. Commande</h3><p>Appelez-nous ou écrivez sur WhatsApp pour réserver.</p><p><a class="btn" href="tel:<?= esc($site['contact']['phone']) ?>">Appeler</a> <a class="btn btn-secondary" href="https://wa.me/<?= esc($site['contact']['whatsapp']) ?>">WhatsApp</a></p></article>
            <article class="card"><h3>2. Collecte</h3><p>Nous passons sur le créneau qui vous convient, à domicile ou en entreprise.</p></article>
            <article class="card"><h3>3. Livraison</h3><p>Retour propre, plié et prêt à ranger, partout à Témara.</p></article>
        </div>
        <div class="card box-option">
            <h3>Option Box 24/7</h3>
            <p>Dépôt/collecte autonome via box dédiée, sécurisée, disponible 24h/24 7j/7.</p>
            <a href="#contact" class="btn js-box-link">Où est la box ?</a>
        </div>
    </section>

    
    <section id="gallery" class="container section section-target reveal">
        <h2>Galerie / Social</h2>
        <div class="gallery-grid">
            <?php for ($i = 1; $i <= 6; $i++): ?>
                <figure class="gallery-item card">
                    <a href="<?= esc($site['socials']['instagram']) ?>" target="_blank" rel="noopener" aria-label="Voir sur Instagram">
                        <img src="/assets/img/gallery/gallery-<?= $i ?>.svg" alt="Visuel atelier pressing Témara #<?= $i ?>" width="400" height="400" loading="lazy">
                    </a>
                    <figcaption>Instant atelier #<?= $i ?> · Soin textile premium à Témara.</figcaption>
                </figure>
            <?php endfor; ?>
        </div>
        <a class="btn" href="<?= esc($site['socials']['instagram']) ?>">Suivez-nous</a>
    </section>

    <section id="faq" class="hide container section section-target reveal">
        <h2>FAQ</h2>
        <?php foreach ($site['faq'] as $item): ?>
            <details class="faq-item card"><summary><?= esc($item['q']) ?></summary><p><?= esc($item['a']) ?></p></details>
        <?php endforeach; ?>
    </section>

    <section id="contact" class="section section-target reveal">
        <div class="container">
            <h2>Contact</h2>
            <?php if (session('success')): ?><p class="flash success"><?= esc(session('success')) ?></p><?php endif; ?>
            <?php if (session('error')): ?><p class="flash error"><?= esc(session('error')) ?></p><?php endif; ?>
            <div class="contact-grid">
                <div class="card" id="address-card">
                    <h3><?= esc($site['siteName']) ?></h3>
                    <p>Ville: <?= esc($site['city']) ?></p>
                    <p>Téléphone: <a href="tel:<?= esc($site['contact']['phone']) ?>">Appeler</a></p>
                    <p>WhatsApp: <a href="https://wa.me/<?= esc($site['contact']['whatsapp']) ?>">Écrire</a></p>
                    <p>Email: <a href="mailto:contact@itriclean.ma">contact@itriclean.ma</a></p>
                    <p>Adresse: Boulevard Hassan 2, Témara</p>
                    <p>Horaires: du lundi à samedi de 8:30 à 21h<br>Dimanche de 10h à 20h</p>
                    <p><a href="https://maps.google.com" target="_blank" rel="noopener">Itinéraire Google Maps</a></p>
                    <iframe title="Carte Témara" src="https://maps.google.com/maps?q=Temara&t=&z=13&ie=UTF8&iwloc=&output=embed" loading="lazy"></iframe>
                </div>
                <form class="card" method="post" action="/contact">
                    <?= csrf_field() ?>
                    <input type="text" name="company" tabindex="-1" autocomplete="off" class="hp-field" aria-hidden="true">
                    <label>Nom<input type="text" name="name" required maxlength="120" value="<?= esc(old('name')) ?>"></label>
                    <label>Téléphone<input type="tel" name="phone" required maxlength="30" value="<?= esc(old('phone')) ?>"></label>
                    <label>Email (optionnel)<input type="email" name="email" maxlength="160" value="<?= esc(old('email')) ?>"></label>
                    <label>Message<input type="text" name="message" maxlength="1000" value="<?= esc(old('message')) ?>"></label>
                    <button class="btn" type="submit">Envoyer</button>
                </form>
            </div>
        </div>
    </section>
</main>
<footer class="footer">
    <div class="container">
        <p>Pressing éco-responsable premium à Témara. Service local, discret et fiable.</p>
        <p><?= esc($site['siteName']) ?> · <?= esc($site['contact']['address']) ?> · <?= esc($site['contact']['phone']) ?></p>
        <p>© <?= date('Y') ?> <?= esc($site['siteName']) ?> · Mentions légales · Politique confidentialité</p>
    </div>
</footer>
<?= $this->endSection() ?>
