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

  <nav class="border-b border-[#D8CBBE]" aria-label="Main navigation">

    <div class="mx-auto flex h-20 max-w-7xl items-center justify-between px-4">

            <!-- LEFT: Logo -->
      <div class="flex items-center gap-3">
        <?php if ( has_custom_logo() ) : ?>
          <?php the_custom_logo(); ?>
        <?php else : ?>
          <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-[#2B2118] ring-2 ring-[#C8A98A]">
            <svg viewBox="0 0 24 24" class="h-6 w-6 text-[#C8A98A]" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="M18 8h1a4 4 0 0 1 0 8h-1"></path>
              <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path>
              <line x1="6" y1="1" x2="6" y2="4"></line>
              <line x1="10" y1="1" x2="10" y2="4"></line>
              <line x1="14" y1="1" x2="14" y2="4"></line>
            </svg>
          </span>
        <?php endif; ?>

        <a href="<?php echo home_url( '/' ); ?>" class="font-serif text-2xl font-medium tracking-[0.08em] text-[#2B2118] rounded-md focus:outline-none focus-visible:ring-2 focus-visible:ring-[#6F5540]">
          ROAD BREW CAFE
        </a>
      </div>
      <!-- CENTER: Navigation -->
      <nav aria-label="Primary navigation">
        <?php
        wp_nav_menu( array(
            'theme_location' => 'primary',
            'container'      => false,
            'menu_class'     => 'flex items-center gap-7 list-none',
            'fallback_cb'    => false,
        ) );
        ?>
      </nav>

    </div>

  </nav>

</header>