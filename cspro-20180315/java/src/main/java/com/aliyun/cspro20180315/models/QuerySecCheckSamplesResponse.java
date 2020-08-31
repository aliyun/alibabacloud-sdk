// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cspro20180315.models;

import com.aliyun.tea.*;

public class QuerySecCheckSamplesResponse extends TeaModel {
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
    public QuerySecCheckSamplesResponseData data;

    public static QuerySecCheckSamplesResponse build(java.util.Map<String, ?> map) throws Exception {
        QuerySecCheckSamplesResponse self = new QuerySecCheckSamplesResponse();
        return TeaModel.build(map, self);
    }

    public QuerySecCheckSamplesResponse setRequestId(String requestId) {
        this.requestId = requestId;
        return this;
    }
    public String getRequestId() {
        return this.requestId;
    }

    public QuerySecCheckSamplesResponse setSuccess(Boolean success) {
        this.success = success;
        return this;
    }
    public Boolean getSuccess() {
        return this.success;
    }

    public QuerySecCheckSamplesResponse setCode(String code) {
        this.code = code;
        return this;
    }
    public String getCode() {
        return this.code;
    }

    public QuerySecCheckSamplesResponse setMessage(String message) {
        this.message = message;
        return this;
    }
    public String getMessage() {
        return this.message;
    }

    public QuerySecCheckSamplesResponse setData(QuerySecCheckSamplesResponseData data) {
        this.data = data;
        return this;
    }
    public QuerySecCheckSamplesResponseData getData() {
        return this.data;
    }

    public static class QuerySecCheckSamplesResponseDataList extends TeaModel {
        @NameInMap("Id")
        @Validation(required = true)
        public Long id;

        @NameInMap("Sample")
        @Validation(required = true)
        public String sample;

        @NameInMap("CreateTime")
        @Validation(required = true)
        public Long createTime;

        @NameInMap("Extras")
        @Validation(required = true)
        public String extras;

        public static QuerySecCheckSamplesResponseDataList build(java.util.Map<String, ?> map) throws Exception {
            QuerySecCheckSamplesResponseDataList self = new QuerySecCheckSamplesResponseDataList();
            return TeaModel.build(map, self);
        }

        public QuerySecCheckSamplesResponseDataList setId(Long id) {
            this.id = id;
            return this;
        }
        public Long getId() {
            return this.id;
        }

        public QuerySecCheckSamplesResponseDataList setSample(String sample) {
            this.sample = sample;
            return this;
        }
        public String getSample() {
            return this.sample;
        }

        public QuerySecCheckSamplesResponseDataList setCreateTime(Long createTime) {
            this.createTime = createTime;
            return this;
        }
        public Long getCreateTime() {
            return this.createTime;
        }

        public QuerySecCheckSamplesResponseDataList setExtras(String extras) {
            this.extras = extras;
            return this;
        }
        public String getExtras() {
            return this.extras;
        }

    }

    public static class QuerySecCheckSamplesResponseDataPageInfo extends TeaModel {
        @NameInMap("CurrentPage")
        @Validation(required = true)
        public Integer currentPage;

        @NameInMap("PageSize")
        @Validation(required = true)
        public Integer pageSize;

        @NameInMap("Total")
        @Validation(required = true)
        public Integer total;

        public static QuerySecCheckSamplesResponseDataPageInfo build(java.util.Map<String, ?> map) throws Exception {
            QuerySecCheckSamplesResponseDataPageInfo self = new QuerySecCheckSamplesResponseDataPageInfo();
            return TeaModel.build(map, self);
        }

        public QuerySecCheckSamplesResponseDataPageInfo setCurrentPage(Integer currentPage) {
            this.currentPage = currentPage;
            return this;
        }
        public Integer getCurrentPage() {
            return this.currentPage;
        }

        public QuerySecCheckSamplesResponseDataPageInfo setPageSize(Integer pageSize) {
            this.pageSize = pageSize;
            return this;
        }
        public Integer getPageSize() {
            return this.pageSize;
        }

        public QuerySecCheckSamplesResponseDataPageInfo setTotal(Integer total) {
            this.total = total;
            return this;
        }
        public Integer getTotal() {
            return this.total;
        }

    }

    public static class QuerySecCheckSamplesResponseData extends TeaModel {
        @NameInMap("List")
        @Validation(required = true)
        public java.util.List<QuerySecCheckSamplesResponseDataList> list;

        @NameInMap("PageInfo")
        @Validation(required = true)
        public QuerySecCheckSamplesResponseDataPageInfo pageInfo;

        public static QuerySecCheckSamplesResponseData build(java.util.Map<String, ?> map) throws Exception {
            QuerySecCheckSamplesResponseData self = new QuerySecCheckSamplesResponseData();
            return TeaModel.build(map, self);
        }

        public QuerySecCheckSamplesResponseData setList(java.util.List<QuerySecCheckSamplesResponseDataList> list) {
            this.list = list;
            return this;
        }
        public java.util.List<QuerySecCheckSamplesResponseDataList> getList() {
            return this.list;
        }

        public QuerySecCheckSamplesResponseData setPageInfo(QuerySecCheckSamplesResponseDataPageInfo pageInfo) {
            this.pageInfo = pageInfo;
            return this;
        }
        public QuerySecCheckSamplesResponseDataPageInfo getPageInfo() {
            return this.pageInfo;
        }

    }

}
