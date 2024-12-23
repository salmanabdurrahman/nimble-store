<!-- ======= DETAIL SECTION START ======= -->
<section
    class="mt-[32px] flex flex-col gap-6 container items-center justify-center lg:mt-[60px] lg:flex-row lg:gap-[70px] lg:items-stretch">
    <!-- PRODUCT -->
    <img src="<?= base_url('public/uploads/' . $product['image_url']); ?>"
        class="block w-full h-full max-h-[280px] rounded-2xl object-cover lg:max-h-[872px]" alt="dummy-product"
        loading="lazy">
    <div class="flex flex-col gap-6 items-start justify-center w-full lg:gap-8">
        <div class="flex flex-col gap-2 w-full items-start justify-center lg:gap-4">
            <span
                class="bg-royal-blue rounded-lg font-rubik font-semibold text-xs text-white py-2 px-4 lg:rounded-xl lg:py-3">New
                Release</span>
            <h3 class="font-rubik font-semibold text-xl text-dark-charcoal uppercase lg:text-[32px]">
                <?php echo $product['name']; ?>
            </h3>
            <p class="text-royal-blue font-rubik font-semibold text-2xl">$<?php echo $product['price']; ?></p>
        </div>
        <div class="flex flex-col gap-2 items-start justify-center w-full lg:gap-4">
            <h4 class="font-rubik font-semibold text-base text-dark-charcoal">Color</h4>
            <span class="size-6 rounded-full bg-[#<?php echo $product['color_name']; ?>] lg:size-8"></span>
        </div>
        <div class="flex flex-col gap-2 items-start justify-center w-full lg:gap-4">
            <h4 class="font-rubik font-semibold text-base text-dark-charcoal">Size</h4>
            <div class="flex flex-wrap gap-2 items-center justify-start lg:gap-1 w-full">
                <!-- SIZES -->
                <?php for ($i = 37; $i <= 45; $i++) {
                    echo '<span class="rounded-lg bg-white text-dark-charcoal font-rubik font-medium text-sm py-[15.5px] px-4 flex items-center justify-center text-center w-full max-w-12 transition-all duration-300 hover:bg-dark-charcoal hover:text-off-white cursor-pointer">';
                    echo $i;
                    echo '</span>';
                } ?>
            </div>
        </div>
        <div class="flex flex-col gap-2 items-center justify-center w-full">
            <!-- CART BUTTON -->
            <button type="button"
                class="w-full bg-dark-charcoal text-off-white rounded-lg font-rubik font-medium text-sm uppercase py-[15.5px]"
                on>Add
                To Cart</button>
            <!-- BUY BUTTON -->
            <button type="button"
                class="w-full bg-royal-blue text-off-white rounded-lg font-rubik font-medium text-sm uppercase py-[15.5px]">Buy
                It Now</button>
        </div>
        <div class="flex flex-col gap-2 items-start justify-center w-full">
            <h3 class="font-rubik font-semibold text-base text-dark-charcoal uppercase">About the product</h3>
            <p class="font-open-sans font-normal text-base text-dark-charcoal/80">
                <?php
                echo $product['description'];
                ?>
            </p>
        </div>
    </div>
</section>
<!-- ======= DETAIL SECTION END ======= -->

<!-- ======= REVIEWS SECTION START ======= -->
<section class="w-full mt-[45px] flex flex-col container items-start justify-center gap-6 lg:mt-[100px] lg:gap-8">
    <h3 class="font-rubik font-semibold text-2xl text-dark-charcoal lg:text-5xl">Reviews</h3>
    <div class="grid grid-cols-1 gap-y-6 gap-x-4 items-center justify-center w-full lg:gap-4 lg:grid-cols-4">
        <!-- CARD -->
        <div class="flex flex-col items-center justify-center w-full bg-off-white p-4 rounded-[16px] gap-4">
            <div class="flex items-start justify-between w-full">
                <div class="flex flex-col gap-2 items-start justify-start max-w-[85%]">
                    <h4 class="font-rubik font-semibold text-xl text-dark-charcoal lg:text-2xl">Good Quality </h4>
                    <p class="font-open-sans font-normal text-sm text-dark-charcoal/80 lg:text-base">I highly recommend
                        shopping from
                        kicks</p>
                    <div class="flex items-center justify-start gap-1 w-full">
                        <div class="flex items-center justify-start w-full">
                            <!-- stars -->
                            <img src="<?= base_url('public/icons/products/star.png'); ?>" alt="star"
                                class="block size-4 lg:size-6" loading="lazy">
                            <img src="<?= base_url('public/icons/products/star.png'); ?>" alt="star"
                                class="block size-4 lg:size-6" loading="lazy">
                            <img src="<?= base_url('public/icons/products/star.png'); ?>" alt="star"
                                class="block size-4 lg:size-6" loading="lazy">
                            <img src="<?= base_url('public/icons/products/star.png'); ?>" alt="star"
                                class="block size-4 lg:size-6" loading="lazy">
                            <img src="<?= base_url('public/icons/products/star.png'); ?>" alt="star"
                                class="block size-4 lg:size-6" loading="lazy">
                            <p class="font-open-sans font-semibold text-sm text-dark-charcoal ml-1">5.0</p>
                        </div>
                    </div>
                </div>
                <!-- profile image -->
                <img src="https://images.unsplash.com/photo-1500048993953-d23a436266cf?q=80&w=1469&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    class="block size-12 lg:size-16 rounded-full object-cover" alt="dummy-profile" loading="lazy">
            </div>
            <img src="<?= base_url('public/uploads/' . $product['image_url']); ?>" alt="dummy-product"
                class="block w-full max-h-[230px] rounded-2xl object-cover lg:max-h-[325px]" loading="lazy">
        </div>
    </div>
</section>
<!-- ======= REVIEWS SECTION END ======= -->

<!-- ======= NEW PRODUCTS SECTION START ======= -->
<section class="w-full mt-[45px] flex flex-col container items-start justify-center gap-6 lg:mt-[100px] lg:gap-8">
    <h3 class="font-rubik font-semibold text-2xl text-dark-charcoal lg:text-5xl">You May Also Like</h3>
    <div class="grid grid-cols-2 gap-y-6 gap-x-4 items-center justify-center w-full lg:gap-4 lg:grid-cols-4">
        <!-- CARD -->
        <?php
        foreach ($random_product as $key => $product) { ?>
            <div class="flex flex-col gap-2 w-full">
                <div class="mb-2 w-full bg-off-white rounded-2xl h-[171px] p-2 lg:rounded-[28px] lg:h-[350px]">
                    <img src="<?= base_url('public/uploads/' . $product['image_url']); ?>" alt="dummy-product"
                        class="block w-full h-full max-h-[164px] object-cover rounded-xl lg:rounded-3xl lg:max-h-[334px]"
                        loading="lazy">
                </div>
                <h3 class="font-rubik font-semibold text-base text-dark-charcoal lg:text-2xl uppercase">
                    <?php echo $product['name'] ?>
                </h3>
                <button type="button"
                    class="bg-dark-charcoal rounded-lg w-full font-rubik font-medium text-xs text-white tracking-wider py-[13px] lg:text-sm lg:py-[15.5px] uppercase"
                    onclick="window.location.href = '<?php echo base_url('product_detail'); ?>?id=<?php echo $product['id']; ?>'">View
                    Product - <span class="text-golden-orange inline-block">$<?php echo $product['price'] ?></span></button>
            </div>
        <?php } ?>
    </div>
</section>
<!-- ======= NEW PRODUCTS SECTION END ======= -->