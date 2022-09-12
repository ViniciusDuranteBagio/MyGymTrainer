{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('config') }}"><i class="nav-icon la la-question"></i> Configs</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('exercise') }}"><i class="nav-icon la la-question"></i> Exercises</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('user-workout-history') }}"><i class="nav-icon la la-question"></i> User workout histories</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('workout') }}"><i class="nav-icon la la-question"></i> Workouts</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('workout-exercise') }}"><i class="nav-icon la la-question"></i> Workout exercises</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('user-workout') }}"><i class="nav-icon la la-question"></i> User workouts</a></li>