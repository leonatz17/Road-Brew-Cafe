<?php get_header(); ?>

<main class="relative bg-cover bg-center bg-no-repeat before:absolute before:inset-0 before:bg-black/50" style="background-image: url('<?php echo get_header_image() ? get_header_image() : get_template_directory_uri() . '/assets/images/road-brew.png'; ?>');">
    <div class="container relative z-10 mx-auto px-6 pt-32 pb-48">
        <div class="max-w-3xl">
            <h1 class="mb-6 text-4xl font-bold leading-tight text-white md:text-6xl">Come for the Coffee, <br>Stay for the Moment.</h1>
            <p class="mb-8 text-xl text-white md:pr-12">Freshly roasted beans, cozy corners, and delicious pastries — handcrafted every day at Road Brew Cafe.</p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:space-x-4 sm:space-y-0">
                <a href="#menu" class="inline-flex items-center justify-center rounded-lg bg-[#2B2118] py-3 px-8 font-bold text-[#F7F3ED] transition transform hover:-translate-y-1 hover:bg-[#6F5540]">Explore Our Menu</a>
                <a href="#contact" class="inline-flex items-center justify-center rounded-lg border-2 border-white bg-transparent py-3 px-8 font-bold text-white transition transform hover:-translate-y-1 hover:bg-white hover:text-[#2B2118]">Order Now</a>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>