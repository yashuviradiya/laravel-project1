<x-admin>
    <form action="{{route('product.update',$product)}}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="name">name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{$product->name}}">

            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category" id="category" class="form-control" required value="{{$product->category}}">
                        @foreach ($categories as $category)
                        <option  value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>


                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="subcategory">Subcategory</label>
                        <select name="subcategory" id="subcategory" class="form-control" required value="{{$product->subcategory}}">
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ $category->id == $category->category_id ? 'selected' : ''
                            }}>{{ $category->name }}</option>
                        @endforeach

                        </select>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <b><label for="">img</label></b><br>
                    <input type="file" name="image" class="form-control" value="{{$product->image}}">

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <div class="form-group">
                        <label for="price">price</label>
                        <input type="text" name="price" id="price" class="form-control" value="{{$product->price}}">

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="desc">description</label>
                    <textarea type="desc" name="desc" id="desc" class="form-control" value="{{$product->desc}}"></textarea>

                </div>
            </div>
        </div><br>
        <br>
        <div>
            <button type="submit" class="btn btn-primary">save</button>
        </div>
    </div>
</form>

</x-admin>
