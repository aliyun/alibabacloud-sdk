<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Kms;

use AlibabaCloud\Tea\Model;

class GetSecretValueRequest extends Model
{
    /**
     * @description SecretName
     *
     * @var string
     */
    public $secretName;
    /**
     * @description VersionStage
     *
     * @var string
     */
    public $versionStage;
    /**
     * @description VersionId
     *
     * @var string
     */
    public $versionId;
    protected $_name = [
        'secretName'   => 'SecretName',
        'versionStage' => 'VersionStage',
        'versionId'    => 'VersionId',
    ];

    public function validate()
    {
        Model::validateRequired('secretName', $this->secretName, true);
    }

    public function toMap()
    {
        $res                 = [];
        $res['SecretName']   = $this->secretName;
        $res['VersionStage'] = $this->versionStage;
        $res['VersionId']    = $this->versionId;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSecretValueRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }
        if (isset($map['VersionStage'])) {
            $model->versionStage = $map['VersionStage'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
