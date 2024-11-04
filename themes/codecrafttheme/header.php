<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="<?php bloginfo('charset'); ?>" />
    <?php wp_head(); ?>
</head>

<body <?php body_class('!font-display') ?>>
    <div class="flex flex-col min-h-screen">
        <header class="px-6 md:px-0 sticky top-0 z-50 transition-colors duration-300 bg-branddark text-brandlight">
            <div class="md:container mx-auto">
                <div class="flex items-center justify-between h-20">
                    <!-- Logo -->
                    <a href="/" class="h-10 lg:h-10 block">
                        <img src="<?php echo get_theme_file_uri('/assets/images/CodeCraft-3-Light.png'); ?>" class="logo-light h-full transition-all" />
                        <img src="<?php echo get_theme_file_uri('/assets/images/CodeCraft-3-Dark.png'); ?>" class="logo-dark h-full transition-all hidden" />
                    </a>

                    <!-- Main Navigation -->
                    <nav class="hidden lg:flex items-center space-x-8 ">
                        <!-- Develop Dropdown -->
                        <div class="relative group">
                            <a href="#"
                                class="py-2 font-semibold border-b-2 
                            <?php
                            if (is_tax('service_type', 'develop') || (is_singular('service') && has_term('develop', 'service_type'))) {
                                echo 'border-b-brandsecond';
                            } else {
                                echo 'border-transparent';
                            }
                            ?> 
                            group-hover:border-b-brandsecond transition-all">
                                Develop
                            </a>
                            <div class="absolute hidden group-hover:block pt-4 w-60 -left-3">
                                <div class="bg-branddark70 text-brandlight shadow-lg rounded-md overflow-hidden">
                                    <a href="<?php echo site_url('/services/web-development'); ?>" class="block px-4 py-4 hover:bg-branddark50">Web Development</a>
                                    <a href="<?php echo site_url('/services/business-software'); ?>" class="block px-4 py-4 hover:bg-branddark50">Business Software</a>
                                    <a href="<?php echo site_url('/services/salesforce-solutions'); ?>" class="block px-4 py-4 hover:bg-branddark50">Salesforce Solutions</a>
                                    <!-- <a href="<?php echo site_url('/services/technical-expertise'); ?>" class="block px-4 py-4 hover:bg-branddark50">Technical Expertise</a> -->
                                </div>
                            </div>
                        </div>

                        <!-- Grow Dropdown -->
                        <div class="relative group">
                            <a href="#"
                                class="py-2 font-semibold border-b-2 
                            <?php
                            if (is_tax('service_type', 'grow') || (is_singular('service') && has_term('grow', 'service_type'))) {
                                echo 'border-b-brandsecond';
                            } else {
                                echo 'border-transparent';
                            }
                            ?> 
                            group-hover:border-b-brandsecond transition-all">
                                Grow
                            </a>
                            <div class="absolute hidden group-hover:block pt-4 w-60 -left-3">
                                <div class="bg-branddark70 text-brandlight shadow-lg rounded-md overflow-hidden">
                                    <a href="<?php echo site_url('/services/seo-services'); ?>" class="block px-4 py-4 hover:bg-branddark50">SEO & Analysis</a>
                                    <a href="<?php echo site_url('/services/digital-marketing'); ?>" class="block px-4 py-4 hover:bg-branddark50">Digital Marketing</a>
                                </div>
                            </div>
                        </div>


                        <a href="<?php echo get_post_type_archive_link('work'); ?>" class="py-2 font-semibold border-b-2 <?php if (get_post_type() == 'work') {
                                                                                                                                echo 'border-b-brandsecond';
                                                                                                                            } else {
                                                                                                                                echo 'border-transparent';
                                                                                                                            } ?> hover:border-b-brandsecond transition-all">Our Work</a>
                        <a href="<?php echo site_url('/blog'); ?>" class="py-2 font-semibold border-b-2 <?php if (get_post_type() == 'post') {
                                                                                                            echo 'border-b-brandsecond';
                                                                                                        } else {
                                                                                                            echo 'border-transparent';
                                                                                                        } ?> hover:border-b-brandsecond transition-all">Blog</a>
                    </nav>

                    <!-- Contact Button (Desktop) -->
                    <a href="<?php echo site_url('/contact-us'); ?>" class="contactbutton hidden lg:block px-7 py-3 font-semibold border border-brandsecond text-brandlight hover:bg-brandsecond hover:text-brandlight transition-all rounded-full">
                        Contact Us
                    </a>

                    <!-- Mobile Menu Button -->
                    <button id="mobile-menu-button" class="menubutton lg:hidden h-10 w-10 p-1 border border-brandsecond text-brandlight hover:bg-brandsecond hover:text-brandlight transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu (Initially Hidden) -->
            <div id="mobile-menu" class="fixed inset-0 z-40 bg-brandsecond text-branddark hidden lg:hidden">
                <div class="flex justify-end p-4">
                    <!-- Close Button -->
                    <button id="close-menu-button" class="h-10 w-10 p-1 text-branddark">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path d="M2.146 2.146a.5.5 0 0 1 .708 0L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </button>
                </div>
                <nav class="flex flex-col items-center space-y-4 font-semibold">
                    <div class="text-3xl text-branddark">Develop</div>
                    <div class="flex flex-col items-center space-y-3">
                        <a href="<?php echo site_url('/services/web-development'); ?>" class="border-b-2 border-transparent hover:border-b-brandsecond transition-all">Web Development</a>
                        <a href="<?php echo site_url('/services/business-software'); ?>" class="border-b-2 border-transparent hover:border-b-brandsecond transition-all">Business Software</a>
                        <a href="<?php echo site_url('/services/salesforce-solutions'); ?>" class="border-b-2 border-transparent hover:border-b-brandsecond transition-all">Salesforce Solutions</a>
                        <!-- <a href="<?php echo site_url('/services/technical-expertise'); ?>" class="border-b-2 border-transparent hover:border-b-brandsecond transition-all">Technical Expertise</a> -->
                    </div>
                    <div class="text-3xl text-branddark">Grow</div>
                    <div class="flex flex-col items-center space-y-3">
                        <a href="<?php echo site_url('/services/seo-services'); ?>" class="border-b-2 border-transparent hover:border-b-brandsecond transition-all">SEO & Analysis</a>
                        <a href="<?php echo site_url('/services/digital-marketing'); ?>" class="border-b-2 border-transparent hover:border-b-brandsecond transition-all">Digital Marketing</a>
                    </div>
                    <a href="<?php echo get_post_type_archive_link('work'); ?>" class="text-3xl text-branddark border-b-2 border-transparent hover:border-b-brandsecond transition-all">Our Work</a>
                    <a href="<?php echo site_url('/blog'); ?>" class="text-3xl text-branddark border-b-2 border-transparent hover:border-b-brandsecond transition-all">Blog</a>
                    <a href="<?php echo site_url('/contact-us'); ?>" class="px-7 py-3 font-semibold border border-branddark text-brandlight hover:bg-branddark hover:text-brandlight transition-all rounded-full">Contact Us</a>
                </nav>
            </div>
        </header>