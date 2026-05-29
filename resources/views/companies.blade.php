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



    <main class="companies-section py-5">
        <div class="container">

            <div class="row align-items-center mb-5 gy-4">
                <div class="col-md-7">
                    <h1 class="page-title mb-2">Aziende Partner</h1>
                    <p class="text-muted mb-0">Scopri le realtà più innovative che pubblicano le loro offerte su JobHub.
                        Esplora i loro profili e trova il posto giusto per te.</p>
                </div>
                <div class="col-md-5">
                    <form action="#" method="GET" class="search-company-bar p-2">
                        <div class="input-group">
                            <span class="input-group-text bg-transparent border-0"><i
                                    class="bi bi-search text-muted"></i></span>
                            <input type="text" name="search" class="form-control border-0"
                                placeholder="Cerca azienda per nome...">
                            <button type="submit" class="btn btn-search-company">Cerca</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row g-4">
                @forelse($companies as $company)
                    <div class="col-xl-4 col-md-6">
                        <div class="card company-card h-100">
                            <div class="card-body p-4 d-flex flex-column">

                                <div class="d-flex justify-content-between align-items-start mb-4">
                                    <div class="company-page-logo">
                                        <i class="bi bi-building text-muted fs-3"></i>
                                    </div>
                                    @if ($company->open_jobs_count > 0)
                                        <span class="badge-hiring"><i class="bi bi-fire me-1"></i> Assunzioni
                                            Attive</span>
                                    @endif
                                </div>

                                <h4 class="company-card-name mb-1">
                                    <a href="#"
                                        class="stretched-link text-decoration-none">{{ $company->name }}</a>
                                </h4>
                                <p class="company-card-industry text-muted mb-3">
                                    <i class="bi bi-tag me-1"></i> {{ $company->industry }}
                                </p>

                                <p class="company-card-bio text-muted mb-4 small">
                                    {{ Str::limit($company->bio, 110, '...') }}
                                </p>

                                <div
                                    class="company-card-footer mt-auto pt-3 border-top d-flex justify-content-between align-items-center">
                                    <span class="company-card-location small text-muted">
                                        <i class="bi bi-geo-alt me-1"></i> {{ $company->headquarters }}
                                    </span>
                                    <span class="badge-jobs-count">
                                        {{ $company->open_jobs_count }}
                                        Posizion{{ $company->open_jobs_count == 1 ? 'e' : 'i' }}
                                        apert{{ $company->open_jobs_count == 1 ? 'a' : 'e' }}
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center py-5">
                        <i class="bi bi-building-exclamation fs-1 text-muted mb-3 d-block"></i>
                        <h4>Nessuna azienda trovata</h4>
                        <p class="text-muted">Non ci sono aziende corrispondenti ai criteri di ricerca attuali.</p>
                    </div>
                @endforelse
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
