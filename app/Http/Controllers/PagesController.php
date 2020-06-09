<?php

namespace App\Http\Controllers;

use App\AppliedJob;
use App\Category;
use App\Employee;
use App\Company;
use App\Country;
use App\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function index()
    {
        $category = Category::all();
        $country = Country::all();
        $active =Job::whereDate('deadline', '>=', date('Y-m-d'))->count() + 5860;
        $companies =Company::where('status', 1)->count() + 1860;
        $emp =Employee::count() + 3155;
        $hot=Job::whereDate('deadline', '>=', date('Y-m-d'))->where('status',1)->latest()->take(4)->get();
        $high=Job::whereDate('deadline', '>=', date('Y-m-d'))->where('status',1)->orderBy('salary_upper', 'DESC')->take(4)->get();
        return view('home.home',compact(['category','country','hot','high','active','companies','emp']));
    }

    //show search page
    public function showSearchPage()
    {
        $getJobs = Job::latest()->where('status',1)->paginate(20);
        $cntry = Country::all();
        return view('home.search',compact('cntry'));
    }

    //This function will execute when search from root page '/' with post request
    public function searchFromHome()
    {
        $keyword = request('keyword');
        $country = request('country');
        $category = request('category');
        $cntry = Country::all();
        return view('home.search',compact(['keyword','country','category','cntry']));

    }

    //ajax search
    public function ajaxSearch()
    {
        $keyword = '';
        $country = '';
        $category = '';
        $type = '';
        $state = '';
        $city = '';
        $salary_upper = 0;
        $salary_lower = 2000000;
        $experience = '';
        $org = '';


        if(isset($_GET['key'])){
            $keyword = $_GET['key'];
        }
        if(isset($_GET['country'])){
            $country = $_GET['country'];
        }
        if(isset($_GET['category'])){
            $getCategory = $_GET['category'];
            if($getCategory != ''){
                $catId = Category::where('category',$getCategory)->first()->id;
                $category = $catId;
            }else{
                $category = '';
            }

        }
        if(isset($_GET['type'])){
            $type = $_GET['type'];
        }
        if(isset($_GET['salary'])){
            $salary = $_GET['salary'];
            if($salary != null){
                $getSalary = array();
                $getSalary = explode(",",$salary);
                $salary_upper = $getSalary[0];
                $salary_lower = $getSalary[1];
            }

        }
        if(isset($_GET['state'])){
            $state = $_GET['state'];
        }
        if(isset($_GET['city'])){
            $city = $_GET['city'];
        }
        if(isset($_GET['experience'])){
            $experience = $_GET['experience'];
        }
        if(isset($_GET['org'])){
            $org = $_GET['org'];
        }


        $search = Job::
            whereDate('deadline', '>=', date('Y-m-d'))
            ->where('status',1)
            ->where('type','like','%'.$type.'%')
            ->where('title','like','%'.$keyword.'%')
            ->where('country','like','%'.$country.'%')
            ->where('category_id','like','%'.$category.'%')
            ->where('state','like','%'.$state.'%')
           // ->where('city','like','%'.$city.'%')
            ->where('min_experience','like','%'.$experience.'%')
            ->where('organization_type','like','%'.$org.'%')
           // ->where('salary_upper','BETWEEN','0','AND',$salary_upper)
            //->orWhere('salary_lower','BETWEEN',$salary_upper,'AND',$salary_lower)
//            ->where('salary_lower','<=',$salary_lower)
//            ->orWhere('salary_upper','>=',$salary_upper)
             ->where(function ($q) use ($salary_lower,$salary_upper){
                 $q->orWhere('salary_lower','<=',$salary_lower)
                     ->where('salary_upper','>=',$salary_upper)
                    ->orWhere('salary_upper','<=',$salary_lower)
                     ->where('salary_lower','>=',$salary_upper);
            })
            ->latest()->paginate(20);
        return $search;
        //return $salary_lower;
    }


    //show company
    public function showCompany($id)
    {
        if($company = Company::find($id)){
            $companyJobs = $company->jobs()->paginate(2);
        }else{
            return redirect()->back();
        }

        return view('employee.companyView',compact(['company','companyJobs']));
    }

    //show job details
    public function showJob($id)
    {
        if($getJob = Job::find($id)){
            $applyStatus = AppliedJob::where('job_id',$id)->where('user_id',Auth::id())->get()->count();
        }else{
            return redirect()->back();
        }

        return view('home.jobapply',compact('getJob','id','applyStatus'));
    }

    //company packages
    public function companyPackage()
    {
        return view('home.companyPackage');
    }

    //basic package
    public function basicPackage()
    {
        return view('home.basicJobPosting');
    }

    //ad package
    public function adPackage()
    {
        return view('home.adPack');
    }

    //service package
    public function servicePackage()
    {
        //need to add
        return 'need to add something';
    }

    //help
    public function help()
    {
        return view('home.help');
    }
}
