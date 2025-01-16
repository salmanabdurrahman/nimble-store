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

<body>
    <main class="bg-light-gray w-full flex items-center justify-center min-h-screen">
        <section class="flex w-full items-center flex-col gap-9">
            <img src="<?= base_url('public/images/payment/check_circle.png'); ?>" class="max-w-[143px]"
                alt="check-circle" loading="lazy">
            <div class="flex flex-col items-center justify-center gap-[40px]">
                <p class="font-rubik font-medium text-2xl text-royal-blue">Your order was successful</p>
                <p class="font-rubik font-semibold text-4xl text-dark-charcoal">Thanks for your purchase!</p>
                <div class="flex flex-col items-center justify-center gap-2">
                    <p class="font-rubik font-medium text-lg text-dark-charcoal/80">Your order number is
                        <span class="text-dark-charcoal">#11234556</span>
                    </p>
                    <p class="font-rubik font-medium text-lg text-dark-charcoal/80">You’ll receive an email confirming
                        your
                        order details
                    </p>
                </div>
            </div>
            <button type="button"
                class="bg-royal-blue text-off-white font-rubik font-medium text-base rounded-[10px] py-[17px] w-[363px]"
                onclick="location.href='<?= base_url('home'); ?>'">Back
                to
                home</button>
        </section>
    </main>
    <!-- SWIPER JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- JS -->
    <script type="module" src="<?= base_url('public/js/script.js'); ?>"></script>
</body>

</html>