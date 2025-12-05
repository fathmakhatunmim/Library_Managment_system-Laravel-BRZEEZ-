<?php

namespace App\Http\Controllers;
use App\Models\Review;
use Illuminate\Http\Request;

class RevieBookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('action.reviewbook');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());


        $request->validate([
             'uname'=>'required|string|max:255',
        'name'=> 'required|string|max:255',
        'author'=> 'required|string|max:255',
        'isbn'=> 'required|string|max:255',
        'categories'=> 'required|string|max:255',
        'review'=> 'required|string|max:255'

        ]);
         $review = Review::create([

          'uname'=> $request->uname,
        'name'=> $request->name,
        'author'=> $request->author,
        'isbn'=> $request->isbn,
        'categories'=> $request->categories,
        'review'=> $request->review
    

           ]);

 
    // dd($review);
    return redirect()->back()->with('success', 'Book added successfully!');




    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
