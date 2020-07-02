<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDeploymentResponse;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDeploymentResponse\data\deployment;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description deployment
     *
     * @var deployment
     */
    public $deployment;
    protected $_name = [
        'deployment' => 'Deployment',
    ];

    public function validate()
    {
        Model::validateRequired('deployment', $this->deployment, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deployment) {
            $res['Deployment'] = null !== $this->deployment ? $this->deployment->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Deployment'])) {
            $model->deployment = deployment::fromMap($map['Deployment']);
        }

        return $model;
    }
}
