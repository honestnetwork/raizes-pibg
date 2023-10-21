<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\PessoaController;
use App\Http\controllers\PgmController;
use App\Http\controllers\RdController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('Bairros', BairroController::class);
Route::resource('Cidades', CidadeController::class);
Route::resource('Decisoes', DecisaoController::class);
Route::resource('Estados', EstadoController::class);
Route::resource('EstadosPgms', EstadoPgmController::class);
Route::resource('EstadosRelacionamentos', EstadoRelacionamentoController::class);
Route::resource('Livros', LivroController::class);
Route::resource('ParticipantesPgm', ParticipantePgmController::class);
Route::resource('Pessoas', PessoaController::class);
Route::resource('PessoasRd', PessoaRdController::class);
Route::resource('PGMs', PgmController::class);
Route::resource('RelacionamentosDiscipladores', RelacionamentoDiscipladorController::class);
Route::resource('SituacoesPessoas', SituacaoPessoaController::class);
Route::resource('SupervisoesPgms', SupervisaoPgmController::class);
Route::resource('TiposDecisoes', TipoDecisaoController::class);
Route::resource('TiposPessoas', TipoPessoaController::class);
Route::resource('TiposRelacionamentos', TipoRelacionamentoController::class);


