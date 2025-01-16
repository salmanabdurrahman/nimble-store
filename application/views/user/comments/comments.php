<!-- ======= CONTENT SECTION START ======= -->
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
                                        Comments
                                    </h2>
                                    <p class="text-sm text-gray-600">
                                        Add comments, edit and more.
                                    </p>
                                </div>
                                <div>
                                    <div class="inline-flex gap-x-2"></div>
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
                                                    Product
                                                </span>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-start">
                                            <div class="flex items-center gap-x-2">
                                                <span
                                                    class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                                    Username
                                                </span>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-start">
                                            <div class="flex items-center gap-x-2">
                                                <span
                                                    class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                                    Comment
                                                </span>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-start">
                                            <div class="flex items-center gap-x-2">
                                                <span
                                                    class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                                    Rating
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
                                    <?php foreach ($comments as $comment) { ?>
                                        <tr>
                                            <td class="size-px whitespace-nowrap">
                                                <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3"></div>
                                                <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3"></div>
                                            </td>
                                            <td class="h-px w-72 whitespace-nowrap">
                                                <div class="px-6 py-3 text-start">
                                                    <span
                                                        class="block text-sm font-semibold text-gray-800"><?php echo $comment['id'] ?></span>
                                                </div>
                                            </td>
                                            <!-- <td class="h-px w-72 whitespace-nowrap">
                                            <div class="px-6 py-3 text-start">
                                                <div class="flex items-center gap-x-3">
                                                    <img class="inline-block size-[38px] rounded-full"
                                                        src="https://images.unsplash.com/photo-1531927557220-a9e23c1e4794?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                                                        alt="Avatar">
                                                </div>
                                            </div>
                                        </td> -->
                                            <td class="h-px w-72 whitespace-nowrap">
                                                <div class="px-6 py-3 text-start">
                                                    <span
                                                        class="block text-sm text-gray-800"><?php echo $comment['product_name'] ?></span>
                                                </div>
                                            </td>
                                            <td class="h-px w-72 whitespace-nowrap">
                                                <div class="px-6 py-3 text-start">
                                                    <span
                                                        class="block text-sm text-gray-800"><?php echo $comment['user_name'] ?></span>
                                                </div>
                                            </td>
                                            <td class="h-px w-72 whitespace-nowrap">
                                                <div class="px-6 py-3 text-start">
                                                    <span
                                                        class="block text-sm text-gray-800"><?php echo $comment['comment'] ?></span>
                                                </div>
                                            </td>
                                            <!-- <td class="size-px whitespace-nowrap">
                                            <div class="px-6 py-3 text-start">
                                                <span
                                                    class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full">
                                                    <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                                        <path
                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                    </svg>
                                                    Active
                                                </span>
                                            </div>
                                        </td> -->
                                            <td class="size-px whitespace-nowrap">
                                                <div class="px-6 py-3 text-start">
                                                    <span class="block text-sm text-gray-800"><?php echo $comment['rating'] ?></span>
                                                </div>
                                            </td>
                                            <td class="size-px whitespace-nowrap">
                                                <div class="px-6 py-3 text-start">
                                                    <span
                                                        class="text-sm text-gray-500"><?php echo $comment['created_at'] ?></span>
                                                </div>
                                            </td>
                                            <td class="size-px whitespace-nowrap">
                                                <div class="px-6 py-1.5 gap-2 flex items-center">
                                                    <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium"
                                                        href="<?= base_url('User/update_comment_user/' . $comment['id']); ?>">
                                                        Edit
                                                    </a>
                                                    <a class="inline-flex items-center gap-x-1 text-sm text-red-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium"
                                                        href="<?= base_url('User/delete_comment/' . $comment['id']); ?>"
                                                        onclick="return confirm('Are you sure you want to delete this comment')">
                                                        Delete
                                                    </a>
                                                </div>
                                            </td>
                                        <?php } ?>
                                        </tr>
                                </tbody>
                            </table>
                            <!-- FOOTER -->
                            <div
                                class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200">
                                <div>
                                    <p class="text-sm text-gray-600">
                                        <span
                                            class="font-semibold text-gray-800"><?php echo $count_comments_by_user_id ?></span>
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
<!-- ======= CONTENT SECTION END ======= -->

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