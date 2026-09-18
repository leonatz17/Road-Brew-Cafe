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

      <div class="cursor-pointer rounded-2xl border border-[#D8CBBE] bg-white p-8 text-center transition-all duration-300 hover:-translate-y-2 hover:border-[#C8A98A] hover:shadow-xl">
        <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-full bg-[#EDE5DB]">
          <svg class="h-7 w-7 text-[#6F5540]" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
          </svg>
        </div>
        <h2 class="mt-5 font-serif text-xl font-medium text-[#2B2118]">Visit Us</h2>
        <p class="mt-4 text-[#6F5540]">
          <?php echo get_field( 'address' ) ?: '123 Brew Street, Coffee Corner City'; ?>
        </p>
      </div>

      <div class="cursor-pointer rounded-2xl border border-[#D8CBBE] bg-white p-8 text-center transition-all duration-300 hover:-translate-y-2 hover:border-[#C8A98A] hover:shadow-xl">
        <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-full bg-[#EDE5DB]">
          <svg class="h-7 w-7 text-[#6F5540]" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
          </svg>
        </div>
        <h2 class="mt-5 font-serif text-xl font-medium text-[#2B2118]">Call Us</h2>
        <p class="mt-4 text-[#6F5540]">
          <?php echo get_field( 'phone_number' ) ?: '+63 912 345 6789'; ?>
        </p>
      </div>

      <div class="cursor-pointer rounded-2xl border border-[#D8CBBE] bg-white p-8 text-center transition-all duration-300 hover:-translate-y-2 hover:border-[#C8A98A] hover:shadow-xl">
        <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-full bg-[#EDE5DB]">
          <svg class="h-7 w-7 text-[#6F5540]" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/>
          </svg>
        </div>
        <h2 class="mt-5 font-serif text-xl font-medium text-[#2B2118]">Email Us</h2>
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