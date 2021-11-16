<?php
/**
 * Control controller File Doc Comment
 * 
 * PHP Version 8.0.7
 * 
 * @category WhiteStores
 * @package  WhiteStores_
 * @author   Mike Andrews <michael.andrews@whitestores.co.uk>
 * @license  https://whitestores.co.uk UNLICENSED
 * @link     https://github.com/White-Stores/
 */
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
/**
 * Base controller class
 *
 * @category WhiteStores
 * @package  WhiteStores_
 * @author   Mike Andrews <michael.andrews@whitestores.co.uk>
 * @license  https://whitestores.co.uk UNLICENSED
 * @link     https://github.com/White-Stores/
 */
class Control extends Controller
{
    /**
     * Form maker
     * 
     * @return view
     */
    public function form()
    {
        return view('user.profile');
    }

    /**
     * URL shortener
     * 
     * @request string request the request variable
     * 
     * @return url
     */
    public function shorten(Request $request)
    {
        
        $data = $request->words;
        $shorts = [];
        $i = 0;

        function check($array, $word) {
            $short = $word[$i];
            if(in_array($short, $array)) {
                $i++;
                check($shorts, $data);
            }else{
                $i = 0;
                return true;
            }
        }
        
        foreach($data as $word) {
            check($shorts, $data);
        }

        return $shorts;

    }

    /**
     * URL rebuilder
     * 
     * @url string request url
     * 
     * @return link
     */
    public function rebuild($url)
    {
        $link = DB::table('links')->where('data', '=', $url)->pluck('link');

        return redirect($link);
    }
}
