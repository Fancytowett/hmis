<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('dash.partials.header')
<body>

<nav class="side-navbar  ">
    <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
            <!-- User Info-->
            <div class="sidenav-header-inner text-center">
                {{--<img src="img/avatar-2.jpg" alt="person"--}}
                                                               {{--class="img-fluidrounded-circle">--}}
                <h2 class="h5">{{strtoupper(Auth::user()->name)}}</h2><span>Welcome</span>
            </div>
            <!-- Small Brand information, appears on minimized sidebar-->
            <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center">
                    <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
            <ul id="side-main-menu" class="side-menu list-unstyled">
                <li class="active"><a href="{{route('rec_dash')}}"> <i class="fa fa-home"></i>Home </a></li>
                <li><a href="{{route('rec_profile')}}"> <i class="fa fa-user"></i>Profile </a></li>
                <li><a href="{{route('add_patient')}}"> <i class="fa fa-house"></i>Add Patient </a></li>
                <li><a href="{{route('add_schedule')}}"> <i class="fa fa-house"></i>Add Schedule </a></li>

            </ul>
        </div>

    </div>
</nav>

<div class="page">
@include('dash.partials.nav_header')

      <div class="container mt-5">
          <div class="row justify-content-center">
              <div class="col-md-6">
                  @if(session('message'))
                      <div class="alert alert-success">
                          {{session('message')}}
                      </div>
                  @endif
                  <div class="card">
                          <div class="card-header ">

                              <h2 class="text-center">Patient Details</h2>
                              <a href="{{route('rec_dash')}}" class="btn btn-sm btn-success">Back</a>

                          </div>
                  <div class="card-body">
                      <form action="{{route('store_patient')}}" method="post">
                          @csrf
                          <div class="form-group">
                              <label for="first name">First Name:</label>
                              <input type="text" name="f_name"  class="form-control" placeholder="Enter patient's first name">
                              @if($errors->has('f_name'))
                                  <p class="text-danger">{{$errors->first('f_name')}}</p>
                              @endif
                          </div>
                          <div class="form-group">
                              <label for="middle name">Middle Name:</label>
                              <input type="text" name="m_name"  class="form-control" placeholder="Enter patient's Middle name">
                              @if($errors->has('m_name'))
                                  <p class="text-danger">{{$errors->first('m_name')}}</p>
                              @endif
                          </div>
                          <div class="form-group">
                              <label for="last name">Last Name:</label>
                              <input type="text" name="l_name"  class="form-control" placeholder="Enter patient's Last name">
                              @if($errors->has('l_name'))
                                  <p class="text-danger">{{$errors->first('l_name')}}</p>
                              @endif
                          </div>
                          <div class="form-group">
                              <label for="Id number">ID Number:</label>
                              <input type="text" name="id_no"  class="form-control" placeholder="Enter patient's ID no">
                              @if($errors->has('id_no'))
                                  <p class="text-danger">{{$errors->first('id_no')}}</p>
                              @endif
                          </div>
                          <div class="form-group">
                              <label for="phone">Phone Number:</label>
                              <input type="number" name="p_phone"  class="form-control" placeholder="Enter patient's Phone No.">
                              @if($errors->has('p_name'))
                                  <p class="text-danger">{{$errors->first('p_phone')}}</p>
                              @endif
                          </div>
                          <div class="form-group">
                              <label for="phone"> Next of Kin phone Number:</label>
                              <input type="number" name="k_phone"  class="form-control" placeholder="Enter Next of kin Phone No.">
                              @if($errors->has('k_name'))
                                  <p class="text-danger">{{$errors->first('k_phone')}}</p>
                              @endif
                          </div>
                          <div class="form-group">
                              <label for="estate">Estate/Village</label>
                              <input type="text" name="estate"  class="form-control" placeholder="Enter patient's Estate/Village">
                              @if($errors->has('estate'))
                                  <p class="text-danger">{{$errors->first('estate')}}</p>
                              @endif
                          </div>
                          <div class="form-group">
                              <label for="county">County</label>
                              <select name="county_id" class="form-control">
                                  @foreach($counties as $county)
                                      <option value="{{$county->id}}">{{$county->name}}</option>
                                  @endforeach
                              </select>
                              @if($errors->has('county'))
                                  <p class="text-danger">{{$errors->first('county')}}</p>
                              @endif
                          </div>
                          <input type="submit" class="btn btn-success btn-block" value="Add">

                      </form>
                  </div>
              </div>
              </div>

          </div>
          </div>



    @include('dash.partials.footer')

</div>

@include('dash.partials.my_scripts')
</body>
</html>







