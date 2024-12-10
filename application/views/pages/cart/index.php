<!-- ======= CART SECTION START ======= -->
<section class="flex flex-col gap-6 items-start justify-center container lg:gap-[47px] lg:flex-row">
    <!-- CART -->
    <div
        class="mt-[35px] lg:mt-[60px] bg-off-white w-full rounded-2xl p-4 flex flex-col gap-2 items-start justify-center lg:w-2/3 lg:p-6">
        <h3 class="font-rubik font-semibold text-xl text-dark-charcoal lg:text-[32px]">Your Bag</h3>
        <p class="font-open-sans font-normal text-sm text-dark-charcoal/80 lg:mb-10 lg:text-base">Items in your bag not
            reserved -
            check out
            now
            to
            make them yours
        </p>
        <!-- CART ITEMS -->
        <div class="w-full grid grid-cols-2 items-start justify-center gap-4 lg:gap-6 lg:mb-1">
            <img src="<?= base_url('public/images/home/dummy-product.png'); ?>"
                class="block w-full h-[216px] rounded-3xl object-cover lg:h-[225px]" alt="dummy-product" loading="lazy">
            <div class="flex flex-col items-start justify-center gap-2 w-full lg:gap-6">
                <div class="flex flex-col gap-1 w-full lg:gap-2">
                    <h4 class="font-rubik font-semibold text-base text-dark-charcoal lg:text-2xl">DROPSET TRAINER SHOES
                    </h4>
                    <p class="font-open-sans font-semibold text-sm text-dark-charcoal/80 lg:text-xl">Men’s Road Running
                        Shoes</p>
                    <p class="font-open-sans font-semibold text-sm text-dark-charcoal/80 lg:text-xl">Enamel Blue/
                        University White
                    </p>
                </div>
                <div class="flex gap-4 items-center justify-start w-full">
                    <p class="font-open-sans font-semibold text-base text-dark-charcoal/80 lg:text-xl">Size 10</p>
                    <p class="font-open-sans font-semibold text-base text-dark-charcoal/80 lg:text-xl">Quantity 1</p>
                </div>
                <div class="flex items-center justify-between w-full">
                    <p class="font-rubik font-semibold text-xl text-royal-blue lg:text-2xl">$130.00</p>
                    <img src="<?= base_url('public/icons/cart/bin.png'); ?>" alt="bin"
                        class="block w-6 object-cover lg:w-8 cursor-pointer" loading="lazy">
                </div>
            </div>
        </div>
        <div class="w-full grid grid-cols-2 items-start justify-center gap-4 lg:gap-6 lg:mb-1">
            <img src="<?= base_url('public/images/home/dummy-product.png'); ?>"
                class="block w-full h-[216px] object-cover rounded-3xl lg:h-[225px]" alt="dummy-product" loading="lazy">
            <div class="flex flex-col items-start justify-center gap-2 w-full lg:gap-6">
                <div class="flex flex-col gap-1 w-full lg:gap-2">
                    <h4 class="font-rubik font-semibold text-base text-dark-charcoal lg:text-2xl">DROPSET TRAINER SHOES
                    </h4>
                    <p class="font-open-sans font-semibold text-sm text-dark-charcoal/80 lg:text-xl">Men’s Road Running
                        Shoes</p>
                    <p class="font-open-sans font-semibold text-sm text-dark-charcoal/80 lg:text-xl">Enamel Blue/
                        University White
                    </p>
                </div>
                <div class="flex gap-4 items-center justify-start w-full">
                    <p class="font-open-sans font-semibold text-base text-dark-charcoal/80 lg:text-xl">Size 10</p>
                    <p class="font-open-sans font-semibold text-base text-dark-charcoal/80 lg:text-xl">Quantity 1</p>
                </div>
                <div class="flex items-center justify-between w-full">
                    <p class="font-rubik font-semibold text-xl text-royal-blue lg:text-2xl">$130.00</p>
                    <img src="<?= base_url('public/icons/cart/bin.png'); ?>" alt="bin"
                        class="block w-6 object-cover lg:w-8 cursor-pointer" loading="lazy">
                </div>
            </div>
        </div>
    </div>
    <!-- SUMMARY -->
    <div
        class="lg:mt-[60px] bg-off-white w-full rounded-2xl p-4 flex flex-col gap-4 items-start justify-center lg:w-1/3 lg:p-6 lg:gap-6">
        <h3 class="font-rubik font-semibold text-xl text-dark-charcoal lg:text-[32px]">Order Summary</h3>
        <div class="flex flex-col gap-4 items-center justify-center w-full">
            <div
                class="flex items-center justify-between font-open-sans font-semibold text-base text-dark-charcoal w-full lg:text-xl">
                <p>1 ITEM</p>
                <p class="text-dark-charcoal/80">$130.00</p>
            </div>
            <div
                class="flex items-center justify-between font-open-sans font-semibold text-base text-dark-charcoal w-full lg:text-xl">
                <p>Delivery</p>
                <p class="text-dark-charcoal/80">$6.99</p>
            </div>
            <div
                class="flex items-center justify-between font-open-sans font-semibold text-base text-dark-charcoal w-full lg:text-xl">
                <p>Sales Tax</p>
                <p class="text-dark-charcoal/80">-</p>
            </div>
            <div
                class="flex items-center justify-between font-open-sans font-semibold text-dark-charcoal w-full text-xl lg:text-2xl">
                <p>Total</p>
                <p class="text-dark-charcoal/80">$136.99</p>
            </div>
        </div>
        <button type="button"
            class="rounded-lg bg-dark-charcoal text-off-white py-[15.5px] font-rubik font-medium text-sm w-full">Checkout</button>
    </div>
</section>
<!-- ======= CART SECTION END ======= -->

<!-- ======= NEW PRODUCTS SECTION START ======= -->
<section class="w-full mt-[45px] flex flex-col container items-start justify-center gap-6 lg:mt-[100px] lg:gap-8">
    <h3 class="font-rubik font-semibold text-2xl text-dark-charcoal lg:text-5xl">You May Also Like</h3>
    <div class="grid grid-cols-2 gap-y-6 gap-x-4 items-center justify-center w-full lg:gap-4 lg:grid-cols-4">
        <!-- CARD -->
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
<!-- ======= NEW PRODUCTS SECTION END ======= -->