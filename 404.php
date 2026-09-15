<?php get_header(); ?>

<main class="bg-[#F7F3ED] px-4 py-24">
  <div class="mx-auto max-w-3xl text-center">

    <p class="mb-4 font-serif text-4xl font-medium text-[#2B2118]">
      404
    </p>

    <h1 class="mb-4 font-serif text-4xl font-medium text-[#2B2118]">
      Page not found.
    </h1>

    <p class="mb-8 text-lg leading-relaxed text-[#6F5540]">
      Sorry, the page you're looking for doesn't exist or may have been moved.
    </p>

    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
       class="inline-block rounded-lg bg-[#2B2118] px-6 py-3 font-semibold text-[#F7F3ED] transition-colors duration-200 hover:bg-[#6F5540]">
      Back to Home
    </a>

  </div>
</main>

<?php get_footer(); ?>