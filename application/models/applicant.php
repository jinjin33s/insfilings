<?php
class Applicant extends Doctrine_Record {


	public function setTableDefinition()
        {
                $this->option('collate', 'utf8_unicode_ci');
                $this->option('charset', 'utf8');

                $this->hasColumn('id', 'integer',11);
		$this->hasColumn('lastName', 'string', 512);
                $this->hasColumn('firstName', 'string', 512);
                $this->hasColumn('phone', 'string', 512);
                $this->hasColumn('email', 'string', 512);
                $this->hasColumn('sex', 'string', 512);
                $this->hasColumn('state', 'string', 512);
                $this->hasColumn('life_id', 'integer', 11);
                $this->hasColumn('health_id', 'integer', 11);
                $this->hasColumn('business_id', 'integer', 11);
                $this->hasColumn('house_id', 'integer', 11);
                $this->hasColumn('company', 'string', 512);
                $this->hasColumn('entryTime', 'string', 512);
                $this->hasColumn('source', 'string', 512);
                $this->hasColumn('status', 'string', 512);
                $this->hasColumn('agent1', 'string', 512);
                $this->hasColumn('agent2', 'string', 512);
                $this->hasColumn('agent3', 'string', 512);
                $this->hasColumn('agent4', 'string', 512);
                $this->hasColumn('issuedDate', 'string', 512);
                $this->hasColumn('commissionAnnual', 'decimal');
                $this->hasColumn('zip', 'string', 512);
                $this->hasColumn('policy', 'string', 512);
                $this->hasColumn('created_at', 'date');
                $this->hasColumn('updated_at', 'date');
                $this->hasColumn('insuranType', 'string', 512);
                $this->hasColumn('age', 'string', 512);
                $this->hasColumn('whereBy', 'string', 512);
                $this->hasColumn('applicationSentDate', 'date');
                $this->hasColumn('sentTrackingNo', 'string', 512);
                $this->hasColumn('applicationReceivedDate', 'date');
                $this->hasColumn('receivedTrackingNo', 'string', 512);
                $this->hasColumn('applicationSubmitDate', 'date');
                $this->hasColumn('underwritingStatus', 'string', 512);
                $this->hasColumn('noticeOfUnderwritingStatus', 'string', 512);
                $this->hasColumn('policySentToCustomer', 'string', 512);
                $this->hasColumn('medicalInFile', 'integer', 11);
                $this->hasColumn('noticeOfIssue', 'integer', 11);
                $this->hasColumn('signedDeliveryReceipt', 'integer', 11);
                $this->hasColumn('checkThis', 'integer', 11);
                $this->hasColumn('coverage', 'string', 512);

	}


	public function setUp() {

		$this->setTableName('applicant');
		$this->actAs('Timestampable');
	}        
}

?>