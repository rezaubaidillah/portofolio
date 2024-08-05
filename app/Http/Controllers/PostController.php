<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // Code for displaying a listing of the resource
    }

    public function create()
    {
        return view('post', ['posts' => Post::all()]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'organization' => 'required|string|max:255',
            'date' => 'required|date',
            'credential_id' => 'required|string|max:255|unique:posts',
            'credential_url' => 'required|url',
        ]);

        Post::create($request->all());

        return response()->json(['success' => 'Certification added successfully!']);
    }

    public function show(string $id)
    {
        // Code for displaying a specific resource
    }

    public function edit(string $id)
    {
        // Code for showing the form for editing a specific resource
    }

    public function update(Request $request, string $id)
    {
        // Code for updating a specific resource in storage
    }

    public function destroy(string $id)
    {
        // Code for removing a specific resource from storage
    }
}
