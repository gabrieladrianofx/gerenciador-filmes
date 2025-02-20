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

    <main>
    </main>
</body>

</html>