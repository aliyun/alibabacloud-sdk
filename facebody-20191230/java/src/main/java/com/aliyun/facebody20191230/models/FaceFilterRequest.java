// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody20191230.models;

import com.aliyun.tea.*;

public class FaceFilterRequest extends TeaModel {
    @NameInMap("ImageURL")
    @Validation(required = true)
    public String imageURL;

    @NameInMap("ResourceType")
    @Validation(required = true)
    public String resourceType;

    @NameInMap("Strength")
    @Validation(required = true)
    public Double strength;

    public static FaceFilterRequest build(java.util.Map<String, ?> map) throws Exception {
        FaceFilterRequest self = new FaceFilterRequest();
        return TeaModel.build(map, self);
    }

}
