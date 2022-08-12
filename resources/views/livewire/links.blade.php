<div>
    <h1>Links Page</h1>
    <div>
        <input type="text" class="form-control form-control-sm" wire:model.debounce.500ms="message" placeholder="Digite o link"/>
    </div>
    <div>
        {{$message}}
    </div>
</div>
