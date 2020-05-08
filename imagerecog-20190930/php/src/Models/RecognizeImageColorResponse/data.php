<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeImageColorResponse;

use AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeImageColorResponse\data\colorTemplateList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description colorTemplateList
     *
     * @var array
     */
    public $colorTemplateList;
    protected $_name = [
        'colorTemplateList' => 'ColorTemplateList',
    ];

    public function validate()
    {
        Model::validateRequired('colorTemplateList', $this->colorTemplateList, true);
    }

    public function toMap()
    {
        $res                      = [];
        $res['ColorTemplateList'] = [];
        if (null !== $this->colorTemplateList && \is_array($this->colorTemplateList)) {
            $n = 0;
            foreach ($this->colorTemplateList as $item) {
                $res['ColorTemplateList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['ColorTemplateList'])) {
            if (!empty($map['ColorTemplateList'])) {
                $model->colorTemplateList = [];
                $n                        = 0;
                foreach ($map['ColorTemplateList'] as $item) {
                    $model->colorTemplateList[$n++] = null !== $item ? colorTemplateList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
