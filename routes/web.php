<?php

use App\Http\Controllers\NoticeController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\PlanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\landing\IndexController;
use App\Http\Controllers\LocationCategoryController;


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

Route::get('/', [IndexController::class, 'index'])->name('index'); // get index 

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    // Dashboard
    Route::get('/dashboard',[IndexController::class,'count'] )->name('dashboard');
    
    // Property
    Route::get('/property', function () {
        return view('property');
    })->name('property');
    Route::get('/object-ui', function (){
        return view('object-ui');
    })->name('property.ui');

    Route::get('/property/{id}', [PropertyController::class, 'get_property_by_id'])->name('property.profile');
    Route::get('/property_create', [PropertyController::class, 'create'])->name('property.create');
    Route::get('/property-list',[PropertyController::class, 'index'])->name('property.list');
    Route::get('/property/delete/{id}',[PropertyController::class, 'delete'])->name('property.detele');
    Route::get('/property/edit/{id}',[PropertyController::class, 'edit'])->name('property.edit');
    Route::post('property_update', [PropertyController::class, 'update'])->name('property.update');
    
    // Tenant
    Route::get('/tenant', function () {
        return view('tenant');
    })->name('tenant');

    Route::get('/tenant-list',[TenantController::class, 'index'])->name('tenant.list');
    Route::get('/tenant-ui',[PropertyController::class, 'getAllProperty'])->name('tenant.create');
    Route::get('/tenant/profile/{id}', [TenantController::class, 'get'])->name('tenant-profile');
    Route::get('/tenant/{id}', [TenantController::class, 'delete'])->name('tenant.delete');
    Route::get('/tenant/edit/{id}', [TenantController::class, 'edit_get'])->name('tenant.edit.get');
    Route::post('tenant_update', [TenantController::class, 'tenant_update'])->name('tenant.update');
    Route::get('/tenant_create', [TenantController::class, 'create'])->name('create_tenant');

    // Notice
    Route::post('notice',[NoticeController::class,'create'])->name('notice.create');
    Route::get('/income',[IndexController::class,'test_val'])->name('notice.test');

    // Contract
    Route::get('/contract',[IndexController::class,'contract'])->name('contract');

    // Calculator
    Route::get('/calculator', function () {
        return view('calculator');
    })->name('calculator');

    // Checklists
    Route::get('/bank-checklist', function () {
        return view('bank-checklist');
    })->name('bank.checklist');
    
    Route::get('/on-site-inspection', function () {
        return view('on-site-inspection');
    })->name('on.site.inspection');
    
    Route::get('/on-site-inspection-two', function () {
        return view('on-site-inspection-two');
    })->name('on.site.inspection.two');
    
    Route::get('/zv-detailliste', function () {
        return view('zv-detailliste');
    })->name('zv.detailliste');
    
    // Settings
    Route::get('/main-settings', function () {
        return view('main-settings');
    })->name('main.settings');

    // PDF
    Route::get('/get_pdf/{id}', [PdfController::class, 'get_property'])->name('pdf');
    Route::get('/download_pdf/{id}', [PdfController::class, 'pdf'])->name('pdf_download');

    // Price Atlas
    Route::get('/price', function (){
        return view('atlesMap');
    })->middleware(['auth:sanctum', 'verified'])->name('price');
    Route::get('/atles', function (){
        return view('priceatles');
    })->middleware(['auth:sanctum', 'verified'])->name('atles');
    Route::get('/map', function (){
        return view('newmap');
    })->middleware(['auth:sanctum', 'verified'])->name('map');

    // Location Score
    Route::get('/score', function (){
        return view('location');
    })->middleware(['auth:sanctum', 'verified'])->name('locaton');

    // Subscription
    Route::get('/subscribe', [PlanController::class, 'index'])->name('subscribe');
    Route::post('/subscribe/process', [PlanController::class, 'store'])->name('subscribe.process');
});

//Route::get('/dashboard', [IndexController::class,'count']);


//Object UI


Route::get('/test', [LocationCategoryController::class, 'get_score'])->middleware(['auth:sanctum', 'verified'])->name('test');

Route::get('/api/place/{place}', [LocationCategoryController::class, 'score_api'])->name('api');
Route::get('/api/token', [LocationCategoryController::class, 'create_json'])->name('create_json');
Route::get('/api/location', [LocationCategoryController::class, 'api_score'])->name('test');
#Route::post('/test', [LocationCategoryController::class, 'get_score'])->middleware(['auth:sanctum', 'verified'])->name('test');
Route::get('/api/loc', [LocationCategoryController::class, 'api'])->name('test123');
Route::get('/api/get_5_loc',[IndexController::class, 'get_5_loc']);
//Route::get('/api/loc', [LocationCategoryController::class, 'test'])->name('test123');

