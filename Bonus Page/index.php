<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bonus Page</title>
  <link rel="icon" type="image/png" href="./img/LOGO.png">
  <link rel="stylesheet" href="Bonus_Page.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://kit.fontawesome.com/d8af8fd18e.js" crossorigin="anonymous"></script>
</head>
<body>
  <!-- Header -->
  <section class="header py-16 flex flex-col justify-center items-center">
    <div class="text-center w-4/5">

      <?php

      if (isset($_SESSION["name"]) && isset($_SESSION["link"])) {
        $name = $_SESSION["name"];
        $link = $_SESSION["link"];
      } else {
        echo " ";
      }

      ?>

      <h3 class="text-white 2xl:text-4xl xl:text-4xl lg:text-4xl md:text-3xl sm:text-2xl min-[320px]:text-2xl font-semibold">Bonuses For <span id="subscriberName" class="underline font-bold"><?php echo isset($_SESSION["name"]) ? $_SESSION["name"] : "Subscriber"; ?></span></h3>
      <h1 class="text-white 2xl:text-5xl xl:text-5xl lg:text-5xl md:text-4xl sm:text-3xl min-[320px]:text-2xl font-extrabold py-5">Elevate Your Content with <span class="text-[#FDAB0D]">QuotesBuddy 2.0</span>! Craft Trending Feeds and Reels Easily With Many Themes of Quotes.</h1>
      <p class="text-[#FDAB0D] 2xl:text-xl xl:text-xl lg:text-xl md:text-lg sm:text-base min-[320px]:text-sm font-semibold">Dominate Instagram Reel, TikTok, YouTube Shorts and more...!</p>
    </div>
    <div class="flex justify-center items-center my-20">
      <div class="text-white drop-shadow-[10px_10px_15px_rgba(0,0,0,0.8)] 2xl:w-[60%] xl:w-[60%] lg:w-[60%] md:w-[70%] sm:w-[70%] min-[320px]:w-[70%]">
        <img src="./img/MOCKUP.png" alt="Mockup">
      </div>
      <div>

      </div>
    </div>
  </section> 

    <!-- Module -->

  <!-- Module 1 -->
  <section class="module flex flex-col justify-center items-center py-20 bg-[url('./img/bg-abstrak.png')] bg-cover bg-no-repeat bg-center bg-fixed">
    <!-- Module Header -->
    <div class="module-header flex flex-wrap justify-between items-center bg-[url('./img/bg-header-module.jpg')] bg-cover bg-center p-7 mx-5 rounded-[50px] w-[70%]">
      <div class="flex justify-center items-center py-10 2xl:w-[36%] xl:w-[36%] lg:w-[36%] md:w-full sm:w-full min-[320px]:w-full">
        <h1 class="module-tittle text-center font-extrabold text-4xl text-white">Friendship Quotes</h1>
      </div>
      <div class="module-desc-container flex flex-col justify-center items-start gap-2 pl-7 py-10 text-left rounded-[35px] bg-white 2xl:w-[60%] xl:w-[60%] lg:w-[60%] md:w-full sm:w-full min-[320px]:w-full">
        <div class="flex gap-3 items-center">
          <i class="module-desc fas fa-check-circle text-green-500"></i>
          <p class="2xl:text-base xl:text-base lg:text-base md:text-sm sm:text-sm min-[320px]:text-sm font-medium">Fully Editable <span class="font-bold">CANVA Templates</span></p>
        </div>
        <div class="flex gap-3 items-center">
          <i class="module-desc fas fa-check-circle text-green-500"></i>
          <p class="2xl:text-base xl:text-base lg:text-base md:text-sm sm:text-sm min-[320px]:text-sm font-medium"><span class="font-bold">Static & Animated</span> Quote Design (Ready To Upload)</p>
        </div>
        <div class="flex gap-3 items-center">
          <i class="module-desc fas fa-check-circle text-green-500"></i>
          <p class="2xl:text-base xl:text-base lg:text-base md:text-sm sm:text-sm min-[320px]:text-sm font-medium"><span class="font-bold">4:4 Size Dimension</span>​ (IG Feed, Facebook, Twitter, Linkedin)</p>
        </div>
        <div class="flex gap-3 items-center">
          <i class="module-desc fas fa-check-circle text-green-500"></i>
          <p class="2xl:text-base xl:text-base lg:text-base md:text-sm sm:text-sm min-[320px]:text-sm font-medium"><span class="font-bold">9:16 Size Dimension</span>​ (Reels, Story, TikTok, YT Shorts, etc)</p>
        </div>
        <div class="flex gap-3 items-center">
          <i class="module-desc fas fa-check-circle text-green-500"></i>
          <p class="2xl:text-base xl:text-base lg:text-base md:text-sm sm:text-sm min-[320px]:text-sm font-medium"><span class="font-bold">25 Various</span> Design​</p>
        </div>
      </div>
    </div>
    <!-- Animation -->
    <div class="flex flex-col justify-center items-center mt-12 w-full">
      <p class="animation-tittle3 font-bold mb-10 text-white bg-[#FDAB0D] px-10 py-2 rounded-[30px] 2xl:text-2xl xl:text-2xl lg:text-2xl md:text-lg sm:text-lg min-[320px]:text-md">Watch the Animation Demo Below!</p>
      <div class="flex justify-center">
        <iframe src="https://www.youtube.com/embed/2E4PPtMhEC0?si" class="w-[52.7vw] h-[30vw] rounded-3xl drop-shadow-[4px_5px_10px_rgba(0,0,0,0.6)]" allowfullscreen></iframe>
      </div>
      <h3 class="animation-tittle1 font-bold mt-12 mb-2 text-[#171E31] 2xl:text-3xl xl:text-3xl lg:text-3xl md:text-2xl sm:text-xl min-[320px]:text-xl">All Those Templates Also Available In</h3>
      <h4 class="animation-tittle2 font-bold mb-4 text-[#FDAB0D] 2xl:text-3xl xl:text-3xl lg:text-3xl md:text-2xl sm:text-xl min-[320px]:text-xl">Static Version</h4>
    </div>
    <!-- 4:4 Card -->
    <div class="flex flex-col justify-center items-center">
      <div class="module-size-container flex justify-center w-[280px] py-2 rounded-[30px] mb-7 2xl:scale-100 xl:scale-100 lg:scale-100 md:scale-95 sm:scale-95 min-[320px]:scale-90">
        <h3 class="font-bold text-xl text-[#171E31] text-center w-[280px] py-2 border-[#171E31] border-[3px] rounded-[35px] border-dashed">4:4 Size Dimension</h3>
      </div>
      <div class="flex flex-wrap justify-center items-center px-10 gap-7">
        <div class="flex flex-col justify-center items-center w-[72vw] bg-white p-5 rounded-[1.5rem] drop-shadow-[4px_5px_10px_rgba(0,0,0,0.4)]">
          <h3 class="bg-[#FDAB0D] text-white w-fit font-extrabold text-xl mt-5 mb-7 px-10 py-1 rounded-2xl">Preview</h3>
          <div class="flex flex-wrap justify-center items-center gap-4">
            <div>
              <img class="2xl:w-[32rem] xl:w-[28rem] min-w-72" src="./img/M1_square1.png" alt="square">
            </div>
            <div>
              <img class="2xl:w-[32rem] xl:w-[28rem] min-w-72" src="./img/M1_square2.png" alt="square">
            </div>
          </div>
          <p class="text-center 2xl:text-xl xl:text-xl lg:text-xl md-text-lg sm:text-lg min-[320px]:text-base mt-5 font-semibold text-[#171E31]">There Are More Designs Waiting for You!</p>
        </div>
      </div>
    </div>
    <!-- 9:16 Card -->
    <div class="flex flex-col justify-center items-center">
      <div class="module-size-container flex justify-center w-[280px] py-2 rounded-[30px] mt-12 mb-7 2xl:scale-100 xl:scale-100 lg:scale-100 md:scale-95 sm:scale-95 min-[320px]:scale-90">
        <h3 class="font-bold text-xl text-[#171E31] text-center w-[280px] py-2 border-[#171E31] border-[3px] rounded-[35px] border-dashed">9:16 Size Dimension</h3>
      </div>
      <div class="flex flex-wrap justify-center items-center px-10 gap-7">
        <div class="flex flex-col justify-center items-center w-[72vw] bg-white p-5 rounded-[1.5rem] drop-shadow-[4px_5px_10px_rgba(0,0,0,0.4)]">
          <h3 class="bg-[#FDAB0D] text-white w-fit font-extrabold text-xl mt-5 mb-7 px-10 py-1 rounded-2xl">Preview</h3>
          <div class="flex flex-wrap justify-center items-center gap-4">
            <div>
              <img class="2xl:w-[32rem] xl:w-[28rem] min-w-72" src="./img/M1_potrait1.png" alt="square">
            </div>
            <div>
              <img class="2xl:w-[32rem] xl:w-[28rem] min-w-72" src="./img/M1_potrait2.png" alt="square">
            </div>
          </div>
          <p class="text-center 2xl:text-xl xl:text-xl lg:text-xl md-text-lg sm:text-lg min-[320px]:text-base mt-5 font-semibold text-[#171E31]">There Are More Designs Waiting for You!</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Module 2 -->
  <section class="module flex flex-col justify-center items-center py-20 bg-[url('./img/bg-abstrak.png')] bg-cover bg-no-repeat bg-center bg-fixed">
    <!-- Module Header -->
    <div class="module-header flex flex-wrap justify-between items-center bg-[url('./img/bg-header-module.jpg')] bg-cover bg-center p-7 mx-5 rounded-[50px] w-[70%]">
      <div class="flex justify-center items-center py-10 2xl:w-[36%] xl:w-[36%] lg:w-[36%] md:w-full sm:w-full min-[320px]:w-full">
        <h1 class="module-tittle text-center font-extrabold text-4xl text-white">Success Quotes</h1>
      </div>
      <div class="module-desc-container flex flex-col justify-center items-start gap-2 pl-7 py-10 text-left rounded-[35px] bg-white 2xl:w-[60%] xl:w-[60%] lg:w-[60%] md:w-full sm:w-full min-[320px]:w-full">
        <div class="flex gap-3 items-center">
          <i class="module-desc fas fa-check-circle text-green-500"></i>
          <p class="2xl:text-base xl:text-base lg:text-base md:text-sm sm:text-sm min-[320px]:text-sm font-medium">Fully Editable <span class="font-bold">CANVA Templates</span></p>
        </div>
        <div class="flex gap-3 items-center">
          <i class="module-desc fas fa-check-circle text-green-500"></i>
          <p class="2xl:text-base xl:text-base lg:text-base md:text-sm sm:text-sm min-[320px]:text-sm font-medium"><span class="font-bold">Static & Animated</span> Quote Design (Ready To Upload)</p>
        </div>
        <div class="flex gap-3 items-center">
          <i class="module-desc fas fa-check-circle text-green-500"></i>
          <p class="2xl:text-base xl:text-base lg:text-base md:text-sm sm:text-sm min-[320px]:text-sm font-medium"><span class="font-bold">4:4 Size Dimension</span>​ (IG Feed, Facebook, Twitter, Linkedin)</p>
        </div>
        <div class="flex gap-3 items-center">
          <i class="module-desc fas fa-check-circle text-green-500"></i>
          <p class="2xl:text-base xl:text-base lg:text-base md:text-sm sm:text-sm min-[320px]:text-sm font-medium"><span class="font-bold">9:16 Size Dimension</span>​ (Reels, Story, TikTok, YT Shorts, etc)</p>
        </div>
        <div class="flex gap-3 items-center">
          <i class="module-desc fas fa-check-circle text-green-500"></i>
          <p class="2xl:text-base xl:text-base lg:text-base md:text-sm sm:text-sm min-[320px]:text-sm font-medium"><span class="font-bold">25 Various</span> Design​</p>
        </div>
      </div>
    </div>
    <!-- Animation -->
    <div class="flex flex-col justify-center items-center mt-12 w-full">
      <p class="animation-tittle3 font-bold mb-10 text-white bg-[#FDAB0D] px-10 py-2 rounded-[30px] 2xl:text-2xl xl:text-2xl lg:text-2xl md:text-lg sm:text-lg min-[320px]:text-md">Watch the Animation Demo Below!</p>
      <div class="flex justify-center">
        <iframe src="https://www.youtube.com/embed/wckmsw0Pxy8" class="w-[52.7vw] h-[30vw] rounded-3xl drop-shadow-[4px_5px_10px_rgba(0,0,0,0.6)]" allowfullscreen></iframe>
      </div>
      <h3 class="animation-tittle1 font-bold mt-12 mb-2 text-[#171E31] 2xl:text-3xl xl:text-3xl lg:text-3xl md:text-2xl sm:text-xl min-[320px]:text-xl">All Those Templates Also Available In</h3>
      <h4 class="animation-tittle2 font-bold mb-4 text-[#FDAB0D] 2xl:text-3xl xl:text-3xl lg:text-3xl md:text-2xl sm:text-xl min-[320px]:text-xl">Static Version</h4>
    </div>
    <!-- 4:3 Card -->
    <div class="flex flex-col justify-center items-center">
      <div class="module-size-container flex justify-center w-[280px] py-2 rounded-[30px] mb-7 2xl:scale-100 xl:scale-100 lg:scale-100 md:scale-95 sm:scale-95 min-[320px]:scale-90">
        <h3 class="font-bold text-xl text-[#171E31] text-center w-[280px] py-2 border-[#171E31] border-[3px] rounded-[35px] border-dashed">4:4 Size Dimension</h3>
      </div>
      <div class="flex flex-wrap justify-center items-center px-10 gap-7">
        <div class="flex flex-col justify-center items-center w-[72vw] bg-white p-5 rounded-[1.5rem] drop-shadow-[4px_5px_10px_rgba(0,0,0,0.4)]">
          <h3 class="bg-[#FDAB0D] text-white w-fit font-extrabold text-xl mt-5 mb-7 px-10 py-1 rounded-2xl">Preview</h3>
          <div class="flex flex-wrap justify-center items-center gap-4">
            <div>
              <img class="2xl:w-[32rem] xl:w-[28rem] min-w-72" src="./img/M2_square1.png" alt="square">
            </div>
            <div>
              <img class="2xl:w-[32rem] xl:w-[28rem] min-w-72" src="./img/M2_square2.png" alt="square">
            </div>
          </div>
          <p class="text-center 2xl:text-xl xl:text-xl lg:text-xl md-text-lg sm:text-lg min-[320px]:text-base mt-5 font-semibold text-[#171E31]">There Are More Designs Waiting for You!</p>
        </div>
      </div>
    </div>
    <!-- 9:16 Card -->
    <div class="flex flex-col justify-center items-center">
      <div class="module-size-container flex justify-center w-[280px] py-2 rounded-[30px] mt-12 mb-7 2xl:scale-100 xl:scale-100 lg:scale-100 md:scale-95 sm:scale-95 min-[320px]:scale-90">
        <h3 class="font-bold text-xl text-[#171E31] text-center w-[280px] py-2 border-[#171E31] border-[3px] rounded-[35px] border-dashed">9:16 Size Dimension</h3>
      </div>
      <div class="flex flex-wrap justify-center items-center px-10 gap-7">
        <div class="flex flex-col justify-center items-center w-[72vw] bg-white p-5 rounded-[1.5rem] drop-shadow-[4px_5px_10px_rgba(0,0,0,0.4)]">
          <h3 class="bg-[#FDAB0D] text-white w-fit font-extrabold text-xl mt-5 mb-7 px-10 py-1 rounded-2xl">Preview</h3>
          <div class="flex flex-wrap justify-center items-center gap-4">
            <div>
              <img class="2xl:w-[32rem] xl:w-[28rem] min-w-72" src="./img/M2_potrait1.png" alt="square">
            </div>
            <div>
              <img class="2xl:w-[32rem] xl:w-[28rem] min-w-72" src="./img/M2_potrait2.png" alt="square">
            </div>
          </div>
          <p class="text-center 2xl:text-xl xl:text-xl lg:text-xl md-text-lg sm:text-lg min-[320px]:text-base mt-5 font-semibold text-[#171E31]">There Are More Designs Waiting for You!</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Module 3 -->
  <section class="module flex flex-col justify-center items-center py-20 bg-[url('./img/bg-abstrak.png')] bg-cover bg-no-repeat bg-center bg-fixed">
    <!-- Module Header -->
    <div class="module-header flex flex-wrap justify-between items-center bg-[url('./img/bg-header-module.jpg')] bg-cover bg-center p-7 mx-5 rounded-[50px] w-[70%]">
      <div class="flex justify-center items-center py-10 2xl:w-[36%] xl:w-[36%] lg:w-[36%] md:w-full sm:w-full min-[320px]:w-full">
        <h1 class="module-tittle text-center font-extrabold text-4xl text-white">Life Quotes</h1>
      </div>
      <div class="module-desc-container flex flex-col justify-center items-start gap-2 pl-7 py-10 text-left rounded-[35px] bg-white 2xl:w-[60%] xl:w-[60%] lg:w-[60%] md:w-full sm:w-full min-[320px]:w-full">
        <div class="flex gap-3 items-center">
          <i class="module-desc fas fa-check-circle text-green-500"></i>
          <p class="2xl:text-base xl:text-base lg:text-base md:text-sm sm:text-sm min-[320px]:text-sm font-medium">Fully Editable <span class="font-bold">CANVA Templates</span></p>
        </div>
        <div class="flex gap-3 items-center">
          <i class="module-desc fas fa-check-circle text-green-500"></i>
          <p class="2xl:text-base xl:text-base lg:text-base md:text-sm sm:text-sm min-[320px]:text-sm font-medium"><span class="font-bold">Static & Animated</span> Quote Design (Ready To Upload)</p>
        </div>
        <div class="flex gap-3 items-center">
          <i class="module-desc fas fa-check-circle text-green-500"></i>
          <p class="2xl:text-base xl:text-base lg:text-base md:text-sm sm:text-sm min-[320px]:text-sm font-medium"><span class="font-bold">4:4 Size Dimension</span>​ (IG Feed, Facebook, Twitter, Linkedin)</p>
        </div>
        <div class="flex gap-3 items-center">
          <i class="module-desc fas fa-check-circle text-green-500"></i>
          <p class="2xl:text-base xl:text-base lg:text-base md:text-sm sm:text-sm min-[320px]:text-sm font-medium"><span class="font-bold">9:16 Size Dimension</span>​ (Reels, Story, TikTok, YT Shorts, etc)</p>
        </div>
        <div class="flex gap-3 items-center">
          <i class="module-desc fas fa-check-circle text-green-500"></i>
          <p class="2xl:text-base xl:text-base lg:text-base md:text-sm sm:text-sm min-[320px]:text-sm font-medium"><span class="font-bold">25 Various</span> Design​</p>
        </div>
      </div>
    </div>
    <!-- Animation -->
    <div class="flex flex-col justify-center items-center mt-12 w-full">
      <p class="animation-tittle3 font-bold mb-10 text-white bg-[#FDAB0D] px-10 py-2 rounded-[30px] 2xl:text-2xl xl:text-2xl lg:text-2xl md:text-lg sm:text-lg min-[320px]:text-md">Watch the Animation Demo Below!</p>
      <div class="flex justify-center">
        <iframe src="https://www.youtube.com/embed/HXnjSdaqbFY" class="w-[52.7vw] h-[30vw] rounded-3xl drop-shadow-[4px_5px_10px_rgba(0,0,0,0.6)]" allowfullscreen></iframe>
      </div>
      <h3 class="animation-tittle1 font-bold mt-12 mb-2 text-[#171E31] 2xl:text-3xl xl:text-3xl lg:text-3xl md:text-2xl sm:text-xl min-[320px]:text-xl">All Those Templates Also Available In</h3>
      <h4 class="animation-tittle2 font-bold mb-4 text-[#FDAB0D] 2xl:text-3xl xl:text-3xl lg:text-3xl md:text-2xl sm:text-xl min-[320px]:text-xl">Static Version</h4>
    </div>
    <!-- 4:4 Card -->
    <div class="flex flex-col justify-center items-center">
      <div class="module-size-container flex justify-center w-[280px] py-2 rounded-[30px] mb-7 2xl:scale-100 xl:scale-100 lg:scale-100 md:scale-95 sm:scale-95 min-[320px]:scale-90">
        <h3 class="font-bold text-xl text-[#171E31] text-center w-[280px] py-2 border-[#171E31] border-[3px] rounded-[35px] border-dashed">4:4 Size Dimension</h3>
      </div>
      <div class="flex flex-wrap justify-center items-center px-10 gap-7">
        <div class="flex flex-col justify-center items-center w-[72vw] bg-white p-5 rounded-[1.5rem] drop-shadow-[4px_5px_10px_rgba(0,0,0,0.4)]">
          <h3 class="bg-[#FDAB0D] text-white w-fit font-extrabold text-xl mt-5 mb-7 px-10 py-1 rounded-2xl">Preview</h3>
          <div class="flex flex-wrap justify-center items-center gap-4">
            <div>
              <img class="2xl:w-[32rem] xl:w-[28rem] min-w-72" src="./img/M3_square1.png" alt="square">
            </div>
            <div>
              <img class="2xl:w-[32rem] xl:w-[28rem] min-w-72" src="./img/M3_square2.png" alt="square">
            </div>
          </div>
          <p class="text-center 2xl:text-xl xl:text-xl lg:text-xl md-text-lg sm:text-lg min-[320px]:text-base mt-5 font-semibold text-[#171E31]">There Are More Designs Waiting for You!</p>
        </div>
      </div>
    </div>
    <!-- 9:16 Card -->
    <div class="flex flex-col justify-center items-center">
      <div class="module-size-container flex justify-center w-[280px] py-2 rounded-[30px] mt-12 mb-7 2xl:scale-100 xl:scale-100 lg:scale-100 md:scale-95 sm:scale-95 min-[320px]:scale-90">
        <h3 class="font-bold text-xl text-[#171E31] text-center w-[280px] py-2 border-[#171E31] border-[3px] rounded-[35px] border-dashed">9:16 Size Dimension</h3>
      </div>
      <div class="flex flex-wrap justify-center items-center px-10 gap-7">
        <div class="flex flex-col justify-center items-center w-[72vw] bg-white p-5 rounded-[1.5rem] drop-shadow-[4px_5px_10px_rgba(0,0,0,0.4)]">
          <h3 class="bg-[#FDAB0D] text-white w-fit font-extrabold text-xl mt-5 mb-7 px-10 py-1 rounded-2xl">Preview</h3>
          <div class="flex flex-wrap justify-center items-center gap-4">
            <div>
              <img class="2xl:w-[32rem] xl:w-[28rem] min-w-72" src="./img/M3_potrait1.png" alt="square">
            </div>
            <div>
              <img class="2xl:w-[32rem] xl:w-[28rem] min-w-72" src="./img/M3_potrait2.png" alt="square">
            </div>
          </div>
          <p class="text-center 2xl:text-xl xl:text-xl lg:text-xl md-text-lg sm:text-lg min-[320px]:text-base mt-5 font-semibold text-[#171E31]">There Are More Designs Waiting for You!</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Module 4 -->
  <section class="module flex flex-col justify-center items-center py-20 bg-[url('./img/bg-abstrak.png')] bg-cover bg-no-repeat bg-center bg-fixed">
    <!-- Module Header -->
    <div class="module-header flex flex-wrap justify-between items-center bg-[url('./img/bg-header-module.jpg')] bg-cover bg-center p-7 mx-5 rounded-[50px] w-[70%]">
      <div class="flex justify-center items-center py-10 2xl:w-[36%] xl:w-[36%] lg:w-[36%] md:w-full sm:w-full min-[320px]:w-full">
        <h1 class="module-tittle text-center font-extrabold text-4xl text-white">Happiness Quotes</h1>
      </div>
      <div class="module-desc-container flex flex-col justify-center items-start gap-2 pl-7 py-10 text-left rounded-[35px] bg-white 2xl:w-[60%] xl:w-[60%] lg:w-[60%] md:w-full sm:w-full min-[320px]:w-full">
        <div class="flex gap-3 items-center">
          <i class="module-desc fas fa-check-circle text-green-500"></i>
          <p class="2xl:text-base xl:text-base lg:text-base md:text-sm sm:text-sm min-[320px]:text-sm font-medium">Fully Editable <span class="font-bold">CANVA Templates</span></p>
        </div>
        <div class="flex gap-3 items-center">
          <i class="module-desc fas fa-check-circle text-green-500"></i>
          <p class="2xl:text-base xl:text-base lg:text-base md:text-sm sm:text-sm min-[320px]:text-sm font-medium"><span class="font-bold">Static & Animated</span> Quote Design (Ready To Upload)</p>
        </div>
        <div class="flex gap-3 items-center">
          <i class="module-desc fas fa-check-circle text-green-500"></i>
          <p class="2xl:text-base xl:text-base lg:text-base md:text-sm sm:text-sm min-[320px]:text-sm font-medium"><span class="font-bold">4:4 Size Dimension</span>​ (IG Feed, Facebook, Twitter, Linkedin)</p>
        </div>
        <div class="flex gap-3 items-center">
          <i class="module-desc fas fa-check-circle text-green-500"></i>
          <p class="2xl:text-base xl:text-base lg:text-base md:text-sm sm:text-sm min-[320px]:text-sm font-medium"><span class="font-bold">9:16 Size Dimension</span>​ (Reels, Story, TikTok, YT Shorts, etc)</p>
        </div>
        <div class="flex gap-3 items-center">
          <i class="module-desc fas fa-check-circle text-green-500"></i>
          <p class="2xl:text-base xl:text-base lg:text-base md:text-sm sm:text-sm min-[320px]:text-sm font-medium"><span class="font-bold">25 Various</span> Design​</p>
        </div>
      </div>
    </div>
    <!-- Animation -->
    <div class="flex flex-col justify-center items-center mt-12 w-full">
      <p class="animation-tittle3 font-bold mb-10 text-white bg-[#FDAB0D] px-10 py-2 rounded-[30px] 2xl:text-2xl xl:text-2xl lg:text-2xl md:text-lg sm:text-lg min-[320px]:text-md">Watch the Animation Demo Below!</p>
      <div class="flex justify-center">
        <iframe src="https://www.youtube.com/embed/C7uGoFmpzkE?si" class="w-[52.7vw] h-[30vw] rounded-3xl drop-shadow-[4px_5px_10px_rgba(0,0,0,0.6)]" allowfullscreen></iframe>
      </div>
      <h3 class="animation-tittle1 font-bold mt-12 mb-2 text-[#171E31] 2xl:text-3xl xl:text-3xl lg:text-3xl md:text-2xl sm:text-xl min-[320px]:text-xl">All Those Templates Also Available In</h3>
      <h4 class="animation-tittle2 font-bold mb-4 text-[#FDAB0D] 2xl:text-3xl xl:text-3xl lg:text-3xl md:text-2xl sm:text-xl min-[320px]:text-xl">Static Version</h4>
    </div>
    <!-- 4:4 Card -->
    <div class="flex flex-col justify-center items-center">
      <div class="module-size-container flex justify-center w-[280px] py-2 rounded-[30px] mb-7 2xl:scale-100 xl:scale-100 lg:scale-100 md:scale-95 sm:scale-95 min-[320px]:scale-90">
        <h3 class="font-bold text-xl text-[#171E31] text-center w-[280px] py-2 border-[#171E31] border-[3px] rounded-[35px] border-dashed">4:4 Size Dimension</h3>
      </div>
      <div class="flex flex-wrap justify-center items-center px-10 gap-7">
        <div class="flex flex-col justify-center items-center w-[72vw] bg-white p-5 rounded-[1.5rem] drop-shadow-[4px_5px_10px_rgba(0,0,0,0.4)]">
          <h3 class="bg-[#FDAB0D] text-white w-fit font-extrabold text-xl mt-5 mb-7 px-10 py-1 rounded-2xl">Preview</h3>
          <div class="flex flex-wrap justify-center items-center gap-4">
            <div>
              <img class="2xl:w-[32rem] xl:w-[28rem] min-w-72" src="./img/M4_square1.png" alt="square">
            </div>
            <div>
              <img class="2xl:w-[32rem] xl:w-[28rem] min-w-72" src="./img/M4_square2.png" alt="square">
            </div>
          </div>
          <p class="text-center 2xl:text-xl xl:text-xl lg:text-xl md-text-lg sm:text-lg min-[320px]:text-base mt-5 font-semibold text-[#171E31]">There Are More Designs Waiting for You!</p>
        </div>
      </div>
    </div>
    <!-- 9:16 Card -->
    <div class="flex flex-col justify-center items-center">
      <div class="module-size-container flex justify-center w-[280px] py-2 rounded-[30px] mt-12 mb-7 2xl:scale-100 xl:scale-100 lg:scale-100 md:scale-95 sm:scale-95 min-[320px]:scale-90">
        <h3 class="font-bold text-xl text-[#171E31] text-center w-[280px] py-2 border-[#171E31] border-[3px] rounded-[35px] border-dashed">9:16 Size Dimension</h3>
      </div>
      <div class="flex flex-wrap justify-center items-center px-10 gap-7">
        <div class="flex flex-col justify-center items-center w-[72vw] bg-white p-5 rounded-[1.5rem] drop-shadow-[4px_5px_10px_rgba(0,0,0,0.4)]">
          <h3 class="bg-[#FDAB0D] text-white w-fit font-extrabold text-xl mt-5 mb-7 px-10 py-1 rounded-2xl">Preview</h3>
          <div class="flex flex-wrap justify-center items-center gap-4">
            <div>
              <img class="2xl:w-[32rem] xl:w-[28rem] min-w-72" src="./img/M4_potrait1.png" alt="square">
            </div>
            <div>
              <img class="2xl:w-[32rem] xl:w-[28rem] min-w-72" src="./img/M4_potrait2.png" alt="square">
            </div>
          </div>
          <p class="text-center 2xl:text-xl xl:text-xl lg:text-xl md-text-lg sm:text-lg min-[320px]:text-base mt-5 font-semibold text-[#171E31]">There Are More Designs Waiting for You!</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Module 5 -->
  <section class="module flex flex-col justify-center items-center py-20 bg-[url('./img/bg-abstrak.png')] bg-cover bg-no-repeat bg-center bg-fixed">
    <!-- Module Header -->
    <div class="module-header flex flex-wrap justify-between items-center bg-[url('./img/bg-header-module.jpg')] bg-cover bg-center p-7 mx-5 rounded-[50px] w-[70%]">
      <div class="flex justify-center items-center py-10 2xl:w-[36%] xl:w-[36%] lg:w-[36%] md:w-full sm:w-full min-[320px]:w-full">
        <h1 class="module-tittle text-center font-extrabold text-4xl text-white">Struggle Quotes</h1>
      </div>
      <div class="module-desc-container flex flex-col justify-center items-start gap-2 pl-7 py-10 text-left rounded-[35px] bg-white 2xl:w-[60%] xl:w-[60%] lg:w-[60%] md:w-full sm:w-full min-[320px]:w-full">
        <div class="flex gap-3 items-center">
          <i class="module-desc fas fa-check-circle text-green-500"></i>
          <p class="2xl:text-base xl:text-base lg:text-base md:text-sm sm:text-sm min-[320px]:text-sm font-medium">Fully Editable <span class="font-bold">CANVA Templates</span></p>
        </div>
        <div class="flex gap-3 items-center">
          <i class="module-desc fas fa-check-circle text-green-500"></i>
          <p class="2xl:text-base xl:text-base lg:text-base md:text-sm sm:text-sm min-[320px]:text-sm font-medium"><span class="font-bold">Static & Animated</span> Quote Design (Ready To Upload)</p>
        </div>
        <div class="flex gap-3 items-center">
          <i class="module-desc fas fa-check-circle text-green-500"></i>
          <p class="2xl:text-base xl:text-base lg:text-base md:text-sm sm:text-sm min-[320px]:text-sm font-medium"><span class="font-bold">4:4 Size Dimension</span>​ (IG Feed, Facebook, Twitter, Linkedin)</p>
        </div>
        <div class="flex gap-3 items-center">
          <i class="module-desc fas fa-check-circle text-green-500"></i>
          <p class="2xl:text-base xl:text-base lg:text-base md:text-sm sm:text-sm min-[320px]:text-sm font-medium"><span class="font-bold">9:16 Size Dimension</span>​ (Reels, Story, TikTok, YT Shorts, etc)</p>
        </div>
        <div class="flex gap-3 items-center">
          <i class="module-desc fas fa-check-circle text-green-500"></i>
          <p class="2xl:text-base xl:text-base lg:text-base md:text-sm sm:text-sm min-[320px]:text-sm font-medium"><span class="font-bold">25 Various</span> Design​</p>
        </div>
      </div>
    </div>
    <!-- Animation -->
    <div class="flex flex-col justify-center items-center mt-12 w-full">
      <p class="animation-tittle3 font-bold mb-10 text-white bg-[#FDAB0D] px-10 py-2 rounded-[30px] 2xl:text-2xl xl:text-2xl lg:text-2xl md:text-lg sm:text-lg min-[320px]:text-md">Watch the Animation Demo Below!</p>
      <div class="flex justify-center">
        <iframe src="https://www.youtube.com/embed/JjpHrGNmED8?si" class="w-[52.7vw] h-[30vw] rounded-3xl drop-shadow-[4px_5px_10px_rgba(0,0,0,0.6)]" allowfullscreen></iframe>
      </div>
      <h3 class="animation-tittle1 font-bold mt-12 mb-2 text-[#171E31] 2xl:text-3xl xl:text-3xl lg:text-3xl md:text-2xl sm:text-xl min-[320px]:text-xl">All Those Templates Also Available In</h3>
      <h4 class="animation-tittle2 font-bold mb-4 text-[#FDAB0D] 2xl:text-3xl xl:text-3xl lg:text-3xl md:text-2xl sm:text-xl min-[320px]:text-xl">Static Version</h4>
    </div>
    <!-- 4:4 Card -->
    <div class="flex flex-col justify-center items-center">
      <div class="module-size-container flex justify-center w-[280px] py-2 rounded-[30px] mb-7 2xl:scale-100 xl:scale-100 lg:scale-100 md:scale-95 sm:scale-95 min-[320px]:scale-90">
        <h3 class="font-bold text-xl text-[#171E31] text-center w-[280px] py-2 border-[#171E31] border-[3px] rounded-[35px] border-dashed">4:4 Size Dimension</h3>
      </div>
      <div class="flex flex-wrap justify-center items-center px-10 gap-7">
        <div class="flex flex-col justify-center items-center w-[72vw] bg-white p-5 rounded-[1.5rem] drop-shadow-[4px_5px_10px_rgba(0,0,0,0.4)]">
          <h3 class="bg-[#FDAB0D] text-white w-fit font-extrabold text-xl mt-5 mb-7 px-10 py-1 rounded-2xl">Preview</h3>
          <div class="flex flex-wrap justify-center items-center gap-4">
            <div>
              <img class="2xl:w-[32rem] xl:w-[28rem] min-w-72" src="./img/M5_square1.png" alt="square">
            </div>
            <div>
              <img class="2xl:w-[32rem] xl:w-[28rem] min-w-72" src="./img/M5_square2.png" alt="square">
            </div>
          </div>
          <p class="text-center 2xl:text-xl xl:text-xl lg:text-xl md-text-lg sm:text-lg min-[320px]:text-base mt-5 font-semibold text-[#171E31]">There Are More Designs Waiting for You!</p>
        </div>
      </div>
    </div>
    <!-- 9:16 Card -->
    <div class="flex flex-col justify-center items-center">
      <div class="module-size-container flex justify-center w-[280px] py-2 rounded-[30px] mt-12 mb-7 2xl:scale-100 xl:scale-100 lg:scale-100 md:scale-95 sm:scale-95 min-[320px]:scale-90">
        <h3 class="font-bold text-xl text-[#171E31] text-center w-[280px] py-2 border-[#171E31] border-[3px] rounded-[35px] border-dashed">9:16 Size Dimension</h3>
      </div>
      <div class="flex flex-wrap justify-center items-center px-10 gap-7">
        <div class="flex flex-col justify-center items-center w-[72vw] bg-white p-5 rounded-[1.5rem] drop-shadow-[4px_5px_10px_rgba(0,0,0,0.4)]">
          <h3 class="bg-[#FDAB0D] text-white w-fit font-extrabold text-xl mt-5 mb-7 px-10 py-1 rounded-2xl">Preview</h3>
          <div class="flex flex-wrap justify-center items-center gap-4">
            <div>
              <img class="2xl:w-[32rem] xl:w-[28rem] min-w-72" src="./img/M5_potrait1.png" alt="square">
            </div>
            <div>
              <img class="2xl:w-[32rem] xl:w-[28rem] min-w-72" src="./img/M5_potrait2.png" alt="square">
            </div>
          </div>
          <p class="text-center 2xl:text-xl xl:text-xl lg:text-xl md-text-lg sm:text-lg min-[320px]:text-base mt-5 font-semibold text-[#171E31]">There Are More Designs Waiting for You!</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Bonus -->
  <section class="bonus bg-[url('./img/bg-dark2.png')] bg-cover bg-center bg-fixed flex flex-col justify-center items-center py-16">
    <div class="mb-5 2xl:scale-100 xl:scale-100 lg:scale-100 md:scale-95 sm:scale-90 min-[320px]:scale-[0.85]">
      <h1 class="text-[#FDAB0D] text-center text-4xl font-extrabold border-[#FDAB0D] border-[5px] rounded-3xl py-2 px-10 mb-3">Bonuses For QuotesBuddy 2.0</h1>
    </div>
    <div class="flex flex-col justify-center items-center">
      <p class="text-white text-lg font-semibold mb-5">Grab <span class="font-bold underline">QuotesBuddy 2.0</span> And Your <span class="font-bold underline">Bonuses</span> NOW!</p>
      <button class="text-[#FDAB0D] text-xl py-2 px-5 rounded-3xl font-extrabold bg-gradient-to-b from-white via-gray-200 to-gray-300 hover:scale-105 duration-200">Get It Now</button>
    </div>
    <!-- Card -->
    <div class="card__container">
      <article class="card__article rounded-3xl">
        <img src="./img/ig_feed_template.png" alt="image" class="card__img">
        <div class="card__data">
          <h2 class="card__title">IG Feed Templates</h2>
          <p class="card__button text-[#FDAB0D] mb-4">Explore Captivating Templates for Stunning Visual Feed Stories!</p>
        </div>
      </article>

      <article class="card__article rounded-3xl">
        <img src="./img/ig_story_template.png" alt="image" class="card__img">
        <div class="card__data">
          <h2 class="card__title">IG Story Templates</h2>
          <p class="card__button text-[#FDAB0D] mb-4">Explore Fun and Easy Templates for Memorable Moments!</p>
        </div>
      </article>

      <article class="card__article rounded-3xl">
        <img src="./img/poster_template.png" alt="image" class="card__img">
        <div class="card__data">
          <h2 class="card__title">Poster Templates</h2>
          <p class="card__button text-[#FDAB0D] mb-4">Dive into a World of Captivating Poster Templates!</p>
        </div>
      </article>

      <article class="card__article rounded-3xl">
        <img src="./img/100_quotes_template.png" alt="image" class="card__img">
        <div class="card__data">
          <h2 class="card__title">100 Quote Templates</h2>
          <p class="card__button text-[#FDAB0D] mb-4">Access 100 Unique Quote Templates for Endless Creativity!</p>
        </div>
      </article>
      
      <article class="card__article rounded-3xl">
        <img src="./img/iphone_mockup.png" alt="image" class="card__img">
        <div class="card__data">
          <h2 class="card__title">Iphone Mockup</h2>
          <p class="card__button text-[#FDAB0D] mb-4">Elevate Your Presentation with Stunning iPhone Mockup Templates!</p>
        </div>
      </article>
    </div>
  </section>

</body>
</html>