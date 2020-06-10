<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\SDK\Kms\V20160120\Models\GetSecretValueResponse\versionStages;
use AlibabaCloud\Tea\Model;

class GetSecretValueResponse extends Model
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
     * @description CreateTime
     *
     * @var string
     */
    public $createTime;

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
     * @var versionStages
     */
    public $versionStages;
    protected $_name = [
        'requestId'      => 'RequestId',
        'secretName'     => 'SecretName',
        'versionId'      => 'VersionId',
        'createTime'     => 'CreateTime',
        'secretData'     => 'SecretData',
        'secretDataType' => 'SecretDataType',
        'versionStages'  => 'VersionStages',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('secretName', $this->secretName, true);
        Model::validateRequired('versionId', $this->versionId, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('secretData', $this->secretData, true);
        Model::validateRequired('secretDataType', $this->secretDataType, true);
        Model::validateRequired('versionStages', $this->versionStages, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->secretName) {
            $res['SecretName'] = $this->secretName;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->secretData) {
            $res['SecretData'] = $this->secretData;
        }
        if (null !== $this->secretDataType) {
            $res['SecretDataType'] = $this->secretDataType;
        }
        if (null !== $this->versionStages) {
            $res['VersionStages'] = null !== $this->versionStages ? $this->versionStages->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSecretValueResponse
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['SecretData'])) {
            $model->secretData = $map['SecretData'];
        }
        if (isset($map['SecretDataType'])) {
            $model->secretDataType = $map['SecretDataType'];
        }
        if (isset($map['VersionStages'])) {
            $model->versionStages = versionStages::fromMap($map['VersionStages']);
        }

        return $model;
    }
}
