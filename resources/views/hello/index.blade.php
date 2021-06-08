<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
</head>

<body>
<p>{{$txt}}</p>
@if(count($errors)>0)
 <ul>
  @foreach ($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
@endif
<form action="\hello" method="POST">
  <table>
  @csrf
  <tr>
  <th>name:</th>
   <td>
    <input type="text" name="name" value="{{ old('name')}}">
   </td>
  </tr>
  <tr>
   <th>email:</th>
  <td>
   <input type="email" name="email" value="{{ old('email')}}">
  </td>
  </tr>
  <tr>
   <th>age:</th>
   <td>
   <input type="text" name="age" value="{{ old('age')}}">
   </td>
  </tr>
  </table>
  <input type="submit" value="送信">
</form>
</body>

</html>
