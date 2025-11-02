<?php
// Component: components/buttons/disabled_button.php
// Data contract:
// $label: string (default: 'Disabled')
?>

<button class="bg-gray-600/30 text-gray-400 px-5 py-3 rounded-full font-semibold cursor-not-allowed opacity-50">
    <?= esc($label ?? 'Disabled') ?>
</button>