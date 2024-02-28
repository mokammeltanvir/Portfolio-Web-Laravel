<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Hero;
use App\Models\About;
use App\Models\Service;
use App\Models\Category;
use App\Models\Feedback;
use App\Models\SkillItem;
use App\Models\Experience;
use App\Models\TyperTitle;
use Illuminate\Http\Request;
use App\Models\PortfolioItem;
use App\Models\SkillSectionSetting;
use App\Http\Controllers\Controller;
use App\Models\FeedbackSectionSetting;
use App\Models\PortfolioSectionSetting;

class HomeController extends Controller
{
    public function index()
    {
        $hero = Hero::first();
        $typerTitles = TyperTitle::all();
        $services = Service::latest()->take(6)->get();
        $about = About::first();
        $portfolioTitle = PortfolioSectionSetting::first();
        $portfolioCategories = Category::all();
        $portfolioItems = PortfolioItem::all();
        $skill = SkillSectionSetting::first();
        $skillItems = SkillItem::all();
        $experience = Experience::first();
        $feedbacks = Feedback::all();
        $feedbackTitle = FeedbackSectionSetting::first();
        return view('frontend.pages.home' , compact('hero', 'typerTitles', 'services', 'about', 'portfolioTitle', 'portfolioCategories', 'portfolioItems', 'skill', 'skillItems', 'experience', 'feedbacks', 'feedbackTitle' ) );
    }


    public function showPortfolio($id){
        $portfolio = PortfolioItem::findOrFail($id);
        return view('frontend.pages.portfolio-details', compact('portfolio'));
    }
}
