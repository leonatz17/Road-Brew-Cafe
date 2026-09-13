<?php get_header(); ?>

<main class="bg-[#F7F3ED] px-4 py-24">
    <div class="mx-auto grid max-w-6xl grid-cols-1 gap-10 lg:grid-cols-[1fr_300px]">

        <section>

            <header class="mb-8 text-center">
                <p class="text-xs font-medium uppercase tracking-[0.3em] text-[#C8A98A]">Explore</p>
                <h1 class="mt-4 font-serif text-4xl font-medium text-[#2B2118] md:text-5xl">
                    <?php the_archive_title(); ?>
                </h1>
                <div class="mt-3 text-[#6F5540]">
                    <?php the_archive_description(); ?>
                </div>
            </header>

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <article class="mb-10 overflow-hidden rounded-2xl border border-[#D8CBBE] bg-white shadow-sm">

                    <?php if ( has_post_thumbnail() ) : ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail( 'large', array( 'class' => 'h-40 w-full object-cover' ) ); ?>
                        </a>
                    <?php endif; ?>

                    <div class="p-8">
                        <h2 class="font-serif text-2xl font-medium text-[#2B2118]">
                            <a href="<?php the_permalink(); ?>" class="transition-colors duration-200 hover:text-[#6F5540]">
                                <?php the_title(); ?>
                            </a>
                        </h2>

                        <p class="mt-4 text-lg leading-relaxed text-[#6F5540]">
                            <?php echo wp_trim_words( get_the_excerpt(), 15 ); ?>
                        </p>

                        <a href="<?php the_permalink(); ?>"
                           class="mt-6 inline-block font-semibold text-[#C8A98A] transition-colors duration-200 hover:text-[#2B2118]">
                            Read More →
                        </a>
                    </div>

                </article>

            <?php endwhile; else : ?>

                <p class="text-[#6F5540]">No posts found.</p>

            <?php endif; ?>
        </section>

        <?php get_sidebar(); ?>

    </div>
</main>

<?php get_footer(); ?>