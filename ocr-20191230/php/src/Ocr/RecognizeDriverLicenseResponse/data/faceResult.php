<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeDriverLicenseResponse\data;

use AlibabaCloud\Tea\Model;

class faceResult extends Model
{
    public $name;
    public $licenseNumber;
    public $vehicleType;
    public $startDate;
    public $endDate;
    public $issueDate;
    public $address;
    public $gender;
    protected $_required = [
        'name'          => true,
        'licenseNumber' => true,
        'vehicleType'   => true,
        'startDate'     => true,
        'endDate'       => true,
        'issueDate'     => true,
        'address'       => true,
        'gender'        => true,
    ];
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
    protected $_description = [
        'name'          => 'name',
        'licenseNumber' => 'licenseNumber',
        'vehicleType'   => 'vehicleType',
        'startDate'     => 'startDate',
        'endDate'       => 'endDate',
        'issueDate'     => 'issueDate',
        'address'       => 'address',
        'gender'        => 'gender',
    ];
}
