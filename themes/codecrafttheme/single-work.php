<?php get_header(); ?>

<?php
while (have_posts()) {
    the_post();
?>
    <main class="flex-grow">
        <section
            class="relative min-h-full bg-cover bg-center bg-branddark"
            style="background-image: url('<?php
                                            if (has_post_thumbnail()) {
                                                echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full'));
                                            } else {
                                                echo esc_url(get_theme_file_uri('/assets/images/wil-stewart.jpg'));
                                            }
                                            ?>')">

            <div class="py-16 md:py-24 bg-branddark bg-opacity-90">
                <!-- Optional overlay for better text contrast -->
                <div class="container mx-auto flex h-full">
                    <div class="flex items-center justify-between w-full">
                        <div class="w-full">
                            <div class="w-full">
                                <div class="lg:w-[70%] mb-7">
                                    <a href="<?php echo get_field('website_url'); ?>" target="_blank"
                                        class="text-brandlight text-2xl mb-3 md:mb-6 border-b border-b-brandsecond w-fit inline-block">
                                        <?php echo get_field('company_name'); ?>
                                    </a>
                                    <h1
                                        class="text-4xl md:text-5xl text-brandlight !leading-normal mb-3 font-semibold">
                                        <!-- We Craft Digital Excellence with Custom Solutions. -->
                                        <?php the_title(); ?>
                                    </h1>
                                </div>

                                <div class="gap-6 lg:text-xl">
                                    <p class="text-brandlight/70">
                                        <?php echo get_the_excerpt(); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="py-20 lg:py-32 bg-brandlight space-y-5">
            <div class="container mx-auto">
                <?php the_content(); ?>
                <?php
                $relatedServices = get_field('related_services');

                if ($relatedServices) : ?>

                    <h3 class="text-2xl md:text-3xl font-semibold text-branddark py-7">Services We Delivered</h3>
                    <ul class="space-y-3">
                        <?php foreach ($relatedServices as $service) : ?>
                            <li>
                                <a href="<?php echo esc_url(get_the_permalink($service)); ?>" class="text-branddark hover:text-brandsecond font-semibold transition-all inline-block">
                                    <div class="flex items-center gap-3 border-b border-b-branddark hover:border-b-brandsecond w-fit">
                                        <?php echo esc_html(get_the_title($service)); ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-7">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                                        </svg>
                                    </div>

                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </section>

    </main>
<?php
}
?>
<?php get_footer(); ?>