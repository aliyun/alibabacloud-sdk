<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\ListSecretVersionIdsResponse\versionIds;

use AlibabaCloud\SDK\Kms\V20160120\Models\ListSecretVersionIdsResponse\versionIds\versionId\versionStages;
use AlibabaCloud\Tea\Model;

class versionId extends Model
{
    /**
     * @description CreateTime
     *
     * @var string
     */
    public $createTime;

    /**
     * @description VersionId
     *
     * @var string
     */
    public $versionId;

    /**
     * @description VersionStages
     *
     * @var versionStages
     */
    public $versionStages;
    protected $_name = [
        'createTime'    => 'CreateTime',
        'versionId'     => 'VersionId',
        'versionStages' => 'VersionStages',
    ];

    public function validate()
    {
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('versionId', $this->versionId, true);
        Model::validateRequired('versionStages', $this->versionStages, true);
    }

    public function toMap()
    {
        $res                  = [];
        $res['CreateTime']    = $this->createTime;
        $res['VersionId']     = $this->versionId;
        $res['VersionStages'] = null !== $this->versionStages ? $this->versionStages->toMap() : null;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return versionId
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
