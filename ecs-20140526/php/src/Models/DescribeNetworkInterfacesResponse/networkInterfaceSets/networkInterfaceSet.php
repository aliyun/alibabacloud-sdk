<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacesResponse\networkInterfaceSets;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacesResponse\networkInterfaceSets\networkInterfaceSet\associatedPublicIp;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacesResponse\networkInterfaceSets\networkInterfaceSet\attachment;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacesResponse\networkInterfaceSets\networkInterfaceSet\ipv6Sets;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacesResponse\networkInterfaceSets\networkInterfaceSet\privateIpSets;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacesResponse\networkInterfaceSets\networkInterfaceSet\securityGroupIds;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacesResponse\networkInterfaceSets\networkInterfaceSet\tags;
use AlibabaCloud\Tea\Model;

class networkInterfaceSet extends Model
{
    /**
     * @description instanceId
     *
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description type
     *
     * @var string
     */
    public $type;

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
     * @description zoneId
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description primaryPrivateIpAddress
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @description macAddress
     *
     * @var string
     */
    public $macAddress;

    /**
     * @description eniName
     *
     * @var string
     */
    public $networkInterfaceName;

    /**
     * @description eniDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description ecsInstanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description uTCCreateTime
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description resourceGroupId
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description serviceID
     *
     * @var int
     */
    public $serviceID;

    /**
     * @description serviceManaged
     *
     * @var bool
     */
    public $serviceManaged;

    /**
     * @description queueNumber
     *
     * @var int
     */
    public $queueNumber;

    /**
     * @description aliUid
     *
     * @var string
     */
    public $ownerId;

    /**
     * @description eniPrivateIpList
     *
     * @var privateIpSets
     */
    public $privateIpSets;

    /**
     * @description eniIpv6List
     *
     * @var ipv6Sets
     */
    public $ipv6Sets;

    /**
     * @description tags
     *
     * @var tags
     */
    public $tags;

    /**
     * @description primaryAssociatedPublicIp
     *
     * @var associatedPublicIp
     */
    public $associatedPublicIp;

    /**
     * @description attachment
     *
     * @var attachment
     */
    public $attachment;

    /**
     * @description securityGroupIds
     *
     * @var securityGroupIds
     */
    public $securityGroupIds;
    protected $_name = [
        'networkInterfaceId'   => 'NetworkInterfaceId',
        'status'               => 'Status',
        'type'                 => 'Type',
        'vpcId'                => 'VpcId',
        'VSwitchId'            => 'VSwitchId',
        'zoneId'               => 'ZoneId',
        'privateIpAddress'     => 'PrivateIpAddress',
        'macAddress'           => 'MacAddress',
        'networkInterfaceName' => 'NetworkInterfaceName',
        'description'          => 'Description',
        'instanceId'           => 'InstanceId',
        'creationTime'         => 'CreationTime',
        'resourceGroupId'      => 'ResourceGroupId',
        'serviceID'            => 'ServiceID',
        'serviceManaged'       => 'ServiceManaged',
        'queueNumber'          => 'QueueNumber',
        'ownerId'              => 'OwnerId',
        'privateIpSets'        => 'PrivateIpSets',
        'ipv6Sets'             => 'Ipv6Sets',
        'tags'                 => 'Tags',
        'associatedPublicIp'   => 'AssociatedPublicIp',
        'attachment'           => 'Attachment',
        'securityGroupIds'     => 'SecurityGroupIds',
    ];

    public function validate()
    {
        Model::validateRequired('networkInterfaceId', $this->networkInterfaceId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('vpcId', $this->vpcId, true);
        Model::validateRequired('VSwitchId', $this->VSwitchId, true);
        Model::validateRequired('zoneId', $this->zoneId, true);
        Model::validateRequired('privateIpAddress', $this->privateIpAddress, true);
        Model::validateRequired('macAddress', $this->macAddress, true);
        Model::validateRequired('networkInterfaceName', $this->networkInterfaceName, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('resourceGroupId', $this->resourceGroupId, true);
        Model::validateRequired('serviceID', $this->serviceID, true);
        Model::validateRequired('serviceManaged', $this->serviceManaged, true);
        Model::validateRequired('queueNumber', $this->queueNumber, true);
        Model::validateRequired('ownerId', $this->ownerId, true);
        Model::validateRequired('privateIpSets', $this->privateIpSets, true);
        Model::validateRequired('ipv6Sets', $this->ipv6Sets, true);
        Model::validateRequired('tags', $this->tags, true);
        Model::validateRequired('associatedPublicIp', $this->associatedPublicIp, true);
        Model::validateRequired('attachment', $this->attachment, true);
        Model::validateRequired('securityGroupIds', $this->securityGroupIds, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->VSwitchId) {
            $res['VSwitchId'] = $this->VSwitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->macAddress) {
            $res['MacAddress'] = $this->macAddress;
        }
        if (null !== $this->networkInterfaceName) {
            $res['NetworkInterfaceName'] = $this->networkInterfaceName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->serviceID) {
            $res['ServiceID'] = $this->serviceID;
        }
        if (null !== $this->serviceManaged) {
            $res['ServiceManaged'] = $this->serviceManaged;
        }
        if (null !== $this->queueNumber) {
            $res['QueueNumber'] = $this->queueNumber;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->privateIpSets) {
            $res['PrivateIpSets'] = null !== $this->privateIpSets ? $this->privateIpSets->toMap() : null;
        }
        if (null !== $this->ipv6Sets) {
            $res['Ipv6Sets'] = null !== $this->ipv6Sets ? $this->ipv6Sets->toMap() : null;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->associatedPublicIp) {
            $res['AssociatedPublicIp'] = null !== $this->associatedPublicIp ? $this->associatedPublicIp->toMap() : null;
        }
        if (null !== $this->attachment) {
            $res['Attachment'] = null !== $this->attachment ? $this->attachment->toMap() : null;
        }
        if (null !== $this->securityGroupIds) {
            $res['SecurityGroupIds'] = null !== $this->securityGroupIds ? $this->securityGroupIds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkInterfaceSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->VSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['MacAddress'])) {
            $model->macAddress = $map['MacAddress'];
        }
        if (isset($map['NetworkInterfaceName'])) {
            $model->networkInterfaceName = $map['NetworkInterfaceName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ServiceID'])) {
            $model->serviceID = $map['ServiceID'];
        }
        if (isset($map['ServiceManaged'])) {
            $model->serviceManaged = $map['ServiceManaged'];
        }
        if (isset($map['QueueNumber'])) {
            $model->queueNumber = $map['QueueNumber'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PrivateIpSets'])) {
            $model->privateIpSets = privateIpSets::fromMap($map['PrivateIpSets']);
        }
        if (isset($map['Ipv6Sets'])) {
            $model->ipv6Sets = ipv6Sets::fromMap($map['Ipv6Sets']);
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['AssociatedPublicIp'])) {
            $model->associatedPublicIp = associatedPublicIp::fromMap($map['AssociatedPublicIp']);
        }
        if (isset($map['Attachment'])) {
            $model->attachment = attachment::fromMap($map['Attachment']);
        }
        if (isset($map['SecurityGroupIds'])) {
            $model->securityGroupIds = securityGroupIds::fromMap($map['SecurityGroupIds']);
        }

        return $model;
    }
}
