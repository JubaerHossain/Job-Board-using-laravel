<?php

namespace App\Http\Controllers;

use App\Category;
use App\Subcategory;
use App\Country;
use App\Cinvitation;
use App\Attributes;
use App\Invite;
use App\City;
use App\Job;
use App\University;
use App\Employee;
use App\education;
use App\AppliedJob;
use Carbon;
use DB;
use Mail;
use App\State;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CompanyController extends Controller
{
    public function dashboard()
    {
        $id=Auth::id();
        $company = User::find(Auth::id())->company;      
        $jobs=Job::whereDate('deadline', '>=', date('Y-m-d'))->where('company_id',$company->id)->where('publish_status','yes')->get();
        $draft_job=Job::where('company_id',$company->id)->where('publish_status','no')->get();
        $archived_job=Job::whereDate('deadline', '<', date('Y-m-d'))->where('company_id',$company->id)->where('publish_status','yes')->get();       
        $totalJob=$jobs->count();
        $totalJob_draft=$draft_job->count();
        $totalJob_archived=$archived_job->count();
        
        return view('company.home',compact('totalJob_archived','totalJob_draft','archived_job','draft_job','totalJob','jobs'));
    }

    //view post job page
    public function showPostJob()
    {
        $jobCategory = Category::all();
        return view('company.postjob',compact('jobCategory'));
    }

    //post a job by company
    public function postJob(Request $request)
    {
        $this->validate(request(),[
            'title' => 'required|min:10',
            'vacancy' => 'required',
            'job_category' => 'required',
            'sub_category' => 'required',
            'organization' => 'required',
            'job_type' => 'required',
            'job_range' => 'required',
            'key_points' => 'required',
            'details' => 'required',
            'year_of_experience_upper' => 'required',
            'year_of_experience_lower' => 'required',
            'education_requirement' => 'required',
            'job_requirement' => 'required',
            'additional_requirements' => 'required',
            'benefits' => 'required',
            'deadline' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'string',
            'job_location' => 'required',
            'salary_upper' => 'required',
            'salary_lower' => 'required',
            'applyOption'=> 'required',
        ]);

        $deadline = date('y-m-d',strtotime(request('deadline')));
        if(request('photo_enclose') != 'yes' ){
            $photo = 'no';
        }else{
            $photo = request('photo_enclose');
        }
        if(request('publish_status') != 'yes' ){
            $publish_status = 'no';
        }else{
            $publish_status = request('publish_status');
        }

        $getOption = implode(',',request('applyOption'));
       /*   dd($request->vacancy); */
       if($request->vacancy){
        $vacancy=$request->vacancy;
       } 
       elseif(request('vacancy_status') == null){
            $vacancy = 0;
        }else{
            $vacancy = request('vacancy_status');
        }

        Job::create([
            'company_id' => User::find(Auth::id())->company->id,
            'category_id' => request('job_category'),
            'subcategory_id' => request('sub_category'),
            'title' => request('title'),
            'company_name' => User::find(Auth::id())->company->name,
            'salary_upper' => request('salary_upper'),
            'salary_lower' => request('salary_lower'),
            'salary_type' => request('salary_type'),
            'organization_type' => request('organization'),
            'min_experience' => request('year_of_experience_lower'),
            'country' => request('country'),
            'state' => request('state'),
            'city' => request('city'),
            'street_location' => request('job_location'),
            'type' => request('job_type'),
            'deadline' => $deadline,
            'publish_status' => $publish_status,
        ])->attributes()->create([
            'key_points' => request('key_points'),
            'details' => request('details'),
            'education_requirement' => request('education_requirement'),
            'year_of_experience' => request('year_of_experience_lower'),
            'year_of_experience_upper' => request('year_of_experience_upper'),
            'year_of_experience_lower' => request('year_of_experience_lower'),
            'experience_requirement' => request('experience_requirement'),
            'vacancy' => $vacancy,
            'gender_type' => request('gender_type'),
            'job_location' => request('city').','.request('state').','.request('country'),
            'job_requirement' => request('job_requirement'),
            'job_range' => request('job_range'),
            'additional_requirements' => request('additional_requirements'),
            'benefits' => request('benefits'),
            'apply_option' => $getOption,
            'photo_enclose' => $photo,
        ]);

        return redirect()->back()->with('job_success','Job Posted Successfully');

    }

    public function postJobShow($id)
    {
        $getJob=Job::findOrFail($id);
        return view('company.showJob',compact('getJob'));
       

    }
    public function editpost($id)
    {
        $user=User::find(Auth::id());
        $job=Job::findOrFail($id);
        $country=Country::all();
        $city=City::all();       
        $state=State::all();
        $subCategory=Subcategory::all();
        $jobCategory = Category::all();
        return view('company.editpostjob',compact('user','country','city','state','subCategory','job','jobCategory'));
       

    }
    public function postJobEdit(Request $request,$id)
    {
       
        $this->validate($request,[
            'title' => 'required|min:10',
            'vacancy' => 'required',
            'job_category' => 'required',
            'sub_category' => 'required',
            'organization' => 'required',
            'job_type' => 'required',
            'job_range' => 'required',
            'key_points' => 'required',
            'details' => 'required',
            'year_of_experience_upper' => 'required',
            'year_of_experience_lower' => 'required',
            'education_requirement' => 'required',
            'job_requirement' => 'required',
            'additional_requirements' => 'required',
            'benefits' => 'required',
            'deadline' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'string',
            'job_location' => 'required',
            'salary_upper' => 'required',
            'salary_lower' => 'required',
            'applyOption'=> 'required',
            'photo_enclose' => 'required',
        ]);

        $deadline = date('y-m-d',strtotime(request('deadline')));
        if(request('photo_enclose') != 'yes' ){
            $photo = 'no';
        }else{
            $photo = request('photo_enclose');
        }
        if(request('publish_status') != 'yes' ){
            $publish_status = 'no';
        }else{
            $publish_status = request('publish_status');
        }

        $getOption = implode(',',request('applyOption'));
       /*   dd($request->vacancy); */
       if($request->vacancy){
        $vacancy=$request->vacancy;
       } 
       elseif(request('vacancy_status') == null){
            $vacancy = 1;
        }else{
            $vacancy = request('vacancy_status');
        }
       
          $job=Job::findOrFail($id);       

       
            $job->company_id = User::find(Auth::id())->company->id;
            $job->category_id = request('job_category');
            $job->subcategory_id = request('sub_category');
            $job->title = request('title');
            $job->company_name = User::find(Auth::id())->company->name;
            $job->salary_upper = request('salary_upper');
            $job->salary_lower = request('salary_lower');
            $job->salary_type = request('salary_type');
            $job->organization_type = request('organization');
            $job->min_experience = request('year_of_experience_lower');
            $job->country = request('country');
            $job->state = request('state');
            $job->city = request('city');
            $job->street_location = request('job_location');
            $job->type = request('job_type');
            $job->deadline = $deadline;            
            $job->publish_status = $publish_status;
            $job->save();
            $job=Attributes::findOrFail($id);  
            $job->key_points = request('key_points');
            $job->details = request('details');
            $job->education_requirement = request('education_requirement');
            $job->year_of_experience = request('year_of_experience_lower');
            $job->year_of_experience_upper = request('year_of_experience_upper');
            $job->year_of_experience_lower = request('year_of_experience_lower');
            $job->experience_requirement = request('experience_requirement');
            $job->vacancy = $vacancy;
            $job->gender_type = request('gender_type');
            $job->job_location = request('city').','.request('state').','.request('country');
            $job->job_requirement = request('job_requirement');
            $job->job_range = request('job_range');
            $job->additional_requirements = request('additional_requirements');
            $job->benefits = request('benefits');
            $job->apply_option = $getOption;
            $job->photo_enclose = $photo;

            $job->save();
        

        return redirect()->back()->with('job_success','Job edit Successfully');

    }

    //show profile page
    public function showProfile()
    {
        $country = Country::all()->pluck('name');
        $user = User::find(Auth::id());
        $company = $user->company;
        return view('company.editProfile',compact(['country','user','company']));
    }

    //update general profile
    public function updateGeneralProfile()
    {
        $this->validate(request(),[
            'username' => 'required|min:5',
            'phone' => 'required|numeric',
            'country' => 'required',
            'state' => 'required'
        ]);
//        dd(Auth::id());
        User::find(Auth::id())->update([
            'name' => request('username'),
            'phone' => request('phone'),
            'country' => request('country'),
            'state' => request('state')
        ]);

        return redirect()->back()->with('updateSuccess','Update Successful!');
    }

    //update company details
    public function updateCompanyProfile(Request $request)
    {
        $this->validate(request(),[
            'name' => 'required|min:4',
            /* 'description' => 'required|min:10',
            'address' => 'required|min:10',
            'about' => 'required|min:10',
            'video' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'linkedin' => 'required', */
            'image' => 'image|mimes:jpg,png,jpeg|max:12000',
           /*  'website' => 'required', */
            'company_person' => 'required',
            'person_contact' => 'required',
            'person_designation' => 'required',
        ]);

        if($request->hasFile('image')){
            $request->file('image')->move('company/images/company_logo/',Auth::id().'.jpg');
        }

        User::find(Auth::id())->company->update([
            'name' => request('name'),
            'description' => request('description'),
            'address' => request('address'),
            'about' => request('about'),
            'video' => request('video'),
            'facebook' => request('facebook'),
            'twitter' => request('twitter'),
            'linkedin' => request('linkedin'),
            'image' => Auth::id().'.jpg',
            'website' => request('website'),
            'company_person' => request('company_person'),
            'person_contact' => request('person_contact'),
            'person_designation' =>   request('person_designation'),
        ]);

        return redirect()->back()->with('updateSuccess','Update Successful!');
    }

    //show change password
    public function showPassword()
    {
        return view('company.password');
    }

    //update company password
    public function changePassword()
    {
        $this->validate(request(),[
            'prev_password' => 'required',
            'password' => 'required|min:5|confirmed'
        ]);

        $matchPassword = Hash::check(request('prev_password'),User::find(Auth::id())->password);

        if($matchPassword){

            User::find(Auth::id())->update([
                'password' => bcrypt(request('password'))
            ]);

            return redirect()->back()->with('passSuc','Password Update Successful!');

        }else{
            return redirect()->back()->with('updateErr','Old Password Not Matched!');
        }

    }
    public function postJobpublish($id)
    {
        
         $publish=Job::findOrFail($id);
         $publish->publish_status='yes';
         $publish->save();        
        return redirect()->back()->with('updateSuccess','Job Publish Successful!');
    }
     public function applicantShow()
     {        
        return view('company.applicant');
     }
    
     public function applicantSho()
     {              
        $app=AppliedJob::latest()->get();
        $category=Category::latest()->get();
        $subcategory=Subcategory::latest()->get();     

        return view('company.applicant',compact('app','category','subcategory'));
     }
     public function message($id)
     {
        $user=User::find($id);
        return view('company.companyMessage',compact('user'));
     }
     public function viewResume($id)
     {
         $data = AppliedJob::find($id);
         $user=User::find($data->user_id);
         $emp = $user->employee;
         $edu = $emp->education;
         $tr = $emp->training;
         $refe = $emp->reference;
         $data->seen='1';
         $data->save();
         return view('company.resume',compact('emp','user','edu','tr','refe'));
     }
     public function CompanyResume($id)
     {
        $user=User::find($id);
        $emp = $user->employee;
        $edu = $emp->education;
        $tr = $emp->training;
        $refe = $emp->reference;
        return view('company.resume',compact('emp','user','edu','tr','refe'));
     }
     public function Applicant_invites(Request $request,$id)
     { 
         $data=AppliedJob::findOrFail($id);
         $data->status=0;
         $data->save();        
         return response()->json([
            'success' => 'Invites Sent'
        ]);
     }
     public function Applicant_invterview(Request $request,$id)
     {
         $job=AppliedJob::findOrFail($id);        
        $this->validate(request(),[
            'date' => 'required',
        ]);
        
        $data=new Invite();
        $data->user_id=$job->user_id;
        $data->job_id=$job->job_id;
        $data->app_id=$id;
        $data->date=$request->date;
        $user=User::find($job->user_id);
        $jobcom=Job::find($job->job_id);
        $data->save();
        $job->status=1;
        $job->save();    
        $notification = array(
            'message' => 'Invitation sent!', 
            'alert-type' => 'success'
        ); 
        $email=$user->email;
        $username=$user->name;
        $title = 'Dreamploy job inviation';
        Mail::send('company.mail.InvitationMail', ['email'=> $email,'date' => $request->date,'title' => $title, 'name' => $username,'company_name' => $jobcom->company_name,'job_title' => $jobcom->title], function ($message)use($email,$username){
            $message->from('dreamlpoyblog@gmail.com', 'Dreamploy Jobsite')->subject
            ('Dreamploy job inviation');
            $message->to($email, $username);
        });   
        return redirect()->back()->with($notification);
        
     }
     public function emplyee_search(Request $request)
     {
        
        $app=AppliedJob::latest()->get();
        $category=Category::latest()->get();
        $subcategory=Subcategory::latest()->get();
        if ($request->cat != 0  or $request->sub_cat != 0) {
           
            $cat=$request->cat;
            $sub_cat=$request->sub_cat;
           return view('company.applicant_search',compact('subcategory','category','app','cat','sub_cat'));
        }
        else{
           return redirect()->route('Em_applican');
        }
     }
     public function cv_view($id)
     {
         $user = User::find($id);
         $emp = $user->employee;
         $edu = $emp->education;
         $tr = $emp->training;
         $refe = $emp->reference;
         return view('company.resume',compact('emp','user','edu','tr','refe'));
     }
     public function cv_lookup()
     {            
            $users=User::where('role','employee')->get();
            $university = University::all();
            return view('company.lookCv',compact('university','users'));
        
     }
     public function total_cv(Request $request)
     {
         
        $company = User::find(Auth::id())->company;      
        $jobs=Job::whereDate('deadline', '>=', date('Y-m-d'))->where('company_id',$company->id)->where('publish_status','yes')->get();
        $university = University::all();
        $data=DB::table('employees')
        ->join('users', 'employees.user_id', '=', 'users.id')
        ->join('education', 'employees.id', '=', 'education.employee_id')
        ->select('users.*','users.id as users_id', 'employees.*','employees.photo', 'education.*')
        ->where('country',$request->country)
        ->where('state',$request->state)
        ->Where('inst3_name',$request->university)
        ->Where('skills','LIKE','%'.$request->category.'%')
        ->get();
          return view('company.totalCv',compact('data','university','jobs'));
     }
     public function invitation(Request $request)
     { 
        $validator = \Validator::make($request->all(), [
            'message' => 'required',
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()],400);
        }
          $data=new Cinvitation();
          $data->job_id=$request->job_id;
          $data->user_id=$request->user_id;
          $data->company_id=Auth::user()->id;
          $data->message=$request->message;
          $data->save();
          $user=User::find($request->user_id);
          $jobcom=Job::find($request->job_id);
          $email=$user->email;
          $username=$user->name;
          $messag=$request->message;
          $title = 'Dreamploy job inviation';
          Mail::send('company.mail.companyInviteMail', ['messag' => $messag,'email'=> $email,'date' => $request->date,'title' => $title, 'name' => $username,'company_name' => $jobcom->company_name,'job_title' => $jobcom->title], function ($message)use($email,$username){
            $message->from('dreamlpoyblog@gmail.com', 'Dreamploy Jobsite')->subject
            ('Dreamploy job inviation');
            $message->to($email, $username);
        }); 
          return response()->json(["success","Invitation sent !"],200);
        
     }
}
