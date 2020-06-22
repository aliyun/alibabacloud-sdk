<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribePricingModuleResponse\data\moduleList\module;

use AlibabaCloud\Tea\Model;

class configList extends Model
{
    /**
     * @description ConfigList
     *
     * @var array
     */
    public $configList;
    protected $_name = [
        'configList' => 'ConfigList',
    ];

    public function validate()
    {
        Model::validateRequired('configList', $this->configList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configList) {
            $res['ConfigList'] = [];
            if (null !== $this->configList) {
                $res['ConfigList'] = $this->configList;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigList'])) {
            if (!empty($map['ConfigList'])) {
                $model->configList = [];
                $model->configList = $map['ConfigList'];
            }
        }

        return $model;
    }
}
