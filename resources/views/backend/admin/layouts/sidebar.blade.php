<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('backend/assets/images/rzh-full-color-logo.jpeg') }}" class="logo-icon" alt="Booking System">
        </div>
        <div>
            <!--#6e5a58 | #d715a6-->
            <h4 class="logo-text">RZHamburg</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-alt'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
            <ul>
                <li> <a href="index.html"><i class='bx bx-radio-circle'></i>Default</a>
                </li>
                <li> <a href="index2.html"><i class='bx bx-radio-circle'></i>Alternate</a>
                </li>
                <li> <a href="index3.html"><i class='bx bx-radio-circle'></i>Graphical</a>
                </li>
            </ul>
        </li>
        <li class="{{ setSidebarActive(['slider.index']) }}">
            <a href="{{ route('slider.index') }}" class="">
                <div class="parent-icon"><i class='bx bx-home-alt'></i>
                </div>
                <div class="menu-title">Slider</div>
            </a>
        </li>
        <li class="{{ setSidebarActive(['spa.index']) }}">
            <a href="{{ route('spa.index') }}" class="">
                <div class="parent-icon"><i class='bx bx-home-alt'></i>
                </div>
                <div class="menu-title">SPA</div>
            </a>
        </li>
        <li class="{{ setSidebarActive(['roomtypes.*', 'facilities.*', 'rooms.*']) }}">
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Manage Rooms</div>
            </a>
            <ul class="">
                <li class="{{ setSidebarActive(['rooms.*']) }}"> <a href="{{ route('rooms.index') }}"><i class='bx bx-radio-circle'></i>Rooms</a>
                </li>
                <li class="{{ setSidebarActive(['roomnumbers.*']) }}"> <a href="{{ route('roomnumbers.index') }}"><i class='bx bx-radio-circle'></i>Room Numbers</a>
                </li>

                <li class="{{ setSidebarActive(['roomtypes.*']) }}"> <a href="{{ route('roomtypes.index') }}"><i class='bx bx-radio-circle'></i>Room Types</a>
                </li>
                <li class="{{ setSidebarActive(['facilities.*']) }}"> <a href="{{ route('facilities.index') }}"><i class='bx bx-radio-circle'></i>Room Facilities</a>
                </li>
                </li>
            </ul>
        </li>

        <!--<li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-cart'></i>
                </div>
                <div class="menu-title">eCommerce</div>
            </a>
            <ul>
                <li> <a href="ecommerce-products.html"><i class='bx bx-radio-circle'></i>Products</a>
                </li>
                <li> <a href="ecommerce-products-details.html"><i class='bx bx-radio-circle'></i>Product Details</a>
                </li>
                <li> <a href="ecommerce-add-new-products.html"><i class='bx bx-radio-circle'></i>Add New Products</a>
                </li>
                <li> <a href="ecommerce-orders.html"><i class='bx bx-radio-circle'></i>Orders</a>
                </li>
            </ul>
        </li>-->
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">Manage Team</div>
            </a>
            <ul>
                <li> <a href="{{ route('team.index') }}"><i class='bx bx-radio-circle'></i>All Team</a>
                </li>
                <li> <a href="component-accordions.html"><i class='bx bx-radio-circle'></i>Add Team</a>
                </li>
            </ul>
        </li>

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">User Management</div>
            </a>
            <ul>
                <li> <a href="{{ route('adminuser.index') }}"><i class='bx bx-radio-circle'></i>All Users</a>
                </li>
                <li> <a href="component-accordions.html"><i class='bx bx-radio-circle'></i>Managers</a>
                </li>
            </ul>
        </li>

        <li class="menu-label">Others</li>


    </ul>
    <!--end navigation-->
</div>
