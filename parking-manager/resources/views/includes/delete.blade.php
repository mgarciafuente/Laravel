<form action="{{ route('destroy', ['id' => $parking->id]) }}" method="post">
    @csrf
    <button type="submit" class="delete">{{ $text }}</button>
</form>