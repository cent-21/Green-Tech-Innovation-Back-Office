<div class="p-md-4">


    <div class="row">
        <form wire:submit.prevent="addTeam" class="col-lg-6 p-0">
            <h6 class="row py-4 px-2 rounded bg-white text-black">Nouveau membre</h6>

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
                <label  class="mb-2">Photo du membre</label>
                <input type="file" class="form-control" accept=".png, .jpg" required wire:model="teamImage" maxlength="150">
            </div>
            <div class="mb-3">
                <label  class="mb-2">Direction du membre</label>
                <select class="form-control-" required wire:model="directionId">
                    <option></option>
                    @foreach ($directions as $direction)
                        <option value="{{ $direction['directionId'] }}">{{ $direction['directionName'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label  class="mb-2">Bibliographie du membre(facultatif)</label>
                <textarea class="form-control-" rows="2" maxlength="300" wire:model="teamDetail"></textarea>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary disabled" wire:loading wire:target="addTeam">Enregistrement</button>
                <button  class="btn btn-primary" type="submit" wire:loading.remove wire:target="addTeam">Enregistrer</button>
            </div>

        </form>


        <form wire:submit.prevent="addDirection" class="col-lg-5 offset-lg-1 p-0">
            <h6 class="row py-4 px-2 rounded bg-white text-black">Nouvelle équipe</h6>
            @if (session()->has('message_direction'))
                <div class="mt-4 alert alert-success">
                    {{ session('message_direction') }}
                </div>
            @endif

            <div class="mb-3">
                <label  class="mb-2">Nom de l'équipe</label>
                <input type="text" class="form-control-" required wire:model="directionName">
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary disabled" wire:loading wire:target="addDirection">Enregistrement</button>
                <button  class="btn btn-primary" type="submit" wire:loading.remove wire:target="addDirection">Enregistrer</button>
            </div>
        </form>


    </div>
</div>
