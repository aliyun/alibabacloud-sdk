<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Kms;

use AlibabaCloud\Tea\Model;

class UpdateSecretVersionStageResponse extends Model
{
    /**
     * @description SecretName
     *
     * @var string
     */
    public $secretName;

    /**
     * @description RequestId
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'secretName' => 'SecretName',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
        Model::validateRequired('secretName', $this->secretName, true);
        Model::validateRequired('requestId', $this->requestId, true);
    }

    public function toMap()
    {
        $res               = [];
        $res['SecretName'] = $this->secretName;
        $res['RequestId']  = $this->requestId;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSecretVersionStageResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
