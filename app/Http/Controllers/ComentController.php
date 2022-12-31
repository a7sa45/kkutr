<?php

namespace App\Http\Controllers;

use App\Models\Coment;
use App\Models\Post;
use Illuminate\Http\Request;

class ComentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort(404);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'post_id' => ['required', 'integer'],
            'coment' => ['required', 'string', 'max:255'],
        ]);

        $post = Post::findOrFail($request->post_id);

        $user_id = auth()->user()->id;

        $post->coments()->create(
            [
                'user_id' => $user_id,
                'coment' => $data['coment'],
            ]
        );

        return back()->with('success', 'تم إضافة التعليق !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coment  $coment
     * @return \Illuminate\Http\Response
     */
    public function show(Coment $coment)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coment  $coment
     * @return \Illuminate\Http\Response
     */
    public function edit(Coment $coment)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coment  $coment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coment $coment)
    {
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coment  $coment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coment $coment)
    {
        if($coment == null)
        {
            abort(404);
        }
        $coment->delete();
        return redirect('/posts/'.$coment->post_id)->with('warning', 'تم حذف التعليق !');
    }
}
