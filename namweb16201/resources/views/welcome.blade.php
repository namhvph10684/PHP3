<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>
<body>
   
    
     
     {{-- bgin table data--}}
     <div class="container">
        <table class="table table-striped">
            <thead>
                <td>Tên </td>
                <td>Chiều Cao  </td>
                <td>Cân Nặng</td>
                <td>Giới Tính</td>
                <td>Tuổi</td>
                <td>Lớp</td>
                <td>Mã SV</td>
                <td>Ảnh</td>
            </thead>
            <tbody>
                @foreach ($users as $users)
                @if($users['id'] == 1)
                <tr>
                    <td>{{$users['name']}}</td>
                    <td>{{$users['height']}}</td>
                    <td>{{$users['weight']}}</td>
                    <td>{{$users['gender']}}</td>
                    <td>{{$users['age']}}</td>
                    <td>{{$users['class']}}</td>
                    <td>{{$users['id']}}</td>
                    <td><img weight="200" height="200" src="{{$users['avartar']}}" alt=""></td>

                </tr>
               


                @endif()
                
                @endforeach
                
            </tbody>
        </table>
     </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>