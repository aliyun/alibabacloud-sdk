<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNetworkAclsResponse\networkAcls\networkAcl\egressAclEntries;

use AlibabaCloud\Tea\Model;

class egressAclEntry extends Model
{
    /**
     * @var string
     */
    public $networkAclEntryId;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $destinationCidrIp;

    /**
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $entryType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $networkAclEntryName;
    protected $_name = [
        'networkAclEntryId'   => 'NetworkAclEntryId',
        'policy'              => 'Policy',
        'protocol'            => 'Protocol',
        'destinationCidrIp'   => 'DestinationCidrIp',
        'port'                => 'Port',
        'entryType'           => 'EntryType',
        'description'         => 'Description',
        'networkAclEntryName' => 'NetworkAclEntryName',
    ];

    public function validate()
    {
        Model::validateRequired('networkAclEntryId', $this->networkAclEntryId, true);
        Model::validateRequired('policy', $this->policy, true);
        Model::validateRequired('protocol', $this->protocol, true);
        Model::validateRequired('destinationCidrIp', $this->destinationCidrIp, true);
        Model::validateRequired('port', $this->port, true);
        Model::validateRequired('entryType', $this->entryType, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('networkAclEntryName', $this->networkAclEntryName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkAclEntryId) {
            $res['NetworkAclEntryId'] = $this->networkAclEntryId;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->destinationCidrIp) {
            $res['DestinationCidrIp'] = $this->destinationCidrIp;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->entryType) {
            $res['EntryType'] = $this->entryType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->networkAclEntryName) {
            $res['NetworkAclEntryName'] = $this->networkAclEntryName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return egressAclEntry
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkAclEntryId'])) {
            $model->networkAclEntryId = $map['NetworkAclEntryId'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['DestinationCidrIp'])) {
            $model->destinationCidrIp = $map['DestinationCidrIp'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['EntryType'])) {
            $model->entryType = $map['EntryType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['NetworkAclEntryName'])) {
            $model->networkAclEntryName = $map['NetworkAclEntryName'];
        }

        return $model;
    }
}
