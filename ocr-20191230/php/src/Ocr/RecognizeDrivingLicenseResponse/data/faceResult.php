<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeDrivingLicenseResponse\data;

use AlibabaCloud\Tea\Model;

class faceResult extends Model
{
    public $plateNumber;
    public $vehicleType;
    public $owner;
    public $useCharacter;
    public $address;
    public $model;
    public $vin;
    public $engineNumber;
    public $registerDate;
    public $issueDate;
    protected $_required = [
        'plateNumber'  => true,
        'vehicleType'  => true,
        'owner'        => true,
        'useCharacter' => true,
        'address'      => true,
        'model'        => true,
        'vin'          => true,
        'engineNumber' => true,
        'registerDate' => true,
        'issueDate'    => true,
    ];
    protected $_name = [
        'plateNumber'  => 'PlateNumber',
        'vehicleType'  => 'VehicleType',
        'owner'        => 'Owner',
        'useCharacter' => 'UseCharacter',
        'address'      => 'Address',
        'model'        => 'Model',
        'vin'          => 'Vin',
        'engineNumber' => 'EngineNumber',
        'registerDate' => 'RegisterDate',
        'issueDate'    => 'IssueDate',
    ];
    protected $_description = [
        'plateNumber'  => 'plateNumber',
        'vehicleType'  => 'vehicleType',
        'owner'        => 'owner',
        'useCharacter' => 'useCharacter',
        'address'      => 'address',
        'model'        => 'model',
        'vin'          => 'vin',
        'engineNumber' => 'engineNumber',
        'registerDate' => 'registerDate',
        'issueDate'    => 'issueDate',
    ];
}
