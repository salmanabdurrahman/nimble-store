<!-- ======= DETAIL SECTION START ======= -->
<section
    class="mt-[32px] flex flex-col gap-6 container items-center justify-center lg:mt-[60px] lg:flex-row lg:gap-[70px] lg:items-stretch">
    <!-- PRODUCT -->
    <img src="<?= base_url("public/uploads/" . (isset($product['image_url']) ? $product['image_url'] : 'default-image.png')); ?>"
        class="block w-full h-full max-h-[280px] rounded-2xl object-cover lg:max-h-[872px]" alt="product-image"
        loading="lazy">
    <div class="flex flex-col gap-6 items-start justify-center w-full lg:gap-8">
        <div class="flex flex-col gap-2 w-full items-start justify-center lg:gap-4">
            <span
                class="bg-royal-blue rounded-lg font-rubik font-semibold text-xs text-white py-2 px-4 lg:rounded-xl lg:py-3">New
                Release</span>
            <h3 class="font-rubik font-semibold text-xl text-dark-charcoal uppercase lg:text-[32px]">
                <?= $product['name']; ?>
            </h3>
            <p class="text-royal-blue font-rubik font-semibold text-2xl">$<?= $product['price']; ?></p>
        </div>
        <div class="flex flex-col gap-2 items-start justify-center w-full lg:gap-4">
            <h4 class="font-rubik font-semibold text-base text-dark-charcoal">Color</h4>
            <span class="size-6 rounded-full bg-[#<?= $product['color_name']; ?>] lg:size-8"></span>
        </div>
        <div class="flex flex-col gap-2 items-start justify-center w-full lg:gap-4">
            <h4 class="font-rubik font-semibold text-base text-dark-charcoal">Size</h4>
            <div class="flex flex-wrap gap-2 items-center justify-start lg:gap-1 w-full">
                <!-- SIZES -->
                <?php for ($i = 37; $i <= 45; $i++) { ?>
                    <span
                        class="rounded-lg bg-white text-dark-charcoal font-rubik font-medium text-sm py-[15.5px] px-4 flex items-center justify-center text-center w-full max-w-12 transition-all duration-300 hover:bg-dark-charcoal hover:text-off-white cursor-pointer">
                        <?= $i; ?>
                    </span>
                <?php } ?>
            </div>
        </div>
        <div class="flex flex-col gap-2 items-center justify-center w-full">
            <button type="button"
                class="w-full bg-dark-charcoal text-off-white rounded-lg font-rubik font-medium text-sm uppercase py-[15.5px]">
                Add To Cart
            </button>
            <button type="button"
                class="w-full bg-royal-blue text-off-white rounded-lg font-rubik font-medium text-sm uppercase py-[15.5px]">
                Buy It Now
            </button>
        </div>
        <div class="flex flex-col gap-2 items-start justify-center w-full">
            <h3 class="font-rubik font-semibold text-base text-dark-charcoal uppercase">About the product</h3>
            <p class="font-open-sans font-normal text-base text-dark-charcoal/80">
                <?= $product['description']; ?>
            </p>
        </div>
    </div>
</section>
<!-- ======= DETAIL SECTION END ======= -->

<!-- ======= REVIEWS SECTION START ======= -->
<section class="w-full mt-[45px] flex flex-col container items-start justify-center gap-6 lg:mt-[100px] lg:gap-8">
    <h3 class="font-rubik font-semibold text-2xl text-dark-charcoal lg:text-5xl">Reviews</h3>
    <div class="grid grid-cols-1 gap-y-6 gap-x-4 items-center justify-center w-full lg:gap-4 lg:grid-cols-4">
        <?php if (!empty($comments)) { ?>
            <?php foreach ($comments as $comment) { ?>
                <div class="flex flex-col items-center justify-center w-full bg-off-white p-4 rounded-[16px] gap-4">
                    <div class="flex items-start justify-between w-full">
                        <div class="flex flex-col gap-2 items-start justify-start max-w-[85%]">
                            <h4 class="font-rubik font-semibold text-xl text-dark-charcoal lg:text-2xl">
                                <?= isset($comment['user_name']) ? $comment['user_name'] : 'No users'; ?>
                            </h4>
                            <p class="font-open-sans font-normal text-sm text-dark-charcoal/80 lg:text-base">
                                <?= isset($comment['comment']) ? $comment['comment'] : 'No comment'; ?>
                            </p>
                            <div class="flex items-center justify-start gap-1 w-full">
                                <?php if (isset($comment['rating'])) {
                                    for ($i = 1; $i <= $comment['rating']; $i++) { ?>
                                        <img src="<?= base_url('public/icons/products/star.png'); ?>" alt="star"
                                            class="block size-4 lg:size-6" loading="lazy">
                                <?php }
                                } ?>
                                <p class="font-open-sans font-semibold text-sm text-dark-charcoal ml-1">
                                    <?= number_format($comment['rating'], 1); ?>
                                </p>
                            </div>
                        </div>
                        <img src="<?= isset($comment['profile_picture']) ? $comment['profile_picture'] : base_url('public/uploads/'.$comment['user_profile']); ?>"
                            class="block size-12 lg:size-16 rounded-full object-cover" alt="user-profile" loading="lazy">
                    </div>
                </div>
            <?php } ?>
        <?php } else { ?>
            <p>No reviews available for this product.</p>
        <?php } ?>
    </div>
</section>
<!-- ======= REVIEWS SECTION END ======= -->
