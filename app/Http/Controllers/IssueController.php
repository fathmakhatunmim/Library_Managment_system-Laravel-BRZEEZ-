<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Issue;
use Illuminate\Http\Request;

class IssueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

          $today = Carbon::today();  // আজকের তারিখ

    // শুধু overdue books আলাদা করতে চাইলে
    $overdueBooks = Issue::where('Due_date', '<', $today)->get();


         $reviews = Issue::all();

         return view('action.issue', compact('reviews','today', 'overdueBooks'));
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

       
         $request->validate([
        'uname' => 'required|string|max:255',
        'T_I_A' => 'required|string|max:255',
        'issue_date' => 'required|date',
        'Due_date' => 'required|date',
        'note' => 'nullable|string|max:1000',
         'image' => 'image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);
       
        $imageName = null;
    if ($request->hasFile('image')) {
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('uploads/issue_images'), $imageName);
    }





    // Create issue record
    $issue = Issue::create([
        'uname' => $request->uname,
        'T_I_A' => $request->T_I_A,
        'issue_date' => $request->issue_date,
        'Due_date' => $request->Due_date,
        'note' => $request->note,
        'image' => $imageName,

    ]);

    // dd($issue);

    return redirect()->back()->with('success', 'Book issued successfully!');
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
