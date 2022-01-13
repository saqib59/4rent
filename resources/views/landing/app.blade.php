<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Code Craft" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Multi-purpose Application landing page HTML5 template" />
    <title>4Rent</title>
    <link href="{{ asset('assets/images/favicon/favicon.png') }}" rel="icon" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" />
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400;1,700&amp;family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet" />
    <link href="{{ asset('assets/css/vendor.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
</head>

<body class="body-scroll">

    <div class="wrapper clearfix" id="wrapperParallax">

        <header class="header header-light header-sticky">
            <nav class="navbar navbar-sticky navbar-expand-lg" id="primary-menu">
                <div class="container">
                    {{-- <a class="logo navbar-brand" href="{{ route('index') }}">
                        <img class="logo logo-dark" src="{{ asset('assets/images/logo/logo-light.png') }}" alt="LadidApp Logo" />
                        <img class="logo logo-light" src="{{ asset('assets/images/logo/logo-light.png') }}" alt="LadidApp Logo" />
                    </a> --}}
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                        data-target="#navbarContent" aria-expanded="false"><span
                            class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active"><a class="nav-link" data-scroll="scrollTo" href="#hero">Tour</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" data-scroll="scrollTo" href="#features">Produkt</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" data-scroll="scrollTo" href="#screens">Preise</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" data-scroll="scrollTo" href="#pricing">Kontakt</a>
                            </li>
                        </ul>
                        <div class="module-container">
                            @if (\Auth::check())
                                <div class="module module-cta"><a class="btn" data-scroll="scrollTo" href="login">
                                        <span>Dashboard</span></a></div>
                            @else
                                <div class="module module-cta"><a class="btn" data-scroll="scrollTo" href="register">
                                        <span>Anmelden</span></a></div>
                            @endif

                        </div>

                    </div>

                </div>

            </nav>

        </header>

        <section class="hero hero-lead pb-50" id="hero">
            <div class="hero-cotainer">
                {{-- <div class="hero-bg"> <img src="{{ asset('assets/images/background/bg-hero.svg') }}" alt="Background Image" /></div> --}}
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="hero-content">

                                <h1 class="hero-headline">Mietermanagement leicht gemacht</h1>
                                <p class="hero-bio">Kümmern Sie sich um die wichtigen Dinge im Leben, wir um uns um den Rest.</p>

                                <div class="hero-action">
                                    <a class="btn btn--primary" href="javascript:void(0)">
                                        <span>Erfahre mehr</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="hero-image"><img class="img-fluid" src="{{ asset('assets/images/cover/about.png') }}" alt="4Rent" /></div>
                        </div>
                    </div>

                </div>

            </div>

            {{-- <div class="skew-divider"></div> --}}
        </section>

        <section class="features text-center" id="features">
            <div class="container">
                <div class="row">

                    <div class="col-12 col-lg-4 ">
                        <div class="feature-panel feature-panel-1">
                            <div class="feature-icon">
                                <div class="bg-img">
                                    <img src="{{ asset('assets/images/icons/bg-icon-1.svg') }}" alt="icon svg" />
                                </div>
                                <img src="{{ asset('assets/images/icons/icon-code.svg') }}" alt="Icon" />
                            </div>
                            <div class="feature-content">
                                <h3>Smartes ImmoManagement</h3>
                                <p>Auf dem Dashboard haben Sie alles wichtige Rund um Ihre Objekte im Blick</p>
                            </div>
                        </div>

                    </div>


                    <div class="col-12 col-lg-4 ">
                        <div class="feature-panel feature-panel-2">
                            <div class="feature-icon">
                                <div class="bg-img"><img src="{{ asset('assets/images/icons/bg-icon-2.svg') }}"
                                        alt="icon svg" /></div>
                                <img src="{{ asset('assets/images/icons/icon-paint.svg') }}" alt="Icon" />
                            </div>
                            <div class="feature-content">
                                <h3>Mietverträge innerhalb 3 Minuten erstellt</h3>
                                <p>Haben Sie Lust lange nach dem passenden Vertrag zu suchen? Wenn nein, dann sind Sie hier richtig.</p>
                            </div>
                        </div>

                    </div>


                    <div class="col-12 col-lg-4 ">
                        <div class="feature-panel feature-panel-3">
                            <div class="feature-icon">
                                <div class="bg-img"><img src="{{ asset('assets/images/icons/bg-icon-3.svg') }}"
                                        alt="icon svg" /></div>
                                <img src="{{ asset('assets/images/icons/icon-screen.svg') }}" alt="Icon" />
                            </div>
                            <div class="feature-content">
                                <h3>Schluss mit hohen Kosten</h3>
                                <p>Die Mieterverwaltung soll Ihre Rendite nicht beeinflussen. Daher können Sie bei uns Ihre Objekte ab 2 € pro Objekt pro Monat verwalten</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </section>

        <section class="video" id="video">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="player bg-parallax">
                            <div class="bg-section">
                                <img src="https://via.placeholder.com/3632x3632" alt="video image" />
                            </div>

                            <div class="video-content">
                                <a class="btn-video popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="29" viewBox="0 0 22 29">
                                        <path id="Polygon_4" data-name="Polygon 3"
                                            d="M12,3.8A3,3,0,0,1,17,3.8l8.93,13.549A3,3,0,0,1,23.43,22H5.57a3,3,0,0,1-2.5-4.651Z"
                                            transform="translate(24) rotate(90)"></path>
                                    </svg>
                                </a>

                                <p class="heading-subtitle">WATCH VIDEO </p>
                                <h2 class="heading-title">Show me around</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about" id="about">
            <div class="container">
                <div class="row align-items-center text-center-xs">
                    <div class="col-12 col-lg-6"><img class="img-fluid"
                            src="https://via.placeholder.com/500x600" alt="Book Cover" />
                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="heading heading-aboutus">
                            <h2 class="heading-title about-title">Werde unser Kunde</h2>
                            <p class="heading-desc">
                                3 Gründe warum du zu 4Rent kommen solltest:
                            </p>

                            <div class="feature-icon">
                                <ul class="about-list mt-5">
                                    <li>
                                        <img src="{{ asset('assets/images/icons/icon-screen.svg') }}" class="abt-image">
                                        <div>
                                            <h6 class="list-headding">Kostenlose Kennenlernphase</h6>
                                            <p class="list-para">Probieren Sie alle Services einen Monat lang kostenlos aus.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="{{ asset('assets/images/icons/icon-screen.svg') }}" class="abt-image">
                                        <div>
                                            <h6 class="list-headding">Ich habe bereits ein Abo bei einem Anbieter</h6>
                                            <p class="list-para">Gar kein Problem! Schicken Sie uns die Kündigungsbestätigung und wir erlassen Ihnen 3 Monate Ihre Abogebühr.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="{{ asset('assets/images/icons/icon-screen.svg') }}" class="abt-image">
                                        <div>
                                            <h6 class="list-headding">Treuer Partner sein zahlt sich aus</h6>
                                            <p class="list-para">Schließen Sie einen Jahresvertrag ab und erhalten Sie 20% Rabatt auf Ihren Abopreis</p>
                                        </div>
                                    </li>
                                </ul> 
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>

        <section class="screenshots" id="screens">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 offset-lg-3">
                        <div class="heading heading-3 text-center">
                            <h2 class="heading-title">Unser Servicepaket</h2>
                            <p class="heading-desc">Ein kurze Beschreibung unser Kernfunktionen</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="owl-carousel" data-slide="4" data-slide-rs="3" data-autoplay="true" data-nav="false" data-dots="true" data-space="20" data-loop="false" data-center="false">
                            <img src="https://via.placeholder.com/400x400" alt="screenshot" />
                            <img src="https://via.placeholder.com/400x400" alt="screenshot" />
                            <img src="https://via.placeholder.com/400x400" alt="screenshot" />
                            <img src="https://via.placeholder.com/400x400" alt="screenshot" />
                            <img src="https://via.placeholder.com/400x400" alt="screenshot" />
                            <img src="https://via.placeholder.com/400x400" alt="screenshot" />
                            <img src="https://via.placeholder.com/400x400" alt="screenshot" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pricing bg-clouds-red" id="pricing">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                        <div class="heading text-center">
                            <h2 class="heading-title">Die Preise</h2>
                            <p class="heading-desc">Wähle ein auf dich zugeschnittenes Angebot</p>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="pricing-switcher"><a class="btn active" id="monthly"
                                href="javascript:void(0)">Monatlich</a><a class="btn" id="yearly"
                                href="javascript:void(0)">Jährlich</a></div>
                    </div>
                </div>

                <div class="pricing-container monthly">
                    <div class="row">

                        <div class="col-12 col-lg-3 price-table">
                            <div class="pricing-panel monthly visible">

                                <div class="pricing-head">
                                    <h6 class="pricing-name">STARTER</h6>
                                </div>

                                <div class="pricing-body">
                                    <ul class="pricing-list list-unstyled">
                                        <li>Bis zu zwei Objekte anlegen</li>
                                        <li>Alle Funktionen</li>
                                        <li>unlimited bandwidth</li>
                                        <li>beliebig viele Mieter </li>
                                        <li>Mehr als 30 verschiedene Musterverträge</li>
                                    </ul>

                                    <div class="pricing-type">
                                        <p class="price"><sup>$</sup> <span class="amount">59</span> <span class="period">pro<br>Monat</span></p>
                                    </div>

                                    <a class="btn btn--bordered btn--primary" href="javascript:void(0)">Hier lang</a>
                                </div>
                            </div>
                            {{-- <div class="pricing-panel yearly hidden">
                                <div class="pricing-head">
                                    <h6 class="pricing-name">EXPERIENCED</h6>
                                    <div class="pricing-type">
                                        <p class="price">$99</p>
                                        <p class="per">per month</p>
                                    </div>
                                </div>
                                <div class="pricing-body">
                                    <ul class="pricing-list list-unstyled">
                                        <li>up to 10 objects</li>
                                        <li>secured platform</li>
                                        <li>All functions</li>
                                        <li>unlimited tenants</li>
                                        <li>40 + types of contracts</li>
                                    </ul>
                                    <a class="btn btn--bordered btn--primary" href="javascript:void(0)">GET STARTED</a>
                                </div>
                            </div> --}}
                        </div>


                        <div class="col-12 col-lg-3 price-table">
                            <div class="pricing-panel monthly visible">
                                <div class="pricing-head">
                                    <h6 class="pricing-name">EXPERIENCED</h6>
                                </div>

                                <div class="pricing-body">
                                    <ul class="pricing-list list-unstyled">
                                        <li>bis zu 10 Objekte anlegen</li>
                                        <li>Alle Funktionen</li>
                                        <li>unlimited bandwidth</li>
                                        <li>beliebig viele Mieter anlegen</li>
                                        <li>mehr als 40 Musterverträge</li>
                                    </ul>

                                    <div class="pricing-type">
                                        <p class="price"><sup>$</sup> <span class="amount">99</span> <span class="period">pro<br>Monat</span></p>
                                    </div>

                                    <a class="btn btn--bordered btn--primary" href="javascript:void(0)">Hier lang</a>
                                </div>
                            </div>
                            
                            {{-- <div class="pricing-panel yearly hidden">
                                <div class="pricing-head">
                                    <h6 class="pricing-name">HIGH LEVEL INVESTOR</h6>
                                    <div class="pricing-type">
                                        <p class="price">$270.99</p>
                                        <p class="per">per year</p>
                                    </div>
                                </div>
                                <div class="pricing-body">
                                    <ul class="pricing-list list-unstyled">
                                        <li>50GB bandwidth internet</li>
                                        <li>secured platform</li>
                                        <li>unlimited bandwidth</li>
                                        <li>super support</li>
                                        <li>customer managment</li>
                                    </ul><a class="btn btn--bordered btn--primary" href="javascript:void(0)">start free
                                        trial</a>
                                </div>
                            </div> --}}
                        </div>


                        <div class="col-12 col-lg-3 price-table">
                            <div class="pricing-panel monthly visible">
                                <div class="pricing-head">
                                    <h6 class="pricing-name">PROFESSIONAL</h6>
                                </div>

                                <div class="pricing-body">
                                    <ul class="pricing-list list-unstyled">
                                        <li>bis zu 50 Objekte anlegen</li>
                                        <li>Alle Funktionen</li>
                                        <li>unlimited bandwidth</li>
                                        <li>Beliebig viele Mieter anlegen</li>
                                        <li>mehr als 40 verschiedene Musterverträge</li>
                                    </ul>

                                    <div class="pricing-type">
                                        <p class="price"><sup>$</sup> <span class="amount">149</span> <span class="period">pro<br>Monat</span></p>
                                    </div>

                                    <a class="btn btn--bordered btn--primary" href="javascript:void(0)">Hier lang</a>
                                </div>
                            </div>
                            {{-- <div class="pricing-panel yearly hidden">
                                <div class="pricing-head">
                                    <h6 class="pricing-name">premium plan</h6>
                                    <div class="pricing-type">
                                        <p class="price">$33.99</p>
                                        <p class="per">per year</p>
                                    </div>
                                </div>
                                <div class="pricing-body">
                                    <ul class="pricing-list list-unstyled">
                                        <li>100GB bandwidth internet</li>
                                        <li>secured platform</li>
                                        <li>unlimited bandwidth</li>
                                        <li>super support</li>
                                        <li>customer managment</li>
                                    </ul><a class="btn btn--bordered btn--primary" href="javascript:void(0)">start free
                                        trial</a>
                                </div>
                            </div> --}}
                        </div>

                        <div class="col-12 col-lg-3 price-table">
                            <div class="pricing-panel monthly visible">
                            
                                <div class="pricing-head">
                                    <h6 class="pricing-name">HIGH LEVEL INVESTOR</h6>
                                </div>

                                <div class="pricing-body">
                                    <ul class="pricing-list list-unstyled">
                                        <li>über 50 Objekte anlegen </li>
                                        <li>Alle Funktionen</li>
                                        <li>unlimited bandwidth</li>
                                        <li>beliebig viele Mieter anlegen</li>
                                        <li>Über 40 verschiedene Musterverträge</li>
                                    </ul>

                                    <div class="pricing-type">
                                        <p class="price"><sup>$</sup> <span class="amount">59</span> <span class="period">pro<br>Monat</span></p>
                                    </div>

                                    <a class="btn btn--bordered btn--primary" href="javascript:void(0)">Hier lang</a>
                                </div>

                            </div>
                            {{-- <div class="pricing-panel yearly hidden">
                        
                                <div class="pricing-head">
                                    <h6 class="pricing-name">premium plan</h6>
                                    <div class="pricing-type">
                                        <p class="price">$33.99</p>
                                        <p class="per">per year</p>
                                    </div>
                                </div>
                        
                                <div class="pricing-body">
                                    <ul class="pricing-list list-unstyled">
                                        <li>100GB bandwidth internet</li>
                                        <li>secured platform</li>
                                        <li>unlimited bandwidth</li>
                                        <li>super support</li>
                                        <li>customer managment</li>
                                    </ul><a class="btn btn--bordered btn--primary" href="javascript:void(0)">start free
                                        trial</a>
                                </div>
                            </div> --}}
                        </div>

                    </div>
                </div>

            </div>

        </section>
        <div class="container">
            <div class="row">
                <div class="divider-2"></div>
            </div>
        </div>

        

        <footer class="footer" id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="footer-logo"><a class="logo" href="index.html"><img class="logo logo-light"
                                        src="assets/images/logo/logo-light.png" alt="LadidApp Logo" /></a></div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                            <div class="footer-social">
                                <ul class="list-unstyled">
                                    <li> <a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
                                    <li> <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
                                    <li> <a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="footer-widget">
                                <h6 class="widget-title">important links</h6>
                                <ul class="list-unstyled">
                                    <li> <a href="javascript:void(0)">Tour</a></li>
                                    <li> <a href="javascript:void(0)">Produkt</a></li>
                                    <li> <a href="javascript:void(0)">Preise</a></li>
                                    <li> <a href="javascript:void(0)">Kontakt</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="footer-widget">
                                <h6 class="widget-title">learning lesson</h6>
                                <ul class="list-unstyled">
                                    <li> <a href="javascript:void(0)">tutorials</a></li>
                                    <li> <a href="javascript:void(0)">compare service</a></li>
                                    <li> <a href="javascript:void(0)">how it works</a></li>
                                    <li> <a href="javascript:void(0)">F.A.Q</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="footer-widget">
                                <h6 class="widget-title">our policy</h6>
                                <ul class="list-unstyled">
                                    <li> <a href="javascript:void(0)">application security</a></li>
                                    <li> <a href="javascript:void(0)">software principles</a></li>
                                    <li> <a href="javascript:void(0)">responsible supply chain</a></li>
                                    <li> <a href="javascript:void(0)">software policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <hr />
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12 text--center">
                            <div class="footer-copyright"><span>2021 &copy; <a href="#">4Rent</a>.
                                    All
                                    rights
                                    reserved.</span></div>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
    </div>

    <script src="{{ asset('assets/js/vendor/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('assets/js/functions.js') }}"></script>
</body>

</html>