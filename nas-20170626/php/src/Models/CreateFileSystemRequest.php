<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class CreateFileSystemRequest extends Model
{
    /**
     * @description fileSystemType
     *
     * @var string
     */
    public $fileSystemType;

    /**
     * @description bizType
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description duration
     *
     * @var int
     */
    public $duration;

    /**
     * @description capacity
     *
     * @var int
     */
    public $capacity;

    /**
     * @description bandwidth
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description volumeType
     *
     * @var string
     */
    public $storageType;

    /**
     * @description avaliableZone
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description protocolType
     *
     * @var string
     */
    public $protocolType;

    /**
     * @description encryptType
     *
     * @var int
     */
    public $encryptType;

    /**
     * @description snapshotId
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @description vpcId
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description vswitchId
     *
     * @var string
     */
    public $VSwitchId;

    /**
     * @description volumeDesc
     *
     * @var string
     */
    public $description;

    /**
     * @description clientToken
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description dryRun
     *
     * @var bool
     */
    public $dryRun;
    protected $_name = [
        'fileSystemType' => 'FileSystemType',
        'chargeType'     => 'ChargeType',
        'duration'       => 'Duration',
        'capacity'       => 'Capacity',
        'bandwidth'      => 'Bandwidth',
        'storageType'    => 'StorageType',
        'zoneId'         => 'ZoneId',
        'protocolType'   => 'ProtocolType',
        'encryptType'    => 'EncryptType',
        'snapshotId'     => 'SnapshotId',
        'vpcId'          => 'VpcId',
        'VSwitchId'      => 'VSwitchId',
        'description'    => 'Description',
        'clientToken'    => 'ClientToken',
        'dryRun'         => 'DryRun',
    ];

    public function validate()
    {
        Model::validateRequired('storageType', $this->storageType, true);
        Model::validateRequired('protocolType', $this->protocolType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSystemType) {
            $res['FileSystemType'] = $this->fileSystemType;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->encryptType) {
            $res['EncryptType'] = $this->encryptType;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->VSwitchId) {
            $res['VSwitchId'] = $this->VSwitchId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFileSystemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSystemType'])) {
            $model->fileSystemType = $map['FileSystemType'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['EncryptType'])) {
            $model->encryptType = $map['EncryptType'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->VSwitchId = $map['VSwitchId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        return $model;
    }
}
