<!-- ======= CONTENT SECTION START ======= -->
<section class="w-full lg:ps-64">
    <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
        <!-- TABLE SECTION -->
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <!-- CARD -->
            <div class="bg-white rounded-xl shadow p-4 sm:p-7">
                <div class="mb-8">
                    <h2 class="text-xl font-bold text-gray-800">
                        Add User
                    </h2>
                    <p class="text-sm text-gray-600">
                        Manage your name, password and account settings.
                    </p>
                </div>
                <form action="<?php echo site_url('Admin/add_users_action') ?>" method="post"
                    enctype="multipart/form-data">
                    <div class="grid sm:grid-cols-12 gap-2 sm:gap-6">
                        <div class="sm:col-span-3">
                            <label class="inline-block text-sm text-gray-800 mt-2.5">
                                Profile photo
                            </label>
                        </div>
                        <!-- PROFILE PHOTO -->
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
                        <!-- UPLOAD PROFILE PHOTO -->
                        <div class="sm:col-span-3">
                            <label for="af-account-full-name" class="inline-block text-sm text-gray-800 mt-2.5">
                                Profile photo
                            </label>
                        </div>
                        <div class="sm:col-span-9">
                            <div class="sm:flex">
                                <input id="af-account-picture" type="file"
                                    class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                    name="picture" placeholder="Upload photo">
                            </div>
                        </div>
                        <!-- FULL NAME -->
                        <div class="sm:col-span-3">
                            <label for="af-account-full-name" class="inline-block text-sm text-gray-800 mt-2.5">
                                Full name
                            </label>
                        </div>
                        <div class="sm:col-span-9">
                            <div class="sm:flex">
                                <input id="af-account-full-name" type="text"
                                    class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                    name="fullname" placeholder="Salman Abdurrahman" autocomplete="off" required>
                            </div>
                        </div>
                        <!-- USERNAME -->
                        <div class="sm:col-span-3">
                            <label for="af-account-full-name" class="inline-block text-sm text-gray-800 mt-2.5">
                                Username
                            </label>
                        </div>
                        <div class="sm:col-span-9">
                            <div class="sm:flex">
                                <input id="af-account-full-name" type="text"
                                    class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                    name="username" placeholder="salmanabd" autocomplete="off" required>
                            </div>
                        </div>
                        <!-- EMAIL -->
                        <div class="sm:col-span-3">
                            <label for="af-account-email" class="inline-block text-sm text-gray-800 mt-2.5">
                                Email
                            </label>
                        </div>
                        <div class="sm:col-span-9">
                            <input id="af-account-email" type="email"
                                class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                name="email" placeholder="salman@gmail.com" autocomplete="off" required>
                        </div>
                        <!-- PASSWORD -->
                        <div class="sm:col-span-3">
                            <label for="af-account-password" class="inline-block text-sm text-gray-800 mt-2.5">
                                Password
                            </label>
                        </div>
                        <div class="sm:col-span-9">
                            <div class="space-y-2">
                                <input id="af-account-password" type="password"
                                    class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                    name="password" placeholder="Enter current password" autocomplete="off" required>
                                <input type="password"
                                    class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                    name="new_password" placeholder="Enter new password" autocomplete="off" required>
                            </div>
                        </div>
                        <!-- PHONE -->
                        <div class="sm:col-span-3">
                            <div class="inline-block">
                                <label for="af-account-phone" class="inline-block text-sm text-gray-800 mt-2.5">
                                    Phone
                                </label>
                            </div>
                        </div>
                        <div class="sm:col-span-9">
                            <div class="sm:flex">
                                <input id="af-account-phone" type="text"
                                    class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                    name="phone" placeholder="+x(xxx)xxx-xx-xx" autocomplete="off" required>
                            </div>
                        </div>
                        <!-- GENDER -->
                        <div class="sm:col-span-3">
                            <label for="af-account-gender-checkbox" class="inline-block text-sm text-gray-800 mt-2.5">
                                Gender
                            </label>
                        </div>
                        <div class="sm:col-span-9">
                            <div class="sm:flex">
                                <label for="af-account-gender-checkbox"
                                    class="flex py-2 px-3 w-full border border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                    <input type="radio" name="gender"
                                        class="shrink-0 mt-0.5 border-gray-300 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                        id="af-account-gender-checkbox" value="male" checked autocomplete="off"
                                        required>
                                    <span class="text-sm text-gray-500 ms-3">Male</span>
                                </label>
                                <label for="af-account-gender-checkbox-female"
                                    class="flex py-2 px-3 w-full border border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                    <input type="radio" name="gender"
                                        class="shrink-0 mt-0.5 border-gray-300 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                        id="af-account-gender-checkbox-female" value="female">
                                    <span class="text-sm text-gray-500 ms-3">Female</span>
                                </label>
                                <label for="af-account-gender-checkbox-other"
                                    class="flex py-2 px-3 w-full border border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                    <input type="radio" name="gender"
                                        class="shrink-0 mt-0.5 border-gray-300 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                        id="af-account-gender-checkbox-other" value="other">
                                    <span class="text-sm text-gray-500 ms-3">Other</span>
                                </label>
                            </div>
                        </div>
                        <!-- PROVINCE -->
                        <div class="sm:col-span-3">
                            <div class="inline-block">
                                <label for="af-account-phone" class="inline-block text-sm text-gray-800 mt-2.5">
                                    Province
                                </label>
                                <span class="text-sm text-gray-400">
                                    (Optional)
                                </span>
                            </div>
                        </div>
                        <div class="sm:col-span-9">
                            <div class="sm:flex">
                                <input id="af-account-phone" type="text"
                                    class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                    name="province" placeholder="Jawa Barat">
                            </div>
                        </div>
                        <!-- CITY -->
                        <div class="sm:col-span-3">
                            <div class="inline-block">
                                <label for="af-account-phone" class="inline-block text-sm text-gray-800 mt-2.5">
                                    City
                                </label>
                                <span class="text-sm text-gray-400">
                                    (Optional)
                                </span>
                            </div>
                        </div>
                        <div class="sm:col-span-9">
                            <div class="sm:flex">
                                <input id="af-account-phone" type="text"
                                    class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                    name="city" placeholder="Karawang">
                            </div>
                        </div>
                        <!-- DISTRICT -->
                        <div class="sm:col-span-3">
                            <div class="inline-block">
                                <label for="af-account-phone" class="inline-block text-sm text-gray-800 mt-2.5">
                                    District
                                </label>
                                <span class="text-sm text-gray-400">
                                    (Optional)
                                </span>
                            </div>
                        </div>
                        <div class="sm:col-span-9">
                            <div class="sm:flex">
                                <input id="af-account-phone" type="text"
                                    class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                    name="district" placeholder="Cikampek">
                            </div>
                        </div>
                        <!-- SUBDISTRICT -->
                        <div class="sm:col-span-3">
                            <div class="inline-block">
                                <label for="af-account-phone" class="inline-block text-sm text-gray-800 mt-2.5">
                                    Subdistrict
                                </label>
                                <span class="text-sm text-gray-400">
                                    (Optional)
                                </span>
                            </div>
                        </div>
                        <div class="sm:col-span-9">
                            <div class="sm:flex">
                                <input id="af-account-phone" type="text"
                                    class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                    name="subdistrict" placeholder="Cibuaya">
                            </div>
                        </div>
                        <!-- STREET -->
                        <div class="sm:col-span-3">
                            <div class="inline-block">
                                <label for="af-account-phone" class="inline-block text-sm text-gray-800 mt-2.5">
                                    Street
                                </label>
                                <span class="text-sm text-gray-400">
                                    (Optional)
                                </span>
                            </div>
                        </div>
                        <div class="sm:col-span-9">
                            <div class="sm:flex">
                                <input id="af-account-phone" type="text"
                                    class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                    name="street" placeholder="Jl. Raya Cikampek">
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
                                    name="description" cols="30" rows="5"
                                    placeholder="Di depannya ada anjing galak"></textarea>
                            </div>
                        </div>
                        <!-- ZIP CODE -->
                        <div class="sm:col-span-3">
                            <div class="inline-block">
                                <label for="af-account-phone" class="inline-block text-sm text-gray-800 mt-2.5">
                                    Zip Code
                                </label>
                                <span class="text-sm text-gray-400">
                                    (Optional)
                                </span>
                            </div>
                        </div>
                        <div class="sm:col-span-9">
                            <div class="sm:flex">
                                <input id="af-account-phone" type="text"
                                    class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                    name="zip_code" placeholder="50123">
                            </div>
                        </div>
                    </div>
                    <!-- BUTTON CANCEL AND SAVE -->
                    <div class="mt-10 flex justify-end gap-x-2">
                        <button type="button"
                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50"
                            onclick="window.location.href = '<?= base_url('admin/users'); ?>';">
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