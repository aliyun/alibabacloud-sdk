// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Imageprocess20200320.Models
{
    public class DetectLungNoduleResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public DetectLungNoduleResponseData Data { get; set; }
        public class DetectLungNoduleResponseData : TeaModel {
            [NameInMap("Series")]
            [Validation(Required=true)]
            public List<DetectLungNoduleResponseDataSeries> Series { get; set; }
            public class DetectLungNoduleResponseDataSeries : TeaModel {
                    public string SeriesInstanceUid { get; set; }
                    public List<DetectLungNoduleResponseDataSeriesElements> Elements { get; set; }
                    public class DetectLungNoduleResponseDataSeriesElements : TeaModel {
                            public string Category { get; set; }
                            public float? Confidence { get; set; }
                            public float? Diameter { get; set; }
                            public string Lobe { get; set; }
                            public string Lung { get; set; }
                            public float? X { get; set; }
                            public float? Z { get; set; }
                            public float? Y { get; set; }
                    }
            }
        };

    }

}
