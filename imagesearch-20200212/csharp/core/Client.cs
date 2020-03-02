// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections;
using System.Collections.Generic;
using System.IO;
using System.Threading.Tasks;

using Tea;

using AlibabaCloud.RPC;
using AlibabaCloud.ImageSearch.Models;

namespace AlibabaCloud.ImageSearch
{
    public class Client : RPCClient
    {

        public Client(Config config): base(config.ToMap())
        { }

        public Dictionary<string, object> _request(string action, string protocol, string method, Dictionary<string, object> request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            Dictionary<string, object> runtime_ = new Dictionary<string, object>()
            {
                {"timeouted", "retry"},
                {"readTimeout", AlibabaCloud.Commons.Common.DefaultNumber(runtime.ReadTimeout, _readTimeout)},
                {"connectTimeout", AlibabaCloud.Commons.Common.DefaultNumber(runtime.ConnectTimeout, _connectTimeout)},
                {"httpProxy", AlibabaCloud.Commons.Common.Default(runtime.HttpProxy, _httpProxy)},
                {"httpsProxy", AlibabaCloud.Commons.Common.Default(runtime.HttpsProxy, _httpsProxy)},
                {"noProxy", AlibabaCloud.Commons.Common.Default(runtime.NoProxy, _noProxy)},
                {"maxIdleConns", AlibabaCloud.Commons.Common.DefaultNumber(runtime.MaxIdleConns, _maxIdleConns)},
                {"retry", new Dictionary<string, object>()
                {
                    {"retryable", runtime.Autoretry},
                    {"maxAttempts", AlibabaCloud.Commons.Common.DefaultNumber(runtime.MaxAttempts, 3)},
                }},
                {"backoff", new Dictionary<string, object>()
                {
                    {"policy", AlibabaCloud.Commons.Common.Default(runtime.BackoffPolicy, "no")},
                    {"period", AlibabaCloud.Commons.Common.DefaultNumber(runtime.BackoffPeriod, 1)},
                }},
                {"ignoreSSL", runtime.IgnoreSSL},
            };

            TeaRequest _lastRequest = null;
            Exception _lastException = null;
            long _now = System.DateTime.Now.Millisecond;
            int _retryTimes = 0;
            while (TeaCore.AllowRetry((IDictionary) runtime_["retry"], _retryTimes, _now))
            {
                if (_retryTimes > 0)
                {
                    int backoffTime = TeaCore.GetBackoffTime((IDictionary)runtime_["backoff"], _retryTimes);
                    if (backoffTime > 0)
                    {
                        TeaCore.Sleep(backoffTime);
                    }
                }
                _retryTimes = _retryTimes + 1;
                try
                {
                    TeaRequest request_ = new TeaRequest();
                    request_.Protocol = AlibabaCloud.Commons.Common.Default(_protocol, protocol);
                    request_.Method = method;
                    request_.Pathname = "/";
                    request_.Query = AlibabaCloud.Commons.Common.Query(TeaConverter.merge<object>
                    (
                        new Dictionary<string, object>()
                        {
                            {"Action", action},
                            {"Format", "json"},
                            {"RegionId", _regionId},
                            {"Timestamp", AlibabaCloud.Commons.Common.GetTimestamp()},
                            {"Date", AlibabaCloud.Commons.Common.GetTimestamp()},
                            {"Version", "2020-02-12"},
                            {"SignatureMethod", "HMAC-SHA1"},
                            {"SignatureVersion", "1.0"},
                            {"SignatureNonce", AlibabaCloud.Commons.Common.GetNonce()},
                            {"AccessKeyId", _getAccessKeyId()},
                        },
                        request
                    ));
                    request_.Headers = new Dictionary<string, string>()
                    {
                        {"host", AlibabaCloud.Commons.Common.GetHost("ImageSearch", _regionId, _endpoint)},
                        {"user-agent", AlibabaCloud.Commons.Common.GetUserAgent(_userAgent)},
                    };
                    request_.Query["Signature"] = AlibabaCloud.Commons.Common.GetSignature(request_, _getAccessKeySecret());
                    _lastRequest = request_;
                    TeaResponse response_ = TeaCore.DoAction(request_, runtime_);

                    Dictionary<string, object> body = AlibabaCloud.Commons.Common.Json(response_);
                    if (AlibabaCloud.Commons.Common.HasError(body))
                    {
                        throw new TeaException(new Dictionary<string, object>()
                        {
                            {"message", body["Message"]},
                            {"data", body},
                            {"code", body["Code"]},
                        });
                    }
                    return body;
                }
                catch (Exception e)
                {
                    if (TeaCore.IsRetryable(e))
                    {
                        _lastException = e;
                        continue;
                    }
                    throw e;
                }
            }

            throw new TeaUnretryableException(_lastRequest, _lastException);
        }

        public async Task<Dictionary<string, object>> _requestAsync(string action, string protocol, string method, Dictionary<string, object> request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            Dictionary<string, object> runtime_ = new Dictionary<string, object>()
            {
                {"timeouted", "retry"},
                {"readTimeout", AlibabaCloud.Commons.Common.DefaultNumber(runtime.ReadTimeout, _readTimeout)},
                {"connectTimeout", AlibabaCloud.Commons.Common.DefaultNumber(runtime.ConnectTimeout, _connectTimeout)},
                {"httpProxy", AlibabaCloud.Commons.Common.Default(runtime.HttpProxy, _httpProxy)},
                {"httpsProxy", AlibabaCloud.Commons.Common.Default(runtime.HttpsProxy, _httpsProxy)},
                {"noProxy", AlibabaCloud.Commons.Common.Default(runtime.NoProxy, _noProxy)},
                {"maxIdleConns", AlibabaCloud.Commons.Common.DefaultNumber(runtime.MaxIdleConns, _maxIdleConns)},
                {"retry", new Dictionary<string, object>()
                {
                    {"retryable", runtime.Autoretry},
                    {"maxAttempts", AlibabaCloud.Commons.Common.DefaultNumber(runtime.MaxAttempts, 3)},
                }},
                {"backoff", new Dictionary<string, object>()
                {
                    {"policy", AlibabaCloud.Commons.Common.Default(runtime.BackoffPolicy, "no")},
                    {"period", AlibabaCloud.Commons.Common.DefaultNumber(runtime.BackoffPeriod, 1)},
                }},
                {"ignoreSSL", runtime.IgnoreSSL},
            };

            TeaRequest _lastRequest = null;
            Exception _lastException = null;
            long _now = System.DateTime.Now.Millisecond;
            int _retryTimes = 0;
            while (TeaCore.AllowRetry((IDictionary) runtime_["retry"], _retryTimes, _now))
            {
                if (_retryTimes > 0)
                {
                    int backoffTime = TeaCore.GetBackoffTime((IDictionary)runtime_["backoff"], _retryTimes);
                    if (backoffTime > 0)
                    {
                        TeaCore.Sleep(backoffTime);
                    }
                }
                _retryTimes = _retryTimes + 1;
                try
                {
                    TeaRequest request_ = new TeaRequest();
                    request_.Protocol = AlibabaCloud.Commons.Common.Default(_protocol, protocol);
                    request_.Method = method;
                    request_.Pathname = "/";
                    request_.Query = AlibabaCloud.Commons.Common.Query(TeaConverter.merge<object>
                    (
                        new Dictionary<string, object>()
                        {
                            {"Action", action},
                            {"Format", "json"},
                            {"RegionId", _regionId},
                            {"Timestamp", AlibabaCloud.Commons.Common.GetTimestamp()},
                            {"Date", AlibabaCloud.Commons.Common.GetTimestamp()},
                            {"Version", "2020-02-12"},
                            {"SignatureMethod", "HMAC-SHA1"},
                            {"SignatureVersion", "1.0"},
                            {"SignatureNonce", AlibabaCloud.Commons.Common.GetNonce()},
                            {"AccessKeyId", _getAccessKeyId()},
                        },
                        request
                    ));
                    request_.Headers = new Dictionary<string, string>()
                    {
                        {"host", AlibabaCloud.Commons.Common.GetHost("ImageSearch", _regionId, _endpoint)},
                        {"user-agent", AlibabaCloud.Commons.Common.GetUserAgent(_userAgent)},
                    };
                    request_.Query["Signature"] = AlibabaCloud.Commons.Common.GetSignature(request_, _getAccessKeySecret());
                    _lastRequest = request_;
                    TeaResponse response_ = await TeaCore.DoActionAsync(request_, runtime_);

                    Dictionary<string, object> body = AlibabaCloud.Commons.Common.Json(response_);
                    if (AlibabaCloud.Commons.Common.HasError(body))
                    {
                        throw new TeaException(new Dictionary<string, object>()
                        {
                            {"message", body["Message"]},
                            {"data", body},
                            {"code", body["Code"]},
                        });
                    }
                    return body;
                }
                catch (Exception e)
                {
                    if (TeaCore.IsRetryable(e))
                    {
                        _lastException = e;
                        continue;
                    }
                    throw e;
                }
            }

            throw new TeaUnretryableException(_lastRequest, _lastException);
        }

        public SearchImageByNameResponse SearchImageByName(SearchImageByNameRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            return TeaModel.ToObject<SearchImageByNameResponse>(_request("SearchImageByName", "HTTPS", "POST", request.ToMap(), runtime));
        }

        public async Task<SearchImageByNameResponse> SearchImageByNameAsync(SearchImageByNameRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            return TeaModel.ToObject<SearchImageByNameResponse>(await _requestAsync("SearchImageByName", "HTTPS", "POST", request.ToMap(), runtime));
        }

        public SearchImageByPicResponse SearchImageByPic(SearchImageByPicRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            return TeaModel.ToObject<SearchImageByPicResponse>(_request("SearchImageByPic", "HTTPS", "POST", request.ToMap(), runtime));
        }

        public async Task<SearchImageByPicResponse> SearchImageByPicAsync(SearchImageByPicRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            return TeaModel.ToObject<SearchImageByPicResponse>(await _requestAsync("SearchImageByPic", "HTTPS", "POST", request.ToMap(), runtime));
        }

        public SearchImageByPicResponse SearchImageByPicAdvance(SearchImageByPicAdvanceRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            AlibabaCloud.SDK.OpenPlatform.Models.Config authConfig = new AlibabaCloud.SDK.OpenPlatform.Models.Config
            {
                AccessKeyId = _getAccessKeyId(),
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Client authClient = new AlibabaCloud.SDK.OpenPlatform.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest
            {
                Product = "ImageSearch",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = authClient.AuthorizeFileUpload(authRequest, runtime);
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile fileObj = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile
            {
                FileName = authResponse.ObjectKey,
                Content = request.PicContentObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            ossClient.PostObject(uploadRequest, runtime);
            SearchImageByPicRequest searchImageByPicreq = new SearchImageByPicRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, searchImageByPicreq);
            searchImageByPicreq.PicContent = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            SearchImageByPicResponse searchImageByPicResp = SearchImageByPic(searchImageByPicreq, runtime);
            return searchImageByPicResp;
        }

        public async Task<SearchImageByPicResponse> SearchImageByPicAdvanceAsync(SearchImageByPicAdvanceRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            AlibabaCloud.SDK.OpenPlatform.Models.Config authConfig = new AlibabaCloud.SDK.OpenPlatform.Models.Config
            {
                AccessKeyId = _getAccessKeyId(),
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Client authClient = new AlibabaCloud.SDK.OpenPlatform.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest
            {
                Product = "ImageSearch",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = await authClient.AuthorizeFileUploadAsync(authRequest, runtime);
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile fileObj = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile
            {
                FileName = authResponse.ObjectKey,
                Content = request.PicContentObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            await ossClient.PostObjectAsync(uploadRequest, runtime);
            SearchImageByPicRequest searchImageByPicreq = new SearchImageByPicRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, searchImageByPicreq);
            searchImageByPicreq.PicContent = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            SearchImageByPicResponse searchImageByPicResp = await SearchImageByPicAsync(searchImageByPicreq, runtime);
            return searchImageByPicResp;
        }

        public DeleteImageResponse DeleteImage(DeleteImageRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            return TeaModel.ToObject<DeleteImageResponse>(_request("DeleteImage", "HTTPS", "POST", request.ToMap(), runtime));
        }

        public async Task<DeleteImageResponse> DeleteImageAsync(DeleteImageRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            return TeaModel.ToObject<DeleteImageResponse>(await _requestAsync("DeleteImage", "HTTPS", "POST", request.ToMap(), runtime));
        }

        public AddImageResponse AddImage(AddImageRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            return TeaModel.ToObject<AddImageResponse>(_request("AddImage", "HTTPS", "POST", request.ToMap(), runtime));
        }

        public async Task<AddImageResponse> AddImageAsync(AddImageRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            return TeaModel.ToObject<AddImageResponse>(await _requestAsync("AddImage", "HTTPS", "POST", request.ToMap(), runtime));
        }

        public AddImageResponse AddImageAdvance(AddImageAdvanceRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            AlibabaCloud.SDK.OpenPlatform.Models.Config authConfig = new AlibabaCloud.SDK.OpenPlatform.Models.Config
            {
                AccessKeyId = _getAccessKeyId(),
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Client authClient = new AlibabaCloud.SDK.OpenPlatform.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest
            {
                Product = "ImageSearch",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = authClient.AuthorizeFileUpload(authRequest, runtime);
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile fileObj = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile
            {
                FileName = authResponse.ObjectKey,
                Content = request.PicContentObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            ossClient.PostObject(uploadRequest, runtime);
            AddImageRequest addImagereq = new AddImageRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, addImagereq);
            addImagereq.PicContent = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            AddImageResponse addImageResp = AddImage(addImagereq, runtime);
            return addImageResp;
        }

        public async Task<AddImageResponse> AddImageAdvanceAsync(AddImageAdvanceRequest request, AlibabaCloud.Commons.Models.RuntimeObject runtime)
        {
            AlibabaCloud.SDK.OpenPlatform.Models.Config authConfig = new AlibabaCloud.SDK.OpenPlatform.Models.Config
            {
                AccessKeyId = _getAccessKeyId(),
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = "openplatform.aliyuncs.com",
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Client authClient = new AlibabaCloud.SDK.OpenPlatform.Client(authConfig);
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest authRequest = new AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadRequest
            {
                Product = "ImageSearch",
                RegionId = _regionId,
            };
            AlibabaCloud.SDK.OpenPlatform.Models.AuthorizeFileUploadResponse authResponse = await authClient.AuthorizeFileUploadAsync(authRequest, runtime);
            AlibabaCloud.OSS.Models.Config ossConfig = new AlibabaCloud.OSS.Models.Config
            {
                AccessKeyId = authResponse.AccessKeyId,
                AccessKeySecret = _getAccessKeySecret(),
                Type = "access_key",
                Endpoint = AlibabaCloud.Commons.Common.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, _endpointType),
                Protocol = _protocol,
                RegionId = _regionId,
            };
            AlibabaCloud.OSS.Client ossClient = new AlibabaCloud.OSS.Client(ossConfig);
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile fileObj = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader.PostObjectRequestHeaderFile
            {
                FileName = authResponse.ObjectKey,
                Content = request.PicContentObject,
                ContentType = "",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader ossHeader = new AlibabaCloud.OSS.Models.PostObjectRequest.PostObjectRequestHeader
            {
                AccessKeyId = authResponse.AccessKeyId,
                Policy = authResponse.EncodedPolicy,
                Signature = authResponse.Signature,
                Key = authResponse.ObjectKey,
                File = fileObj,
                SuccessActionStatus = "201",
            };
            AlibabaCloud.OSS.Models.PostObjectRequest uploadRequest = new AlibabaCloud.OSS.Models.PostObjectRequest
            {
                BucketName = authResponse.Bucket,
                Header = ossHeader,
            };
            await ossClient.PostObjectAsync(uploadRequest, runtime);
            AddImageRequest addImagereq = new AddImageRequest() { };
            AlibabaCloud.Commons.Common.Convert(request, addImagereq);
            addImagereq.PicContent = "http://" + authResponse.Bucket + "." + authResponse.Endpoint + "/" + authResponse.ObjectKey;
            AddImageResponse addImageResp = await AddImageAsync(addImagereq, runtime);
            return addImageResp;
        }

    }
}
