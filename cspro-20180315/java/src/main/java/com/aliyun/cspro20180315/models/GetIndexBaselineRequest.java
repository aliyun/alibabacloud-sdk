// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cspro20180315.models;

import com.aliyun.tea.*;

public class GetIndexBaselineRequest extends TeaModel {
    @NameInMap("Id")
    @Validation(required = true)
    public Long id;

    public static GetIndexBaselineRequest build(java.util.Map<String, ?> map) throws Exception {
        GetIndexBaselineRequest self = new GetIndexBaselineRequest();
        return TeaModel.build(map, self);
    }

    public GetIndexBaselineRequest setId(Long id) {
        this.id = id;
        return this;
    }
    public Long getId() {
        return this.id;
    }

}
