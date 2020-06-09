<div class="slider">
<div class="container">
<div class="row">
<div class="col-md-12">
  <h3>Grab Your Opportunity <strong>Right Now</strong> </h3>
<form class="job-find" action="{{ url('search') }}" method="POST">
  {{ csrf_field() }}
  <div class="form-row align-items-center">
    <div class="col-md-4">
      <input name="keyword" type="text" class="form-control" id="inlineFormInput" placeholder="Keywords">
    </div>
    <div class="col-md-3">
      <div class="input-group ">
        {{--<input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Location">--}}
        <select name="country" class="custom-select cat" id="inputGroupSelect01">
          <option value="" selected>Country...</option>
          @foreach($country as $cat)
            <option value="{{ $cat->name }}">{{ $cat->name }}</option>
          @endforeach
        </select>
              <div class="input-group-append">
          <div class="input-group-text">
            <i class="fa fa-map-marker"></i>
          </div>
        </div>
      </div>
    </div>
<div class="col-md-3">
  <select name="category" class="custom-select cat" id="inputGroupSelect01">
    <option value="" selected>Category...</option>
    @foreach($category as $cat)
    <option value="{{ $cat->category }}">{{ $cat->category }}</option>
    @endforeach
  </select>
</div>
<div class="col-md-2 find">
<input type="submit" name="submit" class="btn btn-outline-warning" value="Search" />
</div>
  </div>
</form>
</div> 
</div>
<div class="row ">
<div class="col-md-2">
<div class="icon-details d-none d-md-block m-t-50">
<span class="fa-stack fa-lg ">
  <i class="fa fa-circle fa-stack-2x icon-border"></i>
  <i class="fa fa-circle fa-stack-2x icon-circle "></i>
  <i class="fab fa-stack-1x fa-creative-commons-sampling"></i>
  <br>
</span>
<br>
<span class="txt-sh">Active Job</span><br>
<span>
<b class="counte txt-sh">{{number_format($active)}}</b>
 </span>
</div>
</div>
<div class="col-md-2">
<div class="icon-details d-none d-md-block  m-t-50">
<span class="fa-stack fa-lg">
  <i class="fa fa-circle fa-stack-2x icon-border"></i>
  <i class="fa fa-circle fa-stack-2x icon-circle"></i>
  <i class="fa fa-building fa-stack-1x fa-inverse"></i>
</span>
<br>
<span class="txt-sh">Companies</span> <br>
<span>
<b class="counte txt-sh">{{number_format($companies)}}</b>
 </span>
</div>
</div>
        <div class="col-md-2">
          <div class="icon-details d-none d-md-block  m-t-50">
          <span class="fa-stack fa-lg">
            <i class="fa fa-circle fa-stack-2x icon-border"></i>
            <i class="fa fa-circle fa-stack-2x icon-circle"></i>
            <i class="fa fa-globe fa-stack-1x fa-inverse"></i>
          </span>
          <br>
          <span class="txt-sh">Country</span> <br>
          <span>
          <b class="txt-sh">{{count($country)}}</b>
           </span>
          </div>
        </div>
        <div class="col-md-2">
          <div class="icon-details d-none d-md-block  m-t-50">
          <span class="fa-stack fa-lg">
            <i class="fa fa-circle fa-stack-2x icon-border"></i>
            <i class="fa fa-circle fa-stack-2x icon-circle"></i>
            <i class="fas fa-stack-1x fa-search-location"></i>
          </span>
          <br>
          <span class="txt-sh">Job Seeker</span> <br>
          <span>
          <b class="txt-sh">{{number_format($emp)}}</b>
           </span>
          </div>
        </div> 
        <div class="col-md-2">
          <div class="icon-details d-none d-md-block  m-t-50">
          <span class="fa-stack fa-lg">
            <i class="fa fa-circle fa-stack-2x icon-border"></i>
            <i class="fa fa-circle fa-stack-2x icon-circle"></i>
            <i class="fa fa-globe fa-stack-1x fa-inverse"></i>
          </span>
          <br>
          <span class="txt-sh">Freelancer</span> <br>
          <span>
          <b class="txt-sh">2,130</b>
           </span>
          </div>
        </div> 
        <div class="col-md-2">
          <div class="icon-details d-none d-md-block  m-t-50">
          <span class="fa-stack fa-lg">
            <i class="fa fa-circle fa-stack-2x icon-border"></i>
            <i class="fa fa-circle fa-stack-2x icon-circle"></i>
            <i class="fas fa-stack-1x fa-coins"></i>
          </span>
          <br>
          <span class="txt-sh">Funding/Venture</span> <br>
          <span>
          <b class="txt-sh">30</b>
           </span>
          </div>
        </div>                      
</div>
</div>
</div> 