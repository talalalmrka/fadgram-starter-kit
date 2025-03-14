<div class="h-screen flex flex-col justify-center items-center">
    <x-fgx::button>Fgx button</x-fgx::button>
    <x-fgx::input id="name" :label="__('Username')">Fgx button</x-fgx::input>
    <fgx-button />
    {{-- <div class="card md:w-[350px] mx-auto">
        <div class="card-body p-4">
            <h5 class="card-title">{{ __('Sign in') }}</h5>
            <div class="grid grid-cols-1 gap-4">
                <div class="col">
                    <x-fgx::input wire:model="email" id="email" :label="__('Email address')" autofocus autocomplete="email"
                        placeholder="email@example.com" startIcon="bi-envelope" />
                </div>
                <div class="col">
                    <x-fgx::input wire:model="password" id="password" :label="__('Password')" autofocus
                        autocomplete="password" placeholder="{{ __('Insert password') }}" startIcon="bi-key"
                        endIcon="bi-eye-fill" />
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary pill w-full">{{ __('Sign in') }}</button>
                </div>
            </div>
        </div>

    </div>
    --}}
</div>
