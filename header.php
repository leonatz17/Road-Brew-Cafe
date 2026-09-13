<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Road Brew Cafe</title>
     <?php wp_head() ?>

</head>
<body>

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
      <a href="#" class="rounded-md focus:outline-none focus-visible:ring-2 focus-visible:ring-[#6F5540]">
        <span class="font-serif text-2xl font-medium tracking-[0.08em] text-[#2B2118]">
          ROAD BREW CAFE
        </span>
      </a>

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