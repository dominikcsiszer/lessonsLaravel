<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = response()->json(Subject::all());
        return $subjects;
    }
    public function show($id)
    {
        $subjects = response()->json(Subject::find($id));
        return $subjects;
    }
    public function update(Request $request, $id)
    {
        $subject = Subject::find($id);
        $subject->name = $request->name;
        $subject->description = $request->description;
        $subject->limit = $request->limit;
        $subject->save();

        return redirect('/subjects/list');
    }
    public function store(Request $request) {
        $subject = new Subject();
        $subject->name = $request->name;
        $subject->description = $request->description;
        $subject->limit = $request->limit;
        $subject->save();

        return redirect('/subjects/list');
    }
    public function destroy($id) {
        Subject::find($id)->delete();
        return redirect('/subjects/list');
    }

    //View
    public function newView() {
        return view('subject.new');
    }
    public function listView() {
        $subjects = Subject::all();
        return view('subject.list', ['subjects' => $subjects]);
    }
    public function editView($id) {
        $subject = Subject::find($id);
        return view('subject.edit', ['subject' => $subject]);
    }
    public function showView($id) {
        $subject = Subject::find($id);
        return view('subject.show', ['subject' => $subject]);
    }
}
