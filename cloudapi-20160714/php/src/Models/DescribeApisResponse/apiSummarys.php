<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisResponse;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisResponse\apiSummarys\apiSummary;
use AlibabaCloud\Tea\Model;

class apiSummarys extends Model
{
    /**
     * @description ApiSummary
     *
     * @var array
     */
    public $apiSummary;
    protected $_name = [
        'apiSummary' => 'ApiSummary',
    ];

    public function validate()
    {
        Model::validateRequired('apiSummary', $this->apiSummary, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiSummary) {
            $res['ApiSummary'] = [];
            if (null !== $this->apiSummary && \is_array($this->apiSummary)) {
                $n = 0;
                foreach ($this->apiSummary as $item) {
                    $res['ApiSummary'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiSummarys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiSummary'])) {
            if (!empty($map['ApiSummary'])) {
                $model->apiSummary = [];
                $n                 = 0;
                foreach ($map['ApiSummary'] as $item) {
                    $model->apiSummary[$n++] = null !== $item ? apiSummary::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
