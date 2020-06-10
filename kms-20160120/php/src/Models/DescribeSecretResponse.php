<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeSecretResponse\tags;
use AlibabaCloud\Tea\Model;

class DescribeSecretResponse extends Model
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
     * @description SecretName
     *
     * @var string
     */
    public $secretName;

    /**
     * @description EncryptionKeyId
     *
     * @var string
     */
    public $encryptionKeyId;

    /**
     * @description Description
     *
     * @var string
     */
    public $description;

    /**
     * @description CreateTime
     *
     * @var string
     */
    public $createTime;

    /**
     * @description UpdateTime
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description PlannedDeleteTime
     *
     * @var string
     */
    public $plannedDeleteTime;

    /**
     * @description Tags
     *
     * @var tags
     */
    public $tags;
    protected $_name = [
        'requestId'         => 'RequestId',
        'arn'               => 'Arn',
        'secretName'        => 'SecretName',
        'encryptionKeyId'   => 'EncryptionKeyId',
        'description'       => 'Description',
        'createTime'        => 'CreateTime',
        'updateTime'        => 'UpdateTime',
        'plannedDeleteTime' => 'PlannedDeleteTime',
        'tags'              => 'Tags',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('arn', $this->arn, true);
        Model::validateRequired('secretName', $this->secretName, true);
        Model::validateRequired('encryptionKeyId', $this->encryptionKeyId, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('updateTime', $this->updateTime, true);
        Model::validateRequired('plannedDeleteTime', $this->plannedDeleteTime, true);
        Model::validateRequired('tags', $this->tags, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }
        if (null !== $this->secretName) {
            $res['SecretName'] = $this->secretName;
        }
        if (null !== $this->encryptionKeyId) {
            $res['EncryptionKeyId'] = $this->encryptionKeyId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->plannedDeleteTime) {
            $res['PlannedDeleteTime'] = $this->plannedDeleteTime;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSecretResponse
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
        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }
        if (isset($map['EncryptionKeyId'])) {
            $model->encryptionKeyId = $map['EncryptionKeyId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['PlannedDeleteTime'])) {
            $model->plannedDeleteTime = $map['PlannedDeleteTime'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
