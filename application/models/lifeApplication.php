<?php
class LifeApplication extends Doctrine_Record {


	public function setTableDefinition()
        {            
            
            $this->option('collate', 'utf8_unicode_ci');
            $this->option('charset', 'utf8');
                      
            $this->hasColumn('who', 'string', 512);            
            $this->hasColumn('status', 'string', 512);   
            $this->hasColumn('ownerId','integer', 128);
            $this->hasColumn('relateToInsured','string', 512);
            $this->hasColumn('lastName', 'string', 512);
            $this->hasColumn('firstName', 'string', 512);
            $this->hasColumn('middleName', 'string', 512);
            $this->hasColumn('address', 'string', 512);
            $this->hasColumn('addrYears', 'string', 512);
            $this->hasColumn('tel', 'string', 512);
            $this->hasColumn('email', 'string', 512);
            $this->hasColumn('gender', 'string', 512);
            $this->hasColumn('state', 'string', 512);
            $this->hasColumn('coverage', 'string', 512);
            $this->hasColumn('insuranceCompany', 'string', 512);
            $this->hasColumn('termPeriod', 'string', 512);
            $this->hasColumn('selectedPeriod', 'string', 512);
            $this->hasColumn('age', 'string', 512);
            $this->hasColumn('ssn', 'string', 512);
            $this->hasColumn('dob', 'string', 512);
            $this->hasColumn('driverNo', 'string', 512);
            $this->hasColumn('driverState', 'string', 512);
            $this->hasColumn('driverIssueDate', 'string', 512);
            $this->hasColumn('driverExpDate', 'string', 512);
            $this->hasColumn('citizenship', 'string', 512);
            $this->hasColumn('birthPlace', 'string', 512);
            $this->hasColumn('occupation', 'string', 512);
            $this->hasColumn('occupationTitle', 'string', 512);
            $this->hasColumn('employerName', 'string', 512);
            $this->hasColumn('employerAddr', 'string', 512);
            $this->hasColumn('armedForce', 'string', 512);
            $this->hasColumn('existing', 'string', 512);
            $this->hasColumn('yesCompany', 'string', 512);
            $this->hasColumn('yesAmount', 'string', 512);
            $this->hasColumn('replacementChange', 'string', 512);
            $this->hasColumn('driverRevoked', 'string', 512);
            $this->hasColumn('convict', 'string', 512);
            $this->hasColumn('disabled', 'string', 512);
            $this->hasColumn('healthDeclined', 'string', 512);
            $this->hasColumn('felonyPending', 'string', 512);
            $this->hasColumn('travel', 'string', 512);
            $this->hasColumn('aircraft', 'string', 512);
            $this->hasColumn('skydiving', 'string', 512);
            $this->hasColumn('medicalTreatment', 'string', 512);
            $this->hasColumn('tobacco', 'string', 512);
            $this->hasColumn('rapidWeight', 'string', 512);
            $this->hasColumn('preDisease', 'string', 512);
            $this->hasColumn('diagnosed', 'string', 512);
            $this->hasColumn('hospitalized', 'string', 512);
            $this->hasColumn('selfAnnual', 'string', 512);
            $this->hasColumn('selfHouseIncome', 'string', 512);
            $this->hasColumn('selfAdditionalIncome', 'string', 512);
            $this->hasColumn('selfTotalNetWorth', 'string', 512);
            $this->hasColumn('selfLiquidNetWorth', 'string', 512);
            $this->hasColumn('selfPurposePolicy', 'string', 512);
            $this->hasColumn('selfBankrupcy', 'string', 512);
            $this->hasColumn('selfSellPolicy', 'string', 512);
            $this->hasColumn('selfLoanPayPolicy', 'string', 512);
            $this->hasColumn('selfPurchasingPolicy', 'string', 512);
            $this->hasColumn('otherAnnual', 'string', 512);
            $this->hasColumn('otherHouseIncome', 'string', 512);
            $this->hasColumn('otherAdditionalIncome', 'string', 512);
            $this->hasColumn('otherTotalNetWorth', 'string', 512);
            $this->hasColumn('otherLiquidNetWorth', 'string', 512);
            $this->hasColumn('otherPurposePolicy', 'string', 512);
            $this->hasColumn('otherBankrupcy', 'string', 512);
            $this->hasColumn('otherSellPolicy', 'string', 512);
            $this->hasColumn('otherLoanPayPolicy', 'string', 512);
            $this->hasColumn('otherPurchasingPolicy', 'string', 512);
            $this->hasColumn('lastNameBenefi1', 'string', 512);
            $this->hasColumn('firstNameBenefi1', 'string', 512);
            $this->hasColumn('DOBBenefi1', 'string', 512);
            $this->hasColumn('ssBenefi1', 'string', 512);
            $this->hasColumn('primaryBenefi1', 'string', 512);
            $this->hasColumn('portionBenefi1', 'string', 512);
            $this->hasColumn('relationBenefi1', 'string', 512);
            $this->hasColumn('lastNameBenefi2', 'string', 512);
            $this->hasColumn('firstNameBenefi2', 'string', 512);
            $this->hasColumn('DOBBenefi2', 'string', 512);
            $this->hasColumn('ssBenefi2', 'string', 512);
            $this->hasColumn('primaryBenefi2', 'string', 512);
            $this->hasColumn('portionBenefi2', 'string', 512);
            $this->hasColumn('relationBenefi2', 'string', 512);
            $this->hasColumn('lastNameBenefi3', 'string', 512);
            $this->hasColumn('firstNameBenefi3', 'string', 512);
            $this->hasColumn('DOBBenefi3', 'string', 512);
            $this->hasColumn('ssBenefi3', 'string', 512);
            $this->hasColumn('primaryBenefi3', 'string', 512);
            $this->hasColumn('portionBenefi3', 'string', 512);
            $this->hasColumn('relationBenefi3', 'string', 512);
            $this->hasColumn('lastNameBenefi4', 'string', 512);
            $this->hasColumn('firstNameBenefi4', 'string', 512);
            $this->hasColumn('DOBBenefi4', 'string', 512);
            $this->hasColumn('ssBenefi4', 'string', 512);
            $this->hasColumn('primaryBenefi4', 'string', 512);
            $this->hasColumn('portionBenefi4', 'string', 512);
            $this->hasColumn('relationBenefi4', 'string', 512);
            $this->hasColumn('medicalFirstDate', 'string', 512);
            $this->hasColumn('medicalFirstTime', 'string', 512);
            $this->hasColumn('medicalSecondDate', 'string', 512);
            $this->hasColumn('medicalSecondTime', 'string', 512);
            $this->hasColumn('medicalPreferred', 'string', 512);
            $this->hasColumn('medicalVisitAddress', 'string', 512);

	}


	public function setUp() {

		$this->setTableName('lifeApplication');
		$this->actAs('Timestampable');
	}

         public function getList() {
        
                $result  = Doctrine_Query::create()
                ->select('*')
                ->from('lifeApplication')
                ->where('who <> ?', 'other')        
                ->orderBy('id DESC')
                ->execute();
             
                return $result;

         }

         public function lifeGetList($applicantId) {

                $result  = Doctrine_Query::create()
                ->select('*')
                ->from('lifeApplication')
                ->where('id = ?', $applicantId)
                ->execute();

                return $result;

         }
         
         public function checkMyaccount($email) {
             
                $result  = Doctrine_Query::create()
                ->select('*')
                ->from('lifeApplication')
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