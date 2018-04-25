<?php
namespace App\Http\Controllers;
use App\Room;
use App\Plant;
use App\PlantType;
use Carbon\Carbon;
use Illuminate\Http\Request;
class PlantsController extends Controller
{
    
    public function index() {
        $plants = Plant::where('systemID', app('system')->id)->get();
        return view('plants.index', compact('plants'));
    }
    public function create() {
        $rooms = Room::where('systemID', app('system')->id)->get(['id', 'name']);
        $planttypes = PlantType::where('systemID', app('system')->id)->get(['id', 'name']);

        return view('plants.create', compact('plants', 'rooms', 'planttypes'));
    }
    public function store(Request $request) 
    {
        // dd($request->all());
        $newplant = Plant::create([
            'name' => $request['name'],
            'comments' => $request['comments'],
            'imageFileName' => $request['imageFileName'],
            'systemID' => app('system')->id,
            'planttypeID' => $request['planttype'],
            'roomID' => $request['room'],
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        return redirect('plants');
    }
/**
     * Display a page to edit a new plant
    
     */
    public function edit($id) 
    {
        $plant = Plant::find($id);
        $rooms = Room::where('systemID', app('system')->id)->get(['id', 'name']);
        $planttypes = PlantType::where('systemID', app('system')->id)->get(['id', 'name']);
        
        return view('plants.edit', compact('plant', 'rooms', 'planttypes'));
    }
    public function update(Request $request) 
    {
       //print_r($_POST); 
       //dd($request->all()); 
       //dd($request->hasFile('imageFile'));
       // dd($request['imageFile']);
        $plant = Plant::find($request['id']);
        
            $plant->name = $request['name'];
            $plant->comments = $request['comments'];
            $plant->imageFileName = $request['imageFileName'];
            $plant->updated_at = Carbon::now()->toDateTimeString();
            $plant->save();
            return redirect('plants');
    }
    /**
     * Display a page to delete a new plant
     *
     */
    public function destroy($id) 
    {
        Plant::destroy($id);

        $plants = Plant::all();
        return view('plants.index', compact('plants'));
    }
}