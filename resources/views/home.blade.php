@include('layout.form')

<div>
    <h1>Account Information</h1>
</div>
    <table>
        <thead>
            <tr>
                <th>Full name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($accounts as $acc)
            <tr>
                <td>{{$acc-> fullname}}</td>
                <td>{{$acc -> username}}</td>
                <td>{{$acc-> email}}</td>
                <td>{{$acc-> phone}}</td>
                <td>{{$acc-> address}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
<!--<div action="{{route('logout')}}" method="POST">-->
<!--    @csrf-->
<!--    <button type="submit" >Logout</button>-->
<!--</div>-->


