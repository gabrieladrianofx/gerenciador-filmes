<main class="mx-[88px] mt-16 mb-[69px]">
        <!-- heading -->
        <header class="max-h-12 flex items-center justify-between">
            <div class="text-[24px] text-[#E5E2E9] font-display">
                Explorar
            </div>

            <!-- input placeholder -->
            <form class="px-4 py-3 flex items-center space-x-2 border border-gray-300 rounded-[6px] group transition-all">
                <span class="flex items-center w-5 h-5">
                    <i class="ph ph-magnifying-glass text-gray-500 group-focus:text- w-4 h-4"></i>
                </span>
                <input
                    type="text"
                    class="flex items-center text-[16px] text-gray-700 font-body bg-transparent placeholder:text-[16px] placeholder:text-gray-500 outline-none"
                    placeholder="Pesquisar filme"
                    name="search" />
            </form>
        </header>

        
        <section class="grid grid-cols-4 gap-6 mt-[33px]">
            <?php foreach ($media_movies as $media_movie): ?>
                <!-- COMPONENTE - Movie Card -->
                <div class="flex flex-col justify-between min-w-[280px] min-h-[360px] rounded-[20px] bg-center bg-cover <?php if (isset($media_movie['images'])): ?> bg-[url('<?= $media_movie['images']['src'] ?>')] <?php else: ?> bg-gray-100 <?php endif; ?> relative"> <!-- Essa div vai ser uma bg-image -->
                    <div class="flex items-center text-gray-700 px-2.5 py-1.5 space-x-1.5 mr-2 mt-2 ml-auto max-w-max bg-gray-100 opacity-[.80] rounded-full z-10">
                        <div class="flex items-center space-x-0.5">
                            <span class="text-[20px] font-title font-bold"><?= $media_movie['indication'] ?></span>
                            <div>
                                <span class="text-[12px] font-title font-medium">/</span>
                                <span class="text-[12px] font-title font-medium">5</span>
                            </div>
                        </div>
                        <div>
                            <i class="ph-fill ph-star"></i>
                        </div>
                    </div>

                    <div class="mx-5 mb-5 z-10">
                        <div class="space-y-1">
                            <div class="text-[20px] text-gray-700 font-title font-bold"><?= $media_movie['title'] ?></div>
                            <div class="text-[14px] text-gray-600 font-body"><?= $media_movie['genre'] ?> • <?= $media_movie['year'] ?></div>
                        </div>
                    </div>

                    <div class="absolute inset-0 bg-gradient-to-t from-[#090910] from-73% via-[#090910] via-20% to-transparent opacity-[.90] z-0"></div>
                </div>
            <?php endforeach; ?>
        </section>
    </main>