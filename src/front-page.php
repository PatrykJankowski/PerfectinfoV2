<?php
/**
 * Template Name: Strona Główna
 * Description: Szablon strony głównej
 */
?>

<?php get_header(); ?>


<!-- Section hero -->
<section
    class="relative flex items-center justify-center h-[600px] xl:h-[820px] 3xl:h-[1330px] bg-cover bg-bottom bg-[url(/wp-content/themes/perfectinfo/img/bg-hero-mobile-2.webp)] md:bg-[url(/wp-content/themes/perfectinfo/img/bg-hero-mobile.webp)] xl:bg-[url(/wp-content/themes/perfectinfo/img/bg-hero.webp)]"
    role="banner">
    <div class="container mx-auto px-6 mt-[-80px] md:mt-[-100px]">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <h2 class="max-w-xl font-extrabold text-white text-4xl md:text-5xl xl:text-7xl">
                    <?php the_field('hero_title'); ?>
                </h2>
                <p
                    class="max-w-md my-10 font-Rajdhani font-extrabold text-xl xl:text-3xl text-primary drop-shadow-[1px_1px_1px_rgba(0,0,0,1)] md:drop-shadow-none">
                    <?php the_field('hero_description'); ?>
                </p>
                <a href="/kontakt" class="button">
                    Skontaktuj się z nami
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Section end -->


<!-- Section 2 -->
<section
    class="pt-80 mt-[-14rem] text-center bg-cover bg-center bg-[url(/wp-content/themes/perfectinfo/img/bg-1-mobile.webp)] sm:bg-[url(/wp-content/themes/perfectinfo/img/bg-1.webp)]">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-12">
            <div class="col-span-12 flex flex-col items-center max-w-3xl mx-auto">
                <svg xmlns="http://www.w3.org/2000/svg" width="148.855" height="148.365" data-name="Group 40945">
                    <defs>
                        <clipPath id="a">
                            <path fill="#39c9f0" d="M0 0h148.855v148.365H0z" data-name="Rectangle 17258" />
                        </clipPath>
                    </defs>
                    <g fill="#39c9f0" clip-path="url(#a)" data-name="Group 40944">
                        <path
                            d="M74.428 96.457a3.3 3.3 0 0 1-3.294-3.294v-8.252a8.153 8.153 0 1 1 6.588 0v8.252a3.3 3.3 0 0 1-3.294 3.294m0-25.835a6.83 6.83 0 0 0-2.4 13.225l.429.161v9.155a1.97 1.97 0 1 0 3.941 0v-9.155l.429-.161a6.83 6.83 0 0 0-2.4-13.225"
                            data-name="Path 42887" />
                        <path
                            d="M96.009 103.921H52.846a7.721 7.721 0 0 1-7.712-7.712V69.546a7.721 7.721 0 0 1 7.712-7.712h43.163a7.721 7.721 0 0 1 7.713 7.712v26.663a7.721 7.721 0 0 1-7.713 7.712M52.846 63.157a6.4 6.4 0 0 0-6.388 6.388v26.663a6.4 6.4 0 0 0 6.388 6.389h43.163a6.4 6.4 0 0 0 6.389-6.389V69.546a6.4 6.4 0 0 0-6.389-6.388Z"
                            data-name="Path 42888" />
                        <path
                            d="M91.895 58.718h-7.836v-4.409a2.031 2.031 0 0 0-2.029-2.028H66.826a2.031 2.031 0 0 0-2.029 2.028v4.409H56.96v-7.029a7.253 7.253 0 0 1 7.245-7.245h20.446a7.253 7.253 0 0 1 7.245 7.245Zm-6.513-1.323h5.19v-5.706a5.928 5.928 0 0 0-5.921-5.921H64.205a5.928 5.928 0 0 0-5.921 5.921v5.71h5.189v-3.09a3.356 3.356 0 0 1 3.352-3.352h15.2a3.356 3.356 0 0 1 3.352 3.352Z"
                            data-name="Path 42889" />
                        <path d="M73.275 12.456h2.231v11.899h-2.231z" data-name="Rectangle 17228" />
                        <path d="m60.467 14.045 2.182-.464 2.474 11.64-2.182.463z" data-name="Rectangle 17229" />
                        <path d="m48.269 18.262 2.04-.908L55.15 28.23l-2.04.908z" data-name="Rectangle 17230" />
                        <path d="m37.214 24.922 1.805-1.311 6.994 9.626-1.805 1.311z" data-name="Rectangle 17231" />
                        <path d="m27.785 33.736 1.493-1.658 8.842 7.962-1.492 1.658z" data-name="Rectangle 17232" />
                        <path d="m20.395 44.317 1.116-1.932 10.304 5.95-1.115 1.931z" data-name="Rectangle 17233" />
                        <path d="m15.366 56.204.69-2.122 11.316 3.677-.69 2.122z" data-name="Rectangle 17234" />
                        <path d="m12.919 68.876.233-2.219 11.834 1.244-.233 2.219z" data-name="Rectangle 17235" />
                        <path d="m12.927 79.562 11.834-1.244.233 2.219-11.834 1.244z" data-name="Rectangle 17236" />
                        <path d="m15.389 92.231 11.317-3.677.689 2.122-11.317 3.677z" data-name="Rectangle 17237" />
                        <path d="m20.432 104.112 10.305-5.95 1.115 1.933-10.305 5.949z" data-name="Rectangle 17238" />
                        <path d="m27.835 114.684 8.843-7.962 1.492 1.658-8.842 7.962z" data-name="Rectangle 17239" />
                        <path d="m37.273 123.486 6.997-9.626 1.804 1.312-6.996 9.626z" data-name="Rectangle 17240" />
                        <path d="m48.336 130.134 4.843-10.876 2.039.908-4.843 10.876z" data-name="Rectangle 17241" />
                        <path d="m60.539 134.336 2.474-11.639 2.182.464-2.474 11.639z" data-name="Rectangle 17242" />
                        <path d="M73.349 124.01h2.231v11.899h-2.231z" data-name="Rectangle 17243" />
                        <path d="m83.732 123.145 2.182-.464 2.474 11.64-2.182.463z" data-name="Rectangle 17244" />
                        <path d="m93.709 120.141 2.038-.907 4.84 10.87-2.038.907z" data-name="Rectangle 17245" />
                        <path d="m102.843 115.128 1.805-1.311 6.994 9.626-1.805 1.311z" data-name="Rectangle 17246" />
                        <path d="m110.735 108.325 1.493-1.658 8.842 7.962-1.492 1.658z" data-name="Rectangle 17247" />
                        <path d="m117.04 100.03 1.116-1.932 10.304 5.95-1.115 1.932z" data-name="Rectangle 17248" />
                        <path d="m121.483 90.606.69-2.122 11.315 3.677-.69 2.122z" data-name="Rectangle 17249" />
                        <path d="m123.869 80.464.234-2.22 11.84 1.25-.234 2.22z" data-name="Rectangle 17250" />
                        <path d="m123.861 67.828 11.834-1.244.233 2.219-11.834 1.244z" data-name="Rectangle 17251" />
                        <path d="m121.46 57.689 11.316-3.677.69 2.122-11.317 3.677z" data-name="Rectangle 17252" />
                        <path d="m117.003 48.271 10.305-5.95 1.115 1.932-10.304 5.95z" data-name="Rectangle 17253" />
                        <path d="m110.686 39.985 8.843-7.962 1.492 1.658-8.842 7.962z" data-name="Rectangle 17254" />
                        <path d="m102.783 33.194 6.994-9.626 1.805 1.31-6.994 9.627z" data-name="Rectangle 17255" />
                        <path d="m93.642 28.194 4.84-10.87 2.038.907-4.84 10.87z" data-name="Rectangle 17256" />
                        <path d="m83.66 25.205 2.475-11.637 2.182.464-2.475 11.637z" data-name="Rectangle 17257" />
                        <path d="m83.272 5.904.613-5.551-2.674-.3-.614 5.559c.9.08 1.788.173 2.675.287"
                            data-name="Path 42890" />
                        <path d="m68.865 5.384-.539-5.385-2.677.267.534 5.348c.887-.1 1.78-.177 2.68-.232"
                            data-name="Path 42891" />
                        <path d="m54.742 8.228-1.7-5.339-2.562.818 1.75 5.482q1.248-.516 2.517-.961"
                            data-name="Path 42892" />
                        <path d="m41.47 13.781-2.787-4.887-2.337 1.333 2.725 4.778q1.182-.642 2.4-1.224"
                            data-name="Path 42893" />
                        <path d="m29.458 21.759-3.569-4-2.008 1.789 3.611 4.053q.966-.947 1.966-1.837"
                            data-name="Path 42894" />
                        <path d="m19.498 32.222-4.28-3.144-1.593 2.168 4.286 3.148a51.043 51.043 0 0 1 1.587-2.172"
                            data-name="Path 42895" />
                        <path d="m12.421 44.761-5.287-2.387-1.107 2.452 5.478 2.468q.429-1.286.917-2.538"
                            data-name="Path 42896" />
                        <path d="m7.225 58.202-5.234-1.141-.573 2.628 5.166 1.126q.285-1.317.641-2.614"
                            data-name="Path 42897" />
                        <path d="M5.437 74.238q-.033-.861-.038-1.714l-5.385-.028L0 75.185l5.568.029-.131-.976"
                            data-name="Path 42898" />
                        <path d="m7.124 86.794-5.835 1.208.546 2.634 5.649-1.17Z" data-name="Path 42899" />
                        <path d="m10.728 100.727-4.962 2.182 1.081 2.463 4.964-2.179q-.563-1.219-1.078-2.465"
                            data-name="Path 42900" />
                        <path d="m17.642 113.389-4.408 3.168 1.57 2.184 4.413-3.172q-.81-1.077-1.575-2.181"
                            data-name="Path 42901" />
                        <path d="m27.184 124.174-3.8 4.179 1.99 1.81 3.949-4.339Z" data-name="Path 42902" />
                        <path
                            d="m39.568 133.743-1-.771-2.811 4.811 2.322 1.357 2.743-4.695c-.419-.233-.84-.461-1.257-.7"
                            data-name="Path 42903" />
                        <path d="m51.534 139.279-1.706 5.159 2.554.845 1.7-5.156a66.917 66.917 0 0 1-2.553-.848"
                            data-name="Path 42904" />
                        <path d="m65.57 142.587-.6 5.425 2.674.3.6-5.438c-.9-.079-1.788-.17-2.675-.283"
                            data-name="Path 42905" />
                        <path d="m79.996 143.08.528 5.286 2.677-.267-.525-5.255q-1.331.151-2.68.237"
                            data-name="Path 42906" />
                        <path d="m94.13 140.186 1.687 5.289 2.563-.818-1.737-5.443q-1.247.52-2.513.972"
                            data-name="Path 42907" />
                        <path d="m107.401 134.611 2.772 4.859 2.336-1.333-2.713-4.756q-1.18.645-2.4 1.229"
                            data-name="Path 42908" />
                        <path d="m119.386 126.594 3.581 4.018 2.008-1.789-3.631-4.075a53.79 53.79 0 0 1-1.958 1.846"
                            data-name="Path 42909" />
                        <path d="m129.313 116.11 4.325 3.177 1.593-2.168-4.34-3.187c-.5.739-1.033 1.464-1.578 2.179"
                            data-name="Path 42910" />
                        <path d="m136.338 103.561 5.384 2.431 1.107-2.452-5.578-2.519q-.426 1.288-.912 2.54"
                            data-name="Path 42911" />
                        <path d="M142.146 87.523q-.282 1.317-.632 2.616l5.35 1.166.573-2.629Z" data-name="Path 42912" />
                        <path d="m143.119 73.15.146 1.087c.02.537.031 1.071.036 1.6l5.541.029.014-2.69Z"
                            data-name="Path 42913" />
                        <path d="m141.568 61.604 6-1.243-.547-2.634-5.813 1.2Z" data-name="Path 42914" />
                        <path d="m137.96 47.711 5.135-2.254-1.081-2.463-5.135 2.254q.564 1.219 1.081 2.464"
                            data-name="Path 42915" />
                        <path d="m131.06 35.087 4.562-3.278-1.57-2.184-4.562 3.28q.81 1.077 1.575 2.181"
                            data-name="Path 42916" />
                        <path d="m121.55 24.325 3.925-4.313-1.99-1.81-4.071 4.468 2.136 1.65" data-name="Path 42917" />
                        <path d="m109.133 14.732 1.06.818 2.9-4.968-2.323-1.357-2.829 4.842c.4.22.795.436 1.189.665"
                            data-name="Path 42918" />
                        <path d="m97.272 9.239 1.755-5.307-2.554-.845-1.753 5.3a68.07 68.07 0 0 1 2.551.851"
                            data-name="Path 42919" />
                    </g>
                </svg>
                <h2 class="mt-8 mb-6 font-Poppins font-bold">
                    <?php the_field('trust_title'); ?>
                </h2>
                <p>
                    <?php the_field('trust_description'); ?>
                </p>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-6">
        <div class="grid grid-cols-12">
            <div class="col-span-12 flex flex-col items-center text-center">
                <h2 class="text-2xl font-Poppins font-semibold uppercase my-12">
                    <span class="inline-block border-t-2 border-gray-dark w-8 xl:w-12 align-middle"></span>
                    <span class="mx-2 xl:mx-6"><?php the_field('trust_title_2'); ?></span>
                    <span class="inline-block border-t-2 border-gray-dark w-8 xl:w-122 align-middle"></span>
                </h2>

                <div class="relative overflow-hidden w-full bg-gray-100 py-4">
                    <div class="carousel flex whitespace-nowrap gap-6 animate-scroll">
                        <?php
                        $image_fields = [
                            'partner_logo_1',
                            'partner_logo_2',
                            'partner_logo_3',
                            'partner_logo_4',
                            'partner_logo_5',
                            'partner_logo_6',
                            'partner_logo_7',
                            'partner_logo_8',
                            'partner_logo_9',
                            'partner_logo_10',
                            'partner_logo_11',
                            'partner_logo_12',
                            'partner_logo_13',
                            'partner_logo_14',
                            'partner_logo_15',
                            'partner_logo_16',
                            'partner_logo_17',
                            'partner_logo_18',
                            'partner_logo_19',
                            'partner_logo_20',
                            'partner_logo_21',
                            'partner_logo_22',
                            'partner_logo_23',
                            'partner_logo_24',
                        ];

                        $images = [];

                        foreach ($image_fields as $field) {
                            $image_url = get_field($field);
                            if ($image_url) {
                                $images[] = $image_url;
                            }
                        }

                        // Duplicate images for infinite scrolling effect
                        $images = array_merge($images, $images);

                        foreach ($images as $image) {
                            echo '<div class="carousel__slide flex-shrink-0">
                    <img src="' . esc_url($image) . '" class="w-40 h-auto" alt="Logo partnera">
                  </div>';
                        }
                        ?>
                    </div>
                </div>


                <div class="mt-20 relative z-20 w-full flex flex-wrap justify-center xl:justify-between gap-8">
                    <?php for ($i = 1; $i <= 4; $i++): ?>
                        <?php
                        $stat_number = get_field("stat_{$i}_number");
                        $stat_label = get_field("stat_{$i}_label");
                        ?>
                        <?php if ($stat_label): ?>
                            <div class="p-2 border border-primary/30 rounded-full flex justify-center items-center">
                                <div
                                    class="w-[180px] h-[180px] md:w-[228px] md:h-[228px] p-2 border <?= $i % 2 == 0 ? 'bg-white' : 'bg-secondary' ?> border-primary rounded-full flex flex-col justify-center items-center">
                                    <span class="text-4xl font-bold <?= $i % 2 == 0 ? '' : 'text-primary' ?>">
                                        <?= esc_html($stat_number); ?>
                                    </span>
                                    <p class="text-lg leading-none text-center <?= $i % 2 == 0 ? '' : 'text-white' ?>">
                                        <?= esc_html($stat_label); ?>
                                    </p>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section end -->


<!-- Section -->
<section class="pb-32 relative z-10 mt-[-150px] text-center">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-12">
            <div class="col-span-12 pt-52 flex flex-col items-center">
                <!-- Top background -->
                <div
                    class="absolute inset-0 -z-10 h-[576px] bg-cover bg-[url(/wp-content/themes/perfectinfo/img/bg-2.webp)]">
                </div>

                <h2 class="mb-6 text-5xl md:text-6xl text-white uppercase font-Rajdhani font-bold">
                    <?php the_field('offer_title'); ?>
                </h2>
                <p class="mb-12 max-w-3xl text-white">
                    <?php the_field('offer_description'); ?>
                </p>

                <!-- Cards -->
                <div class="mt-10 w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 font-Rajdhani text-white">
                    <?php
                    $offers = [
                        ['img' => 'rodo.webp', 'url' => get_field('offer_1_url'), 'title' => get_field('offer_1_title'), 'desc' => get_field('offer_1_description')],
                        ['img' => 'outsorcing.webp', 'url' => get_field('offer_2_url'), 'title' => get_field('offer_2_title'), 'desc' => get_field('offer_2_description')],
                        ['img' => 'ochrona.webp', 'url' => get_field('offer_3_url'), 'title' => get_field('offer_3_title'), 'desc' => get_field('offer_3_description')],
                        ['img' => 'audyt.webp', 'url' => get_field('offer_4_url'), 'title' => get_field('offer_4_title'), 'desc' => get_field('offer_4_description')],
                        ['img' => 'wdrozenie.webp', 'url' => get_field('offer_5_url'), 'title' => get_field('offer_5_title'), 'desc' => get_field('offer_5_description')],
                        ['img' => 'cyberbezpieczenstwo.webp', 'url' => get_field('offer_6_url'), 'title' => get_field('offer_6_title'), 'desc' => get_field('offer_6_description')],
                    ];

                    foreach ($offers as $index => $offer):
                        $link = $offer['url'];
                        $link_url = is_array($link) && isset($link['url']) ? $link['url'] : $link;
                        $link_target = is_array($link) && isset($link['target']) ? $link['target'] : '_self';

                        // Apply different background position for the first item
                        $bg_position = ($index === 0) ? "background-position-y: -18px;" : "";
                        ?>
                        <a href="<?php echo esc_url($link_url ?: '#'); ?>"
                            class="group flex flex-col justify-end w-full h-72 sm:h-80 lg:h-96 p-8 rounded-lg bg-cover bg-center text-center transition-transform duration-300 ease-in-out transform hover:scale-105 hover:shadow-xl"
                            style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/<?php echo esc_attr($offer['img']); ?>'); <?php echo $bg_position; ?>">
                            <h3 class="text-2xl md:text-3xl font-bold">
                                <?php echo esc_html($offer['title']); ?>
                            </h3>
                            <p class="text-lg">
                                <?php echo esc_html($offer['desc']); ?>
                            </p>
                        </a>
                    <?php endforeach; ?>
                </div>

                <!-- Bottom background -->
                <div class="absolute bottom-0 -z-10 h-[354px] w-full bg-cover bg-bottom"
                    style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/secondary-bg.webp');">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section end -->


<!-- Section -->
<section
    class="pt-48 pb-24 bg-white relative bg-cover -mt-24 bg-[url(/wp-content/themes/perfectinfo/img/bg-1-mobile.webp)] sm:bg-[url(/wp-content/themes/perfectinfo/img/bg-1.webp)]">
    <div class="container mx-auto px-6 relative z-10">
        <div class="grid grid-cols-12">
            <div class="col-span-12 text-center">

                <?php
                $page_id = 7;
                ?>


                <h2 class="text-5xl md:text-6xl font-bold mb-6"><?php echo get_field('about_title', $page_id); ?></h2>
                <p class="max-w-3xl mx-auto">
                    <?php echo get_field('about_description', $page_id); ?>
                </p>

                <div class="mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 place-items-center relative">
                    <!-- Box 1 -->
                    <div class="flex flex-col items-center text-center max-w-md h-full">
                        <div class="p-2 mb-4 border border-primary/30 rounded-full relative">
                            <div
                                class="w-[162px] h-[162px] p-2 border bg-secondary border-primary rounded-full flex flex-col justify-center items-center">
                                <span
                                    class="text-4xl font-bold text-primary"><?php echo get_field('history_1_date', $page_id); ?></span>
                            </div>
                        </div>
                        <p><?php echo get_field('history_1_description', $page_id); ?></p>
                    </div>

                    <!-- Arrow 1 -->
                    <div class="hidden lg:block absolute left-[30%] top-12">
                        <svg xmlns="http://www.w3.org/2000/svg" width="87.004" height="86.951">
                            <path fill="none" stroke="#4ec3e0" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3"
                                d="m71.32 30.914-4.733 34.221-7.575-13.12C27.646 70.124 9.366 46.818 2.174 32.349c5.385 6.285 12.533 17.255 44.718-1.327l-7.575-13.12Z"
                                data-name="Icon akar-arrow-back-thick" />
                        </svg>
                    </div>

                    <!-- Box 2 -->
                    <div class="flex flex-col items-center text-center max-w-md h-full">
                        <div class="p-2 mb-4 border border-primary/30 rounded-full relative">
                            <div
                                class="w-[162px] h-[162px] p-2 border bg-primary border-primary rounded-full flex flex-col justify-center items-center">
                                <span
                                    class="text-4xl font-bold text-white"><?php echo get_field('history_2_date', $page_id); ?></span>
                            </div>
                        </div>
                        <p><?php echo get_field('history_2_description', $page_id); ?></p>
                    </div>

                    <!-- Arrow 2 -->
                    <div class="hidden lg:block absolute left-[64%] top-12">
                        <svg xmlns="http://www.w3.org/2000/svg" width="87.004" height="86.951">
                            <path fill="none" stroke="#4ec3e0" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3"
                                d="m71.32 56.038-4.733-34.222-7.575 13.12C27.646 16.827 9.366 40.134 2.174 54.602c5.385-6.284 12.533-17.255 44.718 1.327l-7.575 13.12Z"
                                data-name="Icon akar-arrow-back-thick" />
                        </svg>
                    </div>

                    <!-- Box 3 -->
                    <div class="flex flex-col items-center text-center max-w-md h-full">
                        <div class="p-2 mb-4 border border-primary/30 rounded-full relative">
                            <div
                                class="w-[162px] h-[162px] p-2 border bg-secondary border-primary rounded-full flex flex-col justify-center items-center">
                                <span
                                    class="text-4xl font-bold text-primary"><?php echo get_field('history_3_date', $page_id); ?></span>
                            </div>
                        </div>
                        <p><?php echo get_field('history_3_description', $page_id); ?></p>
                    </div>

                    <!-- Box 4 -->
                    <div class="flex flex-col items-center text-center max-w-md h-full">
                        <div class="p-2 mb-4 border border-primary/30 rounded-full relative">
                            <div
                                class="w-[162px] h-[162px] p-2 border bg-primary border-primary rounded-full flex flex-col justify-center items-center">
                                <span
                                    class="text-4xl font-bold text-white"><?php echo get_field('history_4_date', $page_id); ?></span>
                            </div>
                        </div>
                        <p><?php echo get_field('history_4_description', $page_id); ?></p>
                    </div>

                    <!-- Arrow 3 -->
                    <div class="hidden lg:block absolute left-[30%] top-[61%]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="87.004" height="86.951">
                            <path fill="none" stroke="#4ec3e0" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3"
                                d="m71.32 30.914-4.733 34.221-7.575-13.12C27.646 70.124 9.366 46.818 2.174 32.349c5.385 6.285 12.533 17.255 44.718-1.327l-7.575-13.12Z"
                                data-name="Icon akar-arrow-back-thick" />
                        </svg>
                    </div>

                    <!-- Box 5 -->
                    <div class="flex flex-col items-center text-center max-w-md h-full">
                        <div class="p-2 mb-4 border border-primary/30 rounded-full relative">
                            <div
                                class="w-[162px] h-[162px] p-2 border bg-secondary border-primary rounded-full flex flex-col justify-center items-center">
                                <span
                                    class="text-4xl font-bold text-white"><?php echo get_field('history_5_date', $page_id); ?></span>
                            </div>
                        </div>
                        <p><?php echo get_field('history_5_description', $page_id); ?></p>
                    </div>

                    <!-- Arrow 4 -->
                    <div class="hidden lg:block absolute left-[64%] top-[61%]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="87.004" height="86.951">
                            <path fill="none" stroke="#4ec3e0" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3"
                                d="m71.32 56.038-4.733-34.222-7.575 13.12C27.646 16.827 9.366 40.134 2.174 54.602c5.385-6.284 12.533-17.255 44.718 1.327l-7.575 13.12Z"
                                data-name="Icon akar-arrow-back-thick" />
                        </svg>
                    </div>

                    <!-- Box 6 -->
                    <div class="flex flex-col items-center text-center max-w-md h-full">
                        <div class="p-2 mb-4 border border-primary/30 rounded-full relative">
                            <div
                                class="w-[162px] h-[162px] p-2 border bg-primary border-primary rounded-full flex flex-col justify-center items-center">
                                <span
                                    class="text-4xl font-bold text-white"><?php echo get_field('history_6_date', $page_id); ?></span>
                            </div>
                        </div>
                        <p><?php echo get_field('history_6_description', $page_id); ?></p>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>
<!-- Section end -->


<!-- Section -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-6 relative z-10">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div class="flex flex-col items-center">
                    <h2 class="mb-6 text-5xl md:text-5xl xl:text-6xl font-semibold text-center">
                        <?php the_field('why_title'); ?>
                    </h2>
                    <div class="max-w-3xl text-center grid gap-2">
                        <?php the_field('why_description'); ?>
                    </div>
                </div>

                <?php
                $features = get_field('features');
                if ($features):
                    ?>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-10">
                        <?php foreach ($features as $index => $feature):
                            // Add 'sm:mt-12' only for the 2nd (index 1) and 5th (index 4) elements
                            $extra_class = ($index === 'feature_2' || $index === 'feature_5') ? 'sm:mt-12' : '';
                            ?>
                            <div class="<?= esc_attr($extra_class); ?>">
                                <span class="text-6xl md:text-7xl xl:text-8xl font-Rajdhani font-bold text-outline">
                                    <?= esc_html($feature['number']); ?>
                                </span>
                                <h3 class="mb-2 text-2xl md:text-3xl font-semibold">
                                    <?= esc_html($feature['title']); ?>
                                </h3>
                                <div class="relative flex items-end w-full h-72 sm:h-80 p-6 rounded-lg text-sm text-white bg-cover bg-center"
                                    style="background-image: url('<?= esc_url($feature['image']); ?>');">
                                    <!-- Dark Overlay -->
                                    <div class="absolute inset-0 bg-black opacity-10 rounded-lg"></div>

                                    <p class="text-center relative z-10">
                                        <?= esc_html($feature['description']); ?>
                                    </p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>
<!-- Section end -->


<!-- Section -->
<section
    class="pt-24 pb-0 xl:pb-24 mt-24 min-h-[486px] relative bg-cover bg-[url(/wp-content/themes/perfectinfo/img/bg-3.webp)]">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-12">
            <div class="col-span-12 xl:col-span-6 flex justify-center order-2 xl:order-1">
                <img src="/wp-content/themes/perfectinfo/img/ludzie.png" alt="" class="xl:absolute bottom-0 -ml-12">
            </div>
            <div class="col-span-12 xl:col-span-6 order-1 xl:order-2">
                <h2 class="mb-6 font-bold text-5xl xl:text-6xl"><?php the_field('business_title'); ?></h2>
                <div class="grid gap-2 text-lg">
                    <?php the_field('business_description'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section end -->


<!-- Section -->
<section class="mt-24 px-6 md:px-12 lg:px-24">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-12">
        <div class="flex mb-6">
            <div class="border-b w-20"></div>
        </div>
        <h2 class="mb-6 font-bold text-5xl xl:text-6xl"><?php the_field('testimonials_title'); ?></h2>
    </div>

    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 pb-24 border-b">
        <div>
            <div class="grid gap-2 text-lg"><?php the_field('testimonials_description'); ?></div>
        </div>

        <div>
            <div id="quote-container"
                class="relative overflow-hidden w-full h-full min-h-[29rem] lg:min-h-96 2xl:min-h-72">
                <?php
                $testimonials = [
                    [
                        'quote' => get_field('quote_1'),
                        'industry' => get_field('industry_1'),
                        'result' => get_field('result_1'),
                        'author' => get_field('author_1'),
                        'position' => get_field('position_1'),
                    ],
                    [
                        'quote' => get_field('quote_2'),
                        'industry' => get_field('industry_2'),
                        'result' => get_field('result_2'),
                        'author' => get_field('author_2'),
                        'position' => get_field('position_2'),
                    ],
                    [
                        'quote' => get_field('quote_3'),
                        'industry' => get_field('industry_3'),
                        'result' => get_field('result_3'),
                        'author' => get_field('author_3'),
                        'position' => get_field('position_3'),
                    ],
                ];

                foreach ($testimonials as $index => $testimonial):
                    if ($testimonial['quote']):
                        ?>
                        <div
                            class="quote-item absolute inset-0 transition-transform duration-500 transform <?php echo $index === 0 ? 'translate-x-0' : 'translate-x-full opacity-0'; ?>">
                            <blockquote class="italic border-l-4 pl-4">
                                "<?php echo esc_html($testimonial['quote']); ?>"
                            </blockquote>
                            <p class="mt-4 text-sm">
                                <strong>Branża:</strong> <?php echo esc_html($testimonial['industry']); ?><br>
                                <strong>Rezultat:</strong> <?php echo esc_html($testimonial['result']); ?>
                            </p>
                            <p class="mt-4 font-semibold"><?php echo esc_html($testimonial['author']); ?></p>
                            <p class="text-sm"><?php echo esc_html($testimonial['position']); ?></p>
                        </div>
                    <?php endif; endforeach; ?>
            </div>

            <!-- Nawigacja -->
            <div class="mt-6 flex gap-2">
                <button onclick="changeQuote('prev')"
                    class="w-10 h-10 flex items-center justify-center pb-1 bg-secondary text-white rounded-full hover:bg-primary transition">
                    ←
                </button>
                <button onclick="changeQuote('next')"
                    class="w-10 h-10 flex items-center justify-center pb-1 bg-secondary text-white rounded-full hover:bg-primary transition">
                    →
                </button>
            </div>
        </div>
    </div>
</section>
<!-- Section end -->


<!-- Section -->
<section class="mt-24">
    <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-12">

        <!-- Left Column: Image -->
        <div>
            <img src="/wp-content/themes/perfectinfo/img/biznes.webp" alt="Zespół biznesowy" class="rounded-lg w-full">
        </div>

        <!-- Right Column: Text Content -->
        <div>
            <h2 class="mb-6 text-5xl md:text-6xl">
                <?php the_field('business_2_title'); ?>
            </h2>
            <div class="text-lg">
                <?php the_field('business_2_description'); ?>
            </div>
            <a href="/kontakt" class="button button--secondary mt-6">
                Dowiedz się więcej
            </a>
        </div>
    </div>
</section>
<!-- Section end -->


<script>
    const quotes = document.querySelectorAll('.quote-item');
    let currentIndex = 0;

    function changeQuote(direction) {
        // Hide the current quote with slide out effect
        quotes[currentIndex].classList.add('translate-x-full', 'opacity-0');

        if (direction === 'next') {
            currentIndex = (currentIndex + 1) % quotes.length; // Move to next quote
        } else {
            currentIndex = (currentIndex - 1 + quotes.length) % quotes.length; // Move to previous quote
        }

        // Show the new quote with slide in effect
        quotes[currentIndex].classList.remove('translate-x-full', 'opacity-0');
    }
</script>

<?php get_footer(); ?>