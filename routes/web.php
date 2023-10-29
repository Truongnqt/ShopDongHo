<?php

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

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return view('welcome');
});

//home	
Route::get('show', [
	'as' => 'trangchu',
	'uses' => 'homecontroller@home'
]);

Route::get('dong-ho-nam', [
	'as' => 'donghonam',
	'uses' => 'homecontroller@dhnam'
]);

Route::get('dong-ho-nu', [
	'as' => 'donghonu',
	'uses' => 'homecontroller@dhnu'
]);

Route::get('dong-ho-doi', [
	'as' => 'donghodoi',
	'uses' => 'homecontroller@dhdoi'
]);

Route::get('top', [
	'as' => 'hot',
	'uses' => 'homecontroller@dhhot'
]);

Route::get('treo-tuong', [
	'as' => 'treotuong',
	'uses' => 'homecontroller@dhtreotuong'
]);




//trang phụ

Route::get('thuong-hieu/{type}', [
	'as' => 'thuonghieu',
	'uses' => 'homecontroller@getthuonghieu'
]);

Route::get('loai-may/{type}', [
	'as' => 'loaimay',
	'uses' => 'homecontroller@getloaimay'
]);

Route::get('loai-day/{type}', [
	'as' => 'loaiday',
	'uses' => 'homecontroller@getloaiday'
]);

Route::get('chi-tiet-san-pham/{id}', [
	'as' => 'chitiet',
	'uses' => 'homecontroller@getchitiet'
]);

Route::get('tin-tuc/{id}', [
	'as' => 'tintuc',
	'uses' => 'homecontroller@gettintuc'
]);

//login

// Route::get('login-admin',[
// 	'as'=>'loginquantri',
// 	'uses'=>'admincontroller@loginQT'
// ]);

// Route::post('login-admin',[
// 	'as'=>'loginquantri',
// 	'uses'=>'admincontroller@postLoginQT'
// ]);

// Route::get('signup-admin',[
// 	'as'=>'signupAdmin',
// 	'uses'=>'admincontroller@signupAdmin'
// ]);

// Route::post('signup-admin',[
// 	'as'=>'signupAdmin',
// 	'uses'=>'admincontroller@postSignupAdmin'
// ]);

Route::get('login', [
	'as' => 'dangnhap',
	'uses' => 'homecontroller@login'
]);

Route::post('login', [
	'as' => 'dangnhap',
	'uses' => 'homecontroller@postLogin'
]);

Route::get('logout', [
	'as' => 'dangxuat',
	'uses' => 'homecontroller@getLogout'
]);

Route::get('signup', [
	'as' => 'dangky',
	'uses' => 'homecontroller@signup'
]);

Route::post('signup', [
	'as' => 'dangky',
	'uses' => 'homecontroller@postSignup'
]);

//tìm kiếm
Route::get('search', [
	'as' => 'search',
	'uses' => 'homecontroller@getSearch'
]);

//giỏ hàng

Route::get('add-to-cart/{id}', [
	'as' => 'themgiohang',
	'uses' => 'homecontroller@getAddtoCart'
]);

Route::get('delete-to-cart/{id}', [
	'as' => 'xoagiohang',
	'uses' => 'homecontroller@deleteToCart'
]);

//Đặt hàng

Route::get('checkout', [
	'as' => 'dathang',
	'uses' => 'homecontroller@getCheckout'
]);

Route::post('checkout', [
	'as' => 'dathang',
	'uses' => 'homecontroller@postCheckout'
]);

// Comment

Route::post('comment/{id}', [
	'as' => 'binhluan',
	'uses' => 'homecontroller@postComment'
]);




//home admin

Route::get('home-admin', [
	'as' => 'homeadmin',
	'uses' => 'admincontroller@admin'
]);

Route::get('ql-san-pham', [
	'as' => 'qlsp',
	'uses' => 'admincontroller@quanlysanpham'
]);

Route::get('ql-loai-may', [
	'as' => 'qllm',
	'uses' => 'admincontroller@quanlyloaimay'
]);

Route::get('ql-loai-day', [
	'as' => 'qlld',
	'uses' => 'admincontroller@quanlyloaiday'
]);

Route::get('ql-thuong-hieu', [
	'as' => 'qlth',
	'uses' => 'admincontroller@quanlythuonghieu'
]);

Route::get('ql-thanh-vien', [
	'as' => 'qltv',
	'uses' => 'admincontroller@quanlythanhvien'
]);

Route::get('ql-hoa-don', [
	'as' => 'qlhd',
	'uses' => 'admincontroller@quanlyhoadon'
]);

Route::get('ql-hoa-don-nhap', [
	'as' => 'qlhdn',
	'uses' => 'admincontroller@quanlyhoadonnhap'
]);

Route::get('ql-ban-hang', [
	'as' => 'qlbh',
	'uses' => 'admincontroller@quanlybanhang'
]);

Route::get('ql-huy-hang', [
	'as' => 'qlhuyhang',
	'uses' => 'admincontroller@quanlyhuyhang'
]);

Route::get('ql-tin-tuc', [
	'as' => 'qltt',
	'uses' => 'admincontroller@quanlytintuc'
]);

Route::get('ql-comment', [
	'as' => 'qlcomment',
	'uses' => 'admincontroller@quanlycomment'
]);

Route::get('ql-slide-header', [
	'as' => 'qlSlide',
	'uses' => 'admincontroller@quanlySlide'
]);

Route::get('thong-ke-bao-cao', [
	'as' => 'TKBC',
	'uses' => 'admincontroller@TKBC'
]);


//Search


Route::get('QL-san-pham', [
	'as' => 'searchQT',
	'uses' => 'admincontroller@Search'
]);

Route::get('QL-don-hang', [
	'as' => 'searchDH',
	'uses' => 'admincontroller@SearchDH'
]);

Route::get('QL-thuong-hieu', [
	'as' => 'searchQLTH',
	'uses' => 'admincontroller@SearchQLTH'
]);

Route::get('QL-loai-day', [
	'as' => 'searchQLLD',
	'uses' => 'admincontroller@SearchQLLD'
]);

Route::get('QL-loai-may', [
	'as' => 'searchQLLM',
	'uses' => 'admincontroller@SearchQLLM'
]);

Route::get('QL-thanh-vien', [
	'as' => 'searchQLTV',
	'uses' => 'admincontroller@SearchQLTV'
]);


//product

Route::get('add-product', [
	'as' => 'addproduct',
	'uses' => 'admincontroller@themsanpham'
]);
Route::post('add-product', [
	'as' => 'addproduct',
	'uses' => 'admincontroller@postSanpham'
]);

Route::get('update-product/{id}', [
	'as' => 'updateproduct',
	'uses' => 'admincontroller@suasanpham'
]);

Route::post('update-product/{id}', [
	'as' => 'updateproduct',
	'uses' => 'admincontroller@postupdatesanpham'
]);

Route::get('xoa/{id}', [
	'as' => 'xoasp',
	'uses' => 'admincontroller@xoasanpham'
]);

//producer
Route::post('add-producer', [
	'as' => 'addproducer',
	'uses' => 'admincontroller@postAddth'
]);

Route::get('xoa-thuong-hieu/{id}', [
	'as' => 'deletethuonghieu',
	'uses' => 'admincontroller@xoathuonghieu'
]);


//loại máy

Route::post('add-loai-may', [
	'as' => 'addloaimay',
	'uses' => 'admincontroller@postAddlm'
]);

Route::get('xoa-loai-may/{id}', [
	'as' => 'deleteloaimay',
	'uses' => 'admincontroller@xoaloaimay'
]);

//loại dây

Route::post('add-loai-day', [
	'as' => 'addloaiday',
	'uses' => 'admincontroller@postAddld'
]);

Route::get('xoa-loai-day/{id}', [
	'as' => 'deleteloaiday',
	'uses' => 'admincontroller@xoaloaiday'
]);


//User

Route::get('xoa-thanh-vien/{id}', [
	'as' => 'deletethanhvien',
	'uses' => 'admincontroller@xoathanhvien'
]);


//Tin Tức

Route::get('add-tintuc', [
	'as' => 'addtintuc',
	'uses' => 'admincontroller@themtintuc'
]);
Route::post('add-tintuc', [
	'as' => 'addtintuc',
	'uses' => 'admincontroller@postTintuc'
]);

Route::get('update-tintuc/{id}', [
	'as' => 'updateTintuc',
	'uses' => 'admincontroller@suatintuc'
]);

Route::post('update-tintuc/{id}', [
	'as' => 'updateTintuc',
	'uses' => 'admincontroller@postupdateTintuc'
]);

Route::get('xoa-tin-tuc/{id}', [
	'as' => 'deleteTin',
	'uses' => 'admincontroller@xoatintuc'
]);

// Đơn hàng

Route::get('ct-hd/{id}', [
	'as' => 'cthd',
	'uses' => 'admincontroller@cthd'
]);

Route::post('ban-hang/{id}', [
	'as' => 'ban_hang',
	'uses' => 'admincontroller@postgiao_hang'
]);

Route::post('huy-don-hang/{id}', [
	'as' => 'huy_hang',
	'uses' => 'admincontroller@posthuy_hang'
]);

// Bán hàng

Route::get('banhang/{id}', [
	'as' => 'bh',
	'uses' => 'admincontroller@bh'
]);

// hủy đơn hàng

Route::get('huydonhang/{id}', [
	'as' => 'huydon',
	'uses' => 'admincontroller@huydon'
]);
