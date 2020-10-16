<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Tag;
use App\User;


class ArticlesController extends Controller
{
    
    public function index(){
        
        if(request('tag')){
            
           $articles=Tag::where('name',request('tag'))->firstOrFail()->articles;
            
        }else{
             $articles=Article::take(3)->latest()->get();
        }
      
       
        
        return view('articles.index',compact('articles'));  
    }

    

    public function show($article){
        
        $article=Article::find($article);
        return view('articles.show',['article'=>$article]);
        
        
    }
    
    public function create(){
        $users=User::all();
        $tagArr=Tag::all();
        return view('articles.create', compact('users','tagArr'));
    }
    
    public function store(){
       $this->validateArticle();
       $article=new Article(request(['user_id','title','excerpt','body']));
       $article->save();
       $article->tags()->attach(request('tags')); //tags function added in Article model
       
        
        return redirect(route('article.index'));
        
    }
    
    protected function validateArticle(){
        
      return  request()->validate([
            'title'=>'required',
            'excerpt'=>'required',
            'body'=>'required',
            'user_id'=>'required',
            'tags'=>'exists:App\Tag,id'
        ]);
    }
    
    
}
