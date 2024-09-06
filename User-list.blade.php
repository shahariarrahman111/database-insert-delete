<div>
    <h1>User List</h1>
    <table border = "1">
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Created</td>
            <td>Operation</td>

        </tr>
        @foreach($userdata as $user)

        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>
            <td>{{$user->created_at}}</td>
            <td><a href="{{'delete/'.$user->id}}">Delete</a></td>
        </tr>
        @endforeach
    </table>
</div>
