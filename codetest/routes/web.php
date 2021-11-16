<?php
/**
 * Codetest File Doc Comment
 * 
 * PHP Version 8.0.7
 * 
 * @category WhiteStores
 * @package  WhiteStores_
 * @author   Mike Andrews <michael.andrews@whitestores.co.uk>
 * @license  https://whitestores.co.uk UNLICENSED
 * @link     https://github.com/White-Stores/
 */
use Illuminate\Support\Facades\Route;

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

Route::get('/shorten', [Control::class, 'form']);
