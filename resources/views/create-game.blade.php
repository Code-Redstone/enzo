<div>
<form action="{{ url('games') }}" method="post">
    @csrf
  <input type="text"  name="name" placeholder="name" value="{{ $game->name ?? '' }}"><br>
  <input type="text"  name="type" placeholder="type" value="{{ $game->type ?? '' }}"><br>
  <input type="text"  name="ratings" placeholder="ratings" value="{{ $game->ratings ?? '' }}"><br>
  <input type="text"  name="price" placeholder="price" value="{{ $game->price ?? '' }}"><br>
  <input type="submit" value="Submit">
</form> 
</div>
