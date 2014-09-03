<?php
class UserMyAccount extends Doctrine_Record {


	public function setTableDefinition()
        {
                $this->option('collate', 'utf8_unicode_ci');
                $this->option('charset', 'utf8');

                $this->hasColumn('id', 'integer',11);
		$this->hasColumn('role_id', 'string', 512);
                $this->hasColumn('username', 'string', 512);
                $this->hasColumn('password', 'string', 512);
                $this->hasColumn('email', 'string', 512);
                $this->hasColumn('banned', 'string', 512);
                $this->hasColumn('ban_reason', 'string', 512);
                $this->hasColumn('newpass_key', 'string', 512);
                $this->hasColumn('newpass_time', 'string', 512);
                $this->hasColumn('last_ip', 'string', 512);
                $this->hasColumn('last_login', 'string', 512);
                $this->hasColumn('created', 'string', 512);
                $this->hasColumn('modified', 'string', 512);

	}


	public function setUp() {

		$this->setTableName('users');
		$this->actAs('Timestampable');
	}

        function findUserByEmail($email)
	{
		$result  = Doctrine_Query::create()
                ->select('*')
                ->from('userMyAccount')
                ->where('email = ?', $email)
                ->execute();

                if($result->count() > 0)
		{
			return $result;
		}
		else
		{
			return "none";
		}
	}   
}

?>