<?php

namespace App\Http\Controllers;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    //
    public function index()
    {
        $transactions = Transaction::all();
        return view('transactions.index', compact('transactions'));
    }
    public function create()
    {
        return view('transactions.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'employee_name' => 'required|string|max:255',
            'sender_name' => 'required|string|max:255',
            'receiver_name' => 'required|string|max:255',
            'sender_account' => 'required|string|max:255',
            'receiver_account' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0.01',
        ]); 

        Transaction::create($request->all());
        return redirect()->route('transactions.index')->with('success', 'Transaction added successfully.');
    }
    public function edit($id)
    {
        $transaction = Transaction::findOrFail($id);
        return view('transactions.edit', compact('transaction'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'employee_name' => 'required|string|max:255',
            'sender_name' => 'required|string|max:255',
            'receiver_name' => 'required|string|max:255',
            'sender_account' => 'required|string|max:255',
            'receiver_account' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0.01',
        ]);

        $transaction = Transaction::findOrFail($id);
        $transaction->update($request->all());
        return redirect()->route('transactions.index')->with('success', 'Transaction updated successfully.');
    }
    public function destroy($id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->delete();
        return redirect()->route('transactions.index')->with('success', 'Transaction deleted successfully.');
    }
}
