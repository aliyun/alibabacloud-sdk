<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudwifipop\V20191118\Models;

use AlibabaCloud\Tea\Model;

class GetRadioRunHistoryTimeSerRequest extends Model
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
     * @description start
     *
     * @var int
     */
    public $start;

    /**
     * @description apMac
     *
     * @var string
     */
    public $apMac;

    /**
     * @description end
     *
     * @var int
     */
    public $end;
    protected $_name = [
        'appName' => 'AppName',
        'appCode' => 'AppCode',
        'start'   => 'Start',
        'apMac'   => 'ApMac',
        'end'     => 'End',
    ];

    public function validate()
    {
        Model::validateRequired('appName', $this->appName, true);
        Model::validateRequired('appCode', $this->appCode, true);
        Model::validateRequired('start', $this->start, true);
        Model::validateRequired('apMac', $this->apMac, true);
        Model::validateRequired('end', $this->end, true);
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
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }
        if (null !== $this->apMac) {
            $res['ApMac'] = $this->apMac;
        }
        if (null !== $this->end) {
            $res['End'] = $this->end;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRadioRunHistoryTimeSerRequest
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
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }
        if (isset($map['ApMac'])) {
            $model->apMac = $map['ApMac'];
        }
        if (isset($map['End'])) {
            $model->end = $map['End'];
        }

        return $model;
    }
}
