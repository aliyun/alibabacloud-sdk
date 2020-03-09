// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Imagerecog.Models
{
    public class DetectImageElementsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public DetectImageElementsResponseData Data { get; set; }
        public class DetectImageElementsResponseData : TeaModel {
            [NameInMap("Elements")]
            [Validation(Required=true)]
            public List<DetectImageElementsResponseDataElements> Elements { get; set; }
            public class DetectImageElementsResponseDataElements : TeaModel {
                    public string Type { get; set; }
                    public int? X { get; set; }
                    public int? Y { get; set; }
                    public int? Width { get; set; }
                    public int? Height { get; set; }
                    public float? Score { get; set; }
            }
        };

    }

}
