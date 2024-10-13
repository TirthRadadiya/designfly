<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo("charset") ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
    <div class="bg-background p-4 shadow-md">
        <div class="flex items-center justify-between">

            <div class="flex items-center">
                <h1 class="text-3xl font-bold text-primary">D'SIGN</h1>
                <span class="text-3xl font-serif text-accent ml-1">fly</span>
            </div>


            <button id="menu-toggle"
                class="block md:hidden text-secondary hover:text-secondary-foreground focus:outline-none">
                <img aria-hidden="true" alt="menu-icon" src="https://openui.fly.dev/openui/24x24.svg?text=☰" />
            </button>

            <nav id="nav-links" class="hidden md:flex space-x-8">
                <a href="#" class="text-secondary hover:text-secondary-foreground">Home</a>
                <a href="#" class="text-secondary hover:text-secondary-foreground">Services</a>
                <a href="#" class="text-secondary hover:text-secondary-foreground">Portfolio</a>
                <a href="#" class="text-secondary hover:text-secondary-foreground">Blog</a>
                <a href="#" class="text-secondary hover:text-secondary-foreground">Contact</a>
            </nav>

            <div class="relative">
                <input type="text" placeholder="Search..."
                    class="border border-border rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-ring bg-input text-foreground" />
                <button class="absolute right-2 top-1/2 transform -translate-y-1/2">
                    <img aria-hidden="true" alt="search-icon" src="https://openui.fly.dev/openui/24x24.svg?text=🔍" />
                </button>
            </div>
        </div>
    </div>