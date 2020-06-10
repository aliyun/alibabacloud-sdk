<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateInstanceRequest;

use AlibabaCloud\Tea\Model;

class dataDisk extends Model
{
    /**
     * @description size
     *
     * @var int
     */
    public $size;

    /**
     * @description snapshotId
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @description category
     *
     * @var string
     */
    public $category;

    /**
     * @description diskName
     *
     * @var string
     */
    public $diskName;

    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description device
     *
     * @var string
     */
    public $device;

    /**
     * @description deleteWithInstance
     *
     * @var bool
     */
    public $deleteWithInstance;

    /**
     * @description encrypted
     *
     * @var bool
     */
    public $encrypted;

    /**
     * @description kmsKeyId
     *
     * @var string
     */
    public $KMSKeyId;

    /**
     * @description performanceLevel
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @description encryptAlgorithm
     *
     * @var string
     */
    public $encryptAlgorithm;
    protected $_name = [
        'size'               => 'Size',
        'snapshotId'         => 'SnapshotId',
        'category'           => 'Category',
        'diskName'           => 'DiskName',
        'description'        => 'Description',
        'device'             => 'Device',
        'deleteWithInstance' => 'DeleteWithInstance',
        'encrypted'          => 'Encrypted',
        'KMSKeyId'           => 'KMSKeyId',
        'performanceLevel'   => 'PerformanceLevel',
        'encryptAlgorithm'   => 'EncryptAlgorithm',
    ];

    public function validate()
    {
        Model::validateRequired('size', $this->size, true);
        Model::validateRequired('snapshotId', $this->snapshotId, true);
        Model::validateRequired('category', $this->category, true);
        Model::validateRequired('diskName', $this->diskName, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('device', $this->device, true);
        Model::validateRequired('deleteWithInstance', $this->deleteWithInstance, true);
        Model::validateRequired('encrypted', $this->encrypted, true);
        Model::validateRequired('KMSKeyId', $this->KMSKeyId, true);
        Model::validateRequired('performanceLevel', $this->performanceLevel, true);
        Model::validateRequired('encryptAlgorithm', $this->encryptAlgorithm, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->diskName) {
            $res['DiskName'] = $this->diskName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->device) {
            $res['Device'] = $this->device;
        }
        if (null !== $this->deleteWithInstance) {
            $res['DeleteWithInstance'] = $this->deleteWithInstance;
        }
        if (null !== $this->encrypted) {
            $res['Encrypted'] = $this->encrypted;
        }
        if (null !== $this->KMSKeyId) {
            $res['KMSKeyId'] = $this->KMSKeyId;
        }
        if (null !== $this->performanceLevel) {
            $res['PerformanceLevel'] = $this->performanceLevel;
        }
        if (null !== $this->encryptAlgorithm) {
            $res['EncryptAlgorithm'] = $this->encryptAlgorithm;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataDisk
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['DiskName'])) {
            $model->diskName = $map['DiskName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Device'])) {
            $model->device = $map['Device'];
        }
        if (isset($map['DeleteWithInstance'])) {
            $model->deleteWithInstance = $map['DeleteWithInstance'];
        }
        if (isset($map['Encrypted'])) {
            $model->encrypted = $map['Encrypted'];
        }
        if (isset($map['KMSKeyId'])) {
            $model->KMSKeyId = $map['KMSKeyId'];
        }
        if (isset($map['PerformanceLevel'])) {
            $model->performanceLevel = $map['PerformanceLevel'];
        }
        if (isset($map['EncryptAlgorithm'])) {
            $model->encryptAlgorithm = $map['EncryptAlgorithm'];
        }

        return $model;
    }
}
