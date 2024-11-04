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
                                <p
                                    class="text-brandlight text-2xl mb-2 border-b border-b-brandsecond w-fit">
                                    Blog
                                </p>
                                <h1 class="text-4xl md:text-5xl lg:text-6xl text-brandlight leading-[1.3!important] mb-3 font-semibold">
                                    <!-- We Craft Digital Excellence with Custom Solutions. -->
                                    <?php the_archive_title(); ?>
                                </h1>
                            </div>

                            <div class="gap-6 lg:text-xl">
                                <p class="text-brandlight/70">
                                    Insights, Strategies, and Expert Perspectives
                                    <!-- <?php the_archive_description(); ?> -->
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 lg:py-32 bg-brandlight">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 lg:gap-8 mb-10">
                <?php
                while (have_posts()) {
                    the_post(); ?>
                    <div class="bg-white rounded-md space-y-4">
                        <div class="w-full h-fit overflow-hidden">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('full', ['class' => 'h-72 w-full object-cover hover:scale-110 transition-all duration-500']); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-sm.jpg" class="h-72 w-full object-cover hover:scale-110 transition-all duration-500" />
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
                ?>
            </div>
            <?php
            echo paginate_links();
            ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>