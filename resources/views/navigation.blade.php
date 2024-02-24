<!-- Navbar -->
<nav class="flex w-full items-center justify-between bg-white text-neutral-600 shadow-lg md:flex-wrap"
    data-te-navbar-ref>
    <div>
        <a href="/" data-te-ripple-init data-te-ripple-color="light">
            <img src="{{ asset('img/logo.png') }}" class="w-40" alt="logo">
        </a>
    </div>
    <div class="px-6">
        <!-- Hamburger menu button -->
        <button class="border-0 bg-transparent px-2 py-3 text-xl leading-none md:hidden " type="button"
            data-te-collapse-init data-te-target="#navbarSupportedContentO" aria-controls="navbarSupportedContentO"
            aria-expanded="false" aria-label="Toggle navigation">
            <!-- Hamburger menu icon -->
            <span class="[&>svg]:w-5">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </span>
        </button>

        <!-- Navigation links -->
        <div class="!visible hidden grow basis-[100%] items-center md:!flex md:basis-auto" id="navbarSupportedContentO"
            data-te-collapse-item>
            <ul class="mr-auto flex flex-col md:flex-row lg:gap-4" data-te-navbar-nav-ref>
                <li class="my-1 text-sm" data-te-nav-item-ref>
                    <a class="flex items-center transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 md:p-2 [&.active]:border-primary [&.active]:text-primary"
                        href="/" data-te-nav-link-ref data-te-ripple-init data-te-ripple-color="light">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                        &nbsp;
                        Acceuil
                    </a>
                </li>
                <li class="my-1 text-sm" data-te-nav-item-ref>
                    <div class="" data-te-dropdown-ref>
                        <div class="group relative cursor-pointer py-2">
                            <a class="flex items-center menu-hover">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 0 0-3.7-3.7 48.678 48.678 0 0 0-7.324 0 4.006 4.006 0 0 0-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 0 0 3.7 3.7 48.656 48.656 0 0 0 7.324 0 4.006 4.006 0 0 0 3.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3-3 3" />
                                </svg>
                                &nbsp;
                                Transaction
                            </a>
                            <div
                                class="invisible absolute z-50 flex w-36 rounded shadow-lg flex-col bg-white py-2 px-2 text-gray-800 shadow-xl group-hover:visible">
                                <a href="/send" class="my-2 block text-gray-500 hover:text-black">
                                    Envoyer de l'argent
                                </a>

                                <a href="/check" class="my-2 block text-gray-500 hover:text-black">
                                    Suivre un transfert
                                </a>
                                <a href="/stand" class="my-2 block text-gray-500 hover:text-black">
                                    Point de vente
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="my-1 text-sm" data-te-nav-item-ref>
                    <a class="flex items-center transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 md:p-2 [&.active]:border-primary [&.active]:text-primary"
                        href="#!" data-te-nav-link-ref data-te-ripple-init data-te-ripple-color="light">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                        </svg>
                        &nbsp;
                        Espace Partenaire
                    </a>
                </li>
                <li class="my-1 text-sm" data-te-nav-item-ref>
                    <a class="flex items-center transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 md:p-2 [&.active]:border-primary [&.active]:text-primary "
                        href="#!" data-te-nav-link-ref data-te-ripple-init data-te-ripple-color="light">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                        </svg>
                        &nbsp;
                        Aide
                    </a>
                </li>
                <li class="my-1 text-sm" data-te-nav-item-ref>
                    <a class="flex items-center transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 md:p-2 [&.active]:border-primary [&.active]:text-primary"
                        href="/contact" data-te-nav-link-ref data-te-ripple-init data-te-ripple-color="light">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 0 1 1.037-.443 48.282 48.282 0 0 0 5.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                        </svg>
                        &nbsp;Contact
                    </a>
                </li>
                <li class="my-1 text-sm" data-te-nav-item-ref>
                    <a class="flex items-center transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 md:p-2 [&.active]:border-primary [&.active]:text-primary "
                        href="#!" data-te-nav-link-ref data-te-ripple-init data-te-ripple-color="light">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                        </svg>
                        &nbsp;Chat Conseil
                    </a>
                </li>
                <li class="my-1 text-sm" data-te-nav-item-ref>
                    <a href="/login"
                        class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 md:p-2 [&.active]:border-primary [&.active]:text-primary rounded border border-neutral-700 p-1 leading-normal transition duration-150 ease-in-outhover:bg-opacity-10"
                        data-te-ripple-init data-te-ripple-color="light">
                        Se connecter
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
