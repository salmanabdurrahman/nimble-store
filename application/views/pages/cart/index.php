<!-- ======= CART SECTION START ======= -->
<?php if ($this->session->userdata('user_logged_in')): ?>
    <?php if ($this->session->userdata('role') != 'admin'): ?>
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
                <?php foreach ($carts as $cart) { ?>
                    <div class="w-full grid grid-cols-2 items-start justify-center gap-4 lg:gap-6 lg:mb-1">
                        <img src="<?= base_url('public/uploads/' . $cart['product_image']); ?>"
                            class="block w-full h-[216px] rounded-3xl object-cover lg:h-[225px]" alt="dummy-product" loading="lazy">
                        <div class="flex flex-col items-start justify-center gap-2 w-full lg:gap-6">
                            <div class="flex flex-col gap-1 w-full lg:gap-2">
                                <h4 class="font-rubik font-semibold text-base text-dark-charcoal lg:text-2xl">
                                    <?php echo $cart['product_name'] ?>
                                </h4>
                                <p class="font-open-sans font-semibold text-sm text-dark-charcoal/80 lg:text-xl">
                                    <?php echo $cart['product_description'] ?>
                                </p>
                                <span class="size-6 rounded-full bg-<?= $cart['product_color_name']; ?> lg:size-8"></span>
                                <!-- <p class="font-open-sans font-semibold text-sm text-dark-charcoal/80 lg:text-xl">#</p> -->
                            </div>
                            <div class="flex gap-4 items-center justify-start w-full">
                                <p class="font-open-sans font-semibold text-base text-dark-charcoal/80 lg:text-xl">Size
                                    <?php echo $cart['product_size_name'] ?></p>
                                <p class="font-open-sans font-semibold text-base text-dark-charcoal/80 lg:text-xl">Quantity 1</p>
                            </div>
                            <div class="flex items-center justify-between w-full">
                                <p class="font-rubik font-semibold text-xl text-royal-blue lg:text-2xl">
                                    $<?php echo $cart['product_price'] ?></p>
                                <img src="<?= base_url('public/icons/cart/bin.png'); ?>" alt="bin"
                                    class="block w-6 object-cover lg:w-8 cursor-pointer transition-all duration-300 hover:scale-110"
                                    loading="lazy"
                                    onclick="return confirm('Are you sure you want to delete this item from your cart?') ? location.href='<?= base_url('cart/delete/' . $cart['id']); ?>' : '';">
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <!-- SUMMARY -->
            <div
                class="lg:mt-[60px] bg-off-white w-full rounded-2xl p-4 flex flex-col gap-4 items-start justify-center lg:w-1/3 lg:p-6 lg:gap-6">
                <h3 class="font-rubik font-semibold text-xl text-dark-charcoal lg:text-[32px]">Order Summary</h3>
                <div class="flex flex-col gap-4 items-center justify-center w-full">
                    <div
                        class="flex items-center justify-between font-open-sans font-semibold text-base text-dark-charcoal w-full lg:text-xl">
                        <p><?php echo $total_product_at_cart ?> ITEM</p>
                        <p class="text-dark-charcoal/80">
                            <?php echo ($total_item_price > 0) ? '$' . number_format($total_item_price, 2) : '-'; ?></p>
                    </div>
                    <div
                        class="flex items-center justify-between font-open-sans font-semibold text-base text-dark-charcoal w-full lg:text-xl">
                        <p>Delivery</p>
                        <p class="text-dark-charcoal/80">
                            <?php echo ($delivery > 0) ? '$' . number_format($delivery, 2) : '-'; ?></p>
                    </div>
                    <div
                        class="flex items-center justify-between font-open-sans font-semibold text-base text-dark-charcoal w-full lg:text-xl">
                        <p>Sales Tax</p>
                        <p class="text-dark-charcoal/80"><?php echo ($ppn > 0) ? '$' . number_format($ppn, 2) : '-'; ?></p>
                    </div>
                    <div
                        class="flex items-center justify-between font-open-sans font-semibold text-dark-charcoal w-full text-xl lg:text-2xl">
                        <p>Total</p>
                        <p class="text-dark-charcoal/80"><?php echo ($total > 0) ? '$' . number_format($total, 2) : '-'; ?></p>
                    </div>
                </div>
                <?php if (!$total_product_at_cart == 0) { ?>
                    <button type="button"
                        class="rounded-lg bg-dark-charcoal text-off-white py-[15.5px] font-rubik font-medium text-sm w-full transition-all duration-300 hover:scale-105"
                        onclick="window.location.href = '<?php echo base_url('checkout'); ?>' ">Checkout</button>
                <?php } ?>
            </div>
        </section>
        <!-- ======= CART SECTION END ======= -->

        <!-- ======= NEW PRODUCTS SECTION START ======= -->
        <section class="w-full mt-[45px] flex flex-col container items-start justify-center gap-6 lg:mt-[100px] lg:gap-8">
            <h3 class="font-rubik font-semibold text-2xl text-dark-charcoal lg:text-5xl">You May Also Like</h3>
            <div class="grid grid-cols-2 gap-y-6 gap-x-4 items-stretch justify-center w-full lg:gap-4 lg:grid-cols-4">
                <!-- CARD -->
                <?php
                foreach ($random_product as $key => $item) { ?>
                    <div class="flex flex-col gap-2 w-full">
                        <div class="mb-2 w-full bg-off-white rounded-2xl h-[171px] p-2 lg:rounded-[28px] lg:h-[350px]">
                            <img src="<?= base_url('public/uploads/' . $item['image_url']); ?>" alt="dummy-product"
                                class="block w-full h-full max-h-[164px] object-cover rounded-xl lg:rounded-3xl lg:max-h-[334px]"
                                loading="lazy">
                        </div>
                        <h3 class="font-rubik font-semibold text-base text-dark-charcoal lg:text-2xl uppercase">
                            <?php echo $item['name'] ?></h3>
                        <button type="button"
                            class="bg-dark-charcoal rounded-lg w-full font-rubik font-medium text-xs text-white tracking-wider py-[13px] lg:text-sm lg:py-[15.5px] uppercase transition-all duration-300 hover:scale-105"
                            onclick="window.location.href = '<?php echo base_url('product_detail/' . $item['id']); ?>'">View
                            Product - <span class="text-golden-orange inline-block">$<?php echo $item['price'] ?></span></button>
                    </div>
                <?php } ?>
            </div>
        </section>
    <?php else: ?>
        <script>
            alert("Admin cannot access this page.");
            window.location.href = "<?php echo base_url('admin/dashboard'); ?>";
        </script>
    <?php endif; ?>
<?php else: ?>
    <!-- Peringatan dan Redirect -->
    <script>
        alert("You need to log in first to view your cart.");
        window.location.href = "<?php echo base_url('login'); ?>";
    </script>
<?php endif; ?>
<!-- ======= NEW PRODUCTS SECTION END ======= -->

<!-- ======= SWEETALERT START ======= -->
<?php if ($this->session->flashdata('success')): ?>
    <script>
        Swal.fire({
            title: "Success!",
            text: "<?= $this->session->flashdata('success'); ?>",
            icon: "success",
            confirmButtonText: "OK"
        });
    </script>
<?php endif; ?>

<?php if ($this->session->flashdata('error')): ?>
    <script>
        Swal.fire({
            title: "Error!",
            html: "<ul><?= $this->session->flashdata('error'); ?></ul>",
            icon: "error",
            confirmButtonText: "OK"
        });
    </script>
<?php endif; ?>
<!-- ======= SWEETALERT END ======= -->