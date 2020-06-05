<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySendDetailsResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySendDetailsResponse\smsSendDetailDTOs\smsSendDetailDTO;

class smsSendDetailDTOs extends Model {
    protected $_name = [
        'smsSendDetailDTO' => 'SmsSendDetailDTO',
    ];
    public function validate() {
        Model::validateRequired('smsSendDetailDTO', $this->smsSendDetailDTO, true);
    }
    public function toMap() {
        $res = [];
        $res['SmsSendDetailDTO'] = [];
        if(null !== $this->smsSendDetailDTO && is_array($this->smsSendDetailDTO)){
            $n = 0;
            foreach($this->smsSendDetailDTO as $item){
                $res['SmsSendDetailDTO'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return smsSendDetailDTOs
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['SmsSendDetailDTO'])){
            if(!empty($map['SmsSendDetailDTO'])){
                $model->smsSendDetailDTO = [];
                $n = 0;
                foreach($map['SmsSendDetailDTO'] as $item) {
                    $model->smsSendDetailDTO[$n++] = null !== $item ? smsSendDetailDTO::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description SmsSendDetailDTO
     * @var array
     */
    public $smsSendDetailDTO;

}
