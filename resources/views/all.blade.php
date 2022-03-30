@isset($page)

    @extends("base", ['title' => $title])



    @if ($page === "posts")

        @section("content")
            @livewire("posts", ['title' => $title])
        @endsection

    @elseif ($page === "post")

        @section("content")
            @livewire("post", ['title' => $title, 'id' => $id])
        @endsection

    @elseif ($page === "post-add")

        @section("content")
            @livewire("post-add", ['title' => $title])
        @endsection

    @elseif ($page === "projects")

        @section("content")
            @livewire("projects", ['title' => $title])
        @endsection

    @elseif ($page === "project")

        @section("content")
            @livewire("project", ['title' => $title, "projectId" => $id])
        @endsection

    @elseif ($page === "project-add")

        @section("content")
            @livewire("project-add", ['title' => $title])
        @endsection

    @elseif ($page === "patners")

        @section("content")
            @livewire("patners", ['title' => $title])
        @endsection

    @elseif ($page === "patner")

        @section("content")
            @livewire("patner", ['title' => $title, "patnerId" => $id])
        @endsection

    @elseif ($page === "patner-add")

        @section("content")
            @livewire("patner-add", ['title' => $title])
        @endsection

    @elseif ($page === "directeurs")

        @section("content")
            @livewire("directeurs")
        @endsection

    @elseif ($page === "directeur")

        @section("content")
            @livewire("directeur", ["directeurId" => $id])
        @endsection

    @elseif ($page === "directeur-add")

        @section("content")
            @livewire("directeur-add")
        @endsection

    @elseif ($page === "services")

        @section("content")
            @livewire("services")
        @endsection

    @elseif ($page === "service")

        @section("content")
            @livewire("service", ["serviceId" => $id])
        @endsection

    @elseif ($page === "service-add")

        @section("content")
            @livewire("service-add")
        @endsection

    @elseif ($page === "teams")

        @section("content")
            @livewire("teams", ['title' => $title])
        @endsection

    @elseif ($page === "team")

        @section("content")
            @livewire("team", ['title' => $title, "teamId" => $id])
        @endsection

    @elseif ($page === "team-add")

        @section("content")
            @livewire("team-add", ['title' => $title])
        @endsection

    @elseif ($page === "newsletters")

        @section("content")
            @livewire("newsletters")
        @endsection

    @else

    @endif
@endisset
