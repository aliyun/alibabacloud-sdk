<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Kms;

use AlibabaCloud\Tea\Model;

class PutSecretValueRequest extends Model
{
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

    /**
     * @description SecretData
     *
     * @var string
     */
    public $secretData;

    /**
     * @description SecretDataType
     *
     * @var string
     */
    public $secretDataType;

    /**
     * @description VersionStages
     *
     * @var string
     */
    public $versionStages;
    protected $_name = [
        'versionId'      => 'VersionId',
        'secretName'     => 'SecretName',
        'secretData'     => 'SecretData',
        'secretDataType' => 'SecretDataType',
        'versionStages'  => 'VersionStages',
    ];

    public function validate()
    {
        Model::validateRequired('versionId', $this->versionId, true);
        Model::validateRequired('secretName', $this->secretName, true);
        Model::validateRequired('secretData', $this->secretData, true);
    }

    public function toMap()
    {
        $res                   = [];
        $res['VersionId']      = $this->versionId;
        $res['SecretName']     = $this->secretName;
        $res['SecretData']     = $this->secretData;
        $res['SecretDataType'] = $this->secretDataType;
        $res['VersionStages']  = $this->versionStages;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutSecretValueRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }
        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }
        if (isset($map['SecretData'])) {
            $model->secretData = $map['SecretData'];
        }
        if (isset($map['SecretDataType'])) {
            $model->secretDataType = $map['SecretDataType'];
        }
        if (isset($map['VersionStages'])) {
            $model->versionStages = $map['VersionStages'];
        }

        return $model;
    }
}
