<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNetworkAclAttributesResponse\networkAclAttribute\ingressAclEntries;

use AlibabaCloud\Tea\Model;

class ingressAclEntry extends Model
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
    public $sourceCidrIp;

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
    public $networkAclEntryName;

    /**
     * @var string
     */
    public $description;
    protected $_name = [
        'networkAclEntryId'   => 'NetworkAclEntryId',
        'policy'              => 'Policy',
        'protocol'            => 'Protocol',
        'sourceCidrIp'        => 'SourceCidrIp',
        'port'                => 'Port',
        'entryType'           => 'EntryType',
        'networkAclEntryName' => 'NetworkAclEntryName',
        'description'         => 'Description',
    ];

    public function validate()
    {
        Model::validateRequired('networkAclEntryId', $this->networkAclEntryId, true);
        Model::validateRequired('policy', $this->policy, true);
        Model::validateRequired('protocol', $this->protocol, true);
        Model::validateRequired('sourceCidrIp', $this->sourceCidrIp, true);
        Model::validateRequired('port', $this->port, true);
        Model::validateRequired('entryType', $this->entryType, true);
        Model::validateRequired('networkAclEntryName', $this->networkAclEntryName, true);
        Model::validateRequired('description', $this->description, true);
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
        if (null !== $this->sourceCidrIp) {
            $res['SourceCidrIp'] = $this->sourceCidrIp;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->entryType) {
            $res['EntryType'] = $this->entryType;
        }
        if (null !== $this->networkAclEntryName) {
            $res['NetworkAclEntryName'] = $this->networkAclEntryName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ingressAclEntry
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
        if (isset($map['SourceCidrIp'])) {
            $model->sourceCidrIp = $map['SourceCidrIp'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['EntryType'])) {
            $model->entryType = $map['EntryType'];
        }
        if (isset($map['NetworkAclEntryName'])) {
            $model->networkAclEntryName = $map['NetworkAclEntryName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
