<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ServiceController extends Controller
{

    public function __construct()
    {
        $this->service = new Service();
    }

    public function index($menu_id)
    {
        return view('backend.service.index',compact('menu_id'));
    }

    public function source($menu_id){
        $query= Service::query();
        $query->where('menu_id',$menu_id);
        return DataTables::eloquent($query)
        ->filter(function ($query) {
            if (request()->has('search')) {
                $query->where(function ($q) {
                    $q->where('name', 'LIKE', '%' . request('search')['value'] . '%');
                });
            }
            })
            ->addColumn('icon', function ($data) {
                return '<button class="btn btn-sm btn-light"><i class="'.$data->icon.'"></i></button>';
            })
            ->addColumn('name', function ($data) {
                return str_limit($data->name,50);
            })
            ->addColumn('description', function ($data) {
                return str_limit(strip_tags($data->description,50));
            })
            ->addIndexColumn()
            ->addColumn('action', 'backend.service.index-action')
            ->rawColumns(['action','icon'])
            ->toJson();
    }

    public function create($menu_id)
    {
        return view('backend.service.create',compact(['menu_id']));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $request = $request->merge(['slug'=> str_slug($request->name),'menu_id'=>$request->menu_id]);
            $service = $this->service->create($request->all());
            DB::commit();
            return redirect()->route('service.index',$request->menu_id)->with('success-message','Data telah disimpan');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error-message',$e->getMessage());
        }


    }

    public function show($id)
    {
        $data = $this->service->find($id);
        return $data;

    }

    public function edit($id,$menu_id)
    {
        $data = $this->service->find($id);
        return view('backend.service.edit',compact(['data','menu_id']));

    }

    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $request = $request->merge(['slug'=>str_slug($request->name)]);
            $this->service->find($id)->update($request->all());
            DB::commit();
            return redirect()->route('service.index',$request->menu_id)->with('success-message','Data telah dirubah');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error-message',$e->getMessage());
        }


    }

    public function destroy($id)
    {
        $this->service->destroy($id);
        return redirect()->back()->with('success-message','Data telah dihapus');

    }

}
