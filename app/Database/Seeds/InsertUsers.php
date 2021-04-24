<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InsertUsers extends Seeder
{
	public function run()
	{
		$data = [
			'nama' => 'Administrator',
			'email' => 'administrator@gmail.com',
			'password' => password_hash('123456', PASSWORD_BCRYPT),
			'role' => 'admin'
		];
		$this->db->table('users')->insert($data);
	}
}
