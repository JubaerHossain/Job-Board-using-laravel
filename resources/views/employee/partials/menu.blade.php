<div class="col-md-3 sidebarr">
        <div class="row">
           <div class="col-md-12">
                      <div class="mobile-menu-left-overlay">

                      </div>
                               <nav class="side-menu hidden-sm hidden-xs">
                                  <ul>
                                     <li>
                                        <a href="javascript:void();" class="close">×</a>
                                     </li>
                                     <li>
                                        <a href="{{route('empDashboard')}}" class="">
                                        <i class="icon-home"></i>Home
                                        </a>
                                     </li>
                                     <li class="title">RESUME</li>
                                     <li>
                                        <a href="{{route('viewResum')}}" class="active">
                                        <i class="icon-view-resume"></i>  View Resume
           
                                        </a>
                                     </li>
                                     <li>
                                    
                                        <a href="{{ route('edit_Resume') }}" class="">
                                        <i class="icon-edit"></i>  Edit Resume
                                        </a>
                                      
                                     </li>
                                     <li>
                                        <a href="{{ route('uploadResume') }}" id="file" data-toggle="tooltip" data-placement="auto" title="" class="">
                                        <i class="icon-cloud-upload"></i>  Upload Resume
           
                                        </a>
                                     </li>
                                     <li>
                                        <a href="{{ route('employee.email_Resume') }}"  class="">
                                        <i class="icon-send-email"></i> Email Resume
                                        </a>
                                     </li>
                                     <li class="title">My Activities</li>
                                     <li>
                                     <a href="{{ route('empOnlineApp') }}">
                                     Online Application</a>
                                    </li>
                                     <li><a href="">
                                     Emailed Resume</a>
                                    </li>
                                     <li><a href="" >
                                     Shortlisted Job</a>
                                    </li>
                                    <li><a href="{{route('employe.invitation')}}" >
                                     Invitation Job</a>
                                    </li>
                                    <li>
                                       <a href="{{route('employe.company-invitation')}}" >
                                       Invitated by Company
                                      <span class="badge badge-pill badge-dark">{{$count}}</span>
                                    </a>
                                    </li>
                                    <li>
                                       <a href="{{route('followedemployee')}}" >
                                     Following Employer</a>
                                    </li>
                                     
                                     
                                     
                                     
                                      <li class="title">Assessment</li>
           
                                                
                                      <li>
                                        <a href="" class="">
                                       <i class="icon-certified-badge"></i> Employability Certification
                                        </a>
                                     </li>
                                    
                                    
                                        <li>
                                        <a href="" class="">
                                        <i class="icon-employer"></i> Assessment (for specific job)
                                        </a>
                                     </li>
                                     
                                      <li>
                                        <a href="" target="_blank" class="">
                                       <i class="icon-question"></i> Assessment Help
                                        </a>
                                     </li>
                                     
                                     
                                     
                                     <!-- end employer activity -->
                                     
                                     
                                     <li class="title">Personalization</li>
                                     <li>
                                        <a href="" onclick="ga('send', 'event', 'JobAgent', 'click', '/mybdjobs/masterview.asp', 1);" class="">
                                        <i class="icon-heart-o"></i> Favourite Search 
                                        </a>
                                     </li>
                                      
                                         <li>
                                        <a href="" onclick="ga('send', 'event', 'EmailNotification', 'click', '/mybdjobs/masterview.asp', 1);" class="">
                                         <i class="icon-training"></i> Trainings
                                        </a>
                                     </li>
                                     <li class="divider"></li>
                                      <li>
                                        <a href="" class="">
                                        <i class="icon-cogs"></i><strong> Account Settings</strong>
                                        
                                        </a>
                                     </li>
                                     <li>
                                     </li>
                                     <li>
                                        <a href="{{ route('empProfile') }}" target="_blank">
                                        <i class="icon-video-help"></i> Edit profile
                                        </a>
                                     </li>
                                     <li>
                                          <a href="{{ route('empPass') }}">                  
                                              <span class="nav-link-text">Change Password</span>
                                          </a>
                                      </li>
                                      <li>
                                          <a onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();" href="#">
                                             <i class="fa fa-fw fa-sign-out"></i>Logout</a>
                                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                             @csrf
                                       </form>
                                     </li>
                                   
                                  </ul>
                               </nav>
                            
                           </div>
       
           </div>
       </div>  