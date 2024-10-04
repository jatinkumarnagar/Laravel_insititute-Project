<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $articles = Articles::orderBy('created_at', 'DESC')->paginate(4);

        return view('articles', [
            'articles' => $articles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'title' => 'required|min:5',
            'staff' => 'required|min:2',
            'description' => 'required',
            'academy' => 'required'
        ];

        if ($request->image != "") {
            $rules['image'] = 'image';
        }

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('admin.create')->withInput()->withErrors($validator);
        }

        // Here we will insert data in db
        $article = new Articles();
        $article->title = $request->title;
        $article->staff = $request->staff;
        $article->description = $request->description;
        $article->academy = $request->academy;
        $article->save();

        if ($request->image != "") {
            //Here we will store image
            $image = $request->image;
            $ext = $image->getClientOriginalExtension();
            $imageName = time() . '.' . $ext;

            //Save Images in Articles Directory

            $image->move(public_path('uploads/articles'), $imageName);

            //Save Image name in database

            $article->image = $imageName;
            $article->save();
        }

        return redirect()->route('Articles')->with('success', 'Article added Successfully!');
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
        $article = Articles::findOrFail($id);
        return view('admin.articleEdit', [
            'article' => $article
        ]);
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
        $article = Articles::findOrFail($id);

        $rules = [
            'title' => 'required|min:5',
            'staff' => 'required|min:2',
            'description' => 'required',
            'academy' => 'required'
        ];

        if ($request->image != "") {
            $rules['image'] = 'image';
        }

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('articles.edit',$article->id)->withInput()->withErrors($validator);
        }

        // Here we will update article
        $article = new Articles();
        $article->title = $request->title;
        $article->staff = $request->staff;
        $article->description = $request->description;
        $article->academy = $request->academy;
        $article->save();

        if ($request->image != "") {
            //delete old image
            File::delete(public_path('uploads/articles/'.$article->image));

            //Here we will store image
            $image = $request->image;
            $ext = $image->getClientOriginalExtension();
            $imageName = time() . '.' . $ext;

            //Save Images in Articles Directory

            $image->move(public_path('uploads/articles'), $imageName);

            //Save Image name in database

            $article->image = $imageName;
            $article->save();
        }

        return redirect()->route('Articles')->with('success', 'Article updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Articles::findOrFail($id);
        //delete image
        File::delete(public_path('uploads/articles/'.$article->image));
        //delete article from database
        $article->delete();

        return redirect()->route('Articles')->with('danger', 'Article deleted Successfully!');

    }
}
