<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Kms;

use AlibabaCloud\Tea\Model;

class CreateSecretResponse extends Model
{
    /**
     * @description RequestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Arn
     *
     * @var string
     */
    public $arn;

    /**
     * @description VersionId
     *
     * @var string
     */
    public $versionId;

    /**
     * @description SecretName
     *
     * @var string
     */
    public $secretName;
    protected $_name = [
        'requestId'  => 'RequestId',
        'arn'        => 'Arn',
        'versionId'  => 'VersionId',
        'secretName' => 'SecretName',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('arn', $this->arn, true);
        Model::validateRequired('versionId', $this->versionId, true);
        Model::validateRequired('secretName', $this->secretName, true);
    }

    public function toMap()
    {
        $res               = [];
        $res['RequestId']  = $this->requestId;
        $res['Arn']        = $this->arn;
        $res['VersionId']  = $this->versionId;
        $res['SecretName'] = $this->secretName;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSecretResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }
        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }

        return $model;
    }
}
