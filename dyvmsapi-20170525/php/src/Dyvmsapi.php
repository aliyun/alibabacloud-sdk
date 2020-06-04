<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Dyvmsapi\V20170525;

use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Endpoint\Endpoint;

use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ListRobotTaskCallsRequest;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ListRobotTaskCallsResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\DoRtcNumberAuthRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\DoRtcNumberAuthResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\UndoRtcNumberAuthRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\UndoRtcNumberAuthResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryRtcNumberAuthStatusRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryRtcNumberAuthStatusResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ListOrderedNumbersRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ListOrderedNumbersResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\StartMicroOutboundRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\StartMicroOutboundResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ListOutboundStrategiesRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ListOutboundStrategiesResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\DescribeRecordDataRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\DescribeRecordDataResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryVoipNumberBindInfosRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryVoipNumberBindInfosResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ReportVoipProblemsRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ReportVoipProblemsResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\UnbindNumberAndVoipIdRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\UnbindNumberAndVoipIdResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\BindNumberAndVoipIdRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\BindNumberAndVoipIdResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CancelRobotTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CancelRobotTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\UploadRobotTaskCalledFileRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\UploadRobotTaskCalledFileResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\DeleteRobotTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\DeleteRobotTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\StopRobotTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\StopRobotTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryRobotTaskCallDetailRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryRobotTaskCallDetailResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryRobotv2AllListRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryRobotv2AllListResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryRobotTaskDetailRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryRobotTaskDetailResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryRobotTaskCallListRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryRobotTaskCallListResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\StartRobotTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\StartRobotTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryRobotTaskListRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryRobotTaskListResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CreateRobotTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CreateRobotTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CancelOrderRobotTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CancelOrderRobotTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SmartCallOperateRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SmartCallOperateResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryRobotInfoListRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryRobotInfoListResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\BatchRobotSmartCallRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\BatchRobotSmartCallResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryCallDetailByTaskIdRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryCallDetailByTaskIdResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\GetRtcTokenRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\GetRtcTokenResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\AddRtcAccountRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\AddRtcAccountResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\VoipAddAccountRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\VoipAddAccountResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\VoipGetTokenRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\VoipGetTokenResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SmartCallRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SmartCallResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryCallDetailByCallIdRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryCallDetailByCallIdResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CancelCallRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CancelCallResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClickToDialRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClickToDialResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\IvrCallRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\IvrCallResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SingleCallByVoiceRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SingleCallByVoiceResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SingleCallByTtsRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SingleCallByTtsResponse;

class Dyvmsapi extends Rpc {
    public function __construct($config){
        parent::__construct($config);
        $this->_endpointRule = "central";
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint("dyvmsapi", $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param ListRobotTaskCallsRequest $request
     * @param RuntimeOptions $runtime
     * @return ListRobotTaskCallsResponse
     * @throws \Exception
     */
    public function listRobotTaskCallsWithOptions(ListRobotTaskCallsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ListRobotTaskCallsResponse::fromMap($this->doRequest("ListRobotTaskCalls", "HTTPS", "POST", "2017-05-25", "AK", null, $request, $runtime));
    }

    /**
     * @param ListRobotTaskCallsRequest $request
     * @return ListRobotTaskCallsResponse
     * @throws \Exception
     */
    public function listRobotTaskCalls(ListRobotTaskCallsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->listRobotTaskCallsWithOptions($request, $runtime);
    }

    /**
     * @param DoRtcNumberAuthRequest $request
     * @param RuntimeOptions $runtime
     * @return DoRtcNumberAuthResponse
     * @throws \Exception
     */
    public function doRtcNumberAuthWithOptions(DoRtcNumberAuthRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DoRtcNumberAuthResponse::fromMap($this->doRequest("DoRtcNumberAuth", "HTTPS", "POST", "2017-05-25", "AK", null, $request, $runtime));
    }

    /**
     * @param DoRtcNumberAuthRequest $request
     * @return DoRtcNumberAuthResponse
     * @throws \Exception
     */
    public function doRtcNumberAuth(DoRtcNumberAuthRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->doRtcNumberAuthWithOptions($request, $runtime);
    }

    /**
     * @param UndoRtcNumberAuthRequest $request
     * @param RuntimeOptions $runtime
     * @return UndoRtcNumberAuthResponse
     * @throws \Exception
     */
    public function undoRtcNumberAuthWithOptions(UndoRtcNumberAuthRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UndoRtcNumberAuthResponse::fromMap($this->doRequest("UndoRtcNumberAuth", "HTTPS", "POST", "2017-05-25", "AK", null, $request, $runtime));
    }

    /**
     * @param UndoRtcNumberAuthRequest $request
     * @return UndoRtcNumberAuthResponse
     * @throws \Exception
     */
    public function undoRtcNumberAuth(UndoRtcNumberAuthRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->undoRtcNumberAuthWithOptions($request, $runtime);
    }

    /**
     * @param QueryRtcNumberAuthStatusRequest $request
     * @param RuntimeOptions $runtime
     * @return QueryRtcNumberAuthStatusResponse
     * @throws \Exception
     */
    public function queryRtcNumberAuthStatusWithOptions(QueryRtcNumberAuthStatusRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return QueryRtcNumberAuthStatusResponse::fromMap($this->doRequest("QueryRtcNumberAuthStatus", "HTTPS", "POST", "2017-05-25", "AK", null, $request, $runtime));
    }

    /**
     * @param QueryRtcNumberAuthStatusRequest $request
     * @return QueryRtcNumberAuthStatusResponse
     * @throws \Exception
     */
    public function queryRtcNumberAuthStatus(QueryRtcNumberAuthStatusRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->queryRtcNumberAuthStatusWithOptions($request, $runtime);
    }

    /**
     * @param ListOrderedNumbersRequest $request
     * @param RuntimeOptions $runtime
     * @return ListOrderedNumbersResponse
     * @throws \Exception
     */
    public function listOrderedNumbersWithOptions(ListOrderedNumbersRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ListOrderedNumbersResponse::fromMap($this->doRequest("ListOrderedNumbers", "HTTPS", "POST", "2017-05-25", "AK", null, $request, $runtime));
    }

    /**
     * @param ListOrderedNumbersRequest $request
     * @return ListOrderedNumbersResponse
     * @throws \Exception
     */
    public function listOrderedNumbers(ListOrderedNumbersRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->listOrderedNumbersWithOptions($request, $runtime);
    }

    /**
     * @param StartMicroOutboundRequest $request
     * @param RuntimeOptions $runtime
     * @return StartMicroOutboundResponse
     * @throws \Exception
     */
    public function startMicroOutboundWithOptions(StartMicroOutboundRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return StartMicroOutboundResponse::fromMap($this->doRequest("StartMicroOutbound", "HTTPS", "POST", "2017-05-25", "AK", null, $request, $runtime));
    }

    /**
     * @param StartMicroOutboundRequest $request
     * @return StartMicroOutboundResponse
     * @throws \Exception
     */
    public function startMicroOutbound(StartMicroOutboundRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->startMicroOutboundWithOptions($request, $runtime);
    }

    /**
     * @param ListOutboundStrategiesRequest $request
     * @param RuntimeOptions $runtime
     * @return ListOutboundStrategiesResponse
     * @throws \Exception
     */
    public function listOutboundStrategiesWithOptions(ListOutboundStrategiesRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ListOutboundStrategiesResponse::fromMap($this->doRequest("ListOutboundStrategies", "HTTPS", "POST", "2017-05-25", "AK", null, $request, $runtime));
    }

    /**
     * @param ListOutboundStrategiesRequest $request
     * @return ListOutboundStrategiesResponse
     * @throws \Exception
     */
    public function listOutboundStrategies(ListOutboundStrategiesRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->listOutboundStrategiesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRecordDataRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeRecordDataResponse
     * @throws \Exception
     */
    public function describeRecordDataWithOptions(DescribeRecordDataRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeRecordDataResponse::fromMap($this->doRequest("DescribeRecordData", "HTTPS", "POST", "2017-05-25", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeRecordDataRequest $request
     * @return DescribeRecordDataResponse
     * @throws \Exception
     */
    public function describeRecordData(DescribeRecordDataRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeRecordDataWithOptions($request, $runtime);
    }

    /**
     * @param QueryVoipNumberBindInfosRequest $request
     * @param RuntimeOptions $runtime
     * @return QueryVoipNumberBindInfosResponse
     * @throws \Exception
     */
    public function queryVoipNumberBindInfosWithOptions(QueryVoipNumberBindInfosRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return QueryVoipNumberBindInfosResponse::fromMap($this->doRequest("QueryVoipNumberBindInfos", "HTTPS", "POST", "2017-05-25", "AK", null, $request, $runtime));
    }

    /**
     * @param QueryVoipNumberBindInfosRequest $request
     * @return QueryVoipNumberBindInfosResponse
     * @throws \Exception
     */
    public function queryVoipNumberBindInfos(QueryVoipNumberBindInfosRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->queryVoipNumberBindInfosWithOptions($request, $runtime);
    }

    /**
     * @param ReportVoipProblemsRequest $request
     * @param RuntimeOptions $runtime
     * @return ReportVoipProblemsResponse
     * @throws \Exception
     */
    public function reportVoipProblemsWithOptions(ReportVoipProblemsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ReportVoipProblemsResponse::fromMap($this->doRequest("ReportVoipProblems", "HTTPS", "POST", "2017-05-25", "AK", null, $request, $runtime));
    }

    /**
     * @param ReportVoipProblemsRequest $request
     * @return ReportVoipProblemsResponse
     * @throws \Exception
     */
    public function reportVoipProblems(ReportVoipProblemsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->reportVoipProblemsWithOptions($request, $runtime);
    }

    /**
     * @param UnbindNumberAndVoipIdRequest $request
     * @param RuntimeOptions $runtime
     * @return UnbindNumberAndVoipIdResponse
     * @throws \Exception
     */
    public function unbindNumberAndVoipIdWithOptions(UnbindNumberAndVoipIdRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UnbindNumberAndVoipIdResponse::fromMap($this->doRequest("UnbindNumberAndVoipId", "HTTPS", "POST", "2017-05-25", "AK", null, $request, $runtime));
    }

    /**
     * @param UnbindNumberAndVoipIdRequest $request
     * @return UnbindNumberAndVoipIdResponse
     * @throws \Exception
     */
    public function unbindNumberAndVoipId(UnbindNumberAndVoipIdRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->unbindNumberAndVoipIdWithOptions($request, $runtime);
    }

    /**
     * @param BindNumberAndVoipIdRequest $request
     * @param RuntimeOptions $runtime
     * @return BindNumberAndVoipIdResponse
     * @throws \Exception
     */
    public function bindNumberAndVoipIdWithOptions(BindNumberAndVoipIdRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return BindNumberAndVoipIdResponse::fromMap($this->doRequest("BindNumberAndVoipId", "HTTPS", "POST", "2017-05-25", "AK", null, $request, $runtime));
    }

    /**
     * @param BindNumberAndVoipIdRequest $request
     * @return BindNumberAndVoipIdResponse
     * @throws \Exception
     */
    public function bindNumberAndVoipId(BindNumberAndVoipIdRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->bindNumberAndVoipIdWithOptions($request, $runtime);
    }

    /**
     * @param CancelRobotTaskRequest $request
     * @param RuntimeOptions $runtime
     * @return CancelRobotTaskResponse
     * @throws \Exception
     */
    public function cancelRobotTaskWithOptions(CancelRobotTaskRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return CancelRobotTaskResponse::fromMap($this->doRequest("CancelRobotTask", "HTTPS", "POST", "2017-05-25", "AK", null, $request, $runtime));
    }

    /**
     * @param CancelRobotTaskRequest $request
     * @return CancelRobotTaskResponse
     * @throws \Exception
     */
    public function cancelRobotTask(CancelRobotTaskRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->cancelRobotTaskWithOptions($request, $runtime);
    }

    /**
     * @param UploadRobotTaskCalledFileRequest $request
     * @param RuntimeOptions $runtime
     * @return UploadRobotTaskCalledFileResponse
     * @throws \Exception
     */
    public function uploadRobotTaskCalledFileWithOptions(UploadRobotTaskCalledFileRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UploadRobotTaskCalledFileResponse::fromMap($this->doRequest("UploadRobotTaskCalledFile", "HTTPS", "POST", "2017-05-25", "AK", null, $request, $runtime));
    }

    /**
     * @param UploadRobotTaskCalledFileRequest $request
     * @return UploadRobotTaskCalledFileResponse
     * @throws \Exception
     */
    public function uploadRobotTaskCalledFile(UploadRobotTaskCalledFileRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->uploadRobotTaskCalledFileWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRobotTaskRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteRobotTaskResponse
     * @throws \Exception
     */
    public function deleteRobotTaskWithOptions(DeleteRobotTaskRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteRobotTaskResponse::fromMap($this->doRequest("DeleteRobotTask", "HTTPS", "POST", "2017-05-25", "AK", null, $request, $runtime));
    }

    /**
     * @param DeleteRobotTaskRequest $request
     * @return DeleteRobotTaskResponse
     * @throws \Exception
     */
    public function deleteRobotTask(DeleteRobotTaskRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteRobotTaskWithOptions($request, $runtime);
    }

    /**
     * @param StopRobotTaskRequest $request
     * @param RuntimeOptions $runtime
     * @return StopRobotTaskResponse
     * @throws \Exception
     */
    public function stopRobotTaskWithOptions(StopRobotTaskRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return StopRobotTaskResponse::fromMap($this->doRequest("StopRobotTask", "HTTPS", "POST", "2017-05-25", "AK", null, $request, $runtime));
    }

    /**
     * @param StopRobotTaskRequest $request
     * @return StopRobotTaskResponse
     * @throws \Exception
     */
    public function stopRobotTask(StopRobotTaskRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->stopRobotTaskWithOptions($request, $runtime);
    }

    /**
     * @param QueryRobotTaskCallDetailRequest $request
     * @param RuntimeOptions $runtime
     * @return QueryRobotTaskCallDetailResponse
     * @throws \Exception
     */
    public function queryRobotTaskCallDetailWithOptions(QueryRobotTaskCallDetailRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return QueryRobotTaskCallDetailResponse::fromMap($this->doRequest("QueryRobotTaskCallDetail", "HTTPS", "POST", "2017-05-25", "AK", null, $request, $runtime));
    }

    /**
     * @param QueryRobotTaskCallDetailRequest $request
     * @return QueryRobotTaskCallDetailResponse
     * @throws \Exception
     */
    public function queryRobotTaskCallDetail(QueryRobotTaskCallDetailRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->queryRobotTaskCallDetailWithOptions($request, $runtime);
    }

    /**
     * @param QueryRobotv2AllListRequest $request
     * @param RuntimeOptions $runtime
     * @return QueryRobotv2AllListResponse
     * @throws \Exception
     */
    public function queryRobotv2AllListWithOptions(QueryRobotv2AllListRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return QueryRobotv2AllListResponse::fromMap($this->doRequest("QueryRobotv2AllList", "HTTPS", "POST", "2017-05-25", "AK", null, $request, $runtime));
    }

    /**
     * @param QueryRobotv2AllListRequest $request
     * @return QueryRobotv2AllListResponse
     * @throws \Exception
     */
    public function queryRobotv2AllList(QueryRobotv2AllListRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->queryRobotv2AllListWithOptions($request, $runtime);
    }

    /**
     * @param QueryRobotTaskDetailRequest $request
     * @param RuntimeOptions $runtime
     * @return QueryRobotTaskDetailResponse
     * @throws \Exception
     */
    public function queryRobotTaskDetailWithOptions(QueryRobotTaskDetailRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return QueryRobotTaskDetailResponse::fromMap($this->doRequest("QueryRobotTaskDetail", "HTTPS", "POST", "2017-05-25", "AK", null, $request, $runtime));
    }

    /**
     * @param QueryRobotTaskDetailRequest $request
     * @return QueryRobotTaskDetailResponse
     * @throws \Exception
     */
    public function queryRobotTaskDetail(QueryRobotTaskDetailRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->queryRobotTaskDetailWithOptions($request, $runtime);
    }

    /**
     * @param QueryRobotTaskCallListRequest $request
     * @param RuntimeOptions $runtime
     * @return QueryRobotTaskCallListResponse
     * @throws \Exception
     */
    public function queryRobotTaskCallListWithOptions(QueryRobotTaskCallListRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return QueryRobotTaskCallListResponse::fromMap($this->doRequest("QueryRobotTaskCallList", "HTTPS", "POST", "2017-05-25", "AK", null, $request, $runtime));
    }

    /**
     * @param QueryRobotTaskCallListRequest $request
     * @return QueryRobotTaskCallListResponse
     * @throws \Exception
     */
    public function queryRobotTaskCallList(QueryRobotTaskCallListRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->queryRobotTaskCallListWithOptions($request, $runtime);
    }

    /**
     * @param StartRobotTaskRequest $request
     * @param RuntimeOptions $runtime
     * @return StartRobotTaskResponse
     * @throws \Exception
     */
    public function startRobotTaskWithOptions(StartRobotTaskRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return StartRobotTaskResponse::fromMap($this->doRequest("StartRobotTask", "HTTPS", "POST", "2017-05-25", "AK", null, $request, $runtime));
    }

    /**
     * @param StartRobotTaskRequest $request
     * @return StartRobotTaskResponse
     * @throws \Exception
     */
    public function startRobotTask(StartRobotTaskRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->startRobotTaskWithOptions($request, $runtime);
    }

    /**
     * @param QueryRobotTaskListRequest $request
     * @param RuntimeOptions $runtime
     * @return QueryRobotTaskListResponse
     * @throws \Exception
     */
    public function queryRobotTaskListWithOptions(QueryRobotTaskListRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return QueryRobotTaskListResponse::fromMap($this->doRequest("QueryRobotTaskList", "HTTPS", "POST", "2017-05-25", "AK", null, $request, $runtime));
    }

    /**
     * @param QueryRobotTaskListRequest $request
     * @return QueryRobotTaskListResponse
     * @throws \Exception
     */
    public function queryRobotTaskList(QueryRobotTaskListRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->queryRobotTaskListWithOptions($request, $runtime);
    }

    /**
     * @param CreateRobotTaskRequest $request
     * @param RuntimeOptions $runtime
     * @return CreateRobotTaskResponse
     * @throws \Exception
     */
    public function createRobotTaskWithOptions(CreateRobotTaskRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return CreateRobotTaskResponse::fromMap($this->doRequest("CreateRobotTask", "HTTPS", "POST", "2017-05-25", "AK", null, $request, $runtime));
    }

    /**
     * @param CreateRobotTaskRequest $request
     * @return CreateRobotTaskResponse
     * @throws \Exception
     */
    public function createRobotTask(CreateRobotTaskRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->createRobotTaskWithOptions($request, $runtime);
    }

    /**
     * @param CancelOrderRobotTaskRequest $request
     * @param RuntimeOptions $runtime
     * @return CancelOrderRobotTaskResponse
     * @throws \Exception
     */
    public function cancelOrderRobotTaskWithOptions(CancelOrderRobotTaskRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return CancelOrderRobotTaskResponse::fromMap($this->doRequest("CancelOrderRobotTask", "HTTPS", "POST", "2017-05-25", "AK", null, $request, $runtime));
    }

    /**
     * @param CancelOrderRobotTaskRequest $request
     * @return CancelOrderRobotTaskResponse
     * @throws \Exception
     */
    public function cancelOrderRobotTask(CancelOrderRobotTaskRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->cancelOrderRobotTaskWithOptions($request, $runtime);
    }

    /**
     * @param SmartCallOperateRequest $request
     * @param RuntimeOptions $runtime
     * @return SmartCallOperateResponse
     * @throws \Exception
     */
    public function smartCallOperateWithOptions(SmartCallOperateRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SmartCallOperateResponse::fromMap($this->doRequest("SmartCallOperate", "HTTPS", "POST", "2017-05-25", "AK", null, $request, $runtime));
    }

    /**
     * @param SmartCallOperateRequest $request
     * @return SmartCallOperateResponse
     * @throws \Exception
     */
    public function smartCallOperate(SmartCallOperateRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->smartCallOperateWithOptions($request, $runtime);
    }

    /**
     * @param QueryRobotInfoListRequest $request
     * @param RuntimeOptions $runtime
     * @return QueryRobotInfoListResponse
     * @throws \Exception
     */
    public function queryRobotInfoListWithOptions(QueryRobotInfoListRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return QueryRobotInfoListResponse::fromMap($this->doRequest("QueryRobotInfoList", "HTTPS", "POST", "2017-05-25", "AK", null, $request, $runtime));
    }

    /**
     * @param QueryRobotInfoListRequest $request
     * @return QueryRobotInfoListResponse
     * @throws \Exception
     */
    public function queryRobotInfoList(QueryRobotInfoListRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->queryRobotInfoListWithOptions($request, $runtime);
    }

    /**
     * @param BatchRobotSmartCallRequest $request
     * @param RuntimeOptions $runtime
     * @return BatchRobotSmartCallResponse
     * @throws \Exception
     */
    public function batchRobotSmartCallWithOptions(BatchRobotSmartCallRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return BatchRobotSmartCallResponse::fromMap($this->doRequest("BatchRobotSmartCall", "HTTPS", "POST", "2017-05-25", "AK", null, $request, $runtime));
    }

    /**
     * @param BatchRobotSmartCallRequest $request
     * @return BatchRobotSmartCallResponse
     * @throws \Exception
     */
    public function batchRobotSmartCall(BatchRobotSmartCallRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->batchRobotSmartCallWithOptions($request, $runtime);
    }

    /**
     * @param QueryCallDetailByTaskIdRequest $request
     * @param RuntimeOptions $runtime
     * @return QueryCallDetailByTaskIdResponse
     * @throws \Exception
     */
    public function queryCallDetailByTaskIdWithOptions(QueryCallDetailByTaskIdRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return QueryCallDetailByTaskIdResponse::fromMap($this->doRequest("QueryCallDetailByTaskId", "HTTPS", "POST", "2017-05-25", "AK", null, $request, $runtime));
    }

    /**
     * @param QueryCallDetailByTaskIdRequest $request
     * @return QueryCallDetailByTaskIdResponse
     * @throws \Exception
     */
    public function queryCallDetailByTaskId(QueryCallDetailByTaskIdRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->queryCallDetailByTaskIdWithOptions($request, $runtime);
    }

    /**
     * @param GetRtcTokenRequest $request
     * @param RuntimeOptions $runtime
     * @return GetRtcTokenResponse
     * @throws \Exception
     */
    public function getRtcTokenWithOptions(GetRtcTokenRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetRtcTokenResponse::fromMap($this->doRequest("GetRtcToken", "HTTPS", "POST", "2017-05-25", "AK", null, $request, $runtime));
    }

    /**
     * @param GetRtcTokenRequest $request
     * @return GetRtcTokenResponse
     * @throws \Exception
     */
    public function getRtcToken(GetRtcTokenRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getRtcTokenWithOptions($request, $runtime);
    }

    /**
     * @param AddRtcAccountRequest $request
     * @param RuntimeOptions $runtime
     * @return AddRtcAccountResponse
     * @throws \Exception
     */
    public function addRtcAccountWithOptions(AddRtcAccountRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AddRtcAccountResponse::fromMap($this->doRequest("AddRtcAccount", "HTTPS", "POST", "2017-05-25", "AK", null, $request, $runtime));
    }

    /**
     * @param AddRtcAccountRequest $request
     * @return AddRtcAccountResponse
     * @throws \Exception
     */
    public function addRtcAccount(AddRtcAccountRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->addRtcAccountWithOptions($request, $runtime);
    }

    /**
     * @param VoipAddAccountRequest $request
     * @param RuntimeOptions $runtime
     * @return VoipAddAccountResponse
     * @throws \Exception
     */
    public function voipAddAccountWithOptions(VoipAddAccountRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return VoipAddAccountResponse::fromMap($this->doRequest("VoipAddAccount", "HTTPS", "POST", "2017-05-25", "AK", null, $request, $runtime));
    }

    /**
     * @param VoipAddAccountRequest $request
     * @return VoipAddAccountResponse
     * @throws \Exception
     */
    public function voipAddAccount(VoipAddAccountRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->voipAddAccountWithOptions($request, $runtime);
    }

    /**
     * @param VoipGetTokenRequest $request
     * @param RuntimeOptions $runtime
     * @return VoipGetTokenResponse
     * @throws \Exception
     */
    public function voipGetTokenWithOptions(VoipGetTokenRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return VoipGetTokenResponse::fromMap($this->doRequest("VoipGetToken", "HTTPS", "POST", "2017-05-25", "AK", null, $request, $runtime));
    }

    /**
     * @param VoipGetTokenRequest $request
     * @return VoipGetTokenResponse
     * @throws \Exception
     */
    public function voipGetToken(VoipGetTokenRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->voipGetTokenWithOptions($request, $runtime);
    }

    /**
     * @param SmartCallRequest $request
     * @param RuntimeOptions $runtime
     * @return SmartCallResponse
     * @throws \Exception
     */
    public function smartCallWithOptions(SmartCallRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SmartCallResponse::fromMap($this->doRequest("SmartCall", "HTTPS", "POST", "2017-05-25", "AK", null, $request, $runtime));
    }

    /**
     * @param SmartCallRequest $request
     * @return SmartCallResponse
     * @throws \Exception
     */
    public function smartCall(SmartCallRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->smartCallWithOptions($request, $runtime);
    }

    /**
     * @param QueryCallDetailByCallIdRequest $request
     * @param RuntimeOptions $runtime
     * @return QueryCallDetailByCallIdResponse
     * @throws \Exception
     */
    public function queryCallDetailByCallIdWithOptions(QueryCallDetailByCallIdRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return QueryCallDetailByCallIdResponse::fromMap($this->doRequest("QueryCallDetailByCallId", "HTTPS", "POST", "2017-05-25", "AK", null, $request, $runtime));
    }

    /**
     * @param QueryCallDetailByCallIdRequest $request
     * @return QueryCallDetailByCallIdResponse
     * @throws \Exception
     */
    public function queryCallDetailByCallId(QueryCallDetailByCallIdRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->queryCallDetailByCallIdWithOptions($request, $runtime);
    }

    /**
     * @param CancelCallRequest $request
     * @param RuntimeOptions $runtime
     * @return CancelCallResponse
     * @throws \Exception
     */
    public function cancelCallWithOptions(CancelCallRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return CancelCallResponse::fromMap($this->doRequest("CancelCall", "HTTPS", "POST", "2017-05-25", "AK", null, $request, $runtime));
    }

    /**
     * @param CancelCallRequest $request
     * @return CancelCallResponse
     * @throws \Exception
     */
    public function cancelCall(CancelCallRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->cancelCallWithOptions($request, $runtime);
    }

    /**
     * @param ClickToDialRequest $request
     * @param RuntimeOptions $runtime
     * @return ClickToDialResponse
     * @throws \Exception
     */
    public function clickToDialWithOptions(ClickToDialRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ClickToDialResponse::fromMap($this->doRequest("ClickToDial", "HTTPS", "POST", "2017-05-25", "AK", null, $request, $runtime));
    }

    /**
     * @param ClickToDialRequest $request
     * @return ClickToDialResponse
     * @throws \Exception
     */
    public function clickToDial(ClickToDialRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->clickToDialWithOptions($request, $runtime);
    }

    /**
     * @param IvrCallRequest $request
     * @param RuntimeOptions $runtime
     * @return IvrCallResponse
     * @throws \Exception
     */
    public function ivrCallWithOptions(IvrCallRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return IvrCallResponse::fromMap($this->doRequest("IvrCall", "HTTPS", "POST", "2017-05-25", "AK", null, $request, $runtime));
    }

    /**
     * @param IvrCallRequest $request
     * @return IvrCallResponse
     * @throws \Exception
     */
    public function ivrCall(IvrCallRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->ivrCallWithOptions($request, $runtime);
    }

    /**
     * @param SingleCallByVoiceRequest $request
     * @param RuntimeOptions $runtime
     * @return SingleCallByVoiceResponse
     * @throws \Exception
     */
    public function singleCallByVoiceWithOptions(SingleCallByVoiceRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SingleCallByVoiceResponse::fromMap($this->doRequest("SingleCallByVoice", "HTTPS", "POST", "2017-05-25", "AK", null, $request, $runtime));
    }

    /**
     * @param SingleCallByVoiceRequest $request
     * @return SingleCallByVoiceResponse
     * @throws \Exception
     */
    public function singleCallByVoice(SingleCallByVoiceRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->singleCallByVoiceWithOptions($request, $runtime);
    }

    /**
     * @param SingleCallByTtsRequest $request
     * @param RuntimeOptions $runtime
     * @return SingleCallByTtsResponse
     * @throws \Exception
     */
    public function singleCallByTtsWithOptions(SingleCallByTtsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SingleCallByTtsResponse::fromMap($this->doRequest("SingleCallByTts", "HTTPS", "POST", "2017-05-25", "AK", null, $request, $runtime));
    }

    /**
     * @param SingleCallByTtsRequest $request
     * @return SingleCallByTtsResponse
     * @throws \Exception
     */
    public function singleCallByTts(SingleCallByTtsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->singleCallByTtsWithOptions($request, $runtime);
    }

    /**
     * @param string $productId
     * @param string $regionId
     * @param string $endpointRule
     * @param string $network
     * @param string $suffix
     * @param array $endpointMap
     * @param string $endpoint
     * @return string
     * @throws \Exception
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint){
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_($endpointMap["regionId"])) {
            return $endpointMap["regionId"];
        }
        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }
}
