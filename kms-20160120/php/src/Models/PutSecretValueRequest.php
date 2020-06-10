<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

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
        $res = [];
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }
        if (null !== $this->secretName) {
            $res['SecretName'] = $this->secretName;
        }
        if (null !== $this->secretData) {
            $res['SecretData'] = $this->secretData;
        }
        if (null !== $this->secretDataType) {
            $res['SecretDataType'] = $this->secretDataType;
        }
        if (null !== $this->versionStages) {
            $res['VersionStages'] = $this->versionStages;
        }

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
