<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Kms\ListSecretVersionIdsResponse\versionIds;

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
     * @var array
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
        $res['VersionStages'] = [];
        if (null !== $this->versionStages && \is_array($this->versionStages)) {
            $n = 0;
            foreach ($this->versionStages as $item) {
                $res['VersionStages'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }

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
            if (!empty($map['VersionStages'])) {
                $model->versionStages = [];
                $n                    = 0;
                foreach ($map['VersionStages'] as $item) {
                    $model->versionStages[$n++] = null !== $item ? ListSecretVersionIdsResponse\versionIds\versionId\versionStages::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
