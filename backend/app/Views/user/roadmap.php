<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lunara — Roadmap</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: radial-gradient(circle at top, #1e1b2e 0%, #0f0c1d 100%);
            overflow-x: hidden;
        }

        .header-title {
            font-family: 'Poppins', sans-serif;
            letter-spacing: 0.05em;
        }

        /* 🌙 Parallax Moon */
        .moon-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 150vh;
            overflow: hidden;
            pointer-events: none;
            z-index: 0;
        }

        .moon {
            position: sticky;
            top: 15vh;
            left: 50%;
            transform: translateX(-50%);
            width: 160px;
            height: 160px;
            background: radial-gradient(circle at 30% 30%, #fafafa, #e5e5e5 60%, #b0b0b0 100%);
            border-radius: 50%;
            box-shadow: 0 0 60px 20px rgba(255, 255, 255, 0.18);
            animation: floatMoon 10s ease-in-out infinite alternate;
            overflow: hidden;
        }

        .moon::after {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            width: 55%;
            height: 100%;
            background: radial-gradient(circle at 30% 30%, rgba(20, 20, 30, 0.85), rgba(20, 20, 30, 0.95));
            border-top-left-radius: 100%;
            border-bottom-left-radius: 100%;
            transform: translateX(10%);
            filter: blur(1px);
        }

        @keyframes floatMoon {
            0% {
                transform: translate(-50%, 0) scale(1);
            }

            100% {
                transform: translate(-50%, -20px) scale(1.02);
            }
        }

        /* ✨ Stars */
        .stars::before,
        .stars::after {
            content: "";
            position: absolute;
            width: 2px;
            height: 2px;
            background: white;
            border-radius: 50%;
            box-shadow:
                100px 40px white, 300px 80px white, 500px 120px white,
                700px 50px white, 900px 100px white, 200px 150px white,
                600px 200px white, 800px 180px white, 400px 250px white;
            animation: twinkle 4s infinite ease-in-out alternate;
        }

        @keyframes twinkle {

            0%,
            100% {
                opacity: 0.8;
            }

            50% {
                opacity: 0.3;
            }
        }

        .text-gradient {
            background: linear-gradient(90deg, #d8b4fe, #f9a8d4);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .card-hover:hover {
            transform: translateY(-6px);
        }

        .fade-section {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 1s ease forwards;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body class="text-gray-100 relative">

    <!-- Header -->
    <header class="backdrop-blur-sm bg-white/10 border-b border-white/20 sticky top-0 z-50">
        <div class="mx-auto flex justify-between items-center px-6 py-4 max-w-7xl">
            <h1 class="font-bold text-2xl text-white tracking-wide">🌙 Lunara</h1>
            <nav class="space-x-6 text-sm font-semibold flex items-center">
                <a href="/" class="hover:text-indigo-300">Home</a>
                <a href="/moodboard" class="hover:text-indigo-300">Moodboard</a>
                <a href="/roadmap" class="text-indigo-300 border-b-2 border-indigo-400 pb-1">Roadmap</a>
                <a href="/loginPage" class="ml-6 bg-indigo-400 hover:bg-indigo-500 text-gray-900 px-4 py-2 rounded-full font-semibold transition">Login</a>
                <a href="/signupPage" class="bg-transparent border border-indigo-400 hover:bg-indigo-400/20 px-4 py-2 rounded-full text-indigo-300 font-semibold transition">Sign Up</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative text-center py-28 px-6 bg-gradient-to-b from-transparent to-[#0f0c1d]/80 overflow-hidden">
        <div class="moon-container">
            <div class="stars"></div>
            <div class="moon"></div>
        </div>
        <div class="relative z-10 fade-section">
            <h2 class="text-5xl md:text-6xl font-extrabold text-gradient mb-6 drop-shadow-lg">Lunara’s Celestial Roadmap</h2>
            <p class="max-w-2xl mx-auto text-lg text-gradient">
                Follow our journey through each moonlit phase — where dreams take root and blossoms meet the stars.
            </p>
        </div>
    </section>

    <!-- Roadmap Section -->
    <section class="bg-white/5 backdrop-blur-md py-20 text-gray-100 fade-section">
        <div class="max-w-6xl mx-auto px-4 grid md:grid-cols-2 lg:grid-cols-3 gap-10">
            <?php
            $phases = [
                ["Moonseed Vision", "The spark of an idea — planting Lunara’s dream beneath the celestial sky."],
                ["Petal Planning", "Mapping every fragrance and hue that will define our moonlit florals."],
                ["Starlit Design", "Crafting visuals bathed in twilight elegance and gentle shimmer."],
                ["Celestial Crafting", "Sculpting each product page and bloom card with lunar care."],
                ["Bloom Launch", "Our first blossoms open to the world, kissed by starlight."],
                ["Lunar Loyalty", "Creating heartfelt connections with those who share our glow."],
                ["Nightshade Growth", "Expanding gardens and offerings under the soft lunar gaze."],
                ["Moon Market", "Introducing curated sets and gifting rituals under the moon."],
                ["Eclipse Evolution", "Refining the experience as petals drift into perfection."],
                ["Galactic Grace", "A vision complete — Lunara glowing at the heart of night."]
            ];
            $colors = ["indigo", "purple", "pink", "violet", "fuchsia", "rose", "blue", "sky", "cyan", "amber"];
            foreach ($phases as $i => $phase): ?>
                <div class="flex flex-col bg-white/10 shadow-lg hover:shadow-2xl p-6 border border-<?= $colors[$i % count($colors)] ?>-400/40 rounded-2xl transition-all duration-300 card-hover">
                    <h4 class="mb-2 font-semibold text-<?= $colors[$i % count($colors)] ?>-200 text-2xl header-title">
                        🌸 Phase <?= $i + 1 ?>: <?= htmlspecialchars($phase[0]) ?>
                    </h4>
                    <p class="text-gray-300 leading-relaxed"><?= htmlspecialchars($phase[1]) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Footer -->
    <footer class="mt-20 py-8 border-t border-white/20 bg-white/5 backdrop-blur-md text-center text-gray-400 text-sm">
        <p>&copy; <?= date('Y') ?> Lunara — Crafted under the Moon. 🌙</p>
        <p class="mt-1">Designed with <span class="text-indigo-300">Tailwind CSS</span> & PHP.</p>
    </footer>

</body>

</html>