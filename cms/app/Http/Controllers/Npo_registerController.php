<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

use App\Npo_register;
use App;
use Illuminate\Http\Request;

class Npo_registerController extends Controller {
	public function __construct()
    {
        $this->middleware('auth', ['except' => ['landing', 'pieces']]);
    }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	// public function index()
	// {
 //       $npo_auth = Auth::user()->npo;
 //       $id_auth = Auth::user()->id;
 //       $name_auth = Auth::user()->name;
 //       $user_auth = Auth::user()->email;
		
	// 	// $manager = 
		
	// 	$npo_register = Npo_register::findOrFail($npo_name);
        
	// 	$npo_registers = Npo_register::orderBy('id', 'desc')->paginate(10);
		
	// 	if($npo_register->manager == $npo_auth){
	// 		return view('npo_registers.edit', compact('npo_register'));
	// 	}
	// 	return view('npo_registers.index', compact('npo_registers'));
	// }

	public function index()
	{
		$npo_registers = Npo_register::orderBy('id', 'desc')->paginate(5);
		
		return view('npo_registers.index', compact('npo_registers'));
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('npo_registers/create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$npo_register = new Npo_register();

		$npo_register->title = $request->input("title");
        $npo_register->subtitle = $request->input("subtitle");
        $npo_register->facebook = $request->input("facebook");
        $npo_register->twitter = $request->input("twitter");
        $npo_register->instagram = $request->input("instagram");
        $npo_register->youtube = $request->input("youtube");
        $npo_register->linkedin = $request->input("linkedin");
        $npo_register->url = $request->input("url");
        // $npo_register->code1 = $request->input("code1");
        // $npo_register->code2 = $request->input("code2");
        // $npo_register->code3 = $request->input("code3");
        $npo_register->manager = $request->input("manager");
        // $npo_register->member1 = $request->input("member1");
        // $npo_register->member2 = $request->input("member2");
        // $npo_register->member3 = $request->input("member3");
        // $npo_register->member4 = $request->input("member4");
        // $npo_register->follower = $request->input("follower");
        // $npo_register->buyer = $request->input("buyer");
        $npo_register->body = $request->input("body");
        // $npo_register->published = $request->input("published");

		$npo_register->save();

		return redirect()->route('npo_registers.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($npo_name)
	{
		$npo_register = Npo_register::findOrFail($npo_name);

		return view('npo_registers.show', compact('npo_register'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($npo_name)
	{
        $id_auth   = Auth::user()->id;
        $name_auth = Auth::user()->name;
        $user_auth = Auth::user()->email;
		
	// データベースからnpo_nameに該当するユーザーの情報をまとめて抜き出して
        $currentNpoInfo = \DB::table('npo_registers')->where('npo_name', $npo_name)->first();
		// //連想配列に入れtBladeテンプレートに渡しています。
        $data['npo_info'] = $currentNpoInfo;
		
		$npo_register = Npo_register::findOrFail($npo_name);
		
		if($npo_register->manager == $name_auth){
			return view('npo_registers.edit', compact('npo_register'));
		
		}
		return view('npo_registers.show', compact('npo_register'));
	
		
		// $npo_register = Npo_register::findOrFail($name);

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update(Request $request, $npo_name)
	{
		$npo_register = Npo_register::findOrFail($npo_name);

		$npo_register->title = $request->input("title");
        $npo_register->subtitle = $request->input("subtitle");
        $npo_register->facebook = $request->input("facebook");
        $npo_register->twitter = $request->input("twitter");
        $npo_register->instagram = $request->input("instagram");
        $npo_register->youtube = $request->input("youtube");
        $npo_register->linkedin = $request->input("linkedin");
        $npo_register->url = $request->input("url");
        $npo_register->code1 = $request->input("code1");
        $npo_register->code2 = $request->input("code2");
        $npo_register->code3 = $request->input("code3");
        $npo_register->manager = $request->input("manager");
        $npo_register->member1 = $request->input("member1");
        $npo_register->member2 = $request->input("member2");
        $npo_register->member3 = $request->input("member3");
        $npo_register->member4 = $request->input("member4");
        $npo_register->body = $request->input("body");
        $npo_register->published = $request->input("published");

		$npo_register->save();
// return view('npo.npo_landing_page', compact('npo_register'));

		return redirect()->route('npo_registers.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	 
	public function destroy($id)
	{
		$npo_register = Npo_register::findOrFail($id);
		$npo_register->delete();

		return redirect()->route('npo_registers.index')->with('message', 'Item deleted successfully.');
	}

	public function secondharvest()
    {   
		// $npo_register = Npo_register::findOrFail($id);
		//$npos = npo::all();   // Eloquent"Member"で全データ取得

		// return view('list', [
  //      	"members" => $members
  //  	]);
		return view('npo_registers.shj', compact('npo_register'));
    }
    
    public function landing(string $npo_name)
    {
		// データベースからnpo_nameに該当するユーザーの情報をまとめて抜き出して
        $currentNpoInfo = \DB::table('npo_registers')->where('npo_name', $npo_name)->first();
		//連想配列に入れtBladeテンプレートに渡しています。
        $data['npo_info'] = $currentNpoInfo;
        return view('npo.npo_landing_page', $data);
    }

}
