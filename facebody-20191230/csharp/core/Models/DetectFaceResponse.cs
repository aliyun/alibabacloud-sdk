// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Facebody.Models
{
    public class DetectFaceResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public DetectFaceResponseData Data { get; set; }
        public class DetectFaceResponseData : TeaModel {
            [NameInMap("FaceCount")]
            [Validation(Required=true)]
            public int? FaceCount { get; set; }
            [NameInMap("LandmarkCount")]
            [Validation(Required=true)]
            public int? LandmarkCount { get; set; }
        };

    }

}
