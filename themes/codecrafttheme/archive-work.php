<?php get_header(); ?>

<main class="flex-grow">
    <section
        class="relative min-h-full bg-cover bg-center bg-branddark"
        style="background-image: url('<?php echo get_theme_file_uri('/assets/images/wil-stewart.jpg'); ?>')">

        <div class="py-16 md:py-24 bg-branddark bg-opacity-70">
            <!-- Optional overlay for better text contrast -->
            <div class="container mx-auto flex h-full">
                <div class="flex items-center justify-between w-full">
                    <div class="w-full">
                        <div class="w-full">
                            <div class="lg:w-[70%] mb-7">
                                <a href="<?php get_post_type_archive_link('work'); ?>" class="text-brandlight text-2xl mb-2 border-b border-b-brandsecond w-fit">
                                    Work
                                </a>
                                <h1 class="text-4xl md:text-5xl lg:text-6xl text-brandlight leading-[1.3!important] mb-3 font-semibold">
                                    Crafting Solutions That Drive Success
                                </h1>
                            </div>

                            <div class="gap-6 lg:text-xl">
                                <p class="text-brandlight/70">
                                    Explore our portfolio of impactful projects across web development, software solutions, and digital marketing.
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
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-8 mb-10">
                <?php
                while (have_posts()) {
                    the_post(); ?>
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