<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateDiskRequest;

use AlibabaCloud\Tea\Model;

class arn extends Model
{
    /**
     * @var int
     */
    public $assumeRoleFor;

    /**
     * @var string
     */
    public $rolearn;

    /**
     * @var string
     */
    public $roleType;
    protected $_name = [
        'assumeRoleFor' => 'AssumeRoleFor',
        'rolearn'       => 'Rolearn',
        'roleType'      => 'RoleType',
    ];

    public function validate()
    {
        Model::validateRequired('assumeRoleFor', $this->assumeRoleFor, true);
        Model::validateRequired('rolearn', $this->rolearn, true);
        Model::validateRequired('roleType', $this->roleType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assumeRoleFor) {
            $res['AssumeRoleFor'] = $this->assumeRoleFor;
        }
        if (null !== $this->rolearn) {
            $res['Rolearn'] = $this->rolearn;
        }
        if (null !== $this->roleType) {
            $res['RoleType'] = $this->roleType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return arn
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssumeRoleFor'])) {
            $model->assumeRoleFor = $map['AssumeRoleFor'];
        }
        if (isset($map['Rolearn'])) {
            $model->rolearn = $map['Rolearn'];
        }
        if (isset($map['RoleType'])) {
            $model->roleType = $map['RoleType'];
        }

        return $model;
    }
}
