<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableZonesResponse\availableZones\supportedEngines\supportedEngineVersions;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableZonesResponse\availableZones\supportedEngines\supportedEngineVersions\supportedCategorys\supportedStorageTypes;

class supportedCategorys extends Model {
    protected $_name = [
        'category' => 'Category',
        'supportedStorageTypes' => 'SupportedStorageTypes',
    ];
    public function validate() {
        Model::validateRequired('category', $this->category, true);
        Model::validateRequired('supportedStorageTypes', $this->supportedStorageTypes, true);
    }
    public function toMap() {
        $res = [];
        $res['Category'] = $this->category;
        $res['SupportedStorageTypes'] = [];
        if(null !== $this->supportedStorageTypes && is_array($this->supportedStorageTypes)){
            $n = 0;
            foreach($this->supportedStorageTypes as $item){
                $res['SupportedStorageTypes'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return supportedCategorys
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Category'])){
            $model->category = $map['Category'];
        }
        if(isset($map['SupportedStorageTypes'])){
            if(!empty($map['SupportedStorageTypes'])){
                $model->supportedStorageTypes = [];
                $n = 0;
                foreach($map['SupportedStorageTypes'] as $item) {
                    $model->supportedStorageTypes[$n++] = null !== $item ? supportedStorageTypes::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description category
     * @var string
     */
    public $category;

    /**
     * @description storageTypes
     * @var array
     */
    public $supportedStorageTypes;

}
