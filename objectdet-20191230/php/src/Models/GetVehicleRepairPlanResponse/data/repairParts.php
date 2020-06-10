<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models\GetVehicleRepairPlanResponse\data;

use AlibabaCloud\Tea\Model;

class repairParts extends Model
{
    /**
     * @description garageType
     *
     * @var string
     */
    public $garageType;

    /**
     * @description oeMatch
     *
     * @var bool
     */
    public $oeMatch;

    /**
     * @description outStandardPartsId
     *
     * @var string
     */
    public $outStandardPartsId;

    /**
     * @description outStandardPartsName
     *
     * @var string
     */
    public $outStandardPartsName;

    /**
     * @description partNameMatch
     *
     * @var bool
     */
    public $partNameMatch;

    /**
     * @description partsStdCode
     *
     * @var string
     */
    public $partsStdCode;

    /**
     * @description partsStdName
     *
     * @var string
     */
    public $partsStdName;

    /**
     * @description relationType
     *
     * @var string
     */
    public $relationType;

    /**
     * @description repairFee
     *
     * @var string
     */
    public $repairFee;

    /**
     * @description repairType
     *
     * @var string
     */
    public $repairType;

    /**
     * @description repairTypeDesc
     *
     * @var string
     */
    public $repairTypeName;
    protected $_name = [
        'garageType'           => 'GarageType',
        'oeMatch'              => 'OeMatch',
        'outStandardPartsId'   => 'OutStandardPartsId',
        'outStandardPartsName' => 'OutStandardPartsName',
        'partNameMatch'        => 'PartNameMatch',
        'partsStdCode'         => 'PartsStdCode',
        'partsStdName'         => 'PartsStdName',
        'relationType'         => 'RelationType',
        'repairFee'            => 'RepairFee',
        'repairType'           => 'RepairType',
        'repairTypeName'       => 'RepairTypeName',
    ];

    public function validate()
    {
        Model::validateRequired('garageType', $this->garageType, true);
        Model::validateRequired('oeMatch', $this->oeMatch, true);
        Model::validateRequired('outStandardPartsId', $this->outStandardPartsId, true);
        Model::validateRequired('outStandardPartsName', $this->outStandardPartsName, true);
        Model::validateRequired('partNameMatch', $this->partNameMatch, true);
        Model::validateRequired('partsStdCode', $this->partsStdCode, true);
        Model::validateRequired('partsStdName', $this->partsStdName, true);
        Model::validateRequired('relationType', $this->relationType, true);
        Model::validateRequired('repairFee', $this->repairFee, true);
        Model::validateRequired('repairType', $this->repairType, true);
        Model::validateRequired('repairTypeName', $this->repairTypeName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->garageType) {
            $res['GarageType'] = $this->garageType;
        }
        if (null !== $this->oeMatch) {
            $res['OeMatch'] = $this->oeMatch;
        }
        if (null !== $this->outStandardPartsId) {
            $res['OutStandardPartsId'] = $this->outStandardPartsId;
        }
        if (null !== $this->outStandardPartsName) {
            $res['OutStandardPartsName'] = $this->outStandardPartsName;
        }
        if (null !== $this->partNameMatch) {
            $res['PartNameMatch'] = $this->partNameMatch;
        }
        if (null !== $this->partsStdCode) {
            $res['PartsStdCode'] = $this->partsStdCode;
        }
        if (null !== $this->partsStdName) {
            $res['PartsStdName'] = $this->partsStdName;
        }
        if (null !== $this->relationType) {
            $res['RelationType'] = $this->relationType;
        }
        if (null !== $this->repairFee) {
            $res['RepairFee'] = $this->repairFee;
        }
        if (null !== $this->repairType) {
            $res['RepairType'] = $this->repairType;
        }
        if (null !== $this->repairTypeName) {
            $res['RepairTypeName'] = $this->repairTypeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return repairParts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GarageType'])) {
            $model->garageType = $map['GarageType'];
        }
        if (isset($map['OeMatch'])) {
            $model->oeMatch = $map['OeMatch'];
        }
        if (isset($map['OutStandardPartsId'])) {
            $model->outStandardPartsId = $map['OutStandardPartsId'];
        }
        if (isset($map['OutStandardPartsName'])) {
            $model->outStandardPartsName = $map['OutStandardPartsName'];
        }
        if (isset($map['PartNameMatch'])) {
            $model->partNameMatch = $map['PartNameMatch'];
        }
        if (isset($map['PartsStdCode'])) {
            $model->partsStdCode = $map['PartsStdCode'];
        }
        if (isset($map['PartsStdName'])) {
            $model->partsStdName = $map['PartsStdName'];
        }
        if (isset($map['RelationType'])) {
            $model->relationType = $map['RelationType'];
        }
        if (isset($map['RepairFee'])) {
            $model->repairFee = $map['RepairFee'];
        }
        if (isset($map['RepairType'])) {
            $model->repairType = $map['RepairType'];
        }
        if (isset($map['RepairTypeName'])) {
            $model->repairTypeName = $map['RepairTypeName'];
        }

        return $model;
    }
}
