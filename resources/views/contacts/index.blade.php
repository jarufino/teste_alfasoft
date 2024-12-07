<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaraTeste</title>
</head>

<body>
    <a href="{{route('contact.create') }}">register</a>
    <h2>Lista de Contatos</h2>
    @if(session('success'))
    <p style="color:#086;">{{session('success')}}</p>
    @endif
    @forelse ($contacts as $contact)
    ID: {{$contact->id}}<br>
    Name:{{$contact->name}}<br>
    Contact:{{$contact->contact}}<br>
    Email:{{$contact->email}}<br>
    <a href="{{route('contact.show', ['contact'=>$contact->id]) }}">View</a><br>
    <a href="{{route('contact.edit', ['contact'=>$contact->id]) }}">Edit</a><br>
    <form method="POST" action="{{route('contact.destroy',['contact'=>$contact->id])}}">
        @csrf
        @method('delete')
        <button type="submit" onclick="return confirm('Are you sure you want to delete the contact?')">Delete</button>

    </form>
    <hr>
    @empty
    @endforelse


</body>

</html>