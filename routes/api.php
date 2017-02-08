<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
        return Auth::guard('api')->user();
        return response()->json(['name' => 'Abigail', 'state' => 'CA']);
});


//Route::get('/getToken', function (Request $request) {
////Route::get('/user', function (Request $request) {
////     echo $request;
////    return Response::json(['hello']);
////    return $request->user();
//     return response()->json(['name' => 'Abigail', 'state' => 'CA']);
//});


Route::get('/gettoken',function(){
  $credentials = array('email' => 'cse.zubair.shaikh@gmail.com', 'password' => 'secret');

//        try {
            // verify the credentials and create a token for the user
            if (! $token=Auth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }

//            $token = $user->createToken('My Token', ['place-orders'])->accessToken;
//        }
//         catch (Exception $e) {
//            // something went wrong
//            return response()->json(['error' => 'could_not_create_token'], 500);
//        }
         return Response::json(compact('token'));

});
