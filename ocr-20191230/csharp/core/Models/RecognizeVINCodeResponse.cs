// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Ocr.Models
{
    public class RecognizeVINCodeResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public RecognizeVINCodeResponseData Data { get; set; }
        public class RecognizeVINCodeResponseData : TeaModel {
            [NameInMap("VinCode")]
            [Validation(Required=true)]
            public string VinCode { get; set; }
        };

    }

}
