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

    <section id="products" class="bg-white/5 backdrop-blur-md py-20 text-gray-100">
        <div class="mx-auto px-4 max-w-6xl">
            <h3 class="mb-12 font-bold text-indigo-300 text-4xl text-center header-title">Moonlit Blooms</h3>

            <div class="gap-8 grid md:grid-cols-3">
                <?php foreach ($products as $product): ?>
                    <div class="flex flex-col bg-white/10 shadow-lg hover:shadow-2xl p-6 border border-white/20 rounded-2xl transition-all duration-300 card-hover">
                        <div class="flex justify-center items-center bg-gray-700 mb-4 rounded-xl w-full h-56 overflow-hidden">
                            <img src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['title']) ?>" class="rounded-xl w-full h-full object-cover" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="hidden flex justify-center items-center bg-gradient-to-br from-[#8B7E74]/20 to-transparent rounded-xl w-full h-56 text-3xl">
                                🌸
                            </div>
                        </div>
                        <h4 class="mb-2 font-semibold text-indigo-200 text-2xl header-title"><?= htmlspecialchars($product['title']) ?></h4>
                        <p class="flex-grow mb-4 text-gray-300 leading-relaxed"><?= htmlspecialchars($product['description']) ?></p>
                        <div class="flex justify-between items-center mt-auto">
                            <span class="font-bold text-indigo-300 text-xl">₱<?= htmlspecialchars($product['price']) ?></span>
                            <a href="#" class="bg-indigo-400 hover:bg-indigo-500 px-4 py-2 rounded-full focus:outline-none focus:ring-indigo-300/50 focus:ring-2 font-semibold text-gray-900 text-sm transition">Buy Now</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>