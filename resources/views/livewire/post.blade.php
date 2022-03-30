<div class="p-md-4">

    <h6 class="row py-4 px-2 rounded bg-white text-black">Les actualités > {{ $postTitle }}</h6>

    <form wire:submit.prevent="editArticle" class="col-lg-8">
        @if (session()->has('message'))
            <div class="mt-4 alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <div class="mt-4">
            <label for="" class="mb-2">Titre de l'article</label>
            <input type="text" class="form-control-" wire:model="postTitle">
        </div>
        <div class="mt-4">
           <label  class="mb-2">Poster de l'article <small>(optionnel)</small></label>
           <input type="file" class="form-control"  accept=".png, .jpg" wire:model="postImage">
       </div>
        <div class="mt-4">
            <label for="" class="mb-2">Description de l'article</label>
            <textarea class="form-control-" wire:model="postDescription"  id="" cols="30" rows="10"></textarea>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary disabled" wire:loading wire:target="editArticle">Modification en cours</button>
            <button  class="btn btn-primary" wire:loading.remove wire:target="editArticle">Modifier</button>
        </div>
    </form>

</div>
