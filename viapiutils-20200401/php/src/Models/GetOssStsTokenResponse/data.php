<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapiutils\V20200401\Models\GetOssStsTokenResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description accessKeyId
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * @description accessKeySecret
     *
     * @var string
     */
    public $accessKeySecret;

    /**
     * @description securityToken
     *
     * @var string
     */
    public $securityToken;

    /**
     * @description script
     *
     * @var string
     */
    public $script;
    protected $_name = [
        'accessKeyId'     => 'AccessKeyId',
        'accessKeySecret' => 'AccessKeySecret',
        'securityToken'   => 'SecurityToken',
        'script'          => 'Script',
    ];

    public function validate()
    {
        Model::validateRequired('accessKeyId', $this->accessKeyId, true);
        Model::validateRequired('accessKeySecret', $this->accessKeySecret, true);
        Model::validateRequired('securityToken', $this->securityToken, true);
        Model::validateRequired('script', $this->script, true);
    }

    public function toMap()
    {
        $res                    = [];
        $res['AccessKeyId']     = $this->accessKeyId;
        $res['AccessKeySecret'] = $this->accessKeySecret;
        $res['SecurityToken']   = $this->securityToken;
        $res['Script']          = $this->script;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['AccessKeySecret'])) {
            $model->accessKeySecret = $map['AccessKeySecret'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['Script'])) {
            $model->script = $map['Script'];
        }

        return $model;
    }
}
