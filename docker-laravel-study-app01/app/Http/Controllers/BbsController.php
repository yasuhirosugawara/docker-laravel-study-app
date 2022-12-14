<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bbs;

class BbsController extends Controller
{
    // Indexページの表示
    public function index(){
        // return view('bbs.index');
        $bbs = Bbs::all(); // 全データの取り出し
        return view('bbs.index', ["bbs" => $bbs]); // bbs.indexにデータを渡す
    }

    // 投稿された内容を表示するページ
    public function create(Request $request) {
        $bbs = new Bbs();
        

        // バリデーションチェック
        $request->validate([
            'name' => 'required|max:10',
            'comment' => 'required|min:5|max:140',
        ]);

        // 投稿内容の受け取って変数に入れる
        // $name = $request->input('name');
        // $comment = $request->input('comment');
        $bbs->fill($request->all());
        $bbs->save();
        // Bbs::insert(["name" => $name, "comment" => $comment]); // データベーステーブルbbsに投稿内容を入れる

        // 変数をビューに渡す
        // return view('bbs.index')->with([
        //     "name" => $name,
        //     "comment"  => $comment,
        // ]);

        $bbs = Bbs::all(); // 全データの取り出し
        return view('bbs.index', ["bbs" => $bbs]); // bbs.indexにデータを渡す
    }

}
