<form method="POST" action="{{ route('employees.store') }}">
    @csrf  
    <label>Name :-</label>
    <input type='text' name='name' value='{{old('name')}}'><br>
    @error('name')
    {{$message}}
    @enderror <br>

    <label>Email :-</label>
    <input type='email' name='email' value='{{old('email')}}'><br>
    @error('email')
    {{$message}}
    @enderror <br>

    <label>Number :-</label>
    <input type='number' name='number' value='{{old('number')}}'><br>
    @error('number')
    {{$message}}
    @enderror </br>

    <button  type='submit' name='submit'>Submit</button>

</form>