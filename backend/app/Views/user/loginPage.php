<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lunara — Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: radial-gradient(circle at top, #1e1b2e 0%, #0f0c1d 100%);
            overflow-x: hidden;
        }

        .text-gradient {
            background: linear-gradient(90deg, #d8b4fe, #f9a8d4);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .moon {
            position: absolute;
            top: 15%;
            left: 50%;
            transform: translateX(-50%);
            width: 160px;
            height: 160px;
            background: radial-gradient(circle at 30% 30%, #fafafa, #e5e5e5 60%, #b0b0b0 100%);
            border-radius: 50%;
            box-shadow: 0 0 60px 20px rgba(255, 255, 255, 0.18);
            animation: floatMoon 10s ease-in-out infinite alternate;
        }

        @keyframes floatMoon {
            0% {
                transform: translate(-50%, 0);
            }

            100% {
                transform: translate(-50%, -20px);
            }
        }
    </style>
</head>

<body class="flex items-center justify-center min-h-screen text-gray-100 relative">

    <div class="moon"></div>

    <div class="relative z-10 bg-white/10 backdrop-blur-md p-10 rounded-2xl shadow-2xl border border-white/20 w-full max-w-md">
        <h2 class="text-center text-3xl font-bold mb-6 text-gradient">Welcome Back 🌙</h2>
        <form action="#" method="POST" class="space-y-5">
            <div>
                <label class="block text-sm font-semibold text-indigo-200 mb-2">Email Address</label>
                <input type="email" name="email" required class="w-full px-4 py-3 rounded-lg bg-white/20 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-400" placeholder="you@lunara.com">
            </div>
            <div>
                <label class="block text-sm font-semibold text-indigo-200 mb-2">Password</label>
                <input type="password" name="password" required class="w-full px-4 py-3 rounded-lg bg-white/20 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-400" placeholder="••••••••">
            </div>
            <button type="submit" class="w-full bg-indigo-400 hover:bg-indigo-500 text-gray-900 font-semibold py-3 rounded-full transition">Login</button>
        </form>
        <p class="text-center text-gray-300 mt-6 text-sm">
            Don’t have an account?
            <a href="signup.php" class="text-indigo-300 hover:text-indigo-400 font-semibold">Sign up</a>
        </p>
        <p class="text-center mt-6">
            <a href="index.php" class="text-sm text-gray-400 hover:text-indigo-300">← Back to Home</a>
        </p>
    </div>

</body>

</html>