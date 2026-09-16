<?php get_header(); ?>

<main class="bg-[#F7F3ED]">

  <!-- HERO -->
   <section class="relative bg-cover bg-center bg-no-repeat before:absolute before:inset-0 before:bg-black/50" style="background-image:url('<?php echo get_header_image(); ?>');">
    <div class="container relative z-10 mx-auto px-6 pt-32 pb-48">
      <div class="max-w-3xl">
        <h1 class="mb-6 text-4xl font-bold leading-tight text-white md:text-6xl">
          <?php the_title(); ?>
        </h1>
                <div class="mb-8 space-y-4 text-xl text-white md:pr-12 [&_p]:text-white [&_p]:text-xl">
          <?php the_content(); ?>
        </div>
        <div class="flex flex-col space-y-4 sm:flex-row sm:space-x-4 sm:space-y-0">
          <a href="#menu" class="inline-flex items-center justify-center rounded-lg bg-[#2B2118] py-3 px-8 font-bold text-[#F7F3ED] transition transform hover:-translate-y-1 hover:bg-[#6F5540]">Explore Our Menu</a>
          <a href="#contact" class="inline-flex items-center justify-center rounded-lg border-2 border-white bg-transparent py-3 px-8 font-bold text-white transition transform hover:-translate-y-1 hover:bg-white hover:text-[#2B2118]">Order Now</a>
        </div>
      </div>
    </div>
  </section>

  <!-- FEATURED POSTS -->
  <?php
  $sticky = get_option( 'sticky_posts' );
  if ( ! empty( $sticky ) ) :
      $featured = new WP_Query( array(
          'post__in'       => array_slice( $sticky, 0, 3 ),
          'posts_per_page' => 3,
          'ignore_sticky_posts' => true,
      ) );

      if ( $featured->have_posts() ) : ?>

        <section class="px-4 py-24">
          <div class="mx-auto max-w-6xl">
            <p class="text-center text-xs font-medium uppercase tracking-[0.3em] text-[#C8A98A]">Reader Favorites</p>
            <h2 class="mt-4 text-center font-serif text-4xl font-medium text-[#2B2118]">Featured Posts</h2>

            <div class="relative mt-12">
              <div class="carousel flex snap-x snap-mandatory gap-6 overflow-x-auto pb-4 [scrollbar-width:none] [&::-webkit-scrollbar]:hidden">

                <?php while ( $featured->have_posts() ) : $featured->the_post(); ?>

                  <a href="<?php the_permalink(); ?>" class="block w-[85%] shrink-0 snap-start self-stretch sm:w-[45%] lg:w-1/3">
                    <article class="flex h-full flex-col overflow-hidden rounded-2xl border border-[#D8CBBE] bg-white shadow-sm">

                      <?php if ( has_post_thumbnail() ) : ?>
                        <div class="h-44 shrink-0 overflow-hidden">
                          <?php the_post_thumbnail( 'large', array( 'class' => 'h-44 w-full object-cover' ) ); ?>
                        </div>
                      <?php else : ?>
                        <div class="h-44 shrink-0 bg-[#EDE5DB]"></div>
                      <?php endif; ?>

                      <div class="flex flex-1 flex-col p-6">
                        <h3 class="font-serif text-xl font-medium leading-snug text-[#2B2118]"><?php the_title(); ?></h3>
                        <p class="mt-3 text-[#6F5540]"><?php echo wp_trim_words( get_the_excerpt(), 12 ); ?></p>
                        <span class="mt-auto inline-block pt-4 font-semibold text-[#C8A98A]">Read More →</span>
                      </div>

                    </article>
                  </a>

                <?php endwhile; ?>

              </div>

              <button type="button" class="car-prev absolute top-1/2 left-0 -translate-y-1/2 rounded-full bg-[#2B2118] p-2 text-[#F7F3ED] opacity-80 transition-opacity hover:opacity-100">‹</button>
              <button type="button" class="car-next absolute top-1/2 right-0 -translate-y-1/2 rounded-full bg-[#2B2118] p-2 text-[#F7F3ED] opacity-80 transition-opacity hover:opacity-100">›</button>
            </div>
          </div>
        </section>

      <?php endif;
      wp_reset_postdata();
  endif;
  ?>

  <!-- LATEST POSTS -->
  <?php
    $latest = new WP_Query( array(
      'posts_per_page'      => 5,
      'ignore_sticky_posts' => true,
      'category__not_in'    => array( get_category_by_slug('services')->term_id ),
  ) );

  if ( $latest->have_posts() ) : ?>

    <section class="px-4 pb-24">
      <div class="mx-auto max-w-6xl">
        <p class="text-center text-xs font-medium uppercase tracking-[0.3em] text-[#C8A98A]">Fresh From the Cafe</p>
        <h2 class="mt-4 text-center font-serif text-4xl font-medium text-[#2B2118]">Latest Posts</h2>

        <div class="relative mt-12">
          <div class="carousel flex snap-x snap-mandatory gap-6 overflow-x-auto pb-4 [scrollbar-width:none] [&::-webkit-scrollbar]:hidden">

            <?php while ( $latest->have_posts() ) : $latest->the_post(); ?>

              <a href="<?php the_permalink(); ?>" class="block w-[85%] shrink-0 snap-start self-stretch sm:w-[45%] lg:w-1/3">
                <article class="flex h-full flex-col overflow-hidden rounded-2xl border border-[#D8CBBE] bg-white shadow-sm">

                  <?php if ( has_post_thumbnail() ) : ?>
                    <div class="h-44 shrink-0 overflow-hidden">
                      <?php the_post_thumbnail( 'large', array( 'class' => 'h-44 w-full object-cover' ) ); ?>
                    </div>
                  <?php else : ?>
                    <div class="h-44 shrink-0 bg-[#EDE5DB]"></div>
                  <?php endif; ?>

                  <div class="flex flex-1 flex-col p-6">
                    <h3 class="font-serif text-xl font-medium leading-snug text-[#2B2118]"><?php the_title(); ?></h3>
                    <p class="mt-3 text-[#6F5540]"><?php echo wp_trim_words( get_the_excerpt(), 12 ); ?></p>
                    <span class="mt-auto inline-block pt-4 font-semibold text-[#C8A98A]">Read More →</span>
                  </div>

                </article>
              </a>

            <?php endwhile; ?>

          </div>

          <button type="button" class="car-prev absolute top-1/2 left-0 -translate-y-1/2 rounded-full bg-[#2B2118] p-2 text-[#F7F3ED] opacity-80 transition-opacity hover:opacity-100">‹</button>
          <button type="button" class="car-next absolute top-1/2 right-0 -translate-y-1/2 rounded-full bg-[#2B2118] p-2 text-[#F7F3ED] opacity-80 transition-opacity hover:opacity-100">›</button>
        </div>
      </div>
    </section>

  <?php endif;
  wp_reset_postdata();
  ?>

</main>

<?php get_footer(); ?>