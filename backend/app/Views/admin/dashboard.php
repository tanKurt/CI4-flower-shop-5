<?php $session = session(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lunara Admin Dashboard</title>
    <link rel="shortcut icon" type="image/png" href="/assets/lunaraMoonIcon.ico" />
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            background: radial-gradient(circle at top, #1e1b2e 0%, #0f0c1d 100%);
            font-family: 'Poppins', sans-serif;
        }

        .text-gradient {
            background: linear-gradient(90deg, #d8b4fe, #f9a8d4);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .card-hover:hover {
            transform: translateY(-4px);
            transition: transform 0.3s ease;
        }

        .sidebar {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(12px);
        }
    </style>
</head>

<body class="text-gray-100 flex min-h-screen">

    <!-- 🌙 Sidebar -->
    <aside class="sidebar w-64 flex flex-col justify-between py-6 px-4 border-r border-white/10">
        <div>
            <h1 class="text-2xl font-bold text-gradient text-center mb-10">Lunara Admin</h1>

            <nav class="space-y-4">
                <a href="/admin" class="block px-4 py-2 rounded-lg hover:bg-indigo-500/20 transition">🏠 Dashboard</a>
                <a href="/admin/products" class="block px-4 py-2 rounded-lg hover:bg-indigo-500/20 transition">🌸 Products</a>
                <a href="/admin/orders" class="block px-4 py-2 rounded-lg hover:bg-indigo-500/20 transition">🛒 Orders</a>
                <a href="/admin/customers" class="block px-4 py-2 rounded-lg hover:bg-indigo-500/20 transition">👥 Customers</a>
                <a href="/admin/settings" class="block px-4 py-2 rounded-lg hover:bg-indigo-500/20 transition">⚙️ Settings</a>
            </nav>
        </div>

        <!-- 🔐 Login / Logout -->
        <div class="text-center text-sm text-gray-400 border-t border-white/10 pt-4">

            <?php if (! $session->has('user')): ?>

                <!-- Login Button -->
                <a href="/login"
                    class="block bg-indigo-400/20 hover:bg-indigo-400/30 text-indigo-200 px-4 py-2 rounded-lg mb-3 transition font-semibold">
                    Login
                </a>

            <?php else: ?>

                <!-- Logout Button -->
                <form action="/logout" method="post">
                    <button type="submit"
                        class="w-full bg-red-500/70 hover:bg-red-500 text-white px-4 py-2 rounded-lg mb-3 transition font-semibold">
                        Logout
                    </button>
                </form>

            <?php endif; ?>

            © <?= date('Y') ?> Lunara
        </div>
    </aside>

    <!-- 🌌 Main Content -->
    <main class="flex-1 p-8 overflow-y-auto relative">

        <!-- Floating moon -->
        <div class="absolute top-10 right-10 w-24 h-24 bg-gradient-to-tr from-gray-300 to-gray-100 
                    rounded-full shadow-[0_0_40px_rgba(255,255,255,0.2)] opacity-80"></div>

        <!-- Header -->
        <div class="mb-10">
            <h2 class="text-4xl font-extrabold text-gradient drop-shadow-lg">Dashboard Overview</h2>
            <p class="text-gray-400 mt-2">Manage your flowers, orders, and customers under the moonlight 🌙</p>
        </div>

        <!-- Stats Cards -->
        <div class="grid md:grid-cols-3 gap-8 mb-12">
            <div class="bg-white/10 p-6 rounded-2xl border border-white/10 card-hover shadow-lg">
                <h3 class="text-indigo-300 font-semibold mb-2">Total Products</h3>
                <p class="text-4xl font-bold text-white">128</p>
            </div>

            <div class="bg-white/10 p-6 rounded-2xl border border-white/10 card-hover shadow-lg">
                <h3 class="text-indigo-300 font-semibold mb-2">Orders Today</h3>
                <p class="text-4xl font-bold text-white">56</p>
            </div>

            <div class="bg-white/10 p-6 rounded-2xl border border-white/10 card-hover shadow-lg">
                <h3 class="text-indigo-300 font-semibold mb-2">Active Customers</h3>
                <p class="text-4xl font-bold text-white">342</p>
            </div>
        </div>

        <!-- Product Management Table -->
        <section class="bg-white/5 backdrop-blur-md p-6 rounded-2xl border border-white/10 shadow-lg">
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-2xl font-bold text-indigo-300">Product List</h3>
                <button class="bg-indigo-400 hover:bg-indigo-500 text-gray-900 px-6 py-2 rounded-full font-semibold transition">
                    + Add Product
                </button>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead class="text-indigo-200 border-b border-white/10">
                        <tr>
                            <th class="py-3 px-4">Product</th>
                            <th class="py-3 px-4">Price</th>
                            <th class="py-3 px-4">Stock</th>
                            <th class="py-3 px-4">Status</th>
                            <th class="py-3 px-4 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-white/5 hover:bg-white/5 transition">
                            <td class="py-3 px-4 flex items-center gap-3">
                                <img src="https://s.turbifycdn.com/aah/snowcreek/moon-garden-lily-bulb-collection-18-bulbs-22.png"
                                    class="w-10 h-10 rounded-lg object-cover" />
                                Lunar Lilies
                            </td>
                            <td class="py-3 px-4">₱299</td>
                            <td class="py-3 px-4">24</td>
                            <td class="py-3 px-4"><span class="text-green-300">Active</span></td>
                            <td class="py-3 px-4 text-right">
                                <button class="text-indigo-300 hover:text-indigo-400">Edit</button>
                            </td>
                        </tr>

                        <tr class="border-b border-white/5 hover:bg-white/5 transition">
                            <td class="py-3 px-4 flex items-center gap-3">
                                <img src="https://i.etsystatic.com/34146895/r/il/6b42c8/6329788818/il_fullxfull.6329788818_4af6.jpg"
                                    class="w-10 h-10 rounded-lg object-cover" />
                                Midnight Roses
                            </td>
                            <td class="py-3 px-4">₱349</td>
                            <td class="py-3 px-4">12</td>
                            <td class="py-3 px-4"><span class="text-green-300">Active</span></td>
                            <td class="py-3 px-4 text-right">
                                <button class="text-indigo-300 hover:text-indigo-400">Edit</button>
                            </td>
                        </tr>

                        <tr class="border-b border-white/5 hover:bg-white/5 transition">
                            <td class="py-3 px-4 flex items-center gap-3">
                                <img src="https://www.oderings.co.nz/assets/Argranthemum-Sassy-Red-web_T_144491_5.jpg"
                                    class="w-10 h-10 rounded-lg object-cover" />
                                Starlit Daisies
                            </td>
                            <td class="py-3 px-4">₱259</td>
                            <td class="py-3 px-4">18</td>
                            <td class="py-3 px-4"><span class="text-green-300">Active</span></td>
                            <td class="py-3 px-4 text-right">
                                <button class="text-indigo-300 hover:text-indigo-400">Edit</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

</body>

</html>