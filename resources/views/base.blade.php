
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ f_page_title($title ?? null) }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="icon" href="{{ asset('logo.png') }}">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.1/examples/dashboard/dashboard.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!--==================== UNICONS ====================-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    @livewireStyles
  </head>

  <body class="d-none d-md-block">



  <div class="offcanvas offcanvas-start"  data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
    <div class="offcanvas-header">
      <h6 class="offcanvas-title text-primary" id="offcanvasScrollingLabel">GREEN TECH INNOVATION</h6>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="d-grid m-0">
        <div class="p-2 bg-light mt-3 border"><a href="{{ route('posts') }}"><i class="uil uil-inbox"></i> Actualités</a></div>
        <div class="p-2 bg-light mt-3 border"><a href="{{ route('post-add') }}"><i class="uil uil-inbox"></i> Nouveau article</a></div>
        <div class="p-2 bg-light mt-3 border"><a href="{{ route('projects') }}"><i class="uil uil-inbox"></i> Projets</a></div>
        <div class="p-2 bg-light mt-3 border"><a href="{{ route('project-add') }}"><i class="uil uil-inbox"></i> Nouveau Projet</a></div>
        <div class="p-2 bg-light mt-3 border"><a href="{{ route('directories') }}"><i class="uil uil-inbox"></i> Dossiers</a></div>
        <div class="p-2 bg-light mt-3 border"><a href="{{ route('patners') }}"><i class="uil uil-inbox"></i> Partenaires</a></div>
        <div class="p-2 bg-light mt-3 border"><a href="{{ route('patner-add') }}"><i class="uil uil-inbox"></i> Nouveau partenaire</a></div>
      </div>
    </div>
  </div>



  <div style="padding: 20px;" class="sticky-top bg-primary- text-center text-white">
    <div class="col-md-0 col-1 col-sm-1 d-block d-md-none">
      <i class="uil uil-bars" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling" style="font-size: 20px; color: #fff"></i>
    </div>
    <div class="col-md-12 col-11 col-sm-11">
      <strong style="font-size: 15px; letter-spacing: 0px"> GREEN TECH INNOVATION</strong>
    </div>
  </div>

  <div>

    <div class="hstack">

      <div class="sidebar">

        <div class="vstack">
            <h6>Actualités</h6>
            <div class="nav_item"><i class="uil uil-list-ul"></i> <a href="{{ route('posts') }}" > Liste des actualités</a></div>
            <div class="nav_item"><i class="uil uil-plus-circle"></i> <a href="{{ route('post-add') }}" > Nouvelle actualité</a></div>
            <hr>
            <h6>Projets</h6>
            <div class="nav_item"><i class="uil uil-list-ul"></i> <a href="{{ route('projects') }}" > Liste des projets</a></div>
            <div class="nav_item"><i class="uil uil-plus-circle"></i> <a href="{{ route('project-add') }}" > Nouveau Projet</a></div>
            <hr>
            <h6>Directions</h6>
            <div class="nav_item"><i class="uil uil-list-ul"></i> <a href="{{ route('directeurs') }}" > Liste des directeurs</a></div>
            <div class="nav_item"><i class="uil uil-plus-circle"></i> <a href="{{ route('directeur-add') }}" > Nouveau directeur</a></div>
            <hr>
            <h6>Personnels</h6>
            <div class="nav_item"><i class="uil uil-list-ul"></i> <a href="{{ route('teams') }}" > Liste des membres</a></div>
            <div class="nav_item"><i class="uil uil-plus-circle"></i> <a href="{{ route('team-add') }}" > Nouveau membre</a></div>
            <hr>
            <h6>Parténaires</h6>
            <div class="nav_item"><i class="uil uil-list-ul"></i> <a href="{{ route('patners') }}" > Liste des parténaires</a></div>
            <div class="nav_item"><i class="uil uil-plus-circle"></i> <a href="{{ route('patner-add') }}" > Nouveau partenaire</a></div>
            <hr>
            <h6>Sercices</h6>
            <div class="nav_item"><i class="uil uil-list-ul"></i> <a href="{{ route('services') }}" > Liste des sercices</a></div>
            <div class="nav_item"><i class="uil uil-plus-circle"></i> <a href="{{ route('service-add') }}" > Nouveau service</a></div>
            <hr>
            <h6>Newsletters</h6>
            <div class="nav_item"><i class="uil uil-list-ul"></i> <a href="{{ route('newsletters') }}" > Liste des abonnés</a></div>
            <hr>
            <h6>Compte</h6>
            <div class="nav_item"><i class="uil uil-sign-out-alt"></i> <a href="{{ route('disconnect') }}" > Déconnexion</a></div>
            {{-- <div class="p-2 bg-white mt-2"><a href="{{ route('directories') }}"> Dossiers</a></div> --}}
        </div>

      </div>

      <div class="content bg-light" style="height: 100vh">

        <main style="padding: 15px  !important;">

          @yield("content")

        </main>

      </div>

    </div>
  </div>



    <script src="https://getbootstrap.com/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    @livewireScripts

   </body>
</html>
