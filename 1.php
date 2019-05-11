<?php 
class Bio {
	protected $name = 'Api Rahman';
	protected $address = 'Jawa Barat, Bekasi Utara - Kaliabang Tengah, Gang Baru, RT05/25 No 7';
	protected $hobbies = ['Oprek HP', 'Coding', 'Game'];
	protected $is_married = false;
	protected $school = ['highSchool' => 'SMK Cipta Karya Bekasi'];
	protected $skill = ['mikrotik', 'android software', 'programming' => ['PHP', 'NodeJS']];
	
	public function biodata()
	{
		return json_encode(array('name' => $this->name,
														'address' => $this->address,
														'hobbies' => $this->hobbies,
														'is_married' => $this->is_married,
														'school' => $this->school,
														'skill' => $this->skill
														));
	}
}
	$myBio = new Bio();
	print_r($myBio->biodata());