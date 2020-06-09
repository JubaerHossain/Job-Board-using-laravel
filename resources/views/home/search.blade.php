@extends('layouts.home')
@section('title','| Search')

@section('content')

    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-md-3">
                <div class="filter">
                    <div class="filter-title">
                        <h3 class="title">Filter</h3>
                    </div>
                    <div class="filter-type">
                        <span class="fill-title">Job Type</span>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jobtype" value="Full-Time" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Full-Time
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jobtype" value="Part-Time" id="defaultCheck2">
                            <label class="form-check-label" for="defaultCheck2">
                                Part-time
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jobtype" value="Remote" id="defaultCheck3">
                            <label class="form-check-label" for="defaultCheck3">
                                Remote
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jobtype" value="Freelance" id="defaultCheck4">
                            <label class="form-check-label" for="defaultCheck4">
                                Freelance
                            </label>
                        </div>
                    </div>
                    <div class="filter-salary">
                        <span class="fill-title">Salary</span>
                        <div class="form-check">
                            <input class="form-check-input" name="salary" type="radio" value="10000,20000" id="defaultCheck11">
                            <label class="form-check-label" for="defaultCheck11">
                                <div class="d-flex justify-content-between">
                                    <div class="fill-sal">
                                        10,000-20,000 BDT
                                    </div>
                                    <div class="p-l-30 cl-off">
                                        {{--(1,0000)--}}
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="salary" type="radio" value="20000,50000" id="defaultCheck22">
                            <label class="form-check-label" for="defaultCheck22">
                                <div class="d-flex justify-content-between">
                                    <div class="fill-sal">
                                        20,000-50,000 BDT
                                    </div>
                                    <div class="p-l-30 cl-off">
                                        {{--(12,000)--}}
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="salary" type="radio" value="50000,100000" id="defaultCheck33">
                            <label class="form-check-label" for="defaultCheck33">
                                <div class="d-flex justify-content-between">
                                    <div class="fill-sal">
                                        50,000-1,00,000 BDT
                                    </div>
                                    <div class="p-l-30 cl-off">
                                        {{--(12,000)--}}
                                    </div>
                                </div>
                            </label>
                        </div>

                    </div>
                    <div class="filter-location">
                        <div class="col-md-10" id="p-0">
                            <span class="fill-title">Location</span>
                            <div class="select">
                                <select name="country" class="custom-select" id="inputGroupSelect01">
                                    <option selected>Select Country</option>
                                    @foreach($cntry as $c)
                                        <option value="{{ $c->name }}">{{ $c->name }}</option>
                                    @endforeach    
                                </select>
                            </div>
                            <div class="select">
                                <select name="state" class="custom-select getState" id="inputGroupSelect01">
                                    <option selected>Select Division</option>
                                </select>
                            </div>
                            <div class="select">
                                <select name="city" class="custom-select getCity" id="inputGroupSelect01">
                                    <option selected>Select City</option>

                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="filter-experience">
                        <div class="col-md-10" id="p-0">
                            <span class="fill-title">Year Of Experience</span><br>
                            <div class="form-check form-check-inline">
                                <input name="experience" class="form-check-input" type="radio" id="ex1" value="1">
                                <label class="form-check-label" for="ex1">1 years</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input name="experience" class="form-check-input" type="radio" id="ex2" value="2">
                                <label class="form-check-label" for="ex2">2 years</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input name="experience" class="form-check-input" type="radio" id="inlineCheckbox3" value="3">
                                <label class="form-check-label" for="inlineCheckbox3">3 years</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input name="experience" class="form-check-input" type="radio" id="inlineCheckbox44" value="4">
                                <label class="form-check-label" for="inlineCheckbox44">4 years</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input name="experience" class="form-check-input" type="radio" id="inlineCheckbox4" value="0">
                                <label class="form-check-label" for="inlineCheckbox4">0 year</label>
                            </div>
                        </div>
                    </div>

                    <div class="filter-date">
                        <span>Organization Type</span><br>
                        <div class="form-check form-check-inline">
                            <input name="orgType" class="form-check-input" type="radio" id="ngo" value="NGO">
                            <label class="form-check-label" for="ngo">NGO</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input name="orgType" class="form-check-input" type="radio" id="govt" value="Government">
                            <label class="form-check-label" for="govt">Government</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input name="orgType" class="form-check-input" type="radio" id="private" value="Private">
                            <label class="form-check-label" for="private">Private</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input name="orgType" class="form-check-input" type="radio" id="bank" value="International Agencies">
                            <label class="form-check-label" for="bank">International Agencies</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input name="orgType" class="form-check-input" type="radio" id="gc" value="Semi Government">
                            <label class="form-check-label" for="gc">Semi Government</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input name="orgType" class="form-check-input" type="radio" id="gc1" value="Others">
                            <label class="form-check-label" for="gc1">Others</label>
                        </div>
                    </div>
                    <div class="fill-search">
                        {{--<a href="" class="nav-link">--}}
                            {{--<button class="button"><span>Search</span></button>--}}

                        {{--</a>--}}
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <img class="text-center" style="display: block;margin: auto;margin-top: 50px;" src="{{ asset('image/loader.gif') }}" alt="" id="ldImg">
                <div style="margin-top: 50px;" class="col-md-12 col-sm-4 col-xs-4 databox lud">



                </div>


                <div class="col-md-12 col-sm-4 col-xs-4">
                    <div class="job-white">
                        <img src="image/topad.jpg" class="img-fluid">
                    </div>
                </div>




                {{--<div class="col-md-12 col-sm-4 col-xs-4">--}}
                    {{--<nav aria-label="...">--}}
                        {{--<ul class="pagination">--}}
                            {{--<li class="page-item disabled">--}}
                                {{--<a class="page-link" href="#" tabindex="-1">Previous</a>--}}
                            {{--</li>--}}
                            {{--<li class="page-item"><a class="page-link" href="#">1</a></li>--}}
                            {{--<li class="page-item active">--}}
                                {{--<a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>--}}
                            {{--</li>--}}
                            {{--<li class="page-item"><a class="page-link" href="#">3</a></li>--}}
                            {{--<li class="page-item">--}}
                                {{--<a class="page-link" href="#">Next</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</nav>--}}
                {{--</div>--}}
            </div>
            <div class="col-md-2 ad-space">
                <div class="ad-right">
                    <a href=""><img src="image/ad1.png" class="img-fluid">
                    </a>
                </div>
                <div class="ad-right">
                    <a href=""><img src="image/ad2.jpg" class="img-fluid">
                    </a>
                </div>
                <div class="ad-right">
                    <a href=""><img src="image/ad3.jpg" class="img-fluid">
                    </a>
                </div>
                <div class="ad-right">
                    <a href=""><img src="image/ad4.jpg" class="img-fluid">
                    </a>
                </div>
                <div class="ad-right">
                    <a href=""><img src="image/ad6.jpg" class="img-fluid">
                    </a>
                </div>
                <div class="ad-right">
                    <a href=""><img src="image/ad1.png" class="img-fluid">
                    </a>
                </div>
                <div class="ad-right">
                    <a href=""><img src="image/ad2.jpg" class="img-fluid">
                    </a>
                </div>
                <div class="ad-right">
                    <a href=""><img src="image/ad3.jpg" class="img-fluid">
                    </a>
                </div>
                <div class="ad-right">
                    <a href=""><img src="image/ad4.jpg" class="img-fluid">
                    </a>
                </div>
                <div class="ad-right">
                    <a href=""><img src="image/ad5.jpg" class="img-fluid">
                    </a>
                </div>
            </div>

        </div>
    </div>

@endsection

@push('js')

<script>
    $(document).ready(function(){
        $("#ldImg").fadeOut();

        var key= '';
        var type ='';
        var country = '';
        var category ='';
        var salary = '';
        var state = '';
        var city ='';
        var experience = '';
        var org = '';
        var page = 1;
        var lastpg = 1;

        /*
        * Main Page Loading Ajax, with post without post.
        */
        @if(isset($country) || isset($category) || isset($keyword))
         key="{{ $keyword }}";
         country = "{{ $country }}";
         category = "{{ $category }}";

         //console.log(keka);
        $.ajax({
            url:"ajaxsearch/?page="+page+"&key={{ $keyword }}&country={{ $country }}&category={{ $category }}",
            method:"GET",
            success:function(data){
                console.log(data);
                page = 1;
                lastpg = data.last_page;
                data = data.data;
                //console.log("fuck"+data.length);
                $(".databox").html("");
                data.forEach(function(e){
                    //$(".databox").html("");
                    $(".databox").append("<div class='new-job job-white'><div class='d-flex justify-content-between'><div class='p-2'> <h4>"+e.title+"</h4> </div> <div class='p-2'> <h6 class='part'><i class='fa fa-bookmark-o' aria-hidden='true'></i>&nbsp;"+e.type+"</h6> </div> </div> <div class='d-flex align-content-md-start flex-wrap'> <div class='p-2'> <span class='company'><a href='/company/view/"+e.company_id+"'>"+e.company_name+"</a></span> </div> <div class='p-2'> <span class='salary'>Salary:"+e.salary_upper+"-"+e.salary_lower+" BDT</span> </div> <div class='p-2'> <span class='loc'><i class='fa fa-map-marker' aria-hidden='true'></i>&nbsp;Location: "+e.state+","+e.country+"</span class='loc'> </div> <div class='ml-auto p-2'> <a href='/jobapply/view/"+e.id+"' target='_blank' class='btn btn-outline-primary'>Apply</a> </div> </div> <div class='d-flex justify-content-between'> <div class='p-2'> <span class='post-time'></span> </div> <div class='p-2'> <span class='deadline'><strong>Deadline:&nbsp;</strong>"+e.deadline+"</span> </div> </div> </div>");
                });
                if(page < lastpg){
                    $(".databox").append("<button id='shishi' style='display: block;margin:auto;' class='btn btn-success'>Load More</button>");
                }

            }
        });
        @else

        $.ajax({
            url:"ajaxsearch/?page="+page,
            method:"GET",
            success:function(data){
                $(".databox").html("");
                console.log(data);
                page = 1;
                lastpg = data.last_page;
                data = data.data;
                data.forEach(function(e){

                    $(".databox").append("<div class='new-job job-white'><div class='d-flex justify-content-between'><div class='p-2'> <h4>"+e.title+"</h4> </div> <div class='p-2'> <h6 class='part'><i class='fa fa-bookmark-o' aria-hidden='true'></i>&nbsp;"+e.type+"</h6> </div> </div> <div class='d-flex align-content-md-start flex-wrap'> <div class='p-2'> <span class='company'><a href='/company/view/"+e.company_id+"'>"+e.company_name+"</a></span> </div> <div class='p-2'> <span class='salary'>Salary:"+e.salary_upper+"-"+e.salary_lower+" BDT</span> </div> <div class='p-2'> <span class='loc'><i class='fa fa-map-marker' aria-hidden='true'></i>&nbsp;Location: "+e.state+","+e.country+"</span class='loc'> </div> <div class='ml-auto p-2'> <a href='/jobapply/view/"+e.id+"' target='_blank' class='btn btn-outline-primary'>Apply</a> </div> </div> <div class='d-flex justify-content-between'> <div class='p-2'> <span class='post-time'></span> </div> <div class='p-2'> <span class='deadline'><strong>Deadline:&nbsp;</strong>"+e.deadline+"</span> </div> </div> </div>");
                });
                if(page < lastpg){
                    $(".databox").append("<button id='shishi' style='display: block;margin:auto;' class='btn btn-success'>Load More</button>");
                }
            }
        });
        @endif
        //pagination controller
        $(document).on("click","#shishi",function() {
            $(this).fadeOut();
            page = page +1 ;
            AllDataPaginate(key,country,category,type,salary,state,city,experience,org);
        });

        //country to state request

        $("select[name='country']").change(function(){
            page = 1;
            $.ajax({
                url:'countryApi/state/'+$(this).val(),
                method: 'GET',
                success: function (data) {
                    //data = data.data;
                    //console.log(data.state[0]);
                    $(".getState").html("");
                    for(var i=0;i<data.state[0].length;i++){
                        $(".getState").append("<option value='"+data.state[0][i]+"'>"+data.state[0][i]+"</option>");
                    }
                    if(page < lastpg){
                        $(".databox").append("<button id='shishi' style='display: block;margin:auto;' class='btn btn-success'>Load More</button>");
                    }
                }
            });
            country = $(this).val();
            AllData(key,country,category,type,salary,state,city,experience,org);
        });

        //state to city
        $("select[name='state']").change(function(){
            page = 1;
            $.ajax({
                url:'countryApi/city/'+$(this).val(),
                method: 'GET',
                success:function (data) {
                    //data = data.data;
                    console.log(data);
                    $(".getCity").html("");
                    for(var i=0;i<data.state[0].length;i++){
                        $(".getCity").append("<option value='"+data.state[0][i]+"'>"+data.state[0][i]+"</option>");
                    }
                }
            });
            state = $(this).val();
            AllData(key,country,category,type,salary,state,city,experience,org);
        });

        //city check
        $("select[name='city']").change(function () {
            page = 1;
            city = $(this).val();
            AllData(key,country,category,type,salary,state,city,experience,org);
        });

        /*
        * job type
        */

        $("input[name='jobtype']").change(function(){
            page = 1;
            type = $(this).val();
            console.log(key+" | "+type);
            AllData(key,country,category,type,salary,state,city,experience,org);
        });

        //salary range
        $("input[name='salary']").change(function(){
            page = 1;
            salary = $(this).val();
            console.log(salary);
            AllData(key,country,category,type,salary,state,city,experience,org);
            //console.log('AL: '+key+'|'+country+'|'+category+'|'+type+'|'+salary);
        });

        //Year of Experience
        $("input[name='experience']").change(function(){
            page = 1;
            experience = $(this).val();
            //console.log(experience);
            AllData(key,country,category,type,salary,state,city,experience,org);
        });

        //Organization
        $("input[name='orgType']").change(function () {
            page = 1;
            org = $(this).val();
            AllData(key,country,category,type,salary,state,city,experience,org);
        });

        function AllData(keyword = '', country = '',category = '',jobType='',salary='',state='',city =''){
            $(".lud").fadeOut();
            $("#ldImg").fadeIn();
            $.ajax({
                url: 'ajaxsearch/?key='+keyword+'&country='+country+'&category='+category+'&type='+jobType+'&salary='+salary+'&state='+state+'&city='+city+'&experience='+experience+'&org='+org+'&page='+page,
                method: 'GET',
                success:function(data){
                    $(".databox").html("");
                    page = 1;
                    lastpg = data.last_page;
                    data = data.data;
                    data.forEach(function(e){
                        $(".databox").append("<div class='new-job job-white'><div class='d-flex justify-content-between'><div class='p-2'> <h4>"+e.title+"</h4> </div> <div class='p-2'> <h6 class='part'><i class='fa fa-bookmark-o' aria-hidden='true'></i>&nbsp;"+e.type+"</h6> </div> </div> <div class='d-flex align-content-md-start flex-wrap'> <div class='p-2'> <span class='company'><a href='/company/view/"+e.company_id+"'>"+e.company_name+"</a></span> </div> <div class='p-2'> <span class='salary'>Salary:"+e.salary_upper+"-"+e.salary_lower+" BDT</span> </div> <div class='p-2'> <span class='loc'><i class='fa fa-map-marker' aria-hidden='true'></i>&nbsp;Location: "+e.state+","+e.country+"</span class='loc'> </div> <div class='ml-auto p-2'> <a href='/jobapply/view/"+e.id+"' target='_blank' class='btn btn-outline-primary'>Apply</a> </div> </div> <div class='d-flex justify-content-between'> <div class='p-2'> <span class='post-time'></span> </div> <div class='p-2'> <span class='deadline'><strong>Deadline:&nbsp;</strong>"+e.deadline+"</span> </div> </div> </div>");
                    });
                    if(page < lastpg){
                        $(".databox").append("<button id='shishi' class='btn btn-success' style='display: block;margin:auto;'>Load More</button>");
                    }
                }

            });
            $(".lud").fadeIn(500);
            $("#ldImg").fadeOut();
//            alert(jobType);
        }

        function AllDataPaginate(keyword = '', country = '',category = '',jobType='',salary='',state='',city =''){
//            $(".lud").fadeOut();
//            $("#ldImg").fadeIn();
            $.ajax({
                url: 'ajaxsearch/?key='+keyword+'&country='+country+'&category='+category+'&type='+jobType+'&salary='+salary+'&state='+state+'&city='+city+'&experience='+experience+'&org='+org+'&page='+page,
                method: 'GET',
                success:function(data){
                    //$(".databox").html("");
                    data = data.data;
                    data.forEach(function(e){
                        $(".databox").append("<div class='new-job job-white'><div class='d-flex justify-content-between'><div class='p-2'> <h4>"+e.title+"</h4> </div> <div class='p-2'> <h6 class='part'><i class='fa fa-bookmark-o' aria-hidden='true'></i>&nbsp;"+e.type+"</h6> </div> </div> <div class='d-flex align-content-md-start flex-wrap'> <div class='p-2'> <span class='company'><a href='/company/view/"+e.company_id+"'>"+e.company_name+"</a></span> </div> <div class='p-2'> <span class='salary'>Salary:"+e.salary_upper+"-"+e.salary_lower+" BDT</span> </div> <div class='p-2'> <span class='loc'><i class='fa fa-map-marker' aria-hidden='true'></i>&nbsp;Location: "+e.state+","+e.country+"</span class='loc'> </div> <div class='ml-auto p-2'> <a href='/jobapply/view/"+e.id+"' target='_blank' class='btn btn-outline-primary'>Apply</a> </div> </div> <div class='d-flex justify-content-between'> <div class='p-2'> <span class='post-time'></span> </div> <div class='p-2'> <span class='deadline'><strong>Deadline:&nbsp;</strong>"+e.deadline+"</span> </div> </div> </div>");
                    });
                    if(page < lastpg){
                        $(".databox").append("<button id='shishi' class='btn btn-success' style='display: block;margin:auto;'>Load More</button>");
                    }
                }

            });
//            $(".lud").fadeIn(500);
//            $("#ldImg").fadeOut();
//            alert(jobType);
        }


    });
</script>
@endpush