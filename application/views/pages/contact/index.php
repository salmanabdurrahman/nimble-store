<!-- ======= CONTACT FORMS SECTION START ======= -->
<section
    class="mt-[32px] bg-off-white container w-full rounded-2xl px-4 pt-6 pb-[34px] flex flex-col gap-6 items-start justify-center lg:mt-[60px] lg:gap-[120px] lg:pt-5 lg:pb-[45px] lg:rounded-3xl lg:flex-row lg:items-center lg:justify-center">
    <!-- CONTACT FORM -->
    <div class="flex flex-col gap-5 items-start justify-center lg:gap-6 w-full lg:max-w-[480px]">
        <div class="flex flex-col gap-2 items-start justify-center w-full">
            <h3 class="font-rubik font-semibold text-[28px] text-dark-charcoal lg:text-4xl">Get in <span
                    class="text-royal-blue inline-block">Touch</span></h3>
            <p class="font-open-sans font-semibold text-xs text-dark-charcoal lg:text-base">Let’s chat about how our
                expert team can
                help</p>
        </div>
        <form action="" method="post" class="flex flex-col gap-5 items-start justify-center w-full lg:gap-6">
            <input type="text" name="name"
                class="rounded-lg border border-solid border-dark-charcoal focus:ring-0 focus:outline-none w-full py-[14.5px] px-4 font-rubik font-normal text-dark-charcoal text-base placeholder:text-[#79767C]"
                placeholder="Name*" required autocomplete="off">
            <input type="email" name="email"
                class="rounded-lg border border-solid border-dark-charcoal focus:ring-0 focus:outline-none w-full py-[14.5px] px-4 font-rubik font-normal text-dark-charcoal text-base placeholder:text-[#79767C]"
                placeholder="Email*" required autocomplete="off">
            <textarea name="message" id="" cols="30" rows="5" class="rounded-lg border border-solid
                border-dark-charcoal focus:ring-0 focus:outline-none w-full py-[14.5px] px-4 font-rubik font-normal
                text-dark-charcoal text-base placeholder:text=[#79767C]" placeholder="Message*" required
                autocomplete="off"></textarea>
            <button type="submit"
                class="rounded-lg bg-dark-charcoal py-4 px-[74px] w-full text-white font-rubik text-sm font-medium flex gap-1 items-center justify-center lg:gap-2 transition-all duration-300 hover:scale-105">Submit
                <img src="<?= base_url('public/icons/register/arrow-forward.png'); ?>" alt="arrow"
                    class="block w-4 text-base text-white" loading="lazy">
            </button>
        </form>
    </div>
    <!-- LOGOS -->
    <div class="flex flex-col items-start justify-center gap-[45px] w-full lg:gap-[70px] lg:max-w-[200px]">
        <div class="flex items-center justify-start w-full gap-[15px]">
            <img src="<?= base_url('public/icons/contact/phone.png'); ?>" class="block w-6 lg:w-[28px]" alt="phone"
                loading="lazy">
            <div class="flex flex-col items-start justify-center">
                <p class="font-rubik font-semibold text-sm lg:text-base text-dark-charcoal uppercase">PHONE</p>
                <p class="font-open-sans font-semibold text-sm lg:text-base text-royal-blue">+62 862- 2750-7531</p>
            </div>
        </div>
        <div class="flex items-center justify-start w-full gap-[15px]">
            <img src="<?= base_url('public/icons/contact/postcode.png'); ?>" class="block w-6 lg:w-[28px]"
                alt="postcode" loading="lazy">
            <div class="flex flex-col items-start justify-center">
                <p class="font-rubik font-semibold text-sm lg:text-base text-dark-charcoal uppercase">POSTCODE</p>
                <p class="font-open-sans font-semibold text-sm lg:text-base text-royal-blue">55283</p>
            </div>
        </div>
        <div class="flex items-center justify-start w-full gap-[15px]">
            <img src="<?= base_url('public/icons/contact/email.png'); ?>" class="block w-6 lg:w-[28px]" alt="email"
                loading="lazy">
            <div class="flex flex-col items-start justify-center">
                <p class="font-rubik font-semibold text-sm lg:text-base text-dark-charcoal uppercase">EMAIL</p>
                <p class="font-open-sans font-semibold text-sm lg:text-base text-royal-blue">nimblestore@mail.com</p>
            </div>
        </div>
    </div>
</section>
<!-- ======= CONTACT FORMS SECTION END ======= -->

<!-- ======= EMBEDDED MAP SECTION START ======= -->
<section
    class="w-full mt-[45px] lg:mt-[100px] container flex items-center justify-center p-2 lg:p-4 bg-off-white rounded-2xl  lg:rounded-3xl">
    <!-- MAP -->
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3953.3418525332468!2d110.4077242750047!3d-7.753519592265391!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zN8KwNDUnMTIuNyJTIDExMMKwMjQnMzcuMSJF!5e0!3m2!1sid!2sid!4v1733578388155!5m2!1sid!2sid"
        style="border:0;" class="w-full h-[250px] lg:h-[500px] rounded-2xl  lg:rounded-3xl" allowfullscreen=""
        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<!-- ======= EMBEDDED MAP SECTION END ======= -->

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