<?php

namespace App\Http\Controllers;

use App\course;
use App\Lesson;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $course_id=Course::max('id')+1;
        //dd($course_id);
        $user=Auth::user();
        $lessons=Lesson::where('course_id',$course_id)->get();
        return view('courses.create_course',['user'=>$user,'lessons'=>$lessons,'course_id'=>$course_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if ($request->has('form1')) {
            //handle form1
            //dd($request->all());
            $request->validate([
                'title' => ['required', 'string', 'max:255'],
                'description' => ['required', 'string', 'max:255'],
                'category' => ['required', 'string', 'max:255'],
                'duration'=>['required'],
                'instructor_id'=>['required'],
                'start_date'=>['required'],
                'price'=>['required', 'max:255'],
                'course_type'=>['required'],
               
                ]);
                $course=new Course();
                $course->title=$request->title;
                $course->description=$request->description;
                $course->category=$request->category;
                $course->user_id=$request->instructor_id;
                $course->price=$request->price;
                $course->duration=$request->duration;
                $course->course_type=$request->course_type;
                $course->start_date=$request->start_date;
                $course->end_date=$request->end_date;
                $course->save();
                return redirect('/instructors');

        }
        if ($request->has('form2')) {
           dd($request->all());
            //handle form2
            $request->validate([
                'title' => ['required', 'string', 'max:255'],
                'lesson_desc' => ['required', 'string', 'max:255'],
                'category' => ['required', 'string', 'max:255'],

                'course_id'=>['required'],
                'lesson_url'=>['required', 'string', 'max:255'],
               
                ]);
            $lesson=new Lesson();
            $lesson->title=$request->title;
            $lesson->description=$request->lesson_desc;
            $lesson->course_id=$request->course_id;
            $lesson->category=$request->category_less;
            $lesson->lesson_url=$request->lesson_url;
            $lesson->save();
return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(course $course)
    {
        //
$lessons=$course->lessons;
$user=User::where('id',$course->user_id)->first();
//dd($user->fname);
        return view('courses.show_course')->withCourse($course)->withLessons($lessons)->withUser($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(course $course)
    {
        //
    }
}
