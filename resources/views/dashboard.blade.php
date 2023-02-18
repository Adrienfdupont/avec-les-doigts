@extends('layouts.app')

@section('content')

{{-- personnal informations --}}
<div class="mx-12 flex justify-between">

    {{-- profile picture  --}}
    <div>
        <img src="{{ url('images/assets/user.png') }}" alt="Votre photo de profil" class="w-24">
    </div>

    {{-- edit informations --}}
    <div class="flex flex-col gap-y-2">

        <div class="flex items-center gap-x-4">
            <span>Nom : Adrien</span>
            <span class="material-symbols-outlined">edit</span>
        </div>

        <div class="flex items-center gap-x-4">
            <span>E-mail : adrienf.dupont@gmail.com</span>
            <span class="material-symbols-outlined">edit</span>
        </div>

        <div class="flex items-center gap-x-4">
            <span>Mot de passe : ********</span>
            <span class="material-symbols-outlined">edit</span>
        </div>
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

@endsection
