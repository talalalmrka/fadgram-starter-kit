<div class="container py-5">
    <h3>{{ __('Users') }}</h3>
    <x-fgx::status class="mb-4" />

    <div class="table-container">
        <table class="table table-striped table-border table-rounded xs">
            <thead>
                <tr>
                    <th>{{ __('ID') }}</th>
                    <th>{{ __('Name') }}</th>
                    <th>{{ __('Email') }}</th>
                    <th>{{ __('Creation data') }}</th>
                    <th>{{ __('Actions') }}</th>
                </tr>
            </thead>
            <tbody>
                @if ($users->isNotEmpty())
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at->format('d, M Y') }}</td>
                            <td>
                                <div class="flex space-x-2 justify-center">
                                    <button wire:click="edit({{ $user->id }})" type="button"
                                        class="btn btn-green xs flex-space-2">
                                        <i class="icon bi-pencil-square"></i>
                                        <span wire:loading.remove
                                            wire:target="edit({{ $user->id }})">{{ __('Edit') }}</span>
                                        <x-fgx::loader wire:loading wire:target="edit({{ $user->id }})" />
                                    </button>
                                    <button wire:click="delete({{ $user->id }})" type="button"
                                        class="btn btn-red xs flex-space-2">
                                        <i class="icon bi-trash"></i>
                                        <span wire:loading.remove
                                            wire:target="delete({{ $user->id }})">{{ __('Delete') }}</span>
                                        <x-fgx::loader wire:loading wire:target="delete({{ $user->id }})" />
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="5" class="text-center">{{ __('No users found') }}</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
    @if ($users->isNotEmpty())
        <div class="py-3">
            {{ $users->links() }}
        </div>
    @endif
</div>
