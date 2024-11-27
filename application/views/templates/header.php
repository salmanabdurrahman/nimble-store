<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= base_url('public/icons/favicon.png'); ?>" type="image/png" sizes="64x64">
    <title><?= $header_title; ?></title>
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
    <!-- tailwindcss -->
    <link rel="stylesheet" href="<?= base_url('public/css/style.css'); ?>">
</head>

<body class="bg-light-gray relative py-[24px] px-[16px] lg:pt-[32px] lg:pb-[68px] lg:px-[60px]">
    <!-- header -->
    <header
        class="container p-[15px] flex items-center justify-between bg-off-white rounded-[12px] lg:py-[18px] px-[32px] lg:rounded-[24px]">
        <div class="hidden items-center justify-center gap-[40px] lg:flex">
            <a href="<?= base_url('home'); ?>"
                class="text-decoration-none font-rubik transition-all duration-300 font-medium text-lg hover:font-bold">Home</a>
            <a href="<?= base_url('products'); ?>"
                class="text-decoration-none font-rubik transition-all duration-300 font-medium text-lg hover:font-bold">Products</a>
            <a href="<?= base_url('about'); ?>"
                class="text-decoration-none font-rubik transition-all duration-300 font-medium text-lg hover:font-bold">About</a>
            <a href="<?= base_url('contact'); ?>"
                class="text-decoration-none font-rubik transition-all duration-300 font-medium text-lg hover:font-bold">Contact</a>
        </div>
        <img src="<?= base_url('public/icons/hamburger-menu.png'); ?>" alt="hamburger-menu"
            class="block w-[20px] lg:hidden" loading="lazy">
        <h3 class="font-rubik font-bold text-[25px] lg:text-[40px] cursor-pointer"
            onclick="location.href='<?= base_url('home'); ?>'">NIMBLE</h3>
        <div class="flex items-center gap-[9px] lg:gap-[40px]">
            <input type="text" name=""
                class="hidden lg:block rounded-[46px] py-[8px] px-[16px] shadow-[-1px_1px_5px_1px_rgb(0,0,0,0.1)] focus:outline-none focus:border-none focus:ring-0 font-rubik font-normal text-lg placeholder:text-[#99A2A5]"
                placeholder="Find shoes" id="">
            <img src="<?= base_url('public/icons/user-icon.png'); ?>" alt="user-icon"
                class="block w-[20px] cursor-pointer lg:w-[24px]" loading="lazy">
            <img src="<?= base_url('public/icons/shopping-cart.png'); ?>" alt="shopping-cart"
                class="block w-[20px] cursor-pointer lg:w-[24px]" loading="lazy">
        </div>
    </header>
    <!-- main -->
    <main class="relative">