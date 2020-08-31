// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cspro20180315.models;

import com.aliyun.tea.*;

public class InvokeOmniSecCheckImmediatelyRequest extends TeaModel {
    @NameInMap("ConfType")
    @Validation(required = true)
    public String confType;

    @NameInMap("CheckTarget")
    @Validation(required = true)
    public String checkTarget;

    @NameInMap("CheckType")
    @Validation(required = true)
    public String checkType;

    public static InvokeOmniSecCheckImmediatelyRequest build(java.util.Map<String, ?> map) throws Exception {
        InvokeOmniSecCheckImmediatelyRequest self = new InvokeOmniSecCheckImmediatelyRequest();
        return TeaModel.build(map, self);
    }

    public InvokeOmniSecCheckImmediatelyRequest setConfType(String confType) {
        this.confType = confType;
        return this;
    }
    public String getConfType() {
        return this.confType;
    }

    public InvokeOmniSecCheckImmediatelyRequest setCheckTarget(String checkTarget) {
        this.checkTarget = checkTarget;
        return this;
    }
    public String getCheckTarget() {
        return this.checkTarget;
    }

    public InvokeOmniSecCheckImmediatelyRequest setCheckType(String checkType) {
        this.checkType = checkType;
        return this;
    }
    public String getCheckType() {
        return this.checkType;
    }

}
