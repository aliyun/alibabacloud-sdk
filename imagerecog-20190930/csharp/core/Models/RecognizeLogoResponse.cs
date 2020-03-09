// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Imagerecog.Models
{
    public class RecognizeLogoResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public RecognizeLogoResponseData Data { get; set; }
        public class RecognizeLogoResponseData : TeaModel {
            [NameInMap("Elements")]
            [Validation(Required=true)]
            public List<RecognizeLogoResponseDataElements> Elements { get; set; }
            public class RecognizeLogoResponseDataElements : TeaModel {
                    public string TaskId { get; set; }
                    public string ImageURL { get; set; }
                    public List<RecognizeLogoResponseDataElementsResults> Results { get; set; }
                    public class RecognizeLogoResponseDataElementsResults : TeaModel {
                            public string Label { get; set; }
                            public string Suggestion { get; set; }
                            public float? Rate { get; set; }
                            public List<RecognizeLogoResponseDataElementsResultsLogosData> LogosData { get; set; }
                            public class RecognizeLogoResponseDataElementsResultsLogosData : TeaModel {
                                    public string Name { get; set; }
                                    public string Type { get; set; }
                                    public float? X { get; set; }
                                    public float? Y { get; set; }
                                    public float? H { get; set; }
                                    public float? W { get; set; }
                            }
                    }
            }
        };

    }

}
