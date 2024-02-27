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
        <div class="fixed top-0 right-0 left-0 z-[1030]">
            @include('partials.navigation')
        </div>
    </header>

    <main class="m-12 mt-32 md:m-32">
        <div class="mx-auto max-w-lg text-center">
            <h1 class="text-2xl font-bold sm:text-3xl m-4">FAQs</h1>
        </div>
        <div id="accordionExample">
            <div class="rounded-t-lg border border-neutral-200 bg-white">
                <h2 class="mb-0" id="headingOne">
                    <button
                        class="group relative flex w-full items-center rounded-t-[15px] border-0 bg-white px-5 py-4 text-left text-base text-neutral-800 transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none [&:not([data-te-collapse-collapsed])]:bg-white [&:not([data-te-collapse-collapsed])]:text-primary [&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(229,231,235)]"
                        type="button" data-te-collapse-init data-te-target="#collapseOne" aria-expanded="true"
                        aria-controls="collapseOne">
                        Qu'est ce que OpenSend
                        <span
                            class="ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </span>
                    </button>
                </h2>
                <div id="collapseOne" class="!visible" data-te-collapse-item data-te-collapse-show
                    aria-labelledby="headingOne" data-te-parent="#accordionExample">
                    <div class="px-5 py-4">
                        <strong>OpenSend est une solution fiable de transfert international.</strong> It is
                        shown by default, until the collapse plugin adds the appropriate
                        classes that we use to style each element. These classes control
                        the overall appearance, as well as the showing and hiding via CSS
                        transitions. You can modify any of this with custom CSS or
                        overriding our default variables. It's also worth noting that just
                        about any HTML can go within the <code>.accordion-body</code>,
                        though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="border border-t-0 border-neutral-200 bg-white">
                <h2 class="mb-0" id="headingTwo">
                    <button
                        class="group relative flex w-full items-center rounded-none border-0 bg-white px-5 py-4 text-left text-base text-neutral-800 transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none [&:not([data-te-collapse-collapsed])]:bg-white [&:not([data-te-collapse-collapsed])]:text-primary [&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(229,231,235)]"
                        type="button" data-te-collapse-init data-te-collapse-collapsed data-te-target="#collapseTwo"
                        aria-expanded="false" aria-controls="collapseTwo">
                        Comment puis je avoir un compte OpenSend
                        <span
                            class="-mr-1 ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:mr-0 group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </span>
                    </button>
                </h2>
                <div id="collapseTwo" class="!visible hidden" data-te-collapse-item aria-labelledby="headingTwo"
                    data-te-parent="#accordionExample">
                    <div class="px-5 py-4">
                        <strong>This is the second item's accordion body.</strong> It is
                        hidden by default, until the collapse plugin adds the appropriate
                        classes that we use to style each element. These classes control
                        the overall appearance, as well as the showing and hiding via CSS
                        transitions. You can modify any of this with custom CSS or
                        overriding our default variables. It's also worth noting that just
                        about any HTML can go within the <code>.accordion-body</code>,
                        though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="rounded-b-lg border border-t-0 border-neutral-200 bg-white">
                <h2 class="accordion-header mb-0" id="headingThree">
                    <button
                        class="group relative flex w-full items-center border-0 bg-white px-5 py-4 text-left text-base text-neutral-800 transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none [&:not([data-te-collapse-collapsed])]:bg-white [&:not([data-te-collapse-collapsed])]:text-primary [&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(229,231,235)]"
                        type="button" data-te-collapse-init data-te-collapse-collapsed data-te-target="#collapseThree"
                        aria-expanded="false" aria-controls="collapseThree">
                        Peut on etre partenaire de OpenSend ?
                        <span
                            class="-mr-1 ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:mr-0 group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </span>
                    </button>
                </h2>
                <div id="collapseThree" class="!visible hidden" data-te-collapse-item aria-labelledby="headingThree"
                    data-te-parent="#accordionExample">
                    <div class="px-5 py-4">
                        <strong>This is the third item's accordion body.</strong> It is
                        hidden by default, until the collapse plugin adds the appropriate
                        classes that we use to style each element. These classes control
                        the overall appearance, as well as the showing and hiding via CSS
                        transitions. You can modify any of this with custom CSS or
                        overriding our default variables. It's also worth noting that just
                        about any HTML can go within the <code>.accordion-body</code>,
                        though the transition does limit overflow.
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
</body>

</html>
