<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\GetDhcpOptionsSetResponse;

use AlibabaCloud\Tea\Model;

class associateVpcs extends Model
{
    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $associateStatus;
    protected $_name = [
        'vpcId'           => 'VpcId',
        'associateStatus' => 'AssociateStatus',
    ];

    public function validate()
    {
        Model::validateRequired('vpcId', $this->vpcId, true);
        Model::validateRequired('associateStatus', $this->associateStatus, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->associateStatus) {
            $res['AssociateStatus'] = $this->associateStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return associateVpcs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['AssociateStatus'])) {
            $model->associateStatus = $map['AssociateStatus'];
        }

        return $model;
    }
}
