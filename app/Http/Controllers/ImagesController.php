<?php

namespace App\Http\Controllers;

use App\Services\ImageService;
use Illuminate\Http\Request;

class ImagesController extends Controller
{
    private $images;
    public function __construct(ImageService $imageService){
        $this->images = $imageService;
    }
    function index() {
        $images = $this->images->all();

        return view('welcome',['ImagesInView'=>$images]);
    }

    function create() {
        return view('create');
    }

    function show($id) {
        $myImage = $this->images->one($id);
        return view('show',['ImageInView'=>$myImage->image]);
    }

    function edit($id) {
        $image = $this->images->one($id);
        return view('edit',['ImageInView'=>$image]);
    }

    function store(Request $request) {
        $image = $request->file('image');
        $this->images->add($image);
        return redirect('/');
    }

    function update(Request $request, $id) {
        $this->images->update($id,$request->image);
        return redirect('/');
    }

    function delete($id) {
        $this->images->delete($id);
        return redirect('/');
    }
}

