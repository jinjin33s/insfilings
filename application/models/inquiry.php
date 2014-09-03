<?php
class Inquiry extends Doctrine_Record {


	public function setTableDefinition()
        {
                $this->option('collate', 'utf8_unicode_ci');
                $this->option('charset', 'utf8');

                $this->hasColumn('id', 'integer',11);
		$this->hasColumn('lastName', 'string', 512);
                $this->hasColumn('firstName', 'string', 512);
                $this->hasColumn('insuranType', 'string', 512);
                $this->hasColumn('state', 'string', 512);
                $this->hasColumn('sex', 'string', 512);
                $this->hasColumn('age', 'string', 512);
                $this->hasColumn('email', 'string', 512);
                $this->hasColumn('phone', 'string', 512);
                $this->hasColumn('status', 'string', 512);

	}


	public function setUp() {

		$this->setTableName('inquiry');
		$this->actAs('Timestampable');
	}

         public function getList() {
        
                $result  = Doctrine_Query::create()
                ->select('*')
                ->from('applicant')
                ->where('whereBy = ?','inquiry')
                ->orderBy('id DESC')
                ->execute();
             
                return $result;

         }

         public function lifeGetList($applicantId) {

                $result  = Doctrine_Query::create()
                ->select('*')
                ->from('applicant')
                ->where('id = ?', $applicantId)
                ->execute();

                return $result;

         }

        public function getSearchList($searchStr){

                $result  = Doctrine_Query::create()

                ->select('*')
                ->from('applicant')
                ->where('id is not null')
                ->addWhere("lastName like '%" . $searchStr . "%' or firstName like '%" . $searchStr . "%' or email like '%" . $searchStr . "%' or sex like '%" . $searchStr . "%' or state like '%" . $searchStr . "%' or insuranType like '%" . $searchStr . "%' or status like '%" . $searchStr . "%' or age like '%" . $searchStr . "%'")
                ->orderBy('id desc')
                ->execute();

		if($result->count() > 0)
		{
			return $result;
		}
		else
		{
			return FALSE;
		}
         }         

}

?>