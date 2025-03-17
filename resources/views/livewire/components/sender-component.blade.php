<div class="card card-body" wire:ignore>
    <h5 class="card-title text-center text-gradient from-primary to-pink">Sender Component</h5>
    <div class="grid grid-cols-1 gap-4">
        <div class="col">
            <fgx:input id="name" wire:model.live="name" class="form-control" :label="__('Name')"
                placeholder="Name" />
        </div>
        <div class="col">
            <button wire:click="sendEvent" type="button" class="btn btn-primary w-full">Send event</button>
        </div>
    </div>
</div>
