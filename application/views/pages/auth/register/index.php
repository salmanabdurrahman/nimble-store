<!-- ======= REGISTER SECTION START ======= -->
<section
    class="mt-[32px] bg-off-white container w-full rounded-2xl px-4 pt-6 pb-[34px] flex flex-col gap-5 items-center justify-center lg:mt-[60px] lg:gap-6 lg:pt-5 lg:pb-[45px] lg:rounded-3xl">
    <div class="flex flex-col gap-2 items-center justify-center lg:max-w-[480px]">
        <h3 class="font-rubik font-semibold text-2xl text-dark-charcoal lg:text-4xl">Register</h3>
        <p class="font-open-sans font-semibold text-dark-charcoal text-base lg:text-xl">Sign up with</p>
    </div>
    <div class="flex items-center justify-between gap-5 lg:max-w-[480px] lg:gap-6">
        <button type="button"
            class="rounded-xl py-4 px-[30px] flex items-center border border-solid border-dark-charcoal cursor-pointer lg:px-14">
            <img src="<?= base_url('public/icons/register/google.png'); ?>" class="block w-6 lg:w-8" alt="google"
                loading="lazy">
        </button>
        <button type="button"
            class="rounded-xl py-4 px-[30px] flex items-center border border-solid border-dark-charcoal cursor-pointer lg:px-14">
            <img src="<?= base_url('public/icons/register/apple.png'); ?>" class="block w-6 lg:w-8" alt="apple"
                loading="lazy">
        </button>
        <button type="button"
            class="rounded-xl py-4 px-[30px] flex items-center border border-solid border-dark-charcoal cursor-pointer lg:px-14">
            <img src="<?= base_url('public/icons/register/facebook.png'); ?>" class="block w-6 lg:w-8" alt="facebook"
                loading="lazy">
        </button>
    </div>
    <h3 class="font-open-sans font-semibold text-dark-charcoal text-xl lg:text-xl lg:max-w-[480px] lg:text-center">OR
    </h3>
    <!-- FORM INPUTS -->
    <form action="<?= site_url('register'); ?>" method="post"
    class="flex flex-col gap-5 items-center justify-center w-full lg:max-w-[480px] lg:gap-6">
    <div class="flex flex-col gap-4 items-start justify-center w-full lg:gap-5">
        <h4 class="font-rubik font-semibold text-xl text-dark-charcoal lg:text-2xl">Your Name</h4>
        <input type="text" name="fullname" required
            class="rounded-lg border border-solid border-dark-charcoal focus:ring-0 focus:outline-none w-full py-[14.5px] px-4 font-rubik font-normal text-dark-charcoal text-base placeholder:text=[#79767C]"
            placeholder="Full Name">
        <input type="text" name="username" required
            class="rounded-lg border border-solid border-dark-charcoal focus:ring-0 focus:outline-none w-full py-[14.5px] px-4 font-rubik font-normal text-dark-charcoal text-base placeholder:text=[#79767C]"
            placeholder="Username">
    </div>
    <div class="flex flex-col gap-4 items-center justify-center w-full lg:gap-5">
        <h4 class="font-rubik font-semibold text-xl text-dark-charcoal lg:text-2xl">Gender</h4>
        <div class="flex gap-[30px] items-center justify-center w-full">
            <div class="flex gap-2 items-center justify-start">
                <input type="radio" name="gender" value="male" required class="accent-royal-blue" id="male">
                <label for="male" class="font-open-sans font-semibold text-base text-dark-charcoal">Male</label>
            </div>
            <div class="flex gap-2 items-center justify-start">
                <input type="radio" name="gender" value="female" required class="accent-royal-blue" id="female">
                <label for="female" class="font-open-sans font-semibold text-base text-dark-charcoal">Female</label>
            </div>
            <div class="flex gap-2 items-center justify-start">
                <input type="radio" name="gender" value="other" required class="accent-royal-blue" id="other">
                <label for="other" class="font-open-sans font-semibold text-base text-dark-charcoal">Other</label>
            </div>
        </div>
    </div>
    <div class="flex flex-col gap-4 items-start justify-center w-full lg:gap-5">
        <h4 class="font-rubik font-semibold text-xl text-dark-charcoal lg:text-2xl">Login Details</h4>
        <input type="tel" name="phone" required
            class="rounded-lg border border-solid border-dark-charcoal focus:ring-0 focus:outline-none w-full py-[14.5px] px-4 font-rubik font-normal text-dark-charcoal text-base placeholder:text=[#79767C]"
            placeholder="Phone Number">
        <input type="email" name="email" required
            class="rounded-lg border border-solid border-dark-charcoal focus:ring-0 focus:outline-none w-full py-[14.5px] px-4 font-rubik font-normal text-dark-charcoal text-base placeholder:text=[#79767C]"
            placeholder="Email">
        <input type="password" name="password" required
            class="rounded-lg border border-solid border-dark-charcoal focus:ring-0 focus:outline-none w-full py-[14.5px] px-4 font-rubik font-normal text-dark-charcoal text-base placeholder:text=[#79767C]"
            placeholder="Password">
        <input type="password" name="confirm_password" required
            class="rounded-lg border border-solid border-dark-charcoal focus:ring-0 focus:outline-none w-full py-[14.5px] px-4 font-rubik font-normal text-dark-charcoal text-base placeholder:text=[#79767C]"
            placeholder="Confirm Password">
    </div>
    <button type="submit"
        class="rounded-lg bg-dark-charcoal py-4 px-[102px] w-full text-white font-rubik text-sm font-medium">Register</button>
</form>

</section>
<!-- ======= REGISTER SECTION END ======= -->