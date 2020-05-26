<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\ListChangeSetsResponse\changeSets;
use AlibabaCloud\Tea\Model;

class ListChangeSetsResponse extends Model
{
    /**
     * @description PageNumber
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description PageSize
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description RequestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description TotalCount
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description ChangeSets
     *
     * @var array
     */
    public $changeSets;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
        'changeSets' => 'ChangeSets',
    ];

    public function validate()
    {
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('changeSets', $this->changeSets, true);
    }

    public function toMap()
    {
        $res               = [];
        $res['PageNumber'] = $this->pageNumber;
        $res['PageSize']   = $this->pageSize;
        $res['RequestId']  = $this->requestId;
        $res['TotalCount'] = $this->totalCount;
        $res['ChangeSets'] = [];
        if (null !== $this->changeSets && \is_array($this->changeSets)) {
            $n = 0;
            foreach ($this->changeSets as $item) {
                $res['ChangeSets'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListChangeSetsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['ChangeSets'])) {
            if (!empty($map['ChangeSets'])) {
                $model->changeSets = [];
                $n                 = 0;
                foreach ($map['ChangeSets'] as $item) {
                    $model->changeSets[$n++] = null !== $item ? changeSets::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
