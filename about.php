<?php 
include("conn.php"); 
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Hakkımda</title>
    <meta name="AdsBot-Google" content="noindex follow" />
    <meta name="description" content="Perez - Personal Portfolio HTML Template">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

    <!-- Font CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100;0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;0,9..40,900;0,9..40,1000;1,9..40,100;1,9..40,200;1,9..40,300;1,9..40,400;1,9..40,500;1,9..40,600;1,9..40,700;1,9..40,800;1,9..40,900;1,9..40,1000&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Syne:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="assets/css/plugins/aos.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/pages/home.css">

</head>

<body class="dark-bg bg-dark-tab">
    <div class="overflow-x-hidden">
        <!-- Header start -->

        <header id="sticky-header" class="white-header bg-dark">
            <div class="d-flex white-bg-header">

                <div class="flex-1 d-flex align-items-center justify-content-between">

                    <a href="index.html">
                        <img src="assets/images/logo/logo.png" alt="logo">
                    </a>

                    <!-- Link Start -->
                    <a href="contact.html" class="d-flex align-items-center flex-wrap py-6px px-3 text-15 fw-bold leading-none mr-2 transition-all contact-link-warning">İletişime Geçin
                        <span class="d-inline-block ml-3 animate-arrow-up">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M7 17L17 7" stroke="currentColor" stroke-opacity="0.9" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round" />
          <path d="M7 7H17V17" stroke="currentColor" stroke-opacity="0.9" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round" />
        </svg>
      </span>
                    </a>
                    <!-- Link End -->
                </div>



                <!-- Button Start -->
                <div class="flex-none">
                    <button id="offcanvas-toggle" class="border-0 bg-black d-flex align-align-items-center flex-wrap justify-content-center py-7 px-38" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="3" y="8" width="18" height="2" fill="white" />
                            <rect x="3" y="14" width="18" height="2" fill="white" />
                        </svg>

                    </button>
                </div>
                <!-- Button End -->

            </div>
        </header>

        <!-- offcanvas-menu start -->
        <div id="offcanvas" class="offcanvas offcanvas-end bg-dark d-flex flex-wrap flex-column justify-content-between">
            <!-- close button start -->

            <div>
                <div class="d-flex flex-wrap justify-content-between align-items-center offcanvas-header">
                    <a href="index.html">
                        <img src="assets/images/logo/offcanvas-logo.png" alt="">
                    </a>
                    <button id="offcanvas-close" class="offcanvas-close bg-primary border-0" data-bs-dismiss="offcanvas" aria-label="Close">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M19.2803 4.71967C19.5732 5.01256 19.5732 5.48744 19.2803 5.78033L5.78033 19.2803C5.48744 19.5732 5.01256 19.5732 4.71967 19.2803C4.42678 18.9874 4.42678 18.5126 4.71967 18.2197L18.2197 4.71967C18.5126 4.42678 18.9874 4.42678 19.2803 4.71967Z" fill="white" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.71967 4.71967C5.01256 4.42678 5.48744 4.42678 5.78033 4.71967L19.2803 18.2197C19.5732 18.5126 19.5732 18.9874 19.2803 19.2803C18.9874 19.5732 18.5126 19.5732 18.2197 19.2803L4.71967 5.78033C4.42678 5.48744 4.42678 5.01256 4.71967 4.71967Z" fill="white" />
                        </svg>
                    </button>
                </div>

                <!-- close button end -->

                <!-- offcanvas-menu start -->

                <nav class="offcanvas-nav d-flex flex-wrap flex-column justify-content-between">
                    <ul class="offcanvas-menu p-0 list-unstyled">
                        <li class="offcanvas-menu-item">
                            <a href="index.php" class="text-white text-xl fw-bold font-Syne leading-none d-flex flex-wrap align-items-center justify-content-between offcanvas-menu-link">Anasayfa
                                <span class="d-inline-block animate-arrow-up">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7 17L17 7" stroke="currentColor" stroke-opacity="0.9" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round"></path>
                <path d="M7 7H17V17" stroke="currentColor" stroke-opacity="0.9" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round"></path>
              </svg>
            </span>
                            </a>
                        </li>
                        <li class="offcanvas-menu-item">
                            <a href="about.php" class="text-white text-xl fw-bold font-Syne leading-none d-flex flex-wrap align-items-center justify-content-between offcanvas-menu-link">Hakkımda
                                <span class="d-inline-block animate-arrow-up">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7 17L17 7" stroke="currentColor" stroke-opacity="0.9" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round"></path>
                <path d="M7 7H17V17" stroke="currentColor" stroke-opacity="0.9" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round"></path>
              </svg>
            </span>
                            </a>

                        </li>
                        <li class="offcanvas-menu-item">
                            <a href="projects.php" class="text-white text-xl fw-bold font-Syne leading-none d-flex flex-wrap align-items-center justify-content-between offcanvas-menu-link">Projeler
                                <span class="d-inline-block animate-arrow-up">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7 17L17 7" stroke="currentColor" stroke-opacity="0.9" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round"></path>
                <path d="M7 7H17V17" stroke="currentColor" stroke-opacity="0.9" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round"></path>
              </svg>
            </span>
                            </a>
                        </li>
                        
                        

                        <li class="offcanvas-menu-item">
                            <a href="contact.php" class="text-white text-xl fw-bold font-Syne leading-none d-flex flex-wrap align-items-center justify-content-between offcanvas-menu-link">İletişim
                                <span class="d-inline-block animate-arrow-up">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7 17L17 7" stroke="currentColor" stroke-opacity="0.9" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round"></path>
                <path d="M7 7H17V17" stroke="currentColor" stroke-opacity="0.9" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round"></path>
              </svg>
            </span>
                            </a>
                        </li>

                    </ul>
                </nav>

            </div>


            <nav class="pb-10">
                <ul class="d-flex flex-wrap gap-x-4 align-items-center offcanvas-social-links p-0  list-unstyled">
                   
                    <li><a href="https://www.linkedin.com/in/yazel-y%C3%BCce-a99615211/" class="text-white transition-all"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.94043 5.00002C6.94017 5.53046 6.7292 6.03906 6.35394 6.41394C5.97868 6.78883 5.46986 6.99929 4.93943 6.99902C4.409 6.99876 3.90039 6.78779 3.52551 6.41253C3.15062 6.03727 2.94016 5.52846 2.94043 4.99802C2.9407 4.46759 3.15166 3.95899 3.52692 3.5841C3.90218 3.20922 4.411 2.99876 4.94143 2.99902C5.47186 2.99929 5.98047 3.21026 6.35535 3.58552C6.73024 3.96078 6.9407 4.46959 6.94043 5.00002ZM7.00043 8.48002H3.00043V21H7.00043V8.48002ZM13.3204 8.48002H9.34043V21H13.2804V14.43C13.2804 10.77 18.0504 10.43 18.0504 14.43V21H22.0004V13.07C22.0004 6.90002 14.9404 7.13002 13.2804 10.16L13.3204 8.48002Z" fill="currentColor" fill-opacity="0.9"></path>
                            </svg>
                        </a></li>
                    <li><a href="#" class="text-white transition-all"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.989 11.572C19.907 9.99792 19.3596 8.4836 18.416 7.221C18.1285 7.53061 17.8212 7.82123 17.496 8.091C16.4969 8.92086 15.3805 9.5982 14.183 10.101C14.35 10.451 14.503 10.79 14.638 11.11V11.113C14.665 11.174 14.688 11.231 14.732 11.342L14.749 11.382C16.262 11.212 17.858 11.275 19.405 11.485C19.611 11.512 19.805 11.541 19.989 11.572ZM10.604 4.122C11.5786 5.49516 12.4772 6.92062 13.296 8.392C14.519 7.91 15.53 7.302 16.344 6.625C16.674 6.351 16.938 6.093 17.14 5.87C15.701 4.65972 13.8803 3.99733 12 4C11.524 4 11.058 4.042 10.604 4.121V4.122ZM4.253 9.997C4.93423 9.97981 5.61464 9.93878 6.293 9.874C7.93264 9.72734 9.55828 9.4525 11.155 9.052C10.3205 7.60221 9.41956 6.19171 8.455 4.825C7.42472 5.3354 6.51626 6.06141 5.79124 6.95379C5.06623 7.84617 4.54162 8.88404 4.253 9.997ZM5.783 17.035C6.25195 16.3575 6.77894 15.7221 7.358 15.136C8.812 13.646 10.528 12.486 12.514 11.846L12.576 11.828C12.411 11.464 12.256 11.139 12.1 10.833C10.264 11.368 8.33 11.702 6.403 11.875C5.463 11.96 4.62 11.997 4 12.003C3.99815 13.8356 4.62722 15.6128 5.783 17.035ZM15.004 19.415C14.6184 17.4703 14.0725 15.5607 13.372 13.706C11.372 14.433 9.776 15.496 8.543 16.764C8.0454 17.2664 7.60382 17.8213 7.226 18.419C8.60481 19.4478 10.2797 20.0025 12 20C13.0299 20.0015 14.0504 19.8035 15.005 19.417L15.004 19.415ZM16.878 18.34C18.4393 17.1398 19.5028 15.4057 19.865 13.47C19.525 13.385 19.094 13.3 18.62 13.234C17.5661 13.0823 16.4968 13.0712 15.44 13.201C16.035 14.8799 16.5154 16.5961 16.878 18.34ZM12 22C6.477 22 2 17.523 2 12C2 6.477 6.477 2 12 2C17.523 2 22 6.477 22 12C22 17.523 17.523 22 12 22Z" fill="currentColor" fill-opacity="0.9"></path>
                            </svg>
                        </a></li>
                    <li><a href="https://github.com/yazelyuce" class="text-white transition-all"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.001 2C6.47598 2 2.00098 6.475 2.00098 12C1.99977 14.0992 2.65958 16.1454 3.88679 17.8484C5.114 19.5515 6.84631 20.8249 8.83798 21.488C9.33798 21.575 9.52598 21.275 9.52598 21.012C9.52598 20.775 9.51298 19.988 9.51298 19.15C7.00098 19.613 6.35098 18.538 6.15098 17.975C6.03798 17.687 5.55098 16.8 5.12598 16.562C4.77598 16.375 4.27598 15.912 5.11298 15.9C5.90098 15.887 6.46298 16.625 6.65098 16.925C7.55098 18.437 8.98798 18.012 9.56298 17.75C9.65098 17.1 9.91298 16.663 10.201 16.413C7.97598 16.163 5.65098 15.3 5.65098 11.475C5.65098 10.387 6.03798 9.488 6.67598 8.788C6.57598 8.538 6.22598 7.513 6.77598 6.138C6.77598 6.138 7.61298 5.875 9.52598 7.162C10.3401 6.9364 11.1812 6.82302 12.026 6.825C12.876 6.825 13.726 6.937 14.526 7.162C16.439 5.862 17.276 6.138 17.276 6.138C17.826 7.513 17.476 8.538 17.376 8.788C18.013 9.488 18.401 10.375 18.401 11.475C18.401 15.313 16.064 16.163 13.839 16.413C14.201 16.725 14.514 17.325 14.514 18.263C14.514 19.6 14.501 20.675 14.501 21.013C14.501 21.275 14.689 21.587 15.189 21.487C17.1738 20.8166 18.8985 19.5408 20.1203 17.8389C21.3421 16.1371 21.9995 14.095 22 12C22 6.475 17.525 2 12 2H12.001Z" fill="currentColor" fill-opacity="0.9"></path>
                            </svg>
                        </a></li>

                </ul>
            </nav>
        </div>
        <!-- offcanvas-menu end -->

        <!-- Header end -->

        <!-- About Me Sectin Start -->
        <section class="bg-secondary pt-20 pb-120" data-aos="zoom-in">
            <div class="container">
                <div class="about-grid">
                    <img class="mx-auto" src="assets/images/about/about2.png" alt="about me">
                    <div class="fw-bold font-Syne leading-none d-flex flex-wrap flex-column gap-y-2">
                        <span class="text-warning text-xl">Hakkımda</span>
                        <h3 class="text-dark section-title">
                           <?php echo $cikti["ad"]; ?> <?php echo $cikti["soyad"]; ?>
                        </h3>

                        <h4 class="text-dark text-2xl mt-3 mb-4"><?php echo $cikti["uzmanlik_alani"]; ?></h4>
                        <p class="text-dark text-xl fw-bold font-Syne leading-7 mb-6">
                            Yenilikçi çözümler üreten bir Bilişim Sistemleri Mühendisi adayıyım. Web ve uygulama geliştirme dünyasında modern teknolojilerle fark yaratmaya, karmaşık sistemleri basitleştirmeye hazırım.
                        </p>
                        <p class="paragraph mb-6">
                            İşte burada ben devreye giriyorum. Karmaşık sistemlerin mimarı, temiz kodun takipçisiyim. Sadece kim olduğunuzu ve vizyonunuzu yansıtan değil, aynı zamanda kullanıcıda karşılık bulan, güvenli ve ölçeklenebilir dijital çözümler inşa ediyorum.</p>

                        <div>
                            <img src="uploads/imza.png" alt="signature">
                        </div>


                    </div>
                </div>
            </div>
        </section>
        <!-- About Me Sectin End -->



        <!-- Experience Sectin Start -->
        <section class="bg-dark py-120 overflow-x-hidden dark-paragraph">
            <div class="container" data-aos="zoom-out">
                <div class="about-grid-section-two">
                    <div class="fw-bold font-Syne leading-none d-flex flex-wrap flex-column gap-y-2">
                        <h3 class="text-white section-title mb-5">
                            Vizyonum, müşterilerimi mutlu etmek.
                        <p class="paragraph mb-7">
                            "İşte burada ben devreye giriyorum. Karmaşık sistemlerin mimarı, temiz kodun takipçisiyim. Sadece kim olduğunuzu ve teknik gücünüzü yansıtan yapılar değil; aynı zamanda veritabanı performansıyla parlayan, ölçeklenebilir ve kullanıcıyı merkeze alan dijital çözümler geliştiriyorum. Amacım, karmaşayı fonksiyonelliğe dönüştürerek kullanıcıların sistemle olan her etkileşiminde güven ve verimlilik hissetmesini sağlamaktır.
                        </p>

                        
                    </div>

                    <div class="d-flex flex-column justify-content-end">
                        <div class="d-flex flex-wrap flex-column years-of-experience mb-12">
                            <span
                                class="years-experience-of-number text-white fw-bold font-Syne leading-none d-inline-block position-relative">2+</span>
                            <span class="strock-text">Yıl <br> deneyim</span>

                        </div>

                        <div class="bg-black d-flex flex-wrap justify-content-between align-items-end say-hello-contact-box">
                            <div class="d-flex flex-column flex-wrap gap-y-2">
                                <span class="text-warning text-lg fw-normal leading-none">Merhaba De!</span>
                                <h4 class="text-white text-2xl fw-bold font-Syne leading-none mb-0">
                                    <?php echo $cikti["email"]; ?>
                                </h4>
                            </div>
                            <div class="d-flex flex-wrap justify-content-end">
                                <a href="#" class="animate-arrow-up">
                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14 34L34 14" stroke="#FFB646" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M14 14H34V34" stroke="#FFB646" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Experience Sectin End -->


        <!-- Video Section Start -->

        <div class="bg-dark pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="position-relative" data-aos="zoom-in-up">
                            <img class="rounded-2xl" src="assets/images/video/video.png" alt="video image">
                            <a href="https://www.youtube.com/watch?v=mSC6GwizOag&ab_channel=TailwindLabs" class="video-popup play-button">
                                <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle class="fill-primary group-hover:fill-yellow transition-all duration-300" cx="50" cy="50" r="50" />
                                    <path class="stroke-black-800 group-hover:stroke-white" d="M43 41L57 50L43 59V41Z" stroke-opacity="0.9" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Video Section End -->

        <!-- tabs start -->
        <section class="featured-properties dark-paragraph">
            <div class="container" data-aos="zoom-out" data-aos-delay="800">
                <div class="row">

                    <div class="col-12">

                        <div class="fw-bold font-Syne text-center leading-none d-flex flex-wrap flex-column gap-y-2 mb-4">
                            <span class="text-warning text-xl">Özgeçmiş</span>
                            <h3 class="section-title text-white mb-0">Tüm detaylar bura<span
                            class="d-inline-block position-relative circle-shape portfolio-shape2">da.</span>..

                            </h3>



                        </div>
                        <div class="tabs nav nav-pills flex-wrap justify-content-center gap-4 mt-8 mb-14">
                            <button data-bs-toggle="pill" data-bs-target="#about_me_tab" class="tab-btn justify-content-between align-items-center d-inline-flex active">
                                Hakkımda
                                <span class="inline-block animate-arrow-up">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 17L17 7" stroke="currentColor" stroke-opacity="0.9" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M7 7H17V17" stroke="currentColor" stroke-opacity="0.9" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
                            </button>
                            <button class="tab-btn tab-btn justify-content-between align-items-center d-inline-flex" data-bs-toggle="pill" data-bs-target="#experience_tab">
                                Uzmanlık
                                <span class="inline-block animate-arrow-up">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 17L17 7" stroke="currentColor" stroke-opacity="0.9" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M7 7H17V17" stroke="currentColor" stroke-opacity="0.9" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
                            </button>
                            <button class="tab-btn tab-btn justify-content-between align-items-center d-inline-flex" data-bs-toggle="pill" data-bs-target="#education_tab">
                                Eğitim
                                <span class="inline-block animate-arrow-up">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 17L17 7" stroke="currentColor" stroke-opacity="0.9" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M7 7H17V17" stroke="currentColor" stroke-opacity="0.9" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
                            </button>
                            <button class="tab-btn tab-btn justify-content-between align-items-center d-inline-flex" data-bs-toggle="pill" data-bs-target="#skills_tab">
                                Yetenekler
                                <span class="inline-block animate-arrow-up">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 17L17 7" stroke="currentColor" stroke-opacity="0.9" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M7 7H17V17" stroke="currentColor" stroke-opacity="0.9" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
                            </button>
                           
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="tab-content">

                            <div id="about_me_tab" class="tab-pane fade show active position-relative">
                                <div class="about-me-grid">

                                    <img src="uploads/default.jpg" alt="about me">
                                    <div>
                                        <h4 class="text-white text-2xl based-in-german-title-tab fw-bold font-Syne">Türkiye Merkezli
                                        </h4>
                                        <p class="paragraph mb-7"><?php echo $cikti["ad"]; ?>, <span class="text-white"><?php echo $cikti["uzmanlik_alani"]; ?></span>,
                                            İşte burada devreye giriyorum. Karmaşık sistemlerin mimarı ve temiz kodun (Clean Code) takipçisiyim. Sadece teknik yetkinliklerinizi ve vizyonunuzu yansıtan yapılar kurmakla kalmıyor; aynı zamanda veritabanı performansıyla parlayan, ölçeklenebilir ve kullanıcıyı merkeze alan fonksiyonel dijital çözümler inşa ediyorum</p>
                                        
                                        <ul class="flex-column gap-3 d-inline-flex list-unstyled p-0">
                                            <li class="gap-10 d-inline-flex align-items-center">
                                                <span class="w-110px text-black-text-800 text-lg fw-normal leading-none">
                                            Ad</span>
                                                <span class="text-white text-2xl fw-bold font-Syne leading-8">
                                            <?php echo $cikti["ad"]; ?> <?php echo $cikti["soyad"]; ?></span>
                                            </li>
                                            <li class="gap-10 d-inline-flex align-items-center">
                                                <span class="w-110px text-black-text-800 text-lg fw-normal leading-none">
                                            Ülke</span>
                                                <span class="text-white text-2xl fw-bold font-Syne leading-8">
                                            <?php echo $cikti["ulke"]; ?></span>
                                            </li>
                                            <li class="gap-10 d-inline-flex align-items-center">
                                                <span class="w-110px text-black-text-800 text-lg fw-normal leading-none">
                                            Telefon</span>
                                                <span class="text-white text-2xl fw-bold font-Syne leading-8">
                                            <?php echo $cikti["telefon"]; ?></span>
                                            </li>
                                            <li class="gap-10 d-inline-flex align-items-center">
                                                <span class="w-110px text-black-text-800 text-lg fw-normal leading-none">
                                            Email</span>
                                                <span class="text-white text-2xl fw-bold font-Syne leading-8">
                                            <?php echo $cikti["email"]; ?></span>
                                            </li>
                                            <li class="gap-10 d-inline-flex align-items-center">
                                                <span class="w-110px text-black-text-800 text-lg fw-normal leading-none">
                                            Deneyim Süresi</span>
                                                <span class="text-white text-2xl fw-bold font-Syne leading-8">
                                            <?php echo $cikti["deneyim_suresi"]; ?> Yıl</span>
                                            </li>
                                            
                                            <li class="gap-10 d-inline-flex align-items-center">
                                                <span class="w-110px text-black-text-800 text-lg fw-normal leading-none">
                                            Dil</span>
                                                <span class="text-white text-2xl fw-bold font-Syne leading-8">
                                            <?php echo $cikti["dil"]; ?></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div id="experience_tab" class="tab-pane fade position-relative">
                                <h4 class="text-white text-2xl based-in-german-title-tab fw-bold font-Syne">Uzmanlık</h4>

                                <div class="tab-contents tab-contents-experience gap-x-4 gap-y-5">

                                    <div class="experience-tab-item d-flex flex-wrap flex-column gap-8 justify-content-between">
                                        <span class="text-sm fw-normal font-Inter leading-tight text-black-text-800">03/2025
                                    –
                                    05/2025</span>
                                        <div>
                                            <p class="dot text-lg fw-normal font-sans leading-7 text-white position-relative">
                                                Sakarya Teknokent</p>
                                            <h4 class="fw-bold font-Syne leading-normal text-2xl text-white">İdari İşler Stajyeri
                                            </h4>
                                        </div>
                                    </div>

                                    <div class="experience-tab-item d-flex flex-wrap flex-column gap-8 justify-content-between">
                                        <span class="text-sm fw-normal font-Inter leading-tight text-black-text-800">11/2024
                                    – devam ediyor</span>
                                        <div>
                                            <p class="dot text-lg fw-normal font-sans leading-7 text-white position-relative">
                                                TÜBİTAK</p>
                                            <h4 class="fw-bold font-Syne leading-normal text-2xl text-white">2209A Proje Yürütücülüğü
                                            </h4>
                                        </div>
                                    </div>

                                    <div class="experience-tab-item d-flex flex-wrap flex-column gap-8 justify-content-between">
                                        <span class="text-sm fw-normal font-Inter leading-tight text-black-text-800">08/2025
                                    – 09/2025</span>
                                        <div>
                                            <p class="dot text-lg fw-normal font-sans leading-7 text-white position-relative">
                                                Aytaç Gıda A.Ş.</p>
                                            <h4 class="fw-bold font-Syne leading-normal text-2xl text-white">IT Stajyeri
                                            </h4>
                                        </div>
                                    </div>

                                    <div class="experience-tab-item d-flex flex-wrap flex-column gap-8 justify-content-between">
                                        <span class="text-sm fw-normal font-Inter leading-tight text-black-text-800">02/2026
                                    – devam ediyor</span>
                                        <div>
                                            <p class="dot text-lg fw-normal font-sans leading-7 text-white position-relative">
                                                Srtech Serra</p>
                                            <h4 class="fw-bold font-Syne leading-normal text-2xl text-white">Web Developer
                                            </h4>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div id="education_tab" class="tab-pane fade">
                                <h4 class="text-white text-2xl based-in-german-title-tab fw-bold font-Syne">Eğitim</h4>

                                <div class="education-tab-contents">

                                    <div class="education-tab-item d-flex flex-wrap">
                                        <span class="text-sm fw-normal font-Inter leading-tight text-black-text-800">08/2022
                                    –
                                    08/2026</span>
                                        <div class="flex-1">
                                            <p class="dot text-lg fw-normal font-sans leading-7 text-white position-relative">
                                                Sakarya Üniversitesi</p>
                                            <h4 class="fw-bold font-Syne leading-normal text-2xl text-white">Bilişim Sistemleri Mühendisliği
                                            </h4>
                                        </div>
                                    </div>



                                </div>
                            </div>

                            <div id="skills_tab" class="tab-pane fade">
                                <h4 class="text-white text-2xl based-in-german-title-tab fw-bold font-Syne">Yetenekler</h4>

                                <div class="skills-tab-contents">

                                    <div class="d-flex flex-wrap gap-4 align-items-start skills-tab-item">
                                        <!-- <img class="items-start" src="assets/images/skills/vs-code.png" alt="icons"> -->
                                       <!-- <svg class="items-start" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">

                                            <g>
                                                <path d="M0.304102 11.1595C0.304102 11.1595 -0.474565 10.5902 0.460101 9.83285L2.6401 7.86218C2.6401 7.86218 3.26277 7.19951 3.92277 7.77685L24.0308 23.1662V30.5449C24.0308 30.5449 24.0214 31.7049 22.5508 31.5769L0.302768 11.1582L0.304102 11.1595Z" fill="currentColor"></path>
                                                <path d="M5.48818 15.9164L0.304176 20.6791C0.304176 20.6791 -0.229158 21.0791 0.304176 21.7951L2.71084 24.0084C2.71084 24.0084 3.28284 24.6284 4.12684 23.9218L9.62151 19.7111L5.48818 15.9164ZM14.5868 15.9551L24.0935 8.61911L24.0308 1.27911C24.0308 1.27911 23.6242 -0.323552 22.2708 0.511114L9.62151 12.1471L14.5868 15.9551Z" fill="currentColor"></path>
                                                <path d="M22.5489 31.5867C23.1009 32.1574 23.7703 31.9707 23.7703 31.9707L31.1783 28.2814C32.1263 27.6281 31.9929 26.8174 31.9929 26.8174V4.78406C31.9929 3.81606 31.0129 3.4814 31.0129 3.4814L24.5916 0.352065C23.1889 -0.523935 22.2703 0.510731 22.2703 0.510731C22.2703 0.510731 23.4516 -0.349269 24.0303 1.27873V30.4121C24.0303 30.6121 23.9876 30.8081 23.9036 30.9854C23.7343 31.3307 23.3676 31.6521 22.4876 31.5187L22.5489 31.5867Z" fill="currentColor"></path>
                                            </g>
                                        </svg> -->
                                        <div class="flex flex-wrap gap-1 flex-1 flex-col">
                                            <h4 class="fw-bold font-Syne leading-normal text-xl text-white">Python</h4>
                                            <p class="text-sm fw-normal font-Inter leading-none text-black-text-800">(90%)</p>
                                        </div>
                                    </div>


                                    <div class="d-flex flex-wrap gap-4 align-items-start skills-tab-item">
                                        <!-- <img class="items-start" src="assets/images/skills/figma.png" alt="icons"> -->
                                       
                                        <div class="flex flex-wrap gap-1 flex-1 flex-col">
                                            <h4 class="fw-bold font-Syne leading-normal text-xl text-white">MSSQL SERVER</h4>
                                            <p class="text-sm fw-normal font-Inter leading-none text-black-text-800">(70%)</p>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-wrap gap-4 align-items-start skills-tab-item">
                                        <!-- <img class="items-start" src="assets/images/skills/framer.png" alt="icons"> -->
                                        
                                        <div class="flex flex-wrap gap-1 flex-1 flex-col">
                                            <h4 class="fw-bold font-Syne leading-normal text-xl text-white">PHP</h4>
                                            <p class="text-sm fw-normal font-Inter leading-none text-black-text-800">(50%)</p>
                                        </div>
                                    </div>

                                   
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- tabs end -->


        <!-- Testimonial section Start -->
        <section class="bg-dark py-120 testimonial" data-aos="fade-up" data-aos-delay="400">
            <div class="testimonial-space-left px-8">
                <div class="d-flex flex-column testimonial-gap flex-xl-row">

                    <div class="fw-bold font-Syne leading-none d-flex flex-wrap flex-column gap-y-2 mb-10 testimonial-title-section">
                        <span class="text-warning text-xl">Referans</span>
                        <h3 class="d-inline-block section-title text-white">
                            <span class="position-relative circle-shape testimonial-shape">Mü</span>şteri
                            <br class="hidden d-xl-inline-block" /> geribildirim
                        </h3>
                    </div>


                    <div class="swiper w-100">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <span class="d-inline-block qotation-icon">
                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21.75 13.5L21.75 30C21.7475 32.3862 20.7985 34.6739 19.1112 36.3612C17.4239 38.0485 15.1362 38.9975 12.75 39C12.3522 39 11.9706 38.842 11.6893 38.5607C11.408 38.2794 11.25 37.8978 11.25 37.5C11.25 37.1022 11.408 36.7206 11.6893 36.4393C11.9706 36.158 12.3522 36 12.75 36C14.3413 36 15.8674 35.3679 16.9926 34.2426C18.1179 33.1174 18.75 31.5913 18.75 30V28.5H7.5C6.70435 28.5 5.94129 28.1839 5.37868 27.6213C4.81607 27.0587 4.5 26.2956 4.5 25.5L4.5 13.5C4.5 12.7044 4.81607 11.9413 5.37868 11.3787C5.94129 10.8161 6.70435 10.5 7.5 10.5L18.75 10.5C19.5456 10.5 20.3087 10.8161 20.8713 11.3787C21.4339 11.9413 21.75 12.7044 21.75 13.5ZM40.5 10.5H29.25C28.4544 10.5 27.6913 10.8161 27.1287 11.3787C26.5661 11.9413 26.25 12.7044 26.25 13.5L26.25 25.5C26.25 26.2956 26.5661 27.0587 27.1287 27.6213C27.6913 28.1839 28.4544 28.5 29.25 28.5H40.5V30C40.5 31.5913 39.8679 33.1174 38.7426 34.2426C37.6174 35.3679 36.0913 36 34.5 36C34.1022 36 33.7206 36.158 33.4393 36.4393C33.158 36.7206 33 37.1022 33 37.5C33 37.8978 33.158 38.2794 33.4393 38.5607C33.7206 38.842 34.1022 39 34.5 39C36.8862 38.9975 39.1739 38.0485 40.8612 36.3612C42.5485 34.6739 43.4975 32.3862 43.5 30V13.5C43.5 12.7044 43.1839 11.9413 42.6213 11.3787C42.0587 10.8161 41.2957 10.5 40.5 10.5Z"
                                            fill="white" />
                                    </svg>

                                </span>
                                <p class="testimonial-texts fw-bold font-Syne">
                                    “Enerjik bir şekilde

                                    alternatif senaryolar oluşturun

                                    birimler arası uygulamalar aracılığıyla. Güvenilir bir şekilde
                                    bire bir stratejik tema alanlarından ve çevrimiçi ve fiziksel mağaza hizmetlerinden yararlanın.”</p>
                                <h4 class="d-flex flex-wrap align-items-center gap-4 text-white testimonial-qotation-name font-Syne">
                                    <span>
                                        <svg width="48" height="2" viewBox="0 0 48 2" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 1H48" stroke="#fff" />
                                        </svg>
                                    </span> Ayşe Yılmaz
                                </h4>
                            </div>
                            <div class="swiper-slide">
                                <span class="d-inline-block qotation-icon">
                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21.75 13.5L21.75 30C21.7475 32.3862 20.7985 34.6739 19.1112 36.3612C17.4239 38.0485 15.1362 38.9975 12.75 39C12.3522 39 11.9706 38.842 11.6893 38.5607C11.408 38.2794 11.25 37.8978 11.25 37.5C11.25 37.1022 11.408 36.7206 11.6893 36.4393C11.9706 36.158 12.3522 36 12.75 36C14.3413 36 15.8674 35.3679 16.9926 34.2426C18.1179 33.1174 18.75 31.5913 18.75 30V28.5H7.5C6.70435 28.5 5.94129 28.1839 5.37868 27.6213C4.81607 27.0587 4.5 26.2956 4.5 25.5L4.5 13.5C4.5 12.7044 4.81607 11.9413 5.37868 11.3787C5.94129 10.8161 6.70435 10.5 7.5 10.5L18.75 10.5C19.5456 10.5 20.3087 10.8161 20.8713 11.3787C21.4339 11.9413 21.75 12.7044 21.75 13.5ZM40.5 10.5H29.25C28.4544 10.5 27.6913 10.8161 27.1287 11.3787C26.5661 11.9413 26.25 12.7044 26.25 13.5L26.25 25.5C26.25 26.2956 26.5661 27.0587 27.1287 27.6213C27.6913 28.1839 28.4544 28.5 29.25 28.5H40.5V30C40.5 31.5913 39.8679 33.1174 38.7426 34.2426C37.6174 35.3679 36.0913 36 34.5 36C34.1022 36 33.7206 36.158 33.4393 36.4393C33.158 36.7206 33 37.1022 33 37.5C33 37.8978 33.158 38.2794 33.4393 38.5607C33.7206 38.842 34.1022 39 34.5 39C36.8862 38.9975 39.1739 38.0485 40.8612 36.3612C42.5485 34.6739 43.4975 32.3862 43.5 30V13.5C43.5 12.7044 43.1839 11.9413 42.6213 11.3787C42.0587 10.8161 41.2957 10.5 40.5 10.5Z"
                                            fill="white" />
                                    </svg>
                                </span>
                                <p class="testimonial-texts fw-bold font-Syne">
                                    “Enerjik bir şekildeoluşturun

                                    “Çapraz birim oluşturma yoluyla alternatif senaryoları enerjik bir şekilde oluşturun

                                    farklı vortallar için verimli
                                    girişimler. Uyarlanabilir bir şekilde sinerjik stratejiler geliştirin“
                                </p>
                                <h4 class="d-flex flex-wrap align-items-center gap-4 text-white testimonial-qotation-name font-Syne">
                                    <span>
                                        <svg width="48" height="2" viewBox="0 0 48 2" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 1H48" stroke="#fff" />
                                        </svg>
                                    </span> Ali Veli
                                </h4>
                            </div>
                            <div class="swiper-slide">
                                <span class="d-inline-block qotation-icon">
                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21.75 13.5L21.75 30C21.7475 32.3862 20.7985 34.6739 19.1112 36.3612C17.4239 38.0485 15.1362 38.9975 12.75 39C12.3522 39 11.9706 38.842 11.6893 38.5607C11.408 38.2794 11.25 37.8978 11.25 37.5C11.25 37.1022 11.408 36.7206 11.6893 36.4393C11.9706 36.158 12.3522 36 12.75 36C14.3413 36 15.8674 35.3679 16.9926 34.2426C18.1179 33.1174 18.75 31.5913 18.75 30V28.5H7.5C6.70435 28.5 5.94129 28.1839 5.37868 27.6213C4.81607 27.0587 4.5 26.2956 4.5 25.5L4.5 13.5C4.5 12.7044 4.81607 11.9413 5.37868 11.3787C5.94129 10.8161 6.70435 10.5 7.5 10.5L18.75 10.5C19.5456 10.5 20.3087 10.8161 20.8713 11.3787C21.4339 11.9413 21.75 12.7044 21.75 13.5ZM40.5 10.5H29.25C28.4544 10.5 27.6913 10.8161 27.1287 11.3787C26.5661 11.9413 26.25 12.7044 26.25 13.5L26.25 25.5C26.25 26.2956 26.5661 27.0587 27.1287 27.6213C27.6913 28.1839 28.4544 28.5 29.25 28.5H40.5V30C40.5 31.5913 39.8679 33.1174 38.7426 34.2426C37.6174 35.3679 36.0913 36 34.5 36C34.1022 36 33.7206 36.158 33.4393 36.4393C33.158 36.7206 33 37.1022 33 37.5C33 37.8978 33.158 38.2794 33.4393 38.5607C33.7206 38.842 34.1022 39 34.5 39C36.8862 38.9975 39.1739 38.0485 40.8612 36.3612C42.5485 34.6739 43.4975 32.3862 43.5 30V13.5C43.5 12.7044 43.1839 11.9413 42.6213 11.3787C42.0587 10.8161 41.2957 10.5 40.5 10.5Z"
                                            fill="white" />
                                    </svg>
                                    <p class="testimonial-texts fw-bold font-Syne">
                                        “Energistically
                                        build
                                        “Aliquam vehicula nunc facilisis tincidunt feugiat. Pellentesque sed viverra
                                        nisi. Fusce
                                        et
                                        laoreet augue. Quisque pretium, ligula lectus semper urna. Aliquam vehicula.”

                                    </p>
                                    <h4
                                        class="d-flex flex-wrap align-items-center gap-4 text-white testimonial-qotation-name font-Syne">
                                        <span><svg width="48" height="2" viewBox="0 0 48 2" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 1H48" stroke="#fff" />
                                            </svg>
                                        </span> Jhon Smith
                                </h4>
                            </div>
                            <div class="swiper-slide">
                                <span class="d-inline-block qotation-icon">
                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21.75 13.5L21.75 30C21.7475 32.3862 20.7985 34.6739 19.1112 36.3612C17.4239 38.0485 15.1362 38.9975 12.75 39C12.3522 39 11.9706 38.842 11.6893 38.5607C11.408 38.2794 11.25 37.8978 11.25 37.5C11.25 37.1022 11.408 36.7206 11.6893 36.4393C11.9706 36.158 12.3522 36 12.75 36C14.3413 36 15.8674 35.3679 16.9926 34.2426C18.1179 33.1174 18.75 31.5913 18.75 30V28.5H7.5C6.70435 28.5 5.94129 28.1839 5.37868 27.6213C4.81607 27.0587 4.5 26.2956 4.5 25.5L4.5 13.5C4.5 12.7044 4.81607 11.9413 5.37868 11.3787C5.94129 10.8161 6.70435 10.5 7.5 10.5L18.75 10.5C19.5456 10.5 20.3087 10.8161 20.8713 11.3787C21.4339 11.9413 21.75 12.7044 21.75 13.5ZM40.5 10.5H29.25C28.4544 10.5 27.6913 10.8161 27.1287 11.3787C26.5661 11.9413 26.25 12.7044 26.25 13.5L26.25 25.5C26.25 26.2956 26.5661 27.0587 27.1287 27.6213C27.6913 28.1839 28.4544 28.5 29.25 28.5H40.5V30C40.5 31.5913 39.8679 33.1174 38.7426 34.2426C37.6174 35.3679 36.0913 36 34.5 36C34.1022 36 33.7206 36.158 33.4393 36.4393C33.158 36.7206 33 37.1022 33 37.5C33 37.8978 33.158 38.2794 33.4393 38.5607C33.7206 38.842 34.1022 39 34.5 39C36.8862 38.9975 39.1739 38.0485 40.8612 36.3612C42.5485 34.6739 43.4975 32.3862 43.5 30V13.5C43.5 12.7044 43.1839 11.9413 42.6213 11.3787C42.0587 10.8161 41.2957 10.5 40.5 10.5Z"
                                            fill="white" />
                                    </svg>
                                </span>
                                <p class="testimonial-texts fw-bold font-Syne">
                                    “Energistically
                                    build
                                    “Aliquam vehicula nunc facilisis tincidunt feugiat. Pellentesque sed viverra
                                    nisi. Fusce
                                    et
                                    laoreet augue. Quisque pretium, ligula lectus semper urna. Aliquam vehicula.”

                                </p>
                                <h4 class="d-flex flex-wrap align-items-center gap-4 text-white testimonial-qotation-name font-Syne">
                                    <span><svg width="48" height="2" viewBox="0 0 48 2" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 1H48" stroke="#fff" />
                                        </svg>
                                    </span> Jhon Smith
                                </h4>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <!-- Testimonial section End -->

        <!-- Brand Section Start-->

        <div class="bg-dark brandCarousel" data-aos="flip-down" data-aos-delay="600">
            <div class="container">
                <div class="swiper brand-carousel">

                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="mx-auto d-block" src="assets/images/brand/logo-white1.png" alt=" brandlogo">
                        </div>
                        <div class="swiper-slide">
                            <img class="mx-auto d-block" src="assets/images/brand/logo-white2.png" alt=" brandlogo">
                        </div>
                        <div class="swiper-slide">
                            <img class="mx-auto d-block" src="assets/images/brand/logo-white3.png" alt=" brandlogo">
                        </div>
                        <div class="swiper-slide">
                            <img class="mx-auto d-block" src="assets/images/brand/logo-white4.png" alt=" brandlogo">
                        </div>
                        <div class="swiper-slide">
                            <img class="mx-auto d-block" src="assets/images/brand/logo-white5.png" alt=" brandlogo">
                        </div>
                        <div class="swiper-slide">
                            <img class="mx-auto d-block" src="assets/images/brand/logo-white6.png" alt=" brandlogo">
                        </div>
                        <div class="swiper-slide">
                            <img class="mx-auto d-block" src="assets/images/brand/logo-white3.png" alt=" brandlogo">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Brand Section End-->

        <!-- Footer Start -->
        <footer class="footer bg-black">
            <div class="container">
                <div class="overflow-x-hidden" data-aos="flip-down" data-aos-delay="500">
                    <div class="footer-grid">
                        <div class="pt-12">
                            <h3 class="section-title text-white mb-0"><span class="position-relative circle-shape footer-shape">Bi</span>
                                rlikte Çalışalım</h3>
                            <div class="d-flex flex-wrap align-items-center mt-10">
                                <span class="text-xl fw-bold font-Syne text-white"><?php echo $cikti['ulke']; ?> |</span>
                                <div class="footer-social">
                                    <ul class="d-flex flex-wrap gap-x-4 align-items-center list-unstyled p-0 footer-social-links">
                                        <li><a href="#" class="text-white footer-social-link">
                                                

                                            </a></li>
                                        <li><a href="https://www.linkedin.com/in/yazel-y%C3%BCce-a99615211/" class="text-white footer-social-link"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.94043 5.00002C6.94017 5.53046 6.7292 6.03906 6.35394 6.41394C5.97868 6.78883 5.46986 6.99929 4.93943 6.99902C4.409 6.99876 3.90039 6.78779 3.52551 6.41253C3.15062 6.03727 2.94016 5.52846 2.94043 4.99802C2.9407 4.46759 3.15166 3.95899 3.52692 3.5841C3.90218 3.20922 4.411 2.99876 4.94143 2.99902C5.47186 2.99929 5.98047 3.21026 6.35535 3.58552C6.73024 3.96078 6.9407 4.46959 6.94043 5.00002ZM7.00043 8.48002H3.00043V21H7.00043V8.48002ZM13.3204 8.48002H9.34043V21H13.2804V14.43C13.2804 10.77 18.0504 10.43 18.0504 14.43V21H22.0004V13.07C22.0004 6.90002 14.9404 7.13002 13.2804 10.16L13.3204 8.48002Z" fill="currentColor" fill-opacity="0.9"></path>
                                                </svg>
                                            </a></li>
                                        <li><a href="#" class="text-white footer-social-link"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M19.989 11.572C19.907 9.99792 19.3596 8.4836 18.416 7.221C18.1285 7.53061 17.8212 7.82123 17.496 8.091C16.4969 8.92086 15.3805 9.5982 14.183 10.101C14.35 10.451 14.503 10.79 14.638 11.11V11.113C14.665 11.174 14.688 11.231 14.732 11.342L14.749 11.382C16.262 11.212 17.858 11.275 19.405 11.485C19.611 11.512 19.805 11.541 19.989 11.572ZM10.604 4.122C11.5786 5.49516 12.4772 6.92062 13.296 8.392C14.519 7.91 15.53 7.302 16.344 6.625C16.674 6.351 16.938 6.093 17.14 5.87C15.701 4.65972 13.8803 3.99733 12 4C11.524 4 11.058 4.042 10.604 4.121V4.122ZM4.253 9.997C4.93423 9.97981 5.61464 9.93878 6.293 9.874C7.93264 9.72734 9.55828 9.4525 11.155 9.052C10.3205 7.60221 9.41956 6.19171 8.455 4.825C7.42472 5.3354 6.51626 6.06141 5.79124 6.95379C5.06623 7.84617 4.54162 8.88404 4.253 9.997ZM5.783 17.035C6.25195 16.3575 6.77894 15.7221 7.358 15.136C8.812 13.646 10.528 12.486 12.514 11.846L12.576 11.828C12.411 11.464 12.256 11.139 12.1 10.833C10.264 11.368 8.33 11.702 6.403 11.875C5.463 11.96 4.62 11.997 4 12.003C3.99815 13.8356 4.62722 15.6128 5.783 17.035ZM15.004 19.415C14.6184 17.4703 14.0725 15.5607 13.372 13.706C11.372 14.433 9.776 15.496 8.543 16.764C8.0454 17.2664 7.60382 17.8213 7.226 18.419C8.60481 19.4478 10.2797 20.0025 12 20C13.0299 20.0015 14.0504 19.8035 15.005 19.417L15.004 19.415ZM16.878 18.34C18.4393 17.1398 19.5028 15.4057 19.865 13.47C19.525 13.385 19.094 13.3 18.62 13.234C17.5661 13.0823 16.4968 13.0712 15.44 13.201C16.035 14.8799 16.5154 16.5961 16.878 18.34ZM12 22C6.477 22 2 17.523 2 12C2 6.477 6.477 2 12 2C17.523 2 22 6.477 22 12C22 17.523 17.523 22 12 22Z" fill="currentColor" fill-opacity="0.9"></path>
                                                </svg>
                                            </a></li>
                                        <li><a href="https://github.com/yazelyuce" class="text-white footer-social-link"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.001 2C6.47598 2 2.00098 6.475 2.00098 12C1.99977 14.0992 2.65958 16.1454 3.88679 17.8484C5.114 19.5515 6.84631 20.8249 8.83798 21.488C9.33798 21.575 9.52598 21.275 9.52598 21.012C9.52598 20.775 9.51298 19.988 9.51298 19.15C7.00098 19.613 6.35098 18.538 6.15098 17.975C6.03798 17.687 5.55098 16.8 5.12598 16.562C4.77598 16.375 4.27598 15.912 5.11298 15.9C5.90098 15.887 6.46298 16.625 6.65098 16.925C7.55098 18.437 8.98798 18.012 9.56298 17.75C9.65098 17.1 9.91298 16.663 10.201 16.413C7.97598 16.163 5.65098 15.3 5.65098 11.475C5.65098 10.387 6.03798 9.488 6.67598 8.788C6.57598 8.538 6.22598 7.513 6.77598 6.138C6.77598 6.138 7.61298 5.875 9.52598 7.162C10.3401 6.9364 11.1812 6.82302 12.026 6.825C12.876 6.825 13.726 6.937 14.526 7.162C16.439 5.862 17.276 6.138 17.276 6.138C17.826 7.513 17.476 8.538 17.376 8.788C18.013 9.488 18.401 10.375 18.401 11.475C18.401 15.313 16.064 16.163 13.839 16.413C14.201 16.725 14.514 17.325 14.514 18.263C14.514 19.6 14.501 20.675 14.501 21.013C14.501 21.275 14.689 21.587 15.189 21.487C17.1738 20.8166 18.8985 19.5408 20.1203 17.8389C21.3421 16.1371 21.9995 14.095 22 12C22 6.475 17.525 2 12 2H12.001Z" fill="currentColor" fill-opacity="0.9"></path>
                                                </svg>
                                            </a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="d-flex flex-column justify-content-between service-contact-card-footer">
                            <h3 class="text-xl fw-bold font-Syne text-white">Yoğun tempolu bir tasarımcı mı arıyorsunuz?</h3>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="text-2xl fw-bold font-Syne leading-none text-warning"><?php echo $cikti['email']; ?></p>
                                <a href="#" class="text-white animate-arrow-up">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.6667 28.3334L28.3334 11.6667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M11.6667 11.6667H28.3334V28.3334" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                </a>
                            </div>
                        </div>

                        <div class="d-flex flex-column justify-content-between service-contact-card-footer">
                            <h3 class="text-xl fw-bold font-Syne text-white">Geçmişim hakkında daha detaylı bilgi edinmek ister misiniz?</h3>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="text-2xl fw-bold font-Syne leading-none text-warning"><?php echo $cikti['telefon']; ?></p>
                                <a href="#" class="text-white animate-arrow-up">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.6667 28.3334L28.3334 11.6667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M11.6667 11.6667H28.3334V28.3334" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="py-72">
                                
                            </div>
                        </div>

                    </div>


                    <div class="pt-6 copyright">
                        <div class="row">

                            <div class="col-12 col-sm-8 order-last order-sm-first">
                                <p class="text-white text-lg fw-normal font-sans leading-7">©2026 <?php echo $cikti['ad']; ?> <?php echo $cikti['soyad']; ?>, Her Hakkı Saklıdır
                                </p>
                            </div>
                            <div class="col-12 col-sm-4 order-first order-sm-last">
                                <div class="d-flex justify-content-end mb-2 mb-sm-0">
                                    <a id="scrollUp" class="d-flex flex-wrap align-items-center gap-2" href="#" aria-label="scroll up">
                                        <span class="text-white text-lg fw-normal font-sans leading-7 transition-all">
                            Sayfanın Başına Dön</span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 19V5" stroke="#FFB646" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M19 12L12 5L5 12" stroke="#FFB646" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </footer>
        <!-- Footer End -->
    </div>



    <!-- JS Vendor, Plugins & Activation Script Files -->

    <!-- Vendors JS -->
    <script src="assets/js/vendor/modernizr-3.11.7.min.js"></script>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- Plugins JS -->
    <script src="assets/js/plugins/aos.js">
    </script>
    <script src="assets/js/plugins/swiper-bundle.min.js">
    </script>
    <script src="assets/js/plugins/jquery.magnific-popup.min.js">
    </script>

    <!-- Activation JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>