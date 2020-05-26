<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GetResourceTypeTemplateResponse extends Model
{
    /**
     * @description RequestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description TemplateBody
     *
     * @var array
     */
    public $templateBody;
    protected $_name = [
        'requestId'    => 'RequestId',
        'templateBody' => 'TemplateBody',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('templateBody', $this->templateBody, true);
    }

    public function toMap()
    {
        $res                 = [];
        $res['RequestId']    = $this->requestId;
        $res['TemplateBody'] = $this->templateBody;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetResourceTypeTemplateResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TemplateBody'])) {
            $model->templateBody = $map['TemplateBody'];
        }

        return $model;
    }
}
