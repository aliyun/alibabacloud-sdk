// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cspro20180315.models;

import com.aliyun.tea.*;

public class QuerySecCheckLatestSummaryRequest extends TeaModel {
    @NameInMap("ConfType")
    @Validation(required = true)
    public String confType;

    @NameInMap("CheckType")
    public String checkType;

    @NameInMap("CurrentPage")
    @Validation(required = true)
    public Integer currentPage;

    @NameInMap("PageSize")
    @Validation(required = true)
    public Integer pageSize;

    @NameInMap("CheckTime")
    public String checkTime;

    public static QuerySecCheckLatestSummaryRequest build(java.util.Map<String, ?> map) throws Exception {
        QuerySecCheckLatestSummaryRequest self = new QuerySecCheckLatestSummaryRequest();
        return TeaModel.build(map, self);
    }

    public QuerySecCheckLatestSummaryRequest setConfType(String confType) {
        this.confType = confType;
        return this;
    }
    public String getConfType() {
        return this.confType;
    }

    public QuerySecCheckLatestSummaryRequest setCheckType(String checkType) {
        this.checkType = checkType;
        return this;
    }
    public String getCheckType() {
        return this.checkType;
    }

    public QuerySecCheckLatestSummaryRequest setCurrentPage(Integer currentPage) {
        this.currentPage = currentPage;
        return this;
    }
    public Integer getCurrentPage() {
        return this.currentPage;
    }

    public QuerySecCheckLatestSummaryRequest setPageSize(Integer pageSize) {
        this.pageSize = pageSize;
        return this;
    }
    public Integer getPageSize() {
        return this.pageSize;
    }

    public QuerySecCheckLatestSummaryRequest setCheckTime(String checkTime) {
        this.checkTime = checkTime;
        return this;
    }
    public String getCheckTime() {
        return this.checkTime;
    }

}
