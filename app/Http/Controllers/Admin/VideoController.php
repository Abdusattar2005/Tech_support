<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Video\StoreRequest;
use App\Http\Requests\Admin\Video\UpdateRequest;
use App\Models\Category;
use App\Models\Video;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        return view('admin.video.index', compact('videos'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.video.create', compact('categories'));
    }
    public function edit(Video $video)
    {
        $categories = Category::all();
        return view('admin.video.edit', compact( 'video','categories'));
    }
    public function show(Video $video)
    {
        return view('admin.video.show', compact('video'));
    }
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $data['path'] = Storage::disk('public')->put('/videos', $data['preview_video']);
        unset($data['preview_video']);
        Video::firstOrCreate($data);

        return redirect()->route('admin.video.index');

    }
    public function update(UpdateRequest $request, Video $video)
    {
        $data=$request->validated();
        $video->update($data);
        return view('admin.video.show', compact('video'));
    }
    public function delete( Video $video)
    {
        $video->delete();
        return redirect()->route('admin.video.index');
    }
}
