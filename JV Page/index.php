<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JV Page</title>
  <link rel="icon" type="image/png" href="./img/LOGO.png">
  <link rel="stylesheet" href="JV_Page.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://kit.fontawesome.com/d8af8fd18e.js" crossorigin="anonymous"></script>
</head>

<body class="overflow-x-hidden">
  <!-- Navigation -->
  <section class="fixed z-10 w-full">
    <nav class="flex justify-between items-center px-10 py-5 w-full bg-[#171E31]">
      <div class="flex justify-start items-center gap-2">
        <h1 class="title text-white font-bold text-xl flex items-center gap-2">Quotes Buddy 2.0</h1>
        <div class="w-[3%]">
          <img src="./img/quote.png" alt="quote">
        </div>
      </div>
      <div class="nav-items text-white flex justify-center items-center gap-5 xl:flex lg:flex md:hidden sm:hidden min-[320px]:hidden">
        <a class="smooth-scroll contest-link flex items-center gap-1" href="#contest">
          Contest
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
            <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z" />
          </svg>
        </a>
        <a class="smooth-scrol flex items-center gap-1" href="#affiliate">
          Affiliate Link
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
            <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z" />
          </svg>
        </a>
        <a class="smooth-scroll promotion-link flex items-center gap-1" href="#promotion">
          Promotion Material
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
            <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z" />
          </svg>
        </a>
      </div>
      <div class="container 2xl:hidden xl:hidden lg:hidden md:flex sm:flex min-[320px]:flex text-right" onclick="myFunction(this)">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
      </div>
    </nav>
    <div class="smooth-scroll burger flex-col 2xl:hidden xl:hidden lg:hidden text-white justify-start items-end pr-10 gap-5 pb-10 duration-200">
      <a class="smooth-scroll contest-link flex items-center gap-1" href="#contest">
        Contest
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
          <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z" />
        </svg>
      </a>
      <a class="smooth-scroll flex items-center gap-1" href="#affiliate">
        Affiliate Link
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
          <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z" />
        </svg>
      </a>
      <a class="smooth-scroll promotion-link flex items-center gap-1" href="#promotion">
        Promotion Material
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
          <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z" />
        </svg>
      </a>
    </div>
  </section>

  <!-- Header -->
  <header class="relative flex flex-col items-center justify-center pt-12 pb-20">
    <div class="barrier absolute z-5">
      <img width="20%" src="./img/quotes.png" alt="quotes">
    </div>
    <h1 class="header-tittle text-center text-white w-4/5 font-extrabold mt-20 pb-12 2xl:text-5xl 2xl:leading-[4rem] xl:text-4xl xl:leading-[4rem] md:text-4xl md:leading-[3rem] sm:text-3xl sm:leading-[3rem] min-[320px]:text-2xl min-[320px]:leading-[2rem]">Get <span class="header-span text-[#FDAB0D]">Instant Commission</span> And Help Your Customers Create Reels/Feed And Easies Using QuotesBuddy 2.0</h1>
    <div class="2xl:w-1/2 xl:w-1/2 lg:w-1/2 md:w-[70%] sm:w-[70%] min-[320px]:w-[70%] mb-20">
      <img src="./img/new-product.png" alt="">
    </div>
    <div class="launch flex flex-wrap justify-center items-center bg-gray-100 border-[#FDAB0D] border-[10px] rounded-[50px] py-4 mx-5 min-[650px]:gap-5 min-[320px]:gap-5 shadow-[10px_10px_20px_rgba(0,0,0,0.7)]">
      <div class="flex flex-col justify-center items-center px-24">
        <h1 class="text-red-500 font-extrabold text-3xl mb-3">Starts On</h1>
        <h3 class="font-bold text-[22px]">10th March</h3>
        <p class="font-medium">09:00 AM EST</p>
      </div>
      <div class="flex w-[2px] bg-gray-300 h-32 2xl:flex xl:flex lg:flex sm:flex md:flex min-[650px]:hidden min-[320px]:hidden"></div>
      <div class="flex flex-col justify-center items-center px-24">
        <h1 class="text-red-500 font-extrabold text-3xl mb-3">Ends On</h1>
        <h3 class="font-bold text-[22px]">15th March</h3>
        <p class="font-medium">12:00 PM EST</p>
      </div>
    </div>
    <div class="mt-20 w-4/5">
      <h3 class="text-center font-bold text-3xl text-white">Going Live - <span class="date-launch">Saturday, 10th March 2024</span>, 09:00 AM EST</h3>
      <p class="dont-miss-it text-[#FDAB0D] text-center font-extrabold text-4xl mt-4">Don't Miss It!</p>
    </div>
    <!-- Countdown -->
    <div class="countdown flex justify-center items-center mt-6 mb-12 shadow-[10px_10px_20px_rgba(0,0,0,0.7)] gap-[1px]">
      <div class="first-item count-item flex flex-col items-center justify-center bg-gradient-to-b from-white via-gray-200 to-gray-300 rounded-tl-[20px] rounded-bl-[20px]">
        <div class="days font-extrabold text-4xl"></div>
        <div class="font-bold">Days</div>
      </div>
      <div class="count-item flex flex-col items-center justify-center bg-gradient-to-b from-white via-gray-200 to-gray-300">
        <div class="hours font-extrabold text-4xl"></div>
        <div class="font-bold">Hours</div>
      </div>
      <div class="count-item flex flex-col items-center justify-center bg-gradient-to-b from-white via-gray-200 to-gray-300">
        <div class="minutes font-extrabold text-4xl"></div>
        <div class="font-bold">Minutes</div>
      </div>
      <div class="last-item count-item flex flex-col items-center justify-center bg-gradient-to-b from-white via-gray-200 to-gray-300 rounded-tr-[20px] rounded-br-[20px]">
        <div class="seconds font-extrabold text-4xl"></div>
        <div class="font-bold">Seconds</div>
      </div>
    </div>
    <!-- Result -->
    <div class=" result-container mb-10 cursor-pointer hover:scale-105 duration-200">
      <h1 class="result text-3xl font-extrabold hover:bg-[#1b2338]">Get It NOW</h1>
    </div>
  </header>

  <!-- About -->
  <section class="about3 text-center flex flex-col justify-center items-center pb-20 bg-[url('./img/bg-dark2.png')] bg-cover bg-center bg-fixed">
    <h1 class="2xl:text-5xl xl:text-5xl lg:text-4xl md:text-3xl sm:text-2xl min-[320px]:text-2xl font-extrabold pt-20 pb-10 text-[#FDAB0D]">About Quotes Buddy 2.0</h1>
    <p class="text-white w-4/5 mb-10">Unleash Your Creativity with our extensive collection of beautifully designed templates, tailored to suit every mood and occasion. Whether you're seeking motivation, inspiration, or just want to add a touch of elegance to your social media feed, Quotes Buddy 2.0 has you covered.With easy-to-use features and a wide range of themes to choose from, creating captivating quote graphics has never been simpler. Elevate your content game and leave a lasting impression on your audience with Quotes Buddy 2.0. Say goodbye to dull and uninspiring posts – ignite engagement and spark conversation with eye-catching visuals that reflect your unique style. Try Quotes Buddy 2.0 today and let your creativity shine!</p>
    <div class="image-viralquotes 2xl:w-[60%] xl:w-[60%] lg:w-[60%] md:w-[70%] sm:w-[70%] min-[320px]:w-[70%] mb-10 drop-shadow-[20px_10px_15px_rgba(0,0,0,0.8)]">
      <img src="./img/BoxMockup3.png" alt="ViralQuotes">
    </div>
    <div class="produk flex flex-wrap justify-center items-center gap-20 mt-10">
      <div class="front-end border-[3px] border-white rounded-3xl flex flex-col justify-center items-center 2xl:scale-100 xl:scale-100 lg:scale-100 md:scale-95 sm:scale-95 min-[320px]:scale-[0.85]">
        <div class="cont-frontend bg-[#2B53C2] rounded-tr-3xl rounded-tl-3xl py-3 px-10 text-white">
          <h3 class="font-bold text-2xl">Front End</h3>
          <p class="font-semibold">There are 15 Modules at the Front End sales page:</p>
        </div>
        <div class="flex flex-col justify-center items-center gap-20 mx-10 my-5">
          <div class="text-white text-left">
            <div class=" flex justify-start items-center gap-1">
              <p class="text-red-500">Life</p>
              <p>- Reels/Feed Templates</p>
            </div>
            <div class=" flex justify-start items-center gap-1">
              <p class="text-red-500">Happiness</p>
              <p>- Reels/Feed Templates</p>
            </div>
            <div class=" flex justify-start items-center gap-1">
              <p class="text-red-500">Struggle</p>
              <p>- Reels/Feed Templates</p>
            </div>
            <div class=" flex justify-start items-center gap-1">
              <p class="text-red-500">Love and Compassion</p>
              <p>- Reels/Feed Templates</p>
            </div>
            <div class=" flex justify-start items-center gap-1">
              <p class="text-red-500">Success</p>
              <p>- Reels/Feed Templates</p>
            </div>
            <div class=" flex justify-start items-center gap-1">
              <p class="text-red-500">Friendship</p>
              <p>- Reels/Feed Templates</p>
            </div>
            <div class=" flex justify-start items-center gap-1">
              <p class="text-red-500">Bussiness</p>
              <p>- Reels/Feed Templates</p>
            </div>
            <div class=" flex justify-start items-center gap-1">
              <p class="text-red-500">Sport</p>
              <p>- Reels/Feed Templates</p>
            </div>
            <div class=" flex justify-start items-center gap-1">
              <p class="text-red-500">Passion</p>
              <p>- Reels/Feed Templates</p>
            </div>
            <div class=" flex justify-start items-center gap-1">
              <p class="text-red-500">Travel/Adventure</p>
              <p>- Reels/Feed Templates</p>
            </div>
            <div class=" flex justify-start items-center gap-1">
              <p class="text-red-500">Fashion</p>
              <p>- Reels/Feed Templates</p>
            </div>
            <div class=" flex justify-start items-center gap-1">
              <p class="text-red-500">Health</p>
              <p>- Reels/Feed Templates</p>
            </div>
            <div class=" flex justify-start items-center gap-1">
              <p class="text-red-500">Teamwork</p>
              <p>- Reels/Feed Templates</p>
            </div>
            <div class=" flex justify-start items-center gap-1">
              <p class="text-red-500">Christmas</p>
              <p>- Reels/Feed Templates</p>
            </div>
            <div class=" flex justify-start items-center gap-1">
              <p class="text-red-500">Knowledge</p>
              <p>- Reels/Feed Templates</p>
            </div>
          </div>
        </div>
        <a href="#" class="salespage-button bg-[#FDAB0D] text-gray-100 font-semibold flex items-center gap-1 my-5 px-5 py-2 rounded-2xl">
          Preview of Sales Page
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
            <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z" />
          </svg>
        </a>
      </div>
      <div class="upsell border-[3px] border-white rounded-3xl flex flex-col justify-center items-center md::w-4/5 2xl:scale-100 xl:scale-100 lg:scale-100 md:scale-95 sm:scale-95 min-[320px]:scale-[0.8]">
        <div class="cont-upsell bg-[#2B53C2] rounded-tr-3xl rounded-tl-3xl py-3 px-10 w-full text-white">
          <h3 class="font-bold text-2xl">Upsell</h3>
          <p class="font-semibold">There are 30 Modules at the Upsell sales page:</p>
        </div>
        <div class="flex justify-center items-center gap-20 mx-10 my-5">
          <!-- Left -->
          <div class="text-white text-left">
            <div class=" flex justify-start items-center gap-1">
              <p class="text-red-500">Courage</p>
              <p>- Reels/Feed Templates</p>
            </div>
            <div class=" flex justify-start items-center gap-1">
              <p class="text-red-500">Inspiration</p>
              <p>- Reels/Feed Templates</p>
            </div>
            <div class=" flex justify-start items-center gap-1">
              <p class="text-red-500">Gratitude</p>
              <p>- Reels/Feed Templates</p>
            </div>
            <div class=" flex justify-start items-center gap-1">
              <p class="text-red-500">Persistence</p>
              <p>- Reels/Feed Templates</p>
            </div>
            <div class=" flex justify-start items-center gap-1">
              <p class="text-red-500">Dreams</p>
              <p>- Reels/Feed Templates</p>
            </div>
            <div class=" flex justify-start items-center gap-1">
              <p class="text-red-500">Positivity</p>
              <p>- Reels/Feed Templates</p>
            </div>
            <div class=" flex justify-start items-center gap-1">
              <p class="text-red-500">Change</p>
              <p>- Reels/Feed Templates</p>
            </div>
            <div class=" flex justify-start items-center gap-1">
              <p class="text-red-500">Patience</p>
              <p>- Reels/Feed Templates</p>
            </div>
            <div class=" flex justify-start items-center gap-1">
              <p class="text-red-500">Ambition</p>
              <p>- Reels/Feed Templates</p>
            </div>
            <div class=" flex justify-start items-center gap-1">
              <p class="text-red-500">Simplicity</p>
              <p>- Reels/Feed Templates</p>
            </div>
            <div class=" flex justify-start items-center gap-1">
              <p class="text-red-500">Unity</p>
              <p>- Reels/Feed Templates</p>
            </div>
            <div class=" flex justify-start items-center gap-1">
              <p class="text-red-500">Education</p>
              <p>- Reels/Feed Templates</p>
            </div>
            <div class=" flex justify-start items-center gap-1">
              <p class="text-red-500">Leadership</p>
              <p>- Reels/Feed Templates</p>
            </div>
            <div class=" flex justify-start items-center gap-1">
              <p class="text-red-500">Independence</p>
              <p>- Reels/Feed Templates</p>
            </div>
            <div class=" flex justify-start items-center gap-1">
              <p class="text-red-500">Balance</p>
              <p>- Reels/Feed Templates</p>
            </div>
          </div>
          <!-- Right -->
          <div class="text-white text-left">
            <div class=" flex justify-start items-center gap-1">
              <p class="text-red-500">Loyalty</p>
              <p>- Reels/Feed Templates</p>
            </div>
            <div class=" flex justify-start items-center gap-1">
              <p class="text-red-500">Honesty</p>
              <p>- Reels/Feed Templates</p>
            </div>
            <div class=" flex justify-start items-center gap-1">
              <p class="text-red-500">Acceptance</p>
              <p>- Reels/Feed Templates</p>
            </div>
            <div class=" flex justify-start items-center gap-1">
              <p class="text-red-500">Self Love</p>
              <p>- Reels/Feed Templates</p>
            </div>
            <div class=" flex justify-start items-center gap-1">
              <p class="text-red-500">Empathy</p>
              <p>- Reels/Feed Templates</p>
            </div>
            <div class=" flex justify-start items-center gap-1">
              <p class="text-red-500">Self Improvement</p>
              <p>- Reels/Feed Templates</p>
            </div>
            <div class=" flex justify-start items-center gap-1">
              <p class="text-red-500">Nature</p>
              <p>- Reels/Feed Templates</p>
            </div>
            <div class=" flex justify-start items-center gap-1">
              <p class="text-red-500">Fogiveness</p>
              <p>- Reels/Feed Templates</p>
            </div>
            <div class=" flex justify-start items-center gap-1">
              <p class="text-red-500">Kindness</p>
              <p>- Reels/Feed Templates</p>
            </div>
            <div class=" flex justify-start items-center gap-1">
              <p class="text-red-500">Reflection</p>
              <p>- Reels/Feed Templates</p>
            </div>
            <div class=" flex justify-start items-center gap-1">
              <p class="text-red-500">Imagination</p>
              <p>- Reels/Feed Templates</p>
            </div>
            <div class=" flex justify-start items-center gap-1">
              <p class="text-red-500">Hope</p>
              <p>- Reels/Feed Templates</p>
            </div>
            <div class=" flex justify-start items-center gap-1">
              <p class="text-red-500">Hardwork</p>
              <p>- Reels/Feed Templates</p>
            </div>
            <div class=" flex justify-start items-center gap-1">
              <p class="text-red-500">Communication</p>
              <p>- Reels/Feed Templates</p>
            </div>
            <div class=" flex justify-start items-center gap-1">
              <p class="text-red-500">Justice</p>
              <p>- Reels/Feed Templates</p>
            </div>
          </div>
        </div>
        <a href="#" class="salespage-button bg-[#FDAB0D] text-gray-100 font-semibold flex items-center gap-1 my-5 px-5 py-2 rounded-2xl">
          Preview of Sales Page
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
            <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z" />
          </svg>
        </a>
      </div>
    </div>
    <div class="my-10 w-4/5 text-white">
      <p><span class="font-bold">Quotes Buddy 2.0</span> is your go-to tool for creating captivating and impactful content without breaking the bank. With its intuitive interface and extensive library of themes, Quotes Buddy 2.0 caters to users of all skill levels and budgets, ensuring that anyone can effortlessly produce stunning visuals that resonate with their audience and drive results. Say goodbye to complex software and hello to limitless creativity with Quotes Buddy 2.0 – the ultimate companion for achieving your digital marketing goals.</p>
    </div>
    <div class="px-20">
      <h3 class="text-white font-semibold mb-5 text-lg">Here are some specific examples of how Quotes Buddy 2.0 can be used by different professions:</h3>
      <div class="gap-4 flex justify-center items-center">
        <!-- Left -->
        <div>
          <div class="flex items-center gap-5 specific-explain border-[3px] border-white px-4 py-2 rounded-2xl mb-3 text-left">
            <div class="text-red-500">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase-fill" viewBox="0 0 16 16">
                <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5" />
                <path d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85z" />
              </svg>
            </div>
            <div>
              <h3 class="text-red-500">A small business owner can use Quotes Buddy 2.0 to create video ads</h3>
              <h3 class="text-white">for their products or services.</h3>
            </div>
          </div>
          <div class="flex items-center gap-5 specific-explain border-[3px] border-white px-4 py-2 rounded-2xl mb-3 text-left">
            <div class="text-red-500">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-collection-play-fill" viewBox="0 0 16 16">
                <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6zm6.258-6.437a.5.5 0 0 1 .507.013l4 2.5a.5.5 0 0 1 0 .848l-4 2.5A.5.5 0 0 1 6 12V7a.5.5 0 0 1 .258-.437" />
              </svg>
            </div>
            <div>
              <h3 class="text-red-500">A social media influencer can use Quotes Buddy 2.0 to create engaging</h3>
              <h3 class="text-white">and informative videos for their followers.</h3>
            </div>
          </div>
          <div class="flex items-center gap-5 specific-explain border-[3px] border-white px-4 py-2 rounded-2xl mb-3 text-left">
            <div class="text-red-500">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-workspace" viewBox="0 0 16 16">
                <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                <path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.4 5.4 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2z" />
              </svg>
            </div>
            <div>
              <h3 class="text-red-500">A freelance videographer can use Quotes Buddy 2.0 to create video</h3>
              <h3 class="text-white">templates that they can sell to their clients.</h3>
            </div>
          </div>
        </div>
        <!-- Right -->
        <div>
          <div>
            <div class="flex items-center gap-5 specific-explain border-[3px] border-white px-4 py-2 rounded-2xl mb-3 text-left">
              <div class="text-red-500">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-backpack4-fill" viewBox="0 0 16 16">
                  <path d="M8 0a2 2 0 0 0-2 2H3.5a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h4v.5a.5.5 0 0 0 1 0V7h4a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H10a2 2 0 0 0-2-2m1 2a1 1 0 0 0-2 0zm-4 9v2h6v-2h-1v.5a.5.5 0 0 1-1 0V11z" />
                  <path d="M14 7.599A3 3 0 0 1 12.5 8H9.415a1.5 1.5 0 0 1-2.83 0H3.5A3 3 0 0 1 2 7.599V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5z" />
                </svg>
              </div>
              <div>
                <h3 class="text-red-500">An educator can use Quotes Buddy 2.0 to create educational videos for</h3>
                <h3 class="text-white">their students, such as video lectures, tutorials, and demonstrations.</h3>
              </div>
            </div>
            <div class="flex items-center gap-5 specific-explain border-[3px] border-white px-4 py-2 rounded-2xl mb-3 text-left">
              <div class="text-red-500">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                  <path d="M4 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z" />
                  <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1zm11 0H3v14h3v-2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V15h3z" />
                </svg>
              </div>
              <div>
                <h3 class="text-red-500">A nonprofit organization can use Quotes Buddy 2.0 to create</h3>
                <h3 class="text-white">fundraising and awareness videos for their cause.</h3>
              </div>
            </div>
            <div class="flex items-center gap-5 specific-explain border-[3px] border-white px-4 py-2 rounded-2xl mb-3 text-left">
              <div class="text-red-500">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0" />
                  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                </svg>
              </div>
              <div>
                <h3 class="text-red-500">Overall, Quotes Buddy 2.0 is a versatile tool that can be used by anyone</h3>
                <h3 class="text-white">who wants to create high-quality video content.</h3>
              </div>
            </div>
          </div>
        </div>
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

  <!-- Affiliate Contest -->
  <section class="affiliate-contest flex flex-col justify-center items-center bg-gray-200 pb-16 pt-20 bg-[url('./img/bg-abstrak2.png')] bg-no-repeat bg-center bg-cover" id="contest">
    <h1 class="text-slate-800 font-extrabold text-4xl">Affiliate Contest</h1>
    <h3 class="text-slate-800 font-medium text-center w-4/5 py-5">By promoting our product, you are not only get instant commission but also you can win extra cash from contest prize! The Affiliate Contest is 5 days, starting from <b>10 March 2024</b> at 9 am est and end <b>14 March 2024</b> at 12 am est.</h3>
    <img class="w-4/5" src="./img/Piala.png" alt="Prize">
    <div class="affiliate-desc px-[20%] py-10">
      <p>Top 2 Prize Positions have minimum requirements. Slot 3, 4 and 5 have no minimum number of sales but are commission based.</p>
      <div class="position bg-[#171E31] border-[3px] border-[#FDAB0D] py-5 pl-10 pr-5 text-white rounded-2xl my-5">
        <div class="flex items-center gap-2 text-white">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
          </svg>
          <p>Position 1st must-have generated 30 front end sales to win $300.</p>
        </div>
        <div class="flex items-center gap-2 text-white">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
          </svg>
          <p>Position 2nd must-have generated 20 front end sales to win $200.</p>
        </div>
        <div class="flex items-center gap-2 text-white">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
          </svg>
          <p>Next positions must-have generated front end commissions that are more than or equal to the prize.</p>
        </div>
      </div>
      <p class="pb-5">If minimun sales for prize position #1 and #2 are not met, then only prizes 3, 4 and 5 will be delivered to top affilaites</p>
      <p>Teams of up to 2 are allowed for the contest. The leaderboard will be based on the front end sales during <b>5 days</b> launch ending on <b>14 March 2024</b> midnight at 23:59 EST.</p>
    </div>
  </section>

  <section class="sales-funnel bg-[url('./img/bg-dark.png')] bg-no-repeat bg-cover flex flex-col justify-center items-center py-16">
    <h1 class="sales-funnel-tittle text-[#FDAB0D] font-extrabold text-4xl">Sales Funnel</h1>
    <h3 class="text-white w-4/5 text-center py-3">Our sales funnel will generate more profit for you, enjoy multiple commission from our high converting sales funnel.</h3>
    <div class="flex flex-wrap justify-center items-center gap-5 mt-5">
      <div class="sales-funnel-item border-[3px] border-white w-40 min-w-36 rounded-2xl p-5">
        <p class="bg-white text-center rounded-lg font-semibold text-sm">Front end</p>
        <p class="sales-funnel-prize text-[#FDAB0D] text-center font-extrabold text-3xl py-5">$19</p>
        <p class="text-white text-center font-semibold">50%</p>
        <p class="text-white text-center font-semibold">Commission</p>
      </div>
      <div class="sales-funnel-item border-[3px] border-white w-40 min-w-36 rounded-2xl p-5">
        <p class="bg-white text-center rounded-lg font-semibold text-sm">Upsell</p>
        <p class="sales-funnel-prize text-[#FDAB0D] text-center font-extrabold text-3xl py-5">$37</p>
        <p class="text-white text-center font-semibold">50%</p>
        <p class="text-white text-center font-semibold">Commission</p>
      </div>
      <div class="sales-funnel-item border-[3px] border-white w-40 min-w-36 rounded-2xl p-5">
        <p class="bg-white text-center rounded-lg font-semibold text-sm">Downsell</p>
        <p class="sales-funnel-prize text-[#FDAB0D] text-center font-extrabold text-3xl py-5">$27</p>
        <p class="text-white text-center font-semibold">50%</p>
        <p class="text-white text-center font-semibold">Commission</p>
      </div>
      <div class="sales-funnel-item border-[3px] border-white w-40 min-w-36 rounded-2xl p-5">
        <p class="bg-white text-center rounded-lg font-semibold text-sm">Upsell 2</p>
        <p class="sales-funnel-prize text-[#FDAB0D] text-center font-extrabold text-3xl py-5">$49</p>
        <p class="text-white text-center font-semibold">50%</p>
        <p class="text-white text-center font-semibold">Commission</p>
      </div>
    </div>
  </section>

  <!-- Affiliate -->
  <section class="affiliate3 bg-[url('./img/bg-dark2.png')] bg-cover bg-center bg-fixed bg-no-repeat pb-16 pt-20" id="affiliate">
    <h1 class="affiliate-link-tittle text-[#FDAB0D] font-extrabold text-4xl text-center">Affiliate Link</h1>
    <h3 class="text-white text-center font-medium mt-2">Get Your Affiliate Link Now</h3>
    <div class="flex flex-wrap justify-center items-center w-full mt-10 gap-20">
      <div class="form-container w-1/3 min-w-[465px] border-[4px] border-[#FDAB0D] bg-gradient-to-b from-gray-50 via-gray-100 to-gray-200 p-10 rounded-2xl drop-shadow-2xl">
        <p class="text-3xl font-bold text-center pb-5">Submit</p>
        <p class="text-gray-500 text-center">Submit your email to get update on launch and update information</p>
        <form class="mt-7" action="">
          <label class="font-semibold ">Name</label>
          <input class="form-input border-[1px] border-[#171E31] ml-2 px-3 py-1 rounded-md my-1 w-full mt-2 mb-4" type="text" name="name" placeholder="Your name" required minlength="3">
          <label class="font-semibold">Email</label>
          <input class="form-input border-[1px] border-[#171E31] ml-2 px-3 py-1 rounded-md my-1 w-full mt-2 mb-4" type="email" name="affiliate" placeholder="Your email" required minlength="3">
          <button class="form-button bg-[#FDAB0D] float-end mt-5 px-4 py-2 rounded-2xl text-white font-bold hover:bg-yellow-500 hover:scale-105 duration-200">Subscribe</button>
        </form>
      </div>
      <div class="w-1/3 min-w-96 flex flex-col items-center justify-center">
        <div>
          <img src="./img/affiliate.png" alt="affiliate">
        </div>
        <button class="affiliate-link-button bg-[#FDAB0D] font-semibold text-white flex items-center gap-2 px-4 py-2 rounded-xl mt-7 hover:bg-yellow-500 hover:scale-105 duration-200">
          Get Affiliate Link
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
            <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z" />
          </svg>
        </button>
      </div>
    </div>

    <!-- Promotion -->
    <div class="promotion flex flex-col justify-center items-center pt-32 pb-10" id="promotion">
      <h1 class="promotion-tittle text-[#FDAB0D] text-4xl font-extrabold w-4/5 text-center">Promotion Tools</h1>
      <h3 class="text-center text-white w-4/5 mt-3">We provide you with complete promotion tools, such as email swipes, Bonus page html, auto generate bonus page, promotion banner and more, use this promotion tools to save your valuable time.</h3>
      <div class="flex flex-wrap justify-center items-center gap-20 py-16">
        <div class="w-1/3 min-w-96">
          <img src="./img/Bonus.png" alt="">
        </div>
        <div class="form-container w-1/3 min-w-[465px] border-[4px] border-[#FDAB0D] bg-gradient-to-b from-gray-50 via-gray-100 to-gray-200 p-10 rounded-2xl drop-shadow-2xl">
          <p class="text-3xl font-bold text-center pb-5">Bonus Page Generator</p>
          <p class="text-gray-500 text-center">This is bonuspage generator, you can automatically generate bonuspage by inserting your name and affiliate link bellow.</p>
          <p class="text-center py-5">After inserting and submit the name and afflink, you will be redirected to bonus page, copy the url and start promoting ReelFire using the url link.</p>

          <?php

          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $_SESSION["name"] = $_POST["name"];
            $_SESSION["link"] = $_POST["link"];
            header("Location: ../Bonus Page/index.php");
            exit();
          }
          ?>

          <?php
          if (isset($_SESSION["name"]) && isset($_SESSION["link"])) { ?>
            <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
              <label class="font-semibold">Insert Your Name</label>
              <input class="form-input border-[1px] border-[#171E31] ml-2 px-3 py-1 rounded-md my-1 w-full mt-2 mb-4" type="text" id="nameInput" name="name" placeholder="Your name" required minlength="3">
              <label class="font-semibold mt-2 mb-4">Insert Your Full Affiliate Link</label>
              <input class="form-input border-[1px] border-[#171E31] ml-2 px-3 py-1 rounded-md my-1 w-full mt-2 mb-4" type="text" id="affiliateInput" name="affiliate" placeholder="Your Full Affiliate Link" required>
              <button class=" bg-[#FDAB0D] promotion-button float-end mt-5 px-4 py-2 rounded-2xl text-white font-bold hover:bg-yellow-500 hover:scale-105 duration-200">Generate Bonus Page</button>
            </form>
          <?php } else { ?>
            <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
              <label class="font-semibold">Insert Your Name</label>
              <input class="form-input border-[1px] border-[#171E31] ml-2 px-3 py-1 rounded-md my-1 w-full mt-2 mb-4" type="text" id="nameInput" name="name" placeholder="Your name" required minlength="3">
              <label class="font-semibold mt-2 mb-4">Insert Your Full Affiliate Link</label>
              <input class="form-input border-[1px] border-[#171E31] ml-2 px-3 py-1 rounded-md my-1 w-full mt-2 mb-4" type="text" id="affiliateInput" name="affiliate" placeholder="Your Full Affiliate Link" required>
              <button class=" bg-[#FDAB0D] promotion-button float-end mt-5 px-4 py-2 rounded-2xl text-white font-bold hover:bg-yellow-500 hover:scale-105 duration-200">Generate Bonus Page</button>
            </form>
          <?php } ?>

        </div>
      </div>
      <div class="text-white font-bold flex flex-wrap justify-center items-center gap-5 px-10">
        <a class="link-page-promotion bg-[#FDAB0D] flex justify-center items-center gap-2 px-4 py-2 rounded-xl drop-shadow-2xl hover:bg-yellow-500 hover:scale-105 duration-200" href="">Download HTML Bonus Page
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
            <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z" />
          </svg>
        </a>
        <a class="link-page-promotion bg-[#FDAB0D] flex justify-center items-center gap-2 px-4 py-2 rounded-xl drop-shadow-2xl hover:bg-yellow-500 hover:scale-105 duration-200" href="../Sales Page/sales_page.html">Sales Page Preview
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
            <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z" />
          </svg>
        </a>
        <a class="link-page-promotion bg-[#FDAB0D] flex justify-center items-center gap-2 px-4 py-2 rounded-xl drop-shadow-2xl hover:bg-yellow-500 hover:scale-105 duration-200" href="">Email Swipes
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
            <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z" />
          </svg>
        </a>
        <a class="link-page-promotion bg-[#FDAB0D] flex justify-center items-center gap-2 px-4 py-2 rounded-xl drop-shadow-2xl hover:bg-yellow-500 hover:scale-105 duration-200" href="../Bonus Page/Bonus.php">Bonus Page Preview
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
            <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z" />
          </svg>
        </a>
      </div>
    </div>
  </section>

  <!-- Terms & Conditions -->
  <section class="terms-condition bg-[url('./img/bg-abstrak1.png')] bg-cover bg-center bg-fixed bg-no-repeat flex justify-center items-center p-10">
    <div class="terms-condition-container bg-[url('./img/bg-merah2.png')] bg-cover bg-center bg-no-repeat border-[15px] border-[#FDAB0D] rounded-3xl p-10">
      <h1 class="text-white font-extrabold text-3xl text-center mt-5 mb-16">Affiliate Promotion Terms & Conditions</h1>
      <div class="flex flex-wrap justify-center items-center gap-20">
        <div class="terms-condition-desc w-[60%] min-w-[400px]">
          <h3 class="text-white font-semibold text-base mb-3 2xl:text-lg">Before joining this affiliate program, please read carefully and agree to the following rules:</h3>
          <div>
            <div class="pl-4">
              <div class="text-white flex gap-2 mb-3 font-normal text-sm 2xl:text-base">
                <p>1.</p>
                <p>You cannot use a 3rd party system to send email promotions. All email contacts must be your own opt-in email list.</p>
              </div>
              <div class="text-white flex gap-2 mb-3 font-normal text-sm 2xl:text-base">
                <p>2.</p>
                <p>You cannot use paid to click traffic, click exchange traffic, cheap traffic, or any other junk traffic.</p>
              </div>
              <div class="text-white flex gap-2 mb-3 font-normal xl:text-sm 2xl:text-base">
                <p>3.</p>
                <p>You cannot run negative PPC or iframe domain campaigns. This creates a bad image for the company and will result in immediate termination from the program.</p>
              </div>
              <div class="text-white flex gap-2 mb-3 font-normal xl:text-sm 2xl:text-base">
                <p>4.</p>
                <p>You cannot earn commission on your own purchases.</p>
              </div>
              <div class="text-white flex gap-2 mb-3 font-normal xl:text-sm 2xl:text-base">
                <p>5.</p>
                <p>If you have a new affiliate account, your payments will be delayed until you have a good track record.</p>
              </div>
              <div class="text-white flex gap-2 mb-3 font-normal xl:text-sm 2xl:text-base">
                <p>6.</p>
                <p>You must accurately represent the product and its features and benefits to customers. Misleading claims, inaccurate information, or false testimonials will result in immediate termination from the program.</p>
              </div>
              <div class="text-white flex gap-2 mb-3 font-normal xl:text-sm 2xl:text-base">
                <p>7.</p>
                <p>Bonuses from this page can only be used to promote ReelFire. You cannot re-use, re-sell, redistribute, copy, or edit any of the bonus content.</p>
              </div>
            </div>
          </div>
          <h3 class="text-white font-medium text-base 2xl:text-lg">Last Updated : <span class="font-bold">March 2024</span></h3>
        </div>
        <div class="terms-condition-img w-[30%] min-w-[380px]">
          <img src="./img/warning.png" alt="warning">
        </div>
      </div>
    </div>
  </section>

  <script src="JV_Page.js"></script>
</body>

</html>