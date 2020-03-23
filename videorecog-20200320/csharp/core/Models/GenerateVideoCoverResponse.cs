// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Videorecog.Models
{
    public class GenerateVideoCoverResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public GenerateVideoCoverResponseData Data { get; set; }
        public class GenerateVideoCoverResponseData : TeaModel {
            [NameInMap("Outputs")]
            [Validation(Required=true)]
            public List<GenerateVideoCoverResponseDataOutputs> Outputs { get; set; }
            public class GenerateVideoCoverResponseDataOutputs : TeaModel {
                    public string ImageURL { get; set; }
                    public float? Confidence { get; set; }
                    public float? Time { get; set; }
                    public float? FaceCount { get; set; }
                    public float? StartTime { get; set; }
                    public float? EndTime { get; set; }
            }
        };

    }

}
