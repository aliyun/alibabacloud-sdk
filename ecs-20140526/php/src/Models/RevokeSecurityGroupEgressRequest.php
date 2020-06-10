<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class RevokeSecurityGroupEgressRequest extends Model
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
     * @description ownerAccount
     *
     * @var string
     */
    public $ownerAccount;

    /**
     * @description regionNo
     *
     * @var string
     */
    public $regionId;

    /**
     * @description groupNo
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description ipProtocol
     *
     * @var string
     */
    public $ipProtocol;

    /**
     * @description portRange
     *
     * @var string
     */
    public $portRange;

    /**
     * @description destGroupNo
     *
     * @var string
     */
    public $destGroupId;

    /**
     * @description groupOwnerAliUid
     *
     * @var int
     */
    public $destGroupOwnerId;

    /**
     * @description groupOwnerAccount
     *
     * @var string
     */
    public $destGroupOwnerAccount;

    /**
     * @description destCidrIp
     *
     * @var string
     */
    public $destCidrIp;

    /**
     * @description v6DestCidrIp
     *
     * @var string
     */
    public $ipv6DestCidrIp;

    /**
     * @description sourceCidrIp
     *
     * @var string
     */
    public $sourceCidrIp;

    /**
     * @description v6SourceCidrIp
     *
     * @var string
     */
    public $ipv6SourceCidrIp;

    /**
     * @description sourcePortRange
     *
     * @var string
     */
    public $sourcePortRange;

    /**
     * @description policy
     *
     * @var string
     */
    public $policy;

    /**
     * @description level
     *
     * @var string
     */
    public $priority;

    /**
     * @description nic
     *
     * @var string
     */
    public $nicType;

    /**
     * @description token
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description description
     *
     * @var string
     */
    public $description;
    protected $_name = [
        'ownerId'               => 'OwnerId',
        'resourceOwnerAccount'  => 'ResourceOwnerAccount',
        'resourceOwnerId'       => 'ResourceOwnerId',
        'ownerAccount'          => 'OwnerAccount',
        'regionId'              => 'RegionId',
        'securityGroupId'       => 'SecurityGroupId',
        'ipProtocol'            => 'IpProtocol',
        'portRange'             => 'PortRange',
        'destGroupId'           => 'DestGroupId',
        'destGroupOwnerId'      => 'DestGroupOwnerId',
        'destGroupOwnerAccount' => 'DestGroupOwnerAccount',
        'destCidrIp'            => 'DestCidrIp',
        'ipv6DestCidrIp'        => 'Ipv6DestCidrIp',
        'sourceCidrIp'          => 'SourceCidrIp',
        'ipv6SourceCidrIp'      => 'Ipv6SourceCidrIp',
        'sourcePortRange'       => 'SourcePortRange',
        'policy'                => 'Policy',
        'priority'              => 'Priority',
        'nicType'               => 'NicType',
        'clientToken'           => 'ClientToken',
        'description'           => 'Description',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('securityGroupId', $this->securityGroupId, true);
        Model::validateRequired('ipProtocol', $this->ipProtocol, true);
        Model::validateRequired('portRange', $this->portRange, true);
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
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->ipProtocol) {
            $res['IpProtocol'] = $this->ipProtocol;
        }
        if (null !== $this->portRange) {
            $res['PortRange'] = $this->portRange;
        }
        if (null !== $this->destGroupId) {
            $res['DestGroupId'] = $this->destGroupId;
        }
        if (null !== $this->destGroupOwnerId) {
            $res['DestGroupOwnerId'] = $this->destGroupOwnerId;
        }
        if (null !== $this->destGroupOwnerAccount) {
            $res['DestGroupOwnerAccount'] = $this->destGroupOwnerAccount;
        }
        if (null !== $this->destCidrIp) {
            $res['DestCidrIp'] = $this->destCidrIp;
        }
        if (null !== $this->ipv6DestCidrIp) {
            $res['Ipv6DestCidrIp'] = $this->ipv6DestCidrIp;
        }
        if (null !== $this->sourceCidrIp) {
            $res['SourceCidrIp'] = $this->sourceCidrIp;
        }
        if (null !== $this->ipv6SourceCidrIp) {
            $res['Ipv6SourceCidrIp'] = $this->ipv6SourceCidrIp;
        }
        if (null !== $this->sourcePortRange) {
            $res['SourcePortRange'] = $this->sourcePortRange;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->nicType) {
            $res['NicType'] = $this->nicType;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RevokeSecurityGroupEgressRequest
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
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['IpProtocol'])) {
            $model->ipProtocol = $map['IpProtocol'];
        }
        if (isset($map['PortRange'])) {
            $model->portRange = $map['PortRange'];
        }
        if (isset($map['DestGroupId'])) {
            $model->destGroupId = $map['DestGroupId'];
        }
        if (isset($map['DestGroupOwnerId'])) {
            $model->destGroupOwnerId = $map['DestGroupOwnerId'];
        }
        if (isset($map['DestGroupOwnerAccount'])) {
            $model->destGroupOwnerAccount = $map['DestGroupOwnerAccount'];
        }
        if (isset($map['DestCidrIp'])) {
            $model->destCidrIp = $map['DestCidrIp'];
        }
        if (isset($map['Ipv6DestCidrIp'])) {
            $model->ipv6DestCidrIp = $map['Ipv6DestCidrIp'];
        }
        if (isset($map['SourceCidrIp'])) {
            $model->sourceCidrIp = $map['SourceCidrIp'];
        }
        if (isset($map['Ipv6SourceCidrIp'])) {
            $model->ipv6SourceCidrIp = $map['Ipv6SourceCidrIp'];
        }
        if (isset($map['SourcePortRange'])) {
            $model->sourcePortRange = $map['SourcePortRange'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['NicType'])) {
            $model->nicType = $map['NicType'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
