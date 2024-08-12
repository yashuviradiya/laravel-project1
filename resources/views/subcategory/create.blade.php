<x-admin>
    <form action="{{route('subcategory.store')}}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">name</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="category">category</label>
            <select name="category" id="category" class="form-control">
                <option value="" selected disabled>select category</option>

                @foreach ($categories as $item)
                <option {{old('category')==$item->id ? 'selected' : ''}} value="{{$item->id}}">{{$item->name}}</option>
                @endforeach


            </select>
            <br>
            <button type="submit" class="btn btn btn-primary">save</button>
        </div>
    </form>
</x-admin>
