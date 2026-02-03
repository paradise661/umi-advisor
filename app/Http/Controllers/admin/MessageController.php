<?php

namespace App\Http\Controllers\admin;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $messages = Message::paginate(10);

        return view('admin.message.index', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.message.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        $input['seo_title'] = $request->seo_title ?? $request->title;
        $input['slug'] = $input['slug'] ? make_slug($input['slug']) : make_slug($input['title']);

        $rules = [
            'title' => 'required|min:3',
        ];
        $imagelist = ['image', 'featured_image_1', 'featured_image_2'];
        foreach ($imagelist as $image) {
            if ($request->$image != '') {
                $rules[$image] = 'image';
            }
        }
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            return redirect()->route('message.create')->withInput()->withErrors($validator);
        }
        foreach ($imagelist as $image) {
            if ($request->$image != '') {
                $imageName = fileUpload($request, $image, 'message');
                $input[$image] = $imageName;
            }
        }
        $message = Message::create($input);

        return redirect()->route('message.index')->with('success', 'Message added successfully.');
    }
    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        //
        return view('admin.message.edit', compact('message'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Message $message)
    {
        //

        $input = $request->all();
        $input['seo_title'] = $request->seo_title ?? $request->title;
        $input['slug'] = $input['slug'] ? make_slug($input['slug']) : make_slug($input['title']);

        $rules = [

            'title' => 'required|min:3',

        ];

        $imagelist = ['image', 'featured_image_1', 'featured_image_2'];

        foreach ($imagelist as $image) {
            if ($request->$image != '') {
                $rules[$image] = 'image';
            }
        }

        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            return redirect()->route('message.edit', $message)->withInput()->withErrors($validator);
        }

        foreach ($imagelist as $image) {
            if ($request->$image != '') {
                if ($message->$image != '') {
                    $file = $message->$image;
                    removeFile($file);
                }
                $imageName = fileUpload($request, $image, 'message');
                $input[$image] = $imageName;
            }

            $deleteimage = 'delete' . $image;
            if (isset($input[$deleteimage]) && $input[$deleteimage] == 'on') {

                if ($message->$image != '') {
                    $file = $message->$image;
                    removeFile($file);
                }
                $input[$image] = null;
            }
        }
        $message->update($input);
        return redirect()->route('message.index')->with('success', 'Message Updated successfully.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        $imagelist = ['image', 'featured_image_1', 'featured_image_2'];
        foreach ($imagelist as $image) {
            if ($message->$image != '') {
                $file = $message->$image;
                removeFile($file);
            }
        }
        $message->delete();
        return redirect()->route('message.index')->with('success', 'Message Deleted successfully.');
    }
}
