<a href='{{route('employees.create')}}'>add</a>
@if(session('success'))
{{session('success')}}
@endif
<table border='1' >
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Number</td>
        <td>Action</td>
    </tr>
    @foreach($employees as $data)
    <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->name}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->number}}</td>
        <td>
            <a href='{{route('employees.edit',['id' => $data->id])}}'>Edit</a>
            
            <form action="{{route('employees.destroy',['id' => $data->id])}}" method="POST">
                @method('delete')
                @csrf
                <button type='submit'>Delete</button>
            </form>
            <a href="{{route('employees.show',['id' => $data->id])}}">View</a>

        </td>
    </tr>
    @endforeach
</table>