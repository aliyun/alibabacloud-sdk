<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetBaselineKeyPathRequest extends Model
{
    /**
     * @description baselineId
     *
     * @var int
     */
    public $baselineId;

    /**
     * @description bizdate
     *
     * @var string
     */
    public $bizdate;

    /**
     * @description inGroupId
     *
     * @var int
     */
    public $inGroupId;
    protected $_name = [
        'baselineId' => 'BaselineId',
        'bizdate'    => 'Bizdate',
        'inGroupId'  => 'InGroupId',
    ];

    public function validate()
    {
        Model::validateRequired('baselineId', $this->baselineId, true);
        Model::validateRequired('bizdate', $this->bizdate, true);
        Model::validateRequired('inGroupId', $this->inGroupId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baselineId) {
            $res['BaselineId'] = $this->baselineId;
        }
        if (null !== $this->bizdate) {
            $res['Bizdate'] = $this->bizdate;
        }
        if (null !== $this->inGroupId) {
            $res['InGroupId'] = $this->inGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBaselineKeyPathRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaselineId'])) {
            $model->baselineId = $map['BaselineId'];
        }
        if (isset($map['Bizdate'])) {
            $model->bizdate = $map['Bizdate'];
        }
        if (isset($map['InGroupId'])) {
            $model->inGroupId = $map['InGroupId'];
        }

        return $model;
    }
}
