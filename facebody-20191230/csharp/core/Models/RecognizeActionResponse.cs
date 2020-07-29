// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Facebody20191230.Models
{
    public class RecognizeActionResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public RecognizeActionResponseData Data { get; set; }
        public class RecognizeActionResponseData : TeaModel {
            [NameInMap("Elements")]
            [Validation(Required=true)]
            public List<RecognizeActionResponseDataElements> Elements { get; set; }
            public class RecognizeActionResponseDataElements : TeaModel {
                    public int? Timestamp { get; set; }
                    public List<RecognizeActionResponseDataElementsBoxes> Boxes { get; set; }
                    public class RecognizeActionResponseDataElementsBoxes : TeaModel {
                            public List<string> Box { get; set; }
                    }
                    public List<string> Scores { get; set; }
                    public List<string> Labels { get; set; }
            }
        };

    }

}
