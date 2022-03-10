<?php

use Illuminate\Support\Facades\Route;
// sử dụng $request trong callback của routes
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/users', function (
    
//) {
 //   $users = [
  //      [
  //          'name' => 'namhvph10684',
  //          'height' => '160',
  //          'weight' => '61',
  //          'gender' => 'Nam',
  //          'age' => '21',
  //          'class'=> 'Web16201', 
  //          'id' => '1',
  //          'avartar' =>'https://scontent.fhan14-2.fna.fbcdn.net/v/t39.30808-6/273964004_1305001239911958_3217300391435721069_n.jpg?_nc_cat=109&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=0b7YweTRQnYAX-uwHpt&tn=7w06qGFYBoMxeA3h&_nc_ht=scontent.fhan14-2.fna&oh=00_AT8v5EZ9cil_c3-3D2F86YnIdptW0UK8LHg5xVMSCDnNOA&oe=622F5875'
  //      ],
       
  //  ];
   // return view('welcome',['users' => $users]);
   // dd($student);
    
//});
// thư mục view resourcees/view/"auth/login".blade.php => auth/login.blade.php
Route::get('/login',function () {
    $email = 'namhvph10684@gmail.com';
    $password = '123456';
    return view('login',[
        'email' => $email,
        'password' => $password
    ]);
   // return view('login')->with('user','namhvph10684');
});
//Route KÈM  query string và params
// với tham số truyền vào url thì funcition sẽ nhận 1 tham số tương ứng
//Route::get('/users/{usersId}/{usersname?}',function (
//    Request $request,
//    $usersId,$usersName = 'profile') {
//    dd($usersId, $usersName, $request->all());
//});

Route::get('users/{usersId?}/{usersName?}/{usersClass?}/{usersInfo?}',function (
    Request $request,
    $usersId ='1',
    $usersName = 'namhvph10684',
    $usersClass = 'web16201',
    $usersInfo = 'title'
){
    
        $users = [
            [
                'name' => 'namhvph10684',
                'height' => '160',
                'weight' => '61',
                'gender' => 'Nam',
                'age' => '21',
                'class'=> 'Web16201', 
                'id' => '1',
                'avartar' =>'https://scontent.fhan14-2.fna.fbcdn.net/v/t39.30808-6/273964004_1305001239911958_3217300391435721069_n.jpg?_nc_cat=109&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=0b7YweTRQnYAX-uwHpt&tn=7w06qGFYBoMxeA3h&_nc_ht=scontent.fhan14-2.fna&oh=00_AT8v5EZ9cil_c3-3D2F86YnIdptW0UK8LHg5xVMSCDnNOA&oe=622F5875'
            ],
           
        ];
        return view('welcome',['users' => $users]);
    //dd($usersId, $usersName,$usersClass,$usersInfo, $request->all());
});


