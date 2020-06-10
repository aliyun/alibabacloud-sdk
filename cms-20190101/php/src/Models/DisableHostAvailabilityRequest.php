<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DisableHostAvailabilityRequest extends Model
{
    /**
     * @description idListJson
     *
     * @var array
     */
    public $id;
    protected $_name = [
        'id' => 'Id',
    ];

    public function validate()
    {
        Model::validateRequired('id', $this->id, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = [];
            if (null !== $this->id) {
                $res['Id'] = $this->id;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DisableHostAvailabilityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            if (!empty($map['Id'])) {
                $model->id = [];
                $model->id = $map['Id'];
            }
        }

        return $model;
    }
}
