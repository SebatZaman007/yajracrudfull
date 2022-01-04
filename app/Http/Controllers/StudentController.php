<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class StudentController extends Controller
{
    public function adminIndex(Request $request){

        if ($request->ajax()) {
            $data = Student::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a href="' . route('admin.edit', $data->id) . '" class="edit btn btn-warning btn-sm "><i class="fas fa-pencil-alt"></i></a>';
                    $btn = $btn.'<a href="' . route('admin.delete', $data->id) . '" class="edit btn btn-danger btn-sm "><i class="fas fa-trash-alt"></i></a>';
                    return $btn;
                })
                ->editColumn('profile_image',function ($data){
                    if($data->profile_image){
                        $url=asset(BlogImage().$data->profile_image);
                        return '<img src='.$url.' border="0" width="70" class="img-rounded" align="center" >';
                    }
                    else{
                        return "no image";
                    }
                })

                ->rawColumns(['action','profile_image'])
                ->make(true);
        }
        return view('admin.pages.index');
    }

    public function adminCreate(){
        return view('admin.pages.create');
    }

    public function adminStore(Request $request){
        if (!empty($request->profile_image)) {
            $profile_image = fileUpload($request['profile_image'], BlogImage());
        } else {
            return redirect()->back()->with('toast_error', __('Image is  required'));
        }
        $store= Student::create([
            'campus_id'=>$request->campus_id,
            'name'=>$request->name,
            'profile_image'=>$profile_image,
            'subject'=>$request->subject,
        ]);

        return redirect()->route('admin.index');

    }

    public function adminEdit($id){
        $edit=Student::where('id',$id)->first();
         return view('admin.pages.edit',compact('edit'));
    }
    public function adminUpdate(Request $request){
        $id=$request->id;
        if (!empty($request->profile_image)) {
            $profile_image = fileUpload($request['profile_image'], BlogImage());
        } else {
            return redirect()->back()->with('toast_error', __('Image is  required'));
        }
         Student::where('id',$id)->update([
            'campus_id'=>$request->campus_id,
            'name'=>$request->name,
            'profile_image'=>$profile_image,
            'subject'=>$request->subject,
        ]);
        return redirect()->route('admin.index');

    }
    public function adminDelete($id){
        Student::where('id',$id)->delete();
         return redirect()->route('admin.index');
    }
}
