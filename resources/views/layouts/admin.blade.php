<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-slate-100">
        <div class="flex items-center justify-between p-2 bg-white border-b">
            <div class="flex items-center gap-4 px-4">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Hepsiburada_logo_official.svg/2560px-Hepsiburada_logo_official.svg.png" class="h-6" />

                <div class="relative" x-data="{ open: false }" x-on:mouseenter="open = true" x-on:mouseleave="open = false">
                    <x-button.header-right x-on:click.stop="open = true">
                        Satıcı Paneli

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                        </svg>
                    </x-button.header-right>

                    <div class="absolute" x-show="open">
                        <div class="p-2 text-sm text-gray-600 bg-white border rounded-lg size-48">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, minus.
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex items-center gap-2 px-4">
                <div class="flex items-center">
                    <x-button.header-right>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 3.75v4.5m0-4.5h-4.5m4.5 0-6 6m3 12c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 0 1 4.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 0 0-.38 1.21 12.035 12.035 0 0 0 7.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 0 1 1.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 0 1-2.25 2.25h-2.25Z" />
                        </svg>

                        Canlı yardım
                    </x-button.header-right>

                    <x-button.header-right>Yardım merkezi</x-button.header-right>
                    <x-button.header-right>Sıkça sorulan sorular</x-button.header-right>
                    <x-button.header-right>Satıcı Öner</x-button.header-right>

                    <div class="relative">
                        <x-button.header-right>
                            Takvim
                        </x-button.header-right>

                        <div class="absolute bg-orange-400 rounded-full -top-0.5 -right-0.5 animate-ping size-3"></div>
                        <div class="absolute top-0 right-0 bg-orange-400 rounded-full size-2"></div>
                    </div>
                </div>

                <div>|</div>

                <div class="flex items-center">
                    <x-button.header-right>Akademi</x-button.header-right>
                    <x-button.header-right>Çözüm ortağı</x-button.header-right>
                    <x-button.header-right>Entegrasyon</x-button.header-right>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-between p-4 bg-white border-b">
            <div class="flex items-center gap-4">
                @for ($i = 0; $i < 5; $i++)
                    <x-button.header-right x-on:click.stop="open = true">
                        Satıcı Paneli

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                        </svg>
                    </x-button.header-right>
                @endfor
            </div>

            <div class="flex items-center gap-4">
                <x-button.header-right>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 3.75v4.5m0-4.5h-4.5m4.5 0-6 6m3 12c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 0 1 4.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 0 0-.38 1.21 12.035 12.035 0 0 0 7.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 0 1 1.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 0 1-2.25 2.25h-2.25Z" />
                    </svg>

                    Canlı yardım
                </x-button.header-right>

                <div class="relative">
                    <x-button.header-right>
                        Takvim
                    </x-button.header-right>

                    <div class="absolute px-1 text-xs font-bold text-white bg-orange-500 rounded-full -left-2 -top-2">
                        123
                    </div>
                </div>

                <x-button.header-right>
                    Canlı yardım

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 3.75v4.5m0-4.5h-4.5m4.5 0-6 6m3 12c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 0 1 4.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 0 0-.38 1.21 12.035 12.035 0 0 0 7.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 0 1 1.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 0 1-2.25 2.25h-2.25Z" />
                    </svg>
                </x-button.header-right>
            </div>
        </div>

        {{ $slot }}

        <div class="fixed bottom-0 right-12">
            <div class="relative rounded-t-lg"
                x-data="{ open: false }"
                x-on:click="open = true"
                >
                <button class="h-12 text-2xl font-bold text-white bg-gray-900 w-96" x-show="! open">
                    Paneli aç
                </button>

                <div x-show="open" style="display: none;" class="h-64 text-white bg-gray-900 w-96"
                    x-transition:enter="transform transition ease-in-out duration-500"
                    x-transition:enter-start="translate-y-full opacity-0"
                    x-transition:enter-end="translate-y-0 opacity-100"
                    x-transition:leave="transform transition ease-in-out duration-500"
                    x-transition:leave-start="translate-y-0 opacity-100"
                    x-transition:leave-end="translate-y-full opacity-0">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem sit ea similique! Iure non eaque nemo! Consectetur facilis recusandae saepe, fugit quisquam repellendus dolore adipisci voluptate exercitationem reiciendis cum doloremque ad, blanditiis laudantium excepturi! Quasi numquam fugit voluptatem voluptates consequatur doloremque impedit fuga nostrum error possimus. Quasi aperiam fugiat unde impedit illo perferendis pariatur animi tempore maiores earum, et vitae perspiciatis at! Recusandae iusto beatae esse alias illo ullam at modi odio deleniti quisquam sint voluptas exercitationem, et, magni atque similique earum, blanditiis debitis. Sed facere praesentium harum incidunt, tempore cum veritatis omnis architecto numquam delectus. At impedit facilis quasi?
                </div>
            </div>
        </div>
    </body>
</html>
