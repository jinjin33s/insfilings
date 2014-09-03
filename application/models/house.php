<?php
class House extends Doctrine_Record {


	public function setTableDefinition()
        {
                $this->option('collate', 'utf8_unicode_ci');
                $this->option('charset', 'utf8');

                $this->hasColumn('id', 'integer',11);
		$this->hasColumn('coverageType', 'string', 512);
                $this->hasColumn('premiumAmountAnnual', 'decimal');
                $this->hasColumn('premiumMode', 'string', 512);
                $this->hasColumn('premium', 'string', 512);
                $this->hasColumn('commissionAnnual', 'decimal');
                $this->hasColumn('commissionMonth', 'string', 512);
                $this->hasColumn('company', 'string', 512);
                $this->hasColumn('policy', 'string', 512);
                $this->hasColumn('coverageEffectiveDate', 'date');
                $this->hasColumn('issueDate', 'date');
                $this->hasColumn('ownerLastName_basic1', 'string', 512);
                $this->hasColumn('ownerFirstName_basic1', 'string', 512);
                $this->hasColumn('ownerDOB_basic1', 'date');
                $this->hasColumn('ownerNote_basic1', 'string', 512);
                $this->hasColumn('ownerLastName_basic2', 'string', 512);
                $this->hasColumn('ownerFirstName_basic2', 'string', 512);
                $this->hasColumn('ownerDOB_basic2', 'date');
                $this->hasColumn('ownerNote_basic2', 'string', 512);
                $this->hasColumn('address_R', 'string', 512);
                $this->hasColumn('address_R_apt', 'string', 512);
                $this->hasColumn('address_R_city', 'string', 512);
                $this->hasColumn('address_R_state', 'string', 512);
                $this->hasColumn('address_R_zip', 'string', 512);
                $this->hasColumn('mortgageCompanyName', 'string', 512);
                $this->hasColumn('mortgageCompanyAddress', 'string', 512);
                $this->hasColumn('mortgageNumber', 'string', 512);
                $this->hasColumn('previousPolicy', 'string', 512);
                $this->hasColumn('previousInsuranceCompany', 'string', 512);
                $this->hasColumn('reasonLeftPreviousCompany', 'string', 512);
                $this->hasColumn('previousPolicyNo', 'string', 512);
                $this->hasColumn('anyLoss', 'string', 512);
                $this->hasColumn('coverage', 'decimal');
                $this->hasColumn('dwelling', 'string', 512);
                $this->hasColumn('personalProperty', 'string', 512);
                $this->hasColumn('liability', 'string', 512);
                $this->hasColumn('medical', 'string', 512);
                $this->hasColumn('occupancy', 'string', 512);
                $this->hasColumn('dwellingInfo', 'string', 512);
                $this->hasColumn('yearBuilt', 'string', 512);
                $this->hasColumn('construction', 'string', 512);
                $this->hasColumn('roof', 'string', 512);
                $this->hasColumn('alarm', 'string', 512);
                $this->hasColumn('squareFoot', 'string', 512);
                $this->hasColumn('noOfStories', 'string', 512);
                $this->hasColumn('noOfFamily', 'string', 512);
                $this->hasColumn('marketValue', 'decimal');
                $this->hasColumn('generalNote', 'string', 512);                
	}

	public function setUp() {

		$this->setTableName('house');
		$this->actAs('Timestampable');
	}

         public function getList() {

                $result  = Doctrine_Query::create()
                ->select('*')
                ->from('applicant')
                ->where('house_id is not null')
                ->orderBy('id DESC')
                ->execute();

                return $result;

         }

         public function getSearchList($searchStr){

                $result  = Doctrine_Query::create()

                ->select('*')
                ->from('applicant')
                ->where('house_id is not null')
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