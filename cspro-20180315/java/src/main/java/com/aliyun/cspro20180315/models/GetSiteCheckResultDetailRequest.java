// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cspro20180315.models;

import com.aliyun.tea.*;

public class GetSiteCheckResultDetailRequest extends TeaModel {
    @NameInMap("ResultId")
    @Validation(required = true)
    public Long resultId;

    @NameInMap("RiskType")
    @Validation(required = true)
    public String riskType;

    @NameInMap("Type")
    @Validation(required = true)
    public String type;

    public static GetSiteCheckResultDetailRequest build(java.util.Map<String, ?> map) throws Exception {
        GetSiteCheckResultDetailRequest self = new GetSiteCheckResultDetailRequest();
        return TeaModel.build(map, self);
    }

    public GetSiteCheckResultDetailRequest setResultId(Long resultId) {
        this.resultId = resultId;
        return this;
    }
    public Long getResultId() {
        return this.resultId;
    }

    public GetSiteCheckResultDetailRequest setRiskType(String riskType) {
        this.riskType = riskType;
        return this;
    }
    public String getRiskType() {
        return this.riskType;
    }

    public GetSiteCheckResultDetailRequest setType(String type) {
        this.type = type;
        return this;
    }
    public String getType() {
        return this.type;
    }

}
