<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainBpsDataResponse;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainBpsDataResponse\bpsDataPerInterval\dataModule;
use AlibabaCloud\Tea\Model;

class bpsDataPerInterval extends Model
{
    /**
     * @description DataModule
     *
     * @var array
     */
    public $dataModule;
    protected $_name = [
        'dataModule' => 'DataModule',
    ];

    public function validate()
    {
        Model::validateRequired('dataModule', $this->dataModule, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataModule) {
            $res['DataModule'] = [];
            if (null !== $this->dataModule && \is_array($this->dataModule)) {
                $n = 0;
                foreach ($this->dataModule as $item) {
                    $res['DataModule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bpsDataPerInterval
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataModule'])) {
            if (!empty($map['DataModule'])) {
                $model->dataModule = [];
                $n                 = 0;
                foreach ($map['DataModule'] as $item) {
                    $model->dataModule[$n++] = null !== $item ? dataModule::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
