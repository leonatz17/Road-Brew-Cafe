<?php get_header(); ?>

<main class="bg-[#F7F3ED] px-4 py-20">
  <div class="mx-auto grid max-w-6xl grid-cols-1 gap-10 lg:grid-cols-[1fr_300px]">

    <div>

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article class="rounded-3xl border border-[#D8CBBE] bg-white p-8 shadow-sm md:p-12">

          <p class="text-center text-xs font-medium uppercase tracking-[0.3em] text-[#C8A98A]">Blog Post</p>

          <h1 class="mt-4 text-center font-serif text-3xl font-medium leading-tight text-[#2B2118] md:text-5xl">
            <?php the_title(); ?>
          </h1>

          <!-- Meta -->
          <div class="mt-6 flex flex-wrap items-center justify-center gap-3 text-sm text-[#6F5540]">
            <span class="font-semibold"><?php the_author(); ?></span>
            <span class="text-[#C8A98A]">|</span>
            <span><?php echo get_the_date( 'M j, Y' ); ?></span>
          </div>

          <?php if ( has_post_thumbnail() ) : ?>
            <div class="mt-10 overflow-hidden rounded-2xl border border-[#D8CBBE]">
              <?php the_post_thumbnail( 'large', array( 'class' => 'h-auto w-full object-cover' ) ); ?>
            </div>
          <?php endif; ?>

          <!-- Content -->
          <div class="mt-8 space-y-6 text-lg leading-relaxed text-[#6F5540]">
            <?php the_content(); ?>
          </div>

          <!-- Categories & Tags -->
          <div class="mt-8 text-sm text-[#6F5540]">
            <strong class="text-[#2B2118]">Categories:</strong>
            <?php the_category( ', ' ); ?>
          </div>
          <?php the_tags(
            '<div class="mt-3 text-sm text-[#6F5540]"><strong class="text-[#2B2118]">Tags:</strong> ', ', ', '</div>'
          ); ?>

        </article>

      <?php endwhile; endif; ?>

      <!-- RELATED POSTS -->
      <?php
      $categories = get_the_category();
      if ( ! empty( $categories ) ) :
          $related_posts = new WP_Query( array(
              'cat'             => $categories[0]->term_id,
              'posts_per_page'  => 3,
              'post__not_in'    => array( get_the_ID() ),
              'ignore_sticky_posts' => true,
          ) );

          if ( $related_posts->have_posts() ) : ?>

            <div class="mt-16">
              <p class="text-center text-xs font-medium uppercase tracking-[0.3em] text-[#C8A98A]">Keep Reading</p>
              <h2 class="mt-4 text-center font-serif text-3xl font-medium text-[#2B2118]">Related Posts</h2>

              <div class="mt-8 grid grid-cols-1 gap-4 sm:grid-cols-3">

                <?php while ( $related_posts->have_posts() ) : $related_posts->the_post(); ?>

                  <a href="<?php the_permalink(); ?>"
                     class="group flex flex-col rounded-xl border border-[#D8CBBE] bg-white p-4 transition-colors duration-200 hover:bg-[#F7F3ED]">

                    <h3 class="font-serif text-lg font-bold leading-snug text-[#2B2118] group-hover:text-[#6F5540]">
                      <?php the_title(); ?>
                    </h3>

                    <div class="mt-2 flex flex-wrap items-center gap-2 text-xs text-[#6F5540]">
                      <span class="font-semibold"><?php the_author(); ?></span>
                      <span class="text-[#C8A98A]">|</span>
                      <span><?php echo get_the_date( 'M j, Y' ); ?></span>
                    </div>

                  </a>

                <?php endwhile; ?>

              </div>
            </div>

          <?php endif;
          wp_reset_postdata();
      endif;
      ?>

    </div>

    <?php get_sidebar(); ?>

  </div>
</main>

<?php get_footer(); ?>