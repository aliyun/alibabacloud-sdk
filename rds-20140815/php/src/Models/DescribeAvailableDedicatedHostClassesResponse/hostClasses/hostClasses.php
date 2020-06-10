<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableDedicatedHostClassesResponse\hostClasses;

use AlibabaCloud\Tea\Model;

class hostClasses extends Model
{
    /**
     * @description hostClassName
     *
     * @var string
     */
    public $hostClassName;

    /**
     * @description description
     *
     * @var string
     */
    public $description;
    protected $_name = [
        'hostClassName' => 'HostClassName',
        'description'   => 'Description',
    ];

    public function validate()
    {
        Model::validateRequired('hostClassName', $this->hostClassName, true);
        Model::validateRequired('description', $this->description, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostClassName) {
            $res['HostClassName'] = $this->hostClassName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hostClasses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostClassName'])) {
            $model->hostClassName = $map['HostClassName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
