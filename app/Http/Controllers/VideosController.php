<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Category;
use Illuminate\Http\Request;

class VideosController extends Controller
{
    public function upload() {

        $categories = Category::orderBy("name", "asc")->get();

        return view("video_upload", compact('categories'));
    }
    
    public function upload_process(Request $request) {

        $request->validate([
            "title" => "required",
            "category" => "required|integer",
            "description" => "required|min:30",
            "thumb" => "required|file|mimes:jpg",
            "video_file" => "required|file|mimes:mp4|max:5120"
        ]);

        $thumb_file =  $request->file('thumb')->store("thumbs");
        $video_file =  $request->file('video_file')->store("videos");

        $v = new Video();

        $v->category_id = $request->category;
        $v->user_id = 1;
        $v->title = $request->title;
        $v->description = $request->description;
        $v->thumb = $thumb_file;
        $v->video_file =  $video_file;

        $v->save();
       

    }
}
