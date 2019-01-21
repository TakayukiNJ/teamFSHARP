<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Book;
//use Validator;
//use Auth;

class BooksController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['except' => ['index', 'welcome']]);
        // $this->middleware('auth', ['except' => ['p_friends', 't_masaki', 'terms']]);
        //$this->middleware('guest', ['except' => 'index']);
    }
    //
    public function index(Request $request){
        //$books = Book::orderBy('created_at', 'asc')->paginate(3);
        //$books = Book::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->paginate(5);
        
        //$this->middleware('guest', ['except' => 'logout']);
        return view('index');
        
    }
    
    public function welcome(Request $request){
        //$books = Book::orderBy('created_at', 'asc')->paginate(3);
        //$books = Book::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->paginate(5);
        $data['npo_info1']  = \DB::table('npo_registers')->where('npo_name', 'miraidraft2019')->first();
        $data['npo_info2']  = \DB::table('npo_registers')->where('npo_name', 'JDMA_indonesia_support')->first();
        $data['npo_info3']  = \DB::table('npo_registers')->where('npo_name', 'Kawakamimura_PianoConcert')->first();
        //$this->middleware('guest', ['except' => 'logout']);
        return view('welcome', $data);
        
    }
    
    //新作追加
    public function store(Request $request){
        //バリデーション
        $validator = Validator::make($request->all(), [
                'item_name' => 'required|min:1|max:255',
                'item_number' => 'required | min:1 | max:3',
                'item_amount' => 'required | max:6',
                'published'   => 'required',
        ]);
        //バリデーション:エラー
        if ($validator->fails()) {
                return redirect('/')->withInput()->withErrors($validator);
        }
        
        // Eloquent モデル
        //$books = Book::find($request->id);
        $books = new Book;
        $books->user_id = Auth::user()->id;
        $books->item_name = $request->item_name;
        $books->item_number = $request->item_number;
        $books->item_amount = $request->item_amount;
        $books->published = $request->published;
        $books->save();   //「/」ルートにリダイレクト 
        return redirect('/');
    }
    
    //更新
    public function update(Request $request){
        //{books}id 値を取得 => Book $books id 値の1レコード取得
        //バリデーション
        $validator = Validator::make($request->all(), [
                'id' => 'required',
                'item_name' => 'required|min:3|max:255',
                'item_number' => 'required | min:1 | max:3',
                'item_amount' => 'required | max:6',
                'published'   => 'required',
        ]);
        //バリデーション:エラー
        if ($validator->fails()) {
                return redirect('/')->withInput()->withErrors($validator);
        }
        
        // 更新処理
        $books = Book::where('user_id',Auth::user()->id)->find($request->id);
        $books->item_name = $request->item_name;
        $books->item_number = $request->item_number;
        $books->item_amount = $request->item_amount;
        $books->published = $request->published;
        $books->save();   //「/」ルートにリダイレクト 
        return redirect('/');
    }
    
    //編集画面
    public function edit($book_id){
        //{books}id 値を取得 => Book $books id 値の1レコード取得
        $books = Book::where('user_id',Auth::user()->id)->find($book_id);
        return view('booksedit', ['book' => $books]);
    }
}