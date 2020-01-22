// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.ocr.models;

import com.aliyun.tea.*;

public class RecognizeLicensePlateRequest extends TeaModel {
    @NameInMap("ImageType")
    public Integer imageType;

    @NameInMap("ImageURL")
    @Validation(required = true)
    public String imageURL;

    public static RecognizeLicensePlateRequest build(java.util.Map<String, ?> map) throws Exception {
        RecognizeLicensePlateRequest self = new RecognizeLicensePlateRequest();
        return TeaModel.build(map, self);
    }

}
