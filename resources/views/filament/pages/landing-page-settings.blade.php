<x-filament-panels::page>
    <x-filament-panels::form >
        {{ $this->form }}

        <div class="grid grid-cols-2">
            <x-filament::button wire:click="save">
                {{__('حفظ')}}
            </x-filament::button>

        </div>
    </x-filament-panels::form>
</x-filament-panels::page>
