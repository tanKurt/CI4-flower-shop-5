<?php
$label ??= 'Secondary';
$href ??= null;
$disable ??= false;
?>

<?php if ($disable): ?>
    <button type="button"
        disabled
        class="bg-gray-600/30 text-gray-400 px-5 py-3 rounded-full font-semibold cursor-not-allowed opacity-50">
        <?= esc($label) ?>
    </button>

<?php elseif ($href): ?>
    <a href="<?= $href === '#' ? 'javascript:void(0)' : esc($href) ?>"
        class="bg-transparent border border-indigo-400 hover:bg-indigo-400/20 text-indigo-300 px-5 py-3 rounded-full font-semibold transition duration-200 inline-block">
        <?= esc($label) ?>
    </a>

<?php else: ?>
    <button type="button"
        class="bg-transparent border border-indigo-400 hover:bg-indigo-400/20 text-indigo-300 px-5 py-3 rounded-full font-semibold transition duration-200">
        <?= esc($label) ?>
    </button>
<?php endif; ?>