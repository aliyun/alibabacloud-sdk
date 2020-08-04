<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeDrivingLicenseResponse\data;

use AlibabaCloud\Tea\Model;

class faceResult extends Model
{
    /**
     * @var string
     */
    public $plateNumber;

    /**
     * @var string
     */
    public $vehicleType;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $useCharacter;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $vin;

    /**
     * @var string
     */
    public $engineNumber;

    /**
     * @var string
     */
    public $registerDate;

    /**
     * @var string
     */
    public $issueDate;
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

    public function validate()
    {
        Model::validateRequired('plateNumber', $this->plateNumber, true);
        Model::validateRequired('vehicleType', $this->vehicleType, true);
        Model::validateRequired('owner', $this->owner, true);
        Model::validateRequired('useCharacter', $this->useCharacter, true);
        Model::validateRequired('address', $this->address, true);
        Model::validateRequired('model', $this->model, true);
        Model::validateRequired('vin', $this->vin, true);
        Model::validateRequired('engineNumber', $this->engineNumber, true);
        Model::validateRequired('registerDate', $this->registerDate, true);
        Model::validateRequired('issueDate', $this->issueDate, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->plateNumber) {
            $res['PlateNumber'] = $this->plateNumber;
        }
        if (null !== $this->vehicleType) {
            $res['VehicleType'] = $this->vehicleType;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->useCharacter) {
            $res['UseCharacter'] = $this->useCharacter;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->vin) {
            $res['Vin'] = $this->vin;
        }
        if (null !== $this->engineNumber) {
            $res['EngineNumber'] = $this->engineNumber;
        }
        if (null !== $this->registerDate) {
            $res['RegisterDate'] = $this->registerDate;
        }
        if (null !== $this->issueDate) {
            $res['IssueDate'] = $this->issueDate;
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
        if (isset($map['PlateNumber'])) {
            $model->plateNumber = $map['PlateNumber'];
        }
        if (isset($map['VehicleType'])) {
            $model->vehicleType = $map['VehicleType'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['UseCharacter'])) {
            $model->useCharacter = $map['UseCharacter'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['Vin'])) {
            $model->vin = $map['Vin'];
        }
        if (isset($map['EngineNumber'])) {
            $model->engineNumber = $map['EngineNumber'];
        }
        if (isset($map['RegisterDate'])) {
            $model->registerDate = $map['RegisterDate'];
        }
        if (isset($map['IssueDate'])) {
            $model->issueDate = $map['IssueDate'];
        }

        return $model;
    }
}
