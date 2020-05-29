// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Facebody20191230.Models
{
    public class DetectVideoLivingFaceResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public DetectVideoLivingFaceResponseData Data { get; set; }
        public class DetectVideoLivingFaceResponseData : TeaModel {
            [NameInMap("Elements")]
            [Validation(Required=true)]
            public List<DetectVideoLivingFaceResponseDataElements> Elements { get; set; }
            public class DetectVideoLivingFaceResponseDataElements : TeaModel {
                    public float? LiveConfidence { get; set; }
                    public float? FaceConfidence { get; set; }
                    public List<string> Rect { get; set; }
            }
        };

    }

}
