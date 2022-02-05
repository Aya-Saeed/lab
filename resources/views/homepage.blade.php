<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="color:red">categories</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">phones</th>
      <th scope="col">watches</th>
      <th scope="col">sport_wear</th>
      <th scope="col">other</th>
    </tr>
  </thead>
  <tbody>
      @foreach($catego as $categories)
    <tr>
      <td>{{$categories[0]}}</td>
      <td>{{$categories[1]}}</td>
      <td>{{$categories[2]}}</td>
      <td>{{$categories[3]}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
<br>
<br>
<h2>products</h2>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">pro_id</th>
      <th scope="col">pro_name</th>
      <th scope="col">pro_price</th>
      

    </tr>
  </thead>
  <tbody>
      @foreach($prod as $product)
    <tr>
      <td>{{$product['id']}}</td>
      <td><a href="/product/{{$product['id']}}">{{$product['name']}} </a></td>
      <td>{{$product['price']}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>
