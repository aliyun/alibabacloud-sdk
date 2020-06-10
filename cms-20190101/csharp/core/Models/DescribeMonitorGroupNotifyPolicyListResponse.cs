// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DescribeMonitorGroupNotifyPolicyListResponse : TeaModel {
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

        [NameInMap("Total")]
        [Validation(Required=true)]
        public int? Total { get; set; }

        [NameInMap("NotifyPolicyList")]
        [Validation(Required=true)]
        public DescribeMonitorGroupNotifyPolicyListResponseNotifyPolicyList NotifyPolicyList { get; set; }
        public class DescribeMonitorGroupNotifyPolicyListResponseNotifyPolicyList : TeaModel {
            [NameInMap("NotifyPolicy")]
            [Validation(Required=true)]
            public List<DescribeMonitorGroupNotifyPolicyListResponseNotifyPolicyListNotifyPolicy> NotifyPolicy { get; set; }
            public class DescribeMonitorGroupNotifyPolicyListResponseNotifyPolicyListNotifyPolicy : TeaModel {
                    public string Type { get; set; }
                    public string Id { get; set; }
                    public long StartTime { get; set; }
                    public long EndTime { get; set; }
                    public string GroupId { get; set; }
            }
        };

    }

}
