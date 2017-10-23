<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;

class AccountsController extends Controller
{
    public function index()
    {
        $accounts = Account::isActive();
        
        return view('account', compact('accounts'));
    }
}
