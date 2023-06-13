<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index() {

        $posts = Post::where('deleted_at', null)->get();
        $active = $posts->count();

        $data = [
            'posts' => $posts,
            'active_posts' => $active,
        ];

        return view('posts.index', $data);

    }

    public function show() {}

    public function create() {}

    public function store() {}

    public function edit() {}

    public function update() {}

    public function delete() {}

}
