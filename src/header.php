<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KB22WNS');</script>
    <!-- End Google Tag Manager -->
     
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#131313">
    <meta name="google-site-verification" content="wVe--VJoxar9VVjwj3gKFsSFf3LChZV79yTm5VydOLY" />
    <meta name="description" content="Perfectinfo. Bezpieczeństwo informacji – dobrze trafiłeś!">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php bloginfo('name'); ?>" />
    <meta property="og:description" content="<?php bloginfo('description'); ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo get_permalink(); ?>" />
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/share.png" />

    <link rel="apple-touch-icon" sizes="180x180" href="/wp-content/themes/perfectinfo/img/favicon-32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/wp-content/themes/perfectinfo/img/favicon-16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/wp-content/themes/perfectinfo/img/favicon-32.png">

    <link rel="stylesheet" href="/wp-content/themes/perfectinfo/style.css">

    <link rel="dns-prefetch" href="https://www.googletagmanager.com">
    <link rel="preconnect" href="https://www.googletagmanager.com" crossorigin>
    <link rel="preload" href="/wp-content/themes/perfectinfo/img/bg-hero-mobile-2.webp" as="image" type="image/webp">

    <!-- CookieYes optimization -->
    <link rel="dns-prefetch" href="//cdn-cookieyes.com">
    <link rel="preconnect" href="https://cdn-cookieyes.com" crossorigin>
    <link rel="dns-prefetch" href="//log.cookieyes.com">
    <link rel="preconnect" href="https://log.cookieyes.com" crossorigin>

    <!-- Preload critical fonts -->
    <link rel="preload" href="/wp-content/themes/perfectinfo/fonts/poppins-medium.woff2" as="font" type="font/woff2"
        crossorigin>
    <link rel="preload" href="/wp-content/themes/perfectinfo/fonts/poppins-semibold.woff2" as="font" type="font/woff2"
        crossorigin>
    <link rel="preload" href="/wp-content/themes/perfectinfo/fonts/rajdhani-bold.woff2" as="font" type="font/woff2"
        crossorigin>
    <link rel="preload" href="/wp-content/themes/perfectinfo/fonts/rajdhani-medium.woff2" as="font" type="font/woff2"
        crossorigin>

    <!-- Include critical font faces inline -->
    <style>
        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url('/wp-content/themes/perfectinfo/fonts/poppins-medium.woff2') format('woff2');
        }

        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url('/wp-content/themes/perfectinfo/fonts/poppins-semibold.woff2') format('woff2');
        }

        @font-face {
            font-family: 'Rajdhani';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url('/wp-content/themes/perfectinfo/fonts/rajdhani-medium.woff2') format('woff2');
        }

        @font-face {
            font-family: 'Rajdhani';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url('/wp-content/themes/perfectinfo/fonts/rajdhani-bold.woff2') format('woff2');
        }
    </style>

    <!-- <script>
  // Function to load Google Tag Manager
  function loadGTM() {
    var script = document.createElement('script');
    script.src = 'https://www.googletagmanager.com/gtm.js?id=GTM-KB22WNS';
    script.async = true;
    document.head.appendChild(script);
  }

  // Wait for DOMContentLoaded to fire
  document.addEventListener('DOMContentLoaded', function () {
    // Set up a timeout for 3500ms after DOMContentLoaded
    setTimeout(function () {
      // After 3000ms, load GTM
      loadGTM();
    }, 3000);

    // Detect user interactions
    let userHasInteracted = false;

    // Scroll event
    window.addEventListener('scroll', function () {
      if (!userHasInteracted) {
        userHasInteracted = true;
        loadGTM();
      }
    });

    // Mousemove event (for desktop)
    window.addEventListener('mousemove', function () {
      if (!userHasInteracted) {
        userHasInteracted = true;
        loadGTM();
      }
    });

    // Touch event (for mobile)
    window.addEventListener('touchstart', function () {
      if (!userHasInteracted) {
        userHasInteracted = true;
        loadGTM();
      }
    });
  });
</script> -->



    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header id="header" class="navbar flex flex-col">
        <h1 class="visually-hidden">Perfectinfo</h1>

        <div class="flex px-6 w-full h-full justify-between items-center">
            <a href="/" title="Perfectinfo">
                <svg class="navbar__logo" width="197" height="52" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                    viewBox="0 0 315 82.5" style="enable-background:new 0 0 315 82.5" xml:space="preserve">
                    <g style="enable-background:new">
                        <path fill="#39C9F0"
                            d="M116 82.3h-4.8v-1.5h1.4v-6.9h-1.4v-1.6h4.8v1.6h-1.4v6.9h1.4zM143.7 82.3l-3.7-7.1v7.1h-2v-10h2.7l3.4 6.8v-6.8h2v10zM172.1 74.2v2.1h3.8v1.8h-3.8v4.2h-2v-10h6.5v1.9zM204.5 77.3c0-1.2-.2-2.1-.5-2.6s-.9-.8-1.7-.8c-.8 0-1.4.3-1.7.8-.3.5-.5 1.4-.5 2.6 0 1.2.2 2.1.5 2.6s.9.8 1.7.8c.8 0 1.4-.3 1.7-.8.3-.5.5-1.4.5-2.6zm2.1 0c0 1.7-.4 3.1-1.1 3.9-.7.9-1.8 1.3-3.2 1.3-1.5 0-2.6-.5-3.3-1.4-.7-.9-1-2.2-1-3.9 0-1.7.3-3 1-3.9.7-.9 1.8-1.4 3.3-1.4 1.5 0 2.6.5 3.3 1.4.7 1.1 1 2.3 1 4zM111.2 60.2H315v1.4H111.2zM123.1 24.4V10.1h8c2.2 0 3.9.7 5.1 2.1 1.3 1.4 1.9 3.3 1.9 5.6 0 2.1-.6 3.7-1.8 4.9-1.2 1.2-3 1.7-5.3 1.7h-7.9zm0 9.3h7.6c6 0 10.8-1.5 14.2-4.5 3.5-3 5.2-6.9 5.2-11.9 0-3.3-.8-6.4-2.4-9-1.6-2.7-3.8-4.7-6.8-6.1-2.9-1.4-6.2-2.2-10-2.2h-3.1c-4.6 0-8.5 1.7-11.8 5-3.3 3.3-4.9 7.4-4.9 12.1V40c0 3 1.1 5.6 3.2 7.8s4.6 3.2 7.6 3.2h1.2V33.7zM165.1 23.1c1.8 0 3.1.5 4 1.5.9 1 1.4 2.3 1.4 4.1v.9h-11.1c.6-4.4 2.5-6.5 5.7-6.5zm1.2 28.1c2.9 0 5.6-.6 8.1-1.7s4.5-2.6 5.8-4.5l-5-5.9c-1.4 1.2-2.6 2.1-3.8 2.7s-2.6.9-4.3.9c-2.1 0-3.8-.6-5.2-1.7-1.3-1.1-2.2-2.7-2.6-4.7H177c1.2 0 2.2-.4 3-1.3.8-.8 1.2-1.8 1.2-3-.2-3.4-.6-6-1.3-7.9-.6-1.9-1.6-3.5-3-5-2.9-3.1-6.8-4.6-11.8-4.6-3.5 0-6.6.8-9.1 2.3-2.6 1.5-4.5 3.6-5.9 6.4-1.3 2.8-2 5.9-2 9.5v.9c0 5.2 1.7 9.3 5 12.6 3.5 3.4 7.8 5 13.2 5zM202.4 25.9l.2-10.5c-.9-.3-1.9-.4-3-.4-3.2 0-5.7 1.8-7.5 5.3l-.4-4.6c-2.8 0-5.1 1-7.1 3.1s-2.9 4.5-2.9 7.5v23.3c0 .6.2 1.1.6 1.6.4.4.9.7 1.5.7 2.4 0 4.4-.9 6.1-2.7 1.7-1.8 2.5-3.9 2.5-6.4V28.9c.9-2.2 3.1-3.3 6.4-3.3l3.6.3zM209 51.2c2.9 0 5.5-1.1 7.5-3.3 2.1-2.2 3.1-4.8 3.1-7.9V23.3h6.7v-7.7h-6.7v-2.7c0-2.9 1.6-4.3 4.8-4.3 1.1 0 2 .1 2.6.3V.7c-1.8-.4-3.5-.7-5-.7-4.2 0-7.4 1.1-9.7 3.3-2.3 2.2-3.5 5.4-3.5 9.4v2.8h-5v7.7h5v28zM245.4 23.1c1.8 0 3.1.5 4 1.5.9 1 1.4 2.3 1.4 4.1v.9h-11.1c.6-4.4 2.5-6.5 5.7-6.5zm1.2 28.1c2.9 0 5.6-.6 8.1-1.7s4.5-2.6 5.8-4.5l-5-5.9c-1.4 1.2-2.6 2.1-3.8 2.7s-2.6.9-4.3.9c-2.1 0-3.8-.6-5.2-1.7-1.3-1.1-2.2-2.7-2.6-4.7h17.6c1.2 0 2.2-.4 3-1.3.8-.8 1.2-1.8 1.2-3-.2-3.4-.6-6-1.3-7.9-.6-1.9-1.6-3.5-3-5-2.9-3.1-6.8-4.6-11.8-4.6-3.5 0-6.6.8-9.1 2.3-2.6 1.5-4.5 3.6-5.9 6.4-1.3 2.8-2 5.9-2 9.5v.9c0 5.2 1.7 9.3 5 12.6 3.5 3.4 7.9 5 13.3 5zM277.8 42.7c-1.8 0-3.1-.7-3.9-2.1-.8-1.4-1.2-3.8-1.2-7.3 0-2 .1-3.6.2-4.7.5-3.6 2.1-5.4 4.8-5.4 1.4 0 2.6.5 3.5 1.5.9 1 1.3 2.4 1.3 4.2h1.7c2.6 0 4.4-1.2 5.5-3.6 1.1-2.4.7-4.6-1-6.6 0 0-.1 0-.1-.1-2.6-2.5-6.1-3.8-10.6-3.8-3.3 0-6.1.7-8.5 2.2-2.4 1.4-4.2 3.5-5.5 6.3-1.3 2.7-1.9 5.8-1.9 9.4v.5c0 5.7 1.4 10.1 4.3 13.3 2.9 3.2 6.8 4.8 11.8 4.8 4.2 0 7.7-1.2 10.4-3.7s4-5.6 4-9.5h-10c0 1.5-.4 2.6-1.2 3.5-.9.7-2.1 1.1-3.6 1.1zM308.9 5.9h-2.1c-2.4 0-4.4.9-6 2.6-1.7 1.7-2.5 3.8-2.5 6.3H294v7.7h4.3v17.7c0 3.7.9 6.4 2.6 8.2 1.7 1.8 4.4 2.7 8.1 2.7 2.1 0 4.1-.3 6-.9v-8c-.7.1-1.6.2-2.7.2-1.4 0-2.3-.3-2.7-.8-.5-.5-.7-1.5-.7-2.8V22.5h5.6v-7.7h-5.6V5.9z">
                        </path>
                        <path
                            d="M38.9 3.3C19.1 4.6 3.3 21.2 3.3 41.3c0 20.9 17 38 38 38 20.9 0 38-17 38-38 0-4-.6-7.9-1.9-11.7-2.3.9-4.6 1.7-6.7 2.3 1 3.1 1.5 6.2 1.5 9.4 0 17.1-13.9 30.9-30.9 30.9-17.1 0-30.9-13.9-30.9-30.9 0-8.1 3.1-15.8 8.8-21.6 5.3-5.4 12.3-8.7 19.7-9.2V3.3zM79 25.9c.4.2.7.5.9.9 1.7 4.7 2.6 9.5 2.6 14.5C82.5 64 64 82.5 41.3 82.5 18.5 82.5 0 64 0 41.3c0-10.9 4.2-21.2 11.9-28.9C19.5 4.6 29.7.2 40.5 0c.4 0 .9.2 1.2.5.3.3.5.7.5 1.2V12c0 .9-.7 1.6-1.6 1.6-14.9.4-27 12.8-27 27.6 0 15.2 12.4 27.7 27.7 27.7C56.5 68.9 69 56.5 69 41.2c0-3.4-.6-6.7-1.8-9.9-.2-.4-.1-.9.1-1.3s.6-.7 1-.8c2.9-.9 6.3-2 9.6-3.4.2-.1.7-.1 1.1.1z"
                            style="opacity:.6;fill-rule:evenodd;clip-rule:evenodd;fill:#39C9F0"></path>
                        <path
                            d="M41.3 20.3c-11.6 0-21 9.4-21 21s9.4 21 21 21 21-9.4 21-21c-.1-11.6-9.5-21-21-21zm0 45.2C27.9 65.5 17 54.6 17 41.3 17 27.9 27.9 17 41.3 17s24.3 10.9 24.3 24.3c-.1 13.3-11 24.2-24.3 24.2z"
                            style="fill-rule:evenodd;clip-rule:evenodd;fill:#39C9F0"></path>
                        <path fill="#39C9F0" d="M94 0h1.9v82.5H94z"></path>
                    </g>
                </svg>
            </a>

            <h2 class="navbar__header"><?php echo get_option('blogdescription'); ?></h2>

            <nav class="navbar__nav">
                <h2 class="visually-hidden">Menu główne</h2>
                <!-- todo: one menu  -->
                <div id="navbar__nav-desktop" class="navbar__nav-desktop">
                    <?php wp_nav_menu(array('theme_location' => 'nav-menu', 'container' => false)); ?>
                </div>
                <div id="navbar__nav-mobile" class="navbar__nav-mobile">
                    <?php wp_nav_menu(array('theme_location' => 'nav-menu', 'container' => false)); ?>
                </div>
            </nav>

            <?php $phone = get_field('phone', 11); ?>
            <a href="tel:+<?php echo preg_replace('/\D/', '', $phone); ?>"
                class="hidden sm:flex items-center shrink-0 gap-3 h-[40px] border-[1px] border-primary font-bold px-4 py-1 mr-6 xl:mr-0 rounded-2xl font-Rajdhani text-lg hover:text-primary transition duration-300"
                aria-label="Zadzwoń na numer 732 080 876">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" width="20.438" height="20.475">
                    <path fill="none" stroke="#4ec3e0" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4"
                        d="M12.447 4.404a4.539 4.539 0 0 1 3.586 3.587M12.447.773a8.171 8.171 0 0 1 7.218 7.208m-.908 7.245v2.724a1.816 1.816 0 0 1-1.979 1.816 17.967 17.967 0 0 1-7.835-2.787 17.7 17.7 0 0 1-5.447-5.447A17.967 17.967 0 0 1 .708 3.66a1.816 1.816 0 0 1 1.807-1.979h2.723a1.816 1.816 0 0 1 1.816 1.561 11.657 11.657 0 0 0 .636 2.551 1.816 1.816 0 0 1-.409 1.916L6.133 8.862a14.526 14.526 0 0 0 5.447 5.447l1.153-1.153a1.816 1.816 0 0 1 1.916-.409 11.657 11.657 0 0 0 2.551.636 1.816 1.816 0 0 1 1.557 1.843Z"
                        data-name="Icon feather-phone-call" />
                </svg>
                <?php echo $phone; ?>
            </a>

            <div id="navbar__toggle" class="navbar__toggle" onclick="slideToggle()"><i class="navbar__toggle-icon"></i>
            </div>
        </div>
    </header>


    <main>
        <h1 class="visually-hidden">Treść</h1>