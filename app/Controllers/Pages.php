<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Pages extends Controller
{
    public function index($page = 'dashboard')
    {
        $data['title'] = ucfirst($page);
        $UserModel = new UserModel();
        $data['users'] = $UserModel->orderBy('id', 'DESC')->findAll();
        return view('templates/header', $data) . view('pages/' . $page, $data) . view('templates/footer', $data);
    }

    // page table
    public function table($page = 'tables')
    {
        $data['title'] = ucfirst($page);
        $UserModel = new UserModel();
        $data['users'] = $UserModel->orderBy('id', 'DESC')->findAll();
        return view('templates/header', $data) . view('pages/' . $page, $data) . view('templates/footer', $data);
    }
    // FormTable
    public function pageInsertUser($page = 'user_insert_form')
    {
        $data['title'] = ucfirst('InserUser');
        return view('templates/header', $data) . view('pages/' . $page, $data) . view('templates/footer', $data);
    }
    public function userShowByID($id = null, $page = 'user_update_form')
    {
        $UserModel = new UserModel();
        $data['user_obj'] = $UserModel->find($id);
        $data['title'] = ucfirst('UpdateUser');
        return view('templates/header', $data) . view('pages/' . $page, $data) . view('templates/footer', $data);
    }
    
    //add user table
    public function CreateUser()
    {
        $UserModel = new UserModel();
        $maxId = $UserModel->selectMax('id')->first();
        if ($maxId['id'] === null) {
            $newId = "U1";
        } else {
            $currentIdNumber = intval(substr($maxId['id'], 1));
            $newId = "U" . ($currentIdNumber + 1);
        }
        $file = $this->request->getFile('user_img');
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(ROOTPATH  . 'public/assets/img/img_user', $newName);
            $user_img = 'assets/img/img_user/' . $newName;
        } else {
            echo 'Error: ' . $file->getErrorString();
        }
        $data = [
            'id' => $newId,
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'user_img' => $user_img
        ];
        $UserModel->insert($data);
        return $this->response->redirect(site_url('/tables'));
    }
    // updateUser
    public function updateUser($id = null) {
        $UserModel = new UserModel();
        $user = $UserModel->find($id);
        if ($user) {
            $file = $this->request->getFile('user_img');
            if ($file->isValid() && !$file->hasMoved()) {
                if (!empty($user['user_img']) && file_exists(ROOTPATH . 'public/' . $user['user_img'])) {
                    unlink(ROOTPATH . 'public/' . $user['user_img']);
                }
                $newName = $file->getRandomName();
                $file->move(ROOTPATH . 'public/assets/img/img_user', $newName);
                $user_img = 'assets/img/img_user/' . $newName;
            } else {
                $user_img = $user['user_img'];
            }
            $data = [
                'name' => $this->request->getVar('name'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'user_img' => $user_img
            ];
            $UserModel->update($id, $data);
        }
        return $this->response->redirect(site_url('/tables'));
    }

    // deleteUser
    public function deleteUsers($id = null)
    {
        if ($id !== null) {
            $UserModel = new UserModel();
            $user = $UserModel->find($id);
            if ($user) {
                if (!empty($user['user_img']) && file_exists(ROOTPATH . 'public/' . $user['user_img'])) {
                    unlink(ROOTPATH . 'public/' . $user['user_img']);
                }
                $UserModel->delete($id);
            }
            $UserModel->where('id', $id)->delete();
        }
        return $this->response->redirect(site_url('/tables'));
    }
}
