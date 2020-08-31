// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cspro20180315.models;

import com.aliyun.tea.*;

public class DelOmniSecCheckConfigRequest extends TeaModel {
    @NameInMap("ConfId")
    @Validation(required = true)
    public Long confId;

    public static DelOmniSecCheckConfigRequest build(java.util.Map<String, ?> map) throws Exception {
        DelOmniSecCheckConfigRequest self = new DelOmniSecCheckConfigRequest();
        return TeaModel.build(map, self);
    }

    public DelOmniSecCheckConfigRequest setConfId(Long confId) {
        this.confId = confId;
        return this;
    }
    public Long getConfId() {
        return this.confId;
    }

}
