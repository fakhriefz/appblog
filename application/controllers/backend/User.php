<?php

class User extends MY_Controller{

    public function profile()
    {

        $notif=null;
        $user = \Orm\User::first();

        if($this->input->post()){
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            if($username == '' || $password == ''){
                $notif = "username / password tidak boleh kosong"; 
            }else{
                $user->username = $username;
                $user->password = $password;
                $user->save();

                $notif = "username / berhasil di ganti"; 
            }
                   
        }
       view('backend/User/profile', ['user'=> $user, 'notif' => $notif]);
    }
    
}