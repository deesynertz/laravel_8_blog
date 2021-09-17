<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{

    public $tech = 'tech';
    public $side = 'side';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show', 'option_pages']]);
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userID = auth()->user()->id;

        $data['projects'] = Project::where('user_id', $userID)->get();
        $data['categories'] = Category::get();

        return view('pages.projects.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $data['languages'] = Language::all();

        return view('pages.projects.create', [
            'categories' => Category::orderBy('updated_at', 'DESC')->get(),
            'languages' => Language::orderBy('updated_at', 'DESC')->get(),
        ]);
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
            'title' => 'required',
            'cat_id' => 'required',
            'lang_id' => 'required',
            'description' => 'required',
            'cover' => 'required|mimes:jpg,png,jpeg|max:5048',
        ]);

        // $fileName = $request->file('pro_cover_image')->getClientOriginalName();
                    
        $newImageName = $request->title.'-'.uniqid().'.'.$request->cover->extension();
        $request->cover->move(public_path('/media/images'), $newImageName);

        $prepareData = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'category_id' => $request->input('cat_id'),
            'language_id' => $request->input('lang_id'),
            'user_id' => auth()->user()->id,
            'repository' => $request->input('repository'),
            'cover' => $newImageName
        ];


        // dd($prepareData);


        Project::create ($prepareData);

        return redirect('/project')->with('message', 'Your Project has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['categories'] = Category::orderBy('updated_at', 'DESC')->get();
        $data['languages'] = Language::orderBy('updated_at', 'DESC')->get();

        $data['project'] = Project::where('id', $id)->first();
        $data['related'] = Project::where('language_id', $data['project']->language_id)
        ->orderBy('updated_at', 'DESC')->get();

        return view('pages.projects.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
