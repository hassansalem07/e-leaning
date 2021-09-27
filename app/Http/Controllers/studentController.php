<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index' , ["students" => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => "required",
            'age' => "required",
            'mobile' => "required",
            'section' => "required",


        ]);

        $students = new Student();
        $students->name = $request->name;
        $students->age = $request->age;
        $students->mobile = $request->mobile;
        $students->section = $request->section;

        $students->save();

        dd($students->all());

    return redirect(route("students.index"));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $students = Student::find($id);
        return view("students.edit" , ["students" => $students]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'name' => "required",
            'age' => "required",
            'mobile' => "required",
            'section' => "required",
        ]);

        $students = Student::find($id);
        $students->name = $request->name;
        $students->age = $request->age;
        $students->mobile = $request->mobile;
        $students->section = $request->section;


        $students->save();


        return redirect()->route("students.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::destroy($id);

        return redirect()->route("students.index");
    }
}
