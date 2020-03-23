// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Videorecog.Models
{
    public class DetectVideoShotResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public DetectVideoShotResponseData Data { get; set; }
        public class DetectVideoShotResponseData : TeaModel {
            [NameInMap("ShotFrameIds")]
            [Validation(Required=true)]
            public List<string> ShotFrameIds { get; set; }
        };

    }

}
