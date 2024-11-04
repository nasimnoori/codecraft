<?php get_header(); ?>

<?php
while (have_posts()) {
  the_post();
?>
  <main class="flex-grow">
    <section
      class="relative min-h-full bg-cover bg-center bg-branddark"
      style="background-image: url('<?php if (has_post_thumbnail()) {
                                      echo get_the_post_thumbnail_url();
                                    } else {
                                      echo get_theme_file_uri('/assets/images/background-dark.jpg');
                                    } ?>')">

      <div class="py-16 md:py-24 bg-branddark bg-opacity-90">
        <!-- Optional overlay for better text contrast -->
        <div class="container mx-auto flex h-full">
          <div class="flex items-center justify-between w-full">
            <div class="w-full">
              <div class="w-full">
                <div class="lg:w-[70%] mb-7">
                  <p
                    class="text-brandlight text-2xl mb-2 border-b border-b-brandsecond w-fit">
                    <?php echo get_the_category_list(', '); ?>
                  </p>
                  <h1
                    class="text-4xl md:text-5xl lg:text-6xl text-brandlight leading-[1.3!important] mb-3 font-semibold">
                    <!-- We Craft Digital Excellence with Custom Solutions. -->
                    <?php the_title(); ?>
                  </h1>
                </div>

                <div class="gap-6 lg:text-xl">
                  <div class="text-brandlight/80 uppercase flex flex-col md:flex-row md:items-center">
                    <?php
                    $post_content = get_the_content();
                    $read_time = get_read_time($post_content);
                    ?>
                    <div><?php echo $read_time . ' min read'; ?></div>
                    <div class="mx-3 h-2 w-2 rounded-full bg-brandsecond hidden md:block"></div>
                    <div>By <?php the_author_posts_link(); ?></div>
                    <div class="mx-3 h-2 w-2 rounded-full bg-brandsecond hidden md:block"></div>
                    <div><?php the_time('F j, Y'); ?></div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-20 lg:py-28 bg-brandlight">
      <div class="container">

        <?php the_content(); ?>
      </div>
    </section>
  </main>
<?php
}
?>
<?php get_footer(); ?>