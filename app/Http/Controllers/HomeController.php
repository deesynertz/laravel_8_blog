<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Language;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('landing', [
            'categories' => Category::orderBy('created_at', 'DESC')->get(),
            'languages' => Language::orderBy('created_at', 'DESC')->get(),
            'projects' => Project::orderBy('created_at', 'DESC')->paginate(3),
        ]);
    }

    /**
    * Display the specified resource.
    *
    * @param  string  $tech
    * @return \Illuminate\Http\Response
    */
    public function technology($tech) 
    {
        $data['languages']  = Language::orderBy('created_at', 'DESC')->get();
        $data['categories'] = Category::orderBy('created_at', 'DESC')->get();
        $data['projectsByLanguage'] = Project::where('language_id', $tech)->orderBy('created_at', 'DESC')->paginate(6);

        return view('pages.projects.showByOption', $data);
    }

    /**
    * Display the specified resource.
    *
    * @param  string  $cat
    * @return \Illuminate\Http\Response
    */
    public function categoly($cat) 
    {
        $data['languages']  = Language::orderBy('created_at', 'DESC')->get();
        $data['categories'] = Category::orderBy('created_at', 'DESC')->get();

        $data['projectsByCategories'] = Project::where('category_id', $cat)->orderBy('created_at', 'DESC')->paginate(6);

        return view('pages.projects.showByOption', $data);
    }

}
