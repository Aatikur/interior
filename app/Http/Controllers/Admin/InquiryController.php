<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
class InquiryController extends Controller
{
    public function contactList(){
        return view('admin.contact_list');
    }

    public function contactListAjax(Request $request)
    {
        return datatables()->of(Contact::get())
            ->addIndexColumn()
            ->addColumn('name', function ($row) {
                if (isset($row->name)) {
                    return $row->name;
                } else {
                    return null;
                }
            })->addColumn('amount', function ($row) {
                if (isset($row->amount)) {
                    return $row->amount;
                } else {
                    return null;
                }
            })->addColumn('email', function ($row) {
                if (isset($row->email)) {
                    return $row->email;
                } else {
                    return null;
                }
            })->addColumn('message', function ($row) {
                if (isset($row->message)) {
                    return $row->message;
                } else {
                    return null;
                }
            })->rawColumns(['name', 'amount', 'email','message'])
            ->make(true);
    }
}
