<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListClusterFromGrafanaResponse\promClusterList;
use AlibabaCloud\Tea\Model;

class ListClusterFromGrafanaResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data
     *
     * @var array
     */
    public $promClusterList;
    protected $_name = [
        'requestId'       => 'RequestId',
        'promClusterList' => 'PromClusterList',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('promClusterList', $this->promClusterList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->promClusterList) {
            $res['PromClusterList'] = [];
            if (null !== $this->promClusterList && \is_array($this->promClusterList)) {
                $n = 0;
                foreach ($this->promClusterList as $item) {
                    $res['PromClusterList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListClusterFromGrafanaResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PromClusterList'])) {
            if (!empty($map['PromClusterList'])) {
                $model->promClusterList = [];
                $n                      = 0;
                foreach ($map['PromClusterList'] as $item) {
                    $model->promClusterList[$n++] = null !== $item ? promClusterList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
