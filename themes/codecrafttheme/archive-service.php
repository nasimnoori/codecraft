<?php get_header(); ?>

<main class="flex-grow">
    <section
        class="relative min-h-full bg-cover bg-center bg-branddark"
        style="background-image: url('<?php echo get_theme_file_uri('/assets/images/background-dark.jpg'); ?>')">

        <div class="py-16 md:py-24 bg-branddark bg-opacity-70">
            <!-- Optional overlay for better text contrast -->
            <div class="container mx-auto flex h-full">
                <div class="flex items-center justify-between w-full">
                    <div class="w-full">
                        <div class="w-full">
                            <div class="lg:w-[70%] mb-7">
                                <a
                                    href="<?php get_post_type_archive_link('service'); ?>"
                                    class="text-brandlight text-2xl mb-2 border-b border-b-brandsecond w-fit">
                                    Services
                                </a>
                                <h1
                                    class="text-4xl md:text-5xl lg:text-6xl text-brandlight leading-[1.3!important] mb-3 font-semibold">
                                    We Craft Digital Excellence with Custom Solutions.
                                </h1>
                            </div>

                            <div class="gap-6 lg:text-xl">
                                <p class="text-brandlight/70">
                                    <?php the_archive_description(); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 lg:py-40 bg-brandlight">
        <div class="container">

            <?php
            while (have_posts()) {
                the_post(); ?>
                <div class="">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                    <div>
                        <p>Posted by <?php the_author_posts_link(); ?> on <?php the_time('n.j.y'); ?> in <?php echo get_the_category_list(', '); ?></p>
                    </div>

                    <div>
                        <?php the_excerpt(); ?>
                    </div>
                </div>
            <?php
            }

            echo paginate_links();
            ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>