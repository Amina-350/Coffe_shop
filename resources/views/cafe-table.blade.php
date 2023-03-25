<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('data/css/bootstrap.min.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="{{asset('data/js/bootstrap.bundle.min.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">
  <title></title>
</head>
<body>
    <div class="container">

  
<div class="col-lg-12">
             <div class="row">

            
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                          Name
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Password
                          </th>
                        
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($query as $key)
                        <tr>
                          <td class="py-1">
                            {{$key->basic_name}}</td>
                            <td> {{$key->basic_email}}</td>
                            <td> {{$key->basic_password}}</td>
                    
                           
</tr>
@endforeach

</tbody>
</table>
</div>
</div>
</div>
</body>
</html>