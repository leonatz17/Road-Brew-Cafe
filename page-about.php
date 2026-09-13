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
  <section class="px-4 py-24">
    <div class="mx-auto grid max-w-6xl grid-cols-1 items-center gap-16 md:grid-cols-2">

      <div class="h-96 overflow-hidden rounded-2xl border border-[#D8CBBE] shadow-lg"
           style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/road-brew.png'); background-size: cover; background-position: center;">
      </div>

      <div>
        <p class="text-xs font-medium uppercase tracking-[0.3em] text-[#C8A98A]">Since Day One</p>
        <h2 class="mt-4 font-serif text-3xl font-medium leading-snug text-[#2B2118]">
          Every cup begins with a simple ritual.
        </h2>
        <p class="mt-6 text-lg leading-relaxed text-[#6F5540]">
          We source beans from farms that share our values, roast them in small batches, and brew them with patience. What we serve is more than coffee — it's a quiet moment in a busy day.
        </p>
        <p class="mt-4 text-lg leading-relaxed text-[#6F5540]">
          From our first pour to your last sip, we make room for people. That's the Road Brew way.
        </p>
      </div>

    </div>
  </section>

  <!-- VALUES -->
  <section class="bg-[#2B2118] px-4 py-24">
    <div class="mx-auto max-w-6xl">
      <p class="text-center text-xs font-medium uppercase tracking-[0.3em] text-[#C8A98A]">What We Stand For</p>
      <h2 class="mt-4 text-center font-serif text-3xl font-medium text-[#F7F3ED]">
        Three things we never compromise
      </h2>

      <div class="mt-16 grid grid-cols-1 gap-8 md:grid-cols-3">
        <div class="border border-[#6F5540]/40 p-10 text-center">
          <p class="font-serif text-4xl text-[#C8A98A]">01</p>
          <h3 class="mt-4 text-xl font-medium text-[#F7F3ED]">Thoughtfully Sourced</h3>
          <p class="mt-4 leading-relaxed text-[#D8CBBE]">Beans chosen from farms that care for their land, their pickers, and their craft.</p>
        </div>

        <div class="border border-[#6F5540]/40 p-10 text-center">
          <p class="font-serif text-4xl text-[#C8A98A]">02</p>
          <h3 class="mt-4 text-xl font-medium text-[#F7F3ED]">Slow-Roasted</h3>
          <p class="mt-4 leading-relaxed text-[#D8CBBE]">Small batches, patient heat, and a nose for the exact moment it all clicks.</p>
        </div>

        <div class="border border-[#6F5540]/40 p-10 text-center">
          <p class="font-serif text-4xl text-[#C8A98A]">03</p>
          <h3 class="mt-4 text-xl font-medium text-[#F7F3ED]">Made for Community</h3>
          <p class="mt-4 leading-relaxed text-[#D8CBBE]">Every table is a place to stay a while. You're not a customer — you're a regular.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- QUOTE -->
  <section class="px-4 py-24">
    <div class="mx-auto max-w-3xl text-center">
      <p class="font-serif text-2xl italic leading-relaxed text-[#6F5540] md:text-3xl">
        "Come for the coffee, stay for the moment."
      </p>
      <div class="mx-auto mt-6 h-px w-16 bg-[#C8A98A]"></div>
    </div>
  </section>

  <?php endwhile; ?>

</main>

<?php get_footer(); ?>