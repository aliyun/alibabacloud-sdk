// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cspro20180315.models;

import com.aliyun.tea.*;

public class AddSecCheckSampleLibRequest extends TeaModel {
    @NameInMap("Name")
    @Validation(required = true)
    public String name;

    @NameInMap("Type")
    @Validation(required = true)
    public String type;

    public static AddSecCheckSampleLibRequest build(java.util.Map<String, ?> map) throws Exception {
        AddSecCheckSampleLibRequest self = new AddSecCheckSampleLibRequest();
        return TeaModel.build(map, self);
    }

    public AddSecCheckSampleLibRequest setName(String name) {
        this.name = name;
        return this;
    }
    public String getName() {
        return this.name;
    }

    public AddSecCheckSampleLibRequest setType(String type) {
        this.type = type;
        return this;
    }
    public String getType() {
        return this.type;
    }

}
