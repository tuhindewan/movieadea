<!--login form popup-->
<div class="login-wrapper" id="login-content">
    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>Login</h3>
        <form method="post" action="{{ route('login') }}">
        {{ csrf_field() }}
            <div class="row{{ $errors->has('email') ? ' has-error' : '' }}">
                 <label for="email">
                    Username:
                    <input type="email" name="email" id="email" name="email" value="{{ old('email') }}" required="required" />
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </label>
            </div>
           
            <div class="row{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password">
                    Password:
                    <input type="password" name="password" id="password" placeholder="******" required="required" />
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </label>
            </div>
            <div class="row">
                <div class="remember">
                    <div>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}><span>Remember me</span>
                    </div>
                    <a href="#">Forget password ?</a>
                </div>
            </div>
           <div class="row">
             <button type="submit">Login</button>
           </div>
        </form>
        <div class="row">
            <p>Or via social</p>
            <div class="social-btn-2">
                <a class="fb" href="#"><i class="ion-social-facebook"></i>Facebook</a>
                <a class="tw" href="#"><i class="ion-social-twitter"></i>twitter</a>
            </div>
        </div>
    </div>
</div>
<!--end of login form popup-->
<!--signup form popup-->
<div class="login-wrapper"  id="signup-content">
    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>sign up</h3>
        <form method="post" action="{{ route('register') }}">
        {{ csrf_field() }}
            <div class="row{{ $errors->has('username') ? ' has-error' : '' }}">
                 <label for="username-2">
                    Username:
                    <input type="text" name="username" id="username-2" placeholder="Hugh Jackman"  value="{{ old('username') }}" autofocus required="required" />
                    @if ($errors->has('username'))
                        <span class="help-block">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif
                </label>
            </div>
           
            <div class="row{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email-2">
                    your email:
                    <input type="text" name="email" id="email-2" placeholder="" value="{{ old('email') }}"  required="required" autofocus />
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </label>
            </div>
             <div class="row{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password-2">
                    Password:
                    <input type="password" name="password" id="password-2" placeholder=""  required="required" />
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </label>
            </div>
             <div class="row">
                <label for="repassword-2">
                    re-type Password:
                    <input type="password" name="password_confirmation" id="repassword-2" placeholder=""  required="required" />
                </label>
            </div>
           <div class="row">
             <button type="submit">sign up</button>
           </div>
        </form>
    </div>
</div>
<!--end of signup form popup-->


<header class="ht-header">
    <div class="container">
        <nav class="navbar navbar-default navbar-custom">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header logo">
                    <div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <div id="nav-icon1">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <a href="{{ URL('/') }}"><img class="logo" src="{{ asset('public/images/logo1.png') }}" alt="" width="119" height="58"></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav flex-child-menu menu-left">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li class="dropdown first">
                            <a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown">
                            Home <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu level1">
                                <li><a href="index.html">Home 01</a></li>
                                <li><a href="homev2.html">Home 02</a></li>
                                <li><a href="homev3.html">Home 03</a></li>
                            </ul>
                        </li>
                        <li class="dropdown first">
                            <a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
                            movies<i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu level1">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Movie grid<i class="ion-ios-arrow-forward"></i></a>
                                    <ul class="dropdown-menu level2">
                                        <li><a href="moviegrid.html">Movie grid</a></li>
                                        <li><a href="moviegridfw.html">movie grid full width</a></li>
                                    </ul>
                                </li>           
                                <li><a href="movielist.html">Movie list</a></li>
                                <li><a href="moviesingle.html">Movie single</a></li>
                                <li class="it-last"><a href="seriessingle.html">Series single</a></li>
                            </ul>
                        </li>
                        <li class="dropdown first">
                            <a href="{{ URL('/news') }}" class="btn btn-default" data-hover="dropdown">news</a>
                        </li>
                        @if (Auth::check())
                        <li class="dropdown first">
                            <a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
                            {{ Auth::user()->name }} <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu level1">
                                <li><a href="{{ URL('/userfavorite') }}">My Favorite</a></li>
                                <li><a href="{{ URL('/userprofile') }}">Profile</a></li>
                            </ul>
                        </li>
                        @endif
                    </ul>

                    @if (Route::has('login'))
                        <ul class="nav navbar-nav flex-child-menu menu-right">
                            @if (Auth::check())
                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">LOG out</a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>                     
                            @else
                                <li class="loginLink"><a href="#">LOG In</a></li>
                                <li class="btn signupLink"><a href="#">sign up</a></li>
                            @endif
                        </ul>
                    @endif
                    <!-- <ul class="nav navbar-nav flex-child-menu menu-right">
                        <li class="loginLink"><a href="#">LOG In</a></li>
                        <li class="btn signupLink"><a href="#">sign up</a></li>
                    </ul> -->
                </div>
            <!-- /.navbar-collapse -->
        </nav>
        
        <!-- top search form -->
        <div class="top-search">
            <select>
                <option value="united">TV show</option>
                <option value="saab">Others</option>
            </select>
            <input type="text" placeholder="Search for a movie, TV Show or celebrity that you are looking for">
        </div>
    </div>
</header>