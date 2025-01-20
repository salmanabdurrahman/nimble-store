<!-- ======= CHECKOUT SECTION START ======= -->
<?php if ($this->session->userdata('user_logged_in')): ?>
    <?php if ($this->session->userdata('role') != 'admin'): ?>
        <?php if (!$total_product_at_cart == 0): ?>
            <section
                class="flex flex-col items-start justify-center gap-6 container lg:gap-[47px] lg:flex-row w-full lg:justify-between">
                <!-- DETAIL section -->
                <div
                    class="w-full flex flex-col gap-6 items-start mt-[32px] justify-center lg:gap-[47px] lg:mt-[60px] lg:order-2 lg:w-[466px]">
                    <div
                        class="w-full bg-off-white rounded-2xl p-4 flex flex-col gap-2 items-start justify-center lg:order-2 lg:w-[466px]">
                        <h3 class="font-rubik font-semibold text-xl text-dark-charcoal lg:text-2xl lg:mb-4">
                            Order Details</h3>
                        <!-- CART ITEMS -->
                        <?php foreach ($order_details as $order_detail): ?>
                            <div class="w-full grid grid-cols-2 items-start justify-center gap-4 lg:gap-6 lg:mb-1 lg:flex">
                                <img src="<?= base_url('public/uploads/' . $order_detail['product_image']); ?>"
                                    class="block w-full h-[179px] rounded-3xl object-cover lg:h-[158px] lg:w-[140px]"
                                    alt="dummy-product" loading="lazy">
                                <div class="flex flex-col items-start justify-center gap-2 w-full lg:gap-4">
                                    <div class="flex flex-col gap-1 w-full lg:gap-2">
                                        <h4 class="font-rubik font-semibold text-base text-dark-charcoal lg:text-xl">
                                            <?php echo $order_detail['product_name']; ?>
                                        </h4>
                                        <p class="font-open-sans font-semibold text-sm text-dark-charcoal/80 lg:text-base">
                                            <?php echo $order_detail['product_description']; ?>
                                        </p>
                                        <p class="font-open-sans font-semibold text-sm text-dark-charcoal/80 lg:text-base">
                                            <?php echo $order_detail['product_color_name']; ?>
                                        </p>
                                    </div>
                                    <div class="flex gap-4 items-center justify-start w-full">
                                        <p class="font-open-sans font-semibold text-base text-dark-charcoal/80">Size
                                            <?php echo $order_detail['product_size_name'] ?>
                                        </p>
                                        <p class="font-open-sans font-semibold text-base text-dark-charcoal/80">Quantity 1</p>
                                    </div>
                                    <div class="flex items-center justify-between w-full">
                                        <p class="font-rubik font-semibold text-xl text-royal-blue">
                                            $<?php echo $order_detail['product_price'] ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- ORDER SUMMARY -->
                    <div
                        class="bg-off-white w-full rounded-2xl p-4 flex flex-col gap-4 items-start justify-center lg:w-[466px] lg:p-6 lg:gap-6 lg:order-1 ">
                        <h3 class="font-rubik font-semibold text-xl text-dark-charcoal lg:text-[32px]">Order Summary</h3>
                        <div class="flex flex-col gap-4 items-center justify-center w-full">
                            <div
                                class="flex items-center justify-between font-open-sans font-semibold text-base text-dark-charcoal w-full lg:text-xl">
                                <p><?php echo $total_product_at_cart ?> ITEM</p>
                                <p class="text-dark-charcoal/80">
                                    <?php echo ($total_item_price > 0) ? '$' . number_format($total_item_price, 2) : '-'; ?>
                                </p>
                            </div>
                            <div
                                class="flex items-center justify-between font-open-sans font-semibold text-base text-dark-charcoal w-full lg:text-xl">
                                <p>Delivery</p>
                                <p class="text-dark-charcoal/80">
                                    <?php echo ($delivery > 0) ? '$' . number_format($delivery, 2) : '-'; ?>
                                </p>
                            </div>
                            <div
                                class="flex items-center justify-between font-open-sans font-semibold text-base text-dark-charcoal w-full lg:text-xl">
                                <p>Sales Tax</p>
                                <p class="text-dark-charcoal/80"><?php echo ($ppn > 0) ? '$' . number_format($ppn, 2) : '-'; ?></p>
                            </div>
                            <div
                                class="flex items-center justify-between font-open-sans font-semibold text-dark-charcoal w-full text-xl lg:text-2xl">
                                <p>Total</p>
                                <p class="text-dark-charcoal/80"><?php echo ($total > 0) ? '$' . number_format($total, 2) : '-'; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FORM INPUTS -->
                <form method="post" action="<?php echo site_url('Checkout/checkout_action') ?>"
                    class="w-full lg:mt-[60px] flex flex-col items-start justify-center gap-5 lg:order-1 lg:gap-8">
                    <div class="w-full flex flex-col gap-2 items-start justify-center">
                        <h4 class="font-rubik font-semibold text-xl text-dark-charcoal lg:text-[32px]">Contact Details</h4>
                        <p class="font-open-sans font-semibold text-sm text-dark-charcoal/80 lg:text-base">We will use these details
                            to keep you
                            informed about your delivery</p>
                    </div>
                    <div class="w-full flex flex-col gap-5 items-start justify-center lg:gap-8">
                        <div class="grid grid-cols-1 items-start justify-center gap-5 lg:gap-8 lg:grid-cols-2 w-full">
                            <input type="text" name="fullname"
                                class="rounded-lg border border-solid border-dark-charcoal focus:ring-0 focus:outline-none w-full py-[14.5px] px-4 font-rubik font-normal text-dark-charcoal text-base placeholder:text-[#79767C] bg-light-gray"
                                placeholder="Full Name*" value="<?php echo $user['full_name']; ?>" autocomplete="off" required>
                            <input type="email" name="email"
                                class="rounded-lg border border-solid border-dark-charcoal focus:ring-0 focus:outline-none w-full py-[14.5px] px-4 font-rubik font-normal text-dark-charcoal text-base placeholder:text-[#79767C] bg-light-gray"
                                placeholder="Email*" value="<?php echo $user['email']; ?>" autocomplete="off" required>
                        </div>
                        <div class="grid grid-cols-1 items-start justify-center gap-5 lg:gap-8 lg:grid-cols-2 w-full">
                            <input type="text" name="phone"
                                class="rounded-lg border border-solid border-dark-charcoal focus:ring-0 focus:outline-none w-full py-[14.5px] px-4 font-rubik font-normal text-dark-charcoal text-base placeholder:text-[#79767C] bg-light-gray"
                                placeholder="Phone Number*" value="<?php echo $user['phone']; ?>" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="w-full flex flex-col gap-2 items-start justify-center">
                        <h4 class="font-rubik font-semibold text-xl text-dark-charcoal lg:text-[32px]">Shipping Address</h4>
                    </div>
                    <div class="grid grid-cols-1 items-start justify-center gap-5 lg:gap-8 lg:grid-cols-2 w-full">
                        <input type="text" name="province"
                            class="rounded-lg border border-solid border-dark-charcoal focus:ring-0 focus:outline-none w-full py-[14.5px] px-4 font-rubik font-normal text-dark-charcoal text-base placeholder:text-[#79767C] bg-light-gray"
                            placeholder="Province*" value="<?php echo $user['address_province']; ?>" autocomplete="off" required>
                        <input type="text" name="city"
                            class="rounded-lg border border-solid border-dark-charcoal focus:ring-0 focus:outline-none w-full py-[14.5px] px-4 font-rubik font-normal text-dark-charcoal text-base placeholder:text-[#79767C] bg-light-gray"
                            placeholder="City*" value="<?php echo $user['address_city']; ?>" autocomplete="off" required>
                    </div>
                    <div class="grid grid-cols-1 items-start justify-center gap-5 lg:gap-8 lg:grid-cols-2 w-full">
                        <input type="text" name="district"
                            class="rounded-lg border border-solid border-dark-charcoal focus:ring-0 focus:outline-none w-full py-[14.5px] px-4 font-rubik font-normal text-dark-charcoal text-base placeholder:text-[#79767C] bg-light-gray"
                            placeholder="District*" value="<?php echo $user['address_district']; ?>" autocomplete="off" required>
                        <input type="text" name="subdistrict"
                            class="rounded-lg border border-solid border-dark-charcoal focus:ring-0 focus:outline-none w-full py-[14.5px] px-4 font-rubik font-normal text-dark-charcoal text-base placeholder:text-[#79767C] bg-light-gray"
                            placeholder="Subdistrict*" value="<?php echo $user['address_subdistrict']; ?>" autocomplete="off"
                            required>
                    </div>
                    <div class="grid grid-cols-1 items-start justify-center gap-5 lg:gap-8 lg:grid-cols-2 w-full">
                        <input type="text" name="street"
                            class="rounded-lg border border-solid border-dark-charcoal focus:ring-0 focus:outline-none w-full py-[14.5px] px-4 font-rubik font-normal text-dark-charcoal text-base placeholder:text-[#79767C] bg-light-gray"
                            placeholder="Street Name*" value="<?php echo $user['street_name']; ?>" autocomplete="off" required>
                        <input type="text" name="zip_code"
                            class="rounded-lg border border-solid border-dark-charcoal focus:ring-0 focus:outline-none w-full py-[14.5px] px-4 font-rubik font-normal text-dark-charcoal text-base placeholder:text-[#79767C] bg-light-gray"
                            placeholder="Zip Code*" value="<?php echo $user['zip_code']; ?>" autocomplete="off" required>
                    </div>
                    <div class="grid grid-cols-1 items-start justify-center gap-5 lg:gap-8 w-full">
                        <input type="text" name="description"
                            class="rounded-lg border border-solid border-dark-charcoal focus:ring-0 focus:outline-none w-full py-[14.5px] px-4 font-rubik font-normal text-dark-charcoal text-base placeholder:text-[#79767C] bg-light-gray"
                            placeholder="Description" value="<?php echo $user['address_description']; ?>" autocomplete="off"
                            required>
                    </div>
                    <div class="flex items-start justify-center flex-col gap-4">
                        <div class="flex items-center justify-start gap-2">
                            <input type="checkbox" class="text-2xl block" id="same-info">
                            <label for="same-info" class="font-open-sans font-semibold text-base text-dark-charcoal">My billing and
                                delivery information are the same </label>
                        </div>
                        <div class="flex items-center justify-start gap-2">
                            <input type="checkbox" class="text-2xl block" id="verification" autocomplete="off" required>
                            <label for="verification" class="font-open-sans font-semibold text-base text-dark-charcoal">I’m 13+ year
                                old</label>
                        </div>
                    </div>
                    <button type="submit"
                        class="rounded-lg bg-dark-charcoal text-off-white py-[15.5px] font-rubik font-medium text-sm w-full capitalize transition-all duration-300 hover:scale-105">Review
                        And Pay</button>
                </form>
            </section>
        <?php else: ?>
            <script>
                alert("Add product to cart first to do checkout.");
                window.location.href = "<?php echo base_url('products'); ?>";
            </script>
        <?php endif; ?>
    <?php else: ?>
        <script>
            alert("Admin cannot access this page.");
            window.location.href = "<?php echo base_url('admin/dashboard'); ?>";
        </script>
    <?php endif; ?>
<?php else: ?>
    <script>
        alert("You need to log in first to do checkout.");
        window.location.href = "<?php echo base_url('login'); ?>";
    </script>
<?php endif; ?>
<!-- ======= CHECKOUT SECTION END ======= -->