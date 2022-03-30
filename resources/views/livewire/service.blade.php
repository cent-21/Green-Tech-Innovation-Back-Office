<div class="p-md-4">
    <h6 class="row py-4 px-2 rounded bg-white text-black">Modifier service</h6>

    <form wire:submit.prevent="editService" class="col-lg-8 mt-4">
        @if (session()->has('message'))
            <div class="mt-4 alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <div class="mb-3">
            <label class="mb-2">Titre du service</label>
            <input type="text" class="form-control-" required wire:model="serviceName">
        </div>
         <div class="mb-3">
            <label  class="mb-2">Poster du service <small>(optionnel)</small></label>
            <input type="file" class="form-control" accept=".png, .jpg" wire:model="serviceImage">
        </div>
        <div class="mb-3">
            <label class="mb-2">Listes des sous-service(séparés par ;)</label>
            <textarea wire:model="serviceList"  required class="form-control-" cols="30" rows="10"></textarea>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary disabled" wire:loading wire:target="editService">Enregistrement</button>
            <button  class="btn btn-primary" wire:loading.remove wire:target="editService">Enregistrer</button>
        </div>

    </form>
</div>
