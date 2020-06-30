<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20200212\ImageSearch\SearchImageByNameResponse;

use AlibabaCloud\Tea\Model;

class head extends Model
{
    /**
     * @description docsReturn
     *
     * @var int
     */
    public $docsReturn;

    /**
     * @description docsFound
     *
     * @var int
     */
    public $docsFound;

    /**
     * @description searchTime
     *
     * @var int
     */
    public $searchTime;
    protected $_name = [
        'docsReturn' => 'DocsReturn',
        'docsFound'  => 'DocsFound',
        'searchTime' => 'SearchTime',
    ];

    public function validate()
    {
        Model::validateRequired('docsReturn', $this->docsReturn, true);
        Model::validateRequired('docsFound', $this->docsFound, true);
        Model::validateRequired('searchTime', $this->searchTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->docsReturn) {
            $res['DocsReturn'] = $this->docsReturn;
        }
        if (null !== $this->docsFound) {
            $res['DocsFound'] = $this->docsFound;
        }
        if (null !== $this->searchTime) {
            $res['SearchTime'] = $this->searchTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return head
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DocsReturn'])) {
            $model->docsReturn = $map['DocsReturn'];
        }
        if (isset($map['DocsFound'])) {
            $model->docsFound = $map['DocsFound'];
        }
        if (isset($map['SearchTime'])) {
            $model->searchTime = $map['SearchTime'];
        }

        return $model;
    }
}
