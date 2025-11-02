<?php
// Component: components/sections/call_to_action.php
// Data contract:
// $heading: string
// $sub: string|null
// $primary: object
// $secondary: object|null
$heading ??= 'Join the Lunara Experience';
$sub ??= 'Stay inspired under the moonlight. Subscribe to our newsletter for design updates and new collections.';
$primary ??= ['label' => 'Get Started', 'href' => '#'];
$secondary ??= null;
?>

<section class="relative bg-gradient-to-br from-indigo-500/10 to-pink-400/10 border border-white/10 rounded-2xl p-10 mt-20 shadow-lg overflow-hidden">
    <!-- Background overlay (blur + gradient) -->
    <div class="absolute inset-0 bg-gradient-to-br from-indigo-400/10 via-transparent to-pink-400/10 blur-3xl opacity-40 pointer-events-none"></div>

    <!-- Content -->
    <div class="relative z-10 text-center max-w-3xl mx-auto">
        <?php if (!empty($heading)): ?>
            <h2 class="text-4xl md:text-5xl font-extrabold text-gradient mb-4"><?= esc($heading) ?></h2>
        <?php endif; ?>

        <?php if (!empty($sub)): ?>
            <p class="text-gray-300 mb-8 text-lg"><?= esc($sub) ?></p>
        <?php endif; ?>

        <div class="flex justify-center gap-4">
            <?php if (!empty($primary)): ?>
                <a href="<?= esc($primary['href']) ?>" class="bg-indigo-500 hover:bg-indigo-600 text-white px-6 py-3 rounded-full font-semibold transition">
                    <?= esc($primary['label']) ?>
                </a>
            <?php endif; ?>

            <?php if (!empty($secondary)): ?>
                <a href="<?= esc($secondary['href']) ?>" class="bg-white/10 hover:bg-white/20 text-white px-6 py-3 rounded-full font-semibold transition">
                    <?= esc($secondary['label']) ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>