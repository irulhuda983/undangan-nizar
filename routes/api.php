<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ChatController;
use App\Http\Controllers\API\PresensiController;

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

// generate url dokumen
Route::get('upload/{pathA}/{pathB}/{pathC?}', function ($pathA, $pathB, $pathC = null) {
    $path = "{$pathA}/{$pathB}";
    if ($pathC !== null) $path .= "/{$pathC}";
    $mime = Storage::mimeType($path);
    $allowedMime = ['image/jpeg', 'image/png', 'image/gif', 'application/pdf', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/msword', 'application/vnd.ms-excel'];

    if (!in_array($mime, $allowedMime))
        return response()->json(['error' => 'Tidak terpenuhi.'], 400);
    else
        return response()->file(storage_path("app/{$path}"));
});
// end generate url dokumen

Route::post('issue-token', [AuthController::class, 'issueToken']);
Route::get('user-profil', [AuthController::class, 'getMe'])->middleware('auth:sanctum');
Route::post('revoke-token', [AuthController::class, 'revokeToken'])->middleware('auth:sanctum');

Route::prefix('chat')
->controller(ChatController::class)
->group(function() {
    Route::get('', 'index');
    Route::post('', 'store');
});

Route::prefix('presensi')
->controller(PresensiController::class)
->group(function() {
    Route::get('', 'index');
    Route::post('', 'store');
});

