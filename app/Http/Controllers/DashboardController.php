<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dash;
class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $search = $request->input('search');
    
// এখানে function($q)-এর $q হলো যে ডাটাবেজ কুয়েরি চলছে তার বিল্ডার।
        $books = dash::when($search, function($q) use ($search) {
            $q->where('title', 'like', "%{$search}%")
              ->orWhere('author', 'like', "%{$search}%")
              ->orWhere('category', 'like', "%{$search}%");
        })->get();

        return view('dashboard', compact('books'));
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
        //
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

// dash::

// এখানে dash হলো আপনার Eloquent মডেল, যা ডাটাবেজের একটি টেবিলের সাথে সংযুক্ত। ধরুন এটি books টেবিলের মডেল।

// when($search, function($q) use ($search) {...})

// when মেথডটা Laravel-এ ব্যবহার করা হয় শর্তসাপেক্ষে কুয়েরি যোগ করার জন্য।

// অর্থাৎ: যদি $search ভ্যারিয়েবলটি truthy (যেমন non-empty string) হয়, তখন ফাংশনের ভিতরের কুয়েরি চালু হবে।

// function($q) use ($search) হলো কোয়েরি বিল্ডারের ক্লোজার, যা $search ভ্যারিয়েবলকে ভিতরে ইউজ করার জন্য use করে নিচ্ছে।

// where('title', 'like', "%{$search}%")

// ডাটাবেজের title কলামে $search টার্ম আছে কিনা চেক করবে।

// %{$search}% মানে যে কোনো অবস্থানে $search থাকতে পারে।

// orWhere('author', 'like', "%{$search}%") এবং orWhere('category', 'like', "%{$search}%")

// যদি title-এ না মিলে, তাহলে author বা category-তে মিলে কিনা চেক করবে।

// ->get()

// কুয়েরি চালিয়ে ফলাফল ক্লেকশন আকারে $books-এ নিয়ে আসে।