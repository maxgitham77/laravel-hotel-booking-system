@php
    $user_id = \Illuminate\Support\Facades\Auth::user()->id;
    $user = \App\Models\User::find($user_id);
@endphp
<div class="service-side-bar">
    <div class="services-bar-widget">
        <h3 class="title"></h3>
        <div class="side-bar-categories">
            <img src="{{ (!empty($user->photo || $user->photo !== NULL)) ? url('uploads/user_images/'.$user->photo) : url('uploads/no_images.png')  }}" class="rounded mx-auto d-block" alt="Image" style="width:100px; height:100px;"> <br><br>
            <div class="user-info text-center">
                <p class="user-name mb-0">{{ $user->firstname }} {{ $user->lastname }}</p>
                <p class="designattion mb-0">{{ $user->email }}</p>
                <p class="designattion mb-0">{{ $user->photo }}</p>
            </div>
            <br>
            <ul>

                <li>
                    <a href="#">User Dashboard</a>
                </li>
                <li>
                    <a href="{{ route('profile.edit') }}">User Profile </a>
                </li>
                <li>
                    <a href="{{ route('user.change.password') }}">Change Password</a>
                </li>
                <li>
                    <a href="#">Booking Details </a>
                </li>
                <li>
                    <a href="{{ route('user.logout') }}">Logout </a>
                </li>
            </ul>
        </div>
    </div>
</div>
