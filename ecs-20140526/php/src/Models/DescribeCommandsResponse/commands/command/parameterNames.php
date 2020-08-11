<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCommandsResponse\commands\command;

use AlibabaCloud\Tea\Model;

class parameterNames extends Model
{
    /**
     * @description ParameterName
     *
     * @var array
     */
    public $parameterName;
    protected $_name = [
        'parameterName' => 'ParameterName',
    ];

    public function validate()
    {
        Model::validateRequired('parameterName', $this->parameterName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parameterName) {
            $res['ParameterName'] = $this->parameterName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parameterNames
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParameterName'])) {
            if (!empty($map['ParameterName'])) {
                $model->parameterName = $map['ParameterName'];
            }
        }

        return $model;
    }
}
