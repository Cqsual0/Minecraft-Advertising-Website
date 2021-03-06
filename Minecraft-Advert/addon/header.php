<?php
session_start();
 ?>


<nav class="navbar">
  <div class="content">
    <div class="logo">
      <a href="#">Minecraft Website</a>
    </div>
    <ul class="menu-list">
      <div class="icon cancel-btn">
        <i class="fas fa-times"></i>
      </div>
      <li><a href="#">Home</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Contact</a></li>
      <li><a href="#"></a></li>
      <?php
      if (isset($_SESSION["useruid"])) {
        echo "<li><a href='http://localhost/Minecraft-Advert/php/profile.php'><button>Account</button></a></li>";
        echo  "<li><a href='http://localhost/Minecraft-Advert/php/inc/logout.inc.php'><button>Logout</button></a></li>";
      }
      else {
        echo "<li><a href='http://localhost/Minecraft-Advert/php/signup.php'><button>Signup</button></a></li>";
        echo "<li><a href='http://localhost/Minecraft-Advert/php/login.php'><button>Login</button></a></li>";
      }
       ?>
    </ul>
    <div class="icon menu-btn">
      <i class="fas fa-bars"></i>
    </div>
  </div>
</nav>


<script>
  const body = document.querySelector("body");
  const navbar = document.querySelector(".navbar");
  const menuBtn = document.querySelector(".menu-btn");
  const cancelBtn = document.querySelector(".cancel-btn");
  menuBtn.onclick = () => {
    navbar.classList.add("show");
    menuBtn.classList.add("hide");
    body.classList.add("disabled");
  }
  cancelBtn.onclick = () => {
    body.classList.remove("disabled");
    navbar.classList.remove("show");
    menuBtn.classList.remove("hide");
  }
  window.onscroll = () => {
    this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
  }
</script>

<style media="screen">
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

html, body {
  scroll-behavior: smooth;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

/* Navigation Bar */
/* custom scroll bar */
::-webkit-scrollbar {
  width: 10px;
}

::-webkit-scrollbar-track {
  background: #f1f1f1;
}

::-webkit-scrollbar-thumb {
  background: #888;
}

::selection {
  background: rgb(0, 123, 255, 0.3);
}

.content {
  max-width: 1250px;
  margin: auto;
  padding: 0 30px;
}

.navbar {
  width: 100%;
  z-index: 2;
  padding: 25px 0;
  transition: all 0.3s ease;
}

.navbar.sticky {
  background: #1b1b1b;
  padding: 10px 0;
  box-shadow: 0px 3px 5px 0px rgba(0, 0, 0, 0.1);
}

.navbar .content {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.navbar .logo a {
  color: #fff;
  font-size: 30px;
  font-weight: 600;
  text-decoration: none;
}

.navbar .menu-list {
  display: inline-flex;
}

.menu-list li {
  list-style: none;
}

.menu-list li a {
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  margin-left: 25px;
  text-decoration: none;
  transition: all 0.3s ease;
}

.menu-list li a:hover {
  color: #007bff;
}

.about {
  padding: 30px 0;
}

.content button {
  padding: 5px 14px;
  background-color: #454545;
  border: none;
  font-size: 18px;
  transition: .3s all;
  font-weight: 600;
  color: #f2f2f2;
  border-radius: 3px;
  cursor: pointer;
  position: relative;
  bottom: 5px;
}

.about .title {
  font-size: 38px;
  font-weight: 700;
}

.about p {
  padding-top: 20px;
  text-align: justify;
}

.icon {
  color: #fff;
  font-size: 20px;
  cursor: pointer;
  display: none;
}

.menu-list .cancel-btn {
  position: absolute;
  right: 30px;
  top: 20px;
}

@media (max-width: 1230px) {
  .content {
    padding: 0 60px;
  }
}

@media (max-width: 1100px) {
  .content {
    padding: 0 40px;
  }
}

@media (max-width: 900px) {
  .content {
    padding: 0 30px;
  }
}

@media (max-width: 868px) {
  body.disabled {
    overflow: hidden;
  }

  .icon {
    display: block;
  }

  .icon.hide {
    display: none;
  }

  .navbar .menu-list {
    position: fixed;
    height: 100vh;
    width: 100%;
    max-width: 400px;
    left: -100%;
    top: 0px;
    display: block;
    padding: 40px 0;
    text-align: center;
    background: #222;
    transition: all 0.3s ease;
  }

  .navbar.show .menu-list {
    left: 0%;
  }

  .navbar .menu-list li {
    margin-top: 45px;
  }

  .navbar .menu-list li a {
    font-size: 23px;
    margin-left: -100%;
    transition: 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  }

  .navbar.show .menu-list li a {
    margin-left: 0px;
  }
}

@media (max-width: 380px) {
  .navbar .logo a {
    font-size: 27px;
  }
}
</style>
