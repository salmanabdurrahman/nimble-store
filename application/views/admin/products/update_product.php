<!-- ======= CONTENT SECTION START ======= -->
<section class="w-full lg:ps-64">
    <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
        <!-- TABLE SECTION -->
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <!-- CARD -->
            <div class="bg-white rounded-xl shadow p-4 sm:p-7">
                <div class="mb-8">
                    <h2 class="text-xl font-bold text-gray-800">
                        Update Product
                    </h2>
                    <p class="text-sm text-gray-600">
                        Manage your product data, description, price and more.
                    </p>
                </div>
                <form action="<?php echo site_url('Admin/update_product_action') ?>" method="post" enctype="multipart/form-data">
                    <div class="grid sm:grid-cols-12 gap-2 sm:gap-6">
                        <div class="sm:col-span-3">
                            <label class="inline-block text-sm text-gray-800 mt-2.5">
                                Product photo
                            </label>
                        </div>
                        <!-- PRODUCT PHOTO -->
                        <div class="sm:col-span-9">
                            <div class="flex items-center gap-5">
                                <img class="inline-block size-16 rounded-full ring-2 ring-white"
                                    src="https://preline.co/assets/img/160x160/img1.jpg" alt="Avatar">
                                <div class="flex gap-x-2">
                                    <!-- <div>
                                        <button type="button"
                                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50">
                                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                                                <polyline points="17 8 12 3 7 8" />
                                                <line x1="12" x2="12" y1="3" y2="15" />
                                            </svg>
                                            Upload photo
                                        </button>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <!-- UPLOAD PRODUCT PHOTO -->
                        <div class="sm:col-span-3">
                            <label for="af-account-full-name" class="inline-block text-sm text-gray-800 mt-2.5">
                                Product photo
                            </label>
                        </div>
                        <div class="sm:col-span-9">
                            <div class="sm:flex">
                                <input id="af-account-picture" type="file"
                                    class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                    name="picture" placeholder="Upload photo">
                            </div>
                        </div>
                        <!-- NAME -->
                        <div class="sm:col-span-3">
                            <label for="af-account-full-name" class="inline-block text-sm text-gray-800 mt-2.5">
                                Name
                            </label>
                        </div>
                        <div class="sm:col-span-9">
                            <div class="sm:flex">
                                <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
                                <input id="af-account-full-name" type="text"
                                    class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                    name="name" value="<?php echo $product['name']; ?>" placeholder="ADIDAS 4DFWD X PARLEY">
                            </div>
                        </div>
                        <!-- DESCRIPTION -->
                        <div class="sm:col-span-3">
                            <div class="inline-block">
                                <label for="af-account-phone" class="inline-block text-sm text-gray-800 mt-2.5">
                                    Description
                                </label>
                                <span class="text-sm text-gray-400">
                                    (Optional)
                                </span>
                            </div>
                        </div>
                        <div class="sm:col-span-9">
                            <div class="sm:flex">
                                <textarea id="af-account-phone"
                                    class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                    name="description" cols="30" rows="5" placeholder="Product description"><?php echo $product['description']; ?></textarea>
                            </div>
                        </div>
                        <!-- PRICE -->
                        <div class="sm:col-span-3">
                            <label for="af-account-full-name" class="inline-block text-sm text-gray-800 mt-2.5">
                                Price
                            </label>
                        </div>
                        <div class="sm:col-span-9">
                            <div class="sm:flex">
                                <input id="af-account-full-name" type="text"
                                    class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                    name="price" value="<?php echo $product['price']; ?>" placeholder="125">
                            </div>
                        </div>
                        <!-- STOCK -->
                        <div class="sm:col-span-3">
                            <label for="af-account-email" class="inline-block text-sm text-gray-800 mt-2.5">
                                Stock
                            </label>
                        </div>
                        <div class="sm:col-span-9">
                            <input id="af-account-email" type="text"
                                class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                name="stock" value="<?php echo $product['stock']; ?>" placeholder="10">
                        </div>
                        <!-- CATEGORY -->
                        <div class="sm:col-span-3">
                            <label for="af-account-category" class="inline-block text-sm text-gray-800 mt-2.5">
                                Category
                            </label>
                        </div>
                        <div class="sm:col-span-9">
                            <select id="af-account-category" name="category"
                                class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                <option value="" disabled <?php echo empty($product['category_id']) ? 'selected' : ''; ?>>Select Category</option>
                                <?php foreach ($categories as $category) : ?>
                                    <option value="<?php echo $category['id']; ?>"
                                        <?php echo $category['id'] == $product['category_id'] ? 'selected' : ''; ?>>
                                        <?php echo $category['name']; ?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <!-- COLOR -->
                        <div class="sm:col-span-3">
                            <label for="af-account-color" class="inline-block text-sm text-gray-800 mt-2.5">
                                Color
                            </label>
                        </div>
                        <div class="sm:col-span-9">
                            <select id="af-account-color" name="color"
                                class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                <option value="" disabled <?php echo empty($product['color_id']) ? 'selected' : ''; ?>>Select Color</option>
                                <?php foreach ($colors as $color) : ?>
                                    <option value="<?php echo $color['id']; ?>"
                                        <?php echo $color['id'] == $product['color_id'] ? 'selected' : ''; ?>>
                                        <?php echo $color['name']; ?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <!-- BRAND -->
                        <div class="sm:col-span-3">
                            <label for="af-account-email" class="inline-block text-sm text-gray-800 mt-2.5">
                                Brand
                            </label>
                        </div>
                        <div class="sm:col-span-9">
                            <input id="af-account-email" type="text"
                                class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                name="brand" value="<?php echo $product['brand']; ?>" placeholder="Adidas">
                        </div>
                    </div>
                    <!-- BUTTON CANCEL AND SAVE -->
                    <div class="mt-10 flex justify-end gap-x-2">
                        <button type="button"
                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50"
                            onclick="window.location.href = '<?= base_url('admin/products'); ?>';">
                            Cancel
                        </button>
                        <button type="submit"
                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                            name="submit">
                            Save changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- ======= CONTENT SECTION END ======= -->

<!-- ======= ADD SIZE SECTION START ======= -->
<section class="w-full lg:ps-64">
    <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
        <!-- TABLE SECTION -->
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <!-- CARD -->
            <div class="flex flex-col">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
                            <!-- HEADER -->
                            <div
                                class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200">
                                <div>
                                    <h2 class="text-xl font-semibold text-gray-800">
                                        Sizes
                                    </h2>
                                    <p class="text-sm text-gray-600">
                                        Add size, edit and more.
                                    </p>
                                </div>
                                <div>
                                    <div class="inline-flex gap-x-2">
                                        <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" id="add-size-button">
                                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M5 12h14" />
                                                <path d="M12 5v14" />
                                            </svg>
                                            Add size
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- TABLE -->
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th></th>
                                        <th scope="col" class="px-6 py-3 text-start">
                                            <div class="flex items-center gap-x-2">
                                                <span
                                                    class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                                    Id
                                                </span>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-start">
                                            <div class="flex items-center gap-x-2">
                                                <span
                                                    class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                                    Size
                                                </span>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-start">
                                            <div class="flex items-center gap-x-2">
                                                <span
                                                    class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                                    Created
                                                </span>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-start"></th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    <!-- Static Data for Comments -->
                                    <?php foreach ($products_sizes as $product_size) : ?>
                                        <tr>
                                            <td class="size-px whitespace-nowrap">
                                                <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3"></div>
                                                <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3"></div>
                                            </td>
                                            <td class="h-px w-72 whitespace-nowrap">
                                                <div class="px-6 py-3 text-start">
                                                    <span
                                                        class="block text-sm font-semibold text-gray-800"><?php echo $product_size['id'] ?></span>
                                                </div>
                                            </td>
                                            <td class="h-px w-72 whitespace-nowrap">
                                                <div class="px-6 py-3 text-start">
                                                    <span
                                                        class="block text-sm text-gray-800"><?php echo $product_size['size_name'] ?></span>
                                                </div>
                                            </td>
                                            <td class="size-px whitespace-nowrap">
                                                <div class="px-6 py-3 text-start">
                                                    <span class="text-sm text-gray-500"><?php echo $product_size['created_at'] ?></span>
                                                </div>
                                            </td>
                                            <td class="size-px whitespace-nowrap">
                                                <div class="px-6 py-1.5 gap-2 flex items-center">
                                                    <a class="inline-flex items-center gap-x-1 text-sm text-red-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium"
                                                        href=" <?php echo base_url('Size/delete_size/' . $product_size['id']) ?> " onclick="return confirm('Are you sure you want to delete this size?')">Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <!-- FOOTER -->
                            <div
                                class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200">
                                <div>
                                    <p class="text-sm text-gray-600">
                                        <span
                                            class="font-semibold text-gray-800"><?php echo $count_all_product_sizes?></span>
                                        results
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======= ADD SIZE SECTION END ======= -->

<!-- ======= CONTENT SECTION START ======= -->
<section class="w-full lg:ps-64 hidden" id="add-size-section">
    <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
        <!-- TABLE SECTION -->
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <!-- CARD -->
            <div class="bg-white rounded-xl shadow p-4 sm:p-7">
                <div class="mb-8">
                    <h2 class="text-xl font-bold text-gray-800">
                        Add Size
                    </h2>
                    <p class="text-sm text-gray-600">
                        Manage your product size.
                    </p>
                </div>
                <form action="<?php echo site_url('Size/add_size/') . $product['id']; ?>" method="post" enctype="multipart/form-data">
                    <div class="grid sm:grid-cols-12 gap-2 sm:gap-6">
                        <!-- SIZE -->
                        <div class="sm:col-span-3">
                            <label for="af-account-size" class="inline-block text-sm text-gray-800 mt-2.5">
                                Size
                            </label>
                        </div>
                        <div class="sm:col-span-9">
                            <select id="af-account-size" name="size"
                                class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                <option value="" disabled <?php echo empty($product['size_id']) ? 'selected' : ''; ?>>Select Size</option>
                                <?php foreach ($sizes as $size) : ?>
                                    <option value="<?php echo $size['id']; ?>"
                                        <?php echo $size['id'] == $product['size_id'] ? 'selected' : ''; ?>>
                                        <?php echo $size['name']; ?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <!-- BUTTON CANCEL AND SAVE -->
                    <div class="mt-10 flex justify-end gap-x-2">
                        <button type="button"
                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50" id="add-size-cancel-button">
                            Cancel
                        </button>
                        <button type="submit"
                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                            name="submit"
                            >
                            Save changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- ======= CONTENT SECTION END ======= -->

<script>
    const addSizeButton = document.getElementById('add-size-button');
    const addSizeCancelButton = document.getElementById('add-size-cancel-button');
    const addSizeSection = document.getElementById('add-size-section');

    addSizeButton.addEventListener('click', function() {
        addSizeSection.classList.remove('hidden');
    });

    addSizeCancelButton.addEventListener('click', function() {
        addSizeSection.classList.add('hidden');
    });
</script>

<!-- ======= SWEETALERT ADD PRODUCT START ======= -->

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
<!-- ======= SWEETALERT ADD PRODUCT END ======= -->