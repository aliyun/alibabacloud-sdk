// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ROS20190910.Models
{
    public class DeleteStackInstancesRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("StackGroupName")]
        [Validation(Required=true)]
        public string StackGroupName { get; set; }

        [NameInMap("AccountIds")]
        [Validation(Required=true)]
        public Dictionary<string, string> AccountIds { get; set; }

        [NameInMap("RegionIds")]
        [Validation(Required=true)]
        public Dictionary<string, string> RegionIds { get; set; }

        [NameInMap("RetainStacks")]
        [Validation(Required=true)]
        public bool? RetainStacks { get; set; }

        [NameInMap("ClientToken")]
        [Validation(Required=false)]
        public string ClientToken { get; set; }

        [NameInMap("OperationDescription")]
        [Validation(Required=false)]
        public string OperationDescription { get; set; }

        [NameInMap("OperationPreferences")]
        [Validation(Required=false)]
        public Dictionary<string, string> OperationPreferences { get; set; }

    }

}
