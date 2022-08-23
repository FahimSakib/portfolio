<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Education;
use App\Models\HeroSection;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Work;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    // $users = User::toBase()->get();
    public function index()
    {
        $heroSection = HeroSection::toBase()->first();
        $work        = Work::toBase()->first();
        $skills      = Skill::toBase()->get();
        $educations  = Education::toBase()->get();
        $courses     = Course::toBase()->get();
        $projects    = Project::toBase()->get();

        return view('frontend.index',compact('heroSection','work','skills','educations','courses','projects'));
    }
}
