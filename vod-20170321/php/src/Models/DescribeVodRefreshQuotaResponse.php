<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DescribeVodRefreshQuotaResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'urlQuota' => 'UrlQuota',
        'dirQuota' => 'DirQuota',
        'urlRemain' => 'UrlRemain',
        'dirRemain' => 'DirRemain',
        'preloadQuota' => 'PreloadQuota',
        'blockQuota' => 'BlockQuota',
        'preloadRemain' => 'PreloadRemain',
        'blockRemain' => 'blockRemain',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('urlQuota', $this->urlQuota, true);
        Model::validateRequired('dirQuota', $this->dirQuota, true);
        Model::validateRequired('urlRemain', $this->urlRemain, true);
        Model::validateRequired('dirRemain', $this->dirRemain, true);
        Model::validateRequired('preloadQuota', $this->preloadQuota, true);
        Model::validateRequired('blockQuota', $this->blockQuota, true);
        Model::validateRequired('preloadRemain', $this->preloadRemain, true);
        Model::validateRequired('blockRemain', $this->blockRemain, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['UrlQuota'] = $this->urlQuota;
        $res['DirQuota'] = $this->dirQuota;
        $res['UrlRemain'] = $this->urlRemain;
        $res['DirRemain'] = $this->dirRemain;
        $res['PreloadQuota'] = $this->preloadQuota;
        $res['BlockQuota'] = $this->blockQuota;
        $res['PreloadRemain'] = $this->preloadRemain;
        $res['blockRemain'] = $this->blockRemain;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeVodRefreshQuotaResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['UrlQuota'])){
            $model->urlQuota = $map['UrlQuota'];
        }
        if(isset($map['DirQuota'])){
            $model->dirQuota = $map['DirQuota'];
        }
        if(isset($map['UrlRemain'])){
            $model->urlRemain = $map['UrlRemain'];
        }
        if(isset($map['DirRemain'])){
            $model->dirRemain = $map['DirRemain'];
        }
        if(isset($map['PreloadQuota'])){
            $model->preloadQuota = $map['PreloadQuota'];
        }
        if(isset($map['BlockQuota'])){
            $model->blockQuota = $map['BlockQuota'];
        }
        if(isset($map['PreloadRemain'])){
            $model->preloadRemain = $map['PreloadRemain'];
        }
        if(isset($map['blockRemain'])){
            $model->blockRemain = $map['blockRemain'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.urlQuota
     * @var string
     */
    public $urlQuota;

    /**
     * @description data.dirQuota
     * @var string
     */
    public $dirQuota;

    /**
     * @description data.urlRemain
     * @var string
     */
    public $urlRemain;

    /**
     * @description data.dirRemain
     * @var string
     */
    public $dirRemain;

    /**
     * @description data.preloadQuota
     * @var string
     */
    public $preloadQuota;

    /**
     * @description data.blockQuota
     * @var string
     */
    public $blockQuota;

    /**
     * @description data.preloadRemain
     * @var string
     */
    public $preloadRemain;

    /**
     * @description data.blockRemain
     * @var string
     */
    public $blockRemain;

}
