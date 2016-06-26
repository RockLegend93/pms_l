<aside class="main-sidebar" id="sidebar-wrapper">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="https://www.startupdb.asia/assets/images/team.default.png" class="img-circle"
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
        <ul class="sidebar-menu">
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i>
                    <span>Projects</span>
                </a>
                <ul class="treeview-menu">
                    @if(!empty(Session::get('projects')))
                        @foreach(Session::get('projects') as $project)
                            <li><a href={{"/projects/".$project->Id}}>
                                    {{$project->Title}}
                                </a></li>
                        @endforeach
                    @endif
                </ul>
            </li>

        </ul>

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