// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class ListResourceGroupsResponse : TeaModel {
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
        public List<ListResourceGroupsResponseData> Data { get; set; }
        public class ListResourceGroupsResponseData : TeaModel {
            [NameInMap("Identifier")]
            [Validation(Required=true)]
            public string Identifier { get; set; }

            [NameInMap("Cluster")]
            [Validation(Required=true)]
            public string Cluster { get; set; }

            [NameInMap("BizExtKey")]
            [Validation(Required=true)]
            public string BizExtKey { get; set; }

            [NameInMap("EnableKp")]
            [Validation(Required=true)]
            public bool? EnableKp { get; set; }

            [NameInMap("UpdateTime")]
            [Validation(Required=true)]
            public string UpdateTime { get; set; }

            [NameInMap("ResourceGroupType")]
            [Validation(Required=true)]
            public string ResourceGroupType { get; set; }

            [NameInMap("Mode")]
            [Validation(Required=true)]
            public string Mode { get; set; }

            [NameInMap("Sequence")]
            [Validation(Required=true)]
            public int? Sequence { get; set; }

            [NameInMap("IsDefault")]
            [Validation(Required=true)]
            public bool? IsDefault { get; set; }

            [NameInMap("CreateTime")]
            [Validation(Required=true)]
            public string CreateTime { get; set; }

            [NameInMap("Name")]
            [Validation(Required=true)]
            public string Name { get; set; }

            [NameInMap("TenantId")]
            [Validation(Required=true)]
            public long TenantId { get; set; }

            [NameInMap("Id")]
            [Validation(Required=true)]
            public long Id { get; set; }

            [NameInMap("Status")]
            [Validation(Required=true)]
            public int? Status { get; set; }

            [NameInMap("Specs")]
            [Validation(Required=true)]
            public Dictionary<string, string> Specs { get; set; }

        }

    }

}
