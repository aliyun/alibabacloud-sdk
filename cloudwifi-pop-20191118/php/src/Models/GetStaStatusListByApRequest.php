<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudwifipop\V20191118\Models;

use AlibabaCloud\Tea\Model;

class GetStaStatusListByApRequest extends Model
{
    /**
     * @description appKey
     *
     * @var string
     */
    public $appName;

    /**
     * @description appSecret
     *
     * @var string
     */
    public $appCode;

    /**
     * @description cursor
     *
     * @var int
     */
    public $cursor;

    /**
     * @description pageSize
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description apMac
     *
     * @var string
     */
    public $apMac;
    protected $_name = [
        'appName'  => 'AppName',
        'appCode'  => 'AppCode',
        'cursor'   => 'Cursor',
        'pageSize' => 'PageSize',
        'apMac'    => 'ApMac',
    ];

    public function validate()
    {
        Model::validateRequired('appName', $this->appName, true);
        Model::validateRequired('appCode', $this->appCode, true);
        Model::validateRequired('cursor', $this->cursor, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('apMac', $this->apMac, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }
        if (null !== $this->cursor) {
            $res['Cursor'] = $this->cursor;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->apMac) {
            $res['ApMac'] = $this->apMac;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStaStatusListByApRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }
        if (isset($map['Cursor'])) {
            $model->cursor = $map['Cursor'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ApMac'])) {
            $model->apMac = $map['ApMac'];
        }

        return $model;
    }
}
