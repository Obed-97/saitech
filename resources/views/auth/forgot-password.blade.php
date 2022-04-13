<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <h3 class="text-center m-0">
                <a href="index.html" class="logo logo-admin"><img src="{{asset('admin/assets/images/saitech.png')}}" height="50" width="170" ></a>
            </h3>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600" style="text-align: justify">
            {{ __('Mot de passe oublié? Aucun problème. Indiquez-nous simplement votre adresse e-mail et nous vous enverrons par e-mail un lien de réinitialisation de mot de passe qui vous permettra d\'en choisir un nouveau.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('réinitialisation du mot de passe') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
