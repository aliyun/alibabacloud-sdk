<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutMetricRuleTargetsResponse\failData\targets;

use AlibabaCloud\Tea\Model;

class target extends Model
{
    /**
     * @description id
     *
     * @var string
     */
    public $id;

    /**
     * @description arn
     *
     * @var string
     */
    public $arn;

    /**
     * @description level
     *
     * @var string
     */
    public $level;
    protected $_name = [
        'id'    => 'Id',
        'arn'   => 'Arn',
        'level' => 'Level',
    ];

    public function validate()
    {
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('arn', $this->arn, true);
        Model::validateRequired('level', $this->level, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return target
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        return $model;
    }
}
