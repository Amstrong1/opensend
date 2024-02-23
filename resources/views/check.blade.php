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
        <div class="relative h-screen overflow-hidden bg-cover bg-no-repeat p-12 text-center"
            style="background-image: url('https://media.istockphoto.com/id/167890561/fr/photo/femme-daffaires-%C3%A0-laide-dordinateur-portable-dans-le-bureau.jpg?s=1024x1024&w=is&k=20&c=8Rts2Qr_XBveBzvX5boKxcB_bJw75bOmy2AmpVWHp1U=')">
            <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed">

                @include('navigation')
                <div class="flex h-full items-center justify-end px-20">
                    <div class="w-96">
                        <h2 class="mb-4 text-4xl font-semibold">
                            Faites le suivi de vos opérations
                        </h2>
                        <form action="" method="post">
                            @csrf
                            <div class="p-4" style="background-color: rgba(12, 49, 71, 0.5)">
                                {{-- <div class="text-left mb-4">
                                    <label class="text-white" for="">Envoyer vers</label>
                                    <select class="text-white block mt-1 w-full bg-neutral-50 p-3"
                                        style="background-color: rgb(12, 49, 71)" name="" id="">
                                        @foreach ($pays as $continent => $paysContinent)
                                            <optgroup label="{{ $continent }}">
                                                @foreach ($paysContinent as $value => $label)
                                                    <option value="{{ $value }}">{{ $label }}</option>
                                                @endforeach
                                            </optgroup>
                                        @endforeach
                                    </select>
                                </div> --}}
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
    </header>

    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
</body>

</html>
