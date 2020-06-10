<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePurchasedApisResponse;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePurchasedApisResponse\purchasedApis\purchasedApi;
use AlibabaCloud\Tea\Model;

class purchasedApis extends Model
{
    /**
     * @description PurchasedApi
     *
     * @var array
     */
    public $purchasedApi;
    protected $_name = [
        'purchasedApi' => 'PurchasedApi',
    ];

    public function validate()
    {
        Model::validateRequired('purchasedApi', $this->purchasedApi, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->purchasedApi) {
            $res['PurchasedApi'] = [];
            if (null !== $this->purchasedApi && \is_array($this->purchasedApi)) {
                $n = 0;
                foreach ($this->purchasedApi as $item) {
                    $res['PurchasedApi'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return purchasedApis
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PurchasedApi'])) {
            if (!empty($map['PurchasedApi'])) {
                $model->purchasedApi = [];
                $n                   = 0;
                foreach ($map['PurchasedApi'] as $item) {
                    $model->purchasedApi[$n++] = null !== $item ? purchasedApi::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
