<div class="mx-5">
    <table class="mx-auto">
        <thead class="bg-gray-50">
            <tr class="bg-gray-50">
                <th>No</th>
                <th>Nama</th>
                <th>Description</th>
                <th>Img</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        @foreach ($products as $product)
        <tr>
            <td class="td">{{ $loop->iteration }}</td>
            <td class="td">{{ $product->name }}</td>
            <td class="td">{{ $product->description }}</td>
            <td class="td">{{ $product->img }}</td>
            <td class="td">{{ $product->price }}</td>
            <td class="td">
                <a href="" class="btn bg-warning">Edit</a>
                <a href="" class="btn bg-success">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
   <div class="my-5">
    {{ $products->links() }}
   </div>
</div>