// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cspro20180315.models;

import com.aliyun.tea.*;

public class QuerySiteCheckResultRequest extends TeaModel {
    @NameInMap("SiteDomain")
    public String siteDomain;

    @NameInMap("Type")
    public String type;

    @NameInMap("Page")
    public Integer page;

    @NameInMap("PageSize")
    public Integer pageSize;

    @NameInMap("StartDate")
    public Long startDate;

    @NameInMap("EndDate")
    public Long endDate;

    public static QuerySiteCheckResultRequest build(java.util.Map<String, ?> map) throws Exception {
        QuerySiteCheckResultRequest self = new QuerySiteCheckResultRequest();
        return TeaModel.build(map, self);
    }

    public QuerySiteCheckResultRequest setSiteDomain(String siteDomain) {
        this.siteDomain = siteDomain;
        return this;
    }
    public String getSiteDomain() {
        return this.siteDomain;
    }

    public QuerySiteCheckResultRequest setType(String type) {
        this.type = type;
        return this;
    }
    public String getType() {
        return this.type;
    }

    public QuerySiteCheckResultRequest setPage(Integer page) {
        this.page = page;
        return this;
    }
    public Integer getPage() {
        return this.page;
    }

    public QuerySiteCheckResultRequest setPageSize(Integer pageSize) {
        this.pageSize = pageSize;
        return this;
    }
    public Integer getPageSize() {
        return this.pageSize;
    }

    public QuerySiteCheckResultRequest setStartDate(Long startDate) {
        this.startDate = startDate;
        return this;
    }
    public Long getStartDate() {
        return this.startDate;
    }

    public QuerySiteCheckResultRequest setEndDate(Long endDate) {
        this.endDate = endDate;
        return this;
    }
    public Long getEndDate() {
        return this.endDate;
    }

}
