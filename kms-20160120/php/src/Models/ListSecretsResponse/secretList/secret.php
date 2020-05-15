<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\ListSecretsResponse\secretList;

use AlibabaCloud\SDK\Kms\V20160120\Models\secret\tags;
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
        $res                      = [];
        $res['SecretName']        = $this->secretName;
        $res['CreateTime']        = $this->createTime;
        $res['UpdateTime']        = $this->updateTime;
        $res['PlannedDeleteTime'] = $this->plannedDeleteTime;
        $res['Tags']              = null !== $this->tags ? $this->tags->toMap() : null;

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
