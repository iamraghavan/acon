@php
     $contactDetails = [
        'address' => 'Andavar College of Nursing, 125/2a Main Road, Poravacherry Nagapattinam – 611108',
        'email' => 'principal@andavarcon.edu.in',
        'phone' => '04365 245600',
        'hours' => 'Mon to Sat - 9:00am to 6:00pm <br> (Sunday Closed)'
    ];
@endphp

<div class="col-lg-4 widget-area sidebar-left">
    <aside class="widget widget-nav-menu">
        <ul>
            @foreach($menuItems as $menuItem)
                <li class="{{ Request::is(trim($menuItem['url'], '/')) ? 'active' : '' }}">
                    <a href="{{ url($menuItem['url']) }}">{{ $menuItem['title'] }}</a>
                </li>
            @endforeach
        </ul>
    </aside>

    <aside class="widget contact-widget with-title">
        <h3 class="widget-title">Get in touch</h3>
        <ul class="contact-widget-wrapper">
            <li><i class="ttm-textcolor-skincolor ti ti-location-pin"></i>{{ $contactDetails['address'] }}</li>
            <li><i class="ttm-textcolor-skincolor ti ti-email"></i><a href="mailto:{{ $contactDetails['email'] }}" target="_blank">{{ $contactDetails['email'] }}</a></li>
            <li><i class="ttm-textcolor-skincolor ti ti-mobile"></i>{{ $contactDetails['phone'] }}</li>
            <li><i class="ttm-textcolor-skincolor ti ti-alarm-clock"></i>{!! $contactDetails['hours'] !!}</li>
        </ul>
    </aside>
</div>

