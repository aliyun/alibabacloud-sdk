// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Facebody20191230.Models
{
    public class DetectIPCPedestrianResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public DetectIPCPedestrianResponseData Data { get; set; }
        public class DetectIPCPedestrianResponseData : TeaModel {
            [NameInMap("ImageInfoList")]
            [Validation(Required=true)]
            public List<DetectIPCPedestrianResponseDataImageInfoList> ImageInfoList { get; set; }
            public class DetectIPCPedestrianResponseDataImageInfoList : TeaModel {
                    public string ErrorCode { get; set; }
                    public string ErrorMessage { get; set; }
                    public string DataId { get; set; }
                    public List<DetectIPCPedestrianResponseDataImageInfoListElements> Elements { get; set; }
                    public class DetectIPCPedestrianResponseDataImageInfoListElements : TeaModel {
                            public float? Score { get; set; }
                            public List<string> Boxes { get; set; }
                    }
            }
        };

    }

}
