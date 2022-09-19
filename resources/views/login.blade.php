@extends('layouts.layout')
@section('title')<title>Login Page</title>@endsection
@section('body')
<body>
    <h1>Login page</h1>
    <form action="" methods="POST">
        <label for="username">Enter Username:</label>
        <input type="text" id="username" name="username">
        <label for="password">Enter password:</label>
        <input type="text" id="password" name="password">
        <input type="submit" value="Submit">
    </form>
</body>
@endsection

