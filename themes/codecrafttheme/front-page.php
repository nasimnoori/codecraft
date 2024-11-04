<?php get_header(); ?>

<main class="flex-grow">
    <section
        class="relative min-h-full bg-cover bg-center bg-branddark"
        style="background-image: url('<?php echo get_theme_file_uri('/assets/images/wil-stewart.jpg'); ?>')">
        <div class="pb-16 md:pb-24 pt-8 md:pt-16 bg-branddark bg-opacity-70">
            <!-- Optional overlay for better text contrast -->
            <div class="container mx-auto flex h-full">
                <div class="flex items-center justify-between w-full">
                    <div class="w-full">
                        <div class="w-full">
                            <div class="max-w-4xl mb-7 text-center mx-auto">
                                <div class="flex flex-col md:flex-row items-center justify-center gap-2 md:gap-5 text-white font-light text-sm w-fit px-10 py-4 mx-auto mb-7 md:mb-10 md:border md:border-brandlight/20 md:rounded-full">
                                    <div class="flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-brandsecond">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                        </svg>
                                        <span>Custom Web Development</span>
                                    </div>
                                    <span class="h-5 border-l border-brandlight/20 hidden md:block"></span>
                                    <div class="flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-brandsecond">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                        </svg>
                                        <span>Scalable Software Solutions</span>
                                    </div>
                                    <span class="h-5 border-l border-brandlight/20 hidden md:block"></span>
                                    <div class="flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-brandsecond">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                        </svg>
                                        <span>Results-Driven SEO</span>
                                    </div>
                                </div>
                                <h1 class="text-4xl md:text-5xl lg:text-7xl text-white leading-[1.3!important] mb-10 font-semibold">
                                    <!-- We Craft Digital Excellence with Custom Solutions. -->
                                    Empowering Businesses with Innovative Digital Solutions
                                </h1>
                            </div>
                            <p class="text-brandlight/70 text-lg text-center mb-16">
                                Elevate your business with custom software solutions that set you apart.
                            </p>
                            <div class="mx-auto max-w-4xl text-center">
                                <p class="text-brandlight/70 mb-5 text-sm ">
                                    Boost your online presence with tailored SEO and digital strategies to lead your industry
                                </p>

                                <a href="<?php echo site_url('/free-seo'); ?>" class="bg-brandsecond text-white border border-brandsecond hover:bg-transparent px-7 md:px-9 py-4 block w-fit md:text-xl text-center mx-auto rounded-full transition-all">
                                    <div class="flex items-center gap-3">
                                        <span>Get Free SEO Analysis</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-7">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 lg:py-32 bg-brandlight">
        <div class="container mx-auto text-center">
            <!-- Section Title and Intro -->
            <div class="mb-10 max-w-3xl mx-auto">
                <div class="uppercase text-brandsecond font-semibold mb-2">
                    What we do
                </div>
                <h2 class="text-4xl md:text-5xl !leading-tight font-semibold mb-5">
                    Transforming Your Digital Vision into Reality
                </h2>
                <p class="md:text-lg">
                    Welcome to Code Craft, where we help businesses reach their full potential online. Specializing in web development, software solutions, Salesforce, SEO, and digital marketing, we bring a blend of creativity, technology, and strategy to drive impactful results.
                </p>
            </div>

            <!-- Services Grid without Shadow -->
            <div class="grid grid-cols-1 md:grid-cols-2 mt-10 md:mt-16 sm:gap-x-20 md:gap-x-28 lg:gap-x-36 gap-y-14 sm:gap-y-20 md:gap-y-24">
                <?php
                $homepageServices = new WP_Query(array(
                    'posts_per_page' => 4,
                    'post_type' => 'service',
                    'meta_key' => 'sort_on_home_page',
                    'orderby' => 'meta_value_num',
                    'order' => 'ASC',
                    'meta_query' => array(
                        array(
                            'key' => 'show_on_home_page',
                            'compare' => '==',
                            'value' => 'Yes'
                        )
                    )
                ));

                while ($homepageServices->have_posts()) {
                    $homepageServices->the_post(); ?>
                    <div class="space-y-5">
                        <a href="<?php the_permalink(); ?>"><img src="<?php the_field('image'); ?>" /></a>
                        <div class="text-left">
                            <h3 class="text-xl font-semibold text-branddark">
                                <?php the_title(); ?>
                            </h3>
                            <p class="mt-4 text-branddark/80 font-light mb-5">
                                <?php if (has_excerpt()) {
                                    echo get_the_excerpt();
                                } else {
                                    echo wp_trim_words(get_the_content(), 18);
                                }  ?>
                            </p>
                            <a href="<?php the_permalink(); ?>" class="text-branddark hover:text-brandsecond font-semibold transition-all inline-block">
                                <div class="flex items-center gap-3 border-b border-b-branddark hover:border-b-brandsecond w-fit">
                                    <span>Learn More</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-7">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>

    <section class="bg-branddark">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 items-center">
                <div class="pt-20 pb-10 lg:pt-32 lg:pb-32">
                    <p class="uppercase text-brandsecond font-semibold mb-3">
                        Free Website Analysis
                    </p>
                    <h2
                        class="text-4xl md:text-5xl font-semibold mb-3 md:mb-5 text-white !leading-tight">
                        Get a Free Expert Analysis of Your Website’s SEO and Performance.
                    </h2>
                    <p class="md:text-lg text-white mb-2">
                        Our in-depth report highlights key areas for improvement and
                        provides actionable insights tailored to your business. See
                        real results with:
                    </p>
                    <ul
                        class="md:text-lg text-white list-disc list-inside mb-10 md:mb-16">
                        <li>Up to a 25% boost in website performance</li>
                        <li>Reduced bounce rates</li>
                        <li>Increased user engagement</li>
                        <li>Detailed analysis of SEO opportunities</li>
                        <li>Personalized recommendations for growth</li>
                    </ul>

                    <a
                        href="<?php echo site_url('/free-seo'); ?>"
                        class="px-7 py-4 font-semibold border border-brandsecond text-white bg-brandsecond hover:bg-transparent transition-all hover:text-white rounded-full"
                        id="headerbutton">
                        Get My Free Analysis
                    </a>
                </div>
                <div class="mb-20 lg:mb-0">
                    <img src="<?php echo get_theme_file_uri('/assets/images/SEO-graphic.png'); ?>" />
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 lg:py-32 bg-brandlight">
        <div class="container mx-auto px-4">
            <div class="uppercase text-brandsecond font-semibold text-center">
                Our Blog
            </div>
            <h2 class="text-4xl md:text-5xl font-semibold text-center mb-12">
                Latest Insights
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-8 mb-10">
                <?php
                $homepagePosts = new WP_Query(array(
                    'posts_per_page' => 3
                ));

                while ($homepagePosts->have_posts()) {
                    $homepagePosts->the_post(); ?>

                    <div class="bg-white rounded-md space-y-4">
                        <div class="w-full h-fit overflow-hidden">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('full', ['class' => 'h-60 w-full object-cover hover:scale-110 transition-all duration-500']); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-sm.jpg" class="h-60 w-full object-cover hover:scale-110 transition-all duration-500" />
                                <?php endif; ?>
                            </a>
                        </div>

                        <div class="text-branddark px-5 pb-7 pt-2">
                            <div class="uppercase text-sm font-bold mb-1 text-brandsecond">
                                <?php echo get_the_category_list(', '); ?>
                            </div>
                            <div class="uppercase text-sm font-semibold mb-3 text-branddark/60">
                                <?php
                                $post_content = get_the_content();
                                $read_time = get_read_time($post_content);
                                ?>
                                <?php echo $read_time . ' min read'; ?> - by <?php the_author(); ?>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="text-2xl mb-4 font-semibold block">
                                <?php the_title(); ?>
                            </a>
                            <p class="card-description font-light text-branddark/80">
                                <?php if (has_excerpt()) {
                                    echo get_the_excerpt();
                                } else {
                                    echo wp_trim_words(get_the_content(), 18);
                                }  ?>
                            </p>
                        </div>
                    </div>
                <?php
                }

                wp_reset_postdata();
                ?>
            </div>
            <div class="text-center">
                <a
                    href="<?php echo site_url('/blog'); ?>"
                    class="px-7 py-4 font-semibold border border-brandsecond text-branddark hover:bg-brandsecond transition-all hover:text-white rounded-full"
                    id="headerbutton">
                    Read More
                </a>
            </div>
        </div>
    </section>

    <section class="py-20 lg:py-32 bg-branddark">
        <div class="container space-y-10 md:space-y-16">
            <div class="flex flex-col lg:flex-row items-center justify-between">
                <h2 class="text-white text-4xl md:text-5xl !leading-tight font-semibold mb-3 md:mb-5 lg:w-[75%]">
                    CodeCraft delivers custom digital solutions to
                    <span class="text-brandsecond">boost</span> your growth.
                </h2>
                <!-- <a href="/"  class="px-7 py-3 rounded-full font-semibold border border-brandsecond text-white hover:bg-brandsecond transition-all hover:text-white">
                    Contact Us
                </a> -->
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 border border-brandlight/20 divide-y md:divide-x divide-brandlight/20 rounded-2xl">
                <div class="space-y-3 text-white p-7">
                    <!-- <div class="h-[3px] w-28 bg-brandsecond"></div> -->
                    <h3 class="py-0 text-xl md:text-3xl font-semibold">
                        Create
                    </h3>
                    <p class="md:text-lg font-light">
                        We transform your ideas into stunning digital experiences
                        through custom design and development. Every solution is
                        crafted to be user-friendly, visually striking, and aligned
                        with your business goals.
                    </p>
                </div>
                <div class="space-y-3 text-white p-7 bg-brandlight/5">
                    <!-- <div class="h-[3px] w-28 bg-brandsecond"></div> -->
                    <h3 class="py-0 text-xl md:text-3xl font-semibold">
                        Optimize
                    </h3>
                    <p class="md:text-lg font-light">
                        Our expert optimization services ensure your digital assets
                        perform at their peak. From SEO to site performance, we
                        fine-tune every detail to maximize visibility and user
                        engagement.
                    </p>
                </div>
                <div class="space-y-3 text-white p-7">
                    <!-- <div class="h-[3px] w-28 bg-brandsecond"></div> -->
                    <h3 class="py-0 text-xl md:text-3xl font-semibold">
                        Elevate
                    </h3>
                    <p class="md:text-lg font-light">
                        We help your business grow through innovative strategies in
                        digital marketing and Salesforce development. Our goal is to
                        enhance customer experience and drive measurable results.
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>