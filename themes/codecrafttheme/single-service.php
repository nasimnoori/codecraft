<?php get_header(); ?>

<?php
while (have_posts()) {
  the_post();
?>
  <main class="flex-grow">
    <section
      class="relative min-h-full bg-cover bg-center bg-branddark"
      style="background-image: url('<?php if (get_field('header_image')) {
                                      echo esc_url(get_field('header_image'));
                                    } else {
                                      echo esc_url(get_theme_file_uri('/assets/images/wil-stewart.jpg'));
                                    } ?>')">

      <div class="py-16 md:py-24 bg-branddark bg-opacity-70">
        <!-- Optional overlay for better text contrast -->
        <div class="container mx-auto flex h-full">
          <div class="flex items-center justify-between w-full">
            <div class="w-full">
              <div class="w-full">
                <div class="lg:w-[70%] mb-7">
                  <p
                    class="text-brandlight text-2xl mb-3 md:mb-6 border-b border-b-brandsecond w-fit">
                    <?php the_title(); ?>
                  </p>
                  <h1
                    class="text-4xl md:text-5xl text-brandlight !leading-normal mb-3 font-semibold">
                    <!-- We Craft Digital Excellence with Custom Solutions. -->
                    <?php echo get_field('h1_title'); ?>
                  </h1>
                </div>

                <div class="gap-6 lg:text-xl">
                  <p class="text-brandlight/70">
                    <?php echo get_field('h2_title'); ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-20 lg:py-32 bg-brandlight">
      <div class="container mx-auto">
        <?php the_content(); ?>
      </div>
    </section>

    <?php
    $current_service_id = get_the_ID();

    $related_work_posts = get_posts(array(
      'post_type' => 'work',
      'numberposts' => 3,
      'meta_query' => array(
        array(
          'key' => 'related_services',
          'value' => '"' . $current_service_id . '"',
          'compare' => 'LIKE'
        )
      )
    ));

    if ($related_work_posts) : ?>

      <section class="py-20 bg-brandlight border-t border-branddark/20">
        <div class="container mx-auto">

          <h2 class="text-2xl md:text-3xl font-semibold text-center text-branddark mb-10">Our Success Stories in <?php the_title(); ?></h2>
          <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-8">
            <?php foreach ($related_work_posts as $post) : setup_postdata($post); ?>
              <li class="bg-white rounded-md space-y-4 overflow-hidden">
                <div class="w-full h-fit overflow-hidden">
                  <a href="<?php the_permalink(); ?>">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail('full', ['class' => 'h-60 w-full object-cover hover:scale-110 transition-all duration-500']); ?>
                    <?php else : ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-sm.jpg" class="h-60 w-full object-cover hover:scale-110 transition-all duration-500" />
                    <?php endif; ?>
                  </a>
                </div>

                <div class="text-branddark px-5 py-2">
                  <a href="<?php the_permalink(); ?>" class="text-xl mb-4 font-semibold block">
                    <?php the_title(); ?>
                  </a>
                </div>
              </li>
            <?php endforeach; ?>
          </ul>

        </div>
      </section>
      <?php wp_reset_postdata(); ?>
    <?php endif;
    ?>
  </main>
<?php
}
?>
<?php get_footer(); ?>