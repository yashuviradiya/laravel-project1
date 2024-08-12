     <x-admin>
    <form action="{{route('b.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="date">date</label>
            <input type="date" name="date" id="date" class="form-control">
        </div>
            @error('date')
            <span class="text-danger">{{ $message }}</span>
            @enderror


        <div class="form-group">
            <label for="slug">slug</label>
            <input type="text" name="slug" id="slug" class="form-control">
        </div>
        @error('slug')
            <span  class="text-danger">{{ $message }}</span>
        @enderror

        <div class="form-group">
            <label for="subcategory">subcategory</label>
            <select name="subcategory" id="sucategory" class="form-control">
                <option value="" selected disabled>select subcategory</option>
                @foreach ($subcategories as  $item)
                <option {{old('subcategory')==$item->id ? 'selected' : ''}}value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
        @error('subcategory')
            <span  class="text-danger">{{ $message }}</span>
        @enderror

        <div class="form-group">
            <label for="shortdesc">shortdesc</label>
            <input type="text" name="shortdesc" id="shortdesc" class="form-control">
        </div>
        @error('shortdesc')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <div class="form-group">
            <label for="desc">desc</label>
            <input type="text" name="desc" id="desc" class="form-control">
        </div>
        @error('desc')
            <span  class="text-danger">{{ $message }}</span>
        @enderror

        <div class="form-group">
            <label for="image">img</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>
        @error('image')
            <span  class="text-danger">{{ $message }}</span>
        @enderror

        <br>
        <button type="submit" class="btn btn-primary">save</button>
</x-admin>

