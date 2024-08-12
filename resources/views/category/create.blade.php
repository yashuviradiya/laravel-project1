<x-admin>
    <form action="{{route('category.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">name</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">save</button>
</x-admin>
