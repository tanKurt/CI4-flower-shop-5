<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lunara — Moodboard</title>
    <link rel="shortcut icon" type="image/png" href="/assets/lunaraMoonIcon.ico" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: radial-gradient(circle at top, #1e1b2e 0%, #0f0c1d 100%);
            overflow-x: hidden;
            color: #f5f5f5;
        }

        .header-title {
            font-family: 'Poppins', sans-serif;
            letter-spacing: 0.05em;
        }

        .text-gradient {
            background: linear-gradient(90deg, #d8b4fe, #f9a8d4);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .moon {
            position: absolute;
            top: 5%;
            left: 50%;
            transform: translateX(-50%);
            width: 110px;
            height: 110px;
            background: radial-gradient(circle at 30% 30%, #f4f4f4, #d8d8d8 60%, #9b9b9b 100%);
            border-radius: 50%;
            box-shadow: 0 0 40px 10px rgba(255, 255, 255, 0.08);
            opacity: 0.6;
            filter: blur(1px);
            animation: floatMoon 10s ease-in-out infinite alternate;
            z-index: 0;
        }

        @keyframes floatMoon {
            0% {
                transform: translate(-50%, 0);
            }

            100% {
                transform: translate(-50%, -15px);
            }
        }

        /* card-hover same as landing */
        .card-hover:hover {
            transform: translateY(-6px);
        }

        /* layout grid for moodboard sections */
        .mb-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2.5rem;
            align-items: stretch;
        }

        @media (min-width: 1024px) {
            .mb-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                grid-auto-flow: row dense;
                align-items: stretch;
            }
        }

        /* Consistent panel style */
        .panel {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.06);
            padding: 1.5rem;
            border-radius: 14px;
            box-shadow: 0 6px 20px rgba(2, 6, 23, 0.5);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 340px;
            /* adjust for symmetry */
        }

        .panel h3 {
            margin-bottom: 1rem;
            min-height: 2.5rem;
        }
    </style>
</head>

<body class="relative">

    <div class="moon"></div>

    <!-- Header (same as landing) -->
    <div class="text-center">
        <?= view('components/header') ?>
    </div>

    <!-- Main moodboard container -->
    <main class="max-w-7xl mx-auto px-6 py-16 relative z-10">

        <h2 class="text-5xl font-extrabold text-gradient text-center mb-10">Lunara — Moodboard</h2>
        <p class="text-center text-gray-300 max-w-3xl mx-auto mb-12">Design system and visual references: color, typography, UI components and logo variations — presented using Lunara's moonlit theme.</p>

        <!-- Grid layout resembling the reference: 2-column on large screens -->
        <section class="mb-grid">
            <!-- Color System -->
            <div class="panel">
                <div>
                    <h3 class="text-2xl font-bold text-indigo-300 mb-4">Color System</h3>
                    <div class="flex items-center gap-4 flex-wrap">
                        <div class="w-20 h-20 rounded-lg bg-[#d8b4fe] border border-white/20"></div>
                        <div class="w-20 h-20 rounded-lg bg-[#f9a8d4] border border-white/20"></div>
                        <div class="w-20 h-20 rounded-lg bg-[#1e1b2e] border border-white/20"></div>
                    </div>
                    <div class="mt-4 text-gray-300 text-sm">
                        <p><strong>Moonlight Violet</strong> — #d8b4fe</p>
                        <p><strong>Starlit Pink</strong> — #f9a8d4</p>
                        <p><strong>Midnight Sky</strong> — #1e1b2e</p>
                    </div>
                </div>
            </div>

            <!-- Typography -->
            <div class="panel">
                <div>
                    <h3 class="text-2xl font-bold text-indigo-300 mb-4">Typography</h3>
                    <div class="space-y-4">
                        <div>
                            <p class="text-3xl font-bold header-title text-gradient">Poppins</p>
                            <p class="text-sm text-gray-300">Used for headings, logos and emphasis.</p>
                        </div>
                        <div>
                            <p class="text-lg font-medium" style="font-family: Inter, system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial;">Inter</p>
                            <p class="text-sm text-gray-300">Used for body copy and UI labels for legibility.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Buttons -->
            <div class="panel">
                <div>
                    <h3 class="text-2xl font-bold text-indigo-300 mb-4">Buttons</h3>
                    <div class="flex flex-wrap gap-4 items-center">
                        <?= view('components/buttons/button_primary', ['label' => 'Primary', 'href' => '#']) ?>
                        <?= view('components/buttons/button_secondary', ['label' => 'Secondary', 'href' => '#']) ?>
                        <?= view('components/buttons/button_border', ['label' => 'Border', 'href' => '#']) ?>
                        <?= view('components/buttons/button_primary', ['label' => 'Disabled', 'disable' => true]) ?>
                    </div>
                    <p class="mt-4 text-gray-300 text-sm">Primary uses Lunara gradient accents; secondary uses transparent + border for subtle action.</p>
                </div>
            </div>

            <!-- Card Samples (spans full width on large screens) -->
            <div class="panel lg:col-span-2">
                <div>
                    <h3 class="text-2xl font-bold text-indigo-300 mb-6">Card Samples</h3>
                    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                        <?= view('components/cards/product_card', [
                            'title' => 'Lunar Lilies',
                            'description' => 'Elegant white lilies that bloom like moonlight — perfect for calm evenings and graceful gifts.',
                            'price' => '₱299',
                            'image' => 'https://s.turbifycdn.com/aah/snowcreek/moon-garden-lily-bulb-collection-18-bulbs-22.png'
                        ]) ?>
                        <?= view('components/cards/product_card', [
                            'title' => 'Midnight Roses',
                            'description' => 'Deep purple roses that capture the essence of twilight and mystery.',
                            'price' => '₱349',
                            'image' => 'https://i.etsystatic.com/34146895/r/il/6b42c8/6329788818/il_fullxfull.6329788818_4af6.jpg'
                        ]) ?>
                        <?= view('components/cards/product_card', [
                            'title' => 'Starlit Daisies',
                            'description' => 'Bright daisies that shimmer under moonlight — a touch of magic for your space.',
                            'price' => '₱259',
                            'image' => 'https://www.oderings.co.nz/assets/Argranthemum-Sassy-Red-web_T_144491_5.jpg'
                        ]) ?>
                    </div>
                </div>
            </div>

            <!-- Logos -->
            <div class="panel">
                <div>
                    <h3 class="text-2xl font-bold text-indigo-300 mb-4">Logos</h3>
                    <div class="flex gap-6 items-center flex-wrap">
                        <div class="flex flex-col items-center">
                            <div class="w-28 h-28 rounded-full bg-white/10 border border-white/20 flex items-center justify-center">
                                <svg width="56" height="56" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <radialGradient id="g1" cx="50%" cy="30%">
                                            <stop offset="0%" stop-color="#f9f9f9" />
                                            <stop offset="100%" stop-color="#d8d8d8" />
                                        </radialGradient>
                                    </defs>
                                    <circle cx="32" cy="24" r="18" fill="url(#g1)" />
                                    <path d="M20 44c6-6 18-6 24 0" stroke="#f9a8d4" stroke-width="2.5" stroke-linecap="round" />
                                </svg>
                            </div>
                            <p class="mt-3 text-gray-300 text-sm">Circle Logo</p>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="w-28 h-28 bg-white/10 border border-white/20 rounded-2xl flex items-center justify-center">
                                <svg width="56" height="56" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="8" y="8" width="48" height="48" rx="8" fill="url(#g1)" />
                                    <path d="M18 38c5-5 14-5 19 0" stroke="#d8b4fe" stroke-width="2.2" stroke-linecap="round" />
                                </svg>
                            </div>
                            <p class="mt-3 text-gray-300 text-sm">Square Logo</p>
                        </div>
                    </div>
                    <p class="mt-4 text-gray-300 text-sm">Placeholder markups: use the SVGs above as guides for production logos (circle & square formats).</p>
                </div>
            </div>
        </section>

    </main>

    <!-- Call to Action Section -->
    <?= view('components/sections/cta', [
        'title' => 'Step Into Lunara’s World',
        'subtitle' => 'Discover celestial-inspired designs, curated just for dreamers and creators like you.',
        'buttonLabel' => 'Explore Now',
        'buttonHref' => '#explore'
    ]) ?>

    <!-- Footer (same style as landing) -->
    <div class="text-center">
        <?= view('components/footer') ?>
    </div>

</body>

</html>