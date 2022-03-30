<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MainController::class, 'login'])->name('login');

Route::get('/disconnect', [DashboardController::class, 'disconnect'])->name('disconnect');


Route::get('/posts', [DashboardController::class, 'posts'])->name('posts');

Route::get('/post-add', [DashboardController::class, 'post_add'])->name('post-add');

Route::get('/post/{postSlug}', [DashboardController::class, 'post'])->name('post');



Route::get('/projects', [DashboardController::class, 'projects'])->name('projects');

Route::get('/project/{projectId}', [DashboardController::class, 'project'])->name('project');

Route::get('/project-add', [DashboardController::class, 'project_add'])->name('project-add');


Route::get('/patners', [DashboardController::class, 'patners'])->name('patners');

Route::get('/patner/{patnerId}', [DashboardController::class, 'patner'])->name('patner');

Route::get('/patner-add', [DashboardController::class, 'patner_add'])->name('patner-add');


Route::get('/teams', [DashboardController::class, 'teams'])->name('teams');

Route::get('/team/{teamId}', [DashboardController::class, 'team'])->name('team');

Route::get('/team-add', [DashboardController::class, 'team_add'])->name('team-add');


Route::get('/directeurs', [DashboardController::class, 'directeurs'])->name('directeurs');

Route::get('/directeur-add', [DashboardController::class, 'directeur_add'])->name('directeur-add');

Route::get('/directeur/{directeurId}', [DashboardController::class, 'directeur'])->name('directeur');


Route::get('/services', [DashboardController::class, 'services'])->name('services');

Route::get('/service-add', [DashboardController::class, 'service_add'])->name('service-add');

Route::get('/service/{serviceId}', [DashboardController::class, 'service'])->name('service');


Route::get('/newsletters', [DashboardController::class, 'newsletters'])->name('newsletters');


Route::get('/directories', [DashboardController::class, 'directories'])->name('directories');

Route::get('/directory/{directoryUrl}', [DashboardController::class, 'directory'])->name('directory');
