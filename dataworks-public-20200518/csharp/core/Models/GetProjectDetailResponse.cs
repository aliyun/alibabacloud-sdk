// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class GetProjectDetailResponse : TeaModel {
        [NameInMap("HttpStatusCode")]
        [Validation(Required=true)]
        public int? HttpStatusCode { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public GetProjectDetailResponseData Data { get; set; }
        public class GetProjectDetailResponseData : TeaModel {
            [NameInMap("GmtModified")]
            [Validation(Required=true)]
            public string GmtModified { get; set; }
            [NameInMap("MaxFlowNode")]
            [Validation(Required=true)]
            public int? MaxFlowNode { get; set; }
            [NameInMap("DefaultDiResourceGroupIdentifier")]
            [Validation(Required=true)]
            public string DefaultDiResourceGroupIdentifier { get; set; }
            [NameInMap("Destination")]
            [Validation(Required=true)]
            public int? Destination { get; set; }
            [NameInMap("IsAllowDownload")]
            [Validation(Required=true)]
            public int? IsAllowDownload { get; set; }
            [NameInMap("ProdStorageQuota")]
            [Validation(Required=true)]
            public string ProdStorageQuota { get; set; }
            [NameInMap("SchedulerRetryInterval")]
            [Validation(Required=true)]
            public int? SchedulerRetryInterval { get; set; }
            [NameInMap("ResidentArea")]
            [Validation(Required=true)]
            public string ResidentArea { get; set; }
            [NameInMap("TablePrivacyMode")]
            [Validation(Required=true)]
            public int? TablePrivacyMode { get; set; }
            [NameInMap("ProjectOwnerBaseId")]
            [Validation(Required=true)]
            public string ProjectOwnerBaseId { get; set; }
            [NameInMap("UseProxyOdpsAccount")]
            [Validation(Required=true)]
            public bool? UseProxyOdpsAccount { get; set; }
            [NameInMap("DisableDevelopment")]
            [Validation(Required=true)]
            public bool? DisableDevelopment { get; set; }
            [NameInMap("ProjectMode")]
            [Validation(Required=true)]
            public int? ProjectMode { get; set; }
            [NameInMap("GmtCreate")]
            [Validation(Required=true)]
            public string GmtCreate { get; set; }
            [NameInMap("DevStorageQuota")]
            [Validation(Required=true)]
            public string DevStorageQuota { get; set; }
            [NameInMap("IsDefault")]
            [Validation(Required=true)]
            public int? IsDefault { get; set; }
            [NameInMap("ProtectedMode")]
            [Validation(Required=true)]
            public int? ProtectedMode { get; set; }
            [NameInMap("BaseProject")]
            [Validation(Required=true)]
            public bool? BaseProject { get; set; }
            [NameInMap("TenantId")]
            [Validation(Required=true)]
            public long TenantId { get; set; }
            [NameInMap("ProjectDescription")]
            [Validation(Required=true)]
            public string ProjectDescription { get; set; }
            [NameInMap("Appkey")]
            [Validation(Required=true)]
            public string Appkey { get; set; }
            [NameInMap("SchedulerMaxRetryTimes")]
            [Validation(Required=true)]
            public int? SchedulerMaxRetryTimes { get; set; }
            [NameInMap("ProjectName")]
            [Validation(Required=true)]
            public string ProjectName { get; set; }
            [NameInMap("ProjectIdentifier")]
            [Validation(Required=true)]
            public string ProjectIdentifier { get; set; }
            [NameInMap("ProjectId")]
            [Validation(Required=true)]
            public int? ProjectId { get; set; }
            [NameInMap("Status")]
            [Validation(Required=true)]
            public int? Status { get; set; }
            [NameInMap("DevelopmentType")]
            [Validation(Required=true)]
            public int? DevelopmentType { get; set; }
            [NameInMap("EnvTypes")]
            [Validation(Required=true)]
            public List<string> EnvTypes { get; set; }
        };

    }

}
