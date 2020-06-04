<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\container;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\container\livenessProbe\httpGet;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\container\livenessProbe\exec;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\container\livenessProbe\tcpSocket;

class livenessProbe extends Model {
    protected $_name = [
        'httpGet' => 'HttpGet',
        'initialDelaySeconds' => 'InitialDelaySeconds',
        'periodSeconds' => 'PeriodSeconds',
        'successThreshold' => 'SuccessThreshold',
        'failureThreshold' => 'FailureThreshold',
        'timeoutSeconds' => 'TimeoutSeconds',
        'exec' => 'Exec',
        'tcpSocket' => 'TcpSocket',
    ];
    public function validate() {
        Model::validateRequired('httpGet', $this->httpGet, true);
        Model::validateRequired('exec', $this->exec, true);
        Model::validateRequired('tcpSocket', $this->tcpSocket, true);
    }
    public function toMap() {
        $res = [];
        $res['HttpGet'] = null !== $this->httpGet ? $this->httpGet->toMap() : null;
        $res['InitialDelaySeconds'] = $this->initialDelaySeconds;
        $res['PeriodSeconds'] = $this->periodSeconds;
        $res['SuccessThreshold'] = $this->successThreshold;
        $res['FailureThreshold'] = $this->failureThreshold;
        $res['TimeoutSeconds'] = $this->timeoutSeconds;
        $res['Exec'] = null !== $this->exec ? $this->exec->toMap() : null;
        $res['TcpSocket'] = null !== $this->tcpSocket ? $this->tcpSocket->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return livenessProbe
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['HttpGet'])){
            $model->httpGet = httpGet::fromMap($map['HttpGet']);
        }
        if(isset($map['InitialDelaySeconds'])){
            $model->initialDelaySeconds = $map['InitialDelaySeconds'];
        }
        if(isset($map['PeriodSeconds'])){
            $model->periodSeconds = $map['PeriodSeconds'];
        }
        if(isset($map['SuccessThreshold'])){
            $model->successThreshold = $map['SuccessThreshold'];
        }
        if(isset($map['FailureThreshold'])){
            $model->failureThreshold = $map['FailureThreshold'];
        }
        if(isset($map['TimeoutSeconds'])){
            $model->timeoutSeconds = $map['TimeoutSeconds'];
        }
        if(isset($map['Exec'])){
            $model->exec = exec::fromMap($map['Exec']);
        }
        if(isset($map['TcpSocket'])){
            $model->tcpSocket = tcpSocket::fromMap($map['TcpSocket']);
        }
        return $model;
    }
    /**
     * @description HttpGet
     * @var httpGet
     */
    public $httpGet;

    /**
     * @description livenessProbeInitialDelaySeconds
     * @var integer
     */
    public $initialDelaySeconds;

    /**
     * @description livenessProbePeriodSeconds
     * @var integer
     */
    public $periodSeconds;

    /**
     * @description livenessProbeSuccessThreshold
     * @var integer
     */
    public $successThreshold;

    /**
     * @description livenessProbeFailureThreshold
     * @var integer
     */
    public $failureThreshold;

    /**
     * @description livenessProbeTimeoutSeconds
     * @var integer
     */
    public $timeoutSeconds;

    /**
     * @description Exec
     * @var exec
     */
    public $exec;

    /**
     * @description TcpSocket
     * @var tcpSocket
     */
    public $tcpSocket;

}
