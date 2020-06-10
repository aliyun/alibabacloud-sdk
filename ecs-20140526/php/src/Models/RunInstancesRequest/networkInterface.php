<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\RunInstancesRequest;

use AlibabaCloud\Tea\Model;

class networkInterface extends Model
{
    /**
     * @description primaryIpAddress
     *
     * @var string
     */
    public $primaryIpAddress;

    /**
     * @description vswitchId
     *
     * @var string
     */
    public $VSwitchId;

    /**
     * @description securityGroupId
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description securityGroupIds
     *
     * @var array
     */
    public $securityGroupIds;

    /**
     * @description networkInterfaceName
     *
     * @var string
     */
    public $networkInterfaceName;

    /**
     * @description description
     *
     * @var string
     */
    public $description;
    protected $_name = [
        'primaryIpAddress'     => 'PrimaryIpAddress',
        'VSwitchId'            => 'VSwitchId',
        'securityGroupId'      => 'SecurityGroupId',
        'securityGroupIds'     => 'SecurityGroupIds',
        'networkInterfaceName' => 'NetworkInterfaceName',
        'description'          => 'Description',
    ];

    public function validate()
    {
        Model::validateRequired('primaryIpAddress', $this->primaryIpAddress, true);
        Model::validateRequired('VSwitchId', $this->VSwitchId, true);
        Model::validateRequired('securityGroupId', $this->securityGroupId, true);
        Model::validateRequired('networkInterfaceName', $this->networkInterfaceName, true);
        Model::validateRequired('description', $this->description, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->primaryIpAddress) {
            $res['PrimaryIpAddress'] = $this->primaryIpAddress;
        }
        if (null !== $this->VSwitchId) {
            $res['VSwitchId'] = $this->VSwitchId;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->securityGroupIds) {
            $res['SecurityGroupIds'] = [];
            if (null !== $this->securityGroupIds) {
                $res['SecurityGroupIds'] = $this->securityGroupIds;
            }
        }
        if (null !== $this->networkInterfaceName) {
            $res['NetworkInterfaceName'] = $this->networkInterfaceName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkInterface
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrimaryIpAddress'])) {
            $model->primaryIpAddress = $map['PrimaryIpAddress'];
        }
        if (isset($map['VSwitchId'])) {
            $model->VSwitchId = $map['VSwitchId'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['SecurityGroupIds'])) {
            if (!empty($map['SecurityGroupIds'])) {
                $model->securityGroupIds = [];
                $model->securityGroupIds = $map['SecurityGroupIds'];
            }
        }
        if (isset($map['NetworkInterfaceName'])) {
            $model->networkInterfaceName = $map['NetworkInterfaceName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
