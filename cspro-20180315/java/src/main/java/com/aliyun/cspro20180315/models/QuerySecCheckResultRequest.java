// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cspro20180315.models;

import com.aliyun.tea.*;

public class QuerySecCheckResultRequest extends TeaModel {
    @NameInMap("ConfType")
    @Validation(required = true)
    public String confType;

    @NameInMap("CheckType")
    @Validation(required = true)
    public String checkType;

    @NameInMap("CurrentPage")
    @Validation(required = true)
    public Integer currentPage;

    @NameInMap("PageSize")
    @Validation(required = true)
    public Integer pageSize;

    @NameInMap("CheckTarget")
    @Validation(required = true)
    public String checkTarget;

    @NameInMap("StartDate")
    @Validation(required = true)
    public Long startDate;

    @NameInMap("EndDate")
    @Validation(required = true)
    public Long endDate;

    public static QuerySecCheckResultRequest build(java.util.Map<String, ?> map) throws Exception {
        QuerySecCheckResultRequest self = new QuerySecCheckResultRequest();
        return TeaModel.build(map, self);
    }

    public QuerySecCheckResultRequest setConfType(String confType) {
        this.confType = confType;
        return this;
    }
    public String getConfType() {
        return this.confType;
    }

    public QuerySecCheckResultRequest setCheckType(String checkType) {
        this.checkType = checkType;
        return this;
    }
    public String getCheckType() {
        return this.checkType;
    }

    public QuerySecCheckResultRequest setCurrentPage(Integer currentPage) {
        this.currentPage = currentPage;
        return this;
    }
    public Integer getCurrentPage() {
        return this.currentPage;
    }

    public QuerySecCheckResultRequest setPageSize(Integer pageSize) {
        this.pageSize = pageSize;
        return this;
    }
    public Integer getPageSize() {
        return this.pageSize;
    }

    public QuerySecCheckResultRequest setCheckTarget(String checkTarget) {
        this.checkTarget = checkTarget;
        return this;
    }
    public String getCheckTarget() {
        return this.checkTarget;
    }

    public QuerySecCheckResultRequest setStartDate(Long startDate) {
        this.startDate = startDate;
        return this;
    }
    public Long getStartDate() {
        return this.startDate;
    }

    public QuerySecCheckResultRequest setEndDate(Long endDate) {
        this.endDate = endDate;
        return this;
    }
    public Long getEndDate() {
        return this.endDate;
    }

}
