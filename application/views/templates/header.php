<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= base_url('public/icons/header/favicon.png'); ?>" type="image/png" sizes="64x64">
    <title><?= $header_title; ?></title>
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
    <!-- SWIPER CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- SWEETALERT JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- TAILWIND CSS -->
    <link rel="stylesheet" href="<?= base_url('public/css/style.css'); ?>">
</head>

<body class="bg-light-gray relative py-[24px] px-[16px] lg:pt-[32px] lg:pb-[68px] lg:px-[60px]">
    <!-- ======= HEADER SECTION START ======= -->
    <header
        class="container p-[15px] flex items-center justify-between bg-off-white rounded-[12px] lg:py-[18px] px-[32px] lg:rounded-[24px]">
        <div class="hidden items-center justify-center gap-[40px] lg:flex">
            <a href="<?= base_url('home'); ?>"
                class="text-decoration-none nav-link font-rubik transition-all duration-300 text-lg font-medium"
                id="nav-link-1">Home</a>
            <a href="<?= base_url('products'); ?>"
                class="text-decoration-none nav-link font-rubik transition-all duration-300 text-lg font-medium"
                id="nav-link-2">Products</a>
            <a href="<?= base_url('about'); ?>"
                class="text-decoration-none nav-link font-rubik transition-all duration-300 text-lg font-medium"
                id="nav-link-3">About</a>
            <a href="<?= base_url('contact'); ?>"
                class="text-decoration-none nav-link font-rubik transition-all duration-300 text-lg font-medium"
                id="nav-link-4">Contact</a>
        </div>
        <img src="<?= base_url('public/icons/header/hamburger-menu.png'); ?>" alt="hamburger-menu"
            class="block w-[20px] lg:hidden" loading="lazy" id="hamburger-menu">
        <h3 class="font-rubik font-bold text-[25px] lg:text-[40px] cursor-pointer text-dark-charcoal"
            onclick="location.href='<?= base_url('home'); ?>'">NIMBLE</h3>
        <div class="flex items-center gap-[9px] lg:gap-[40px]"></div>
        <div class="flex items-center gap-[9px] lg:gap-[40px]">
            <!-- belum login -->
            <?php if (!$this->session->userdata('user_logged_in')): ?>
                <img src="<?= base_url('public/icons/header/user-icon.png'); ?>" alt="user-icon"
                    class="block w-[20px] cursor-pointer duration-300 transition-all hover:scale-105 lg:w-[24px]"
                    loading="lazy" onclick="location.href='<?= base_url('login'); ?>'">
            <?php endif; ?>
            <!-- udah login sebagai user -->
            <?php if ($this->session->userdata('user_logged_in') && $this->session->userdata('role') == 'user'): ?>
                <img src="<?= base_url('public/icons/header/user-icon.png'); ?>" alt="user-icon"
                    class="block w-[20px] cursor-pointer duration-300 transition-all hover:scale-105 lg:w-[24px]"
                    loading="lazy" onclick="location.href='<?= base_url('user/dashboard'); ?>'">
                <!-- udah login sebagai admin -->
            <?php elseif ($this->session->userdata('user_logged_in') && $this->session->userdata('role') == 'admin'): ?>
                <img src="<?= base_url('public/icons/header/user-icon.png'); ?>" alt="user-icon"
                    class="block w-[20px] cursor-pointer duration-300 transition-all hover:scale-105 lg:w-[24px]"
                    loading="lazy" onclick="location.href='<?= base_url('admin/dashboard'); ?>'">
            <?php endif; ?>
            <!-- Keranjang belanja -->
            <?php if ($this->session->userdata('user_logged_in') && $this->session->userdata('role') != 'admin'): ?>
                <img src="<?= base_url('public/icons/header/shopping-cart.png'); ?>" alt="shopping-cart"
                    class="block w-[20px] cursor-pointer duration-300 transition-all hover:scale-105 lg:w-[24px]"
                    loading="lazy" onclick="location.href='<?= base_url('cart'); ?>'">
            <?php endif; ?>
        </div>
    </header>
    <!-- ======= HEADER SECTION END ======= -->

    <!-- NAV UNTUK SM DAN MD -->
    <nav class="rounded-2xl fixed z-[999] top-[24px] left-4 right-4 bg-off-white flex-col gap-9 py-[20.5px] px-[30px] lg:hidden transition-all duration-300 h-0 hidden origin-center shadow-md"
        id="small-navbar">
        <img src="<?= base_url('public/icons/header/close-button.png'); ?>" alt="close-button"
            class="block cursor-pointer w-[24px]" loading="lazy" id="hamburger-close-button">
        <div class="flex flex-col gap-10 items-start justify-center">
            <a href="<?= base_url('home'); ?>" class="font-rubik nav-link text-base font-medium text-dark-charcoal"
                id="nav-link-1">Home</a>
            <a href="<?= base_url('products'); ?>" class="font-rubik nav-link text-base font-medium text-dark-charcoal"
                id="nav-link-2">Products</a>
            <a href="<?= base_url('about'); ?>" class="font-rubik nav-link text-base font-medium text-dark-charcoal"
                id="nav-link-3">About</a>
            <a href="<?= base_url('contact'); ?>" class="font-rubik nav-link text-base font-medium text-dark-charcoal"
                id="nav-link-4">Contact</a>
        </div>
    </nav>

    <!-- ======= MAIN SECTION START ======= -->
    <main class="relative">