<?php get_header(); ?>

<main class="bg-[#F7F3ED] px-4 py-24">
  <div class="mx-auto grid max-w-6xl grid-cols-1 gap-10 lg:grid-cols-[1fr_300px]">

    <section>

      <div class="mb-12 text-center">
        <p class="text-xs font-medium uppercase tracking-[0.3em] text-[#C8A98A]">Search</p>
        <h1 class="mt-4 font-serif text-4xl font-medium text-[#2B2118] md:text-5xl">
          Results for: "<?php echo esc_html( get_search_query() ); ?>"
        </h1>
      </div>

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article class="mb-10 rounded-2xl border border-[#D8CBBE] bg-white p-8">
          <h2 class="font-serif text-2xl font-medium text-[#2B2118]">
            <a href="<?php the_permalink(); ?>" class="transition-colors duration-200 hover:text-[#6F5540]">
              <?php the_title(); ?>
            </a>
          </h2>

          <p class="mt-3 text-sm text-[#6F5540]">
            <?php echo get_the_date( 'M j, Y' ); ?>
          </p>

          <div class="mt-4 text-lg leading-relaxed text-[#6F5540]">
            <?php the_excerpt(); ?>
          </div>
        </article>

      <?php endwhile; else : ?>

        <div class="rounded-2xl border border-[#D8CBBE] bg-white p-12 text-center">
          <h2 class="font-serif text-3xl font-medium text-[#2B2118]">No results found</h2>
          <p class="mt-4 text-[#6F5540]">
            We couldn't find anything matching your search.
          </p>
        </div>

      <?php endif; ?>

    </section>

    <?php get_sidebar(); ?>

  </div>
</main>

<?php get_footer(); ?>