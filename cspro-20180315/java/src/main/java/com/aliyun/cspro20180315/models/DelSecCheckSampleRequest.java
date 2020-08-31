// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cspro20180315.models;

import com.aliyun.tea.*;

public class DelSecCheckSampleRequest extends TeaModel {
    @NameInMap("LibId")
    @Validation(required = true)
    public Long libId;

    @NameInMap("Type")
    @Validation(required = true)
    public String type;

    @NameInMap("SampleId")
    @Validation(required = true)
    public java.util.List<Long> sampleId;

    public static DelSecCheckSampleRequest build(java.util.Map<String, ?> map) throws Exception {
        DelSecCheckSampleRequest self = new DelSecCheckSampleRequest();
        return TeaModel.build(map, self);
    }

    public DelSecCheckSampleRequest setLibId(Long libId) {
        this.libId = libId;
        return this;
    }
    public Long getLibId() {
        return this.libId;
    }

    public DelSecCheckSampleRequest setType(String type) {
        this.type = type;
        return this;
    }
    public String getType() {
        return this.type;
    }

    public DelSecCheckSampleRequest setSampleId(java.util.List<Long> sampleId) {
        this.sampleId = sampleId;
        return this;
    }
    public java.util.List<Long> getSampleId() {
        return this.sampleId;
    }

}
