<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListSnapshotsResponse\mediaSnapshot\snapshots;

use AlibabaCloud\Tea\Model;

class snapshot extends Model {
    protected $_name = [
        'index' => 'Index',
        'url' => 'Url',
    ];
    public function validate() {
        Model::validateRequired('index', $this->index, true);
        Model::validateRequired('url', $this->url, true);
    }
    public function toMap() {
        $res = [];
        $res['Index'] = $this->index;
        $res['Url'] = $this->url;
        return $res;
    }
    /**
     * @param array $map
     * @return snapshot
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Index'])){
            $model->index = $map['Index'];
        }
        if(isset($map['Url'])){
            $model->url = $map['Url'];
        }
        return $model;
    }
    /**
     * @description index
     * @var integer
     */
    public $index;

    /**
     * @description url
     * @var string
     */
    public $url;

}
