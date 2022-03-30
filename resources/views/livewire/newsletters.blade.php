<div class="p-md-4">

    <h6 class="row py-4 px-2 rounded bg-white text-black">Les abonnés</h6>


    <div class="table-responsive-sm mt-4 row">
        <table class="table table-striped  bg-white-">
            <thead>
                <tr class="bg-primary- text-white fs-6">
                    <th>#</th>
                    <th>Email</th>
                    <th class="text-end pe-4">Action</th>
                </tr>
            </thead>
            <tbody style="border-bottom: 0px solid #fff">
                @php
                    $i = 1;
                @endphp
                @foreach ($newsletters as $newsletter)
                    <tr class="align-middle">
                        <td>{{ $i }}</td>
                        <td>{{ $newsletter['email'] }}</td>
                        <td class="text-end">
                            <button wire:click="deleteIt({{ $newsletter['newsletterId'] }})" class="btn btn-outline-danger fs-6">Supprimer<i class="uil uil-trash-alt text-danger"></i></button>
                        </td>
                    </tr>
                    @php
                        $i++;
                    @endphp
                @endforeach
            </tbody>
        </table>

        <style>
            svg {
                display: none;
            }
        </style>

        {{ $newsletters->links() }}
    </div>



</div>
