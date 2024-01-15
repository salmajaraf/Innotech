<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    
    <div class="flex items-center justify-center h-screen">
        <form method="POST" action="{{ route('login') }}" class="w-full max-w-md p-6 bg-white rounded-md shadow-md">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label  for="email" :value="__('Adresse-Mail')" />
                <x-text-input style="margin-left: 10px;" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Mot de Passe')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div >
                <x-input-label for="remember_me" >
                    <input style="width:20px; height:20px;" id="remember_me" type="checkbox"  name="remember">
                    <span style="margin-top:6px;">{{ __('Remember me') }}</span>
                </x-input-label>
            </div>

            <div class="flex items-center justify-between mt-4" style="margin-top:25px;">
                <div class="btn-signin" th:href="@{/signup}">
                    <a th:href="@{/signup}">
                        S'inscrire
                    </a>
                </div>
                <div class="btn-signin">
                    <x-primary-button class="btn-info">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </div>
        </form>
    </div>
</x-guest-layout>
