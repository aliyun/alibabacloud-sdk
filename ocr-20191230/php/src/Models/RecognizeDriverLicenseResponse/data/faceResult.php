<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeDriverLicenseResponse\data;

use AlibabaCloud\Tea\Model;

class faceResult extends Model
{
    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description licenseNumber
     *
     * @var string
     */
    public $licenseNumber;

    /**
     * @description vehicleType
     *
     * @var string
     */
    public $vehicleType;

    /**
     * @description startDate
     *
     * @var string
     */
    public $startDate;

    /**
     * @description endDate
     *
     * @var string
     */
    public $endDate;

    /**
     * @description issueDate
     *
     * @var string
     */
    public $issueDate;

    /**
     * @description address
     *
     * @var string
     */
    public $address;

    /**
     * @description gender
     *
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
        $res                  = [];
        $res['Name']          = $this->name;
        $res['LicenseNumber'] = $this->licenseNumber;
        $res['VehicleType']   = $this->vehicleType;
        $res['StartDate']     = $this->startDate;
        $res['EndDate']       = $this->endDate;
        $res['IssueDate']     = $this->issueDate;
        $res['Address']       = $this->address;
        $res['Gender']        = $this->gender;

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
