<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListMediaDNADeleteJobResponse;

use AlibabaCloud\Tea\Model;

class nonExistAIJobIds extends Model {
    protected $_name = [
        'string' => 'String',
    ];
    public function validate() {
        Model::validateRequired('string', $this->string, true);
    }
    public function toMap() {
        $res = [];
        $res['String'] = [];
        if(null !== $this->string){
            $res['String'] = $this->string;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return nonExistAIJobIds
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['String'])){
            if(!empty($map['String'])){
                $model->string = [];
                $model->string = $map['String'];
            }
        }
        return $model;
    }
    /**
     * @description String
     * @var array
     */
    public $string;

}
