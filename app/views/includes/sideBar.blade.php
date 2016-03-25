<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">

                <!-- dashboard -->

                  <li>

                      <a href="{{ URL::route('dashboard') }}">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  {{-- Add an Employee --}}
                  <li>

                      <a href="{{ route('employee.create') }}">
                          <i class="fa fa-user"></i>
                          <span>Add an Employee</span>
                      </a>
                  </li>
                  {{-- Employee List --}}
                  <li>

                      <a href="{{ route('employee.index') }}">
                          <i class="fa fa-users"></i>
                          <span>Employee List</span>
                      </a>
                  </li>

                  {{-- Salary & Rank --}}
                 <li class="sub-menu">
                      <a href="javascript:;">
                        <i class="fa fa-tasks"></i>
                          <span>Salary & Rank</span>
                      </a>
                        <ul class="sub">
                              <li><a href="{{ route('salary.index') }}">All Salary</a></li>
                              <li><a href="{{ route('salary.create') }}">Create Salary</a></li>
                        </ul>
                  </li>

                  {{-- Designations --}}
                  <li class="sub-menu">
                      <a href="javascript:;">
                        <i class="fa fa-tasks"></i>
                          <span>Designations</span>
                      </a>
                        <ul class="sub">
                              <li><a href="{{ route('designation.index') }}">All Designations</a></li>
                              <li><a href="{{ route('designation.create') }}">Create Designation</a></li>
                        </ul>
                  </li>

                  {{-- Company Profile --}}
                  <li class="sub-menu">
                      <a href="javascript:;">
                        <i class="fa fa-tasks"></i>
                          <span>Emp Company Info</span>
                      </a>
                        <ul class="sub">
                              <li><a href="{{ route('companyinfo.index') }}">Index</a></li>
                              <li><a href="{{ route('companyinfo.create') }}">Create New</a></li>
                        </ul>
                  </li>

                  {{-- Reward --}}
                  <li class="sub-menu">
                      <a href="javascript:;">
                        <i class="fa fa-tasks"></i>
                          <span>Reward/Fine</span>
                      </a>
                        <ul class="sub">
                              <li><a href="{{ route('reward.index') }}">States of Reward</a></li>
                              <li><a href="{{ route('reward.create') }}">Add Reward</a></li>
                        </ul>
                  </li>


                  {{-- Roles & Permissions --}}
                  <li>

                      <a href="{{ route('calculation.index') }}">
                          <i class="fa fa-user"></i>
                          <span>Salary Calculation</span>
                      </a>
                  </li>

                  {{-- Salary History --}}
                  <li>

                      <a href="{{ route('history.index') }}">
                          <i class="fa fa-user"></i>
                          <span>History</span>
                      </a>
                  </li>
                  <!--li>

                      <a href="#">
                          <i class="fa fa-gears"></i>
                          <span>Roles & Permissions</span>
                      </a>
                  </li-->
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>