<?php

class Users extends Controller
{
    public function __construct()
    {
        Auth::is_login();
        Auth::must_role('admin');
    }

    public function index()
    {
        if (!empty($_POST)) {
            $post = $_POST;
            unset($post['name']);
            unset($post['departement']);
            unset($post['password']);
            unset($post['picture']);
            unset($post['role']);
            $ext = explode('.', $_FILES['picture']['name']);
            $ext = end($ext);
            $filename = $_POST['id'] . '.' . $ext;
            move_uploaded_file($_FILES['picture']['tmp_name'], 'files/profile/' . $filename);
            Database::insert('users', [
                'id' => $_POST['id'],
                'role' => $_POST['role'],
                'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                'name' => $_POST['name'],
                'departement' => $_POST['departement'],
                'area_id' => $_POST['id'],
                'picture' => $filename
            ]);
            Database::insert('area', $post);
            Flasher::setFlash('Success', 'Add New User', 'primary');
            header("Location:" . BASEURL . '/Users');
            exit;
        }

        $data = [
            'title' => 'Users'
        ];

        $this->view('templates/header', $data);
        $this->view('users/index', $data);
        $this->view('templates/footer');
    }

    public function update($id = null)
    {
        if ($id == null) {
            Flasher::setFlash('Failed', 'Delete User', 'danger');
            header("Location:" . BASEURL . '/Users');
            exit;
        } else {
            if (!empty($_POST)) {
                if (!empty($_POST['password'])) {
                    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                } else {
                    $password = Database::find('users', 'id', $id)->password;
                }
                $post = $_POST;
                unset($post['name']);
                unset($post['departement']);
                unset($post['password']);
                unset($post['role']);
                Database::update('users', ['id' => $id], [
                    'id' => $_POST['id'],
                    'role' => $_POST['role'],
                    'password' => $password,
                    'name' => $_POST['name'],
                    'departement' => $_POST['departement'],
                    'area_id' => $_POST['id']
                ]);

                Database::update('area', ['id' => $id], [
                    'A' => 'off',
                    'B' => 'off',
                    'C' => 'off',
                    'F' => 'off',
                    'G' => 'off',
                    'L' => 'off',
                    'M' => 'off',
                    'N' => 'off',
                    'O' => 'off',
                    'P' => 'off',
                    'R' => 'off',
                    'T' => 'off',
                    'U' => 'off',
                    'V' => 'off'
                ]);
                Database::update('area', ['id' => $id], $post);
                Flasher::setFlash('Success', 'Update User', 'primary');
                header("Location:" . BASEURL . '/Users');
                exit;
            }

            $data = [
                'title' => 'Users',
                'edit' => Database::find('users', 'id', $id),
                'area' => Database::find('area', 'id', $id)
            ];

            $this->view('templates/header', $data);
            $this->view('users/edit', $data);
            $this->view('templates/footer');
        }
    }

    public function delete($id = null)
    {
        if ($id == null) {
            Flasher::setFlash('Failed', 'Delete User', 'danger');
            header("Location:" . BASEURL . '/Users');
            exit;
        } else {
            Database::delete('users', 'id', $id);
            Database::delete('area', 'id', $id);
            Flasher::setFlash('Success', 'Deleted User', 'primary');
            header("Location:" . BASEURL . '/Users');
            exit;
        }
    }
}
