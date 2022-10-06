<?php

class Profile extends Controller
{
    public function __construct()
    {
        Auth::is_login();
    }

    public function index()
    {
        if (!empty($_POST)) {
            if (!empty($_POST['password'])) {
                Database::update('users', ['id' => Auth::user()->id], [
                    'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
                ]);
            }
            if (!empty($_FILES['picture']['name'])) {
                $ext = explode('.', $_FILES['picture']['name']);
                $ext = end($ext);
                $filename = Auth::user()->id . '.' . $ext;
                unlink('files/profile/' . Auth::user()->picture);
                move_uploaded_file($_FILES['picture']['tmp_name'], 'files/profile/' . $filename);
                Database::update('users', ['id' => Auth::user()->id], [
                    'picture' => $filename
                ]);
            }
            Flasher::setFlash('Success', 'Update Profile', 'primary');
            header('Location:' . BASEURL . '/Profile');
            exit;
        }

        $data = [
            'title' => 'Profile',
            'area' => ''
        ];

        $this->view('templates/header', $data);
        $this->view('profile/index', $data);
        $this->view('templates/footer');
    }

    public function print()
    {
        $data = [
            'title' => 'Profile'
        ];
        $this->view('templates/header1', $data);
        $this->view('profile/print', $data);
        $this->view('templates/footer');
    }
}
