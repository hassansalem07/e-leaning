<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class quizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quizzes = Quiz::all();
        return view('quizzes.index' , ["quizzes" => $quizzes]);
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
            'marks' => "required",
            'student_id' => "required"


        ]);

        $quizzes = new Quiz();
        $quizzes->name = $request->name;
        $quizzes->marks = $request->marks;
        $quizzes->student_id = $request->student_id;

        $quizzes->save();


    return redirect(route("quizzes.index"));
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
        $quizzes = Quiz::find($id);
        return view("quizzes.edit" , ["quizzes" => $quizzes]);
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

        ]);

        $quizzes = Quiz::find($id);
        $quizzes->name = $request->name;
        $quizzes->marks = $request->marks;
        $quizzes->student_id = $request->student_id;

        $quizzes->save();

        return redirect()->route("quizzes.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Quiz::destroy($id);
        return redirect()->route("quizzes.index");

    }
}
