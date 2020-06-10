<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\CopySnapshotRequest\tag;
use AlibabaCloud\Tea\Model;

class CopySnapshotRequest extends Model
{
    /**
     * @description ownerId
     *
     * @var int
     */
    public $ownerId;

    /**
     * @description resourceOwnerAccount
     *
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description resourceOwnerId
     *
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description tagKeyValueParams
     *
     * @var array
     */
    public $tag;

    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description destinationRegionId
     *
     * @var string
     */
    public $destinationRegionId;

    /**
     * @description snapshotId
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @description destinationSnapshotName
     *
     * @var string
     */
    public $destinationSnapshotName;

    /**
     * @description destinationSnapshotDescription
     *
     * @var string
     */
    public $destinationSnapshotDescription;

    /**
     * @description retentionDays
     *
     * @var int
     */
    public $retentionDays;
    protected $_name = [
        'ownerId'                        => 'OwnerId',
        'resourceOwnerAccount'           => 'ResourceOwnerAccount',
        'resourceOwnerId'                => 'ResourceOwnerId',
        'tag'                            => 'Tag',
        'regionId'                       => 'RegionId',
        'destinationRegionId'            => 'DestinationRegionId',
        'snapshotId'                     => 'SnapshotId',
        'destinationSnapshotName'        => 'DestinationSnapshotName',
        'destinationSnapshotDescription' => 'DestinationSnapshotDescription',
        'retentionDays'                  => 'RetentionDays',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('destinationRegionId', $this->destinationRegionId, true);
        Model::validateRequired('snapshotId', $this->snapshotId, true);
        Model::validateRequired('destinationSnapshotName', $this->destinationSnapshotName, true);
        Model::validateRequired('destinationSnapshotDescription', $this->destinationSnapshotDescription, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->destinationRegionId) {
            $res['DestinationRegionId'] = $this->destinationRegionId;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->destinationSnapshotName) {
            $res['DestinationSnapshotName'] = $this->destinationSnapshotName;
        }
        if (null !== $this->destinationSnapshotDescription) {
            $res['DestinationSnapshotDescription'] = $this->destinationSnapshotDescription;
        }
        if (null !== $this->retentionDays) {
            $res['RetentionDays'] = $this->retentionDays;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CopySnapshotRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['DestinationRegionId'])) {
            $model->destinationRegionId = $map['DestinationRegionId'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['DestinationSnapshotName'])) {
            $model->destinationSnapshotName = $map['DestinationSnapshotName'];
        }
        if (isset($map['DestinationSnapshotDescription'])) {
            $model->destinationSnapshotDescription = $map['DestinationSnapshotDescription'];
        }
        if (isset($map['RetentionDays'])) {
            $model->retentionDays = $map['RetentionDays'];
        }

        return $model;
    }
}
