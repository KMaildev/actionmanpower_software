<aside class="left-sidebar">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">

                <li class="user-pro">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><img
                            src="{{ asset('design/assets/images/users/1.jpg') }}" alt="user-img" class="img-circle">
                        <span class="hide-menu">
                            Agency
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                <i class="fa fa-power-off"></i>
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>

                <li>
                    <a class="waves-effect waves-dark" href="{{ route('home') }}" aria-expanded="false">
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>

                @can('enquiry')
                    <li>
                        <a class="waves-effect waves-dark" href="{{ route('enquiry.index') }}" aria-expanded="false">
                            <span class="hide-menu">Enquiry</span>
                        </a>
                    </li>
                @endcan

                @can('passport')
                    <li>
                        <a class="waves-effect waves-dark" href="{{ route('passport.index') }}" aria-expanded="false">
                            <span class="hide-menu">Passport</span>
                        </a>
                    </li>
                @endcan

                @can('reject')
                    <li>
                        <a class="waves-effect waves-dark" href="{{ route('reject.index') }}" aria-expanded="false">
                            <span class="hide-menu">Reject Passport</span>
                        </a>
                    </li>
                @endcan

                @can('leave')
                    <li>
                        <a class="waves-effect waves-dark" href="{{ route('passport_leave.index') }}"
                            aria-expanded="false">
                            <span class="hide-menu">Leave</span>
                        </a>
                    </li>
                @endcan

                @can('demand')
                    <li>
                        <a class="waves-effect waves-dark" href="{{ route('new_demand.index') }}" aria-expanded="false">
                            <span class="hide-menu">Demand</span>
                        </a>
                    </li>
                @endcan


                <li hidden>
                    <a class="waves-effect waves-dark" href="{{ route('old_demand.index') }}" aria-expanded="false">
                        <span class="hide-menu">Old Demand</span>
                    </a>
                </li>

                @can('contract')
                    <li>
                        <a class="waves-effect waves-dark" href="{{ route('contract.index') }}" aria-expanded="false">
                            <span class="hide-menu">Contract</span>
                        </a>
                    </li>
                @endcan


                @can('sending')
                    <li>
                        <a class="waves-effect waves-dark" href="{{ route('sending.index') }}" aria-expanded="false">
                            <span class="hide-menu">Sending</span>
                        </a>
                    </li>
                @endcan

                @can('overseas_agent')
                    <li>
                        <a class="waves-effect waves-dark" href="{{ route('overseas_agent.index') }}"
                            aria-expanded="false">
                            <span class="hide-menu">Overseas Agent</span>
                        </a>
                    </li>
                @endauth

                @can('file_manager')
                    <li>
                        <a class="waves-effect waves-dark" href="{{ route('file_manager.index') }}"
                            aria-expanded="false">
                            <span class="hide-menu">File Manager</span>
                        </a>
                    </li>
                @endcan

                @can('country')
                    <li>
                        <a class="waves-effect waves-dark" href="{{ route('country.index') }}" aria-expanded="false">
                            <span class="hide-menu">Country</span>
                        </a>
                    </li>
                @endcan


                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <span class="hide-menu">
                            Configuration
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        @can('department')
                            <li>
                                <a href="{{ route('department.index') }}" aria-expanded="false">
                                    <span class="hide-menu">Department</span>
                                </a>
                            </li>
                        @endcan

                        @can('role')
                            <li>
                                <a href="{{ route('role.index') }}" aria-expanded="false">
                                    <span class="hide-menu">Role</span>
                                </a>
                            </li>
                        @endcan

                        @can('permission')
                            <li>
                                <a href="{{ route('permission.index') }}" aria-expanded="false">
                                    <span class="hide-menu">Permission</span>
                                </a>
                            </li>
                        @endcan

                        @can('employee')
                            <li>
                                <a href="{{ route('employee.index') }}" aria-expanded="false">
                                    <span class="hide-menu">Employees</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>



                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <span class="hide-menu">Activities Log</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="{{ route('activity.index') }}">
                                Latest Login
                            </a>
                        </li>

                        @foreach ($activitieslogs as $activitieslog)
                            <li>
                                <a href="{{ route('activity.show', $activitieslog->log_name) }}"
                                    data-dropdown-toggle="false">
                                    <span class="site-menu-title">
                                        {{ Str::upper(str_replace('_', ' ', $activitieslog->log_name)) }}
                                    </span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>


            </ul>
        </nav>
    </div>
</aside>
