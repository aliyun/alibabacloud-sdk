<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20200212\ImageSearch;

use AlibabaCloud\SDK\ImageSearch\V20200212\ImageSearch\SearchImageByNameResponse\head;
use AlibabaCloud\SDK\ImageSearch\V20200212\ImageSearch\SearchImageByNameResponse\picInfo;
use AlibabaCloud\Tea\Model;

class SearchImageByNameResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description success
     *
     * @var bool
     */
    public $success;

    /**
     * @description code
     *
     * @var int
     */
    public $code;

    /**
     * @description msg
     *
     * @var string
     */
    public $msg;

    /**
     * @description auctions
     *
     * @var array
     */
    public $auctions;

    /**
     * @description head
     *
     * @var SearchImageByNameResponse.head
     */
    public $head;

    /**
     * @description picInfo
     *
     * @var SearchImageByNameResponse.picInfo
     */
    public $picInfo;
    protected $_name = [
        'requestId' => 'RequestId',
        'success'   => 'Success',
        'code'      => 'Code',
        'msg'       => 'Msg',
        'auctions'  => 'Auctions',
        'head'      => 'Head',
        'picInfo'   => 'PicInfo',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('msg', $this->msg, true);
        Model::validateRequired('auctions', $this->auctions, true);
        Model::validateRequired('head', $this->head, true);
        Model::validateRequired('picInfo', $this->picInfo, true);
    }

    public function toMap()
    {
        $res              = [];
        $res['RequestId'] = $this->requestId;
        $res['Success']   = $this->success;
        $res['Code']      = $this->code;
        $res['Msg']       = $this->msg;
        $res['Auctions']  = [];
        if (null !== $this->auctions && \is_array($this->auctions)) {
            $n = 0;
            foreach ($this->auctions as $item) {
                $res['Auctions'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['Head']    = null !== $this->head ? $this->head->toMap() : null;
        $res['PicInfo'] = null !== $this->picInfo ? $this->picInfo->toMap() : null;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchImageByNameResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }
        if (isset($map['Auctions'])) {
            if (!empty($map['Auctions'])) {
                $model->auctions = [];
                $n               = 0;
                foreach ($map['Auctions'] as $item) {
                    $model->auctions[$n++] = null !== $item ? \AlibabaCloud\SDK\ImageSearch\V20200212\ImageSearch\SearchImageByNameResponse\auctions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Head'])) {
            $model->head = SearchImageByNameResponse . head::fromMap($map['Head']);
        }
        if (isset($map['PicInfo'])) {
            $model->picInfo = SearchImageByNameResponse . picInfo::fromMap($map['PicInfo']);
        }

        return $model;
    }
}
