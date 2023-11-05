<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    //
    
    public function index(){
        $transactions = Transaction::where('user_id', auth()->user()->id)->get();
        return view('transaction.index', ['transactions' => $transactions]);
    }


    public function create(){
        return view('transaction.create');
    }

    public function store(Request $request)
{
    $user = auth()->user();

    Transaction::create([
        'user_id' => $user->id,
        'amount' => $request->input('amount'),
        'description' => $request->input('description'),
    ]);

    return redirect()->route('transaction.index');
}

public function getTransactionHistory()
{
    $transactions = Transaction::orderBy('created_at', 'desc')->get();
    return view('dashboard', compact('transactions'));
}
}



// public function show(Post $post){
//         return view('posts.show', [
//            'post' => $post
//         ]);
//     }