<div class="top_bar">
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-row">
                <div class="top_bar_contact_item"><div class="top_bar_icon"><img src="{{ asset('assets/images/phone.png') }}" alt=""></div>+254 711 005 357</div>
                <div class="top_bar_contact_item"><div class="top_bar_icon"><img src="{{ asset('assets/images/mail.png') }}" alt=""></div><a href="mailto:support@locksmith.com">support@locksmith.com</a></div>
                <div class="top_bar_content ml-auto">
                    <div class="top_bar_menu">
                      
                    </div>
                    <div class="top_bar_user">
                        <div class="list-main">
                            
                            @guest
                            <div><a href="#">Help</a></div>
                            <div></div>
                            <div class="user_icon"><img src="{{ asset('assets/images/user.svg') }}" alt=""></div>
								
                            @if (Route::has('login'))
                            <div><a  href="{{ route('login') }}">{{ __('Login') }}</a></div>
                           </li>
                       @endif
                   @else
                            <ul class="standard_dropdown top_bar_dropdown">
                                <li>
                                    <a href="#">{{ Auth::user()->name }}<i class="fas fa-chevron-down"></i></a>
                                    <ul>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                         {{ __('Logout') }}
                                     </a>
           
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                         @csrf
                                     </form>
                                 
                             </li>
                         @endguest
                                    </ul>
                            </ul>
                </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>	
</div>	
