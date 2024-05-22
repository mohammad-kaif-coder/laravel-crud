
    <form method="POST" action="{{ route('employees.update', ['id' => $employee->id]) }}">
    @csrf  
    @method('PUT')
    <label>Name :-</label>
    <input type='text' name='name' value='{{$employee->name}}'><br>
    @error('name')
    {{$message}}
    @enderror <br>

    <label>Email :-</label>
    <input type='email' name='email' value='{{$employee->email}}'><br>
    @error('email')
    {{$message}}
    @enderror <br>

    <label>Number :-</label>
    <input type='number' name='number' value='{{$employee->number}}'><br>
    @error('number')
    {{$message}}
    @enderror </br>

    <button  type='submit' name='submit'>Submit</button>

</form>