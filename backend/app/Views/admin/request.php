<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lunara Admin — Requests</title>
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
                <a href="admin_accounts.php" class="block px-4 py-2 rounded-lg hover:bg-indigo-500/20 transition">👥 Accounts</a>
                <a href="admin_requests.php" class="block px-4 py-2 rounded-lg bg-indigo-500/30 transition">📨 Requests</a>
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
            <h2 class="text-4xl font-extrabold text-gradient drop-shadow-lg">Request Management</h2>
            <p class="text-gray-400 mt-2">Review and process user or staff requests under Lunara’s glow 🌕</p>
        </div>

        <!-- Quick Stats -->
        <div class="grid md:grid-cols-3 gap-8 mb-12">
            <div class="bg-white/10 p-6 rounded-2xl border border-white/10 card-hover shadow-lg">
                <h3 class="text-indigo-300 font-semibold mb-2">Total Requests</h3>
                <p class="text-4xl font-bold text-white">68</p>
            </div>
            <div class="bg-white/10 p-6 rounded-2xl border border-white/10 card-hover shadow-lg">
                <h3 class="text-indigo-300 font-semibold mb-2">Pending</h3>
                <p class="text-4xl font-bold text-yellow-300">12</p>
            </div>
            <div class="bg-white/10 p-6 rounded-2xl border border-white/10 card-hover shadow-lg">
                <h3 class="text-indigo-300 font-semibold mb-2">Resolved</h3>
                <p class="text-4xl font-bold text-green-300">56</p>
            </div>
        </div>

        <!-- Filters -->
        <div class="flex flex-col md:flex-row gap-4 mb-6">
            <input type="text" placeholder="Search requests..." class="px-4 py-2 rounded-lg flex-1 text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-400">
            <select class="px-4 py-2 rounded-lg text-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-400">
                <option>All Types</option>
                <option>Restock</option>
                <option>Account</option>
                <option>Support</option>
            </select>
            <select class="px-4 py-2 rounded-lg text-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-400">
                <option>All Status</option>
                <option>Pending</option>
                <option>Approved</option>
                <option>Denied</option>
            </select>
        </div>

        <!-- Request Table -->
        <section class="bg-white/5 backdrop-blur-md p-6 rounded-2xl border border-white/10 shadow-lg mb-10">
            <h3 class="text-2xl font-bold text-indigo-300 mb-6">Recent Requests</h3>

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead class="text-indigo-200 border-b border-white/10">
                        <tr>
                            <th class="py-3 px-4">Request ID</th>
                            <th class="py-3 px-4">Requester</th>
                            <th class="py-3 px-4">Type</th>
                            <th class="py-3 px-4">Status</th>
                            <th class="py-3 px-4">Date</th>
                            <th class="py-3 px-4 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-white/5 hover:bg-white/5 transition">
                            <td class="py-3 px-4">#RQ1042</td>
                            <td class="py-3 px-4">Mira Celeste</td>
                            <td class="py-3 px-4"><span class="text-pink-300">Restock</span></td>
                            <td class="py-3 px-4"><span class="text-yellow-300">Pending</span></td>
                            <td class="py-3 px-4">2025-10-30</td>
                            <td class="py-3 px-4 text-right space-x-3">
                                <button class="text-green-300 hover:text-green-400">Approve</button>
                                <button class="text-red-400 hover:text-red-500">Deny</button>
                            </td>
                        </tr>

                        <tr class="border-b border-white/5 hover:bg-white/5 transition">
                            <td class="py-3 px-4">#RQ1039</td>
                            <td class="py-3 px-4">Kai Hoshino</td>
                            <td class="py-3 px-4"><span class="text-indigo-300">Support</span></td>
                            <td class="py-3 px-4"><span class="text-green-300">Approved</span></td>
                            <td class="py-3 px-4">2025-10-25</td>
                            <td class="py-3 px-4 text-right space-x-3">
                                <button class="text-indigo-300 hover:text-indigo-400">View</button>
                            </td>
                        </tr>

                        <tr class="border-b border-white/5 hover:bg-white/5 transition">
                            <td class="py-3 px-4">#RQ1037</td>
                            <td class="py-3 px-4">Orion Vega</td>
                            <td class="py-3 px-4"><span class="text-pink-300">Account</span></td>
                            <td class="py-3 px-4"><span class="text-red-400">Denied</span></td>
                            <td class="py-3 px-4">2025-10-18</td>
                            <td class="py-3 px-4 text-right space-x-3">
                                <button class="text-indigo-300 hover:text-indigo-400">View</button>
                            </td>
                        </tr>

                        <tr class="border-b border-white/5 hover:bg-white/5 transition">
                            <td class="py-3 px-4">#RQ1032</td>
                            <td class="py-3 px-4">Alyssa Moon</td>
                            <td class="py-3 px-4"><span class="text-indigo-300">Restock</span></td>
                            <td class="py-3 px-4"><span class="text-green-300">Approved</span></td>
                            <td class="py-3 px-4">2025-10-10</td>
                            <td class="py-3 px-4 text-right space-x-3">
                                <button class="text-indigo-300 hover:text-indigo-400">View</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>
</body>

</html>