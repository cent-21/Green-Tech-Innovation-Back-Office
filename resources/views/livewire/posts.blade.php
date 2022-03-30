<div class="p-md-4">
    <h6 class="row py-4 px-2 rounded bg-white text-black">Les actualités</h6>

    <div class="table-responsive-sm mt-4 row">
        <table class="table table-striped  bg-white-">
            <thead>
                <tr class="bg-primary- text-white fs-6">
                    <th>#</th>
                    <th>Titre de l'article</th>
                    <th class="text-end pe-4">Action</th>
                </tr>
            </thead>
            <tbody style="border-bottom: 0px solid #fff">
                @php
                    $i = 1;
                @endphp
                @foreach ($posts as $post)
                    <tr class="align-middle">
                        <td>{{ $i }}</td>
                        <td><a href="{{ route('post', ['postSlug' => $post['postSlug']]) }}" style="font-size: 15px">{{ $post['postTitle'] }}</a></td>
                        <td class="text-end">
                            <a href="{{ route('post', ['postSlug' => $post['postSlug']]) }}" class="btn btn-outline-success">Modifier<i class="uil uil-edit-alt text-success"></i></a>
                            <button wire:click="deleteIt({{ $post['postId'] }})" wire:loading.class="btn-outline-danger" class="btn btn-outline-danger">Supprimer<i class="uil uil-trash-alt text-danger"></i></button>
                        </td>
                    </tr>
                    @php
                        $i++;
                    @endphp
                @endforeach
            </tbody>
        </table>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
            Voulez-vous vraiment le supprimer ?
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fermer</button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal" wire:click="deleteDo">Supprimer</button>
            </div>
        </div>
        </div>
    </div>



</div>