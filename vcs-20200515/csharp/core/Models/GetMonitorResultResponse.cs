// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vcs20200515.Models
{
    public class GetMonitorResultResponse : TeaModel {
        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public GetMonitorResultResponseData Data { get; set; }
        public class GetMonitorResultResponseData : TeaModel {
            [NameInMap("MaxId")]
            [Validation(Required=true)]
            public string MaxId { get; set; }
            [NameInMap("Records")]
            [Validation(Required=true)]
            public List<GetMonitorResultResponseDataRecords> Records { get; set; }
            public class GetMonitorResultResponseDataRecords : TeaModel {
                    public string RightBottomY { get; set; }
                    public string RightBottomX { get; set; }
                    public string LeftUpY { get; set; }
                    public string LeftUpX { get; set; }
                    public string GbId { get; set; }
                    public string Score { get; set; }
                    public string PicUrl { get; set; }
                    public string ShotTime { get; set; }
                    public string MonitorPicUrl { get; set; }
            }
        };

    }

}
