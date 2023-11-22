<x-home-layout>
 <div class="mt-24">
  <table class="table">
   <thead>
    <th>#</th>
    <th>Name</th>
    <th>Description</th>
    <th>Cover</th>
    <th>price</th>
    <th>stock</th>
   </thead>
   <tbody>
    @foreach ($products as $product)
    <tr>
     <td>{{ $loop->iteration }}</td>
     <td>{{ $product->name }}</td>
    </tr>
    @endforeach
   </tbody>
  </table>
 </div>
</x-home-layout>