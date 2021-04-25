<div class="p-3">
    {{-- The whole world belongs to you --}}
    <div>
        <x-label for="email" :value="__('Email')" />
        <x-input id="email" class="block mt-1 w-full" type="email" name="email" wire:model="user.email" />
    </div>

    <div class="mt-2">
        <x-label for="name" :value="__('Name')" />
        <x-input id="name" class="block mt-1 w-full" type="text" name="name" />
    </div>

    <x-button class="mt-2">
        {{ __('Save') }}
    </x-button>
</div>