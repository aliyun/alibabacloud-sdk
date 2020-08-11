<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class CreateKeyPairResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $keyPairId;

    /**
     * @var string
     */
    public $keyPairName;

    /**
     * @var string
     */
    public $keyPairFingerPrint;

    /**
     * @var string
     */
    public $privateKeyBody;
    protected $_name = [
        'requestId'          => 'RequestId',
        'keyPairId'          => 'KeyPairId',
        'keyPairName'        => 'KeyPairName',
        'keyPairFingerPrint' => 'KeyPairFingerPrint',
        'privateKeyBody'     => 'PrivateKeyBody',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('keyPairId', $this->keyPairId, true);
        Model::validateRequired('keyPairName', $this->keyPairName, true);
        Model::validateRequired('keyPairFingerPrint', $this->keyPairFingerPrint, true);
        Model::validateRequired('privateKeyBody', $this->privateKeyBody, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->keyPairId) {
            $res['KeyPairId'] = $this->keyPairId;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->keyPairFingerPrint) {
            $res['KeyPairFingerPrint'] = $this->keyPairFingerPrint;
        }
        if (null !== $this->privateKeyBody) {
            $res['PrivateKeyBody'] = $this->privateKeyBody;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateKeyPairResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['KeyPairId'])) {
            $model->keyPairId = $map['KeyPairId'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['KeyPairFingerPrint'])) {
            $model->keyPairFingerPrint = $map['KeyPairFingerPrint'];
        }
        if (isset($map['PrivateKeyBody'])) {
            $model->privateKeyBody = $map['PrivateKeyBody'];
        }

        return $model;
    }
}
