<div>
    <h1>Links Page</h1>
    <div>
        <input type="text" class="form-control form-control-sm mt-1 mb-1" wire:model.defer="message" placeholder="Digite o link"/>
        <button wire:click="send" class="btn btn-primary btn-sm mt-1 mb-1">Enviar</button>
    </div>
    <div>
        {{$message}}
    </div>
</div>
