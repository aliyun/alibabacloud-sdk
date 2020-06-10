<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\ListSecretsResponse\secretList;

use AlibabaCloud\SDK\Kms\V20160120\Models\ListSecretsResponse\secretList\secret\tags;
use AlibabaCloud\Tea\Model;

class secret extends Model
{
    /**
     * @description SecretName
     *
     * @var string
     */
    public $secretName;

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
        'secretName'        => 'SecretName',
        'createTime'        => 'CreateTime',
        'updateTime'        => 'UpdateTime',
        'plannedDeleteTime' => 'PlannedDeleteTime',
        'tags'              => 'Tags',
    ];

    public function validate()
    {
        Model::validateRequired('secretName', $this->secretName, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('updateTime', $this->updateTime, true);
        Model::validateRequired('plannedDeleteTime', $this->plannedDeleteTime, true);
        Model::validateRequired('tags', $this->tags, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->secretName) {
            $res['SecretName'] = $this->secretName;
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
     * @return secret
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
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
