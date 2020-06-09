// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class AddCustomLineRequest : TeaModel {
        [NameInMap("Lang")]
        [Validation(Required=false)]
        public string Lang { get; set; }

        [NameInMap("DomainName")]
        [Validation(Required=true)]
        public string DomainName { get; set; }

        [NameInMap("LineName")]
        [Validation(Required=true)]
        public string LineName { get; set; }

        [NameInMap("IpSegment")]
        [Validation(Required=true)]
        public List<AddCustomLineRequestIpSegment> IpSegment { get; set; }
        public class AddCustomLineRequestIpSegment : TeaModel {
            [NameInMap("StartIp")]
            [Validation(Required=false)]
            public string StartIp { get; set; }

            [NameInMap("EndIp")]
            [Validation(Required=false)]
            public string EndIp { get; set; }

        }

    }

}
