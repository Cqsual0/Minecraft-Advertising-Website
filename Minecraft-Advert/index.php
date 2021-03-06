<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--  <title>Responsive Sticky Navbar | CodingNepal</title> -->
  <link rel="stylesheet" href="css/index.css">
  <script src="https://kit.fontawesome.com/6ee8fbe20c.js" crossorigin="anonymous"></script>
  <script src="https://js.stripe.com/v3/"></script>
</head>

<body>

  <?php include 'addon/header.php'; ?>

  <!-- Header -->

  <header id="header" class="parallax">
    <div class="header-content">
      <h1>Minecraft Server <span>Advertising</span></h1>
      <h3>Join the ever growing advertising website that grows Minecraft Communitys!</h3>
      <button class="sign-up">Start Today</button>
    </div>
  </header>

  <!-- Features -->

  <section class="about">
    <div class="list-content">
      <h1>Welcome to Skincoin, a <span>Cheap</span> & powerful <span>24/7</span> server adverting site.</h1>
      <h3>Method of advertising to help you grow server communitys with signifigant results</h3>
    </div>
    <div class="cards">
      <div class="card">
        <div class="card-content">
          <i class="fas fa-shield-alt"></i>
          <h3>Always Online</h3>
          <p>Our server has a 99.9% Uptime, so you'll be playing whenever you want!</p>
        </div>
      </div>

      <div class="card">
        <div class="card-content">
          <i class="fab fa-cloudscale"></i>
          <h3>We're fast, like sonic</h3>
          <p>Our servers are so blazing fast, even Sonic can't keep up, amazing, right?!</p>
        </div>
      </div>

      <div class="card">
        <div class="card-content">
          <i class="fas fa-code-branch"></i>
          <h3>Custom Plugins</h3>
          <p>We've created some custom plugins for our server, they're amazing, you'll like them!</p>
        </div>
      </div>

      <div class="card">
        <div class="card-content">
          <i class="fas fa-code-branch"></i>
          <h3>Custom Plugins</h3>
          <p>We've created some custom plugins for our server, they're amazing, you'll like them!</p>
        </div>
      </div>

      <div class="card">
        <div class="card-content">
          <i class="fas fa-code-branch"></i>
          <h3>Custom Plugins</h3>
          <p>We've created some custom plugins for our server, they're amazing, you'll like them!</p>
        </div>
      </div>

      <div class="card">
        <div class="card-content">
          <i class="fas fa-code-branch"></i>
          <h3>Custom Plugins</h3>
          <p>We've created some custom plugins for our server, they're amazing, you'll like them!</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Middle - Advert Banner -->

  <section id="advertisment" class="parallax">
    <h2>What are you waiting for?</h2>
    <h3>Start growing your player base today!</h3>
    <button class="advert">Start Now</button>
  </section>


<!-- Pricing Page -->

  <section class="price-comparison">
  <div class="price-column">
    <div class="price-header">
      <div class="price">
        <div class="dollar-sign">$</div>
        30
        <div class="per-month">/mo</div>
      </div>
      <div class="plan-name">Basic</div>
    </div>
    <div class="divider"></div>
    <div class="feature">
      <img src="image/check-circle.svg">
      Feature A
    </div>
    <div class="feature">
      <img src="image/check-circle.svg">
      Feature B
    </div>
    <div class="feature inactive">
      <img src="image/x-square.svg">
      Feature C
    </div>
    <div class="feature inactive">
      <img src="image/x-square.svg">
      Feature D
    </div>
    <div class="feature inactive">
      <img src="image/x-square.svg">
      Feature E
    </div>
    <div class="feature inactive">
      <img src="image/x-square.svg">
      Feature F
    </div>
    <button id="checkout" class="cta">Subscribe</button>
  </div>


  <div class="price-column popular">
    <div class="most-popular">Most Popular</div>
    <div class="price-header">
      <div class="price">
        <div class="dollar-sign">$</div>
        45
        <div class="per-month">/mo</div>
      </div>
      <div class="plan-name">Professional</div>
    </div>
    <div class="divider"></div>
    <div class="feature">
      <img src="image/check-circle.svg">
      Feature A
    </div>
    <div class="feature">
      <img src="image/check-circle.svg">
      Feature B
    </div>
    <div class="feature">
      <img src="image/check-circle.svg">
      Feature C
    </div>
    <div class="feature">
      <img src="image/check-circle.svg">
      Feature D
    </div>
    <div class="feature inactive">
      <img src="image/x-square.svg">
      Feature E
    </div>
    <div class="feature inactive">
      <img src="image/x-square.svg">
      Feature F
    </div>
    <button class="cta">Start Today</button>
  </div>


  <div class="price-column">
    <div class="price-header">
      <div class="price">
        <div class="dollar-sign">$</div>
        80
        <div class="per-month">/mo</div>
      </div>
      <div class="plan-name">Enterprise</div>
    </div>
    <div class="divider"></div>
    <div class="feature">
      <img src="image/check-circle.svg">
      Feature A
    </div>
    <div class="feature">
      <img src="image/check-circle.svg">
      Feature B
    </div>
    <div class="feature">
      <img src="image/check-circle.svg">
      Feature C
    </div>
    <div class="feature">
      <img src="image/check-circle.svg">
      Feature D
    </div>
    <div class="feature">
      <img src="image/check-circle.svg">
      Feature E
    </div>
    <div class="feature">
      <img src="image/check-circle.svg">
      Feature F
    </div>
    <button class="cta">Start Today</button>
  </div>
</section>

  <!-- About Section -->
  <section id="about-section" class="about-services">
    <h1>Advanced Custom Dashboard</h1>
    <p>We have a custom live dashboard displaying all your results, that you've seen from our services.</p>
    <hr>

    <!-- Row -->
    <div class="first-row">
      <div class="first-content">
        <h2>Custom Dashboard</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore quis quasi sed laboriosam odit, sapiente autem! Vel commodi eligendi ratione soluta eaque officiis quasi tenetur, excepturi aspernatur distinctio, odio neque, dolorum minima.
          Similique nobis ut magnam hic cum illum, sunt, doloribus corporis quam incidunt numquam maxime quis expedita eum aliquam?</p>
      </div>

      <!-- Gamemode Image -->
      <div class="img">
        <img src="image/dashboard.svg" alt="Dashboard">
      </div>
    </div>
  </section>

  <!-- About-Section-End -->

  <div class="testimonial-section">
    <div class="inner-width">
      <h1>What Our Clients Say</h1>
      <div class="testimonial-pics">
        <img src="image/p1.png" alt="test-1" class="active">
        <img src="image/p2.png" alt="test-2">
        <img src="image/p3.png" alt="test-3">
        <img src="image/p4.png" alt="test-4">
      </div>

      <div class="testimonial-contents">
        <div class="testimonial active" id="test-1">
          <p>SkinCoin has been able to grow my server from a small community to a thriving community, i've been getting 3-6 new players everyday for an affordable price. I would highly recommend any smaller Minecraft server to join a plan (:</p>
          <span class="description">PusCraft / Server Owner</span>
        </div>

        <div class="testimonial" id="test-2">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elimet, consectetur adipisicing eli t. Ab consequatur et adipisci ut, impedit cumque, similique, eum tenetur, numquam eligendi aliquid. Nulla sit, cupiditate corporis labore, modi natus
            officiis asperiores!</p>
          <span class="description">Carla / Developer</span>
        </div>

        <div class="testimonial" id="test-3">
          <p>Lorem similique, eum tenetur, numquam eligendi aliquid. Nulla sit, cupiditate corporis labore, modi natus officiis asperiores!</p>
          <span class="description">Thomas / Developer</span>
        </div>

        <div class="testimonial" id="test-4">
          <p>Lorem ipsum dolorng elit. Ab consequatur et adipisci ut, impedit cumque, similique, eum tenetur, numquam eligendi aliquid. Nulla sit, cupiditate corporis labore, modi natus officiis asperiores!</p>
          <span class="description">Monica / Developer</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer-->

  <?php include 'addon/footer.php'; ?>

</body>

</html>
