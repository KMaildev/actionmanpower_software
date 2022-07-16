<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes(['register' => false]);
Route::middleware('auth')->group(function () {
    Route::get('/home', 'DashboardController@index')->name('home');

    Route::resource('department', 'DepartmentController');
    Route::resource('employee', 'EmployeeController');

    Route::resource('passport', 'PassportController');
    Route::post('passport_import', 'PassportController@passport_import')->name('passport_import');
    Route::get('passport_export', 'PassportController@passport_export')->name('passport_export');
    Route::get('passport_detail_export/{id}', array('as' => 'passport_detail_export', 'uses' => 'PassportController@passport_detail_export'));

    Route::resource('enquiry', 'EnquiryController');
    Route::post('enquiry_passport_import', 'EnquiryController@enquiry_passport_import')->name('enquiry_passport_import');


    Route::resource('owic', 'OwicController');
    Route::resource('reject', 'RejectController');
    Route::get('reject_passport_export', 'RejectController@reject_passport_export')->name('reject_passport_export');

    Route::resource('passport_leave', 'PassportLeaveController');

    Route::resource('new_demand', 'NewDemandController');
    Route::resource('old_demand', 'OldDemandController');
    Route::get('new_demand_export', 'NewDemandController@new_demand_export')->name('new_demand_export');

    Route::resource('contract', 'ContractController');
    Route::get('create_contract/{id}', array('as' => 'create_contract', 'uses' => 'ContractController@create'));

    Route::resource('sending', 'SendingController');
    Route::get('create_sending/{id}', array('as' => 'create_sending', 'uses' => 'SendingController@create'));

    Route::resource('overseas_agent', 'OverseasAgentController');
    Route::get('overseas_agent_ajax/{id}', array('as' => 'overseas_agent_ajax', 'uses' => 'OverseasAgentController@dependentAjax'));
    Route::get('overseas_agent_get_ajax/{id}', array('as' => 'overseas_agent_get_ajax', 'uses' => 'OverseasAgentController@findOverseaAgentAjax'));

    Route::resource('country', 'CountryController');

    Route::resource('labour_management', 'LabourManagementController');
    Route::get('add_labour/{id}', array('as' => 'add_labour', 'uses' => 'LabourManagementController@create'));
    Route::get('view_contract_labour/{id}', array('as' => 'view_contract_labour', 'uses' => 'LabourManagementController@view_contract_labour'));
    Route::get('store_labour', array('as' => 'store_labour', 'uses' => 'LabourManagementController@store_labour'));
    Route::get('delete_labour/{id}', array('as' => 'delete_labour', 'uses' => 'LabourManagementController@delete_labour'));
    Route::get('export_contract_labour/{id}', array('as' => 'export_contract_labour', 'uses' => 'LabourManagementController@export_contract_labour'));

    Route::view('/file_manager', 'file_manager.index')->name('file_manager.index');
    Route::resource('activity', 'Activity\ActivityLogController');

    Route::resource('permission', 'PermissionController');
    Route::resource('role', 'RoleController');
});
