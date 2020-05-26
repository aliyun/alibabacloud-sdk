<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class UpdateStackTemplateByResourcesResponse extends Model
{
    /**
     * @description RequestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description OldTemplateBody
     *
     * @var string
     */
    public $oldTemplateBody;

    /**
     * @description NewTemplateBody
     *
     * @var string
     */
    public $newTemplateBody;
    protected $_name = [
        'requestId'       => 'RequestId',
        'oldTemplateBody' => 'OldTemplateBody',
        'newTemplateBody' => 'NewTemplateBody',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('oldTemplateBody', $this->oldTemplateBody, true);
        Model::validateRequired('newTemplateBody', $this->newTemplateBody, true);
    }

    public function toMap()
    {
        $res                    = [];
        $res['RequestId']       = $this->requestId;
        $res['OldTemplateBody'] = $this->oldTemplateBody;
        $res['NewTemplateBody'] = $this->newTemplateBody;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateStackTemplateByResourcesResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['OldTemplateBody'])) {
            $model->oldTemplateBody = $map['OldTemplateBody'];
        }
        if (isset($map['NewTemplateBody'])) {
            $model->newTemplateBody = $map['NewTemplateBody'];
        }

        return $model;
    }
}
