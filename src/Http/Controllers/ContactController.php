<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/21
 * Time: 9:32
 */
namespace Jai\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;

class ContactController extends Controller
{
    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {
        //dd(Config::get("contact.message"));
        return view('contact::contact');
    }
    public function test(){
        return 'hello,zzy';
    }
}