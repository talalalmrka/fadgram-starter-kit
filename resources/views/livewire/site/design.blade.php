<div class="container py-6">
    <h3>{{ __('Forms') }}</h3>
    <form wire:submit="save">

        <div class="grid grid-cols-1 gap-4">
            <div class="col">
                <fgx:input wire:model.live="name" id="name" icon="bi-star" startIcon="bi-person" endIcon="bi-check"
                    :label="__('Username')" :placeholder="__('Insert username')" :info="$name" />
            </div>
            <div class="col">
                <fgx:input wire:model.live="password" type="password" id="password" startIcon="bi-key-fill"
                    :label="__('Password')" :placeholder="__('Insert password')" :info="$password" />
            </div>
            <div class="col">
                <fgx:check-group wire:model.live="roles" id="roles" name="roles" :label="__('Roles')"
                    :options="$role_options" />
                @dump($roles)
            </div>
            <div class="col">
                <fgx:switch-group wire:model.live="permissions" id="permissions" name="permissions"
                    container_class="flex gap-4" :label="__('Permissions')" :options="$permission_options" />
                @dump($permission_options)
            </div>
            <div class="col">
                <fgx:switch wire:model.live="remember" id="remember" :label="__('Remember me')" />
                remember:{{ $remember }}
            </div>
            <div class="col">
                <fgx:checkbox wire:model.live="agree" id="agree" :label="__('I Agree rules')" />
                agree:{{ $agree }}
            </div>
            <div class="col">
                <fgx:select wire:model.live="gender" id="gender" :label="__('Gender')"
                    :options="$gender_options" />
                gender:{{ $gender }}
            </div>
            <div class="col">
                <fgx:textarea wire:model.live="bio" id="bio" :label="__('Bio')" />
                bio:{{ $bio }}
            </div>
            <div class="col">
                <fgx:button type="submit" startIcon="bi-star" endIcon="bi-plus">Submit</fgx:button>
            </div>
        </div>
    </form>

    <fgx:status class="mt-4 alert-soft" />
    @if ($errors && $errors->isNotEmpty())
        @pre($errors)
    @endif

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
