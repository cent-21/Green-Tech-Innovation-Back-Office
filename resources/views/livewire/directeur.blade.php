<div class="p-md-4">
    <h6 class="row py-4 px-2 rounded bg-white text-black">Directeurs > {{ $directeurName }}</h6>

    <form wire:submit.prevent="editDirecteur" class="col-lg-8 mt-4 p-0">
        @if (session()->has('message'))
            <div class="mt-4 alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <div class="mb-3">
            <label class="mb-2">Nom du directeur</label>
            <input type="text" class="form-control-" required wire:model="directeurName">
        </div>
        <div class="mb-3">
            <label class="mb-2">Pays</label>
            <select class="form-control-" wire:model="directeurCountry">
                <option value=""></option>
                @foreach ($countries as $item)
                    <option value="{{ $item["countryName"] }}">{{ $item["countryName"] }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="mb-2">Image du directeur</label>
            <input type="file" accept=".png, .jpg" class="form-control" wire:model="directeurImage">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary disabled" wire:loading wire:target="editDirecteur">Enregistrement</button>
        <button  class="btn btn-primary" type="submit" wire:loading.remove wire:target="editDirecteur">Enregistrer</button>
        </div>

    </form>
</div>
