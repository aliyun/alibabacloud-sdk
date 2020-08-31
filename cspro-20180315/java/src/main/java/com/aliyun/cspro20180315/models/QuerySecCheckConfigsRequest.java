// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cspro20180315.models;

import com.aliyun.tea.*;

public class QuerySecCheckConfigsRequest extends TeaModel {
    @NameInMap("ConfType")
    @Validation(required = true)
    public String confType;

    @NameInMap("CheckTarget")
    public String checkTarget;

    @NameInMap("CurrentPage")
    @Validation(required = true)
    public Integer currentPage;

    @NameInMap("PageSize")
    @Validation(required = true)
    public Integer pageSize;

    public static QuerySecCheckConfigsRequest build(java.util.Map<String, ?> map) throws Exception {
        QuerySecCheckConfigsRequest self = new QuerySecCheckConfigsRequest();
        return TeaModel.build(map, self);
    }

    public QuerySecCheckConfigsRequest setConfType(String confType) {
        this.confType = confType;
        return this;
    }
    public String getConfType() {
        return this.confType;
    }

    public QuerySecCheckConfigsRequest setCheckTarget(String checkTarget) {
        this.checkTarget = checkTarget;
        return this;
    }
    public String getCheckTarget() {
        return this.checkTarget;
    }

    public QuerySecCheckConfigsRequest setCurrentPage(Integer currentPage) {
        this.currentPage = currentPage;
        return this;
    }
    public Integer getCurrentPage() {
        return this.currentPage;
    }

    public QuerySecCheckConfigsRequest setPageSize(Integer pageSize) {
        this.pageSize = pageSize;
        return this;
    }
    public Integer getPageSize() {
        return this.pageSize;
    }

}
