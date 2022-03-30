<div class="p-md-4">
    <h6 class="row py-4 px-2 rounded bg-white text-black">Nouveau partenaire</h6>

    <form wire:submit.prevent="editPatner" class="col-lg-8 mt-4 p-0">
        @if (session()->has('message'))
            <div class="mt-4 alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <div class="mb-3">
            <label  class="mb-2">Lien vers le partenaire</label>
            <input type="url" class="form-control-" required wire:model="patnerLink">
        </div>
        <div class="mb-3">
            <label  class="mb-2">Nom du partenaire</label>
            <input type="text" class="form-control-" wire:model="patnerName" maxlength="50">
        </div>
        <div class="mb-3">
            <label  class="mb-2">Logo du partenaire</label>
            <input type="file" class="form-control" accept=".png, .jpg" wire:model="patnerLogo">
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary disabled" wire:loading wire:target="editPatner">Enregistrement</button>
            <button  class="btn btn-primary" type="submit" wire:loading.remove wire:target="editPatner">Enregistrer</button>
        </div>

    </form>
</div>
