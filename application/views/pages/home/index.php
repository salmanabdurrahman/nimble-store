<!-- hero section -->
<section
    class="swiper swiper-container mt-[32px] flex flex-col gap-[24px] items-center justify-center lg:mt-[60px] container relative">
    <!-- <h1 class="font-rubik font-bold text-[48px] uppercase lg:text-[180px]">Easy to
        <span class="text-royal-blue">Move</span>
    </h1> -->
    <div
        class="swiper-wrapper w-full rounded-[24px] max-h-[750px] lg:rounded-[64px] flex items-center justify-start flex-nowrap">
        <img src="<?= base_url('public/images/home/slider-image-1.png'); ?>"
            class="swiper-slide slide-1 block w-full rounded-[24px] max-h-[750px] bg-center bg-cover lg:rounded-[64px]"
            alt="slider-image-1">
        <img src="<?= base_url('public/images/home/slider-image-1.png'); ?>"
            class="swiper-slide slide-2 block w-full rounded-[24px] max-h-[750px] bg-center bg-cover lg:rounded-[64px]"
            alt="slider-image-2">
        <img src="<?= base_url('public/images/home/slider-image-1.png'); ?>"
            class="swiper-slide slide-3 block w-full rounded-[24px] max-h-[750px] bg-center bg-cover lg:rounded-[64px]"
            alt="slider-image-3">
        <img src="<?= base_url('public/images/home/slider-image-1.png'); ?>"
            class="swiper-slide slide-4 block w-full rounded-[24px] max-h-[750px] bg-center bg-cover lg:rounded-[64px]"
            alt="slider-image-4">
        <img src="<?= base_url('public/images/home/slider-image-1.png'); ?>"
            class="swiper-slide slide-5 block w-full rounded-[24px] max-h-[750px] bg-center bg-cover lg:rounded-[64px]"
            alt="slider-image-5">
    </div>
    <div
        class="flex items-center justify-between absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full z-10 mx-0">
        <img src="<?= base_url('public/icons/home/prev-slider-button.png'); ?>"
            class="swiper-button-prev block rounded-full size-7 lg:size-[46px] cursor-pointer duration-300 transition-all hover:scale-110"
            alt="prev-button" loading="lazy">
        <img src="<?= base_url('public/icons/home/next-slider-button.png'); ?>"
            class="swiper-button-next block rounded-full size-7 lg:size-[46px] cursor-pointer duration-300 transition-all hover:scale-110"
            alt="next-button" loading="lazy">
    </div>
</section>
<!-- brands section -->
<section class="mt-[45px] flex flex-col items-center justify-center gap-[30px] container lg:mt-[100px] lg:gap-[50px]">
    <h3 class="font-rubik text-[30px] font-semibold leading-[95%] text-dark-charcoal lg:text-[74px]">OUR BRANDS</h3>
    <div
        class="flex flex-col items-center justify-center gap-y-[27px] border-solid border-t-[3px] border-b-[3px] border-y-[rgba(35,35,33,0.2)] py-[15px] w-full lg:flex-row lg:gap-y-[0px] lg:gap-x-[138px]">
        <div class="flex gap-x-[64px] items-center justify-center lg:gap-x-[138px]">
            <img src="<?= base_url('public/images/home/adidas.png'); ?>" class="block w-full" alt="adidas"
                loading="lazy">
            <img src="<?= base_url('public/images/home/converse.png'); ?>" class="block w-full" alt="converse"
                loading="lazy">
        </div>
        <div class="flex gap-x-[64px] items-center justify-center lg:gap-x-[138px]">
            <img src="<?= base_url('public/images/home/puma.png'); ?>" class="block w-full" alt="puma" loading="lazy">
            <img src="<?= base_url('public/images/home/reebok.png'); ?>" class="block w-full" alt="reebok"
                loading="lazy">
        </div>
        <div class="flex gap-x-[64px] items-center justify-center lg:gap-x-[138px]">
            <img src="<?= base_url('public/images/home/new-balance.png'); ?>" class="block w-full" alt="new-balance"
                loading="lazy">
            <img src="<?= base_url('public/images/home/nike.png'); ?>" class="block w-full" alt="nike" loading="lazy">
        </div>
    </div>
</section>
<!-- new products section -->
<section class="mt-[45px] flex flex-col items-center justify-center gap-[24px] container lg:mt-[100px] lg:gap-[32px]">
    <div class="flex gap-[32px] items-center justify-between w-full">
        <h3
            class="font-rubik font-semibold text-2xl text-dark-charcoal leading-[95%] max-w-[172px] w-full lg:text-[74px] lg:max-w-[746px] uppercase">
            Don’t miss
            out new drops
        </h3>
        <button type="button"
            class="bg-royal-blue rounded-[8px] font-rubik font-medium text-sm text-white py-[11.5px] px-4 w-full max-w-[157px] lg:text-lg lg:py-4 lg:px-14 lg:max-w-[270px] uppercase">Shop
            new drops</button>
    </div>
    <div class="grid grid-cols-2 gap-y-6 gap-x-4 items-center justify-center w-full lg:gap-4 lg:grid-cols-4">
        <!-- card -->
        <div class="flex flex-col gap-2 w-full">
            <div class="mb-2 w-full bg-off-white rounded-2xl h-[171px] p-2 lg:rounded-[28px] lg:h-[350px]">
                <img src="<?= base_url('public/images/home/dummy-product.png'); ?>" alt="dummy-product"
                    class="block w-full h-full max-h-[164px] object-cover rounded-xl lg:rounded-3xl lg:max-h-[334px]"
                    loading="lazy">
            </div>
            <h3 class="font-rubik font-semibold text-base text-dark-charcoal lg:text-2xl uppercase">ADIDAS 4DFWD X
                PARLEY RUNNING SHOES</h3>
            <button type="button"
                class="bg-dark-charcoal rounded-lg w-full font-rubik font-medium text-xs text-white tracking-wider py-[13px] lg:text-sm lg:py-[15.5px] uppercase">View
                Product - <span class="text-golden-orange inline-block">$125</span></button>
        </div>
        <div class="flex flex-col gap-2 w-full">
            <div class="mb-2 w-full bg-off-white rounded-2xl h-[171px] p-2 lg:rounded-[28px] lg:h-[350px]">
                <img src="<?= base_url('public/images/home/dummy-product.png'); ?>" alt="dummy-product"
                    class="block w-full h-full max-h-[164px] object-cover rounded-xl lg:rounded-3xl lg:max-h-[334px]"
                    loading="lazy">
            </div>
            <h3 class="font-rubik font-semibold text-base text-dark-charcoal lg:text-2xl uppercase">ADIDAS 4DFWD X
                PARLEY RUNNING SHOES</h3>
            <button type="button"
                class="bg-dark-charcoal rounded-lg w-full font-rubik font-medium text-xs text-white tracking-wider py-[13px] lg:text-sm lg:py-[15.5px] uppercase">View
                Product - <span class="text-golden-orange inline-block">$125</span></button>
        </div>
        <div class="flex flex-col gap-2 w-full">
            <div class="mb-2 w-full bg-off-white rounded-2xl h-[171px] p-2 lg:rounded-[28px] lg:h-[350px]">
                <img src="<?= base_url('public/images/home/dummy-product.png'); ?>" alt="dummy-product"
                    class="block w-full h-full max-h-[164px] object-cover rounded-xl lg:rounded-3xl lg:max-h-[334px]"
                    loading="lazy">
            </div>
            <h3 class="font-rubik font-semibold text-base text-dark-charcoal lg:text-2xl uppercase">ADIDAS 4DFWD X
                PARLEY RUNNING SHOES</h3>
            <button type="button"
                class="bg-dark-charcoal rounded-lg w-full font-rubik font-medium text-xs text-white tracking-wider py-[13px] lg:text-sm lg:py-[15.5px] uppercase">View
                Product - <span class="text-golden-orange inline-block">$125</span></button>
        </div>
        <div class="flex flex-col gap-2 w-full">
            <div class="mb-2 w-full bg-off-white rounded-2xl h-[171px] p-2 lg:rounded-[28px] lg:h-[350px]">
                <img src="<?= base_url('public/images/home/dummy-product.png'); ?>" alt="dummy-product"
                    class="block w-full h-full max-h-[164px] object-cover rounded-xl lg:rounded-3xl lg:max-h-[334px]"
                    loading="lazy">
            </div>
            <h3 class="font-rubik font-semibold text-base text-dark-charcoal lg:text-2xl uppercase">ADIDAS 4DFWD X
                PARLEY RUNNING SHOES</h3>
            <button type="button"
                class="bg-dark-charcoal rounded-lg w-full font-rubik font-medium text-xs text-white tracking-wider py-[13px] lg:text-sm lg:py-[15.5px] uppercase">View
                Product - <span class="text-golden-orange inline-block">$125</span></button>
        </div>
    </div>
</section>
<!-- categories section -->
<section class="w-full mt-[45px] lg:mt-[100px]">
    <div class="container flex flex-col items-center justify-center gap-6 lg:gap-16">
        <div class="flex items-center justify-between w-full">
            <h3 class="font-rubik font-semibold text-2xl text-dark-charcoal uppercase lg:text-[74px]">Categories</h3>
            <div class="flex gap-2 items-center justify-center lg:gap-4">
                <button type="button"
                    class="bg-off-white flex items-center justify-center size-8 text-base rounded-lg p-2 lg:size-10 lg:p-3">
                    <img src="<?= base_url('public/icons/home/prev-button.png'); ?>" class="block w-4" alt="prev-button"
                        loading="lazy">
                </button>
                <button type="button"
                    class="bg-off-white flex items-center justify-center size-8 text-base rounded-lg p-2 lg:size-10 lg:p-3">
                    <img src="<?= base_url('public/icons/home/next-button.png'); ?>" class="block w-4" alt="next-button"
                        loading="lazy">
                </button>
            </div>
        </div>
        <div class="grid grid-cols-1 items-center justify-center lg:grid-cols-2">
            <!-- category -->
            <div class="w-full h-full max-h-[348px] overflow-hidden relative lg:max-h-[600px]">
                <img src="<?= base_url('public/images/home/casual.png'); ?>" class="block w-full h-full" alt="casual"
                    loading="lazy">
                <h5
                    class="font-rubik font-semibold text-2xl text-dark-charcoal absolute bottom-4 left-4 lg:text-4xl lg:left-12 lg:bottom-[30px]">
                    Casual <span class="block">Shoes</span>
                </h5>
                <button type="button"
                    class="absolute bottom-4 right-4 bg-dark-charcoal size-8 rounded-[4px] p-2 lg:size-12 lg:rounded-lg  lg:right-12 lg:bottom-[30px] flex items-center justify-center lg:text-[32px]">
                    <img src="<?= base_url('public/icons/home/arrow-up.png'); ?>" class="block w-5" alt="arrow">
                </button>
            </div>
            <div class="w-full h-full max-h-[348px] overflow-hidden relative lg:max-h-[600px]">
                <img src="<?= base_url('public/images/home/basketball.png'); ?>" class="block w-full h-full"
                    alt="casual" loading="lazy">
                <h5
                    class="font-rubik font-semibold text-2xl text-dark-charcoal absolute bottom-4 left-4 lg:text-4xl lg:left-12 lg:bottom-[30px]">
                    Basketball <span class="block">Shoes</span>
                </h5>
                <button type="button"
                    class="absolute bottom-4 right-4 bg-dark-charcoal size-8 rounded-[4px] p-2 lg:size-12 lg:rounded-lg  lg:right-12 lg:bottom-[30px] flex items-center justify-center lg:text-[32px]">
                    <img src="<?= base_url('public/icons/home/arrow-up.png'); ?>" class="block w-5" alt="arrow">
                </button>
            </div>
        </div>
    </div>
</section>