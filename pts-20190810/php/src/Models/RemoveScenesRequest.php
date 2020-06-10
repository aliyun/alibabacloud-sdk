<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190810\Models;

use AlibabaCloud\Tea\Model;

class RemoveScenesRequest extends Model
{
    /**
     * @description sceneIds
     *
     * @var array
     */
    public $sceneIds;
    protected $_name = [
        'sceneIds' => 'SceneIds',
    ];

    public function validate()
    {
        Model::validateRequired('sceneIds', $this->sceneIds, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sceneIds) {
            $res['SceneIds'] = $this->sceneIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveScenesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SceneIds'])) {
            $model->sceneIds = $map['SceneIds'];
        }

        return $model;
    }
}
