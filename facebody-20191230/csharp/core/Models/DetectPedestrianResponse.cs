// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Facebody.Models
{
    public class DetectPedestrianResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public DetectPedestrianResponseData Data { get; set; }
        public class DetectPedestrianResponseData : TeaModel {
            [NameInMap("Width")]
            [Validation(Required=true)]
            public int? Width { get; set; }
            [NameInMap("Height")]
            [Validation(Required=true)]
            public int? Height { get; set; }
            [NameInMap("Elements")]
            [Validation(Required=true)]
            public List<DetectPedestrianResponseDataElements> Elements { get; set; }
            public class DetectPedestrianResponseDataElements : TeaModel {
                    public float? Score { get; set; }
                    public string Type { get; set; }
                    public List<string> Boxes { get; set; }
            }
        };

    }

}
