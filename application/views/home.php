<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?=base_url('public/css/')?>style.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Literata"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />
    <title>Document</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar">
      <div class="logo">
        <h1><a href="#">We Web</a></h1>
      </div>
      <ul class="nav-items">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About Us</a></li>
        <li><a href="#pricing">Pricing</a></li>
        <li><a href="#contact">Contact</a></li>
        <button>Login</button>
      </ul>
    </nav>
    <!--End navbar -->

    <!-- Home -->
    <section id="home">
      <p class="title">Plan Your Creatifity Now !</p>
      <p class="caption">
        Start by ordering a website <br />on <mark>WeWeb</mark>
      </p>
      <button>Order Now</button>
      <div class="line">
        <p>
          Creativity is a habit and a skill that can be continuously trained.
        </p>
      </div>
      <img src="<?=base_url('public/')?>/image/monitoring 1.png" alt="monitoring.png" />
    </section>
    <!-- End Home -->

    <!-- About -->
    <section id="about">
      <div class="header">
        <p class="title">About Us</p>
      </div>
      <div class="grid-2">
        <div class="left">
          <div class="person-text">
            <img src="<?=base_url('public/')?>/image/boy (1) 1.png" />
            <p>We Web is a trusted service.</p>
          </div>
          <div class="person-text">
            <p>why ?</p>
            <img src="<?=base_url('public/')?>/image/shy 1.png" />
          </div>
          <div class="person-text">
            <img src="<?=base_url('public/')?>/image/boy 1.png" />
            <p>We Web is a trusted service.</p>
          </div>
        </div>
        <div class="right">
          <div class="group-text">
            <img src="<?=base_url('public/')?>/image/team-management 1.png" alt="" />
            <p>Professional Team</p>
          </div>
          <div class="group-text">
            <p>Professional Team</p>
            <img src="<?=base_url('public/')?>/image/friends 1.png" alt="" />
          </div>
          <div class="group-text">
            <img src="<?=base_url('public/')?>/image/fast 1.png" alt="" />
            <p>Fast Work</p>
          </div>
          <div class="group-text">
            <p>Lots of Discount</p>
            <img src="<?=base_url('public/')?>/image/coupon 1.png" alt="" />
          </div>
          <div class="group-text">
            <img src="<?=base_url('public/')?>/image/satisfaction 1.png" alt="" />
            <p>With Satisfactory Result</p>
          </div>
        </div>
      </div>
    </section>
    <!-- End About -->

    <!-- Testimoni -->
    <section id="testimoni">
      <p class="title">What They Say</p>
      <div class="test-contain">
        <div class="card">
          <img src="<?=base_url('public/')?>/image/old-man 1.png" alt="" />
          <div class="card-text">
            <p>Jeff Bansos</p>
            <p>
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i
              ><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i
              ><i class="bi bi-star-fill"></i>
            </p>
            <p>
              "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat.”
            </p>
          </div>
        </div>
        <div class="card">
          <img src="<?=base_url('public/')?>/image/old-man 1.png" alt="" />
          <div class="card-text">
            <p>Jeff Bansos</p>
            <p>
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i
              ><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i
              ><i class="bi bi-star-fill"></i>
            </p>
            <p>
              "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat.”
            </p>
          </div>
        </div>
        <div class="card">
          <img src="<?=base_url('public/')?>/image/old-man 1.png" alt="" />
          <div class="card-text">
            <p>Jeff Bansos</p>
            <p>
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i
              ><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i
              ><i class="bi bi-star-fill"></i>
            </p>
            <p>
              "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat.”
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- End Testimoni -->

    <section id="pricing">
      <div class="pricing-content">
        <p class="title">Here We Have Several Option For You</p>
        <div class="boxes">
          <div class="box">
            <p>Personal</p>
            <p>Rp.500.000/Tahun</p>
            <ul>
              <li>Fitur 1</li>
              <li>Fitur 1</li>
              <li>Fitur 1</li>
              <li>Fitur 1</li>
              <li>Fitur 1</li>
            </ul>
            <button>Order Now</button>
          </div>
          <div class="box">
            <p>Personal</p>
            <p>Rp.500.000/Tahun</p>
            <ul>
              <li>Fitur 1</li>
              <li>Fitur 1</li>
              <li>Fitur 1</li>
              <li>Fitur 1</li>
              <li>Fitur 1</li>
            </ul>
            <button>Order Now</button>
          </div>
          <div class="box">
            <p>Personal</p>
            <p>Rp.500.000/Tahun</p>
            <ul>
              <li>Fitur 1</li>
              <li>Fitur 1</li>
              <li>Fitur 1</li>
              <li>Fitur 1</li>
              <li>Fitur 1</li>
            </ul>
            <button>Order Now</button>
          </div>
        </div>
      </div>
    </section>

    <section id="contact">
      <p>Contact Us</p>
      <div class="contact-content">
        <div class="addr">
          <p><i class="bi bi-geo-alt"></i>Komplek Sidotopo Dipo 2/19</p>
          <p><i class="bi bi-telephone"></i> +6289612815852</p>
          <p><i class="bi bi-envelope"></i>just@weweb.com</p>
        </div>
        <div class="social">
          <p><img src="<?=base_url('public/')?>/image/facebook 1.png" alt="" />Facebook</p>
          <p>
            <img src="<?=base_url('public/')?>/image/instagram 1.png" alt="" />
            Instagram
          </p>
          <p>
            <img src="<?=base_url('public/')?>/image/twitter 1 (1).png" alt="" />
            Twitter
          </p>
        </div>
      </div>
    </section>
    <script src="<?=base_url('public/js/')?>script.js"></script>
  </body>
</html>

