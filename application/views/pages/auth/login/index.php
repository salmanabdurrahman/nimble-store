<!-- login section -->
<section
    class="mt-[32px] bg-off-white container w-full rounded-2xl px-4 pt-6 pb-[34px] flex flex-col gap-5 items-center justify-center lg:mt-[60px] lg:gap-6 lg:pt-5 lg:pb-[45px] lg:rounded-3xl">
    <div class="flex flex-col gap-2 items-center justify-center lg:max-w-[480px]">
        <h3 class="font-rubik font-semibold text-2xl text-dark-charcoal lg:text-4xl">Login</h3>
        <p class="font-open-sans font-semibold text-dark-charcoal text-base lg:text-xl">Sign in with</p>
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
    <form action="" method="post"
        class="flex flex-col gap-5 items-center justify-center w-full lg:max-w-[480px] lg:gap-6">
        <div class="flex flex-col gap-4 items-start justify-center w-full lg:gap-5">
            <h4 class="font-rubik font-semibold text-xl text-dark-charcoal lg:text-2xl">Username</h4>
            <input type="text" name="username"
                class="rounded-lg border border-solid border-dark-charcoal focus:ring-0 focus:outline-none w-full py-[14.5px] px-4 font-rubik font-normal text-dark-charcoal text-base placeholder:text=[#79767C]"
                placeholder="Username">
            <input type="password" name="password"
                class="rounded-lg border border-solid border-dark-charcoal focus:ring-0 focus:outline-none w-full py-[14.5px] px-4 font-rubik font-normal text-dark-charcoal text-base placeholder:text=[#79767C]"
                placeholder="Password">
        </div>
        <div class="flex justify-between items-center gap-2 w-full lg:gap-4">
            <input type="checkbox" name="terms" id="terms" class="accent-royal-blue">
            <label for="terms" class="font-open-sans font-semibold text-sm lg:text-base">Keep me logged in - applies to
                all log in
                options below. More info</label>
        </div>
        <button type="submit"
            class="rounded-lg bg-dark-charcoal py-4 px-[74px] w-full text-white font-rubik text-sm font-medium flex gap-1 items-center justify-center lg:gap-2">Username
            Login
            <img src="<?= base_url('public/icons/register/arrow-forward.png'); ?>" alt="arrow"
                class="block w-4 text-base text-white" loading="lazy">
        </button>
    </form>
</section>