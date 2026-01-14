<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index()
    {
        $lessons = Lesson::paginate(2);
        return view('lessons.index', compact('lessons'));
    }

    // FORM CREATE
    public function create()
    {
        return view('lessons.create');
    }

    // STORE DATA
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Lesson::create($validated);
        return redirect()->route('lessons.index');
    }

    // FORM EDIT
    public function edit(Lesson $lesson)
    {
        return view('lessons.edit', compact('lesson'));
    }

    // UPDATE DATA
    public function update(Request $request, Lesson $lesson)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $lesson->update($validated);
        return redirect()->route('lessons.index');
    }

    // DELETE DATA
    public function destroy(Lesson $lesson)
    {
        $lesson->delete();
        return redirect()->route('lessons.index');
    }
}
