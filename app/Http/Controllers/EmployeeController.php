<?php

namespace App\Http\Controllers;

use App\AppliedJob;
use App\Country;
use App\Reference;
use App\Category;
use App\Training;
use App\Invite;
use App\Cinvitation;
use App\User;
use App\University;
use App\Job;
use File;
use PDF;
use Image;
use Mail;
use Dompdf\Dompdf;
use Dompdf\Options;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class EmployeeController extends Controller
{
    public function dashboard()
    {
        $basic = User::find(Auth::id());            
         $count=Cinvitation::where('user_id',$basic->id)->where('status',0)->get()->count(); 

    	return view('employee.new.index',compact('count'));
    }

    //show profile
    public function showProfile()
    {
        $user = User::find(Auth::id());
        $country = Country::all()->pluck('name');
         $basic = User::find(Auth::id());            
         $count=Cinvitation::where('user_id',$basic->id)->where('status',0)->get()->count(); 
        return view('employee.new.editProfile',compact('count','user','country'));
    }

    //update profile
    public function updateProfile(Request $request)
    {
        $this->validate(request(),[
            'name' =>'required|min:5',
            'phone' => 'required|numeric',
            'country' => 'required',
            'state' => 'required',
            'photo' => 'image|mimes:jpeg,jpg,png|max:12000',
            'address' => 'required|min:6',
        ]);

        if($request->hasFile('photo')){
            $imageName = Auth::id().'.jpg';
            $request->photo->move('employe/images/profile/',Auth::id().'.jpg');
        }else{
            if(User::find(Auth::id())->employee->photo != null){
                $imageName = User::find(Auth::id())->employee->photo;
            }else{
                $imageName = null;
            }
        }

        $user = User::find(Auth::id());

        $user->update([
          'name' => request('name'),
          'phone' =>request('phone'),
            'country' =>request('country'),
            'state' =>request('state'),
        ]);

        $user->employee()->update([
            'photo' => $imageName,
            'address' =>request('address'),
        ]);

        return redirect()->back()->with('updateSucc','Updated Successful');

    }

    //show passowrd change
    public function showPassword()
    {
        $basic = User::find(Auth::id());            
         $count=Cinvitation::where('user_id',$basic->id)->where('status',0)->get()->count(); 
        return view('employee.new.changePass',compact('count'));
    }

    //update password
    public function updatePassword()
    {
        $this->validate(request(),[
            'old_password' => 'required',
            'password' => 'required|confirmed'
        ]);

        if(Hash::check(request('old_password'),User::find(Auth::id())->password)){
            User::find(Auth::id())->update([
                'password' => bcrypt(request('password'))
            ]);
            return redirect()->back()->with('passSucc','Password Updated!');
        }else{
            return redirect()->back()->with('passErr','Old Password Does Not Match!');
        }
    }

   
    //update CV data
    public function updateResume(Request $request){
       
        
        

        $this->validate($request,[
            /* 'mobile' => 'numeric', */
            'birthday' => 'date',
            'current_income' => 'numeric',
            'expected_income' => 'numeric',
            'photo' => 'mimes:jpg,jpeg,png|max:1200'
        ]);

        

        if(request('birthday') != null){
            $birthday = date('Y-m-d',strtotime(request('birthday')));
        }

        $getUser = User::find(Auth::id());
        $getUserEmployeeId = $getUser->employee->id;
        
        //employee basic section
        $getUser->employee()->update([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'mobile' => request('mobile'),
            'email' => request('email'),
            'birthday' => $birthday,
            'blood_group' => request('blood_group'),
            'address' => request('address'),

            'objective' => request('objective'),
            'current_income' => request('current_income'),
            'expected_income' => request('expected_income'),
            'current_company' => request('current_company'),
            'experience' => request('experience'),

            'job_location' => request('job_location'),
            'skills' => implode(" ",request('skills')),
            'org_type' => request('org_type'),

            'top_skills' => request('top_skills'),
            'skills_description' => request('skills_description'),
            'language' => request('language'),
            'summary' => request('summary'),
            'duty' => request('duty'),
            'job_typ' => request('job_typ'),
            'father' => request('father'),
            'mother' => request('mother'),
            'marital_status' => request('marital_status'),
            'nat_id' => request('nat_id'),
            'religion' => request('religion'),
            'curr_address' => request('curr_address'),
        ]);
        //education section
        $getUser->employee->education()->updateOrCreate(
            ['employee_id' => $getUserEmployeeId ],
            [
                'inst1_name' => request('inst1_name'),
                'inst1_degree' => request('inst1_degree'),
                'inst1_result' => request('inst1_result'),
                'inst1_subject' => request('inst1_subject'),
                'inst1_duration' => request('inst1_duration'),
                'inst1_year' => request('inst1_year'),
                'inst1_gpa' => request('inst1_gpa'),
                'inst2_name' => request('inst2_name'),
                'inst2_degree' => request('inst2_degree'),
                'inst2_result' => request('inst2_result'),
                'inst2_subject' => request('inst2_subject'),
                'inst2_duration' => request('inst2_duration'),
                'inst2_year' => request('inst2_year'),
                'inst2_gpa' => request('inst2_gpa'),
                'inst3_name' => request('inst3_name'),
                'inst3_degree' => request('inst3_degree'),
                'inst3_result' => request('inst3_result'),
                'inst3_subject' => request('inst3_subject'),
                'inst3_duration' => request('inst3_duration'),
                'inst3_year' => request('inst3_year'),
                'inst3_gpa' => request('inst3_gpa'),
            ]
        );
     

        //training update
        $course_name = request('course_name');
        $course_duration = request('course_duration');
        $course_id = request('course_id');
        foreach ($course_name as $k => $v){
            if($course_id[$k] == 'null' ){
                User::find(Auth::id())->employee->training()->create([
                    'course_name' => $course_name[$k],
                    'course_duration' => $course_duration[$k]
                ]);
            }else{
                $cr = Training::find($course_id[$k]);
                $cr->course_name = $course_name[$k];
                $cr->course_duration = $course_duration[$k];
                $cr->save();
            }

        }

        //reference update
        $ref_name = request('ref_name');
        $ref_org_name = request('ref_org_name');
        $ref_designation = request('ref_designation');
        $ref_phone = request('ref_phone');
        $ref_email = request('ref_email');
        $ref_id = request('ref_id');
        //dd(request()->all());
        foreach ($ref_id as $k => $v){
            if($ref_id[$k] == 'null'){
                User::find(Auth::id())->employee->reference()->create([
                    'ref_name' => $ref_name[$k],
                    'ref_designation' => $ref_designation[$k],
                    'ref_phone' => $ref_phone[$k],
                    'ref_email' => $ref_email[$k],
                    'ref_org_name' => $ref_org_name[$k],
                ]);
            }else{
                $re = Reference::find($ref_id[$k]);
                $re->ref_name = $ref_name[$k];
                $re->ref_org_name = $ref_org_name[$k];
                $re->ref_designation = $ref_designation[$k];
                $re->ref_phone = $ref_phone[$k];
                $re->ref_email = $ref_email[$k];
                $re->save();
            }
        }
        if($request->hasFile('photo')){
            $file = $request->file('photo');
             $name =  $file->getClientOriginalName();
             $imageNames = $nameReplacer = time() .'-'.$getUser->employee->id. '.' . $file->getClientOriginalExtension();
             $canvas = Image::canvas(124, 135);
             $image  = Image::make($file->getRealPath())->resize(124, 135, function($constraint)
             {
              $constraint->aspectRatio();
             });
             $canvas->insert($image, 'center');
            $canvas->save('employe/images/profile//'.$nameReplacer);

            $oldImg = $getUser->employee->photo;
            $getUser->employee->photo = $imageNames;
            File::delete('employe/images/profile//'.$oldImg);
       
    }
                $data=University::firstOrCreate(['name' => $request->inst3_name]);
                $data->name=$request->inst3_name;
                $data->save();

       $getUser->employee->save();
     
        return redirect()->back()->with('resUpSucc','Resume Updated!');
    }

    //delete a training
    public function deleteTrainingResume($id)
    {
        Training::find($id)->delete();
        return redirect()->back()->with('resUpSucc','Training Deleted!');
    }

    //delete a reference from resume
    public function deleteReferenceResume($id)
    {
        Reference::find($id)->delete();
        return redirect()->back()->with('resUpSucc','Reference Deleted!');
    }

    //show upload resume
    public function showUploadResume()
    {
        $basic = User::find(Auth::id());            
        $count=Cinvitation::where('user_id',$basic->id)->where('status',0)->get()->count(); 

        return view('employee.new.uploadResume',compact('count'));
    }

    //upload a resume
    public function uploadResume(Request $request)
    {
       
        $this->validate(request(),[
            'resume' => 'required|mimes:pdf,doc,docx|max:1200'
        ]);

        if($request->hasFile('resume')){
            $request->file('resume')->move('employe/resume/',Auth::user()->name .'_'. Auth::id().'_cv'.'.'.Input::file('resume')->getClientOriginalExtension());
            User::find(Auth::id())->employee()->update([
                'resume' => Auth::id().'.'.Input::file('resume')->getClientOriginalExtension()
            ]);
            return redirect()->back()->with('resSecc','File Uploaded Successfully!');
        }else{
            return redirect()->back()->with('resError','Something is wrong!');
        }
    }


    public function viewResum()
    {
        $user = User::find(Auth::id());
        $emp = $user->employee;
        $edu = $emp->education;
        $tr = $emp->training;
        $refe = $emp->reference;     
        $basic = User::find(Auth::id());            
         $count=Cinvitation::where('user_id',$basic->id)->where('status',0)->get()->count(); 
        return view('employee.new.viewResume',compact('count','emp','user','edu','tr','refe'));
    }

    //show job apply page for employee
    public function showApplyJob($id)
    {
         $basic = User::find(Auth::id());            
         $count=Cinvitation::where('user_id',$basic->id)->where('status',0)->get()->count(); 
        return view('employee.new.jobApply',compact('count','id'));
    }

    //apply a job
    public function applyJob(Request $request,$id)
    {
        $this->validate(request(),[
            'expected_salary' => 'required'
        ]);

        AppliedJob::create([
            'job_id' => $id,
            'user_id' => Auth::id(),
            'expected_salary' => request('expected_salary'),
            'seen' => 0
        ]);
        $job=Job::find($id);
        $email=$job->company->user->email;
        $username=$job->company_name;
        $title = 'Job application';
        $salary=$request->expected_salary;
        Mail::send('employee.mail.appliedMail', ['salary'=> $salary,'emlpoye'=>Auth::user()->name,'title' => $title, 'company_name' => $job->company_name,'job_title' => $job->title], function ($message)use($email,$username){
          $message->from('dreamlpoyblog@gmail.com', 'Dreamploy Jobsite')->subject
          ('Job application');
          $message->to($email, $username);
      });

        return redirect()->route('empDashboard')->with('applySucc','Applied Successfully!');
    }

    //show online application
    public function showOnlineApplication()
    {
        $application = User::find(Auth::id())->applied_jobs;
        $basic = User::find(Auth::id());            
        $count=Cinvitation::where('user_id',$basic->id)->where('status',0)->get()->count(); 
        return view('employee.new.onlineApplication',compact('count','application'));
    }

    //delete an application
    public function deleteApplication($id)
    {
        AppliedJob::find($id)->delete();
        return redirect()->back()->with('delSuc','Application Removed!');
    }


    //j
    
    public function edit_Resume()
    {
        $basic = User::find(Auth::id());
        $cat=Category::all();
        $emp = $basic->employee;
        
        $edu = $emp->education;
        $train = $emp->training;
        $ref = $emp->reference;
        $basic = User::find(Auth::id());            
         $count=Cinvitation::where('user_id',$basic->id)->where('status',0)->get()->count(); 
        return view('employee.new.editResume',compact('count','cat','basic','emp','edu','train','ref'));
    }
     public function invitation_job()
     { 
        $basic = User::find(Auth::id());               
        $data=Invite::where('user_id',$basic->id)->get();
        $basic = User::find(Auth::id());            
         $count=Cinvitation::where('user_id',$basic->id)->where('status',0)->get()->count(); 
       return view('employee.new.companyInvitaiton',compact('count','data'));
       
     }
     public function company_invitation()
     { 
        $basic = User::find(Auth::id());            
        $data=Cinvitation::where('user_id',$basic->id)->get();
        $count=Cinvitation::where('user_id',$basic->id)->where('status',0)->get()->count();       
       return view('employee.new.Invitaiton',compact('data','count'));
       
     }
     public function viewInvitation($id)
     {
        $data=Cinvitation::findOrFail($id);
        $data->status=1;
        $data->save();        
        return response()->json($data);
         
     }

     public function followedemployee()
     {
        $basic = User::find(Auth::id());    
        $count=Cinvitation::where('user_id',$basic->id)->where('status',0)->get()->count();  
         return view('employee.new.followedemployee',compact('count'));
     }
     public function email_Resume()
     {
        $basic = User::find(Auth::id());    
        $count=Cinvitation::where('user_id',$basic->id)->where('status',0)->get()->count();  
         return view('employee.emailResume',compact('count'));
     }
 
}
