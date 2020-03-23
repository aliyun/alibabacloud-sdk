// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Ocr.Models
{
    public class RecognizeTakeoutOrderResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public RecognizeTakeoutOrderResponseData Data { get; set; }
        public class RecognizeTakeoutOrderResponseData : TeaModel {
            [NameInMap("Elements")]
            [Validation(Required=true)]
            public List<RecognizeTakeoutOrderResponseDataElements> Elements { get; set; }
            public class RecognizeTakeoutOrderResponseDataElements : TeaModel {
                    public float? Score { get; set; }
                    public string Name { get; set; }
                    public string Value { get; set; }
                    public List<string> Boxes { get; set; }
            }
        };

    }

}
