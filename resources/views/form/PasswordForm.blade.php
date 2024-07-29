@include('layout.form')


<div class="login-container">
    <h1>Change Password</h1>

    <form action="{{route('password.change')}}" method="POST">
        @csrf
        <div class="form-group">
            <input type="password" id="Psw" placeholder="Password" name="current_password" value="{{old('password')}}" required>
        </div>
        <div class="form-group">
            <input type="password" id="new_Psw" placeholder="New Password" name="new_password" value="{{old('new_password')}}" required>
        </div>
        <div class="form-group">
            <input type="password" id="re_new_Psw" placeholder="New Password Repeat"  name="re_new_password" value="{{old('re_new_password')}}" required>
        </div>
        <hr>
            <button type="submit" class="btn btn-primary" >
                Change
            </button>
        <a href="{{route('accountShow', $username)}}">Return</a>

    </form>

    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
        </ul>
    </div>
    @endif
</div>
