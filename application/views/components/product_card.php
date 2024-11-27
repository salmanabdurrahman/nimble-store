<!-- card -->
<div class="flex flex-col gap-2 w-full max-w-[171px] lg:max-w-[318px]">
    <div class="mb-2 w-full bg-off-white rounded-2xl h-[171px] p-2 lg:rounded-[28px] lg:h-[350px] lg:max-w-[318px]">
        <img src="<?= base_url('public/uploads/' . $product['image_url']); ?>" alt="<?= $product['name']; ?>"
            class="block w-full h-full max-w-[155px] max-h-[164px] rounded-xl lg:rounded-3xl lg:max-w-[302px] lg:max-h-[334px]"
            loading="lazy">
    </div>
    <h3 class="font-rubik font-semibold text-base text-dark-charcoal lg:text-2xl uppercase"><?= $product['name']; ?>
    </h3>
    <button type="button"
        class="bg-dark-charcoal rounded-lg w-full max-w-[171px] font-rubik font-medium text-xs text-white tracking-wider py-[13px] px-5 lg:text-sm lg:py-[15.5px] lg:px-[82px] lg:max-w-[318px] uppercase">View
        Product - <span class="text-golden-orange">$<?= $product['price']; ?></span></button>
</div>