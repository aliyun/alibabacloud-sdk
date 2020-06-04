<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoInfoResponse\video\thumbnailList;

use AlibabaCloud\Tea\Model;

class thumbnail extends Model {
    protected $_name = [
        'URL' => 'URL',
    ];
    public function validate() {
        Model::validateRequired('URL', $this->URL, true);
    }
    public function toMap() {
        $res = [];
        $res['URL'] = $this->URL;
        return $res;
    }
    /**
     * @param array $map
     * @return thumbnail
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['URL'])){
            $model->URL = $map['URL'];
        }
        return $model;
    }
    /**
     * @description url
     * @var string
     */
    public $URL;

}
