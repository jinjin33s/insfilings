<?php
class Business extends Doctrine_Record {


	public function setTableDefinition()
        {
                $this->option('collate', 'utf8_unicode_ci');
                $this->option('charset', 'utf8');

                $this->hasColumn('id', 'integer',11);
		$this->hasColumn('businessInformation', 'string', 512);
                $this->hasColumn('companyName', 'string', 512);
                $this->hasColumn('contactFirstName', 'string', 512);
                $this->hasColumn('contactLastName', 'string', 512);
                $this->hasColumn('title', 'string', 512);
                $this->hasColumn('commissionAnnual', 'decimal');
                $this->hasColumn('commissionMonth', 'string', 512);
                $this->hasColumn('company', 'string', 512);
                $this->hasColumn('policy', 'string', 512);
                $this->hasColumn('coverageEffectiveDate', 'date');
                $this->hasColumn('issueDate', 'date');
                $this->hasColumn('address', 'string', 512);
                $this->hasColumn('suite', 'string', 512);
                $this->hasColumn('city', 'string', 512);
                $this->hasColumn('state', 'string', 512);
                $this->hasColumn('zip', 'string', 512);
                $this->hasColumn('taxId', 'string', 512);
                $this->hasColumn('phone', 'string', 512);
                $this->hasColumn('fax', 'string', 512);
                $this->hasColumn('businessDescription', 'string', 512);
                $this->hasColumn('yearsInBusiness', 'string', 512);
                $this->hasColumn('annualGrossSale', 'string', 512);
                $this->hasColumn('operationDays', 'date');
                $this->hasColumn('operationHours', 'string', 512);
                $this->hasColumn('businessDetail', 'string', 512);
                $this->hasColumn('previousPolicy', 'string', 512);
                $this->hasColumn('previousInsuranceCompany', 'string', 512);
                $this->hasColumn('reasonLeftPreviousCompany', 'string', 512);
                $this->hasColumn('previousPolicyNo', 'string', 512);
                $this->hasColumn('anyLoss', 'decimal');
                $this->hasColumn('building', 'string', 512);
                $this->hasColumn('construction', 'string', 512);
                $this->hasColumn('noOfFloor', 'string', 512);
                $this->hasColumn('yearBuilt', 'string', 512);
                $this->hasColumn('totalArea', 'string', 512);
                $this->hasColumn('publicArea', 'string', 512);
                $this->hasColumn('rightExposure', 'string', 512);
                $this->hasColumn('leftExposure', 'string', 512);
                $this->hasColumn('safetySystems', 'string', 512);
                $this->hasColumn('buildingDetail', 'string', 512);
                $this->hasColumn('property', 'string', 512);
                $this->hasColumn('personalProperty', 'string', 512);
                $this->hasColumn('productLiability', 'string', 512);
                $this->hasColumn('propertyDetail', 'string', 512);
                $this->hasColumn('liability', 'string', 512);
                $this->hasColumn('generalAggregate', 'string', 512);
                $this->hasColumn('prodCompOptAggregate', 'string', 512);
                $this->hasColumn('fireDamage', 'string', 512);
                $this->hasColumn('medical', 'string', 512);
                $this->hasColumn('liabilityDetail', 'string', 512);
                $this->hasColumn('makeYearModel1', 'string', 512);
                $this->hasColumn('makeYearModel2', 'string', 512);
                $this->hasColumn('makeYearModel3', 'string', 512);
                $this->hasColumn('makeYearModel4', 'string', 512);
                $this->hasColumn('makeYearModel5', 'string', 512);
                $this->hasColumn('vehicleDetail', 'string', 512);
                $this->hasColumn('policyNo_disability', 'string', 512);
                $this->hasColumn('effectiveDate_disability', 'date');
                $this->hasColumn('issueDate_disability', 'date');
                $this->hasColumn('nameAndTitle1_disability', 'string', 512);
                $this->hasColumn('nameAndTitle2_disability', 'string', 512);
                $this->hasColumn('nameAndTitle3_disability', 'string', 512);
                $this->hasColumn('nameAndTitle4_disability', 'string', 512);
                $this->hasColumn('nameAndTitle5_disability', 'string', 512);
                $this->hasColumn('policyNo_workers', 'string', 512);
                $this->hasColumn('effectiveDate_workers', 'string', 512);
                $this->hasColumn('issueDate_workers', 'string', 512);
                $this->hasColumn('nameAndTitle1_workers', 'string', 512);
                $this->hasColumn('nameAndTitle2_workers', 'string', 512);
                $this->hasColumn('nameAndTitle3_workers', 'string', 512);
                $this->hasColumn('nameAndTitle4_workers', 'string', 512);
                $this->hasColumn('nameAndTitle5_workers', 'string', 512);
                $this->hasColumn('generalNote', 'string', 512);

	}

	public function setUp() {

		$this->setTableName('business');
		$this->actAs('Timestampable');
	}

         public function getList() {

                $result  = Doctrine_Query::create()
                ->select('*')
                ->from('applicant')
                ->where('business_id is not null')
                ->orderBy('id DESC')
                ->execute();

                return $result;
         }

         public function getSearchList($searchStr){

                $result  = Doctrine_Query::create()

                ->select('*')
                ->from('applicant')
                ->where('business_id is not null')
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