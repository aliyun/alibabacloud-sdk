// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DescribeSiteMonitorQuotaResponse : TeaModel {
        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public string Success { get; set; }

        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public DescribeSiteMonitorQuotaResponseData Data { get; set; }
        public class DescribeSiteMonitorQuotaResponseData : TeaModel {
            [NameInMap("SiteMonitorIdcQuota")]
            [Validation(Required=true)]
            public int? SiteMonitorIdcQuota { get; set; }
            [NameInMap("SiteMonitorOperatorQuotaQuota")]
            [Validation(Required=true)]
            public int? SiteMonitorOperatorQuotaQuota { get; set; }
            [NameInMap("SiteMonitorTaskQuota")]
            [Validation(Required=true)]
            public int? SiteMonitorTaskQuota { get; set; }
            [NameInMap("SiteMonitorQuotaTaskUsed")]
            [Validation(Required=true)]
            public int? SiteMonitorQuotaTaskUsed { get; set; }
            [NameInMap("SiteMonitorVersion")]
            [Validation(Required=true)]
            public string SiteMonitorVersion { get; set; }
        };

    }

}
