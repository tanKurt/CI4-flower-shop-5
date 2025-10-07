<?php
$products = [
    [
        "title" => "Lunar Lilies",
        "description" => "Elegant white lilies that bloom like moonlight — perfect for calm evenings and graceful gifts.",
        "price" => 299,
        "image" => "https://images.unsplash.com/photo-1501004318641-b39e6451bec6?auto=format&fit=crop&w=800&q=80"
    ],
    [
        "title" => "Midnight Roses",
        "description" => "Deep purple roses that capture the essence of twilight and mystery.",
        "price" => 349,
        "image" => "https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=800&q=80"
    ],
    [
        "title" => "Starlit Daisies",
        "description" => "Bright daisies that shimmer under moonlight — a touch of magic for your space.",
        "price" => 259,
        "image" => "https://images.unsplash.com/photo-1498575207490-3e4e71712b64?auto=format&fit=crop&w=800&q=80"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lunara — Moonlit Floristry</title>
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

        .card-hover:hover {
            transform: translateY(-6px);
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
                filter: brightness(1);
            }

            100% {
                transform: translate(-50%, -20px) scale(1.02);
                filter: brightness(1.1);
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

        section {
            scroll-margin-top: 80px;
        }

        .text-gradient {
            background: linear-gradient(90deg, #d8b4fe, #f9a8d4);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>

<body class="text-gray-100 relative">

    <!-- Header -->
    <header class="backdrop-blur-sm bg-white/10 border-b border-white/20 sticky top-0 z-50">
        <div class="mx-auto flex justify-between items-center px-6 py-4 max-w-7xl">
            <h1 class="font-bold text-2xl text-white tracking-wide">
                🌙 Lunara
            </h1>
            <nav class="space-x-6 text-sm font-semibold flex items-center">
                <a href="#about" class="hover:text-indigo-300">About</a>
                <a href="#products" class="hover:text-indigo-300">Flowers</a>
                <a href="#contact" class="hover:text-indigo-300">Contact</a>

                <!-- 🌕 Added Mood Board Button -->
                <a href="/moodboard" class="bg-gradient-to-r from-indigo-400 to-pink-400 hover:from-indigo-500 hover:to-pink-500 text-gray-900 px-4 py-2 rounded-full font-semibold transition">
                    Mood Board
                </a>

                <a href="/loginPage" class="ml-4 bg-indigo-400 hover:bg-indigo-500 text-gray-900 px-4 py-2 rounded-full font-semibold transition">
                    Login
                </a>
                <a href="/signupPage" class="bg-transparent border border-indigo-400 hover:bg-indigo-400/20 px-4 py-2 rounded-full text-indigo-300 font-semibold transition">
                    Sign Up
                </a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative text-center py-32 px-6 bg-gradient-to-b from-transparent to-[#0f0c1d]/80 overflow-hidden">
        <div class="moon-container">
            <div class="stars"></div>
            <div class="moon"></div>
        </div>
        <div class="relative z-10">
            <h2 class="text-5xl md:text-6xl font-extrabold text-gradient mb-6 drop-shadow-lg">
                Bloom Under the Moonlight
            </h2>
            <p class="max-w-2xl mx-auto text-lg text-gradient">
                Welcome to <strong>Lunara</strong> — where each flower is kissed by starlight and crafted with lunar grace.
            </p>
            <a href="#products" class="mt-8 inline-block bg-indigo-400 hover:bg-indigo-500 px-8 py-3 rounded-full font-semibold text-gray-900 transition">
                Explore Collection
            </a>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="bg-white/5 backdrop-blur-md py-20 text-gray-100">
        <div class="mx-auto px-4 max-w-6xl">
            <h3 class="mb-12 font-bold text-indigo-300 text-4xl text-center header-title">
                Moonlit Blooms
            </h3>
            <div class="gap-8 grid md:grid-cols-3">
                <?php foreach ($products as $product): ?>
                    <div class="flex flex-col bg-white/10 shadow-lg hover:shadow-2xl p-6 border border-white/20 rounded-2xl transition-all duration-300 card-hover">
                        <div class="flex justify-center items-center bg-gray-700 mb-4 rounded-xl w-full h-56 overflow-hidden relative">
                            <img src="<?= htmlspecialchars($product['image']) ?>" alt="Flower: <?= htmlspecialchars($product['title']) ?>" class="rounded-xl w-full h-full object-cover opacity-90 hover:opacity-100 transition">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                        </div>
                        <h4 class="mb-2 font-semibold text-indigo-200 text-2xl header-title"><?= htmlspecialchars($product['title']) ?></h4>
                        <p class="flex-grow mb-4 text-gray-300 leading-relaxed"><?= htmlspecialchars($product['description']) ?></p>
                        <div class="flex justify-between items-center mt-auto">
                            <span class="font-bold text-indigo-300 text-xl">₱<?= htmlspecialchars($product['price']) ?></span>
                            <a href="#" class="bg-indigo-400 hover:bg-indigo-500 px-4 py-2 rounded-full font-semibold text-gray-900 text-sm transition">Buy Now</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="mt-20 py-8 border-t border-white/20 bg-white/5 backdrop-blur-md text-center text-gray-400 text-sm">
        <p>&copy; <?= date('Y') ?> Lunara — Crafted under the Moon. 🌙</p>
        <p class="mt-1">Designed with <span class="text-indigo-300">Tailwind CSS</span> & PHP.</p>
    </footer>
</body>

</html>