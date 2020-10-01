<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Announcement;

use App\Http\Requests\Admin\AnnouncementRequest;
use Illuminate\Support\Str;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengumuman = Announcement::all();
        return view('pages.backend.pengumuman.index',[
            'pengumuman' => $pengumuman
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnnouncementRequest $request)
    {
        $data = $request->all();
        $data['slug']   = Str::slug($request->title);
        $data['photo']  = $request->file('photo')->store('assets/pengumuman','public');

        Announcement::create($data);

        return redirect()->route('data-pengumuman.index');

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
        $pengumuman = Announcement::findOrFail($id);
        return view('pages.backend.pengumuman.edit',[
            'pengumuman' => $pengumuman
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AnnouncementRequest $request, $id)
    {        
        $data = $request->all();
        if($request->file('photo')){
            $data['photo']  = $request->file('photo')->store('assets/pengumuman','public');
        }
        $data['slug']   = Str::slug($request->title);        

        $item = Announcement::findOrFail($id);
        $item->update($data);        

        return redirect()->route('data-pengumuman.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Announcement::findOrFail($id);
        $item->delete();

        return redirect()->route('data-pengumuman.index');
    }

    public function detail($id){
        $pengumuman = Announcement::findOrFail($id);
        return view('pages.backend.pengumuman.detail',[
            'pengumuman' => $pengumuman
        ]);
    }
}
