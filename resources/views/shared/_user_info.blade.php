<a href="{{ route('users.show', $user->id) }}">
  <img src="{{ $user->avatar }}" alt="{{ $user->name }}" class="gravatar"/>
  <!-- <img class="card-img-top" src="{{ $user->avatar }}" alt="{{ $user->name }}"> -->
</a>
<h1>{{ $user->name }}</h1>
