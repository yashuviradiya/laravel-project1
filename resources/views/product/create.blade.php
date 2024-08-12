<x-admin>
    <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="name">name</label>
                    <input type="text" name="name" id="name" class="form-control">
                    @error('name')
                        <span>{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select name="category" id="category" class="form-control" required>
                            @foreach ($categories as $category)
                            <option  value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="subcategory">Subcategory</label>
                            <select name="subcategory" id="subcategory" class="form-control" required>
                                <option value="" selected disabled>select the category first</option>
                            </select>
                        </div>
                        @error('subcategory')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <b><label for="">img</label></b><br>
                        <input type="file" name="image" class="form-control">
                        @error('image')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="price">price</label>
                            <input type="text" name="price" id="price" class="form-control">
                            @error('price')
                                <span>{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="desc">description</label>
                        <textarea type="desc" name="desc" id="desc" class="form-control"></textarea>
                        @error('desc')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div><br>
            <br>
            <div>
                <button type="submit" class="btn btn-primary">save</button>
            </div>
        </div>
    </form>

    @section('ajax')
    <script>
        $("#category").on('change', function() {
            let category = $("#category").val();
            // alert(category);
            // $("#submit").attr('disabled', 'disabled');
            // $("#submit").html('Please wait');
            $.ajax({
                url: "{{ route('getsubcategory') }}",
                type: 'GET',
                data: {
                    category: category,
                },
                success: function(data) {
                    $("#submit").removeAttr('disabled', 'disabled');
                    $("#submit").html('Save');
                    if (data) {
                        $("#subcategory").html(data);
                    }
                }
            });
        });
    </script>

    @endsection
</x-admin>
