// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cspro20180315.models;

import com.aliyun.tea.*;

public class GetSiteCheckResultDetailResponse extends TeaModel {
    @NameInMap("Success")
    @Validation(required = true)
    public Boolean success;

    @NameInMap("Code")
    @Validation(required = true)
    public String code;

    @NameInMap("Message")
    @Validation(required = true)
    public String message;

    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("Data")
    @Validation(required = true)
    public GetSiteCheckResultDetailResponseData data;

    public static GetSiteCheckResultDetailResponse build(java.util.Map<String, ?> map) throws Exception {
        GetSiteCheckResultDetailResponse self = new GetSiteCheckResultDetailResponse();
        return TeaModel.build(map, self);
    }

    public GetSiteCheckResultDetailResponse setSuccess(Boolean success) {
        this.success = success;
        return this;
    }
    public Boolean getSuccess() {
        return this.success;
    }

    public GetSiteCheckResultDetailResponse setCode(String code) {
        this.code = code;
        return this;
    }
    public String getCode() {
        return this.code;
    }

    public GetSiteCheckResultDetailResponse setMessage(String message) {
        this.message = message;
        return this;
    }
    public String getMessage() {
        return this.message;
    }

    public GetSiteCheckResultDetailResponse setRequestId(String requestId) {
        this.requestId = requestId;
        return this;
    }
    public String getRequestId() {
        return this.requestId;
    }

    public GetSiteCheckResultDetailResponse setData(GetSiteCheckResultDetailResponseData data) {
        this.data = data;
        return this;
    }
    public GetSiteCheckResultDetailResponseData getData() {
        return this.data;
    }

    public static class GetSiteCheckResultDetailResponseDataUrls extends TeaModel {
        // Urls
        @NameInMap("Urls")
        @Validation(required = true)
        public java.util.List<String> urls;

        public static GetSiteCheckResultDetailResponseDataUrls build(java.util.Map<String, ?> map) throws Exception {
            GetSiteCheckResultDetailResponseDataUrls self = new GetSiteCheckResultDetailResponseDataUrls();
            return TeaModel.build(map, self);
        }

        public GetSiteCheckResultDetailResponseDataUrls setUrls(java.util.List<String> urls) {
            this.urls = urls;
            return this;
        }
        public java.util.List<String> getUrls() {
            return this.urls;
        }

    }

    public static class GetSiteCheckResultDetailResponseData extends TeaModel {
        @NameInMap("ResultId")
        @Validation(required = true)
        public Long resultId;

        @NameInMap("Keywords")
        @Validation(required = true)
        public String keywords;

        @NameInMap("Content")
        @Validation(required = true)
        public String content;

        @NameInMap("Urls")
        @Validation(required = true)
        public GetSiteCheckResultDetailResponseDataUrls urls;

        public static GetSiteCheckResultDetailResponseData build(java.util.Map<String, ?> map) throws Exception {
            GetSiteCheckResultDetailResponseData self = new GetSiteCheckResultDetailResponseData();
            return TeaModel.build(map, self);
        }

        public GetSiteCheckResultDetailResponseData setResultId(Long resultId) {
            this.resultId = resultId;
            return this;
        }
        public Long getResultId() {
            return this.resultId;
        }

        public GetSiteCheckResultDetailResponseData setKeywords(String keywords) {
            this.keywords = keywords;
            return this;
        }
        public String getKeywords() {
            return this.keywords;
        }

        public GetSiteCheckResultDetailResponseData setContent(String content) {
            this.content = content;
            return this;
        }
        public String getContent() {
            return this.content;
        }

        public GetSiteCheckResultDetailResponseData setUrls(GetSiteCheckResultDetailResponseDataUrls urls) {
            this.urls = urls;
            return this;
        }
        public GetSiteCheckResultDetailResponseDataUrls getUrls() {
            return this.urls;
        }

    }

}
