<?php
/*
Template Name: Contact Page
*/
get_header();
?>

<main class="bg-[#F7F3ED]">

    <!-- HERO -->
  <section class="border-b border-[#D8CBBE] px-4 py-24 text-center">
    <p class="text-xs font-medium uppercase tracking-[0.3em] text-[#C8A98A]">Get in Touch</p>
    <h1 class="mt-4 font-serif text-4xl font-medium text-[#2B2118] md:text-5xl">
      <?php the_title(); ?>
    </h1>
    <div class="mx-auto mt-6 max-w-2xl text-lg leading-relaxed text-[#6F5540]">
      <?php the_content(); ?>
    </div>
  </section>

  <!-- CONTACT INFO -->
  <section class="px-4 py-24">
    <div class="mx-auto grid max-w-6xl grid-cols-1 gap-8 md:grid-cols-3">

      <div class="rounded-2xl border border-[#D8CBBE] bg-white p-8 text-center">
        <h2 class="font-serif text-xl font-medium text-[#2B2118]">Visit Us</h2>
        <p class="mt-4 text-[#6F5540]">
          <?php echo get_field( 'address' ) ?: '123 Brew Street, Coffee Corner City'; ?>
        </p>
      </div>

      <div class="rounded-2xl border border-[#D8CBBE] bg-white p-8 text-center">
        <h2 class="font-serif text-xl font-medium text-[#2B2118]">Call Us</h2>
        <p class="mt-4 text-[#6F5540]">
          <?php echo get_field( 'phone_number' ) ?: '+63 912 345 6789'; ?>
        </p>
      </div>

      <div class="rounded-2xl border border-[#D8CBBE] bg-white p-8 text-center">
        <h2 class="font-serif text-xl font-medium text-[#2B2118]">Email Us</h2>
        <p class="mt-4 break-all text-[#6F5540]">
          <?php echo get_field( 'email' ) ?: 'hello@roadbrew.com'; ?>
        </p>
      </div>

    </div>
  </section>

  <!-- SIMPLE FORM -->
  <section class="px-4 pb-24">
    <div class="mx-auto max-w-2xl rounded-2xl border border-[#D8CBBE] bg-white p-8 md:p-10">

      <h2 class="text-center font-serif text-3xl font-medium text-[#2B2118]">Send a Message</h2>

      <form class="mt-8 space-y-5" action="mailto:<?php echo get_field( 'email' ) ?: 'hello@roadbrew.com'; ?>" method="get" enctype="text/plain">

        <input type="text" name="Name" placeholder="Your name" class="w-full rounded-xl border border-[#D8CBBE] bg-[#F7F3ED] p-3 text-[#2B2118] placeholder:text-[#A89583] focus:border-[#C8A98A] focus:bg-white focus:outline-none">

        <input type="email" name="Email" placeholder="you@email.com" class="w-full rounded-xl border border-[#D8CBBE] bg-[#F7F3ED] p-3 text-[#2B2118] placeholder:text-[#A89583] focus:border-[#C8A98A] focus:bg-white focus:outline-none">

        <textarea name="Message" rows="5" placeholder="How can we help?" class="w-full rounded-xl border border-[#D8CBBE] bg-[#F7F3ED] p-3 text-[#2B2118] placeholder:text-[#A89583] focus:border-[#C8A98A] focus:bg-white focus:outline-none"></textarea>

        <button type="submit" class="w-full rounded-xl bg-[#2B2118] py-3 font-semibold text-[#F7F3ED] transition-colors duration-200 hover:bg-[#6F5540]">
          Send Message
        </button>

      </form>

    </div>
  </section>

</main>

<?php get_footer(); ?>