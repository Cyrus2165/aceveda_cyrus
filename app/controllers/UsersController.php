<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Controller: UsersController
 * 
 * Automatically generated via CLI.
 */
class UsersController extends Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->call->model('UsersModel');
        $data['users'] = $this->UsersModel-> All();

        $this->call->view('users/index', $data);
    }

    public function create(){
        if($this->io->method() == 'post'){
            $first_name = $this->io->post('first_name');
            $last_name = $this->io->post('last_name');
            $email = $this->io->post('email');

            $data = [
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email
            ];

            if($this->UsersModel->insert($data)){
                redirect(site_url(''));
            }else{
                echo "Error in creating user.";
            }

        }else{
            $this->call->view('users/create');
        }
    }

    function update($id){
        $user = $this->UsersModel->find($id);
        if(!$user){
            echo "User not found.";
            return;
        }

        if($this->io->method() == 'post'){
            $first_name = $this->io->post('first_name');
            $last_name = $this->io->post('last_name');
            $email = $this->io->post('email');

            $data = [
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email
            ];

            if($this->UsersModel->update($id, $data)){
                redirect();
            }else{
                echo "Error in updating user.";
            }
        }else{
            $data['user'] = $user;
            $this->call->view('users/update', $data);
        }
    }
    
  public function delete($id)
{
    $this->call->model('UsersModel');

    if ($this->io->method() === 'post') {
        if ($this->UsersModel->delete($id)) {
            
            redirect(site_url(''));  
        } else {
            echo 'Something went wrong while deleting user.';
        }
    } else {
        echo "Invalid request method.";
    }
}

}