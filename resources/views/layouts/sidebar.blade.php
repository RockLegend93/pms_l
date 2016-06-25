<aside class="main-sidebar" id="sidebar-wrapper">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="http://infyom.com/images/logo/blue_logo_150x150.jpg" class="img-circle"
                     alt="User Image"/>
            </div>
            <div class="pull-left info">
                @if (Auth::guest())
                    <p>PMS</p>
                @else
                    <p>{{ Auth::user()->name}}</p>
                    @endif
                            <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>

        </div>
        <div class="list-group">
            {{--{{$projects=\App\Http\Controllers\HomeController::projectSessionHelper()[0]}}--}}
            @if(Session::get('projects')!=null && Session::get('projects').length>0)
                @foreach(Session::get('projects') as $project)
                    <a class="list-group-item" href={{"/projects/".$project->Id}}>
                        {{$project->Title}}
                    </a>
                @endforeach
            @endif
        </div>

        <!-- search form (Optional) -->
        {{--<form action="#" method="get" class="sidebar-form">--}}
        {{--<div class="input-group">--}}
        {{--<input type="text" name="q" class="form-control" placeholder="Search..."/>--}}
        {{--<span class="input-group-btn">--}}
        {{--<button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>--}}
        {{--</button>--}}
        {{--</span>--}}
        {{--</div>--}}
        {{--</form>--}}
                <!-- Sidebar Menu -->

        <ul class="sidebar-menu">
            @include('layouts.menu')
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>