<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tool;
use App\Models\Transaction;
use App\Models\User;

class TransactionController extends Controller
{
    public function TransactionView(){
        $data['allData'] = Transaction::all();
        return view('transaction.view_transaction', $data);
    }

    public function TransactionAdd(){
        $data['allData'] = Transaction::all();
        $data['tools'] = Tool::all();
        $data['users'] = User::all();
        return view('transaction.add_transaction', $data);
    }

    public function TransactionStore(Request $request){
      
        $data = new Transaction();
        $data->tool_id = $request->tool_id;
        $data->user_id = $request->user_id;
        $data->transaction_type = $request->transaction_type;
        $data->quantity = $request->quantity;
        $data->transaction_date = $request->transaction_date;
        $data->comments = $request->comments;
        $data->save();

        $notification = array(
            'message'=> 'Transaction added successfully',
            'alert-type' => 'success',
        );
        return redirect()->route('transaction.view')->with($notification);
    }

    public function TransactionEdit($id){
        $editData = Transaction::find($id);
        return view('transaction.edit_transaction', compact('editData'));
    }

    public function TransactionUpdate(Request $request, $id){
        $data = Transaction::find($id);
        $validatedData = $request->validate([
            'name' => 'required|unique:categories,name,'.$data->id
        ]);
        $data->tool_id = $request->tool_id;
        $data->user_id = $request->user_id;
        $data->transaction_type = $request->transaction_type;
        $data->quantity = $request->quantity;
        $data->transaction_date = $request->transaction_date;
        $data->comments = $request->comments;
        $data->save();

        $notification = array(
            'message' => 'Transaction updated successfully',
            'alert-type' => 'info',
        );
        return redirect()->route('transaction.view')->with($notification);
    }

    public function TransactionDelete($id){
        $Transaction = Transaction::find($id);
        $transaction->delete();

        $notification = array(
            'message' => 'Transaction deleted successfully',
            'alert-type' => 'info',
        );
        return redirect()->route('transaction.view')->with($notification);
    }
}
