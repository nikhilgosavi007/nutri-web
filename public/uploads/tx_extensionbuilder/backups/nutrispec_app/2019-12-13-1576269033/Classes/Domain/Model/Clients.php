<?php
namespace GroupProject\NutrispecApp\Domain\Model;


/***
 *
 * This file is part of the "NutriSpec App" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 Kunal Harkare <kunal.harkare@hof-university.de>
 *
 ***/
/**
 * Clients
 */
class Clients extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * name
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $name = '';

    /**
     * email
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $email = '';

    /**
     * age
     * 
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $age = 0;

    /**
     * height
     * 
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $height = 0;

    /**
     * weight
     * 
     * @var int
     */
    protected $weight = 0;

    /**
     * bloodgroup
     * 
     * @var string
     */
    protected $bloodgroup = '';

    /**
     * bmi
     * 
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $bmi = 0;

    /**
     * photo
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $photo = null;

    /**
     * gender
     * 
     * @var string
     */
    protected $gender = '';

    /**
     * Returns the name
     * 
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     * 
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the email
     * 
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets the email
     * 
     * @param string $email
     * @return void
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Returns the age
     * 
     * @return int $age
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Sets the age
     * 
     * @param int $age
     * @return void
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * Returns the height
     * 
     * @return int $height
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Sets the height
     * 
     * @param int $height
     * @return void
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * Returns the weight
     * 
     * @return int $weight
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Sets the weight
     * 
     * @param int $weight
     * @return void
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * Returns the bloodgroup
     * 
     * @return string $bloodgroup
     */
    public function getBloodgroup()
    {
        return $this->bloodgroup;
    }

    /**
     * Sets the bloodgroup
     * 
     * @param string $bloodgroup
     * @return void
     */
    public function setBloodgroup($bloodgroup)
    {
        $this->bloodgroup = $bloodgroup;
    }

    /**
     * Returns the bmi
     * 
     * @return int $bmi
     */
    public function getBmi()
    {
        return $this->bmi;
    }

    /**
     * Sets the bmi
     * 
     * @param int $bmi
     * @return void
     */
    public function setBmi($bmi)
    {
        $this->bmi = $bmi;
    }

    /**
     * Returns the photo
     * 
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $photo
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Sets the photo
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $photo
     * @return void
     */
    public function setPhoto(\TYPO3\CMS\Extbase\Domain\Model\FileReference $photo)
    {
        $this->photo = $photo;
    }

    /**
     * Returns the gender
     * 
     * @return string $gender
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Sets the gender
     * 
     * @param string $gender
     * @return void
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }
}
