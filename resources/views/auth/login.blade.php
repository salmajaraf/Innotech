<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    
    <form method="POST" action="{{ route('login') }}" >
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label  for="email" :value="__('Adresse-Mail')" />
                <x-text-input style="margin-left: 10px; border-radius:10px;" id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div >
                <x-input-label for="password" :value="__('Mot de Passe')" />

                <x-text-input id="password"
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

            <div  style="margin-top:25px;">
                <div class="btn-signin" >
                    <a href="/register">
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
</x-guest-layout>
