<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultDetailResponse\mediaAuditResultDetail;

use AlibabaCloud\Tea\Model;

class list_ extends Model {
    protected $_name = [
        'pornLabel' => 'PornLabel',
        'pornScore' => 'PornScore',
        'terrorismLabel' => 'TerrorismLabel',
        'terrorismScore' => 'TerrorismScore',
        'timestamp' => 'Timestamp',
        'url' => 'Url',
        'adLabel' => 'AdLabel',
        'adScore' => 'AdScore',
        'liveLabel' => 'LiveLabel',
        'liveScore' => 'LiveScore',
        'logoLabel' => 'LogoLabel',
        'logoScore' => 'LogoScore',
    ];
    public function validate() {
        Model::validateRequired('pornLabel', $this->pornLabel, true);
        Model::validateRequired('pornScore', $this->pornScore, true);
        Model::validateRequired('terrorismLabel', $this->terrorismLabel, true);
        Model::validateRequired('terrorismScore', $this->terrorismScore, true);
        Model::validateRequired('timestamp', $this->timestamp, true);
        Model::validateRequired('url', $this->url, true);
        Model::validateRequired('adLabel', $this->adLabel, true);
        Model::validateRequired('adScore', $this->adScore, true);
        Model::validateRequired('liveLabel', $this->liveLabel, true);
        Model::validateRequired('liveScore', $this->liveScore, true);
        Model::validateRequired('logoLabel', $this->logoLabel, true);
        Model::validateRequired('logoScore', $this->logoScore, true);
    }
    public function toMap() {
        $res = [];
        $res['PornLabel'] = $this->pornLabel;
        $res['PornScore'] = $this->pornScore;
        $res['TerrorismLabel'] = $this->terrorismLabel;
        $res['TerrorismScore'] = $this->terrorismScore;
        $res['Timestamp'] = $this->timestamp;
        $res['Url'] = $this->url;
        $res['AdLabel'] = $this->adLabel;
        $res['AdScore'] = $this->adScore;
        $res['LiveLabel'] = $this->liveLabel;
        $res['LiveScore'] = $this->liveScore;
        $res['LogoLabel'] = $this->logoLabel;
        $res['LogoScore'] = $this->logoScore;
        return $res;
    }
    /**
     * @param array $map
     * @return list
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['PornLabel'])){
            $model->pornLabel = $map['PornLabel'];
        }
        if(isset($map['PornScore'])){
            $model->pornScore = $map['PornScore'];
        }
        if(isset($map['TerrorismLabel'])){
            $model->terrorismLabel = $map['TerrorismLabel'];
        }
        if(isset($map['TerrorismScore'])){
            $model->terrorismScore = $map['TerrorismScore'];
        }
        if(isset($map['Timestamp'])){
            $model->timestamp = $map['Timestamp'];
        }
        if(isset($map['Url'])){
            $model->url = $map['Url'];
        }
        if(isset($map['AdLabel'])){
            $model->adLabel = $map['AdLabel'];
        }
        if(isset($map['AdScore'])){
            $model->adScore = $map['AdScore'];
        }
        if(isset($map['LiveLabel'])){
            $model->liveLabel = $map['LiveLabel'];
        }
        if(isset($map['LiveScore'])){
            $model->liveScore = $map['LiveScore'];
        }
        if(isset($map['LogoLabel'])){
            $model->logoLabel = $map['LogoLabel'];
        }
        if(isset($map['LogoScore'])){
            $model->logoScore = $map['LogoScore'];
        }
        return $model;
    }
    /**
     * @description pornLabel
     * @var string
     */
    public $pornLabel;

    /**
     * @description pornScore
     * @var string
     */
    public $pornScore;

    /**
     * @description terrorismLabel
     * @var string
     */
    public $terrorismLabel;

    /**
     * @description terrorismScore
     * @var string
     */
    public $terrorismScore;

    /**
     * @description timestamp
     * @var string
     */
    public $timestamp;

    /**
     * @description url
     * @var string
     */
    public $url;

    /**
     * @description adLabel
     * @var string
     */
    public $adLabel;

    /**
     * @description adScore
     * @var string
     */
    public $adScore;

    /**
     * @description liveLabel
     * @var string
     */
    public $liveLabel;

    /**
     * @description liveScore
     * @var string
     */
    public $liveScore;

    /**
     * @description logoLabel
     * @var string
     */
    public $logoLabel;

    /**
     * @description logoScore
     * @var string
     */
    public $logoScore;

}
