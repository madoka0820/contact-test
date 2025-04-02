<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::with('category')->get();
        $categories = Category::all();
        return view('index',compact('categories'));
    }

    public function confirm(Request $request)
    {
        $contact = $request->only(['first_name','last_name','gender','email', 'tel','address','building','category_id', 'detail']);
        $contact['category'] = Category::find($contact['category_id']);
        return view('confirm', compact('contact'));
    }

    public function store(Request $request)
    {
        $contact = $request->only(['first_name','last_name','gender','email', 'tel','address','building','category_id', 'detail']);
        Contact::create($contact);
        return view('thanks');
    }

    public function admin()
    {
        $contacts = Contact::with('category')->get();
        $categories = Category::all();
        return view('admin',compact('contacts','categories'));
    }
}
