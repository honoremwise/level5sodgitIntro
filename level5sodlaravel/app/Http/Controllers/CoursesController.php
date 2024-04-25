<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;

class CoursesController extends Controller
{
    //
    public function storeCourse(){
        $newCourse= new Courses();
        $newCourse->name='Math';
        $newCourse->details='this is a new course';
        $newCourse->save();
    }
}
