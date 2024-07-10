<!-- resources/views/auth/register.blade.php -->
@include('layout.form')

<div class="login-container">
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div>
            @if(Session::has('success'))
            <div class="alert alert-success" role="alert" style="color: #4CAF50">
                {{Session::get('success')}}
            </div>
            @endif
            <form action="{{url('/register')}}" method="POST">
                @csrf
                <div>
                    <h1>Register Form</h1>
                </div>
                <div class="form-group">
                    <input type="text" id="Name" placeholder="Full Name" name="fullname" value="{{old('fullname')}}" required>
                </div>
                <div class="form-group">
                    <input type="text" id="Usn" placeholder="Username" name="username" value="{{old('username')}}" required>
                </div>
                <div class="form-group">
                    <input type="password" id="Psw" placeholder="Password" name="password" required>
                </div>
                <div class="form-group">
                    <input type="password" id="re_Psw" placeholder="Password Repeat" name="re_password" required>
                </div>
                <div class="form-group">
                    <input type="text" id="phone_Num" placeholder="Phone Number" name="phone" value="{{old('phone')}}" required>
                </div>
                <div class="form-group">
                    <input type="email" id="Mail" placeholder="Email" name="email" value="{{old('email')}}" required>
                </div>
                <div class="form-group">
                    <input type="text" id="Address" placeholder="Address" name="address" value="{{old('address')}}" required>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">
                        Register
                    </button>
                </div>
                <div>
                    <button type="reset" class="btn btn-primary">
                        Reset
                    </button>
                </div>
            </form>
            @if($errors->any())
                <div class="alert alert-success" role="alert" style="color: red">
                    @foreach($errors->all() as $error)
                        <div>{{$error}}</div>
                    @endforeach
                </div>
            @endif
            <hr>
            <div>
                <a href="{{route('login')}}">I already have an account!</a>
            </div>
        </div>
    </div>
</div>

