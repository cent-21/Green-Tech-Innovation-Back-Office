<div class="p-md-4">
    <h6 class="row py-4 px-2 rounded bg-white text-black">Modifier parténaire</h6>

    <form wire:submit.prevent="addPatner" class="col-lg-8 mt-4 p-0">
        @if (session()->has('message'))
            <div class="mt-4 alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <div class="mb-3">
            <label  class="mb-2">Nom du partenaire</label>
            <input type="text" maxlength="50" class="form-control-" required wire:model="patnerName">
        </div>
        <div class="mb-3">
            <label  class="mb-2">Lien vers le site du partenaire</label>
            <input type="url" class="form-control-" required wire:model="patnerLink">
        </div>
        <div class="mb-3">
            <label  class="mb-2">Logo du partenaire</label>
            <input type="file" accept=".png, .jpg" required class="form-control" wire:model="patnerLogo" maxlength="150">
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary disabled" wire:loading wire:target="addPatner">Enregistrement</button>
            <button  class="btn btn-primary" type="submit" wire:loading.remove wire:target="addPatner">Enregistrer</button>
        </div>

    </form>
</div>
