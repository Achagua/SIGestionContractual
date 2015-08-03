<?php namespace App\Http\Controllers\Regional;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Regional\Regional as regional;
use Illuminate\Http\Request;

class RegionalController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$regional = regional::all();
		return \View::make('list',compact('regional'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return \View::make('new');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$regional = new regional;
		$regional->create($request->all());
		return redirect('regional');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$regional = regional::find($id);
		return \View::make('update',compact('regional'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		$regional = regional::find($request->id);
		$regional->n_regional=$request->n_regional;
		$regional->zona_regional = $request->zona_regional;
		$regional->nombre_regional=$request->nombre_regional;
		$regional->nombre_director_regional = $request->nombre_director_regional;
		$regional->direccion_regional=$request->direccion_regional;
		$regional->telefono_regional = $request->telefono_regional;
		$regional->save();
		return redirect('regional');
	}

	public function search(Request $request)
	{
		$regional = regional::where('nombre_regional','like','%'.$request->nombre_regional.'%')->get();
		return \View::make('list', compact('regional'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$regional = regional::find($id);
		$regional->delete();
		return redirect()->back();
	}

}
