// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ROS20190910.Models
{
    public class GetTemplateSummaryResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Description")]
        [Validation(Required=true)]
        public string Description { get; set; }

        [NameInMap("Metadata")]
        [Validation(Required=true)]
        public Dictionary<string, string> Metadata { get; set; }

        [NameInMap("Version")]
        [Validation(Required=true)]
        public string Version { get; set; }

        [NameInMap("ResourceIdentifierSummaries")]
        [Validation(Required=true)]
        public List<GetTemplateSummaryResponseResourceIdentifierSummaries> ResourceIdentifierSummaries { get; set; }
        public class GetTemplateSummaryResponseResourceIdentifierSummaries : TeaModel {
            [NameInMap("ResourceType")]
            [Validation(Required=true)]
            public string ResourceType { get; set; }

            [NameInMap("LogicalResourceIds")]
            [Validation(Required=true)]
            public List<string> LogicalResourceIds { get; set; }

            [NameInMap("ResourceIdentifiers")]
            [Validation(Required=true)]
            public List<string> ResourceIdentifiers { get; set; }

        }

        [NameInMap("Parameters")]
        [Validation(Required=true)]
        public List<Dictionary<string, object>> Parameters { get; set; }

        [NameInMap("ResourceTypes")]
        [Validation(Required=true)]
        public List<string> ResourceTypes { get; set; }

    }

}
