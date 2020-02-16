<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Career;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $achievements = Achievement::all();
        return view('welcome', compact( 'achievements'));
    }

    /**
     * Display the specified resource.
     *
     * @param $achievementId
     * @return \Illuminate\Http\Response
     */
    public function showAchievement($achievementId)
    {
        $achievement=Achievement::find($achievementId);
        return view('portal.achievement', compact('achievement'));
    }
    public function showCareer($careerId)
    {
        $career=Career::find($careerId);
        return view('portal.career', compact('career'));
    }
    public function showStudyPlan($careerId)
    {
        $career=Career::find($careerId);
        $plans=$career->studioPlans->sortBy('course_id');
        return view('portal.plans', compact('plans','career'));
    }
}
