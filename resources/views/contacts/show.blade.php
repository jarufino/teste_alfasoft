<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Larateste</title>
</head>

<body>
    <a href="{{route('contact.index')}}">List</a>
    <a href="{{route('contact.edit', ['contact'=>$contact->id]) }}">Edit</a>
    <h2>Show User</h2>
    @if(session('success'))
    <p style="color:#086;">{{session('success')}}</p>
    @endif
    ID:{{$contact->id}}<br>
    name:{{$contact->name}}<br>
    Email:{{$contact->email}}<br>
    Contact:{{$contact->contact}}<br>
    Registered:{{\Carbon\Carbon::parse($contact->created_at)->format('d/m/Y H:i:s')}}<br>
    Edited:{{\Carbon\Carbon::parse($contact->updated_at)->format('d/m/Y H:i:s')}}<br>
</body>

</html>