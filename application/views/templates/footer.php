<!-- footer section -->
<footer
    class="container flex flex-col gap-[40px] bg-[#232321] rounded-[24px] py-[24px] px-[16px] text-white font-open-sans font-medium text-base -mt-[30px] lg:rounded-[48px] lg:py-[50px] lg:px-[72px] lg:flex-row lg:text-[20px] lg:items-center lg:justify-between lg:-mt-[50px]">
    <div class="flex flex-col gap-[16px] items-start justify-center lg:max-w-[391px]">
        <h3 class="font-rubik font-semibold text-[24px] text-golden-orange lg:text-[36px]">About Us</h3>
        <p>We are a trusted shoe store. We provide various exclusive collections and the latest products for you</p>
        <h1 class="font-rubik font-bold text-[90px] text-[#9C9C9C] mt-[50px] hidden lg:block mb-[50px]">NIMBLE</h1>
    </div>
    <div class="flex flex-col gap-[30px] items-start justify-center lg:flex-row lg:gap-[100px]">
        <div class="flex flex-col gap-[16px] items-start justify-center">
            <h3 class="font-rubik font-semibold text-[20px] text-golden-orange lg:text-[24px]">Store</h3>
            <div class="flex flex-col gap-[8px] items-start justify-center">
                <a href="<?= base_url('home'); ?>" class="text-decoration-none">Home</a>
                <a href="<?= base_url('products'); ?>" class="text-decoration-none">Products</a>
                <a href="<?= base_url('about'); ?>" class="text-decoration-none">About</a>
                <a href="<?= base_url('contact'); ?>" class="text-decoration-none">Contact</a>
            </div>
        </div>
        <div class="flex flex-col gap-[16px] items-start justify-center">
            <h3 class="font-rubik font-semibold text-[20px] text-golden-orange lg:text-[24px]">Categories</h3>
            <div class="flex flex-col gap-[8px] items-start justify-center">
                <a href="#" class="text-decoration-none">Runners</a>
                <a href="#" class="text-decoration-none">Sneakers</a>
                <a href="#" class="text-decoration-none">Casuals</a>
                <a href="#" class="text-decoration-none">Basketball</a>
                <a href="#" class="text-decoration-none">Outdoor</a>
            </div>
        </div>
        <div class="flex flex-col gap-[16px] items-start justify-center">
            <h3 class="font-rubik font-semibold text-[20px] text-golden-orange lg:text-[24px]">Follow Us</h3>
            <div class="flex gap-[16px] items-start justify-center lg:gap-[24px]">
                <a href="" class="block" target="_blank">
                    <img src="<?= base_url('public/icons/footer/facebook.png'); ?>" class="block w-[24px]"
                        alt="facebook" target="_blank" loading="lazy">
                </a>
                <a href="" class="block" target="_blank">
                    <img src="<?= base_url('public/icons/footer/instagram.png'); ?>" class="block w-[24px]"
                        alt="instagram" target="_blank" loading="lazy">
                </a>
                <a href="" class="block" target="_blank">
                    <img src="<?= base_url('public/icons/footer/tiktok.png'); ?>" class="block w-[24px]" alt="tiktok"
                        target="_blank" loading="lazy">
                </a>
            </div>
        </div>
        <h3 class="font-rubik font-bold text-[50px] text-[#9C9C9C] lg:hidden mt-[14px] mb-[40px]">NIMBLE</h3>
    </div>
</footer>
</main>
<!-- js -->
<script type=" module" src="<?= base_url('public/js/script.js'); ?>"></script>
</body>

</html>