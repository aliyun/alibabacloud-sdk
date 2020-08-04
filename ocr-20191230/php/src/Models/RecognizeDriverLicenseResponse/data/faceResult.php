<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeDriverLicenseResponse\data;

use AlibabaCloud\Tea\Model;

class faceResult extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $licenseNumber;

    /**
     * @var string
     */
    public $vehicleType;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $issueDate;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $gender;
    protected $_name = [
        'name'          => 'Name',
        'licenseNumber' => 'LicenseNumber',
        'vehicleType'   => 'VehicleType',
        'startDate'     => 'StartDate',
        'endDate'       => 'EndDate',
        'issueDate'     => 'IssueDate',
        'address'       => 'Address',
        'gender'        => 'Gender',
    ];

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('licenseNumber', $this->licenseNumber, true);
        Model::validateRequired('vehicleType', $this->vehicleType, true);
        Model::validateRequired('startDate', $this->startDate, true);
        Model::validateRequired('endDate', $this->endDate, true);
        Model::validateRequired('issueDate', $this->issueDate, true);
        Model::validateRequired('address', $this->address, true);
        Model::validateRequired('gender', $this->gender, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->licenseNumber) {
            $res['LicenseNumber'] = $this->licenseNumber;
        }
        if (null !== $this->vehicleType) {
            $res['VehicleType'] = $this->vehicleType;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->issueDate) {
            $res['IssueDate'] = $this->issueDate;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return faceResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['LicenseNumber'])) {
            $model->licenseNumber = $map['LicenseNumber'];
        }
        if (isset($map['VehicleType'])) {
            $model->vehicleType = $map['VehicleType'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['IssueDate'])) {
            $model->issueDate = $map['IssueDate'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }

        return $model;
    }
}
