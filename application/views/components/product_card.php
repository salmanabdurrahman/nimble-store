<div class="flex flex-col gap-2 w-full">
    <div class="mb-2 w-full bg-off-white rounded-2xl h-[171px] p-2 lg:rounded-[28px] lg:h-[350px]">
        <img src="<?= base_url('public/uploads/' . $product['image_url']); ?>" alt="<?= $product['name']; ?>"
            class="block w-full h-full max-h-[164px] rounded-xl lg:rounded-3xl lg:max-h-[334px]" loading="lazy">
    </div>
    <h3 class="font-rubik font-semibold text-base text-dark-charcoal lg:text-2xl uppercase"><?= $product['name']; ?>
    </h3>
    <button type="button"
        class="bg-dark-charcoal rounded-lg w-full font-rubik font-medium text-xs text-white tracking-wider py-[13px] lg:text-sm lg:py-[15.5px] uppercase">View
        Product - <span class="text-golden-orange inline-block">$<?= $product['price']; ?></span></button>
</div>
<!-- ini adalah card -->