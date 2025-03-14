<div class="container py-5">
    <div class="flex justify-between">
        <h3>{{ $title }}</h3>
        <div class="flex-space-2">
            <a href="{{ route('dashboard.users') }}" class="link">
                {{ __('Users') }}
            </a>
        </div>
    </div>

    <x-fgx::status class="mb-4" />
    <div class="card card-body">
        <form wire:submit="save">
            <div class="grid grid-cols-1 gap-4">
                <div class="col">
                    <x-fgx::input wire:model.live="name" id="name" :label="__('Name')" autofocus />
                </div>
                <div class="col">
                    <x-fgx::input wire:model.live="email" id="email" :label="__('Email')" autofocus />
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                </div>
            </div>
        </form>
    </div>
</div>
