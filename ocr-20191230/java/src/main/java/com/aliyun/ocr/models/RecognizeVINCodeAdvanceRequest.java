// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.ocr.models;

import com.aliyun.tea.*;

public class RecognizeVINCodeAdvanceRequest extends TeaModel {
    @NameInMap("ImageURLObject")
    @Validation(required = true)
    public java.io.InputStream imageURLObject;

    @NameInMap("ImageType")
    public Integer imageType;

    public static RecognizeVINCodeAdvanceRequest build(java.util.Map<String, ?> map) throws Exception {
        RecognizeVINCodeAdvanceRequest self = new RecognizeVINCodeAdvanceRequest();
        return TeaModel.build(map, self);
    }

}
