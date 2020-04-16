<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Kms\ListSecretVersionIdsResponse;

use AlibabaCloud\Tea\Model;

class versionIds extends Model
{
    /**
     * @description VersionId
     *
     * @var array
     */
    public $versionId;
    protected $_name = [
        'versionId' => 'VersionId',
    ];

    public function validate()
    {
        Model::validateRequired('versionId', $this->versionId, true);
    }

    public function toMap()
    {
        $res              = [];
        $res['VersionId'] = [];
        if (null !== $this->versionId && \is_array($this->versionId)) {
            $n = 0;
            foreach ($this->versionId as $item) {
                $res['VersionId'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return versionIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VersionId'])) {
            if (!empty($map['VersionId'])) {
                $model->versionId = [];
                $n                = 0;
                foreach ($map['VersionId'] as $item) {
                    $model->versionId[$n++] = null !== $item ? ListSecretVersionIdsResponse\versionIds\versionId::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
