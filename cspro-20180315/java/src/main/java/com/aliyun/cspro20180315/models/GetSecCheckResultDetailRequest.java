// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cspro20180315.models;

import com.aliyun.tea.*;

public class GetSecCheckResultDetailRequest extends TeaModel {
    @NameInMap("ResultId")
    @Validation(required = true)
    public Long resultId;

    @NameInMap("RiskType")
    public String riskType;

    @NameInMap("RiskSource")
    @Validation(required = true)
    public String riskSource;

    @NameInMap("CurrentPage")
    @Validation(required = true)
    public Integer currentPage;

    @NameInMap("PageSize")
    @Validation(required = true)
    public Integer pageSize;

    public static GetSecCheckResultDetailRequest build(java.util.Map<String, ?> map) throws Exception {
        GetSecCheckResultDetailRequest self = new GetSecCheckResultDetailRequest();
        return TeaModel.build(map, self);
    }

    public GetSecCheckResultDetailRequest setResultId(Long resultId) {
        this.resultId = resultId;
        return this;
    }
    public Long getResultId() {
        return this.resultId;
    }

    public GetSecCheckResultDetailRequest setRiskType(String riskType) {
        this.riskType = riskType;
        return this;
    }
    public String getRiskType() {
        return this.riskType;
    }

    public GetSecCheckResultDetailRequest setRiskSource(String riskSource) {
        this.riskSource = riskSource;
        return this;
    }
    public String getRiskSource() {
        return this.riskSource;
    }

    public GetSecCheckResultDetailRequest setCurrentPage(Integer currentPage) {
        this.currentPage = currentPage;
        return this;
    }
    public Integer getCurrentPage() {
        return this.currentPage;
    }

    public GetSecCheckResultDetailRequest setPageSize(Integer pageSize) {
        this.pageSize = pageSize;
        return this;
    }
    public Integer getPageSize() {
        return this.pageSize;
    }

}
