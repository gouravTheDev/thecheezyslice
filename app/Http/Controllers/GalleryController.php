<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class GalleryController extends Controller
{
    public function list()
    {
        if (Auth::check()) {
            $gallery = Gallery::all()->sortByDesc('id');
            return view('admin.gallery.list', ['gallery' => $gallery]);
        } else {
            return view('admin.login');
        }
    }

    public function upload(Request $request)
    {
        $imageName = '';

        if ($request->hasFile('images')) {
            $files = $request->file('images');

            foreach ($files as $image) {

                $ext = $image->getClientOriginalExtension();
                $fileName = $image->getClientOriginalName();
                if ($ext == 'png' || $ext == 'jpg' || $ext == 'jpeg' || $ext == 'webp') {
                    $imageName = time() . "-" . rand(10, 100) . "-"  . $fileName;
                    $destinationPath = public_path('/uploads/gallery');
                    $image->move($destinationPath, $imageName);

                    $savedGallery = Gallery::insert(array(
                        'image' => $imageName
                    ));
                } else {
                    continue;
                }
            }

            return response()->json(['status' => 200, 'message' => "Image saved successfully"], 200);
        } else {
            return response()->json(['status' => 201, 'data' => null, 'message' => "Please upload a file"], 201);
        }
    }

    public function delete(Request $request)
    {
        $data = $request->all();
        // var_dump($data);
        $galleryId = $data['image_id'];

        // Get DB record
        $gallery = Gallery::find($galleryId);

        $imageName = $gallery->image;

        $image_path = "/uploads/gallery/" . $imageName;
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
        $gallery->delete();

        return response()->json(['status' => 200, 'data' => '', 'message' => "Image deleted successfully"], 200);
    }
}
