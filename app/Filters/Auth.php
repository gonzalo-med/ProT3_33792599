<?php
namespace App\Filters;
use CodeIgniter\HTTP\ResquestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterfase;

class Auth implements FilterInterfase
{
    public function before(RequestInterface $request, $arguments = null)
    {

        if(!session()->get('logged_in')){
            return redirect()->to('/login');
        }
    }


    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        
    }
}