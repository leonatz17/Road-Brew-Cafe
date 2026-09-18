<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Road Brew Cafe</title>
     <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>

<header class="w-full bg-[#F7F3ED]">

  <!-- Top Announcement -->
  <div class="flex items-center justify-center bg-[#2B2118] p-2">
    <p class="text-xs font-medium tracking-[0.2em] text-[#F7F3ED]">
      WELCOME TO OUR LITTLE CORNER OF COFFEE
    </p>
  </div>

  <nav class="border-b border-[#D8CBBE] relative" aria-label="Main navigation">

    <div class="mx-auto flex h-20 max-w-7xl items-center justify-between px-4">

      <!-- LEFT: Logo -->
      <div class="flex items-center gap-3">
        <div class="h-10 w-10">
          <?php the_custom_logo(); ?>
        </div>
        <a href="<?php echo home_url( '/' ); ?>" class="font-serif text-xl font-medium tracking-[0.08em] text-[#2B2118] sm:text-2xl">
          <?php bloginfo('name'); ?>
        </a>
      </div>

      <!-- CENTER: Navigation (desktop only) -->
      <nav class="hidden lg:block" aria-label="Primary navigation">
        <?php
        wp_nav_menu( array(
            'theme_location' => 'primary',
            'container'      => false,
            'menu_class'     => 'flex items-center gap-7 list-none',
            'fallback_cb'    => false,
        ) );
        ?>
      </nav>

      <!-- HAMBURGER (mobile only) -->
      <button type="button" id="mobile-menu-btn" aria-label="Toggle menu" aria-expanded="false" aria-controls="mobile-menu"
              class="inline-flex h-10 w-10 items-center justify-center rounded-md text-[#2B2118] hover:bg-[#EDE5DB] lg:hidden">
        <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </button>

    </div>

    <!-- MOBILE MENU (hidden, toggled by JS) -->
    <div id="mobile-menu" class="hidden border-t border-[#D8CBBE] bg-[#F7F3ED] lg:hidden">
      <?php
      wp_nav_menu( array(
          'theme_location' => 'primary',
          'container'      => false,
          'menu_class'     => 'flex flex-col gap-1 px-4 py-4 list-none',
          'fallback_cb'    => false,
      ) );
      ?>
    </div>

  </nav>

</header>