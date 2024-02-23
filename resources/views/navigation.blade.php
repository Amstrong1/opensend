<!-- Navbar -->
<nav class="flex w-full items-center justify-between bg-white py-2 text-neutral-600 shadow-lg md:flex-wrap"
    data-te-navbar-ref>
    <div>
        <a class="text-2xl font-semibold" href="#!" data-te-ripple-init data-te-ripple-color="light">
            <img src="{{ asset('img/logo.png') }}" class="w-28" alt="logo">
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
                <li data-te-nav-item-ref>
                    <a class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 md:p-2 [&.active]:border-primary [&.active]:text-primary"
                        href="/" data-te-nav-link-ref data-te-ripple-init data-te-ripple-color="light">Envoyer de
                        l'argent</a>
                </li>
                <li data-te-nav-item-ref>
                    <a class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 md:p-2 [&.active]:border-primary [&.active]:text-primary"
                        href="/check" data-te-nav-link-ref data-te-ripple-init data-te-ripple-color="light">Suivre un
                        transfert</a>
                </li>
                <li data-te-nav-item-ref>
                    <a class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 md:p-2 [&.active]:border-primary [&.active]:text-primary"
                        href="/stand" data-te-nav-link-ref data-te-ripple-init data-te-ripple-color="light">Point de
                        vente</a>
                </li>
                <li data-te-nav-item-ref>
                    <a class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 md:p-2 [&.active]:border-primary [&.active]:text-primary "
                        href="#!" data-te-nav-link-ref data-te-ripple-init data-te-ripple-color="light">Aide</a>
                </li>
                <li data-te-nav-item-ref>
                    <a href="#!"
                        class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 md:p-2 [&.active]:border-primary [&.active]:text-primary rounded border border-neutral-700 p-1 leading-normal transition duration-150 ease-in-outhover:bg-opacity-10"
                        data-te-ripple-init data-te-ripple-color="light">
                        Se connecter
                    </a>
                </li>
                <li data-te-nav-item-ref>
                    <a class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 md:p-2 [&.active]:border-primary [&.active]:text-primary "
                        href="#!" data-te-nav-link-ref data-te-ripple-init data-te-ripple-color="light">
                        S'inscrire
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
