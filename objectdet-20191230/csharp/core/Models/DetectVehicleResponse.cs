// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Objectdet.Models
{
    public class DetectVehicleResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public DetectVehicleResponseData Data { get; set; }
        public class DetectVehicleResponseData : TeaModel {
            [NameInMap("Width")]
            [Validation(Required=true)]
            public int? Width { get; set; }
            [NameInMap("Height")]
            [Validation(Required=true)]
            public int? Height { get; set; }
            [NameInMap("DetectObjectInfoList")]
            [Validation(Required=true)]
            public List<DetectVehicleResponseDataDetectObjectInfoList> DetectObjectInfoList { get; set; }
            public class DetectVehicleResponseDataDetectObjectInfoList : TeaModel {
                    public float Score { get; set; }
                    public string Type { get; set; }
                    public int? Id { get; set; }
            }
        };

    }

}
