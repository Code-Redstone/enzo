<a href="{{ url('games/create') }}">Create</a>
<table style="border: 1px solid black">
    <tr>
        <th>Name</th>
        <th>Type</th>
        <th>Ratings</th>
        <th>Price</th>
    </tr>
    @foreach($games as $game)
    <tr>
        <td>{{ $game->name }}</td>
        <td>{{ $game->type }}</td>
        <td>{{ $game->ratings }}</td>
        <td>{{ $game->price }}</td>
        <td><a href="{{ url('games') }}/edit/{{ $game->id }}">edit</a></td>
        <td><a href="{{ url('games') }}/delete/{{ $game->id }}">delete</a></td -->
    </tr>
    @endforeach
</table>