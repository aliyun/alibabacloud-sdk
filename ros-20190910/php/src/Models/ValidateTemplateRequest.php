<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class ValidateTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $templateURL;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $templateBody;
    protected $_name = [
        'templateURL'  => 'TemplateURL',
        'regionId'     => 'RegionId',
        'templateBody' => 'TemplateBody',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->templateURL) {
            $res['TemplateURL'] = $this->templateURL;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->templateBody) {
            $res['TemplateBody'] = $this->templateBody;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ValidateTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TemplateURL'])) {
            $model->templateURL = $map['TemplateURL'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TemplateBody'])) {
            $model->templateBody = $map['TemplateBody'];
        }

        return $model;
    }
}
