<div class="p-md-4">
    <h6 class="row py-4 px-2 rounded bg-white text-black">Nouveau projet</h6>

    <form wire:submit.prevent="addProject" class="col-lg-8 mt-4 p-0">
        @if (session()->has('message'))
            <div class="mt-4 alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <div class="mb-3">
            <label  class="mb-2">Lien vers le projet</label>
            <input type="url" class="form-control-" required wire:model="reazisationLink">
        </div>
        <div class="mb-3">
            <label  class="mb-2">Titre du projet</label>
            <input type="text" class="form-control-" wire:model="reazisationName" maxlength="150">
        </div>
        <div class="mb-3">
            <label  class="mb-2">Detail du projet</label>
            <textarea class="form-control-" rows="5" wire:model="reazisationDetail"></textarea>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary disabled" wire:loading wire:target="addProject">Enregistrement</button>
            <button  class="btn btn-primary" type="submit" wire:loading.remove wire:target="addProject">Enregistrer</button>
        </div>

    </form>
</div>
