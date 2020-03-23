// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody.models;

import com.aliyun.tea.*;

public class FaceFilterAdvanceRequest extends TeaModel {
    @NameInMap("ImageURLObject")
    @Validation(required = true)
    public java.io.InputStream imageURLObject;

    @NameInMap("ResourceType")
    @Validation(required = true)
    public String resourceType;

    @NameInMap("Strength")
    @Validation(required = true)
    public Double strength;

    public static FaceFilterAdvanceRequest build(java.util.Map<String, ?> map) throws Exception {
        FaceFilterAdvanceRequest self = new FaceFilterAdvanceRequest();
        return TeaModel.build(map, self);
    }

}
