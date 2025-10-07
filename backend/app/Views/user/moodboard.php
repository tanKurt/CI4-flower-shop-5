<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lunara — Mood Board</title>
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

        .text-gradient {
            background: linear-gradient(90deg, #d8b4fe, #f9a8d4);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .card-hover:hover {
            transform: translateY(-6px);
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
                <a href="/index.php" class="hover:text-indigo-300">Home</a>
                <a href="/loginPage" class="bg-indigo-400 hover:bg-indigo-500 text-gray-900 px-4 py-2 rounded-full font-semibold transition">
                    Login
                </a>
            </nav>
        </div>
    </header>

    <!-- Hero -->
    <section class="text-center py-20 px-6">
        <h2 class="text-5xl font-extrabold text-gradient mb-6">Lunara Mood Board</h2>
        <p class="max-w-2xl mx-auto text-gray-300">Our guiding moonlight — explore the color palette, typography, buttons, cards, and logos that bring Lunara to life.</p>
    </section>

    <!-- Color Palette -->
    <section class="text-center py-12">
        <h3 class="text-3xl font-bold text-indigo-300 mb-6">Color Palette</h3>
        <div class="flex justify-center gap-6 flex-wrap">
            <div class="w-24 h-24 rounded-full bg-[#d8b4fe] border border-white/20"></div>
            <div class="w-24 h-24 rounded-full bg-[#f9a8d4] border border-white/20"></div>
            <div class="w-24 h-24 rounded-full bg-[#0f0c1d] border border-white/20"></div>
            <div class="w-24 h-24 rounded-full bg-[#1e1b2e] border border-white/20"></div>
        </div>
    </section>

    <!-- Typography -->
    <section class="text-center py-12">
        <h3 class="text-3xl font-bold text-indigo-300 mb-6">Typography</h3>
        <p class="text-2xl font-bold text-gradient mb-2" style="font-family: 'Poppins', sans-serif;">Poppins — Headers</p>
        <p class="text-lg text-gray-300" style="font-family: 'Inter', sans-serif;">Inter — Body Text Example under the moonlight</p>
    </section>

    <!-- Buttons Set -->
    <section class="text-center py-12">
        <h3 class="text-3xl font-bold text-indigo-300 mb-6">Buttons Set</h3>
        <div class="flex flex-wrap justify-center gap-6">
            <button class="bg-indigo-400 hover:bg-indigo-500 text-gray-900 font-semibold px-6 py-3 rounded-full">Primary</button>
            <button class="bg-transparent border border-indigo-400 hover:bg-indigo-400/20 text-indigo-300 font-semibold px-6 py-3 rounded-full">Secondary</button>
            <button class="border border-white/30 text-gray-400 px-6 py-3 rounded-full cursor-not-allowed opacity-50" disabled>Disabled</button>
        </div>
    </section>

    <!-- Card Sample -->
    <section class="text-center py-16">
        <h3 class="text-3xl font-bold text-indigo-300 mb-10">Card Sample</h3>
        <div class="max-w-sm mx-auto">
            <div class="flex flex-col bg-white/10 shadow-lg hover:shadow-2xl p-6 border border-white/20 rounded-2xl transition-all duration-300 card-hover">
                <div class="flex justify-center items-center bg-gray-700 mb-4 rounded-xl w-full h-56 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=800&q=80"
                        alt="Flower: Midnight Roses" class="rounded-xl w-full h-full object-cover opacity-90 hover:opacity-100 transition">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                </div>
                <h4 class="mb-2 font-semibold text-indigo-200 text-2xl header-title">Midnight Roses</h4>
                <p class="flex-grow mb-4 text-gray-300 leading-relaxed">Deep purple roses that capture the essence of twilight and mystery.</p>
                <div class="flex justify-between items-center mt-auto">
                    <span class="font-bold text-indigo-300 text-xl">₱349</span>
                    <a href="#" class="bg-indigo-400 hover:bg-indigo-500 px-4 py-2 rounded-full font-semibold text-gray-900 text-sm transition">Buy Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Logos -->
    <section class="text-center py-12">
        <h3 class="text-3xl font-bold text-indigo-300 mb-6">Logos</h3>
        <div class="flex justify-center gap-12 flex-wrap">
            <div class="w-32 h-32 bg-white/10 border border-white/20 rounded-full flex items-center justify-center text-4xl text-gradient font-bold">L</div>
            <div class="w-32 h-32 bg-white/10 border border-white/20 rounded-2xl flex items-center justify-center text-4xl text-gradient font-bold">L</div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="mt-20 py-8 border-t border-white/20 bg-white/5 backdrop-blur-md text-center text-gray-400 text-sm">
        <p>&copy; <?= date('Y') ?> Lunara — Crafted under the Moon. 🌙</p>
    </footer>
</body>

</html>