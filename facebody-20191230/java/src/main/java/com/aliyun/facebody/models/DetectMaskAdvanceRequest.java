// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody.models;

import com.aliyun.tea.*;

public class DetectMaskAdvanceRequest extends TeaModel {
    @NameInMap("ImageURLObject")
    @Validation(required = true)
    public java.io.InputStream imageURLObject;

    public static DetectMaskAdvanceRequest build(java.util.Map<String, ?> map) throws Exception {
        DetectMaskAdvanceRequest self = new DetectMaskAdvanceRequest();
        return TeaModel.build(map, self);
    }

}
