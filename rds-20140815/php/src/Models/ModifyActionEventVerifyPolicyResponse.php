<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyActionEventVerifyPolicyResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description data.serverPublicKey
     *
     * @var string
     */
    public $serverPublicKey;
    protected $_name = [
        'requestId'       => 'RequestId',
        'regionId'        => 'RegionId',
        'serverPublicKey' => 'ServerPublicKey',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('serverPublicKey', $this->serverPublicKey, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->serverPublicKey) {
            $res['ServerPublicKey'] = $this->serverPublicKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyActionEventVerifyPolicyResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ServerPublicKey'])) {
            $model->serverPublicKey = $map['ServerPublicKey'];
        }

        return $model;
    }
}
