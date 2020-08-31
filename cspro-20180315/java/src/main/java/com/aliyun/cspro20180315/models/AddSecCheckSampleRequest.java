// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cspro20180315.models;

import com.aliyun.tea.*;

public class AddSecCheckSampleRequest extends TeaModel {
    @NameInMap("Type")
    @Validation(required = true)
    public String type;

    @NameInMap("LibId")
    @Validation(required = true)
    public Long libId;

    @NameInMap("Content")
    @Validation(required = true)
    public java.util.List<String> content;

    public static AddSecCheckSampleRequest build(java.util.Map<String, ?> map) throws Exception {
        AddSecCheckSampleRequest self = new AddSecCheckSampleRequest();
        return TeaModel.build(map, self);
    }

    public AddSecCheckSampleRequest setType(String type) {
        this.type = type;
        return this;
    }
    public String getType() {
        return this.type;
    }

    public AddSecCheckSampleRequest setLibId(Long libId) {
        this.libId = libId;
        return this;
    }
    public Long getLibId() {
        return this.libId;
    }

    public AddSecCheckSampleRequest setContent(java.util.List<String> content) {
        this.content = content;
        return this;
    }
    public java.util.List<String> getContent() {
        return this.content;
    }

}
