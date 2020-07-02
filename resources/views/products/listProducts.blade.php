<!DOCTPE html>
<html>
<head>
<title>View Products</title>
</head>
<body>
<table border = "1">
<tr>
<td>Id</td>
<td>Name</td>
<td>Category</td>
<td>slug</td>
<td>Description</td>
<td>Price</td>
</tr>
@foreach ($products as $product)
<tr>
<td>{{ $product->id}}</td>
<td>{{ $product->name }}</td>
<td>{{ $product->category}}</td>
<td>{{ $product->slug }}</td>
<td>{{ $product->description }}</td>
<td>{{ $product->price }}</td>
</tr>
@endforeach
</table>
</body>
</html>