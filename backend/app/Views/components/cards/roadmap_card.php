<?php
// Component: components/cards/roadmap_card.php
// Data contract:
// $title: string
// $description: string
// $status: string
// $priority: string
// $statusClass: string
?>

<article class="flex flex-col bg-white/10 shadow-lg hover:shadow-2xl p-6 border border-white/20 rounded-2xl transition-all duration-500 hover:-translate-y-1 card-hover">

    <!-- Title and Status -->
    <?php if (!empty($title)): ?>
        <div class="flex justify-between items-center mb-3">
            <h4 class="font-semibold text-2xl text-indigo-200 header-title">
                <?= esc($title) ?>
            </h4>
            <?php if (!empty($statusClass) && !empty($status)): ?>
                <span class="px-3 py-1 rounded-full text-white text-xs font-semibold <?= esc($statusClass) ?>">
                    <?= esc($status) ?>
                </span>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <!-- Description -->
    <?php if (!empty($description)): ?>
        <p class="flex-grow text-gray-300 leading-relaxed mb-4">
            <?= esc($description) ?>
        </p>
    <?php endif; ?>

    <!-- Priority and Button -->
    <div class="flex justify-between items-center mt-auto">
        <?php if (!empty($priority)): ?>
            <span class="font-medium text-indigo-300 text-sm">
                Priority: <?= esc($priority) ?>
            </span>
        <?php endif; ?>
        <a href="#" class="bg-indigo-400 hover:bg-indigo-500 px-4 py-2 rounded-full text-gray-900 text-sm font-semibold transition">
            View
        </a>
    </div>
</article>