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
        <div class="relative h-screen overflow-hidden">
            @include('partials.carousel')

            <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden" style="background-color: rgba(0, 0, 0, 0.4)">
                <div class="fixed top-0 right-0 left-0 z-[1030]">
                    @include('partials.navigation')
                </div>
                <div class="flex h-full items-end justify-end px-20 pb-10">
                    <div class="w-96">
                        <h2 class="mb-4 text-4xl font-semibold text-white">
                            Faites le suivi de vos opérations
                        </h2>
                        <form action="" method="post">
                            @csrf
                            <div class="p-4" style="background-color: rgba(12, 49, 71, 0.5)">
                                <div class="text-left mb-4">
                                    <label class="text-white" for="">Référence du transfert</label>
                                    <input class="text-white block mt-1 w-full bg-neutral-50 p-3"
                                        style="background-color: rgb(12, 49, 71)" type="text" name=""
                                        id="">
                                </div>
                            </div>
                            <button type="button"
                                class="block mt-1 w-full p-3 px-7 pb-[8px] pt-[10px] text-sm font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 active:border-neutral-200 active:text-neutral-200"
                                style="background-color: rgb(247, 148, 29)" data-te-ripple-init
                                data-te-ripple-color="light">
                                Envoyer
                            </button>
                        </form>
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

    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
</body>

</html>
