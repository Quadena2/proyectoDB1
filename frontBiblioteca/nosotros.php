<?php 
  require 'includes/funciones.php';

  incluirTemplate('header');
?>
  <main class="main">

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center gy-4">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="about-content">
              <h3>Our Culinary Journey</h3>
              <p class="fst-italic">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.</p>
              <p>Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risustristique pos uere. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>

              <div class="chef-signature mt-4">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <img src="assets/img/restaurant/chef-1.webp" class="chef-avatar rounded-circle" alt="Chef Portrait">
                  </div>
                  <div class="col">
                    <p class="chef-message mb-2">"Cooking is a language through which all the following properties may be expressed: harmony, creativity, happiness, beauty, poetry, complexity, magic, humor, provocation and culture."</p>
                    <p class="chef-name">Executive Chef</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="about-image-wrapper">
              <img src="assets/img/restaurant/showcase-4.webp" class="img-fluid main-image shadow" alt="Restaurant Interior">
              <img src="assets/img/restaurant/showcase-2.webp" class="img-fluid accent-image shadow" alt="Chef Preparing Food">
              <span class="establishment-year d-flex align-items-center justify-content-center text-center">Est. 2005</span>
            </div>
          </div>
        </div>

        <div class="row mt-5 pt-4 features-section">
          <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="feature-box">
              <div class="feature-icon">
                <i class="bi bi-award"></i>
              </div>
              <h4>Award Winning</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
            <div class="feature-box">
              <div class="feature-icon">
                <i class="bi bi-egg-fried"></i>
              </div>
              <h4>Fresh Ingredients</h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
            <div class="feature-box">
              <div class="feature-icon">
                <i class="bi bi-people"></i>
              </div>
              <h4>Expert Team</h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
            <div class="feature-box">
              <div class="feature-icon">
                <i class="bi bi-heart"></i>
              </div>
              <h4>Cooked with Love</h4>
              <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
            </div>
          </div>
        </div>

        <div class="row mt-3">
          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">
            <div class="stats-container">
              <div class="stat-item">
                <span class="stat-number"><span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="0" class="purecounter">15</span>+</span>
                <p class="stat-label">Years Experience</p>
              </div>

              <div class="stat-item">
                <span class="stat-number"><span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="0" class="purecounter">5</span></span>
                <p class="stat-label">Expert Chefs</p>
              </div>

              <div class="stat-item">
                <span class="stat-number"><span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="0" class="purecounter">3</span></span>
                <p class="stat-label">Culinary Awards</p>
              </div>

              <div class="stat-item">
                <span class="stat-number"><span data-purecounter-start="0" data-purecounter-end="15000" data-purecounter-duration="0" class="purecounter">15000</span>+</span>
                <p class="stat-label">Happy Customers</p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    
    <!-- Location Section -->
    <section id="location" class="location section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Location</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <div class="map-container">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.684949335945!2d-73.98658242357565!3d40.75853057126168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDQ1JzMwLjciTiA3M8KwNTknMDcuNyJX!5e0!3m2!1sen!2sus!4v1654321234567!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
            <div class="info-container">
              <div class="section-header">
                <h2>Find Us</h2>
                <p>Visit Us Today</p>
              </div>

              <div class="info-card" data-aos="fade-up" data-aos-delay="300">
                <div class="info-icon">
                  <i class="bi bi-geo-alt"></i>
                </div>
                <div class="info-content">
                  <h3>Our Location</h3>
                  <p>123 Culinary Avenue, Manhattan, NY 10001</p>
                </div>
              </div>

              <div class="info-card" data-aos="fade-up" data-aos-delay="400">
                <div class="info-icon">
                  <i class="bi bi-telephone"></i>
                </div>
                <div class="info-content">
                  <h3>Reservations</h3>
                  <p>+1 (212) 555-7890</p>
                  <p class="small-text">We recommend making reservations at least 48 hours in advance</p>
                </div>
              </div>

              <div class="info-card" data-aos="fade-up" data-aos-delay="500">
                <div class="info-icon">
                  <i class="bi bi-clock"></i>
                </div>
                <div class="info-content">
                  <h3>Hours</h3>
                  <div class="hours-grid">
                    <div class="day">Monday - Thursday</div>
                    <div class="time">11:00 AM - 10:00 PM</div>

                    <div class="day">Friday - Saturday</div>
                    <div class="time">11:00 AM - 11:30 PM</div>

                    <div class="day">Sunday</div>
                    <div class="time">10:00 AM - 9:00 PM</div>

                    <div class="day">Brunch Hours</div>
                    <div class="time">Sat &amp; Sun, 10:00 AM - 2:00 PM</div>
                  </div>
                </div>
              </div>

              <div class="cta-wrapper" data-aos="fade-up" data-aos-delay="600">
                <a href="#" class="btn-book">Make a Reservation</a>
                <a href="#" class="btn-contact">Contact Us</a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Location Section -->



    
<?php 
incluirTemplate('footer');
?>