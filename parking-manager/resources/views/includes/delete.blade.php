<form action="{{ route('destroy', ['id' => $parking->id]) }}" method="post">
    @csrf
    @method('delete')
    <button type="submit" class="delete">{{ $text }}</button>
</form>