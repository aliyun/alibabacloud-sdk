<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleTargetsResponse\failedContactParameters;

use AlibabaCloud\Tea\Model;

class contactParameter extends Model
{
    /**
     * @description id
     *
     * @var int
     */
    public $id;

    /**
     * @description contactGroupName
     *
     * @var string
     */
    public $contactGroupName;

    /**
     * @description level
     *
     * @var string
     */
    public $level;
    protected $_name = [
        'id'               => 'Id',
        'contactGroupName' => 'ContactGroupName',
        'level'            => 'Level',
    ];

    public function validate()
    {
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('contactGroupName', $this->contactGroupName, true);
        Model::validateRequired('level', $this->level, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->contactGroupName) {
            $res['ContactGroupName'] = $this->contactGroupName;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contactParameter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ContactGroupName'])) {
            $model->contactGroupName = $map['ContactGroupName'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        return $model;
    }
}
