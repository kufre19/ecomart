<aside class="col-md-4 col-lg-3">
    <ul class="nav nav-dashboard flex-column mb-3 mb-md-0" role="tablist">
        <li class="nav-item">
            <a class="nav-link {{request()->routeIs('dashboard') ? 'active' : ''}}" id="tab-dashboard-link" 
                href="{{url("dashboard")}}" role="tab" aria-controls="tab-dashboard">Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{request()->routeIs('ads.create.page') ? 'active' : ''}}" id="tab-adverts-link"
                href="{{url("ads/create")}}" role="tab" aria-controls="tab-adverts">Adverts</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{request()->routeIs('dashboard.account.contacts') ? 'active' : ''}}" id="tab-address-link"
                href="{{url("ads/create")}}" role="tab" aria-controls="tab-address">Contacts</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{request()->routeIs('dashboard.account.settings') ? 'active' : ''}}" id="tab-account-link"
                href="{{url("ads/create")}}" role="tab" aria-controls="tab-account">Account Settings</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('logout')}}">Sign Out</a>
        </li>
    </ul>
</aside><!-- End .col-lg-3 -->