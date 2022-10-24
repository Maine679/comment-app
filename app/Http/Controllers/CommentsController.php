<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class CommentsController extends Controller
{
    /**
     * Gel list comment for first time.
     *
     * @return \Inertia\Response
     */
    public function index(Request $request)
    {
//        dd($request);
        $page = 1;
        $pageSize = 1;
//        dd('index');
//        $comments = $this->paginate($this->getComment(null), $pageSize, $page);
        $comments = $this->getComment(null);
        return Inertia::render('Discussion', compact('comments'));
    }

    /**
     * More comments if user want.
     *
     * @param $id
     */
    public function more($id)
    {
        $comments = $this->getComment($id);

        return response(['comments' => $comments]);
    }

    /**
     * Get comment for list and more comment by id main comment.
     *
     * @param $id
     * @return mixed
     */
    public function getComment($id)
    {
        return Comments::where('comment_id', $id)
            ->with([
                'user',
                'comments',
            ])
            ->get();
    }
}
