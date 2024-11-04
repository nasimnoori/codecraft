<?php get_header(); ?>

<?php
while (have_posts()) {
  the_post();
?>
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
                  <p
                    class="text-brandlight text-2xl mb-2 border-b border-b-brandsecond w-fit">
                    <?php the_title(); ?>
                  </p>
                  <h1
                    class="text-4xl md:text-5xl lg:text-6xl text-brandlight leading-[1.3!important] mb-3 font-semibold">
                    <?php echo get_field('h1_title'); ?>
                  </h1>
                </div>

                <div class="gap-6 lg:text-xl">
                  <p class="text-brandlight/70">
                    <?php echo get_field('h2_text'); ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-20 lg:py-28 bg-brandlight">
      <div class="container mx-auto">
        <?php the_content(); ?>
      </div>
    </section>
  </main>
<?php
}
?>
<?php get_footer(); ?>