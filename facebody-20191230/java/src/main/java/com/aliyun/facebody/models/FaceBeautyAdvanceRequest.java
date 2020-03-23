// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody.models;

import com.aliyun.tea.*;

public class FaceBeautyAdvanceRequest extends TeaModel {
    @NameInMap("ImageURLObject")
    @Validation(required = true)
    public java.io.InputStream imageURLObject;

    @NameInMap("Sharp")
    @Validation(required = true)
    public Double sharp;

    @NameInMap("Smooth")
    @Validation(required = true)
    public Double smooth;

    @NameInMap("White")
    @Validation(required = true)
    public Double white;

    public static FaceBeautyAdvanceRequest build(java.util.Map<String, ?> map) throws Exception {
        FaceBeautyAdvanceRequest self = new FaceBeautyAdvanceRequest();
        return TeaModel.build(map, self);
    }

}
