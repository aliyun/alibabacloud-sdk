<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DescribeAutoProvisioningGroupsRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $autoProvisioningGroupName;

    /**
     * @var array
     */
    public $autoProvisioningGroupId;

    /**
     * @var array
     */
    public $autoProvisioningGroupStatus;
    protected $_name = [
        'regionId'                    => 'RegionId',
        'pageNumber'                  => 'PageNumber',
        'pageSize'                    => 'PageSize',
        'autoProvisioningGroupName'   => 'AutoProvisioningGroupName',
        'autoProvisioningGroupId'     => 'AutoProvisioningGroupId',
        'autoProvisioningGroupStatus' => 'AutoProvisioningGroupStatus',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->autoProvisioningGroupName) {
            $res['AutoProvisioningGroupName'] = $this->autoProvisioningGroupName;
        }
        if (null !== $this->autoProvisioningGroupId) {
            $res['AutoProvisioningGroupId'] = $this->autoProvisioningGroupId;
        }
        if (null !== $this->autoProvisioningGroupStatus) {
            $res['AutoProvisioningGroupStatus'] = $this->autoProvisioningGroupStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAutoProvisioningGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['AutoProvisioningGroupName'])) {
            $model->autoProvisioningGroupName = $map['AutoProvisioningGroupName'];
        }
        if (isset($map['AutoProvisioningGroupId'])) {
            if (!empty($map['AutoProvisioningGroupId'])) {
                $model->autoProvisioningGroupId = $map['AutoProvisioningGroupId'];
            }
        }
        if (isset($map['AutoProvisioningGroupStatus'])) {
            if (!empty($map['AutoProvisioningGroupStatus'])) {
                $model->autoProvisioningGroupStatus = $map['AutoProvisioningGroupStatus'];
            }
        }

        return $model;
    }
}
