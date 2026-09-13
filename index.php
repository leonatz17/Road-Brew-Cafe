<?php get_header(); ?>

<main>
 <main class="relative bg-cover bg-center bg-no-repeat before:absolute before:inset-0 before:bg-black/50" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/road-brew.png');">
    <div class="container mx-auto px-6 pt-32 pb-48 relative z-10">
        <div class="max-w-3xl">
            <h1 class="text-4xl md:text-6xl font-bold text-white leading-tight mb-6 ">Come for the Coffee, <br>Stay for the Moment.</h1>
            <p class="text-xl text-white mb-8 md:pr-12">Freshly roasted beans, cozy corners, and delicious pastries — handcrafted every day at Road Brew Cafe.</p>
            <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="#menu" class="bg-[#2B2118] hover:bg-[#6F5540] text-[#F7F3ED] font-bold py-3 px-8 rounded-lg transition transform hover:-translate-y-1 inline-flex items-center justify-center">
                    Explore Our Menu
                </a>
                <a href="#contact" class="bg-transparent border-2 border-white text-white hover:bg-white hover:text-[#2B2118] font-bold py-3 px-8 rounded-lg transition transform hover:-translate-y-1 inline-flex items-center justify-center">
                    Order Now
                </a>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>