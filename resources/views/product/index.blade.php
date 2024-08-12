<x-admin>
    <div class="float-end">
        <a href="{{route('product.create')}}" class="btn btn btn-primary">create</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">slug</th>
                <th scope="col">category</th>
                <th scope="col">subcategory</th>
                <th scope="col">price</th>
                <th scope="col">desc</th>
                <th scope="col">img</th>
                <th scope="col">action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($products as $product )
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->slug}}</td>
                <td>{{optional($product->category)->name}}</td>
                <td>{{optional($product->subcategory)->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->desc}}</td>

                <td>
                    <img src="{{ asset('blog/'.$product->image) }}" alt="{{$product->filename }}" style="width:50px;height:50px;">
                </td>





                <td><a href="{{route("product.edit",$product)}}" class="btn btn-success">edit</a>
                    <form action="{{route('product.destroy',$product)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn btn-danger" type="submit">delete</button>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</x-admin>
