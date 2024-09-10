<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LostObjectController;
  
//estamos adicionando um metodo get onde ostra a lista ou a visualização dos objetos perdidos.
// e um metodo post Adiciona um novo objeto perdido à base de dados 
Route::get('/lost-objects',
[LostObjectController::class,'index']); 
Route::post('/lost-objects',
[LostObjectController::class,'store']);