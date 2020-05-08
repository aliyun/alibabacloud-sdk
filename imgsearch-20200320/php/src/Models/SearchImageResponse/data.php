<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imgsearch\V20200320\Models\SearchImageResponse;

use AlibabaCloud\SDK\Imgsearch\V20200320\Models\SearchImageResponse\data\matchList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description matchList
     *
     * @var array
     */
    public $matchList;
    protected $_name = [
        'matchList' => 'MatchList',
    ];

    public function validate()
    {
        Model::validateRequired('matchList', $this->matchList, true);
    }

    public function toMap()
    {
        $res              = [];
        $res['MatchList'] = [];
        if (null !== $this->matchList && \is_array($this->matchList)) {
            $n = 0;
            foreach ($this->matchList as $item) {
                $res['MatchList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['MatchList'])) {
            if (!empty($map['MatchList'])) {
                $model->matchList = [];
                $n                = 0;
                foreach ($map['MatchList'] as $item) {
                    $model->matchList[$n++] = null !== $item ? matchList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
