// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cspro20180315.models;

import com.aliyun.tea.*;

public class SetIndexBaselineRequest extends TeaModel {
    @NameInMap("Id")
    @Validation(required = true)
    public Long id;

    public static SetIndexBaselineRequest build(java.util.Map<String, ?> map) throws Exception {
        SetIndexBaselineRequest self = new SetIndexBaselineRequest();
        return TeaModel.build(map, self);
    }

    public SetIndexBaselineRequest setId(Long id) {
        this.id = id;
        return this;
    }
    public Long getId() {
        return this.id;
    }

}
