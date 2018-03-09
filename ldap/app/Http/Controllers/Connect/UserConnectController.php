<?php

namespace App\Http\Controllers\Connect;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Adldap\AdldapInterface;
use Adldap\Laravel\Facades\Adldap;

class UserConnectController extends Controller
{
	/**
     * @var Adldap
     */
    protected $ldap;
    
    /**
     * Constructor.
     *
     * @param AdldapInterface $adldap
     */
    public function __construct(AdldapInterface $ldap)
    {
        $this->ldap = $ldap;
    }
    
    /**
     * Displays the all LDAP users.
     *
     * @return \Illuminate\View\View
     */
    public function search_user()
    {
        $search = Adldap::search()->where('uid', '=', 'juan.ventas')->get();
        return $search;
    }
    
    /**
     * Displays the specified LDAP user.
     *
     * @return \Illuminate\View\View
     */
    public function find_user()
    {
    	$user = Adldap::search()->users()->find('Juan Franco');
        
        return $user;
    }

    /**
     * Displays the specified LDAP user.
     *
     * @return \Illuminate\View\View
     */
    public function create_user()
    {
    	
    	$user = Adldap::make()->user([
		    'cn' => 'John Doe',
		]);
    }

    // Creating a user:


/*
     public function all( Request $request ){

     	$dn = 'ou=fercan,ou=external,dc=inssoftmx,dc=com';
     	$results = Adldap::search()->setDn($dn)->get();

dd($results);

     	#$users = Adldap::auth()->attempt('juan.ventas', '1nss0ft1'); // Returns true.




     			return response()->json([
	                "message" => dd($users),
	            */
}
