<?php
namespace Pscd\Model;

class Contact
{
	public $id;
	public $first_name;
	public $last_name;
	public $job_title;
	public $address;
	public $city;
	public $state;
	public $email;
	public $phone;

	public function exchangeArray($data)
	{
		$this->id     = (isset($data['id'])) ? $data['id'] : null;
		$this->first_name = (isset($data['first_name'])) ? $data['first_name'] : null;
		$this->last_name  = (isset($data['last_name'])) ? $data['last_name'] : null;
		$this->email  = (isset($data['email'])) ? $data['email'] : null;
		$this->job_title  = (isset($data['job_title'])) ? $data['job_title'] : null;
		$this->phone  = (isset($data['phone'])) ? $data['phone'] : null;
		$this->address  = (isset($data['address'])) ? $data['address'] : null;
		$this->city  = (isset($data['city'])) ? $data['city'] : null;
		$this->state  = (isset($data['state'])) ? $data['state'] : null;
	}
}