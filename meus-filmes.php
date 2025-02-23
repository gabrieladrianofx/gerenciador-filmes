<?php

$media_movies = [
    [
        "title" => "Pobres Criaturas",
        "genre" => "Drama",
        "year" => "2023",
        "indication" => "4,5",
        'images' => [
            'src' => '/public/assets/img-movie/pobres-criaturas.png',
            'alt' => 'Img Pobres Criaturas'
        ]
    ],
    [
        "title" => "O Corvo",
        "genre" => "Fantasia",
        "year" => "2024",
        "indication" => "4,5",
        'images' => [
            'src' => '/public/assets/img-movie/o-corvo.png',
            'alt' => 'Img O Corvo'
        ]
    ],
    [
        "title" => "Alien: Covenant",
        "genre" => "Horror",
        "year" => "2017",
        "indication" => "4,5",
        'images' => [
            'src' => '/public/assets/img-movie/alien-covenant.png',
            'alt' => 'Img Alien: Covenant'
        ]
    ],
    [
        "title" => "Mad Max: Estrada da Fúria",
        "genre" => "Ação",
        "year" => "2015",
        "indication" => "4,5",
        'images' => [
            'src' => '/public/assets/img-movie/mad-max-estrada-da-furia.png',
            'alt' => 'Img Mad Max: Estrada da Fúria'
        ]
    ],
]

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/@phosphor-icons/web@2.1.1"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Rajdhani:wght@400;700&family=Rammetto+One&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'purple-base': '#892CCD',
                        'purple-light': '#A85FDD',

                        'gray-100': '#0F0F1A',
                        'gray-200': '#131320',
                        'gray-300': '#1A1B2D',
                        'gray-400': '#45455F',
                        'gray-500': '#7A7B9F',
                        'gray-600': '#B5B6C9',
                        'gray-700': '#E4E5EC',

                        'error-base': '#D04048',
                        'error-light': '#F77980',
                    },
                    fontFamily: {
                        display: ['Rammetto One'],
                        title: ['Rajdhani'],
                        body: ['Nunito Sans']
                    },
                }
            }
        }
    </script>

    <title>Genenciador de Filmes - ab filmes</title>
</head>

<body class="bg-gray-100">
    <header class="border-b border-b-gray-200">
        <nav class="w-full flex items-center justify-between py-4 px-6">
            <img src="./public/assets/logo.svg" class="w-12 h-12" alt="logo da ab filmes">

            <div class="flex items-center justify-between items-center space-x-6">
                <a href="/" class="px-3 py-2 space-x-2 rounded-[6px] active:bg-gray-300 hover:bg-gray-200 aria-[current=page]:bg-gray-300 group cursor-pointer transition-all" aria-current="page">
                    <i class="ph ph-popcorn text-gray-500 w-5 h-5 group-active:text-purple-light group-hover:text-gray-500 group-aria-[current=page]:text-purple-light"></i>
                    <span class="text-gray-500 text-[16px] group-active:text-purple-light group-hover:text-gray-500 group-aria-[current=page]:text-purple-light">Explorar</span>
                </a>
                <a href="/meus-filmes.php" class="px-3 py-2 space-x-2 rounded-[6px] active:bg-gray-300 hover:bg-gray-200 group cursor-pointer transition-all">
                    <i class="ph ph-film-slate text-gray-500 w-5 h-5 group-active:text-purple-light group-hover:text-gray-500"></i>
                    <span class="text-gray-500 text-[16px] group-active:text-purple-light group-hover:text-gray-500">Meus filmes</span>
                </a>
            </div>

            <div class="flex space-x-3">
                <div class="flex items-center space-x-3">
                    <span class="text-gray-600 text-[14px] font-body">Olá, Jordan</span>
                    <img src="./public/assets/avatar.png" class="w-8 h-8 border-2 border-[#7435DB] rounded-[6px]" alt="avatar do usuario">
                </div>

                <div class="w-px bg-gray-300 mx-3"></div>

                <a href="logout.php" class="flex items-center justify-center w-8 h-8 bg-gray-300 rounded-[6px] cursor-pointer transition-all">
                    <i class="ph ph-sign-out text-gray-500 hover:text-purple-light"></i>
                </a>
            </div>
        </nav>
    </header>

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
                <div class="flex flex-col justify-between min-w-[280px] min-h-[360px] rounded-[20px] bg-center bg-auto <?php if (isset($media_movie['images'])): ?> bg-[url('<?= $media_movie['images']['src'] ?>')] <?php else: ?> bg-gray-100 <?php endif; ?> relative"> <!-- Essa div vai ser uma bg-image -->
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
</body>

</html>