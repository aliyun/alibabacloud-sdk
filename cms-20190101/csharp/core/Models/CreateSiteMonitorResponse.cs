// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class CreateSiteMonitorResponse : TeaModel {
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

        [NameInMap("AlertRule")]
        [Validation(Required=true)]
        public string AlertRule { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public CreateSiteMonitorResponseData Data { get; set; }
        public class CreateSiteMonitorResponseData : TeaModel {
            [NameInMap("AttachAlertResult")]
            [Validation(Required=true)]
            public CreateSiteMonitorResponseDataAttachAlertResult AttachAlertResult { get; set; }
            public class CreateSiteMonitorResponseDataAttachAlertResult : TeaModel {
                [NameInMap("Contact")]
                [Validation(Required=true)]
                public List<CreateSiteMonitorResponseDataAttachAlertResultContact> Contact { get; set; }
                public class CreateSiteMonitorResponseDataAttachAlertResultContact : TeaModel {
                    [NameInMap("Message")]
                    [Validation(Required=true)]
                    public string Message { get; set; }

                    [NameInMap("RequestId")]
                    [Validation(Required=true)]
                    public string RequestId { get; set; }

                    [NameInMap("Code")]
                    [Validation(Required=true)]
                    public string Code { get; set; }

                    [NameInMap("Success")]
                    [Validation(Required=true)]
                    public string Success { get; set; }

                    [NameInMap("RuleId")]
                    [Validation(Required=true)]
                    public string RuleId { get; set; }

                }

            }
        };

    }

}
