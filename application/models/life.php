<?php
class Life extends Doctrine_Record {


	public function setTableDefinition()
        {
                $this->option('collate', 'utf8_unicode_ci');
                $this->option('charset', 'utf8');

                $this->hasColumn('id', 'integer',11);
                $this->hasColumn('company', 'string', 512);
                $this->hasColumn('faceAmount', 'decimal');
                $this->hasColumn('faceOption', 'string', 512);
                $this->hasColumn('medicalSchedule', 'string', 512);
                $this->hasColumn('medicalComplete', 'string', 512);
                $this->hasColumn('medicalNote', 'string', 512);
                $this->hasColumn('premiumAnnual', 'decimal');
                $this->hasColumn('premiumMode', 'string', 512);
                $this->hasColumn('premiumAmount', 'decimal');
                $this->hasColumn('policy', 'string', 512);
                $this->hasColumn('issueDate', 'date');
                $this->hasColumn('policyDelivery', 'string', 512);
                $this->hasColumn('commissionAnnual', 'decimal');
                $this->hasColumn('commissionMonth', 'string', 512);
                $this->hasColumn('address_R', 'string', 512);
                $this->hasColumn('address_R_apt', 'string', 512);
                $this->hasColumn('address_R_city', 'string', 512);
                $this->hasColumn('address_R_state', 'string', 512);
                $this->hasColumn('address_R_zip', 'string', 512);
                $this->hasColumn('DOB', 'date');
                $this->hasColumn('birthPlace', 'string', 512);
                $this->hasColumn('maritalStatus', 'string', 512);
                $this->hasColumn('licenseId', 'string', 512);
                $this->hasColumn('idstate', 'string', 512);
                $this->hasColumn('idExp', 'date');
                $this->hasColumn('idIssue', 'date');
                $this->hasColumn('citizen', 'string', 512);
                $this->hasColumn('employerName', 'string', 512);
                $this->hasColumn('employerAddress', 'string', 512);
                $this->hasColumn('jobTitle', 'string', 512);
                $this->hasColumn('yearsAtWork', 'string', 512);
                $this->hasColumn('ss', 'string', 512);
                $this->hasColumn('annualIncome', 'decimal');
                $this->hasColumn('householdIncome', 'decimal');
                $this->hasColumn('asset', 'decimal');
                $this->hasColumn('liability', 'string', 512);
                $this->hasColumn('netAsset', 'decimal');
                $this->hasColumn('lastName_insured1', 'string', 512);
                $this->hasColumn('firstName_insured1', 'string', 512);
                $this->hasColumn('relation_insured1', 'string', 512);
                $this->hasColumn('gender_insured1', 'string', 512);
                $this->hasColumn('address_R_insured1', 'string', 512);
                $this->hasColumn('address_R_apt_insured1', 'string', 512);
                $this->hasColumn('address_R_city_insured1', 'string', 512);
                $this->hasColumn('address_R_state_insured1', 'string', 512);
                $this->hasColumn('address_R_zip_insured1', 'string', 512);
                $this->hasColumn('DOB_insured1', 'date');
                $this->hasColumn('birthPlace_insured1', 'string', 512);
                $this->hasColumn('maritalStatus_insured1', 'string', 512);
                $this->hasColumn('idLicense_insured1', 'string', 512);
                $this->hasColumn('idState_insured1', 'string', 512);
                $this->hasColumn('idExp_insured1', 'string', 512);
                $this->hasColumn('idIssue_insured1', 'string', 512);
                $this->hasColumn('phone_insured1', 'string', 512);
                $this->hasColumn('citizen_insured1', 'string', 512);
                $this->hasColumn('employerName_insured1', 'string', 512);
                $this->hasColumn('employerAddress_insured1', 'string', 512);
                $this->hasColumn('jobTitle_insured1', 'string', 512);
                $this->hasColumn('yearAtWork_insured1', 'string', 512);
                $this->hasColumn('ss_insured1', 'string', 512);
                $this->hasColumn('lastName_insured2', 'string', 512);
                $this->hasColumn('firstName_insured2', 'string', 512);
                $this->hasColumn('relation_insured2', 'string', 512);
                $this->hasColumn('gender_insured2', 'string', 512);
                $this->hasColumn('address_R_insured2', 'string', 512);
                $this->hasColumn('address_R_apt_insured2', 'string', 512);
                $this->hasColumn('address_R_city_insured2', 'string', 512);
                $this->hasColumn('address_R_state_insured2', 'string', 512);
                $this->hasColumn('address_R_zip_insured2', 'string', 512);
                $this->hasColumn('DOB_insured2', 'date');
                $this->hasColumn('birthPlace_insured2', 'string', 512);
                $this->hasColumn('maritalStatus_insured2', 'string', 512);
                $this->hasColumn('idLicense_insured2', 'string', 512);
                $this->hasColumn('idState_insured2', 'string', 512);
                $this->hasColumn('idExp_insured2', 'date');
                $this->hasColumn('idIssue_insured2', 'date');
                $this->hasColumn('phone_insured2', 'string', 512);
                $this->hasColumn('citizen_insured2', 'string', 512);
                $this->hasColumn('employerName_insured2', 'string', 512);
                $this->hasColumn('employerAddress_insured2', 'string', 512);
                $this->hasColumn('jobTitle_insured2', 'string', 512);
                $this->hasColumn('yearsAtWork_insured2', 'string', 512);
                $this->hasColumn('ss_insured2', 'string', 512);
                $this->hasColumn('lastName_benefi1', 'string', 512);
                $this->hasColumn('firstName_benefi1', 'string', 512);
                $this->hasColumn('DOB_benefi1', 'date');
                $this->hasColumn('ss_benefi1', 'string', 512);
                $this->hasColumn('relation_benefi1', 'string', 512);
                $this->hasColumn('primary_benefi1', 'string', 512);
                $this->hasColumn('contingent_benefi1', 'string', 512);
                $this->hasColumn('lastName_benefi2', 'string', 512);
                $this->hasColumn('firstName_benefi2', 'string', 512);
                $this->hasColumn('DOB_benefi2', 'date');
                $this->hasColumn('ss_benefi2', 'string', 512);
                $this->hasColumn('relation_benefi2', 'string', 512);
                $this->hasColumn('primary_benefi2', 'string', 512);
                $this->hasColumn('contingent_benefi2', 'string', 512);
                $this->hasColumn('lastName_benefi3', 'string', 512);
                $this->hasColumn('firstName_benefi3', 'string', 512);
                $this->hasColumn('DOB_benefi3', 'date');
                $this->hasColumn('ss_benefi3', 'string', 512);
                $this->hasColumn('relation_benefi3', 'string', 512);
                $this->hasColumn('primary_benefi3', 'string', 512);
                $this->hasColumn('contingent_benefi3', 'string', 512);
                $this->hasColumn('lastName_benefi4', 'string', 512);
                $this->hasColumn('firstName_benefi4', 'string', 512);
                $this->hasColumn('DOB_benefi4', 'date');
                $this->hasColumn('ss_benefi4', 'string', 512);
                $this->hasColumn('relation_benefi4', 'string', 512);
                $this->hasColumn('primary_benefi4', 'string', 512);
                $this->hasColumn('contingent_benefi4', 'string', 512);
                $this->hasColumn('name_payor', 'string', 512);
                $this->hasColumn('relation_payor', 'string', 512);
                $this->hasColumn('generalNote', 'string', 2048);


	}


	public function setUp() {

		$this->setTableName('life');
		$this->actAs('Timestampable');
	}

        public function getList() {

                $result  = Doctrine_Query::create()
                ->select('*')
                ->from('applicant')
                ->where('life_id is not null')
                ->orderBy('id DESC')
                ->execute();

                return $result;

         }

         public function getSearchList($searchStr){

                $result  = Doctrine_Query::create()

                ->select('*')
                ->from('applicant')
                ->where('life_id is not null')
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