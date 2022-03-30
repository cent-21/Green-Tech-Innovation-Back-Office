<?php


use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('contact', [ApiController::class, 'contact']);

Route::get('projects', [ApiController::class, 'projects']);

Route::get('project/{projectId}', [ApiController::class, 'project']);

Route::get('directeurs', [ApiController::class, 'directeurs']);

Route::get('posts', [ApiController::class, 'posts']);

Route::get('post/{postSlug}', [ApiController::class, 'post']);

Route::get('teams', [ApiController::class, 'teams']);

Route::get('team/{teamId}', [ApiController::class, 'team']);

Route::get('patners', [ApiController::class, 'patners']);

Route::get('services', [ApiController::class, 'services']);

Route::get('service/{serviceId}', [ApiController::class, 'service']);

Route::get('post/{postSlug}', [ApiController::class, 'post']);

Route::post("add_newsletter", [ApiController::class, "add_newsletter"]);
