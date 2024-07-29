@include('layout.form')


<!--<h1>Account Information</h1>-->

<hr>
    <table>

        <thead>
            <tr>
                <th>Full name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Block</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($accounts as $acc)
            <tr>
                <td>{{$acc-> fullname}}</td>
                <td>{{$acc-> username }}</td>
                <td>{{$acc-> email}}</td>
                <td>{{$acc-> phone}}</td>
                <td>{{$acc-> address}}</td>
                <td>
                    <form action="{{route('accounts.block')}}" method="POST">
                        @csrf
                        <input type="hidden" name="username" value="{{ $acc->username }}">
                        <input type="checkbox" id="blockAccount_{{ $acc->username }}"
                               {{$acc-> blocked ? 'checked' : ''}} onclick="this.form.submit()">

                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
        <div>
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif
        </div>
    </table>
