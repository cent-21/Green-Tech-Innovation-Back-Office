<?php

namespace App\Http\Controllers;


use App\Models\Article;
use App\Models\Directeur;
use App\Models\Newsletter;
use App\Models\Patner;
use App\Models\Reazisation;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Team;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{

    public function posts() {
        $posts = Article::where('status', 1)->get();

        return response()->json([
            "posts" => $posts
        ], 200);
    }


    public function post($postSlug) {
        $post = Article::where('status', 1)->where("postSlug", $postSlug)->first();

        return response()->json([
            "found" => ($post != null),
            "post" => $post
        ], 200);
    }


    public function projects() {
        $projects = Reazisation::where('status', 1)->get();

        return response()->json([
            "projects" => $projects
        ], 200);
    }


    public function project(Request $request) {
        $project = Reazisation::where('status', 1)->where("reazisationId", $request->projectId)->first();

        return response()->json([
            "found" => ($project != null),
            "project" => $project
        ], 200);
    }


    public function directeurs() {
        $directeurs = Directeur::all();

        return response()->json([
            "directeurs" => $directeurs
        ], 200);
    }


    public function patners() {
        $patners = Patner::all();

        return response()->json([
            "patners" => $patners
        ], 200);
    }


    public function services() {
        $services = Service::all();

        return response()->json([
            "services" => $services
        ], 200);
    }


    public function service(Request $request) {
        $service = Service::where('serviceId', $request->serviceId)->first();

        return response()->json([
            "found" => ($service != null),
            "service" => $service
        ], 200);
    }


    public function teams() {
        $teamGroups = DB::table('teams')->join('directions', 'teams.directionId', '=', 'directions.directionId')->groupBy("teams.directionId")->get();

        $teams = array();

        foreach($teamGroups as $teamGroup) {
            $list = Team::where("directionId", $teamGroup->directionId)->get();
            $teamGroup = ["name" => $teamGroup->directionName, "list" => $list];

            array_push($teams, $teamGroup);
        }

        return response()->json([
            "teams" => $teams
        ], 200);
    }

    public function team(Request $request) {
        $team = Team::where('teamId', $request->teamId)->first();

        return response()->json([
            "found" => ($team != null),
            "team" => $team
        ], 200);
    }

    public function add_newsletter(Request $request) {
        $has = false;
        if(Newsletter::where('email', $request->email)->count() === 0) {
            Newsletter::create(['email' => $request->email, "name" => $request->name]);
            $has = true;
        }

        return response()->json([
            "save" => $has
        ]);
    }
}
