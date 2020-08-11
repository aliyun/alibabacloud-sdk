<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CopyNetworkAclEntriesRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $networkAclId;

    /**
     * @var string
     */
    public $sourceNetworkAclId;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'regionId'           => 'RegionId',
        'networkAclId'       => 'NetworkAclId',
        'sourceNetworkAclId' => 'SourceNetworkAclId',
        'clientToken'        => 'ClientToken',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('networkAclId', $this->networkAclId, true);
        Model::validateRequired('sourceNetworkAclId', $this->sourceNetworkAclId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->networkAclId) {
            $res['NetworkAclId'] = $this->networkAclId;
        }
        if (null !== $this->sourceNetworkAclId) {
            $res['SourceNetworkAclId'] = $this->sourceNetworkAclId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CopyNetworkAclEntriesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['NetworkAclId'])) {
            $model->networkAclId = $map['NetworkAclId'];
        }
        if (isset($map['SourceNetworkAclId'])) {
            $model->sourceNetworkAclId = $map['SourceNetworkAclId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
