<?php

namespace App\Http\Controllers;
use App\Category;
use App\Subcategory;
use App\Job;
use App\AppliedJob;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
    	return view('admin.dashboard');
    }
    //category
    public function category(){
        $category=Category::latest()->paginate(10);
        return view('admin.category',compact('category'));
    }
    public function store_category(Request $r){
        $this->validate($r,[
			'category'               =>'required|string|min:3|unique:categories,category,',
           ]);
        $data=new Category;
        $data->category=$r->category;
        $data->save();
        return redirect()->back()->with('success', "Category  Added Successfully");
    }
    public function update_category(Request $r){
        $data=Category::findOrFail($r->id);
        $data->category=$r->category;
        $data->save();
        return response()->json($data);
    }
    public function delete_category($id){
        $data=Category::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('danger', "Category  delete Successfully");
    }
    //sub-category
    public function sub_category(){
        $category=Category::latest()->get();
        $sub_category=Subcategory::latest()->paginate(10);
        return view('admin.sub_category',compact('sub_category','category'));
    }
    public function store_sub_category(Request $r){
        $this->validate($r,[
			'sub_category'               =>'required|string|min:3|unique:subcategories,sub_category,',
			'category_id'               =>'required|integer',
           ]);
        $data=new Subcategory;
        $data->sub_category=$r->sub_category;
        $data->category_id=$r->category_id;
        $data->save();
        return redirect()->back()->with('success', "Subcategory  Added Successfully");
    }
    public function edit_sub_category($id){
        $category=Category::latest()->get();
        $data=Subcategory::findOrFail($id);
        return view('admin.edit_subcategory',compact('data','category'));
    }
    public function update_sub_category(Request $r,$id){
        $this->validate($r,[
			'sub_category'               =>'required|string|min:3|unique:subcategories,sub_category,'.$id,
			'category_id'               =>'required|integer',
           ]);
        $data=Subcategory::findOrFail($id);
        $data->sub_category=$r->sub_category;
        $data->category_id=$r->category_id;
        $data->save();
        return redirect()->back()->with('success', "Subcategory  update Successfully");
    }
    public function delete_sub_category($id){
        $data=Subcategory::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('danger', "Subcategory  delete Successfully");
    }
    //job
    public function joblist(){
        $jobs=Job::whereDate('deadline', '>=', date('Y-m-d'))->latest()->get();
        return view('admin.joblist',compact('jobs'));
    }
    public function approve_job($id){
        $data=Job::findOrFail($id);
        if($data->status){
            $data->status = 0;
            $msg = 'Job disable Successfully !';
        }else{
            $data->status = 1;
            $msg = 'Job approved Successfully !';
        }
        $data->save();
        return redirect()->back()->with('success', $msg);
    }
    public function delete_job($id){
        $data=Job::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('danger', 'Job deleted successfully');
    }
  
    public function JobShow($id)
    {
        $getJob=Job::findOrFail($id);
        return view('admin.jobshow',compact('getJob'));      

    }
    public function appliedjob()
    {              
       $app=AppliedJob::latest()->get();
       $category=Category::latest()->get();
       $subcategory=Subcategory::latest()->get();     

       return view('admin.online_application',compact('app','category','subcategory'));
    }
    public function viewResume($id)
    {
        $data = AppliedJob::find($id);
        $user=\App\User::find($data->user_id);
        $emp = $user->employee;
        $edu = $emp->education;
        $tr = $emp->training;
        $refe = $emp->reference;
        $data->seen='1';
        $data->save();
        return view('admin.resume',compact('emp','user','edu','tr','refe'));
    }
    public function applied_delete_job($id){
        $data=AppliedJob::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('danger', 'AppliedJob deleted successfully');
    }
    public function company_list(){
        $company=\App\Company::latest()->get();
        return view('admin.company_list',compact('company'));
    }
    public function company_delete($id){
       $data=\App\Company::findOrFail($id);
       if($data->locks){
        $data->locks = 0;
        $msg = 'Company Lock Successfully !';
        }else{
            $data->locks = 1;
            $msg = 'Company Unlock Successfully !';
        }
    $data->save();
    return redirect()->back()->with('success', $msg);
    }
    public function employee_list(){
        $employee=\App\Employee::latest()->get();
        return view('admin.employee_list',compact('employee'));
    }
    public function employee_delete($id){
        $data=\App\Employee::findOrFail($id);
        if($data->locks){
            $data->locks = 0;
            $msg = 'Employee Lock Successfully !';
        }else{
            $data->locks = 1;
            $msg = 'Employee Unlock Successfully !';
        }
        $data->save();
        return redirect()->back()->with('success', $msg);
    }

}
