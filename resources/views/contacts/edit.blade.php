<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Larateste</title>
</head>

<body>
    <a href="{{route('contact.create') }}">List</a>
    <a href="{{route('contact.show', ['contact'=>$contact->id]) }}">View</a>
    @if($errors->any())
    @foreach ($errors->all() as $error)
    <p style="color:red;">
        {{$error}}
    </p>
    @endforeach
    </p>
    @endif

    <h2>User Edit</h2>
    <form action="{{route('contact.update', ['contact'=>$contact->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Name:</label>
        <input type="text" name="name" placeholder="Your Full Name" value="{{old('name', $contact->name)}}"><br><br>
        <label>Contact:</label>
        <input type="text" name="contact" placeholder="Your Contact Number" value="{{old('contact', $contact->contact)}}"><br><br>
        <label>email:</label>
        <input type="email" name="email" placeholder="Your email" value="{{old('email', $contact->email)}}"><br><br>
        <button type="submit">Save</button>

    </form>
</body>

</html>