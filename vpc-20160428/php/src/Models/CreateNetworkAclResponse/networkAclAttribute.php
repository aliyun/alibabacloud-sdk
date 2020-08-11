<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\CreateNetworkAclResponse;

use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateNetworkAclResponse\networkAclAttribute\egressAclEntries;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateNetworkAclResponse\networkAclAttribute\ingressAclEntries;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateNetworkAclResponse\networkAclAttribute\resources;
use AlibabaCloud\Tea\Model;

class networkAclAttribute extends Model
{
    /**
     * @var string
     */
    public $networkAclId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $networkAclName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var ingressAclEntries
     */
    public $ingressAclEntries;

    /**
     * @var egressAclEntries
     */
    public $egressAclEntries;

    /**
     * @var resources
     */
    public $resources;
    protected $_name = [
        'networkAclId'      => 'NetworkAclId',
        'regionId'          => 'RegionId',
        'networkAclName'    => 'NetworkAclName',
        'description'       => 'Description',
        'vpcId'             => 'VpcId',
        'creationTime'      => 'CreationTime',
        'status'            => 'Status',
        'ingressAclEntries' => 'IngressAclEntries',
        'egressAclEntries'  => 'EgressAclEntries',
        'resources'         => 'Resources',
    ];

    public function validate()
    {
        Model::validateRequired('networkAclId', $this->networkAclId, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('networkAclName', $this->networkAclName, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('vpcId', $this->vpcId, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('ingressAclEntries', $this->ingressAclEntries, true);
        Model::validateRequired('egressAclEntries', $this->egressAclEntries, true);
        Model::validateRequired('resources', $this->resources, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkAclId) {
            $res['NetworkAclId'] = $this->networkAclId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->networkAclName) {
            $res['NetworkAclName'] = $this->networkAclName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->ingressAclEntries) {
            $res['IngressAclEntries'] = null !== $this->ingressAclEntries ? $this->ingressAclEntries->toMap() : null;
        }
        if (null !== $this->egressAclEntries) {
            $res['EgressAclEntries'] = null !== $this->egressAclEntries ? $this->egressAclEntries->toMap() : null;
        }
        if (null !== $this->resources) {
            $res['Resources'] = null !== $this->resources ? $this->resources->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkAclAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkAclId'])) {
            $model->networkAclId = $map['NetworkAclId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['NetworkAclName'])) {
            $model->networkAclName = $map['NetworkAclName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['IngressAclEntries'])) {
            $model->ingressAclEntries = ingressAclEntries::fromMap($map['IngressAclEntries']);
        }
        if (isset($map['EgressAclEntries'])) {
            $model->egressAclEntries = egressAclEntries::fromMap($map['EgressAclEntries']);
        }
        if (isset($map['Resources'])) {
            $model->resources = resources::fromMap($map['Resources']);
        }

        return $model;
    }
}
