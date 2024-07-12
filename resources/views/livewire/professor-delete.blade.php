<div>
 
    <x-dialog-modal wire:model.live="modalProfessorDelete">
       <x-slot name="title">
           Deletar Professor
       </x-slot>
   
       <x-slot name="content">
            <p>Gostaria de excluir o cadastro do Professor de ID: {{ $id }} e nome: {{ $name }}?</p>
       </x-slot>
   
       <x-slot name="footer">
           <x-secondary-button @click="$wire.set('modalProfessorDelete', false)" wire:loading.attr="disabled">
               Cancelar
           </x-secondary-button>
   
           <x-danger-button @click="$wire.del()" class="ms-3" wire:loading.attr="disabled">
               Deletar
           </x-danger-button>
       </x-slot>
   </x-dialog-modal>
 </div>
 
