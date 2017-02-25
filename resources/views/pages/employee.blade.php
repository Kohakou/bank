@extends('layouts.design')
@section('content')

@include('tag._link')

<head>
<style>
.dropdown {
    position: relative;
    display: inline-block;
    margin-top: 9px;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 12px 16px;
}

.dropdown:hover .dropdown-content {
    display: block;
}
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 40px;
}


</style>
    </head>
<div>
  
    <label for="Username">UserName</label>
    <input type="text" id="Username" name="Username">

    <label for="Password">Password</label>
    <input type="text" id="Password" name="Password">

    <label for="Position">Position</label>
    <select id="Position" name="Position">
      <option value="Admin">Admin</option>
      <option value="Frontdesk">Frontdesk</option>
      <option value="Staff">Staff</option>
    </select>
  
    <input type="submit" value="LOGIN">

</div>


@endsection
<!-----------dito po nkalink bawat position ------------>
