<!-- detail section -->
<section
    class="mt-[32px] flex flex-col gap-6 container items-center justify-center lg:mt-[60px] lg:flex-row lg:gap-[70px] lg:items-stretch">
    <img src="<?= base_url('public/images/product_detail/dummy_product.png'); ?>"
        class="block w-full h-full max-h-[280px] rounded-2xl object-fill lg:max-h-[872px]" alt="dummy-product"
        loading="lazy">
    <div class="flex flex-col gap-6 items-start justify-center w-full lg:gap-8">
        <div class="flex flex-col gap-2 w-full items-start justify-center lg:gap-4">
            <span
                class="bg-royal-blue rounded-lg font-rubik font-semibold text-xs text-white py-2 px-4 lg:rounded-xl lg:py-3">New
                Release</span>
            <h3 class="font-rubik font-semibold text-xl text-dark-charcoal uppercase lg:text-[32px]">ADIDAS 4DFWD X
                PARLEY RUNNING
                SHOES
            </h3>
            <p class="text-royal-blue font-rubik font-semibold text-2xl">$125.00</p>
        </div>
        <div class="flex flex-col gap-2 items-start justify-center w-full lg:gap-4">
            <h4 class="font-rubik font-semibold text-base text-dark-charcoal">Color</h4>
            <span class="size-6 rounded-full bg-[#253043] lg:size-8"></span>
        </div>
        <div class="flex flex-col gap-2 items-start justify-center w-full lg:gap-4">
            <h4 class="font-rubik font-semibold text-base text-dark-charcoal">Size</h4>
            <div class="flex flex-wrap gap-2 items-center justify-start">
                <?php for ($i = 37; $i <= 45; $i++) {
                    echo '<span class="rounded-lg bg-white text-dark-charcoal font-rubik font-medium text-sm py-[15.5px] px-4 flex items-center justify-center text-center w-full max-w-12 transition-all duration-300 hover:bg-dark-charcoal hover:text-off-white cursor-pointer">';
                    echo $i;
                    echo '</span>';
                } ?>
            </div>
        </div>
        <div class="flex flex-col gap-2 items-center justify-center w-full">
            <button type="button"
                class="w-full bg-dark-charcoal text-off-white rounded-lg font-rubik font-medium text-sm uppercase py-[15.5px]">Add
                To Cart</button>
            <button type="button"
                class="w-full bg-royal-blue text-off-white rounded-lg font-rubik font-medium text-sm uppercase py-[15.5px]">Buy
                It Now</button>
        </div>
        <div class="flex flex-col gap-2 items-start justify-center w-full">
            <h3 class="font-rubik font-semibold text-base text-dark-charcoal uppercase">About the product</h3>
            <p class="font-open-sans font-normal text-base text-dark-charcoal/80">Lorem ipsum dolor sit amet
                consectetur,
                adipisicing elit. Quibusdam iusto nisi vitae voluptate voluptates repellat natus soluta at dolorum
                dicta.
            </p>
        </div>
    </div>
</section>
<!-- other products section -->
<section class="w-full mt-[45px] flex flex-col container items-start justify-center gap-6 lg:mt-[100px] lg:gap-8">
    <h3 class="font-rubik font-semibold text-2xl text-dark-charcoal lg:text-5xl">You May Also Like</h3>
    <div class="grid grid-cols-2 gap-y-6 gap-x-4 items-center justify-center w-full lg:gap-4 lg:grid-cols-4">
        <!-- card -->
        <div class="flex flex-col gap-2 w-full">
            <div class="mb-2 w-full bg-off-white rounded-2xl h-[171px] p-2 lg:rounded-[28px] lg:h-[350px]">
                <img src="<?= base_url('public/images/home/dummy-product.png'); ?>" alt="dummy-product"
                    class="block w-full h-full max-h-[164px] rounded-xl lg:rounded-3xl lg:max-h-[334px]" loading="lazy">
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
                    class="block w-full h-full max-h-[164px] rounded-xl lg:rounded-3xl lg:max-h-[334px]" loading="lazy">
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
                    class="block w-full h-full max-h-[164px] rounded-xl lg:rounded-3xl lg:max-h-[334px]" loading="lazy">
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
                    class="block w-full h-full max-h-[164px] rounded-xl lg:rounded-3xl lg:max-h-[334px]" loading="lazy">
            </div>
            <h3 class="font-rubik font-semibold text-base text-dark-charcoal lg:text-2xl uppercase">ADIDAS 4DFWD X
                PARLEY RUNNING SHOES</h3>
            <button type="button"
                class="bg-dark-charcoal rounded-lg w-full font-rubik font-medium text-xs text-white tracking-wider py-[13px] lg:text-sm lg:py-[15.5px] uppercase">View
                Product - <span class="text-golden-orange inline-block">$125</span></button>
        </div>
    </div>
</section>