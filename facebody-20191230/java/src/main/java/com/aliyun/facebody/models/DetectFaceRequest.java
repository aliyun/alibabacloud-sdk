// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody.models;

import com.aliyun.tea.*;

public class DetectFaceRequest extends TeaModel {
    @NameInMap("ImageType")
    public Integer imageType;

    @NameInMap("ImageURL")
    @Validation(required = true)
    public String imageURL;

    public static DetectFaceRequest build(java.util.Map<String, ?> map) throws Exception {
        DetectFaceRequest self = new DetectFaceRequest();
        return TeaModel.build(map, self);
    }

}
