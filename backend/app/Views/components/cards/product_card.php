<?php
// Component: components/cards/product_card.php
// Data contract:
// $title: string
// $description: string
// $price: float
// $image: string
?>

<article class="flex flex-col bg-white/10 shadow-lg hover:shadow-2xl p-6 border border-white/20 rounded-2xl transition-all duration-300 card-hover">
    <div class="flex justify-center items-center bg-gray-700 mb-4 rounded-xl w-full h-56 overflow-hidden">
        <?php if (!empty($image)): ?>
            <img src="<?= esc($image) ?>" alt="<?= esc($title ?? '') ?>" class="rounded-xl w-full h-full object-cover"
                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
        <?php endif; ?>
        <div class="hidden flex justify-center items-center bg-gradient-to-br from-[#8B7E74]/20 to-transparent rounded-xl w-full h-56 text-3xl">
            🌸
        </div>
    </div>

    <?php if (!empty($title)): ?>
        <h4 class="mb-2 font-semibold text-indigo-200 text-2xl header-title"><?= esc($title) ?></h4>
    <?php endif; ?>

    <?php if (!empty($description)): ?>
        <p class="flex-grow mb-4 text-gray-300 leading-relaxed"><?= esc($description) ?></p>
    <?php endif; ?>

    <div class="flex justify-between items-center mt-auto">
        <span class="font-bold text-indigo-300 text-xl">₱<?= esc($price) ?></span>
        <a href="#" class="bg-indigo-400 hover:bg-indigo-500 px-4 py-2 rounded-full focus:outline-none focus:ring-indigo-300/50 focus:ring-2 font-semibold text-gray-900 text-sm transition">
            Buy Now
        </a>
    </div>
</article>