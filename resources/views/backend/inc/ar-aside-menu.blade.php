<aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section style="margin-right: 15px;" class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img style="width: 70px;height: 50px;border-radius: 100%;" src="{{asset(Auth::user()->photo())}}" class="img-circle" alt="{{Auth::user()->name}}">
                </div>
                <div class="pull-left info">
                    <p> <a href="{{route('dashboard.profile',Auth::user()->id)}}"> {{Auth::user()->name}} </a></p>
                    <!-- Status -->
                    <a href="{{route('dashboard.profile',Auth::user()->id)}}"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>


            <!-- Sidebar Menu -->
            <ul style="margin-right: 10px" class="sidebar-menu">
                {{-- <li class="header text-primary">Menu</li> --}}

                <li class="active"><a href="{{ route('dashboard') }}"> <span>{{__('dashboard.DASHBOARD')}}</span><i style="font-size: 2rem;margin-left: 10px" class="fas fa-home text-primary"></i></a></li>

                {{-- <li class="active"><a href="{{ route('dashboard.home') }}"> <span>Home</span><i style="font-size: 2rem;" class="fas fa-home text-primary"></i></a></li> --}}

                @if (Auth::user()->role == 'admin')

                <li class="active"><a href="{{route('dashboard.permessions')}}"> <span>{{__('dashboard.PERMESSIONS')}}</span> <i style="color: goldenrod;font-size: 2rem;margin-left: 10px" class="fas fa-user-shield"></i></a></li>

                @endif


                @if (Auth::user()->role == 'editor')

                <li class="active"><a href="{{ route('dashboard.users_profiles') }}"> <span>{{Auth::user()->profile->username}}</span><i style="font-size: 2rem;margin-left: 10px" class="fas fa-user text-primary"></i></a></li>

                @else

                <li class="active"><a href="{{ route('dashboard.users_profiles') }}"> <span>{{__('dashboard.ALL_USERS')}}</span><i style="font-size: 2rem;margin-left: 10px" class="fas fa-user text-primary"></i></a></li>
                @endif

                <span><hr style="border-radius: 8px;height: 4px;margin-left: 6px;margin-right: 6px;background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);"/></span>
                <li class="treeview">
                    <a href="#"> <span>{{__('dashboard.CATEGORIES')}}{{-- <i class="fa fa-link"></i> --}}
                        <img style="font-size: 2rem;margin-left: 10px" width="30px" height="30px" src="{{asset('public/assets-file/images/category.png')}}" alt="category">
                    </span>
                        <span class="pull-right-container">
                           <i class="fa fa-angle-left pull-left"></i>
                         </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('categories.create')}}">{{__('dashboard.Add_New_Category')}}</a></li>
                        <li><a href="{{route('categories.index')}}">{{__('dashboard.Show_All_Categories')}}</a></li>
                    </ul>
                </li>
                <span><hr style="border-radius: 8px;height: 4px;margin-left: 6px;margin-right: 6px;background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);"/></span>


                <li class="treeview">
                    <a href="#"> <span>{{__('dashboard.CITIES')}}{{-- <i class="fa fa-link"></i> --}}
                        <img style="font-size: 2rem;margin-left: 10px" width="30px" height="30px" src="{{asset('public/assets-file/images/category.png')}}" alt="cities">
                    </span>
                        <span class="pull-right-container">
                           <i class="fa fa-angle-left pull-left"></i>
                         </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('cities.create')}}">{{__('dashboard.Add_New_City')}}</a></li>
                        <li><a href="{{route('cities.index')}}">{{__('dashboard.Show_All_Cities')}}</a></li>
                    </ul>
                </li>
                <span><hr style="border-radius: 8px;height: 4px;margin-left: 6px;margin-right: 6px;background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);"/></span>



                <li class="treeview">
                    <a href="#"> <span>{{__('dashboard.AREAS')}}{{-- <i class="fa fa-link"></i> --}}
                        <img style="font-size: 2rem;margin-left: 10px" width="30px" height="30px" src="{{asset('public/assets-file/images/category.png')}}" alt="areas">
                    </span>
                        <span class="pull-right-container">
                           <i class="fa fa-angle-left pull-left"></i>
                         </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('areas.create')}}">{{__('dashboard.Add_New_Area')}}</a></li>
                        <li><a href="{{route('areas.index')}}">{{__('dashboard.Show_All_Areas')}}</a></li>
                    </ul>
                </li>
                <span><hr style="border-radius: 8px;height: 4px;margin-left: 6px;margin-right: 6px;background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);"/></span>


                <li class="treeview">
                    <a href="#"> <span>{{__('dashboard.LISTINGS')}}{{-- <i class="fa fa-link"></i> --}}
                        <img style="font-size: 2rem;margin-left: 10px" width="30px" height="30px" src="{{asset('public/assets-file/images/category.png')}}" alt="listings">
                    </span>
                        <span class="pull-right-container">
                           <i class="fa fa-angle-left pull-left"></i>
                         </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('listings.create')}}">{{__('dashboard.Add_New_Listing')}}</a></li>
                        <li><a href="{{route('listings.index')}}">{{__('dashboard.Show_All_Listings')}}</a></li>
                    </ul>
                </li>
                <span><hr style="border-radius: 8px;height: 4px;margin-left: 6px;margin-right: 6px;background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);"/></span>

                <li class="active"><a href="{{ route('contact.index') }}"> <span>{{__('dashboard.CONTACTS')}}</span><i style="font-size: 2rem;margin-left: 10px" class="fas fa-address-card text-primary"></i></a></li>


            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>





















    {{-- <li class="treeview">
                    <a href="#"><i class="fa fa-link"></i> <span>{{__('dashboard.BLOG')}}</span>
                        <span class="pull-right-container">
                           <i class="fa fa-angle-left pull-right"></i>
                         </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#">My Blog</a></li>
                        <li><a href="#">Edit Blog</a></li>
                    </ul>
                </li> --}}
