// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody.models;

import com.aliyun.tea.*;

public class DetectBodyCountAdvanceRequest extends TeaModel {
    @NameInMap("ImageURLObject")
    @Validation(required = true)
    public java.io.InputStream imageURLObject;

    public static DetectBodyCountAdvanceRequest build(java.util.Map<String, ?> map) throws Exception {
        DetectBodyCountAdvanceRequest self = new DetectBodyCountAdvanceRequest();
        return TeaModel.build(map, self);
    }

}
