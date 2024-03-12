<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>WorldSend</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />

    <script src="https://cdn.tailwindcss.com/3.3.0"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine-ie11.min.js"
        integrity="sha512-Atu8sttM7mNNMon28+GHxLdz4Xo2APm1WVHwiLW9gW4bmHpHc/E2IbXrj98SmefTmbqbUTOztKl5PDPiu0LD/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <header>
        <!-- Hero section with background image, heading, subheading and button -->
        <div class="relative text-center overflow-hidden">
            @include('partials.carousel')

            <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden"
                style="background-color: rgba(0, 0, 0, 0.4)">
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
    </header>

    <main>
        <h1 class="text-xl md:text-3xl font-bold m-8 text-center">Des facons pratiques d'envoyer de l'argent</h1>
        <div x-data="{
            openTab: 1,
            activeClasses: 'border-b',
            inactiveClasses: 'border-0'
        }" class="p-6">
            <ul class="flex w-full">
                <li @click="openTab = 1" :class="{ '-mb-px': openTab === 1 }" class="-mb-px mr-1 w-1/2 text-center">
                    <a href="#!" :class="openTab === 1 ? activeClasses : inactiveClasses"
                        class="bg-white inline-block py-2 px-4 font-semibold w-full">
                        Façons d'envoyer de l'argent
                    </a>
                </li>
                <li @click="openTab = 2" :class="{ '-mb-px': openTab === 2 }" class="mr-1 w-1/2 text-center">
                    <!-- Set active class by using :class provided by Alpine -->
                    <a href="#!" :class="openTab === 2 ? activeClasses : inactiveClasses"
                        class="bg-white inline-block py-2 px-4 font-semibold w-full">
                        Façons de recevoir de l'argent
                    </a>
                </li>
            </ul>
            <div class="w-full">
                <div x-show="openTab === 1">

                    <div class="md:flex items-center gap-8 px-8 md:px-20 my-8">
                        <div class="w-full md:w-1/3 items-center">
                            <img class="w-full" src="{{ asset('img/online.svg') }}" alt="online">
                            <div class="text-md font-bold">Envoyer en ligne</div>
                            <div class="text-base mt-2 md:mt-6">Inscrivez vous et créer votre profil gratuitement pour
                                utiliser nos
                                services de transfert d'argent en ligne</div>
                        </div>
                        <div class="w-full md:w-1/3 items-center">
                            <img class="w-full" src="{{ asset('img/app.svg') }}" alt="app">
                            <div class="text-md font-bold">Envoyer avec notre application</div>
                            <div class="text-base mt-2 md:mt-6">Envoyer de l'argent en tout temps lorsque vous êtes en
                                déplacement
                                ou commencer un transfert sur l'application</div>
                        </div>
                        <div class="w-full md:w-1/3 items-center">
                            <img class="w-full" src="{{ asset('img/partner.svg') }}" alt="partner">
                            <div class="text-md font-bold">Envoyer en personne</div>
                            <div class="text-base mt-2 md:mt-6">Transférez de l'argent en personne chez tout nous
                                partenaires agréés
                                présent disponible autour de vous</div>
                        </div>
                    </div>

                </div>
                <div x-show="openTab === 2">
                    <div class="md:flex items-center gap-8 px-8 md:px-20 my-8">
                        <div class="w-full md:w-1/3 items-center">
                            <img class="w-full" src="{{ asset('img/account.svg') }}" alt="account">
                            <div class="text-md font-bold">Compte bancaire</div>
                            <div class="text-base mt-2 md:mt-6">Envoyer des fonds directement à des comptes bancaires dans le monde entier.</div>
                        </div>
                        <div class="w-full md:w-1/3 items-center">
                            <img class="w-full" src="{{ asset('img/cash.svg') }}" alt="cash">
                            <div class="text-md font-bold">Récupération de comptant</div>
                            <div class="text-base mt-2 md:mt-6">Que votre destinataire soit à la maison ou en voyage, vous pouvez envoyer de l'argent à une agence près de lui pour une récupération de comptant rapide.</div>
                        </div>
                        <div class="w-full md:w-1/3 items-center">
                            <img class="w-full" src="{{ asset('img/mobile.svg') }}" alt="mobile">
                            <div class="text-md font-bold">Portefeuille mobile</div>
                            <div class="text-base mt-2 md:mt-6">Notre service de transfert d'argent mobile est un moyen rapide et pratique d'envoyer de l'argent vers le téléphone mobile de votre destinataire.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="md:flex items-center px-8 md:px-20 my-8">
            <div class="w-full md:w-1/2">
                <img class="w-full" src="{{ asset('img/fast.svg') }}" alt="fast">
            </div>
            <div class="w-full md:w-1/2 items-center">
                <div class="text-md md:text-3xl font-bold">Opérations</div>
                <div class="text-xl md:text-4xl font-bold md:mt-2">Rapide, flexible, Fiable</div>
                <div class="text-base md:text-xl mt-2 md:mt-8 font-semibold">WorldSend vous permet de bénéficier d'un
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
                <div class="text-base md:text-xl mt-2 md:mt-8 font-semibold">WorldSend détient des moyens de transferts
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
                <div class="text-base md:text-xl mt-2 md:mt-8 font-semibold">WorldSend génère un élan innovant qui
                    rayonne sur le plan international.</div>
            </div>
        </div>
    </main>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
</body>

</html>
