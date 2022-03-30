<div class="p-md-4">
    <h6 class="row py-4 px-2 rounded bg-white text-black">Equipe > {{ $teamName }}</h6>

    <form wire:submit.prevent="editTeam" class="col-lg-8 mt-4 p-0">
        @if (session()->has('message'))
            <div class="mt-4 alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <div class="mb-3">
            <label  class="mb-2">Nom du membre</label>
            <input type="text" class="form-control-" required wire:model="teamName">
        </div>
        <div class="mb-3">
            <label  class="mb-2">Poste du membre</label>
            <input type="text" class="form-control-" required wire:model="teamPost">
        </div>
        <div class="mb-3">
            <label  class="mb-2">Téléphone du membre</label>
            <input type="tel" class="form-control-" required wire:model="teamTel">
        </div>
        <div class="mb-3">
            <label  class="mb-2">Email du membre</label>
            <input type="email" class="form-control-" required wire:model="teamMail">
        </div>
        <div class="mb-3">
            <label  class="mb-2">Photo du membre (si vous voulez le changer)</label>
            <input type="file" class="form-control" accept=".png, .jpg" wire:model="teamImage" >
        </div>
        <div class="mb-3">
            <label  class="mb-2">Equipe du membre</label>
            <select class="form-control-" required wire:model="directionId">
                <option></option>
                @foreach ($directions as $direction)
                    <option value="{{ $direction['directionId'] }}">{{ $direction['directionName'] }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label  class="mb-2">Detail du membre(facultatif)</label>
            <textarea class="form-control-" rows="2" maxlength="300" wire:model="teamDetail"></textarea>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary disabled" wire:loading wire:target="editTeam">Enregistrement</button>
            <button  class="btn btn-primary" type="submit" wire:loading.remove wire:target="editTeam">Enregistrer</button>
        </div>

    </form>
</div>
