<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="" name="description">
        <meta content="" name="keywords">
        <title>Rodokar</title>

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Favicons -->
        <link href="{{ asset('assets/landingPageAbout/img/favicon.png') }}" rel="icon">
        <link href="{{ asset('assets/landingPageAbout/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

        <!-- Styles -->
        <link href="{{ asset('assets/landingPageAbout/vendor/aos/aos.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/landingPageAbout/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/landingPageAbout/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/landingPageAbout/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/landingPageAbout/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/landingPageAbout/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="{{ asset('assets/landingPageAbout/css/style.css') }}" rel="stylesheet">
    </head>
    <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-transparent">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1 class="text-light"><a href="{{ url('/') }}"><img src="{{ asset('assets/landingPageAbout/img/rodokar-transparent.png') }}" alt=""><span>{{ config('app.name', 'Rodokar') }}</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Sobre Nós</a></li>
                    <li><a class="nav-link scrollto" href="#services">Serviços</a></li>
                    <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li>
                    <li><a class="nav-link scrollto" href="#team">Time</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contate-nós</a></li>
                    <li><a class="nav-link scrollto shoping" href="{{ url('shop') }}">Loja  <i class="bx bx-shopping-bag"></i></a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container" data-aos="fade-up">
            <h1>Rodokar Tacográfos</h1>
            <h2>Os mais diversos serviços para sua frota!</h2>
            <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row no-gutters">
                    <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="content">
                            <h3>Quem somos?</h3>
                            <p>
                                A Rodokar é uma empresa fundada em 2017, com o objetivo de ofertar serviços aos veiculos de carga pesada. Um dos nossos principais ramos é o Posto Autorizado de Cronotacográfos (PAC), onde emitimos o certificado de regularização do Tacográfo valido por 2 anos.
                            </p>
                            <a href="#" class="about-btn">Sobre nós <i class="bx bx-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-7 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                    <i class="bx bx-bullseye"></i>
                                    <h4>Missão</h4>
                                    <p>Entregar de forma agil e qualificada nossos serviços prestados.</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                    <i class="fab fa-tripadvisor"></i>
                                    <h4>Visão</h4>
                                    <p>Buscar conquistar o maior mercado do ramo de PAC na região Norte do Brasil</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                    <i class="fas fa-funnel-dollar"></i>
                                    <h4>Valores</h4>
                                    <ul>
                                        <li>Confiança</li>
                                        <li>Qualidade</li>
                                        <li>Satisfação</li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                    <h2>Serviços</h2>
                    <p>Os serviços são atividades onde o consumidor não obtém a posse exclusiva da coisa adquirida. Os benefícios do serviço prestado, caso lhe seja atribuído um preço, devem ser evidentes para o comprador ao ponto de este estar disposto a pagar para o obter. <strong> Aqui podemos encontrar os nossos serviços ofertados.</strong></p>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4 class="title"><a href="">Tacografós</a></h4>
                            <p class="description">Trabalhamos na manutenção, aferição e ensaio dos mais diversos modelos do mercado como: VDO 1308 - 1310 - 1318 - 1390 - BVDR </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bx bxs-cog"></i></div>
                            <h4 class="title"><a href="">Mecânica</a></h4>
                            <p class="description">Manutenção de veículos pesados em geral.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4 class="title"><a href="">Freios</a></h4>
                            <p class="description">Reparos de vazamento, troca de cuicas, valvulas, entre outros. Implemento de carga em geral</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="fas fa-rainbow"></i></div>
                            <h4 class="title"><a href="">Molas</a></h4>
                            <p class="description">Troca de molas, soldas, balança, sapatas de freio, rolamento. Implemento de carga em geral</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts  section-bg">
            <div class="container">

                <div class="row no-gutters">

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>Serviços</strong> realizados</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="bx bxs-bus"></i>
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>Ensaios</strong> realizados desde 2017</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="bx bxs-cog"></i>
                            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>Manutenção </strong> de Tacográfos</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="bi bi-people"></i>
                            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>Clientes</strong> fixos com nossos serviços</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">

                <div class="text-center">
                    <h3>O que é um Tacográfo?</h3>
                    <p> O tacógrafo é uma importante peça de medição que auxilia na logística das transportadoras. Ele serve para registrar a distância percorrida e a velocidade do deslocamento de um caminhão. Ou seja, é possível ver quantos quilômetros de estrada foram cobertos durante um período de tempo.</p>
{{--                    <a class="cta-btn" href="#">Call To Action</a>--}}
                </div>

            </div>
        </section><!-- End Cta Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                    <h2>Portfolio</h2>
                    <p>Um pouco sobre como está estruturado nosso ambiente de trabalho.</p>
                </div>

                <div class="row" data-aos="fade-in">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">Tudo</li>
                            <li data-filter=".filter-app">Serviços</li>
                            <li data-filter=".filter-card">Peças</li>
                            <li data-filter=".filter-web">Local</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('assets/landingPageAbout/img/frente.jpeg') }}" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{ asset('assets/landingPageAbout/img/frente.jpeg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('assets/landingPageAbout/img/frente2.jpeg') }}" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{ asset('assets/landingPageAbout/img/frente2.jpeg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('assets/landingPageAbout/img/rolo.jpg') }}" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{ asset('assets/landingPageAbout/img/rolo.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('assets/landingPageAbout/img/rolo2.jpg') }}" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{ asset('assets/landingPageAbout/img/rolo2.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('assets/landingPageAbout/img/bancada.jpg') }}" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{ asset('assets/landingPageAbout/img/bancada.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('assets/landingPageAbout/img/equipamentos.jpg') }}" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{ asset('assets/landingPageAbout/img/equipamentos.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Testimonials Section ======= -->
        <!-- End Testimonials Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container">

                <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                    <h2>Time</h2>
                    <p>Nosso time é formado por membros qualificados, com alta experiencia nos serviços que prestam.</p>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="member" data-aos="fade-up">
                            <div class="pic"><img src="{{ asset('assets/landingPageAbout/img/team/cabecao.jpg') }}" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Edson Fernandes <a href="https://www.facebook.com/edson.brito.319"><i class="icofont-facebook"></i></a></h4>
                                <span>Técnico de Tacografós</span>
                                <div class="social">
                                    <span>Trabalhando a mais de 20 anos no mercado de tacográfos, o Edson é capaz de realizar a manutenção nos mais diferentes modelos existentes. Além de ser certificado pelo Inmetro como Técnico de Ensaio, para aferição e ensaio de veículos de carga.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="150">
                            <div class="pic"><img src="{{ asset('assets/landingPageAbout/img/team/team-2.jpg') }}" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Wesley</h4>
                                <span>Mecânico</span>
                                <div class="social">
                                    <span>O Wesley trabalha a mais de 10 anos com manutenção de veículos pesados. </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="300">
                            <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Bento</h4>
                                <span>Técnico de Implementos de Carga</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contato</h2>
                    <p>Trabalhamos de Segunda á Sexta-feira das 08:00h - 12:00h e 14:00h - 18:00h. Sábados 08:00h - 12:00h</p>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="info-box mb-4">
                            <i class="bx bx-map"></i>
                            <h3>Endereço</h3>
                            <p>Avenida 8, Lt 27 N 242 - Vila Milena - CEP 77600-000, <strong> Paraíso do Tocantins - TO</strong></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Email</h3>
                            <p>rodokar@rodokar.com.br</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bxl-whatsapp"></i>
                            <h3>Telefone e Whatsapp</h3>
                            <p>  +55 (63) 3602-1934 </p>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-6 ">
                        <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed/v1/place?key={{ config('app.google_maps') }}&q=RODOKAR+Tacográfo,Paraiso+do+Tocantins+Brasil" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                    </div>

                    <div class="col-lg-6">
                        <form action="" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <h3>Rodokar</h3>
                            <p class="pb-3"><em>Não é a força ou a sorte, mas o empenho e a persistência que determinam seu sucesso.</em></p>
                            <p>
                                Avenida 8, Lt 27 N 242 - Vila Milena <br>
                                PSO-TO 77600-000, BR<br><br>
                                <strong>Telefone:</strong> +55 (63) 3602-1934<br>
                                <strong>Email:</strong> rodokar@rodokar.com.br<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Menu Site</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#about">Sobre Nós</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Portifolio</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#team">Time</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contato</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">

                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Receber Notificações</h4>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Rodokar</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/ -->
{{--                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a><br>--}}
                Developed by <a target="_blank" href="https://www.linkedin.com/in/vinnicyus-carvalho-gon%C3%A7alves-052a601a6">Vinnicyus Carvalho</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <script src="{{ asset('assets/landingPageAbout/vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('assets/landingPageAbout/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/landingPageAbout/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/landingPageAbout/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/landingPageAbout/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/landingPageAbout/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/landingPageAbout/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/landingPageAbout/js/main.js') }}"></script>
    </body>
</html>
