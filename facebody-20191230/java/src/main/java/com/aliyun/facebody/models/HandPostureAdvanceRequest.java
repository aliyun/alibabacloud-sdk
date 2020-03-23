// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody.models;

import com.aliyun.tea.*;

public class HandPostureAdvanceRequest extends TeaModel {
    @NameInMap("ImageURLObject")
    @Validation(required = true)
    public java.io.InputStream imageURLObject;

    public static HandPostureAdvanceRequest build(java.util.Map<String, ?> map) throws Exception {
        HandPostureAdvanceRequest self = new HandPostureAdvanceRequest();
        return TeaModel.build(map, self);
    }

}
