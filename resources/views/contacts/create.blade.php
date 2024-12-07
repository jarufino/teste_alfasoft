<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Larateste</title>
</head>

<body>
    <a href="{{route('contact.index') }}">Contact List</a>
    @if($errors->any())
    @foreach ($errors->all() as $error)
    <p style="color:red;">
        {{$error}}
    </p>
    @endforeach
    </p>
    @endif
    <h2>Save Contact</h2>
    <form action="{{route('contact.store') }}" method="POST">
        @csrf
        @method('POST')
        <label>Name:</label>
        <input type="text" name="name" placeholder="Your Full Name" value="{{old('name')}}"><br><br>
        <label>Contact:</label>
        <input type="text" name="contact" placeholder="Your Contact Number" value="{{old('contact')}}"><br><br>
        <label>email:</label>
        <input type="email" name="email" placeholder="Your email" value="{{old('email')}}"><br><br>
        <button type="submit">Register</button>

    </form>
</body>

</html>