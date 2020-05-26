<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateEstimateCostRequest\parameters;
use AlibabaCloud\Tea\Model;

class GetTemplateEstimateCostRequest extends Model
{
    /**
     * @description TemplateURL
     *
     * @var string
     */
    public $templateURL;

    /**
     * @description RegionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Parameters
     *
     * @var array
     */
    public $parameters;

    /**
     * @description TemplateBody
     *
     * @var string
     */
    public $templateBody;

    /**
     * @description ClientToken
     *
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'templateURL'  => 'TemplateURL',
        'regionId'     => 'RegionId',
        'parameters'   => 'Parameters',
        'templateBody' => 'TemplateBody',
        'clientToken'  => 'ClientToken',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res                = [];
        $res['TemplateURL'] = $this->templateURL;
        $res['RegionId']    = $this->regionId;
        $res['Parameters']  = [];
        if (null !== $this->parameters && \is_array($this->parameters)) {
            $n = 0;
            foreach ($this->parameters as $item) {
                $res['Parameters'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['TemplateBody'] = $this->templateBody;
        $res['ClientToken']  = $this->clientToken;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTemplateEstimateCostRequest
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
        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                $n                 = 0;
                foreach ($map['Parameters'] as $item) {
                    $model->parameters[$n++] = null !== $item ? parameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TemplateBody'])) {
            $model->templateBody = $map['TemplateBody'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
