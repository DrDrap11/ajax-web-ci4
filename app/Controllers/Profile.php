<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Profile extends Controller
{
    public function index()
    {
        $session = session();
        $data['user_id'] = $session->get('user_id');
        $data['user_name'] = $session->get('user_name');
        $data['user_email'] = $session->get('user_email');
        $data['user_password'] = $session->get('user_password');
        $data['role'] = $session->get('role');

        echo view('header', $data);
        echo view('profile_view');
        echo view('footer');
    }

    public function update()
    {
        $validation = \Config\Services::validation();
        $model = new UserModel();

        $db      = \Config\Database::connect();
        $builder = $db->table('users');

        $this->validate([
            'user_name' => [
                'rules' => 'required|max_length[50]',
                'errors' => [
                    'required' => 'Nama tidak boleh kosong'
                ]
            ],

            'password1' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password tidak boleh kosong'
                ]
                ],

            'user_password' => [
                'rules' => 'required|matches[password1]',
                'errors' => [
                    'required' => 'Password tidak boleh kosong'
                ]
            ]
        ]);
        

        if ($validation->run() == false) {
            $errors = $validation->getErrors();
            echo json_encode(['code' => 0, 'error' => $errors]);
        } else {
            $session = session();
            $user_id = $_SESSION['user_id'];

            $data = [
                'user_name' => $this->request->getPost('user_name'),
                'user_email' => $this->request->getPost('user_email'),
                'user_password' => password_hash($this->request->getVar('user_password'), PASSWORD_DEFAULT)
            ];

            $builder->where('user_id', $user_id);
            $query = $builder->update($data);

            if ($query) {
                $output = ['status' => 'Profil berhasil diupdate silakan login kembali'];
                return $this->response->setJSON($output);
                redirect()->to('/logout');
            } else {
                $output = ['status' => 'Jangan ada yang kosong atau password tidak match'];
                return $this->response->setJSON($output);
            }
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
