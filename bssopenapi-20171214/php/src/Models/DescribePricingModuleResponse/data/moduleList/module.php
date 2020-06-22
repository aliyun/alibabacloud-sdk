<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribePricingModuleResponse\data\moduleList;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribePricingModuleResponse\data\moduleList\module\configList;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @description moduleCode
     *
     * @var string
     */
    public $moduleCode;

    /**
     * @description moduleName
     *
     * @var string
     */
    public $moduleName;

    /**
     * @description priceType
     *
     * @var string
     */
    public $priceType;

    /**
     * @description currency
     *
     * @var string
     */
    public $currency;

    /**
     * @description configList
     *
     * @var configList
     */
    public $configList;
    protected $_name = [
        'moduleCode' => 'ModuleCode',
        'moduleName' => 'ModuleName',
        'priceType'  => 'PriceType',
        'currency'   => 'Currency',
        'configList' => 'ConfigList',
    ];

    public function validate()
    {
        Model::validateRequired('moduleCode', $this->moduleCode, true);
        Model::validateRequired('moduleName', $this->moduleName, true);
        Model::validateRequired('priceType', $this->priceType, true);
        Model::validateRequired('currency', $this->currency, true);
        Model::validateRequired('configList', $this->configList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->moduleCode) {
            $res['ModuleCode'] = $this->moduleCode;
        }
        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
        }
        if (null !== $this->priceType) {
            $res['PriceType'] = $this->priceType;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->configList) {
            $res['ConfigList'] = null !== $this->configList ? $this->configList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModuleCode'])) {
            $model->moduleCode = $map['ModuleCode'];
        }
        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }
        if (isset($map['PriceType'])) {
            $model->priceType = $map['PriceType'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['ConfigList'])) {
            $model->configList = configList::fromMap($map['ConfigList']);
        }

        return $model;
    }
}
