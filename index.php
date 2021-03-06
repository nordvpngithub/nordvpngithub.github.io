<!DOCTYPE html>
<? 
include "config.php";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?=$name;?>VPN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Fontawesome -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.0.9/css/all.css"
      integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1"
      crossorigin="anonymous"
    />
    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/main.css" />
  </head>
  <body id="top">
    <!-- Header -->
    <header class="header">
      <div class="navigation">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-2">
              <a href="#" class="logo">
                <?=$name;?><span class="logo__blue">VPN</span
                ><span class="logo__span">™</span>
              </a>
            </div>
            <div class="col-lg-5 d-flex justify-content-lg-start">
              <ul class="menu d-flex">
                <li class="menu__item">
                  <a href="#features" class="menu__link">
                    Features
                  </a>
                </li>
                <li class="menu__item">
                  <a href="#serv" class="menu__link">
                    Servers
                  </a>
                </li>
                <li class="menu__item">
                  <a href="#rev" class="menu__link">
                    Reviews
                  </a>
                </li>
                <li class="menu__item">
                  <a href="#faq" class="menu__link">
                    F.A.Q
                  </a>
                </li>
               
              </ul>
            </div>
            <div class="col-lg-5 d-flex justify-content-end">
              <div class="download d-flex">
                <button type="button" class="language d-flex align-items-center">
                </button>
                <a href="download.php" class="menu-button">
                  Download now
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="offer-part">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="offer">
                <h1 class="offer__title">
                  <span class="offer__text">Keep your connection</span><br />
                  World’s Best <span class="offer__span">VPN Service</span>
                  Provider In 2020
                </h1>
                <p class="offer__paragraph">
                  You know a VPN that always connects is rare. Download now an
                  instant free membership.
                </p>
                <div class="offer-social">
                  <!--noindex--><a
                    href="#"
                    rel="nofollow"
                    target="_blank"
                    class="offer-social__link"
                  >
                  <i class="fab fa-linkedin"></i>
                     </a
                  ><!--/noindex-->
                  <!--noindex--><a
                    href="#"
                    rel="nofollow"
                    target="_blank"
                    class="offer-social__link"
                  >
                  <i class="fab fa-facebook-f"></i>
                     </a
                  ><!--/noindex-->
                  <!--noindex--><a
                    href="#"
                    rel="nofollow"
                    target="_blank"
                    class="offer-social__link"
                  >
                  <i class="fab fa-twitter"></i> </a
                  ><!--/noindex-->
                </div>
              </div>
              <div class="get-it d-flex align-items-center">
                <a href="download.php" class="get-it__button">
                  <i class="fab fa-windows"></i>
                  Windows Get <?=$name;?>VPN now
                </a>
               
              </div>
              <p class="get-it__text">
                Trustpilot
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </p>
              <p class="get-it__paragraph">
                4,6 out of 5 based on 342 reviews
              </p>
            </div>
            <div class="col-lg-6">
              <div class="offer-image">
                <img
                  src="img/main.jpg"
                  alt="offer-image"
                  class="offer-image__img"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Header END -->

    <!-- Section Advantages -->
    <section class="advantages">
      <div class="container">
        <div class="row">
          <div class="col d-flex justify-content-center">
            <div class="advantages-title text-center">
              <h2 class="advantages-title__title text-cente" id="features">
                Here’s what you get with the full-featured <?=$name;?><span
                  class="advantages-title__span"
                  >VPN</span
                >
                software
              </h2>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4">
              <div class="advantage advantage_first">
                <img
                  src="img/world.svg"
                  alt="world-image"
                  class="advantage__img"
                />
                <h3 class="advantage__title">Access global content</h3>
                <p class="advantage__text">
                  Some content is only available in certain<br />
                  regions. <?=$name;?> changes your virtual location so you can
                  see it anywhere.
                </p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="advantage advantage_second">
                <img
                  src="img/finger.svg"
                  alt="finger-image"
                  class="advantage__img"
                />
                <h3 class="advantage__title">One-click <?=$name;?></h3>
                <p class="advantage__text">
                  Just hit the Quick Connect button and the special<br />
                  algorithm will find the best server for you depending on
                  distance, load, and other parameters.
                </p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="advantage">
                <img
                  src="img/wifi.svg"
                  alt="wifi-image"
                  class="advantage__img"
                />
                <h3 class="advantage__title">Reliable encryption</h3>
                <p class="advantage__text">
                  Stay safe when browsing on public Wi-Fi or any other network.
                  <?=$name;?>VPN secures your data with military-grade encryption.
                </p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="advantage">
                <img
                  src="img/rocket.svg"
                  alt="rocket-image"
                  class="advantage__img"
                />
                <h3 class="advantage__title">Kill Switch</h3>
                <p class="advantage__text">
                  If the VPN connection unexpectedly drops, the Kill Switch
                  blocks your device (or the apps you have specified) from
                  accessing the web.
                </p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="advantage">
                <img
                  src="img/comp.svg"
                  alt="computer-image"
                  class="advantage__img"
                />
                <h3 class="advantage__title">Multiple devices</h3>
                <p class="advantage__text">
                  With a single account, you can set up <?=$name;?>VPN on 6 gadgets at
                  the same time, including your smart TV and router.
                </p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="advantage">
                <img src="img/sms.svg" alt="sms-image" class="advantage__img" />
                <h3 class="advantage__title">Support 24/7</h3>
                <p class="advantage__text">
                  Get assistance around the clock, whenever you need it. You can
                  live chat with our customer care team or send us an email.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section Advantages END -->

    <!-- Section Providers -->
    <section class="providers">
      <div class="container">
        <div class="row">
          <div class="col d-flex justify-content-center">
            <div class="providers-title text-center">
              <h2 class="providers-title__title" id="serv">
                Our server is place in 15 сountries to make our service never
                get down
              </h2>
              <p class="providers-title__text text-center">
                Discover something new, or tunnel back home to enjoy your
                favourite websites and apps while travelling or living abroad.
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="provider-points">
              <img
                src="img/Group.svg"
                alt="world-image"
                class="provider-points__img"
              />
              <img
                src="img/google.svg"
                alt="google-image"
                class="provider-points__image"
              />
              <div class="first-point"></div>
              <div class="second-point"></div>
              <div class="third-point"></div>
              <div class="fourth-point"></div>
              <div class="fifth-point"></div>
              <div class="sixth-point"></div>
              <div class="seventh-point"></div>
              <div class="eighth-point"></div>
              <div class="nineth-point"></div>
            <div class="provider-points__content provider-points__content_first">
              <div class="provider-points__block">
               <div class="first-part">
                <p class="first-part__text">
                  Iran <i class="fas fa-info-circle"></i>
                  <span> Providers in region</span>
                </p>
               </div>
                <div class="second-part">
                  <p class="second-part__text"> 
                    <i class="fas fa-wifi"></i>
                    Providers in region
                  </p>
                  <p class="second-part__text">
                    <i class="fas fa-wifi"></i>
                    Providers in region
                  </p class="second-part__text">
                  <p class="second-part__text">
                    <i class="fas fa-wifi"></i>
                    Providers in region
                  </p>
                  <p class="second-part__text">
                    <i class="fas fa-wifi"></i>
                    Providers in region
                  </p>
                  <p class="second-part__text">
                    <i class="fas fa-wifi"></i>
                    Providers in region
                  </p>
                </div>
              </div>
            </div>
            <div class="provider-points__content provider-points__content_second">
              <div class="provider-points__block">
               <div class="first-part">
                <p class="first-part__text">
                  Canada <i class="fas fa-info-circle"></i>
                  <span> Providers in region</span>
                </p>
               </div>
                <div class="second-part">
                  <p class="second-part__text"> 
                    <i class="fas fa-wifi"></i>
                    Providers in region
                  </p>
                  <p class="second-part__text">
                    <i class="fas fa-wifi"></i>
                    Providers in region
                  </p class="second-part__text">
                  <p class="second-part__text">
                    <i class="fas fa-wifi"></i>
                    Providers in region
                  </p>
                  <p class="second-part__text">
                    <i class="fas fa-wifi"></i>
                    Providers in region
                  </p>
                  <p class="second-part__text">
                    <i class="fas fa-wifi"></i>
                    Providers in region
                  </p>
                </div>
              </div>
            </div>
            <div class="provider-points__content provider-points__content_third">
              <div class="provider-points__block">
               <div class="first-part">
                <p class="first-part__text">
                  Northern Island <i class="fas fa-info-circle"></i>
                  <span> Providers in region</span>
                </p>
               </div>
                <div class="second-part">
                  <p class="second-part__text"> 
                    <i class="fas fa-wifi"></i>
                    Providers in region
                  </p>
                  <p class="second-part__text">
                    <i class="fas fa-wifi"></i>
                    Providers in region
                  </p class="second-part__text">
                  <p class="second-part__text">
                    <i class="fas fa-wifi"></i>
                    Providers in region
                  </p>
                  <p class="second-part__text">
                    <i class="fas fa-wifi"></i>
                    Providers in region
                  </p>
                  <p class="second-part__text">
                    <i class="fas fa-wifi"></i>
                    Providers in region
                  </p>
                </div>
              </div>
            </div>
            <div class="provider-points__content provider-points__content_fourth">
              <div class="provider-points__block">
               <div class="first-part">
                <p class="first-part__text">
                  Cuba <i class="fas fa-info-circle"></i>
                  <span> Providers in region</span>
                </p>
               </div>
                <div class="second-part">
                  <p class="second-part__text"> 
                    <i class="fas fa-wifi"></i>
                    Providers in region
                  </p>
                  <p class="second-part__text">
                    <i class="fas fa-wifi"></i>
                    Providers in region
                  </p class="second-part__text">
                  <p class="second-part__text">
                    <i class="fas fa-wifi"></i>
                    Providers in region
                  </p>
                  <p class="second-part__text">
                    <i class="fas fa-wifi"></i>
                    Providers in region
                  </p>
                  <p class="second-part__text">
                    <i class="fas fa-wifi"></i>
                    Providers in region
                  </p>
                </div>
              </div>
            </div>
            <div class="provider-points__content provider-points__content_fifth">
              <div class="provider-points__block">
               <div class="first-part">
                <p class="first-part__text">
                 Southern Island <i class="fas fa-info-circle"></i>
                  <span> Providers in region</span>
                </p>
               </div>
                <div class="second-part">
                  <p class="second-part__text"> 
                    <i class="fas fa-wifi"></i>
                    Providers in region
                  </p>
                  <p class="second-part__text">
                    <i class="fas fa-wifi"></i>
                    Providers in region
                  </p class="second-part__text">
                  <p class="second-part__text">
                    <i class="fas fa-wifi"></i>
                    Providers in region
                  </p>
                  <p class="second-part__text">
                    <i class="fas fa-wifi"></i>
                    Providers in region
                  </p>
                  <p class="second-part__text">
                    <i class="fas fa-wifi"></i>
                    Providers in region
                  </p>
                </div>
              </div>
            </div>
            <div class="provider-points__content provider-points__content_sixth">
              <div class="provider-points__block">
               <div class="first-part">
                <p class="first-part__text">
                  Russian <i class="fas fa-info-circle"></i>
                  <span> Providers in region</span>
                </p>
               </div>
                <div class="second-part">
                  <p class="second-part__text"> 
                    <i class="fas fa-wifi"></i>
                    Providers in region
                  </p>
                  <p class="second-part__text">
                    <i class="fas fa-wifi"></i>
                    Providers in region
                  </p class="second-part__text">
                  <p class="second-part__text">
                    <i class="fas fa-wifi"></i>
                    Providers in region
                  </p>
                  <p class="second-part__text">
                    <i class="fas fa-wifi"></i>
                    Providers in region
                  </p>
                  <p class="second-part__text">
                    <i class="fas fa-wifi"></i>
                    Providers in region
                  </p>
                </div>
              </div>
            </div>
            <div class="provider-points__content provider-points__content_seventh">
              <div class="provider-points__block">
               <div class="first-part">
                <p class="first-part__text">
                  Poland <i class="fas fa-info-circle"></i>
                  <span> Providers in region</span>
                </p>
               </div>
                <div class="second-part">
                  <p class="second-part__text"> 
                    <i class="fas fa-wifi"></i>
                    Providers in region
                  </p>
                  <p class="second-part__text">
                    <i class="fas fa-wifi"></i>
                    Providers in region
                  </p class="second-part__text">
                  <p class="second-part__text">
                    <i class="fas fa-wifi"></i>
                    Providers in region
                  </p>
                  <p class="second-part__text">
                    <i class="fas fa-wifi"></i>
                    Providers in region
                  </p>
                  <p class="second-part__text">
                    <i class="fas fa-wifi"></i>
                    Providers in region
                  </p>
                </div>
              </div>
            </div>
            <div class="provider-points__content provider-points__content_eighth">
              <div class="provider-points__block">
               <div class="first-part">
                <p class="first-part__text">
                  East Island <i class="fas fa-info-circle"></i>
                  <span> Providers in region</span>
                </p>
               </div>
                <div class="second-part">
                  <p class="second-part__text"> 
                    <i class="fas fa-wifi"></i>
                    Providers in region
                  </p>
                  <p class="second-part__text">
                    <i class="fas fa-wifi"></i>
                    Providers in region
                  </p class="second-part__text">
                  <p class="second-part__text">
                    <i class="fas fa-wifi"></i>
                    Providers in region
                  </p>
                  <p class="second-part__text">
                    <i class="fas fa-wifi"></i>
                    Providers in region
                  </p>
                  <p class="second-part__text">
                    <i class="fas fa-wifi"></i>
                    Providers in region
                  </p>
                </div>
              </div>
            </div>
            <div class="provider-points__content provider-points__content_nineth">
              <div class="provider-points__block">
               <div class="first-part">
                <p class="first-part__text">
                  Australia <i class="fas fa-info-circle"></i>
                  <span> Providers in region</span>
                </p>
               </div>
                <div class="second-part">
                  <p class="second-part__text"> 
                    <i class="fas fa-wifi"></i>
                    Providers in region
                  </p>
                  <p class="second-part__text">
                    <i class="fas fa-wifi"></i>
                    Providers in region
                  </p class="second-part__text">
                  <p class="second-part__text">
                    <i class="fas fa-wifi"></i>
                    Providers in region
                  </p>
                  <p class="second-part__text">
                    <i class="fas fa-wifi"></i>
                    Providers in region
                  </p>
                  <p class="second-part__text">
                    <i class="fas fa-wifi"></i>
                    Providers in region
                  </p>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section Providers END -->

    <!-- Section Reviews -->
    <section class="reviews">
      <div class="container">
        <div class="row">
          <div class="col d-flex justify-content-center">
            <div class="reviews-title text-center">
              <h2 class="reviews-title__title" id="rev">
                Hundredss of satisfied reviews
              </h2>
              <p class="reviews-title__text">
                People say the nicest things about <?=$name;?>VPN.
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="button" class="swiper-button-prev">
						</button>
						<button type="button" class="swiper-button-next">
						</button>
            <div class="slider swiper-container d-flex justify-content-center">
              <div class="swiper-wrapper d-flex justify-content-center">
                <article class="slide swiper-slide slide_first">
                  <div class="slide__image d-flex align-items-center">
                    <img src="img/serenity.png" alt="Serenity-Fisher-photo" class="slide__img">
                    <h5 class="slide__title d-flex flex-column">
                      Serenity Fisher
                      <span>@SerenityFisher</span>
                    </h5>
                  </div>
               	   <!--noindex--><a
                    href="#"
                    rel="nofollow"
                    target="_blank"
                    class="slide__link"
                  >
                    <i class="fab fa-twitter twit"></i> </a
                  ><!--/noindex-->
                  <div class="massage">
                   <p class="massage__mas massage__mas_last">
                    Best VPN ever. Get <?=$name;?>VPN
                    and Enjoy Netflix. 🔥🔥🔥
                   </p>
                   <p class="massage__time">
                    <time datetime="07.02.20">
                      11:44 PM · Feb 7, 2020
                    </time>
                   </p>
                  </div>
                </article>
                <article class="slide swiper-slide">
                  <div class="slide__image d-flex align-items-center">
                    <img src="img/pat.png" alt="Serenity-Fisher-photo" class="slide__img">
                    <h5 class="slide__title d-flex flex-column">
                      Pat Cooper
                      <span>@PatCooper</span>
                    </h5>
                  </div>
               	   <!--noindex--><a
                    href="#"
                    rel="nofollow"
                    target="_blank"
                    class="slide__link"
                  >
                    <i class="fab fa-twitter twit"></i> </a
                  ><!--/noindex-->
                  <div class="massage">
                   <p class="massage__mas">
                    I love your service. It's consistently
                    reliable, and the proxy servers work
                    at high speed. I highly recommend it.
                   </p>
                   <p class="massage__time">
                    <time datetime="07.02.20">
                      11:44 PM · Feb 7, 2020
                    </time>
                   </p>
                  </div>
                </article>
                <article class="slide swiper-slide">
                  <div class="slide__image d-flex align-items-center">
                    <img src="img/irma.png" alt="Serenity-Fisher-photo" class="slide__img">
                    <h5 class="slide__title d-flex flex-column">
                      Irma Richards
                      <span>@IrmaRichards</span>
                    </h5>
                  </div>
               	   <!--noindex--><a
                    href="#"
                    rel="nofollow"
                    target="_blank"
                    class="slide__link"
                  >
                    <i class="fab fa-twitter twit"></i> </a
                  ><!--/noindex-->
                  <div class="massage">
                   <p class="massage__mas">
                    <?=$name;?>VPN is fantastic! Excellent apps
                    for Windows; lots of super fast servers
                    across the world!
                   </p>
                   <p class="massage__time">
                    <time datetime="07.02.20">
                      11:44 PM · Feb 7, 2020
                    </time>
                   </p>
                  </div>
                </article>  
          </div>  
        </div>
      </div>
      </div>
    </div>
  </section>

    <!-- Section Reviews END -->

    <!-- Section Questions -->
    <section class="questions">
      <div class="container">
        <div class="row">
          <div class="col d-flex justify-content-center">
            <h2 class="questions-title" id="faq">
              Frequently asked questions
            </h2>
          </div>
        </div>
        <div class="row">
          <div class="col d-flex justify-content-center">
           
          </div>
        </div>
        <div class="row">
          <div class="col d-flex justify-content-center">
            <div class="question">
              <i class="fas fa-angle-right"></i>
              <h4 class="question__title">
                What is SOCKS and HTTP proxy?
              </h4>
              <div class="question-text">
                <p class="question-text__paragraph">
                  A proxy server, or a “proxy,” is a device that acts as a
                  gateway between a local network (e.g., all the computers at
                  one company or in one building) and a larger-scale network
                  such as the Internet. When you try to access a website or any
                  other resource available from various servers over the
                  Internet, your computer sends a request to the proxy server,
                  which then processes the request and returns the result you
                  were looking for.
                </p>
                <p class="question-text__paragraph">
                  Proxies are used for a number of reasons such as to filter web
                  content, to go around restrictions such as parental blocks, to
                  screen downloads and uploads and to provide privacy when
                  surfing the Internet.
                </p>
                <p class="question-text__paragraph">
                  If you want to browse privately, using a proxy can hide your
                  IP address. For example, if you visit a website via a proxy
                  server, the website will see a request from the proxy IP
                  rather than your own, which makes it difficult (but not
                  impossible) to track you.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col d-flex justify-content-center">
            <div class="question">
              <i class="fas fa-angle-right"></i>
              <h4 class="question__title">
                What is Virtual Private Network?
              </h4>
              <div class="question-text">
                <p class="question-text__paragraph">
                  In very simple terms, a VPN connects your PC, smartphone, or tablet to another computer (called a server) somewhere on the internet, and allows you to browse the internet using that computer’s internet connection. So if that server is in a different country, it will appear as if you are coming from that country, and you can potentially access things that you couldn’t normally.

So how does this help you? Good question! You can use a VPN to:

Bypass geographic restrictions on websites or streaming audio and video.
Watch streaming media like Netflix and Hulu.
Protect yourself from snooping on untrustworthy Wi-Fi hotspots.
Gain at least some anonymity online by hiding your true location.
Protect yourself from being logged while torrenting.
Many people these days are using a VPN for torrenting or bypassing geographic restrictions to watch content in a different country. They are still very useful for protecting yourself while working at a coffee shop, but that’s hardly the only use anymore.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col d-flex justify-content-center">
            <div class="question">
              <i class="fas fa-angle-right"></i>
              <h4 class="question__title">
                Types of protocols
              </h4>
              <div class="question-text">
                <p class="question-text__paragraph">
1. IPSec – Internet Protocol Security
				</p>
				 <p class="question-text__paragraph">
2. L2TP – Layer 2 Tunneling Protocol
</p>
 <p class="question-text__paragraph">
3. PPTP – Point-To-Point Tunneling Protocol
</p>
 <p class="question-text__paragraph">
4. SSL – Secure Socket Layer
</p>
 <p class="question-text__paragraph">
5. OpenVPN
</p>
 <p class="question-text__paragraph">
6. SHH – Secure Shell
</p>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col d-flex justify-content-center">
            <div class="question">
              <i class="fas fa-angle-right"></i>
              <h4 class="question__title">
                Where are your servers located?
              </h4>
              <div class="question-text">
                <p class="question-text__paragraph">
                  Argentina,Bahamas,Colombia,Costa Rica,Ecuador,Guatemala,Mexico and many other countries
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section Questions END -->

    <!-- Footer -->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col d-flex justify-content-center">
            <div class="footer-title">
              <h2 class="footer-title__title">
                Get <?=$name;?>VPN for Windows
              </h2>
              <p class="footer-title__text">
                Download our apps for Windows 7 / 8 / 8.1 / 10
              </p>
              <a href="download.php" class="footer__button">
                <img src="img/Frame.svg" alt="windows10-image" />
                Download for Windows
              </a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-2">
            <a href="#" class="logo logo_last">
              <?=$name;?><span class="logo__blue">VPN</span
              ><span class="logo__span logo__span_last">™</span>
            </a>
            <p class="logo__text">
              @ 2020
            </p>
          </div>
          <div class="col-lg-2 d-flex justify-content-center">
            <div class="footer-customers">
              <h5 class="footer-titles">
                Customers
              </h5>
              <ul class="customers-menu">
                <li class="customers-menu__item">
                  <a href="#features" class="customers-menu__link">
                    Features
                  </a>
                </li>
                <li class="customers-menu__item">
                  <a href="#serv" class="customers-menu__link">
                    Servers
                  </a>
                </li>
                <li class="customers-menu__item">
                  <a href="#rev" class="customers-menu__link">
                    Reviews
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 d-flex justify-content-center">
            <div class="footer-customers">
              <h5 class="footer-titles">
                Company
              </h5>
              <ul class="company-menu">
                <li class="customers-menu__item">
                  <a href="#faq" class="company-menu__link">
                    F.A.Q
                  </a>
                </li>
                <li class="company-menu__item">
                  <a href="#rev" class="company-menu__link">
                    Reviews
                  </a>
                </li>
               
              </ul>
            </div>
          </div>
          <div class="col-lg-2 d-flex justify-content-center">
            <div class="footer-info">
              <h5 class="footer-titles">
                Further information
              </h5>
              <ul class="information-menu">
                <li class="information-menu__item">
                  <a href="#" class="information-menu__link">
                    Terms & Conditions
                  </a>
                </li>
                <li class="information-menu__item">
                  <a href="#" class="information-menu__link">
                    Privacy Policy
                  </a>
                </li>
              </ul>
            </div>
          </div>
         
        <div class="scrolling">
          <a href="#top" class="scroll">
            <i class="fas fa-angle-up"></i>
            Go top
          </a>
        </div>
      </div>
    </footer>
    <!-- Footer END -->

    <!-- JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
