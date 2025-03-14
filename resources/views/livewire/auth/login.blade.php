<div class="min-h-screen">
    <div class="card card-body w-full md:w-[360px]">
        <h5 class="text-3xl text-gradient from-primary to-pink text-center">{{ __('Sign in') }}</h5>
        <form wire:submit="authenticate">
            <div class="grid grid-cols-1 gap-4">
                <div class="col">
                    <x-fgx::input wire:model.live="email" id="email" :label="__('Email address')" autofocus
                        autocomplete="email" />
                    <div>{{ $email }}</div>
                </div>
                <div class="col">
                    <label for="password" class="form-label {{ $errors->has('password') ? 'error' : '' }}"></label>
                    <input type="password" wire:model.live="password" id="password"
                        class="form-control {{ $errors->has('password') ? 'error' : '' }}" autofocus
                        autocomplete="password" />
                    <div>{{ $password }}</div>
                </div>
                <div class="col">
                    <label class="form-switch">
                        <input type="checkbox" wire:model.live="remember">
                        <span class="toggle-slider"></span>
                        <span class="form-switch-label">{{ __('Remember Me.') }}</span>
                    </label>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary w-full">{{ __('Sign in') }}</button>
                </div>
            </div>
        </form>
    </div>
</div>
