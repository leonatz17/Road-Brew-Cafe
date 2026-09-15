<?php
/*
Template Name: Services Page
*/
get_header();
?>

<main class="bg-[#F7F3ED]">

  <!-- HERO -->
  <section class="border-b border-[#D8CBBE] px-4 py-24 text-center">
    <p class="text-xs font-medium uppercase tracking-[0.3em] text-[#C8A98A]">What We Offer</p>
    <h1 class="mt-4 font-serif text-4xl font-medium text-[#2B2118] md:text-5xl">
      <?php the_title(); ?>
    </h1>
    <div class="mx-auto mt-6 max-w-2xl text-lg leading-relaxed text-[#6F5540]">
      <?php the_content(); ?>
    </div>
  </section>

  <!-- SERVICES -->
  <?php
  $services = new WP_Query( array(
      'category_name'  => 'services',
      'posts_per_page' => -1,
  ) );

  if ( $services->have_posts() ) : ?>

    <section class="px-4 py-24">
      <div class="mx-auto grid max-w-6xl grid-cols-1 gap-10 md:grid-cols-3">

        <?php while ( $services->have_posts() ) : $services->the_post(); ?>

          <article class="flex flex-col overflow-hidden rounded-2xl border border-[#D8CBBE] bg-white shadow-sm">

            <div class="h-48 overflow-hidden">
              <?php the_post_thumbnail( 'large', array( 'class' => 'h-48 w-full object-cover' ) ); ?>
            </div>

            <div class="flex flex-1 flex-col p-8">
              <h3 class="font-serif text-xl font-medium text-[#2B2118]">
                <?php the_title(); ?>
              </h3>

              <p class="mt-4 leading-relaxed text-[#6F5540]">
                <?php echo wp_trim_words( get_the_excerpt(), 20 ); ?>
              </p>

              <a href="<?php the_permalink(); ?>"
                 class="mt-auto inline-block pt-6 font-semibold text-[#C8A98A] transition-colors duration-200 hover:text-[#2B2118]">
                Read More →
              </a>
            </div>

          </article>

        <?php endwhile; ?>

      </div>
    </section>

  <?php endif;
  wp_reset_postdata();
  ?>

</main>

<?php get_footer(); ?>