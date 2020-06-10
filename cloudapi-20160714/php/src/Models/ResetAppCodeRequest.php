<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class ResetAppCodeRequest extends Model
{
    /**
     * @description securityToken
     *
     * @var string
     */
    public $securityToken;

    /**
     * @description accessKeyId
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * @description appCode
     *
     * @var string
     */
    public $appCode;
    protected $_name = [
        'securityToken' => 'SecurityToken',
        'accessKeyId'   => 'AccessKeyId',
        'appCode'       => 'AppCode',
    ];

    public function validate()
    {
        Model::validateRequired('appCode', $this->appCode, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResetAppCodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }

        return $model;
    }
}
