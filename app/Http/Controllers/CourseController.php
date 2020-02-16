<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Semester;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        $course=Course::paginate(4);
        return view('course.index')->with(compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $array=Semester::all();
        return view('course.create')->with(compact('array'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $courseAdd = new Course;
        $request->validate([
            'name' => 'required',
            'acronym' => 'required',
            'credit' => 'required',
            'semester_id' => 'required'
        ]);
        
        $courseAdd->name = $request->name;
        $courseAdd->acronym = $request->acronym;
        $courseAdd->credit = $request->credit;
        $courseAdd->semester_id = $request->semester_id;
        $courseAdd->save();
        return redirect()->route('course.index')->with('agregar' , 'EL curso se ha agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
       return view('course.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {   
        $array=Semester::all();
        return view('course.edit', compact('course','array'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $course->name = $request->name;
        $course->acronym = $request->acronym;
        $course->credit = $request->credit;
        $course->semester_id = $request->semester_id;
        $course->save();
        return redirect()->route('course.index')->with('update' , 'EL curso se ha modificado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return back()->with('eliminar','La materia se elimino correctamente');
    }
}
