<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{

    /**
     * INSTRUCTIONS
     *
     * - Create the Books Model with Migrations, Factory and Seeder
     * - Table books columns: id,title,category,author,realease_date,publish_date
     * - php artisan db:seed should populate the User and Books tables
     * - The index page should show a datatable using ajax loading using JQUERY
     * - The datatable should get the info from BooksController@api
     * - The dates should be shown in the format d/M/y
     * - Extra points for bootstrap 4 styling
     *
     */


    /**
     * Show index page
     */
    public function index()
    {
        return view('dashboard');
    }

    /**
     * Return user books via AJAX API REQUEST [json]
     */
    public function api(Request $request)
    {
        $books = Books::all();
        // dd($books);
        return response()->json(['books' => $books]);
    }
}
