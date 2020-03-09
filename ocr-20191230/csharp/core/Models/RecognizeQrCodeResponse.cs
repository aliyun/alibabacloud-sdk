// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Ocr.Models
{
    public class RecognizeQrCodeResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public RecognizeQrCodeResponseData Data { get; set; }
        public class RecognizeQrCodeResponseData : TeaModel {
            [NameInMap("Elements")]
            [Validation(Required=true)]
            public List<RecognizeQrCodeResponseDataElements> Elements { get; set; }
            public class RecognizeQrCodeResponseDataElements : TeaModel {
                    public string TaskId { get; set; }
                    public string ImageURL { get; set; }
                    public List<RecognizeQrCodeResponseDataElementsResults> Results { get; set; }
                    public class RecognizeQrCodeResponseDataElementsResults : TeaModel {
                            public string Label { get; set; }
                            public string Suggestion { get; set; }
                            public float? Rate { get; set; }
                            public List<RecognizeQrCodeResponseDataElementsResultsQrCodesData> QrCodesData { get; set; }
                            public class RecognizeQrCodeResponseDataElementsResultsQrCodesData : TeaModel {
                                    public string QrCodeData { get; set; }
                            }
                    }
            }
        };

    }

}
