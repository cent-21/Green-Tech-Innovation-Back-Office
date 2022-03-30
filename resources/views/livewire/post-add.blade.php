<div class="p-md-4">
    <h6 class="row py-4 px-2 rounded bg-white text-black">Nouveau article</h6>

    <form wire:submit.prevent="addArticle" class="col-lg-8 mt-4">
        @if (session()->has('message'))
            <div class="mt-4 alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        @if ($showPage)
            <div class="mb-3">
                <label class="mb-2">Titre de l'article</label>
                <input type="text" class="form-control-" required wire:model="postTitle">
            </div>
             <div class="mb-3">
                <label  class="mb-2">Poster de l'article <small>(optionnel)</small></label>
                <input type="file" class="form-control"  accept=".png, .jpg" wire:model="postImage">
            </div>
            <div class="mb-3">
                <label class="mb-2">Description de l'article</label>
                <textarea wire:model="postDescription" class="form-control-" cols="30" rows="10"></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary disabled" wire:loading wire:target="addArticle">Enregistrement</button>
                <button  class="btn btn-primary" wire:loading.remove wire:target="addArticle">Enregistrer</button>
            </div>
        @endif

    </form>
</div>
