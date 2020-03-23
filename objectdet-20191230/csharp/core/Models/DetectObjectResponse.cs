// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Objectdet.Models
{
    public class DetectObjectResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public DetectObjectResponseData Data { get; set; }
        public class DetectObjectResponseData : TeaModel {
            [NameInMap("Width")]
            [Validation(Required=true)]
            public int? Width { get; set; }
            [NameInMap("Height")]
            [Validation(Required=true)]
            public int? Height { get; set; }
            [NameInMap("Elements")]
            [Validation(Required=true)]
            public List<DetectObjectResponseDataElements> Elements { get; set; }
            public class DetectObjectResponseDataElements : TeaModel {
                    public float? Score { get; set; }
                    public string Type { get; set; }
                    public List<string> Boxes { get; set; }
            }
        };

    }

}
