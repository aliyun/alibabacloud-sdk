// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.ocr.models;

import com.aliyun.tea.*;

public class RecognizeIdentityCardAdvanceRequest extends TeaModel {
    @NameInMap("ImageURLObject")
    @Validation(required = true)
    public java.io.InputStream imageURLObject;

    @NameInMap("ImageType")
    public Integer imageType;

    @NameInMap("Side")
    @Validation(required = true)
    public String side;

    public static RecognizeIdentityCardAdvanceRequest build(java.util.Map<String, ?> map) throws Exception {
        RecognizeIdentityCardAdvanceRequest self = new RecognizeIdentityCardAdvanceRequest();
        return TeaModel.build(map, self);
    }

}
