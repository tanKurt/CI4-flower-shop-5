<?php
// for the card sample we can reuse the same product data or a single example
$card = [
    "title" => "Midnight Roses",
    "description" => "Deep purple roses that capture the essence of twilight and mystery.",
    "price" => 349,
    "image" => "https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=800&q=80"
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lunara — Moodboard</title>
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
            gap: 2rem;
        }

        @media (min-width: 1024px) {
            .mb-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        .panel {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.06);
            padding: 1.25rem;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(2, 6, 23, 0.5);
        }
    </style>
</head>

<body class="relative">

    <div class="moon"></div>

    <!-- Header (same as landing) -->
    <header class="backdrop-blur-sm bg-white/10 border-b border-white/20 sticky top-0 z-50">
        <div class="mx-auto flex justify-between items-center px-6 py-4 max-w-7xl">
            <h1 class="font-bold text-2xl text-white tracking-wide">🌙 Lunara</h1>
            <nav class="space-x-6 text-sm font-semibold flex items-center">
                <a href="index.php" class="hover:text-indigo-300">Home</a>
                <a href="/loginPage" class="hover:text-indigo-300">Login</a>
                <a href="/signupPage" class="hover:text-indigo-300">Sign Up</a>
            </nav>
        </div>
    </header>

    <!-- Main moodboard container -->
    <main class="max-w-7xl mx-auto px-6 py-16 relative z-10">

        <h2 class="text-5xl font-extrabold text-gradient text-center mb-10">Lunara — Moodboard</h2>
        <p class="text-center text-gray-300 max-w-3xl mx-auto mb-12">Design system and visual references: color, typography, UI components and logo variations — presented using Lunara's moonlit theme.</p>

        <!-- Grid layout resembling the reference: 2-column on large screens -->
        <section class="mb-grid">

            <!-- Color System -->
            <div class="panel">
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

            <!-- Typography -->
            <div class="panel">
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

            <!-- Buttons -->
            <div class="panel">
                <h3 class="text-2xl font-bold text-indigo-300 mb-4">Buttons</h3>
                <div class="flex flex-wrap gap-4 items-center">
                    <button class="bg-indigo-400 hover:bg-indigo-500 text-gray-900 px-5 py-3 rounded-full font-semibold">Primary</button>
                    <button class="bg-transparent border border-indigo-400 hover:bg-indigo-400/20 text-indigo-300 px-5 py-3 rounded-full font-semibold">Secondary</button>
                    <button class="border border-white/30 text-gray-300 px-5 py-3 rounded-full font-semibold">Border</button>
                    <button class="bg-gray-600/30 text-gray-400 px-5 py-3 rounded-full font-semibold cursor-not-allowed opacity-50">Disabled</button>
                </div>
                <p class="mt-4 text-gray-300 text-sm">Primary uses Lunara gradient accents; secondary uses transparent + border for subtle action.</p>
            </div>

            <!-- Card Sample (exact same as landing page card) -->
            <div class="panel">
                <h3 class="text-2xl font-bold text-indigo-300 mb-6">Card Sample</h3>

                <!-- Card: reuse exact classes & structure from index.php -->
                <div class="max-w-sm mx-auto">
                    <div class="flex flex-col bg-white/10 shadow-lg hover:shadow-2xl p-6 border border-white/20 rounded-2xl transition-all duration-300 card-hover">
                        <div class="flex justify-center items-center bg-gray-700 mb-4 rounded-xl w-full h-56 overflow-hidden relative">
                            <img src="<?= htmlspecialchars($card['image']) ?>"
                                alt="Flower: <?= htmlspecialchars($card['title']) ?>"
                                class="rounded-xl w-full h-full object-cover opacity-90 hover:opacity-100 transition"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="hidden flex justify-center items-center bg-gradient-to-br from-[#8B7E74]/20 to-transparent rounded-xl w-full h-56 text-3xl">
                                🌸
                            </div>
                        </div>

                        <h4 class="mb-2 font-semibold text-indigo-200 text-2xl header-title"><?= htmlspecialchars($card['title']) ?></h4>
                        <p class="flex-grow mb-4 text-gray-300 leading-relaxed"><?= htmlspecialchars($card['description']) ?></p>
                        <div class="flex justify-between items-center mt-auto">
                            <span class="font-bold text-indigo-300 text-xl">₱<?= htmlspecialchars($card['price']) ?></span>
                            <a href="#" class="bg-indigo-400 hover:bg-indigo-500 px-4 py-2 rounded-full font-semibold text-gray-900 text-sm transition">Buy Now</a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Logos -->
            <div class="panel">
                <h3 class="text-2xl font-bold text-indigo-300 mb-4">Logos</h3>

                <div class="flex gap-6 items-center flex-wrap">
                    <!-- Circle placeholder (SVG glowing moon + floral) -->
                    <div class="flex flex-col items-center">
                        <div class="w-28 h-28 rounded-full bg-white/10 border border-white/20 flex items-center justify-center">
                            <!-- simple SVG placeholder -->
                            <svg width="56" height="56" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="filter drop-shadow-lg">
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

                    <!-- Square placeholder -->
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

        </section>

        <!-- back to home -->
        <div class="mt-10 text-center">
            <a href="index.php" class="text-indigo-300 hover:text-indigo-400 font-semibold">← Back to Home</a>
        </div>
    </main>

    <!-- Footer (same style as landing) -->
    <footer class="mt-20 py-8 border-t border-white/20 bg-white/5 backdrop-blur-md text-center text-gray-400 text-sm">
        <p>&copy; <?= date('Y') ?> Lunara — Crafted under the Moon. 🌙</p>
    </footer>

</body>

</html>