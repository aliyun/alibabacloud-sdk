<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class ModifyDiskAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $diskId;

    /**
     * @var array
     */
    public $diskIds;

    /**
     * @var string
     */
    public $diskName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $deleteWithInstance;

    /**
     * @var bool
     */
    public $deleteAutoSnapshot;

    /**
     * @var bool
     */
    public $enableAutoSnapshot;
    protected $_name = [
        'diskId'             => 'DiskId',
        'diskIds'            => 'DiskIds',
        'diskName'           => 'DiskName',
        'description'        => 'Description',
        'deleteWithInstance' => 'DeleteWithInstance',
        'deleteAutoSnapshot' => 'DeleteAutoSnapshot',
        'enableAutoSnapshot' => 'EnableAutoSnapshot',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->diskIds) {
            $res['DiskIds'] = $this->diskIds;
        }
        if (null !== $this->diskName) {
            $res['DiskName'] = $this->diskName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->deleteWithInstance) {
            $res['DeleteWithInstance'] = $this->deleteWithInstance;
        }
        if (null !== $this->deleteAutoSnapshot) {
            $res['DeleteAutoSnapshot'] = $this->deleteAutoSnapshot;
        }
        if (null !== $this->enableAutoSnapshot) {
            $res['EnableAutoSnapshot'] = $this->enableAutoSnapshot;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDiskAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['DiskIds'])) {
            if (!empty($map['DiskIds'])) {
                $model->diskIds = $map['DiskIds'];
            }
        }
        if (isset($map['DiskName'])) {
            $model->diskName = $map['DiskName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DeleteWithInstance'])) {
            $model->deleteWithInstance = $map['DeleteWithInstance'];
        }
        if (isset($map['DeleteAutoSnapshot'])) {
            $model->deleteAutoSnapshot = $map['DeleteAutoSnapshot'];
        }
        if (isset($map['EnableAutoSnapshot'])) {
            $model->enableAutoSnapshot = $map['EnableAutoSnapshot'];
        }

        return $model;
    }
}
