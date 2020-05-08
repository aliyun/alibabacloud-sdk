<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeDrivingLicenseResponse\data;

use AlibabaCloud\Tea\Model;

class backResult extends Model
{
    /**
     * @description approvedPassengerCapacity
     *
     * @var string
     */
    public $approvedPassengerCapacity;

    /**
     * @description approvedLoad
     *
     * @var string
     */
    public $approvedLoad;

    /**
     * @description fileNumber
     *
     * @var string
     */
    public $fileNumber;

    /**
     * @description grossMass
     *
     * @var string
     */
    public $grossMass;

    /**
     * @description energyType
     *
     * @var string
     */
    public $energyType;

    /**
     * @description inspectionRecord
     *
     * @var string
     */
    public $inspectionRecord;

    /**
     * @description overallDimension
     *
     * @var string
     */
    public $overallDimension;

    /**
     * @description tractionMass
     *
     * @var string
     */
    public $tractionMass;

    /**
     * @description unladenMass
     *
     * @var string
     */
    public $unladenMass;

    /**
     * @description plateNumber
     *
     * @var string
     */
    public $plateNumber;
    protected $_name = [
        'approvedPassengerCapacity' => 'ApprovedPassengerCapacity',
        'approvedLoad'              => 'ApprovedLoad',
        'fileNumber'                => 'FileNumber',
        'grossMass'                 => 'GrossMass',
        'energyType'                => 'EnergyType',
        'inspectionRecord'          => 'InspectionRecord',
        'overallDimension'          => 'OverallDimension',
        'tractionMass'              => 'TractionMass',
        'unladenMass'               => 'UnladenMass',
        'plateNumber'               => 'PlateNumber',
    ];

    public function validate()
    {
        Model::validateRequired('approvedPassengerCapacity', $this->approvedPassengerCapacity, true);
        Model::validateRequired('approvedLoad', $this->approvedLoad, true);
        Model::validateRequired('fileNumber', $this->fileNumber, true);
        Model::validateRequired('grossMass', $this->grossMass, true);
        Model::validateRequired('energyType', $this->energyType, true);
        Model::validateRequired('inspectionRecord', $this->inspectionRecord, true);
        Model::validateRequired('overallDimension', $this->overallDimension, true);
        Model::validateRequired('tractionMass', $this->tractionMass, true);
        Model::validateRequired('unladenMass', $this->unladenMass, true);
        Model::validateRequired('plateNumber', $this->plateNumber, true);
    }

    public function toMap()
    {
        $res                              = [];
        $res['ApprovedPassengerCapacity'] = $this->approvedPassengerCapacity;
        $res['ApprovedLoad']              = $this->approvedLoad;
        $res['FileNumber']                = $this->fileNumber;
        $res['GrossMass']                 = $this->grossMass;
        $res['EnergyType']                = $this->energyType;
        $res['InspectionRecord']          = $this->inspectionRecord;
        $res['OverallDimension']          = $this->overallDimension;
        $res['TractionMass']              = $this->tractionMass;
        $res['UnladenMass']               = $this->unladenMass;
        $res['PlateNumber']               = $this->plateNumber;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApprovedPassengerCapacity'])) {
            $model->approvedPassengerCapacity = $map['ApprovedPassengerCapacity'];
        }
        if (isset($map['ApprovedLoad'])) {
            $model->approvedLoad = $map['ApprovedLoad'];
        }
        if (isset($map['FileNumber'])) {
            $model->fileNumber = $map['FileNumber'];
        }
        if (isset($map['GrossMass'])) {
            $model->grossMass = $map['GrossMass'];
        }
        if (isset($map['EnergyType'])) {
            $model->energyType = $map['EnergyType'];
        }
        if (isset($map['InspectionRecord'])) {
            $model->inspectionRecord = $map['InspectionRecord'];
        }
        if (isset($map['OverallDimension'])) {
            $model->overallDimension = $map['OverallDimension'];
        }
        if (isset($map['TractionMass'])) {
            $model->tractionMass = $map['TractionMass'];
        }
        if (isset($map['UnladenMass'])) {
            $model->unladenMass = $map['UnladenMass'];
        }
        if (isset($map['PlateNumber'])) {
            $model->plateNumber = $map['PlateNumber'];
        }

        return $model;
    }
}
