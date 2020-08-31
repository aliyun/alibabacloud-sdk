// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cspro20180315.models;

import com.aliyun.tea.*;

public class InvokeHistoryDataCheckRequest extends TeaModel {
    @NameInMap("ConfType")
    @Validation(required = true)
    public String confType;

    @NameInMap("CheckTarget")
    @Validation(required = true)
    public String checkTarget;

    @NameInMap("CheckType")
    @Validation(required = true)
    public String checkType;

    @NameInMap("HistoryStartTime")
    @Validation(required = true)
    public Long historyStartTime;

    @NameInMap("HistoryEndTime")
    @Validation(required = true)
    public Long historyEndTime;

    public static InvokeHistoryDataCheckRequest build(java.util.Map<String, ?> map) throws Exception {
        InvokeHistoryDataCheckRequest self = new InvokeHistoryDataCheckRequest();
        return TeaModel.build(map, self);
    }

    public InvokeHistoryDataCheckRequest setConfType(String confType) {
        this.confType = confType;
        return this;
    }
    public String getConfType() {
        return this.confType;
    }

    public InvokeHistoryDataCheckRequest setCheckTarget(String checkTarget) {
        this.checkTarget = checkTarget;
        return this;
    }
    public String getCheckTarget() {
        return this.checkTarget;
    }

    public InvokeHistoryDataCheckRequest setCheckType(String checkType) {
        this.checkType = checkType;
        return this;
    }
    public String getCheckType() {
        return this.checkType;
    }

    public InvokeHistoryDataCheckRequest setHistoryStartTime(Long historyStartTime) {
        this.historyStartTime = historyStartTime;
        return this;
    }
    public Long getHistoryStartTime() {
        return this.historyStartTime;
    }

    public InvokeHistoryDataCheckRequest setHistoryEndTime(Long historyEndTime) {
        this.historyEndTime = historyEndTime;
        return this;
    }
    public Long getHistoryEndTime() {
        return this.historyEndTime;
    }

}
