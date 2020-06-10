<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\ListAITemplateResponse\templateInfoList;
use AlibabaCloud\Tea\Model;

class ListAITemplateResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.templateInfoList
     *
     * @var array
     */
    public $templateInfoList;
    protected $_name = [
        'requestId'        => 'RequestId',
        'templateInfoList' => 'TemplateInfoList',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('templateInfoList', $this->templateInfoList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->templateInfoList) {
            $res['TemplateInfoList'] = [];
            if (null !== $this->templateInfoList && \is_array($this->templateInfoList)) {
                $n = 0;
                foreach ($this->templateInfoList as $item) {
                    $res['TemplateInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAITemplateResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TemplateInfoList'])) {
            if (!empty($map['TemplateInfoList'])) {
                $model->templateInfoList = [];
                $n                       = 0;
                foreach ($map['TemplateInfoList'] as $item) {
                    $model->templateInfoList[$n++] = null !== $item ? templateInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
