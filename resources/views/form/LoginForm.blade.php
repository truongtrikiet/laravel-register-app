@include('layout.form')

<div class="login-container">
    <div class="card o-hidden border-0 shadow-lg my-5">
            <div>
                    <form action="{{url('/login')}}" method="POST">
                        @csrf
                        <div>
                            <h1>Login page</h1>
                        </div>
                        <div class="form-group">
                            <input type="text" id="Usn" placeholder="Username..." name="username" required>
                        </div>
                        <div class="form-group">
                            <input type="password" id="Psw" placeholder="Password..." name="password" required>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox small">
                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                <label class="custom-control-label" for="customCheck">
                                    Remember
                                    Me
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Login
                        </button>
                       @if(session('message'))
                            <p>{{ session('message') }}</p>
                        @endif
                    </form>
                <hr>
                <div>
                    <a href="">Forgot Password?</a>
                </div>
                <div>
                    <a href="{{route('register')}}">Don't have an account?</a>
                </div>
            </div>
    </div>
</div>

