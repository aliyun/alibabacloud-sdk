// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ROS20190910.Models
{
    public class ListStackOperationRisksRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("StackId")]
        [Validation(Required=true)]
        public string StackId { get; set; }

        [NameInMap("OperationType")]
        [Validation(Required=false)]
        public string OperationType { get; set; }

        [NameInMap("ClientToken")]
        [Validation(Required=false)]
        public string ClientToken { get; set; }

        [NameInMap("RamRoleName")]
        [Validation(Required=false)]
        public string RamRoleName { get; set; }

        [NameInMap("RetainAllResources")]
        [Validation(Required=false)]
        public bool? RetainAllResources { get; set; }

        [NameInMap("RetainResources")]
        [Validation(Required=false)]
        public List<string> RetainResources { get; set; }

    }

}
