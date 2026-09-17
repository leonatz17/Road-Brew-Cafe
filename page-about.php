<?php get_header(); ?>

<main class="bg-[#F7F3ED]">

  <?php while ( have_posts() ) : the_post(); ?>

  <!-- HERO -->
  <section class="border-b border-[#D8CBBE] px-4 py-24">
    <div class="mx-auto max-w-4xl text-center">
      <p class="text-xs font-medium uppercase tracking-[0.3em] text-[#C8A98A]">Our Story</p>
      <h1 class="mt-4 font-serif text-4xl font-medium leading-tight text-[#2B2118] md:text-5xl">
        <?php the_title(); ?>
      </h1>
      <div class="mx-auto mt-8 text-lg leading-relaxed text-[#6F5540]">
        <?php the_content(); ?>
      </div>
    </div>
  </section>

  <!-- STORY: image + text -->
  <?php
$story_query = new WP_Query( array(
    'category_name'     => 'story',
    'posts_per_page'    => 1,
    'ignore_sticky_posts' => true,
) );

if ( $story_query->have_posts() ) : while ( $story_query->have_posts() ) : $story_query->the_post(); ?>

<section class="px-4 py-24">
    <div class="mx-auto grid max-w-6xl grid-cols-1 items-center gap-16 md:grid-cols-2">

      <div class="h-96 overflow-hidden rounded-2xl border border-[#D8CBBE] shadow-lg">
        <?php the_post_thumbnail( 'large', array( 'class' => 'h-96 w-full object-cover' ) ); ?>
      </div>

      <div>
        <p class="text-xs font-medium uppercase tracking-[0.3em] text-[#C8A98A]">Since Day One</p>
        <h2 class="mt-4 font-serif text-3xl font-medium leading-snug text-[#2B2118]">
          <?php the_title(); ?>
        </h2>
        <div class="mt-6 text-lg leading-relaxed text-[#6F5540]">
          <?php the_content(); ?>
        </div>
      </div>

    </div>
</section>

<?php endwhile; wp_reset_postdata(); endif; ?>

  <!-- VALUES -->
    <section class="bg-[#2B2118] px-4 py-24">
    <div class="mx-auto max-w-6xl">
      <p class="text-center text-xs font-medium uppercase tracking-[0.3em] text-[#C8A98A]"><?php echo get_field('about_kicker'); ?></p>
      <h2 class="mt-4 text-center font-serif text-3xl font-medium text-[#F7F3ED]">
        <?php echo get_field('about_heading'); ?>
      </h2>

      <div class="mt-16 grid grid-cols-1 gap-8 md:grid-cols-3">
        <div class="border border-[#6F5540]/40 p-10 text-center">
          <p class="font-serif text-4xl text-[#C8A98A]"><?php echo get_field('value_1_no'); ?></p>
          <h3 class="mt-4 text-xl font-medium text-[#F7F3ED]"><?php echo get_field('value_1_title'); ?></h3>
          <p class="mt-4 leading-relaxed text-[#D8CBBE]"><?php echo get_field('value_1_text'); ?></p>
        </div>

        <div class="border border-[#6F5540]/40 p-10 text-center">
          <p class="font-serif text-4xl text-[#C8A98A]"><?php echo get_field('value_2_no'); ?></p>
          <h3 class="mt-4 text-xl font-medium text-[#F7F3ED]"><?php echo get_field('value_2_title'); ?></h3>
          <p class="mt-4 leading-relaxed text-[#D8CBBE]"><?php echo get_field('value_2_text'); ?></p>
        </div>

        <div class="border border-[#6F5540]/40 p-10 text-center">
          <p class="font-serif text-4xl text-[#C8A98A]"><?php echo get_field('value_3_no'); ?></p>
          <h3 class="mt-4 text-xl font-medium text-[#F7F3ED]"><?php echo get_field('value_3_title'); ?></h3>
          <p class="mt-4 leading-relaxed text-[#D8CBBE]"><?php echo get_field('value_3_text'); ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- QUOTE -->
  <section class="px-4 py-24">
    <div class="mx-auto max-w-3xl text-center">
      <p class="font-serif text-2xl italic leading-relaxed text-[#6F5540] md:text-3xl">
        <?php echo get_field('quote_text'); ?>
      </p>
      <div class="mx-auto mt-6 h-px w-16 bg-[#C8A98A]"></div>
    </div>
  </section>

  <?php endwhile; ?>

</main>

<?php get_footer(); ?>