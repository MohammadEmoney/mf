<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreImageRequest;
use App\Http\Requests\UpdateImageRequest;
use App\Models\Image;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreImageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreImageRequest $request)
    {
        $randomName = Arr::random(['EMINEF', 'MANDF', 'BARANGALLERY.COM', 'BARANGALLERYSHOP', 'BARANGALLERYART', 'BARANARTGALLERY', 'BARANARTSGALLERY']);
        $extension = $request->file->extension();
        $imageName = time() . '-' . $randomName . '.'. $extension;
        $slice = Str::afterLast($request->model_type, '\\');
        $path = public_path('images') . "/$slice" ;
        $savedImage = $request->file->move($path, $imageName);
        $imagePath = "/". $slice . "/" . $imageName;
        if(class_exists($request->model_type)){
            $class = new $request->model_type;
            $model = $class::find($request->model_id);
            $image = $model->images()->create([
                'url' => $imagePath,
                'alt' => $model->name ?: $imageName,
                'size' => $savedImage->getSize(),
                'type' => $extension,
                'featured_image' => $model->images()->exists() ? false : true
            ]);
        }else{
            abort(404);
        }
        return response()->json(["Success" => true , 'image' => $image]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateImageRequest  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateImageRequest $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        //
    }
}
