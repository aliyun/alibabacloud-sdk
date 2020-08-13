// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Imageprocess20200320.Models
{
    public class DetectKneeXRayResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public DetectKneeXRayResponseData Data { get; set; }
        public class DetectKneeXRayResponseData : TeaModel {
            [NameInMap("KLDetections")]
            [Validation(Required=true)]
            public List<DetectKneeXRayResponseDataKLDetections> KLDetections { get; set; }
            public class DetectKneeXRayResponseDataKLDetections : TeaModel {
                    public List<string> Detections { get; set; }
            }
        };

    }

}
