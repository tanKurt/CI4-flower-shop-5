<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lunara Admin — Accounts</title>
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

        .sidebar {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(12px);
        }

        .card-hover:hover {
            transform: translateY(-4px);
            transition: transform 0.3s ease;
        }

        input,
        select {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.15);
        }
    </style>
</head>

<body class="text-gray-100 flex min-h-screen">

    <!-- 🌙 Sidebar -->
    <aside class="sidebar w-64 flex flex-col justify-between py-6 px-4 border-r border-white/10">
        <div>
            <h1 class="text-2xl font-bold text-gradient text-center mb-10">Lunara Admin</h1>
            <nav class="space-y-4">
                <a href="admin_dashboard.php" class="block px-4 py-2 rounded-lg hover:bg-indigo-500/20 transition">🏠 Dashboard</a>
                <a href="admin_products.php" class="block px-4 py-2 rounded-lg hover:bg-indigo-500/20 transition">🌸 Products</a>
                <a href="admin_orders.php" class="block px-4 py-2 rounded-lg hover:bg-indigo-500/20 transition">🛒 Orders</a>
                <a href="admin_stock.php" class="block px-4 py-2 rounded-lg hover:bg-indigo-500/20 transition">📦 Stock</a>
                <a href="admin_accounts.php" class="block px-4 py-2 rounded-lg bg-indigo-500/30 transition">👥 Accounts</a>
                <a href="#" class="block px-4 py-2 rounded-lg hover:bg-indigo-500/20 transition">⚙️ Settings</a>
            </nav>
        </div>
        <div class="text-center text-sm text-gray-400 border-t border-white/10 pt-4">
            © <?= date('Y') ?> Lunara
        </div>
    </aside>

    <!-- 🌌 Main Content -->
    <main class="flex-1 p-8 overflow-y-auto relative">
        <div class="absolute top-10 right-10 w-24 h-24 bg-gradient-to-tr from-gray-300 to-gray-100 rounded-full shadow-[0_0_40px_rgba(255,255,255,0.2)] opacity-80"></div>

        <!-- Header -->
        <div class="mb-10">
            <h2 class="text-4xl font-extrabold text-gradient drop-shadow-lg">Accounts Management</h2>
            <p class="text-gray-400 mt-2">Manage user access and admin roles under Lunara’s moonlit system 🌕</p>
        </div>

        <!-- Stats Overview -->
        <div class="grid md:grid-cols-3 gap-8 mb-12">
            <div class="bg-white/10 p-6 rounded-2xl border border-white/10 card-hover shadow-lg">
                <h3 class="text-indigo-300 font-semibold mb-2">Total Accounts</h3>
                <p class="text-4xl font-bold text-white">238</p>
            </div>
            <div class="bg-white/10 p-6 rounded-2xl border border-white/10 card-hover shadow-lg">
                <h3 class="text-indigo-300 font-semibold mb-2">Active Users</h3>
                <p class="text-4xl font-bold text-green-300">217</p>
            </div>
            <div class="bg-white/10 p-6 rounded-2xl border border-white/10 card-hover shadow-lg">
                <h3 class="text-indigo-300 font-semibold mb-2">Admins</h3>
                <p class="text-4xl font-bold text-indigo-300">5</p>
            </div>
        </div>

        <!-- Accounts Table -->
        <section class="bg-white/5 backdrop-blur-md p-6 rounded-2xl border border-white/10 shadow-lg mb-10">
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-2xl font-bold text-indigo-300">User Accounts</h3>
                <button class="bg-indigo-400 hover:bg-indigo-500 text-gray-900 px-6 py-2 rounded-full font-semibold transition">
                    + Add Account
                </button>
            </div>

            <!-- Search & Filters -->
            <div class="flex flex-col md:flex-row gap-4 mb-6">
                <input type="text" placeholder="Search by name or email..." class="px-4 py-2 rounded-lg flex-1 text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-400">
                <select class="px-4 py-2 rounded-lg text-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-400">
                    <option>All Roles</option>
                    <option>Admin</option>
                    <option>Customer</option>
                    <option>Staff</option>
                </select>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead class="text-indigo-200 border-b border-white/10">
                        <tr>
                            <th class="py-3 px-4">Name</th>
                            <th class="py-3 px-4">Email</th>
                            <th class="py-3 px-4">Role</th>
                            <th class="py-3 px-4">Status</th>
                            <th class="py-3 px-4">Joined</th>
                            <th class="py-3 px-4 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-white/5 hover:bg-white/5 transition">
                            <td class="py-3 px-4">Alyssa Moon</td>
                            <td class="py-3 px-4">alyssa@lunara.com</td>
                            <td class="py-3 px-4"><span class="text-indigo-300 font-medium">Admin</span></td>
                            <td class="py-3 px-4"><span class="text-green-300">Active</span></td>
                            <td class="py-3 px-4">2024-05-21</td>
                            <td class="py-3 px-4 text-right">
                                <button class="text-indigo-300 hover:text-indigo-400">Edit</button>
                            </td>
                        </tr>
                        <tr class="border-b border-white/5 hover:bg-white/5 transition">
                            <td class="py-3 px-4">Kai Hoshino</td>
                            <td class="py-3 px-4">kai.h@lunara.com</td>
                            <td class="py-3 px-4"><span class="text-gray-200 font-medium">Staff</span></td>
                            <td class="py-3 px-4"><span class="text-green-300">Active</span></td>
                            <td class="py-3 px-4">2024-09-08</td>
                            <td class="py-3 px-4 text-right">
                                <button class="text-indigo-300 hover:text-indigo-400">Edit</button>
                            </td>
                        </tr>
                        <tr class="border-b border-white/5 hover:bg-white/5 transition">
                            <td class="py-3 px-4">Mira Celeste</td>
                            <td class="py-3 px-4">mira.celeste@example.com</td>
                            <td class="py-3 px-4"><span class="text-pink-300 font-medium">Customer</span></td>
                            <td class="py-3 px-4"><span class="text-yellow-300">Pending</span></td>
                            <td class="py-3 px-4">2025-01-04</td>
                            <td class="py-3 px-4 text-right">
                                <button class="text-indigo-300 hover:text-indigo-400">Edit</button>
                            </td>
                        </tr>
                        <tr class="border-b border-white/5 hover:bg-white/5 transition">
                            <td class="py-3 px-4">Orion Vega</td>
                            <td class="py-3 px-4">orion@starlight.io</td>
                            <td class="py-3 px-4"><span class="text-pink-300 font-medium">Customer</span></td>
                            <td class="py-3 px-4"><span class="text-red-400">Banned</span></td>
                            <td class="py-3 px-4">2023-12-22</td>
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