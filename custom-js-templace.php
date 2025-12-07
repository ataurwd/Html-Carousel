<?php
/**
 * Plugin Name: Poosh Trending Slider
 * Description: Displays the Poosh Trending Slider design exactly as provided using shortcode [poosh_slider].
 * Version: 1.0
 * Author: Ataur Dev
 */

if (!defined('ABSPATH')) exit;

// Load CSS + JS
function poosh_slider_enqueue_assets() {
    wp_enqueue_style(
        'poosh-slider-main-style',
        'https://the-overrated.com/wp-content/uploads/2025/main-style.css',
        false,
        '1.0'
    );

    wp_enqueue_script(
        'poosh-jquery-core',
        'https://the-overrated.com/wp-content/uploads/2025/jquery.min.js',
        array('jquery'),
        null,
        true
    );

    wp_enqueue_script(
        'poosh-jquery-migrate',
        'https://the-overrated.com/wp-content/uploads/2025/jquery-migrate.min.js',
        array('jquery'),
        null,
        true
    );

    wp_enqueue_script(
        'poosh-main-js',
        'https://the-overrated.com/wp-content/uploads/2025/main_cc129860.js',
        array('jquery'),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'poosh_slider_enqueue_assets');


// Shortcode Output
function poosh_slider_shortcode() {

ob_start(); ?>

<!-- START POOSH SLIDER ORIGINAL DESIGN -->


  <div class="main-wrap" style="overflow: hidden;">
    <header class="navigation--wrapper" id="primary-nav">
    </header>
    <main id="main" class="main-content" tabindex="-1">
      <section class="featured--slider">
        <h2 class="align-center">TRENDING ARTICLES</h2>
        <!-- Slider -->
        <div class="featured--slider-wrapper">
          <div class="featured--slide" data-url="https://poosh.com/2025-kardashian-jenner-holiday-gift-guide/"
            data-title="The Pooshmas Holiday Gift Guide 2025 with Exclusive Picks from the Kardashian Jenner Family"
            data-time="2 weeks ago" data-category="guides"
            data-category-url="https://poosh.com/category/life-style/guides/" data-partnership="">
            <a href="https://poosh.com/2025-kardashian-jenner-holiday-gift-guide/"><img
                src="https://poosh.com/app/uploads/2025/11/The-Pooshmas-Holiday-Gift-Guide-2025-with-Exclusive-Picks-from-the-Kardashian-Jenner-Family-600x600.jpg"
                alt="The Pooshmas Holiday Gift Guide 2025 with Exclusive Picks from the Kardashian Jenner Family"
                loading="eager" /></a>
            <div class="share--hidden">
              <div
                class="post--share-slider caps sm-headline sm-headline--bold relative w-100 desktop-share font--color-grey">
                Share
                <div class="social--slideout d-flex align-items-center justify-content-between"></div>
              </div>

              <div class="post--share caps sm-headline sm-headline--bold relative w-100 mobile-share">
                Share
                <div class="social--modal d-flex align-items-center justify-content-center">
                  <div class="close-btn">
                    <img src="https://poosh.com/app/themes/poosh/dist/images/global/close-dark_12214c8a.svg"
                      alt="Close" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="featured--slide" data-url="https://poosh.com/vegan-recipe-ideas-thanksgiving/"
            data-title="Vegan Recipe Ideas for Thanksgiving" data-time="4 years ago" data-category="recipes"
            data-category-url="https://poosh.com/category/home-entertaining/recipes/" data-partnership="">
            <a href="https://poosh.com/vegan-recipe-ideas-thanksgiving/"><img
                src="https://poosh.com/app/uploads/2021/11/crossroadskitchen-600x600.jpg"
                alt="Vegan Recipe Ideas for THANKSGIVING" loading="lazy" /></a>
            <div class="share--hidden">
              <div
                class="post--share-slider caps sm-headline sm-headline--bold relative w-100 desktop-share font--color-grey">
                Share
                <div class="social--slideout d-flex align-items-center justify-content-between"></div>
              </div>

              <div class="post--share caps sm-headline sm-headline--bold relative w-100 mobile-share">
                Share
                <div class="social--modal d-flex align-items-center justify-content-center">
                  <div class="close-btn">
                    <img src="https://poosh.com/app/themes/poosh/dist/images/global/close-dark_12214c8a.svg"
                      alt="Close" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="featured--slide" data-url="https://poosh.com/three-loves-theory/"
            data-title="The Three Loves Theory" data-time="3 months ago" data-category="Relationships"
            data-category-url="https://poosh.com/category/health-wellness/relationships/" data-partnership="">
            <a href="https://poosh.com/three-loves-theory/"><img
                src="https://poosh.com/app/uploads/2025/04/The-Three-Loves-Theory-600x600.jpg"
                alt="The Three Loves Theory" loading="lazy" /></a>
            <div class="share--hidden">
              <div
                class="post--share-slider caps sm-headline sm-headline--bold relative w-100 desktop-share font--color-grey">
                Share
                <div class="social--slideout d-flex align-items-center justify-content-between"></div>
              </div>

              <div class="post--share caps sm-headline sm-headline--bold relative w-100 mobile-share">
                Share
                <div class="social--modal d-flex align-items-center justify-content-center">
                  <div class="close-btn">
                    <img src="https://poosh.com/app/themes/poosh/dist/images/global/close-dark_12214c8a.svg"
                      alt="Close" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="featured--slide" data-url="https://poosh.com/kardashian-jenners-gift-wrapping/"
            data-title="Exclusive Sneak Peek at the Kardashian/Jenners’ Gift Wrapping" data-time="5 years ago"
            data-category="family" data-category-url="https://poosh.com/category/kkb/family/" data-partnership="">
            <a href="https://poosh.com/kardashian-jenners-gift-wrapping/"><img
                src="https://poosh.com/app/uploads/2020/12/promo-12-600x600.jpg"
                alt="Exclusive Sneak Peek at the&amp;nbsp; KARDASHIAN/JENNERS’ GIFT WRAPPING" loading="lazy" /></a>
            <div class="share--hidden">
              <div
                class="post--share-slider caps sm-headline sm-headline--bold relative w-100 desktop-share font--color-grey">
                Share
                <div class="social--slideout d-flex align-items-center justify-content-between"></div>
              </div>

              <div class="post--share caps sm-headline sm-headline--bold relative w-100 mobile-share">
                Share
                <div class="social--modal d-flex align-items-center justify-content-center">
                  <div class="close-btn">
                    <img src="https://poosh.com/app/themes/poosh/dist/images/global/close-dark_12214c8a.svg"
                      alt="Close" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="featured--slide" data-url="https://poosh.com/kourtney-kardashian-apple-tea/"
            data-title="How To Make Kourtney&amp;#8217;s Apple Tea" data-time="2 years ago" data-category="recipes"
            data-category-url="https://poosh.com/category/home-entertaining/recipes/" data-partnership="">
            <a href="https://poosh.com/kourtney-kardashian-apple-tea/"><img
                src="https://poosh.com/app/uploads/2019/03/image-8-600x600.jpg"
                alt="How to Make  Kourtney&amp;#8217;s APPLE TEA" loading="lazy" /></a>
            <div class="share--hidden">
              <div
                class="post--share-slider caps sm-headline sm-headline--bold relative w-100 desktop-share font--color-grey">
                Share
                <div class="social--slideout d-flex align-items-center justify-content-between"></div>
              </div>

              <div class="post--share caps sm-headline sm-headline--bold relative w-100 mobile-share">
                Share
                <div class="social--modal d-flex align-items-center justify-content-center">
                  <div class="close-btn">
                    <img src="https://poosh.com/app/themes/poosh/dist/images/global/close-dark_12214c8a.svg"
                      alt="Close" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="featured--slide" data-url="https://poosh.com/still-tired-after-sleeping/"
            data-title="Why Am I Still Tired After A Full Night’s Sleep? An Expert Explains" data-time="1 month ago"
            data-category="health" data-category-url="https://poosh.com/category/health-wellness/health/"
            data-partnership="">
            <a href="https://poosh.com/still-tired-after-sleeping/"><img
                src="https://poosh.com/app/uploads/2025/10/WhyYoureStillTired-600x600.jpg"
                alt="Why Am I Still Tired After A Full Night’s Sleep? An Expert Explains" loading="lazy" /></a>
            <div class="share--hidden">
              <div
                class="post--share-slider caps sm-headline sm-headline--bold relative w-100 desktop-share font--color-grey">
                Share
                <div class="social--slideout d-flex align-items-center justify-content-between"></div>
              </div>

              <div class="post--share caps sm-headline sm-headline--bold relative w-100 mobile-share">
                Share
                <div class="social--modal d-flex align-items-center justify-content-center">
                  <div class="close-btn">
                    <img src="https://poosh.com/app/themes/poosh/dist/images/global/close-dark_12214c8a.svg"
                      alt="Close" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /Slider -->

        <!-- Slider Controls -->
        <aside class="featured--slider-controls relative">
          <div class="post--meta d-flex justify-content-center">
            <div class="post--category post--meta-detail sm-headline sm-headline--bold caps"></div>
          </div>
          <h2></h2>
          <p class="partnership-with-meta text-center"></p>

          <!-- <div class="slider--share">

      </div> -->

          <button class="featured--arrow-left" aria-label="Previous" tabindex="0">
            <img src="https://poosh.com/app/themes/poosh/dist/images/global/arrow-left_8de46d6a.svg" alt="Previous" />
          </button>
          <button class="featured--arrow-right" aria-label="Next" tabindex="0">
            <img src="https://poosh.com/app/themes/poosh/dist/images/global/arrow-right_3d197e98.svg" alt="Next" />
          </button>
        </aside>

        <!-- /Slider Controls -->

        <img id="slider-pause-button"
          src="https://poosh.com/app/themes/poosh/dist/images/global/slide-pause_242301eb.svg" alt="Pause Slides" />
        <img id="slider-play-button" src="https://poosh.com/app/themes/poosh/dist/images/global/slide-play_598036f9.svg"
          alt="Autoplay Slides" />
      </section>
    </main>




    <script type="text/javascript" src="https://the-overrated.com/wp-content/uploads/2025/main_cc129860.js"
      id="sage/main.js-js"></script>

    <!-- Google Tag Manager (noscript) -->

    <!-- End Google Tag Manager (noscript) -->
  </div>
<!-- END SLIDER -->

<?php return ob_get_clean();
}

add_shortcode('poosh_slider', 'poosh_slider_shortcode');
