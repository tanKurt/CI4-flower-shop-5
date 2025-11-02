<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lunara — Moonlit Floristry</title>
    <link rel="shortcut icon" type="image/png" href="/assets/lunaraMoonIcon.ico" />
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
    <div class="text-center">
        <?= view('components/header') ?>
    </div>

    <!-- Hero Section -->
    <section class="relative text-center py-32 px-6 bg-gradient-to-b from-transparent to-[#0f0c1d]/80 overflow-hidden">
        <div class="moon-container">
            <div class="stars"></div>
            <div class="moon"></div>
        </div>

        <div class="relative z-10">
            <h2 class="text-5xl md:text-6xl font-extrabold text-gradient mb-6 drop-shadow-lg">Bloom Under the Moonlight</h2>
            <p class="max-w-2xl mx-auto text-lg text-gradient">
                Welcome to <strong>Lunara</strong> — where each flower is kissed by starlight and crafted with lunar grace.
            </p>
            <a href="#products" class="mt-8 inline-block bg-indigo-400 hover:bg-indigo-500 px-8 py-3 rounded-full font-semibold text-gray-900 transition">Explore Collection</a>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="bg-white/5 backdrop-blur-md py-20 text-gray-100">
        <div class="mx-auto px-4 max-w-6xl">
            <h3 class="mb-12 font-bold text-indigo-300 text-4xl text-center header-title">Moonlit Blooms</h3>

            <div class="gap-8 grid md:grid-cols-3">
                <?= view('components/cards/product_card', ['title' => 'Lunar Lilies', 'description' => 'Elegant white lilies that bloom like moonlight — perfect for calm evenings and graceful gifts.', 'price' => '₱299', 'image' => 'https://s.turbifycdn.com/aah/snowcreek/moon-garden-lily-bulb-collection-18-bulbs-22.png']) ?>
                <?= view('components/cards/product_card', ['title' => 'Midnight Roses', 'description' => 'Deep purple roses that capture the essence of twilight and mystery.', 'price' => '₱349', 'image' => 'https://i.etsystatic.com/34146895/r/il/6b42c8/6329788818/il_fullxfull.6329788818_4af6.jpg']) ?>
                <?= view('components/cards/product_card', ['title' => 'Starlit Daisies', 'description' => 'Bright daisies that shimmer under moonlight — a touch of magic for your space.', 'price' => '₱259', 'image' => 'https://www.oderings.co.nz/assets/Argranthemum-Sassy-Red-web_T_144491_5.jpg']) ?>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <div class="text-center">
        <?= view('components/footer') ?>
    </div>
</body>

</html>