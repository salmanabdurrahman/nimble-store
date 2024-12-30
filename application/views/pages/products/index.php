<!-- ======= PRODUCT ADS SECTION START ======= -->
<section
    class="mt-[32px] container lg:mt-[60px] relative w-full items-start flex flex-col justify-center gap-6 lg:gap-8">
    <img src="<?= base_url('public/images/products/product-ads.png'); ?>"
        class="block w-full min-h-[150px] rounded-2xl lg:rounded-[48px] lg:min-h-[395px]" alt="product-ads"
        loading="lazy">
    <div class="flex gap-5 items-center justify-center w-full">
        <span class="flex items-center justify-between py-2 px-4 bg-off-white rounded-lg w-full lg:hidden">
            <p class="font-open-sans font-semibold text-sm text-dark-charcoal">Filters</p>
            <img src="<?= base_url('public/icons/products/filter.png'); ?>" alt="" class="block w-4" loading="lazy">
        </span>
        <div class="lg:flex flex-col items-start justify-center w-full hidden">
            <h3 class="font-rubik font-semibold text-4xl text-dark-charcoal">Running Shoes</h3>
            <p class="font-open-sans font-semibold text-base text-dark-charcoal/80"><?php echo $count_all_products ?>
            </p>
        </div>
        <span
            class="flex items-center justify-between py-2 px-4 bg-off-white rounded-lg w-full lg:rounded-2xl lg:p-4  lg:max-w-[184px]">
            <p class="font-open-sans font-semibold text-sm text-dark-charcoal lg:text-base">Trending
            </p>
            <img src="<?= base_url('public/icons/products/trending.png'); ?>" alt="" class="block w-4 lg:w-6"
                loading="lazy">
        </span>
    </div>
    <div class="flex flex-col items-start justify-start lg:hidden">
        <h3 class="font-rubik font-semibold text-xl text-dark-charcoal">Running Shoes</h3>
        <p class="font-open-sans font-semibold text-sm text-dark-charcoal/80">122 items</p>
    </div>
</section>
<!-- ======= PRODUCT ADS SECTION END ======= -->

<!-- ======= ALL PRODUCTS SECTION START ======= -->
<section class="mt-6 items-start justify-start flex lg:gap-[18.75px] container lg:mt-8">
    <div class="hidden lg:flex flex-col gap-6 items-start justify-start w-full max-w-[315.5px]">
        <!-- FILTERS -->
        <h3 class="font-rubik font-semibold text-2xl text-dark-charcoal">Filters</h3>
        <div class="flex flex-col items-start justify-start gap-4 w-full">
            <!-- SIZES -->
            <h4 class="font-rubik font-semibold text-base text-dark-charcoal uppercase">Size</h4>
            <div class="flex items-center justify-start gap-4 flex-wrap">
                <?php foreach ($sizes as $size) { ?>
                    <button type="button"
                        class="rounded-lg bg-off-white text-dark-charcoal font-rubik font-medium text-sm transition-all duration-300 hover:bg-dark-charcoal hover:text-off-white p-[15.5px]"
                        onclick="window.location.href = '<?= base_url('products'); ?>?id_size=<?= $size['id']; ?>'"><?= $size['name']; ?></button>
                <?php } ?>
            </div>
        </div>

        <div class="flex flex-col items-start justify-start gap-4 w-full">
            <!-- COLOR -->
            <h4 class="font-rubik font-semibold text-base text-dark-charcoal uppercase">
                Color
            </h4>
            <div class="flex items-center justify-start gap-[18.75px] flex-wrap">
                <?php foreach ($colors as $color) { ?>
                    <button type="button" class="w-12 h-12 block rounded-lg bg-[#<?= $color['name'] ?>]"
                        onclick="window.location.href = '<?= base_url('products'); ?>?id_color=<?= $color['id']; ?>'"></button>
                <?php } ?>
            </div>
        </div>
        <div class="flex flex-col items-start justify-start gap-4 w-full">
            <!-- CATEGORY -->
            <h4 class="font-rubik font-semibold text-base text-dark-charcoal uppercase">Category</h4>
            <div class="flex flex-col items-start justify-start gap-4 flex-wrap">
                <?php foreach ($categories as $category) { ?>
                    <div class="flex items-center justify-start gap-4 w-full">
                        <input type="checkbox" name="category" id="category<?= $category['id']; ?>" class="text-xl"
                            onclick="window.location.href = '<?= base_url('products'); ?>?id_category=<?= $category['id']; ?>'">
                        <label for="category<?= $category['id']; ?>"
                            class="font-open-sans text-base font-semibold text-dark-charcoal"><?= $category['name']; ?></label>
                    </div>
                <?php } ?>
            </div>
        </div>

    </div>
    <div class="grid grid-cols-2 gap-y-6 gap-x-4 items-stretch justify-center w-full lg:gap-[38px] lg:grid-cols-3">
        <!-- CARD -->
        <?php
        foreach ($products as $key => $item) { ?>
            <div class="flex flex-col gap-2 w-full">
                <div class="mb-2 w-full bg-off-white rounded-2xl h-[171px] p-2 lg:rounded-[28px] lg:h-[350px]">
                    <img src="<?= base_url('public/uploads/' . $item['image_url']); ?>" alt="dummy-product"
                        class="block w-full h-full max-h-[164px] object-cover rounded-xl lg:rounded-3xl lg:max-h-[334px]"
                        loading="lazy">
                </div>
                <h3 class="font-rubik font-semibold text-base text-dark-charcoal lg:text-2xl uppercase">
                    <?php echo $item['name']; ?>
                </h3>
                <button type="button"
                    class="bg-dark-charcoal rounded-lg w-full font-rubik font-medium text-xs text-white tracking-wider py-[13px] lg:text-sm lg:py-[15.5px] uppercase"
                    onclick="window.location.href = '<?php echo base_url('product_detail'); ?>?id=<?php echo $item['id']; ?>'">
                    View Product - <span class="text-golden-orange inline-block">$<?php echo $item['price']; ?>
                    </span>
                </button>
            </div>
        <?php } ?>
    </div>
</section>
<!-- ======= ALL PRODUCTS SECTION END ======= -->