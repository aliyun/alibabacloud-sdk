<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\SDK\Kms\V20160120\Models\PutSecretValueResponse\versionStages;
use AlibabaCloud\Tea\Model;

class PutSecretValueResponse extends Model
{
    /**
     * @description RequestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description SecretName
     *
     * @var string
     */
    public $secretName;

    /**
     * @description VersionId
     *
     * @var string
     */
    public $versionId;

    /**
     * @description VersionStages
     *
     * @var PutSecretValueResponse.versionStages
     */
    public $versionStages;
    protected $_name = [
        'requestId'     => 'RequestId',
        'secretName'    => 'SecretName',
        'versionId'     => 'VersionId',
        'versionStages' => 'VersionStages',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('secretName', $this->secretName, true);
        Model::validateRequired('versionId', $this->versionId, true);
        Model::validateRequired('versionStages', $this->versionStages, true);
    }

    public function toMap()
    {
        $res                  = [];
        $res['RequestId']     = $this->requestId;
        $res['SecretName']    = $this->secretName;
        $res['VersionId']     = $this->versionId;
        $res['VersionStages'] = null !== $this->versionStages ? $this->versionStages->toMap() : null;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutSecretValueResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }
        if (isset($map['VersionStages'])) {
            $model->versionStages = versionStages::fromMap($map['VersionStages']);
        }

        return $model;
    }
}
