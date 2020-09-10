<?php namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
	//register
	public $register = [
		'username' => [
		 'rules' => 'required|min_length[5]',
		],
		'password' => [
		 'rules' => 'required',
		],
		'repeatPassword'=>[
		 'rules' => 'required|matches[password]',
		],
	   ];
	//register error
	public $register_errors = [
		'username' => [
		 'required' =>'{field} Harus Diisi',
		 'min_length' => '{field} Minimal 5 Karakter',
		],
		'password' => [
		 'required' => '{field} Harus Diisi',
		],
		'repeatPassword'=>[
		 'required' => '{field} Harus Diisi',
		 'matches' => '{field} Tidak Match Dengan Password'
		],
	   ];
	//login error
	public $login = [
		'username' => [
		 'rules' => 'required|min_length[5]',
		],
		'password' => [
		 'rules' => 'required',
		],
	   ];
	//login error
	public $login_errors = [
		'username' => [
		 'required' =>'{field} Harus Diisi',
		 'min_length' => '{field} Minimal 5 Karakter',
		],
		'password' => [
		 'required' => '{field} Harus Diisi',
		],
	   ];
}
