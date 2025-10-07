<?php
$roadmapItems = [
    [
        "title" => "Moonlit Garden Expansion",
        "description" => "Build new sections in Lunara’s floral haven, featuring rare celestial blooms and enchanted moonflowers.",
        "status" => "In Progress",
        "priority" => "High",
        "statusClass" => "bg-[#ffb74d]"
    ],
    [
        "title" => "Lunar Delivery Service",
        "description" => "Launch a seamless delivery system that ensures every bouquet arrives under the perfect moonlight.",
        "status" => "Planned",
        "priority" => "Medium",
        "statusClass" => "bg-[#64b5f6]"
    ],
    [
        "title" => "Starlit Subscription Box",
        "description" => "Offer monthly curated floral collections inspired by moon phases and constellations.",
        "status" => "Backlog",
        "priority" => "Low",
        "statusClass" => "bg-[#73397e]"
    ],
    [
        "title" => "Celestial Workshop Series",
        "description" => "Host guided sessions where guests can craft floral art while basking in gentle lunar glow.",
        "status" => "Planned",
        "priority" => "Medium",
        "statusClass" => "bg-[#64b5f6]"
    ],
    [
        "title" => "Goddess Garden Collection",
        "description" => "A premium line of moon-charmed arrangements celebrating femininity and the phases of the moon.",
        "status" => "In Progress",
        "priority" => "High",
        "statusClass" => "bg-[#ffb74d]"
    ],
    [
        "title" => "Website Bloom Update",
        "description" => "Enhance the Lunara experience with interactive petals and dynamic moonlight effects.",
        "status" => "Done",
        "priority" => "High",
        "statusClass" => "bg-[#81c784]"
    ],
    [
        "title" => "Lunara Loyalty Constellation",
        "description" => "Reward returning dreamers with starlight points for every purchase and review.",
        "status" => "Planned",
        "priority" => "Medium",
        "statusClass" => "bg-[#64b5f6]"
    ],
    [
        "title" => "Celestial Scent Lab",
        "description" => "Create customized fragrances blending floral notes with ethereal lunar essence.",
        "status" => "In Progress",
        "priority" => "High",
        "statusClass" => "bg-[#ffb74d]"
    ]
];
?>

<section id="roadmap" class="bg-white/5 backdrop-blur-md py-20 text-gray-100 fade-section">
    <div class="mx-auto px-4 max-w-6xl">
        <h3 class="mb-12 font-bold text-indigo-300 text-4xl text-center header-title">
            Lunara Roadmap 🌸
        </h3>

        <div class="gap-10 grid md:grid-cols-2 lg:grid-cols-3">
            <?php foreach ($roadmapItems as $item): ?>
                <div class="flex flex-col bg-white/10 shadow-lg hover:shadow-2xl p-6 border border-white/20 rounded-2xl transition-all duration-500 hover:-translate-y-1 card-hover">

                    <!-- Title and Status -->
                    <div class="flex justify-between items-center mb-3">
                        <h4 class="font-semibold text-2xl text-indigo-200 header-title">
                            <?= htmlspecialchars($item['title']) ?>
                        </h4>
                        <span class="px-3 py-1 rounded-full text-white text-xs font-semibold <?= $item['statusClass'] ?>">
                            <?= htmlspecialchars($item['status']) ?>
                        </span>
                    </div>

                    <!-- Description -->
                    <p class="flex-grow text-gray-300 leading-relaxed mb-4">
                        <?= htmlspecialchars($item['description']) ?>
                    </p>

                    <!-- Priority and Button -->
                    <div class="flex justify-between items-center mt-auto">
                        <span class="font-medium text-indigo-300 text-sm">
                            Priority: <?= htmlspecialchars($item['priority']) ?>
                        </span>
                        <a href="#" class="bg-indigo-400 hover:bg-indigo-500 px-4 py-2 rounded-full text-gray-900 text-sm font-semibold transition">
                            View
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>