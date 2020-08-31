// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cspro20180315.models;

import com.aliyun.tea.*;

public class GetSecCheckResultDetailResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("Success")
    @Validation(required = true)
    public Boolean success;

    @NameInMap("Code")
    @Validation(required = true)
    public String code;

    @NameInMap("Message")
    @Validation(required = true)
    public String message;

    @NameInMap("Data")
    @Validation(required = true)
    public GetSecCheckResultDetailResponseData data;

    public static GetSecCheckResultDetailResponse build(java.util.Map<String, ?> map) throws Exception {
        GetSecCheckResultDetailResponse self = new GetSecCheckResultDetailResponse();
        return TeaModel.build(map, self);
    }

    public GetSecCheckResultDetailResponse setRequestId(String requestId) {
        this.requestId = requestId;
        return this;
    }
    public String getRequestId() {
        return this.requestId;
    }

    public GetSecCheckResultDetailResponse setSuccess(Boolean success) {
        this.success = success;
        return this;
    }
    public Boolean getSuccess() {
        return this.success;
    }

    public GetSecCheckResultDetailResponse setCode(String code) {
        this.code = code;
        return this;
    }
    public String getCode() {
        return this.code;
    }

    public GetSecCheckResultDetailResponse setMessage(String message) {
        this.message = message;
        return this;
    }
    public String getMessage() {
        return this.message;
    }

    public GetSecCheckResultDetailResponse setData(GetSecCheckResultDetailResponseData data) {
        this.data = data;
        return this;
    }
    public GetSecCheckResultDetailResponseData getData() {
        return this.data;
    }

    public static class GetSecCheckResultDetailResponseDataList extends TeaModel {
        @NameInMap("Id")
        @Validation(required = true)
        public Long id;

        @NameInMap("ResultId")
        @Validation(required = true)
        public Long resultId;

        @NameInMap("Keywords")
        @Validation(required = true)
        public String keywords;

        @NameInMap("Content")
        @Validation(required = true)
        public String content;

        @NameInMap("PicUrl")
        @Validation(required = true)
        public String picUrl;

        @NameInMap("SnapshotKey")
        @Validation(required = true)
        public String snapshotKey;

        @NameInMap("Extra")
        @Validation(required = true)
        public String extra;

        @NameInMap("RiskType")
        @Validation(required = true)
        public String riskType;

        public static GetSecCheckResultDetailResponseDataList build(java.util.Map<String, ?> map) throws Exception {
            GetSecCheckResultDetailResponseDataList self = new GetSecCheckResultDetailResponseDataList();
            return TeaModel.build(map, self);
        }

        public GetSecCheckResultDetailResponseDataList setId(Long id) {
            this.id = id;
            return this;
        }
        public Long getId() {
            return this.id;
        }

        public GetSecCheckResultDetailResponseDataList setResultId(Long resultId) {
            this.resultId = resultId;
            return this;
        }
        public Long getResultId() {
            return this.resultId;
        }

        public GetSecCheckResultDetailResponseDataList setKeywords(String keywords) {
            this.keywords = keywords;
            return this;
        }
        public String getKeywords() {
            return this.keywords;
        }

        public GetSecCheckResultDetailResponseDataList setContent(String content) {
            this.content = content;
            return this;
        }
        public String getContent() {
            return this.content;
        }

        public GetSecCheckResultDetailResponseDataList setPicUrl(String picUrl) {
            this.picUrl = picUrl;
            return this;
        }
        public String getPicUrl() {
            return this.picUrl;
        }

        public GetSecCheckResultDetailResponseDataList setSnapshotKey(String snapshotKey) {
            this.snapshotKey = snapshotKey;
            return this;
        }
        public String getSnapshotKey() {
            return this.snapshotKey;
        }

        public GetSecCheckResultDetailResponseDataList setExtra(String extra) {
            this.extra = extra;
            return this;
        }
        public String getExtra() {
            return this.extra;
        }

        public GetSecCheckResultDetailResponseDataList setRiskType(String riskType) {
            this.riskType = riskType;
            return this;
        }
        public String getRiskType() {
            return this.riskType;
        }

    }

    public static class GetSecCheckResultDetailResponseDataPageInfo extends TeaModel {
        @NameInMap("CurrentPage")
        @Validation(required = true)
        public Integer currentPage;

        @NameInMap("PageSize")
        @Validation(required = true)
        public Integer pageSize;

        @NameInMap("Total")
        @Validation(required = true)
        public Integer total;

        public static GetSecCheckResultDetailResponseDataPageInfo build(java.util.Map<String, ?> map) throws Exception {
            GetSecCheckResultDetailResponseDataPageInfo self = new GetSecCheckResultDetailResponseDataPageInfo();
            return TeaModel.build(map, self);
        }

        public GetSecCheckResultDetailResponseDataPageInfo setCurrentPage(Integer currentPage) {
            this.currentPage = currentPage;
            return this;
        }
        public Integer getCurrentPage() {
            return this.currentPage;
        }

        public GetSecCheckResultDetailResponseDataPageInfo setPageSize(Integer pageSize) {
            this.pageSize = pageSize;
            return this;
        }
        public Integer getPageSize() {
            return this.pageSize;
        }

        public GetSecCheckResultDetailResponseDataPageInfo setTotal(Integer total) {
            this.total = total;
            return this;
        }
        public Integer getTotal() {
            return this.total;
        }

    }

    public static class GetSecCheckResultDetailResponseData extends TeaModel {
        @NameInMap("List")
        @Validation(required = true)
        public java.util.List<GetSecCheckResultDetailResponseDataList> list;

        @NameInMap("PageInfo")
        @Validation(required = true)
        public GetSecCheckResultDetailResponseDataPageInfo pageInfo;

        public static GetSecCheckResultDetailResponseData build(java.util.Map<String, ?> map) throws Exception {
            GetSecCheckResultDetailResponseData self = new GetSecCheckResultDetailResponseData();
            return TeaModel.build(map, self);
        }

        public GetSecCheckResultDetailResponseData setList(java.util.List<GetSecCheckResultDetailResponseDataList> list) {
            this.list = list;
            return this;
        }
        public java.util.List<GetSecCheckResultDetailResponseDataList> getList() {
            return this.list;
        }

        public GetSecCheckResultDetailResponseData setPageInfo(GetSecCheckResultDetailResponseDataPageInfo pageInfo) {
            this.pageInfo = pageInfo;
            return this;
        }
        public GetSecCheckResultDetailResponseDataPageInfo getPageInfo() {
            return this.pageInfo;
        }

    }

}
