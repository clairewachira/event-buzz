<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\AdminsModel;
use App\Models\EventModel;
use App\Models\OrganizerModel;

class AdminController extends BaseController
{
	protected $adminModel;

	public function __construct()
	{
		$this->adminModel = new AdminsModel();
        $this->eventModel = new EventModel();
        $this->userModel = new UserModel();
        $this->organizerModel = new OrganizerModel();
	}

	// Display the form to create a new admin
	public function register()
	{
		$data = [
			'title' => 'Create Admin - EventBuzz',
		];

		$data['content'] = view('admin/register', $data);
		return view('templates/base', $data);
	}

	// Store a new admin
	public function store()
	{
		$data = $this->request->getPost();
		$data['passwordHash'] = password_hash($data['passwordHash'], PASSWORD_DEFAULT);
		if ($this->adminModel->createAdmin($data)) {
			return redirect()->to('/auth/admin/login')->with('message', 'Admin created successfully.');
		} else {
			$errors = $this->adminModel->errors();
			return redirect()->back()->with('error', implode(', ', $errors));
		}
	}

	public function login()
	{
		$data = [
			'title' => 'Administrator Login - Admin',
		];

		$data['content'] = view('admin/login', $data);
		return view('templates/base', $data);
	}

	public function login_action()
	{
		$admin = $this->adminModel->where('emailAddress', $this->request->getPost('emailAddress'))->first();

		if ($admin && password_verify($this->request->getPost('passwordHash'), $admin['passwordHash'])) {
			session()->set([
				'user_id' => $admin['adminId'],
				'email_address' => $admin['emailAddress'],
				'user_type' => 'admin',
			]);

			return redirect()->to('/admin/dashboard');
		}

		return redirect()->to('/auth/admin/login')->with('error', 'Invalid login credentials.');
	}
	
	// Display a listing of admins
	public function users()
	{
		$data = [
			'title' => 'Users - EventBuzz',
			'users' => $this->userModel->findAll(),
		];

		$data['content'] = view('admin/users', $data);
		return view('templates/base', $data);
	}
	
	// Display a listing of admins
	public function organizers()
	{
		$data = [
			'title' => 'Organizers - EventBuzz',
			'organizers' => $this->organizerModel->findAll(),
		];

		$data['content'] = view('admin/organizers', $data);
		return view('templates/base', $data);
	}

	// Display a listing of admins
	public function index()
	{
		$data = [
			'title' => 'Dashboard - EventBuzz',
		];

		$data['content'] = view('admin/dashboard', $data);
		return view('templates/base', $data);
	}

	// Show the form to edit an admin
	public function edit($adminId)
	{
		$admin = $this->adminModel->find($adminId);
		if (!$admin) {
			return redirect()->to('/admins')->with('error', 'Admin not found.');
		}

		$data = [
			'title' => 'Edit Admin - EventBuzz',
			'admin' => $admin,
		];

		$data['content'] = view('admin/edit', $data);
		return view('templates/base', $data);
	}

	// Update an admin
	public function update($adminId)
	{
		$data = $this->request->getPost();
		if ($this->adminModel->update($adminId, $data)) {
			return redirect()->to('/admins')->with('success', 'Admin updated successfully.');
		} else {
			$errors = $this->adminModel->errors();
			return redirect()->back()->with('error', implode(', ', $errors));
		}
	}

	// Delete an admin
	public function delete($adminId)
	{
		if ($this->adminModel->delete($adminId)) {
			return redirect()->to('/admins')->with('success', 'Admin deleted successfully.');
		} else {
			return redirect()->back()->with('error', 'Failed to delete admin.');
		}
	}
	public function logout()
	{
		session()->destroy();
		return redirect()->to('/auth/admin/login')->with('message', 'Logged out successfully.');
	}
	
	// Display a listing of events
    public function events()
    {
        $data = [
            'title' => 'Events - EventBuzz',
            'events' => $this->eventModel->findAll(),
        ];

        $data['content'] = view('admin/events', $data);
        return view('templates/base', $data);
    }

}
?>

