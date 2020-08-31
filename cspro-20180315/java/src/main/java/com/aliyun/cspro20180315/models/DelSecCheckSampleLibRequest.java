// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cspro20180315.models;

import com.aliyun.tea.*;

public class DelSecCheckSampleLibRequest extends TeaModel {
    @NameInMap("LibId")
    @Validation(required = true)
    public Long libId;

    @NameInMap("Type")
    @Validation(required = true)
    public String type;

    public static DelSecCheckSampleLibRequest build(java.util.Map<String, ?> map) throws Exception {
        DelSecCheckSampleLibRequest self = new DelSecCheckSampleLibRequest();
        return TeaModel.build(map, self);
    }

    public DelSecCheckSampleLibRequest setLibId(Long libId) {
        this.libId = libId;
        return this;
    }
    public Long getLibId() {
        return this.libId;
    }

    public DelSecCheckSampleLibRequest setType(String type) {
        this.type = type;
        return this;
    }
    public String getType() {
        return this.type;
    }

}
