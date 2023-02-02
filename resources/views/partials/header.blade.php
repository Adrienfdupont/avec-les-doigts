<header>
    <section class="bg-custom-red flex flex-wrap justify-between w-full p-2 text-white">
        <div>
            <a href="/">
                <h1>
                    <img class="w-48" src="{{ url('images/assets/logo.png') }}" alt="logo">
                </h1>
            </a>
        </div>

        <div class="md:order-3 flex items-center">
            @if (Route::has('login'))
                    @auth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <div :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                        </div>
                        </form>

                        <a href="{{ url('/dashboard') }}"> photo</a>
                    @else
                        <a href="{{ route('login') }}"> Connexion</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Inscription</a>
                        @endif
                    @endauth
            @endif
        </div>

        <div class="w-full md:w-1/2 md:order-2 flex items-center mt-2 md:mt-0">
            <input type="text" class="w-full h-10 rounded-full focus:outline-none text-black px-4" placeholder="Rechercher une recette">
            <span id="filters-button" class="material-symbols-outlined text-4xl cursor-pointer">tune</span>
        </div>
    </section>

    <section id="filters" class="absolute -translate-y-full inset-x-0 p-4 shadow-2xl transition-opacity -z-40">
        <h2 class="md:flex md:px-32">Effectuez une recherche filtrée</h2>
        <form action="">
            <div class="md:flex md:px-32 mt-4">
                <div class="md:w-1/2">
                    <div class="flex mb-2 items-center">
                        <label class="w-1/3 flex justify-end mr-2" for="type">Type :</label>
                        <select class="w-1/2 h-8 px-2" name="type" id="type">
                            <option value="">option 1</option>
                            <option value="">option 2</option>
                            <option value="">option 3</option>
                        </select>
                    </div>

                    <div class="flex mb-2 items-center">
                        <label class="w-1/3 flex justify-end mr-2" for="difficulty">Difficulté :</label>
                        <select class="w-1/2 h-8 px-2" name="difficulty" id="difficulty">
                            <option value="">option 1</option>
                            <option value="">option 2</option>
                            <option value="">option 3</option>
                        </select>
                    </div>

                    <div class="flex mb-2 items-center">
                        <label class="w-1/3 flex justify-end mr-2" for="time">Temps :</label>
                        <select class="w-1/2 h-8 px-2" name="time" id="time">
                            <option value="">option 1</option>
                            <option value="">option 2</option>
                            <option value="">option 3</option>
                        </select>
                    </div>

                    <div class="flex mb-2 items-center">
                        <label class="w-1/3 flex justify-end mr-2" for="cost">Coût :</label>
                        <select class="w-1/2 h-8 px-2" name="cost" id="cost">
                            <option value="">option 1</option>
                            <option value="">option 2</option>
                            <option value="">option 3</option>
                        </select>
                    </div>
                </div>

                <div class="md:w-1/2">
                    <div class="flex mb-2 items-center">
                        <label class="w-1/3 flex justify-end mr-2 text-right" for="ingredients">Ingrédients :</label>
                        <select class="w-1/2 h-8 px-2" name="ingredients" id="ingredients">
                            <option value="">option 1</option>
                            <option value="">option 2</option>
                            <option value="">option 3</option>
                        </select>
                    </div>

                    <div class="flex mb-2 items-center">
                        <label class="w-1/3 flex justify-end mr-2 text-right" for="themes">Thèmes :</label>
                        <select class="w-1/2 h-8 px-2" name="themes" id="themes">
                            <option value="">option 1</option>
                            <option value="">option 2</option>
                            <option value="">option 3</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mt-4">
                <button class="btn btn-yellow">RECHERCHER</button>
            </div>
        </form>
    </section>
</header>
