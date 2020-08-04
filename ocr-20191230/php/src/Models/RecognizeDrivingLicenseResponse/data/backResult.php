<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeDrivingLicenseResponse\data;

use AlibabaCloud\Tea\Model;

class backResult extends Model
{
    /**
     * @var string
     */
    public $approvedPassengerCapacity;

    /**
     * @var string
     */
    public $approvedLoad;

    /**
     * @var string
     */
    public $fileNumber;

    /**
     * @var string
     */
    public $grossMass;

    /**
     * @var string
     */
    public $energyType;

    /**
     * @var string
     */
    public $inspectionRecord;

    /**
     * @var string
     */
    public $overallDimension;

    /**
     * @var string
     */
    public $tractionMass;

    /**
     * @var string
     */
    public $unladenMass;

    /**
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
        $res = [];
        if (null !== $this->approvedPassengerCapacity) {
            $res['ApprovedPassengerCapacity'] = $this->approvedPassengerCapacity;
        }
        if (null !== $this->approvedLoad) {
            $res['ApprovedLoad'] = $this->approvedLoad;
        }
        if (null !== $this->fileNumber) {
            $res['FileNumber'] = $this->fileNumber;
        }
        if (null !== $this->grossMass) {
            $res['GrossMass'] = $this->grossMass;
        }
        if (null !== $this->energyType) {
            $res['EnergyType'] = $this->energyType;
        }
        if (null !== $this->inspectionRecord) {
            $res['InspectionRecord'] = $this->inspectionRecord;
        }
        if (null !== $this->overallDimension) {
            $res['OverallDimension'] = $this->overallDimension;
        }
        if (null !== $this->tractionMass) {
            $res['TractionMass'] = $this->tractionMass;
        }
        if (null !== $this->unladenMass) {
            $res['UnladenMass'] = $this->unladenMass;
        }
        if (null !== $this->plateNumber) {
            $res['PlateNumber'] = $this->plateNumber;
        }

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
