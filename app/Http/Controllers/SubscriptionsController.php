<?php

namespace App\Http\Controllers;


use DB;
use App\Model\User;
use Illuminate\Http\Request;

class SubscriptionsController extends Controller
{
    public function store(Billable $billable) {

        DB::transaction( function() use ($billable) {
            $customer = $billable->createCustomer('token');

            $user = User::register('yasaysa');
        });
    }
}
