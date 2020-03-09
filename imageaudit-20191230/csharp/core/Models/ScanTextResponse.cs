// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Imageaudit.Models
{
    public class ScanTextResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public ScanTextResponseData Data { get; set; }
        public class ScanTextResponseData : TeaModel {
            [NameInMap("Elements")]
            [Validation(Required=true)]
            public List<ScanTextResponseDataElements> Elements { get; set; }
            public class ScanTextResponseDataElements : TeaModel {
                    public string TaskId { get; set; }
                    public List<ScanTextResponseDataElementsResults> Results { get; set; }
                    public class ScanTextResponseDataElementsResults : TeaModel {
                            public string Label { get; set; }
                            public string Suggestion { get; set; }
                            public float? Rate { get; set; }
                            public List<ScanTextResponseDataElementsResultsDetails> Details { get; set; }
                            public class ScanTextResponseDataElementsResultsDetails : TeaModel {
                                    public string Label { get; set; }
                                    public List<ScanTextResponseDataElementsResultsDetailsContexts> Contexts { get; set; }
                                    public class ScanTextResponseDataElementsResultsDetailsContexts : TeaModel {
                                            public string Context { get; set; }
                                    }
                            }
                    }
            }
        };

    }

}
