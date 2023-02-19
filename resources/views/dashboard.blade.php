@extends('layouts.app')

@section('content')

{{-- personnal informations --}}
<div class="flex flex-col items-center gap-y-8 lg:flex-row lg:justify-center lg:gap-x-20">

    <div class="flex gap-x-20">
        {{-- profile picture  --}}
        <div>
            <img src="{{ url('images/assets/' . $user_picture_path) }}" alt="Votre photo de profil" class="w-24">
        </div>

        {{-- average note --}}
        <div class="flex flex-col">
            <span>Note moyenne</span>
            <div>
                <span class="material-symbols-outlined text-yellow-500 filled-star">star</span>
                <span class="material-symbols-outlined text-yellow-500 filled-star">star</span>
                <span class="material-symbols-outlined text-yellow-500 filled-star">star</span>
                <span class="material-symbols-outlined text-yellow-500 filled-star">star</span>
                <span class="material-symbols-outlined text-yellow-500">star_half</span>
            </div>
        </div>
    </div>

    {{-- edit informations --}}
    <div class="flex flex-col gap-y-2">

        <div class="flex items-center gap-x-4">
            <span>Nom : {{ $name }}</span>
            <span class="material-symbols-outlined">edit</span>
        </div>

        <div class="flex items-center gap-x-4">
            <span>E-mail : {{ $email }}</span>
            <span class="material-symbols-outlined">edit</span>
        </div>

        <div class="flex items-center gap-x-4">
            <span>Mot de passe : ********</span>
            <span class="material-symbols-outlined">edit</span>
        </div>
    </div>

</div>

{{-- actions --}}
<div class="mx-96 mt-12">
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="btn btn-orange" :href="route('logout')" onclick="event.preventDefault();this.closest('form').submit();">
            Déconnexion
        </button>
    </form>
</div>

@endsection
