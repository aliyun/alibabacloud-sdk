<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeDrivingLicenseResponse\data;

use AlibabaCloud\Tea\Model;

class backResult extends Model
{
    public $approvedPassengerCapacity;
    public $approvedLoad;
    public $fileNumber;
    public $grossMass;
    public $energyType;
    public $inspectionRecord;
    public $overallDimension;
    public $tractionMass;
    public $unladenMass;
    public $plateNumber;
    protected $_required = [
        'approvedPassengerCapacity' => true,
        'approvedLoad'              => true,
        'fileNumber'                => true,
        'grossMass'                 => true,
        'energyType'                => true,
        'inspectionRecord'          => true,
        'overallDimension'          => true,
        'tractionMass'              => true,
        'unladenMass'               => true,
        'plateNumber'               => true,
    ];
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
    protected $_description = [
        'approvedPassengerCapacity' => 'approvedPassengerCapacity',
        'approvedLoad'              => 'approvedLoad',
        'fileNumber'                => 'fileNumber',
        'grossMass'                 => 'grossMass',
        'energyType'                => 'energyType',
        'inspectionRecord'          => 'inspectionRecord',
        'overallDimension'          => 'overallDimension',
        'tractionMass'              => 'tractionMass',
        'unladenMass'               => 'unladenMass',
        'plateNumber'               => 'plateNumber',
    ];
}
