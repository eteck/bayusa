<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/



Route::group(['middleware' => ['web']], function () {
    //
	Route::bind('product',function($slug){
    	return bayusa\Product::where('slug',$slug)->first();
    });

    //
	Route::bind('category', function($category){
        try{
            //dd($category);
            $categoryf = bayusa\Category::find($category);
        }catch(Symfony\Component\HttpKernel\Exception\NotFoundHttpException $f){
            $categoryf; 
        }catch(\Exception $e){
            $categoryf; 
        }
	    return $categoryf; 
	});

	Route::bind('user', function($user){
	    return bayusa\User::find($user);
	});

    Route::bind('order', function($order){
        return bayusa\Order::find($order);
    });


    Route::get('/', [
    	'as'=>'welcome',
    	'uses'=>'StoreController@index']);

    Route::get('/menu',[
        'as'=>'menu',
        'uses'=>'MenuController@menu']);

    Route::get('/menu/{category}',[
        'as'=>'submenu',
        'uses'=>'MenuController@subMenu']);

    Route::get('store/{slug}',[
    	'as'=>'product-datail',
    	'uses'=>'StoreController@show']);

    Route::get('conocenos', [
    	'as'=>'conocenos',
    	'uses'=>'StoreController@conocenos']);

    Route::get('contacto', [
    	'as'=>'contacto',
    	'uses'=>'StoreController@contacto']);

    Route::get('politicas', [
    	'as'=>'politicas',
    	'uses'=>'StoreController@politicas']);

    Route::get('promociones', [
    	'as'=>'promociones',
    	'uses'=>'StoreController@promociones']);

    //Shopping cart
    Route::get('cart/show',[
    	'as'=>'cart-show',
    	'uses'=>'CartController@show']);

    Route::get('cart/add/{product}',[
    	'as'=>'cart-add',
    	'uses'=>'CartController@add']);

    Route::get('cart/delete/{product}',[
    	'as'=>'cart-delete',
    	'uses'=>'CartController@delete']);

    Route::get('cart/trash',[
    	'as'=>'cart-trash',
    	'uses'=>'CartController@trash']);

    Route::get('cart/update/{product}/{quantity?}',[
    	'as'=>'cart-update',
    	'uses'=>'CartController@update']);

    Route::get('order-detail',[
        'middleware'=>'auth',
        'as'=>'order-detail',
        'uses'=>'CartController@orderDetail']);

    //Pagos Paypal
    //Envio de pedido 
    Route::get('payment', [
    	'as' => 'payment',
    	'uses' => 'PaypalController@postPayment']);

    Route::get('order-request', [
        'as' => 'order-request',
        'uses' => 'OrderController@orderRequest']);

    Route::get('payment/status', [
    	'as' => 'payment.status',
    	'uses' => 'PaypalController@getPaymentStatus']);

    
    
});

Route::group(['namespace'=>'Admin','middleware'=>['web','auth'],'prefix'=>'admin'],function(){
	

	Route::get('/',[
    	'as' => 'backoffice',
    	'uses' => 'AdminController@index'
    	]);

    Route::get('catalogo',[
    	'as' => 'catalogo',
    	'uses' => 'AdminController@catalogo'
    	]);

    Route::get('orders',[
        'as'=>'admin.order.index',
        'uses'=>'OrderController@index'
        ]);

    Route::get('orders/{order}/detail',[
        'as'=>'admin.order.detail',
        'uses'=>'OrderController@orderDetail'
        ]);

    //Controladores Rest
    Route::resource('category','CategoryController');

    Route::resource('product','ProductController');

    Route::resource('user','UserController');

    
});


Route::group(['middleware' => 'web'], function () {
    Route::auth();
    
});
