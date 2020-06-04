<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vcs\V20200515\Models\GetMonitorResultResponse\data;

use AlibabaCloud\Tea\Model;

class records extends Model {
    protected $_name = [
        'rightBottomY' => 'RightBottomY',
        'rightBottomX' => 'RightBottomX',
        'leftUpY' => 'LeftUpY',
        'leftUpX' => 'LeftUpX',
        'gbId' => 'GbId',
        'score' => 'Score',
        'picUrl' => 'PicUrl',
        'shotTime' => 'ShotTime',
        'monitorPicUrl' => 'MonitorPicUrl',
    ];
    public function validate() {
        Model::validateRequired('rightBottomY', $this->rightBottomY, true);
        Model::validateRequired('rightBottomX', $this->rightBottomX, true);
        Model::validateRequired('leftUpY', $this->leftUpY, true);
        Model::validateRequired('leftUpX', $this->leftUpX, true);
        Model::validateRequired('gbId', $this->gbId, true);
        Model::validateRequired('score', $this->score, true);
        Model::validateRequired('picUrl', $this->picUrl, true);
        Model::validateRequired('shotTime', $this->shotTime, true);
        Model::validateRequired('monitorPicUrl', $this->monitorPicUrl, true);
    }
    public function toMap() {
        $res = [];
        $res['RightBottomY'] = $this->rightBottomY;
        $res['RightBottomX'] = $this->rightBottomX;
        $res['LeftUpY'] = $this->leftUpY;
        $res['LeftUpX'] = $this->leftUpX;
        $res['GbId'] = $this->gbId;
        $res['Score'] = $this->score;
        $res['PicUrl'] = $this->picUrl;
        $res['ShotTime'] = $this->shotTime;
        $res['MonitorPicUrl'] = $this->monitorPicUrl;
        return $res;
    }
    /**
     * @param array $map
     * @return records
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RightBottomY'])){
            $model->rightBottomY = $map['RightBottomY'];
        }
        if(isset($map['RightBottomX'])){
            $model->rightBottomX = $map['RightBottomX'];
        }
        if(isset($map['LeftUpY'])){
            $model->leftUpY = $map['LeftUpY'];
        }
        if(isset($map['LeftUpX'])){
            $model->leftUpX = $map['LeftUpX'];
        }
        if(isset($map['GbId'])){
            $model->gbId = $map['GbId'];
        }
        if(isset($map['Score'])){
            $model->score = $map['Score'];
        }
        if(isset($map['PicUrl'])){
            $model->picUrl = $map['PicUrl'];
        }
        if(isset($map['ShotTime'])){
            $model->shotTime = $map['ShotTime'];
        }
        if(isset($map['MonitorPicUrl'])){
            $model->monitorPicUrl = $map['MonitorPicUrl'];
        }
        return $model;
    }
    /**
     * @description yxjyzb
     * @var string
     */
    public $rightBottomY;

    /**
     * @description yxjxzb
     * @var string
     */
    public $rightBottomX;

    /**
     * @description zsjyzb
     * @var string
     */
    public $leftUpY;

    /**
     * @description zsjxzb
     * @var string
     */
    public $leftUpX;

    /**
     * @description sxtid
     * @var string
     */
    public $gbId;

    /**
     * @description xsd
     * @var string
     */
    public $score;

    /**
     * @description cjtid
     * @var string
     */
    public $picUrl;

    /**
     * @description bdsj
     * @var string
     */
    public $shotTime;

    /**
     * @description bktid
     * @var string
     */
    public $monitorPicUrl;

}
