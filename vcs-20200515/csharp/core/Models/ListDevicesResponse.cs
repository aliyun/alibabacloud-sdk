// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vcs20200515.Models
{
    public class ListDevicesResponse : TeaModel {
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
        public ListDevicesResponseData Data { get; set; }
        public class ListDevicesResponseData : TeaModel {
            [NameInMap("PageNumber")]
            [Validation(Required=true)]
            public int? PageNumber { get; set; }
            [NameInMap("PageSize")]
            [Validation(Required=true)]
            public int? PageSize { get; set; }
            [NameInMap("TotalCount")]
            [Validation(Required=true)]
            public int? TotalCount { get; set; }
            [NameInMap("TotalPage")]
            [Validation(Required=true)]
            public int? TotalPage { get; set; }
            [NameInMap("Records")]
            [Validation(Required=true)]
            public List<ListDevicesResponseDataRecords> Records { get; set; }
            public class ListDevicesResponseDataRecords : TeaModel {
                    public string AccessProtocolType { get; set; }
                    public string BitRate { get; set; }
                    public string CoverImageUrl { get; set; }
                    public string GbId { get; set; }
                    public string DeviceAddress { get; set; }
                    public string DeviceDirection { get; set; }
                    public string DeviceSite { get; set; }
                    public string Latitude { get; set; }
                    public string Longitude { get; set; }
                    public string DeviceName { get; set; }
                    public string Resolution { get; set; }
                    public string SipGBId { get; set; }
                    public string SipPassword { get; set; }
                    public string SipServerIp { get; set; }
                    public string SipServerPort { get; set; }
                    public int? Status { get; set; }
                    public string DeviceType { get; set; }
                    public string Vendor { get; set; }
                    public string CreateTime { get; set; }
            }
        };

    }

}
