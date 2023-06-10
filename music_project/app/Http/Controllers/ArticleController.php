<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $articles = Article::all();
        
        //hiểm thị
        $articles = Article::orderBy('ma_bviet', 'desc')->paginate(7);
        return view('articles.index',['articles'=>$articles]);
    }
}
