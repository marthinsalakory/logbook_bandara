<?php

class Logbook extends Controller
{
    public function __construct()
    {
        Auth::is_login();
    }

    public function index()
    {
        if (!empty($_POST)) {
            $post = $_POST;
            unset($post['activity']);
            unset($post['area_id']);
            unset($post['documentation']);
            unset($post['solution']);
            $id = uniqid();
            $post['id'] = $id;
            foreach ($_FILES['documentation']['name'] as $k => $v) {
                $ext = explode('.', $v);
                $ext = end($ext);
                $filename = uniqid() . '.' . $ext;
                move_uploaded_file($_FILES['documentation']['tmp_name'][$k], 'files/logbook/' . $filename);
                Database::insert('documentation', [
                    'id' => uniqid(),
                    'name' => $filename,
                    'logbook_id' => $id,
                ]);
            }
            Database::insert('logbook', [
                'id' => $id,
                'activity' => $_POST['activity'],
                'area_id' => $id,
                'solution' => $_POST['solution'],
                'datetime' => Helpers::tanggal(),
                'user_id' => Auth::user()->id
            ]);
            Database::insert('area', $post);
            Flasher::setFlash('Success', 'Add New Logbook', 'primary');
            header("Location:" . BASEURL . '/Logbook');
            exit;
        }

        $id = Auth::user()->id;
        $data = [
            'title' => 'Logbook',
            'logbook' => Database::query("SELECT * FROM `logbook` WHERE `user_id` = '$id'")
        ];

        $this->view('templates/header', $data);
        $this->view('logbook/index', $data);
        $this->view('templates/footer');
    }

    public function update($id = null)
    {
        if ($id == null) {
            Flasher::setFlash('Failed', 'Delete User', 'danger');
            header("Location:" . BASEURL . '/Logbook');
            exit;
        }
        if (!empty($_POST)) {
            $post = $_POST;
            unset($post['activity']);
            unset($post['area_id']);
            unset($post['documentation']);
            unset($post['solution']);
            $post['id'] = $id;
            if (isset($_FILES['documentation']['name'][0]) && !empty($_FILES['documentation']['name'][0])) {
                $documentation = Database::query("SELECT * FROM `documentation` WHERE `logbook_id` = '$id'");
                foreach ($documentation as $document) {
                    unlink('files/logbook/' . $document['name']);
                }
                Database::delete('documentation', 'logbook_id', $id);
                foreach ($_FILES['documentation']['name'] as $k => $v) {
                    $ext = explode('.', $v);
                    $ext = end($ext);
                    $filename = uniqid() . '.' . $ext;
                    move_uploaded_file($_FILES['documentation']['tmp_name'][$k], 'files/logbook/' . $filename);
                    Database::insert('documentation', [
                        'id' => uniqid(),
                        'name' => $filename,
                        'logbook_id' => $id,
                    ]);
                }
            }
            Database::update('logbook', ['id' => $id], [
                'activity' => $_POST['activity'],
                'area_id' => $id,
                'solution' => $_POST['solution'],
                'datetime' => Helpers::tanggal(),
                'user_id' => Auth::user()->id
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
            Flasher::setFlash('Success', 'Update Logbook', 'primary');
            header("Location:" . BASEURL . '/Logbook');
            exit;
        }

        $data = [
            'title' => 'Logbook',
            'edit' =>  Database::find('logbook', 'id', $id),
            'area' =>  Database::find('area', 'id', $id),
        ];

        $this->view('templates/header', $data);
        $this->view('logbook/update', $data);
        $this->view('templates/footer');
    }

    public function delete($id)
    {
        if ($id == null) {
            Flasher::setFlash('Failed', 'Delete User', 'danger');
            header("Location:" . BASEURL . '/Logbook');
            exit;
        } else {

            Database::delete('area', 'id', $id);
            Database::delete('documentation', 'logbook_id', $id);
            Database::delete('logbook', 'id', $id);
            Flasher::setFlash('Success', 'Deleted User', 'primary');
            header("Location:" . BASEURL . '/Logbook');
            exit;
        }
    }

    public function export()
    {
        $id = Auth::user()->id;
        $data = [
            'title' => 'Logbook',
            'logbook' => Database::query("SELECT * FROM `logbook` WHERE `user_id` = '$id'")
        ];
        header("Content-type: application/vnd-ms-excel");
        header("Content-Disposition: attachment; filename=Logbook.xls");
        $this->view('templates/header1', $data);
        $this->view('logbook/export');
        $this->view('templates/footer');
    }
}
