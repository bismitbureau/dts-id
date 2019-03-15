<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Research;
use App\Media;
use Illuminate\Support\Facades\DB;


class ResearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $researches = DB::table('researches')
                    // ->where('researches.category', '=', 'article')
                    ->get();

        foreach($researches as $research){
            $research->media = DB::table('media')
                                ->where('media.research_id', '=', $research->research_id)
                                ->get();
        }
        return view('admin.researches.index')->with(['researches'=> $researches]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.researches.create');
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
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

       $research = new Research;

       $research->title = $request->title;
       $research->category = $request->category;
       $research->body = $request->body;
       $research->save();

       $files = $request->file('media');
       // dd($files);
       if($request->hasFile('media')) {
            foreach ($files as $file) {
                $path = $file->store(
                    '/public/'.$research->research_id
                );
                $media = new Media;
                $media->path = substr($path, 7);
                $media->research_id = $article->research_id;
                $media->save();
                // dd($phpath);
            }
        }

        return redirect()->route('admin.researches.index');
        // return redirect()->route('admin.researches.show', $article->research_id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = DB::table('researches')
                    ->where('researches.research_id', '=', $id)
                    ->where('researches.category', '=', 'research')
                    ->first();

        $media = DB::table('media')
                    ->where('media.research_id', '=', $article->research_id)
                    ->get();

        return view('admin.researches.show')
                    ->with(['article' => $article, 'media' => $media]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = DB::table('researches')
                    ->where('researches.research_id', '=', $id)
                    ->first();

        $media = DB::table('media')
                    ->where('media.research_id', '=', $article->research_id)
                    ->get();

        return view('admin.researches.edit')
                    ->with(['article' => $article, 'media' => $media]);
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
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        $article = Article::find($id);

        $article->title = $request->input('title');
        $article->body = $request->input('body');
        $article->save();

        return redirect()->route('admin.researches.show', $article->research_id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = DB::table('researches')->where('research_id', $id);
        $media = DB::table('media')->where('research_id', $id);

        $media->delete();
        $post->delete();

        return redirect()->route('admin.researches.index');
    }
}
