<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupAttributeResponse\permissions;

use AlibabaCloud\Tea\Model;

class permission extends Model
{
    /**
     * @var string
     */
    public $ipProtocol;

    /**
     * @var string
     */
    public $portRange;

    /**
     * @var string
     */
    public $sourcePortRange;

    /**
     * @var string
     */
    public $sourceGroupId;

    /**
     * @var string
     */
    public $sourceGroupName;

    /**
     * @var string
     */
    public $sourceCidrIp;

    /**
     * @var string
     */
    public $ipv6SourceCidrIp;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $nicType;

    /**
     * @var string
     */
    public $sourceGroupOwnerAccount;

    /**
     * @var string
     */
    public $destGroupId;

    /**
     * @var string
     */
    public $destGroupName;

    /**
     * @var string
     */
    public $destCidrIp;

    /**
     * @var string
     */
    public $ipv6DestCidrIp;

    /**
     * @var string
     */
    public $destGroupOwnerAccount;

    /**
     * @var string
     */
    public $priority;

    /**
     * @var string
     */
    public $direction;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $createTime;
    protected $_name = [
        'ipProtocol'              => 'IpProtocol',
        'portRange'               => 'PortRange',
        'sourcePortRange'         => 'SourcePortRange',
        'sourceGroupId'           => 'SourceGroupId',
        'sourceGroupName'         => 'SourceGroupName',
        'sourceCidrIp'            => 'SourceCidrIp',
        'ipv6SourceCidrIp'        => 'Ipv6SourceCidrIp',
        'policy'                  => 'Policy',
        'nicType'                 => 'NicType',
        'sourceGroupOwnerAccount' => 'SourceGroupOwnerAccount',
        'destGroupId'             => 'DestGroupId',
        'destGroupName'           => 'DestGroupName',
        'destCidrIp'              => 'DestCidrIp',
        'ipv6DestCidrIp'          => 'Ipv6DestCidrIp',
        'destGroupOwnerAccount'   => 'DestGroupOwnerAccount',
        'priority'                => 'Priority',
        'direction'               => 'Direction',
        'description'             => 'Description',
        'createTime'              => 'CreateTime',
    ];

    public function validate()
    {
        Model::validateRequired('ipProtocol', $this->ipProtocol, true);
        Model::validateRequired('portRange', $this->portRange, true);
        Model::validateRequired('sourcePortRange', $this->sourcePortRange, true);
        Model::validateRequired('sourceGroupId', $this->sourceGroupId, true);
        Model::validateRequired('sourceGroupName', $this->sourceGroupName, true);
        Model::validateRequired('sourceCidrIp', $this->sourceCidrIp, true);
        Model::validateRequired('ipv6SourceCidrIp', $this->ipv6SourceCidrIp, true);
        Model::validateRequired('policy', $this->policy, true);
        Model::validateRequired('nicType', $this->nicType, true);
        Model::validateRequired('sourceGroupOwnerAccount', $this->sourceGroupOwnerAccount, true);
        Model::validateRequired('destGroupId', $this->destGroupId, true);
        Model::validateRequired('destGroupName', $this->destGroupName, true);
        Model::validateRequired('destCidrIp', $this->destCidrIp, true);
        Model::validateRequired('ipv6DestCidrIp', $this->ipv6DestCidrIp, true);
        Model::validateRequired('destGroupOwnerAccount', $this->destGroupOwnerAccount, true);
        Model::validateRequired('priority', $this->priority, true);
        Model::validateRequired('direction', $this->direction, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('createTime', $this->createTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipProtocol) {
            $res['IpProtocol'] = $this->ipProtocol;
        }
        if (null !== $this->portRange) {
            $res['PortRange'] = $this->portRange;
        }
        if (null !== $this->sourcePortRange) {
            $res['SourcePortRange'] = $this->sourcePortRange;
        }
        if (null !== $this->sourceGroupId) {
            $res['SourceGroupId'] = $this->sourceGroupId;
        }
        if (null !== $this->sourceGroupName) {
            $res['SourceGroupName'] = $this->sourceGroupName;
        }
        if (null !== $this->sourceCidrIp) {
            $res['SourceCidrIp'] = $this->sourceCidrIp;
        }
        if (null !== $this->ipv6SourceCidrIp) {
            $res['Ipv6SourceCidrIp'] = $this->ipv6SourceCidrIp;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->nicType) {
            $res['NicType'] = $this->nicType;
        }
        if (null !== $this->sourceGroupOwnerAccount) {
            $res['SourceGroupOwnerAccount'] = $this->sourceGroupOwnerAccount;
        }
        if (null !== $this->destGroupId) {
            $res['DestGroupId'] = $this->destGroupId;
        }
        if (null !== $this->destGroupName) {
            $res['DestGroupName'] = $this->destGroupName;
        }
        if (null !== $this->destCidrIp) {
            $res['DestCidrIp'] = $this->destCidrIp;
        }
        if (null !== $this->ipv6DestCidrIp) {
            $res['Ipv6DestCidrIp'] = $this->ipv6DestCidrIp;
        }
        if (null !== $this->destGroupOwnerAccount) {
            $res['DestGroupOwnerAccount'] = $this->destGroupOwnerAccount;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return permission
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpProtocol'])) {
            $model->ipProtocol = $map['IpProtocol'];
        }
        if (isset($map['PortRange'])) {
            $model->portRange = $map['PortRange'];
        }
        if (isset($map['SourcePortRange'])) {
            $model->sourcePortRange = $map['SourcePortRange'];
        }
        if (isset($map['SourceGroupId'])) {
            $model->sourceGroupId = $map['SourceGroupId'];
        }
        if (isset($map['SourceGroupName'])) {
            $model->sourceGroupName = $map['SourceGroupName'];
        }
        if (isset($map['SourceCidrIp'])) {
            $model->sourceCidrIp = $map['SourceCidrIp'];
        }
        if (isset($map['Ipv6SourceCidrIp'])) {
            $model->ipv6SourceCidrIp = $map['Ipv6SourceCidrIp'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['NicType'])) {
            $model->nicType = $map['NicType'];
        }
        if (isset($map['SourceGroupOwnerAccount'])) {
            $model->sourceGroupOwnerAccount = $map['SourceGroupOwnerAccount'];
        }
        if (isset($map['DestGroupId'])) {
            $model->destGroupId = $map['DestGroupId'];
        }
        if (isset($map['DestGroupName'])) {
            $model->destGroupName = $map['DestGroupName'];
        }
        if (isset($map['DestCidrIp'])) {
            $model->destCidrIp = $map['DestCidrIp'];
        }
        if (isset($map['Ipv6DestCidrIp'])) {
            $model->ipv6DestCidrIp = $map['Ipv6DestCidrIp'];
        }
        if (isset($map['DestGroupOwnerAccount'])) {
            $model->destGroupOwnerAccount = $map['DestGroupOwnerAccount'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        return $model;
    }
}
