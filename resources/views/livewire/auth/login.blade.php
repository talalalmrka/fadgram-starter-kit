<div class="min-h-screen">
    <div class="card card-body w-full md:w-[360px]">
        <h5 class="text-3xl font-semibold text-gradient from-primary to-pink text-center">{{ __('Sign in') }}</h5>
        <form wire:submit="authenticate">
            <div class="grid grid-cols-1 gap-3">
                <div class="col">
                    <x-fgx::input wire:model.live="email" id="email" :label="__('Email address')" autofocus
                        autocomplete="email" />
                </div>
                <div class="col">
                    <x-fgx::input type="password" wire:model.live="password" id="password" :label="__('Password')" autofocus
                        autocomplete="password" />
                </div>
                <div class="col">
                    <x-fgx::switch id="remember" wire:model.live="remember" :label="__('Remember Me.')" />
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary w-full">{{ __('Sign in') }}</button>
                </div>
                @if (Route::has('password.request'))
                    <div class="col text-center">
                        <div class="flex-space-2 justify-center">
                            <span>{{ __('Forgot your password?') }}</span>
                            <a href="route('password.request')" class="link">{{ __('Recover password') }}</a>
                        </div>
                    </div>
                @endif
                @if (Route::has('register'))
                    <div class="col">
                        <div class="flex-space-2 justify-center text-sm">
                            <span>{{ __('Don\'t have an account?') }}</span>
                            <a href="route('register')" class="link">{{ __('Sign up') }}</a>
                        </div>
                    </div>
                @endif

            </div>
        </form>
    </div>
</div>
