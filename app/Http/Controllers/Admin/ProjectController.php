<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::latest()->get();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|in:electrical,construction',
            'duration' => 'required|string|max:255',
            'client' => 'required|string|max:255',
            'consultant' => 'required|string|max:255',
            'cost' => 'required|numeric',
            'image1' => 'nullable|image|max:2048',
            'image2' => 'nullable|image|max:2048',
            'image3' => 'nullable|image|max:2048',
            'image4' => 'nullable|image|max:2048',
        ]);

        // Handle image uploads
        for ($i = 1; $i <= 4; $i++) {
            if ($request->hasFile("image{$i}")) {
                $validated["image{$i}"] = $request->file("image{$i}")->store('projects', 'public');
            }
        }

        Project::create($validated);

        return redirect()->route('admin.projects.index')
            ->with('success', 'Project created successfully.');
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
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|in:electrical,construction',
            'duration' => 'required|string|max:255',
            'client' => 'required|string|max:255',
            'consultant' => 'required|string|max:255',
            'cost' => 'required|numeric',
            'image1' => 'nullable|image|max:2048',
            'image2' => 'nullable|image|max:2048',
            'image3' => 'nullable|image|max:2048',
            'image4' => 'nullable|image|max:2048',
        ]);

        // Handle image uploads
        for ($i = 1; $i <= 4; $i++) {
            if ($request->hasFile("image{$i}")) {
                // Delete old image if exists
                if ($project->{"image{$i}"}) {
                    Storage::disk('public')->delete($project->{"image{$i}"});
                }
                $validated["image{$i}"] = $request->file("image{$i}")->store('projects', 'public');
            }
        }

        $project->update($validated);

        return redirect()->route('admin.projects.index')
            ->with('success', 'Project updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        // Delete images
        for ($i = 1; $i <= 4; $i++) {
            if ($project->{"image{$i}"}) {
                Storage::disk('public')->delete($project->{"image{$i}"});
            }
        }

        $project->delete();

        return redirect()->route('admin.projects.index')
            ->with('success', 'Project deleted successfully.');
    }
}
