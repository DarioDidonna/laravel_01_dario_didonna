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
                        <a class="nav-link" href="/companies">Aziende</a>
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


    <main class="find-job-section py-5">
        <div class="container">

            <div class="row mb-4">
                <div class="col-12">
                    <h1 class="page-title">Esplora le Offerte di Lavoro</h1>
                    <p class="text-muted">Trova la posizione ideale tra i {{ count($jobs) }} annunci disponibili oggi.
                    </p>
                </div>
            </div>

            <div class="row g-4">
                <aside class="col-lg-3">
                    <div class="filter-sidebar p-4">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h5 class="filter-sidebar-title mb-0">Filtri</h5>
                            <a href="#" class="reset-filter-btn">Resetta</a>
                        </div>

                        <form action="#" method="GET">
                            <div class="filter-group mb-4">
                                <label class="filter-label">Modalità di lavoro</label>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="remote" name="remote">
                                    <label class="form-check-label" for="remote">Remoto</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="hybrid" name="hybrid">
                                    <label class="form-check-label" for="hybrid">Ibrido</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="onsite" name="onsite">
                                    <label class="form-check-label" for="onsite">In Sede</label>
                                </div>
                            </div>

                            <div class="filter-group mb-4">
                                <label class="filter-label">Tipo di Contratto</label>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="fulltime" name="contract[]"
                                        value="Full-time">
                                    <label class="form-check-label" for="fulltime">Full-time</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="parttime" name="contract[]"
                                        value="Part-time">
                                    <label class="form-check-label" for="parttime">Part-time</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="internship"
                                        name="contract[]" value="Stage">
                                    <label class="form-check-label" for="internship">Stage / Intern</label>
                                </div>
                            </div>

                            <div class="filter-group mb-4">
                                <label class="filter-label" for="salaryRange">RAL Minima (€)</label>
                                <select class="form-select custom-select" id="salaryRange" name="min_salary">
                                    <option value="" selected>Qualsiasi</option>
                                    <option value="20000">Da €20k</option>
                                    <option value="30000">Da €30k</option>
                                    <option value="40000">Da €40k</option>
                                    <option value="50000">Da €50k</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-apply-filters w-100">Applica Filtri</button>
                        </form>
                    </div>
                </aside>

                <section class="col-lg-9">
                    <div class="search-results-bar p-3 mb-4">
                        <form class="row g-2">
                            <div class="col-md-5 input-icon-group">
                                <i class="bi bi-search text-muted"></i>
                                <input type="text" class="form-control"
                                    placeholder="Parola chiave, ruolo, azienda...">
                            </div>
                            <div class="col-md-4 input-icon-group border-start-input">
                                <i class="bi bi-geo-alt text-muted"></i>
                                <input type="text" class="form-control" placeholder="Città o regione...">
                            </div>
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-search-results w-100">Cerca</button>
                            </div>
                        </form>
                    </div>

                    <div class="row g-3">
                        @forelse($jobs as $job)
                            <div class="col-12">
                                <div class="card search-job-card p-3">
                                    <div
                                        class="card-body d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3">

                                        <div class="d-flex align-items-center gap-3">
                                            <div class="search-company-logo">
                                                <i class="bi bi-building-fill text-muted"></i>
                                            </div>
                                            <div>
                                                <h5 class="search-job-title mb-1">
                                                    <a href="#"
                                                        class="stretched-link text-decoration-none">{{ $job->title }}</a>
                                                </h5>
                                                <p class="search-company-name mb-2">{{ $job->company_name }}</p>

                                                <div class="search-job-meta d-flex flex-wrap gap-3">
                                                    <span class="meta-subitem"><i
                                                            class="bi bi-geo-alt me-1"></i>{{ $job->location }}</span>
                                                    <span class="meta-subitem"><i
                                                            class="bi bi-clock me-1"></i>{{ $job->contract_type }}</span>
                                                    @if ($job->salary)
                                                        <span class="meta-subitem"><i
                                                                class="bi bi-cash-stack me-1"></i>{{ $job->salary }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="d-flex flex-row flex-md-column align-items-center align-items-md-end justify-content-between gap-2 border-top-mobile pt-3 pt-md-0">
                                            @if ($job->is_remote)
                                                <span class="badge-remote-light">Remote</span>
                                            @else
                                                <span class="badge-onsite-light">In Sede</span>
                                            @endif
                                            <div class="search-btn-arrow d-none d-md-flex">
                                                <i class="bi bi-chevron-right"></i>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12 text-center py-5">
                                <i class="bi bi-emoji-frown fs-1 text-muted mb-3 d-block"></i>
                                <h4>Nessun annuncio trovato</h4>
                                <p class="text-muted">Prova a cambiare i filtri o la parola chiave inserita.</p>
                            </div>
                        @endforelse
                    </div>
                </section>

            </div>
        </div>
    </main>








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
