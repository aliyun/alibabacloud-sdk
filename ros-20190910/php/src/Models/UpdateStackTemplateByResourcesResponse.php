<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class UpdateStackTemplateByResourcesResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $oldTemplateBody;

    /**
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
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->oldTemplateBody) {
            $res['OldTemplateBody'] = $this->oldTemplateBody;
        }
        if (null !== $this->newTemplateBody) {
            $res['NewTemplateBody'] = $this->newTemplateBody;
        }

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
