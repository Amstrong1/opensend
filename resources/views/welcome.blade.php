<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>OpenSend</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>

</head>

<body>
    <header>
        <!-- Hero section with background image, heading, subheading and button -->
        <div class="relative text-center overflow-hidden">
            @include('partials.carousel')

            <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden" style="background-color: rgba(0, 0, 0, 0.4)">
                <div class="fixed top-0 right-0 left-0 z-[1030]">
                    @include('partials.navigation')
                </div>
                <div class="flex h-full items-center justify-end px-20">
                    <div class="w-96">
                        <h2 class="mb-4 text-4xl font-semibold text-white">
                            Open Send, Transfert d'argent fiable
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex">
            <span class="p-2 w-56 text-white" style="background: rgb(247, 148, 29);">AVIS D'INFORMATION</span>
            <marquee class="p-2 border-b font-semibold" style="border-color: rgb(247, 148, 29);" behavior="" direction="">
                Souhaitez vous devenir partenaire de OpenSend, aucun problème vous pouvez nous contacter.
            </marquee>
        </div>
    </header>

    <main>
        <div class="md:flex items-center px-8 md:px-20 my-8">
            <div class="w-full md:w-1/2">
                <img class="w-full" src="{{ asset('img/fast.svg') }}" alt="fast">
            </div>
            <div class="w-full md:w-1/2 items-center">
                <div class="text-md md:text-3xl font-bold">Opérations</div>
                <div class="text-xl md:text-4xl font-bold md:mt-2">Rapide, flexible, Fiable</div>
                <div class="text-base md:text-xl mt-2 md:mt-8 font-semibold">OpenSend vous permet de bénéficier d'un
                    mouvement rapide et d'une transition réflétant ses
                    objectifs</div>
            </div>
        </div>

        <div class="md:flex flex-row-reverse items-center px-8 md:px-20 my-8">
            <div class="w-full md:w-1/2">
                <img class="w-full" src="{{ asset('img/money.svg') }}" alt="money">
            </div>
            <div class="w-full md:w-1/2 items-center">
                <div class="text-md md:text-3xl font-bold">Transfert</div>
                <div class="text-xl md:text-4xl font-bold md:mt-2">Moins Coûteux</div>
                <div class="text-base md:text-xl mt-2 md:mt-8 font-semibold">OpenSend détient des moyens de transferts
                    d'argent internationaux synonymes de rapidité, de flexibilité. Il est également à des frais très
                    abordables et contribuent à une action humanitaire plus transparente.</div>
            </div>
        </div>

        <div class="md:flex items-center px-8 md:px-20 my-8">
            <div class="w-full md:w-1/2">
                <img class="w-full" src="{{ asset('img/world.svg') }}" alt="world">
            </div>
            <div class="w-full md:w-1/2 items-center">
                <div class="text-md md:text-3xl font-bold">Un Large</div>
                <div class="text-xl md:text-4xl font-bold md:mt-2">Rayonnement</div>
                <div class="text-base md:text-xl mt-2 md:mt-8 font-semibold">OpenSend génère un élan innovant qui
                    rayonne sur le plan international.</div>
            </div>
        </div>
    </main>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
</body>

</html>
