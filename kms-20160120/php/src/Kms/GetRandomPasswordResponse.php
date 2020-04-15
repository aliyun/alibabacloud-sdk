<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Kms;

use AlibabaCloud\Tea\Model;

class GetRandomPasswordResponse extends Model
{
    /**
     * @description RequestId
     *
     * @var string
     */
    public $requestId;
    /**
     * @description RandomPassword
     *
     * @var string
     */
    public $randomPassword;
    protected $_name = [
        'requestId'      => 'RequestId',
        'randomPassword' => 'RandomPassword',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('randomPassword', $this->randomPassword, true);
    }

    public function toMap()
    {
        $res                   = [];
        $res['RequestId']      = $this->requestId;
        $res['RandomPassword'] = $this->randomPassword;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRandomPasswordResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RandomPassword'])) {
            $model->randomPassword = $map['RandomPassword'];
        }

        return $model;
    }
}
