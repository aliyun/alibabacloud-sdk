<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetMetaDBInfoRequest extends Model
{
    /**
     * @description appGuid
     *
     * @var string
     */
    public $appGuid;
    protected $_name = [
        'appGuid' => 'AppGuid',
    ];

    public function validate()
    {
        Model::validateRequired('appGuid', $this->appGuid, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appGuid) {
            $res['AppGuid'] = $this->appGuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMetaDBInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppGuid'])) {
            $model->appGuid = $map['AppGuid'];
        }

        return $model;
    }
}
