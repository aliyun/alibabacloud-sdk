// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cspro20180315.models;

import com.aliyun.tea.*;

public class QuerySecCheckResultResponse extends TeaModel {
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
    public QuerySecCheckResultResponseData data;

    public static QuerySecCheckResultResponse build(java.util.Map<String, ?> map) throws Exception {
        QuerySecCheckResultResponse self = new QuerySecCheckResultResponse();
        return TeaModel.build(map, self);
    }

    public QuerySecCheckResultResponse setRequestId(String requestId) {
        this.requestId = requestId;
        return this;
    }
    public String getRequestId() {
        return this.requestId;
    }

    public QuerySecCheckResultResponse setSuccess(Boolean success) {
        this.success = success;
        return this;
    }
    public Boolean getSuccess() {
        return this.success;
    }

    public QuerySecCheckResultResponse setCode(String code) {
        this.code = code;
        return this;
    }
    public String getCode() {
        return this.code;
    }

    public QuerySecCheckResultResponse setMessage(String message) {
        this.message = message;
        return this;
    }
    public String getMessage() {
        return this.message;
    }

    public QuerySecCheckResultResponse setData(QuerySecCheckResultResponseData data) {
        this.data = data;
        return this;
    }
    public QuerySecCheckResultResponseData getData() {
        return this.data;
    }

    public static class QuerySecCheckResultResponseDataList extends TeaModel {
        @NameInMap("Id")
        @Validation(required = true)
        public Long id;

        @NameInMap("CheckType")
        @Validation(required = true)
        public String checkType;

        @NameInMap("CheckTarget")
        @Validation(required = true)
        public String checkTarget;

        @NameInMap("CheckTime")
        @Validation(required = true)
        public String checkTime;

        @NameInMap("Url")
        @Validation(required = true)
        public String url;

        @NameInMap("RiskTypes")
        @Validation(required = true)
        public String riskTypes;

        @NameInMap("RiskSources")
        @Validation(required = true)
        public String riskSources;

        @NameInMap("Result")
        @Validation(required = true)
        public String result;

        public static QuerySecCheckResultResponseDataList build(java.util.Map<String, ?> map) throws Exception {
            QuerySecCheckResultResponseDataList self = new QuerySecCheckResultResponseDataList();
            return TeaModel.build(map, self);
        }

        public QuerySecCheckResultResponseDataList setId(Long id) {
            this.id = id;
            return this;
        }
        public Long getId() {
            return this.id;
        }

        public QuerySecCheckResultResponseDataList setCheckType(String checkType) {
            this.checkType = checkType;
            return this;
        }
        public String getCheckType() {
            return this.checkType;
        }

        public QuerySecCheckResultResponseDataList setCheckTarget(String checkTarget) {
            this.checkTarget = checkTarget;
            return this;
        }
        public String getCheckTarget() {
            return this.checkTarget;
        }

        public QuerySecCheckResultResponseDataList setCheckTime(String checkTime) {
            this.checkTime = checkTime;
            return this;
        }
        public String getCheckTime() {
            return this.checkTime;
        }

        public QuerySecCheckResultResponseDataList setUrl(String url) {
            this.url = url;
            return this;
        }
        public String getUrl() {
            return this.url;
        }

        public QuerySecCheckResultResponseDataList setRiskTypes(String riskTypes) {
            this.riskTypes = riskTypes;
            return this;
        }
        public String getRiskTypes() {
            return this.riskTypes;
        }

        public QuerySecCheckResultResponseDataList setRiskSources(String riskSources) {
            this.riskSources = riskSources;
            return this;
        }
        public String getRiskSources() {
            return this.riskSources;
        }

        public QuerySecCheckResultResponseDataList setResult(String result) {
            this.result = result;
            return this;
        }
        public String getResult() {
            return this.result;
        }

    }

    public static class QuerySecCheckResultResponseDataPageInfo extends TeaModel {
        @NameInMap("CurrentPage")
        @Validation(required = true)
        public Integer currentPage;

        @NameInMap("PageSize")
        @Validation(required = true)
        public Integer pageSize;

        @NameInMap("Total")
        @Validation(required = true)
        public Integer total;

        public static QuerySecCheckResultResponseDataPageInfo build(java.util.Map<String, ?> map) throws Exception {
            QuerySecCheckResultResponseDataPageInfo self = new QuerySecCheckResultResponseDataPageInfo();
            return TeaModel.build(map, self);
        }

        public QuerySecCheckResultResponseDataPageInfo setCurrentPage(Integer currentPage) {
            this.currentPage = currentPage;
            return this;
        }
        public Integer getCurrentPage() {
            return this.currentPage;
        }

        public QuerySecCheckResultResponseDataPageInfo setPageSize(Integer pageSize) {
            this.pageSize = pageSize;
            return this;
        }
        public Integer getPageSize() {
            return this.pageSize;
        }

        public QuerySecCheckResultResponseDataPageInfo setTotal(Integer total) {
            this.total = total;
            return this;
        }
        public Integer getTotal() {
            return this.total;
        }

    }

    public static class QuerySecCheckResultResponseData extends TeaModel {
        @NameInMap("List")
        @Validation(required = true)
        public java.util.List<QuerySecCheckResultResponseDataList> list;

        @NameInMap("PageInfo")
        @Validation(required = true)
        public QuerySecCheckResultResponseDataPageInfo pageInfo;

        public static QuerySecCheckResultResponseData build(java.util.Map<String, ?> map) throws Exception {
            QuerySecCheckResultResponseData self = new QuerySecCheckResultResponseData();
            return TeaModel.build(map, self);
        }

        public QuerySecCheckResultResponseData setList(java.util.List<QuerySecCheckResultResponseDataList> list) {
            this.list = list;
            return this;
        }
        public java.util.List<QuerySecCheckResultResponseDataList> getList() {
            return this.list;
        }

        public QuerySecCheckResultResponseData setPageInfo(QuerySecCheckResultResponseDataPageInfo pageInfo) {
            this.pageInfo = pageInfo;
            return this;
        }
        public QuerySecCheckResultResponseDataPageInfo getPageInfo() {
            return this.pageInfo;
        }

    }

}
