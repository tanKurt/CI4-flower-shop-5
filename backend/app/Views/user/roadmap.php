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
    <div class="text-center">
        <?= view('components/header') ?>
    </div>

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
    <div class="text-center">
        <?= view('components/cards/roadmap_card') ?>
    </div>

    <!-- Footer -->
    <div class="text-center">
        <?= view('components/footer') ?>
    </div>
</body>

</html>