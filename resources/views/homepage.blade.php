<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JobHub.it</title>
    {{-- FAVICON --}}
    <link rel="icon" type="image/svg+xml" href="{{ asset('media/favicon.svg') }}">
    {{-- BOOTSTRAP ICONS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    {{-- CSS BOOTSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    {{-- CSS CUSTOM --}}
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-job-custom sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <i class="bi bi-briefcase-fill me-2 brand-icon"></i>
                <span class="brand-text">Job<span class="text-accent">Hub</span></span>
            </a>

            <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item">
                        <a class="nav-link active-link" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/find-job">Cerca Lavoro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Aziende</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                </ul>

                <div class="d-flex align-items-center gap-3 visual-actions">
                    <a href="#" class="btn btn-login">Accedi</a>
                    <a href="#" class="btn btn-cta">Posta un Annuncio</a>
                </div>
            </div>
        </div>
    </nav>


    <header class="hero-section d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center gy-5">
                <div class="col-lg-6 target-intro">
                    <div class="badge-trend mb-3 d-inline-flex align-items-center">
                        <span class="badge-dot me-2"></span> oltre 12,000 nuove offerte questa settimana
                    </div>
                    <h1 class="hero-title mb-3">
                        La tua prossima <span class="text-gradient">opportunità</span> di lavoro è qui.
                    </h1>
                    <p class="hero-subtitle mb-4">
                        Esplora migliaia di annunci pubblicati ogni giorno dalle migliori aziende. Che tu sia un
                        professionista avviato o all'inizio della tua carriera, abbiamo il ruolo perfetto per te.
                    </p>

                    <form class="search-bar-hero p-2 mb-4">
                        <div class="row g-2 align-items-center">
                            <div class="col-md-5 col-12 input-group-custom">
                                <i class="bi bi-search ms-2 text-muted"></i>
                                <input type="text" class="form-control" placeholder="Quale lavoro cerchi?">
                            </div>
                            <div class="col-md-4 col-12 input-group-custom border-start-md">
                                <i class="bi bi-geo-alt ms-2 text-muted"></i>
                                <input type="text" class="form-control" placeholder="Città o Remoto">
                            </div>
                            <div class="col-md-3 col-12">
                                <button type="submit" class="btn btn-hero-search w-100">Cerca</button>
                            </div>
                        </div>
                    </form>

                    <div class="popular-tags">
                        <span class="text-muted small me-2">Più cercati:</span>
                        <a href="#" class="badge-tag">Sviluppatore</a>
                        <a href="#" class="badge-tag">Marketing</a>
                        <a href="#" class="badge-tag">Remote</a>
                    </div>
                </div>

                <div class="col-lg-5 offset-lg-1 target-stats">
                    <div class="row g-4">
                        <div class="col-6">
                            <div class="stat-card">
                                <div class="stat-icon-wrapper"><i class="bi bi-briefcase text-info"></i></div>
                                <h3 class="stat-number">45,000+</h3>
                                <p class="stat-label">Annunci Attivi</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="stat-card mt-lg-4">
                                <div class="stat-icon-wrapper"><i class="bi bi-building text-info"></i></div>
                                <h3 class="stat-number">1,800+</h3>
                                <p class="stat-label">Aziende Partner</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="stat-card">
                                <div class="stat-icon-wrapper"><i class="bi bi-people text-info"></i></div>
                                <h3 class="stat-number">80,000+</h3>
                                <p class="stat-label">Utenti Registrati</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="stat-card mt-lg-4">
                                <div class="stat-icon-wrapper"><i class="bi bi-file-earmark-check text-info"></i>
                                </div>
                                <h3 class="stat-number">250+</h3>
                                <p class="stat-label">Nuovi CV di oggi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <section class="job-listings-section py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8">
                    <h2 class="section-title">Offerte di Lavoro in Evidenza</h2>
                    <p class="section-subtitle text-muted">Scopri le posizioni più calde del momento e canditati in
                        pochi click.</p>
                </div>
                <div class="col-md-4 d-flex align-items-center justify-content-md-end">
                    <a href="#" class="btn btn-outline-custom">Vedi tutti gli annunci</a>
                </div>
            </div>

            <div class="row g-4">
                @foreach ($jobs as $job)
                    <div class="col-xl-4 col-md-6">
                        <div class="card job-card h-100">
                            <div class="card-body d-flex flex-column p-4">

                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div class="company-logo-wrapper">
                                        <i class="bi bi-building-fill text-muted"></i>
                                    </div>
                                    <span class="badge-contract">{{ $job->contract_type }}</span>
                                </div>

                                <h5 class="job-title mb-1">
                                    <a href="#"
                                        class="stretched-link text-decoration-none">{{ $job->title }}</a>
                                </h5>
                                <p class="company-name mb-3">{{ $job->company_name }}</p>

                                <div class="job-meta d-flex flex-wrap gap-3 mb-4 mt-auto">
                                    <span class="meta-item">
                                        <i class="bi bi-geo-alt me-1"></i> {{ $job->location }}
                                    </span>
                                    @if ($job->salary)
                                        <span class="meta-item">
                                            <i class="bi bi-cash-stack me-1"></i> {{ $job->salary }}
                                        </span>
                                    @endif
                                </div>

                                <div
                                    class="card-footer-custom d-flex justify-content-between align-items-center pt-3 border-top">
                                    <div class="job-tags d-flex gap-2">
                                        <span class="badge-tag-sm">In evidenza</span>
                                        @if ($job->is_remote)
                                            <span class="badge-tag-sm remote-tag">Remote</span>
                                        @endif
                                    </div>
                                    <div class="btn-arrow-action">
                                        <i class="bi bi-arrow-right-short fs-4"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>



    <section class="categories-section py-5 bg-light-custom">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Cerca per Categoria</h2>
                <p class="section-subtitle text-muted">Trova il lavoro dei tuoi sogni esplorando i settori più
                    richiesti.</p>
            </div>

            <div class="row g-4">
                @foreach ($categories as $category)
                    <div class="col-xl-3 col-md-6">
                        <a href="#" class="category-card text-decoration-none">
                            <div class="category-icon-box">
                                <i class="bi {{ $category->icon }}"></i>
                            </div>
                            <h4 class="category-name">{{ $category->name }}</h4>
                            <p class="category-count">{{ $category->jobs_count }} Annunci aperti</p>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="cta-double-section py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="cta-card cta-seeker h-100">
                        <div class="cta-content p-5">
                            <span class="cta-badge">Per i Candidati</span>
                            <h3 class="cta-title mt-2">Trova il lavoro perfetto in pochi click</h3>
                            <p class="cta-text">Carica il tuo CV, attiva gli avvisi personalizzati e fatti notare dalle
                                migliori aziende tech in Italia.</p>
                            <a href="#" class="btn btn-cta-light">Crea il tuo Profilo <i
                                    class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="cta-card cta-employer h-100">
                        <div class="cta-content p-5">
                            <span class="cta-badge bg-accent-tag">Per le Aziende</span>
                            <h3 class="cta-title mt-2">Trova i migliori talenti per il tuo team</h3>
                            <p class="cta-text">Pubblica le tue offerte di lavoro, gestisci le candidature in modo
                                semplice e assumi professionisti qualificati.</p>
                            <a href="#" class="btn btn-cta-dark">Pubblica un Annuncio <i
                                    class="bi bi-plus-lg ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <footer class="main-footer pt-5 pb-4">
        <div class="container">
            <div class="row gy-4 border-bottom pb-5">

                <div class="col-lg-4 col-md-6">
                    <a class="footer-brand d-flex align-items-center mb-3 text-decoration-none" href="#">
                        <i class="bi bi-briefcase-fill me-2 brand-icon"></i>
                        <span class="brand-text text-white">Job<span class="text-accent">Hub</span></span>
                    </a>
                    <p class="footer-description mb-4">
                        La piattaforma leader in Italia per l'incontro tra i migliori talenti tech e le aziende più
                        innovative del mercato.
                    </p>
                    <div class="footer-socials d-flex gap-3">
                        <a href="#" class="social-link"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-twitter-x"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-6">
                    <h5 class="footer-title">Per i Candidati</h5>
                    <ul class="list-unstyled footer-links">
                        <li><a href="#">Sfoglia Annunci</a></li>
                        <li><a href="#">Carica il tuo CV</a></li>
                        <li><a href="#">Avvisi di lavoro</a></li>
                        <li><a href="#">Consigli di Carriera</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6 col-6">
                    <h5 class="footer-title">Per le Aziende</h5>
                    <ul class="list-unstyled footer-links">
                        <li><a href="#">Pubblica Annuncio</a></li>
                        <li><a href="#">Prezzi e Piani</a></li>
                        <li><a href="#">Ricerca Talenti</a></li>
                        <li><a href="#">Storie di Successo</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6">
                    <h5 class="footer-title">Resta Aggiornato</h5>
                    <p class="footer-description">Ricevi ogni settimana le migliori offerte di lavoro direttamente
                        nella tua casella email.</p>
                    <form class="footer-newsletter-form mt-3">
                        <div class="input-group">
                            <input type="email" class="form-control text-white border-0"
                                placeholder="Inserisci la tua email" required>
                            <button class="btn btn-newsletter" type="submit">
                                <i class="bi bi-send-fill"></i>
                            </button>
                        </div>
                    </form>
                </div>

            </div>

            <div class="row pt-4 align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <p class="copyright-text mb-md-0">&copy; 2026 JobHub. Tutti i diritti riservati.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <ul class="list-inline mb-0 footer-legal-links">
                        <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="#">Cookie Policy</a></li>
                        <li class="list-inline-item"><a href="#">Termini di Servizio</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    {{-- JS BOOTSTRAP --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
