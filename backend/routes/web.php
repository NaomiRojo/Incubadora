use Illuminate\Support\Facades\Route;

Route::get('/ayuda', function () {
    return view('ayuda.code'); 
});