<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponse\mediaList;
use AlibabaCloud\Tea\Model;

class SearchMediaResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.scrollToken
     *
     * @var string
     */
    public $scrollToken;

    /**
     * @description data.total
     *
     * @var int
     */
    public $total;

    /**
     * @description data.mediaDTOList
     *
     * @var array
     */
    public $mediaList;
    protected $_name = [
        'requestId'   => 'RequestId',
        'scrollToken' => 'ScrollToken',
        'total'       => 'Total',
        'mediaList'   => 'MediaList',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('scrollToken', $this->scrollToken, true);
        Model::validateRequired('total', $this->total, true);
        Model::validateRequired('mediaList', $this->mediaList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scrollToken) {
            $res['ScrollToken'] = $this->scrollToken;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->mediaList) {
            $res['MediaList'] = [];
            if (null !== $this->mediaList && \is_array($this->mediaList)) {
                $n = 0;
                foreach ($this->mediaList as $item) {
                    $res['MediaList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchMediaResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScrollToken'])) {
            $model->scrollToken = $map['ScrollToken'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['MediaList'])) {
            if (!empty($map['MediaList'])) {
                $model->mediaList = [];
                $n                = 0;
                foreach ($map['MediaList'] as $item) {
                    $model->mediaList[$n++] = null !== $item ? mediaList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
