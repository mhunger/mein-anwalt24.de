<?php
/**
 * Created by PhpStorm.
 * User: michaelhunger
 * Date: 09/07/17
 * Time: 21:15
 */

namespace legaltech\legalcase;

use taurus\framework\db\Entity;

/**
 * Class LegalCase
 * @package legaltech\legalcase
 *
 * @Entity(table="legal_case")
 */
class LegalCase implements Entity
{
    /**
     * @var
     * @Column(name="id")
     * @Id
     */
    public $id;

    /**
     * @var float
     * @Column(name="income")
     */
    public $income;

    /**
     * @var \DateTime
     * @Column(name="date_of_employment")
     */
    public $dateOfEmployment;

    /**
     * @var \DateTime
     * @Column(name="date_of_birth)
     */
    public $dateOfBirth;

    /**
     * @var int
     * @Column(name="children")
     */
    public $children;

    /**
     * @var bool
     * @Column(name="disability")
     */
    public $disability;

    /**
     * @var bool
     * @Column(name="wage_agreement")
     */
    public $wageAgreement;

    /**
     * @var bool
     * @Column(name="social_plan")
     */
    public $socialPlan;

    /**
     * @var int
     * @Column(name="company_size")
     */
    public $companySize;

    /**
     * @var string
     * @Column(name="sector")
     */
    public $sector;

    /**
     * @var string
     * @Column(name="works_council")
     */
    public $worksCouncil;

    /**
     * @var bool
     * @Column(name="leadership_management")
     */
    public $leadershipManagement;

    /**
     * @var string
     * @Column(name="state")
     */
    public $state;

    /**
     * @var string
     * @Column(name="termination_reason")
     */
    public $terminationReason;

    /**
     * @var string
     * @Column(name="termination_status")
     */
    public $terminationStatus;

    /**
     * @var string
     * @Column(name="termination_type")
     */
    public $terminationType;

    /**
     * @return mixed
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * @return mixed
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getIncome()
    {
        return $this->income;
    }

    /**
     * @param mixed $income
     */
    public function setIncome($income)
    {
        $this->income = $income;
    }

    /**
     * @return mixed
     */
    public function getDateOfEmployment()
    {
        return $this->dateOfEmployment;
    }

    /**
     * @param mixed $dateOfEmployment
     */
    public function setDateOfEmployment($dateOfEmployment)
    {
        $this->dateOfEmployment = $dateOfEmployment;
    }

    /**
     * @return mixed
     */
    public function getDisability()
    {
        return $this->disability;
    }

    /**
     * @param mixed $disability
     */
    public function setDisability($disability)
    {
        $this->disability = $disability;
    }

    /**
     * @return mixed
     */
    public function getWageAgreement()
    {
        return $this->wageAgreement;
    }

    /**
     * @param mixed $wageAgreement
     */
    public function setWageAgreement($wageAgreement)
    {
        $this->wageAgreement = $wageAgreement;
    }

    /**
     * @return mixed
     */
    public function getSocialPlan()
    {
        return $this->socialPlan;
    }

    /**
     * @param mixed $socialPlan
     */
    public function setSocialPlan($socialPlan)
    {
        $this->socialPlan = $socialPlan;
    }

    /**
     * @return mixed
     */
    public function getCompanySize()
    {
        return $this->companySize;
    }

    /**
     * @param mixed $companySize
     */
    public function setCompanySize($companySize)
    {
        $this->companySize = $companySize;
    }

    /**
     * @return mixed
     */
    public function getSector()
    {
        return $this->sector;
    }

    /**
     * @param mixed $sector
     */
    public function setSector($sector)
    {
        $this->sector = $sector;
    }

    /**
     * @return mixed
     */
    public function getWorksCouncil()
    {
        return $this->worksCouncil;
    }

    /**
     * @param mixed $worksCouncil
     */
    public function setWorksCouncil($worksCouncil)
    {
        $this->worksCouncil = $worksCouncil;
    }

    /**
     * @return mixed
     */
    public function getLeadershipManagement()
    {
        return $this->leadershipManagement;
    }

    /**
     * @param mixed $leadershipManagement
     */
    public function setLeadershipManagement($leadershipManagement)
    {
        $this->leadershipManagement = $leadershipManagement;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getTerminationReason()
    {
        return $this->terminationReason;
    }

    /**
     * @param mixed $terminationReason
     */
    public function setTerminationReason($terminationReason)
    {
        $this->terminationReason = $terminationReason;
    }

    /**
     * @return mixed
     */
    public function getTerminationStatus()
    {
        return $this->terminationStatus;
    }

    /**
     * @param mixed $terminationStatus
     */
    public function setTerminationStatus($terminationStatus)
    {
        $this->terminationStatus = $terminationStatus;
    }

    /**
     * @return mixed
     */
    public function getTerminationType()
    {
        return $this->terminationType;
    }

    /**
     * @param mixed $terminationType
     */
    public function setTerminationType($terminationType)
    {
        $this->terminationType = $terminationType;
    }

    /**
     * @param \DateTime $dateOfBirth
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    /**
     * @param int $children
     */
    public function setChildren($children)
    {
        $this->children = $children;
    }
}