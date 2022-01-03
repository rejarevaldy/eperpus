<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    public function index(){

            return view('course.index', [
                "title" => "Materi",
                "sub" => null,
                "item" => null,
                "courses" => Course::all()
            ]);
    }


    public function detailCourse(Course $course){

        return view('course.detail', [
            "title" => "Materi",
            "sub" => "Detail",
            "item" => $course->judul,
            "course" => $course
        ]);
    }


    public function storeCourse(Request $request)
    {
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        $course = new Course();
        $course->judul = $request->judul;
        $course->link = $request->link;
        $course->save();

        return redirect('/materi/');
    }

    public function updateCourse(Request $request, $id)
    {
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        $course = Course::find($id);
        $course->judul = $request->judul;
        $course->link = $request->link;
        $course->save();

        return redirect('/materi/');
    }


    public function destroy($id)
    {
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        $course = Course::find($id);
        $course->delete();
        return redirect('/materi/');
    }
}
