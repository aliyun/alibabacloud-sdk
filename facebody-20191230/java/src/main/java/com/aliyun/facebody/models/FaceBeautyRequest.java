// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody.models;

import com.aliyun.tea.*;

public class FaceBeautyRequest extends TeaModel {
    @NameInMap("ImageURL")
    @Validation(required = true)
    public String imageURL;

    @NameInMap("Sharp")
    @Validation(required = true)
    public Double sharp;

    @NameInMap("Smooth")
    @Validation(required = true)
    public Double smooth;

    @NameInMap("White")
    @Validation(required = true)
    public Double white;

    public static FaceBeautyRequest build(java.util.Map<String, ?> map) throws Exception {
        FaceBeautyRequest self = new FaceBeautyRequest();
        return TeaModel.build(map, self);
    }

}
