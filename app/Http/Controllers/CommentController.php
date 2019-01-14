<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Comment;
use App\Http\Resources\Comment as CommentResource;

class CommentController extends Controller
{

    public function index($recipe)
    {
        $comments = Comment::where('recipe', $recipe)->orderBy('created_at', 'desc')->get();
        return CommentResource::collection($comments);
    }

    public function store(Request $request)
    {
        $comment = new Comment;

        $comment->id = $request->input('comment_id');
        $comment->email = $request->input('user_email');
        $comment->recipe = $request->input('comment_recipe');
        $comment->body = $request->input('body');

        if ($comment->save()) {
            return new CommentResource($comment);
        }
    }

    public function show($id)
    {
        $comment = Comment::findOrFail($id);
        return new CommentResource($comment);
    }

    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        if ($comment->delete()) {
            return new CommentResource($comment);
        }
    }
}
