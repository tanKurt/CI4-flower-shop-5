<?php
// Component: components/sections/call_to_action.php
// Props (optional): $title, $subtitle, $buttonLabel, $buttonHref
$title ??= 'Join the Lunara Experience';
$subtitle ??= 'Stay inspired under the moonlight. Subscribe to our newsletter for design updates and new collections.';
$buttonLabel ??= 'Get Started';
$buttonHref ??= '#';
?>

<section class="relative bg-gradient-to-br from-indigo-500/10 to-pink-400/10 border border-white/10 rounded-2xl p-10 mt-20 shadow-lg overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-indigo-400/10 via-transparent to-pink-400/10 blur-3xl opacity-40"></div>

    <div class="relative z-10 text-center max-w-3xl mx-auto">
        <h2 class="text-4xl md:text-5xl font-extrabold text-gradient mb-4"><?= esc($title) ?></h2>
        <p class="text-gray-300 mb-8 text-lg"><?= esc($subtitle) ?></p>

        <?= view('components/buttons/button_primary', [
            'label' => $buttonLabel,
            'href' => $buttonHref
        ]) ?>
    </div>
</section>