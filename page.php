<?php get_header(); ?>

<main class="bg-[#F7F3ED] px-4 py-20">
    <div class="mx-auto max-w-4xl">

        <?php while ( have_posts() ) : the_post(); ?>

            <h1 class="text-4xl md:text-5xl font-bold text-[#2B2118]">
                <?php the_title(); ?>
            </h1>

            <div class="mt-8 text-lg leading-relaxed text-[#6F5540]">
                <?php the_content(); ?>
            </div>

        <?php endwhile; ?>

    </div>
</main>

<?php get_footer(); ?>