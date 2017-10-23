<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
// use App\Post;  

class AccountsController extends Controller
{
    public function index()
    {
        $accounts = Account::isActive();
        
        return view('account', compact('accounts'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {

        $fname = $request->fname;
        $lname = $request->lname;
        $email = $request->email;
        $ati = $request->ati;
        $active = $request->active;

        $accounts = new Account;
        $accounts->first_name = $fname;
        $accounts->last_name = $lname;
        $accounts->email = $email;
        $accounts->account_type_id = $ati;
        $accounts->active = $active;

        $accounts->save();

        return redirect('/');
    }
}
