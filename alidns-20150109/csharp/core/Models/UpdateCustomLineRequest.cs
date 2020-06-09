// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class UpdateCustomLineRequest : TeaModel {
        [NameInMap("Lang")]
        [Validation(Required=false)]
        public string Lang { get; set; }

        [NameInMap("LineName")]
        [Validation(Required=false)]
        public string LineName { get; set; }

        [NameInMap("IpSegment")]
        [Validation(Required=false)]
        public List<UpdateCustomLineRequestIpSegment> IpSegment { get; set; }
        public class UpdateCustomLineRequestIpSegment : TeaModel {
            [NameInMap("StartIp")]
            [Validation(Required=false)]
            public string StartIp { get; set; }

            [NameInMap("EndIp")]
            [Validation(Required=false)]
            public string EndIp { get; set; }

        }

        [NameInMap("LineId")]
        [Validation(Required=true)]
        public long LineId { get; set; }

    }

}
