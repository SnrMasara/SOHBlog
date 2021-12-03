<!DOCTYPE html>
<html lang="en">
<head>
@yield('header')
</head>
<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:info@seedsofhopeke.org">info@seedsofhopeke.org</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+254 731 964 556</span></i>
      </div>

      <div class="cta d-none d-md-flex align-items-center">
        <a href="/blog">Our Blog</a>
      </div>
    </div>
  </section>

  <!-- ======= NavBar ======= -->
@yield('navbar')
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container" data-aos="fade-in">
      <h1>Seeds Of Hope Kenya</h1>
      <h2>Safeguarding the future by ensuring equal rights and opportunities for girls and women.</h2>
      <div class="d-flex align-items-center">
        <i class="bx bxs-right-arrow-alt get-started-icon"></i>
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
      </div>
    </div>
  </section>
<!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-xl-4 col-lg-5" data-aos="fade-up">
            <div class="content">
              <h3>Our Mission</h3>
              <p>
                Our Mission as seeds of hope Kenya is to work with women in all our diversity to realize their potential and
                rights in a bid to achieve sustainable development.
              </p>
              <div class="text-center">
                <a href="#about" class="more-btn">Learn More<i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-xl-8 col-lg-7 d-flex">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-analyse"></i>
                    <h4> Adolescent Girls and Young Women (AGYWs)</h4>
                    <p>Adolescent and young girls are often left out without a voice or control of their own bodies.
                        They face issues of gender based violence and have limited access to healthcare and education.
                        Seeds of hope Kenya works with them at the grassroots to brigde this gap.</p>
                  </div>
                </div>
                <div class="col-xl-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-certification"></i>
                    <h4>Sexual and Reproductive Health and Rights (SRHR)</h4>
                    <p>Women have the right to decide freely and responsibly on matters related to sexuality.
                        They must be informed and empowered to protect themselves from STIs,
                        decide how many children to have and when, and also be self-aware on Menstrual hygiene matters.
                        Seeds of hope Kenya works hand in hand with not only the local authorities but also other stakeholders
                        to ensure that women are well informaed and also empowered.
                    </p>
                  </div>
                </div>
                <div class="col-xl-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-arch"></i>
                    <h4>Sexual and Gender Based Violence</h4>
                    <p>Violence against women and girls is a human rights violation. Physical, mental or sexual,
                        women deserve dignity.
                        Therefore, seeds of hope Kenya works with other stakeholders to ensure justice and equality for all.</p>
                  </div>
                </div>
                <div class="col-xl-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box mt-4 mt-xl-0">
                      <i class="bx bx-shield"></i>
                      <h4>Women in Leadership</h4>
                      <p>Seeds of hope Kenya encourages and supports women so that they can actively participate in leadership and decision making
                          processes at all levels in the society.  </p>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative" data-aos="fade-right">
            <a href="https://www.youtube.com/watch?v=9bLochbhV-M" class="glightbox play-btn mb-4"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h2 data-aos="fade-up">About us</h2>
            <p data-aos="fade-up">Seeds of hope Kenya is an organization with a key focus of empowering the vulnerable women,
                 youth and girls in our communities at the grassroots with a vision of eradicating poverty and
                  ensuring sustainable development.
            </p>

            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="bi bi-lightbulb-fill"></i></div>
              <h4 class="title"><a href="">Our Vision</a></h4>
              <p class="description">Safeguarding the future by ensuring equal rights and opportunities for girls and women.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-puzzle"></i></div>
              <h4 class="title"><a href="">Our Mission</a></h4>
              <p class="description">To work with women in all our diversity to realize their potential and rights in a bid to achieve sustainable development</p>
            </div>

            {{-- <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-anchor"></i></div>
              <h4 class="title"><a href="">Dine Pad</a></h4>
              <p class="description">Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p>
            </div> --}}

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    {{-- <section id="clients" class="clients">
      <div class="container" data-aos="fade-up">

        <div class="clients-slider swiper-container">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>
    <!-- End Clients Section --> --}}

    <!-- ======= Programmes Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Our Programmes</h2>
          <p> At seeds of hope Kenya, we ensure that Women and girls lead a violent-free life.
              Those at the grassroots with limited livelihoods get to be economically empowered and benefit from development.
              We ensure that adolescent girls get proper menstrual hygiene support.
              We also participate in ensuring that women get to leadership levels and participate in decision making Processes.
          </p>
        </div>

        <div class="row" >
        <div class="col-md-6 col-md-4 d-flex flex-column justify-content-center" data-aos="fade-up">
            <div class="icon-box mt-4 mt-xl-0">
              <div class="icon"><i class="bi bi-vr"></i></div>
              <h4 class="title"><a href="" id="programes1">Gender based Violence</a></h4>
              <p class="description">Seeds of hope Kenya supports community based dialogues aimed at changing social and cultural perceptions,
                  attitudes and traditional practices like Female Genital Mutilation (FGM) and early marriages, that contribute to Violence Against Women and Girls.
                  We support trainings for law enforcement staff on gender rights, case management and handling of victims, and also advocate for removing barriers to access justice.
            </p>
            </div>
          </div>

          <div class=" col-sm-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box ">
              <div class="icon"><i class="bi bi-window"></i></div>
              <h4 class="title"><a href="" id="programes2">Women Economic Empowernment</a></h4>
              <p class="description">Seeds of hope Kenya nurtures women’s participation in the economy through advocacy to leverage resources, particularly through agriculture and SMEs.
                  The aim is to make women key players in wealth creation. On the other hand, seeds of hope Kenya actively capacity build women on issues of land rights and property ownership.
            </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class=" col-sm-6  d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="" id="programes3">Adolescent Girls and Menstrual Hygiene</a></h4>
              <p class="description">Seeds of hope Kenya runs a pad drive that ensures young and adolescent girls in rural areas get sanitary towel frequently.
             We also ensure that they are given knowledge on issues of menstrual hygiene, body anatomy changes and what it means to them.</p>
            </div>
          </div>
          <div class=" col-sm-6  d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-tag"></i></div>
              <h4 class="title"><a href="" id="programes4">Women Leadership and Participation in Decision Making Processes</a></h4>
              <p class="description"> Seeds of hope Kenya supports groups of women leaders across the political divide to lobby and identify effective strategies for protecting women’s social, economic and political rights.
                  We work with other stakeholders to domesticate the convention to eliminate all forms of discrimination against women.</p>
            </div>
          </div>
          {{-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-binoculars"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-brightness-high"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-calendar4-week"></i></div>
              <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
              <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>
          </div> --}}
        </div>

      </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Values Section ======= -->
    {{-- <section id="values" class="values">
      <div class="container">

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card" style="background-image: url(assets/img/values-1.jpg);">
              <div class="card-body">
                <h5 class="card-title"><a href="">Our Mission</a></h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="100">
            <div class="card" style="background-image: url(assets/img/values-2.jpg);">
              <div class="card-body">
                <h5 class="card-title"><a href="">Our Plan</a></h5>
                <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem.</p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>

          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card" style="background-image: url(assets/img/values-3.jpg);">
              <div class="card-body">
                <h5 class="card-title"><a href="">Our Vision</a></h5>
                <p class="card-text">Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores.</p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card" style="background-image: url(assets/img/values-4.jpg);">
              <div class="card-body">
                <h5 class="card-title"><a href="">Our Care</a></h5>
                <p class="card-text">Nostrum eum sed et autem dolorum perspiciatis. Magni porro quisquam laudantium voluptatem.</p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- End Values Section --> --}}

    <!-- ======= Testimonials Section ======= -->
     <section id="testimonials" class="testimonials">
      <div class="container position-relative" data-aos="fade-up">
        <div class="container" id="counter">
            <div class="row">
                <h1 class="text-white text-center ">Success Stories</h1>

                <div class="four col-md-4">
                    <div class="counter-box colored"> <i class="bi bi-people-fill"></i> <span class="counter" data-count="1500"></span>
                        <p>Women who have Benefited from us</p>
                    </div>
                </div>

                <div class="four col-md-4">
                    <div class="counter-box"> <i class="bi bi-person"></i> <span class="counter" data-count="2500"></span>
                        <p>Teenage and Adolescent Girls who have benefited from us</p>
                    </div>
                </div>
                <div class="four col-md-4">
                    <div class="counter-box red"> <i class="bi bi-people-fill"></i> <span class="counter" data-count="200"></span>
                        <p>Women living with disability who have benefited from us</p>
                    </div>
                </div>

            </div>
        </div>
          </div>
    </section>


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-up">Portfolio</h2>
          <p data-aos="fade-up">This portfolio section includes photos and videos of some of our past tasks</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-awareness">Awareness</li>
              <li data-filter=".filter-demo">Advocacy</li>
              <li data-filter=".filter-donations">Donations</li>
              <li data-filter=".filter-empowernment">Empowernment</li>
              <li data-filter=".filter-led">Leadership</li>
              <li data-filter=".filter-lad">Legal Aid Clinic</li>
              <li data-filter=".filter-staff">Staff</li>
              <li data-filter=".filter-clip">videos</li>
              <li data-filter=".filter-other">Others</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-empowernment">
            <img src="/public/img/portfolio/portfolio-1.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Empowerment</h4>
              <p>Teenage mothers listening to words of wisdom,hope and restoration from one of our team members</p>
              <a href="/public/img/portfolio/portfolio-1.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Teenage mothers listening to words of wisdom,hope and restoration from one of our team members"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-donations">
            <img src="/public/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Donations</h4>
              <p>Girls at the grassroots lining up to receive sanitary towels</p>
              <a href="/public/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Girls at the grassroots lining up to receive sanitary towels"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-awareness">
            <img src="/public/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Awareness</h4>
              <p>Cecilia,a GBV survivor, who is part of our team members, addressing women faced with similar issues.</p>
              <a href="/public/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-awareness">
            <img src="/public/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Awareness</h4>
              <p>Boys and men need to always be involved in issues affecting girls and women. They are stakeholders of these issues. Like this,better impact is progressively realised in our societies</p>
              <a href="/public/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Boys and men need to always be involved in issues affecting girls and women. They are stakeholders of these issues. Like this,better impact is progressively realised in our societies"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-staff">
            <img src="/public/img/portfolio/portfolio-5.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Staff</h4>
              <p>Part of our staff members,ready for the day's activities. They are all motivated by the passion to see positive change at the grassroots.</p>
              <a href="/public/img/portfolio/portfolio-5.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Part of our staff members,ready for the day's activities. They are all motivated by the passion to see positive change at the grassroots."><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-demo">
            <img src="/public/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Advocacy</h4>
              <p>SOH speaking out on behalf of a four year old girl raped by the father.</p>
              <a href="/public/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="The girl was rescued and put into a shelter.The culprit was apprehended and charged before the courts of law."><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-awareness">
            <img src="/public/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Awareness</h4>
              <p>#WAD2021 #StreetfamilyEdition
                We reached out to 120 females who live in the street. We shared with them basic needs and also provided for those that have young babies.</p>
              <a href="/public/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="#WAD2021 #StreetfamilyEdition
              We reached out to 120 females who live in the street. We shared with them basic needs and also provided for those that have young babies."><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-lad">
            <img src="/public/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Legal Aid Clinic</h4>
              <p>Legal aid clinic for issues affecting women</p>
              <a href="/public/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Legal aid clinic for issues affecting women"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-lad">
            <img src="/public/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Legal Aid Clinic</h4>
              <p>Our team helping to lift an elderly woman to a legal aid clinic. The woman, a widow, was rescued from being burnt for issues of landownership.</p>
              <a href="/public/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Our team helping to lift an elderly woman to a legal aid clinic. The woman, a widow, was rescued from being burnt for issues of landownership."><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-led">
            <img src="/public/img/portfolio/portfolio-10.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Leadership</h4>
              <p>No one gives the formula of leadership. Consultations and team work are  sure ways to this. Women need to actively engage in political processes.In collaboration with other well able institutions, we commit to supporting women into leadership. We are engaging in dialogue and capacity building for women with such ambitions.</p>
              <a href="/public/img/portfolio/portfolio-10.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="No one gives the formula of leadership. Consultations and team work are  sure ways to this. Women need to actively engage in political processes.In collaboration with other well able institutions, we commit to supporting women into leadership. We are engaging  in dialogue and capacity building for women with such ambitions."><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-clip">
            <img src="/public/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Videos</h4>
              <p>Protests and demonstrations after defilement of a four year old girl in Kisii county.</p>
              <a href="https://www.youtube.com/watch?v=u2eFWhdIDNc" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Protests and demonstrations after defilement of a four year old girl in Kisii county."><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-clip">
            <img src="/public/img/portfolio/portfolio-cl.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Videos</h4>
              <p>Protests on killing of the elderly in Kisii county.</p>
              <a href="https://www.youtube.com/watch?v=TKjBqJ2UJsg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Protests against killing of the elderly in Kisii county"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-empowernment">
            <img src="/public/img/portfolio/p1.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Empowerment</h4>
              <p>Football for change. Creating safe spaces</p>
              <a href="/public/img/p1.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link">
                <i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-empowernment">
            <img src="/public/img/portfolio/p2.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Empowerment</h4>
              <p>#GirlsCan</p>
              <a href="/public/img/p2.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link">
                <i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-empowernment">
            <img src="/public/img/portfolio/p3.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Empowerment</h4>
              <p>#WomenForWomen</p>
              <a href="/public/img/p3.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link">
                <i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-empowernment">
            <img src="/public/img/portfolio/p4.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Empowerment</h4>
              <p>#WomenForWomen</p>
              <a href="/public/img/p4.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link">
                <i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-awareness">
            <img src="/public/img/portfolio/p5.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Awareness</h4>

              <a href="/public/img/p5.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link">
                <i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-other">
            <img src="/public/img/portfolio/p6.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Our Office</h4>

              <a href="/public/img/p6.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link">
                <i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>






        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Donate Section ======= -->
     <section id="team" class="team section-bg">
      <div class="container">
        <div class="section-title">
          <h2 data-aos="fade-up">Donate</h2>
          <p data-aos="fade-up">Take action:<br>
            Help protect the most vulnerable women and girls at the grassroots in Kenya. <br>
            In a country where more capacity building and support in all forms needs to be given to girls and women, you need to be part of this noble cause.</p>
            <p data-aos="fade-up">...for the <i>'pad a girl' initiative</i>, that ensures a girl in a village has access to sanitary towels,</p>
            <p data-aos="fade-up">...for the legal aid,and legal aid clinics that support women and girls who have undergone Gender Based Violence,</p>
            <p data-aos="fade-up">...for input  to economic empowerment for women,</p>
            <p data-aos="fade-up">..for supporting and capacity building women to actively participate in leadership and decisions making processes.</p>

            <p data-aos="fade-up"> Donate today to help put a smile on someone.</p> <br> <br>
            <div data-aos="fade-up" data-aos-delay="200">
                <h3>To Donate, Call this number</h3>
                <p>+254 731 964 556</p>
              </div>
            </div>
        </div>

        <div class="row">

         {{-- <center>
            <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up">
                <div class="member">
                  <div class="member-img">
                    <img src="/public/img/team/team-1.jpg" class="img-fluid" alt="">
                    <div class="social">
                      <a href="https://mobile.twitter.com/SeedsOfHopeKE"><i class="bi bi-twitter"></i></a>
                      <a href="https://www.facebook.com/SeedsOfHopeKE/"><i class="bi bi-facebook"></i></a>
                      <a href="https://www.instagram.com/seedsofhopeke/"><i class="bi bi-instagram"></i></a>
                      <a href="https://www.youtube.com/channel/UCoOYIT0v-36G7tu2o7B6G1g/featured"><i class="bi bi-youtube"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>Paybill Number: 400200 </h4>
                    <span>Account Number: 1279761084</span>
                    <span>Account Name: SEEDS OF HOPE CBO</span>
                  </div>
                </div>
              </div>

         </center> --}}


        </div>

      </div>
    </section>
    <!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-up">Contact</h2>
          <p data-aos="fade-up">Reach out Seeds of hope Kenya Today </p>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>info@seedsofhopeke.org<br>theseedsofhopekenya@gmail.com</p>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+254 731 964 556</p>
            </div>
          </div>
        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
          <div class="col-xl-9 col-lg-12 mt-4">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
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
  @yield('footer');
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('/js/main.js') }}"></script>

</body>

</html>
