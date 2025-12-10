<?php 
    session_start();

    $name = $_SESSION['user']['fullname'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home | Wanderly</title>
    <style>
      * {
        padding: 0;
        margin: 0;
        font-family: Arial;
        /* border: 2px solid black; */
      }
      .head {
        background: url("../img/bg_main.jpg");
        height: 100vh;
        /* z-index: -2; */
      }
      .dark {
        /* backdrop-filter: brightness(0.6); */
        background-color: rgba(0, 0, 0, 0.4);
        height: 100vh;
        /* z-index: -1; */
      }
      .color {
        background-color: rgba(54, 19, 84, 0.6);
        position: sticky;
        top: 0;
      }
      .logo {
        height: 10vh;
        width: auto;
        margin-right: 5px;
      }
      h1 {
        color: white;
      }
      .agency-info {
        display: flex;
        align-items: center;
      }
      .nav {
        /* backdrop-filter: blur(50px) ; */
        /* background: transparent; */
        position: sticky;
        display: flex;
        justify-content: space-between;
        height: 20vh;
      }
      .nav ul li {
        list-style: none;
      }
      a {
        text-decoration: none;
        text-align: center;
        display: inline-block;
        color: white;
        padding: 0px 30px;
        margin: 0px 10px;
        /* height: 10vh; */
        /* width: 5vw; */
        /* border: 2px solid black; */
      }
      .nav-btns {
        display: flex;
        align-items: center;
      }
      ul {
        display: flex;
        align-items: center;
      }
      .wrapper-nav {
        width: 90vw;
        margin: auto;
      }
      #search-bar{
        padding: 5px;
        height: 20px;
      }
      a {
        height: 8vh;
        display: flex;
        align-items: center;
        justify-content: center;
      }
      a:hover {
        /* border-bottom: 2px solid white; */
        text-decoration: underline;
        cursor: pointer;
      }
      .height {
        text-align: center;
        font-size: 105px;
      }
      #font {
        font-family: "script";
        font-size: 90px;
      }
      .discover {
        margin: 50px 0px;
      }
      .btn {
        position: relative;
        width: 15vw;
        background: linear-gradient(
          to right,
          rgb(203, 165, 29),
          rgb(158, 57, 189)
        );
        border-radius: 30px;
        margin: auto;
        z-index: 1;
      }
      .btn::after {
        content: "";
        border: 2px solid white;
        background: linear-gradient(
          to left,
          rgb(203, 165, 29),
          rgb(158, 57, 189)
        );
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        opacity: 0;
        transition: all 0.4s ease;
        border-radius: 30px;
        z-index: -1;
      }
      .btn:hover::after {
        opacity: 1;
      }
      .btn:hover {
        cursor: pointer;
      }
      #explore:hover {
        text-decoration: none;
      }
      /* Feature section */
      .feature-wrapper {
        display: flex;
        width: 90vw;
        margin: auto;
        justify-content: space-evenly;
        align-items: center;
        /* border: 2px solid red; */
        background-color: white;
        border-radius: 100px;
        height: 25vh;
      }
      .feature-img{
        width: 40px;
        height:30px;
      }
      .features-section{
        height: 50vh;
        /* border: 2px dashed blue; */
        display: flex;
        background-image: linear-gradient(to right,rgb(252, 213, 71),
          rgb(185, 45, 228) );
      }
      .features{
        /* border: 2px dotted black; */
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 5px;

      }
      span{
        font-weight: bold;
        font-size: larger;
      }
      h2{
        text-align: center;
        margin: 50px;
      }
      .offers{
        width: 80vw;
        display: grid;
        grid-template-rows: 1fr 1fr;
        grid-template-columns: 1fr 1fr;
        /* border: 2px dotted red; */
        justify-content: space-around;
        align-items: center;
        row-gap: 50px;
        column-gap: 40px;
        margin: auto;


      }
      .dest-img{
        width: 15rem;
        height: 20rem;
      }
      .offer{
        display: flex;
        /* border: 2px solid red; */
        gap: 20px;
        position: relative;
      }
      .price{
        font-size: 3rem;
        color: rgb(250, 158, 27);
        font-weight:bold;
        margin-bottom: 30px;
      }
      .label{
        position: absolute;
        background: rgb(250, 158, 27);
        /* text-align: center; */
        color: white;
        width: 9rem;
        height: 1.9rem;
        bottom:0;
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .btn-book{
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        background-image: linear-gradient(to right,rgb(252, 213, 71),
          rgb(185, 45, 228)  );
        width: 8rem;
        height: 2rem;
        color: white;
        border-radius: 10px;
        z-index: 1;
      }
      .btn-book::after{
        content: "";
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-image: linear-gradient(to left,rgb(252, 213, 71),
          rgb(185, 45, 228) );
        opacity: 0;
        transition: all 0.4s ease;
        z-index: -1;
        border-radius: 10px;
      }
      .btn-book:hover::after{
        opacity: 1;
        cursor: pointer;
      }
      .btn-book a{
        /* width: 8rem; */
        padding: 0;
      }
      .btn-book a:hover{
        /* width: 8rem; */
        text-decoration: none;
      }
      p{
        margin-bottom: 50px;
      }
      .footer{
        margin-top: 50px;
        /* border: 2px solid black; */
        height: 60vh;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: rgb(235, 235, 235);
      }
      #quote{
        color: black;
        font-style: italic;
        width: 60vw;
        font-size: 3rem;
      }
      .copyright{
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: black;
        color: white;
        height: 10vh;
      }
      .username {
        color:white;
        font-weight: bolder;
        font-size: larger;
      }
    </style>
  </head>
  <body>
    <div class="head">
      <div class="dark">
        <div class="color">
          <div class="wrapper-nav">
            <div class="nav">
              <div class="agency-info">
                <img class="logo" src="../img/logo.png" alt="logo" />
                <h1>WANDERLY</h1>
              </div>

              <div class="nav-btns">
                <ul>
                  <li><a href="../index.html">Home</a></li>
                  <li><a href="../html/offers.html">Offers</a></li>
                  <li><a href="../html/contact.html">Contact</a></li>
                  <li><a href="../html/about.html">About</a></li>
                  <li class="username"><?php echo $name?></li>
                </ul>
              </div>
              <div class="searchbar agency-info">
                <input type="text" placeholder="Search" id="search-bar">
              </div>
            </div>
          </div>
        </div>
        <div class="discover">
          <h1 class="height">Discover</h1>
          <h1 class="height" id="font">the world</h1>
        </div>
        <div class="btn">
          <a id="explore" href="">Explore Now</a>
        </div>
      </div>
    </div>
    <div class="feature-list">
      <div class="features-section">
        <div class="feature-wrapper">
          <div class="features"><img src="../img/suitcase.png" alt="" class="feature-img"/><span>Hotels</span></div>
          <div class="features"><img src="../img/bus.png" alt="" class="feature-img"/><span>Car Rentals</span></div>
          <div class="features"><img src="../img/cruise.png" alt="" class="feature-img"/><span>Cruises</span></div>
          <div class="features"><img src="../img/flight.png" alt="" class="feature-img"/><span>Flights</span></div>
          <div class="features"><img src="../img/island.png" alt="" class="feature-img"/><span>Trips</span></div>
          <div class="features"><img src="../img/diving.png" alt="" class="feature-img"/><span>Activities</span></div>
        </div>
      </div>
    </div>
    <div class="offers-section">
      <h2>The Best Offers With Rooms</h2>
      <div class="offer-wrapper">
        <div class="offers">
          <div class="offer">
            <div class="label">Greece</div>
            <img src="../img/offer_1.jpg" alt="" class="dest-img">
            <div class="info">
              <div class="price">$70</div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate sed ex, et consectetur deleniti labore? Debitis totam assumenda dolorum praesentium tempore. Iusto, sequi! Ab ratione beatae explicabo, sit incidunt hic.</p>
              <div class="btn-book"><a href="../html/booking.html">Book Now</a></div>
            </div>
          </div>
          <div class="offer">
            <div class="label">Turkey Hills</div>
            <img src="../img/offer_2.jpg" alt="" class="dest-img">
            <div class="info">
              <div class="price">$70</div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate sed ex, et consectetur deleniti labore? Debitis totam assumenda dolorum praesentium tempore. Iusto, sequi! Ab ratione beatae explicabo, sit incidunt hic.</p>
              <div class="btn-book"><a href="../html/booking.html">Book Now</a></div>
            </div>
          </div>
          <div class="offer">
            <div class="label">Island Dream</div>
            <img src="../img/offer_3.jpg" alt="" class="dest-img">
            <div class="info">
              <div class="price">$70</div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate sed ex, et consectetur deleniti labore? Debitis totam assumenda dolorum praesentium tempore. Iusto, sequi! Ab ratione beatae explicabo, sit incidunt hic.</p>
              <div class="btn-book"><a href="../html/booking.html">Book Now</a></div>
            </div>
          </div>
          <div class="offer">
            <div class="label">Travel Light</div>
            <img src="../img/offer_4.jpg" alt="" class="dest-img">
            <div class="info">
              <div class="price">$70</div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate sed ex, et consectetur deleniti labore? Debitis totam assumenda dolorum praesentium tempore. Iusto, sequi! Ab ratione beatae explicabo, sit incidunt hic.</p>
              <div class="btn-book"><a href="../html/booking.html">Book Now</a></div>
            </div>
          </div>
        </div>
    </div>
    <div class="footer">
      <h1 id="quote">The World Is A Book and Those Who Do Not Travel Read Only One Page.</h1>
    </div>
    <div class="copyright">
      <h3>©️ All Rights Reserved</h3>
    </div>
  </body>
</html>
