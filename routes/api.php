<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/auth/register', function(Request $r){
    $r->validate([
        'name'=>'required',
        'email'=>'required|email|unique:users',
        'password'=>'required|min:6'
    ]);
    $u = User::create([
        'name'=>$r->name,
        'email'=>$r->email,
        'password'=>bcrypt($r->password),
    ]);
    return ['token' => $u->createToken('api')->plainTextToken];
});

Route::post('/auth/login', function(Request $r){
    $r->validate(['email'=>'required|email','password'=>'required']);
    $u = User::where('email',$r->email)->first();
    if(!$u || !Hash::check($r->password,$u->password)){
        return response()->json(['error'=>'Invalid credentials'], 401);
    }
    return ['token'=>$u->createToken('api')->plainTextToken];
});


Route::middleware('auth:sanctum')->get('/user', fn(Request $r)=>$r->user());
Route::post('/auth/login', function(Request $r){
    $r->validate(['email'=>'required|email','password'=>'required']);
    $u = User::where('email',$r->email)->first();
    if(!$u || !Hash::check($r->password,$u->password)){
        return response()->json(['error'=>'Invalid credentials'], 401);
    }
    return ['token'=>$u->createToken('api')->plainTextToken];
});

Route::middleware('auth:sanctum')->get('/user', fn(Request $r)=>$r->user());
Route::post('/auth/login', function(Request $r){
    $r->validate(['email'=>'required|email','password'=>'required']);
    $u = User::where('email',$r->email)->first();
    if(!$u || !Hash::check($r->password,$u->password)){
        return response()->json(['error'=>'Invalid credentials'], 401);
    }
    return ['token'=>$u->createToken('api')->plainTextToken];
});

Route::middleware('auth:sanctum')->get('/user', fn(Request $r)=>$r->user());
Route::post('/auth/login', function(Request $r){
    $r->validate(['email'=>'required|email','password'=>'required']);
    $u = User::where('email',$r->email)->first();
    if(!$u || !Hash::check($r->password,$u->password)){
        return response()->json(['error'=>'Invalid credentials'], 401);
    }
    return ['token'=>$u->createToken('api')->plainTextToken];
});

Route::middleware('auth:sanctum')->get('/user', fn(Request $r)=>$r->user());
Route::post('/auth/login', function(Request $r){
    $r->validate(['email'=>'required|email','password'=>'required']);
    $u = User::where('email',$r->email)->first();
    if(!$u || !Hash::check($r->password,$u->password)){
        return response()->json(['error'=>'Invalid credentials'], 401);
    }
    return ['token'=>$u->createToken('api')->plainTextToken];
});

Route::middleware('auth:sanctum')->get('/user', fn(Request $r)=>$r->user());
Route::post('/auth/login', function(Request $r){
    $r->validate(['email'=>'required|email','password'=>'required']);
    $u = User::where('email',$r->email)->first();
    if(!$u || !Hash::check($r->password,$u->password)){
        return response()->json(['error'=>'Invalid credentials'], 401);
    }
    return ['token'=>$u->createToken('api')->plainTextToken];
});

Route::middleware('auth:sanctum')->get('/user', fn(Request $r)=>$r->user());

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



















