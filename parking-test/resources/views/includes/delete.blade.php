<form action="{{ route('delete', ['id' => $car->id]) }}" method="post">
    @csrf
    <button type="submit">Delete</button>
</form>