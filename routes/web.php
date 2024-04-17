<?php

use App\Http\Controllers\EventoController;
use App\Http\Controllers\ExportController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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
Auth::routes();

Route::get('/index', function () {
    return view('index');
});
Route::get('/contact-page', function () {
    return view('contact-page');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

Route::middleware('auth')->group(function (){

    Route::get('/home', function () {
        return view('home');
    });

    Route::get('/dashboard-alternate', function () {
        return view('dashboard-alternate');
    });
    /*App*/
    Route::get('/app-emailbox', function () {
        return view('app-emailbox');
    });
    Route::get('/app-emailread', function () {
        return view('app-emailread');
    });
    Route::get('/app-chat-box', function () {
        return view('app-chat-box');
    });
    Route::get('/app-file-manager', function () {
        return view('app-file-manager');
    });
    Route::get('/app-contact-list', function () {
        return view('app-contact-list');
    });
    Route::get('/app-to-do', function () {
        return view('app-to-do');
    });
    Route::get('/app-invoice', function () {
        return view('app-invoice');
    });
    Route::get('/app-fullcalender', function () {
        return view('app-fullcalender');
    });
    Route::get('/settlement-calculator', function () {
        return view('settlement-calculator');
    });
    /*Charts*/
    Route::get('/charts-apex-chart', function () {
        return view('charts-apex-chart');
    });
    Route::get('/charts-chartjs', function () {
        return view('charts-chartjs');
    });
    Route::get('/charts-highcharts', function () {
        return view('charts-highcharts');
    });
    /*ecommerce*/
    Route::get('/ecommerce-products', function () {
        return view('ecommerce-products');
    });
    Route::get('/ecommerce-products-details', function () {
        return view('ecommerce-products-details');
    });
    Route::get('/ecommerce-add-new-products', function () {
        return view('ecommerce-add-new-products');
    });
    Route::get('/ecommerce-orders', function () {
        return view('ecommerce-orders');
    });

    /*Components*/
    Route::get('/widgets', function () {
        return view('widgets');
    });
    Route::get('/component-alerts', function () {
        return view('component-alerts');
    });
    Route::get('/component-accordions', function () {
        return view('component-accordions');
    });
    Route::get('/component-badges', function () {
        return view('component-badges');
    });
    Route::get('/component-buttons', function () {
        return view('component-buttons');
    });
    Route::get('/component-cards', function () {
        return view('component-cards');
    });
    Route::get('/component-carousels', function () {
        return view('component-carousels');
    });
    Route::get('/component-list-groups', function () {
        return view('component-list-groups');
    });
    Route::get('/component-media-object', function () {
        return view('component-media-object');
    });
    Route::get('/component-modals', function () {
        return view('component-modals');
    });
    Route::get('/component-navs-tabs', function () {
        return view('component-navs-tabs');
    });
    Route::get('/component-navbar', function () {
        return view('component-navbar');
    });
    Route::get('/component-paginations', function () {
        return view('component-paginations');
    });
    Route::get('/component-popovers-tooltips', function () {
        return view('component-popovers-tooltips');
    });
    Route::get('/component-progress-bars', function () {
        return view('component-progress-bars');
    });
    Route::get('/component-spinners', function () {
        return view('component-spinners');
    });
    Route::get('/component-notifications', function () {
        return view('component-notifications');
    });
    Route::get('/component-avtars-chips', function () {
        return view('component-avtars-chips');
    });
    /*Content*/
    Route::get('/content-grid-system', function () {
        return view('content-grid-system');
    });
    Route::get('/content-typography', function () {
        return view('content-typography');
    });
    Route::get('/content-text-utilities', function () {
        return view('content-text-utilities');
    });
    /*Icons*/
    Route::get('/icons-line-icons', function () {
        return view('icons-line-icons');
    });
    Route::get('/icons-boxicons', function () {
        return view('icons-boxicons');
    });
    Route::get('/icons-feather-icons', function () {
        return view('icons-feather-icons');
    });
    /*Authentication*/
    Route::get('/authentication-signup', function () {
        return view('authentication-signup');
    });
    Route::get('/authentication-signin-with-header-footer', function () {
        return view('authentication-signin-with-header-footer');
    });
    Route::get('/authentication-signup-with-header-footer', function () {
        return view('authentication-signup-with-header-footer');
    });
    Route::get('/authentication-forgot-password', function () {
        return view('authentication-forgot-password');
    });
    Route::get('/authentication-reset-password', function () {
        return view('authentication-reset-password');
    });
    Route::get('/authentication-lock-screen', function () {
        return view('authentication-lock-screen');
    });
    /*Table*/
    Route::get('/table-basic-table', function () {
        return view('table-basic-table');
    });
    Route::get('/table-datatable-clientes', function () {
        return view('table-datatable-customers');
    });
    Route::get('/table-datatable-facturas-emitidas', function () {
        return view('table-datatable-bills');
    });
    Route::get('/table-datatable-empleados', function () {
        return view('table-datatable-employees');
    });
    Route::get('/table-datatable-gastos', function () {
        return view('table-datatable-expenses');
    });
    Route::get('/table-datatable-inventario', function () {
        return view('table-datatable-inventory');
    });
    Route::get('/table-datatable-proyectos', function () {
        return view('table-datatable-projects');
    });

    Route::get('/table-datatable-proveedores', function () {
        return view('table-datatable-suppliers');
    });
    Route::get('/table-dataBackup', function () {
        return view('table-dataBackup');
    });
    /* Delete*/
    Route::get('/delete-customer', function () {
        return view('delete-customer');
    });
    Route::get('/delete-bill', function () {
        return view('delete-bill');
    });
    Route::get('/delete-project', function () {
        return view('delete-project');
    });
    Route::get('/delete-employee', function () {
        return view('delete-employee');
    });
    Route::get('/delete-supplier', function () {
        return view('delete-supplier');
    });
    Route::get('/delete-inventory', function () {
        return view('delete-inventory');
    });
    /*Pages*/

    Route::get('/user-profile', function () {
        return view('user-profile');
    });
    Route::get('/timeline', function () {
        return view('timeline');
    });
    Route::get('/pricing-table', function () {
        return view('pricing-table');
    });
    Route::get('/errors-404-error', function () {
        return view('errors-404-error');
    });
    Route::get('/errors-500-error', function () {
        return view('errors-500-error');
    });
    Route::get('/errors-coming-soon', function () {
        return view('errors-coming-soon');
    });
    Route::get('/error-blank-page', function () {
        return view('error-blank-page');
    });
    Route::get('/faq', function () {
        return view('faq');
    });
    /*Forms*/
    Route::get('/form-elements', function () {
        return view('form-elements');
    });

    Route::get('/form-input-group', function () {
        return view('form-input-group');
    });
    Route::get('/form-layouts', function () {
        return view('form-layouts');
    });
    Route::get('/form-validations', function () {
        return view('form-validations');
    });
    Route::get('/form-wizard', function () {
        return view('form-wizard');
    });
    Route::get('/form-text-editor', function () {
        return view('form-text-editor');
    });
    Route::get('/form-file-upload', function () {
        return view('form-file-upload');
    });
    Route::get('/form-date-time-pickes', function () {
        return view('form-date-time-pickes');
    });
    Route::get('/form-select2', function () {
        return view('form-select2');
    });
    Route::get('/register-project', function () {
        return view('register-project');
    });
    Route::get('/register-inventory', function () {
        return view('register-inventory');
    });
    Route::get('/register-customer', function () {
        return view('register-customer');
    });
    Route::get('/register-employee', function () {
        return view('register-employee');
    });
    Route::get('/register-expense', function () {
        return view('register-expense');
    });
    Route::get('/register-samaguUser', function () {
        return view('register-samaguUser');
    });
    Route::get('/register-supplier', function () {
        return view('register-supplier');
    });
    Route::get('/register-bill', function () {
        return view('register-bill');
    });
//modifiers
    Route::get('/modify-inventory', function () {
        return view('modify-inventory');
    });
    Route::get('/modify-project', function () {
        return view('modify-project');
    });
    Route::get('/modify-customer', function () {
        return view('modify-customer');
    });
    Route::get('/modify-employee', function () {
        return view('modify-employee');
    });
    Route::get('/modify-expense', function () {
        return view('modify-expense');
    });
    Route::get('/modify-samaguUser', function () {
        return view('modify-samaguUser');
    });
    Route::get('/modify-supplier', function () {
        return view('modify-supplier');
    });
    Route::get('/modify-bill', function () {
        return view('modify-bill');
    });
    /*Maps*/
    Route::get('/map-google-maps', function () {
        return view('map-google-maps');
    });
    Route::get('/map-vector-maps', function () {
        return view('map-vector-maps');
    });
    Route::get('/downloads', function () {
        return view('downloads');
    });
    Route::get('/earnings', function () {
        return view('earnings');
    });
    /*Un-found*/
    Route::get('/test/content-grid-system', function () {
        return view('test/content-grid-system');
    });

//**************************Auth ROUTES**************************//

    Route::get('/user-profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('auth.profile');

//***************************CALENDAR****************************//
    Route::get('calendar/index', [App\Http\Controllers\CalendarController::class, 'index'])->name('calendar.index');
    Route::post('calendar', [App\Http\Controllers\CalendarController::class, 'store'])->name('calendar.store');
    Route::patch('calendar/update/{id}', [App\Http\Controllers\CalendarController::class, 'update'])->name('calendar.update');
    Route::delete('calendar/destroy/{id}', [App\Http\Controllers\CalendarController::class, 'destroy'])->name('calendar.destroy');

//**************************USER ROUTES**************************//

    Route::get('/table-datatable-samaguUsers', [App\Http\Controllers\UserController::class, 'datatable'])->name('user.datatable');

    Route::get('/register-samaguUser/create', [App\Http\Controllers\UserController::class, 'create'])->name('user.create');

    Route::post('/register-samaguUser', [App\Http\Controllers\UserController::class, 'store'])->name('user.store');

    Route::get('/table-datatable-samaguUsers/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');

    Route::delete('/table-datatable-samaguUsers/{user}/destroy', [App\Http\Controllers\UserController::class, 'destroy'])->name('user.destroy');

    Route::patch('/table-datatable-samaguUsers/{user}/update', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');

    Route::get('/user-profile/{user}/reset-password', [App\Http\Controllers\UserController::class, 'changePassword'])->name('user.changePassword');

    Route::patch('/user-profile/{user}/update-password', [App\Http\Controllers\UserController::class, 'updatePassword'])->name('user.updatePassword');

    Route::get('/user-profile/{user}/update-password', [App\Http\Controllers\UserController::class, 'updatePassword'])->name('user.updatePassword');


//**************************EMPLOYEE ROUTES**************************//

    Route::get('/table-datatable-employees', [App\Http\Controllers\EmployeeController::class, 'datatable'])->name('employee.datatable');

    Route::get('/register-employee/create', [App\Http\Controllers\EmployeeController::class, 'create'])->name('employee.create');

    Route::post('/register-employee', [App\Http\Controllers\EmployeeController::class, 'store'])->name('employee.store');

    Route::get('/table-datatable-employees/{employee}/edit', [App\Http\Controllers\EmployeeController::class, 'edit'])->name('employee.edit');

    Route::delete('/table-datatable-employees/{employee}/destroy', [App\Http\Controllers\EmployeeController::class, 'destroy'])->name('employee.destroy');

    Route::patch('/table-datatable-employees/{employee}/update', [App\Http\Controllers\EmployeeController::class, 'update'])->name('employee.update');


//**************************Supplier ROUTES**************************//

    Route::get('/table-datatable-suppliers', [App\Http\Controllers\SupplierController::class, 'datatable'])->name('supplier.datatable');

    Route::get('/register-supplier/create', [App\Http\Controllers\SupplierController::class, 'create'])->name('supplier.create');

    Route::post('/register-supplier', [App\Http\Controllers\SupplierController::class, 'store'])->name('supplier.store');

    Route::get('/table-datatable-suppliers/{supplier}/edit', [App\Http\Controllers\SupplierController::class, 'edit'])->name('supplier.edit');

    Route::delete('/table-datatable-suppliers/{supplier}/destroy', [App\Http\Controllers\SupplierController::class, 'destroy'])->name('supplier.destroy');

    Route::patch('/table-datatable-suppliers/{supplier}/update', [App\Http\Controllers\SupplierController::class, 'update'])->name('supplier.update');

//**************************Customers ROUTES**************************//

    Route::get('/table-datatable-customers', [App\Http\Controllers\CustomerController::class, 'datatable'])->name('customer.datatable');

    Route::get('/register-customer/create', [App\Http\Controllers\CustomerController::class, 'create'])->name('customer.create');

    Route::post('/register-customer', [App\Http\Controllers\CustomerController::class, 'store'])->name('customer.store');

    Route::get('/table-datatable-custumers/{customer}/edit', [App\Http\Controllers\CustomerController::class, 'edit'])->name('customer.edit');

    Route::delete('/table-datatable-custumers/{customer}/destroy', [App\Http\Controllers\CustomerController::class, 'destroy'])->name('customer.destroy');

    Route::patch('/table-datatable-custumers/{customer}/update', [App\Http\Controllers\CustomerController::class, 'update'])->name('customer.update');

//**************************Inventory ROUTES**************************//
//
    Route::get('/table-datatable-inventory', [App\Http\Controllers\InventoryController::class, 'datatable'])->name('inventory.datatable');

    Route::get('/register-inventory/create', [App\Http\Controllers\InventoryController::class, 'create'])->name('inventory.create');

    Route::post('/register-inventory', [App\Http\Controllers\InventoryController::class, 'store'])->name('inventory.store');

    Route::get('/table-datatable-inventory/{inventory}/edit', [App\Http\Controllers\InventoryController::class, 'edit'])->name('inventory.edit');

    Route::delete('/table-datatable-inventory/{inventory}/destroy', [App\Http\Controllers\InventoryController::class, 'destroy'])->name('inventory.destroy');

    Route::patch('/table-datatable-inventory/{inventory}/update', [App\Http\Controllers\InventoryController::class, 'update'])->name('inventory.update');

//**************************Bills ROUTES**************************//

    Route::get('/table-datatable-bills', [App\Http\Controllers\BillController::class, 'datatable'])->name('bill.datatable');

    Route::get('/register-bill/create', [App\Http\Controllers\BillController::class, 'create'])->name('bill.create');

    Route::post('/register-bill', [App\Http\Controllers\BillController::class, 'store'])->name('bill.store');

    Route::get('/table-datatable-bills/{bill}/edit', [App\Http\Controllers\BillController::class, 'edit'])->name('bill.edit');

    Route::delete('/table-datatable-bills/{bill}/destroy', [App\Http\Controllers\BillController::class, 'destroy'])->name('bill.destroy');

    Route::patch('/table-datatable-bills/{bill}/update', [App\Http\Controllers\BillController::class, 'update'])->name('bill.update');

//***********************Project Routes************************************* */
    Route::get('/table-datatable-projects', [App\Http\Controllers\ProjectController::class, 'datatable'])->name('project.datatable');

    Route::get('/register-project/create', [App\Http\Controllers\ProjectController::class, 'create'])->name('project.create');

    Route::post('/register-project', [App\Http\Controllers\ProjectController::class, 'store'])->name('project.store');

    Route::get('/table-datatable-project/{project}/edit', [App\Http\Controllers\ProjectController::class, 'edit'])->name('project.edit');

    Route::delete('/table-datatable-project/{project}/destroy', [App\Http\Controllers\ProjectController::class, 'destroy'])->name('project.destroy');

    Route::patch('/table-datatable-project/{project}/update', [App\Http\Controllers\ProjectController::class, 'update'])->name('project.update');

//**************************USER ROUTES**************************//

    Route::get('/table-datatable-expenses', [App\Http\Controllers\ExpenseController::class, 'datatable'])->name('expense.datatable');

    Route::get('/register-expense/create', [App\Http\Controllers\ExpenseController::class, 'create'])->name('expense.create');

    Route::post('/register-expense', [App\Http\Controllers\ExpenseController::class, 'store'])->name('expense.store');

    Route::get('/table-datatable-expenses/{expense}/edit', [App\Http\Controllers\ExpenseController::class, 'edit'])->name('expense.edit');

    Route::delete('/table-datatable-expenses/{expense}/destroy', [App\Http\Controllers\ExpenseController::class, 'destroy'])->name('expense.destroy');

    Route::patch('/table-datatable-expenses/{expense}/update', [App\Http\Controllers\ExpenseController::class, 'update'])->name('expense.update');


//**************************DOWNLOAD ROUTE**************************//

    Route::get('download',[ExportController::class, 'download'])->name('download');
    Route::get('/settlement-calculator',[ExportController::class, 'index'])->name('calculator');
    Route::get('/table-dataBackup',[ExportController::class, 'databackup'])->name('databackup');

});
