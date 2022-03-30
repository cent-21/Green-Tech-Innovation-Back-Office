<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Directeur;
use App\Models\Mail;
use App\Models\Directory;
use App\Models\Patner;
use App\Models\Reazisation;
use App\Models\Service;
use App\Models\Team;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware("authAdmin");
    }

    public function disconnect() {
        f_deleteCookie(md5('token_gti'));
        return redirect()->route("login");
    }


    public function directeurs() {
        $page = "directeurs";
        $title = "Les directeurs";
        return view("all", compact("page", "title"));
    }

    public function directeur($directeurId) {
        $directeur = Directeur::where('directeurId', $directeurId)->first();
        if($directeur != null) {
            $page = "directeur";
            $title = $directeur['directeurName'];
            $id = $directeur['directeurId'];
            return view("all", compact("page", "title", "id"));
        }
    }

    public function directeur_add() {
        $page = "directeur-add";
        $title = "Nouveau directeur";
        return view("all", compact("page", "title"));
    }


    public function services() {
        $page = "services";
        $title = "Les services";
        return view("all", compact("page", "title"));
    }

    public function service($serviceId) {
        $service = Service::where('serviceId', $serviceId)->first();
        if($service != null) {
            $page = "service";
            $title = $service['serviceName'];
            $id = $service['serviceId'];
            return view("all", compact("page", "title", "id"));
        }
    }

    public function service_add() {
        $page = "service-add";
        $title = "Nouveau service";
        return view("all", compact("page", "title"));
    }



    public function posts() {
        $page = "posts";
        $title = "Les actualités";
        return view("all", compact("page", "title"));
    }


    public function post_add() {
        $page = "post-add";
        $title = "Nouvelle actualité";
        return view("all", compact("page", "title"));
    }


    public function post($postSlug) {
        $post = Article::where('postSlug', $postSlug)->first();
        if($post != null) {
            $page = "post";
            $title = $post['postTitle'];
            $id = $post['postId'];
            return view("all", compact("page", "title", "id"));
        }
    }




    public function projects() {
        $page = "projects";
        $title = "Les réalisations";
        return view("all", compact("page", "title"));
    }

    public function project_add() {
        $page = "project-add";
        $title = "Nouvelle réalisation";
        return view("all", compact("page", "title"));
    }

    public function project($projectId) {
        $project = Reazisation::where('reazisationId', $projectId)->first();
        if($project != null) {
            $page = "project";
            $title = $project['reazisationName'];
            $id = $project['reazisationId'];
            return view("all", compact("page", "title", "id"));
        }
    }




    public function patners() {
        $page = "patners";
        $title = "Les parténaires";
        return view("all", compact("page", "title"));
    }

    public function patner_add() {
        $page = "patner-add";
        $title = "Nouveau parténaire";
        return view("all", compact("page", "title"));
    }

    public function patner($patnerId) {
        $patner = Patner::where('patnerId', $patnerId)->first();
        if($patner != null) {
            $page = "patner";
            $title = $patner['patnerName'];
            $id = $patner['patnerId'];
            return view("all", compact("page", "title", "id"));
        }
    }



    public function newsletters() {
        $page = "newsletters";
        $title = "Listes des abonnés";
        return view("all", compact("page", "title"));
    }




    public function teams() {
        $page = "teams";
        $title = "Les membres de l'équipe";
        return view("all", compact("page", "title"));
    }

    public function team_add() {
        $page = "team-add";
        $title = "Nouveau membre";
        return view("all", compact("page", "title"));
    }

    public function team($teamId) {
        $team = Team::where('teamId', $teamId)->first();
        if($team != null) {
            $page = "team";
            $title = $team['teamName'];
            $id = $team['teamId'];
            return view("all", compact("page", "title", "id"));
        }
    }
}
