<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CargaController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Livewire\ShoppingCart;
use App\Http\Livewire\CreateOrder;
use App\Http\Controllers\PromocionProductoController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\ComprobanteController;

use App\Http\Livewire\PaymentOrder;

use App\Http\Controllers\WebhooksController;
use App\Models\Comprobante;
use App\Models\Order;

Route::get('/', CargaController::class);

Route::get('/welcome', WelcomeController::class);

Route::get('search', SearchController::class)->name('search');

Route::get('categories/{category}', [CategoryController::class, 'show'])->name('categories.show');

Route::get('products/{product}', [ProductController::class, 'show'])->name('products.show');

Route::get('shopping-cart', ShoppingCart::class)->name('shopping-cart');

Route::middleware(['auth'])->group(function(){

    Route::get('orders', [OrderController::class, 'index'])->name('orders.index');

    Route::get('orders/create', CreateOrder::class)->name('orders.create');

    Route::get('orders/{order}', [OrderController::class, 'show'])->name('orders.show');

    Route::get('orders/{order}/payment', PaymentOrder::class)->name('orders.payment');

    Route::get('orders/{order}/pay', [OrderController::class, 'pay'])->name('orders.pay');

    Route::post('webhooks', WebhooksController::class);

});

Route::get('/promocion','App\Http\Controllers\PromocionProductoController@pagina');

Route::resource('/crud_noticias',NoticiaController::class);
Route::resource('/crud_promocion',PromocionProductoController::class);

Route::get('/comprobante',[ComprobanteController::class,'index'])->name('comprobantes.index');

Route::get('/linkstorage', function(){
    Artisan::call('storage:link');
});
//Reportes
Route::get('/pdforden/{id}', [App\Http\Controllers\PDFController::class, 'PDFOrden'])->name('descargarPDFOrden');
Route::get('generate-pdf', [App\Http\Controllers\PDFController::class, 'generatePDF'])->name('generate-pdf');