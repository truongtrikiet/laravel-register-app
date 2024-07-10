@include('layout.form')

<div>
    <h1>Account Information</h1>
</div>

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{Session::get('success')}}
</div>
@endif

<table>
    <thead>
        <tr>
            <th>Full name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Address</th>
            <th>Logout</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$account-> fullname}}</td>
            <td>{{$account-> username}}</td>
            <td>{{$account-> email}}</td>
            <td>{{$account-> phone}}</td>
            <td>{{$account-> address}}</td>
            <td><a href="{{route('login')}}">Logout</a></td>
        </tr>
    </tbody>
</table>
