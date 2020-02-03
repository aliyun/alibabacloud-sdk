// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.ocr;

import com.aliyun.tea.*;
import com.aliyun.ocr.models.*;
import com.aliyuncs.pop.RPCClient;

public class Client extends RPCClient {
    public Client(Config config) throws Exception {
        super(TeaModel.buildMap(config));
    }

    public java.util.Map<String, Object> _request(String action, String protocol, String method, java.util.Map<String, Object> request, com.aliyun.common.models.RuntimeObject runtime) throws Exception {
        java.util.Map<String, Object> runtime_ = TeaConverter.buildMap(
            new TeaPair("timeouted", "retry"),
            new TeaPair("readTimeout", com.aliyun.common.Common.defaultNumber(runtime.readTimeout, _readTimeout)),
            new TeaPair("connectTimeout", com.aliyun.common.Common.defaultNumber(runtime.connectTimeout, _connectTimeout)),
            new TeaPair("httpProxy", com.aliyun.common.Common._default(runtime.httpProxy, _httpProxy)),
            new TeaPair("httpsProxy", com.aliyun.common.Common._default(runtime.httpsProxy, _httpsProxy)),
            new TeaPair("noProxy", com.aliyun.common.Common._default(runtime.noProxy, _noProxy)),
            new TeaPair("maxIdleConns", com.aliyun.common.Common.defaultNumber(runtime.maxIdleConns, _maxIdleConns)),
            new TeaPair("retry", TeaConverter.buildMap(
                new TeaPair("retryable", runtime.autoretry),
                new TeaPair("maxAttempts", com.aliyun.common.Common.defaultNumber(runtime.maxAttempts, 3))
            )),
            new TeaPair("backoff", TeaConverter.buildMap(
                new TeaPair("policy", com.aliyun.common.Common._default(runtime.backoffPolicy, "no")),
                new TeaPair("period", com.aliyun.common.Common.defaultNumber(runtime.backoffPeriod, 1))
            )),
            new TeaPair("ignoreSSL", runtime.ignoreSSL)
        );

        TeaRequest _lastRequest = null;
        long _now = System.currentTimeMillis();
        int _retryTimes = 0;
        while (Tea.allowRetry((java.util.Map<String, Object>) runtime_.get("retry"), _retryTimes, _now)) {
            if (_retryTimes > 0) {
                int backoffTime = Tea.getBackoffTime(runtime_.get("backoff"), _retryTimes);
                if (backoffTime > 0) {
                    Tea.sleep(backoffTime);
                }
            }
            _retryTimes = _retryTimes + 1;
            try {
                TeaRequest request_ = new TeaRequest();
                request_.protocol = com.aliyun.common.Common._default(_protocol, protocol);
                request_.method = method;
                request_.pathname = "/";
                request_.query = com.aliyun.common.Common.query(TeaConverter.merge(Object.class,
                    TeaConverter.buildMap(
                        new TeaPair("Action", action),
                        new TeaPair("Format", "json"),
                        new TeaPair("RegionId", _regionId),
                        new TeaPair("Timestamp", com.aliyun.common.Common.getTimestamp()),
                        new TeaPair("Version", "2019-12-30"),
                        new TeaPair("SignatureMethod", "HMAC-SHA1"),
                        new TeaPair("SignatureVersion", "1.0"),
                        new TeaPair("SignatureNonce", com.aliyun.common.Common.getNonce()),
                        new TeaPair("AccessKeyId", _getAccessKeyId())
                    ),
                    request
                ));
                request_.headers = TeaConverter.buildMap(
                    new TeaPair("host", com.aliyun.common.Common.getHost("ocr", _regionId, _endpoint)),
                    new TeaPair("user-agent", com.aliyun.common.Common.getUserAgent(_userAgent))
                );
                request_.query.put("Signature", com.aliyun.common.Common.getSignature(request_, _getAccessKeySecret()));
                _lastRequest = request_;
                TeaResponse response_ = Tea.doAction(request_, runtime_);

                java.util.Map<String, Object> body = com.aliyun.common.Common.json(response_);
                if (com.aliyun.common.Common.hasError(body)) {
                    throw new TeaException(TeaConverter.buildMap(
                        new TeaPair("message", body.get("Message")),
                        new TeaPair("data", body),
                        new TeaPair("code", body.get("Code"))
                    ));
                }

                return body;
            } catch (Exception e) {
                if (Tea.isRetryable(e)) {
                    continue;
                }
                throw e;
            }
        }

        throw new TeaUnretryableException(_lastRequest);
    }

    public RecognizeCharacterResponse recognizeCharacter(RecognizeCharacterRequest request, com.aliyun.common.models.RuntimeObject runtime) throws Exception {
        return TeaModel.toModel(this._request("RecognizeCharacter", "HTTPS", "POST", TeaModel.buildMap(request), runtime), new RecognizeCharacterResponse());
    }

    public RecognizeCharacterResponse recognizeCharacterAdvance(RecognizeCharacterAdvanceRequest request, com.aliyun.common.models.RuntimeObject runtime) throws Exception {
        com.aliyun.openplatform.models.Config authConfig = com.aliyun.openplatform.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", _getAccessKeyId()),
            new TeaPair("accessKeySecret", _getAccessKeySecret()),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", "openplatform.aliyuncs.com"),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.Client authClient = new com.aliyun.openplatform.Client(authConfig);
        com.aliyun.openplatform.models.AuthorizeFileUploadRequest authRequest = com.aliyun.openplatform.models.AuthorizeFileUploadRequest.build(TeaConverter.buildMap(
            new TeaPair("product", "ocr"),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.models.AuthorizeFileUploadResponse authResponse = authClient.authorizeFileUpload(authRequest, runtime);
        com.aliyun.oss.models.Config ossConfig = com.aliyun.oss.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("accessKeySecret", _getAccessKeySecret()),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", com.aliyun.common.Common.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, _endpointType)),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.oss.Client ossClient = new com.aliyun.oss.Client(ossConfig);
        String str = com.aliyun.common.Common.readAsString(request.imageURLObject);
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeaderFile fileObj = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeaderFile.build(TeaConverter.buildMap(
            new TeaPair("fileName", authResponse.objectKey),
            new TeaPair("content", str),
            new TeaPair("contentType", "")
        ));
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader ossHeader = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("policy", authResponse.encodedPolicy),
            new TeaPair("signature", authResponse.signature),
            new TeaPair("key", authResponse.objectKey),
            new TeaPair("file", fileObj),
            new TeaPair("successActionStatus", "201")
        ));
        com.aliyun.oss.models.PostObjectRequest uploadRequest = com.aliyun.oss.models.PostObjectRequest.build(TeaConverter.buildMap(
            new TeaPair("bucketName", authResponse.bucket),
            new TeaPair("header", ossHeader)
        ));
        ossClient.postObject(uploadRequest, runtime);
        RecognizeCharacterRequest recognizeCharacterreq = new RecognizeCharacterRequest();
        com.aliyun.common.Common.convert(request, recognizeCharacterreq);
        recognizeCharacterreq.imageURL = "http://" + authResponse.bucket + "." + authResponse.endpoint + "/" + authResponse.objectKey + "";
        RecognizeCharacterResponse recognizeCharacterResp = this.recognizeCharacter(recognizeCharacterreq, runtime);
        return recognizeCharacterResp;
    }

    public RecognizeDriverLicenseResponse recognizeDriverLicense(RecognizeDriverLicenseRequest request, com.aliyun.common.models.RuntimeObject runtime) throws Exception {
        return TeaModel.toModel(this._request("RecognizeDriverLicense", "HTTPS", "POST", TeaModel.buildMap(request), runtime), new RecognizeDriverLicenseResponse());
    }

    public RecognizeDriverLicenseResponse recognizeDriverLicenseAdvance(RecognizeDriverLicenseAdvanceRequest request, com.aliyun.common.models.RuntimeObject runtime) throws Exception {
        com.aliyun.openplatform.models.Config authConfig = com.aliyun.openplatform.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", _getAccessKeyId()),
            new TeaPair("accessKeySecret", _getAccessKeySecret()),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", "openplatform.aliyuncs.com"),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.Client authClient = new com.aliyun.openplatform.Client(authConfig);
        com.aliyun.openplatform.models.AuthorizeFileUploadRequest authRequest = com.aliyun.openplatform.models.AuthorizeFileUploadRequest.build(TeaConverter.buildMap(
            new TeaPair("product", "ocr"),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.models.AuthorizeFileUploadResponse authResponse = authClient.authorizeFileUpload(authRequest, runtime);
        com.aliyun.oss.models.Config ossConfig = com.aliyun.oss.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("accessKeySecret", _getAccessKeySecret()),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", com.aliyun.common.Common.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, _endpointType)),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.oss.Client ossClient = new com.aliyun.oss.Client(ossConfig);
        String str = com.aliyun.common.Common.readAsString(request.imageURLObject);
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeaderFile fileObj = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeaderFile.build(TeaConverter.buildMap(
            new TeaPair("fileName", authResponse.objectKey),
            new TeaPair("content", str),
            new TeaPair("contentType", "")
        ));
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader ossHeader = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("policy", authResponse.encodedPolicy),
            new TeaPair("signature", authResponse.signature),
            new TeaPair("key", authResponse.objectKey),
            new TeaPair("file", fileObj),
            new TeaPair("successActionStatus", "201")
        ));
        com.aliyun.oss.models.PostObjectRequest uploadRequest = com.aliyun.oss.models.PostObjectRequest.build(TeaConverter.buildMap(
            new TeaPair("bucketName", authResponse.bucket),
            new TeaPair("header", ossHeader)
        ));
        ossClient.postObject(uploadRequest, runtime);
        RecognizeDriverLicenseRequest recognizeDriverLicensereq = new RecognizeDriverLicenseRequest();
        com.aliyun.common.Common.convert(request, recognizeDriverLicensereq);
        recognizeDriverLicensereq.imageURL = "http://" + authResponse.bucket + "." + authResponse.endpoint + "/" + authResponse.objectKey + "";
        RecognizeDriverLicenseResponse recognizeDriverLicenseResp = this.recognizeDriverLicense(recognizeDriverLicensereq, runtime);
        return recognizeDriverLicenseResp;
    }

    public RecognizeLicensePlateResponse recognizeLicensePlate(RecognizeLicensePlateRequest request, com.aliyun.common.models.RuntimeObject runtime) throws Exception {
        return TeaModel.toModel(this._request("RecognizeLicensePlate", "HTTPS", "POST", TeaModel.buildMap(request), runtime), new RecognizeLicensePlateResponse());
    }

    public RecognizeLicensePlateResponse recognizeLicensePlateAdvance(RecognizeLicensePlateAdvanceRequest request, com.aliyun.common.models.RuntimeObject runtime) throws Exception {
        com.aliyun.openplatform.models.Config authConfig = com.aliyun.openplatform.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", _getAccessKeyId()),
            new TeaPair("accessKeySecret", _getAccessKeySecret()),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", "openplatform.aliyuncs.com"),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.Client authClient = new com.aliyun.openplatform.Client(authConfig);
        com.aliyun.openplatform.models.AuthorizeFileUploadRequest authRequest = com.aliyun.openplatform.models.AuthorizeFileUploadRequest.build(TeaConverter.buildMap(
            new TeaPair("product", "ocr"),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.models.AuthorizeFileUploadResponse authResponse = authClient.authorizeFileUpload(authRequest, runtime);
        com.aliyun.oss.models.Config ossConfig = com.aliyun.oss.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("accessKeySecret", _getAccessKeySecret()),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", com.aliyun.common.Common.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, _endpointType)),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.oss.Client ossClient = new com.aliyun.oss.Client(ossConfig);
        String str = com.aliyun.common.Common.readAsString(request.imageURLObject);
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeaderFile fileObj = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeaderFile.build(TeaConverter.buildMap(
            new TeaPair("fileName", authResponse.objectKey),
            new TeaPair("content", str),
            new TeaPair("contentType", "")
        ));
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader ossHeader = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("policy", authResponse.encodedPolicy),
            new TeaPair("signature", authResponse.signature),
            new TeaPair("key", authResponse.objectKey),
            new TeaPair("file", fileObj),
            new TeaPair("successActionStatus", "201")
        ));
        com.aliyun.oss.models.PostObjectRequest uploadRequest = com.aliyun.oss.models.PostObjectRequest.build(TeaConverter.buildMap(
            new TeaPair("bucketName", authResponse.bucket),
            new TeaPair("header", ossHeader)
        ));
        ossClient.postObject(uploadRequest, runtime);
        RecognizeLicensePlateRequest recognizeLicensePlatereq = new RecognizeLicensePlateRequest();
        com.aliyun.common.Common.convert(request, recognizeLicensePlatereq);
        recognizeLicensePlatereq.imageURL = "http://" + authResponse.bucket + "." + authResponse.endpoint + "/" + authResponse.objectKey + "";
        RecognizeLicensePlateResponse recognizeLicensePlateResp = this.recognizeLicensePlate(recognizeLicensePlatereq, runtime);
        return recognizeLicensePlateResp;
    }

    public RecognizeTableResponse recognizeTable(RecognizeTableRequest request, com.aliyun.common.models.RuntimeObject runtime) throws Exception {
        return TeaModel.toModel(this._request("RecognizeTable", "HTTPS", "POST", TeaModel.buildMap(request), runtime), new RecognizeTableResponse());
    }

    public RecognizeTableResponse recognizeTableAdvance(RecognizeTableAdvanceRequest request, com.aliyun.common.models.RuntimeObject runtime) throws Exception {
        com.aliyun.openplatform.models.Config authConfig = com.aliyun.openplatform.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", _getAccessKeyId()),
            new TeaPair("accessKeySecret", _getAccessKeySecret()),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", "openplatform.aliyuncs.com"),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.Client authClient = new com.aliyun.openplatform.Client(authConfig);
        com.aliyun.openplatform.models.AuthorizeFileUploadRequest authRequest = com.aliyun.openplatform.models.AuthorizeFileUploadRequest.build(TeaConverter.buildMap(
            new TeaPair("product", "ocr"),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.models.AuthorizeFileUploadResponse authResponse = authClient.authorizeFileUpload(authRequest, runtime);
        com.aliyun.oss.models.Config ossConfig = com.aliyun.oss.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("accessKeySecret", _getAccessKeySecret()),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", com.aliyun.common.Common.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, _endpointType)),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.oss.Client ossClient = new com.aliyun.oss.Client(ossConfig);
        String str = com.aliyun.common.Common.readAsString(request.imageURLObject);
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeaderFile fileObj = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeaderFile.build(TeaConverter.buildMap(
            new TeaPair("fileName", authResponse.objectKey),
            new TeaPair("content", str),
            new TeaPair("contentType", "")
        ));
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader ossHeader = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("policy", authResponse.encodedPolicy),
            new TeaPair("signature", authResponse.signature),
            new TeaPair("key", authResponse.objectKey),
            new TeaPair("file", fileObj),
            new TeaPair("successActionStatus", "201")
        ));
        com.aliyun.oss.models.PostObjectRequest uploadRequest = com.aliyun.oss.models.PostObjectRequest.build(TeaConverter.buildMap(
            new TeaPair("bucketName", authResponse.bucket),
            new TeaPair("header", ossHeader)
        ));
        ossClient.postObject(uploadRequest, runtime);
        RecognizeTableRequest recognizeTablereq = new RecognizeTableRequest();
        com.aliyun.common.Common.convert(request, recognizeTablereq);
        recognizeTablereq.imageURL = "http://" + authResponse.bucket + "." + authResponse.endpoint + "/" + authResponse.objectKey + "";
        RecognizeTableResponse recognizeTableResp = this.recognizeTable(recognizeTablereq, runtime);
        return recognizeTableResp;
    }

    public RecognizeStampResponse recognizeStamp(RecognizeStampRequest request, com.aliyun.common.models.RuntimeObject runtime) throws Exception {
        return TeaModel.toModel(this._request("RecognizeStamp", "HTTPS", "POST", TeaModel.buildMap(request), runtime), new RecognizeStampResponse());
    }

    public RecognizeStampResponse recognizeStampAdvance(RecognizeStampAdvanceRequest request, com.aliyun.common.models.RuntimeObject runtime) throws Exception {
        com.aliyun.openplatform.models.Config authConfig = com.aliyun.openplatform.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", _getAccessKeyId()),
            new TeaPair("accessKeySecret", _getAccessKeySecret()),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", "openplatform.aliyuncs.com"),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.Client authClient = new com.aliyun.openplatform.Client(authConfig);
        com.aliyun.openplatform.models.AuthorizeFileUploadRequest authRequest = com.aliyun.openplatform.models.AuthorizeFileUploadRequest.build(TeaConverter.buildMap(
            new TeaPair("product", "ocr"),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.models.AuthorizeFileUploadResponse authResponse = authClient.authorizeFileUpload(authRequest, runtime);
        com.aliyun.oss.models.Config ossConfig = com.aliyun.oss.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("accessKeySecret", _getAccessKeySecret()),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", com.aliyun.common.Common.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, _endpointType)),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.oss.Client ossClient = new com.aliyun.oss.Client(ossConfig);
        String str = com.aliyun.common.Common.readAsString(request.imageURLObject);
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeaderFile fileObj = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeaderFile.build(TeaConverter.buildMap(
            new TeaPair("fileName", authResponse.objectKey),
            new TeaPair("content", str),
            new TeaPair("contentType", "")
        ));
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader ossHeader = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("policy", authResponse.encodedPolicy),
            new TeaPair("signature", authResponse.signature),
            new TeaPair("key", authResponse.objectKey),
            new TeaPair("file", fileObj),
            new TeaPair("successActionStatus", "201")
        ));
        com.aliyun.oss.models.PostObjectRequest uploadRequest = com.aliyun.oss.models.PostObjectRequest.build(TeaConverter.buildMap(
            new TeaPair("bucketName", authResponse.bucket),
            new TeaPair("header", ossHeader)
        ));
        ossClient.postObject(uploadRequest, runtime);
        RecognizeStampRequest recognizeStampreq = new RecognizeStampRequest();
        com.aliyun.common.Common.convert(request, recognizeStampreq);
        recognizeStampreq.imageURL = "http://" + authResponse.bucket + "." + authResponse.endpoint + "/" + authResponse.objectKey + "";
        RecognizeStampResponse recognizeStampResp = this.recognizeStamp(recognizeStampreq, runtime);
        return recognizeStampResp;
    }

    public RecognizeAccountPageResponse recognizeAccountPage(RecognizeAccountPageRequest request, com.aliyun.common.models.RuntimeObject runtime) throws Exception {
        return TeaModel.toModel(this._request("RecognizeAccountPage", "HTTPS", "POST", TeaModel.buildMap(request), runtime), new RecognizeAccountPageResponse());
    }

    public RecognizeAccountPageResponse recognizeAccountPageAdvance(RecognizeAccountPageAdvanceRequest request, com.aliyun.common.models.RuntimeObject runtime) throws Exception {
        com.aliyun.openplatform.models.Config authConfig = com.aliyun.openplatform.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", _getAccessKeyId()),
            new TeaPair("accessKeySecret", _getAccessKeySecret()),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", "openplatform.aliyuncs.com"),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.Client authClient = new com.aliyun.openplatform.Client(authConfig);
        com.aliyun.openplatform.models.AuthorizeFileUploadRequest authRequest = com.aliyun.openplatform.models.AuthorizeFileUploadRequest.build(TeaConverter.buildMap(
            new TeaPair("product", "ocr"),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.models.AuthorizeFileUploadResponse authResponse = authClient.authorizeFileUpload(authRequest, runtime);
        com.aliyun.oss.models.Config ossConfig = com.aliyun.oss.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("accessKeySecret", _getAccessKeySecret()),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", com.aliyun.common.Common.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, _endpointType)),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.oss.Client ossClient = new com.aliyun.oss.Client(ossConfig);
        String str = com.aliyun.common.Common.readAsString(request.imageURLObject);
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeaderFile fileObj = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeaderFile.build(TeaConverter.buildMap(
            new TeaPair("fileName", authResponse.objectKey),
            new TeaPair("content", str),
            new TeaPair("contentType", "")
        ));
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader ossHeader = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("policy", authResponse.encodedPolicy),
            new TeaPair("signature", authResponse.signature),
            new TeaPair("key", authResponse.objectKey),
            new TeaPair("file", fileObj),
            new TeaPair("successActionStatus", "201")
        ));
        com.aliyun.oss.models.PostObjectRequest uploadRequest = com.aliyun.oss.models.PostObjectRequest.build(TeaConverter.buildMap(
            new TeaPair("bucketName", authResponse.bucket),
            new TeaPair("header", ossHeader)
        ));
        ossClient.postObject(uploadRequest, runtime);
        RecognizeAccountPageRequest recognizeAccountPagereq = new RecognizeAccountPageRequest();
        com.aliyun.common.Common.convert(request, recognizeAccountPagereq);
        recognizeAccountPagereq.imageURL = "http://" + authResponse.bucket + "." + authResponse.endpoint + "/" + authResponse.objectKey + "";
        RecognizeAccountPageResponse recognizeAccountPageResp = this.recognizeAccountPage(recognizeAccountPagereq, runtime);
        return recognizeAccountPageResp;
    }

    public RecognizeTaxiInvoiceResponse recognizeTaxiInvoice(RecognizeTaxiInvoiceRequest request, com.aliyun.common.models.RuntimeObject runtime) throws Exception {
        return TeaModel.toModel(this._request("RecognizeTaxiInvoice", "HTTPS", "POST", TeaModel.buildMap(request), runtime), new RecognizeTaxiInvoiceResponse());
    }

    public RecognizeTaxiInvoiceResponse recognizeTaxiInvoiceAdvance(RecognizeTaxiInvoiceAdvanceRequest request, com.aliyun.common.models.RuntimeObject runtime) throws Exception {
        com.aliyun.openplatform.models.Config authConfig = com.aliyun.openplatform.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", _getAccessKeyId()),
            new TeaPair("accessKeySecret", _getAccessKeySecret()),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", "openplatform.aliyuncs.com"),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.Client authClient = new com.aliyun.openplatform.Client(authConfig);
        com.aliyun.openplatform.models.AuthorizeFileUploadRequest authRequest = com.aliyun.openplatform.models.AuthorizeFileUploadRequest.build(TeaConverter.buildMap(
            new TeaPair("product", "ocr"),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.models.AuthorizeFileUploadResponse authResponse = authClient.authorizeFileUpload(authRequest, runtime);
        com.aliyun.oss.models.Config ossConfig = com.aliyun.oss.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("accessKeySecret", _getAccessKeySecret()),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", com.aliyun.common.Common.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, _endpointType)),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.oss.Client ossClient = new com.aliyun.oss.Client(ossConfig);
        String str = com.aliyun.common.Common.readAsString(request.imageURLObject);
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeaderFile fileObj = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeaderFile.build(TeaConverter.buildMap(
            new TeaPair("fileName", authResponse.objectKey),
            new TeaPair("content", str),
            new TeaPair("contentType", "")
        ));
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader ossHeader = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("policy", authResponse.encodedPolicy),
            new TeaPair("signature", authResponse.signature),
            new TeaPair("key", authResponse.objectKey),
            new TeaPair("file", fileObj),
            new TeaPair("successActionStatus", "201")
        ));
        com.aliyun.oss.models.PostObjectRequest uploadRequest = com.aliyun.oss.models.PostObjectRequest.build(TeaConverter.buildMap(
            new TeaPair("bucketName", authResponse.bucket),
            new TeaPair("header", ossHeader)
        ));
        ossClient.postObject(uploadRequest, runtime);
        RecognizeTaxiInvoiceRequest recognizeTaxiInvoicereq = new RecognizeTaxiInvoiceRequest();
        com.aliyun.common.Common.convert(request, recognizeTaxiInvoicereq);
        recognizeTaxiInvoicereq.imageURL = "http://" + authResponse.bucket + "." + authResponse.endpoint + "/" + authResponse.objectKey + "";
        RecognizeTaxiInvoiceResponse recognizeTaxiInvoiceResp = this.recognizeTaxiInvoice(recognizeTaxiInvoicereq, runtime);
        return recognizeTaxiInvoiceResp;
    }

    public RecognizeIdentityCardResponse recognizeIdentityCard(RecognizeIdentityCardRequest request, com.aliyun.common.models.RuntimeObject runtime) throws Exception {
        return TeaModel.toModel(this._request("RecognizeIdentityCard", "HTTPS", "POST", TeaModel.buildMap(request), runtime), new RecognizeIdentityCardResponse());
    }

    public RecognizeIdentityCardResponse recognizeIdentityCardAdvance(RecognizeIdentityCardAdvanceRequest request, com.aliyun.common.models.RuntimeObject runtime) throws Exception {
        com.aliyun.openplatform.models.Config authConfig = com.aliyun.openplatform.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", _getAccessKeyId()),
            new TeaPair("accessKeySecret", _getAccessKeySecret()),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", "openplatform.aliyuncs.com"),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.Client authClient = new com.aliyun.openplatform.Client(authConfig);
        com.aliyun.openplatform.models.AuthorizeFileUploadRequest authRequest = com.aliyun.openplatform.models.AuthorizeFileUploadRequest.build(TeaConverter.buildMap(
            new TeaPair("product", "ocr"),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.models.AuthorizeFileUploadResponse authResponse = authClient.authorizeFileUpload(authRequest, runtime);
        com.aliyun.oss.models.Config ossConfig = com.aliyun.oss.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("accessKeySecret", _getAccessKeySecret()),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", com.aliyun.common.Common.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, _endpointType)),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.oss.Client ossClient = new com.aliyun.oss.Client(ossConfig);
        String str = com.aliyun.common.Common.readAsString(request.imageURLObject);
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeaderFile fileObj = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeaderFile.build(TeaConverter.buildMap(
            new TeaPair("fileName", authResponse.objectKey),
            new TeaPair("content", str),
            new TeaPair("contentType", "")
        ));
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader ossHeader = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("policy", authResponse.encodedPolicy),
            new TeaPair("signature", authResponse.signature),
            new TeaPair("key", authResponse.objectKey),
            new TeaPair("file", fileObj),
            new TeaPair("successActionStatus", "201")
        ));
        com.aliyun.oss.models.PostObjectRequest uploadRequest = com.aliyun.oss.models.PostObjectRequest.build(TeaConverter.buildMap(
            new TeaPair("bucketName", authResponse.bucket),
            new TeaPair("header", ossHeader)
        ));
        ossClient.postObject(uploadRequest, runtime);
        RecognizeIdentityCardRequest recognizeIdentityCardreq = new RecognizeIdentityCardRequest();
        com.aliyun.common.Common.convert(request, recognizeIdentityCardreq);
        recognizeIdentityCardreq.imageURL = "http://" + authResponse.bucket + "." + authResponse.endpoint + "/" + authResponse.objectKey + "";
        RecognizeIdentityCardResponse recognizeIdentityCardResp = this.recognizeIdentityCard(recognizeIdentityCardreq, runtime);
        return recognizeIdentityCardResp;
    }

    public RecognizeBusinessCardResponse recognizeBusinessCard(RecognizeBusinessCardRequest request, com.aliyun.common.models.RuntimeObject runtime) throws Exception {
        return TeaModel.toModel(this._request("RecognizeBusinessCard", "HTTPS", "POST", TeaModel.buildMap(request), runtime), new RecognizeBusinessCardResponse());
    }

    public RecognizeBusinessCardResponse recognizeBusinessCardAdvance(RecognizeBusinessCardAdvanceRequest request, com.aliyun.common.models.RuntimeObject runtime) throws Exception {
        com.aliyun.openplatform.models.Config authConfig = com.aliyun.openplatform.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", _getAccessKeyId()),
            new TeaPair("accessKeySecret", _getAccessKeySecret()),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", "openplatform.aliyuncs.com"),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.Client authClient = new com.aliyun.openplatform.Client(authConfig);
        com.aliyun.openplatform.models.AuthorizeFileUploadRequest authRequest = com.aliyun.openplatform.models.AuthorizeFileUploadRequest.build(TeaConverter.buildMap(
            new TeaPair("product", "ocr"),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.models.AuthorizeFileUploadResponse authResponse = authClient.authorizeFileUpload(authRequest, runtime);
        com.aliyun.oss.models.Config ossConfig = com.aliyun.oss.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("accessKeySecret", _getAccessKeySecret()),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", com.aliyun.common.Common.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, _endpointType)),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.oss.Client ossClient = new com.aliyun.oss.Client(ossConfig);
        String str = com.aliyun.common.Common.readAsString(request.imageURLObject);
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeaderFile fileObj = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeaderFile.build(TeaConverter.buildMap(
            new TeaPair("fileName", authResponse.objectKey),
            new TeaPair("content", str),
            new TeaPair("contentType", "")
        ));
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader ossHeader = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("policy", authResponse.encodedPolicy),
            new TeaPair("signature", authResponse.signature),
            new TeaPair("key", authResponse.objectKey),
            new TeaPair("file", fileObj),
            new TeaPair("successActionStatus", "201")
        ));
        com.aliyun.oss.models.PostObjectRequest uploadRequest = com.aliyun.oss.models.PostObjectRequest.build(TeaConverter.buildMap(
            new TeaPair("bucketName", authResponse.bucket),
            new TeaPair("header", ossHeader)
        ));
        ossClient.postObject(uploadRequest, runtime);
        RecognizeBusinessCardRequest recognizeBusinessCardreq = new RecognizeBusinessCardRequest();
        com.aliyun.common.Common.convert(request, recognizeBusinessCardreq);
        recognizeBusinessCardreq.imageURL = "http://" + authResponse.bucket + "." + authResponse.endpoint + "/" + authResponse.objectKey + "";
        RecognizeBusinessCardResponse recognizeBusinessCardResp = this.recognizeBusinessCard(recognizeBusinessCardreq, runtime);
        return recognizeBusinessCardResp;
    }

    public RecognizeBankCardResponse recognizeBankCard(RecognizeBankCardRequest request, com.aliyun.common.models.RuntimeObject runtime) throws Exception {
        return TeaModel.toModel(this._request("RecognizeBankCard", "HTTPS", "POST", TeaModel.buildMap(request), runtime), new RecognizeBankCardResponse());
    }

    public RecognizeBankCardResponse recognizeBankCardAdvance(RecognizeBankCardAdvanceRequest request, com.aliyun.common.models.RuntimeObject runtime) throws Exception {
        com.aliyun.openplatform.models.Config authConfig = com.aliyun.openplatform.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", _getAccessKeyId()),
            new TeaPair("accessKeySecret", _getAccessKeySecret()),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", "openplatform.aliyuncs.com"),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.Client authClient = new com.aliyun.openplatform.Client(authConfig);
        com.aliyun.openplatform.models.AuthorizeFileUploadRequest authRequest = com.aliyun.openplatform.models.AuthorizeFileUploadRequest.build(TeaConverter.buildMap(
            new TeaPair("product", "ocr"),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.models.AuthorizeFileUploadResponse authResponse = authClient.authorizeFileUpload(authRequest, runtime);
        com.aliyun.oss.models.Config ossConfig = com.aliyun.oss.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("accessKeySecret", _getAccessKeySecret()),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", com.aliyun.common.Common.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, _endpointType)),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.oss.Client ossClient = new com.aliyun.oss.Client(ossConfig);
        String str = com.aliyun.common.Common.readAsString(request.imageURLObject);
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeaderFile fileObj = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeaderFile.build(TeaConverter.buildMap(
            new TeaPair("fileName", authResponse.objectKey),
            new TeaPair("content", str),
            new TeaPair("contentType", "")
        ));
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader ossHeader = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("policy", authResponse.encodedPolicy),
            new TeaPair("signature", authResponse.signature),
            new TeaPair("key", authResponse.objectKey),
            new TeaPair("file", fileObj),
            new TeaPair("successActionStatus", "201")
        ));
        com.aliyun.oss.models.PostObjectRequest uploadRequest = com.aliyun.oss.models.PostObjectRequest.build(TeaConverter.buildMap(
            new TeaPair("bucketName", authResponse.bucket),
            new TeaPair("header", ossHeader)
        ));
        ossClient.postObject(uploadRequest, runtime);
        RecognizeBankCardRequest recognizeBankCardreq = new RecognizeBankCardRequest();
        com.aliyun.common.Common.convert(request, recognizeBankCardreq);
        recognizeBankCardreq.imageURL = "http://" + authResponse.bucket + "." + authResponse.endpoint + "/" + authResponse.objectKey + "";
        RecognizeBankCardResponse recognizeBankCardResp = this.recognizeBankCard(recognizeBankCardreq, runtime);
        return recognizeBankCardResp;
    }

    public RecognizeVINCodeResponse recognizeVINCode(RecognizeVINCodeRequest request, com.aliyun.common.models.RuntimeObject runtime) throws Exception {
        return TeaModel.toModel(this._request("RecognizeVINCode", "HTTPS", "POST", TeaModel.buildMap(request), runtime), new RecognizeVINCodeResponse());
    }

    public RecognizeVINCodeResponse recognizeVINCodeAdvance(RecognizeVINCodeAdvanceRequest request, com.aliyun.common.models.RuntimeObject runtime) throws Exception {
        com.aliyun.openplatform.models.Config authConfig = com.aliyun.openplatform.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", _getAccessKeyId()),
            new TeaPair("accessKeySecret", _getAccessKeySecret()),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", "openplatform.aliyuncs.com"),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.Client authClient = new com.aliyun.openplatform.Client(authConfig);
        com.aliyun.openplatform.models.AuthorizeFileUploadRequest authRequest = com.aliyun.openplatform.models.AuthorizeFileUploadRequest.build(TeaConverter.buildMap(
            new TeaPair("product", "ocr"),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.models.AuthorizeFileUploadResponse authResponse = authClient.authorizeFileUpload(authRequest, runtime);
        com.aliyun.oss.models.Config ossConfig = com.aliyun.oss.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("accessKeySecret", _getAccessKeySecret()),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", com.aliyun.common.Common.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, _endpointType)),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.oss.Client ossClient = new com.aliyun.oss.Client(ossConfig);
        String str = com.aliyun.common.Common.readAsString(request.imageURLObject);
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeaderFile fileObj = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeaderFile.build(TeaConverter.buildMap(
            new TeaPair("fileName", authResponse.objectKey),
            new TeaPair("content", str),
            new TeaPair("contentType", "")
        ));
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader ossHeader = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("policy", authResponse.encodedPolicy),
            new TeaPair("signature", authResponse.signature),
            new TeaPair("key", authResponse.objectKey),
            new TeaPair("file", fileObj),
            new TeaPair("successActionStatus", "201")
        ));
        com.aliyun.oss.models.PostObjectRequest uploadRequest = com.aliyun.oss.models.PostObjectRequest.build(TeaConverter.buildMap(
            new TeaPair("bucketName", authResponse.bucket),
            new TeaPair("header", ossHeader)
        ));
        ossClient.postObject(uploadRequest, runtime);
        RecognizeVINCodeRequest recognizeVINCodereq = new RecognizeVINCodeRequest();
        com.aliyun.common.Common.convert(request, recognizeVINCodereq);
        recognizeVINCodereq.imageURL = "http://" + authResponse.bucket + "." + authResponse.endpoint + "/" + authResponse.objectKey + "";
        RecognizeVINCodeResponse recognizeVINCodeResp = this.recognizeVINCode(recognizeVINCodereq, runtime);
        return recognizeVINCodeResp;
    }

    public RecognizeBusinessLicenseResponse recognizeBusinessLicense(RecognizeBusinessLicenseRequest request, com.aliyun.common.models.RuntimeObject runtime) throws Exception {
        return TeaModel.toModel(this._request("RecognizeBusinessLicense", "HTTPS", "POST", TeaModel.buildMap(request), runtime), new RecognizeBusinessLicenseResponse());
    }

    public RecognizeBusinessLicenseResponse recognizeBusinessLicenseAdvance(RecognizeBusinessLicenseAdvanceRequest request, com.aliyun.common.models.RuntimeObject runtime) throws Exception {
        com.aliyun.openplatform.models.Config authConfig = com.aliyun.openplatform.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", _getAccessKeyId()),
            new TeaPair("accessKeySecret", _getAccessKeySecret()),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", "openplatform.aliyuncs.com"),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.Client authClient = new com.aliyun.openplatform.Client(authConfig);
        com.aliyun.openplatform.models.AuthorizeFileUploadRequest authRequest = com.aliyun.openplatform.models.AuthorizeFileUploadRequest.build(TeaConverter.buildMap(
            new TeaPair("product", "ocr"),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.models.AuthorizeFileUploadResponse authResponse = authClient.authorizeFileUpload(authRequest, runtime);
        com.aliyun.oss.models.Config ossConfig = com.aliyun.oss.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("accessKeySecret", _getAccessKeySecret()),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", com.aliyun.common.Common.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, _endpointType)),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.oss.Client ossClient = new com.aliyun.oss.Client(ossConfig);
        String str = com.aliyun.common.Common.readAsString(request.imageURLObject);
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeaderFile fileObj = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeaderFile.build(TeaConverter.buildMap(
            new TeaPair("fileName", authResponse.objectKey),
            new TeaPair("content", str),
            new TeaPair("contentType", "")
        ));
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader ossHeader = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("policy", authResponse.encodedPolicy),
            new TeaPair("signature", authResponse.signature),
            new TeaPair("key", authResponse.objectKey),
            new TeaPair("file", fileObj),
            new TeaPair("successActionStatus", "201")
        ));
        com.aliyun.oss.models.PostObjectRequest uploadRequest = com.aliyun.oss.models.PostObjectRequest.build(TeaConverter.buildMap(
            new TeaPair("bucketName", authResponse.bucket),
            new TeaPair("header", ossHeader)
        ));
        ossClient.postObject(uploadRequest, runtime);
        RecognizeBusinessLicenseRequest recognizeBusinessLicensereq = new RecognizeBusinessLicenseRequest();
        com.aliyun.common.Common.convert(request, recognizeBusinessLicensereq);
        recognizeBusinessLicensereq.imageURL = "http://" + authResponse.bucket + "." + authResponse.endpoint + "/" + authResponse.objectKey + "";
        RecognizeBusinessLicenseResponse recognizeBusinessLicenseResp = this.recognizeBusinessLicense(recognizeBusinessLicensereq, runtime);
        return recognizeBusinessLicenseResp;
    }

    public RecognizeTrainTicketResponse recognizeTrainTicket(RecognizeTrainTicketRequest request, com.aliyun.common.models.RuntimeObject runtime) throws Exception {
        return TeaModel.toModel(this._request("RecognizeTrainTicket", "HTTPS", "POST", TeaModel.buildMap(request), runtime), new RecognizeTrainTicketResponse());
    }

    public RecognizeTrainTicketResponse recognizeTrainTicketAdvance(RecognizeTrainTicketAdvanceRequest request, com.aliyun.common.models.RuntimeObject runtime) throws Exception {
        com.aliyun.openplatform.models.Config authConfig = com.aliyun.openplatform.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", _getAccessKeyId()),
            new TeaPair("accessKeySecret", _getAccessKeySecret()),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", "openplatform.aliyuncs.com"),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.Client authClient = new com.aliyun.openplatform.Client(authConfig);
        com.aliyun.openplatform.models.AuthorizeFileUploadRequest authRequest = com.aliyun.openplatform.models.AuthorizeFileUploadRequest.build(TeaConverter.buildMap(
            new TeaPair("product", "ocr"),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.models.AuthorizeFileUploadResponse authResponse = authClient.authorizeFileUpload(authRequest, runtime);
        com.aliyun.oss.models.Config ossConfig = com.aliyun.oss.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("accessKeySecret", _getAccessKeySecret()),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", com.aliyun.common.Common.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, _endpointType)),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.oss.Client ossClient = new com.aliyun.oss.Client(ossConfig);
        String str = com.aliyun.common.Common.readAsString(request.imageURLObject);
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeaderFile fileObj = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeaderFile.build(TeaConverter.buildMap(
            new TeaPair("fileName", authResponse.objectKey),
            new TeaPair("content", str),
            new TeaPair("contentType", "")
        ));
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader ossHeader = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("policy", authResponse.encodedPolicy),
            new TeaPair("signature", authResponse.signature),
            new TeaPair("key", authResponse.objectKey),
            new TeaPair("file", fileObj),
            new TeaPair("successActionStatus", "201")
        ));
        com.aliyun.oss.models.PostObjectRequest uploadRequest = com.aliyun.oss.models.PostObjectRequest.build(TeaConverter.buildMap(
            new TeaPair("bucketName", authResponse.bucket),
            new TeaPair("header", ossHeader)
        ));
        ossClient.postObject(uploadRequest, runtime);
        RecognizeTrainTicketRequest recognizeTrainTicketreq = new RecognizeTrainTicketRequest();
        com.aliyun.common.Common.convert(request, recognizeTrainTicketreq);
        recognizeTrainTicketreq.imageURL = "http://" + authResponse.bucket + "." + authResponse.endpoint + "/" + authResponse.objectKey + "";
        RecognizeTrainTicketResponse recognizeTrainTicketResp = this.recognizeTrainTicket(recognizeTrainTicketreq, runtime);
        return recognizeTrainTicketResp;
    }

    public RecognizeDrivingLicenseResponse recognizeDrivingLicense(RecognizeDrivingLicenseRequest request, com.aliyun.common.models.RuntimeObject runtime) throws Exception {
        return TeaModel.toModel(this._request("RecognizeDrivingLicense", "HTTPS", "POST", TeaModel.buildMap(request), runtime), new RecognizeDrivingLicenseResponse());
    }

    public RecognizeDrivingLicenseResponse recognizeDrivingLicenseAdvance(RecognizeDrivingLicenseAdvanceRequest request, com.aliyun.common.models.RuntimeObject runtime) throws Exception {
        com.aliyun.openplatform.models.Config authConfig = com.aliyun.openplatform.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", _getAccessKeyId()),
            new TeaPair("accessKeySecret", _getAccessKeySecret()),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", "openplatform.aliyuncs.com"),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.Client authClient = new com.aliyun.openplatform.Client(authConfig);
        com.aliyun.openplatform.models.AuthorizeFileUploadRequest authRequest = com.aliyun.openplatform.models.AuthorizeFileUploadRequest.build(TeaConverter.buildMap(
            new TeaPair("product", "ocr"),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.openplatform.models.AuthorizeFileUploadResponse authResponse = authClient.authorizeFileUpload(authRequest, runtime);
        com.aliyun.oss.models.Config ossConfig = com.aliyun.oss.models.Config.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("accessKeySecret", _getAccessKeySecret()),
            new TeaPair("type", "access_key"),
            new TeaPair("endpoint", com.aliyun.common.Common.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, _endpointType)),
            new TeaPair("protocol", _protocol),
            new TeaPair("regionId", _regionId)
        ));
        com.aliyun.oss.Client ossClient = new com.aliyun.oss.Client(ossConfig);
        String str = com.aliyun.common.Common.readAsString(request.imageURLObject);
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeaderFile fileObj = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeaderFile.build(TeaConverter.buildMap(
            new TeaPair("fileName", authResponse.objectKey),
            new TeaPair("content", str),
            new TeaPair("contentType", "")
        ));
        com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader ossHeader = com.aliyun.oss.models.PostObjectRequest.PostObjectRequestHeader.build(TeaConverter.buildMap(
            new TeaPair("accessKeyId", authResponse.accessKeyId),
            new TeaPair("policy", authResponse.encodedPolicy),
            new TeaPair("signature", authResponse.signature),
            new TeaPair("key", authResponse.objectKey),
            new TeaPair("file", fileObj),
            new TeaPair("successActionStatus", "201")
        ));
        com.aliyun.oss.models.PostObjectRequest uploadRequest = com.aliyun.oss.models.PostObjectRequest.build(TeaConverter.buildMap(
            new TeaPair("bucketName", authResponse.bucket),
            new TeaPair("header", ossHeader)
        ));
        ossClient.postObject(uploadRequest, runtime);
        RecognizeDrivingLicenseRequest recognizeDrivingLicensereq = new RecognizeDrivingLicenseRequest();
        com.aliyun.common.Common.convert(request, recognizeDrivingLicensereq);
        recognizeDrivingLicensereq.imageURL = "http://" + authResponse.bucket + "." + authResponse.endpoint + "/" + authResponse.objectKey + "";
        RecognizeDrivingLicenseResponse recognizeDrivingLicenseResp = this.recognizeDrivingLicense(recognizeDrivingLicensereq, runtime);
        return recognizeDrivingLicenseResp;
    }
}
