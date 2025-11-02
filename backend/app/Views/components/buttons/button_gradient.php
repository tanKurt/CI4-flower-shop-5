<?php
// Component: components/buttons/button_header.php
// Data contract:
// $disable: boolean | null
// $href: string | null
// $label: string | null
?>

<?php if ($disable ?? false): ?>
    <a href="<?= esc($href ?? '#') ?>"
        class="inline-block opacity-50 cursor-not-allowed px-4 py-2 rounded-full font-semibold text-gray-900 bg-gradient-to-r from-indigo-400 to-pink-400 duration-200">
        <?= esc($label ?? 'Action') ?>
    </a>
<?php else: ?>
    <a href="<?= esc($href ?? '#') ?>"
        class="inline-block px-4 py-2 rounded-full font-semibold text-gray-900 bg-gradient-to-r from-indigo-400 to-pink-400 hover:from-indigo-500 hover:to-pink-500 duration-200">
        <?= esc($label ?? 'Action') ?>
    </a>
<?php endif; ?>