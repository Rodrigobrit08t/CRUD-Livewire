<div>
   <x-button @click="$wire.set('modalProfessorCreate', true)">Adicionar Professor</x-button>

   <x-dialog-modal wire:model.live="modalProfessorCreate" submit="save">
      <x-slot name="title">
          Adicionar Professor
      </x-slot>
  
      <x-slot name="content">

          <div class="grid grid-cols-12 gap-4">
            
            <div class="cols-span-12">
               <x-label for="form.name" value="Nome" />
               <x-input wire:model="form.name" id="form.name" type="text" class="mt-1 w-full" require autocomplete="form.name" />
               <x-input-error for="form.name" class="mt-1" />
            </div>
            <div class="cols-span-12">
               <x-label for="form.email" value="Email" />
               <x-input wire:model="form.email" id="form.email" type="email" class="mt-1 w-full" require autocomplete="form.email" />
               <x-input-error for="form.email" class="mt-1" />
            </div>
            <div class="cols-span-12">
               <x-label for="form.address" value="Endereço" />
               <x-input wire:model="form.address" id="form.address" type="text" class="mt-1 w-full" require autocomplete="form.address" />
               <x-input-error for="form.address" class="mt-1" />
            </div>

          </div>
  
      </x-slot>
  
      <x-slot name="footer">
          <x-secondary-button @click="$wire.set('modalProfessorCreate', false)" wire:loading.attr="disabled">
              Cancelar
          </x-secondary-button>
  
          <x-button class="ms-3" wire:loading.attr="disabled">
              Save
          </x-button>
      </x-slot>
  </x-dialog-modal>
</div>
