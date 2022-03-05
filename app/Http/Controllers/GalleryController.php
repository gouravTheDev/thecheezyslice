<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    public function list()
    {
        $gallery = Gallery::all()->sortBy('created_at');
        return view('admin.gallery.list', ['gallery' => $gallery]);
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $title = $data['title'] ? $data['title'] : NULL;
        $imageName = '';

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $fileName = $image->getClientOriginalName();
            if ($ext == 'png' || $ext == 'jpg' || $ext == 'jpeg' || $ext == 'webp') {
                $imageName = time() . $fileName;
                $destinationPath = public_path('/uploads/gallery');
                $image->move($destinationPath, $imageName);

                $savedGallery = Gallery::insert(array(
                    'title' => $title,
                    'image' => $imageName
                ));

                return response()->json(['status' => 200, 'data' => $savedGallery, 'message' => "Gallery saved successfully"], 200);
            } else {
                return response()->json(['status' => 201, 'data' => null, 'message' => "Please upload a valid image"], 201);
            }
        } else {
            return response()->json(['status' => 201, 'data' => null, 'message' => "Please upload a file"], 201);
        }
    }

    public function update(Request $request)
    {
        $data = $request->all();

        $galleryId = $data['id'];
        $title = "";

        // Get DB record
        $gallery = Gallery::find($galleryId);

        if (isset($data['title']) && !empty($data['title'])) {
            $title = $data['title'];
        } else {
            $title = $gallery->title;
        }

        $gallery->title = $title;
        $imageName = $gallery->image;

        if ($request->hasFile('image')) {
            // Delete the old image
            $image_path = "/uploads/gallery/" . $imageName;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }

            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $fileName = $image->getClientOriginalName();
            if ($ext == 'png' || $ext == 'jpg' || $ext == 'jpeg' || $ext == 'webp') {
                $imageName = time() . $fileName;
                $destinationPath = public_path('/uploads/gallery');
                $image->move($destinationPath, $imageName);

                $gallery->image = $imageName;
                $gallery->save();

                return response()->json(['status' => 200, 'data' => $gallery, 'message' => "Image updated successfully"], 200);
            } else {
                return response()->json(['status' => 201, 'data' => null, 'message' => "Please upload a valid image"], 201);
            }
        } else {
            return response()->json(['status' => 201, 'data' => null, 'message' => "Please upload a file"], 201);
        }
    }

    public function delete(Request $request)
    {
        $data = $request->all();
        $galleryId = $data['id'];

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
