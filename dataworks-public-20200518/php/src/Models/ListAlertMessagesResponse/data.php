<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListAlertMessagesResponse;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListAlertMessagesResponse\data\alertMessages;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description pageNumber
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description pageSize
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description totalCount
     *
     * @var string
     */
    public $totalCount;

    /**
     * @description data
     *
     * @var array
     */
    public $alertMessages;
    protected $_name = [
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'totalCount'    => 'TotalCount',
        'alertMessages' => 'AlertMessages',
    ];

    public function validate()
    {
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('alertMessages', $this->alertMessages, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->alertMessages) {
            $res['AlertMessages'] = [];
            if (null !== $this->alertMessages && \is_array($this->alertMessages)) {
                $n = 0;
                foreach ($this->alertMessages as $item) {
                    $res['AlertMessages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['AlertMessages'])) {
            if (!empty($map['AlertMessages'])) {
                $model->alertMessages = [];
                $n                    = 0;
                foreach ($map['AlertMessages'] as $item) {
                    $model->alertMessages[$n++] = null !== $item ? alertMessages::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
