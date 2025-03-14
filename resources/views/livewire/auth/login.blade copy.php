<div class="flex flex-col gap-6">
    <x-auth-header :title="__('Log in to your account')" :description="__('Enter your email and password below to log in')" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />
    {{-- <fgx::x-fgx-input wire:model="email" id="email" :label="__('Email address')" autofocus autocomplete="email"
        placeholder="email@example.com" />
        --}}
    <form wire:submit="login">
        <div class="card md:w-[350px] mx-auto">
            <div class="card-body p-4">
                <h5 class="card-title">{{ __('Sign in') }}</h5>
                <div class="grid grid-cols-1 gap-4">
                    <div class="col">
                        <x-fgx::input wire:model="email" id="email" :label="__('Email address')" class="pill" autofocus
                            autocomplete="email" placeholder="email@example.com" startIcon="bi-envelope" />
                    </div>
                    <div class="col">
                        <x-fgx::input wire:model="password" id="password" :label="__('Password')" class="pill" autofocus
                            autocomplete="password" placeholder="{{ __('Insert password') }}" startIcon="bi-key"
                            endIcon="bi-eye-fill" />
                    </div>
                    <div class="col">
                        <flux:checkbox wire:model="remember" :label="__('Remember me')" />
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary pill w-full">{{ __('Sign in') }}</button>
                    </div>
                    @if (Route::has('password.request'))
                        <div class="col text-center">
                            <flux:link class="text-sm" :href="route('password.request')" wire:navigate>
                                {{ __('Forgot your password?') }}
                            </flux:link>
                        </div>
                    @endif
                    @if (Route::has('register'))
                        <div class="space-x-1 text-center text-sm text-zinc-600 dark:text-zinc-400">
                            {{ __('Don\'t have an account?') }}
                            <flux:link :href="route('register')" wire:navigate>{{ __('Sign up') }}</flux:link>
                        </div>
                    @endif
                </div>
            </div>

        </div>

    </form>


</div>
