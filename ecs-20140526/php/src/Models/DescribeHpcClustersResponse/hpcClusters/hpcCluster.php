<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeHpcClustersResponse\hpcClusters;

use AlibabaCloud\Tea\Model;

class hpcCluster extends Model
{
    /**
     * @var string
     */
    public $hpcClusterId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;
    protected $_name = [
        'hpcClusterId' => 'HpcClusterId',
        'name'         => 'Name',
        'description'  => 'Description',
    ];

    public function validate()
    {
        Model::validateRequired('hpcClusterId', $this->hpcClusterId, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('description', $this->description, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hpcClusterId) {
            $res['HpcClusterId'] = $this->hpcClusterId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hpcCluster
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HpcClusterId'])) {
            $model->hpcClusterId = $map['HpcClusterId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
