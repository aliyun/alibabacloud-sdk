// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.ocr.models;

import com.aliyun.tea.*;

public class RecognizeTrainTicketAdvanceRequest extends TeaModel {
    @NameInMap("ImageURLObject")
    @Validation(required = true)
    public java.io.InputStream imageURLObject;

    @NameInMap("ImageType")
    public Integer imageType;

    public static RecognizeTrainTicketAdvanceRequest build(java.util.Map<String, ?> map) throws Exception {
        RecognizeTrainTicketAdvanceRequest self = new RecognizeTrainTicketAdvanceRequest();
        return TeaModel.build(map, self);
    }

}
