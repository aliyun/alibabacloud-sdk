<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\container;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\container\readinessProbe\tcpSocket;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\container\readinessProbe\exec;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\container\readinessProbe\httpGet;

class readinessProbe extends Model {
    protected $_name = [
        'tcpSocket' => 'TcpSocket',
        'exec' => 'Exec',
        'httpGet' => 'HttpGet',
        'initialDelaySeconds' => 'InitialDelaySeconds',
        'periodSeconds' => 'PeriodSeconds',
        'successThreshold' => 'SuccessThreshold',
        'failureThreshold' => 'FailureThreshold',
        'timeoutSeconds' => 'TimeoutSeconds',
    ];
    public function validate() {
        Model::validateRequired('tcpSocket', $this->tcpSocket, true);
        Model::validateRequired('exec', $this->exec, true);
        Model::validateRequired('httpGet', $this->httpGet, true);
    }
    public function toMap() {
        $res = [];
        $res['TcpSocket'] = null !== $this->tcpSocket ? $this->tcpSocket->toMap() : null;
        $res['Exec'] = null !== $this->exec ? $this->exec->toMap() : null;
        $res['HttpGet'] = null !== $this->httpGet ? $this->httpGet->toMap() : null;
        $res['InitialDelaySeconds'] = $this->initialDelaySeconds;
        $res['PeriodSeconds'] = $this->periodSeconds;
        $res['SuccessThreshold'] = $this->successThreshold;
        $res['FailureThreshold'] = $this->failureThreshold;
        $res['TimeoutSeconds'] = $this->timeoutSeconds;
        return $res;
    }
    /**
     * @param array $map
     * @return readinessProbe
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['TcpSocket'])){
            $model->tcpSocket = tcpSocket::fromMap($map['TcpSocket']);
        }
        if(isset($map['Exec'])){
            $model->exec = exec::fromMap($map['Exec']);
        }
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
        return $model;
    }
    /**
     * @description TcpSocket
     * @var tcpSocket
     */
    public $tcpSocket;

    /**
     * @description Exec
     * @var exec
     */
    public $exec;

    /**
     * @description HttpGet
     * @var httpGet
     */
    public $httpGet;

    /**
     * @description readinessProbeInitialDelaySeconds
     * @var integer
     */
    public $initialDelaySeconds;

    /**
     * @description readinessProbePeriodSeconds
     * @var integer
     */
    public $periodSeconds;

    /**
     * @description readinessProbeSuccessThreshold
     * @var integer
     */
    public $successThreshold;

    /**
     * @description readinessProbeFailureThreshold
     * @var integer
     */
    public $failureThreshold;

    /**
     * @description readinessProbeTimeoutSeconds
     * @var integer
     */
    public $timeoutSeconds;

}
