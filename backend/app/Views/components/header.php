<?php
// Component: components/header.php
// $brandTitle: string|null
// $logo: string|null

$session = session();
?>

<header class="backdrop-blur-sm bg-white/10 border-b border-white/20 sticky top-0 z-50">
    <div class="mx-auto flex justify-between items-center px-6 py-4 max-w-7xl">

        <!-- LOGO + BRAND grouped together -->
        <div class="flex items-center space-x-3">
            <img src="<?= esc($logo ?? 'assets/lunaraMoonIcon.png') ?>"
                alt="<?= esc($brandTitle ?? 'Lunara Logo') ?>"
                class="h-10 w-10">
            <h1 class="font-bold text-2xl text-white tracking-wide">
                <?= esc($brandTitle ?? 'Lunara') ?>
            </h1>
        </div>

        <!-- NAVIGATION -->
        <nav class="space-x-6 text-sm font-semibold flex items-center">
            <a href="/" class="hover:text-indigo-300">Home</a>
            <a href="#products" class="hover:text-indigo-300">Flowers</a>
            <a href="#contact" class="hover:text-indigo-300">Contact</a>

            <!-- Buttons on the right -->
            <div class="flex items-center space-x-3 ml-4">

                <?php if (! $session->has('user')): ?>

                    <!-- User NOT logged in -->
                    <?= view('components/buttons/button_gradient', [
                        'label' => 'Moodboard',
                        'href'  => '/moodboard'
                    ]) ?>

                    <?= view('components/buttons/button_gradient', [
                        'label' => 'Roadmap',
                        'href'  => '/roadmap'
                    ]) ?>

                    <?= view('components/buttons/button_gradient', [
                        'label' => 'Login',
                        'href'  => '/login'
                    ]) ?>

                    <?= view('components/buttons/button_border', [
                        'label' => 'Sign Up',
                        'href'  => '/signup'
                    ]) ?>

                <?php else: ?>

                    <!-- User IS logged in -->
                    <?= view('components/buttons/button_gradient', [
                        'label' => 'Moodboard',
                        'href'  => '/moodboard'
                    ]) ?>

                    <?= view('components/buttons/button_gradient', [
                        'label' => 'Roadmap',
                        'href'  => '/roadmap'
                    ]) ?>

                    <!-- Logout Form -->
                    <form action="/logout" method="post">
                        <button type="submit"
                            class="px-5 py-2 rounded-lg bg-red-500 text-white font-semibold shadow-md hover:bg-red-600 transition">
                            Logout
                        </button>
                    </form>

                <?php endif; ?>

            </div>
        </nav>
    </div>
</header>