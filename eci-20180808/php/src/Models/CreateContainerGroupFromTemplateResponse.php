<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\Models;

use AlibabaCloud\Tea\Model;

class CreateContainerGroupFromTemplateResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.containerGroupId
     *
     * @var string
     */
    public $containerGroupId;
    protected $_name = [
        'requestId'        => 'RequestId',
        'containerGroupId' => 'ContainerGroupId',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('containerGroupId', $this->containerGroupId, true);
    }

    public function toMap()
    {
        $res                     = [];
        $res['RequestId']        = $this->requestId;
        $res['ContainerGroupId'] = $this->containerGroupId;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateContainerGroupFromTemplateResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ContainerGroupId'])) {
            $model->containerGroupId = $map['ContainerGroupId'];
        }

        return $model;
    }
}
