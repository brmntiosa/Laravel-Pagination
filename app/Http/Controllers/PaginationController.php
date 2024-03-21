<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PaginationController extends Controller
{
    public function index(Request $request)
    {
        $users = User::filterUsers(['name' => $request['name'], 'email' => $request['email'], 'date' => $request['date']])->paginate(20);
        return view('paginations.index', [
            'users' => $users
        ]);
    }
}
