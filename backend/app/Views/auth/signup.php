<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lunara — Sign Up</title>
    <link rel="shortcut icon" type="image/png" href="/assets/lunaraMoonIcon.ico" />
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
            top: 8%;
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

        /* Animated Gradient bar */
        .strength-bar {
            height: 10px;
            width: 100%;
            border-radius: 999px;
            background: #ffffff22;
            overflow: hidden;
            position: relative;
        }

        .strength-fill {
            height: 100%;
            width: 0%;
            border-radius: inherit;
            background: linear-gradient(90deg, #ff4d4d, #f9a8d4, #d8b4fe, #8b5cf6);
            background-size: 300% 300%;
            animation: gradientFlow 4s ease infinite;
            transition: width 0.4s ease;
        }

        @keyframes gradientFlow {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .check-valid {
            color: #a3e635;
        }

        .check-invalid {
            color: #f87171;
        }

        /* Show/Hide toggle */
        .toggle-password {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: white;
            font-size: 0.875rem;
            user-select: none;
        }
    </style>
</head>

<body class="flex items-center justify-center min-h-screen text-gray-100 relative">

    <div class="moon"></div>

    <div class="relative z-10 bg-white/10 backdrop-blur-md p-10 rounded-2xl shadow-2xl border border-white/20 w-full max-w-2xl">

        <h2 class="text-center text-3xl font-bold mb-8 text-gradient">Join Lunara 🌸</h2>

        <form id="signupForm" action="/signup" method="POST" novalidate class="space-y-6">
            <?= csrf_field() ?>

            <!-- NAME FIELDS -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- First Name -->
                <div>
                    <label class="block text-indigo-200 font-semibold mb-1">First Name</label>
                    <input type="text" name="first_name" required
                        value="<?= esc($old['first_name'] ?? '') ?>"
                        class="w-full px-4 py-3 rounded-lg bg-white/20 text-white placeholder-gray-300 
                        <?= isset($errors['first_name']) ? 'border border-red-500' : 'border border-white/30' ?> focus:outline-none focus:ring-2 focus:ring-indigo-400"
                        placeholder="First name">

                    <?php if (!empty($errors['first_name'])): ?>
                        <p class="text-red-400 text-sm mt-1"><?= esc($errors['first_name']) ?></p>
                    <?php endif; ?>
                </div>

                <!-- Middle Name -->
                <div>
                    <label class="block text-indigo-200 font-semibold mb-1">Middle Name</label>
                    <input type="text" name="middle_name"
                        value="<?= esc($old['middle_name'] ?? '') ?>"
                        class="w-full px-4 py-3 rounded-lg bg-white/20 text-white placeholder-gray-300 
                        <?= isset($errors['middle_name']) ? 'border border-red-500' : 'border border-white/30' ?> focus:outline-none focus:ring-2 focus:ring-indigo-400"
                        placeholder="Optional">

                    <?php if (!empty($errors['middle_name'])): ?>
                        <p class="text-red-400 text-sm mt-1"><?= esc($errors['middle_name']) ?></p>
                    <?php endif; ?>
                </div>

                <!-- Last Name -->
                <div>
                    <label class="block text-indigo-200 font-semibold mb-1">Last Name</label>
                    <input type="text" name="last_name" required
                        value="<?= esc($old['last_name'] ?? '') ?>"
                        class="w-full px-4 py-3 rounded-lg bg-white/20 text-white placeholder-gray-300 
                        <?= isset($errors['last_name']) ? 'border border-red-500' : 'border border-white/30' ?> focus:outline-none focus:ring-2 focus:ring-indigo-400"
                        placeholder="Last name">

                    <?php if (!empty($errors['last_name'])): ?>
                        <p class="text-red-400 text-sm mt-1"><?= esc($errors['last_name']) ?></p>
                    <?php endif; ?>
                </div>
            </div>

            <!-- EMAIL -->
            <div>
                <label class="block text-indigo-200 font-semibold mb-1">Email Address</label>
                <input type="email" name="email" required
                    value="<?= esc($old['email'] ?? '') ?>"
                    class="w-full px-4 py-3 rounded-lg bg-white/20 text-white placeholder-gray-300 
                    <?= isset($errors['email']) ? 'border border-red-500' : 'border border-white/30' ?> focus:outline-none focus:ring-2 focus:ring-indigo-400"
                    placeholder="you@lunara.com">

                <?php if (!empty($errors['email'])): ?>
                    <p class="text-red-400 text-sm mt-1"><?= esc($errors['email']) ?></p>
                <?php endif; ?>
            </div>

            <!-- PHONE -->
            <div>
                <label class="block text-indigo-200 font-semibold mb-1">Phone Number</label>
                <input type="text" name="phone_number"
                    value="<?= esc($old['phone_number'] ?? '') ?>"
                    class="w-full px-4 py-3 rounded-lg bg-white/20 text-white placeholder-gray-300 
                    <?= isset($errors['phone_number']) ? 'border border-red-500' : 'border border-white/30' ?> focus:outline-none focus:ring-2 focus:ring-indigo-400"
                    placeholder="09XXXXXXXXX">

                <?php if (!empty($errors['phone_number'])): ?>
                    <p class="text-red-400 text-sm mt-1"><?= esc($errors['phone_number']) ?></p>
                <?php endif; ?>
            </div>

            <!-- GENDER -->
            <div>
                <label class="block text-indigo-200 font-semibold mb-1">Gender</label>
                <select name="gender"
                    class="w-full px-4 py-3 rounded-lg bg-white/20 text-white border-white/30
                    focus:outline-none focus:ring-2 focus:ring-indigo-400">
                    <option value="" class="text-black">Select Gender</option>
                    <option value="Male" class="text-black" <?= (isset($old['gender']) && $old['gender'] == "Male") ? 'selected' : '' ?>>Male</option>
                    <option value="Female" class="text-black" <?= (isset($old['gender']) && $old['gender'] == "Female") ? 'selected' : '' ?>>Female</option>
                    <option value="Other" class="text-black" <?= (isset($old['gender']) && $old['gender'] == "Other") ? 'selected' : '' ?>>Other</option>
                </select>

                <?php if (!empty($errors['gender'])): ?>
                    <p class="text-red-400 text-sm mt-1"><?= esc($errors['gender']) ?></p>
                <?php endif; ?>
            </div>

            <!-- ADDRESS FIELDS -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-indigo-200 font-semibold mb-1">Address Line</label>
                    <input type="text" name="address_line"
                        value="<?= esc($old['address_line'] ?? '') ?>"
                        class="w-full px-4 py-3 rounded-lg bg-white/20 text-white placeholder-gray-300 
                        border border-white/30 focus:outline-none focus:ring-2 focus:ring-indigo-400"
                        placeholder="Street / House No.">
                </div>

                <div>
                    <label class="block text-indigo-200 font-semibold mb-1">City</label>
                    <input type="text" name="city"
                        value="<?= esc($old['city'] ?? '') ?>"
                        class="w-full px-4 py-3 rounded-lg bg-white/20 text-white placeholder-gray-300 
                        border border-white/30 focus:outline-none focus:ring-2 focus:ring-indigo-400"
                        placeholder="City">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-indigo-200 font-semibold mb-1">Province</label>
                    <input type="text" name="province"
                        value="<?= esc($old['province'] ?? '') ?>"
                        class="w-full px-4 py-3 rounded-lg bg-white/20 text-white placeholder-gray-300 border border-white/30 
                        focus:outline-none focus:ring-2 focus:ring-indigo-400"
                        placeholder="Province">
                </div>

                <div>
                    <label class="block text-indigo-200 font-semibold mb-1">Postal Code</label>
                    <input id="postalCode" type="text" name="postal_code"
                        value="<?= esc($old['postal_code'] ?? '') ?>"
                        class="w-full px-4 py-3 rounded-lg bg-white/20 text-white placeholder-gray-300 border border-white/30 
                        focus:outline-none focus:ring-2 focus:ring-indigo-400"
                        placeholder="0000">
                    <p id="postalError" class="text-red-400 text-sm mt-1 hidden">Postal code must be exactly 4 digits</p>
                </div>
            </div>

            <!-- PASSWORD -->
            <div>
                <label class="block text-indigo-200 font-semibold mb-1">Password</label>
                <div class="relative">
                    <input id="password" type="password" name="password"
                        class="w-full px-4 py-3 pr-14 rounded-lg bg-white/20 text-white placeholder-gray-300 border border-white/30 
                        focus:outline-none focus:ring-2 focus:ring-indigo-400"
                        placeholder="••••••••">

                    <span id="togglePassword" class="absolute right-4 top-1/2 transform -translate-y-1/2 text-white text-sm cursor-pointer select-none">Show</span>
                </div>

                <!-- Animated strength bar -->
                <div class="strength-bar mt-3">
                    <div id="strengthFill" class="strength-fill"></div>
                </div>

                <!-- Real-time checklist -->
                <ul class="mt-3 space-y-1 text-sm">
                    <li id="check-length" class="check-invalid">❌ At least 8 characters</li>
                    <li id="check-special" class="check-invalid">❌ At least one special character</li>
                </ul>
            </div>

            <!-- CONFIRM PASSWORD -->
            <div>
                <label class="block text-indigo-200 font-semibold mb-1">Confirm Password</label>
                <div class="relative">
                    <input id="passwordConfirm" type="password" name="password_confirm"
                        class="w-full px-4 py-3 pr-14 rounded-lg bg-white/20 text-white placeholder-gray-300 border border-white/30 
                        focus:outline-none focus:ring-2 focus:ring-indigo-400"
                        placeholder="••••••••">

                    <span id="toggleConfirmPassword" class="absolute right-4 top-1/2 transform -translate-y-1/2 text-white text-sm cursor-pointer select-none">Show</span>
                </div>
            </div>

            <!-- SUBMIT -->
            <button type="submit" id="submitBtn" disabled
                class="w-full bg-indigo-400 hover:bg-indigo-500 text-gray-900 font-semibold py-3 rounded-full transition">
                Create Account
            </button>

            <p class="text-center text-gray-300 mt-6 text-sm">
                Already have an account?
                <a href="/login" class="text-indigo-300 hover:text-indigo-400 font-semibold">Login</a>
            </p>

            <p class="text-center mt-6">
                <a href="/" class="text-sm text-gray-400 hover:text-indigo-300">← Back to Home</a>
            </p>
        </form>

    </div>

    <script>
        const passwordInput = document.getElementById("password");
        const confirmInput = document.getElementById("passwordConfirm");
        const togglePassword = document.getElementById("togglePassword");
        const toggleConfirmPassword = document.getElementById("toggleConfirmPassword");
        const strengthFill = document.getElementById("strengthFill");
        const checkLength = document.getElementById("check-length");
        const checkSpecial = document.getElementById("check-special");
        const postalInput = document.getElementById("postalCode");
        const postalError = document.getElementById("postalError");
        const submitBtn = document.getElementById("submitBtn");

        // Show/Hide password logic
        togglePassword.addEventListener("click", () => {
            passwordInput.type = passwordInput.type === "password" ? "text" : "password";
            togglePassword.textContent = passwordInput.type === "password" ? "Show" : "Hide";
        });

        toggleConfirmPassword.addEventListener("click", () => {
            confirmInput.type = confirmInput.type === "password" ? "text" : "password";
            toggleConfirmPassword.textContent = confirmInput.type === "password" ? "Show" : "Hide";
        });

        function validateForm() {
            const value = passwordInput.value;
            const hasLength = value.length >= 8;
            const hasSpecial = /[^A-Za-z0-9]/.test(value);
            const passwordsMatch = value === confirmInput.value && value !== '';
            const postalValid = /^\d{4}$/.test(postalInput.value);

            // Show/hide postal error
            postalError.classList.toggle("hidden", postalValid);

            // Enable submit only if all validations pass
            submitBtn.disabled = !(hasLength && hasSpecial && passwordsMatch && postalValid);

            // Update strength bar
            let strength = 0;
            if (hasLength) strength += 50;
            if (hasSpecial) strength += 50;
            strengthFill.style.width = strength + "%";

            // Update password checklist
            checkLength.className = hasLength ? "check-valid" : "check-invalid";
            checkLength.textContent = (hasLength ? "✔️" : "❌") + " At least 8 characters";

            checkSpecial.className = hasSpecial ? "check-valid" : "check-invalid";
            checkSpecial.textContent = (hasSpecial ? "✔️" : "❌") + " At least one special character";
        }

        passwordInput.addEventListener("input", validateForm);
        confirmInput.addEventListener("input", validateForm);
        postalInput.addEventListener("input", validateForm);
    </script>

</body>

</html>