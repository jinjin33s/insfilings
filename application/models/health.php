<?php
class Health extends Doctrine_Record {


	public function setTableDefinition()
        {
                $this->option('collate', 'utf8_unicode_ci');
                $this->option('charset', 'utf8');

                $this->hasColumn('id', 'integer',11);
		$this->hasColumn('product', 'string', 512);
                $this->hasColumn('commissionAnnual', 'decimal');
                $this->hasColumn('commissionMonth', 'string', 512);
                $this->hasColumn('tier', 'string', 512);
                $this->hasColumn('premiumAmount', 'decimal');
                $this->hasColumn('premiumMode', 'string', 512);
                $this->hasColumn('memberId', 'string', 512);
                $this->hasColumn('groupId', 'string', 512);
                $this->hasColumn('address_R', 'string', 512);
                $this->hasColumn('address_R_apt', 'string', 512);
                $this->hasColumn('address_R_city', 'string', 512);
                $this->hasColumn('address_R_state', 'string', 512);
                $this->hasColumn('address_R_zip', 'string', 512);
                $this->hasColumn('DOB', 'date');
                $this->hasColumn('birthPlace', 'string', 512);
                $this->hasColumn('maritalStatus', 'string', 512);
                $this->hasColumn('coverageEffectiveDate', 'date');
                $this->hasColumn('idLicense', 'string', 512);
                $this->hasColumn('idState', 'string', 512);
                $this->hasColumn('idExp', 'date');
                $this->hasColumn('idIssue', 'date');
                $this->hasColumn('citizen', 'string', 512);
                $this->hasColumn('employerName', 'string', 512);
                $this->hasColumn('employerAddress', 'string', 512);
                $this->hasColumn('jobTitle', 'string', 512);
                $this->hasColumn('yearsAtWork', 'string', 512);
                $this->hasColumn('ss', 'string', 512);
                $this->hasColumn('companyName_em', 'string', 512);
                $this->hasColumn('contactFirstName_em', 'string', 512);
                $this->hasColumn('contactLastName_em', 'string', 512);
                $this->hasColumn('title_em', 'string', 512);
                $this->hasColumn('address_em', 'string', 512);
                $this->hasColumn('apt_em', 'string', 512);
                $this->hasColumn('city_em', 'string', 512);
                $this->hasColumn('state_em', 'string', 512);
                $this->hasColumn('zip_em', 'string', 512);
                $this->hasColumn('taxId_em', 'string', 512);
                $this->hasColumn('phone_em', 'string', 512);
                $this->hasColumn('fax_em', 'string', 512);
                $this->hasColumn('name_m1', 'string', 512);
                $this->hasColumn('DOB_m1', 'date');
                $this->hasColumn('ss_m1', 'string', 512);
                $this->hasColumn('note_m1', 'string', 512);
                $this->hasColumn('name_m2', 'string', 512);
                $this->hasColumn('DOB_m2', 'date');
                $this->hasColumn('ss_m2', 'string', 512);
                $this->hasColumn('note_m2', 'string', 512);
                $this->hasColumn('name_m3', 'string', 512);
                $this->hasColumn('DOB_m3', 'date');
                $this->hasColumn('ss_m3', 'string', 512);
                $this->hasColumn('note_m3', 'string', 512);
                $this->hasColumn('name_m4', 'string', 512);
                $this->hasColumn('DOB_m4', 'date');
                $this->hasColumn('ss_m4', 'string', 512);
                $this->hasColumn('note_m4', 'string', 512);
                $this->hasColumn('genneralNote', 'string', 512);
	}


	public function setUp() {

		$this->setTableName('health');
		$this->actAs('Timestampable');
	}

        public function getList() {

                $result  = Doctrine_Query::create()
                ->select('*')
                ->from('applicant')
                ->where('health_id is not null')
                ->orderBy('id DESC')
                ->execute();

                return $result; 

         }

         public function getSearchList($searchStr){

                $result  = Doctrine_Query::create()

                ->select('*')
                ->from('applicant')
                ->where('health_id is not null')
                ->addWhere("lastName like '%" . $searchStr . "%' or firstName like '%" . $searchStr . "%' or status like '%" . $searchStr . "%' or email like '%" . $searchStr . "%'")
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